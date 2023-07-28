<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Room;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // User is logged in, fetch room details from the database and pass it to the view
            $room_details = booking::with('Room_code')->where('status', 1)->get();
            $room_details1 = Room::with('RoomType','hotal')->where('status', 1)->get();
            return view('dashboard', compact('room_details',"room_details1"));
        } else {
            // User is not logged in, redirect to the login page
            return redirect()->route('login');
        }
    }

    public function deleteRoom($id)
    {
        $room = Booking::find($id);

        if ($room) {
            $room->delete();
            return response()->json(['success' => true], 200);
        }

        return response()->json(['error' => 'Room not found'], 404);
    }
}
