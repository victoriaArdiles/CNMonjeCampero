<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_clientes', function (Blueprint $table) {
            $table->increments('cliente_id')->unique();
            $table->string('nombres_cliente', 60);
            $table->string('apellidos_cliente', 45);
            $table->string('correo_electronico_cliente', 30);
            $table->string('password_cliente', 10);
            $table->date('fecha_nacimiento')->nullable();
            $table->date('fecha_registro_cliente')->nullable();
            $table->string('direccion', 40)->nullable();
            $table->string('telefono', 8)->nullable();
            $table->integer('carnet_identidad')->nullable();
            $table->unsignedInteger('CT_GENEROS_genero_id');
            
            $table->foreign('CT_GENEROS_genero_id', 'fk_CT_CLIENTES_CT_GENEROS')->references('genero_id')->on('ct_generos');
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
}
