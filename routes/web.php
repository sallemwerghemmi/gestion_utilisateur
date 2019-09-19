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

Route::get('/', 'HomeController@index')->name('index');

Route::get('/addgroupe', 'HomeController@addgroupe')->name('addgroupe');

Route::post('pages/addgroupe','HomeController@postGroupe')->name('postGroupe');

Route::get('/adduser', 'HomeController@adduser')->name('adduser');

Route::post('pages/adduser','HomeController@postUser')->name('postUser');

Route::get('/deleteuser/{id}','HomeController@deleteUser')->name('deleteUser');

Route::get('/edituser/{id}','HomeController@showUser')->name('showUser');

Route::post('pages/edituser/{id}','HomeController@editUser')->name('editUser');