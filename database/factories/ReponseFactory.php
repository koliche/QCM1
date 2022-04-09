<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReponseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_question' => Question::factory(),
            'lib_reponse' =>$this->faker->text(),
            'correct' =>rand(0,1),
        ];
    }
}
