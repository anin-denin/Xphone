<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;

    // Menentukan atribut yang dapat diisi massal (mass assignable)
    // Artinya, hanya kolom-kolom ini yang bisa diisi dengan cara mass-assignment (seperti ketika membuat atau memperbarui model)
    protected $fillable = ['name', 'description', 'price', 'category_id', 'image'];

    /**
     * Relasi antara produk dan kategori.
     * Setiap produk hanya memiliki satu kategori.
     * Fungsi ini mendefinisikan relasi "belongs to" (satu ke banyak) dengan model Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class); // Menyatakan bahwa model Products "belongs to" (terhubung dengan) model Category
    }
}
