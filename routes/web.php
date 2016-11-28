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

//Route::resource('clientUnit', 'ClientUnitController');

Route::get('/clientUnit/create/{client}', 'ClientUnitController@create');
Route::post('/clientUnit', 'ClientUnitController@store');