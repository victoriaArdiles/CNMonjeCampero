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
        Schema::create('ct_genero_peliculas', function (Blueprint $table) {
            $table->increments('genero_id')->unique('genero_id_unique');
            $table->string('nombre_genero_pelicula', 45);

            $table->primary(['genero_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_genero_peliculas');
    }
};
