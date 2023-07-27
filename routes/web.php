<?php

use App\Http\Controllers\ListHotalController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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
// // Route::post('/send-otp', 'OtpController@sendOtp');
// Route::post('/verify-otp',[PaymentController::class,'verifyOtp']);
// Route::post('/store-payment-response', [PaymentController::class,'storePaymentResponse']);


