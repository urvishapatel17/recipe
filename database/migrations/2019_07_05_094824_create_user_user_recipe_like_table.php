<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserRecipeLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_recipe_like', function (Blueprint $table) {
            $table->bigIncrements('rb_user_recplike_id');
            $table->integer('rb_user_recp_id')->nullable();
            $table->integer('rb_user_id')->nullable();
            $table->integer('rb_recp_like')->nullable();
            $table->enum('rb_recp_status', array('0', '1'))->default('1');             
            
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
        Schema::dropIfExists('user_recipe_like');
    }
}
