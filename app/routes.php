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
Route::get('fixture', array('as' => 'fixture', 'uses' => 'PageController@fixture'));
Route::get('tabla', array('as' => 'tabla', 'uses' => 'PageController@tabla'));
Route::get('galeria', array('as' => 'galeria', 'uses' => 'PageController@galeria'));
Route::get('contacto', array('as' => 'contacto', 'uses' => 'PageController@contacto'));

// Provincias
Route::get('buenos-aires', array('uses' => 'ProvinciaController@buenosAires'));
Route::get('tucuman', array('uses' => 'ProvinciaController@tucuman'));
Route::get('cordoba', array('uses' => 'ProvinciaController@cordoba'));
Route::get('catamarca', array('uses' => 'ProvinciaController@catamarca'));
Route::get('santiago', array('uses' => 'ProvinciaController@santiago'));
Route::get('jujuy', array('uses' => 'ProvinciaController@jujuy'));
Route::get('el-nacional', array('uses' => 'ProvinciaController@elNacional'));
Route::get('santa-fe', array('uses' => 'ProvinciaController@santaFe'));

/*Route::pattern('provincia', '(buenos-aires|tucuman|cordoba|catamarca|santiago|jujuy|el-nacional)');
Route::pattern('seccion', '(equipos|fixture|posiciones)');

Route::get('{provincia}', array('uses' => 'ProvinciaController@callProvincia'));
Route::get('{provincia}/premier-league/{seccion}', array('uses' => 'ProvinciaController@callProvincia'));
Route::get('{provincia}/serie-b/{seccion}', array('uses' => 'ProvinciaController@callProvincia'));
Route::get('{provincia}/serie-c/{seccion}', array('uses' => 'ProvinciaController@callProvincia'));

// Login
Route::get('login', array('as' => 'login', 'uses' => 'AccountController@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AccountController@logout'));
Route::post('authenticate', array('uses' => 'AccountController@authenticate'));

// Rutas solo para admins
Route::group(array('before' => 'auth'), function() {
	// Dashboard
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
});*/