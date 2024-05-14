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
        Schema::table('ct_asientos', function (Blueprint $table) {
            $table->foreign(['CT_FILA_ASIENTOS_fila_asiento_id'], 'fk_CT_ASIENTOS_CT_FILA_ASIENTOS1')->references(['fila_asiento_id'])->on('ct_fila_asientos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_asientos', function (Blueprint $table) {
            $table->dropForeign('fk_CT_ASIENTOS_CT_FILA_ASIENTOS1');
        });
    }
};
