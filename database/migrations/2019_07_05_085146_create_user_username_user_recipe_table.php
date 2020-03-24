<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUsernameUserRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('username_user_recipe', function (Blueprint $table) {
            $table->bigIncrements('rb_recipe_id');
            $table->integer('rb_recipe_categoryid')->nullable();
            $table->integer('rb_user_id')->nullable();
            $table->string('rb_recipe_title', 255)->nullable();
            $table->string('rb_recipe_ingredients', 255)->nullable();   
            $table->string('rb_recipe_steps', 255)->nullable();   
            $table->string('rb_recipe_keyword', 255)->nullable();   
            $table->string('rb_recipe_tags', 255)->nullable();   
            $table->string('rb_recipe_videopath', 255)->nullable();   
            $table->time('rb_recipe_preaparationtime')->nullable();   
            $table->time('rb_recipe_cookingtime')->nullable();   
            $table->string('rb_recipe_servings', 255)->nullable();   
            $table->string('rb_recipe_language', 255)->nullable();   
            $table->enum('rb_recipe_status', array('0', '1'))->default('0');   
            
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
        Schema::dropIfExists('username_user_recipe');
    }
}
