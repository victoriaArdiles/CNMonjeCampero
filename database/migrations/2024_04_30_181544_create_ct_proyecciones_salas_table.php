<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtProyeccionesSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_proyecciones_salas', function (Blueprint $table) {
            $table->increments('ct_proyeccion_sala')->unique();
            $table->string('informacion_general', 250)->nullable();
            $table->decimal('precio_funcion', 10, 0)->nullable();
            $table->unsignedInteger('CT_HORARIOS_horario_id');
            $table->unsignedInteger('CT_PROYECCIONES_proyeccion_id');
            $table->time('duracion_funcion')->nullable();
            $table->unsignedInteger('CT_SALAS_sala_id');
            $table->unsignedInteger('CT_PELICULAS_FORMATOS_ct_pelicula_formato');
            
            $table->foreign('CT_HORARIOS_horario_id', 'fk_CT_PROYECCIONES_SALAS_CT_HORARIOS1')->references('horario_id')->on('ct_horarios');
            $table->foreign('CT_PELICULAS_FORMATOS_ct_pelicula_formato', 'fk_CT_PROYECCIONES_SALAS_CT_PELICULAS_FORMATOS1')->references('ct_pelicula_formato')->on('ct_peliculas_formatos');
            $table->foreign('CT_PROYECCIONES_proyeccion_id', 'fk_CT_PROYECCIONES_SALAS_CT_PROYECCIONES1')->references('proyeccion_id')->on('ct_proyecciones');
            $table->foreign('CT_SALAS_sala_id', 'fk_CT_PROYECCIONES_SALAS_CT_SALAS1')->references('sala_id')->on('ct_salas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_proyecciones_salas');
    }
}
