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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

// Authentication
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

// Rutas que puedes ser accesadas si el usuario esta logueado
Route::group(['before' => 'auth'], function() {

    Route::get('obra', ['as' => 'obra.index', 'uses' => 'ObraController@index']);
    Route::get('obra/select/{db}/{id_obra}', ['as' => 'obra.select', 'uses' => 'ObraController@selectObra']);

    // Estas rutas pueden ser accesadas si antes ya se selecciono una obra
    Route::group(['before' => 'is_obra_selected'], function() {

        Route::get('obra/{conn}/{id}', ['as' => 'obra.show', 'uses' => 'ObraController@show']);
    });
});