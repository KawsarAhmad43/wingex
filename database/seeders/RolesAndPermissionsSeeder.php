<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $permissions = Permission::all();

        $adminRole->permissions()->attach($permissions);

        $moderatorRole = Role::where('name', 'Moderator')->first();
        $moderatorRole->permissions()->attach($permissions->where('name', '!=', 'delete'));
    }
}
