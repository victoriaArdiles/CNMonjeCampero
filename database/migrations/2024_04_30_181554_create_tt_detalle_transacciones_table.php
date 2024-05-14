<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtDetalleTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_detalle_transacciones', function (Blueprint $table) {
            $table->increments('detalle_transaccion_id')->unique();
            $table->unsignedInteger('TT_TRANSACCIONES_transaccion_id');
            $table->unsignedInteger('CT_ASIENTOS_asiento_id');
            $table->unsignedInteger('CT_PROYECCIONES_SALAS_ct_proyeccion_sala');
            
            $table->foreign('CT_ASIENTOS_asiento_id', 'fk_TT_DETALLE_TRANSACCIONES_CT_ASIENTOS1')->references('asiento_id')->on('ct_asientos');
            $table->foreign('CT_PROYECCIONES_SALAS_ct_proyeccion_sala', 'fk_TT_DETALLE_TRANSACCIONES_CT_PROYECCIONES_SALAS1')->references('ct_proyeccion_sala')->on('ct_proyecciones_salas');
            $table->foreign('TT_TRANSACCIONES_transaccion_id', 'fk_TT_DETALLE_TRANSACCIONES_TT_TRANSACCIONES1')->references('transaccion_id')->on('tt_transacciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_detalle_transacciones');
    }
}
