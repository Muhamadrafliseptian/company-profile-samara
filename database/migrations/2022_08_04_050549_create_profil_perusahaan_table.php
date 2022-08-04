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
        Schema::create('profil_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string("logo");
            $table->string("nama_perusahaan");
            $table->string("no_hp", 30);
            $table->string("email", 100);
            $table->string("negara", 50);
            $table->string("kode_pos", 30)->nullable();
            $table->string("peta")->nullable();
            $table->text("alamat");
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
        Schema::dropIfExists('profil_perusahaan');
    }
};
