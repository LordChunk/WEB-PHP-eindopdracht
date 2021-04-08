<?php

namespace Database\Seeders;

use App\Models\RestaurantType;
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
            UserSeeder::class,
            FestivalSeeder::class,
            CinemaSeeder::class,
            RestaurantSeeder::class,
        ]);
    }
}
