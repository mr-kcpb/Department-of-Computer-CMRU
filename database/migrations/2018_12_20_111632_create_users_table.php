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
            $table->increments('user_id');
            $table->unsignedInteger('prefix_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('room');
            $table->unsignedInteger('work_status');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('line_id');
            $table->unsignedInteger('permission_id')->default(4)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('prefix_id')
                ->references('prefix_id')
                ->on('prefixes');
        });

        Schema::table('activity_pages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });

        Schema::table('announce_pages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });

        Schema::table('calendars', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });

        Schema::table('department_pages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
    }
}
