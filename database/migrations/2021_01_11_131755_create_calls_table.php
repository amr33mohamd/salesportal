<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sales_stage_id')->unsigned()->nullable();
            $table->foreign('sales_stage_id')->references('id')->on('sales_stages')->onDelete('set null');
            $table->string('related_to')->nullable();
            $table->string('call_type')->nullable();
            $table->string('status')->default(1);
            $table->datetime('start')->nullable();
            $table->string('owner')->nullable();
            $table->string('subject')->nullable();
            $table->integer('reminder')->default(1);
            $table->string('purpose')->nullable();
            $table->string('agenda')->nullable();
            $table->nullableMorphs('callable');
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
        Schema::dropIfExists('calls');
    }
}
