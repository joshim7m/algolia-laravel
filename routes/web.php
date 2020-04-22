<?php

use Illuminate\Support\Facades\Route;






Route::get('post/search', 'PostController@search')->name('post.search');
Route::get('post/searchjs', 'PostController@searchJs')->name('post.searchjs');
Route::resource('post', 'PostController');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
