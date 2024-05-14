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
        Schema::create('tt_transacciones_reservas', function (Blueprint $table) {
            $table->increments('tt_transaccion_reserva');
            $table->unsignedInteger('TT_TRANSACCIONES_transaccion_id')->nullable()->index('fk_tt_transacciones_reservas_tt_transacciones1_idx');
            $table->integer('total')->nullable();
            $table->string('TT_TRANSACCIONES_RESERVAScol', 45)->nullable();

            $table->unique(['tt_transaccion_reserva'], 'tt_transaccion_reserva_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_transacciones_reservas');
    }
};
