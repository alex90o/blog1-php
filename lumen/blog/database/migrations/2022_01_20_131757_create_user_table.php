<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments(column:'id');
            $table->string(column:'name');
            $table->string(column:'username');
            $table->string(column:'email')->unique();
            $table->string(column:'password');
            $table->rememberToken();
            $table->string(column:'api_token', length:60)->unique();
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
        Schema::dropIfExists(table:'users');
    }
}