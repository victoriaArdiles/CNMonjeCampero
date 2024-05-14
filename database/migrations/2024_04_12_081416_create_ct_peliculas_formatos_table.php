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
        Schema::create('ct_peliculas_formatos', function (Blueprint $table) {
            $table->increments('ct_pelicula_formato')->unique('ct_pelicula_formato_unique');
            $table->string('pelicula_titulo_completo', 100)->nullable();
            $table->unsignedInteger('CT_PELICULAS_pelicula_id')->index('fk_ct_peliculas_has_ct_formatos_ct_peliculas1_idx');
            $table->unsignedInteger('CT_FORMATOS_formato_id')->index('fk_ct_peliculas_has_ct_formatos_ct_formatos1_idx');
            $table->unsignedInteger('CT_IDIOMAS_idioma_id')->index('fk_ct_peliculas_ct_formatos_ct_idiomas1_idx');
            $table->unsignedInteger('CT_SUBTITULOS_subtitulo_id')->index('fk_ct_peliculas_formatos_ct_subtitulos1_idx');

            $table->primary(['ct_pelicula_formato']);
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
};
