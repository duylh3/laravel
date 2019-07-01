<?php

Route::group(['middleware' => 'web', 'prefix' => 'inside', 'namespace' => 'Modules\Inside\Http\Controllers'], function()
{
    Route::get('/index', 'InsideController@index');
    Route::get('product-type/show-all', 'ProductTypeController@getShowAll');
    Route::get('product-type/add', 'ProductTypeController@getAdd');
    Route::post('product-type/add', 'ProductTypeController@postAdd');
    Route::get('product-type/edit/{id}', 'ProductTypeController@getEdit');
    Route::post('product-type/edit/{id}', 'ProductTypeController@postEdit');

    Route::get('product/show-all', 'ProductController@getShowAll');
    Route::get('product/add', 'ProductController@getAdd');
    Route::post('product/add', 'ProductController@postAdd');
    Route::get('product/edit/{id}', 'ProductController@getEdit');
    Route::post('product/edit/{id}', 'ProductController@postEdit');
    Route::post('product/delete/{id}', 'ProductController@postDelete');

    Route::get('/article/show-all', 'ArticleController@getShowAll');
    Route::get('/article/add', 'ArticleController@getAdd');
    Route::post('/article/add', 'ArticleController@postAdd');
    Route::get('/article/edit/{id}','ArticleController@getEdit');
    Route::post('/article/edit/{id}','ArticleController@postEdit');   
    Route::post('/article/delete','ArticleController@postDelete');

    Route::get('/category/show-all', 'CategoryController@getShowAll');
    Route::get('/category/add', 'CategoryController@getAdd');
    Route::post('/category/add', 'CategoryController@postAdd');
    Route::get('/category/edit/{id}','CategoryController@getEdit');
    Route::post('/category/edit/{id}','CategoryController@postEdit');

    Route::resource('/category','CategoryController');
});
