<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryFieldToGalleriesTable extends Migration
{
    public function up()
    {
        Schema::table('galleries', function (Blueprint $table) {
            $table->enum('category', [
                'education',
                'general',
                'event',
                'other'
            ]);
        });

        Schema::table('videos', function (Blueprint $table) {
            $table->enum('category', [
                'education',
                'general',
                'event',
                'other'
            ]);
        });
    }
}
