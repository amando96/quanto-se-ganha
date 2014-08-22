<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('/procurar', 'SearchController@showResults');

Route::get('/s/{by}/{param}', 'SearchController@getResults');

Route::get('/submeter', function()
{
	return View::make('pages.submit');
});

Route::get('/privacidade', function()
{
	return View::make('pages.privacy');
});
