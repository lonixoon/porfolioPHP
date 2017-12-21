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
            $table->integer('html5')->nullable();
            $table->integer('css3')->nullable();
            $table->integer('js')->nullable();
            $table->integer('php')->nullable();
            $table->integer('mysql')->nullable();
            $table->integer('nodejs')->nullable();
            $table->integer('mongodb')->nullable();
            $table->integer('git')->nullable();
            $table->integer('gulp')->nullable();
            $table->integer('bower')->nullable();
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
