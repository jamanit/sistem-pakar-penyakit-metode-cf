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
        Schema::create('tb_menuseconds', function (Blueprint $table) {
            $table->id('id_secondmenu');
            $table->timestamps();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->text('activity_log')->nullable();

            $table->string('secondmenu_name')->nullable();
            $table->string('secondmenu_link')->nullable();
            $table->string('secondmenu_icon')->nullable();
            $table->unsignedBigInteger('id_firstmenu')->nullable();

            // Relasi opsional
            // $table->foreign('id_firstmenu')->references('id_firstmenu')->on('tb_menufirsts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_menuseconds');
    }
};
