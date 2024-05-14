<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_transacciones', function (Blueprint $table) {
            $table->increments('transaccion_id')->unique();
            $table->string('numero_transaccional', 50)->nullable();
            $table->date('fecha_transaccion')->nullable();
            $table->unsignedInteger('CT_CLIENTES_cliente_id')->nullable();
            $table->integer('total_asientos')->default(0);
            $table->decimal('total', 10, 0)->default(0);
            
            $table->foreign('CT_CLIENTES_cliente_id', 'fk_TT_TRANSACCIONES_CT_CLIENTES1')->references('cliente_id')->on('ct_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_transacciones');
    }
}
