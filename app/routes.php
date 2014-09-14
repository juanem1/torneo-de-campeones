<?php

/*['only' => ['index', 'show']]*/
Route::resource('homeslider', 'HomesliderController');

// Novedades
Route::resource('news', 'NewsController');
Route::get('{provincia}/novedades/{slug}', array('uses' => 'NewsController@showBySlug'));

Route::get('/', array('as' => 'home', 'uses' => 'PageController@home'));
Route::get('torneo', array('as' => 'torneo', 'uses' => 'PageController@torneo'));
Route::get('fixture', array('as' => 'fixture', 'uses' => 'PageController@fixture'));
Route::get('tabla', array('as' => 'tabla', 'uses' => 'PageController@tabla'));
Route::get('galeria', array('as' => 'galeria', 'uses' => 'PageController@galeria'));
// COntacto por provincia
Route::get('{provincia}/contacto', array('as' => 'contacto', 'uses' => 'PageController@contacto'));

// Provincias
Route::get('buenos-aires', array('uses' => 'ProvinciaController@buenosAires'));
Route::get('tucuman', array('uses' => 'ProvinciaController@tucuman'));
Route::get('cordoba', array('uses' => 'ProvinciaController@cordoba'));
Route::get('catamarca', array('uses' => 'ProvinciaController@catamarca'));
Route::get('santiago', array('uses' => 'ProvinciaController@santiago'));
Route::get('jujuy', array('uses' => 'ProvinciaController@jujuy'));
Route::get('el-nacional', array('uses' => 'ProvinciaController@elNacional'));
Route::get('santa-fe', array('uses' => 'ProvinciaController@santaFe'));

// Login
Route::get('login', array('as' => 'login', 'uses' => 'AccountController@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AccountController@logout'));
Route::post('authenticate', array('uses' => 'AccountController@authenticate'));

// Rutas solo para admins
Route::group(array('before' => 'auth'), function() {
	// Dashboard
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
});
