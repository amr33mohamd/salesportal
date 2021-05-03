<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_records', function (Blueprint $table) {
            $table->id();

            $table->nullableMorphs('model');
            $table->foreignId('field_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->longText('value')->nullable();

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
        Schema::dropIfExists('field_records');
    }
}
