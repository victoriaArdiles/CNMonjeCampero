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
        Schema::create('ct_formatos', function (Blueprint $table) {
            $table->increments('formato_id')->unique('formato_id_unique');
            $table->string('nombre_formato', 45);
            $table->string('descripcion_formato', 45)->nullable();

            $table->primary(['formato_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_formatos');
    }
};
