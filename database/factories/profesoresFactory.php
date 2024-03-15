<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class profesoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->randomNumber(8) . $this->faker->randomLetter,
            'fecha_nacimiento' => $this->faker->date(),
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
