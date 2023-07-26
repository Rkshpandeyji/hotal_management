<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_code',
        'name',
        'status',
        'hotal_id',
        'room_type_id',
        'available_count',
        'price',
        'des',
        'img',
        'shift',
    ];

    public function RoomType() {
        return $this->hasOne('App\Models\RoomType', 'id', 'room_type_id');
    }
}
