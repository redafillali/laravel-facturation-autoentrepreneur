<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        // Create super admin role
        $role = \Spatie\Permission\Models\Role::create( [ 'name' => 'super-admin' ] );
        // Create super admin permission
        $permission = \Spatie\Permission\Models\Permission::create( [ 'name' => 'super-admin' ] );
        // Assign super admin permission to super admin role
        $role->givePermissionTo( $permission );
    }
}
