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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->json('teachers')->nullable();
            $table->string('days')->nullable();
            $table->json('times')->nullable();
            $table->timestapms('start_time')->nullable();
            $table->timestapms('end_time')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
