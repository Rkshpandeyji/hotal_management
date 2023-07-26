<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class ListHotalController extends Controller
{
    public function index()
    {
        $room_count = Room::count();
        $room_details = Room::with('RoomType')->where('status',1)->get();
        // dd($room_details);
        return view('index', compact('room_count','room_details'));
    }
}
