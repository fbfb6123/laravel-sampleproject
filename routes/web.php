<?php

use App\Http\Middleware\HelloMiddleware;



Route::middleware([HelloMiddleware::class])->group(function (){
Route::get('/hello','HelloController@index');
Route::get('/hello/other', 'HelloController@other');
});
