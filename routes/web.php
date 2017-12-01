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

//Route::get('/', [
//    'as' => 'root_path',
//    'uses' => 'AnnoncesController@index'
//]);

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'annonces'], function(){
    Route::get('/hotels', 'AnnoncesController@AnnonceHotel')->name('annonce.hotel');
    Route::get('/restaurants', 'AnnoncesController@AnnonceResto')->name('annonce.resto');
    Route::get('/maquis', 'AnnoncesController@AnnonceMaqui')->name('annonce.maquis');
    Route::get('/details/{slug}', 'AnnoncesController@showAnnonce')->name('annonce.detail');

    Route::post('/comment/{id}/save', 'AnnoncesController@CommentSave')->name('comment.save');
    Route::post('/note/{id}/save', 'AnnoncesController@NoteSave')->name('note.save');
    Route::post('/reservation/{id}/save', 'AnnoncesController@ReservationSave')->name('reservation.save');
});

Route::get('/search', 'HomeController@indexSearch')->name('index.search');


//Route::get('/maquis', [
//    'as' => 'maquis_path',
//    'uses' => 'PagesController@maquis'
//]);
//
//Route::get('/restaus', [
//    'as' => 'restaus_path',
//    'uses' => 'PagesController@restaus'
//]);

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
Route::get('/register/confirm/{token}', 'HomeController@confirmEmail');

Route::get('/user/account', function(){
    return view('user.profile');
});

Route::group(['prefix' => 'user/account', 'middleware' => 'auth'], function () {
    Route::get('/', 'UserController@UserAccount')->name('user.account');

    // crud annonce
    Route::group(['prefix' => 'annonce'], function(){
        Route::get('/', 'UserController@UserAnnonce')->name('user.account.annonce');
        Route::get('/edit', 'UserController@UserAnnonce')->name('user.account.annonce.edit');
        Route::post('/save', 'UserController@UserAnnonceSave')->name('user.account.annonce.save');
        Route::post('/{id}/update', 'UserController@UserAnnonceUpdate')->name('user.account.annonce.update');
        Route::get('/list', 'UserController@UserAnnonceList')->name('user.account.annonce.list');
        Route::get('/archive', 'UserController@UserAnnonceArchive')->name('user.account.annonce.archive');

        Route::get('/{id}/disable', 'UserController@UserAnnonceDisable')->name('user.account.annonce.disable');
        Route::get('/{id}/enable', 'UserController@UserAnnonceEnable')->name('user.account.annonce.enable');
        Route::get('/{id}/delete', 'UserController@UserAnnonceDelete')->name('user.account.annonce.delete');

        Route::get('/delete/strong-point', 'UserController@UserAnnonceStrongPointDelete')->name('user.account.annonce.strong.point.delete');
        Route::get('/delete/delete-picture', 'UserController@UserAnnonceImageDelete')->name('user.account.annonce.image.delete');
    });

    Route::group(['prefix' => 'setting'], function(){
        Route::get('/', 'UserController@UserSetting')->name('user.account.setting');
        Route::post('/save', 'UserController@UserSettingSave')->name('user.account.setting.save');
    });



});

Route::resource('images', 'ImagesController');

Route::resource('annonces', 'AnnoncesController');

// admin route

Route::group(['prefix' => 'adminzone', 'middleware' => 'IsAdmin'], function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin');

    // utilisateur route
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', 'Admin\AdminController@AllUsers')->name('all.users');
        Route::get('/advertiser', 'Admin\AdminController@AllUsersAdvertiser')->name('all.users.advertiser');
        Route::get('/standard', 'Admin\AdminController@AllUsersStandard')->name('all.users.standard');
        Route::get('/admin', 'Admin\AdminController@AllUsersAdmin')->name('all.users.admin');

        Route::get('/{id}/delete', 'Admin\AdminController@DeleteUser')->name('delete.user');
        Route::get('/{id}/delete/admin', 'Admin\AdminController@DeleteAdmin')->name('delete.admin');
        Route::get('/{id}/resend', 'Admin\AdminController@SendConfirmationEmail')->name('user.resend');
        Route::post('/new-admin', 'Admin\AdminController@AddNewAdmin')->name('new.admin');
        Route::get('/new-admin/{id}/add', 'Admin\AdminController@AddNewAdminAdd')->name('new.admin.add');
    });

    // annonces
    Route::group(['prefix' => 'advert'], function(){
        Route::get('/hotels', 'Admin\AdminController@AllHotels')->name('all.hotels');
        Route::get('/restaurants', 'Admin\AdminController@AllRestaurants')->name('all.restaurants');
        Route::get('/maquis', 'Admin\AdminController@AllMaquis')->name('all.maquis');
        Route::get('/{id}/show', 'Admin\AdminController@AnnonceShow')->name('annonce.show');

        //annonce en attente
        Route::get('/hotels/waiting', 'Admin\AdminController@AllHotelsWaiting')->name('all.hotels.waiting');
        Route::get('/restaurants/waiting', 'Admin\AdminController@AllRestaurantsWaiting')->name('all.restaurants.waiting');
        Route::get('/maquis/waiting', 'Admin\AdminController@AllMaquisWaiting')->name('all.maquis.waiting');

        Route::get('/{id}/validate', 'Admin\AdminController@AnnonceValidate')->name('annonce.validate');
        Route::get('/{id}/un-validate', 'Admin\AdminController@AnnonceUnValidate')->name('annonce.un.validate');
        Route::get('/{id}/delete', 'Admin\AdminController@AnnonceDelete')->name('annonce.delete');
//        Route::get('/{id}/delete/admin', 'Admin\AdminController@DeleteAdmin')->name('delete.admin');
//        Route::get('/{id}/resend', 'Admin\AdminController@SendConfirmationEmail')->name('user.resend');
//        Route::post('/new-admin', 'Admin\AdminController@AddNewAdmin')->name('new.admin');
//        Route::get('/new-admin/{id}/add', 'Admin\AdminController@AddNewAdminAdd')->name('new.admin.add');
    });



});