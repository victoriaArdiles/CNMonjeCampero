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
        Schema::table('tt_transacciones_reservas', function (Blueprint $table) {
            $table->foreign(['TT_TRANSACCIONES_transaccion_id'], 'fk_TT_TRANSACCIONES_RESERVAS_TT_TRANSACCIONES1')->references(['transaccion_id'])->on('tt_transacciones')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tt_transacciones_reservas', function (Blueprint $table) {
            $table->dropForeign('fk_TT_TRANSACCIONES_RESERVAS_TT_TRANSACCIONES1');
        });
    }
};
