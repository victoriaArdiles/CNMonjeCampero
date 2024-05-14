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
        Schema::create('ct_asientos', function (Blueprint $table) {
            $table->increments('asiento_id')->unique('asiento_id_unique');
            $table->string('nombre_asiento', 70)->nullable();
            $table->integer('numero_asiento');
            $table->date('fecha_mantenimiento')->nullable();
            $table->unsignedInteger('CT_FILA_ASIENTOS_fila_asiento_id')->index('fk_ct_asientos_ct_fila_asientos1_idx');

            $table->primary(['asiento_id']);
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
};
