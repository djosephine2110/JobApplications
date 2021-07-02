<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('ktp');
            $table->string('birth_place');
            $table->date('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('address');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('home_number')->nullable();
            $table->string('sim_a')->nullable();
            $table->string('sim_c')->nullable();
            $table->string('vehicle');
            $table->string('hobby')->nullable();

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
        Schema::dropIfExists('user_details');
    }
}
