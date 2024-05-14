<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwEstadoUsuariosView extends Migration
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
            CREATE VIEW `vw_estado_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`e`.`nombre_estado` AS `estado` from (`app_usuarios` `u` join `app_estado_empleados` `e` on((`u`.`APP_ESTADO_EMPLEADOS_estado_id` = `e`.`estado_id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_estado_usuarios`;
        SQL;
    }
}
