<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('rb_settings_id');
            $table->string('rb_privacy_policy', 255)->nullable();
            $table->string('rb_terms_service', 255)->nullable();
            $table->string('rb_recipe_community_guidelines', 255)->nullable();
            $table->string('rb_frequently_asked_questions', 255)->nullable();
            $table->string('rb_licenses', 255)->nullable();
            $table->string('rb_feedback', 255)->nullable();
            
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
        Schema::dropIfExists('settings');
    }
}
