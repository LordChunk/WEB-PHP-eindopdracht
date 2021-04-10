<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowReservation extends Model
{
    use HasFactory;

    public function hasUser() {
        return $this->belongsTo(User::class);
    }

    public function hasShow() {
        return $this->belongsTo(Show::class);
    }
}
