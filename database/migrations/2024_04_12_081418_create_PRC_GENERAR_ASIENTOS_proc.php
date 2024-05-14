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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `PRC_GENERAR_ASIENTOS`()
BEGIN
    DECLARE fila INT;
    DECLARE num_asiento INT;
    DECLARE fecha_mantenimiento DATE;
    SET fila = 1;
    WHILE fila <= 6 DO
        SET num_asiento = 1;
        WHILE num_asiento <= 10 DO
            SET fecha_mantenimiento = DATE_ADD('2020-01-01', INTERVAL FLOOR(RAND() * 1096) DAY); -- 1096 días = 3 años
            INSERT INTO cine.CT_ASIENTOS (nombre_asiento, numero_asiento, fecha_mantenimiento, CT_FILA_ASIENTOS_fila_asiento_id)
            VALUES (CONCAT('Fila ', fila, ' - Asiento ', num_asiento), num_asiento, fecha_mantenimiento, fila);
            SET num_asiento = num_asiento + 1;
        END WHILE;
        SET fila = fila + 1;
    END WHILE;
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS PRC_GENERAR_ASIENTOS");
    }
};
