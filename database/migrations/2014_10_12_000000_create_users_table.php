<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('birthday')->nullable();
            $table->boolean('gender')->nullable();
            $table->text('address')->nullable();
            $table->integer('phone')->nullable();
            $table->text('avatar')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('council_id')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('role')->nullable();
            $table->integer('position')->nullable();
            $table->double('score')->nullable();
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
