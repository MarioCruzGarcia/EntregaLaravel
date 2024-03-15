<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class alumnos_has_gruposFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alumnos_id' => $this->faker->numberBetween(1, 100), 
            'grupo_id' => $this->faker->numberBetween(1, 20), 
        ];
    }
}
