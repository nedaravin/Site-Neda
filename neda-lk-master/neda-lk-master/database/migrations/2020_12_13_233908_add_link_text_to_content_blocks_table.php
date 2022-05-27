<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkTextToContentBlocksTable extends Migration
{
    public function up()
    {
        Schema::table('content_blocks', function (Blueprint $table) {
            $table->string('link_text_en')->nullable();
            $table->string('link_text_si')->nullable();
            $table->string('link_text_ta')->nullable();
        });
    }
}
