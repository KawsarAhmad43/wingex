<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = ['Admin', 'Moderator', 'User'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
