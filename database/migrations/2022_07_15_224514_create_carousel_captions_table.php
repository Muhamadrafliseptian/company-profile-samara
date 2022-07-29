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
        Schema::create('carousel_caption', function (Blueprint $table) {
            $table->id();
            $table->string('carousel_caption_title_1')->nullable();
            $table->string('carousel_caption_title_2')->nullable();
            $table->string('carousel_caption_title_3')->nullable();
            $table->string('carousel_caption_img_1')->nullable();
            $table->string('carousel_caption_img_2')->nullable();
            $table->string('carousel_caption_img_3')->nullable();
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
        Schema::dropIfExists('carousel_captions');
    }
};
