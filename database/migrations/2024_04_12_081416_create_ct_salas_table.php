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
        Schema::create('ct_salas', function (Blueprint $table) {
            $table->increments('sala_id');
            $table->string('nombre_sala_formato', 50)->nullable();
            $table->string('nombre_sala', 15);
            $table->date('fecha_apertura')->nullable();
            $table->date('fecha_mantenimiento')->nullable();
            $table->unsignedInteger('CT_FORMATOS_formato_id')->index('fk_ct_salas_ct_formatos1_idx');

            $table->unique(['sala_id'], 'sala_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_salas');
    }
};
