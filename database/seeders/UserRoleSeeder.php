<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Find roles
        $adminRole = Role::where('name', 'Admin')->first();
        $moderatorRole = Role::where('name', 'Moderator')->first();
        $userRole = Role::where('name', 'User')->first();

        // Assign roles directly using the `role_id` field
        User::where('email', 'admin@gmail.com')->first()->update(['role_id' => $adminRole->id]);
        User::where('email', 'moderator@gmail.com')->first()->update(['role_id' => $moderatorRole->id]);
        User::where('email', 'user@gmail.com')->first()->update(['role_id' => $userRole->id]);
    }
}
