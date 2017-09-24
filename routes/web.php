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


Route::get('/', 'TaskController@task');


Route::get('/taskcreate', 'TaskController@index');


Route::get('/login', 'SessionsController@index')->name('login');

Route::post('/login', 'SessionsController@create');

Route::post('/logout','SessionsController@destroy');

Route::post('/create','TaskController@create');

Route::get('/task/{id}','TaskController@show');

Route::post('/task/addComment/{id}','ComController@create');

Route::get('/register','RegistrationController@index');

Route::post('/signup','RegistrationController@create');



