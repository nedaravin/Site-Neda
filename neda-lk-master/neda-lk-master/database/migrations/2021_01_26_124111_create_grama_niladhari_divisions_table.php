<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGramaNiladhariDivisionsTable extends Migration
{
    public function up()
    {
        Schema::create('grama_niladhari_divisions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('machine_name')->unique();

            $table->string('title_en')->unique();
            $table->string('description_en')->nullable();

            $table->string('title_si')->unique();
            $table->string('description_si')->nullable();

            $table->string('title_ta')->unique();
            $table->string('description_ta')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('status')->default(1);

            $table->bigInteger('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->bigInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->bigInteger('divisional_secretariat_id')->unsigned()->nullable();
            $table->foreign('divisional_secretariat_id')->references('id')->on('divisional_secretariats');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grama_niladhari_divisions');
    }
}
