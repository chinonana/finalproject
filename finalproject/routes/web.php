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

//login/google
Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

//ページ表示
//index.blade
Route::get('/', 'PostController@index');
//create
Route::get('/posts/create', 'PostController@create');
//個別投稿の編集画面表示
Route::get('/posts/{post}/edit', 'PostController@edit');
//edituodate
Route::get('/posts/{post}', 'PostController@update');
//個別post
Route::get('/posts/{post}', 'PostController@show');

// データ編集
//create後の個別表示
Route::post('/posts', 'PostController@store');
// 削除




//普通のloginページ
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
