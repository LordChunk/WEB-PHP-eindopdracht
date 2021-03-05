<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function shows(){
        return $this->belongsToMany(Movie::class);
    }

    use HasFactory;
}
