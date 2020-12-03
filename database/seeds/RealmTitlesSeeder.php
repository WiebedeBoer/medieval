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

		//empires
		DB::table('titles')->insert([
			'title_name' => 'Holy Roman Empire',
			'title_category' => 'emperor',
			'region' => '8',
			'place' => '29',
			'quarter' => '18517',
			'religion' => '1',
			'rank' => '12',
			'career' => 'elective_empire'
		]);
		DB::table('titles')->insert([
			'title_name' => 'Byzantine Empire',
			'title_category' => 'emperor',
			'region' => '207',
			'place' => '825',
			'quarter' => '19313',
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
			'title_name' => 'Papal States',
			'title_category' => 'pope',
			'region' => '125',
			'place' => '497',
			'quarter' => '18985',
			'religion' => '1',
			'rank' => '11',
			'career' => 'elective_papacy'
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

		//patriarchs
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Aquileja',
			'title_category' => 'patriarch',
			'region' => '121',
			'place' => '481',
			'quarter' => '17650',
			'religion' => '1',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Kiev',
			'title_category' => 'patriarch',
			'region' => '190',
			'place' => '757',
			'quarter' => '17926',
			'religion' => '3',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Constantinople',
			'title_category' => 'patriarch',
			'region' => '207',
			'place' => '825',
			'quarter' => '17994',
			'religion' => '4',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Bulgaria',
			'title_category' => 'patriarch',
			'region' => '182',
			'place' => '726',
			'quarter' => '17895',
			'religion' => '2',
			'rank' => '6',
			'career' => 'fixed_patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Antioch',
			'title_category' => 'patriarch',
			'region' => '255',
			'place' => '1017',
			'quarter' => '18186',
			'religion' => '4',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Jerusalem',
			'title_category' => 'patriarch',
			'region' => '249',
			'place' => '993',
			'quarter' => '18162',
			'religion' => '4',
			'rank' => '6',
			'career' => 'patriarchy'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Patriarch of Alexandria',
			'title_category' => 'patriarch',
			'region' => '157',
			'place' => '625',
			'quarter' => '17794',
			'religion' => '4',
			'rank' => '6',
			'career' => 'patriarchy'
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

			//holy roman empire
			DB::table('titles')->insert([
				'title_name' => 'Bohemia',
				'title_category' => 'king',
				'region' => '16',
				'place' => '61',
				'quarter' => '18549',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Germany',
				'title_category' => 'king',
				'region' => '19',
				'place' => '74',
				'quarter' => '18562',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Austria',
				'title_category' => 'archduke',
				'region' => '10',
				'place' => '37',
				'quarter' => '18525',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);	
			DB::table('titles')->insert([
				'title_name' => 'Burgundy',
				'title_category' => 'king',
				'region' => '41',
				'place' => '161',
				'quarter' => '18649',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Italy',
				'title_category' => 'king',
				'region' => '115',
				'place' => '459',
				'quarter' => '18947',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//france
			DB::table('titles')->insert([
				'title_name' => 'France',
				'title_category' => 'king',
				'region' => '29',
				'place' => '113',
				'quarter' => '18601',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//british isles
			DB::table('titles')->insert([
				'title_name' => 'England',
				'title_category' => 'king',
				'region' => '47',
				'place' => '185',
				'quarter' => '18673',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Wales',
				'title_category' => 'prince',
				'region' => '57',
				'place' => '225',
				'quarter' => '18713',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Scotland',
				'title_category' => 'king',
				'region' => '73',
				'place' => '289',
				'quarter' => '18777',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//scandinavia
			DB::table('titles')->insert([
				'title_name' => 'Norway',
				'title_category' => 'king',
				'region' => '60',
				'place' => '237',
				'quarter' => '18725',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Denmark',
				'title_category' => 'king',
				'region' => '62',
				'place' => '245',
				'quarter' => '18733',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sweden',
				'title_category' => 'king',
				'region' => '65',
				'place' => '257',
				'quarter' => '18745',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//irish tanistry
			DB::table('titles')->insert([
				'title_name' => 'Meath',
				'title_category' => 'king',
				'region' => '82',
				'place' => '325',
				'quarter' => '18813',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Ireland',
				'title_category' => 'highking',
				'region' => '82',
				'place' => '326',
				'quarter' => '18814',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Ulster',
				'title_category' => 'king',
				'region' => '83',
				'place' => '329',
				'quarter' => '18817',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Leinster',
				'title_category' => 'king',
				'region' => '84',
				'place' => '333',
				'quarter' => '18821',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Munster',
				'title_category' => 'king',
				'region' => '85',
				'place' => '337',
				'quarter' => '18825',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Connaught',
				'title_category' => 'king',
				'region' => '86',
				'place' => '343',
				'quarter' => '18831',
				'religion' => '1',
				'rank' => '11',
				'career' => 'tanistry_royalty'
			]);
			//spanish
			DB::table('titles')->insert([
				'title_name' => 'Navarre',
				'title_category' => 'king',
				'region' => '87',
				'place' => '345',
				'quarter' => '18833',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Aragon',
				'title_category' => 'king',
				'region' => '89',
				'place' => '353',
				'quarter' => '18841',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Zaragoza',
				'title_category' => 'prince',
				'region' => '90',
				'place' => '357',
				'quarter' => '18845',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Albarracin',
				'title_category' => 'prince',
				'region' => '90',
				'place' => '359',
				'quarter' => '18847',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Catalonia',
				'title_category' => 'prince',
				'region' => '92',
				'place' => '365',
				'quarter' => '18853',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Valencia',
				'title_category' => 'prince',
				'region' => '93',
				'place' => '369',
				'quarter' => '18857',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Denia',
				'title_category' => 'prince',
				'region' => '94',
				'place' => '373',
				'quarter' => '18861',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Baleares',
				'title_category' => 'prince',
				'region' => '95',
				'place' => '377',
				'quarter' => '18865',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Leon',
				'title_category' => 'king',
				'region' => '96',
				'place' => '381',
				'quarter' => '18869',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Asturias',
				'title_category' => 'prince',
				'region' => '97',
				'place' => '385',
				'quarter' => '18873',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Castile',
				'title_category' => 'king',
				'region' => '98',
				'place' => '389',
				'quarter' => '18877',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Galicia',
				'title_category' => 'king',
				'region' => '100',
				'place' => '397',
				'quarter' => '18885',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Portugal',
				'title_category' => 'king',
				'region' => '101',
				'place' => '401',
				'quarter' => '18889',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Andalucia',
				'title_category' => 'king',
				'region' => '107',
				'place' => '425',
				'quarter' => '18913',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_caliphate'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sevilla',
				'title_category' => 'prince',
				'region' => '108',
				'place' => '429',
				'quarter' => '18917',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Badajoz',
				'title_category' => 'prince',
				'region' => '109',
				'place' => '433',
				'quarter' => '18921',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Toledo',
				'title_category' => 'prince',
				'region' => '110',
				'place' => '437',
				'quarter' => '18925',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Algarve',
				'title_category' => 'prince',
				'region' => '106',
				'place' => '421',
				'quarter' => '18909',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Granada',
				'title_category' => 'prince',
				'region' => '111',
				'place' => '441',
				'quarter' => '18929',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Almeria',
				'title_category' => 'prince',
				'region' => '112',
				'place' => '445',
				'quarter' => '18933',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Murcia',
				'title_category' => 'prince',
				'region' => '113',
				'place' => '449',
				'quarter' => '18937',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Malaga',
				'title_category' => 'prince',
				'region' => '114',
				'place' => '453',
				'quarter' => '18941',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			//italian peninsula
			DB::table('titles')->insert([
				'title_name' => 'Rome',
				'title_category' => 'prince',
				'region' => '125',
				'place' => '497',
				'quarter' => '18985',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Naples',
				'title_category' => 'king',
				'region' => '127',
				'place' => '505',
				'quarter' => '18993',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Taranto',
				'title_category' => 'prince',
				'region' => '128',
				'place' => '509',
				'quarter' => '18997',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Benevento',
				'title_category' => 'prince',
				'region' => '130',
				'place' => '517',
				'quarter' => '19005',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sardinia',
				'title_category' => 'king',
				'region' => '131',
				'place' => '521',
				'quarter' => '19009',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_judgedom'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sicily',
				'title_category' => 'king',
				'region' => '133',
				'place' => '529',
				'quarter' => '19017',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//africa
			DB::table('titles')->insert([
				'title_name' => 'Fez',
				'title_category' => 'king',
				'region' => '138',
				'place' => '549',
				'quarter' => '19037',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Marrakesh',
				'title_category' => 'king',
				'region' => '139',
				'place' => '553',
				'quarter' => '19041',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_caliphate'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Ifni',
				'title_category' => 'prince',
				'region' => '140',
				'place' => '557',
				'quarter' => '19045',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sijilmassa',
				'title_category' => 'prince',
				'region' => '141',
				'place' => '562',
				'quarter' => '19050',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Tlemcen',
				'title_category' => 'king',
				'region' => '142',
				'place' => '565',
				'quarter' => '19053',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Kairouan',
				'title_category' => 'king',
				'region' => '150',
				'place' => '597',
				'quarter' => '19085',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Egypt',
				'title_category' => 'king',
				'region' => '158',
				'place' => '629',
				'quarter' => '19117',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_caliphate'
			]);
			//poland and lithuania
			DB::table('titles')->insert([
				'title_name' => 'Poland',
				'title_category' => 'king',
				'region' => '162',
				'place' => '645',
				'quarter' => '19133',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Lithuania',
				'title_category' => 'grandduke',
				'region' => '166',
				'place' => '661',
				'quarter' => '19149',
				'religion' => '1',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			//hungary and croatia
			DB::table('titles')->insert([
				'title_name' => 'Croatia',
				'title_category' => 'king',
				'region' => '169',
				'place' => '673',
				'quarter' => '19161',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Hungary',
				'title_category' => 'king',
				'region' => '172',
				'place' => '685',
				'quarter' => '19173',
				'religion' => '1',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//balkans
			DB::table('titles')->insert([
				'title_name' => 'Wallachia',
				'title_category' => 'prince',
				'region' => '177',
				'place' => '707',
				'quarter' => '19195',
				'religion' => '2',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Moldova',
				'title_category' => 'prince',
				'region' => '180',
				'place' => '717',
				'quarter' => '19205',
				'religion' => '2',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Bulgaria',
				'title_category' => 'king',
				'region' => '182',
				'place' => '727',
				'quarter' => '19215',
				'religion' => '2',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Rashka',
				'title_category' => 'prince',
				'region' => '185',
				'place' => '737',
				'quarter' => '19225',
				'religion' => '2',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			//russia
			DB::table('titles')->insert([
				'title_name' => 'Pereyaslav',
				'title_category' => 'prince',
				'region' => '189',
				'place' => '753',
				'quarter' => '19241',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Kiev',
				'title_category' => 'prince',
				'region' => '190',
				'place' => '757',
				'quarter' => '19245',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Halych',
				'title_category' => 'prince',
				'region' => '191',
				'place' => '761',
				'quarter' => '19249',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Turov',
				'title_category' => 'prince',
				'region' => '192',
				'place' => '765',
				'quarter' => '19253',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Tchernigov',
				'title_category' => 'prince',
				'region' => '193',
				'place' => '769',
				'quarter' => '19257',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Polotsk',
				'title_category' => 'prince',
				'region' => '194',
				'place' => '773',
				'quarter' => '19261',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Smolensk',
				'title_category' => 'prince',
				'region' => '195',
				'place' => '777',
				'quarter' => '19265',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Ryazan',
				'title_category' => 'prince',
				'region' => '196',
				'place' => '781',
				'quarter' => '19269',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Muscowy',
				'title_category' => 'prince',
				'region' => '197',
				'place' => '785',
				'quarter' => '19273',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Pleskov',
				'title_category' => 'prince',
				'region' => '198',
				'place' => '789',
				'quarter' => '19277',
				'religion' => '3',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Novgorod',
				'title_category' => 'prince',
				'region' => '199',
				'place' => '793',
				'quarter' => '19281',
				'religion' => '3',
				'rank' => '10',
				'career' => 'merchant_republic'
			]);
			//steppe kingdoms
			DB::table('titles')->insert([
				'title_name' => 'Khazaria',
				'title_category' => 'king',
				'region' => '205',
				'place' => '817',
				'quarter' => '19305',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Kwarezm',
				'title_category' => 'king',
				'region' => '206',
				'place' => '821',
				'quarter' => '19309',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			//byzantine empire
			DB::table('titles')->insert([
				'title_name' => 'Thrace',
				'title_category' => 'king',
				'region' => '207',
				'place' => '825',
				'quarter' => '19313',
				'religion' => '4',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Thessaloniki',
				'title_category' => 'prince',
				'region' => '208',
				'place' => '829',
				'quarter' => '19317',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Macedonia',
				'title_category' => 'prince',
				'region' => '208',
				'place' => '831',
				'quarter' => '19319',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Hellas',
				'title_category' => 'prince',
				'region' => '209',
				'place' => '833',
				'quarter' => '19321',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Peleponessos',
				'title_category' => 'prince',
				'region' => '210',
				'place' => '837',
				'quarter' => '19325',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Nicopolis',
				'title_category' => 'prince',
				'region' => '211',
				'place' => '841',
				'quarter' => '19329',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Epirus',
				'title_category' => 'prince',
				'region' => '212',
				'place' => '845',
				'quarter' => '19333',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Smyrna',
				'title_category' => 'prince',
				'region' => '215',
				'place' => '857',
				'quarter' => '19345',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Thracesia',
				'title_category' => 'prince',
				'region' => '216',
				'place' => '861',
				'quarter' => '19349',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Opsicia',
				'title_category' => 'prince',
				'region' => '217',
				'place' => '865',
				'quarter' => '19353',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Osman',
				'title_category' => 'prince',
				'region' => '217',
				'place' => '867',
				'quarter' => '19355',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Icosium',
				'title_category' => 'prince',
				'region' => '218',
				'place' => '869',
				'quarter' => '19357',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Anatolia',
				'title_category' => 'prince',
				'region' => '218',
				'place' => '870',
				'quarter' => '19358',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Karaman',
				'title_category' => 'prince',
				'region' => '218',
				'place' => '871',
				'quarter' => '19359',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Coracesium',
				'title_category' => 'prince',
				'region' => '219',
				'place' => '873',
				'quarter' => '19361',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Bucellaria',
				'title_category' => 'prince',
				'region' => '220',
				'place' => '877',
				'quarter' => '19365',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Paphlagonia',
				'title_category' => 'prince',
				'region' => '221',
				'place' => '881',
				'quarter' => '19369',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Cappadocia',
				'title_category' => 'prince',
				'region' => '223',
				'place' => '889',
				'quarter' => '19377',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Trebizond',
				'title_category' => 'grandduke',
				'region' => '224',
				'place' => '893',
				'quarter' => '19381',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Canik',
				'title_category' => 'prince',
				'region' => '226',
				'place' => '902',
				'quarter' => '19390',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Amid',
				'title_category' => 'prince',
				'region' => '227',
				'place' => '905',
				'quarter' => '19393',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Taron',
				'title_category' => 'prince',
				'region' => '227',
				'place' => '907',
				'quarter' => '19395',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Sebasteia',
				'title_category' => 'prince',
				'region' => '228',
				'place' => '909',
				'quarter' => '19397',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			//caucasus
			DB::table('titles')->insert([
				'title_name' => 'Georgia',
				'title_category' => 'king',
				'region' => '230',
				'place' => '917',
				'quarter' => '19405',
				'religion' => '4',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Kars',
				'title_category' => 'king',
				'region' => '232',
				'place' => '925',
				'quarter' => '19413',
				'religion' => '4',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Azerbaijan',
				'title_category' => 'prince',
				'region' => '233',
				'place' => '929',
				'quarter' => '19417',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Armenia',
				'title_category' => 'prince',
				'region' => '234',
				'place' => '935',
				'quarter' => '19423',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Mardin',
				'title_category' => 'prince',
				'region' => '235',
				'place' => '937',
				'quarter' => '19425',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Vaspurakan',
				'title_category' => 'king',
				'region' => '235',
				'place' => '939',
				'quarter' => '19427',
				'religion' => '4',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			//persia
			DB::table('titles')->insert([
				'title_name' => 'Persia',
				'title_category' => 'king',
				'region' => '240',
				'place' => '957',
				'quarter' => '19445',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Hormuz',
				'title_category' => 'prince',
				'region' => '240',
				'place' => '959',
				'quarter' => '19447',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Isfahan',
				'title_category' => 'prince',
				'region' => '241',
				'place' => '961',
				'quarter' => '19449',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Najd',
				'title_category' => 'prince',
				'region' => '246',
				'place' => '981',
				'quarter' => '19469',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Mecca',
				'title_category' => 'prince',
				'region' => '247',
				'place' => '985',
				'quarter' => '19473',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_sharifate'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Jerusalem',
				'title_category' => 'king',
				'region' => '249',
				'place' => '993',
				'quarter' => '19481',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Syria',
				'title_category' => 'king',
				'region' => '252',
				'place' => '1005',
				'quarter' => '19493',
				'religion' => '5',
				'rank' => '11',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Antioch',
				'title_category' => 'prince',
				'region' => '255',
				'place' => '1017',
				'quarter' => '19505',
				'religion' => '5',
				'rank' => '10',
				'career' => 'fixed_royalty'
			]);
			DB::table('titles')->insert([
				'title_name' => 'Baghdad',
				'title_category' => 'king',
				'region' => '259',
				'place' => '1033',
				'quarter' => '19521',
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

		//chivalric guilds
		DB::table('titles')->insert([
			'title_name' => 'Order of the Garter',
			'title_category' => 'grandmaster',
			'region' => '47',
			'place' => '186',
			'quarter' => '18674',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => 'Order of the Star',
			'title_category' => 'grandmaster',
			'region' => '29',
			'place' => '113',
			'quarter' => '18601',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => 'Order Saint George',
			'title_category' => 'grandmaster',
			'region' => '172',
			'place' => '685',
			'quarter' => '19173',
			'religion' => '1',
			'rank' => '10',
			'career' => 'knight_grandmaster'
		]);	

		DB::table('titles')->insert([
			'title_name' => 'Order of the Golden Fleece',
			'title_category' => 'grandmaster',
			'region' => '25',
			'place' => '97',
			'quarter' => '18585',
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
		
		//teutonic order state
		DB::table('titles')->insert([
			'title_name' => 'Estonia',
			'title_category' => 'duke',
			'region' => '72',
			'place' => '285',
			'quarter' => '18773',
			'religion' => '1',
			'rank' => '10',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Prussia',
			'title_category' => 'duke',
			'region' => '70',
			'place' => '280',
			'quarter' => '18768',
			'religion' => '1',
			'rank' => '10',
			'career' => 'confederate_temporal'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Livonia',
			'title_category' => 'prince archbishop',
			'region' => '68',
			'place' => '269',
			'quarter' => '18757',
			'religion' => '1',
			'rank' => '10',
			'career' => 'confederate_ecclessiastical'
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
			'title_name' => 'Teutonic Order',
			'title_category' => 'grandmaster',
			'region' => '70',
			'place' => '277',
			'quarter' => '18482',
			'religion' => '1',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Knights Hospitaller',
			'title_category' => 'grandmaster',
			'region' => '249',
			'place' => '993',
			'quarter' => '18484',
			'religion' => '1',
			'rank' => '10',
			'career' => 'crusader_grandmaster'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Knights Templar',
			'title_category' => 'grandmaster',
			'region' => '249',
			'place' => '993',
			'quarter' => '18483',
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
		//rome
		DB::table('titles')->insert([
			'title_name' => 'Augustinian Order',
			'title_category' => 'grandmaster',
			'region' => '125',
			'place' => '497',
			'quarter' => '18485',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		//Subiaco
		DB::table('titles')->insert([
			'title_name' => 'Benedictine Order',
			'title_category' => 'grandmaster',
			'region' => '125',
			'place' => '500',
			'quarter' => '16089',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		//Maidstone
		DB::table('titles')->insert([
			'title_name' => 'Carmelite Order',
			'title_category' => 'grandmaster',
			'region' => '48',
			'place' => '192',
			'quarter' => '18486',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		//Citeaux
		DB::table('titles')->insert([
			'title_name' => 'Cistercian Order',
			'title_category' => 'grandmaster',
			'region' => '33',
			'place' => '132',
			'quarter' => '16261',
			'religion' => '1',
			'rank' => '10',
			'career' => 'monastic_grandmaster'
		]);
		//Assissi
		DB::table('titles')->insert([
			'title_name' => 'Franciscan Order',
			'title_category' => 'grandmaster',
			'region' => '124',
			'place' => '496',
			'quarter' => '16043',
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
			'title_name' => 'Venice',
			'title_category' => 'doge',
			'region' => '118',
			'place' => '469',
			'quarter' => '18957',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Genoa',
			'title_category' => 'doge',
			'region' => '117',
			'place' => '465',
			'quarter' => '18953',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Noli',
			'title_category' => 'doge',
			'region' => '117',
			'place' => '466',
			'quarter' => '18954',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Gaeta',
			'title_category' => 'doge',
			'region' => '127',
			'place' => '506',
			'quarter' => '18994',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Pisa',
			'title_category' => 'doge',
			'region' => '126',
			'place' => '501',
			'quarter' => '18989',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Ragusa',
			'title_category' => 'rector',
			'region' => '168',
			'place' => '669',
			'quarter' => '19157',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Amalfi',
			'title_category' => 'doge',
			'region' => '127',
			'place' => '507',
			'quarter' => '18995',
			'religion' => '1',
			'rank' => '10',
			'career' => 'maritime_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Ancona',
			'title_category' => 'doge',
			'region' => '124',
			'place' => '495',
			'quarter' => '18983',
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
			'title_name' => 'Florence',
			'title_category' => 'gonfalonier',
			'region' => '123',
			'place' => '489',
			'quarter' => '18977',
			'religion' => '1',
			'rank' => '10',
			'career' => 'merchant_republic'
		]);
		
		DB::table('titles')->insert([
			'title_name' => 'Lucca',
			'title_category' => 'gonfalonier',
			'region' => '126',
			'place' => '503',
			'quarter' => '18991',
			'religion' => '1',
			'rank' => '10',
			'career' => 'merchant_republic'
		]);	



    }
}