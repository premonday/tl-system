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

Route::get('/', function () { return view('welcome');} );
Route::get('/tabs', function () { return view('tabs');} );
Route::get('/articles', function () { return view('news');} );

// News
Route::get('/articles', 'News\\NewsController@index')->name('news-index');
Route::get('/articles/{post}', 'News\\NewsController@post')->name('news-post');
