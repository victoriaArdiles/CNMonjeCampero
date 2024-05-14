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
        Schema::table('ct_peliculas_generos', function (Blueprint $table) {
            $table->foreign(['CT_GENERO_PELICULAS_genero_id'], 'fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_GENERO_PELICULAS1')->references(['genero_id'])->on('ct_genero_peliculas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_PELICULAS_pelicula_id'], 'fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_PELICULAS1')->references(['pelicula_id'])->on('ct_peliculas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_peliculas_generos', function (Blueprint $table) {
            $table->dropForeign('fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_GENERO_PELICULAS1');
            $table->dropForeign('fk_CT_PELICULAS_has_CT_GENERO_PELICULAS_CT_PELICULAS1');
        });
    }
};
