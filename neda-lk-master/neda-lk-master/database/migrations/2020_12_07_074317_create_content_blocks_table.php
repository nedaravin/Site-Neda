<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_en')->nullable();
            $table->string('title_si')->nullable();
            $table->string('title_ta')->nullable();

            $table->longText('content_en')->nullable();
            $table->longText('content_si')->nullable();
            $table->longText('content_ta')->nullable();

            $table->smallInteger('sort_order')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('content_blocks');
    }
}
