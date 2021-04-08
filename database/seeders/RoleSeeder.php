<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'role' => 'admin',
        ]);

        Role::create([
            'id' => 2,
            'role' => 'user',
        ]);
    }
}
