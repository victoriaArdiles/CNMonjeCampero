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
        DB::statement("CREATE VIEW `vw_demanda_asientos` AS select `a`.`nombre_asiento` AS `nombre_asiento`,`r`.`reserva_id` AS `reserva_id`,`e`.`nombre_estado_asiento` AS `nombre_estado_asiento`,`p`.`fecha_proyeccion` AS `fecha_proyeccion` from ((((`cine`.`ct_asientos` `a` left join `cine`.`ct_reservas` `r` on((`a`.`asiento_id` = `r`.`CT_ASIENTOS_asiento_id`))) left join `cine`.`ct_estado_asientos` `e` on((`r`.`CT_ESTADO_ASIENTOS_estado_asiento_id` = `e`.`estado_asiento_id`))) left join `cine`.`ct_proyecciones_salas` `ps` on((`r`.`CT_PROYECCIONES_SALAS_ct_proyeccion_sala` = `ps`.`ct_proyeccion_sala`))) left join `cine`.`ct_proyecciones` `p` on((`ps`.`CT_PROYECCIONES_proyeccion_id` = `p`.`proyeccion_id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_demanda_asientos`");
    }
};
