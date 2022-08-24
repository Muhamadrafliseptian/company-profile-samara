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
        Schema::create('study_case', function (Blueprint $table) {
            $table->id();
            $table->integer("id_partner");
            $table->string("study_case_gambar");
            $table->string("study_case_judul", 100);
            $table->string("study_case_slug");
            $table->text("study_case_kutipan");
            $table->text("study_case_deskripsi");
            $table->integer("id_user");
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
        Schema::dropIfExists('study_case');
    }
};
