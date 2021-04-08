<?php

namespace Database\Seeders;

use App\Models\Restaurant_type;
use App\Models\RestaurantType;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Type;

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
            'type' => 'Orientaals',
        ]);

        RestaurantType::create([
            'type' => 'Sushi',
        ]);

        RestaurantType::create([
            'type' => 'Arabisch',
        ]);

        RestaurantType::create([
            'type' => 'Italiaans ',
        ]);

        RestaurantType::create([
            'type' => 'Grieks',
        ]);
    }
}
