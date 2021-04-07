<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->date('assignment_date')->nullable();
            $table->string('last_name')->nullable();
            $table->string('owner')->nullable();
            $table->unsignedBigInteger('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('lead_statuses')->onDelete('set null');
            $table->unsignedBigInteger('nationality_id')->unsigned()->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('set null');
            $table->string('contact_number')->nullable();
            $table->string('prefered_office_location')->nullable();
            $table->string('current_location')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('message')->nullable();
            $table->string('image')->nullable();
            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->string('country_code')->nullable();
            $table->string('gender')->nullable();
            $table->unsignedBigInteger('traffic_source_id')->unsigned()->nullable();
            $table->foreign('traffic_source_id')->references('id')->on('traffic_sources')->onDelete('set null');
            $table->string('company')->nullable();
            $table->unsignedBigInteger('industry_id')->unsigned()->nullable();
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('set null');
            $table->unsignedBigInteger('application_type_id')->unsigned()->nullable();
            $table->foreign('application_type_id')->references('id')->on('application_types')->onDelete('set null');
            $table->string('first_name')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedBigInteger('education_qualification_id')->unsigned()->nullable();
            $table->foreign('education_qualification_id')->references('id')->on('education_qualifications')->onDelete('set null');
            $table->unsignedBigInteger('traffic_medium_id')->unsigned()->nullable();
            $table->foreign('traffic_medium_id')->references('id')->on('traffic_mediums')->onDelete('set null');
            $table->string('secondary_email')->nullable();
            $table->integer('resume_recieved')->default(0);
            $table->date('follow_up')->nullable();
            $table->string('enquiry')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('ielts')->nullable();
            $table->integer('age')->nullable();

            $table->string('surname')->nullable();
            $table->string('given_names')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('home_telephone')->nullable();
            $table->string('work_telephone')->nullable();
            $table->string('prefered_email')->nullable();
            $table->string('alternative_email')->nullable();
            $table->date('last_contact')->nullable();
            $table->string('category')->nullable();
            $table->string('matter_type')->nullable();
            $table->string('description')->nullable();
            $table->string('nominated_occupation')->nullable();
            $table->string('ANZSCO_code')->nullable();


            $table->string('traffic_campaign')->nullable();
            $table->unsignedBigInteger('currency_id')->unsigned()->nullable();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
            $table->string('state')->nullable();
            $table->string('no_of_applicants')->nullable();
            $table->string('traffic_content')->nullable();
            $table->integer('resume')->default(0);
            $table->string('resume_id')->nullable();
            $table->unsignedBigInteger('hear_about_us_id')->unsigned()->nullable();
            $table->foreign('hear_about_us_id')->references('id')->on('hear_about_uses')->onDelete('set null');
            $table->string('city')->nullable();
            $table->integer('maritial_status')->nullable();
            $table->string('traffic_ip')->nullable();
            $table->string('country')->nullable();
            $table->date('booking_date')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('enquiry_age')->nullable();
            $table->string('traffic_url')->nullable();
            $table->date('appointment_date')->nullable();
            $table->string('website')->nullable();
            $table->string('fax')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_street')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_street')->nullable();
            $table->string('shipping_state')->nullable();
            $table->string('shipping_postal_code')->nullable();
            $table->string('employees')->nullable();
            $table->string('email_type')->nullable();
            $table->enum('lead_owner', ["Administrator", "FBP DWC","FBP Sales","FBP Universal","FBP Malaysia","FBP user"]);



































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
        Schema::dropIfExists('leads');
    }
}
