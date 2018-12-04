<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToTablesTablesSpocs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scorers', function (Blueprint $table) {
            $table->integer('assistplayer_id')->unsigned()->nullable();
            $table->foreign('assistplayer_id')->references('id')
            ->on('players')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scorers', function (Blueprint $table) {
            $table->dropColumn('assistplayer_id');
        });
    }
}
