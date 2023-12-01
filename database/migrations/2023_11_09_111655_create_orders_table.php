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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code', 64)->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country')->nullable();
            $table->integer('shipping_fee')->nullable();
            $table->decimal('total_sum',10,2)->nullable();
            $table->tinyInteger('payment_type'); //1->cash on delivery 2->paypal
            $table->tinyInteger('status')->default(0);
            $table->string('payment_id')->nullable();
            $table->string('payer_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
