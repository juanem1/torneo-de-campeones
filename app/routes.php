<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('as' => 'home', 'uses' => 'PageController@home'));
Route::get('torneo', array('as' => 'torneo', 'uses' => 'PageController@torneo'));
Route::get('contacto', array('as' => 'contacto', 'uses' => 'PageController@contacto'));