<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_salas', function (Blueprint $table) {
            $table->increments('sala_id')->unique();
            $table->string('nombre_sala_formato', 50)->nullable();
            $table->string('nombre_sala', 15);
            $table->date('fecha_apertura')->nullable();
            $table->date('fecha_mantenimiento')->nullable();
            $table->unsignedInteger('CT_FORMATOS_formato_id');
            
            $table->foreign('CT_FORMATOS_formato_id', 'fk_CT_SALAS_CT_FORMATOS1')->references('formato_id')->on('ct_formatos');
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
}
