<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('commenterid')->unsigned();
            $table->bigInteger('postid')->unsigned();
            $table->string('message');
            $table->integer('score');
            //Foreign key constraints
            $table->foreign('commenterid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('postid')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
