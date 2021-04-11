<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantReservation extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_id', 'user_id', 'time_slot', 'guests'];

    use HasFactory;

    public function hasUser() {
        return $this->belongsTo(User::class);
    }

    public function hasRestaurant() {
        return $this->belongsTo(Restaurant::class);
    }

}
