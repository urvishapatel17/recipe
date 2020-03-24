<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserCompetitionRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_competition_recipe', function (Blueprint $table) {
            $table->bigIncrements('rb_usercmptrecp_id');
            $table->integer('rb_usercmptrecp_user_id')->nullable();
            $table->integer('rb_usercompetition_id')->nullable();
            $table->integer('rb_userrecipe_id')->nullable();
            $table->enum('rb_usercmptrecp_status', array('0', '1'))->default('1');             
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
        Schema::dropIfExists('user_competition_recipe');
    }
}
