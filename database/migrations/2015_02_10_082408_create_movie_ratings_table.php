<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieRatingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_ratings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('user_id')->references('id')->on('users');
            $table->unsignedInteger('movie_id')->references('id')->on('movies');
            $table->integer('rating')->nullable();
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
        Schema::drop('movie_ratings');
    }

}
