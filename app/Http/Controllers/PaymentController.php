<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\OtpMail;


class PaymentController extends Controller
{
    public function processCashPayment(Request $request)
    {
        // dd($request->all());
        $booking = new Booking();
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->number = $request->input('number');
        $booking->price = $request->input('price');
        $booking->check_in = $request->input('check_in');
        $booking->check_out = $request->input('check_out');
        $booking->payment_method = $request->input('payment_method');
        $booking->room_code = $request->input('room_code');
        $booking->status = 1;
        $booking->save();

        // Return a response (optional) if you need to send back data to the frontend
        return response()->json(['success' => true, 'message' => 'Payment successful (Cash)!']);
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $otp = mt_rand(100000, 999999);

        $request->session()->put('otp', $otp);

        Mail::to($request->email)->send(new OtpMail($otp));

        // Return a response indicating success
        return response()->json(['success' => true]);
    }

    public function verifyOtp(Request $request)
    {
        // Validate the OTP and email fields
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        // Get the stored OTP from the session
        $storedOtp = $request->session()->get('otp');

        // Verify if the entered OTP matches the stored OTP
        if ($storedOtp === $request->otp) {
            // OTP is valid, remove it from the session
            $request->session()->forget('otp');

            return response()->json(['success' => true]);
        }

        return response()->json(['error' => 'Invalid OTP'], 422);
    }
}
