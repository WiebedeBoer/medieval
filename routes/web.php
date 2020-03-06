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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//manual
Route::get('manual', 'ManualController@index');
//forum
Route::get('forum', 'ForumController@index');
//users
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::get('users/{user}/edit', 'UserController@edit');
Route::patch('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@destroy');

//persons
Route::get('persons', 'PersonController@index');
Route::get('persons/create','PersonController@create');
Route::post('persons','PersonController@store');
Route::get('persons/{person}', 'PersonController@show');
Route::get('persons/{person}/edit', 'PersonController@edit');
Route::delete('persons/{person}', 'PersonController@destroy');
Route::patch('persons/{person}', 'PersonController@update');

//costs
Route::get('costs', 'CostController@index');
Route::get('costs/{costs}', 'CostController@show');
Route::delete('costs/{costs}', 'CostController@destroy');
Route::get('costs/export','CostController@export');

//region
Route::get('region', 'RegionController@index');
Route::get('region/region','RegionController@create');
Route::post('region','RegionController@store');
Route::get('region/{region}', 'RegionController@show');
Route::get('region/{region}/edit', 'RegionController@edit');
Route::delete('region/{region}', 'RegionController@destroy');
Route::patch('region/{region}', 'RegionController@update');
