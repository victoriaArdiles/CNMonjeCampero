<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_usuarios', function (Blueprint $table) {
            $table->increments('usuario_id')->unique();
            $table->string('nombre_acceso_usuario', 30)->nullable();
            $table->string('password_usuario', 12)->nullable();
            $table->string('nombres_usuario', 230);
            $table->string('apellidos_usuario', 200);
            $table->string('ci_usuario', 9);
            $table->date('fecha_nacimiento_usuario');
            $table->date('fecha_registro_usuario');
            $table->integer('antiguedad_mes')->nullable();
            $table->unsignedInteger('APP_TIPO_USUARIOS_tipo_usuario_id');
            $table->unsignedInteger('CT_GENEROS_genero_id');
            $table->unsignedInteger('APP_ESTADO_EMPLEADOS_estado_id');
            
            $table->foreign('APP_ESTADO_EMPLEADOS_estado_id', 'fk_APP_USUARIOS_APP_ESTADO_EMPLEADOS1')->references('estado_id')->on('app_estado_empleados');
            $table->foreign('APP_TIPO_USUARIOS_tipo_usuario_id', 'fk_APP_USUARIOS_APP_TIPO_USUARIOS1')->references('tipo_usuario_id')->on('app_tipo_usuarios');
            $table->foreign('CT_GENEROS_genero_id', 'fk_APP_USUARIOS_CT_GENEROS1')->references('genero_id')->on('ct_generos');
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
}
