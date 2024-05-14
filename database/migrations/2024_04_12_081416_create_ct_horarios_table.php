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
        Schema::create('ct_horarios', function (Blueprint $table) {
            $table->increments('horario_id')->unique('horario_id_unique');
            $table->string('nombre_horario', 100)->nullable();
            $table->time('horario');
            $table->unsignedInteger('CT_TIPO_HORARIOS_tipo_horario_id')->index('fk_ct_horarios_ct_tipo_horarios1_idx');

            $table->primary(['horario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_horarios');
    }
};
