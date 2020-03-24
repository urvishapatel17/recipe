<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('rb_user_username', 256)->nullable();
            //$table->string('rb_user_password', 256)->nullable();
            //$table->string('rb_user_email', 256)->nullable();
            $table->string('rb_user_photo', 256)->nullable();
            $table->string('rb_user_bio', 256)->nullable();
            //$table->string('rb_user_name', 256)->nullable();
            $table->string('rb_user_phone', 20)->nullable();
            $table->string('rb_user_address', 256)->nullable();
            $table->string('rb_user_country', 50)->nullable();
            $table->string('rb_user_state', 50)->nullable();
            $table->string('rb_user_city', 50)->nullable();
            $table->string('rb_user_postalcode', 10)->nullable();
            $table->string('rb_user_role', 50)->nullable();
            $table->string('rb_user_type', 100)->nullable();
            
            $table->enum('re_user_status', array('0', '1'));

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
