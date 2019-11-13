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

Route::get('texto',['as'=>'texto','uses'=>'TextoController@index']);
Route::get('texto/edit/{id}', array('as' => 'texto.edit', 'uses' =>'TextoController@edit'));
Route::put('texto/update/{id}', array('as' => 'texto.update', 'uses' =>'TextoController@update'));
Route::post('texto/create', array('as' => 'texto.create', 'uses' =>'TextoController@create'));
Route::post('texto/store', array('as' => 'texto.store', 'uses' =>'v@store'));
Route::get('texto/destroy/{id}', ['as' => 'texto/destroy', 'uses'=>'TextoController@destroy']);
