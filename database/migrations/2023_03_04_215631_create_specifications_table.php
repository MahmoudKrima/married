<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->text('skin_colour');
            $table->bigInteger('height');
            $table->text('human_race');
            $table->integer('weight');
            $table->text('beauty');
            $table->bigInteger('body_mass'); //كتلة الجسم
            $table->enum('surgery',[0,1]);
            $table->string('Health_status');
            $table->text('about_your_self');
            $table->text('exterior');
            $table->enum('smoke',[0,1]);
            $table->text('mention_something');
            $table->enum('status',[0,1]);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('specifications');
    }
}
