<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfrontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrontos', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('campeonato_id');

            $table->integer('p1_id')->unsigned()->nullable();
            $table->foreign('p1_id')->references('id')->on('participantes');

            $table->integer('p2_id')->unsigned()->nullable();
            $table->foreign('p2_id')->references('id')->on('participantes');

            $table->integer('pontos_p1')->default('0');
            $table->integer('pontos_p2')->default('0');
            $table->integer('num_jogador1')->default('0');
            $table->integer('num_jogador2')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('confrontos');
    }
}
