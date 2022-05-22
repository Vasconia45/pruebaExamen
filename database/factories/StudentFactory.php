<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'fecha_nac' => $this->faker->date(),
            'degreeCode' => $this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
