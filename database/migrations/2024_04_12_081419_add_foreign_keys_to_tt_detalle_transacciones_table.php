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
        Schema::table('tt_detalle_transacciones', function (Blueprint $table) {
            $table->foreign(['APP_USUARIOS_usuario_id'], 'fk_TT_DETALLE_TRANSACCIONES_APP_USUARIOS1')->references(['usuario_id'])->on('app_usuarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_CLIENTES_cliente_id'], 'fk_TT_DETALLE_TRANSACCIONES_CT_CLIENTES1')->references(['cliente_id'])->on('ct_clientes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['TT_ESTADO_TRANSACCIONES_estado_transaccion_id'], 'fk_TT_DETALLE_TRANSACCIONES_TT_ESTADO_TRANSACCIONES1')->references(['estado_transaccion_id'])->on('tt_estado_transacciones')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['TT_TRANSACCIONES_RESERVAS_tt_transaccion_reserva'], 'fk_TT_DETALLE_TRANSACCIONES_TT_TRANSACCIONES_RESERVAS1')->references(['tt_transaccion_reserva'])->on('tt_transacciones_reservas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tt_detalle_transacciones', function (Blueprint $table) {
            $table->dropForeign('fk_TT_DETALLE_TRANSACCIONES_APP_USUARIOS1');
            $table->dropForeign('fk_TT_DETALLE_TRANSACCIONES_CT_CLIENTES1');
            $table->dropForeign('fk_TT_DETALLE_TRANSACCIONES_TT_ESTADO_TRANSACCIONES1');
            $table->dropForeign('fk_TT_DETALLE_TRANSACCIONES_TT_TRANSACCIONES_RESERVAS1');
        });
    }
};
