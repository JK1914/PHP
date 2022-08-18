<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function rooms(){
        return $this->hasMany(Room::class, 'building_id', 'id');
    }
}
