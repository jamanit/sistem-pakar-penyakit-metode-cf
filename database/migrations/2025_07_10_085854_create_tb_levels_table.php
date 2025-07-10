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
        Schema::create('tb_levels', function (Blueprint $table) {
            $table->id('id_level');
            $table->timestamps();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->text('activity_log')->nullable();

            $table->string('level_name')->nullable();
            $table->boolean('create')->nullable();
            $table->boolean('read')->nullable();
            $table->boolean('update')->nullable();
            $table->boolean('delete')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_levels');
    }
};
