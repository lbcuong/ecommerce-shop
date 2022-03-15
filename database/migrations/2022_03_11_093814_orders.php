<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
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
            $table->string('name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('email');
            $table->longText('content');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign("payment_method_id")->references('id')->on('payment_method')->onUpdate('cascade');
            $table->enum('status', ['Ordered', 'Delivering', 'Delivered', 'Canceled'])->default('Ordered');
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
}
