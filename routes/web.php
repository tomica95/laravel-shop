<?php

Route::get('/test',function(){

    dd(request()->session()->get('user'));
});

Route::get('/', 'HomeController@index');

Route::get('/shop', 'HomeController@shop');

Route::get('/welcome','AuthController@show');

Route::post('/register','AuthController@register');

Route::post('/login','AuthController@login');