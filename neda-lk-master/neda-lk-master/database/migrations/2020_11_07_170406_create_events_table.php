<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_en')->nullable();
            $table->string('title_si')->nullable();
            $table->string('title_ta')->nullable();

            $table->string('slug_en')->nullable();
            $table->string('slug_si')->nullable();
            $table->string('slug_ta')->nullable();

            $table->longText('summary_en')->nullable();
            $table->longText('summary_si')->nullable();
            $table->longText('summary_ta')->nullable();

            $table->longText('content_en')->nullable();
            $table->longText('content_si')->nullable();
            $table->longText('content_ta')->nullable();

            $table->string('meta_title_en')->nullable();
            $table->string('meta_title_si')->nullable();
            $table->string('meta_title_ta')->nullable();

            $table->longText('meta_content_en')->nullable();
            $table->longText('meta_content_si')->nullable();
            $table->longText('meta_content_ta')->nullable();

            $table->longText('meta_keywords_en')->nullable();
            $table->longText('meta_keywords_si')->nullable();
            $table->longText('meta_keywords_ta')->nullable();

            $table->enum('type', ['upcoming_events', 'national_level', 'regional_level'])->nullable();

            $table->dateTime('event_start')->nullable();

            $table->dateTime('event_end')->nullable();

            $table->smallInteger('sort_order')->default(0);

            $table->boolean('status')->default(1);

            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('events');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
