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
            'column' => 6,
            'row' => 3,
            'cinema_id' => 1,
        ]);
        Room::create([
            'column' => 6,
            'row' => 4,
            'cinema_id' => 1,
        ]);
        Room::create([
            'column' => 6,
            'row' => 5,
            'cinema_id' => 1,
        ]);
        Room::create([
            'column' => 6,
            'row' => 5,
            'cinema_id' => 2,
        ]);
        Room::create([
            'column' => 6,
            'row' => 7,
            'cinema_id' => 2,
        ]);
    }
}
