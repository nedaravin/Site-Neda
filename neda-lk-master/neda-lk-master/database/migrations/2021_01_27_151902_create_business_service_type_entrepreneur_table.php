<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessServiceTypeEntrepreneurTable extends Migration
{
    public function up()
    {
        Schema::create('business_service_type_entrepreneur', function (Blueprint $table) {
            $table->bigInteger('entrepreneur_id')->unsigned()->nullable();
            $table->foreign('entrepreneur_id')->references('id')->on('entrepreneurs');

            $table->bigInteger('bst_id')->unsigned()->nullable();
            $table->foreign('bst_id')->references('id')->on('business_service_types');
        });
    }

    public function down()
    {
        Schema::dropIfExists('business_service_type_entrepreneur');
    }
}
