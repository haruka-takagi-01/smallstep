<?php

// サイトトップ
Route::redirect('/', '/kakugen/', $status = 302);


// 個人情報保護方針
Route::get('/privacy/', function () {
    return view('privacy');
});


// 認証
Auth::routes();
// 以下が追加されている
// // Authentication Routes...
// ログイン認証
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');
// 
// // Registration Routes...
// ユーザ登録
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');
// 
// // Password Reset Routes...
// パスワードリセット
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// ホーム
Route::get('/home', 'HomeController@index')->name('home');


// 格言サービス
require 'include/webkakugen.php';



//　ログイン時のみ
Route::group(['middleware' => 'auth'], function () {
    
    // 投稿機能
//    Route::resource('microposts', 'MicropostsController', ['only' => ['store', 'destroy']]);
    
    // フォロー機能
//    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);

    //　お気に入り機能
//    Route::group(['prefix' => 'microposts/{id}'], function () {
//        Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
//        Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
//    });

//    Route::group(['prefix' => 'users/{id}'], function () {
//        Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
//    });
    
});





