<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtProyeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_proyecciones', function (Blueprint $table) {
            $table->increments('proyeccion_id')->unique();
            $table->string('dia_proyeccion', 150)->nullable();
            $table->date('fecha_proyeccion');
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
}
