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
//Store routes
Route::get('/store/index', 'App\Http\Controllers\StoreController@index')
    ->name("store.index");
Route::get('/store/show/{id}', 'App\Http\Controllers\StoreController@show')
    ->name("store.show");
//get images
Route::get('/store/showItem/{filename}', 'App\Http\Controllers\StoreController@showImage')
    ->name('store.showImage');
//search 
Route::get('search', [
    'as' => 'search',
    'uses' => 'App\Http\Controllers\StoreController@getSearch'
]);
//suggest
Route::get('/suggest', 'App\Http\Controllers\StoreController@suggest_ajax')->name('suggest_ajax');

//Cart routes
Route::get('/cart', 'App\Http\Controllers\CartController@index')
    ->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')
    ->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')
    ->name('cart.add');
Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')
        ->name('cart.purchase');
    Route::get('/cart/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')
        ->name('my-account.orders');
    Route::get('/myProfile', 'App\Http\Controllers\MyAccountController@MyProfile')
        ->name('myProfile');
    
});
Route::get('/profile/avatar/{filename}', 'App\http\Http\Controllers\MyAccountController@showImage')
        ->name('showAvatar');
//admin routes
Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminStoreHomeController@index')
        ->name("admin.home.index");
    Route::get('/admin/store', 'App\Http\Controllers\Admin\AdminStorePageController@index')
        ->name("admin.store.index");
    Route::post('/admin/store/create', 'App\Http\Controllers\Admin\AdminStorePageController@CreateNewStore')
        ->name("admin.store.create");
    Route::delete('admin/store/{id}/delete', 'App\Http\Controllers\Admin\AdminStorePageController@deleteStore')
        ->name("admin.store.delete");
    Route::get('admin/store/{id}/edit', 'App\Http\Controllers\Admin\AdminStorePageController@editStore')
        ->name("admin.store.edit");
    Route::put('admin/store/{id}/update', 'App\Http\Controllers\Admin\AdminStorePageController@updateStore')
        ->name("admin.store.update");
});

Route::get('/linhkien', 'App\Http\Controllers\LinhkienController@index')
    ->name("home.linhkien");

Route::get('/linhkien/upload/{filename}', 'App\Http\Controllers\LinhkienController@showImage')
    ->name("upload.show");

Auth::routes();
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
