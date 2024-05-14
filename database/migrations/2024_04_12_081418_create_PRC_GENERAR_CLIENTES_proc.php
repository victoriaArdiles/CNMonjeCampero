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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `PRC_GENERAR_CLIENTES`()
BEGIN
    DECLARE contador INT DEFAULT 0;
    DECLARE nombre_cliente VARCHAR(60);
    DECLARE apellido_cliente VARCHAR(45);
    DECLARE correo_electronico VARCHAR(50);
    DECLARE contra VARCHAR(50);
    DECLARE telefono VARCHAR(8);
    DECLARE genero_id INT;
    DECLARE fecha_registro DATE;
    CREATE TEMPORARY TABLE IF NOT EXISTS temp_nombres (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(60),
        apellido VARCHAR(45)
    );
    INSERT INTO temp_nombres (nombre, apellido)
    VALUES
        ('Juan', 'García'),
        ('María', 'Martínez'),
        ('Luis', 'López'),
        ('Ana', 'González'),
        ('Pedro', 'Rodríguez'),
        ('Laura', 'Hernández'),
        ('Diego', 'Sánchez'),
        ('Sara', 'Pérez'),
        ('Carlos', 'Martín'),
        ('Alvaro', 'Gonzales'),
        ('Diego', 'Rios'),
        ('Elena', 'Gómez');
    WHILE contador < 30000 DO
        SELECT nombre, apellido INTO nombre_cliente, apellido_cliente
        FROM temp_nombres
        ORDER BY RAND()
        LIMIT 1;
        SET correo_electronico = CONCAT(nombre_cliente, '.', apellido_cliente, '@gmail.com');
        SET contra = CONCAT(SUBSTRING(apellido_cliente, 1, 5), '.', SUBSTRING(nombre_cliente, 1, 4));

        SET telefono = CONCAT(FLOOR(RAND() * (79999999 - 60000000 + 1)) + 60000000);
        SET genero_id = FLOOR(RAND() * (SELECT COUNT(*) FROM CT_GENEROS)) + 1;
        SET fecha_registro = MAKEDATE(2023, 1) + INTERVAL FLOOR(RAND() * 365) DAY;
        INSERT INTO CT_CLIENTES (nombres_cliente, 
		  apellidos_cliente, 
		  correo_electronico_cliente, 
		  password_cliente, 
		  fecha_nacimiento, 
		  fecha_registro_cliente, 
		  direccion, 
		  telefono, 
		  CT_GENEROS_genero_id)
        VALUES (nombre_cliente, 
		  apellido_cliente, 
		  correo_electronico, 
		  contra, 
		  NULL, 
		  fecha_registro, 
		  NULL, 
		  telefono, 
		  genero_id);

        SET contador = contador + 1;
    END WHILE;
    DROP TEMPORARY TABLE IF EXISTS temp_nombres;
END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS PRC_GENERAR_CLIENTES");
    }
};
