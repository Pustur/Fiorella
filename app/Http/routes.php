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

Route::get('/', ['as' => 'home', function(){
    return 'This is the home page'; // Temp
}]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return 'This is the ADMIN page'; // Temp
    });
    Route::resource('works', 'WorksController');
});

// Authentication routes...
Route::group(['prefix' => 'auth'], function(){
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');
});
