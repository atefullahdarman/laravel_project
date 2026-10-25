<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{

    //   Read transactions from JSON file. 
    private function readTransactions(): array
    {
        if (!Storage::disk('local')->exists('transactions.json')) {
            Storage::disk('local')->put('transactions.json',json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        }
        $transactions = json_decode(Storage::disk('local')->get('transactions.json'),true);
        return is_array($transactions) ? $transactions : [];
    }

    //  Save transactions to JSON file.     
    private function saveTransactions(array $transactions): void
    {
        Storage::disk('local')->put('transactions.json',json_encode(array_values($transactions),JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    //  * Find transaction by ID.
    private function findTransaction(array $transactions, string $id): ?array
    {
        foreach ($transactions as $transaction) {
            if ((string) ($transaction['id'] ?? '') === $id) {
                return $transaction;
            }
        }
        return null;
    }

    //   Display all transactions.     
    public function index()
    {
        $transactions = $this->readTransactions();
        return view('transactions.index', compact('transactions'));
    }

    //Show the create transaction form.
    public function create()
    {
        return view('transactions.create');
    }

    //Store a new transaction.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_id' => ['required', 'integer', 'min:1'],
            'account_number' => ['nullable', 'string', 'max:50'],
            'customer_name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:deposit,withdrawal,transfer'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'date' => ['required', 'date'],
            'description' => ['nullable', 'string', 'max:1000'],
        ]);
        $transactions = $this->readTransactions();
        $nextId = empty($transactions)? 1: max(array_map(fn ($transaction) => (int) ($transaction['id'] ?? 0),$transactions)) + 1;
        $transactions[] = [
            'id' => $nextId,
            'transaction_number' => 'TX' . str_pad((string) $nextId,4,'0',STR_PAD_LEFT),
            'account_id' => (int) $validated['account_id'],
            'account_number' => $validated['account_number'] ?? '',
            'customer_name' => $validated['customer_name'],
            'type' => $validated['type'],
            'amount' => (float) $validated['amount'],
            'date' => $validated['date'],
            'description' => $validated['description'] ?? '',
            'status' => 'pending',
        ];
        $this->saveTransactions($transactions);
        return redirect()->route('transactions.index')->with('success', 'معامله په بریالیتوب ثبت شوه.');
    }

    //Display one transaction.     
    public function show(string $id)
    {
        $transactions = $this->readTransactions();
        $transaction = $this->findTransaction($transactions, $id);
        if (!$transaction) {
            abort(404, 'معامله ونه موندل شوه.');
        }
        return view('transactions.show', compact('transaction'));
    }

    //Show the edit transaction form.
    public function edit(string $id)
    {
        $transactions = $this->readTransactions();
        $transaction = $this->findTransaction($transactions, $id);
        if (!$transaction) {
            abort(404, 'معامله ونه موندل شوه.');
        }
        return view('transactions.edit', compact('transaction'));
    }

    //Approve, reject, or update a transaction.
    public function update(Request $request, string $id)
    {
        $transactions = $this->readTransactions();
        $index = null;
        foreach ($transactions as $key => $transaction) {
            if ((string) ($transaction['id'] ?? '') === $id) {
                $index = $key;
                break;
            }
        }
        if ($index === null) {
            abort(404, 'معامله ونه موندل شوه.');
        }
        $action = $request->input('action');
        if ($action === 'approve') {
            if (($transactions[$index]['status'] ?? '') !== 'pending') {
                return redirect()->route('transactions.index')->with('error', 'یوازې ناتکمیل شوې معامله تاییدېدای شي.');
            }
            $transactions[$index]['status'] = 'completed';
        } elseif ($action === 'reject') {
            if (($transactions[$index]['status'] ?? '') !== 'pending') {
                return redirect()->route('transactions.index')->with('error', 'یوازې ناتکمیل شوې معامله لغوه کېدای شي.');
            }
            $transactions[$index]['status'] = 'rejected';
        } else {
            $validated = $request->validate([
                'account_id' => ['required', 'integer', 'min:1'],
                'account_number' => ['nullable', 'string', 'max:50'],
                'customer_name' => ['required', 'string', 'max:255'],
                'type' => ['required', 'in:deposit,withdrawal,transfer'],
                'amount' => ['required', 'numeric', 'gt:0'],
                'date' => ['required', 'date'],
                'description' => ['nullable', 'string', 'max:1000'],
                'status' => ['required', 'in:pending,completed,rejected'],
            ]);

            $transactions[$index] = array_merge(
                $transactions[$index],$validated,['account_id' => (int) $validated['account_id'],'amount' => (float) $validated['amount'],]);
        }
        $this->saveTransactions($transactions);
        return redirect()->route('transactions.index')->with('success', 'د معاملې معلومات تازه شول.');
    }

    //  * Delete a transaction.
    public function destroy(string $id)
    {
        $transactions = $this->readTransactions();
        $exists = false;
        foreach ($transactions as $transaction) {
            if ((string) ($transaction['id'] ?? '') === $id) {
                $exists = true;
                break;
            }
        }
        if (!$exists) {
            abort(404, 'معامله ونه موندل شوه.');
        }
        $transactions = array_values(array_filter(
            $transactions,
            fn ($transaction) =>
                (string) ($transaction['id'] ?? '') !== $id
        ));
        $this->saveTransactions($transactions);
        return redirect()->route('transactions.index')->with('success', 'معامله حذف شوه.');
    }
}