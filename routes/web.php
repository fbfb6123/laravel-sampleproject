<?php

use App\Http\Middleware\HelloMiddleware;



//Route::middleware([HelloMiddleware::class])->group(function (){
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello','HelloController@index');
Route::post('/hello', 'HelloController@index');
//});
