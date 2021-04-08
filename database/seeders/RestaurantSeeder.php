<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'location' => 'Nuenen',
            'name' => 'De Lindehof',
            'restaurant_type_id' => '1',
        ]);

        Restaurant::create([
            'location' => 'Heeze',
            'name' => 'Tribeca',
            'restaurant_type_id' => '2',
        ]);

        Restaurant::create([
            'location' => 'Best',
            'name' => 'Bastille',
            'restaurant_type_id' => '3',
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Zarzo',
            'restaurant_type_id' => '4',
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Restaurant Wiesen',
            'restaurant_type_id' => '5',
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Diner in motion',
            'restaurant_type_id' => '1',
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Vane Restaurant',
            'restaurant_type_id' => '2',
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'De Burger',
            'restaurant_type_id' => '3',
        ]);

        Restaurant::create([
            'location' => 'Waalre',
            'name' => 'De Treeswijkhoeve',
            'restaurant_type_id' => '4',
        ]);

        Restaurant::create([
            'location' => 'Den Bosch',
            'name' => 'Sense',
            'restaurant_type_id' => '5',
        ]);
    }
}
