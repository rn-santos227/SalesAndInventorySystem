<?php

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'authenticated'], function() {
    Route::get('/home', 'HomeController@index');
    Route::get('/inventory', 'PagesController@inventory');
    Route::get('/items', 'PagesController@items');
});

Route::resource('items','ItemsController');
Route::resource('categories','CategoriesController');
Route::resource('suppliers','SuppliersController');
