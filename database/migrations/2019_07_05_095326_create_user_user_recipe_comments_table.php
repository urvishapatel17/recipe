<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserRecipeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_recipe_comments', function (Blueprint $table) {
            $table->bigIncrements('rb_user_recpcmt_id');            
            $table->integer('rb_user_recp_id')->nullable();
            $table->integer('rb_user_id')->nullable();
            $table->string('rb_recp_comment', 255)->nullable();
            $table->enum('rb_recpcmt_status', array('0', '1'))->default('1');             
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
        Schema::dropIfExists('user_recipe_comments');
    }
}
