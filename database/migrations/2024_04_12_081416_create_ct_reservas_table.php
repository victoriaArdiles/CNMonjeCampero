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
        Schema::create('ct_reservas', function (Blueprint $table) {
            $table->increments('reserva_id');
            $table->unsignedInteger('CT_PROYECCIONES_SALAS_ct_proyeccion_sala')->index('fk_ct_reservas_ct_proyecciones_salas1_idx');
            $table->unsignedInteger('CT_ASIENTOS_asiento_id')->index('fk_ct_reservas_ct_asientos1_idx');
            $table->unsignedInteger('CT_ESTADO_ASIENTOS_estado_asiento_id')->nullable()->index('fk_ct_reservas_ct_estado_asientos1_idx');

            $table->unique(['reserva_id'], 'reserva_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_reservas');
    }
};
