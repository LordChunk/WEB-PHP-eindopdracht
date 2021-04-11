<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'role_id' => '1',
            'street' => 'Adminstreet',
            'house_number' => 9,
            'postcode' => '1337HX',
            'country' => 'fr',
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user@user.com'),
            'role_id' => '2',
            'street' => 'Userstreet',
            'house_number' => 2,
            'postcode' => '1337HC',
            'country' => 'nl',
        ]);
    }
}
