<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     * Create user with 'admin' role
     *
     * @return void
     */
    public function run()
    {
        // Create user entry
        $user = new User();
        $user->email = 'admin@localhost.dev';
        $user->password = Hash::make('pass');
        $user->save();

        // Attach role
        $role = Role::where(['name' => 'admin'])->first();
        $user->attachRole($role);
    }
}
