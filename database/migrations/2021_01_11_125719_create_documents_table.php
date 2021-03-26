<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('name')->nullable();
            $table->string('revision')->nullable();
            $table->string('type')->nullable();
            $table->integer('status')->default(1);
            $table->date('exp_date')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('description')->nullable();
            $table->string('related_document')->nullable();
            $table->string('related_document_revision')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('documents');
    }
}
