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
        // $this->call(UserRoles::class);
        $this->call(EntitySamples::class);
        // $this->call(CreateAdmin::class);
    }
}
