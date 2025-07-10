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
        Schema::create('tb_menufirsts', function (Blueprint $table) {
            $table->id('id_firstmenu');
            $table->timestamps();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->text('activity_log')->nullable();

            $table->string('firstmenu_name')->nullable();
            $table->string('firstmenu_link')->nullable();
            $table->string('firstmenu_icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_menufirsts');
    }
};
