<?php

Route::group(['middleware'=>'auth'],function(){

  Route::get('/', 'HomePageController@index');
  Route::get('/token', 'HomePageController@token');
  Route::get('/listing', 'ListingPageController@index');
  Route::get('/category/{id}', 'ListingPageController@listing');
  Route::get('/details/{slug}', ['uses'=>'DetailsPageController@index', 'as'=>'details'] );
});

Route::group(['prefix'=>'back', 'middleware'=>'auth'],function(){
    Route::get('/', 'Admin\DashboardController@index');

    //User routes
    Route::get('/user', ['uses'=>'Admin\UserController@index', 'as'=>'user-list'] );
    Route::get('/user/create', ['uses'=>'Admin\UserController@create', 'as'=>'user-create'] );
    Route::post('/user/store',  ['uses'=>'Admin\UserController@store', 'as'=>'user-store']);
    Route::get('/user/edit/{id}', ['uses'=>'Admin\UserController@edit', 'as'=>'user-edit']);
    Route::put('/user/edit/{id}', ['uses'=>'Admin\UserController@update', 'as'=>'user-update']);
    Route::delete('/user/delete/{id}', ['uses'=>'Admin\UserController@destroy', 'as'=>'user-delete']);

    //Category routes
    Route::get('/category', ['uses'=>'Admin\CategoryController@index', 'as'=>'category-list'] );
    Route::get('/category/create', ['uses'=>'Admin\CategoryController@create', 'as'=>'category-create'] );
    Route::post('/category/store', ['uses'=>'Admin\CategoryController@store', 'as'=>'category-store'] );
    Route::get('/category/edit/{id}', ['uses'=>'Admin\CategoryController@edit', 'as'=>'category-edit'] );
    Route::put('/category/update/{id}', ['uses'=>'Admin\CategoryController@update', 'as'=>'category-update'] );
    Route::delete('/category/delete/{id}', ['uses'=>'Admin\CategoryController@destroy', 'as'=>'category-delete'] );

    //Car routes
    Route::get('/cars', ['uses'=>'Admin\CarController@index', 'as'=>'cars-list'] );
    Route::get('/cars/create', ['uses'=>'Admin\CarController@create', 'as'=>'cars-create'] );
    Route::post('/cars/store', ['uses'=>'Admin\CarController@store', 'as'=>'cars-store'] );
    Route::put('/cars/status/{id}', ['uses'=>'Admin\CarController@status', 'as'=>'cars-status'] );
    Route::get('/cars/edit/{id}', ['uses'=>'Admin\CarController@edit', 'as'=>'cars-edit'] );
    Route::put('/cars/update/{id}', ['uses'=>'Admin\CarController@update', 'as'=>'cars-update'] );
    Route::get('/cars/edit_price/{id}', ['uses'=>'Admin\CarController@edit_price', 'as'=>'cars-edit-price'] );
    Route::put('/cars/update_price/{id}', ['uses'=>'Admin\CarController@update_price', 'as'=>'cars-update-price'] );
    Route::delete('/cars/delete/{id}', ['uses'=>'Admin\CarController@destroy', 'as'=>'cars-delete'] );

    //System's settings routes
    Route::get('/settings', ['uses'=>'Admin\SettingController@index', 'as'=>'setting'] );
    Route::put('/settings/update', ['uses'=>'Admin\SettingController@update', 'as'=>'setting-update'] );
});

Auth::routes();
