<?php

// サイトトップ
Route::redirect('/', '/kakugen/', $status = 302);


// 個人情報保護方針
Route::get('/privacy', function () {
    return view('privacy');
});



// ユーザ登録
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.get');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');


// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// ホーム
Route::get('/home', 'HomeController@index')->name('home');

// マイページ
Route::get('/mypage', 'Mypage\MY001mypageTopController@execute')->name('mypage.top');


// 格言サービス
require 'include/webkakugen.php';


//　ログイン時のみ
Route::group(['middleware' => 'auth'], function () {
    

});





