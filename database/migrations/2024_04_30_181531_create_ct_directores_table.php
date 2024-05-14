<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_directores', function (Blueprint $table) {
            $table->increments('director_id')->unique();
            $table->string('nombre_completo_director', 100)->nullable();
            $table->string('nombre_director', 60);
            $table->string('apellido_director', 60);
            $table->unsignedInteger('CT_GENEROS_genero_id');
            
            $table->foreign('CT_GENEROS_genero_id', 'fk_CT_DIRECTORES_CT_GENEROS1')->references('genero_id')->on('ct_generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_directores');
    }
}
