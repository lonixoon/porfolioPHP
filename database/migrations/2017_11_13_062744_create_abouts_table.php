<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('html5');
            $table->integer('css3');
            $table->integer('js');
            $table->integer('php');
            $table->integer('mysql');
            $table->integer('nodejs');
            $table->integer('mongodb');
            $table->integer('git');
            $table->integer('gulp');
            $table->integer('bower');
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
        Schema::dropIfExists('abouts');
    }
}
