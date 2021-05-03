<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();

            $table->integer('points_age')->nullable();
            $table->integer('points_english')->nullable();
            $table->integer('points_overseases')->nullable();
            $table->integer('points_incountry')->nullable();
            $table->integer('points_education_qualifications')->nullable();
            $table->integer('points_specialist_education_qualifications')->nullable();
            $table->integer('points_study_requiments')->nullable();
            $table->integer('points_professional_year')->nullable();
            $table->integer('points_credentialled_community_language')->nullable();
            $table->integer('points_study_in_regional')->nullable();
            $table->integer('points_partner_skills')->nullable();
            $table->integer('points')->nullable();

            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->unsignedBigInteger('lead_id')->unsigned()->nullable();
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');

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
        Schema::dropIfExists('accounts');
    }
}
