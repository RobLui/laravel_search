<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', 'LoginController@logout')
    ->name('logout')
    ;

// DB TOOL
Route::get('/dbtool', 'DbToolController@index')
    ->name('dbtool')
    ;

// DB TOOL
Route::post('/dbtool', 'DbToolController@searchFunction')
    ->name('search')
    ;

Route::get('/home', 'HomeController@index')->name('home');
