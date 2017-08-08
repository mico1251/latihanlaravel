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

//public/ -> muncul hello
/*Route::get('/', function () {
    return view('welcome');
	//return 'hello';
});*/
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

Route::group(['middleware'=>['web']],function() {
	Route::get('login/facebook','Auth\AuthController@redirectToFacebook');
	Route::get('login/facebook/callback','Auth\AuthController@getFacebookCallback');
});

//public/hello -> muncul tes di browser
Route::get('hello',function() {
	return 'tes';
});

//public/motor/mabur -> jenis motor : mabur
Route::get('motor/{jenis}',function($jenis) {
	return 'jenis motor : '.$jenis;
});

//public/book -> ke controlloer -> index -> muncul ini index
Route::get('buku','BookController@index');

Route::get('book/{judul}','BookController@viewJudul');

Route::get('bladeTest','HomeController@index');
