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
            $table->string('username');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('status')->default(1);
            $table->string('image')->nullable();
            $table->integer('two_factor_auth')->default(0);
            $table->integer('mobile')->nullable();
            $table->integer('fax')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_country')->nullable();
            $table->string('other_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('address_city')->nullable();
            $table->string('description')->nullable();
            $table->string('department')->nullable();
            $table->string('im_type')->nullable();
            $table->string('address_state')->nullable();
            $table->string('im_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('address_code')->nullable();
            $table->unsignedBigInteger('invited_by')->unsigned()->nullable();
            $table->foreign('invited_by')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('follow_id')->unsigned()->nullable();
            $table->foreign('follow_id')->references('id')->on('users')->onDelete('set null');









            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
