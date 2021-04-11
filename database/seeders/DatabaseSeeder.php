<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RestaurantTypeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            FestivalSeeder::class,
            CinemaSeeder::class,
            RoomSeeder::class,
            MovieSeeder::class,
            ShowSeeder::class,
            RestaurantSeeder::class,
            RestaurantReservationSeeder::class,
        ]);
    }
}
