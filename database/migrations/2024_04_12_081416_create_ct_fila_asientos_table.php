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
        Schema::create('ct_fila_asientos', function (Blueprint $table) {
            $table->increments('fila_asiento_id')->unique('fila_asiento_id_unique');
            $table->string('nombre_fila_asiento', 3);
            $table->tinyText('descripcion')->nullable();

            $table->primary(['fila_asiento_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_fila_asientos');
    }
};
