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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('produsen');
            $table->string('image');
            $table->string('name');
            $table->string('size');
            $table->string('stock');
            $table->string('price');
            $table->text('description');
            $table->string('headline');
            $table->string('image_video');
            $table->text('masalah');
            $table->text('solusi');
            $table->text('manfaat');
            $table->string('gambar_testimoni');
            $table->text('bonus');
            $table->text('kontak');
            $table->text('kelangkaan');
            $table->text('kerugian');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('phone3');
            $table->string('phone4');
            $table->string('phone5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
