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
        Schema::create('ct_proyecciones', function (Blueprint $table) {
            $table->increments('proyeccion_id')->unique('horario_id_unique');
            $table->string('dia_proyeccion', 150)->nullable();
            $table->date('fecha_proyeccion');

            $table->primary(['proyeccion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_proyecciones');
    }
};
