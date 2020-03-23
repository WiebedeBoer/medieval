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
	
	}
}
