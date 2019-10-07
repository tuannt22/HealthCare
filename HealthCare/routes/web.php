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

Route::get('/', function () {
    return view('welcome');
});

//Database
Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix'=>'admin'], function(){
		Route::get('/', 'DashboardController@index');
		Route::get('services','DashboardController@services');
	});
});

Route::get('abc',function(){
	echo 'asfjhdsjkfhkdsfh';
});
