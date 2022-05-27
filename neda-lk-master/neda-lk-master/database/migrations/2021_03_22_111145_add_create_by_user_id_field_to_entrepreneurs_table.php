<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreateByUserIdFieldToEntrepreneursTable extends Migration
{
    public function up()
    {
        Schema::table('entrepreneurs', function (Blueprint $table) {
            $table->bigInteger('create_by_user_id')->unsigned()->nullable();
            $table->foreign('create_by_user_id')->references('id')->on('users');
        });
    }
}
