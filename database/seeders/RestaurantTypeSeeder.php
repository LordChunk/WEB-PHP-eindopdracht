<?php

namespace Database\Seeders;

use App\Models\Restaurant_type;
use App\Models\RestaurantType;
use Illuminate\Database\Seeder;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RestaurantType::create([
            'id' => 1,
            'type' => 'Orientaals',
        ]);

        RestaurantType::create([
            'id' => 2,
            'type' => 'Sushi',
        ]);

        RestaurantType::create([
            'id' => 3,
            'type' => 'Arabisch',
        ]);

        RestaurantType::create([
            'id' => 4,
            'type' => 'Italiaans ',
        ]);

        RestaurantType::create([
            'id' => 5,
            'type' => 'Grieks',
        ]);
    }
}
