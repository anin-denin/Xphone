<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'categories'.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Perbaiki penulisan di sini, pastikan menggunakan 'string' bukan 'strinng'
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Membalikkan migrasi dengan menghapus tabel 'categories'.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
}
// Adi
