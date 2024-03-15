<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class alumnos_has_entregasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'calificacion' => $this->faker->randomElement(['Sobresaliente', 'Notable', 'Suficiente', 'Suspenso']),
            'fecha_entrega' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d H:i:s'),
            'alumnos_id' => $this->faker->numberBetween(1, 100), 
            'entregas_id' => $this->faker->numberBetween(1, 100), 
        ];
    }
}
