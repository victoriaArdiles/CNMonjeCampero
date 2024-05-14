<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVwMantenimientoAsientosView extends Migration
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
            CREATE VIEW `vw_mantenimiento_asientos` AS select `ct_asientos`.`nombre_asiento` AS `nombre_asiento`,`ct_asientos`.`fecha_mantenimiento` AS `fecha_mantenimiento`,timestampdiff(MONTH,`ct_asientos`.`fecha_mantenimiento`,curdate()) AS `meses_desde_mantenimiento` from `ct_asientos`
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `vw_mantenimiento_asientos`;
        SQL;
    }
}
