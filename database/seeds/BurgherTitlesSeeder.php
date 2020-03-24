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

		//burgrave
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Nuremberg',
			'region' => '8',
			'place' => '32',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_patriciate'
		]);

		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Meissen',
			'region' => '2',
			'place' => '5',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);

		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Antwerp',
			'region' => '24',
			'place' => '95',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);

		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Prague',
			'region' => '16',
			'place' => '61',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Krakow',
			'region' => '162',
			'place' => '645',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Magdeburg',
			'region' => '3',
			'place' => '9',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Milan',
			'region' => '115',
			'place' => '457',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Pisa',
			'region' => '126',
			'place' => '501',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[burgrave] of Salzburg',
			'region' => '9',
			'place' => '33',
			'religion' => 'Catholic',
			'rank' => '6',
			'career' => 'fixed_burgher'
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

//mayors free imperial cities
DB::table('titles')->insert([
 'title_name' => '[mayor] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Augsburg',
 'region' => '8',
 'place' => '30',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Zurich',
 'region' => '14',
 'place' => '54',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Strassbourg',
 'region' => '15',
 'place' => '59',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Wissembourg',
 'region' => '15',
 'place' => '60',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Verdun',
 'region' => '30',
 'place' => '119',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Deventer',
 'region' => '21',
 'place' => '84',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cambrai',
 'region' => '25',
 'place' => '99',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_patriciate'
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
		
	//mayors	
		
DB::table('titles')->insert([
 'title_name' => '[mayor] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);		
	
DB::table('titles')->insert([
 'title_name' => '[mayor] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of York',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);	

DB::table('titles')->insert([
 'title_name' => '[mayor] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Havelberg',
 'region' => '5',
 'place' => '19',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kolberg',
 'region' => '6',
 'place' => '23',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Osnabruck',
 'region' => '7',
 'place' => '27',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Paderborn',
 'region' => '7',
 'place' => '28',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hallstat',
 'region' => '9',
 'place' => '35',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sankt Polten',
 'region' => '10',
 'place' => '39',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bozen',
 'region' => '12',
 'place' => '46',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Trent',
 'region' => '12',
 'place' => '47',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Brixen',
 'region' => '12',
 'place' => '48',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sankt Gallen',
 'region' => '14',
 'place' => '56',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Colmar',
 'region' => '15',
 'place' => '58',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Olmutz',
 'region' => '17',
 'place' => '67',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Liege',
 'region' => '19',
 'place' => '75',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Laibach',
 'region' => '27',
 'place' => '107',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Meaux',
 'region' => '29',
 'place' => '114',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Chartres',
 'region' => '29',
 'place' => '115',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Saint Denis',
 'region' => '29',
 'place' => '116',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Laon',
 'region' => '31',
 'place' => '123',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Vezelay',
 'region' => '38',
 'place' => '152',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Auch',
 'region' => '43',
 'place' => '171',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Vienne',
 'region' => '45',
 'place' => '178',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Autun',
 'region' => '45',
 'place' => '180',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ashford',
 'region' => '48',
 'place' => '191',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Wells',
 'region' => '49',
 'place' => '195',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Saint German',
 'region' => '50',
 'place' => '199',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Durham',
 'region' => '52',
 'place' => '206',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Scarborough',
 'region' => '52',
 'place' => '207',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cirencester',
 'region' => '53',
 'place' => '212',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Saint Albans',
 'region' => '54',
 'place' => '216',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Stamford',
 'region' => '56',
 'place' => '224',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bangor',
 'region' => '57',
 'place' => '227',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Glasbury',
 'region' => '58',
 'place' => '231',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pilten',
 'region' => '69',
 'place' => '273',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Koningsberg',
 'region' => '70',
 'place' => '280',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Haddington',
 'region' => '73',
 'place' => '292',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kilmarnock',
 'region' => '75',
 'place' => '298',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dunfermline',
 'region' => '78',
 'place' => '312',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Scone',
 'region' => '80',
 'place' => '319',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rosemarkie',
 'region' => '81',
 'place' => '323',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dornoch',
 'region' => '81',
 'place' => '324',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Clogher',
 'region' => '83',
 'place' => '332',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Manresa',
 'region' => '92',
 'place' => '367',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Coruna',
 'region' => '100',
 'place' => '399',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Santarem',
 'region' => '101',
 'place' => '403',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Aveiro',
 'region' => '102',
 'place' => '408',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Verin',
 'region' => '103',
 'place' => '411',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Moura',
 'region' => '105',
 'place' => '419',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Silves',
 'region' => '106',
 'place' => '424',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Malaga',
 'region' => '114',
 'place' => '453',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cremona',
 'region' => '115',
 'place' => '460',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Noli',
 'region' => '117',
 'place' => '466',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Chioggia',
 'region' => '118',
 'place' => '471',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Belluno',
 'region' => '118',
 'place' => '472',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cesena',
 'region' => '119',
 'place' => '474',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Aquileja',
 'region' => '121',
 'place' => '481',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pordenone',
 'region' => '121',
 'place' => '482',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Udine',
 'region' => '121',
 'place' => '483',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Gemona',
 'region' => '121',
 'place' => '484',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ivrea',
 'region' => '122',
 'place' => '486',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Grosseto',
 'region' => '123',
 'place' => '492',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Spoleto',
 'region' => '124',
 'place' => '493',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Assissi',
 'region' => '124',
 'place' => '496',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tivoli',
 'region' => '125',
 'place' => '499',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Volterra',
 'region' => '126',
 'place' => '504',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Gaeta',
 'region' => '127',
 'place' => '506',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Potenza',
 'region' => '130',
 'place' => '519',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bosa',
 'region' => '131',
 'place' => '523',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Dolia',
 'region' => '132',
 'place' => '527',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Marsala',
 'region' => '133',
 'place' => '532',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Taroudant',
 'region' => '140',
 'place' => '557',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sijilmassa',
 'region' => '141',
 'place' => '562',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Salzberg',
 'region' => '162',
 'place' => '648',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Konin',
 'region' => '163',
 'place' => '651',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Leslau',
 'region' => '164',
 'place' => '655',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rovigno',
 'region' => '167',
 'place' => '666',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ragusa',
 'region' => '168',
 'place' => '669',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Konjic',
 'region' => '169',
 'place' => '675',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tyrnau',
 'region' => '170',
 'place' => '678',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bystrica',
 'region' => '172',
 'place' => '686',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Krupina',
 'region' => '172',
 'place' => '687',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bartfeld',
 'region' => '173',
 'place' => '691',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kassow',
 'region' => '173',
 'place' => '692',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Debrecen',
 'region' => '174',
 'place' => '695',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Curtea Arges',
 'region' => '177',
 'place' => '707',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Suceava',
 'region' => '180',
 'place' => '717',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Turov',
 'region' => '192',
 'place' => '765',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Smolensk',
 'region' => '195',
 'place' => '777',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ryazan',
 'region' => '196',
 'place' => '781',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Atil',
 'region' => '205',
 'place' => '817',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kruja',
 'region' => '212',
 'place' => '845',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ancyra',
 'region' => '220',
 'place' => '877',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Divrigi',
 'region' => '228',
 'place' => '910',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Nakhichevan',
 'region' => '233',
 'place' => '929',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Bitlis',
 'region' => '234',
 'place' => '935',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Afrin',
 'region' => '255',
 'place' => '1020',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[mayor] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'fixed_burgher'
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
