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
        Schema::create('tb_diagnosa_details', function (Blueprint $table) {
            $table->id('id_diagnosa_detail');
            $table->unsignedBigInteger('id_diagnosa');
            $table->timestamps();
            $table->unsignedBigInteger('id_gejala')->nullable();
            $table->float('cf_user')->nullable();
            $table->float('cf_expert')->nullable();
            $table->float('cf_he')->nullable();

            $table->foreign('id_diagnosa')->references('id_diagnosa')->on('tb_diagnosas')->onDelete('cascade');
            $table->foreign('id_gejala')->references('id_gejala')->on('tb_gejalas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_diagnosa_details');
    }
};
