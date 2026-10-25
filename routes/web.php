<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoanController;

// Login
Route::get('/', function () {
    return view('login');
})->name('login');

//  Home / Index
Route::get('/index', function () {
    return view('index');})->name('index');

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/about_me', function () {
    return view('about_me');
})->name('about_me');

Route::get('/contact_as', function () {
    return view('contact_as');
})->name('contact_as');

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/

// Accounts CRUD
Route::resource('accounts', AccountController::class);

// Customers CRUD
Route::resource('customers', CustomerController::class);

// Transactions CRUD
Route::resource('transactions', TransactionController::class);

// Loans CRUD
Route::resource('loans', LoanController::class);
