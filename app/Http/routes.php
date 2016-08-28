<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product/category/{id}', 'HomeController@productCategory')->name('category');
Route::get('/product/{id}', 'HomeController@product')->name('product');

Route::get('/news', 'HomeController@news')->name('news');
Route::get('/news/{id}', 'HomeController@newsDetail')->name('newsDetail');

Route::get('/life', 'HomeController@life')->name('life');
Route::get('/life/{id}', 'HomeController@lifeDetail')->name('lifeDetail');

Route::get('/stores', 'HomeController@stores')->name('stores');

Route::get('/projects', 'HomeController@projects')->name('projects');

Route::get('/contact', 'HomeController@contact')->name('contact');