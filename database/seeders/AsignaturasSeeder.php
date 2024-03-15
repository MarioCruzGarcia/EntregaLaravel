<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asignaturas;

class AsignaturasSeeder extends Seeder
{
    public function run()
    {
        // Asignaturas::create([
        //     'nombre' => 'Matemáticas',
        //     'contenidos' => 'Álgebra, Geometría, Cálculo',
        // ]);

        // Asignaturas::create([
        //     'nombre' => 'Programación',
        //     'contenidos' => 'Fundamentos de programación, Estructuras de datos, Algoritmos',
        // ]);
        Asignaturas::factory()->count(10)->create();

        // Agrega más registros si es necesario
    }
}
