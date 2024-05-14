<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwClasificacionPeliculasView extends Migration
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
            CREATE VIEW `vw_clasificacion_peliculas` AS select `u`.`titulo_pelicula` AS `titulo_pelicula`,`u`.`fecha_estreno_pelicula` AS `fecha_estreno_pelicula`,`e`.`nombre_clasificacion` AS `clasificacion` from (`ct_peliculas` `u` join `ct_clasificacion` `e` on((`u`.`CT_CLASIFICACION_clasificacion_id` = `e`.`clasificacion_id`)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_clasificacion_peliculas`;
        SQL;
    }
}
