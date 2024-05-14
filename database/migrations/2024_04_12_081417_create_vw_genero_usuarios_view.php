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
        DB::statement("CREATE VIEW `vw_genero_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`g`.`nombre_genero` AS `genero` from (`cine`.`app_usuarios` `u` join `cine`.`ct_generos` `g` on((`u`.`CT_GENEROS_genero_id` = `g`.`genero_id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_genero_usuarios`");
    }
};
