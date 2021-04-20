<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_rules', function (Blueprint $table) {
            $table->id();
            $table->string("rule");
//            $table->unsignedBigInteger("rule_id");
//            $table->foreign("rule_id")->references("id")->on("rules")->onUpdate("Cascade");

            $table->unsignedBigInteger("field_id");
            $table->string("value");
            $table->string("extra");
            $table->foreign("field_id")->references("id")->on("fields")->onUpdate("Cascade");
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
        Schema::dropIfExists('field_rules');
    }
}
