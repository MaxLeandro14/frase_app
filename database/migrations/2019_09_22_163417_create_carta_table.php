<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('baralho_id');
            $table->foreign('baralho_id')->references('id')->on('baralho');
            $table->string('palavra', 100);
            $table->string('significado', 100);
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
        Schema::dropIfExists('carta');
    }
}
