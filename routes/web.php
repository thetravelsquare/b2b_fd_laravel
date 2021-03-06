<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FixedDepartureController;
use App\Http\Controllers\GroupFareController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('partner-help', function(){return view('partner-help');})->name('partner-help')->middleware(['auth']);

Route::get('deals', function(){return view('deals');})->name('deals')->middleware(['auth']);

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('profile')->middleware('auth');

Route::get('bookings', [BookingController::class, 'index'])->name('bookings')->middleware(['auth']);
Route::get('booking-review/b2b fixed {id} departure/{airline}/{flight_no}', [BookingController::class, 'bookingReview'])->name('booking-review')->middleware(['auth']);
Route::post('confirm-booking/{id}', [BookingController::class, 'confirmBooking'])->name('confirm-booking')->middleware(['auth']);

Route::post('payment/{ifd}/{total}', [PaymentController::class, 'payment'])->name('razorpay.payment.store');

Route::get('domestic-fd', [FixedDepartureController::class, 'domestic'])->name('domestic')->middleware(['auth']);
Route::get('international-fd', [FixedDepartureController::class, 'international'])->name('international')->middleware(['auth']);
Route::get('transactions', [TransactionController::class, 'transactions'])->name('transactions')->middleware(['auth']);
Route::get('refunds', [RefundController::class, 'refunds'])->name('refunds')->middleware(['auth']);
Route::post('refunds', [RefundController::class, 'refundRequest'])->name('refund_request')->middleware(['auth']);

Route::get('group-fare-request', [GroupFareController::class, 'index'])->name('group_fare')->middleware(['auth']);
Route::post('add-group-fare-request', [GroupFareController::class, 'store'])->name('add-group_fare')->middleware(['auth']);

require __DIR__.'/auth.php';

// ----------------------------------------------------------- ADMIN --------------------------------------------------------------

Route::get('/autocrat', [AdminController::class, 'index'])->name('admin');
Route::get('/autocrat/add-bookings', [AdminController::class, 'bookings'])->name('admin.bookings')->middleware('auth');
Route::get('/autocrat/manage-bookings', [AdminController::class, 'allBookings'])->name('admin.manage_bookings')->middleware('auth');
Route::post('/autocrat/add-bookings', [AdminController::class, 'addBookings'])->name('admin.add_bookings')->middleware('auth');
Route::get('/autocrat/add-transactions', [AdminController::class, 'transactions'])->name('admin.transactions')->middleware('auth');
Route::post('/autocrat/add-transactions', [AdminController::class, 'addTransactions'])->name('admin.add_transactions')->middleware('auth');
Route::get('/autocrat/manage-transactions', [AdminController::class, 'manageTransactions'])->name('admin.manageTransactions')->middleware('auth');
Route::get('/autocrat/fixed-departure', [AdminController::class, 'fixed_departure'])->name('admin.fixed_departure')->middleware('auth');
Route::get('/autocrat/manage-fd', [AdminController::class, 'manageFd'])->name('admin.managefd')->middleware('auth');
Route::post('/autocrat/add-fd', [AdminController::class, 'addFixedDeparture'])->name('admin.add_fixed_departure')->middleware('auth');
Route::post('/autocrat/edit-fd/{id}', [AdminController::class, 'editFixedDeparture'])->name('admin.edit_fixed_departure')->middleware('auth');
Route::get('/autocrat/refund-requests', [AdminController::class, 'refundRequest'])->name('admin.refund_request')->middleware('auth');
Route::get('/autocrat/group-fare-requests', [GroupFareController::class, 'adminGroupFareRequest'])->name('admin.group_fare-requests')->middleware(['auth']);
Route::post('/autocrat/add-group-fare/{id}', [GroupFareController::class, 'addGroupFareRequest'])->name('admin.add-group-fare')->middleware(['auth']);

Route::get('file-import-export', [FixedDepartureController::class, 'fileImportExport'])->name('bulk-upload');
Route::post('file-import', [FixedDepartureController::class, 'fileImport'])->name('file-import');
// Add show bookings, transactions, fixed departures
