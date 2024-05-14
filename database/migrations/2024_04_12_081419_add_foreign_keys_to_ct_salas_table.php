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
        Schema::table('ct_salas', function (Blueprint $table) {
            $table->foreign(['CT_FORMATOS_formato_id'], 'fk_CT_SALAS_CT_FORMATOS1')->references(['formato_id'])->on('ct_formatos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_salas', function (Blueprint $table) {
            $table->dropForeign('fk_CT_SALAS_CT_FORMATOS1');
        });
    }
};
