<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Route::get('about','aboutcontroller@about');
//Route::post('/{username}','logincontroller@index');

Route::group(['middleware' => ['web']], function () {

	 Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login']);
  	 Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
     Route::get('/home',['middleware' => 'auth','as' => 'home', 'uses' => 'UsersController@home']);
     Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
     Route::resource('users','UsersController',['only' =>['create','store']]);

});

 


