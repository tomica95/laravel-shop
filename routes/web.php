<?php

Route::get('/test',function(){

    dd(session()->get('user')->role_id);
});

Route::get('/', 'HomeController@index');

Route::get('/welcome','AuthController@show')->middleware('loggeduser');

Route::post('/register','AuthController@register')->middleware('loggeduser');

Route::post('/login','AuthController@login')->middleware('loggeduser');

Route::get('/logout','AuthController@logout')->middleware('notuser');

Route::get('/shop/{id?}','ProductsController@products');

Route::get('/product/{id}','ProductsController@product');

Route::get('/search-watches','ProductsController@search');

Route::post('/insert-answer','PollsController@insert_answer');

Route::get('/contact','HomeController@contact_show');

Route::post('/contactto','HomeController@store');

Route::post('/sort-by-brand','CategoryController@sort_by_brand');

Route::get('/addtocart/watchid/{id}','CartController@insert');

Route::get('/show-cart','CartController@show');

//ADMIN

Route::group(['middleware' => ['admin']], function () {
    
Route::prefix('admin')->group(function(){

    Route::namespace('Admin')->group(function () {
        
        Route::get('/','AdminController@index');

        Route::delete('/delete-watch','WatchController@delete_product')->middleware('admin');

        Route::delete('/delete-user','UserController@delete_user')->middleware('admin');

        Route::delete('/delete-category','WatchController@delete_category')->middleware('admin');

        Route::post('/insert-product','WatchController@insert_product')->middleware('admin');

        Route::post('/insert-user','UserController@insert_user')->middleware('admin');

        Route::post('/insert-category','WatchController@insert_category')->middleware('admin');

        Route::post('/show-product-update','WatchController@show')->middleware('admin');

        Route::post('/update-product','WatchController@update_watch')->middleware('admin');

        Route::post('/show-user-update','UserController@show_user_update')->middleware('admin');

        Route::post('/update-user','UserController@update_user')->middleware('admin');

        Route::post('/show-category-update','CategoryController@show_category')->middleware('admin');

        Route::post('/update-category','CategoryController@update_category')->middleware('admin');

        Route::delete('/delete-poll','PollController@delete_poll')->middleware('admin');

        Route::post('/insert-poll','PollController@insert_poll')->middleware('admin');

        Route::post('/poll-for-update','PollController@poll_for_update')->middleware('admin');

        Route::post('/update-poll','PollController@update_poll')->middleware('admin');

        Route::post('/insert-answer','PollController@insert_answer')->middleware('admin');

        Route::delete('/delete-answer','PollController@delete_answer')->middleware('admin');

        Route::post('/answer-for-update','PollController@answer_for_update')->middleware('admin');

        Route::post('/update-answer','PollController@update_answer')->middleware('admin');

        Route::get('/sort-desc','AdminController@sort_desc')->middleware('admin');
        
        
    });
});

});