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
    'uses' => 'AnnoncesController@listeHotels'
]);

Route::get('/maquis', [
    'as' => 'maquis_path',
    'uses' => 'PagesController@maquis'
]);

Route::get('/restaus', [
    'as' => 'restaus_path',
    'uses' => 'PagesController@restaus'
]);

Route::get('/hotels', [
    'as' => 'hotels_path',
    'uses' => 'AnnoncesController@listeHotels'
]);

Route::get('/description', [
   'as' => 'description_path',
   'uses' => 'PagesController@description'
]);

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


Route::get('/home', function (){
    return redirect('/');
});

Route::get('/register/welcome', 'Auth\RegisterController@welcome')->name('welcome');
Route::get('register/confirm/{token}', 'Auth\RegisterController@confirmEmail');

Route::get('/user/account', function(){
    return view('user.profile');
});

Route::group(['prefix' => 'user/account', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@UserAccount')->name('user.account');

    // crud annonce
    Route::group(['prefix' => 'annonce'], function(){
        Route::get('/annonce', 'UserController@UserAnnonce')->name('user.account.annonce');
        Route::get('/annonce/edit', 'UserController@UserAnnonce')->name('user.account.annonce.edit');
        Route::post('/annonce/save', 'UserController@UserAnnonceSave')->name('user.account.annonce.save');
        Route::post('/annonce/{id}/update', 'UserController@UserAnnonceUpdate')->name('user.account.annonce.update');
        Route::get('/annonce/list', 'UserController@UserAnnonceList')->name('user.account.annonce.list');
        Route::get('/annonce/archive', 'UserController@UserAnnonceArchive')->name('user.account.annonce.archive');

        Route::get('/annonce/{id}/disable', 'UserController@UserAnnonceDisable')->name('user.account.annonce.disable');
        Route::get('/annonce/{id}/enable', 'UserController@UserAnnonceEnable')->name('user.account.annonce.enable');
        Route::get('/annonce/{id}/delete', 'UserController@UserAnnonceDelete')->name('user.account.annonce.delete');

        Route::get('/annonce/delete/strong-point', 'UserController@UserAnnonceStrongPointDelete')->name('user.account.annonce.strong.point.delete');
        Route::get('/annonce/delete/delete-picture', 'UserController@UserAnnonceImageDelete')->name('user.account.annonce.image.delete');
    });

    Route::group(['prefix' => 'setting'], function(){
        Route::get('/', 'UserController@UserSetting')->name('user.account.setting');
        Route::post('/save', 'UserController@UserSettingSave')->name('user.account.setting.save');
    });


});

Route::resource('images', 'ImagesController');

Route::resource('annonces', 'AnnoncesController');
