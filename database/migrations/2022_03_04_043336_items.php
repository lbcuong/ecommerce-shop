<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign("category_id")->references('id')->on('categories');
            $table->unsignedBigInteger('group_id');
            $table->foreign("group_id")->references('id')->on('groups');
            $table->string('name');
            $table->string('price');
            $table->string('detail');
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
        //
    }
}
