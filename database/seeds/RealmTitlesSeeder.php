<?php

use Illuminate\Database\Seeder;

class RealmTitlesSeeder extends Seeder
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
		
		//emperors
		DB::table('titles')->insert([
			'title_name' => 'Holy Roman [emperor]',
			'region' => '8',
			'place' => '29',
			'religion' => '1',
			'rank' => '12',
			'career' => 'elective_empire'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Byzantine [emperor]',
			'region' => '207',
			'place' => '825',
			'religion' => '4',
			'rank' => '12',
			'career' => 'fixed_empire'
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

		//papacy
		DB::table('titles')->insert([
			'title_name' => '[pope]',
			'region' => '125',
			'place' => '497',
			'religion' => '1',
			'rank' => '11',
			'career' => 'papal_states'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[pope]',
			'region' => '125',
			'place' => '497',
			'religion' => '1',
			'rank' => '11',
			'career' => 'elective_papacy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Rome',
			'region' => '125',
			'place' => '497',
			'religion' => '1',
			'rank' => '10',
			'career' => 'papal_states'
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

		//chivalric guilds
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Garter',
			'region' => '47',
			'place' => '186',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Star',
			'region' => '29',
			'place' => '113',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order Saint George',
			'region' => '172',
			'place' => '685',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Order of the Golden Fleece',
			'region' => '25',
			'place' => '97',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
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
		
		//scandinavian kingdoms
		DB::table('titles')->insert([
			'title_name' => '[king] of Denmark',
			'region' => '62',
			'place' => '245',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Norway',
			'region' => '60',
			'place' => '237',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Sweden',
			'region' => '65',
			'place' => '257',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);		
		
		//british kingdoms
		DB::table('titles')->insert([
			'title_name' => '[king] of England',
			'region' => '47',
			'place' => '185',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Scotland',
			'region' => '73',
			'place' => '289',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Wales',
			'region' => '57',
			'place' => '225',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	
		
		//irish kingdoms
		DB::table('titles')->insert([
			'title_name' => '[highking] of Ireland',
			'region' => '82',
			'place' => '326',
			'religion' => '1',
			'rank' => '12',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Ulster',
			'region' => '83',
			'place' => '329',
			'religion' => '1',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Meath',
			'region' => '82',
			'place' => '325',
			'religion' => '1',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Leinster',
			'region' => '84',
			'place' => '333',
			'religion' => '1',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Munster',
			'region' => '85',
			'place' => '337',
			'religion' => '1',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Connaught',
			'region' => '86',
			'place' => '343',
			'religion' => '1',
			'rank' => '11',
			'career' => 'tanistry_royalty'
		]);
		
		//frankish
		DB::table('titles')->insert([
			'title_name' => '[king] of France',
			'region' => '29',
			'place' => '113',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);		
		
		//holy roman empire
		DB::table('titles')->insert([
			'title_name' => '[king] of Burgundy',
			'region' => '41',
			'place' => '161',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Germany',
			'region' => '19',
			'place' => '74',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[archduke] of Austria',
			'region' => '10',
			'place' => '37',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Italy',
			'region' => '115',
			'place' => '459',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Bohemia',
			'region' => '16',
			'place' => '61',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		//teutonic order state
		DB::table('titles')->insert([
			'title_name' => '[duke] of Estonia',
			'region' => '72',
			'place' => '285',
			'religion' => '1',
			'rank' => '11',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[duke] of Prussia',
			'region' => '70',
			'place' => '280',
			'religion' => '1',
			'rank' => '11',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince-archbishop] of Livonia',
			'region' => '68',
			'place' => '269',
			'religion' => '1',
			'rank' => '11',
			'career' => 'confederate_ecclessiastical'
		]);
		
		//southern italy
		DB::table('titles')->insert([
			'title_name' => '[king] of Naples',
			'region' => '127',
			'place' => '505',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);

		DB::table('titles')->insert([
			'title_name' => '[king] of Sicily',
			'region' => '133',
			'place' => '529',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Sardinia',
			'region' => '131',
			'place' => '521',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Taranto',
			'region' => '128',
			'place' => '509',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Benevento',
			'region' => '130',
			'place' => '517',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		//croatian hungarian union
		DB::table('titles')->insert([
			'title_name' => '[king] of Hungary',
			'region' => '172',
			'place' => '685',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Croatia',
			'region' => '169',
			'place' => '673',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		//polish lithuanian commonwealth
		DB::table('titles')->insert([
			'title_name' => '[king] of Poland',
			'region' => '162',
			'place' => '645',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[grandduke] of Lithuania',
			'region' => '166',
			'place' => '661',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		//iberian peninsula
		DB::table('titles')->insert([
			'title_name' => '[king] of Navarre',
			'region' => '87',
			'place' => '345',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Aragon',
			'region' => '89',
			'place' => '353',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Castile',
			'region' => '98',
			'place' => '389',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Leon',
			'region' => '96',
			'place' => '381',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Galicia',
			'region' => '100',
			'place' => '397',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Portugal',
			'region' => '101',
			'place' => '401',
			'religion' => '1',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Catalonia',
			'region' => '92',
			'place' => '365',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Asturias',
			'region' => '97',
			'place' => '385',
			'religion' => '1',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);

		//andalucian taifas
		DB::table('titles')->insert([
			'title_name' => '[king] of Andalucia',
			'region' => '107',
			'place' => '425',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);				
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Zaragoza',
			'region' => '90',
			'place' => '357',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of the Baleares',
			'region' => '95',
			'place' => '377',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Valencia',
			'region' => '93',
			'place' => '369',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Denia',
			'region' => '94',
			'place' => '373',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Murcia',
			'region' => '113',
			'place' => '449',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Granada',
			'region' => '111',
			'place' => '441',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Almeria',
			'region' => '112',
			'place' => '445',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Malaga',
			'region' => '114',
			'place' => '453',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Sevilla',
			'region' => '108',
			'place' => '429',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Badajoz',
			'region' => '109',
			'place' => '433',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Toledo',
			'region' => '110',
			'place' => '437',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Algarve',
			'region' => '106',
			'place' => '421',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		//north africa
		DB::table('titles')->insert([
			'title_name' => '[king] of Fez',
			'region' => '138',
			'place' => '549',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Marrakesh',
			'region' => '139',
			'place' => '553',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);

		DB::table('titles')->insert([
			'title_name' => '[king] of Kairouan',
			'region' => '150',
			'place' => '597',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Egypt',
			'region' => '158',
			'place' => '629',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Ifni',
			'region' => '140',
			'place' => '557',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Figuig',
			'region' => '141',
			'place' => '562',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//middle east
		DB::table('titles')->insert([
			'title_name' => '[prince] of Najd',
			'region' => '246',
			'place' => '981',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Hejaz',
			'region' => '247',
			'place' => '988',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[king] of Syria',
			'region' => '252',
			'place' => '1005',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Jerusalem',
			'region' => '249',
			'place' => '993',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Antioch',
			'region' => '255',
			'place' => '1017',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Isfahan',
			'region' => '241',
			'place' => '961',
			'religion' => '5',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Persia',
			'region' => '240',
			'place' => '957',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//steppes
		DB::table('titles')->insert([
			'title_name' => '[king] of Kwarezm',
			'region' => '206',
			'place' => '821',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Khazaria',
			'region' => '205',
			'place' => '817',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//georgia and armenia
		DB::table('titles')->insert([
			'title_name' => '[king] of Kars',
			'region' => '232',
			'place' => '925',
			'religion' => '4',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[king] of Georgia',
			'region' => '230',
			'place' => '917',
			'religion' => '4',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Azerbaijan',
			'region' => '233',
			'place' => '929',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Armenia',
			'region' => '234',
			'place' => '935',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Mardin',
			'region' => '235',
			'place' => '937',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Vaspurakan',
			'region' => '235',
			'place' => '939',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//byzantine empire
		DB::table('titles')->insert([
			'title_name' => '[king] of Thrace',
			'region' => '207',
			'place' => '825',
			'religion' => '4',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[grandduke] of Trebizond',
			'region' => '224',
			'place' => '893',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Amid',
			'region' => '227',
			'place' => '905',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Taron',
			'region' => '227',
			'place' => '907',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);				
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Peleponessos',
			'region' => '210',
			'place' => '837',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Hellas',
			'region' => '209',
			'place' => '833',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Icosium',
			'region' => '218',
			'place' => '869',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Anatolia',
			'region' => '218',
			'place' => '870',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Karaman',
			'region' => '218',
			'place' => '871',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Smyrna',
			'region' => '215',
			'place' => '857',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Thracesia',
			'region' => '216',
			'place' => '861',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Coracesium',
			'region' => '219',
			'place' => '873',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Ottoman',
			'region' => '217',
			'place' => '867',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Opsicia',
			'region' => '217',
			'place' => '865',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Cappadocia',
			'region' => '223',
			'place' => '889',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Sebasteia',
			'region' => '228',
			'place' => '909',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Paphlagonia',
			'region' => '221',
			'place' => '881',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Canik',
			'region' => '226',
			'place' => '902',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[prince] of Nicopolis',
			'region' => '211',
			'place' => '841',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[prince] of Epirus',
			'region' => '212',
			'place' => '845',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Thessaloniki',
			'region' => '208',
			'place' => '829',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Macedonia',
			'region' => '208',
			'place' => '831',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Bucellaria',
			'region' => '220',
			'place' => '877',
			'religion' => '4',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		//balkans
		DB::table('titles')->insert([
			'title_name' => '[king] of Bulgaria',
			'region' => '182',
			'place' => '727',
			'religion' => '2',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Raskha',
			'region' => '185',
			'place' => '737',
			'religion' => '2',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Wallachia',
			'region' => '177',
			'place' => '707',
			'religion' => '2',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Moldova',
			'region' => '180',
			'place' => '717',
			'religion' => '2',
			'rank' => '11',
			'career' => 'fixed_royalty'
		]);	

		//kievan rus
		DB::table('titles')->insert([
			'title_name' => '[prince] of Halych',
			'region' => '191',
			'place' => '761',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Pereyaslav',
			'region' => '189',
			'place' => '753',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Kiev',
			'region' => '190',
			'place' => '757',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Tchernigov',
			'region' => '193',
			'place' => '769',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Turov',
			'region' => '192',
			'place' => '765',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Smolensk',
			'region' => '195',
			'place' => '777',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Polotsk',
			'region' => '194',
			'place' => '773',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);		

		DB::table('titles')->insert([
			'title_name' => '[prince] of Ryazan',
			'region' => '196',
			'place' => '781',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Muscowy',
			'region' => '197',
			'place' => '785',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[prince] of Pleskov',
			'region' => '198',
			'place' => '789',
			'religion' => '3',
			'rank' => '10',
			'career' => 'fixed_royalty'
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

		//caliphs
		DB::table('titles')->insert([
			'title_name' => 'Abbasid [caliph]',
			'region' => '259',
			'place' => '1033',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[caliph] of Al Andalus',
			'region' => '107',
			'place' => '425',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Fatimid [caliph]',
			'region' => '158',
			'place' => '629',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Almohad [caliph]',
			'region' => '139',
			'place' => '553',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_caliphate'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Rashidun [caliph]',
			'region' => '247',
			'place' => '988',
			'religion' => '5',
			'rank' => '11',
			'career' => 'fixed_caliphate'
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

		//crusader grandmasters
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Teutonic Order',
			'region' => '70',
			'place' => '277',
			'religion' => '1',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Knights Hospitaller',
			'region' => '249',
			'place' => '993',
			'religion' => '1',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[grandmaster] of the Knights Templar',
			'region' => '249',
			'place' => '993',
			'religion' => '1',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
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

		//monastic grandmasters
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Augustinian Order',
			'region' => '125',
			'place' => '497',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Benedictine Order',
			'region' => '125',
			'place' => '500',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Carmelite Order',
			'region' => '48',
			'place' => '192',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Cistercian Order',
			'region' => '33',
			'place' => '132',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Grand Master of the Franciscan Order',
			'region' => '124',
			'place' => '496',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
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
		
		
		//maritime republics
		DB::table('titles')->insert([
			'title_name' => '[doge] of Venice',
			'region' => '118',
			'place' => '469',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Genoa',
			'region' => '117',
			'place' => '465',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Noli',
			'region' => '117',
			'place' => '466',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Gaeta',
			'region' => '127',
			'place' => '506',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Pisa',
			'region' => '126',
			'place' => '501',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[rector] of Ragusa',
			'region' => '168',
			'place' => '669',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Amalfi',
			'region' => '127',
			'place' => '507',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[doge] of Ancona',
			'region' => '124',
			'place' => '495',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
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
		
		//merchant republics
		DB::table('titles')->insert([
			'title_name' => '[gonfalonier] of Florence',
			'region' => '123',
			'place' => '489',
			'religion' => '1',
			'rank' => '10',
			'career' => 'merchant_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[gonfalonier] of Lucca',
			'region' => '126',
			'place' => '503',
			'religion' => '1',
			'rank' => '10',
			'career' => 'merchant_republic'
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
		
		//novgorod republic
		DB::table('titles')->insert([
			'title_name' => '[prince] of Novgorod',
			'region' => '199',
			'place' => '793',
			'religion' => '3',
			'rank' => '10',
			'career' => 'novgorod_republic'
		]);

    }
}
