<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ciclos;

class CiclosSeeder extends Seeder
{
    public function run()
    {
        // Ciclos::create([
        //     'nombre' => 'Desarrollo de Aplicaciones Multiplataforma',
        //     'descripcion' => 'Ciclo formativo de grado superior',
        // ]);

        // Ciclos::create([
        //     'nombre' => 'Administración y Finanzas',
        //     'descripcion' => 'Ciclo formativo de grado superior',
        // ]);

        Ciclos::factory()->count(10)->create();
    }
}
