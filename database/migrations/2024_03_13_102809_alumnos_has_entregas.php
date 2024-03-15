<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnosHasEntregas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_has_entregas', function (Blueprint $table) {
            $table->string('entrega');
            $table->string('calificacion');
            $table->date('fecha_entrega');
            $table->bigInteger('alumnos_id')->unsigned();
            $table->bigInteger('entregas_id')->unsigned();
            $table->foreign('alumnos_id')->references('id')->on('alumnos');
            $table->foreign('entregas_id')->references('id')->on('entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
