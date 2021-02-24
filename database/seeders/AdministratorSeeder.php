<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adm = new \App\Models\User;

        $adm->name = "Administrator";
        $adm->email = "admSiakad@ikbis.ac.id";
        $adm->password = \Hash::make('administrator');

        $adm->save();
        $this->command->info("User Administrator Ikbis Sudah tertambahkan");
    }
}
