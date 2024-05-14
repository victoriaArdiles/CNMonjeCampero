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
        Schema::create('ct_estado_asientos', function (Blueprint $table) {
            $table->increments('estado_asiento_id')->unique('estado_asiento_id_unique');
            $table->string('nombre_estado_asiento', 20);

            $table->primary(['estado_asiento_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_estado_asientos');
    }
};
