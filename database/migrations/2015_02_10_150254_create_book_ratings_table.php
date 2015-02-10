<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookRatingsTable extends Migration {

    public function up()
    {
        Schema::create('book_ratings', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->references('id')->on('users');
            $table->unsignedInteger('book_id')->references('id')->on('books');
            $table->integer('rating')->nullable();
            $table->timestamps();
        });
	}

    public function down()
    {
        Schema::drop('book_ratings');
    }

}
