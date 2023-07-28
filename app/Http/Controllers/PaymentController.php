<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\OtpMail;
use App\Models\Room;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function processCashPayment(Request $request)
    {

        if ($request->input('payment_method') == 'online_payment') {
            $payment_id = $request->input('payment_id');
            $booking_status = "confirm";
        } else {
            $payment_id = 0;
            $booking_status = "Not confirm";
        }
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
        $booking->payment_id = $payment_id;
        $booking->booking_status = $booking_status;
        $booking->status = 1;
        if ($booking->save()) {
            // Booking saved successfully

            $paymentMethod = $request->input('payment_method');

            if ($paymentMethod === 'online_payment') {
                // If payment method is online_payment, update the available_count of the room
                $roomCode = $request->input('room_code');
                $room = Room::where('room_code', $roomCode)->first();

                if ($room) {
                    $room->available_count -= 1; // Decrement the available_count by 1
                    if ($room->save()) {
                        Mail::to($request->input('email'))->send(new \App\Mail\RoomConfirmationMail(
                            $request->input('room_code'),
                            $request->input('price'),
                            $request->input('email'),
                            $request->input('name'),
                            $request->input('number'),
                            $request->input('check_in'),
                            $request->input('check_out'),
                            $request->input('payment_method'),
                            $booking_status
                        ));
                    }
                }
                return response()->json(['success' => true, 'message' => 'Payment successful!']);
            } else {
                Mail::to($request->input('email'))->send(new \App\Mail\RoomConfirmationMail(
                    $request->input('room_code'),
                    $request->input('price'),
                    $request->input('email'),
                    $request->input('name'),
                    $request->input('number'),
                    $request->input('check_in'),
                    $request->input('check_out'),
                    $request->input('payment_method'),
                    $booking_status
                ));
            }
        }
    }
}
