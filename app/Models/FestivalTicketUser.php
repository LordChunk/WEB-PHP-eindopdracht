<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FestivalTicketUser extends Model
{
    use HasFactory;

    public function hasUser() {
        return $this->belongsTo(User::class);
    }

    public function hasFestival() {
        return $this->belongsTo(Festival::class);
    }
}
