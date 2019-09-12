<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Panel', 'prefix' => 'panel', 'middleware' => 'auth'], function() {

    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });

    Route::get('/clear-view-cache', function() {
        Artisan::call('view:clear');
        return "View cache is cleared";
    });

    Route::get('/clear-config-cache', function() {
        Artisan::call('config:cache');
        return "Config cache is cleared";
    });

    Route::get('/', 'DashboardController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
