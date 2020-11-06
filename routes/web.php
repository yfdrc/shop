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

Route::group(['prefix' => 'Ajax', 'namespace' => 'Ajax'], function(){
    Route::get('Cat', 'AjaxController@cat');
});

Route::group(['namespace' => 'Home'], function () {
    Route::group(['prefix' => 'Home','middleware' => ['web', 'auth']], function () {
        Route::get('Contact', 'HomeController@contact')->name('contact');
        Route::get('About', 'HomeController@about')->name('about');
    });
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'Make','namespace' => 'Install'], function () {
        Route::get('Cust', 'ShopController@cust');
        Route::get('Supp', 'ShopController@supp');
        Route::get('Cat', 'ShopController@cat');
        Route::get('Good', 'ShopController@good');
        Route::get('Buy', 'ShopController@buy');
        Route::get('Sell', 'ShopController@sell');
        Route::get('Tj', 'ShopController@Tongji');
    });

    Route::group(['prefix' => 'Setup', 'namespace' => 'Setup'], function () {
        Route::resource('Customer', 'CustomerController');
        Route::resource('Supplier', 'SupplierController');
        Route::resource('Cat', 'CatController');
        Route::resource('Good', 'GoodController');
    });

    Route::group(['prefix' => 'Work', 'namespace' => 'Work'], function () {
        Route::resource('Buy', 'BuyController');
        Route::resource('Sell', 'SellController');
    });

    Route::group(['prefix' => 'Tongji', 'namespace' => 'Tongji'], function () {
        Route::get('All', 'TongjiController@index');
        Route::get('Buy', 'TongjiController@buy');
        Route::get('Sell', 'TongjiController@sell');
    });
});
