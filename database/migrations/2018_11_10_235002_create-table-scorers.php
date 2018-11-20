<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableScorers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goals')->default(1);
            $table->integer('assists')->default(1);
            $table->integer('player_id')->unsigned()->nullabble();
            $table->foreign('player_id')->references('id')
            ->on('players')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fixture_id')->unsigned()->nullable();
            $table->string('scorer')->nullable();
            $table->string('assist')->nullable();
            $table->foreign('fixture_id')->references('id')
            ->on('fixtures')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('scorers');
    }
}
