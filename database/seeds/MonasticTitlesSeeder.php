<?php

use Illuminate\Database\Seeder;

class MonasticTitlesSeeder extends Seeder
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

		//monastic prince provost
		DB::table('titles')->insert([
			'title_name' => '[prince-provost] of Berchtesgaden',
			'region' => '9',
			'place' => '36',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_monastic'
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
 'title_name' => '[abbot] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Lubeck',
 'region' => '4',
 'place' => '15',
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
 'title_name' => '[abbot] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Basel',
 'region' => '14',
 'place' => '55',
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
 'title_name' => '[abbot] of Mainz',
 'region' => '18',
 'place' => '69',
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
 'title_name' => '[abbot] of Aachen',
 'region' => '19',
 'place' => '74',
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
 'title_name' => '[abbot] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Metz',
 'region' => '20',
 'place' => '79',
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
 'title_name' => '[abbot] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Utrecht',
 'region' => '22',
 'place' => '87',
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
 'title_name' => '[abbot] of Paris',
 'region' => '29',
 'place' => '113',
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
 'title_name' => '[abbot] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Amiens',
 'region' => '31',
 'place' => '121',
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
 'title_name' => '[abbot] of Reims',
 'region' => '33',
 'place' => '131',
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
 'title_name' => '[abbot] of Poitiers',
 'region' => '37',
 'place' => '145',
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
 'title_name' => '[abbot] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Toulouse',
 'region' => '42',
 'place' => '165',
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
 'title_name' => '[abbot] of Cahors',
 'region' => '43',
 'place' => '170',
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
 'title_name' => '[abbot] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Chalon',
 'region' => '46',
 'place' => '183',
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
 'title_name' => '[abbot] of London',
 'region' => '47',
 'place' => '185',
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
 'title_name' => '[abbot] of Dover',
 'region' => '48',
 'place' => '190',
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
 'title_name' => '[abbot] of Southampton',
 'region' => '49',
 'place' => '194',
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
 'title_name' => '[abbot] of Norwich',
 'region' => '51',
 'place' => '201',
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
 'title_name' => '[abbot] of Cirencester',
 'region' => '53',
 'place' => '212',
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
 'title_name' => '[abbot] of Oxford',
 'region' => '54',
 'place' => '215',
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
 'title_name' => '[abbot] of Lincoln',
 'region' => '56',
 'place' => '221',
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
 'title_name' => '[abbot] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Arensburg',
 'region' => '72',
 'place' => '287',
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
 'title_name' => '[abbot] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tudela',
 'region' => '87',
 'place' => '347',
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
 'title_name' => '[abbot] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Gastehiz',
 'region' => '88',
 'place' => '352',
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
 'title_name' => '[abbot] of Gerona',
 'region' => '91',
 'place' => '361',
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
 'title_name' => '[abbot] of Barcelona',
 'region' => '92',
 'place' => '365',
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
 'title_name' => '[abbot] of Valencia',
 'region' => '93',
 'place' => '369',
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
 'title_name' => '[abbot] of Palma',
 'region' => '95',
 'place' => '377',
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
 'title_name' => '[abbot] of Santo Domingo de Silos',
 'region' => '99',
 'place' => '394',
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
 'title_name' => '[abbot] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Santarem',
 'region' => '101',
 'place' => '403',
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
 'title_name' => '[abbot] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Toledo',
 'region' => '110',
 'place' => '437',
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
 'title_name' => '[abbot] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Guadix',
 'region' => '111',
 'place' => '444',
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
 'title_name' => '[abbot] of Genoa',
 'region' => '117',
 'place' => '465',
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
 'title_name' => '[abbot] of Venice',
 'region' => '118',
 'place' => '469',
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
 'title_name' => '[abbot] of Siena',
 'region' => '123',
 'place' => '490',
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
 'title_name' => '[abbot] of Rome',
 'region' => '125',
 'place' => '497',
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
 'title_name' => '[abbot] of Pisa',
 'region' => '126',
 'place' => '501',
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
 'title_name' => '[abbot] of Bari',
 'region' => '128',
 'place' => '510',
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
 'title_name' => '[abbot] of Messina',
 'region' => '134',
 'place' => '533',
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
 'title_name' => '[abbot] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tedelles',
 'region' => '146',
 'place' => '583',
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
 'title_name' => '[abbot] of Tunis',
 'region' => '149',
 'place' => '593',
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
 'title_name' => '[abbot] of Esztergom',
 'region' => '172',
 'place' => '685',
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
 'title_name' => '[abbot] of Tulcea',
 'region' => '179',
 'place' => '715',
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
 'title_name' => '[abbot] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tarnovo',
 'region' => '182',
 'place' => '728',
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
 'title_name' => '[abbot] of Belgrade',
 'region' => '184',
 'place' => '733',
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
 'title_name' => '[abbot] of Pereyaslav',
 'region' => '189',
 'place' => '753',
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
 'title_name' => '[abbot] of Tchernigov',
 'region' => '193',
 'place' => '769',
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
 'title_name' => '[abbot] of Edirne',
 'region' => '207',
 'place' => '827',
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
 'title_name' => '[abbot] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Patros',
 'region' => '214',
 'place' => '856',
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
 'title_name' => '[abbot] of Pergamum',
 'region' => '217',
 'place' => '868',
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
 'title_name' => '[abbot] of Tarsus',
 'region' => '222',
 'place' => '885',
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
 'title_name' => '[abbot] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Amasia',
 'region' => '226',
 'place' => '901',
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
 'title_name' => '[abbot] of Divrigi',
 'region' => '228',
 'place' => '910',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Pitsunda',
 'region' => '229',
 'place' => '915',
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
 'title_name' => '[abbot] of Ani',
 'region' => '232',
 'place' => '925',
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
 'title_name' => '[abbot] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
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
 'title_name' => '[abbot] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Qazvin',
 'region' => '242',
 'place' => '968',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Amol',
 'region' => '243',
 'place' => '971',
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
 'title_name' => '[abbot] of Tabriz',
 'region' => '244',
 'place' => '973',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Hamadan',
 'region' => '245',
 'place' => '977',
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
 'title_name' => '[abbot] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Damascus',
 'region' => '252',
 'place' => '1005',
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
 'title_name' => '[abbot] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Antioch',
 'region' => '255',
 'place' => '1017',
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

DB::table('titles')->insert([
 'title_name' => '[abbot] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]);

DB::table('titles')->insert([
 'title_name' => '[abbot] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_monastic'
]); 		
		
		
    }
}