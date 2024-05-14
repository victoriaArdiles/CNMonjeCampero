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
        Schema::create('ct_clasificacion', function (Blueprint $table) {
            $table->increments('clasificacion_id')->unique('clasificacion_id_unique');
            $table->string('nombre_clasificacion', 10);
            $table->string('descripcion_clasificacion', 35)->nullable();

            $table->primary(['clasificacion_id']);
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
};
