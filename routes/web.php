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

Route::get('jobs', function () {
    // return view('google.check'); //仮LP
    return view('google.jobs'); //獲得LP
});

//イククル-DL
Route::get('dl', function () {
    return view('google.dl'); //自動遷移LP。ココに案件タグを設置
});

//popo-DL
Route::get('install', function () {
    return view('google.install'); //自動遷移LP。ココに案件タグを設置
});

// LP確認用
Route::get('cccheck', function () {
    return view('google.jobs'); //獲得LP
});