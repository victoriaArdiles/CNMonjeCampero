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
        Schema::create('app_tipo_usuarios', function (Blueprint $table) {
            $table->increments('tipo_usuario_id');
            $table->string('nombre_tipo_usuario', 35);

            $table->unique(['tipo_usuario_id'], 'tipo_usuario_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_tipo_usuarios');
    }
};
