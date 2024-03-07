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
        Schema::create('copywrites', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('imagevideo');
            $table->text('masalah');
            $table->text('solusi');
            $table->text('manfaat');
            $table->string('gambartestimoni');
            $table->string('bonus');
            $table->string('kontak');
            $table->text('kelangkaan');
            $table->text('kerugian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copywrites');
    }
};
