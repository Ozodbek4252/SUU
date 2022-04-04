<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Livewire\Index;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/// ------------------------ Front End --------------------------
Route::redirect('/', '/ru');

//_____________________Basket__________________________
Route::get('/add_basket/{id}', function ($id){
    $product = \App\Models\Product::find($id);
    if(!$product) {abort(404);}
    $cart = session()->get('cart');
    if(!$cart) { $cart = [ $id => [
        "id"=>$id,
        "quantity" => 1,
        "logo" => 1,
    ]]; }
    else{ $cart[$id] = [
        "id" => $id,
        "quantity" => 1,
        "logo" => 1,
    ]; }
    session()->put('cart', $cart);
});
Route::get('/update_quantity/{id}/{q}', function($id, $q){
    $cart = session()->get('cart');
    $cart[$id]['quantity'] = $q;
    session()->put('cart', $cart);
});
Route::get('/update_logo/{bul}/{id}', function($bul, $id){
    $cart = session()->get('cart');
    $cart[$id]['logo'] = $bul;
    session()->put('cart', $cart);
});
Route::get('/delete_product/{id}', function ($id){
    $cart = session()->get('cart');
    unset($cart[$id]);
    session()->put('cart', $cart);
});
Route::get('cart', function (){
    return view('front.cart');
});
Route::get('/basket_refresh', function (){
    return view('front.basket_refresh');
});
Route::get('price', function (){
    return view('front.price');
});
Route::get('quantity_product_refresh', function(){
    return view('front.quantity_product');
});
//_____________________Basket End______________________

Route::group(['prefix' => '{language}'], function(){

    Route::get('/fetch', [ProductController::class, 'fetch']);
    Route::get('/basket', [ProductController::class, 'fetch']);
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');


    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'index')->name('home');
        Route::get('/about','about')->name('about');
        Route::get('/all-news', 'news')->name('front.news');
        Route::get('/single-news/{id}', 'singleNews_index')->name('single-news');
    });

    Route::get('/message',[MessageController::class,'index'])->name('message');
    Route::post('/message/store',[MessageController::class,'store'])->name('message.store');
    Route::get('/message/destroy/{id}',[MessageController::class,'destroy'])->name('message.destroy');

});


// ------------------------------- Dashboard ----------------------------------

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/product/list',[ProductController::class,'index'])->name('product.list');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/{id?}',[ProductController::class,'store'])->name('product.store');
Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::post('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
// Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product.update');

Route::get('/news', [NewsController::class,'index'])->name('news');
Route::get('/news/create', [NewsController::class,'create'])->name('news.create');
Route::post('/news',[NewsController::class,'store'])->name('news.store');



// Route::get('/news/{id}',[NewsController::class,'edit'])->name('news.edit');
// Route::post('/news/{id}',[NewsController::class,'update'])->name('news/update');
// Route::get('/news/{id}',[NewsController::class,'destroy'])->name('news.destroy');

//Route::get('/news/{id}/edit', [NewsController::class, 'edit']);


                      /// ---- front --- ///



