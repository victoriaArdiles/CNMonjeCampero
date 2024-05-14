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
        Schema::table('ct_directores', function (Blueprint $table) {
            $table->foreign(['CT_GENEROS_genero_id'], 'fk_CT_DIRECTORES_CT_GENEROS1')->references(['genero_id'])->on('ct_generos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_directores', function (Blueprint $table) {
            $table->dropForeign('fk_CT_DIRECTORES_CT_GENEROS1');
        });
    }
};
