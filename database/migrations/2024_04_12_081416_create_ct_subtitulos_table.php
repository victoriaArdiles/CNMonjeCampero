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
        Schema::create('ct_subtitulos', function (Blueprint $table) {
            $table->increments('subtitulo_id');
            $table->string('nombre_subtitulo', 30);
            $table->string('codigo_subtitulo', 10);

            $table->unique(['subtitulo_id'], 'subtitulo_id_unique');
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
};
