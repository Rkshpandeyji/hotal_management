<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'check_in',
        'check_out',
        'payment_method',
        'price',
        'room_code',
        'status',
    ];

    public function Room_code() {
        return $this->hasOne('App\Models\Room', 'room_code', 'room_code')->with('hotal','RoomType');
    }
}
