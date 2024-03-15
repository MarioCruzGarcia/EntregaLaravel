<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cursos;

class CursosSeeder extends Seeder
{
    public function run()
    {
        // Cursos::create([
        //     'curso' => 'Ingeniería Informática',
        // ]);

        // Cursos::create([
        //     'curso' => 'Administración de Empresas',
        // ]);
        Cursos::factory()->count(10)->create();

    }
}

