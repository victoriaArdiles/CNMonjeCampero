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
        DB::statement("CREATE VIEW `vw_formato_pelicula` AS select year(`cine`.`ct_peliculas`.`fecha_estreno_pelicula`) AS `año`,avg(`cine`.`ct_peliculas`.`duracion_pelicula`) AS `duracion_promedio` from `cine`.`ct_peliculas` group by year(`cine`.`ct_peliculas`.`fecha_estreno_pelicula`) order by `año`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_formato_pelicula`");
    }
};
