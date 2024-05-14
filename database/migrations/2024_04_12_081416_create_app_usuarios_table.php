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
        Schema::create('app_usuarios', function (Blueprint $table) {
            $table->increments('usuario_id');
            $table->string('nombre_acceso_usuario', 30)->nullable();
            $table->string('password_usuario', 12)->nullable();
            $table->string('nombres_usuario', 230);
            $table->string('apellidos_usuario', 200);
            $table->string('ci_usuario', 9);
            $table->date('fecha_nacimiento_usuario');
            $table->date('fecha_registro_usuario');
            $table->integer('antiguedad_mes')->nullable();
            $table->unsignedInteger('APP_TIPO_USUARIOS_tipo_usuario_id')->index('fk_app_usuarios_app_tipo_usuarios1_idx');
            $table->unsignedInteger('CT_GENEROS_genero_id')->index('fk_app_usuarios_ct_generos1_idx');
            $table->unsignedInteger('APP_ESTADO_EMPLEADOS_estado_id')->index('fk_app_usuarios_app_estado_empleados1_idx');

            $table->unique(['usuario_id'], 'usuario_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuarios');
    }
};
