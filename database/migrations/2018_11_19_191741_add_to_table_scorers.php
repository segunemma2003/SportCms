<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToTableScorers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scorers', function (Blueprint $table) {
            $table->string('opponentScorer')->nullable();
            $table->string('opponentAssist')->nullable();
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
            $table->dropColumn('opponentScorer');
            $table->dropColumn('opponentAssist');
        });
    }
}
