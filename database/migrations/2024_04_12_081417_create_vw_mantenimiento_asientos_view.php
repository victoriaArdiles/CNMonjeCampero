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
        DB::statement("CREATE VIEW `vw_mantenimiento_asientos` AS select `cine`.`ct_asientos`.`nombre_asiento` AS `nombre_asiento`,`cine`.`ct_asientos`.`fecha_mantenimiento` AS `fecha_mantenimiento`,timestampdiff(MONTH,`cine`.`ct_asientos`.`fecha_mantenimiento`,curdate()) AS `meses_desde_mantenimiento` from `cine`.`ct_asientos`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_mantenimiento_asientos`");
    }
};
