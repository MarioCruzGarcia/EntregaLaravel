<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumnos_Has_Entregas;

class Alumnoshasentregas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumnos_has_entregas::factory()->count(10)->create();

    }
}
