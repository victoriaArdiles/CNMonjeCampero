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
        Schema::create('ct_peliculas_generos', function (Blueprint $table) {
            $table->increments('id_pelicula_genero')->unique('id_pelicula_genero_unique');
            $table->unsignedInteger('CT_PELICULAS_pelicula_id')->index('fk_ct_peliculas_has_ct_genero_peliculas_ct_peliculas1_idx');
            $table->unsignedInteger('CT_GENERO_PELICULAS_genero_id')->index('fk_ct_peliculas_has_ct_genero_peliculas_ct_genero_peliculas_idx');

            $table->primary(['id_pelicula_genero']);
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
};
