<?php

use App\Livewire\AddCategory;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\AddProductForm;
use App\Livewire\ProductDetails;
use App\Livewire\ManageCategories;
use Illuminate\Support\Facades\Route;
use App\Livewire\AdminDashboard; // Import AdminDashboard class
use App\Livewire\EditProduct;

//anin

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details', ProductDetails::class);

//Admin Only yaaa... jgn di ubah notes(*anin) :D

Route::group(['middleware' => 'admin'], function(){
    
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');
    
    Route::get('/products',ManageProduct::class)->name('products');
    
    Route::get('/orders', ManageOrders::class)->name('orders');
    
    Route::get('/add/product', AddProductForm::class);

    Route::get('/manage/categories', ManageCategories::class);
    //adding category Form 
    Route::get('/add/category', AddCategory::class);
    //editing product
    Route::get('/edit/{id}/product', EditProduct::class);

});



