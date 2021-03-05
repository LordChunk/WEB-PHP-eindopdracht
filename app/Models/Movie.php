<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function showings(){
        return $this->belongsToMany(Room::class);
    }
    use HasFactory;
}
