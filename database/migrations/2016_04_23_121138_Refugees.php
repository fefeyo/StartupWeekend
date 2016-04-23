<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Refugees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugees', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('situation');
            $table->double('lat', 15, 8);
            $table->double('lng', 15, 8);
            $table->json('necessities');
            $table->integer('amount');
            $table->string('place');
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
        Schema::drop('refugees');
    }
}
