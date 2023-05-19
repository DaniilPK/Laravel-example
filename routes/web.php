<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::group(['namespace' => 'App\Http\Controllers\Category'],function () {
    Route::get('/category', 'IndexController')->name("category.index");
    Route::post('/category/store', 'StoreController')->name('category.store');
});

Route::group(['namespace' => 'App\Http\Controllers\Data'],function (){

Route::get('/data','IndexController') -> name("data.index");
Route::post('/store','StoreController') -> name('data.store');
Route::get('/{post}','ShowController') -> name('data.show');

});



