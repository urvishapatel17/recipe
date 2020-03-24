<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserRecipeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_recipe_category', function (Blueprint $table) {
            $table->bigIncrements('rb_recipe_cat_id');
            $table->string('rb_recipe_categoryname', 255)->nullable();
            $table->text('rb_recipe_categorydesc')->nullable();
            $table->string('rb_recipe_categoryimage', 255)->nullable(); 
            $table->enum('rb_recipe_categorystatus', array('0', '1'));
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
        Schema::dropIfExists('user_recipe_category');
    }
}
