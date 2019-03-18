<?php

Route::get('/test',function(){

    dd(session()->get('user')->role_id);
});

Route::get('/', 'HomeController@index');

Route::get('/welcome','AuthController@show')->middleware('loggeduser');

Route::post('/register','AuthController@register');

Route::post('/login','AuthController@login');

Route::get('/logout','AuthController@logout');

Route::get('/shop/{id?}','ProductsController@products');

Route::get('/product/{id}','ProductsController@product');

Route::get('/search-watches','ProductsController@search');

Route::post('/insert-answer','PollsController@insert_answer');

//ADMIN

Route::group(['middleware' => ['admin']], function () {
    
Route::prefix('admin')->group(function(){

    Route::namespace('Admin')->group(function () {
        
        Route::get('/','AdminController@index');

        Route::delete('/delete-watch','WatchController@delete_product');

        Route::delete('/delete-user','UserController@delete_user');

        Route::delete('/delete-category','WatchController@delete_category');

        Route::post('/insert-product','WatchController@insert_product');

        Route::post('/insert-user','UserController@insert_user');

        Route::post('/insert-category','WatchController@insert_category');

        Route::post('/show-product-update','WatchController@show');

        Route::post('/update-product','WatchController@update_watch');

        Route::post('/show-user-update','UserController@show_user_update');

        Route::post('/update-user','UserController@update_user');

        Route::post('/show-category-update','CategoryController@show_category');

        Route::post('/update-category','CategoryController@update_category');

        Route::delete('/delete-poll','PollController@delete_poll');

        Route::post('/insert-poll','PollController@insert_poll');

        Route::post('/poll-for-update','PollController@poll_for_update');

        Route::post('/update-poll','PollController@update_poll');

        Route::post('/insert-answer','PollController@insert_answer');

        Route::delete('/delete-answer','PollController@delete_answer');

        Route::post('/answer-for-update','PollController@answer_for_update');

        Route::post('/update-answer','PollController@update_answer');
        
        
    });
});

});