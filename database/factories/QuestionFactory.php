<?php

namespace Database\Factories;

use App\Models\Formulaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_formulaire' => Formulaire::factory(),
            'lib_question' => $this->faker->text()
        ];
    }
}
