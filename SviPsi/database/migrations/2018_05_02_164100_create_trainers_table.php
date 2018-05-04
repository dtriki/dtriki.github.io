<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //$table->string('birthDate');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
