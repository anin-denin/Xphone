<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductListing extends Component
{
    public $products;
<<<<<<< HEAD
    public $searchTerm = '';
    public $category_id;
    public $current_product_id;

    public function mount($category_id, $current_product_id)
    {
        $this->category_id = $category_id;
        $this->current_product_id = $current_product_id;
        $this->updateProductList();
    }

    public function updatedSearchTerm()
    {
        $this->updateProductList();
    }

    public function updateProductList()
    {
        if ($this->category_id == 0) {
            $this->products = Product::with('category')
                ->where('id', '!=', $this->current_product_id)
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->orderBy('created_at', 'DESC')
                ->limit(4)
                ->get();
        } elseif ($this->category_id == 'all') {
            $this->products = Product::with('category')
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->get();
=======
    public function mount($category_id){
        // dd($category_id); nampilin dari category nya
        if ($category_id == 0) {

            $this->products = Product::with('category')->limit(4)
            ->orderBy('created_at', 'DESC')->get();
>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
        } else {
            $this->products = Product::with('category')
                ->where('category_id', $this->category_id)
                ->where('id', '!=', $this->current_product_id)
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->limit(4)
                ->get();
        }
<<<<<<< HEAD
=======

>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
    }

    public function render()
    {
        return view('livewire.product-listing', [
            'categories' => Category::all()
        ]);
    }
<<<<<<< HEAD
}
=======
}
//Adi
>>>>>>> b6960eb0ed9724afb4221a64817053950667d37d
