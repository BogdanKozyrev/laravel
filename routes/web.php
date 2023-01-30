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
Route::get('ingredients',  'App\Http\Controllers\IngredientsController@index')->name('ingredients');
Route::get('ingredients/create', 'App\Http\Controllers\IngredientsController@create')->name('ingredients.create');
Route::get('ingredients/edit/{ingredient}', 'App\Http\Controllers\IngredientsController@edit')->name('ingredients.edit');
Route::post('ingredients/store', 'App\Http\Controllers\IngredientsController@store')->name('ingredients.store');
Route::post('ingredients/update/{ingredient}', 'App\Http\Controllers\IngredientsController@update')->name('ingredients.update');
Route::delete('ingredients/delete/{ingredient}', 'App\Http\Controllers\IngredientsController@delete')->name('ingredients.delete');

