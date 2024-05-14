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
        Schema::create('tt_transacciones', function (Blueprint $table) {
            $table->increments('transaccion_id');
            $table->integer('total_asientos')->nullable();
            $table->string('nombre_transaccion', 15)->nullable();

            $table->unique(['transaccion_id'], 'transaccion_id_unique');
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
};
