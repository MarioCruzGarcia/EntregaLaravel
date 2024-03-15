<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aulas;

class AulasSeeder extends Seeder
{
    public function run()
    {
        // Aulas::create([
        //     'nombre' => 'Aula 101',
        //     'planta' => 'Planta baja',
        //     'capacidad' => 30,
        //     'caracteristicas' => 'Proyector, pizarra blanca',
        // ]);

        // Aulas::create([
        //     'nombre' => 'Aula 202',
        //     'planta' => 'Segunda planta',
        //     'capacidad' => 25,
        //     'caracteristicas' => 'Equipos de cómputo, aire acondicionado',
        // ]);

        Aulas::factory()->count(10)->create();

    }
}
