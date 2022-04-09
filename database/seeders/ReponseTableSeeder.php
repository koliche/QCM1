<?php

namespace Database\Seeders;

use App\Models\Formulaire;
use Illuminate\Database\Seeder;

class ReponseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reponse::factory(10)->create();
    }
}
