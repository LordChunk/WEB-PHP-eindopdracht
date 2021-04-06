<?php

namespace App\Models;

use App\Models\Common\IBuyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['AvailableSeats','Movies',];
    public $Reservations;

    public function Restaurant_type()
    {
        return $this->hasOne(Restaurant_type::class);
    }
}
