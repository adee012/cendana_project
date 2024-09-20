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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            // $table->integer('id_user');
            // $table->integer('id_kategori');
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->string('nama_item');
            $table->string('deskripsi');
            $table->string('image');
            $table->timestamps();

            // $table->foreign('id_user')->references('id')->on('users');
            // $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
