<?php

//ann
use App\Livewire\AboutUs;
use App\Livewire\Contacts;
use App\Livewire\AddCategory;
use App\Livewire\AllProducts;
use App\Livewire\EditProduct;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\AddProductForm;
use App\Livewire\ProductDetails;
use App\Livewire\ManageCategories;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFcontroller;
use App\Livewire\ShoppingCartComponent;
use App\Livewire\AdminDashboard; // Import AdminDashboard class

//anin up-to-date route for user n admin

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product/{product_id}/details',ProductDetails::class);

Route::get('/about',AboutUs::class);

Route::get('/contacts',Contacts::class);

Route::get('/all/products',AllProducts::class);


// Rute untuk komponen Livewire
Route::get('/shopping-cart', ShoppingCartComponent::class)->name('shopping-cart');

// Route::get('/product/details', ProductDetails::class);

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


    //pdf reporting 
    Route::get('/pdf',[PDFcontroller::class,'index']);

    Route::get('/pdf-generate',[PDFcontroller::class,'downloadpdf']);
    
    Route::get('/pdf-generate', [PDFcontroller::class, 'downloadpdf'])->middleware('auth');


   
});






