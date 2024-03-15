<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class entregasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'vencimiento' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d H:i:s'),
        ];
    }
}
