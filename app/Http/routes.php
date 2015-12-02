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

// refers to the URL /welcome
Route::get('welcome', function () {
    return view('welcome');
});

// refers to the URL /database-test
Route::get('database-test', function() {
	if ( DB::connection()->getDatabaseName() ) 
	{
		echo 'Connected successfully to database ' . DB::connection()->getDatabaseName();
	}
});

Route::get('movies', 'MovieController@index');




