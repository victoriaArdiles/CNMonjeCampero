<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtTipoAsientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_tipo_asientos', function (Blueprint $table) {
            $table->increments('asiento_id')->unique();
            $table->string('nombre_asiento', 30);
            $table->string('descripcion_asiento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_tipo_asientos');
    }
}
