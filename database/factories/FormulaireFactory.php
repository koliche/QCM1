<?php

namespace Database\Factories;
use App\Models\Formulaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormulaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Formulaire::class;
    public function definition()
    {
        return [
            'lib_formulaire'=>$this->faker->text
        ];
    }
}
