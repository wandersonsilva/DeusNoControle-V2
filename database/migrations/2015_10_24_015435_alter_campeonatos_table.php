<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCampeonatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Campeonatos', function (Blueprint $table) {

            $table->integer('categoria_id')->unsigned()->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Campeonatos', function (Blueprint $table) {

            $table->dropForeign('campeonatos_categoria_id_foreign');
            $table->dropColumn('categoria_id');

        });
    }
}
