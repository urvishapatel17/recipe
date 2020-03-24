<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUsernameUserRecipeGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('username_user_recipe_gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rb_recipe_gallery_id')->nullable();
            $table->integer('rb_recipe_id')->nullable();
            $table->integer('rb_recipe_userid')->nullable();
            $table->string('rb_recipe_imagepath', 255)->nullable();            
            $table->enum('rb_recipe_imagestatus', array('0', '1'))->default('1'); 
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
        Schema::dropIfExists('username_user_recipe_gallery');
    }
}
