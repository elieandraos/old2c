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
   //players route
   Route::get('/players', ['as' => 'admin.players.index', 'uses' => 'Admin\PlayerController@index']);
   //teams routes
   Route::get('/teams/', ['as' => 'admin.teams.index', 'uses' => 'Admin\TeamController@index']);
   Route::get('/teams/create', ['as' => 'admin.teams.create', 'uses' => 'Admin\TeamController@create']);
   Route::get('/teams/{id}/edit', ['as' => 'admin.teams.edit', 'uses' => 'Admin\TeamController@edit']);
   Route::post('/teams/store', ['as' => 'admin.teams.store', 'uses' => 'Admin\TeamController@store']);
   Route::post('/teams/{id}/update', ['as' => 'admin.teams.update', 'uses' => 'Admin\TeamController@update']);
   Route::get('/teams/{id}/players', ['as' => 'admin.teams.players', 'uses' => 'Admin\TeamController@players']);
});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
