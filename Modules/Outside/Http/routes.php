<?php

Route::group(['middleware' => 'web', 'prefix' => 'outside', 'namespace' => 'Modules\Outside\Http\Controllers'], function()
{
	Route::get('/','LandingController@getIndex');
    Route::get('/index', 'LandingController@getIndex');
    Route::get('/about','AboutController@getAbout');
    Route::get('/product','ProductController@getProduct');
    Route::get('/show-detail/{id}','ProductController@getProductDetail');

    Route::get('/about-detail/{id}','AboutController@getAboutDetail');

    Route::get('/process','ProcessController@getProcess');

    Route::get('/cert','CertController@getCert');
    Route::get('/cert-detail/{id}','CertController@getCertDetail');

    Route::get('/news','NewsController@getNews');

    Route::get('/contact','ContactController@getContact');
});