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
        Schema::create('solusi', function (Blueprint $table) {
            $table->id();
            $table->string("solusi_nama", 100);
            $table->string("solusi_slug");
            $table->string("solusi_gambar");
            $table->text("solusi_deskripsi");
            $table->string("solusi_video");
            $table->integer("id_kategori_solusi");
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
        Schema::dropIfExists('solusi');
    }
};
