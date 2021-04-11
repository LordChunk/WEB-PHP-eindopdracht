<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\RestaurantReservation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RestaurantReservationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 2,
            'time_slot' => Carbon::now()->addMinutes(30),
            'guests' => 4
        ]);
        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => Carbon::now()->addMinutes(30),
            'guests' => 2
        ]);
        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => Carbon::now(),
            'guests' => 8
        ]);
    }
}
