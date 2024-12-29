<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = ['create', 'edit', 'delete', 'view'];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
