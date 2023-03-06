<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('personalinfos', function (Blueprint $table) {
        $table->id();
        $table->string('age');
        $table->string('liveIN');
        $table->unsignedBigInteger('userID')->uniqid ;
        $table->unsignedBigInteger('nationality');
        $table->unsignedBigInteger('originalyCountry');
        $table->unsignedBigInteger('city');
        $table->foreign('userID')->references('id')->on('users');
        $table->foreign('nationality')->references('id')->on('nationalities');
        $table->foreign('originalyCountry')->references('id')->on('originaly_countries');
        $table->foreign('city')->references('id')->on('cities');
        $table->text('notes')->nullable();
        $table->enum('status',[0,1])->default(0);
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
        Schema::dropIfExists('personalinfos');
    }
}
