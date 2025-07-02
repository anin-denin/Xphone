<?php

//ann
use Mpdf\Mpdf; //mpdf
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

use Illuminate\Support\Facades\Auth;


use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFcontroller;
use App\Livewire\ShoppingCartComponent;
use App\Livewire\AdminDashboard; // Import AdminDashboard class



Route::get('/', function () {
    return view('welcome');
});



Route::get('/product/{product_id}/details',ProductDetails::class);

Route::get('/all/products',AllProducts::class);

Route::get('/about',AboutUs::class);

Route::get('/contacts',Contacts::class);


Route::get('/all/products',AllProducts::class);

Route::get('/profile', Profile::class)->name('profile');



// Rute untuk komponen Livewire
Route::get('/shopping-cart', ShoppingCartComponent::class)->name('shopping-cart');

// Route::get('/product/details', ProductDetails::class);

//Admin Only yaaa... jgn di ubah notes(*anin) 😄

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


    //mpdf
    Route::get('/view-pdf', function () {
        // Ambil data keranjang belanja dari database berdasarkan user yang sedang login
        $cartItems = \App\Models\ShoppingCart::with('product') // Pastikan Anda punya relasi ke tabel produk
            ->where('user_id', Auth::id()) // Pastikan pengguna sudah login
            ->get();
    
        if ($cartItems->isEmpty()) {
            return response('Keranjang belanja kosong.', 404);
        }
    
        // Hitung subtotal, pajak, diskon, dan total
        $subtotal = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
        
        $vat = $subtotal * 0.1; // Pajak 10%
        $discount = 5000; // Diskon tetap
        $total = $subtotal + $vat - $discount;
     
    
        // Membuat HTML untuk PDF
        $html = '
        <h1>Invoice Belanja</h1>
        <table border="1" cellspacing="0" cellpadding="5" style="width:100%; margin-top:20px;">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>';
        
        foreach ($cartItems as $item) {
            $html .= '
                <tr>
                    <td>' . $item->product->name . '</td>
                    <td>' . $item->quantity . '</td>
                    <td>' . number_format($item->product->price, 0, ',', '.') . '</td>
                    <td>' . number_format($item->quantity * $item->product->price, 0, ',', '.') . '</td>
                </tr>';
        }
    
        $html .= '
            </tbody>
        </table>
        <h3>Subtotal: ' . number_format($subtotal, 0, ',', '.') . '</h3>
        <h3>Pajak (10%): ' . number_format($vat, 0, ',', '.') . '</h3>
        <h3>Diskon: ' . number_format($discount, 0, ',', '.') . '</h3>
        <h3>Total: ' . number_format($total, 0, ',', '.') . '</h3>';
    
        // Membuat instance mPDF dan menampilkan PDF
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($html);
        return $mpdf->Output('invoice.pdf', 'I'); // Tampilkan PDF di browser
    });
    
    //Bima


   
});





