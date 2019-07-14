<?php

// 格言トップ画面表示
Route::get('/kakugen/', 'Kakugen\KK001kakugenTopController@execute')->name('kakugen');

// 格言検索画面表示
Route::get('/kakugen/search/', 'Kakugen\KK002kakugenSearchController@execute')->name('kakugen.search');

// 格言一覧画面表示
Route::get('/kakugen/list/', 'Kakugen\KK003kakugenListController@execute')->name('kakugen.list');

// 格言詳細画面表示（格言テーブル.ID）
Route::get('/kakugen/detail/{id}/', 'Kakugen\KK004kakugenDetailController@execute')->name('kakugen.detail');




// 格言登録画面表示
Route::get('/kakugen/input/', 'Kakugen\KK101kakugenInputController@execute')->name('kakugen.input');

// 格言登録確認画面表示
Route::post('/kakugen/confirm/', 'Kakugen\KK102kakugenConfirmController@execute')->name('kakugen.confirm');

// 格言登録完了画面表示
Route::post('/kakugen/complete/', 'Kakugen\KK103kakugenCompleteController@execute')->name('kakugen.complete');


// 格言修正画面表示（格言テーブル.ID）
Route::get('/kakugen/edit/{id}/', 'Kakugen\KK104kakugenEditController@execute')->name('kakugen.edit');

// 格言修正処理（格言テーブル.ID）
Route::post('/kakugen/update/{id}/', 'Kakugen\KK105kakugenUpdateController@execute')->name('kakugen.update');

// 格言削除処理（格言テーブル.ID）
Route::get('/kakugen/delete/{id}/', 'Kakugen\KK106kakugenDeleteController@execute')->name('kakugen.delete');

// 格言コメント処理（格言テーブル.ID）
Route::post('/kakugen/comment/{id}/', 'Kakugen\KK201kakugenCommentController@execute')->name('kakugen.comment');

// 格言お気に入り登録（格言テーブル.ID）
Route::get('/kakugen/favorite/{id}', 'Kakugen\KK301kakugenFavoriteController@execute')->name('kakugen.favorite');






















