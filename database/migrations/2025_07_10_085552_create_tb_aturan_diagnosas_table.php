<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_aturan_diagnosas', function (Blueprint $table) {
            $table->id('id_aturan_diagnosa');
            $table->unsignedBigInteger('id_gejala');
            $table->unsignedBigInteger('id_penyakit');
            $table->float('cf_expert');
            $table->timestamps();

            $table->foreign('id_gejala')->references('id_gejala')->on('tb_gejalas')->onDelete('cascade');
            $table->foreign('id_penyakit')->references('id_penyakit')->on('tb_penyakits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_aturan_diagnosas');
    }
};
