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

Route::group(['namespace' => 'Home'], function () {
    Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/contact', 'HomeController@contact')->name('contact');
        Route::get('/about', 'HomeController@about')->name('about');
    });
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Install'], function () {
        Route::get('test', 'TestController@index');
        Route::get('makecat', 'ShopController@cat');
        Route::get('makegood', 'ShopController@good');
        Route::get('makebuy', 'ShopController@buy');
        Route::get('makesell', 'ShopController@sell');
        Route::get('maketj', 'ShopController@Tongji');
        Route::get('maketjbuy', 'ShopController@TongjiBuy');
        Route::get('maketjsell', 'ShopController@TongjiSell');
    });

    Route::group(['namespace' => 'Setup'], function () {
        Route::resource('Setup/Cat', 'CatController');
        Route::resource('Setup/Good', 'GoodController');
    });

    Route::group(['namespace' => 'Work'], function () {
        Route::resource('Work/Buy', 'BuyController');
        Route::resource('Work/Sell', 'SellController');
    });

    Route::group(['namespace' => 'Tongji'], function () {
        Route::get('Tongji/All', 'TongjiController@index');
        Route::get('Tongji/Buy', 'TongjiController@buy');
        Route::get('Tongji/Sell', 'TongjiController@sell');
    });
});
