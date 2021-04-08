<?php

namespace Database\Seeders;

use App\Models\Restaurant_type;
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
        Restaurant_type::create([
            'type' => 'Orientaals',
        ]);

        Restaurant_type::create([
            'type' => 'Sushi',
        ]);

        Restaurant_type::create([
            'type' => 'Arabisch',
        ]);

        Restaurant_type::create([
            'type' => 'Italiaans ',
        ]);

        Restaurant_type::create([
            'type' => 'Grieks',
        ]);
    }
}
