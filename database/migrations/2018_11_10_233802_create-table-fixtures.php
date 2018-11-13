<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFixtures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home')->unsigned();
            $table->integer('away')->unsigned();
            $table->string('date');
            $table->integer('season_id')->unsigned();
            $table->integer('competition')->unsigned();
            $table->integer('home_score')->nullable();
            $table->integer('away_score')->nullable();
            $table->foreign('home')->references('id')
            ->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('away')->references('id')
            ->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('season_id')->references('id')
            ->on('seasons')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('competition')->references('id')
            ->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fixtures');
    }
}
