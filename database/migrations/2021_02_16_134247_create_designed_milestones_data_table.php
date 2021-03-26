<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignedMilestonesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designed_milestones_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('designed_milestone_id')->unsigned();
            $table->foreign('designed_milestone_id')->references('id')->on('designed_milestones')->onDelete('cascade');
            $table->integer('percent');
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
        Schema::dropIfExists('designed_milestones_data');
    }
}
