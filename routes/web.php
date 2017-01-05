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
//Registers all routes for the ClientController
Route::resource('client', 'ClientController');
//Registers all routes for the JobController
Route::resource('job', 'JobController');
//Registers all routes for the ClientUnitsController
Route::resource('clientUnit', 'ClientUnitController');
//Registers all route for the JobUnitController
Route::resource('jobUnits', 'JobUnitController');
//Registers all route for the JobUnitController
Route::resource('jobBeakers', 'JobBeakersController');
//Registers all route for the JobUnitController
Route::resource('beakers', 'BeakersController');
