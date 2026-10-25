<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    
    //  Path to the JSON file.
    private function filePath(): string
    {
        return storage_path('app/customers.json');
    }
 
    //  * Read all customers from the JSON file.
    private function readCustomers(): array
    {
        $path = $this->filePath();
        if (!File::exists($path)) {
            File::ensureDirectoryExists(dirname($path));
            File::put(
                $path,
                json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );
        }
        $customers = json_decode(File::get($path), true);
        return is_array($customers) ? $customers : [];
    }

    //   Save all customers to the JSON file.
    private function saveCustomers(array $customers): void
    {
        $json = json_encode(
            array_values($customers),
            JSON_PRETTY_PRINT
                | JSON_UNESCAPED_UNICODE
                | JSON_UNESCAPED_SLASHES
                | JSON_THROW_ON_ERROR
        );
        File::put($this->filePath(), $json);
    }

    // Find a customer by internal ID or abort with 404.     
    private function findCustomer(array $customers, string $id): array
    {
        foreach ($customers as $customer) {
            if ((string) ($customer['id'] ?? '') === $id) {
                return $customer;
            }
        }
        abort(404, 'Customer not found.');
    }
    
    //  Display all customers.
    public function index()
    {
        $customers = $this->readCustomers();
        return view('customers.index', compact('customers'));
    }

    // Show the form for creating a new customer.
    public function create()
    {
        return view('customers.create');
    }
   
    //Store a newly created customer.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['nullable', 'email', 'max:255'],
            'phone'             => ['required', 'string', 'max:50'],
            'address'           => ['required', 'string', 'max:255'],
            'identity_document' => ['nullable', 'string', 'max:100'],
            'status'            => ['required', 'in:active,inactive'],
        ]);
        $customers = $this->readCustomers();

        // Avoid duplicate email addresses when an email is supplied.
        if (!empty($validated['email'])) {
            foreach ($customers as $customer) {
                if (strtolower((string) ($customer['email'] ?? '')) === strtolower($validated['email']))
            {
                    return back()->withInput()->withErrors(['email' => 'This email address is already registered.',]);
            }
            }
        }
        $ids = array_map(
            fn ($customer) => (int) ($customer['id'] ?? 0),$customers);
        $nextId = empty($ids) ? 1 : max($ids) + 1;
        $customers[] = [
            'id'                => $nextId,
            'name'              => $validated['name'],
            'email'             => $validated['email'] ?? null,
            'phone'             => $validated['phone'],
            'address'           => $validated['address'],
            'identity_document' => $validated['identity_document'] ?? null,
            'status'            => $validated['status'],
        ];
        $this->saveCustomers($customers);
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    // Display a specific customer.
    public function show(string $id)
    {
        $customer = $this->findCustomer($this->readCustomers(), $id);
        return view('customers.show', compact('customer'));
    }

    //  * Show the form for editing a customer.
    public function edit(string $id)
    {
        $customer = $this->findCustomer($this->readCustomers(), $id);
        return view('customers.edit', compact('customer'));
    }

    //  * Update an existing customer.
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'              => ['required', 'string', 'max:255'],
            'email'             => ['nullable', 'email', 'max:255'],
            'phone'             => ['required', 'string', 'max:50'],
            'address'           => ['required', 'string', 'max:255'],
            'identity_document' => ['nullable', 'string', 'max:100'],
            'status'            => ['required', 'in:active,inactive'],
        ]);
        $customers = $this->readCustomers();
        $existingCustomer = $this->findCustomer($customers, $id);
        if (!empty($validated['email'])) {
            foreach ($customers as $customer) {
                $isDifferentCustomer = (string) ($customer['id'] ?? '') !== $id;
                $sameEmail = strtolower((string) ($customer['email'] ?? ''))=== strtolower($validated['email']);
                if ($isDifferentCustomer && $sameEmail) {
                    return back()->withInput()->withErrors(['email' => 'This email address is already registered.',]);
                }
            }
        }
        foreach ($customers as $index => $customer) {
            if ((string) ($customer['id'] ?? '') === $id) {
                $customers[$index] = [
                    'id'                => $existingCustomer['id'],
                    'name'              => $validated['name'],
                    'email'             => $validated['email'] ?? null,
                    'phone'             => $validated['phone'],
                    'address'           => $validated['address'],
                    'identity_document' => $validated['identity_document'] ?? null,
                    'status'            => $validated['status'],
                ];
                break;
            }
        }
        $this->saveCustomers($customers);
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    
    //  * Delete a customer.
    public function destroy(string $id)
    {
        $customers = $this->readCustomers();
        // Return 404 if the requested customer does not exist.
        $this->findCustomer($customers, $id);
        $remainingCustomers = array_values(
            array_filter(
                $customers,fn ($customer) => (string) ($customer['id'] ?? '') !== $id));
        $this->saveCustomers($remainingCustomers);

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
