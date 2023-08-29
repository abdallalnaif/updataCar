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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('type_car');
            $table->string('car_license');
            $table->string('status');
            $table->float('rental_price');
            $table->enum('gear_type',['auto','manual']);
            $table->foreignId('employee_id');
            $table->foreign('employee_id')->on('employees')->references('id')->cascadeOnDelete();
            $table->foreignId('investor_id');
            $table->foreign('investor_id')->on('investors')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('cars');
    }
};
