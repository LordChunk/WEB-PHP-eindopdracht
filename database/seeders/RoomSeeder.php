<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'seat_column' => 2,
            'seat_row' => 5,
            'cinema_id' => 1,
        ]);
        Room::create([
            'seat_column' => 3,
            'seat_row' => 5,
            'cinema_id' => 1,
        ]);
        Room::create([
            'seat_column' => 4,
            'seat_row' => 5,
            'cinema_id' => 1,
        ]);
        Room::create([
            'seat_column' => 4,
            'seat_row' => 5,
            'cinema_id' => 2,
        ]);
        Room::create([
            'seat_column' => 4,
            'seat_row' => 6,
            'cinema_id' => 2,
        ]);
    }
}
