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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get/books', 'BookController@getBooks');
Route::get('/view/books', 'BookController@index');
Route::get('/edit/book/{id}', 'BookController@edit');
Route::post('/create/book', 'BookController@create');
Route::post('/update/book/{id}', 'BookController@update');
Route::post('/delete/book', 'BookController@destroy');