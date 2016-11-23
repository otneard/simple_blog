<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     * Add 'admin' and 'user' roles
     *
     * @return void
     */
    public function run()
    {
        // Create Admin
        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Application admin'
        ]);

        // Create User
        Role::create([
            'name' => 'user',
            'display_name' => 'Regular user',
            'description' => 'Regular app user'
        ]);
    }
}
