<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ListHotalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->all()) {
            $roomType = $request->input('roomType');
            $room_details = Room::with('RoomType')
                ->where('room_type_id', $roomType)
                ->whereNot('available_count', 0)
                ->where('status', 1)
                ->get();
        } else {
            $room_details = Room::with('RoomType')->where('status', 1)->get();
        }
        $room_count = Room::count();
        $user_count = Booking::count();

        // dd($room_details);
        return view('index', compact('room_count', 'room_details', 'user_count'));
    }

    public function Cron()
    {
        $currentDatetime = Carbon::now();
    
        // Get all bookings that have an expiry date less than or equal to the current date
        $expiredBookings = Booking::where('check_out', '<=', $currentDatetime->format('Y-m-d H:i:s'))->get();
        // dd($expiredBookings);
        foreach ($expiredBookings as $booking) {
            // Check if the check_out date and time are completed
            $checkOutDatetime = Carbon::parse($booking->check_out);
            if ($currentDatetime >= $checkOutDatetime) {
                // Increment the available_count for the corresponding room
                $room = Room::where('room_code', $booking->room_code)->first();
    
                if ($room && $room->available_count < 5) {
                    $room->available_count++;
                    $room->save();
                }
            }
        }
    
        echo ('Room counts updated for expired bookings of today.');
    }
    
}
