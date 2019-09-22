<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoHasJogadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_has_jogador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('frase');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupo');
            $table->unsignedBigInteger('partida_id');
            $table->foreign('partida_id')->references('id')->on('partida');
            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professor');
            $table->unsignedBigInteger('baralho_id');
            $table->foreign('baralho_id')->references('id')->on('baralho');
            $table->unsignedBigInteger('jogador_id');
            $table->foreign('jogador_id')->references('id')->on('jogador');
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
        Schema::dropIfExists('grupo_has_jogador');
    }
}
