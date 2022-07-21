<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('languages/{lang}', function($lang){

    if (in_array($lang, ['en', 'ru', 'uz'])) {
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('languages.change');

//_____________________Basket__________________________



/// ------------------------ Front --------------------------
Route::redirect('/home', '/ru');

Route::redirect('/dashboard', '/ru/dashboard');


// ------------------- Log Out -------------------
Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');


Route::get('/add_basket/{id}', function ($id){
    $product = \App\Models\Product::find($id);
    if(!$product) {abort(404);}
    $cart = session()->get('cart');
    if(!$cart) { $cart = [ $id => [
        "id"=>$id,
        "quantity" => 1,
        "logo" => 1,
        "display" => 'none'
    ]]; }
    else{ $cart[$id] = [
        "id" => $id,
        "quantity" => 1,
        "logo" => 1,
        "display" => 'none'
    ]; }
    session()->put('cart', $cart);
    return response()->json();
});
Route::get('/update_quantity/{id}/{q}', function($id, $q){
    $cart = session()->get('cart');
    $cart[$id]['quantity'] = $q;
    $cart[$id]['display'] = 'block';
    session()->put('cart', $cart);
    return response()->json();
});
Route::get('/update_logo/{bul}/{id}', function($bul, $id){
    $cart = session()->get('cart');
    $cart[$id]['logo'] = $bul;
    $cart[$id]['display'] = 'block';
    session()->put('cart', $cart);
    return response()->json();
});
Route::get('/delete_product/{id}', function ($id){
    $cart = session()->get('cart');
    unset($cart[$id]);
    session()->put('cart', $cart);
    return response()->json();
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

Route::get('/load', function(){
    return view('front.load_product');
});

Route::get('/load/{k}', function($k){
    $load = session()->get('load');
    $load['load'] = $k;
    session()->put('load', $load);
    return response()->json();
});
    
    Route::get('/fetch', [ProductController::class, 'fetch']);
    Route::get('/basket', [ProductController::class, 'fetch']);
    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
    Route::get('/order/make', [OrderController::class, 'make']);
    

Route::group(['prefix' => '{language}'], function(){
    
    
    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'index')->name('home');
        Route::get('/about','about')->name('about');
        Route::get('/all-news', 'news')->name('front.news');
        Route::get('/single-news/{id}', 'singleNews_index')->name('single-news');
    });
    
    
    
    // ------------------------------- Dashboard ----------------------------------
    Route::middleware([
        'auth:sanctum', 
        'verified',
        'IsAdmin'
        ])->group(function(){
            Route::get('/dashboard', function () {
                return view('dashboard');
            });
            Route::get('/product/list',[ProductController::class,'index'])->name('product.list');
            Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
            Route::post('/product/{id?}',[ProductController::class,'store'])->name('product.store');
            Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
            Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('product.edit');
            Route::put('/update-product/{id}',[ProductController::class,'update'])->name('product.update');

            Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
            Route::get('/invoice/{id}', [InvoiceController::class, 'orders'])->name('dash.orders');
            
            Route::get('/message',[MessageController::class,'index'])->name('message');
            Route::post('/message/store',[MessageController::class,'store'])->name('message.store');
            Route::get('/message/{id}',[MessageController::class,'destroy'])->name('message.destroy');
            
            Route::get('/news', [NewsController::class,'index'])->name('news');
            Route::get('/news/create', [NewsController::class,'create'])->name('news.create');
            Route::post('/news', [NewsController::class,'store'])->name('news.store');
            Route::delete('/news/{id}', [NewsController::class,'destroy'])->name('news.destroy');
            Route::get('/edit-news/{id}', [NewsController::class,'edit'])->name('news.edit');
            Route::put('/update-news/{id}', [NewsController::class,'update'])->name('news.update');
    });
});


Route::get('artisan/{command}', function ($command){
    $text = '';
    foreach (explode('|', $command) as $item){
        $text .= ' '.$item;
    }
    \Artisan::call($text);
});






