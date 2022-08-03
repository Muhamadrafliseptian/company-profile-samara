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
        Schema::create('video_homes', function (Blueprint $table) {
            $table->id();
            $table->string('video_home_tag')->nullable();
            $table->string('video_home_title')->nullable();
            $table->string('video_home_img')->nullable();
            $table->string('video_home_url')->nullable();
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
        Schema::dropIfExists('video_homes');
    }
};
