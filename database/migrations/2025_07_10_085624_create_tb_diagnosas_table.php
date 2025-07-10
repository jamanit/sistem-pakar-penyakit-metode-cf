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
        Schema::create('tb_diagnosas', function (Blueprint $table) {
            $table->id('id_diagnosa');
            $table->string('kode_diagnosa');
            $table->timestamps();
            $table->unsignedBigInteger('id_pasien')->nullable();
            $table->string('nama_pasien', 50)->nullable();
            $table->string('alamat')->nullable();
            $table->string('cf_result')->nullable();
            $table->unsignedBigInteger('id_penyakit')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreign('id_penyakit')->references('id_penyakit')->on('tb_penyakits')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_diagnosas');
    }
};
