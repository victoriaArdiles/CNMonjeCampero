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
        DB::statement("CREATE VIEW `vw_generar_fecha_registro_cliente` AS select (case when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 1) then 'Enero' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 2) then 'Febrero' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 3) then 'Marzo' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 4) then 'Abril' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 5) then 'Mayo' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 6) then 'Junio' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 7) then 'Julio' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 8) then 'Agosto' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 9) then 'Septiembre' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 10) then 'Octubre' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 11) then 'Noviembre' when (month(`cine`.`ct_clientes`.`fecha_registro_cliente`) = 12) then 'Diciembre' end) AS `mes`,count(0) AS `total_clientes` from `cine`.`ct_clientes` group by `mes`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `vw_generar_fecha_registro_cliente`");
    }
};
