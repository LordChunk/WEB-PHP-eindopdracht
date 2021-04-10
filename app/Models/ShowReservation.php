<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowReservation extends Model
{
    protected $fillable = ['show_id', 'user_id', 'column', 'row'];

    use HasFactory;

    public function hasUser() {
        return $this->belongsTo(User::class);
    }

    public function hasShow() {
        return $this->belongsTo(Show::class);
    }
}
