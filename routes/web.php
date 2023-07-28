<?php

use App\Http\Controllers\ListHotalController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[ListHotalController::class,'index']);
Route::post('/',[ListHotalController::class,'index']);
Route::post('/process-cash-payment', [PaymentController::class,'processCashPayment']);
Route::get('/Cron', [ListHotalController::class,'Cron']);

Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'processRegistration']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::delete('/delete-room/{id}', [DashboardController::class, 'deleteRoom'])->name('room.delete');

// // Route::post('/send-otp', 'OtpController@sendOtp');
// Route::post('/verify-otp',[PaymentController::class,'verifyOtp']);
// Route::post('/store-payment-response', [PaymentController::class,'storePaymentResponse']);


