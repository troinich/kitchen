<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('post_id');
            $table->integer('tag_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //what shall we do if refresh or roll back all the migrations
        Schema::drop('post_tag');
    }
}
