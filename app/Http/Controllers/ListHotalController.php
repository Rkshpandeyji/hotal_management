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
        if($request->all())
        {
            $roomType = $request->input('roomType');
            $room_details = Room::with('RoomType')
            ->where('room_type_id', $roomType)
            ->whereNot('available_count', 0)
            ->where('status', 1)
            ->get();  
        }else{
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

        // Get all bookings that have an expiry date less than or equal to the current datetime
        $expiredBookings = Booking::where('check_out', '<=', $currentDatetime->format('Y-m-d H:i:s'))->get();
        dd($currentDatetime);
        foreach ($expiredBookings as $booking) {
            // Increment the available_count for the corresponding room
            $room = Room::where('room_code', $booking->room_code)->first();

            if ($room && $room->available_count < 5) {
                $room->available_count++;
                $room->save();
            }
        }

        $this->info('Room counts updated for expired bookings.');
    }
}
