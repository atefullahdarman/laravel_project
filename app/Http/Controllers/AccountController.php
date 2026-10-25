<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    //  * Location of the JSON file used to store accounts.
    private function filePath(): string
    {
        return storage_path('app/accounts.json');
    }

    //  * Read accounts from the JSON file.
    private function readAccounts(): array
    {
        $path = $this->filePath();
        if (!File::exists($path)) {
            File::ensureDirectoryExists(dirname($path));
            File::put(
                $path,
                json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );
        }
        $contents = File::get($path);
        $accounts = json_decode($contents, true);
        return is_array($accounts) ? $accounts : [];
    }

    //  * Save accounts to the JSON file.
    private function saveAccounts(array $accounts): void
    {
        $json = json_encode(
            array_values($accounts),
            JSON_PRETTY_PRINT
                | JSON_UNESCAPED_UNICODE
                | JSON_UNESCAPED_SLASHES
                | JSON_THROW_ON_ERROR
        );
        File::put($this->filePath(), $json);
    }

    //Find an account by its internal ID.    
    private function findAccount(array $accounts, string $id): array
    {
        foreach ($accounts as $account) {
            if ((string) ($account['id'] ?? '') === $id) {
                return $account;
            }
        }
        abort(404, 'Account not found.');
    }

    // Display all accounts.
    public function index()
    {
        $accounts = $this->readAccounts();
        return view('accounts.index', compact('accounts'));
    }

    //  * Show the create-account form.
    public function create()
    {
        return view('accounts.create');
    }

    //  * Store a new account.    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_number' => ['required', 'string', 'max:100'],
            'name'           => ['required', 'string', 'max:255'],
            'email'          => ['nullable', 'email', 'max:255'],
            'balance'        => ['required', 'numeric', 'min:0'],
            'status'         => ['required', 'in:active,inactive'],
        ]);
        $accounts = $this->readAccounts();
        foreach ($accounts as $account) {
            if (
                (string) ($account['account_number'] ?? '')=== (string) $validated['account_number']) 
                {
                return back()->withInput()->withErrors(['account_number' => 'This account number already exists.',]);
            }
        }
        $ids = array_map(
            fn ($account) => (int) ($account['id'] ?? 0),$accounts);
        $nextId = empty($ids) ? 1 : max($ids) + 1;
        $accounts[] = [
            'id'             => $nextId,
            'account_number' => $validated['account_number'],
            'name'           => $validated['name'],
            'email'          => $validated['email'] ?? null,
            'balance'        => (float) $validated['balance'],
            'status'         => $validated['status'],
        ];
        $this->saveAccounts($accounts);
        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }

    //  * Display one account.
    public function show(string $id)
    {
        $account = $this->findAccount($this->readAccounts(), $id);
        return view('accounts.show', compact('account'));
    }

    //  * Show the edit-account form
    public function edit(string $id)
    {
        $account = $this->findAccount($this->readAccounts(), $id);
        return view('accounts.edit', compact('account'));
    }

    //  * Update an existing account
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'account_number' => ['required', 'string', 'max:100'],
            'name'           => ['required', 'string', 'max:255'],
            'email'          => ['nullable', 'email', 'max:255'],
            'balance'        => ['required', 'numeric', 'min:0'],
            'status'         => ['required', 'in:active,inactive'],
        ]);
        $accounts = $this->readAccounts();

        // Return a 404 response if the requested account does not exist.
        $this->findAccount($accounts, $id);
        foreach ($accounts as $account) {
            $isDifferentAccount = (string) ($account['id'] ?? '') !== $id;
            $sameAccountNumber =(string) ($account['account_number'] ?? '')=== (string) $validated['account_number'];
            if ($isDifferentAccount && $sameAccountNumber) {
                return back()->withInput()->withErrors(['account_number' => 'This account number already exists.',]);
            }
        }
        foreach ($accounts as $index => $account) {
            if ((string) ($account['id'] ?? '') === $id) {
                $accounts[$index] = [
                    'id'             => $account['id'],
                    'account_number' => $validated['account_number'],
                    'name'           => $validated['name'],
                    'email'          => $validated['email'] ?? null,
                    'balance'        => (float) $validated['balance'],
                    'status'         => $validated['status'],
                ];
                break;
            }
        }
        $this->saveAccounts($accounts);
        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    //Delete an account.
    public function destroy(string $id)
    {
        $accounts = $this->readAccounts();
        // Return a 404 response if the requested account does not exist.
        $this->findAccount($accounts, $id);
        $filteredAccounts = array_values(
            array_filter(
                $accounts,fn ($account) => (string) ($account['id'] ?? '') !== $id));
        $this->saveAccounts($filteredAccounts);
        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
}
