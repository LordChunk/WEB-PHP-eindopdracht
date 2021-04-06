<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
