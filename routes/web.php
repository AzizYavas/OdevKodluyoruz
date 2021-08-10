<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/anasayfa', function () {
    return view('admin/master');
})->name('master');


Route::group(['prefix' => 'admin/category'] , function (){

    Route::get('index',[CategoryController::class,'index'])->name('categoryindex');

    //link adı                                    //fonksiyon adı
    Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');

    Route::post('update',[CategoryController::class,'update'])->name('update');

    Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete');

    //Route::put('update/{id?}',[CategoryController::class,'update'])->name('update');

    Route::post('createfile',[CategoryController::class,'createfile'])->name('createfile');

    Route::get('createform',[CategoryController::class,'createform'])->name('createform');


});

Route::group(['prefix' => 'admin/product'] , function (){

        Route::get('edit',[ProductController::class,'edit']) ->name('productedit');

        Route::get('index',[ProductController::class,'index']) ->name('productindex');

});

Route::group(['prefix' => 'admin/user'] , function (){

        Route::get('edit',[UserController::class,'edit']) ->name('useredit');

        Route::get('index',[UserController::class,'index']) ->name('userindex');

});

Route::group(['prefix' => 'admin/cart'] , function (){

        Route::get('index',[CartController::class,'index']) ->name('cartindex');

        Route::get('view',[CartController::class,'view']) ->name('cartview');

});
