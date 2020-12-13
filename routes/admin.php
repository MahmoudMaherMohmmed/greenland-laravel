<?php

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::resource('setting', 'SettingController');
Route::resource('user', 'UserController');
Route::resource('contact', 'ContactController');
Route::resource('sociallink', 'SociallinkController');
Route::resource('currency', 'CurrencyController');
Route::resource('country', 'CountryController');

Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');

Route::resource('slider', 'SliderController');
Route::resource('certificate', 'CertificateController');

