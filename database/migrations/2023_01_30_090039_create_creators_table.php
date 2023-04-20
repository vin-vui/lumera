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
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('sn_tiktok')->nullable();
            $table->string('sn_snapchat')->nullable();
            $table->string('sn_instagram')->nullable();
            $table->string('sn_youtube')->nullable();
            $table->string('sn_linkedin')->nullable();
            $table->string('sn_facebook')->nullable();
            $table->string('sn_twitter')->nullable();
            $table->string('sn_twitch')->nullable();
            $table->bigInteger('tn_tiktok')->nullable();
            $table->bigInteger('tn_snapchat')->nullable();
            $table->bigInteger('tn_instagram')->nullable();
            $table->bigInteger('tn_youtube')->nullable();
            $table->bigInteger('tn_linkedin')->nullable();
            $table->bigInteger('tn_facebook')->nullable();
            $table->bigInteger('tn_twitter')->nullable();
            $table->bigInteger('tn_twitch')->nullable();
            $table->string('email')->nullable();
            $table->boolean('display')->nullable();
            $table->foreignId('specialty_id')->nullable();
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
        Schema::dropIfExists('creators');
    }
};
