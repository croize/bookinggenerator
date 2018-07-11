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
    return view('welcome');
});

Route::prefix('admin')->group(function () {
  Route::get('','Admin\AdminController@index');
});

Route::prefix('turis')->group(function () {
  Route::get('','Turis\TurisController@index');
  Route::post('book','Turis\TurisController@book');
});

Route::get('/error', function () {
    return view('404');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
