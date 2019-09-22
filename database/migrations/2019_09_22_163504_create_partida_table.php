<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->tinyInteger('comecou');
            $table->string('pim');
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
        Schema::dropIfExists('partida');
    }
}
