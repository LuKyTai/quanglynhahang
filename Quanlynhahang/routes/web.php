<?php
use App\Http\Controllers\ExampleController;

// route Hiển thị màn hình hello
Route::get('/hello', 'ExampleController@hello')->name('example.hello');
Route::get('/gioithieubanthan', 'ExampleController@gioithieubanthan')->name('example.gioithieubanthan');
Route::get('/hoctap/php', 'ExampleController@hoctapphp')->name('example.hoctapphp');
Route::get('/hoctap/laravel', 'ExampleController@hoctap/laravel')->name('example.hoctap/laravel');

Route::get('/', function () {
    return view('welcome');
});
