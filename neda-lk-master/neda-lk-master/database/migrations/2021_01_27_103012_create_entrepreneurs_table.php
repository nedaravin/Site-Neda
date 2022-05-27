<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepreneursTable extends Migration
{
    public function up()
    {
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthday')->nullable();
            $table->string('nic')->nullable();
            $table->text('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->text('business_name')->nullable();
            $table->text('business_phone')->nullable();
            $table->date('business_start_date')->nullable();
            $table->enum('business_legal_nature', ['sole_proprietorship', 'public_limited_company', 'limited_liability_company', 'partnership', 'others'])->nullable();
            $table->enum('business_registration_status', ['registered', 'not_registered'])->nullable();
            $table->text('business_registration_number')->nullable();
            $table->enum('business_type', ['manufacturing', 'service', 'trading'])->nullable();
            $table->enum('business_annual_turnover', ['15mil_or_less', '16mil_250mil', '251mil_750mil', 'more_than_751mil'])->nullable();
            $table->enum('business_number_of_employees', ['10_or_less', '11_50', '51_200', 'more_than_201'])->nullable();
            $table->bigInteger('business_service_id')->unsigned()->nullable();
            $table->foreign('business_service_id')->references('id')->on('business_service_types');
            $table->text('business_description')->nullable();
            $table->text('business_address')->nullable();
            $table->bigInteger('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->bigInteger('divisional_secretariat_id')->unsigned()->nullable();
            $table->foreign('divisional_secretariat_id')->references('id')->on('divisional_secretariats');
            $table->bigInteger('grama_niladhari_division_id')->unsigned()->nullable();
            $table->foreign('grama_niladhari_division_id')->references('id')->on('grama_niladhari_divisions');
            $table->boolean('business_located_in_industrial_zone')->default(0);
            $table->enum('business_zone_type', ['idb', 'boi'])->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('is_valid')->default(0);
            $table->boolean('status')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entrepreneurs');
    }
}
