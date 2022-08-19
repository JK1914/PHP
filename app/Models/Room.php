<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['number','square','has_pojector','building_id'];

    use HasFactory;

    public $timestamps = false;

    public function bookings(){
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
    
    public function building(){
        return $this->belongsTo(Building::class);
    }
}
