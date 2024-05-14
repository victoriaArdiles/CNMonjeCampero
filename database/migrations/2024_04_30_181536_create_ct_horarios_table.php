<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_horarios', function (Blueprint $table) {
            $table->increments('horario_id')->unique();
            $table->string('nombre_horario', 100)->nullable();
            $table->time('horario');
            $table->unsignedInteger('CT_TIPO_HORARIOS_tipo_horario_id');
            
            $table->foreign('CT_TIPO_HORARIOS_tipo_horario_id', 'fk_CT_HORARIOS_CT_TIPO_HORARIOS1')->references('tipo_horario_id')->on('ct_tipo_horarios');
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
}
