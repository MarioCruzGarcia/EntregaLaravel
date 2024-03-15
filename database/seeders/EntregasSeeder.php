<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entregas;

class EntregasSeeder extends Seeder
{
    public function run()
    {
        // Entregas::create([
        //     'nombre' => 'Proyecto final',
        //     'vencimiento' => '2024-06-30',
        //     'grupos_id' => 1,
        // ]);

        Entregas::factory()->count(10)->create();
    }
}

