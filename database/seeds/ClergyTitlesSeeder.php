<?php

use Illuminate\Database\Seeder;

class ClergyTitlesSeeder extends Seeder
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
		
		//sharif
		DB::table('titles')->insert([
			'title_name' => '[sharif] of Mecca',
			'region' => '247',
			'place' => '985',
			'religion' => 'Muslim',
			'rank' => '9',
			'career' => 'fixed_sharifate'
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
		
		
    }
}