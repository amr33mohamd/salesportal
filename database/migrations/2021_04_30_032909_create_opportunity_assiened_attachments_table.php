<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunityAssienedAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity_assiened_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_id')->unsigned()->nullable();
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            $table->unsignedBigInteger('opportunity_id')->unsigned()->nullable();
            $table->foreign('opportunity_id')->references('id')->on('opportunities')->onDelete('cascade');

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
        Schema::dropIfExists('opportunity_assiened_attachments');
    }
}
