<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtPeliculasFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_peliculas_formatos', function (Blueprint $table) {
            $table->increments('ct_pelicula_formato')->unique();
            $table->string('pelicula_titulo_completo', 100)->nullable();
            $table->unsignedInteger('CT_PELICULAS_pelicula_id');
            $table->unsignedInteger('CT_FORMATOS_formato_id');
            $table->unsignedInteger('CT_IDIOMAS_idioma_id');
            $table->unsignedInteger('CT_SUBTITULOS_subtitulo_id');
            
            $table->foreign('CT_IDIOMAS_idioma_id', 'fk_CT_PELICULAS_CT_FORMATOS_CT_IDIOMAS1')->references('idioma_id')->on('ct_idiomas');
            $table->foreign('CT_SUBTITULOS_subtitulo_id', 'fk_CT_PELICULAS_FORMATOS_CT_SUBTITULOS1')->references('subtitulo_id')->on('ct_subtitulos');
            $table->foreign('CT_FORMATOS_formato_id', 'fk_CT_PELICULAS_has_CT_FORMATOS_CT_FORMATOS1')->references('formato_id')->on('ct_formatos');
            $table->foreign('CT_PELICULAS_pelicula_id', 'fk_CT_PELICULAS_has_CT_FORMATOS_CT_PELICULAS1')->references('pelicula_id')->on('ct_peliculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_peliculas_formatos');
    }
}
