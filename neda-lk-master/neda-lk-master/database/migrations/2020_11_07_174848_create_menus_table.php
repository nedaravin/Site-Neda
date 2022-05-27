<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_en')->nullable();
            $table->string('title_si')->nullable();
            $table->string('title_ta')->nullable();

            $table->string('url_en')->unique()->nullable();
            $table->string('url_si')->unique()->nullable();
            $table->string('url_ta')->unique()->nullable();

            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('menus');

            $table->integer('sort_order');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
