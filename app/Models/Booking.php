<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = ['room_id','booked','user_id','time_start','time_end'];

    use HasFactory;

    public $timestamps = false;

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
