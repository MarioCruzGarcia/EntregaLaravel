<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumnos;

class AlumnosSeeder extends Seeder
{
    public function run()
    {
        // Alumnos::create([
        //     'nombre' => 'Juan',
        //     'apellidos' => 'López',
        //     'dni' => '23456789E',
        //     'fecha_nacimiento' => '1995-09-15',
        //     'numero_matricula' => 'AL001',
        //     'email' => 'juan@example.com',
        // ]);

        // Alumnos::create([
        //     'nombre' => 'María',
        //     'apellidos' => 'Sánchez',
        //     'dni' => '34567890F',
        //     'fecha_nacimiento' => '1998-12-20',
        //     'numero_matricula' => 'AL002',
        //     'email' => 'maria@example.com',
        // ]);
        Alumnos::factory()->count(10)->create();


        // Agrega más registros si es necesario
    }
}
