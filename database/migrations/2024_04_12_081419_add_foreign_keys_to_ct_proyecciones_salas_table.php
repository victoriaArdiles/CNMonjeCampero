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
        Schema::table('ct_proyecciones_salas', function (Blueprint $table) {
            $table->foreign(['CT_HORARIOS_horario_id'], 'fk_CT_PROYECCIONES_SALAS_CT_HORARIOS1')->references(['horario_id'])->on('ct_horarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_PELICULAS_FORMATOS_ct_pelicula_formato'], 'fk_CT_PROYECCIONES_SALAS_CT_PELICULAS_FORMATOS1')->references(['ct_pelicula_formato'])->on('ct_peliculas_formatos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_PROYECCIONES_proyeccion_id'], 'fk_CT_PROYECCIONES_SALAS_CT_PROYECCIONES1')->references(['proyeccion_id'])->on('ct_proyecciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_SALAS_sala_id'], 'fk_CT_PROYECCIONES_SALAS_CT_SALAS1')->references(['sala_id'])->on('ct_salas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_proyecciones_salas', function (Blueprint $table) {
            $table->dropForeign('fk_CT_PROYECCIONES_SALAS_CT_HORARIOS1');
            $table->dropForeign('fk_CT_PROYECCIONES_SALAS_CT_PELICULAS_FORMATOS1');
            $table->dropForeign('fk_CT_PROYECCIONES_SALAS_CT_PROYECCIONES1');
            $table->dropForeign('fk_CT_PROYECCIONES_SALAS_CT_SALAS1');
        });
    }
};
