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

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users',  'App\Http\Controllers\UsersController@index');
Route::get('email',  'App\Http\Controllers\EmailController@emails');
Route::get('products',  'App\Http\Controllers\ProductController@products');
Route::get('orders',  'App\Http\Controllers\OrdersController')->name('orders');

