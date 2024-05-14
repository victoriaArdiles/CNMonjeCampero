<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_peliculas', function (Blueprint $table) {
            $table->increments('pelicula_id')->unique();
            $table->string('titulo_pelicula', 60);
            $table->text('sinopsis')->nullable();
            $table->time('duracion_pelicula');
            $table->binary('imagen_pelicula');
            $table->date('fecha_estreno_pelicula');
            $table->unsignedInteger('CT_CLASIFICACION_clasificacion_id');
            $table->unsignedInteger('CT_DIRECTORES_director_id');
            
            $table->foreign('CT_CLASIFICACION_clasificacion_id', 'fk_CT_PELICULAS_CT_CLASIFICACION1')->references('clasificacion_id')->on('ct_clasificacion');
            $table->foreign('CT_DIRECTORES_director_id', 'fk_CT_PELICULAS_CT_DIRECTORES1')->references('director_id')->on('ct_directores');
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
}
