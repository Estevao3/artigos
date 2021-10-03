<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('posts/trashed', 'PostController@trashed')->name('posts.trashed');
Route::get('posts/{post}/restore', 'PostController@restore')->name('posts.restore');
Route::delete('posts/{post}/forceDelete', 'PostController@forceDelete')->name('posts.forceDelete');
Route::resource('posts','PostController');
