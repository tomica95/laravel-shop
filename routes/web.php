<?php

Route::get('/test',function(){

    dd(request()->session()->get('user'));
});

Route::get('/', 'HomeController@index');

Route::get('/welcome','AuthController@show');

Route::post('/register','AuthController@register');

Route::post('/login','AuthController@login');

Route::get('/brand/{id}','ProductsController@products');

Route::get('/product/{id}','ProductsController@product');