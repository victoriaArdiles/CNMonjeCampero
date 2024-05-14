<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwCargoUsuariosView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<SQL
            CREATE VIEW `vw_cargo_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`t`.`nombre_tipo_usuario` AS `nombre_tipo_usuario` from (`app_usuarios` `u` join `app_tipo_usuarios` `t` on((`u`.`APP_TIPO_USUARIOS_tipo_usuario_id` = `t`.`tipo_usuario_id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_cargo_usuarios`;
        SQL;
    }
}
