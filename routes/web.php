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
//home main
Route::get('/', function () {
    return view('welcome');
});
//routes
Auth::routes();
//home
Route::get('/home', 'HomeController@index')->name('home');
//manual
Route::get('manual', 'ManualController@index');
Route::get('manual/feudalism', 'ManualController@feudalism');
Route::get('manual/heraldry', 'ManualController@heraldry');
Route::get('manual/chivalry', 'ManualController@chivalry');
Route::get('manual/manorialism', 'ManualController@manorialism');
Route::get('manual/monasticism', 'ManualController@monasticism');
Route::get('manual/scholasticism', 'ManualController@scholasticism');
Route::get('manual/commerce', 'ManualController@commerce');
Route::get('manual/military', 'ManualController@military');
Route::get('manual/farming', 'ManualController@farming');
Route::get('manual/construction', 'ManualController@construction');
Route::get('manual/culture', 'ManualController@culture');
Route::get('manual/church', 'ManualController@church');
//forum
Route::get('forum', 'ForumController@index');
//news
Route::get('news', 'NewsController@index');
Route::get('rules', 'NewsController@rules');
Route::get('terms', 'NewsController@terms');
Route::get('privacy', 'NewsController@privacy');
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
//dynasty
Route::get('dynasty', 'DynastyController@index');
Route::get('dynasty/create','DynastyController@create');
Route::post('dynasty','DynastyController@store');
Route::get('dynasty/{dynasty}', 'DynastyController@show');
Route::get('dynasty/{dynasty}/edit', 'DynastyController@edit');
Route::delete('dynasty/{dynasty}', 'DynastyController@destroy');
Route::patch('dynasty/{dynasty}', 'DynastyController@update');
//costs
Route::get('costs', 'CostController@index');
Route::get('costs/{costs}', 'CostController@show');
Route::delete('costs/{costs}', 'CostController@destroy');
Route::get('costs/export','CostController@export');
//region
Route::get('region', 'RegionController@index');
Route::get('region/{region}', 'RegionController@show');
Route::get('region/{region}/edit', 'RegionController@edit');
Route::patch('region/{region}', 'RegionController@update');