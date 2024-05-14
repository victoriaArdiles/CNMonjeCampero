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
        Schema::table('ct_peliculas_formatos', function (Blueprint $table) {
            $table->foreign(['CT_IDIOMAS_idioma_id'], 'fk_CT_PELICULAS_CT_FORMATOS_CT_IDIOMAS1')->references(['idioma_id'])->on('ct_idiomas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_SUBTITULOS_subtitulo_id'], 'fk_CT_PELICULAS_FORMATOS_CT_SUBTITULOS1')->references(['subtitulo_id'])->on('ct_subtitulos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_FORMATOS_formato_id'], 'fk_CT_PELICULAS_has_CT_FORMATOS_CT_FORMATOS1')->references(['formato_id'])->on('ct_formatos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_PELICULAS_pelicula_id'], 'fk_CT_PELICULAS_has_CT_FORMATOS_CT_PELICULAS1')->references(['pelicula_id'])->on('ct_peliculas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_peliculas_formatos', function (Blueprint $table) {
            $table->dropForeign('fk_CT_PELICULAS_CT_FORMATOS_CT_IDIOMAS1');
            $table->dropForeign('fk_CT_PELICULAS_FORMATOS_CT_SUBTITULOS1');
            $table->dropForeign('fk_CT_PELICULAS_has_CT_FORMATOS_CT_FORMATOS1');
            $table->dropForeign('fk_CT_PELICULAS_has_CT_FORMATOS_CT_PELICULAS1');
        });
    }
};
