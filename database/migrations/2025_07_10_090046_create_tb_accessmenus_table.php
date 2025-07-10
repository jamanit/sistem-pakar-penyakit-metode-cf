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
        Schema::create('tb_accessmenus', function (Blueprint $table) {
            $table->id('id_accessmenu');
            $table->timestamps();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->text('activity_log')->nullable();

            $table->unsignedBigInteger('id_level')->nullable();
            $table->unsignedBigInteger('id_firstmenu')->nullable();
            $table->unsignedBigInteger('id_secondmenu')->nullable();

            // Relasi opsional
            // $table->foreign('id_level')->references('id_level')->on('tb_levels')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_accessmenus');
    }
};
