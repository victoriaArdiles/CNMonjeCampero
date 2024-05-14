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
        Schema::create('ct_peliculas', function (Blueprint $table) {
            $table->increments('pelicula_id')->unique('pelicula_id_unique');
            $table->string('titulo_pelicula', 60);
            $table->text('sinopsis')->nullable();
            $table->time('duracion_pelicula');
            $table->string('imagen_pelicula', 200)->nullable();
            $table->date('fecha_estreno_pelicula');
            $table->unsignedInteger('CT_CLASIFICACION_clasificacion_id')->index('fk_ct_peliculas_ct_clasificacion1_idx');
            $table->unsignedInteger('CT_DIRECTORES_director_id')->index('fk_ct_peliculas_ct_directores1_idx');

            $table->primary(['pelicula_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_peliculas');
    }
};
