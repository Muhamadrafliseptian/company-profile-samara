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
        Schema::create('menu_role', function (Blueprint $table) {
            $table->id();
            $table->string("menu_nama", 100);
            $table->string("menu_icon", 100);
            $table->string("menu_url")->nullable();
            $table->integer("menu_aktif")->default(0);
            $table->integer("menu_id")->default(0);
            $table->integer("menu_akses");
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
        Schema::dropIfExists('menu_role');
    }
};
