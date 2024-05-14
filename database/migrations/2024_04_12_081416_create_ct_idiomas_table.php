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
        Schema::create('ct_idiomas', function (Blueprint $table) {
            $table->increments('idioma_id')->unique('idioma_id_unique');
            $table->string('nombre_idioma', 30);
            $table->string('codigo_idioma', 10);

            $table->primary(['idioma_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_idiomas');
    }
};
