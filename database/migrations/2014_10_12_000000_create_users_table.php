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

            $table->string('name');
            $table->bigInteger('identity')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->date('dob');
            $table->enum('gender' , ['Male' , 'Female']);
            $table->enum('status' , ['Active' , 'Inactive']);

            $table->morphs('actor');

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
