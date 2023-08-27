<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', 'App\Http\Controllers\HomeController@about')
    ->name("home.AboutPage");
Route::get('/store/index', 'App\Http\Controllers\StoreController@index')
    ->name("store.index");
Route::get('/store/show/{id}', 'App\Http\Controllers\StoreController@show')
    ->name("store.show");
