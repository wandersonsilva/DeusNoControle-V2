<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorteiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campeonato_id');
            $table->integer('id_jogador');
            $table->integer('num_jogador');
            $table->timestamps('num_jogador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sorteios');
    }
}
