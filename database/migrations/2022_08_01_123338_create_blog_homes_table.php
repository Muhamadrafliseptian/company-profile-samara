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
        Schema::create('blog_homes', function (Blueprint $table) {
            $table->id();
            $table->string('blog_home_tag')->nullable();
            $table->string('blog_home_title')->nullable();
            $table->string('blog_home_text_title')->nullable();
            $table->string('blog_home_img')->nullable();
            $table->string('blog_home_subtitle')->nullable();
            $table->string('blog_home_desciption')->nullable();
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
        Schema::dropIfExists('blog_homes');
    }
};
