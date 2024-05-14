<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_proyecciones_salas', function (Blueprint $table) {
            $table->increments('ct_proyeccion_sala')->unique('ct_proyeccion_sala_unique');
            $table->text('informacion_general')->nullable();
            $table->decimal('precio_funcion', 10, 0)->nullable();
            $table->unsignedInteger('CT_HORARIOS_horario_id')->index('fk_ct_proyecciones_salas_ct_horarios1_idx');
            $table->unsignedInteger('CT_PROYECCIONES_proyeccion_id')->index('fk_ct_proyecciones_salas_ct_proyecciones1_idx');
            $table->time('duracion_funcion')->nullable();
            $table->unsignedInteger('CT_SALAS_sala_id')->index('fk_ct_proyecciones_salas_ct_salas1_idx');
            $table->unsignedInteger('CT_PELICULAS_FORMATOS_ct_pelicula_formato')->index('fk_ct_proyecciones_salas_ct_peliculas_formatos1_idx');

            $table->primary(['ct_proyeccion_sala']);
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
};
