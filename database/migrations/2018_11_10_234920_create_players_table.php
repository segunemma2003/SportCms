<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dob')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('shirt_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('welcome_video')->nullable();
            $table->string('injury')->default(1);
            $table->string('years_of_contract')->nullable();
            $table->string('salary')->nullable();
            $table->string('year_signed')->nullable();
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')
            ->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('former_club')->nullable()->default(0)->unsigned();
            $table->foreign('former_club')->references('id')
            ->on('teams')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('players');
    }
}
