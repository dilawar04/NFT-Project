<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('account_address');
            $table->string('account_title');
            $table->foreignId('user_id');
            $table->foreignId('twiiter_id');
            $table->string('email');
            $table->string('twitter_handle');
            $table->string('user_discord_account');
            $table->string('score');
            $table->string('user_email');
            $table->string('twitter_handle');
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
        Schema::dropIfExists('account_users');
    }
};
