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
        Schema::create('benefit_homes', function (Blueprint $table) {
            $table->id();
            $table->string('benefit_home_tag')->nullable();
            $table->string('benefit_home_title')->nullable();
            $table->string('benefit_home_icon')->nullable();
            $table->string('benefit_home_subtitle')->nullable();
            $table->string('benefit_home_description')->nullable();
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
        Schema::dropIfExists('benefit_homes');
    }
};
