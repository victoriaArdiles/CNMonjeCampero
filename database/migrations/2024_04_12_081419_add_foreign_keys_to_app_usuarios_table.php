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
        Schema::table('app_usuarios', function (Blueprint $table) {
            $table->foreign(['APP_ESTADO_EMPLEADOS_estado_id'], 'fk_APP_USUARIOS_APP_ESTADO_EMPLEADOS1')->references(['estado_id'])->on('app_estado_empleados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['APP_TIPO_USUARIOS_tipo_usuario_id'], 'fk_APP_USUARIOS_APP_TIPO_USUARIOS1')->references(['tipo_usuario_id'])->on('app_tipo_usuarios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CT_GENEROS_genero_id'], 'fk_APP_USUARIOS_CT_GENEROS1')->references(['genero_id'])->on('ct_generos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_usuarios', function (Blueprint $table) {
            $table->dropForeign('fk_APP_USUARIOS_APP_ESTADO_EMPLEADOS1');
            $table->dropForeign('fk_APP_USUARIOS_APP_TIPO_USUARIOS1');
            $table->dropForeign('fk_APP_USUARIOS_CT_GENEROS1');
        });
    }
};
