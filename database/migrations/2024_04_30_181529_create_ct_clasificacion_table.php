<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtClasificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_clasificacion', function (Blueprint $table) {
            $table->increments('clasificacion_id')->unique();
            $table->string('nombre_clasificacion', 10);
            $table->string('descripcion_clasificacion', 35)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_clasificacion');
    }
}
