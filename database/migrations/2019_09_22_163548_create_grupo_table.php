<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('partida_nivel');
            $table->string('palavras');
            $table->unsignedBigInteger('partida_id');
            $table->foreign('partida_id')->references('id')->on('partida');
            $table->unsignedBigInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professor');
            $table->unsignedBigInteger('baralho_id');
            $table->foreign('baralho_id')->references('id')->on('baralho');
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
        Schema::dropIfExists('grupo');
    }
}
