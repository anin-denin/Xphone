<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class AddCategory extends Component
{
    public $currentUrl;
    public $category_name = '';

    public function save(){
        $this->validate([
            'category_name' => 'required'
            
        ]);

        $category = new Category();
        $category->name = $this->category_name;
        $category->save();

        return $this->redirect('/manage/categories', navigate: true);
    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);

        // Menggabungkan elemen ke-4 dan ke-5 dari URL saat ini dengan spasi di antaranya, lalu menyimpannya ke properti $currentUrl
        $this ->currentUrl = $explode_url[3].' '.$explode_url[4];

        return view('livewire.add-category')
        ->layout('admin-layout');
    }
}
