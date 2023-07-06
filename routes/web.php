<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/','App\Http\Controllers\ProductController@index')->name('index');
Route::get('/create','App\Http\Controllers\ProductController@create')->name('create');
Route::post('store/','App\Http\Controllers\ProductController@store')->name('store');
Route::get('show/{product}','App\Http\Controllers\ProductController@show')->name('show');
Route::get('edit/{product}','App\Http\Controllers\ProductController@edit')->name('edit');
Route::put('edit/{product}','App\Http\Controllers\ProductController@update')->name('update');
Route::delete('/{product}','App\Http\Controllers\ProductController@destroy')->name('destroy');
