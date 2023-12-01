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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->text('description');
            $table->text('description_en')->nullable();
            $table->text('image');
            $table->integer('limit_number')->nullable();
            $table->boolean('isBanner')->default(0);
            $table->boolean('isSold')->default(0);
            $table->boolean('isPaid')->default(0);
            $table->decimal('price')->nullable();
            $table->text('maps_url')->nullable();
            $table->timestamp('data_eventit');
            $table->json('regjia')->nullable();
            $table->string('days')->nullable();
            $table->json('times')->nullable();
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
        Schema::dropIfExists('events');
    }
};
