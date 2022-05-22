<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DegreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->randomElement(['Informatica', 'Deporte', 'Fisica', 'Matematicas', 'Filosofia']),
            'hours' => $this->faker->numberBetween($min = 50, $max = 300)
        ];
    }
}
