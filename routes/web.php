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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');

// User
Route::get('daftar', 'UserController@daftar');
Route::get('home/bio', 'UserController@bio');
// end user

// multiuser
Route::post('postlogin', 'AuthController@postlogin');
Route::group(['middleware' => ['auth','Admin:admin,user']], function(){
Route::get('home','AuthController@role');
});
// end multiuser

// createbio
Route::post('home/bio/photo', 'UserController@uploadphoto');
Route::post('home/bio/bioup', 'UserController@store');
// end createbio
