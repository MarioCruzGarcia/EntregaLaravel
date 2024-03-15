<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class alumnosFactory extends Factory
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
            'dni' => $this->faker->unique()->randomNumber(8) . $this->faker->randomLetter,
            'fecha_nacimiento' => $this->faker->date(),
            'numero_matricula' => $this->faker->unique()->regexify('[A-Z]{2}\d{3}'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
