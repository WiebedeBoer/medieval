<?php

use Illuminate\Database\Seeder;

class CommonTitlesSeeder extends Seeder
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
			'career' => 'fixed_burgher'
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
		
		//lord mayors, sheriffs, baliffs, reeves	  


DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Corvey',
 'region' => '1',
 'place' => '4',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dresden',
 'region' => '2',
 'place' => '6',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chemnitz',
 'region' => '2',
 'place' => '8',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Gernrode',
 'region' => '3',
 'place' => '12',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Schwerin',
 'region' => '4',
 'place' => '13',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Broda',
 'region' => '4',
 'place' => '16',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Salzwedel',
 'region' => '5',
 'place' => '18',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Havelberg',
 'region' => '5',
 'place' => '19',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Lindow',
 'region' => '5',
 'place' => '20',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kolberg',
 'region' => '6',
 'place' => '23',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Osnabruck',
 'region' => '7',
 'place' => '27',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Paderborn',
 'region' => '7',
 'place' => '28',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Augsburg',
 'region' => '8',
 'place' => '30',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hallstat',
 'region' => '9',
 'place' => '35',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Berchtesgaden',
 'region' => '9',
 'place' => '36',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sankt Polten',
 'region' => '10',
 'place' => '39',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Graz',
 'region' => '11',
 'place' => '41',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Styraburg',
 'region' => '11',
 'place' => '43',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Seckau',
 'region' => '11',
 'place' => '44',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bozen',
 'region' => '12',
 'place' => '46',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Trent',
 'region' => '12',
 'place' => '47',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brixen',
 'region' => '12',
 'place' => '48',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zurich',
 'region' => '14',
 'place' => '54',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sankt Gallen',
 'region' => '14',
 'place' => '56',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Colmar',
 'region' => '15',
 'place' => '58',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Strassbourg',
 'region' => '15',
 'place' => '59',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Wissembourg',
 'region' => '15',
 'place' => '60',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Karlstein',
 'region' => '16',
 'place' => '62',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pilsen',
 'region' => '16',
 'place' => '63',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Plass',
 'region' => '16',
 'place' => '64',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Olmutz',
 'region' => '17',
 'place' => '67',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Trebitz',
 'region' => '17',
 'place' => '68',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Fulda',
 'region' => '18',
 'place' => '72',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Liege',
 'region' => '19',
 'place' => '75',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Stavelot',
 'region' => '19',
 'place' => '76',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Pruem',
 'region' => '20',
 'place' => '80',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zutphen',
 'region' => '21',
 'place' => '82',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Deventer',
 'region' => '21',
 'place' => '84',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Emden',
 'region' => '23',
 'place' => '90',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Breda',
 'region' => '24',
 'place' => '94',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Thorn',
 'region' => '24',
 'place' => '96',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghent',
 'region' => '25',
 'place' => '98',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cambrai',
 'region' => '25',
 'place' => '99',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ypres',
 'region' => '25',
 'place' => '100',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Klagenfurt',
 'region' => '26',
 'place' => '101',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gorizia',
 'region' => '26',
 'place' => '103',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Moosburg',
 'region' => '26',
 'place' => '104',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Krainburg',
 'region' => '27',
 'place' => '105',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Laibach',
 'region' => '27',
 'place' => '107',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Sittich',
 'region' => '27',
 'place' => '108',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vannes',
 'region' => '28',
 'place' => '109',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Rohan',
 'region' => '28',
 'place' => '110',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Redon',
 'region' => '28',
 'place' => '112',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Meaux',
 'region' => '29',
 'place' => '114',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chartres',
 'region' => '29',
 'place' => '115',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint Denis',
 'region' => '29',
 'place' => '116',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Verdun',
 'region' => '30',
 'place' => '119',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amiens',
 'region' => '31',
 'place' => '121',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Laon',
 'region' => '31',
 'place' => '123',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint Omer',
 'region' => '31',
 'place' => '124',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Clairvaux',
 'region' => '33',
 'place' => '132',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tours',
 'region' => '35',
 'place' => '137',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Chinon',
 'region' => '35',
 'place' => '139',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mans',
 'region' => '36',
 'place' => '143',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Chatellerault',
 'region' => '37',
 'place' => '146',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nevers',
 'region' => '38',
 'place' => '151',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vezelay',
 'region' => '38',
 'place' => '152',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Moulins',
 'region' => '39',
 'place' => '153',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Gueret',
 'region' => '39',
 'place' => '155',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Issoire',
 'region' => '40',
 'place' => '160',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Saint Benoit',
 'region' => '42',
 'place' => '168',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Auch',
 'region' => '43',
 'place' => '171',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Montauban',
 'region' => '43',
 'place' => '172',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Angouleme',
 'region' => '44',
 'place' => '173',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Tulle',
 'region' => '44',
 'place' => '176',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vienne',
 'region' => '45',
 'place' => '178',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Autun',
 'region' => '45',
 'place' => '180',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Citeaux',
 'region' => '46',
 'place' => '184',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Guildford',
 'region' => '47',
 'place' => '187',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ashford',
 'region' => '48',
 'place' => '191',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Maidstone',
 'region' => '48',
 'place' => '192',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Winchester',
 'region' => '49',
 'place' => '193',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Wells',
 'region' => '49',
 'place' => '195',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Wimborne',
 'region' => '49',
 'place' => '196',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Truro',
 'region' => '50',
 'place' => '197',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bodmin',
 'region' => '50',
 'place' => '198',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint German',
 'region' => '50',
 'place' => '199',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Madron',
 'region' => '50',
 'place' => '200',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ipswich',
 'region' => '51',
 'place' => '202',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Croxton',
 'region' => '51',
 'place' => '204',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of York',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Durham',
 'region' => '52',
 'place' => '206',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Scarborough',
 'region' => '52',
 'place' => '207',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lancaster',
 'region' => '52',
 'place' => '208',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Worcester',
 'region' => '53',
 'place' => '209',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cirencester',
 'region' => '53',
 'place' => '212',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint Albans',
 'region' => '54',
 'place' => '216',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Leicester',
 'region' => '55',
 'place' => '220',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lincoln',
 'region' => '56',
 'place' => '221',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stamford',
 'region' => '56',
 'place' => '224',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bangor',
 'region' => '57',
 'place' => '227',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Shrewsbury',
 'region' => '58',
 'place' => '230',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Glasbury',
 'region' => '58',
 'place' => '231',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Llanllugan',
 'region' => '58',
 'place' => '232',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Tonsborg',
 'region' => '60',
 'place' => '238',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hamar',
 'region' => '60',
 'place' => '239',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Gimsoy',
 'region' => '60',
 'place' => '240',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Holm',
 'region' => '61',
 'place' => '242',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Halsnoy',
 'region' => '61',
 'place' => '244',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Esrum',
 'region' => '62',
 'place' => '248',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Halmstad',
 'region' => '63',
 'place' => '251',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Herrevad',
 'region' => '63',
 'place' => '252',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Essenbaek',
 'region' => '64',
 'place' => '256',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Eskilstuna',
 'region' => '65',
 'place' => '260',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Visby',
 'region' => '66',
 'place' => '261',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Nydala',
 'region' => '66',
 'place' => '264',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jonkoping',
 'region' => '67',
 'place' => '267',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vadstena',
 'region' => '67',
 'place' => '268',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pilten',
 'region' => '69',
 'place' => '273',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Koningsberg',
 'region' => '70',
 'place' => '280',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Dunbar',
 'region' => '73',
 'place' => '291',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Haddington',
 'region' => '73',
 'place' => '292',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jedburgh',
 'region' => '74',
 'place' => '296',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kilmarnock',
 'region' => '75',
 'place' => '298',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ayr',
 'region' => '75',
 'place' => '300',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Carlisle',
 'region' => '76',
 'place' => '301',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Kirkcudbright',
 'region' => '76',
 'place' => '304',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Dunaverty',
 'region' => '77',
 'place' => '307',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Perth',
 'region' => '78',
 'place' => '309',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stirling',
 'region' => '78',
 'place' => '310',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dunfermline',
 'region' => '78',
 'place' => '312',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Elgin',
 'region' => '79',
 'place' => '313',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Nairn',
 'region' => '79',
 'place' => '314',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Scone',
 'region' => '80',
 'place' => '319',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Arbroath',
 'region' => '80',
 'place' => '320',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rosemarkie',
 'region' => '81',
 'place' => '323',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dornoch',
 'region' => '81',
 'place' => '324',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Millmount',
 'region' => '82',
 'place' => '328',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Clogher',
 'region' => '83',
 'place' => '332',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Wexford',
 'region' => '84',
 'place' => '333',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Kells',
 'region' => '84',
 'place' => '334',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Durrow',
 'region' => '84',
 'place' => '336',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Leyre',
 'region' => '87',
 'place' => '348',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of San Sebastian',
 'region' => '88',
 'place' => '349',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Sobrarbe',
 'region' => '89',
 'place' => '356',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Rueda',
 'region' => '90',
 'place' => '360',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Sant Feliu de Guixols',
 'region' => '91',
 'place' => '364',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Manresa',
 'region' => '92',
 'place' => '367',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Monserrat',
 'region' => '92',
 'place' => '368',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Serra',
 'region' => '93',
 'place' => '372',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alicante',
 'region' => '94',
 'place' => '375',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Gandia',
 'region' => '94',
 'place' => '376',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of San Guillermo',
 'region' => '96',
 'place' => '383',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Sahagun',
 'region' => '96',
 'place' => '384',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aviles',
 'region' => '97',
 'place' => '386',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gijon',
 'region' => '97',
 'place' => '387',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Santo Toribio',
 'region' => '97',
 'place' => '388',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Santo Domingo de Silos',
 'region' => '99',
 'place' => '394',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of San Millan',
 'region' => '99',
 'place' => '396',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Coruna',
 'region' => '100',
 'place' => '399',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Santarem',
 'region' => '101',
 'place' => '403',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Alcobaca',
 'region' => '101',
 'place' => '404',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aveiro',
 'region' => '102',
 'place' => '408',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Verin',
 'region' => '103',
 'place' => '411',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Moura',
 'region' => '105',
 'place' => '419',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alvor',
 'region' => '106',
 'place' => '423',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Silves',
 'region' => '106',
 'place' => '424',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Huelva',
 'region' => '108',
 'place' => '432',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Talavera',
 'region' => '110',
 'place' => '440',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Antquera',
 'region' => '111',
 'place' => '443',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Motril',
 'region' => '112',
 'place' => '447',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alicante',
 'region' => '113',
 'place' => '451',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Malaga',
 'region' => '114',
 'place' => '453',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marbella',
 'region' => '114',
 'place' => '455',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ronda',
 'region' => '114',
 'place' => '456',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cremona',
 'region' => '115',
 'place' => '460',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Noli',
 'region' => '117',
 'place' => '466',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Bobbio',
 'region' => '117',
 'place' => '468',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chioggia',
 'region' => '118',
 'place' => '471',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Belluno',
 'region' => '118',
 'place' => '472',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cesena',
 'region' => '119',
 'place' => '474',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aquileja',
 'region' => '121',
 'place' => '481',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pordenone',
 'region' => '121',
 'place' => '482',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Udine',
 'region' => '121',
 'place' => '483',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gemona',
 'region' => '121',
 'place' => '484',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ivrea',
 'region' => '122',
 'place' => '486',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Pinerollo',
 'region' => '122',
 'place' => '488',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Grosseto',
 'region' => '123',
 'place' => '492',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Spoleto',
 'region' => '124',
 'place' => '493',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Assissi',
 'region' => '124',
 'place' => '496',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tivoli',
 'region' => '125',
 'place' => '499',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Subiaco',
 'region' => '125',
 'place' => '500',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Volterra',
 'region' => '126',
 'place' => '504',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gaeta',
 'region' => '127',
 'place' => '506',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Cassino',
 'region' => '127',
 'place' => '508',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cosenza',
 'region' => '129',
 'place' => '513',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vivarium',
 'region' => '129',
 'place' => '516',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Potenza',
 'region' => '130',
 'place' => '519',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Viggiano',
 'region' => '130',
 'place' => '520',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Olbia',
 'region' => '131',
 'place' => '522',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bosa',
 'region' => '131',
 'place' => '523',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oristano',
 'region' => '132',
 'place' => '526',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dolia',
 'region' => '132',
 'place' => '527',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cefalu',
 'region' => '133',
 'place' => '531',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marsala',
 'region' => '133',
 'place' => '532',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tangiers',
 'region' => '136',
 'place' => '541',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ceuta',
 'region' => '136',
 'place' => '542',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ouazzane',
 'region' => '136',
 'place' => '543',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tetouan',
 'region' => '136',
 'place' => '544',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Anfa',
 'region' => '137',
 'place' => '545',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Fedala',
 'region' => '137',
 'place' => '548',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sefrou',
 'region' => '138',
 'place' => '550',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ouarzazate',
 'region' => '139',
 'place' => '554',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mogador',
 'region' => '139',
 'place' => '555',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Taroudant',
 'region' => '140',
 'place' => '557',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Agadir',
 'region' => '140',
 'place' => '558',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tindouf',
 'region' => '140',
 'place' => '559',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tinmel',
 'region' => '140',
 'place' => '560',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Figuig',
 'region' => '141',
 'place' => '561',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sijilmassa',
 'region' => '141',
 'place' => '562',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tinghir',
 'region' => '141',
 'place' => '563',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Rachidiya',
 'region' => '141',
 'place' => '564',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oujda',
 'region' => '142',
 'place' => '566',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mellila',
 'region' => '142',
 'place' => '567',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Taourirt',
 'region' => '142',
 'place' => '568',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oran',
 'region' => '143',
 'place' => '569',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mostaganem',
 'region' => '143',
 'place' => '570',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mascara',
 'region' => '143',
 'place' => '572',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Djelfa',
 'region' => '144',
 'place' => '573',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Laghouat',
 'region' => '144',
 'place' => '574',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghardaia',
 'region' => '144',
 'place' => '575',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Khaled',
 'region' => '145',
 'place' => '577',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Biskra',
 'region' => '145',
 'place' => '578',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ouargla',
 'region' => '145',
 'place' => '579',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Touggourt',
 'region' => '145',
 'place' => '580',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Algiers',
 'region' => '146',
 'place' => '581',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Medea',
 'region' => '146',
 'place' => '582',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Achir',
 'region' => '146',
 'place' => '584',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bejaia',
 'region' => '147',
 'place' => '585',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jijel',
 'region' => '147',
 'place' => '586',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Setif',
 'region' => '147',
 'place' => '587',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Eulma',
 'region' => '147',
 'place' => '588',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Annaba',
 'region' => '148',
 'place' => '589',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jendouba',
 'region' => '148',
 'place' => '591',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kaf',
 'region' => '148',
 'place' => '592',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zaghouan',
 'region' => '149',
 'place' => '594',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hammamet',
 'region' => '149',
 'place' => '595',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bizerte',
 'region' => '149',
 'place' => '596',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sousse',
 'region' => '150',
 'place' => '598',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sfax',
 'region' => '150',
 'place' => '599',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mahdia',
 'region' => '150',
 'place' => '600',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gabes',
 'region' => '151',
 'place' => '601',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gafsa',
 'region' => '151',
 'place' => '602',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kebili',
 'region' => '151',
 'place' => '603',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tozeur',
 'region' => '151',
 'place' => '604',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghadames',
 'region' => '152',
 'place' => '605',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tamanrasset',
 'region' => '152',
 'place' => '607',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghat',
 'region' => '152',
 'place' => '608',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tripoli',
 'region' => '153',
 'place' => '609',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Misrata',
 'region' => '153',
 'place' => '611',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zuwara',
 'region' => '153',
 'place' => '612',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Germa',
 'region' => '154',
 'place' => '613',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sabha',
 'region' => '154',
 'place' => '614',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zouila',
 'region' => '154',
 'place' => '615',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Qatrun',
 'region' => '154',
 'place' => '616',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kufra',
 'region' => '155',
 'place' => '617',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Awjila',
 'region' => '155',
 'place' => '619',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Marada',
 'region' => '155',
 'place' => '620',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Benghazi',
 'region' => '156',
 'place' => '621',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Derna',
 'region' => '156',
 'place' => '622',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tobruk',
 'region' => '156',
 'place' => '623',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rosetta',
 'region' => '157',
 'place' => '626',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mansoura',
 'region' => '157',
 'place' => '628',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Helwan',
 'region' => '158',
 'place' => '630',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Fayum',
 'region' => '158',
 'place' => '631',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Natrun',
 'region' => '158',
 'place' => '632',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Minya',
 'region' => '159',
 'place' => '633',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Siwa',
 'region' => '159',
 'place' => '634',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Farafra',
 'region' => '159',
 'place' => '635',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Anba Boula',
 'region' => '159',
 'place' => '636',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Asyut',
 'region' => '160',
 'place' => '637',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kharga',
 'region' => '160',
 'place' => '638',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aswan',
 'region' => '160',
 'place' => '639',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Zinaiqa',
 'region' => '160',
 'place' => '640',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Liegnitz',
 'region' => '161',
 'place' => '641',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Glogau',
 'region' => '161',
 'place' => '642',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Leubus',
 'region' => '161',
 'place' => '644',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Teczyn',
 'region' => '162',
 'place' => '646',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tarnau',
 'region' => '162',
 'place' => '647',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Salzberg',
 'region' => '162',
 'place' => '648',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Konin',
 'region' => '163',
 'place' => '651',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kalisz',
 'region' => '163',
 'place' => '652',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Plock',
 'region' => '164',
 'place' => '653',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Leslau',
 'region' => '164',
 'place' => '655',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Radomir',
 'region' => '164',
 'place' => '656',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Brest',
 'region' => '165',
 'place' => '657',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kobryn',
 'region' => '165',
 'place' => '659',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Wolkowysk',
 'region' => '165',
 'place' => '660',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kauen',
 'region' => '166',
 'place' => '663',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rovigno',
 'region' => '167',
 'place' => '666',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vikla',
 'region' => '167',
 'place' => '667',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ragusa',
 'region' => '168',
 'place' => '669',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bihac',
 'region' => '169',
 'place' => '674',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Konjic',
 'region' => '169',
 'place' => '675',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kotor',
 'region' => '169',
 'place' => '676',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tyrnau',
 'region' => '170',
 'place' => '678',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nitra',
 'region' => '170',
 'place' => '679',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Egerszeg',
 'region' => '171',
 'place' => '683',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bystrica',
 'region' => '172',
 'place' => '686',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Krupina',
 'region' => '172',
 'place' => '687',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bartfeld',
 'region' => '173',
 'place' => '691',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kassow',
 'region' => '173',
 'place' => '692',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kecskemet',
 'region' => '174',
 'place' => '694',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Debrecen',
 'region' => '174',
 'place' => '695',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vukovar',
 'region' => '175',
 'place' => '698',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Carta',
 'region' => '176',
 'place' => '704',
 'religion' => 'Catholic',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Targu Jiu',
 'region' => '177',
 'place' => '705',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Curtea Arges',
 'region' => '177',
 'place' => '707',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Tismana',
 'region' => '177',
 'place' => '708',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bucharest',
 'region' => '178',
 'place' => '710',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Kronstadt',
 'region' => '178',
 'place' => '712',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Constanta',
 'region' => '179',
 'place' => '713',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Harsova',
 'region' => '179',
 'place' => '714',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tulcea',
 'region' => '179',
 'place' => '715',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Calarasi',
 'region' => '179',
 'place' => '716',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Suceava',
 'region' => '180',
 'place' => '717',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Odessa',
 'region' => '180',
 'place' => '719',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chisinau',
 'region' => '180',
 'place' => '720',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sofia',
 'region' => '181',
 'place' => '721',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stip',
 'region' => '181',
 'place' => '723',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Rila',
 'region' => '181',
 'place' => '724',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gorazde',
 'region' => '183',
 'place' => '729',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Bukovo',
 'region' => '185',
 'place' => '738',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Krusevac',
 'region' => '185',
 'place' => '739',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Zica',
 'region' => '185',
 'place' => '740',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pristina',
 'region' => '187',
 'place' => '745',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Pec',
 'region' => '187',
 'place' => '747',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Berane',
 'region' => '187',
 'place' => '748',
 'religion' => 'Serbian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Monastyrski',
 'region' => '188',
 'place' => '749',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Poltava',
 'region' => '188',
 'place' => '751',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Oleshia',
 'region' => '188',
 'place' => '752',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Cherkasy',
 'region' => '189',
 'place' => '756',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Borispyl',
 'region' => '190',
 'place' => '758',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Yuriev',
 'region' => '190',
 'place' => '759',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Turov',
 'region' => '192',
 'place' => '765',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Slutsk',
 'region' => '192',
 'place' => '767',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Korosten',
 'region' => '192',
 'place' => '768',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Lyubech',
 'region' => '193',
 'place' => '770',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Mazyr',
 'region' => '193',
 'place' => '772',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Orsha',
 'region' => '194',
 'place' => '774',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Barysaw',
 'region' => '194',
 'place' => '776',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Smolensk',
 'region' => '195',
 'place' => '777',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vyazma',
 'region' => '195',
 'place' => '779',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ryazan',
 'region' => '196',
 'place' => '781',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Kolomna',
 'region' => '196',
 'place' => '782',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kasimov',
 'region' => '196',
 'place' => '783',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Tula',
 'region' => '196',
 'place' => '784',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Sergiev',
 'region' => '197',
 'place' => '786',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zvenigorod',
 'region' => '197',
 'place' => '787',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ostrov',
 'region' => '198',
 'place' => '791',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ladoga',
 'region' => '199',
 'place' => '795',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kazan',
 'region' => '200',
 'place' => '799',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ufa',
 'region' => '200',
 'place' => '800',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Suzdal',
 'region' => '201',
 'place' => '803',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nizhny',
 'region' => '201',
 'place' => '804',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Rybinsk',
 'region' => '202',
 'place' => '806',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Cherepovets',
 'region' => '202',
 'place' => '807',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Kirillov',
 'region' => '202',
 'place' => '808',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Oryol',
 'region' => '203',
 'place' => '809',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Lipetsk',
 'region' => '203',
 'place' => '812',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Olgov',
 'region' => '204',
 'place' => '816',
 'religion' => 'Russian Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Atil',
 'region' => '205',
 'place' => '817',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saraibatu',
 'region' => '205',
 'place' => '818',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saraiberke',
 'region' => '205',
 'place' => '819',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Khiva',
 'region' => '206',
 'place' => '822',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saraidzhuk',
 'region' => '206',
 'place' => '823',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Redosto',
 'region' => '207',
 'place' => '826',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Edirne',
 'region' => '207',
 'place' => '827',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Corlu',
 'region' => '207',
 'place' => '828',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Stratonicea',
 'region' => '208',
 'place' => '830',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Thebes',
 'region' => '209',
 'place' => '835',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Corinth',
 'region' => '210',
 'place' => '839',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kruja',
 'region' => '212',
 'place' => '845',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Durres',
 'region' => '212',
 'place' => '846',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Saint Jovan',
 'region' => '212',
 'place' => '848',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kastoria',
 'region' => '213',
 'place' => '849',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Prilep',
 'region' => '213',
 'place' => '851',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Berat',
 'region' => '213',
 'place' => '852',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Lemnos',
 'region' => '214',
 'place' => '854',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Samos',
 'region' => '215',
 'place' => '858',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Patmos',
 'region' => '215',
 'place' => '860',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sardes',
 'region' => '216',
 'place' => '864',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kios',
 'region' => '217',
 'place' => '866',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ousakeion',
 'region' => '218',
 'place' => '872',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Makre',
 'region' => '219',
 'place' => '876',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ancyra',
 'region' => '220',
 'place' => '877',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gordion',
 'region' => '220',
 'place' => '878',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cotyaeum',
 'region' => '220',
 'place' => '879',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dorylaeum',
 'region' => '220',
 'place' => '880',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kastamuni',
 'region' => '221',
 'place' => '882',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amasra',
 'region' => '221',
 'place' => '883',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Claudiopolis',
 'region' => '221',
 'place' => '884',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Garsaura',
 'region' => '223',
 'place' => '890',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Magida',
 'region' => '223',
 'place' => '891',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Muskara',
 'region' => '223',
 'place' => '892',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Riza',
 'region' => '224',
 'place' => '895',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kerasous',
 'region' => '224',
 'place' => '896',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Corum',
 'region' => '226',
 'place' => '903',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Takat',
 'region' => '226',
 'place' => '904',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Harput',
 'region' => '227',
 'place' => '906',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Romanoupolis',
 'region' => '227',
 'place' => '908',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Divrigi',
 'region' => '228',
 'place' => '910',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Albistan',
 'region' => '228',
 'place' => '911',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tavium',
 'region' => '228',
 'place' => '912',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Batumi',
 'region' => '229',
 'place' => '913',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Poti',
 'region' => '229',
 'place' => '914',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Surami',
 'region' => '230',
 'place' => '918',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Akhalkalaki',
 'region' => '230',
 'place' => '920',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Derbent',
 'region' => '231',
 'place' => '921',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Baku',
 'region' => '231',
 'place' => '922',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mingecevir',
 'region' => '231',
 'place' => '923',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Balanjar',
 'region' => '231',
 'place' => '924',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Yerevan',
 'region' => '232',
 'place' => '926',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghars',
 'region' => '232',
 'place' => '927',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Kirants',
 'region' => '232',
 'place' => '928',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nakhichevan',
 'region' => '233',
 'place' => '929',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Khoy',
 'region' => '233',
 'place' => '930',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ordubad',
 'region' => '233',
 'place' => '931',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tatvan',
 'region' => '234',
 'place' => '933',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Manzikert',
 'region' => '234',
 'place' => '934',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bitlis',
 'region' => '234',
 'place' => '935',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Arakelots',
 'region' => '234',
 'place' => '936',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Nisibis',
 'region' => '235',
 'place' => '940',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Berkri',
 'region' => '236',
 'place' => '942',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Archesh',
 'region' => '236',
 'place' => '943',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ostan',
 'region' => '236',
 'place' => '944',
 'religion' => 'Greek Orthodox',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Beyhaq',
 'region' => '237',
 'place' => '946',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mashhad',
 'region' => '237',
 'place' => '947',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Konjikala',
 'region' => '237',
 'place' => '948',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kashmar',
 'region' => '238',
 'place' => '949',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Gonabad',
 'region' => '238',
 'place' => '950',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tabas',
 'region' => '238',
 'place' => '951',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Birjand',
 'region' => '238',
 'place' => '952',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kerman',
 'region' => '239',
 'place' => '953',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rafsanjan',
 'region' => '239',
 'place' => '955',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sirjan',
 'region' => '239',
 'place' => '956',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bushire',
 'region' => '240',
 'place' => '958',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Yasuj',
 'region' => '240',
 'place' => '960',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Yazd',
 'region' => '241',
 'place' => '963',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zavareh',
 'region' => '241',
 'place' => '964',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kashan',
 'region' => '242',
 'place' => '966',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Qazvin',
 'region' => '242',
 'place' => '968',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Astarabad',
 'region' => '243',
 'place' => '969',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rasht',
 'region' => '243',
 'place' => '972',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tabriz',
 'region' => '244',
 'place' => '973',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Sofian',
 'region' => '244',
 'place' => '974',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zanjan',
 'region' => '244',
 'place' => '975',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Ardabil',
 'region' => '244',
 'place' => '976',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kermanshah',
 'region' => '245',
 'place' => '978',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hadjar',
 'region' => '246',
 'place' => '983',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Taif',
 'region' => '247',
 'place' => '986',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jeddah',
 'region' => '247',
 'place' => '987',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Dedan',
 'region' => '248',
 'place' => '989',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tayma',
 'region' => '248',
 'place' => '991',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Maan',
 'region' => '248',
 'place' => '992',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hebron',
 'region' => '249',
 'place' => '995',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nazareth',
 'region' => '250',
 'place' => '998',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bosra',
 'region' => '251',
 'place' => '1001',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Irbid',
 'region' => '251',
 'place' => '1003',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Palmyra',
 'region' => '252',
 'place' => '1007',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[reeve] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Homs',
 'region' => '253',
 'place' => '1009',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Qusayr',
 'region' => '253',
 'place' => '1010',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Salamiyah',
 'region' => '253',
 'place' => '1011',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tartous',
 'region' => '254',
 'place' => '1014',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Alexandretta',
 'region' => '255',
 'place' => '1018',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Idlib',
 'region' => '255',
 'place' => '1019',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Afrin',
 'region' => '255',
 'place' => '1020',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[sheriff] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Bab',
 'region' => '256',
 'place' => '1023',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Safira',
 'region' => '256',
 'place' => '1024',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[bailiff] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_peasantry'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Zor',
 'region' => '257',
 'place' => '1028',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Erbil',
 'region' => '258',
 'place' => '1029',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kirkuk',
 'region' => '258',
 'place' => '1031',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Telafer',
 'region' => '258',
 'place' => '1032',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Tikrit',
 'region' => '259',
 'place' => '1034',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Anbar',
 'region' => '259',
 'place' => '1035',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Samarra',
 'region' => '259',
 'place' => '1036',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Samawah',
 'region' => '260',
 'place' => '1037',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);

DB::table('titles')->insert([
 'title_name' => '[lord-mayor] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '3',
 'career' => 'fixed_burgher'
]);


	  
	  
    }
}
