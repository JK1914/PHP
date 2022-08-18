<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    public function bookings(){
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
    
    public function building(){
        return $this->belongsTo(Building::class);
    }
}
