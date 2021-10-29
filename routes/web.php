<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FixedDepartureController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RefundController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


Route::get('bookings', [BookingController::class, 'index'])->name('bookings')->middleware(['auth']);
Route::get('domestic-fd', [FixedDepartureController::class, 'domestic'])->name('domestic')->middleware(['auth']);
Route::get('international-fd', [FixedDepartureController::class, 'international'])->name('international')->middleware(['auth']);
Route::get('group-fare-request', [FixedDepartureController::class, 'group_fare'])->name('group_fare')->middleware(['auth']);
Route::get('transactions', [TransactionController::class, 'transactions'])->name('transactions')->middleware(['auth']);
Route::get('refunds', [RefundController::class, 'refunds'])->name('refunds')->middleware(['auth']);
Route::post('refunds', [RefundController::class, 'refundRequest'])->name('refund_request')->middleware(['auth']);

Route::get('partner-help', function(){
    return view('partner-help');
})->name('partner-help')->middleware(['auth']);


Route::get('deals', function(){
    return view('deals');
})->name('deals')->middleware(['auth']);

require __DIR__.'/auth.php';

// ----------------------------------------------------------- ADMIN --------------------------------------------------------------

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/add-bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('/admin/manage-bookings', [AdminController::class, 'allBookings'])->name('admin.manage_bookings');
Route::post('/admin/add-bookings', [AdminController::class, 'addBookings'])->name('admin.add_bookings');
Route::get('/admin/add-transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
Route::post('/admin/add-transactions', [AdminController::class, 'addTransactions'])->name('admin.add_transactions');
Route::get('/admin/manage-transactions', [AdminController::class, 'manageTransactions'])->name('admin.manageTransactions');
Route::get('/admin/fixed-departure', [AdminController::class, 'fixed_departure'])->name('admin.fixed_departure');
Route::post('/admin/add-fd', [AdminController::class, 'addFixedDeparture'])->name('admin.add_fixed_departure');
Route::get('/admin/refund-requests', [AdminController::class, 'refundRequest'])->name('admin.refund_request');

// Add show bookings, transactions, fixed departures
