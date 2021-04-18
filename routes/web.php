<?php

use Illuminate\Support\Facades\Route;

// リーク一覧
Route::get('/', 'App\Http\Controllers\LeakController@showList')->name('leaks');
// リーク詳細
Route::get('/leak/{id}', 'App\Http\Controllers\LeakController@showDetail')->name('detail');
// リーク入力画面
Route::get('/create', 'App\Http\Controllers\LeakController@showCreate')->name('create');
// リーク投稿
Route::post('/store', 'App\Http\Controllers\LeakController@exeStore')->name('store');
// ワード検索
Route::post('/search', 'App\Http\Controllers\LeakController@showSearch')->name('search');



