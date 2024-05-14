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
        DB::statement("CREATE VIEW `vw_cargo_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`t`.`nombre_tipo_usuario` AS `nombre_tipo_usuario`,count(0) AS `cantidad` from (`cine`.`app_usuarios` `u` join `cine`.`app_tipo_usuarios` `t` on((`u`.`APP_TIPO_USUARIOS_tipo_usuario_id` = `t`.`tipo_usuario_id`))) group by `u`.`nombres_usuario`,`u`.`apellidos_usuario`,`t`.`nombre_tipo_usuario`,`u`.`APP_TIPO_USUARIOS_tipo_usuario_id`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_cargo_usuarios`");
    }
};
