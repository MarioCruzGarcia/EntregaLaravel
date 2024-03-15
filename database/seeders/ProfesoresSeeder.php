<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profesores;

class ProfesoresSeeder extends Seeder
{
    public function run()
    {
        // Profesores::create([
        //     'nombre' => 'Ana',
        //     'apellidos' => 'García',
        //     'dni' => '12345678C',
        //     'fecha_nacimiento' => '1980-06-10',
        //     'telefono' => '987654321',
        // ]);

        // Profesores::create([
        //     'nombre' => 'Pedro',
        //     'apellidos' => 'Martínez',
        //     'dni' => '87654321D',
        //     'fecha_nacimiento' => '1975-03-25',
        //     'telefono' => '654321987',
        // ]);

        Profesores::factory()->count(10)->create();
    }
}
