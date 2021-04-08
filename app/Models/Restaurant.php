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

    public function restauranType()
    {
        return $this->hasOne(RestaurantType::class);
    }
}
