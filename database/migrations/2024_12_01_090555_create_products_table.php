<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'products'.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');  // Pastikan ini menggunakan 'string' bukan 'strinng'
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Membalikkan migrasi dengan menghapus tabel 'products'.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
