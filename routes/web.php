<?php

Route::get('/test',function(){

    dd(request()->session()->get('user'));
});

Route::get('/', 'HomeController@index');

Route::get('/welcome','AuthController@show');

Route::post('/register','AuthController@register');

Route::post('/login','AuthController@login');

Route::get('/shop/{id?}','ProductsController@products');

Route::get('/product/{id}','ProductsController@product');

//ADMIN
Route::prefix('admin')->group(function(){

    Route::namespace('Admin')->group(function () {
        
        Route::get('/','AdminController@index');

        Route::delete('/delete-watch','WatchController@delete_product');

        Route::delete('/delete-user','UserController@delete_user');

        Route::delete('/delete-category','WatchController@delete_category');

        Route::post('/insert-product','WatchController@insert_product');

        Route::post('/insert-user','UserController@insert_user');
        
        
    });
});