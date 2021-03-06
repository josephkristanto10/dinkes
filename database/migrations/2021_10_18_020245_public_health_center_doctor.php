<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublicHealthCenterDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officer_general', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('public_health_center')->unsigned();
            $table->foreign('public_health_center')->references('id')->on('public_health_center');
            $table->integer('id_role')->unsigned();
            $table->foreign('id_role')->references('id')->on('role');
            $table->integer('id_position')->unsigned();
            $table->foreign('id_position')->references('id')->on('position');
            $table->string('name');
            $table->string('nik');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('public_health_center_doctor');
    }
}
