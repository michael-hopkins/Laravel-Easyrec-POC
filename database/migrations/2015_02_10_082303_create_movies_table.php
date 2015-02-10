<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->date('release_date')->nullable();
            $table->string('imdb_url')->nullable();
            $table->integer('unknown')->nullable();
            $table->integer('action')->nullable();
            $table->integer('adventure')->nullable();
            $table->integer('animation')->nullable();
            $table->integer('childrens')->nullable();
            $table->integer('comedy')->nullable();
            $table->integer('crime')->nullable();
            $table->integer('documentary')->nullable();
            $table->integer('drama')->nullable();
            $table->integer('fantasy')->nullable();
            $table->integer('film-Noir')->nullable();
            $table->integer('horror')->nullable();
            $table->integer('musical')->nullable();
            $table->integer('mystery')->nullable();
            $table->integer('romance')->nullable();
            $table->integer('sci-Fi')->nullable();
            $table->integer('war')->nullable();
            $table->integer('western')->nullable();
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
        Schema::drop('movies');
    }

}
