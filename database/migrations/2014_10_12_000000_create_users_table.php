<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name', 50);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image', 100)->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->datetime('birthday')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address', 100)->nullable();
            $table->rememberToken();
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
}
