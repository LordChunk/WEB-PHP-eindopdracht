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
            'opens_at' => '12:30',
            'closes_at' => '18:30',
            'seats_available' => 30,
        ]);

        Restaurant::create([
            'location' => 'Heeze',
            'name' => 'Tribeca',
            'restaurant_type_id' => '2',
            'opens_at' => '12:30',
            'closes_at' => '18:30',
            'seats_available' => 10,
        ]);

        Restaurant::create([
            'location' => 'Best',
            'name' => 'Bastille',
            'restaurant_type_id' => '3',
            'opens_at' => '18:30',
            'closes_at' => '23:30',
            'seats_available' => 20,
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Zarzo',
            'restaurant_type_id' => '4',
            'opens_at' => '14:30',
            'closes_at' => '23:30',
            'seats_available' => 80,
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Restaurant Wiesen',
            'restaurant_type_id' => '5',
            'opens_at' => '14:30',
            'closes_at' => '23:30',
            'seats_available' => 39,
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Diner in motion',
            'restaurant_type_id' => '1',
            'opens_at' => '16:30',
            'closes_at' => '22:00',
            'seats_available' => 69,
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'Vane Restaurant',
            'restaurant_type_id' => '2',
            'opens_at' => '16:30',
            'closes_at' => '22:00',
            'seats_available' => 20,
        ]);

        Restaurant::create([
            'location' => 'Eindhoven',
            'name' => 'De Burger',
            'restaurant_type_id' => '3',
            'opens_at' => '18:00',
            'closes_at' => '22:00',
            'seats_available' => 32,
        ]);

        Restaurant::create([
            'location' => 'Waalre',
            'name' => 'De Treeswijkhoeve',
            'restaurant_type_id' => '4',
            'opens_at' => '18:00',
            'closes_at' => '22:00',
            'seats_available' => 23,
        ]);

        Restaurant::create([
            'location' => 'Den Bosch',
            'name' => 'Sense',
            'restaurant_type_id' => '5',
            'opens_at' => '14:00',
            'closes_at' => '21:00',
            'seats_available' => 24,
        ]);
    }
}
