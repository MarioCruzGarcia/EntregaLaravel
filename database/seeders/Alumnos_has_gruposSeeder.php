<?php

namespace Database\Seeders;

use App\Models\Alumnos_has_grupos;
use Illuminate\Database\Seeder;
use App\Models\Alumnos;
use App\Models\Grupos;
use App\Models\AlumnosHasGrupos;

class Alumnos_has_gruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // Supongamos que tienes los IDs de los alumnos y grupos
        // $alumnoIdJuan = Alumnos::where('nombre', 'Juan')->first()->id;
        // $alumnoIdMaria = Alumnos::where('nombre', 'María')->first()->id;
        // $grupoId1A = Grupos::where('nombre', 'Grupo 1A')->first()->id;
        // $grupoId2B = Grupos::where('nombre', 'Grupo 2B')->first()->id;

        // // Ahora creamos las relaciones
        // Alumnos_has_grupos::create([
        //     'alumno_id' => $alumnoIdJuan,
        //     'grupo_id' => $grupoId1A,
        // ]);

        // AlumnosHasGrupos::create([
        //     'alumno_id' => $alumnoIdMaria,
        //     'grupo_id' => $grupoId2B,
        // ]);
        Alumnos_has_grupos::factory()->count(10)->create();

    }
}
