<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\HomeController@home')
    ->name("home");
Route::get('/about', 'App\Http\Controllers\HomeController@about')
    ->name("home.AboutPage");
Route::get('/store/index', 'App\Http\Controllers\StoreController@index')
    ->name("store.index");
Route::get('/store/show/{id}', 'App\Http\Controllers\StoreController@show')
    ->name("store.show");
Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminStoreHomeController@index')
        ->name("admin.home.index");
    Route::get('/admin/store', 'App\Http\Controllers\Admin\AdminStorePageController@index')
        ->name("admin.store.index");
});

Route::get('/linhkien', 'App\Http\Controllers\LinhkienController@index')
    ->name("home.linhkien");

Route::get('/linhkien/upload/{filename}', 'App\Http\Controllers\LinhkienController@showImage')
    ->name("upload.show");

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
