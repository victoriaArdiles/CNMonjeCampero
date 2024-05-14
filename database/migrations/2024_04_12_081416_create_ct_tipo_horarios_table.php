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
        Schema::create('ct_tipo_horarios', function (Blueprint $table) {
            $table->increments('tipo_horario_id')->unique('id_tipo_horario_unique');
            $table->string('nombre_tipo_horario', 20);

            $table->primary(['tipo_horario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_tipo_horarios');
    }
};
