<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_allcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('id')
            ->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('allcategory_id')->nullable()->unsigned();
            $table->foreign('allcategory_id')->references('id')
            ->on('allcategories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('posts_allcategories');
    }
}
