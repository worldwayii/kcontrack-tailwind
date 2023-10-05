<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['id' => 1, 'name' => 'kcontracker', 'guard_name' => 'web', 'created_at' => date('Y-m-d H:i:s')]);
        Role::create([ 'id' => 2, 'name' => 'company', 'guard_name' => 'web', 'created_at' => date('Y-m-d H:i:s') ]);
        Role::create(['id' => 3, 'name' => 'admin', 'guard_name' => 'web', 'created_at' => date('Y-m-d H:i:s') ]);


        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    }
}
