<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_asientos', function (Blueprint $table) {
            $table->increments('asiento_id')->unique();
            $table->string('nombre_asiento', 70)->nullable();
            $table->integer('numero_asiento');
            $table->date('fecha_mantenimiento')->nullable();
            $table->unsignedInteger('CT_FILA_ASIENTOS_fila_asiento_id');
            
            $table->foreign('CT_FILA_ASIENTOS_fila_asiento_id', 'fk_CT_ASIENTOS_CT_FILA_ASIENTOS1')->references('fila_asiento_id')->on('ct_fila_asientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_asientos');
    }
}
