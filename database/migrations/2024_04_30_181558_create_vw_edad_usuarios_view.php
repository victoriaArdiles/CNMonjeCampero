<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwEdadUsuariosView extends Migration
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
            CREATE VIEW `vw_edad_usuarios` AS select `app_usuarios`.`nombres_usuario` AS `nombres_usuario`,`app_usuarios`.`apellidos_usuario` AS `apellidos_usuario`,`app_usuarios`.`fecha_nacimiento_usuario` AS `fecha_nacimiento_usuario`,timestampdiff(YEAR,`app_usuarios`.`fecha_nacimiento_usuario`,curdate()) AS `edad` from `app_usuarios`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_edad_usuarios`;
        SQL;
    }
}
