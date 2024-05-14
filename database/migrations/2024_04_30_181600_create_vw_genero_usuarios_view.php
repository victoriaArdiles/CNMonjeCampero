<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwGeneroUsuariosView extends Migration
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
            CREATE VIEW `vw_genero_usuarios` AS select `u`.`nombres_usuario` AS `nombres_usuario`,`u`.`apellidos_usuario` AS `apellidos_usuario`,`g`.`nombre_genero` AS `genero` from (`app_usuarios` `u` join `ct_generos` `g` on((`u`.`CT_GENEROS_genero_id` = `g`.`genero_id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_genero_usuarios`;
        SQL;
    }
}
