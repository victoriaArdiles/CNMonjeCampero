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
        DB::statement("CREATE VIEW `vw_estado_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`e`.`nombre_estado` AS `estado` from (`cine`.`app_usuarios` `u` join `cine`.`app_estado_empleados` `e` on((`u`.`APP_ESTADO_EMPLEADOS_estado_id` = `e`.`estado_id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_estado_usuarios`");
    }
};
