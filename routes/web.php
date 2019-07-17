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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('producto');


Route::get('/macetas', function() {
  return view ('macetas');
});

Route::get('/product', function(){
  return view ('product');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
  Route::resource('/products', 'AdminProductController');
  Route::resource('/users', 'AdminUserController');
});

Route::get('/edit/{id}', 'UserUpdate@edit')->middleware('auth')->name('edit');
Route::put('/update/{id}', 'UserUpdate@update')->name('update');

Route::get('/profile', "UserController@show")->name("profile")->middleware('auth');
