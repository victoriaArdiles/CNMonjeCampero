<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtPeliculasGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_peliculas_generos', function (Blueprint $table) {
            $table->increments('id_pelicula_genero')->unique();
            $table->unsignedInteger('CT_PELICULAS_pelicula_id');
            $table->unsignedInteger('CT_GENERO_PELICULAS_genero_id');
            
            $table->foreign('CT_GENERO_PELICULAS_genero_id', 'fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_GENERO_PELICULAS1')->references('genero_id')->on('ct_genero_peliculas');
            $table->foreign('CT_PELICULAS_pelicula_id', 'fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_PELICULAS1')->references('pelicula_id')->on('ct_peliculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_peliculas_generos');
    }
}
