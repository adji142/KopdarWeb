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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
// Route::get('/', 'welcome@index');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('auth.social');
// Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Auth::routes();
Route::get('/', 'welcome@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/{social}','Auth\LoginController@SocialLogin');
			//->where('social','facebook|google|twitter');
Route::get('/login/{social}/callback','Auth\LoginController@hadleProviderCallback');
			//->where('social','facebook|google|twitter');