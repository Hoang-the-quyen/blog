<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
    return view('pages.paratials.home');
});

// pages
Route::prefix('pages')->group(function() {
    Route::get('show_news', '\App\Http\Controllers\ParatialsController@show_news')->name('show_news');


});

// admin
Route::prefix('admin')->group(function() {
    
    Route::prefix('category')->group(function() {
        Route::get('add_category', '\App\Http\Controllers\CategoryController@create')->name('add_category');

        Route::post('save_category', '\App\Http\Controllers\CategoryController@store')->name('save_category');

        Route::get('all_category', '\App\Http\Controllers\CategoryController@show')->name('all_category');

        Route::get('delete_category/{id}', '\App\Http\Controllers\CategoryController@destroy')->name('delete_category');


    });

    Route::prefix('news')->group(function() {
        Route::get('add_news', '\App\Http\Controllers\NewsController@create')->name('add_news');

        Route::post('save_news', '\App\Http\Controllers\NewsController@store')->name('save_news');

        Route::get('all_news', '\App\Http\Controllers\NewsController@show')->name('all_news');

        Route::get('delete_news/{id}', '\App\Http\Controllers\NewsController@destroy')->name('delete_news');

    });
});