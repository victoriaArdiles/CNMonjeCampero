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
        Schema::create('ct_tipo_asientos', function (Blueprint $table) {
            $table->increments('asiento_id')->unique('asiento_id_unique');
            $table->string('nombre_asiento', 30);
            $table->tinyText('descripcion_asiento')->nullable();

            $table->primary(['asiento_id']);
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
};
