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
        Schema::create('tt_detalle_transacciones', function (Blueprint $table) {
            $table->increments('detalle_transaccion_id')->unique('detalle_transaccion_id_unique');
            $table->unsignedInteger('APP_USUARIOS_usuario_id')->index('fk_tt_detalle_transacciones_app_usuarios1_idx');
            $table->unsignedInteger('TT_ESTADO_TRANSACCIONES_estado_transaccion_id')->nullable()->index('fk_tt_detalle_transacciones_tt_estado_transacciones1_idx');
            $table->unsignedInteger('TT_TRANSACCIONES_RESERVAS_tt_transaccion_reserva')->nullable()->index('fk_tt_detalle_transacciones_tt_transacciones_reservas1_idx');
            $table->unsignedInteger('CT_CLIENTES_cliente_id')->nullable()->index('fk_tt_detalle_transacciones_ct_clientes1_idx');

            $table->primary(['detalle_transaccion_id']);
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
};
