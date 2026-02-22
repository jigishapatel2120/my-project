<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles & permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions
        Permission::create(['name' => 'view dashboard']);
        Permission::create(['name' => 'manage users']);

        // Roles
        $admin = Role::create(['name' => 'admin']);
        $user  = Role::create(['name' => 'user']);

        // Assign permissions
        $admin->givePermissionTo(['view dashboard', 'manage users']);
        $user->givePermissionTo(['view dashboard']);
    }
}
