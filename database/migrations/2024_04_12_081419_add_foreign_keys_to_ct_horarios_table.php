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
        Schema::table('ct_horarios', function (Blueprint $table) {
            $table->foreign(['CT_TIPO_HORARIOS_tipo_horario_id'], 'fk_CT_HORARIOS_CT_TIPO_HORARIOS1')->references(['tipo_horario_id'])->on('ct_tipo_horarios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_horarios', function (Blueprint $table) {
            $table->dropForeign('fk_CT_HORARIOS_CT_TIPO_HORARIOS1');
        });
    }
};
