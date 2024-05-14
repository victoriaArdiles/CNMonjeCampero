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
        Schema::create('ct_directores', function (Blueprint $table) {
            $table->increments('director_id')->unique('director_id_unique');
            $table->string('nombre_completo_director', 100)->nullable();
            $table->string('nombre_director', 60);
            $table->string('apellido_director', 60);
            $table->unsignedInteger('CT_GENEROS_genero_id')->index('fk_ct_directores_ct_generos1_idx');

            $table->primary(['director_id']);
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
};
