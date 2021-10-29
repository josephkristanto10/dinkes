<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActionDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_doctor', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('id_key_performance')->unsigned();
            $table->foreign('id_key_performance')->references('id')->on('key_performance_doctor');
            $table->integer('id_officer_general')->unsigned();
            $table->foreign('id_officer_general')->references('id')->on('officer_general');
            $table->integer('quantity');
            $table->integer('score_per_action');
            $table->integer('total_score');
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
        Schema::dropIfExists('action_doctor');
    }
}
