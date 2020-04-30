<?php

use Illuminate\Database\Seeder;

class GuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//default guilds
		//guild 1 wanderers
		DB::table('guilds')->insert([
			'guild_name' => 'Wanderers',
			'guild_category' => 'wanderers',
			'place' => '497',
			'realm' => '1',
			'master' => '1'
		]);	
		//chivalric guilds
		//guild 2, england, windsor
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Garter',
			'guild_category' => 'chivalric_order',
			'place' => '186',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 3, france, paris
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Star',
			'guild_category' => 'chivalric_order',
			'place' => '113',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 4, hungary, esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Order Saint George',
			'guild_category' => 'chivalric_order',
			'place' => '685',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 5, holy roman empire, bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Golden Fleece',
			'guild_category' => 'chivalric_order',
			'place' => '97',
			'realm' => '3',
			'master' => '1'
		]);	
		//crusader guilds
		//guild 6, teutonic knights
		DB::table('guilds')->insert([
			'guild_name' => 'Teutonic Knights',
			'guild_category' => 'crusader_order',
			'place' => '277',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 7, knights hospitaller
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Hospitaller',
			'guild_category' => 'crusader_order',
			'place' => '993',
			'realm' => '6',
			'master' => '1'
		]);	
		//guild 8, knights templar
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Templar',
			'guild_category' => 'crusader_order',
			'place' => '993',
			'realm' => '7',
			'master' => '1'
		]);	
		//catholic monastic guilds
		//guild 9
		DB::table('guilds')->insert([
			'guild_name' => 'Augustinian Order',
			'guild_category' => 'monastic_order',
			'place' => '497',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 10
		DB::table('guilds')->insert([
			'guild_name' => 'Benedictine Order',
			'guild_category' => 'monastic_order',
			'place' => '500',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 11
		DB::table('guilds')->insert([
			'guild_name' => 'Carmelite Order',
			'guild_category' => 'monastic_order',
			'place' => '192',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 12
		DB::table('guilds')->insert([
			'guild_name' => 'Cistercian Order',
			'guild_category' => 'monastic_order',
			'place' => '132',
			'realm' => '9',
			'master' => '1'
		]);	
		//guild 13
		DB::table('guilds')->insert([
			'guild_name' => 'Franciscan Order',
			'guild_category' => 'monastic_order',
			'place' => '496',
			'realm' => '2',
			'master' => '1'
		]);	
		//greek orthodox monastic
		//guild 14
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '825',
			'realm' => '4',
			'master' => '1'
		]);		
		//serbian orthodox monastic
		//guild 15
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '736',
			'realm' => '84',
			'master' => '1'
		]);			
		//russian orthodox monastic
		//guild 16
		DB::table('guilds')->insert([
			'guild_name' => 'Russian Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '749',
			'realm' => '89',
			'master' => '1'
		]);			
		//islamic sufi
		//guild 17
		DB::table('guilds')->insert([
			'guild_name' => 'Sufi Order',
			'guild_category' => 'monastic_order',
			'place' => '988',
			'realm' => '48',
			'master' => '1'
		]);	
		//pilgrims
		//guild 18
		DB::table('guilds')->insert([
			'guild_name' => 'Catholic Pilgrims',
			'guild_category' => 'pilgrims',
			'place' => '497',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 19
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox Pilgrims',
			'guild_category' => 'pilgrims',
			'place' => '825',
			'realm' => '4',
			'master' => '1'
		]);		
		//guild 20
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox Pilgrims',
			'guild_category' => 'pilgrims',
			'place' => '736',
			'realm' => '84',
			'master' => '1'
		]);			
		//guild 21
		DB::table('guilds')->insert([
			'guild_name' => 'Russian Orthodox Pilgrims',
			'guild_category' => 'pilgrims',
			'place' => '749',
			'realm' => '89',
			'master' => '1'
		]);			
		//guild 22
		DB::table('guilds')->insert([
			'guild_name' => 'Hajj',
			'guild_category' => 'pilgrims',
			'place' => '985',
			'realm' => '48',
			'master' => '1'
		]);
		//trade leagues
		//guild 23
		DB::table('guilds')->insert([
			'guild_name' => 'Hanseatic League',
			'guild_category' => 'trade_league',
			'place' => '15',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 24
		DB::table('guilds')->insert([
			'guild_name' => 'Lorrainian League',
			'guild_category' => 'trade_league',
			'place' => '79',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 25
		DB::table('guilds')->insert([
			'guild_name' => 'Alsatian League',
			'guild_category' => 'trade_league',
			'place' => '59',
			'realm' => '3',
			'master' => '1'
		]);			
		//guild 26
		DB::table('guilds')->insert([
			'guild_name' => 'Swabian League',
			'guild_category' => 'trade_league',
			'place' => '30',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 27
		DB::table('guilds')->insert([
			'guild_name' => 'Lombard League',
			'guild_category' => 'trade_league',
			'place' => '461',
			'realm' => '24',
			'master' => '1'
		]);	
		//guild 28
		DB::table('guilds')->insert([
			'guild_name' => 'Tuscan League',
			'guild_category' => 'trade_league',
			'place' => '489',
			'realm' => '121',
			'master' => '1'
		]);	
		//guild 29
		DB::table('guilds')->insert([
			'guild_name' => 'Rhenish League',
			'guild_category' => 'trade_league',
			'place' => '73',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 30
		DB::table('guilds')->insert([
			'guild_name' => 'Prussian League',
			'guild_category' => 'trade_league',
			'place' => '277',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 31
		DB::table('guilds')->insert([
			'guild_name' => 'Hungarian League',
			'guild_category' => 'trade_league',
			'place' => '685',
			'realm' => '10',
			'master' => '1'
		]);	
		//kontors
		//guild 32
		DB::table('guilds')->insert([
			'guild_name' => 'London Steelyard',
			'guild_category' => 'trade_kontor',
			'place' => '185',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 33
		DB::table('guilds')->insert([
			'guild_name' => 'Bruges',
			'guild_category' => 'trade_kontor',
			'place' => '97',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 34
		DB::table('guilds')->insert([
			'guild_name' => 'Tyskebryggen',
			'guild_category' => 'trade_kontor',
			'place' => '241',
			'realm' => '19',
			'master' => '1'
		]);	
		//guild 35
		DB::table('guilds')->insert([
			'guild_name' => 'Kauen',
			'guild_category' => 'trade_kontor',
			'place' => '663',
			'realm' => '51',
			'master' => '1'
		]);	
		//guild 36
		DB::table('guilds')->insert([
			'guild_name' => 'Novgorod Peterhof',
			'guild_category' => 'trade_kontor',
			'place' => '793',
			'realm' => '123',
			'master' => '1'
		]);	
		//guild 37
		DB::table('guilds')->insert([
			'guild_name' => 'Pleskov',
			'guild_category' => 'trade_kontor',
			'place' => '789',
			'realm' => '95',
			'master' => '1'
		]);	
		//fairs
		//guild 38
		DB::table('guilds')->insert([
			'guild_name' => 'Champagne Fairs',
			'guild_category' => 'trade_fair',
			'place' => '129',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 39
		DB::table('guilds')->insert([
			'guild_name' => 'Toulouse Fair',
			'guild_category' => 'trade_fair',
			'place' => '165',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 40
		DB::table('guilds')->insert([
			'guild_name' => 'Nuremberg Fair',
			'guild_category' => 'trade_fair',
			'place' => '32',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 41
		DB::table('guilds')->insert([
			'guild_name' => 'Genoa Fair',
			'guild_category' => 'trade_fair',
			'place' => '465',
			'realm' => '114',
			'master' => '1'
		]);
		//guild 42
		DB::table('guilds')->insert([
			'guild_name' => 'Venice Fair',
			'guild_category' => 'trade_fair',
			'place' => '469',
			'realm' => '113',
			'master' => '1'
		]);
		//guild 43
		DB::table('guilds')->insert([
			'guild_name' => 'Florence Fair',
			'guild_category' => 'trade_fair',
			'place' => '489',
			'realm' => '121',
			'master' => '1'
		]);
		//guild 44
		DB::table('guilds')->insert([
			'guild_name' => 'Scarborough Fair',
			'guild_category' => 'trade_fair',
			'place' => '207',
			'realm' => '8',
			'master' => '1'
		]);
		//guild 45
		DB::table('guilds')->insert([
			'guild_name' => 'Cologne Fair',
			'guild_category' => 'trade_fair',
			'place' => '73',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 46
		DB::table('guilds')->insert([
			'guild_name' => 'Frankfurt Fair',
			'guild_category' => 'trade_fair',
			'place' => '71',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 47
		DB::table('guilds')->insert([
			'guild_name' => 'Lyon Fair',
			'guild_category' => 'trade_fair',
			'place' => '179',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 48
		DB::table('guilds')->insert([
			'guild_name' => 'Palermo Fair',
			'guild_category' => 'trade_fair',
			'place' => '529',
			'realm' => '27',
			'master' => '1'
		]);
		//guild 49
		DB::table('guilds')->insert([
			'guild_name' => 'Santiago Fair',
			'guild_category' => 'trade_fair',
			'place' => '397',
			'realm' => '34',
			'master' => '1'
		]);
		//guild 50
		DB::table('guilds')->insert([
			'guild_name' => 'Leon Fair',
			'guild_category' => 'trade_fair',
			'place' => '381',
			'realm' => '33',
			'master' => '1'
		]);
		//guild 51
		DB::table('guilds')->insert([
			'guild_name' => 'Pamplona Fair',
			'guild_category' => 'trade_fair',
			'place' => '345',
			'realm' => '30',
			'master' => '1'
		]);
		//merchants guilds
		//low countries guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '86',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '85',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '97',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '98',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '100',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '99',
			'realm' => '3',
			'master' => '1'
		]);
		//english guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '185',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '207',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '201',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '221',
			'realm' => '8',
			'master' => '1'
		]);
		//german guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '73',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Bookbinders Guild',
			'guild_category' => 'merchant_guild',
			'place' => '32',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Salters Guild',
			'guild_category' => 'merchant_guild',
			'place' => '3',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '14',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '15',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '37',
			'realm' => '3',
			'master' => '1'
		]);
		//lombard guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '469',
			'realm' => '113',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '457',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '464',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '465',
			'realm' => '114',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '462',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '461',
			'realm' => '24',
			'master' => '1'
		]);
		//tuscan guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '501',
			'realm' => '117',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '503',
			'realm' => '122',
			'master' => '1'
		]);
		//croatia guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '669',
			'realm' => '118',
			'master' => '1'
		]);
		//south italian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '532',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '529',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '507',
			'realm' => '119',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '506',
			'realm' => '116',
			'master' => '1'
		]);
		//polish
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '645',
			'realm' => '29',
			'master' => '1'
		]);
		//teutonic order state guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '277',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '279',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '280',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '269',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '285',
			'realm' => '5',
			'master' => '1'
		]);
		//scandinavian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '241',
			'realm' => '19',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '250',
			'realm' => '18',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '257',
			'realm' => '20',
			'master' => '1'
		]);
		//french guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '113',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '114',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '115',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '116',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '134',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '165',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '169',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '183',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '164',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '131',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '132',
			'realm' => '9',
			'master' => '1'
		]);
		//spanish and portuguese guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '390',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '391',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '393',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '405',
			'realm' => '35',
			'master' => '1'
		]);
		//russian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '789',
			'realm' => '95',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '795',
			'realm' => '123',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '757',
			'realm' => '89',
			'master' => '1'
		]);
		//byzantine guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '825',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '835',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '909',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '839',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '857',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '887',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '867',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '869',
			'realm' => '4',
			'master' => '1'
		]);
		//andalucian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '425',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '441',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '369',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '445',
			'realm' => '39',
			'master' => '1'
		]);
		//north african guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '549',
			'realm' => '40',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '553',
			'realm' => '41',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '593',
			'realm' => '42',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '629',
			'realm' => '43',
			'master' => '1'
		]);
		//levant guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '993',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1033',
			'realm' => '46',
			'master' => '1'
		]);
		//persian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '961',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '957',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '953',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '965',
			'realm' => '47',
			'master' => '1'
		]);
		
    }
}
