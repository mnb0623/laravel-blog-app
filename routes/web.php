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

// ブログ一覧画面を表示
Route::get('/', 'App\Http\Controllers\BlogController@showList')->name('blogs');
// !動画とはlaravelのバージョンが異なり記法が変わってる
// https://qiita.com/norichintnk/items/34a04cd17bfe4014313a
// #10 ブログ登録画面を表示
Route::get('/blog/create', 'App\Http\Controllers\BlogController@showCreate')->name('create');
// #10 ブログ登録
Route::post('/blog/store', 'App\Http\Controllers\BlogController@exeStore')->name('store');
// #8 ブログ詳細画面を表示
// #8 これも動画とはバージョンが違うので記法が異なる
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@showDetail')->name('show');
