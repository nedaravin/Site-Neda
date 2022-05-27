<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('machine_name')->unique();

            $table->string('title_en')->unique();
            $table->string('description_en')->nullable();

            $table->string('title_si')->unique();
            $table->string('description_si')->nullable();

            $table->string('title_ta')->unique();
            $table->string('description_ta')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(1);

            $table->bigInteger('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
