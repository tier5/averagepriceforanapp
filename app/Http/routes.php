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

/*--index view--*/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/under-construction', ['uses' => 'MainController@underCons', 'as' => 'under-cons']);
/*--questions routes--*/
Route::get('/typeofapp', ['uses' => 'MainController@getTypeOfApp','as' => 'getFirstPage']);
Route::post('/typeofapp', ['uses' => 'MainController@postTypeOfApp','as' => 'postFirstPage']);
Route::get('/peoplehavetologin', ['uses' => 'MainController@getPeopleLogin', 'as' => 'peopleLogin']);
Route::post('/peoplehavetologin', ['uses' => 'MainController@postPeopleLogin', 'as' => 'postPeopleLogin']);
Route::get('/create-personal-profiles', ['uses' => 'MainController@getPersonalProfiles' , 'as' => 'personalProfiles']);
Route::post('/create-personal-profiles', ['uses' => 'MainController@postPersonalProfiles' , 'as'=> 'postPersonalProfiles']);
Route::get('/make-money', ['uses' => 'MainController@getMakeMoney' , 'as' => 'makeMoney']);
Route::post('/make-money', ['uses' => 'MainController@postMakeMoney' , 'as' => 'postMakeMoney']);
Route::get('/rates-reviews', ['uses'=>'MainController@getRateReview', 'as' => 'rateReviews']);
Route::post('/rates-reviews', ['uses' => 'MainController@postRateReviews', 'as' => 'postRateReview']);
Route::get('/connect-to-website', ['uses' => 'MainController@getConnectToWebsite', 'as' => 'connectToWebsite']);
Route::post('/connect-to-website', ['uses' => 'MainController@postConnectToWebsite', 'as' => 'postConnectToWebsite']);
Route::get('/app-looks', ['uses' => 'MainController@getAppLook', 'as' => 'appLook']);
Route::post('/app-looks', ['uses' => 'MainController@postAppLook', 'as' => 'postAppLook']);
Route::get('/app-icon', ['uses' => 'MainController@getAppIcon', 'as' => 'appIcon']);
Route::post('/app-icon', ['uses' => 'MainController@postAppIcon', 'as' => 'postAppIcon']);
/*change Routes back from last page*/

Route::get('/change-typeofapp', ['uses' =>'MainController@changeType', 'as' => 'changeType']);
Route::get('/change-people-login', ['uses' => 'MainController@changePeopleLogin', 'as' => 'changePeopleLogin']);
Route::get('/change-create-personal-profiles', ['uses' => 'MainController@changeCreatePro', 'as' => 'changeCreatePro']);
Route::get('/change-make-money', ['uses' => 'MainController@changeMakeMoney', 'as' => 'changeMakeMoney']);
Route::get('/change-rate-review', ['uses' => 'MainController@changeRateReview','as'=> 'changeRateReview']);
Route::get('/change-connect-to-website',['uses' => 'MainController@chnageConnectToWebsite', 'as' => 'chnageConnectToWebsite']);
Route::get('/change-app-look', ['uses' => 'MainController@changeAppLook', 'as' =>'changeAppLook']);
Route::get('/change-app-icon', ['uses' => 'MainController@changeAppIcon', 'as' => 'changeAppIcon']);

//route group custom middleware
Route::group(['middleware' => ['Summary']], function () {

	Route::get('/summary', ['uses' => 'MainController@getSummery', 'as'=> 'summary']);
    Route::post('/summary', ['uses' => 'MainController@postLastPageType', 'as' => 'postLastPageType']);
	Route::post('/summary1', ['uses' => 'MainController@postLastPagePeopleLogin' , 'as' => 'postLastPagePeopleLogin']);
	Route::post('/summary2', ['uses' => 'MainController@postLastPagePersonalProfiles', 'as' => 'postLastPagePersonalProfiles']);
	Route::post('/summary3', ['uses' => 'MainController@postLastPageMakeMoney', 'as' => 'postLastPageMakeMoney']);
	Route::post('/summary4', ['uses' => 'MainController@postLastPageRateReview', 'as' => 'postLastPageRateReview']);
	Route::post('/summary5', ['uses' => 'MainController@postLastPageConnectToWebiste', 'as' => 'postLastPageConnectToWebiste']);
	Route::post('/summary6', ['uses' => 'MainController@postLastPageAppLook', 'as' => 'postLastPageAppLook']);
	Route::post('/summary7', ['uses' => 'MainController@postLastPageAppIcon' , 'as' => 'postLastPageAppIcon']);
});
