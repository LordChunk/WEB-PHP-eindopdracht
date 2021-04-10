<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            "name" => "Mission Impossible: Fallout",
            "description" => "Not completely impossible mission fallout"
        ]);
        Movie::create([
            "name" => "James Bond: The Cancelled Edition",
            "description" => "James is on holiday, please leave a message."
        ]);
        Movie::create([
            "name" => "100 Dalmatians",
            "description" => "One didn't make it"
        ]);
        Movie::create([
            "name" => "Saving Private Ryan 2",
            "description" => "Ryan got lost in a maze"
        ]);
    }
}
