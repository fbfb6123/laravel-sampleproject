<?php

use App\Http\Middleware\HelloMiddleware;



//Route::middleware([HelloMiddleware::class])->group(function (){
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello','HelloController@index');
Route::post('/hello', 'HelloController@index');
Route::get('/hello','HelloController@create');
Route::post('/hello', 'HelloController@store');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
