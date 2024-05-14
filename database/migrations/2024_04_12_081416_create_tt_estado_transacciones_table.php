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
        Schema::create('tt_estado_transacciones', function (Blueprint $table) {
            $table->increments('estado_transaccion_id')->unique('estado_transaccion_id_unique');
            $table->string('nombre_estado_transaccion', 20);

            $table->primary(['estado_transaccion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_estado_transacciones');
    }
};
