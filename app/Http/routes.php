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

Route::get('/', array('uses' => 'HomeController@index', 'as' => 'message.index'));
Route::post('/post', array('uses' => 'HomeController@store', 'as' => 'message.store'));
Route::delete('/{id}', array('uses' => 'HomeController@destroy', 'as' => 'message.destroy'));
