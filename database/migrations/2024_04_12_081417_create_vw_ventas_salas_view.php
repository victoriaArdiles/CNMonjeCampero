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
        DB::statement("CREATE VIEW `vw_ventas_salas` AS select `pf`.`pelicula_titulo_completo` AS `titulo_pelicula`,`h`.`nombre_horario` AS `horario`,`s`.`nombre_sala` AS `nombre_sala`,count(`r`.`reserva_id`) AS `total_reservas` from ((((`cine`.`ct_reservas` `r` join `cine`.`ct_proyecciones_salas` `ps` on((`r`.`CT_PROYECCIONES_SALAS_ct_proyeccion_sala` = `ps`.`ct_proyeccion_sala`))) join `cine`.`ct_horarios` `h` on((`ps`.`CT_HORARIOS_horario_id` = `h`.`horario_id`))) join `cine`.`ct_salas` `s` on((`ps`.`CT_SALAS_sala_id` = `s`.`sala_id`))) join `cine`.`ct_peliculas_formatos` `pf` on((`ps`.`CT_PELICULAS_FORMATOS_ct_pelicula_formato` = `pf`.`ct_pelicula_formato`))) group by `pf`.`pelicula_titulo_completo`,`h`.`nombre_horario`,`s`.`nombre_sala` order by `total_reservas` desc");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_ventas_salas`");
    }
};
