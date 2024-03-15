<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupos;

class GruposSeeder extends Seeder
{
    public function run()
    {
        // Grupos::create([
        //     'nombre' => 'Grupo 1A',
        //     'aulas_id' => 1,
        //     'cursos_id' => 1,
        //     'ciclos_id' => 1,
        // ]);

        // Grupos::create([
        //     'nombre' => 'Grupo 2B',
        //     'aulas_id' => 2,
        //     'cursos_id' => 2,
        //     'ciclos_id' => 2,
        // ]);

        Grupos::factory()->count(10)->create();
    }
}
