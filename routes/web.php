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

Route::get('/home', 'HomeController@index');

Route::resource('client', 'ClientController');

Route::get('/clientUnit/create/{client}', 'ClientUnitController@create');
Route::post('/clientUnit', 'ClientUnitController@store');
Route::get('clientUnit/edit/{client}/{clientUnit}', 'ClientUnitController@edit');
Route::patch('clientUnit/{client}/{clientUnit}', 'ClientUnitController@update');
Route::delete('clientUnit/{client}/{clientUnit}', 'ClientUnitController@destroy');