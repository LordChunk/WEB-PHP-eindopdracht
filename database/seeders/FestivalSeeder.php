<?php

namespace Database\Seeders;

use App\Models\Festival;
use App\Models\Restaurant_type;
use Illuminate\Database\Seeder;

class FestivalSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Festival::create([
            'location' => 'Kraggenburg',
            'name' => 'Wildeburg',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-4-9 11:00',
            'EndDate' => '2021-4-11 23:00',
        ]);

        Festival::create([
            'location' => 'Hilvarenbeek',
            'name' => 'Woohah! Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-4-16 11:00',
            'EndDate' => '2021-4-18 23:00',
        ]);

        Festival::create([
            'location' => 'Tilburg',
            'name' => 'MOB-complex',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-4-23 11:00',
            'EndDate' => '2021-4-25 23:00',
        ]);

        Festival::create([
            'location' => 'Amsterdam',
            'name' => 'Havenpark',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-4-30 11:00',
            'EndDate' => '2021-5-2 23:00',
        ]);

        Festival::create([
            'location' => 'Den Haag',
            'name' => 'The Crave Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-5-7 11:00',
            'EndDate' => '2021-5-9 23:00',
        ]);

        Festival::create([
            'location' => 'Amsterdam',
            'name' => 'Loveland Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-5-14 11:00',
            'EndDate' => '2021-5-16 23:00',
        ]);

        Festival::create([
            'location' => 'Gouda',
            'name' => 'Riverdale Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-5-21 11:00',
            'EndDate' => '2021-5-23 23:00',
        ]);

        Festival::create([
            'location' => 'Weert',
            'name' => 'Bospop',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-5-28 11:00',
            'EndDate' => '2021-5-30 23:00',
        ]);

        Festival::create([
            'location' => 'Arnhem',
            'name' => 'Stadsblokken',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-6-4 11:00',
            'EndDate' => '2021-6-6 23:00',
        ]);

        Festival::create([
            'location' => 'Velsen-Zuid',
            'name' => 'LatinVillage Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-6-11 11:00',
            'EndDate' => '2021-6-13 23:00',
        ]);

        Festival::create([
            'location' => 'Rotterdam',
            'name' => 'Crazy Sexy Cool Festival',
            'NumberOfTickets' => rand(1000,10000),
            'StartDate' => '2021-6-18 11:00',
            'EndDate' => '2021-6-20 23:00',
        ]);
    }
}
