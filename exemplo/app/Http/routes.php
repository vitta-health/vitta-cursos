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

Route::resource('/autores', 'AutoresController');

// Route::get('/autores', 			'AutoresController@index');
// Route::get('/autores/{id}', 	'AutoresController@show');
// Route::get('/autores/create',	'AutoresController@create');