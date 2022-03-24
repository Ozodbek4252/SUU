<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
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
    Route::get('/news', 'news')->name('news');
    Route::get('/korzina', 'korzina')->name('korzina');

});

Route::get('/message',[MessageController::class,'index'])->name('message');
Route::post('/message/store',[MessageController::class,'store'])->name('message.store');
Route::get('/message/destroy/{id}',[MessageController::class,'destroy'])->name('message.destroy');








Route::get('/dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/list',[ProductController::class,'index'])->name('list');
Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/create/store',[ProductController::class,'store'])->name('create.store');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('create.edit');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('create.update');
Route::get('/product/destroy/{id}',[ProductController::class,'destroy'])->name('create.destroy');

///--- Report ---///

Route::get('/report',[ReportController::class,'index'])->name('report');
Route::get('/report/create',[ReportController::class,'create'])->name('report/create');
Route::post('/report/store',[ReportController::class,'store'])->name('report/store');
Route::get('/report/edit/{id}',[ReportController::class,'edit'])->name('report.edite');
Route::post('/report/update/{id}',[ReportController::class,'update'])->name('report/update');
Route::get('/report/destroy/{id}',[ReportController::class,'destroy'])->name('report.destroy');

//Route::get('/reports/{id}/edit', [ReportController::class, 'edit']);


                      /// ---- front --- ///



