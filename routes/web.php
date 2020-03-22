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
Route::get('manual/stats', 'ManualController@stats');
Route::get('manual/skills', 'ManualController@skills');
Route::get('manual/development', 'ManualController@development');
Route::get('manual/economy', 'ManualController@economy');
//forum main
Route::get('forum', 'ForumController@index');
//forum thread
Route::get('forum/create','ForumController@create');
Route::post('forum','ForumController@store');
Route::get('forum/thread/{thread}', 'ForumController@thread');
Route::delete('forum/{thread}', 'ForumController@destroy');
//forum post
Route::get('forum/{forum}/edit', 'ForumController@edit');
Route::patch('forum/{forum}', 'ForumController@update');
//subforum
Route::get('forum/open','ForumController@open');
Route::get('forum/tavern','ForumController@tavern');
Route::get('forum/intro','ForumController@intro');
Route::get('forum/kingdom','ForumController@kingdom');
Route::get('forum/region','ForumController@region');
Route::get('forum/war','ForumController@war');
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
//region
Route::get('religion', 'ReligionController@index');
Route::get('religion/{religion}', 'ReligionController@show');
//maps
Route::get('map/cattle','MapController@cattle');
Route::get('map/goat','MapController@goat');
Route::get('map/herb','MapController@herb');
Route::get('map/ride','MapController@ride');
Route::get('map/sheep','MapController@sheep');
Route::get('map/style','MapController@style');
Route::get('map/literature','MapController@literature');
//region
Route::get('region', 'RegionController@index');
Route::get('region/{region}', 'RegionController@show');
Route::get('region/{region}/edit', 'RegionController@edit');
Route::patch('region/{region}', 'RegionController@update');
//culture
Route::get('culture', 'CultureController@index');
Route::get('culture/{culture}', 'CultureController@show');
Route::get('culture/{culture}/edit', 'CultureController@edit');
Route::patch('culture/{culture}', 'CultureController@update');
//place
Route::get('place', 'PlaceController@index');
Route::get('place/{place}', 'PlaceController@show');
Route::get('place/{place}/edit', 'PlaceController@edit');
Route::patch('place/{place}', 'PlaceController@update');