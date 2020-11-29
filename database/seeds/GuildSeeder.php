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
			'quarter' => '18674',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 3, france, paris
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Star',
			'guild_category' => 'chivalric_order',
			'place' => '113',
			'quarter' => '18601',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 4, hungary, esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Order Saint George',
			'guild_category' => 'chivalric_order',
			'place' => '685',
			'quarter' => '19173',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 5, holy roman empire, bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Golden Fleece',
			'guild_category' => 'chivalric_order',
			'place' => '97',
			'quarter' => '18585',
			'realm' => '3',
			'master' => '1'
		]);	
		//crusader guilds
		//guild 6, teutonic knights
		DB::table('guilds')->insert([
			'guild_name' => 'Teutonic Knights',
			'guild_category' => 'crusader_order',
			'place' => '277',
			'quarter' => '18428',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 7, knights hospitaller
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Hospitaller',
			'guild_category' => 'crusader_order',
			'place' => '993',
			'quarter' => '18483',
			'realm' => '6',
			'master' => '1'
		]);	
		//guild 8, knights templar
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Templar',
			'guild_category' => 'crusader_order',
			'place' => '993',
			'quarter' => '18484',
			'realm' => '7',
			'master' => '1'
		]);	
		//catholic monastic guilds
		//guild 9
		DB::table('guilds')->insert([
			'guild_name' => 'Augustinian Order',
			'guild_category' => 'monastic_order',
			'place' => '497',
			'quarter' => '18485',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 10
		DB::table('guilds')->insert([
			'guild_name' => 'Benedictine Order',
			'guild_category' => 'monastic_order',
			'place' => '500',
			'quarter' => '16089',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 11
		DB::table('guilds')->insert([
			'guild_name' => 'Carmelite Order',
			'guild_category' => 'monastic_order',
			'place' => '192',
			'quarter' => '18486',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 12
		DB::table('guilds')->insert([
			'guild_name' => 'Cistercian Order',
			'guild_category' => 'monastic_order',
			'place' => '132',
			'quarter' => '16261',
			'realm' => '9',
			'master' => '1'
		]);	
		//guild 13
		DB::table('guilds')->insert([
			'guild_name' => 'Franciscan Order',
			'guild_category' => 'monastic_order',
			'place' => '496',
			'quarter' => '16043',
			'realm' => '2',
			'master' => '1'
		]);	
		//greek orthodox monastic
		//guild 14
		DB::table('guilds')->insert([
			'guild_name' => 'Greek Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '825',
			'quarter' => '16954',
			'realm' => '4',
			'master' => '1'
		]);		
		//serbian orthodox monastic
		//guild 15
		DB::table('guilds')->insert([
			'guild_name' => 'Serbian Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '736',
			'quarter' => '16099',
			'realm' => '84',
			'master' => '1'
		]);			
		//russian orthodox monastic
		//guild 16
		DB::table('guilds')->insert([
			'guild_name' => 'Russian Orthodox Monks',
			'guild_category' => 'monastic_order',
			'place' => '749',
			'quarter' => '16104',
			'realm' => '89',
			'master' => '1'
		]);			
		//islamic sufi
		//guild 17
		DB::table('guilds')->insert([
			'guild_name' => 'Sufi Order',
			'guild_category' => 'monastic_order',
			'place' => '988',
			'quarter' => '18488',
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
			'quarter' => '16144',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 24
		DB::table('guilds')->insert([
			'guild_name' => 'Lorrainian League',
			'guild_category' => 'trade_league',
			'place' => '79',
			'quarter' => '16208',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 25
		DB::table('guilds')->insert([
			'guild_name' => 'Alsatian League',
			'guild_category' => 'trade_league',
			'place' => '59',
			'quarter' => '16188',
			'realm' => '3',
			'master' => '1'
		]);			
		//guild 26
		DB::table('guilds')->insert([
			'guild_name' => 'Swabian League',
			'guild_category' => 'trade_league',
			'place' => '30',
			'quarter' => '16159',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 27
		DB::table('guilds')->insert([
			'guild_name' => 'Lombard League',
			'guild_category' => 'trade_league',
			'place' => '461',
			'quarter' => '16590',
			'realm' => '24',
			'master' => '1'
		]);	
		//guild 28
		DB::table('guilds')->insert([
			'guild_name' => 'Tuscan League',
			'guild_category' => 'trade_league',
			'place' => '489',
			'quarter' => '16618',
			'realm' => '121',
			'master' => '1'
		]);	
		//guild 29
		DB::table('guilds')->insert([
			'guild_name' => 'Rhenish League',
			'guild_category' => 'trade_league',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 30
		DB::table('guilds')->insert([
			'guild_name' => 'Prussian League',
			'guild_category' => 'trade_league',
			'place' => '277',
			'quarter' => '16406',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 31
		DB::table('guilds')->insert([
			'guild_name' => 'Hungarian League',
			'guild_category' => 'trade_league',
			'place' => '685',
			'quarter' => '16814',
			'realm' => '10',
			'master' => '1'
		]);	
		//kontors
		//guild 32
		DB::table('guilds')->insert([
			'guild_name' => 'London Steelyard',
			'guild_category' => 'trade_kontor',
			'place' => '185',
			'quarter' => '16314',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 33
		DB::table('guilds')->insert([
			'guild_name' => 'Bruges',
			'guild_category' => 'trade_kontor',
			'place' => '97',
			'quarter' => '16226',
			'realm' => '3',
			'master' => '1'
		]);	
		//guild 34
		DB::table('guilds')->insert([
			'guild_name' => 'Tyskebryggen',
			'guild_category' => 'trade_kontor',
			'place' => '241',
			'quarter' => '16370',
			'realm' => '19',
			'master' => '1'
		]);	
		//guild 35
		DB::table('guilds')->insert([
			'guild_name' => 'Kauen',
			'guild_category' => 'trade_kontor',
			'place' => '663',
			'quarter' => '16792',
			'realm' => '51',
			'master' => '1'
		]);	
		//guild 36
		DB::table('guilds')->insert([
			'guild_name' => 'Novgorod Peterhof',
			'guild_category' => 'trade_kontor',
			'place' => '793',
			'quarter' => '16922',
			'realm' => '123',
			'master' => '1'
		]);	
		//guild 37
		DB::table('guilds')->insert([
			'guild_name' => 'Pleskov',
			'guild_category' => 'trade_kontor',
			'place' => '789',
			'quarter' => '16918',
			'realm' => '95',
			'master' => '1'
		]);	
		//fairs
		//guild 38
		DB::table('guilds')->insert([
			'guild_name' => 'Champagne Fairs',
			'guild_category' => 'trade_fair',
			'place' => '129',
			'quarter' => '16258',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 39
		DB::table('guilds')->insert([
			'guild_name' => 'Toulouse Fair',
			'guild_category' => 'trade_fair',
			'place' => '165',
			'quarter' => '16294',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 40
		DB::table('guilds')->insert([
			'guild_name' => 'Nuremberg Fair',
			'guild_category' => 'trade_fair',
			'place' => '32',
			'quarter' => '16161',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 41
		DB::table('guilds')->insert([
			'guild_name' => 'Genoa Fair',
			'guild_category' => 'trade_fair',
			'place' => '465',
			'quarter' => '16594',
			'realm' => '114',
			'master' => '1'
		]);
		//guild 42
		DB::table('guilds')->insert([
			'guild_name' => 'Venice Fair',
			'guild_category' => 'trade_fair',
			'place' => '469',
			'quarter' => '16598',
			'realm' => '113',
			'master' => '1'
		]);
		//guild 43
		DB::table('guilds')->insert([
			'guild_name' => 'Florence Fair',
			'guild_category' => 'trade_fair',
			'place' => '489',
			'quarter' => '16618',
			'realm' => '121',
			'master' => '1'
		]);
		//guild 44
		DB::table('guilds')->insert([
			'guild_name' => 'Scarborough Fair',
			'guild_category' => 'trade_fair',
			'place' => '207',
			'quarter' => '16336',
			'realm' => '8',
			'master' => '1'
		]);
		//guild 45
		DB::table('guilds')->insert([
			'guild_name' => 'Cologne Fair',
			'guild_category' => 'trade_fair',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 46
		DB::table('guilds')->insert([
			'guild_name' => 'Frankfurt Fair',
			'guild_category' => 'trade_fair',
			'place' => '71',
			'quarter' => '16200',
			'realm' => '3',
			'master' => '1'
		]);
		//guild 47
		DB::table('guilds')->insert([
			'guild_name' => 'Lyon Fair',
			'guild_category' => 'trade_fair',
			'place' => '179',
			'quarter' => '16308',
			'realm' => '9',
			'master' => '1'
		]);
		//guild 48
		DB::table('guilds')->insert([
			'guild_name' => 'Palermo Fair',
			'guild_category' => 'trade_fair',
			'place' => '529',
			'quarter' => '16658',
			'realm' => '27',
			'master' => '1'
		]);
		//guild 49
		DB::table('guilds')->insert([
			'guild_name' => 'Santiago Fair',
			'guild_category' => 'trade_fair',
			'place' => '397',
			'quarter' => '16526',
			'realm' => '34',
			'master' => '1'
		]);
		//guild 50
		DB::table('guilds')->insert([
			'guild_name' => 'Leon Fair',
			'guild_category' => 'trade_fair',
			'place' => '381',
			'quarter' => '16510',
			'realm' => '33',
			'master' => '1'
		]);
		//guild 51
		DB::table('guilds')->insert([
			'guild_name' => 'Pamplona Fair',
			'guild_category' => 'trade_fair',
			'place' => '345',
			'quarter' => '16474',
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
			'quarter' => '16215',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '85',
			'quarter' => '16214',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '97',
			'quarter' => '16226',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '98',
			'quarter' => '16227',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '100',
			'quarter' => '16229',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '99',
			'quarter' => '16228',
			'realm' => '3',
			'master' => '1'
		]);
		//english guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '185',
			'quarter' => '16314',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '207',
			'quarter' => '16336',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '201',
			'quarter' => '16330',
			'realm' => '8',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '221',
			'quarter' => '16350',
			'realm' => '8',
			'master' => '1'
		]);
		//german guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '73',
			'quarter' => '16202',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Bookbinders Guild',
			'guild_category' => 'merchant_guild',
			'place' => '32',
			'quarter' => '16161',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Salters Guild',
			'guild_category' => 'merchant_guild',
			'place' => '3',
			'quarter' => '16132',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '14',
			'quarter' => '16143',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '15',
			'quarter' => '16144',
			'realm' => '3',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '37',
			'quarter' => '16166',
			'realm' => '3',
			'master' => '1'
		]);
		//lombard guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '469',
			'quarter' => '16598',
			'realm' => '113',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '457',
			'quarter' => '16586',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '464',
			'quarter' => '16593',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '465',
			'quarter' => '16594',
			'realm' => '114',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '462',
			'quarter' => '16591',
			'realm' => '24',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '461',
			'quarter' => '16590',
			'realm' => '24',
			'master' => '1'
		]);
		//tuscan guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '501',
			'quarter' => '16630',
			'realm' => '117',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '503',
			'quarter' => '16632',
			'realm' => '122',
			'master' => '1'
		]);
		//croatia guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '669',
			'quarter' => '16798',
			'realm' => '118',
			'master' => '1'
		]);
		//south italian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '532',
			'quarter' => '16661',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '529',
			'quarter' => '16658',
			'realm' => '27',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '507',
			'quarter' => '16636',
			'realm' => '119',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '506',
			'quarter' => '16635',
			'realm' => '116',
			'master' => '1'
		]);
		//polish
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '645',
			'quarter' => '16774',
			'realm' => '29',
			'master' => '1'
		]);
		//teutonic order state guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '277',
			'quarter' => '16406',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '279',
			'quarter' => '16408',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '280',
			'quarter' => '16409',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '269',
			'quarter' => '16398',
			'realm' => '5',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '285',
			'quarter' => '16414',
			'realm' => '5',
			'master' => '1'
		]);
		//scandinavian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '241',
			'quarter' => '16370',
			'realm' => '19',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Fishmongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '250',
			'quarter' => '16379',
			'realm' => '18',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Coopers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '257',
			'quarter' => '16386',
			'realm' => '20',
			'master' => '1'
		]);
		//french guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '113',
			'quarter' => '16242',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cheesemongers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '114',
			'quarter' => '16243',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '115',
			'quarter' => '16244',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '116',
			'quarter' => '16245',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Mercers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '134',
			'quarter' => '16263',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '165',
			'quarter' => '16294',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '169',
			'quarter' => '16298',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '183',
			'quarter' => '16312',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '164',
			'quarter' => '16293',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '131',
			'quarter' => '16260',
			'realm' => '9',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '132',
			'quarter' => '16261',
			'realm' => '9',
			'master' => '1'
		]);
		//spanish and portuguese guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '390',
			'quarter' => '16519',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '391',
			'quarter' => '16520',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '393',
			'quarter' => '16522',
			'realm' => '32',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Vintners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '405',
			'quarter' => '16534',
			'realm' => '35',
			'master' => '1'
		]);
		//russian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '789',
			'quarter' => '16918',
			'realm' => '95',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Furriers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '795',
			'quarter' => '16924',
			'realm' => '123',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Chandlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '757',
			'quarter' => '16886',
			'realm' => '89',
			'master' => '1'
		]);
		//byzantine guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '825',
			'quarter' => '16954',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '835',
			'quarter' => '16964',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '909',
			'quarter' => '17038',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '839',
			'quarter' => '16968',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '857',
			'quarter' => '16986',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '887',
			'quarter' => '17016',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '867',
			'quarter' => '16996',
			'realm' => '4',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '869',
			'quarter' => '16998',
			'realm' => '4',
			'master' => '1'
		]);
		//andalucian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Tanners Guild',
			'guild_category' => 'merchant_guild',
			'place' => '425',
			'quarter' => '16554',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '441',
			'quarter' => '16570',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '369',
			'quarter' => '16498',
			'realm' => '39',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '445',
			'quarter' => '16574',
			'realm' => '39',
			'master' => '1'
		]);
		//north african guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Dyers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '549',
			'quarter' => '16678',
			'realm' => '40',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '553',
			'quarter' => '16682',
			'realm' => '41',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '593',
			'quarter' => '16722',
			'realm' => '42',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Potterers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '629',
			'quarter' => '16758',
			'realm' => '43',
			'master' => '1'
		]);
		//levant guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '993',
			'quarter' => '17122',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'quarter' => '17134',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1005',
			'quarter' => '17134',
			'realm' => '46',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Cutlers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '1033',
			'quarter' => '17162',
			'realm' => '46',
			'master' => '1'
		]);
		//persian guilds
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '961',
			'quarter' => '17090',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '957',
			'quarter' => '17086',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Drapers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '953',
			'quarter' => '17082',
			'realm' => '47',
			'master' => '1'
		]);
		//guild
		DB::table('guilds')->insert([
			'guild_name' => 'Haberdashers Guild',
			'guild_category' => 'merchant_guild',
			'place' => '965',
			'quarter' => '17094',
			'realm' => '47',
			'master' => '1'
		]);
		
    }
}
