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

Route::prefix('home')->group(function () {
  Route::get('read', 'UserController@index');
  Route::get('edit', 'UserController@edit');
  Route::post('update', 'UserController@update');
});
// end user

// multiuser
Route::post('postlogin', 'AuthController@postlogin');
Route::group(['middleware' => ['auth','Admin:surveyor,petani,investor,sdm']], function(){
  Route::get('home','AuthController@role');
});
// end multiuser

// create bio
Route::prefix('home/bio')->group(function () {
  Route::post('photo', 'UserController@uploadphoto');
  Route::post('bioup', 'UserController@store');
});
// end create bio

// Product
Route::prefix('home/product')->group(function () {
  Route::get('', 'ProductController@index');
  Route::get('create', 'ProductController@create')->name('buatrencanaproyek');
  Route::post('create', 'ProductController@store');
  Route::get('proyeksaya', 'ProductController@proyeksaya')->name('proyeksaya');
  Route::get('proyeksaya/{pengajuanpetani}', 'ProductController@proyeksayadetail')->name('proyeksayadetail');
});
// end Product

// Petani
Route::group(['middleware' => ['auth','Admin:petani']], function(){

});
// end Petani

// Surveyor
Route::prefix('home')->group(function () {
  Route::get('datarencana', 'ProductController@rencanaproyek')->name('rencanaproyek');
  Route::get('datarencana/{pengajuanpetani}', 'ProductController@detailproyek')->name('detailproyek');
  Route::get('datarencana/biayaoperasional/{pengajuanpetani}', 'ProductController@biayaoperasional')->name('biayaoperasional');
  Route::patch('datarencana/biayaoperasional/{pengajuanpetani}', 'ProductController@upbiayaoperasional');

  Route::get('listpetani', 'UserController@listpetani')->name('listpetani');
  Route::get('detailpetani/{user}', 'UserController@detailpetani')->name('detailpetani');
});
// End Surveyor
