<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documentos;

class DocumentosSeeder extends Seeder
{
    public function run()
    {
        // Documentos::create([
        //     'nombre' => 'Informe de proyecto',
        //     'extension' => 'pdf',
        //     'ubicacion' => '/path/to/documento.pdf',
        //     'entregas_id' => 1,
        // ]);

        Documentos::factory()->count(10)->create();

    }
}
