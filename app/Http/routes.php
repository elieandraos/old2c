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


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
   Route::get('/dashboard', ['as' => 'admin.dashboard.index', 'uses' => 'Admin\DashboardController@index']);
   Route::get('/players', ['as' => 'admin.players.index', 'uses' => 'Admin\PlayerController@index']);
});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
