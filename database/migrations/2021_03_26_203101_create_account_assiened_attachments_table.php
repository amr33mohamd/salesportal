<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountAssienedAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_assiened_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_id')->unsigned()->nullable();
            $table->foreign('document_id')->references('id')->on('attachments')->onDelete('cascade');
            $table->unsignedBigInteger('account_id')->unsigned()->nullable();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');

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
        Schema::dropIfExists('account_assiened_attachments');
    }
}
