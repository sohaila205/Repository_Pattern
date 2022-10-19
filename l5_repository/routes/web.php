<?php

use Illuminate\Support\Facades\Route;
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
   //user
   Route::get('/user/index', ['as' => 'user.index', 'uses' => 'UserController@index']);
   Route::get('/user/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
   Route::post('/user/store', ['as' => 'user.store', 'uses' => 'UserController@store']);
   Route::get('/user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
   Route::post('/user/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);
   Route::get('/user/delete/{id}', ['as' => 'user.delete', 'uses' => 'UserController@delete']);

   //api
  // Route::get('getUsers', ['as' => 'user.index', 'uses' => 'API\UserControllerApi@getAllUsers']);
