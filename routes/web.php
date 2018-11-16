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
Route::get('/test', 'HomeController@test')->name('test');

Route::get('/test-car/{id}', 'CarNameController@testForDeletingCar')->name('test.cars.delete');

Route::get('/rss', 'HomeController@rss')->name('rss');

Route::resource('/', 'HomeController');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');


Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
/*SHOULD WORK ON IN THE DOMAIN MAN*/

Route::get('/getThingsAsNavigation/', 'ThingController@getThingsAsNavigation')->name('getThingsAsNavigation');

Route::get('/getAreasAsNavigation/', 'PlaceController@getAreasAsNavigation')->name('getAreasAsNavigation');

Route::get('/getCarsAsNavigation/', 'CarNameController@getCarsAsNavigation')->name('getCarsAsNavigation');

Route::get('/getTagsAsNavigation/', 'TagController@getTagsAsNavigation')->name('getTagsAsNavigation');


/**/

Route::get('/getJSON/{id}', 'BuildingController@getJSON')->name('getJSON');


Route::get('/getJSON-PLUS-INFO/', 'BuildingController@getPlusInfoWithJSON')->name('buildings.getPlusInfoJSON');

Route::get('/getJSON-THING/{id}', 'ThingController@getJSON')->name('pieces.getJSON');

Route::get('/getJSON-ALL-THINGS', 'ThingController@getJSONALLTHINGS')->name('pieces.getJSON.all');

Route::get('/getJSON-CAR/{id}', 'CarNameController@getJSON')->name('cars.getJSON');

Route::get('/getJSON-ALL-CARS', 'CarNameController@getJSONALLCARS')->name('cars.getJSON.all');

Route::get('/getJSON-ALL-PLACES', 'PlaceController@getJSONALLPLACES')->name('places.getJSON.all');

Route::get('/getJSON-PLACE/{id}', 'PlaceController@getJSON')->name('places.getJSON');

Route::get('/getJSON-PUBLISHER/{id}', 'UserController@getJSON')->name('user.getJSON');

Route::get('/about', 'HomeController@about')->name('home.about');

Route::get('/contact-us', 'ContactController@form')->name('contactUs');

Auth::routes();

Route::get('/all', 'BuildingController@showingAllEnabled')->name('showingAllEnabled');

Route::get('/buildings/add', [ 'as' => 'buildings.add', 'uses' => 'BuildingController@add' ]);

Route::get('/home', 'BuildingController@showingAllEnabled')->name('home');



Route::get('/pieces/{slug}', 'ThingController@getAll')->name('pieces.getAll');



Route::get('/cars/{slug}', 'CarNameController@getAll')->name('cars.getAll');



Route::get('/places/{slug}', 'PlaceController@getAll')->name('places.getAll');


Route::any('/search', 'BuildingController@search')->name('search');
/*

Route::resource('/forRent', 'ForRent');

Route::resource('/forType', 'ForType');

*/

Route::get('/tag/{slug}', 'BuildingController@tag')->name('buildings.tag');

Route::get('/pics/{id}/delete', 'PicController@deleteWithJson')->name('pics.deleteWithJson');

Route::resource('/pics', 'PicController');

Route::group(['middleware' => ['user']], function () {
	/* LIKE */



	Route::post('/like/{id}', 'BuildingController@fav')->name('buildings.fav');
	Route::post('/unLike/{id}', 'BuildingController@unFav')->name('buildings.unFav');

	Route::get('/my-favorites-demande', 'UserController@myFavoritesDemande')->name('user.my-favorites-demande');

	Route::get('/my-complete-favorites-demande', 'UserController@myCompleteFavoritesDemande')->name('user.my-complete-favorites-demande');

	Route::get('/my-favorites-offer', 'UserController@myFavoritesOffer')->name('user.my-favorites-offer');

	Route::get('/my-complete-favorites-offer', 'UserController@myCompleteFavoritesOffer')->name('user.my-complete-favorites-offer');

	/* END LIKE */

	Route::get('/user-page/', 'UserController@myPage')->name('user.my-page');

	Route::get('/user-settings/', 'UserController@mySettings')->name('user.my-settings');



	Route::get('/user-buildings-demande/', 'UserController@myBuildingsDemande')->name('user.my-buildings-demande');

	Route::get('/user-complete-buildings-demande/', 'UserController@myCompleteBuildingsDemande')->name('user.my-complete-buildings-demande');

	Route::get('/user-buildings-in-wait-demande/', 'UserController@myBuildingsWDemande')->name('user.my-buildings-in-wait-demande');

	Route::get('/user-complete-buildings-in-wait-demande/', 'UserController@myCompleteBuildingsWDemande')->name('user.my-complete-buildings-in-wait-demande');


	Route::get('/user-buildings-offer/', 'UserController@myBuildingsOffer')->name('user.my-buildings-offer');

	Route::get('/user-complete-buildings-offer/', 'UserController@myCompleteBuildingsOffer')->name('user.my-complete-buildings-offer');

	Route::get('/user-buildings-in-wait-offer/', 'UserController@myBuildingsWOffer')->name('user.my-buildings-in-wait-offer');

	Route::get('/user-complete-buildings-in-wait-offer/', 'UserController@myCompleteBuildingsWOffer')->name('user.my-complete-buildings-in-wait-offer');





	Route::get('/user-update-buildings-in-wait/{id}', 'UserController@buildingsEdit')->name('user.update-buildings-in-wait');

	Route::get('/user-destroy-buildings-in-wait/{id}', 'UserController@buildingsDestroy')->name('user.destroy-buildings-in-wait');

	Route::patch('/user-update-settings/{id}', 'UserController@update')->name('user.updateSettings');



});

Route::group(['middleware' => ['admin']], function () {

    Route::resource('/admin-panel', 'AdminController');

    Route::get('/admin-users-panel/data', ['as' => 'admin-users-panel.data', 'uses' => 'UserControlledByAdminController@anyData']);

    Route::resource('/admin-users-panel', 'UserControlledByAdminController');

    Route::resource('/site-settings', 'SiteSettingController');

    Route::get('/buildings/{id}/destroy', [ 'as' => 'buildings.destroyWithGet', 'uses' => 'BuildingController@destroyWithGet' ]);

    Route::get('/buildings/data', [ 'as' => 'buildings.data', 'uses' => 'BuildingController@anyData' ]);


    Route::get('/pieces/{id}/update', 'ThingController@updateWithJson')->name('pieces.updateWithJson');

    Route::get('/pieces/{id}/delete', 'ThingController@deleteWithJson')->name('pieces.deleteWithJson');

    Route::resource('/pieces', 'ThingController');

    Route::get('/places/{id}/update', 'PlaceController@updateWithJson')->name('places.updateWithJson');

    Route::get('/places/{id}/delete', 'PlaceController@deleteWithJson')->name('places.deleteWithJson');

    Route::resource('/places', 'PlaceController');

    Route::get('/cars/{id}/update', 'CarNameController@updateWithJson')->name('cars.updateWithJson');

    Route::get('/cars/{id}/delete', 'CarNameController@deleteWithJson')->name('cars.deleteWithJson');

	Route::resource('/cars', 'CarNameController');



/**/

Route::get('/contact-hasBeenSeen-not-web-master/{id}', 'ContactController@hasBeenSeenNotWebMaster')->name('contact.hasBeenSeenNotWebMaster');

Route::get('/contact-hasBeenSeen/{id}', 'ContactController@hasBeenSeen')->name('contact.hasBeenSeen');

Route::get('/contact-seenRepDel', 'ContactController@seenRepDel')->name('contact.seenRepDel');
Route::get('/contact-seenRep1Del', 'ContactController@seenRep1Del')->name('contact.seenRep1Del');
Route::get('/contact-seen1RepDel', 'ContactController@seen1RepDel')->name('contact.seen1RepDel');
Route::get('/contact-seen1Rep1Del', 'ContactController@seen1Rep1Del')->name('contact.seen1Rep1Del');


Route::get('/contact-destroy-and-back/{id}', 'ContactController@destroyMessageAndBack')->name('contact.destroyMessageAndBack');

Route::get('/contact-x-destroy-and-back/{id}', 'ContactController@xdestroyMessageAndBack')->name('contact.xdestroyMessageAndBack');

Route::get('/contact-destroy-back-to-new/{id}', 'ContactController@destroyMessageBack2New')->name('contact.destroyMessageBack2New');

Route::get('/contact-x-destroy-back-to-new/{id}', 'ContactController@xdestroyMessageBack2New')->name('contact.xdestroyMessageBack2New');

Route::get('/contact-unSeenRepDel', 'ContactController@unSeenRepDel')->name('contact.unSeenRepDel');
Route::get('/contact-unSeenRep1Del', 'ContactController@unSeenRep1Del')->name('contact.unSeenRep1Del');
Route::get('/contact-unSeen1RepDel', 'ContactController@unSeen1RepDel')->name('contact.unSeen1RepDel');
Route::get('/contact-unSeen1Rep1Del', 'ContactController@unSeen1Rep1Del')->name('contact.unSeen1Rep1Del');

Route::get('/reply-agreeDel', 'ReplyController@agreeDel')->name('reply.agreeDel');
Route::get('/reply-agree1Del', 'ReplyController@agree1Del')->name('reply.agree1Del');
Route::get('/reply-unAgreeDel', 'ReplyController@unAgreeDel')->name('reply.unAgreeDel');
Route::get('/reply-unAgree1Del', 'ReplyController@unAgree1Del')->name('reply.unAgree1Del');

Route::get('/reply-destroy-and-back/{id}', 'ReplyController@destroyRepAndBack')->name('reply.destroyRepAndBack');

Route::get('/reply-x-destroy-and-back/{id}', 'ReplyController@xdestroyRepAndBack')->name('reply.xdestroyRepAndBack');

Route::get('/reply-destroy-back-to-new/{id}', 'ReplyController@destroyRepBack2New')->name('reply.destroyRepBack2New');

Route::get('/reply-x-destroy-back-to-new/{id}', 'ReplyController@xdestroyRepBack2New')->name('reply.xdestroyRepBack2New');




/**/

	Route::get('/contact-box-unseen', [ 'as' => 'contact.boxUnseen', 'uses' => 'ContactController@contactBoxUnseen' ]);

	Route::get('/contact-box', [ 'as' => 'contact.box', 'uses' => 'ContactController@contactBox' ]);

	Route::get('/contact-box/{id}', [ 'as' => 'contact.box.show', 'uses' => 'ContactController@contactBoxShow' ]);

	Route::get('/contact-sent/', [ 'as' => 'contact.sent', 'uses' => 'ReplyController@sent' ]);

	Route::get('/contact-draft/', [ 'as' => 'contact.draft', 'uses' => 'ReplyController@draft' ]);

	Route::get('/contact-trash/', [ 'as' => 'contact.trash', 'uses' => 'ReplyController@trash' ]);

	Route::get('/contact/{id}/response', [ 'as' => 'contact.response', 'uses' => 'ReplyController@create' ]);

	Route::get('/contact/data', [ 'as' => 'contact.data', 'uses' => 'ContactController@anyData' ]);

	Route::resource('/reply', 'ReplyController');



});



Route::resource('/contact', 'ContactController');


Route::resource('/buildings', 'BuildingController');
