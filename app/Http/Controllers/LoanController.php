<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoanController extends Controller
{
    /**
     * Read loans from JSON file.
     */
    private function readLoans(): array
    {
        $file = 'loans.json';

        if (!Storage::disk('local')->exists($file)) {
            Storage::disk('local')->put(
                $file,
                json_encode(
                    [],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
                )
            );
        }

        $loans = json_decode(
            Storage::disk('local')->get($file),
            true
        );

        return is_array($loans) ? $loans : [];
    }

    /**
     * Save loans to JSON file.
     */
    private function saveLoans(array $loans): void
    {
        Storage::disk('local')->put(
            'loans.json',
            json_encode(
                array_values($loans),
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            )
        );
    }

    /**
     * Find loan by ID.
     */
    private function findLoan(array $loans, string $id): ?array
    {
        foreach ($loans as $loan) {
            if ((string) ($loan['id'] ?? '') === $id) {
                return $loan;
            }
        }

        return null;
    }

    /**
     * Display all loans.
     */
    public function index()
    {
        $loans = $this->readLoans();

        return view('loans.index', compact('loans'));
    }

    /**
     * Show create loan form.
     */
    public function create()
    {
        return view('loans.create');
    }

    /**
     * Store a new loan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => [
                'required',
                'string',
                'max:255',
            ],

            'amount' => [
                'required',
                'numeric',
                'gt:0',
            ],

            'date' => [
                'required',
                'date',
            ],

            'description' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ]);

        $loans = $this->readLoans();

        $nextId = empty($loans)
            ? 1
            : max(array_map(
                fn ($loan) => (int) ($loan['id'] ?? 0),
                $loans
            )) + 1;

        $loans[] = [
            'id' => $nextId,

            'loan_number' => 'L' . str_pad(
                (string) $nextId,
                4,
                '0',
                STR_PAD_LEFT
            ),

            'customer_name' => $validated['customer_name'],

            'amount' => (float) $validated['amount'],

            'date' => $validated['date'],

            'description' => $validated['description'] ?? '',

            'status' => 'pending',
        ];

        $this->saveLoans($loans);

        return redirect()
            ->route('loans.index')
            ->with('success', 'د پور غوښتنه په بریالیتوب ثبت شوه.');
    }

    /**
     * Display one loan.
     */
    public function show(string $id)
    {
        $loans = $this->readLoans();

        $loan = $this->findLoan($loans, $id);

        if (!$loan) {
            abort(404, 'پور ونه موندل شو.');
        }

        return view('loans.show', compact('loan'));
    }

    /**
     * Show edit form.
     */
    public function edit(string $id)
    {
        $loans = $this->readLoans();

        $loan = $this->findLoan($loans, $id);

        if (!$loan) {
            abort(404, 'پور ونه موندل شو.');
        }

        return view('loans.edit', compact('loan'));
    }

    /**
     * Update loan or approve/reject application.
     */
    public function update(Request $request, string $id)
    {
        $loans = $this->readLoans();
        $index = null;

        foreach ($loans as $key => $loan) {
            if ((string) ($loan['id'] ?? '') === $id) {
                $index = $key;
                break;
            }
        }

        if ($index === null) {
            abort(404, 'پور ونه موندل شو.');
        }

        $action = $request->input('action');

        /*
         * Approve or reject a pending loan.
         */
        if (in_array($action, ['approve', 'reject'], true)) {
            if (($loans[$index]['status'] ?? 'pending') !== 'pending') {
                return redirect()
                    ->route('loans.index')
                    ->with(
                        'error',
                        'یوازې د تایید په انتظار کې پور منل یا رد کېدای شي.'
                    );
            }

            $loans[$index]['status'] = $action === 'approve'
                ? 'approved'
                : 'rejected';

            $this->saveLoans($loans);

            $message = $action === 'approve'
                ? 'پور په بریالیتوب تایید شو.'
                : 'د پور غوښتنه رد شوه.';

            return redirect()
                ->route('loans.index')
                ->with('success', $message);
        }

        /*
         * Update loan details.
         */
        $validated = $request->validate([
            'customer_name' => [
                'required',
                'string',
                'max:255',
            ],

            'amount' => [
                'required',
                'numeric',
                'gt:0',
            ],

            'date' => [
                'required',
                'date',
            ],

            'description' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'status' => [
                'required',
                'in:pending,approved,rejected',
            ],
        ]);

        $loans[$index] = array_merge(
            $loans[$index],
            $validated,
            [
                'amount' => (float) $validated['amount'],
            ]
        );

        $this->saveLoans($loans);

        return redirect()
            ->route('loans.index')
            ->with('success', 'د پور معلومات تازه شول.');
    }

    /**
     * Delete a loan.
     */
    public function destroy(string $id)
    {
        $loans = $this->readLoans();

        $loan = $this->findLoan($loans, $id);

        if (!$loan) {
            abort(404, 'پور ونه موندل شو.');
        }

        $loans = array_values(array_filter(
            $loans,
            fn ($item) =>
                (string) ($item['id'] ?? '') !== $id
        ));

        $this->saveLoans($loans);

        return redirect()
            ->route('loans.index')
            ->with('success', 'پور په بریالیتوب حذف شو.');
    }
}