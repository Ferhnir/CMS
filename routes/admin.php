<?php

/*
|--------------------------------------------------------------------------
|Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@show')->name('admin.dashboard.index');
Route::prefix('pages')->group( function() {
    Route::get('/', 'PagesContentController@index')->name('admin.pages.index');
    Route::get('/show/{id?}', 'PagesContentController@show')->name('admin.pages.show');
    Route::get('/add', 'PagesContentController@create')->name('admin.pages.create');
    Route::post('/update', 'PagesContentController@update')->name('admin.pages.update');
});
Route::get('/users', 'DashboardController@show')->name('admin.users.index');
