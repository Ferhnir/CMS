<?php

/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@show')->name('admin.dashboard.index');

Route::prefix('webcontent')->group( function() {
    Route::get('/pages', 'PagesContentController@index')->name('admin.webcontent.pages.index');
    Route::post('/pages/show/{id?}', 'PagesContentController@show')->name('admin.webcontent.pages.show');
    Route::get('/pages/add', 'PagesContentController@create')->name('admin.webcontent.pages.create');
    Route::post('/pages/add', 'PagesContentController@store')->name('admin.webcontent.pages.store');
    Route::post('/pages/update/{id}', 'PagesContentController@update')->name('admin.webcontent.pages.update');
});

Route::prefix('webcontent')->group(function() {
    Route::get('/navdrawer', 'NavdrawerController@index')->name('admin.webcontent.navdrawer.index');
    Route::post('/navdrawer/show/{id?}', 'NavdrawerController@show')->name('admin.webcontent.navdrawer.show');
    Route::post('/navdrawer/update/{id?}', 'NavdrawerController@update')->name('admin.webcontent.navdrawer.update');
});
Route::get('/users', 'DashboardController@show')->name('admin.users.index');
