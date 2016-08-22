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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[
	'as'=>'home',
	'uses'=>'formController@index'
	]);

Route::get('thankyou',[
	'as'=>'thankyou',
	'uses'=>'formController@thankYou'
	]);

Route::post('store',[
	'as'=>'store',
	'uses'=>'formController@store'
	]);