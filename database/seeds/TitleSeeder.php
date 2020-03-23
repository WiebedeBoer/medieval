<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	//admin
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
		
		//emperors
		DB::table('titles')->insert([
			'title_name' => 'Holy Roman [emperor]',
			'region' => '8',
			'place' => '29',
			'religion' => 'Catholic',
			'rank' => '12',
			'career' => 'elective_empire'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Byzantine [emperor]',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '12',
			'career' => 'fixed_empire'
		]);
		
		//papacy
		DB::table('titles')->insert([
			'title_name' => '[pope]',
			'region' => '125',
			'place' => '497',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'papal_states'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[pope]',
			'region' => '125',
			'place' => '497',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'elective_papacy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Rome',
			'region' => '125',
			'place' => '497',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'papal_states'
		]);
		
		//patriarchs
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Aquileja',
			'region' => '121',
			'place' => '481',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Kiev',
			'region' => '190',
			'place' => '757',
			'religion' => 'Russian Orthodox',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Constantinople',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Bulgaria',
			'region' => '182',
			'place' => '726',
			'religion' => 'Serbian Orthodox',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Antioch',
			'region' => '255',
			'place' => '1017',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Jerusalem',
			'region' => '249',
			'place' => '993',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Alexandria',
			'region' => '157',
			'place' => '625',
			'religion' => 'Greek Orthodox',
			'rank' => '11',
			'career' => 'patriarchy'
		]);		
		
		//caliphs and sharifs
		DB::table('titles')->insert([
			'title_name' => 'Abbasid [caliph]',
			'region' => '259',
			'place' => '1033',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[caliph] of Al Andalus',
			'region' => '107',
			'place' => '425',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Fatimid [caliph]',
			'region' => '158',
			'place' => '629',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Almohad [caliph]',
			'region' => '139',
			'place' => '553',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Rashidun [caliph]',
			'region' => '247',
			'place' => '988',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[sharif] of Mecca',
			'region' => '247',
			'place' => '985',
			'religion' => 'Muslim',
			'rank' => '9',
			'career' => 'fixed_sharifate'
		]);
		
		//crusader grandmasters
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Teutonic Order',
			'region' => '70',
			'place' => '277',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Knights Hospitaller',
			'region' => '249',
			'place' => '993',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Knights Templar',
			'region' => '249',
			'place' => '993',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		//maritime republics
		DB::table('titles')->insert([
			'title_name' => '[doge] of Venice',
			'region' => '118',
			'place' => '469',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Genoa',
			'region' => '117',
			'place' => '465',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Noli',
			'region' => '117',
			'place' => '466',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Gaeta',
			'region' => '127',
			'place' => '506',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Pisa',
			'region' => '126',
			'place' => '501',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[rector] of Ragusa',
			'region' => '168',
			'place' => '669',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Amalfi',
			'region' => '127',
			'place' => '507',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Ancona',
			'region' => '124',
			'place' => '495',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		//merchant republics
		DB::table('titles')->insert([
			'title_name' => '[gonfalonier] of Florence',
			'region' => '123',
			'place' => '489',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'merchant_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[gonfalonier] of Lucca',
			'region' => '126',
			'place' => '503',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'merchant_republic'
		]);	
		
		//novgorod republic
		DB::table('titles')->insert([
			'title_name' => '[prince] of Novgorod',
			'region' => '199',
			'place' => '793',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'novgorod_republic'
		]);
		
		//trade leagues
		DB::table('titles')->insert([
			'title_name' => 'Alderman of the Hanseatic League',
			'region' => '4',
			'place' => '15',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'hanseatic_league'
		]);
		
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

		//chivalric guilds
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Garter',
			'region' => '47',
			'place' => '186',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Star',
			'region' => '29',
			'place' => '113',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order Saint George',
			'region' => '172',
			'place' => '685',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Golden Fleece',
			'region' => '25',
			'place' => '97',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);			
		
		//scandinavian kingdoms
		DB::table('titles')->insert([
			'title_name' => '[king] of Denmark',
			'region' => '62',
			'place' => '245',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Norway',
			'region' => '60',
			'place' => '237',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Sweden',
			'region' => '65',
			'place' => '257',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);		
		
		//british kingdoms
		DB::table('titles')->insert([
			'title_name' => '[king] of England',
			'region' => '47',
			'place' => '185',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Scotland',
			'region' => '73',
			'place' => '289',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Wales',
			'region' => '57',
			'place' => '225',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		//lord warden
		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Marches',
			'region' => '76',
			'place' => '301',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'fixed_warden'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Stannaries',
			'region' => '50',
			'place' => '197',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'fixed_warden'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[lord-warden] of the Cinque Ports',
			'region' => '48',
			'place' => '190',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'fixed_warden'
		]);		
		
		//irish kingdoms
		DB::table('titles')->insert([
			'title_name' => '[highking] of Ireland',
			'region' => '82',
			'place' => '326',
			'religion' => 'Catholic',
			'rank' => '12',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Ulster',
			'region' => '83',
			'place' => '329',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Meath',
			'region' => '82',
			'place' => '325',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Leinster',
			'region' => '84',
			'place' => '333',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Munster',
			'region' => '85',
			'place' => '337',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Connaught',
			'region' => '86',
			'place' => '343',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[viceroy] of Ireland',
			'region' => '82',
			'place' => '325',
			'religion' => 'Catholic',
			'rank' => '8',
			'career' => 'vice_royalty'
		]);
		
		//frankish
		DB::table('titles')->insert([
			'title_name' => '[king] of France',
			'region' => '29',
			'place' => '113',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);		
		
		//holy roman empire
		DB::table('titles')->insert([
			'title_name' => '[king] of Burgundy',
			'region' => '41',
			'place' => '161',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Germany',
			'region' => '19',
			'place' => '74',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[archduke] of Austria',
			'region' => '10',
			'place' => '37',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Italy',
			'region' => '115',
			'place' => '459',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Bohemia',
			'region' => '16',
			'place' => '61',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		//teutonic order state
		DB::table('titles')->insert([
			'title_name' => '[duke] of Estonia',
			'region' => '72',
			'place' => '285',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[duke] of Prussia',
			'region' => '70',
			'place' => '280',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Livonia',
			'region' => '68',
			'place' => '269',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'confederate_ecclessiastical'
		]);
		
		//southern italy
		DB::table('titles')->insert([
			'title_name' => '[king] of Naples',
			'region' => '127',
			'place' => '505',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);

		DB::table('titles')->insert([
			'title_name' => '[king] of Sicily',
			'region' => '133',
			'place' => '529',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Sardinia',
			'region' => '131',
			'place' => '521',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[viceroy] of Sardinia',
			'region' => '131',
			'place' => '521',
			'religion' => 'Catholic',
			'rank' => '8',
			'career' => 'vice_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Taranto',
			'region' => '128',
			'place' => '509',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Benevento',
			'region' => '130',
			'place' => '517',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		//croatian hungarian union
		DB::table('titles')->insert([
			'title_name' => '[king] of Hungary',
			'region' => '172',
			'place' => '685',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Croatia',
			'region' => '169',
			'place' => '673',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		//polish lithuanian commonwealth
		DB::table('titles')->insert([
			'title_name' => '[king] of Poland',
			'region' => '162',
			'place' => '645',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[grandduke] of Lithuania',
			'region' => '166',
			'place' => '661',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		//iberian peninsula
		DB::table('titles')->insert([
			'title_name' => '[king] of Navarre',
			'region' => '87',
			'place' => '345',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Aragon',
			'region' => '89',
			'place' => '353',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Castile',
			'region' => '98',
			'place' => '389',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Leon',
			'region' => '96',
			'place' => '381',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Galicia',
			'region' => '100',
			'place' => '397',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Portugal',
			'region' => '101',
			'place' => '401',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Catalonia',
			'region' => '92',
			'place' => '365',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Asturias',
			'region' => '97',
			'place' => '385',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);

		//andalucian taifas
		DB::table('titles')->insert([
			'title_name' => '[king] of Andalucia',
			'region' => '107',
			'place' => '425',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);				
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Zaragoza',
			'region' => '90',
			'place' => '357',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of the Baleares',
			'region' => '95',
			'place' => '377',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Valencia',
			'region' => '93',
			'place' => '369',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Denia',
			'region' => '94',
			'place' => '373',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Murcia',
			'region' => '113',
			'place' => '449',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Granada',
			'region' => '111',
			'place' => '441',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Almeria',
			'region' => '112',
			'place' => '445',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Malaga',
			'region' => '114',
			'place' => '453',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Sevilla',
			'region' => '108',
			'place' => '429',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Badajoz',
			'region' => '109',
			'place' => '433',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Toledo',
			'region' => '110',
			'place' => '437',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Algarve',
			'region' => '106',
			'place' => '421',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		//north africa
		DB::table('titles')->insert([
			'title_name' => '[king] of Fez',
			'region' => '138',
			'place' => '539',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Marrakesh',
			'region' => '139',
			'place' => '553',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);

		DB::table('titles')->insert([
			'title_name' => '[king] of Kairouan',
			'region' => '150',
			'place' => '597',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Egypt',
			'region' => '158',
			'place' => '629',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Ifni',
			'region' => '140',
			'place' => '557',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Figuig',
			'region' => '141',
			'place' => '562',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//middle east
		DB::table('titles')->insert([
			'title_name' => '[prince] of Najd',
			'region' => '246',
			'place' => '981',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Hejaz',
			'region' => '247',
			'place' => '988',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Syria',
			'region' => '252',
			'place' => '1005',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Jerusalem',
			'region' => '249',
			'place' => '993',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Antioch',
			'region' => '255',
			'place' => '1017',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Isfahan',
			'region' => '241',
			'place' => '961',
			'religion' => 'Muslim',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Persia',
			'region' => '240',
			'place' => '957',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//steppes
		DB::table('titles')->insert([
			'title_name' => '[king] of Kwarezm',
			'region' => '206',
			'place' => '821',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Khazaria',
			'region' => '205',
			'place' => '817',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//georgia and armenia
		DB::table('titles')->insert([
			'title_name' => '[king] of Kars',
			'region' => '232',
			'place' => '925',
			'religion' => 'Greek Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Georgia',
			'region' => '230',
			'place' => '917',
			'religion' => 'Greek Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Azerbaijan',
			'region' => '233',
			'place' => '929',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Armenia',
			'region' => '234',
			'place' => '935',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Mardin',
			'region' => '235',
			'place' => '937',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Vaspurakan',
			'region' => '235',
			'place' => '939',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//byzantine empire
		DB::table('titles')->insert([
			'title_name' => '[king] of Thrace',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandduke] of Trebizond',
			'region' => '224',
			'place' => '893',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Amid',
			'region' => '227',
			'place' => '905',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Taron',
			'region' => '227',
			'place' => '907',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);				
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Peleponessos',
			'region' => '210',
			'place' => '837',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Hellas',
			'region' => '209',
			'place' => '833',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Icosium',
			'region' => '218',
			'place' => '869',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Anatolia',
			'region' => '218',
			'place' => '870',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Karaman',
			'region' => '218',
			'place' => '871',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Smyrna',
			'region' => '215',
			'place' => '857',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Thracesia',
			'region' => '216',
			'place' => '861',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Coracesium',
			'region' => '219',
			'place' => '873',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Ottoman',
			'region' => '217',
			'place' => '867',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Opsicia',
			'region' => '217',
			'place' => '865',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Cappadocia',
			'region' => '223',
			'place' => '889',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Sebasteia',
			'region' => '228',
			'place' => '909',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Paphlagonia',
			'region' => '221',
			'place' => '881',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Canik',
			'region' => '226',
			'place' => '902',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Nicopolis',
			'region' => '211',
			'place' => '841',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Epirus',
			'region' => '212',
			'place' => '845',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Thessaloniki',
			'region' => '208',
			'place' => '829',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Macedonia',
			'region' => '208',
			'place' => '831',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Bucellaria',
			'region' => '220',
			'place' => '877',
			'religion' => 'Greek Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//balkans
		DB::table('titles')->insert([
			'title_name' => '[king] of Bulgaria',
			'region' => '182',
			'place' => '727',
			'religion' => 'Serbian Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Raskha',
			'region' => '185',
			'place' => '737',
			'religion' => 'Serbian Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Wallachia',
			'region' => '177',
			'place' => '707',
			'religion' => 'Serbian Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Moldova',
			'region' => '180',
			'place' => '717',
			'religion' => 'Serbian Orthodox',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//kievan rus
		DB::table('titles')->insert([
			'title_name' => '[prince] of Halych',
			'region' => '191',
			'place' => '761',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Pereyaslav',
			'region' => '189',
			'place' => '753',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Kiev',
			'region' => '190',
			'place' => '757',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Tchernigov',
			'region' => '193',
			'place' => '769',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Turov',
			'region' => '192',
			'place' => '765',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Smolensk',
			'region' => '195',
			'place' => '777',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Polotsk',
			'region' => '194',
			'place' => '773',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);		

		DB::table('titles')->insert([
			'title_name' => '[prince] of Ryazan',
			'region' => '196',
			'place' => '781',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Muscowy',
			'region' => '197',
			'place' => '785',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Pleskov',
			'region' => '198',
			'place' => '789',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//monastic prince abbot
		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Corvey',
			'region' => '1',
			'place' => '4',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Gernrode',
			'region' => '3',
			'place' => '12',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Sankt Gallen',
			'region' => '14',
			'place' => '56',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Wissembourg',
			'region' => '15',
			'place' => '60',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Fulda',
			'region' => '18',
			'place' => '72',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Stavelot',
			'region' => '19',
			'place' => '76',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Pruem',
			'region' => '20',
			'place' => '80',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Thorn',
			'region' => '24',
			'place' => '96',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);			
	
		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Pinerollo',
			'region' => '122',
			'place' => '488',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-abbot] of Leubus',
			'region' => '161',
			'place' => '644',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_monastic'
		]);	

		//monastic prince provost
		DB::table('titles')->insert([
			'title_name' => '[prince-provost] of Berchtesgaden',
			'region' => '9',
			'place' => '36',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_monastic'
		]);

		//monastic grandmasters
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Augustinian Order',
			'region' => '125',
			'place' => '497',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Benedictine Order',
			'region' => '125',
			'place' => '500',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Carmelite Order',
			'region' => '48',
			'place' => '192',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Cistercian Order',
			'region' => '33',
			'place' => '132',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Franciscan Order',
			'region' => '124',
			'place' => '496',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);

		//prince archbishop
		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Bremen',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Dresden',
			'region' => '2',
			'place' => '6',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Magdeburg',
			'region' => '3',
			'place' => '9',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Salzburg',
			'region' => '9',
			'place' => '33',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Mainz',
			'region' => '18',
			'place' => '69',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Cologne',
			'region' => '19',
			'place' => '73',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Trier',
			'region' => '20',
			'place' => '77',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Reims',
			'region' => '33',
			'place' => '131',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Besancon',
			'region' => '46',
			'place' => '182',
			'religion' => 'Catholic',
			'rank' => '9',
			'career' => 'fixed_eclessiastical'
		]);			

		//prince bishop
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Meissen',
			'region' => '2',
			'place' => '5',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Merseburg',
			'region' => '3',
			'place' => '10',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Halberstadt',
			'region' => '3',
			'place' => '11',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Schwerin',
			'region' => '4',
			'place' => '13',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Lubeck',
			'region' => '4',
			'place' => '15',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Brandenburg',
			'region' => '5',
			'place' => '17',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Havelberg',
			'region' => '5',
			'place' => '19',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Kolberg',
			'region' => '6',
			'place' => '23',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Munster',
			'region' => '7',
			'place' => '25',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Osnabruck',
			'region' => '7',
			'place' => '27',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Paderborn',
			'region' => '7',
			'place' => '28',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);			
	
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Regensburg',
			'region' => '8',
			'place' => '29',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Augsburg',
			'region' => '8',
			'place' => '30',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Wurzburg',
			'region' => '8',
			'place' => '31',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Sankt Polten',
			'region' => '10',
			'place' => '39',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Trent',
			'region' => '12',
			'place' => '47',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Brixen',
			'region' => '12',
			'place' => '48',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Basel',
			'region' => '14',
			'place' => '55',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Strassbourg',
			'region' => '15',
			'place' => '59',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Olmutz',
			'region' => '17',
			'place' => '67',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Heidelberg',
			'region' => '18',
			'place' => '70',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Liege',
			'region' => '19',
			'place' => '75',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Metz',
			'region' => '20',
			'place' => '79',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Utrecht',
			'region' => '22',
			'place' => '87',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Cambrai',
			'region' => '25',
			'place' => '99',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Gorizia',
			'region' => '26',
			'place' => '103',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Laibach',
			'region' => '27',
			'place' => '107',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Verdun',
			'region' => '30',
			'place' => '119',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Laon',
			'region' => '31',
			'place' => '123',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Durham',
			'region' => '52',
			'place' => '206',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);		

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Pilten',
			'region' => '69',
			'place' => '273',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Koningsberg',
			'region' => '70',
			'place' => '280',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Arensburg',
			'region' => '72',
			'place' => '287',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Hapsal',
			'region' => '72',
			'place' => '288',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Coimbra',
			'region' => '104',
			'place' => '413',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Belluno',
			'region' => '118',
			'place' => '472',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince-bishop] of Asti',
			'region' => '122',
			'place' => '487',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'fixed_eclessiastical'
		]);	

		//universities
DB::table('titles')->insert([
 'title_name' => '[college-master] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]); 

//archbishops
DB::table('titles')->insert([
 'title_name' => '[archbishop] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Tours',
 'region' => '35',
 'place' => '137',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of York',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Milan',
 'region' => '115',
 'place' => '457',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Cosenza',
 'region' => '129',
 'place' => '513',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Durres',
 'region' => '212',
 'place' => '846',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Kios',
 'region' => '217',
 'place' => '866',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Ancyra',
 'region' => '220',
 'place' => '877',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Nazareth',
 'region' => '250',
 'place' => '998',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[archbishop] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]); 

//bishops
DB::table('titles')->insert([
 'title_name' => '[bishop] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Klagenfurt',
 'region' => '26',
 'place' => '101',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Meaux',
 'region' => '29',
 'place' => '114',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Chartres',
 'region' => '29',
 'place' => '115',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mans',
 'region' => '36',
 'place' => '143',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Angouleme',
 'region' => '44',
 'place' => '173',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vienne',
 'region' => '45',
 'place' => '178',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Autun',
 'region' => '45',
 'place' => '180',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Wells',
 'region' => '49',
 'place' => '195',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Saint German',
 'region' => '50',
 'place' => '199',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Worcester',
 'region' => '53',
 'place' => '209',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bangor',
 'region' => '57',
 'place' => '227',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Glasbury',
 'region' => '58',
 'place' => '231',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Hamar',
 'region' => '60',
 'place' => '239',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Carlisle',
 'region' => '76',
 'place' => '301',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Elgin',
 'region' => '79',
 'place' => '313',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Rosemarkie',
 'region' => '81',
 'place' => '323',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Dornoch',
 'region' => '81',
 'place' => '324',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Clogher',
 'region' => '83',
 'place' => '332',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Coruna',
 'region' => '100',
 'place' => '399',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Silves',
 'region' => '106',
 'place' => '424',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Malaga',
 'region' => '114',
 'place' => '453',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Noli',
 'region' => '117',
 'place' => '466',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Chioggia',
 'region' => '118',
 'place' => '471',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Udine',
 'region' => '121',
 'place' => '483',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Grosseto',
 'region' => '123',
 'place' => '492',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Spoleto',
 'region' => '124',
 'place' => '493',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tivoli',
 'region' => '125',
 'place' => '499',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Volterra',
 'region' => '126',
 'place' => '504',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Potenza',
 'region' => '130',
 'place' => '519',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bosa',
 'region' => '131',
 'place' => '523',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Dolia',
 'region' => '132',
 'place' => '527',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tangiers',
 'region' => '136',
 'place' => '541',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tinmel',
 'region' => '140',
 'place' => '560',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mostaganem',
 'region' => '143',
 'place' => '570',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Djelfa',
 'region' => '144',
 'place' => '573',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bejaia',
 'region' => '147',
 'place' => '585',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Setif',
 'region' => '147',
 'place' => '587',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Annaba',
 'region' => '148',
 'place' => '589',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Zaghouan',
 'region' => '149',
 'place' => '594',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Gabes',
 'region' => '151',
 'place' => '601',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Gafsa',
 'region' => '151',
 'place' => '602',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ghadames',
 'region' => '152',
 'place' => '605',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Derna',
 'region' => '156',
 'place' => '622',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tobruk',
 'region' => '156',
 'place' => '623',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Helwan',
 'region' => '158',
 'place' => '630',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Fayum',
 'region' => '158',
 'place' => '631',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Aswan',
 'region' => '160',
 'place' => '639',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Konin',
 'region' => '163',
 'place' => '651',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Plock',
 'region' => '164',
 'place' => '653',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Leslau',
 'region' => '164',
 'place' => '655',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Kotor',
 'region' => '169',
 'place' => '676',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Nitra',
 'region' => '170',
 'place' => '679',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bucharest',
 'region' => '178',
 'place' => '710',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Stip',
 'region' => '181',
 'place' => '723',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Krusevac',
 'region' => '185',
 'place' => '739',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Suzdal',
 'region' => '201',
 'place' => '803',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Corlu',
 'region' => '207',
 'place' => '828',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Sardes',
 'region' => '216',
 'place' => '864',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cotyaeum',
 'region' => '220',
 'place' => '879',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Dorylaeum',
 'region' => '220',
 'place' => '880',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Claudiopolis',
 'region' => '221',
 'place' => '884',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Garsaura',
 'region' => '223',
 'place' => '890',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Kerasous',
 'region' => '224',
 'place' => '896',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Corum',
 'region' => '226',
 'place' => '903',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tavium',
 'region' => '228',
 'place' => '912',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ghars',
 'region' => '232',
 'place' => '927',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Mashhad',
 'region' => '237',
 'place' => '947',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bushire',
 'region' => '240',
 'place' => '958',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Bosra',
 'region' => '251',
 'place' => '1001',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Salamiyah',
 'region' => '253',
 'place' => '1011',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tartous',
 'region' => '254',
 'place' => '1014',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Alexandretta',
 'region' => '255',
 'place' => '1018',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Erbil',
 'region' => '258',
 'place' => '1029',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Tikrit',
 'region' => '259',
 'place' => '1034',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Anbar',
 'region' => '259',
 'place' => '1035',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]);

DB::table('titles')->insert([
 'title_name' => '[bishop] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_eclessiastical'
]); 

//abbots
DB::table('titles')->insert([
 'title_name' => '[abbot] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dresden',
 'region' => '2',
 'place' => '6',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chemnitz',
 'region' => '2',
 'place' => '8',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Schwerin',
 'region' => '4',
 'place' => '13',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Broda',
 'region' => '4',
 'place' => '16',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Salzwedel',
 'region' => '5',
 'place' => '18',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Havelberg',
 'region' => '5',
 'place' => '19',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lindow',
 'region' => '5',
 'place' => '20',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kolberg',
 'region' => '6',
 'place' => '23',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Osnabruck',
 'region' => '7',
 'place' => '27',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Paderborn',
 'region' => '7',
 'place' => '28',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Augsburg',
 'region' => '8',
 'place' => '30',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nuremberg',
 'region' => '8',
 'place' => '32',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Salzburg',
 'region' => '9',
 'place' => '33',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sankt Polten',
 'region' => '10',
 'place' => '39',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Seckau',
 'region' => '11',
 'place' => '44',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bozen',
 'region' => '12',
 'place' => '46',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Trent',
 'region' => '12',
 'place' => '47',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Brixen',
 'region' => '12',
 'place' => '48',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Strassbourg',
 'region' => '15',
 'place' => '59',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Plass',
 'region' => '16',
 'place' => '64',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Olmutz',
 'region' => '17',
 'place' => '67',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Trebitz',
 'region' => '17',
 'place' => '68',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Liege',
 'region' => '19',
 'place' => '75',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Deventer',
 'region' => '21',
 'place' => '84',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Antwerp',
 'region' => '24',
 'place' => '95',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ghent',
 'region' => '25',
 'place' => '98',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cambrai',
 'region' => '25',
 'place' => '99',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ypres',
 'region' => '25',
 'place' => '100',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gorizia',
 'region' => '26',
 'place' => '103',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Moosburg',
 'region' => '26',
 'place' => '104',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Laibach',
 'region' => '27',
 'place' => '107',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sittich',
 'region' => '27',
 'place' => '108',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vannes',
 'region' => '28',
 'place' => '109',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Redon',
 'region' => '28',
 'place' => '112',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Meaux',
 'region' => '29',
 'place' => '114',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chartres',
 'region' => '29',
 'place' => '115',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Denis',
 'region' => '29',
 'place' => '116',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Verdun',
 'region' => '30',
 'place' => '119',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Laon',
 'region' => '31',
 'place' => '123',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Omer',
 'region' => '31',
 'place' => '124',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Clairvaux',
 'region' => '33',
 'place' => '132',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tours',
 'region' => '35',
 'place' => '137',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vezelay',
 'region' => '38',
 'place' => '152',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Issoire',
 'region' => '40',
 'place' => '160',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Benoit',
 'region' => '42',
 'place' => '168',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Auch',
 'region' => '43',
 'place' => '171',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Montauban',
 'region' => '43',
 'place' => '172',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Angouleme',
 'region' => '44',
 'place' => '173',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tulle',
 'region' => '44',
 'place' => '176',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vienne',
 'region' => '45',
 'place' => '178',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Autun',
 'region' => '45',
 'place' => '180',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Citeaux',
 'region' => '46',
 'place' => '184',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Maidstone',
 'region' => '48',
 'place' => '192',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Winchester',
 'region' => '49',
 'place' => '193',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Wells',
 'region' => '49',
 'place' => '195',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Wimborne',
 'region' => '49',
 'place' => '196',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bodmin',
 'region' => '50',
 'place' => '198',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint German',
 'region' => '50',
 'place' => '199',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Madron',
 'region' => '50',
 'place' => '200',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ipswich',
 'region' => '51',
 'place' => '202',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Croxton',
 'region' => '51',
 'place' => '204',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of York',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Durham',
 'region' => '52',
 'place' => '206',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lancaster',
 'region' => '52',
 'place' => '208',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Worcester',
 'region' => '53',
 'place' => '209',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Albans',
 'region' => '54',
 'place' => '216',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Leicester',
 'region' => '55',
 'place' => '220',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Stamford',
 'region' => '56',
 'place' => '224',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bangor',
 'region' => '57',
 'place' => '227',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Shrewsbury',
 'region' => '58',
 'place' => '230',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Glasbury',
 'region' => '58',
 'place' => '231',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Llanllugan',
 'region' => '58',
 'place' => '232',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tonsborg',
 'region' => '60',
 'place' => '238',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gimsoy',
 'region' => '60',
 'place' => '240',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Halsnoy',
 'region' => '61',
 'place' => '244',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Esrum',
 'region' => '62',
 'place' => '248',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Halmstad',
 'region' => '63',
 'place' => '251',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Herrevad',
 'region' => '63',
 'place' => '252',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Essenbaek',
 'region' => '64',
 'place' => '256',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Eskilstuna',
 'region' => '65',
 'place' => '260',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Visby',
 'region' => '66',
 'place' => '261',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nydala',
 'region' => '66',
 'place' => '264',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Jonkoping',
 'region' => '67',
 'place' => '267',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vadstena',
 'region' => '67',
 'place' => '268',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Haddington',
 'region' => '73',
 'place' => '292',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Jedburgh',
 'region' => '74',
 'place' => '296',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ayr',
 'region' => '75',
 'place' => '300',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Carlisle',
 'region' => '76',
 'place' => '301',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kirkcudbright',
 'region' => '76',
 'place' => '304',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Perth',
 'region' => '78',
 'place' => '309',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dunfermline',
 'region' => '78',
 'place' => '312',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Elgin',
 'region' => '79',
 'place' => '313',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Scone',
 'region' => '80',
 'place' => '319',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Arbroath',
 'region' => '80',
 'place' => '320',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rosemarkie',
 'region' => '81',
 'place' => '323',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dornoch',
 'region' => '81',
 'place' => '324',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Millmount',
 'region' => '82',
 'place' => '328',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Clogher',
 'region' => '83',
 'place' => '332',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kells',
 'region' => '84',
 'place' => '334',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Durrow',
 'region' => '84',
 'place' => '336',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Leyre',
 'region' => '87',
 'place' => '348',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of San Sebastian',
 'region' => '88',
 'place' => '349',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sobrarbe',
 'region' => '89',
 'place' => '356',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rueda',
 'region' => '90',
 'place' => '360',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sant Feliu de Guixols',
 'region' => '91',
 'place' => '364',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Monserrat',
 'region' => '92',
 'place' => '368',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Serra',
 'region' => '93',
 'place' => '372',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gandia',
 'region' => '94',
 'place' => '376',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of San Guillermo',
 'region' => '96',
 'place' => '383',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sahagun',
 'region' => '96',
 'place' => '384',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Santo Toribio',
 'region' => '97',
 'place' => '388',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of San Millan',
 'region' => '99',
 'place' => '396',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Coruna',
 'region' => '100',
 'place' => '399',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Alcobaca',
 'region' => '101',
 'place' => '404',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aveiro',
 'region' => '102',
 'place' => '408',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Silves',
 'region' => '106',
 'place' => '424',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Talavera',
 'region' => '110',
 'place' => '440',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ronda',
 'region' => '114',
 'place' => '456',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Milan',
 'region' => '115',
 'place' => '457',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cremona',
 'region' => '115',
 'place' => '460',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bobbio',
 'region' => '117',
 'place' => '468',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chioggia',
 'region' => '118',
 'place' => '471',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Belluno',
 'region' => '118',
 'place' => '472',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cesena',
 'region' => '119',
 'place' => '474',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aquileja',
 'region' => '121',
 'place' => '481',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Udine',
 'region' => '121',
 'place' => '483',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gemona',
 'region' => '121',
 'place' => '484',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ivrea',
 'region' => '122',
 'place' => '486',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Grosseto',
 'region' => '123',
 'place' => '492',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Spoleto',
 'region' => '124',
 'place' => '493',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Assissi',
 'region' => '124',
 'place' => '496',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tivoli',
 'region' => '125',
 'place' => '499',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Subiaco',
 'region' => '125',
 'place' => '500',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Volterra',
 'region' => '126',
 'place' => '504',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cassino',
 'region' => '127',
 'place' => '508',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cosenza',
 'region' => '129',
 'place' => '513',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vivarium',
 'region' => '129',
 'place' => '516',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Potenza',
 'region' => '130',
 'place' => '519',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Viggiano',
 'region' => '130',
 'place' => '520',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bosa',
 'region' => '131',
 'place' => '523',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Dolia',
 'region' => '132',
 'place' => '527',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cefalu',
 'region' => '133',
 'place' => '531',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sousse',
 'region' => '150',
 'place' => '598',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Benghazi',
 'region' => '156',
 'place' => '621',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Natrun',
 'region' => '158',
 'place' => '632',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Minya',
 'region' => '159',
 'place' => '633',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Siwa',
 'region' => '159',
 'place' => '634',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Anba Boula',
 'region' => '159',
 'place' => '636',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kharga',
 'region' => '160',
 'place' => '638',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zinaiqa',
 'region' => '160',
 'place' => '640',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Teczyn',
 'region' => '162',
 'place' => '646',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Salzberg',
 'region' => '162',
 'place' => '648',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Konin',
 'region' => '163',
 'place' => '651',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kalisz',
 'region' => '163',
 'place' => '652',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Plock',
 'region' => '164',
 'place' => '653',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Leslau',
 'region' => '164',
 'place' => '655',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Radomir',
 'region' => '164',
 'place' => '656',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bihac',
 'region' => '169',
 'place' => '674',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kotor',
 'region' => '169',
 'place' => '676',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nitra',
 'region' => '170',
 'place' => '679',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bartfeld',
 'region' => '173',
 'place' => '691',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Carta',
 'region' => '176',
 'place' => '704',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tismana',
 'region' => '177',
 'place' => '708',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kronstadt',
 'region' => '178',
 'place' => '712',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chisinau',
 'region' => '180',
 'place' => '720',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rila',
 'region' => '181',
 'place' => '724',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bukovo',
 'region' => '185',
 'place' => '738',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zica',
 'region' => '185',
 'place' => '740',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pec',
 'region' => '187',
 'place' => '747',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Berane',
 'region' => '187',
 'place' => '748',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Monastyrski',
 'region' => '188',
 'place' => '749',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Korosten',
 'region' => '192',
 'place' => '768',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mazyr',
 'region' => '193',
 'place' => '772',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tula',
 'region' => '196',
 'place' => '784',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ufa',
 'region' => '200',
 'place' => '800',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nizhny',
 'region' => '201',
 'place' => '804',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cherepovets',
 'region' => '202',
 'place' => '807',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kirillov',
 'region' => '202',
 'place' => '808',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Olgov',
 'region' => '204',
 'place' => '816',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Saint Jovan',
 'region' => '212',
 'place' => '848',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Patmos',
 'region' => '215',
 'place' => '860',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Akhalkalaki',
 'region' => '230',
 'place' => '920',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Balanjar',
 'region' => '231',
 'place' => '924',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kirants',
 'region' => '232',
 'place' => '928',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Arakelots',
 'region' => '234',
 'place' => '936',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nisibis',
 'region' => '235',
 'place' => '940',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Zavareh',
 'region' => '241',
 'place' => '964',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rasht',
 'region' => '243',
 'place' => '972',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]); 

//dukes
DB::table('titles')->insert([
 'title_name' => '[duke] of Mecklenburg',
 'region' => '4',
 'place' => '13',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Bavaria',
 'region' => '8',
 'place' => '29',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Austria',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Styria',
 'region' => '11',
 'place' => '41',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Brittany',
 'region' => '28',
 'place' => '109',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Normandy',
 'region' => '32',
 'place' => '125',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Prussia',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Estonia',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Lombardy',
 'region' => '115',
 'place' => '457',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Verona',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Emilia',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Tuscany',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Calabria',
 'region' => '129',
 'place' => '513',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Upper Silesia',
 'region' => '161',
 'place' => '641',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Lower Silesia',
 'region' => '161',
 'place' => '642',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Greater Poland',
 'region' => '163',
 'place' => '650',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Masovia',
 'region' => '164',
 'place' => '653',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Croatia',
 'region' => '169',
 'place' => '676',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Burgenland',
 'region' => '170',
 'place' => '679',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Vac',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Transsylvania',
 'region' => '176',
 'place' => '701',
 'religion' => 'Catholic',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Bosnia',
 'region' => '183',
 'place' => '729',
 'religion' => 'Serbian Orthodox',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Macedonia',
 'region' => '213',
 'place' => '849',
 'religion' => 'Greek Orthodox',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Cibyrrhaeot',
 'region' => '219',
 'place' => '874',
 'religion' => 'Greek Orthodox',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Abchasia',
 'region' => '229',
 'place' => '913',
 'religion' => 'Greek Orthodox',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Georgia',
 'region' => '230',
 'place' => '918',
 'religion' => 'Greek Orthodox',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => 'Muslim',
 'rank' => '9',
 'career' => 'fixed_nobility'
]); 

//margraviates
DB::table('titles')->insert([
 'title_name' => '[margrave] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Upper Saxony',
 'region' => '2',
 'place' => '6',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Thuringia',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Anhalt',
 'region' => '5',
 'place' => '18',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Styria',
 'region' => '11',
 'place' => '43',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Moravia',
 'region' => '17',
 'place' => '65',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Carinthia',
 'region' => '26',
 'place' => '101',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Carniola',
 'region' => '27',
 'place' => '105',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Cheshire',
 'region' => '53',
 'place' => '210',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Powys',
 'region' => '58',
 'place' => '229',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Shropshire',
 'region' => '58',
 'place' => '230',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Prussia',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Bernicia',
 'region' => '74',
 'place' => '294',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Cumbria',
 'region' => '76',
 'place' => '301',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Beira',
 'region' => '104',
 'place' => '416',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'fixed_nobility'
]); 

//castellans
DB::table('titles')->insert([
 'title_name' => '[castellan] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Nuremberg',
 'region' => '8',
 'place' => '32',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Karlstein',
 'region' => '16',
 'place' => '62',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pilsen',
 'region' => '16',
 'place' => '63',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Breda',
 'region' => '24',
 'place' => '94',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Antwerp',
 'region' => '24',
 'place' => '95',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ghent',
 'region' => '25',
 'place' => '98',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ypres',
 'region' => '25',
 'place' => '100',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rohan',
 'region' => '28',
 'place' => '110',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saint Omer',
 'region' => '31',
 'place' => '124',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chinon',
 'region' => '35',
 'place' => '139',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chatellerault',
 'region' => '37',
 'place' => '146',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gueret',
 'region' => '39',
 'place' => '155',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guildford',
 'region' => '47',
 'place' => '187',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bodmin',
 'region' => '50',
 'place' => '198',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Shrewsbury',
 'region' => '58',
 'place' => '230',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hamar',
 'region' => '60',
 'place' => '239',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Holm',
 'region' => '61',
 'place' => '242',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunbar',
 'region' => '73',
 'place' => '291',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunaverty',
 'region' => '77',
 'place' => '307',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Nairn',
 'region' => '79',
 'place' => '314',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Millmount',
 'region' => '82',
 'place' => '328',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Milan',
 'region' => '115',
 'place' => '457',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Glogau',
 'region' => '161',
 'place' => '642',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Teczyn',
 'region' => '162',
 'place' => '646',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tarnau',
 'region' => '162',
 'place' => '647',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalisz',
 'region' => '163',
 'place' => '652',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Radomir',
 'region' => '164',
 'place' => '656',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brest',
 'region' => '165',
 'place' => '657',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => 'Catholic',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kronstadt',
 'region' => '178',
 'place' => '712',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => 'Serbian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => 'Russian Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Surami',
 'region' => '230',
 'place' => '918',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => 'Greek Orthodox',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => 'Muslim',
 'rank' => '6',
 'career' => 'fixed_nobility'
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

//counts
DB::table('titles')->insert([
 'title_name' => '[count] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zutphen',
 'region' => '21',
 'place' => '82',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of East Frisia',
 'region' => '23',
 'place' => '90',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Flanders',
 'region' => '25',
 'place' => '98',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gorizia',
 'region' => '26',
 'place' => '103',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Picardy',
 'region' => '31',
 'place' => '121',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Touraine',
 'region' => '35',
 'place' => '137',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anjou',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Maine',
 'region' => '36',
 'place' => '143',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poitou',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nivernais',
 'region' => '38',
 'place' => '151',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bourbonnais',
 'region' => '39',
 'place' => '153',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Auvergne',
 'region' => '40',
 'place' => '157',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Guyenne',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Angoumois',
 'region' => '44',
 'place' => '173',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limousine',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dauphine',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Burgundy',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Surrey',
 'region' => '47',
 'place' => '187',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kent',
 'region' => '48',
 'place' => '192',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hampshire',
 'region' => '49',
 'place' => '193',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cornwall',
 'region' => '50',
 'place' => '197',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Norfolk',
 'region' => '51',
 'place' => '201',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Suffolk',
 'region' => '51',
 'place' => '202',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yorkshire',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lancashire',
 'region' => '52',
 'place' => '208',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Worcestershire',
 'region' => '53',
 'place' => '209',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cambridgeshire',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oxfordshire',
 'region' => '54',
 'place' => '215',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Warwickshire',
 'region' => '55',
 'place' => '218',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Leicestershire',
 'region' => '55',
 'place' => '220',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lincolnshire',
 'region' => '56',
 'place' => '221',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nottinghamshire',
 'region' => '56',
 'place' => '222',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Carmarthenshire',
 'region' => '59',
 'place' => '234',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Glamorgan',
 'region' => '59',
 'place' => '235',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vestfold',
 'region' => '60',
 'place' => '238',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oppland',
 'region' => '60',
 'place' => '239',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hordaland',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nordland',
 'region' => '61',
 'place' => '242',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rogaland',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Halmstad',
 'region' => '63',
 'place' => '251',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Uppland',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gotland',
 'region' => '66',
 'place' => '261',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jonkoping',
 'region' => '67',
 'place' => '267',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dunbarshire',
 'region' => '73',
 'place' => '291',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Northumbria',
 'region' => '74',
 'place' => '293',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Roxburghshire',
 'region' => '74',
 'place' => '296',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ayrshire',
 'region' => '75',
 'place' => '300',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Argyll',
 'region' => '77',
 'place' => '307',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Perthshire',
 'region' => '78',
 'place' => '309',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Stirlingshire',
 'region' => '78',
 'place' => '310',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Morayshire',
 'region' => '79',
 'place' => '313',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nairnshire',
 'region' => '79',
 'place' => '314',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aberdeenshire',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alicante',
 'region' => '94',
 'place' => '375',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aviles',
 'region' => '97',
 'place' => '386',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gijon',
 'region' => '97',
 'place' => '387',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Huelva',
 'region' => '108',
 'place' => '432',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Antquera',
 'region' => '111',
 'place' => '443',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alicante',
 'region' => '113',
 'place' => '451',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ronda',
 'region' => '114',
 'place' => '456',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olbia',
 'region' => '131',
 'place' => '522',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oristano',
 'region' => '132',
 'place' => '526',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tangiers',
 'region' => '136',
 'place' => '541',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ceuta',
 'region' => '136',
 'place' => '542',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouazzane',
 'region' => '136',
 'place' => '543',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tetouan',
 'region' => '136',
 'place' => '544',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anfa',
 'region' => '137',
 'place' => '545',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fedala',
 'region' => '137',
 'place' => '548',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouarzazate',
 'region' => '139',
 'place' => '554',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mogador',
 'region' => '139',
 'place' => '555',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Agadir',
 'region' => '140',
 'place' => '558',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tindouf',
 'region' => '140',
 'place' => '559',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tinmel',
 'region' => '140',
 'place' => '560',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Figuig',
 'region' => '141',
 'place' => '561',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tinghir',
 'region' => '141',
 'place' => '563',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mellila',
 'region' => '142',
 'place' => '567',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oran',
 'region' => '143',
 'place' => '569',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mostaganem',
 'region' => '143',
 'place' => '570',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mascara',
 'region' => '143',
 'place' => '572',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Djelfa',
 'region' => '144',
 'place' => '573',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghardaia',
 'region' => '144',
 'place' => '575',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Biskra',
 'region' => '145',
 'place' => '578',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouargla',
 'region' => '145',
 'place' => '579',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Touggourt',
 'region' => '145',
 'place' => '580',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Algiers',
 'region' => '146',
 'place' => '581',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Setif',
 'region' => '147',
 'place' => '587',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hammamet',
 'region' => '149',
 'place' => '595',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bizerte',
 'region' => '149',
 'place' => '596',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sousse',
 'region' => '150',
 'place' => '598',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sfax',
 'region' => '150',
 'place' => '599',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gabes',
 'region' => '151',
 'place' => '601',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gafsa',
 'region' => '151',
 'place' => '602',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kebili',
 'region' => '151',
 'place' => '603',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghadames',
 'region' => '152',
 'place' => '605',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghat',
 'region' => '152',
 'place' => '608',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tripoli',
 'region' => '153',
 'place' => '609',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Misrata',
 'region' => '153',
 'place' => '611',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Germa',
 'region' => '154',
 'place' => '613',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kufra',
 'region' => '155',
 'place' => '617',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Benghazi',
 'region' => '156',
 'place' => '621',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rosetta',
 'region' => '157',
 'place' => '626',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mansoura',
 'region' => '157',
 'place' => '628',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Helwan',
 'region' => '158',
 'place' => '630',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fayum',
 'region' => '158',
 'place' => '631',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Minya',
 'region' => '159',
 'place' => '633',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Farafra',
 'region' => '159',
 'place' => '635',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Asyut',
 'region' => '160',
 'place' => '637',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aswan',
 'region' => '160',
 'place' => '639',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kauen',
 'region' => '166',
 'place' => '663',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vikla',
 'region' => '167',
 'place' => '667',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bihac',
 'region' => '169',
 'place' => '674',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Egerszeg',
 'region' => '171',
 'place' => '683',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kecskemet',
 'region' => '174',
 'place' => '694',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vukovar',
 'region' => '175',
 'place' => '698',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => 'Catholic',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Targu Jiu',
 'region' => '177',
 'place' => '705',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Constanta',
 'region' => '179',
 'place' => '713',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Odessa',
 'region' => '180',
 'place' => '719',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sofia',
 'region' => '181',
 'place' => '721',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Krusevac',
 'region' => '185',
 'place' => '739',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pristina',
 'region' => '187',
 'place' => '745',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => 'Serbian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poltava',
 'region' => '188',
 'place' => '751',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Slutsk',
 'region' => '192',
 'place' => '767',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ostrov',
 'region' => '198',
 'place' => '791',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ladoga',
 'region' => '199',
 'place' => '795',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ufa',
 'region' => '200',
 'place' => '800',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nizhny',
 'region' => '201',
 'place' => '804',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olgov',
 'region' => '204',
 'place' => '816',
 'religion' => 'Russian Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraibatu',
 'region' => '205',
 'place' => '818',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraiberke',
 'region' => '205',
 'place' => '819',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khiva',
 'region' => '206',
 'place' => '822',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraidzhuk',
 'region' => '206',
 'place' => '823',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Edirne',
 'region' => '207',
 'place' => '827',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Thebes',
 'region' => '209',
 'place' => '835',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Corinth',
 'region' => '210',
 'place' => '839',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Durres',
 'region' => '212',
 'place' => '846',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Berat',
 'region' => '213',
 'place' => '852',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sardes',
 'region' => '216',
 'place' => '864',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cotyaeum',
 'region' => '220',
 'place' => '879',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kastamuni',
 'region' => '221',
 'place' => '882',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amasra',
 'region' => '221',
 'place' => '883',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Claudiopolis',
 'region' => '221',
 'place' => '884',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Garsaura',
 'region' => '223',
 'place' => '890',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Magida',
 'region' => '223',
 'place' => '891',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kerasous',
 'region' => '224',
 'place' => '896',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Romanoupolis',
 'region' => '227',
 'place' => '908',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Albistan',
 'region' => '228',
 'place' => '911',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tavium',
 'region' => '228',
 'place' => '912',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poti',
 'region' => '229',
 'place' => '914',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Akhalkalaki',
 'region' => '230',
 'place' => '920',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Derbent',
 'region' => '231',
 'place' => '921',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baku',
 'region' => '231',
 'place' => '922',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mingecevir',
 'region' => '231',
 'place' => '923',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Balanjar',
 'region' => '231',
 'place' => '924',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yerevan',
 'region' => '232',
 'place' => '926',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghars',
 'region' => '232',
 'place' => '927',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khoy',
 'region' => '233',
 'place' => '930',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ordubad',
 'region' => '233',
 'place' => '931',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tatvan',
 'region' => '234',
 'place' => '933',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Manzikert',
 'region' => '234',
 'place' => '934',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Archesh',
 'region' => '236',
 'place' => '943',
 'religion' => 'Greek Orthodox',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Beyhaq',
 'region' => '237',
 'place' => '946',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mashhad',
 'region' => '237',
 'place' => '947',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Konjikala',
 'region' => '237',
 'place' => '948',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kashmar',
 'region' => '238',
 'place' => '949',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gonabad',
 'region' => '238',
 'place' => '950',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tabas',
 'region' => '238',
 'place' => '951',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Birjand',
 'region' => '238',
 'place' => '952',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kerman',
 'region' => '239',
 'place' => '953',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rafsanjan',
 'region' => '239',
 'place' => '955',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sirjan',
 'region' => '239',
 'place' => '956',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bushire',
 'region' => '240',
 'place' => '958',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yasuj',
 'region' => '240',
 'place' => '960',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yazd',
 'region' => '241',
 'place' => '963',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zavareh',
 'region' => '241',
 'place' => '964',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kashan',
 'region' => '242',
 'place' => '966',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Qazvin',
 'region' => '242',
 'place' => '968',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Astarabad',
 'region' => '243',
 'place' => '969',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rasht',
 'region' => '243',
 'place' => '972',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tabriz',
 'region' => '244',
 'place' => '973',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zanjan',
 'region' => '244',
 'place' => '975',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ardabil',
 'region' => '244',
 'place' => '976',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kermanshah',
 'region' => '245',
 'place' => '978',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hadjar',
 'region' => '246',
 'place' => '983',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Taif',
 'region' => '247',
 'place' => '986',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jeddah',
 'region' => '247',
 'place' => '987',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dedan',
 'region' => '248',
 'place' => '989',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tayma',
 'region' => '248',
 'place' => '991',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Maan',
 'region' => '248',
 'place' => '992',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hebron',
 'region' => '249',
 'place' => '995',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nazareth',
 'region' => '250',
 'place' => '998',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bosra',
 'region' => '251',
 'place' => '1001',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Irbid',
 'region' => '251',
 'place' => '1003',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Palmyra',
 'region' => '252',
 'place' => '1007',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Homs',
 'region' => '253',
 'place' => '1009',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Qusayr',
 'region' => '253',
 'place' => '1010',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Salamiyah',
 'region' => '253',
 'place' => '1011',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tartous',
 'region' => '254',
 'place' => '1014',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alexandretta',
 'region' => '255',
 'place' => '1018',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Idlib',
 'region' => '255',
 'place' => '1019',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bab',
 'region' => '256',
 'place' => '1023',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Safira',
 'region' => '256',
 'place' => '1024',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zor',
 'region' => '257',
 'place' => '1028',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Erbil',
 'region' => '258',
 'place' => '1029',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kirkuk',
 'region' => '258',
 'place' => '1031',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Telafer',
 'region' => '258',
 'place' => '1032',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tikrit',
 'region' => '259',
 'place' => '1034',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anbar',
 'region' => '259',
 'place' => '1035',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samarra',
 'region' => '259',
 'place' => '1036',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samawah',
 'region' => '260',
 'place' => '1037',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '7',
 'career' => 'fixed_nobility'
]); 

//barons
DB::table('titles')->insert([
 'title_name' => '[baron] of Chemnitz',
 'region' => '2',
 'place' => '8',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alvor',
 'region' => '106',
 'place' => '423',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Motril',
 'region' => '112',
 'place' => '447',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Marbella',
 'region' => '114',
 'place' => '455',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Cefalu',
 'region' => '133',
 'place' => '531',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sefrou',
 'region' => '138',
 'place' => '550',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rachidiya',
 'region' => '141',
 'place' => '564',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oujda',
 'region' => '142',
 'place' => '566',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Taourirt',
 'region' => '142',
 'place' => '568',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Laghouat',
 'region' => '144',
 'place' => '574',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Khaled',
 'region' => '145',
 'place' => '577',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Medea',
 'region' => '146',
 'place' => '582',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Achir',
 'region' => '146',
 'place' => '584',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bejaia',
 'region' => '147',
 'place' => '585',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jijel',
 'region' => '147',
 'place' => '586',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Eulma',
 'region' => '147',
 'place' => '588',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Annaba',
 'region' => '148',
 'place' => '589',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jendouba',
 'region' => '148',
 'place' => '591',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kaf',
 'region' => '148',
 'place' => '592',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zaghouan',
 'region' => '149',
 'place' => '594',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Mahdia',
 'region' => '150',
 'place' => '600',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tozeur',
 'region' => '151',
 'place' => '604',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tamanrasset',
 'region' => '152',
 'place' => '607',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zuwara',
 'region' => '153',
 'place' => '612',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sabha',
 'region' => '154',
 'place' => '614',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zouila',
 'region' => '154',
 'place' => '615',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Qatrun',
 'region' => '154',
 'place' => '616',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Awjila',
 'region' => '155',
 'place' => '619',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Marada',
 'region' => '155',
 'place' => '620',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Derna',
 'region' => '156',
 'place' => '622',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tobruk',
 'region' => '156',
 'place' => '623',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Siwa',
 'region' => '159',
 'place' => '634',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kharga',
 'region' => '160',
 'place' => '638',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kobryn',
 'region' => '165',
 'place' => '659',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Wolkowysk',
 'region' => '165',
 'place' => '660',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bucharest',
 'region' => '178',
 'place' => '710',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harsova',
 'region' => '179',
 'place' => '714',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tulcea',
 'region' => '179',
 'place' => '715',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Calarasi',
 'region' => '179',
 'place' => '716',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Chisinau',
 'region' => '180',
 'place' => '720',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Stip',
 'region' => '181',
 'place' => '723',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oleshia',
 'region' => '188',
 'place' => '752',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Cherkasy',
 'region' => '189',
 'place' => '756',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Borispyl',
 'region' => '190',
 'place' => '758',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Yuriev',
 'region' => '190',
 'place' => '759',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Korosten',
 'region' => '192',
 'place' => '768',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lyubech',
 'region' => '193',
 'place' => '770',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Orsha',
 'region' => '194',
 'place' => '774',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Barysaw',
 'region' => '194',
 'place' => '776',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Vyazma',
 'region' => '195',
 'place' => '779',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kolomna',
 'region' => '196',
 'place' => '782',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kasimov',
 'region' => '196',
 'place' => '783',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tula',
 'region' => '196',
 'place' => '784',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zvenigorod',
 'region' => '197',
 'place' => '787',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kazan',
 'region' => '200',
 'place' => '799',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Suzdal',
 'region' => '201',
 'place' => '803',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rybinsk',
 'region' => '202',
 'place' => '806',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oryol',
 'region' => '203',
 'place' => '809',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lipetsk',
 'region' => '203',
 'place' => '812',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Redosto',
 'region' => '207',
 'place' => '826',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Corlu',
 'region' => '207',
 'place' => '828',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Stratonicea',
 'region' => '208',
 'place' => '830',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Prilep',
 'region' => '213',
 'place' => '851',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lemnos',
 'region' => '214',
 'place' => '854',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Samos',
 'region' => '215',
 'place' => '858',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kios',
 'region' => '217',
 'place' => '866',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ousakeion',
 'region' => '218',
 'place' => '872',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Makre',
 'region' => '219',
 'place' => '876',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Gordion',
 'region' => '220',
 'place' => '878',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dorylaeum',
 'region' => '220',
 'place' => '880',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Muskara',
 'region' => '223',
 'place' => '892',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Riza',
 'region' => '224',
 'place' => '895',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Corum',
 'region' => '226',
 'place' => '903',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Takat',
 'region' => '226',
 'place' => '904',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harput',
 'region' => '227',
 'place' => '906',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Berkri',
 'region' => '236',
 'place' => '942',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ostan',
 'region' => '236',
 'place' => '944',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sofian',
 'region' => '244',
 'place' => '974',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_barony'
]); 

//lords
DB::table('titles')->insert([
 'title_name' => '[lord] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Verin',
 'region' => '103',
 'place' => '411',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Talavera',
 'region' => '110',
 'place' => '440',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Natrun',
 'region' => '158',
 'place' => '632',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Anba Boula',
 'region' => '159',
 'place' => '636',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zinaiqa',
 'region' => '160',
 'place' => '640',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rovigno',
 'region' => '167',
 'place' => '666',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kassow',
 'region' => '173',
 'place' => '692',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tismana',
 'region' => '177',
 'place' => '708',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rila',
 'region' => '181',
 'place' => '724',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukovo',
 'region' => '185',
 'place' => '738',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zica',
 'region' => '185',
 'place' => '740',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Pec',
 'region' => '187',
 'place' => '747',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Berane',
 'region' => '187',
 'place' => '748',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Monastyrski',
 'region' => '188',
 'place' => '749',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Mazyr',
 'region' => '193',
 'place' => '772',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Sergiev',
 'region' => '197',
 'place' => '786',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Cherepovets',
 'region' => '202',
 'place' => '807',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kirillov',
 'region' => '202',
 'place' => '808',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Saint Jovan',
 'region' => '212',
 'place' => '848',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Patmos',
 'region' => '215',
 'place' => '860',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kirants',
 'region' => '232',
 'place' => '928',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Arakelots',
 'region' => '234',
 'place' => '936',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Nisibis',
 'region' => '235',
 'place' => '940',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_lordship'
]); 

//knights hospitaller commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Magdeburg',
 'region' => '3',
 'place' => '9',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Graz',
 'region' => '11',
 'place' => '41',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Zurich',
 'region' => '14',
 'place' => '54',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Emden',
 'region' => '23',
 'place' => '90',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Amiens',
 'region' => '31',
 'place' => '121',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lincoln',
 'region' => '56',
 'place' => '221',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Santo Domingo de Silos',
 'region' => '99',
 'place' => '394',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Santarem',
 'region' => '101',
 'place' => '403',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]); 

//knights templar commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mans',
 'region' => '36',
 'place' => '143',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Scarborough',
 'region' => '52',
 'place' => '207',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Wexford',
 'region' => '84',
 'place' => '333',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marsala',
 'region' => '133',
 'place' => '532',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'commander_templar'
]); 

//teutonic knights commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pilten',
 'region' => '69',
 'place' => '273',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Koningsberg',
 'region' => '70',
 'place' => '280',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'commander_teutonic'
]); 

//admirals

//marshalls

//chancellors

//stewards

//chamberlains

//mayors, sheriffs and reeves

//hostlers and innkeepers
	
	}
}
