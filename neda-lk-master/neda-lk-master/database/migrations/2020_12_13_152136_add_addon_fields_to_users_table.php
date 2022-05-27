<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddonFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('qualifications')->nullable();
            $table->json('phone_numbers')->nullable();
            $table->date('maternity_leave_start')->nullable();
            $table->date('maternity_leave_end')->nullable();
            $table->date('appointed_date')->nullable();
        });
    }
}
