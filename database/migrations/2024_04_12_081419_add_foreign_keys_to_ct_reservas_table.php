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
        Schema::table('ct_reservas', function (Blueprint $table) {
            $table->foreign(['CT_ASIENTOS_asiento_id'], 'fk_CT_RESERVAS_CT_ASIENTOS1')->references(['asiento_id'])->on('ct_asientos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_ESTADO_ASIENTOS_estado_asiento_id'], 'fk_CT_RESERVAS_CT_ESTADO_ASIENTOS1')->references(['estado_asiento_id'])->on('ct_estado_asientos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_PROYECCIONES_SALAS_ct_proyeccion_sala'], 'fk_CT_RESERVAS_CT_PROYECCIONES_SALAS1')->references(['ct_proyeccion_sala'])->on('ct_proyecciones_salas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_reservas', function (Blueprint $table) {
            $table->dropForeign('fk_CT_RESERVAS_CT_ASIENTOS1');
            $table->dropForeign('fk_CT_RESERVAS_CT_ESTADO_ASIENTOS1');
            $table->dropForeign('fk_CT_RESERVAS_CT_PROYECCIONES_SALAS1');
        });
    }
};
