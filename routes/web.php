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
//tutorials
Route::get('tutorial/dynasty', 'TutorialController@dynasty');
Route::get('tutorial/character', 'TutorialController@character');
Route::get('tutorial/estate', 'TutorialController@estate');
//chronicles
Route::get('chronicles', 'ChronicleController@index');
Route::get('chronicles/charts', 'ChronicleController@charts');
Route::get('chronicles/gold', 'ChronicleController@gold');
Route::get('chronicles/renown', 'ChronicleController@renown');
Route::get('chronicles/piety', 'ChronicleController@piety');
Route::get('chronicles/population', 'ChronicleController@population');
Route::get('chronicles/agriculture', 'ChronicleController@agriculture');
Route::get('chronicles/commerce', 'ChronicleController@commerce');
Route::get('chronicles/defense', 'ChronicleController@defense');
//gameplay socials and hierearchy
//religion
Route::get('religion', 'ReligionController@index');
Route::get('religion/{religion}', 'ReligionController@show');	
//dynasty
Route::get('dynasty', 'DynastyController@index');
Route::get('dynasty/create','DynastyController@create');
Route::post('dynasty','DynastyController@store');
Route::get('dynasty/{dynasty}', 'DynastyController@show');
Route::get('dynasty/{dynasty}/edit', 'DynastyController@edit');
Route::delete('dynasty/{dynasty}', 'DynastyController@destroy');
Route::patch('dynasty/{dynasty}', 'DynastyController@update');
//culture
Route::get('culture', 'CultureController@index');
Route::get('culture/{culture}', 'CultureController@show');
Route::get('culture/{culture}/edit', 'CultureController@edit');
Route::patch('culture/{culture}', 'CultureController@update');
//realms
Route::get('realms', 'RealmController@index');
Route::get('realms/{realms}', 'RealmController@show');
Route::get('realms/{realms}/edit', 'RealmController@edit');
Route::patch('realms/{realms}', 'RealmController@update');
//guilds
Route::get('guilds', 'GuildController@index');
Route::get('guilds/{guilds}', 'GuildController@show');
Route::get('guilds/{guilds}/edit', 'GuildController@edit');
Route::patch('guilds/{guilds}', 'GuildController@update');
Route::post('guilds/create','GuildController@create');
Route::post('guilds','GuildController@store');
//titles and succession
Route::get('succession', 'SuccessionController@index');
Route::get('succession/create','SuccessionController@create');
Route::post('succession','SuccessionController@store');
Route::get('succession/{succession}', 'SuccessionController@show');
Route::get('succession/{succession}/edit', 'SuccessionController@edit');
Route::delete('succession/{succession}', 'SuccessionController@destroy');
Route::patch('succession/{succession}', 'SuccessionController@update');
//citizens
Route::get('citizens', 'CitizenController@index');
Route::get('citizens/create','CitizenController@create');
Route::post('citizens','CitizenController@store');
Route::get('citizens/{citizens}', 'CitizenController@show');
Route::get('citizens/{citizens}/edit', 'CitizenController@edit');
Route::delete('citizens/{citizens}', 'CitizenController@destroy');
Route::patch('citizens/{citizens}', 'CitizenController@update');
//guild members
Route::get('members', 'MemberController@index');
Route::get('members/create','MemberController@create');
Route::post('members','MemberController@store');
Route::get('members/{members}', 'MemberController@show');
Route::get('members/{members}/edit', 'MemberController@edit');
Route::delete('members/{members}', 'MemberController@destroy');
Route::patch('members/{members}', 'MemberController@update');
//spouses

//parents

//gameplay characters
//persons
Route::get('persons', 'PersonController@index');
Route::get('persons/create','PersonController@create');
Route::post('persons','PersonController@store');
Route::get('persons/{person}', 'PersonController@show');
Route::get('persons/{person}/edit', 'PersonController@edit');
Route::delete('persons/{person}', 'PersonController@destroy');
Route::patch('persons/{person}', 'PersonController@update');
//portraits
Route::get('portraits/create','PortraitController@create');
Route::post('portraits/create','PortraitController@store');
//skills

//equipment


//forum
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
Route::get('forum/guild','ForumController@guild');
Route::get('forum/region','ForumController@region');
Route::get('forum/war','ForumController@war');

//military
//armies
Route::get('armies', 'ArmyController@index');
Route::get('armies/{armies}', 'ArmyController@show');
Route::get('armies/{armies}/edit', 'ArmyController@edit');
Route::patch('armies/{armies}', 'ArmyController@update');
Route::post('armies/create','ArmyController@create');
Route::post('armies','ArmyController@store');
Route::delete('armies/{armies}', 'ArmyController@destroy');
//brigades
Route::get('brigades', 'BrigadeController@index');
Route::get('brigades/{brigades}', 'BrigadeController@show');
Route::get('brigades/{brigades}/edit', 'BrigadeController@edit');
Route::patch('brigades/{brigades}', 'BrigadeController@update');
Route::post('brigades/create','BrigadeController@create');
Route::post('brigades','BrigadeController@store');
Route::delete('brigades/{brigades}', 'BrigadeController@destroy');
//economy and trade
//caravans
Route::get('caravans', 'CaravanController@index');
Route::get('caravans/{caravans}', 'CaravanController@show');
Route::get('caravans/{caravans}/edit', 'CaravanController@edit');
Route::patch('caravans/{caravans}', 'CaravanController@update');
Route::post('caravans/create','CaravanController@create');
Route::post('caravans','CaravanController@store');
Route::delete('caravans/{caravans}', 'CaravanController@destroy');
//fleets
Route::get('fleets', 'FleetController@index');
Route::get('fleets/{fleets}', 'FleetController@show');
Route::get('fleets/{fleets}/edit', 'FleetController@edit');
Route::patch('fleets/{fleets}', 'FleetController@update');
Route::post('fleets/create','FleetController@create');
Route::post('fleets','FleetController@store');
Route::delete('fleets/{fleets}', 'FleetController@destroy');
//cargo

//produces

//construction materials

//ores

//products

//goods

//shops
Route::get('shops', 'MarketController@index');
Route::get('shops/{shops}', 'MarketController@show');
Route::get('shops/{shops}/edit', 'MarketController@edit');
Route::patch('shops/{shops}', 'MarketController@update');
Route::post('shops/create','MarketController@create');
Route::post('shops','MarketController@store');
Route::delete('shops/{shops}', 'MarketController@destroy');
//geography and locations
//maps
Route::get('map/climate','MapController@climate');
Route::get('map/cattle','MapController@cattle');
Route::get('map/goat','MapController@goat');
Route::get('map/herb','MapController@herb');
Route::get('map/ride','MapController@ride');
Route::get('map/sheep','MapController@sheep');
Route::get('map/style','MapController@style');
Route::get('map/literature','MapController@literature');
Route::get('map/universities','MapController@universities');
Route::get('map/defenses','MapController@defenses');
Route::get('map/commerce','MapController@commerce');
Route::get('map/justice','MapController@justice');
Route::get('map/agriculture','MapController@agriculture');
Route::get('map/tin','MapController@tin');
Route::get('map/iron','MapController@iron');
Route::get('map/lead','MapController@lead');
Route::get('map/gold','MapController@gold');
Route::get('map/gems','MapController@gems');
Route::get('map/salt','MapController@salt');
Route::get('map/population','MapController@population');
Route::get('map/realm','MapController@realm');
Route::get('map/arms','MapController@arms');
Route::get('map/trade','MapController@trade');
Route::get('map/fish','MapController@fish');
Route::get('map/wine','MapController@wine');
Route::get('map/dyes','MapController@dyes');
Route::get('map/textiles','MapController@textiles');
Route::get('map/books','MapController@books');
Route::get('map/sweeteners','MapController@sweeteners');
//region
Route::get('region', 'RegionController@index');
Route::get('region/{region}', 'RegionController@show');
Route::get('region/{region}/edit', 'RegionController@edit');
Route::patch('region/{region}', 'RegionController@update');
//farmsteads
Route::get('farmsteads', 'FarmsteadController@index');
Route::get('farmsteads/{farmsteads}', 'FarmsteadController@show');
Route::get('farmsteads/{farmsteads}/edit', 'FarmsteadController@edit');
Route::patch('farmsteads/{farmsteads}', 'FarmsteadController@update');
Route::post('farmsteads/create','FarmsteadController@create');
Route::post('farmsteads','FarmsteadController@store');
Route::delete('farmsteads/{farmsteads}', 'FarmsteadController@destroy');
//estates
Route::get('estates/create','EstateController@create');
Route::post('estates/create','EstateController@store');
//place
Route::get('place', 'PlaceController@index');
Route::get('place/{place}', 'PlaceController@show');
Route::get('place/{place}/edit', 'PlaceController@edit');
Route::patch('place/{place}', 'PlaceController@update');
Route::get('place/{place}/build', 'PlaceController@build');
//quarters
Route::get('quarters', 'QuarterController@index');
Route::get('quarters/{quarters}', 'QuarterController@show');
Route::get('quarters/{quarters}/edit', 'QuarterController@edit');
Route::patch('quarters/{quarters}', 'QuarterController@update');
Route::post('quarters/create','QuarterController@create');
Route::post('quarters','QuarterController@store');
//buildings
Route::get('buildings', 'BuildingController@index');
Route::get('buildings/{buildings}', 'BuildingController@show');
Route::get('buildings/{buildings}/edit', 'BuildingController@edit');
Route::patch('buildings/{buildings}', 'BuildingController@update');
Route::post('buildings/create','BuildingController@create');
Route::post('buildings','BuildingController@store');
Route::delete('buildings/{buildings}', 'BuildingController@destroy');
//rooms
Route::get('rooms', 'RoomController@index');
Route::get('rooms/{rooms}', 'RoomController@show');
Route::get('rooms/{rooms}/edit', 'RoomController@edit');
Route::patch('rooms/{rooms}', 'RoomController@update');
Route::post('rooms/create','RoomController@create');
Route::post('rooms','RoomController@store');
Route::delete('rooms/{rooms}', 'RoomController@destroy');
//furnishings

//dungeons
Route::get('dungeons', 'DungeonController@index');
Route::get('dungeons/{dungeons}', 'DungeonController@show');
Route::get('dungeons/{dungeons}/edit', 'DungeonController@edit');
Route::patch('dungeons/{dungeons}', 'DungeonController@update');
Route::post('dungeons/create','DungeonController@create');
Route::delete('dungeons/{dungeons}', 'DungeonController@destroy');
Route::post('dungeons','DungeonController@store');
//prisoners
Route::get('prisoners', 'PrisonerController@index');
Route::get('prisoners/{prisoners}', 'PrisonerController@show');
Route::get('prisoners/{prisoners}/edit', 'PrisonerController@edit');
Route::patch('prisoners/{prisoners}', 'PrisonerController@update');
Route::post('prisoners/create','PrisonerController@create');
Route::delete('prisoners/{prisoners}', 'PrisonerController@destroy');
Route::post('prisoners','PrisonerController@store');
