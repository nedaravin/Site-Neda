<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentOfManagementAssistant2021Table extends Migration
{
    public function up()
    {
        Schema::create('recruitment_of_management_assistant2021', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('full_name');
            $table->string('name_with_initials');
            $table->string('name_in_different_language');
            $table->text('permanent_address');
            $table->enum('gender', [
                'male', 'female'
            ]);
            $table->enum('race', [
                'sinhala',
                'tamil',
                'muslim',
                'other'
            ]);
            $table->string('nic');
            $table->date('birthday');
            $table->string('age_at_closing')->nullable();;
            $table->string('telephone')->nullable();;

            $table->json('educational_qualifications_al')->nullable();;
            $table->json('educational_qualifications_ol')->nullable();;

            $table->enum('found_guilty_by_court_of_law', [
                'yes', 'no'
            ])->nullable();
            $table->text('found_guilty_by_court_of_law_details')->nullable();

            $table->enum('holding_a_post_in_the_public_service', [
                'yes', 'no'
            ])->nullable();
            $table->text('holding_a_post_in_the_public_service_details')->nullable();

            $table->text('dismissed_or_removed_from_public_service')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recruitment_of_management_assistant2021');
    }
}
