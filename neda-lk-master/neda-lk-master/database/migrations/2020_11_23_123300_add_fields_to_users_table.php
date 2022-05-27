<?php
/*
 * Copyright (c) 2020. National Enterprise Development Authority
 * All Rights Reserved Adlux Software (Pvt) Ltd
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('mobile')->unique()->nullable();
            $table->boolean('mobile_validated')->default(0);
            $table->string('phone')->nullable();


            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('bio')->nullable();
            $table->enum('gender', [
                'male',
                'female'
            ])->nullable();
            $table->date('birthday')->nullable();
            $table->string('national_identification_card_no')->nullable();
            $table->longText('address')->nullable();

            $table->string('business_name')->nullable();
            $table->string('business_phone')->nullable();
            $table->date('business_start_date')->nullable();
            $table->string('legal_nature_of_business')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->string('total_invested')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->text('primary_industry')->nullable();
            $table->string('type_of_products_or_services')->nullable();


            $table->longText('business_address')->nullable();

            $table->string('district')->nullable();
            $table->string('divisional_secretariat')->nullable();
            $table->string('gn_division')->nullable();

            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('divisional_secretariat_id')->nullable();
            $table->bigInteger('gn_division_id')->nullable();

            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'mobile',
                'mobile_validated',
                'phone',
                'first_name',
                'last_name',
                'bio',
                'gender',
                'birthday',
                'national_identification_card_no',
                'address',
                'business_name',
                'business_phone',
                'business_start_date',
                'legal_nature_of_business',
                'business_registration_number',
                'total_invested',
                'number_of_employees',
                'primary_industry',
                'type_of_products_or_services',
                'business_address',
                'district',
                'divisional_secretariat',
                'gn_division',
                'district_id',
                'divisional_secretariat_id',
                'gn_division_id',
            ]);
        });
    }
}
