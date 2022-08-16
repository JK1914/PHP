<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;


    public function bookings(){
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
