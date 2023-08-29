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
        Schema::create('irregularities', function (Blueprint $table) {
            $table->id();
            $table->string('numcar');
            $table->string('type_irregularty');
            $table->date('date');
            $table->string('description');
            $table->string('location');
            $table->float('price');
            $table->foreignId('car_id');
            $table->foreign('car_id')->on('cars')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('irregularities');
    }
};
