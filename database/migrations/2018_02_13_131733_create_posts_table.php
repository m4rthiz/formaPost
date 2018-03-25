<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('title');
            $table->text('desc');
            $table->text('dificulties');
            $table->text('acquired');
            $table->time('codingTime');
            $table->timestamps();
        });
        Schema::create('dictionary_post', function (Blueprint $table){
            $table->increments('id');
            $table->integer('dictionary_id');
            $table->integer('post_id');
            $table->foreign('dictionary_id')->references('id')->on('dictionary')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('post')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
