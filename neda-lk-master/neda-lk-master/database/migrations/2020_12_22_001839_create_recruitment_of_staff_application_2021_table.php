<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentOfStaffApplication2021Table extends Migration
{
    public function up()
    {
        Schema::create('recruitment_of_staff_application_2021', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('job_type');

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
            $table->string('age_at_closing')->nullable();
            $table->string('telephone')->nullable();

            $table->string('education_date_of_graduation');
            $table->string('education_university_institute');
            $table->string('education_registration_number');
            $table->string('education_degree');
            $table->string('education_subjects_and_field');
            $table->string('education_index_no');
            $table->string('education_language_medium_of_examination');

            $table->string('education_ol_passed_year');
            $table->string('education_ol_index_no');
            $table->string('education_ol_language');
            $table->string('education_ol_english_score');
            $table->string('education_al_passed_year');
            $table->string('education_al_index_no');
            $table->string('education_al_language');
            $table->string('education_al_english_score');

            $table->json('educational_qualifications')->nullable();
            $table->json('work_experience')->nullable();

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
        Schema::dropIfExists('recruitment_of_staff_application_2021');
    }
}
