<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtSubtitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_subtitulos', function (Blueprint $table) {
            $table->increments('subtitulo_id')->unique();
            $table->string('nombre_subtitulo', 30);
            $table->string('codigo_subtitulo', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_subtitulos');
    }
}
