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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('client')->nullable();
            $table->string('year')->nullable();
            $table->text('video_1')->nullable();
            $table->text('video_2')->nullable();
            $table->text('description')->nullable();
            $table->text('bloc_wysiwyg')->nullable();
            $table->boolean('display')->nullable();
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
        Schema::dropIfExists('case_studies');
    }
};
