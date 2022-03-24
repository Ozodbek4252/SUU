<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\MessageController;
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
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/all-news', 'news')->name('front.news');
    Route::get('/korzina', 'korzina')->name('korzina');
    Route::get('/single-news/{id}', 'singleNews_index')->name('single-news');

});

Route::get('/message',[MessageController::class,'index'])->name('message');
Route::post('/message/store',[MessageController::class,'store'])->name('message.store');
Route::get('/message/destroy/{id}',[MessageController::class,'destroy'])->name('message.destroy');






// ------------------------------- Dashboard ----------------------------------

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
    
    // Route::get('/list',[ProductController::class,'index'])->name('list');
    // Route::get('/create',[ProductController::class,'create'])->name('create');
    // Route::post('/create/store',[ProductController::class,'store'])->name('create.store');
    // Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('create.edit');
    // Route::post('/product/update/{id}',[ProductController::class,'update'])->name('create.update');
    // Route::get('/product/destroy/{id}',[ProductController::class,'destroy'])->name('create.destroy');

    ///--- News ---///
    
})->name('dashboard');
Route::get('/news', [NewsController::class,'index'])->name('news');
Route::get('/news/create', [NewsController::class,'create'])->name('news.create');
Route::post('/news',[NewsController::class,'store'])->name('news.store');



// Route::get('/news/{id}',[NewsController::class,'edit'])->name('news.edit');
// Route::post('/news/{id}',[NewsController::class,'update'])->name('news/update');
// Route::get('/news/{id}',[NewsController::class,'destroy'])->name('news.destroy');

//Route::get('/news/{id}/edit', [NewsController::class, 'edit']);


                      /// ---- front --- ///



