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
        Schema::table('ct_peliculas', function (Blueprint $table) {
            $table->foreign(['CT_CLASIFICACION_clasificacion_id'], 'fk_CT_PELICULAS_CT_CLASIFICACION1')->references(['clasificacion_id'])->on('ct_clasificacion')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_DIRECTORES_director_id'], 'fk_CT_PELICULAS_CT_DIRECTORES1')->references(['director_id'])->on('ct_directores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_peliculas', function (Blueprint $table) {
            $table->dropForeign('fk_CT_PELICULAS_CT_CLASIFICACION1');
            $table->dropForeign('fk_CT_PELICULAS_CT_DIRECTORES1');
        });
    }
};
