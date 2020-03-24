<?php

use Illuminate\Database\Seeder;

class BurgherTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/	
		
		//lord warden
		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Marches',
			'region' => '76',
			'place' => '301',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'court_warden'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Stannaries',
			'region' => '50',
			'place' => '197',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'court_warden'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Cinque Ports',
			'region' => '48',
			'place' => '190',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'court_warden'
		]);
		
		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/	
		
		//trade leagues
		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Hanseatic League',
			'region' => '4',
			'place' => '15',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Lorrainian League',
			'region' => '20',
			'place' => '79',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Alsatian League',
			'region' => '15',
			'place' => '59',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Swabian League',
			'region' => '8',
			'place' => '30',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);		

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Lombard League',
			'region' => '116',
			'place' => '461',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Tuscan League',
			'region' => '123',
			'place' => '489',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Rhenish League',
			'region' => '19',
			'place' => '73',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Prussian League',
			'region' => '70',
			'place' => '277',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Hungarian League',
			'region' => '172',
			'place' => '685',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_league'
		]);
		
		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/	

		//kontors
		DB::table('titles')->insert([
			'title_name' => '[alderman] of the London Steelyard',
			'region' => '47',
			'place' => '185',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[alderman] of Bruges',
			'region' => '25',
			'place' => '97',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of Tyskebryggen',
			'region' => '61',
			'place' => '241',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Kauen',
			'region' => '166',
			'place' => '663',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Novgorod Peterhof',
			'region' => '199',
			'place' => '793',
			'religion' => 'Russian Orthodox',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[alderman] of the Pleskov',
			'region' => '198',
			'place' => '789',
			'religion' => 'Russian Orthodox',
			'rank' => '5',
			'career' => 'trade_kontor'
		]);	

		/*
		title ranks
		1 = virgate
		2 = hide
		3 = tithing
		4 = parish
		5 = barony
		6 = castellany
		7 = county
		8 = march
		9 = duchy
		10 = grand duchy
		11 = kingdom
		12 = empire		
		*/	
		
		//merchant guilds netherlands
		DB::table('titles')->insert([
			'title_name' => '[master] of the Cheesemongers Guild',
			'region' => '22',
			'place' => '86',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Coopers Guild',
			'region' => '22',
			'place' => '85',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);		
		
		//merchant guilds flanders
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '25',
			'place' => '97',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '25',
			'place' => '98',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '25',
			'place' => '100',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '25',
			'place' => '99',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds england
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '47',
			'place' => '185',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '52',
			'place' => '207',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '51',
			'place' => '201',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '56',
			'place' => '221',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds germany
		DB::table('titles')->insert([
			'title_name' => '[master] of the Potterers Guild',
			'region' => '19',
			'place' => '73',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Bookbinders Guild',
			'region' => '8',
			'place' => '32',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Salters Guild',
			'region' => '1',
			'place' => '3',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Fishmongers Guild',
			'region' => '4',
			'place' => '14',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Coopers Guild',
			'region' => '4',
			'place' => '15',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Coopers Guild',
			'region' => '10',
			'place' => '37',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		//merchant guilds lombardy
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '118',
			'place' => '469',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '115',
			'place' => '457',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '116',
			'place' => '464',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '117',
			'place' => '465',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '116',
			'place' => '462',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '116',
			'place' => '461',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			
		
		//merchant guilds tuscany
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '126',
			'place' => '501',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '126',
			'place' => '503',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds croatia
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '168',
			'place' => '669',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		//merchants guild of southern italy
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '133',
			'place' => '532',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '133',
			'place' => '529',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '127',
			'place' => '507',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '127',
			'place' => '506',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		//merchant guilds poland, lithuania, baltics
		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '162',
			'place' => '645',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '70',
			'place' => '277',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '70',
			'place' => '279',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '70',
			'place' => '280',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Chandlers Guild',
			'region' => '68',
			'place' => '269',
			'religion' => 'Russian Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '72',
			'place' => '285',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);		
		
		//merchant guilds scandinavia
		DB::table('titles')->insert([
			'title_name' => '[master] of the Fishmongers Guild',
			'region' => '61',
			'place' => '241',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Fishmongers Guild',
			'region' => '63',
			'place' => '250',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Coopers Guild',
			'region' => '65',
			'place' => '257',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			
		
		//merchant guilds france
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '29',
			'place' => '113',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Cheesemongers Guild',
			'region' => '29',
			'place' => '114',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Tanners Guild',
			'region' => '29',
			'place' => '115',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '29',
			'place' => '116',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Mercers Guild',
			'region' => '34',
			'place' => '134',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '42',
			'place' => '165',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '43',
			'place' => '169',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '46',
			'place' => '183',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '41',
			'place' => '164',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '33',
			'place' => '131',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '33',
			'place' => '132',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		//merchant guilds spain and portugal
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '98',
			'place' => '390',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '98',
			'place' => '391',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '99',
			'place' => '393',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Vintners Guild',
			'region' => '102',
			'place' => '405',
			'religion' => 'Catholic',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);		
		
		//merchant guilds russia
		DB::table('titles')->insert([
			'title_name' => '[master] of the Furriers Guild',
			'region' => '198',
			'place' => '789',
			'religion' => 'Russian Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Furriers Guild',
			'region' => '199',
			'place' => '795',
			'religion' => 'Russian Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Chandlers Guild',
			'region' => '190',
			'place' => '757',
			'religion' => 'Russian Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds byzantine
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '209',
			'place' => '835',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '228',
			'place' => '909',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '210',
			'place' => '839',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '215',
			'place' => '857',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '222',
			'place' => '887',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '217',
			'place' => '867',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '218',
			'place' => '869',
			'religion' => 'Greek Orthodox',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds andalucian
		DB::table('titles')->insert([
			'title_name' => '[master] of the Tanners Guild',
			'region' => '107',
			'place' => '425',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '111',
			'place' => '441',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '93',
			'place' => '369',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);

		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '112',
			'place' => '445',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			
		
		//merchant guilds north africa
		DB::table('titles')->insert([
			'title_name' => '[master] of the Dyers Guild',
			'region' => '138',
			'place' => '549',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '139',
			'place' => '553',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '149',
			'place' => '593',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[master] of the Potterers Guild',
			'region' => '158',
			'place' => '629',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	

		//merchant guilds levant
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '249',
			'place' => '993',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '252',
			'place' => '1005',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Cutlers Guild',
			'region' => '252',
			'place' => '1005',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Cutlers Guild',
			'region' => '259',
			'place' => '1033',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		//merchant guilds persia
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '241',
			'place' => '961',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '240',
			'place' => '957',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Drapers Guild',
			'region' => '239',
			'place' => '953',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[master] of the Haberdashers Guild',
			'region' => '242',
			'place' => '965',
			'religion' => 'Muslim',
			'rank' => '3',
			'career' => 'guild_grandmaster'
		]);			
		
    }
}
