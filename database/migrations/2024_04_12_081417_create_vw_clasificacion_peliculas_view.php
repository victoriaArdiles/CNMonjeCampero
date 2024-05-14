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
        DB::statement("CREATE VIEW `vw_clasificacion_peliculas` AS select `u`.`titulo_pelicula` AS `titulo_pelicula`,`u`.`fecha_estreno_pelicula` AS `fecha_estreno_pelicula`,`e`.`nombre_clasificacion` AS `clasificacion` from (`cine`.`ct_peliculas` `u` join `cine`.`ct_clasificacion` `e` on((`u`.`CT_CLASIFICACION_clasificacion_id` = `e`.`clasificacion_id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_clasificacion_peliculas`");
    }
};
