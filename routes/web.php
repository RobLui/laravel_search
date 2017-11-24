<?php

Route::get('/', function () {
    return view('welcome');
});

// EXCEL TOOL
Route::get('/tool', 'ToolController@index')
    ->name('tool')
    ;

// DB TOOL
Route::get('/dbtool', 'DbToolController@index')
    ->name('dbtool')
;

// DB TOOL
Route::post('/dbtool', 'DbToolController@searchFunction')
    ->name('search')
;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
