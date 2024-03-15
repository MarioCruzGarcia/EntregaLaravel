<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class aulasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word,
            'planta' => $this->faker->numberBetween(1, 5),
            'capacidad' => $this->faker->numberBetween(10, 50),
            'caracteristicas' => $this->faker->sentence(6),
        ];
    }
}
