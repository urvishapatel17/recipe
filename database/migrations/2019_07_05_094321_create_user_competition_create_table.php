<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCompetitionCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_create', function (Blueprint $table) {
            $table->bigIncrements('rb_competition_id');
            $table->string('rb_competition_title', 255)->nullable();
            $table->string('rb_competition_banner', 255)->nullable();
            $table->string('rb_competition_details', 255)->nullable();
            $table->dateTime('rb_competition_startdt')->nullable();
            $table->dateTime('rb_competition_enddt')->nullable();
            $table->enum('rb_competition_status', array('0', '1'))->default('1');             
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
        Schema::dropIfExists('competition_create');
    }
}
