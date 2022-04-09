<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormulaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Formulaire::factory()->count(10)->create();
    }
}
