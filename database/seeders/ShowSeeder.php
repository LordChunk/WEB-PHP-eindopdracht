<?php

namespace Database\Seeders;

use App\Models\Show;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Show::create([
            "movie_id" => 1,
            "room_id" => 1,
            "start_time" => Carbon::now()->addHour(),
            "end_time" => Carbon::now()->addHours(2),
        ]);
        Show::create([
            "movie_id" => 2,
            "room_id" => 2,
            "start_time" => Carbon::now()->addHour(),
            "end_time" => Carbon::now()->addHours(2),
        ]);
        Show::create([
            "movie_id" => 4,
            "room_id" => 3,
            "start_time" => Carbon::now()->addHour(),
            "end_time" => Carbon::now()->addHours(2),
        ]);
    }
}
