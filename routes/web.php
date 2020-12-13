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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    require_once __DIR__ . '/admin.php';

});


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/about', 'HomeController@about');

    Route::get('/products/{id}', 'HomeController@products');

    Route::get('/certificate', 'HomeController@certificate');

    Route::get('/contact', 'HomeController@getContact');

    Route::get('/login', 'HomeController@login');
    Route::post('/login', 'HomeController@postLogin')->name('login');
    Route::get('/logout', 'HomeController@logout');
});
