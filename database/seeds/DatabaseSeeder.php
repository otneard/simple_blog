<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user roles
        $this->call(UserRoles::class);

        // Create admin user
        $this->call(CreateAdmin::class);

        // Insert sample data
        $this->call(EntitySamples::class);
    }
}
