<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB Seed administrator
        $this->call("AdministratorSeeder");

        // \App\Models\User::factory(10)->create();
    }
}
