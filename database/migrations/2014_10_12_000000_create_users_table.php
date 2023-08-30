<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('identity')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender' , ['Male' , 'Female']);
            $table->enum('status' , ['Active' , 'InActive']);

            // $table->foreignId('city_id');
            // $table->foreign('city_id')->on('cities')->references('id')->cascadeOnDelete();

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
        Schema::dropIfExists('users');
    }
};
