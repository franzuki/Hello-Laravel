<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('booking.create', function () {
    return view('book')->name('booking');
});

Route::get('/booking/create', [BookController::class, 'create']);
Route::post('/booking/book', [BookController::class, 'book']);

Route::post('/booking/create', [BookController::class, 'create'])->name('booking');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('Customer/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('Customer/add-customer', [CustomerController::class, 'add']);
Route::post('Customer/save-customer', [CustomerController::class, 'save']);
Route::get('Customer/edit-customer/{id}', [CustomerController::class, 'edit']);
Route::post('Customer/update-customer', [CustomerController::class, 'update']);
Route::get('Customer/delete-customer/{id}', [CustomerController::class, 'delete']);

require __DIR__.'/auth.php';
