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
        Schema::create('app_estado_empleados', function (Blueprint $table) {
            $table->increments('estado_id')->unique('estado_id_unique');
            $table->string('nombre_estado', 40);

            $table->primary(['estado_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_estado_empleados');
    }
};
