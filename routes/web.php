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

// LP獲得用
Route::get('news', function () {
    // return view('google.check'); //確認用LP
    return view('google.job'); //獲得LP(2)
    
    // return view('google.uraLive'); //獲得LP(1)
});

// LP確認用
Route::get('cccheck', function () {
    return view('google.job'); //獲得LP(2)
    
    // return view('google.uraLive'); //獲得LP(1)
});