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
        $time = Carbon::now()->setSecond(0);

        $time->setSecond(0);
        // Get closest half hour
        if($time->minute <= 30) {
            $time->addMinutes(30 - $time->minute);
        } else {
            $time->addMinutes(60 - $time->minute);
        }

        $time->addMinutes(30);

        for ($i = 0; $i < 10; $i++) {
            RestaurantReservation::create([
                'restaurant_id' => 1,
                'user_id' => 2,
                'time_slot' => $time,
                'guests' => 1
            ]);
        }

        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => $time->addMinutes(30),
            'guests' => 4
        ]);

        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => $time->addMinutes(30),
            'guests' => 90
        ]);

        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => $time->addHour(),
            'guests' => 8
        ]);
        RestaurantReservation::create([
            'restaurant_id' => 1,
            'user_id' => 1,
            'time_slot' => $time->addHour(),
            'guests' => 8
        ]);
    }
}
