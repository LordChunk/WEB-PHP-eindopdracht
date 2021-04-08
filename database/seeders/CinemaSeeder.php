<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cinema::create([
            'location' => 'Eindhoven',
            'name' => 'Vue',
        ]);

        Cinema::create([
            'location' => 'Eindhoven',
            'name' => 'Pathe Eindhoven',
        ]);

        Cinema::create([
            'location' => 'Best',
            'name' => 'BioBest',
        ]);

        Cinema::create([
            'location' => 'Utrecht',
            'name' => 'Kinepolis',
        ]);

        Cinema::create([
            'location' => 'Houten',
            'name' => 'CineLounge',
        ]);

        Cinema::create([
            'location' => 'Echt',
            'name' => 'Royale Service',
        ]);

        Cinema::create([
            'location' => 'Bergen op zoom',
            'name' => 'Kiek In De Pot',
        ]);

        Cinema::create([
            'location' => 'Tilburg',
            'name' => 'Pathe Tilburg',
        ]);

        Cinema::create([
            'location' => 'Breda',
            'name' => 'Pathe Breda',
        ]);

        Cinema::create([
            'location' => 'Arnhem',
            'name' => 'Pathe Arnhem',
        ]);
    }
}
