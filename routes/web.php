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

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/hotels', [
    'as' => 'hotels_path',
    'uses' => 'PagesController@hotels'
]);

Route::get('/maquis', [
    'as' => 'maquis_path',
    'uses' => 'PagesController@maquis'
]);

Route::get('/restaus', [
    'as' => 'restaus_path',
    'uses' => 'PagesController@restaus'
]);

