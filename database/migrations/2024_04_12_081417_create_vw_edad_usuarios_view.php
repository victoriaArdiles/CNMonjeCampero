<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `vw_edad_usuarios` AS select `cine`.`app_usuarios`.`nombres_usuario` AS `nombres_usuario`,`cine`.`app_usuarios`.`apellidos_usuario` AS `apellidos_usuario`,`cine`.`app_usuarios`.`fecha_nacimiento_usuario` AS `fecha_nacimiento_usuario`,timestampdiff(YEAR,`cine`.`app_usuarios`.`fecha_nacimiento_usuario`,curdate()) AS `edad` from `cine`.`app_usuarios`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_edad_usuarios`");
    }
};
