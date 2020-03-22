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
			'title_name' => 'Holy Roman Emperor',
			'region' => '8',
			'place' => '29',
			'religion' => 'Catholic',
			'rank' => '12',
			'career' => 'gentry'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Byzantine Emperor',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '12',
			'career' => 'gentry'
		]);
		
		//popes and patriarchs
		DB::table('titles')->insert([
			'title_name' => 'Pope',
			'region' => '125',
			'place' => '497',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Aquileja',
			'region' => '121',
			'place' => '481',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Kiev',
			'region' => '190',
			'place' => '757',
			'religion' => 'Russian Orthodox',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Constantinople',
			'region' => '207',
			'place' => '825',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of All Bulgaria',
			'region' => '182',
			'place' => '726',
			'religion' => 'Serbian Orthodox',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Antioch',
			'region' => '255',
			'place' => '1017',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Jerusalem',
			'region' => '249',
			'place' => '993',
			'religion' => 'Greek Orthodox',
			'rank' => '6',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Alexandria',
			'region' => '157',
			'place' => '625',
			'religion' => 'Greek Orthodox',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);		
		
		//caliphs and sharifs
		DB::table('titles')->insert([
			'title_name' => 'Abbasid Caliphate',
			'region' => '259',
			'place' => '1053',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Caliphate of Al Andalus',
			'region' => '107',
			'place' => '425',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Fatimid Caliphate',
			'region' => '158',
			'place' => '629',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Almohad Caliphate',
			'region' => '139',
			'place' => '553',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Sharifate of Mecca',
			'region' => '247',
			'place' => '985',
			'religion' => 'Muslim',
			'rank' => '9',
			'career' => 'ecclessiastical'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Rashidun Caliphate',
			'region' => '247',
			'place' => '988',
			'religion' => 'Muslim',
			'rank' => '11',
			'career' => 'ecclessiastical'
		]);
		
		//grandmasters
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Teutonic Order',
			'region' => '70',
			'place' => '277',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Knights Hospitaller',
			'region' => '249',
			'place' => '993',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Knights Templar',
			'region' => '249',
			'place' => '993',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'crusader'
		]);
		
		//maritime republics
		DB::table('titles')->insert([
			'title_name' => 'Doge of Venice',
			'region' => '118',
			'place' => '469',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Genoa',
			'region' => '117',
			'place' => '465',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Noli',
			'region' => '117',
			'place' => '466',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Gaeta',
			'region' => '127',
			'place' => '506',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Pisa',
			'region' => '126',
			'place' => '501',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Rector of Ragusa',
			'region' => '168',
			'place' => '669',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Amalfi',
			'region' => '127',
			'place' => '507',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Doge of Ancona',
			'region' => '124',
			'place' => '495',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		//merchant republics
		DB::table('titles')->insert([
			'title_name' => 'Gonfalonier of Florence',
			'region' => '123',
			'place' => '489',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Gonfalonier of Lucca',
			'region' => '126',
			'place' => '503',
			'religion' => 'Catholic',
			'rank' => '10',
			'career' => 'burgher'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => 'Prince of Novgorod',
			'region' => '199',
			'place' => '793',
			'religion' => 'Russian Orthodox',
			'rank' => '10',
			'career' => 'burgher'
		]);
		
		//trade leagues
		DB::table('titles')->insert([
			'title_name' => 'Alderman of the Hanseatic League',
			'region' => '4',
			'place' => '15',
			'religion' => 'Catholic',
			'rank' => '5',
			'career' => 'burgher'
		]);
		
		//kingdoms
		DB::table('titles')->insert([
			'title_name' => 'King of Denmark',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Norway',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Sweden',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);		
		
		
		DB::table('titles')->insert([
			'title_name' => 'King of England',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Scotland',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Prince of Wales',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'High King of Ireland',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of France',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);		
		
		DB::table('titles')->insert([
			'title_name' => 'King of Burgundy',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Italy',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Naples',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of Bohemia',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);	

		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'King of',
			'region' => '1',
			'place' => '1',
			'religion' => 'Catholic',
			'rank' => '11',
			'career' => ''
		]);			
	
	}
}
