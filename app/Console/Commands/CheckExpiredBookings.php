<?php

namespace App\Console\Commands;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckExpiredBookings extends Command
{
    protected $signature = 'check:expired-bookings';

    protected $description = 'Check and update room count for expired bookings';

    public function handle()
    {
        $currentDatetime = Carbon::now();

        // Get all bookings that have an expiry date less than or equal to the current datetime
        $expiredBookings = Booking::where('expiry_date', '<=', $currentDatetime)->get();

        foreach ($expiredBookings as $booking) {
            // Increment the available_count for the corresponding room
            $room = Room::where('room_code', $booking->room_code)->first();

            if ($room) {
                $room->available_count++;
                $room->save();
            }
        }

        $this->info('Room counts updated for expired bookings.');
    }
}

