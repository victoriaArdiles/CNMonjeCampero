<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_clientes', function (Blueprint $table) {
            $table->increments('cliente_id')->unique('cleinte_id_unique');
            $table->string('nombres_cliente', 60);
            $table->string('apellidos_cliente', 45);
            $table->string('correo_electronico_cliente', 30);
            $table->string('password_cliente', 10);
            $table->date('fecha_nacimiento')->nullable();
            $table->date('fecha_registro_cliente')->nullable();
            $table->string('direccion', 40)->nullable();
            $table->string('telefono', 8)->nullable();
            $table->unsignedInteger('CT_GENEROS_genero_id')->index('fk_ct_clientes_ct_generos_idx');

            $table->primary(['cliente_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ct_clientes');
    }
};
