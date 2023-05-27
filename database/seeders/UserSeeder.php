<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        // create super admin user
        $user = \App\Models\User::create( [
            'name' => 'Reda El Fillali',
            'email' => 'reda.elfillali@gmail.com',
            'password' => bcrypt( 'password' ),
        ] );
        // assign super admin role to super admin user
        $user->assignRole( 'super-admin' );
    }
}
