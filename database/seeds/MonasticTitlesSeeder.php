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

		//monastic 

	DB::table('titles')->insert([
	'title_name' => 'Bremen',
	'title_category' => 'abbot',
	'region' => '1',
	'place' => '1',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamburg',
	'title_category' => 'abbot',
	'region' => '1',
	'place' => '3',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corvey',
	'title_category' => 'prince abbot',
	'region' => '1',
	'place' => '4',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meissen',
	'title_category' => 'abbot',
	'region' => '2',
	'place' => '5',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dresden',
	'title_category' => 'abbot',
	'region' => '2',
	'place' => '6',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erfurt',
	'title_category' => 'abbot',
	'region' => '2',
	'place' => '7',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chemnitz',
	'title_category' => 'abbot',
	'region' => '2',
	'place' => '8',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merseburg',
	'title_category' => 'abbot',
	'region' => '3',
	'place' => '10',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gernrode',
	'title_category' => 'prince abbot',
	'region' => '3',
	'place' => '12',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schwerin',
	'title_category' => 'abbot',
	'region' => '4',
	'place' => '13',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Broda',
	'title_category' => 'abbot',
	'region' => '4',
	'place' => '16',
	'quarter' => '16044',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzwedel',
	'title_category' => 'abbot',
	'region' => '5',
	'place' => '18',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Havelberg',
	'title_category' => 'abbot',
	'region' => '5',
	'place' => '19',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lindow',
	'title_category' => 'abbot',
	'region' => '5',
	'place' => '20',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolberg',
	'title_category' => 'abbot',
	'region' => '6',
	'place' => '23',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifswald',
	'title_category' => 'abbot',
	'region' => '6',
	'place' => '24',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osnabruck',
	'title_category' => 'abbot',
	'region' => '7',
	'place' => '27',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderborn',
	'title_category' => 'abbot',
	'region' => '7',
	'place' => '28',
	'quarter' => '16045',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Augsburg',
	'title_category' => 'abbot',
	'region' => '8',
	'place' => '30',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wurzburg',
	'title_category' => 'abbot',
	'region' => '8',
	'place' => '31',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nuremberg',
	'title_category' => 'abbot',
	'region' => '8',
	'place' => '32',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzburg',
	'title_category' => 'abbot',
	'region' => '9',
	'place' => '33',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berchtesgaden',
	'title_category' => 'prince provost',
	'region' => '9',
	'place' => '36',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienna',
	'title_category' => 'abbot',
	'region' => '10',
	'place' => '37',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Polten',
	'title_category' => 'abbot',
	'region' => '10',
	'place' => '39',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pressburg',
	'title_category' => 'abbot',
	'region' => '10',
	'place' => '40',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Seckau',
	'title_category' => 'abbot',
	'region' => '11',
	'place' => '44',
	'quarter' => '16046',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Innsbruck',
	'title_category' => 'abbot',
	'region' => '12',
	'place' => '45',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bozen',
	'title_category' => 'abbot',
	'region' => '12',
	'place' => '46',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trent',
	'title_category' => 'abbot',
	'region' => '12',
	'place' => '47',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brixen',
	'title_category' => 'abbot',
	'region' => '12',
	'place' => '48',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Gallen',
	'title_category' => 'prince abbot',
	'region' => '14',
	'place' => '56',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Strassbourg',
	'title_category' => 'abbot',
	'region' => '15',
	'place' => '59',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wissembourg',
	'title_category' => 'prince abbot',
	'region' => '15',
	'place' => '60',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plass',
	'title_category' => 'abbot',
	'region' => '16',
	'place' => '64',
	'quarter' => '16047',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olmutz',
	'title_category' => 'abbot',
	'region' => '17',
	'place' => '67',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebitz',
	'title_category' => 'abbot',
	'region' => '17',
	'place' => '68',
	'quarter' => '16048',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heidelberg',
	'title_category' => 'abbot',
	'region' => '18',
	'place' => '70',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fulda',
	'title_category' => 'prince abbot',
	'region' => '18',
	'place' => '72',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cologne',
	'title_category' => 'abbot',
	'region' => '19',
	'place' => '73',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liege',
	'title_category' => 'abbot',
	'region' => '19',
	'place' => '75',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavelot',
	'title_category' => 'prince abbot',
	'region' => '19',
	'place' => '76',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pruem',
	'title_category' => 'prince abbot',
	'region' => '20',
	'place' => '80',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guelders',
	'title_category' => 'abbot',
	'region' => '21',
	'place' => '81',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Deventer',
	'title_category' => 'abbot',
	'region' => '21',
	'place' => '84',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amsterdam',
	'title_category' => 'abbot',
	'region' => '22',
	'place' => '88',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Groningen',
	'title_category' => 'abbot',
	'region' => '23',
	'place' => '91',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dokkum',
	'title_category' => 'abbot',
	'region' => '23',
	'place' => '92',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Louvain',
	'title_category' => 'abbot',
	'region' => '24',
	'place' => '93',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antwerp',
	'title_category' => 'abbot',
	'region' => '24',
	'place' => '95',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thorn',
	'title_category' => 'prince abbot',
	'region' => '24',
	'place' => '96',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bruges',
	'title_category' => 'abbot',
	'region' => '25',
	'place' => '97',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghent',
	'title_category' => 'abbot',
	'region' => '25',
	'place' => '98',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambrai',
	'title_category' => 'abbot',
	'region' => '25',
	'place' => '99',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ypres',
	'title_category' => 'abbot',
	'region' => '25',
	'place' => '100',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorizia',
	'title_category' => 'abbot',
	'region' => '26',
	'place' => '103',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moosburg',
	'title_category' => 'abbot',
	'region' => '26',
	'place' => '104',
	'quarter' => '16049',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laibach',
	'title_category' => 'abbot',
	'region' => '27',
	'place' => '107',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sittich',
	'title_category' => 'abbot',
	'region' => '27',
	'place' => '108',
	'quarter' => '16050',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vannes',
	'title_category' => 'abbot',
	'region' => '28',
	'place' => '109',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Quimper',
	'title_category' => 'abbot',
	'region' => '28',
	'place' => '111',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redon',
	'title_category' => 'abbot',
	'region' => '28',
	'place' => '112',
	'quarter' => '16051',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meaux',
	'title_category' => 'abbot',
	'region' => '29',
	'place' => '114',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chartres',
	'title_category' => 'abbot',
	'region' => '29',
	'place' => '115',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Denis',
	'title_category' => 'abbot',
	'region' => '29',
	'place' => '116',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verdun',
	'title_category' => 'abbot',
	'region' => '30',
	'place' => '119',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laon',
	'title_category' => 'abbot',
	'region' => '31',
	'place' => '123',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Omer',
	'title_category' => 'abbot',
	'region' => '31',
	'place' => '124',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rouen',
	'title_category' => 'abbot',
	'region' => '32',
	'place' => '125',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caen',
	'title_category' => 'abbot',
	'region' => '32',
	'place' => '126',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisieux',
	'title_category' => 'abbot',
	'region' => '32',
	'place' => '127',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayeux',
	'title_category' => 'abbot',
	'region' => '32',
	'place' => '128',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clairvaux',
	'title_category' => 'abbot',
	'region' => '33',
	'place' => '132',
	'quarter' => '16052',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orleans',
	'title_category' => 'abbot',
	'region' => '34',
	'place' => '133',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vendome',
	'title_category' => 'abbot',
	'region' => '34',
	'place' => '136',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tours',
	'title_category' => 'abbot',
	'region' => '35',
	'place' => '137',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Loches',
	'title_category' => 'abbot',
	'region' => '35',
	'place' => '140',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angers',
	'title_category' => 'abbot',
	'region' => '36',
	'place' => '141',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laval',
	'title_category' => 'abbot',
	'region' => '36',
	'place' => '144',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vauclair',
	'title_category' => 'abbot',
	'region' => '37',
	'place' => '148',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bourges',
	'title_category' => 'abbot',
	'region' => '38',
	'place' => '149',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chateauroux',
	'title_category' => 'abbot',
	'region' => '38',
	'place' => '150',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vezelay',
	'title_category' => 'abbot',
	'region' => '38',
	'place' => '152',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montlucon',
	'title_category' => 'abbot',
	'region' => '39',
	'place' => '154',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vichy',
	'title_category' => 'abbot',
	'region' => '39',
	'place' => '156',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Issoire',
	'title_category' => 'abbot',
	'region' => '40',
	'place' => '160',
	'quarter' => '16053',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arles',
	'title_category' => 'abbot',
	'region' => '41',
	'place' => '161',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Benoit',
	'title_category' => 'abbot',
	'region' => '42',
	'place' => '168',
	'quarter' => '16054',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bordeaux',
	'title_category' => 'abbot',
	'region' => '43',
	'place' => '169',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Auch',
	'title_category' => 'abbot',
	'region' => '43',
	'place' => '171',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montauban',
	'title_category' => 'abbot',
	'region' => '43',
	'place' => '172',
	'quarter' => '16055',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angouleme',
	'title_category' => 'abbot',
	'region' => '44',
	'place' => '173',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limoges',
	'title_category' => 'abbot',
	'region' => '44',
	'place' => '174',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perigeux',
	'title_category' => 'abbot',
	'region' => '44',
	'place' => '175',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulle',
	'title_category' => 'abbot',
	'region' => '44',
	'place' => '176',
	'quarter' => '16056',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grenoble',
	'title_category' => 'abbot',
	'region' => '45',
	'place' => '177',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienne',
	'title_category' => 'abbot',
	'region' => '45',
	'place' => '178',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyon',
	'title_category' => 'abbot',
	'region' => '45',
	'place' => '179',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Autun',
	'title_category' => 'abbot',
	'region' => '45',
	'place' => '180',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Citeaux',
	'title_category' => 'abbot',
	'region' => '46',
	'place' => '184',
	'quarter' => '16057',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Westminster',
	'title_category' => 'abbot',
	'region' => '47',
	'place' => '188',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Canterbury',
	'title_category' => 'abbot',
	'region' => '48',
	'place' => '189',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maidstone',
	'title_category' => 'abbot',
	'region' => '48',
	'place' => '192',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Winchester',
	'title_category' => 'abbot',
	'region' => '49',
	'place' => '193',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wells',
	'title_category' => 'abbot',
	'region' => '49',
	'place' => '195',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wimborne',
	'title_category' => 'abbot',
	'region' => '49',
	'place' => '196',
	'quarter' => '16058',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bodmin',
	'title_category' => 'abbot',
	'region' => '50',
	'place' => '198',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint German',
	'title_category' => 'abbot',
	'region' => '50',
	'place' => '199',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Madron',
	'title_category' => 'abbot',
	'region' => '50',
	'place' => '200',
	'quarter' => '16059',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ipswich',
	'title_category' => 'abbot',
	'region' => '51',
	'place' => '202',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Edmunds',
	'title_category' => 'abbot',
	'region' => '51',
	'place' => '203',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Croxton',
	'title_category' => 'abbot',
	'region' => '51',
	'place' => '204',
	'quarter' => '16060',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'York',
	'title_category' => 'abbot',
	'region' => '52',
	'place' => '205',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durham',
	'title_category' => 'abbot',
	'region' => '52',
	'place' => '206',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lancaster',
	'title_category' => 'abbot',
	'region' => '52',
	'place' => '208',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Worcester',
	'title_category' => 'abbot',
	'region' => '53',
	'place' => '209',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gloucester',
	'title_category' => 'abbot',
	'region' => '53',
	'place' => '210',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ely',
	'title_category' => 'abbot',
	'region' => '54',
	'place' => '213',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambridge',
	'title_category' => 'abbot',
	'region' => '54',
	'place' => '214',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Albans',
	'title_category' => 'abbot',
	'region' => '54',
	'place' => '216',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stafford',
	'title_category' => 'abbot',
	'region' => '55',
	'place' => '219',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leicester',
	'title_category' => 'abbot',
	'region' => '55',
	'place' => '220',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nottingham',
	'title_category' => 'abbot',
	'region' => '56',
	'place' => '222',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boston',
	'title_category' => 'abbot',
	'region' => '56',
	'place' => '223',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stamford',
	'title_category' => 'abbot',
	'region' => '56',
	'place' => '224',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bangor',
	'title_category' => 'abbot',
	'region' => '57',
	'place' => '227',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Conwy',
	'title_category' => 'abbot',
	'region' => '57',
	'place' => '228',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shrewsbury',
	'title_category' => 'abbot',
	'region' => '58',
	'place' => '230',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasbury',
	'title_category' => 'abbot',
	'region' => '58',
	'place' => '231',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Llanllugan',
	'title_category' => 'abbot',
	'region' => '58',
	'place' => '232',
	'quarter' => '16061',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerwent',
	'title_category' => 'abbot',
	'region' => '59',
	'place' => '233',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carmarthen',
	'title_category' => 'abbot',
	'region' => '59',
	'place' => '234',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Abergavenny',
	'title_category' => 'abbot',
	'region' => '59',
	'place' => '236',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oslo',
	'title_category' => 'abbot',
	'region' => '60',
	'place' => '237',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tonsborg',
	'title_category' => 'abbot',
	'region' => '60',
	'place' => '238',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gimsoy',
	'title_category' => 'abbot',
	'region' => '60',
	'place' => '240',
	'quarter' => '16062',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bergen',
	'title_category' => 'abbot',
	'region' => '61',
	'place' => '241',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavanger',
	'title_category' => 'abbot',
	'region' => '61',
	'place' => '243',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halsnoy',
	'title_category' => 'abbot',
	'region' => '61',
	'place' => '244',
	'quarter' => '16063',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Copenhagen',
	'title_category' => 'abbot',
	'region' => '62',
	'place' => '245',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalundborg',
	'title_category' => 'abbot',
	'region' => '62',
	'place' => '246',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roskilde',
	'title_category' => 'abbot',
	'region' => '62',
	'place' => '247',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esrum',
	'title_category' => 'abbot',
	'region' => '62',
	'place' => '248',
	'quarter' => '16064',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lund',
	'title_category' => 'abbot',
	'region' => '63',
	'place' => '249',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trelleborg',
	'title_category' => 'abbot',
	'region' => '63',
	'place' => '250',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halmstad',
	'title_category' => 'abbot',
	'region' => '63',
	'place' => '251',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Herrevad',
	'title_category' => 'abbot',
	'region' => '63',
	'place' => '252',
	'quarter' => '16065',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aarhus',
	'title_category' => 'abbot',
	'region' => '64',
	'place' => '253',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aalborg',
	'title_category' => 'abbot',
	'region' => '64',
	'place' => '254',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripen',
	'title_category' => 'abbot',
	'region' => '64',
	'place' => '255',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Essenbaek',
	'title_category' => 'abbot',
	'region' => '64',
	'place' => '256',
	'quarter' => '16066',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stockholm',
	'title_category' => 'abbot',
	'region' => '65',
	'place' => '257',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vasteras',
	'title_category' => 'abbot',
	'region' => '65',
	'place' => '258',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Uppsala',
	'title_category' => 'abbot',
	'region' => '65',
	'place' => '259',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eskilstuna',
	'title_category' => 'abbot',
	'region' => '65',
	'place' => '260',
	'quarter' => '16067',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visby',
	'title_category' => 'abbot',
	'region' => '66',
	'place' => '261',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalmar',
	'title_category' => 'abbot',
	'region' => '66',
	'place' => '262',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vaxjo',
	'title_category' => 'abbot',
	'region' => '66',
	'place' => '263',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nydala',
	'title_category' => 'abbot',
	'region' => '66',
	'place' => '264',
	'quarter' => '16068',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skara',
	'title_category' => 'abbot',
	'region' => '67',
	'place' => '265',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jonkoping',
	'title_category' => 'abbot',
	'region' => '67',
	'place' => '267',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vadstena',
	'title_category' => 'abbot',
	'region' => '67',
	'place' => '268',
	'quarter' => '16069',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edinburgh',
	'title_category' => 'abbot',
	'region' => '73',
	'place' => '289',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Haddington',
	'title_category' => 'abbot',
	'region' => '73',
	'place' => '292',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bamburgh',
	'title_category' => 'abbot',
	'region' => '74',
	'place' => '293',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berwick',
	'title_category' => 'abbot',
	'region' => '74',
	'place' => '295',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jedburgh',
	'title_category' => 'abbot',
	'region' => '74',
	'place' => '296',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dumbarton',
	'title_category' => 'abbot',
	'region' => '75',
	'place' => '297',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasgow',
	'title_category' => 'abbot',
	'region' => '75',
	'place' => '299',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ayr',
	'title_category' => 'abbot',
	'region' => '75',
	'place' => '300',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carlisle',
	'title_category' => 'abbot',
	'region' => '76',
	'place' => '301',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Whithorn',
	'title_category' => 'abbot',
	'region' => '76',
	'place' => '303',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkcudbright',
	'title_category' => 'abbot',
	'region' => '76',
	'place' => '304',
	'quarter' => '16071',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iona',
	'title_category' => 'abbot',
	'region' => '77',
	'place' => '308',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perth',
	'title_category' => 'abbot',
	'region' => '78',
	'place' => '309',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Andrews',
	'title_category' => 'abbot',
	'region' => '78',
	'place' => '311',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunfermline',
	'title_category' => 'abbot',
	'region' => '78',
	'place' => '312',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elgin',
	'title_category' => 'abbot',
	'region' => '79',
	'place' => '313',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mortlach',
	'title_category' => 'abbot',
	'region' => '79',
	'place' => '315',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aberdeen',
	'title_category' => 'abbot',
	'region' => '79',
	'place' => '316',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dundee',
	'title_category' => 'abbot',
	'region' => '80',
	'place' => '317',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scone',
	'title_category' => 'abbot',
	'region' => '80',
	'place' => '319',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arbroath',
	'title_category' => 'abbot',
	'region' => '80',
	'place' => '320',
	'quarter' => '16072',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosemarkie',
	'title_category' => 'abbot',
	'region' => '81',
	'place' => '323',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dornoch',
	'title_category' => 'abbot',
	'region' => '81',
	'place' => '324',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kildare',
	'title_category' => 'abbot',
	'region' => '82',
	'place' => '327',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Millmount',
	'title_category' => 'abbot',
	'region' => '82',
	'place' => '328',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Armagh',
	'title_category' => 'abbot',
	'region' => '83',
	'place' => '329',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrickfergus',
	'title_category' => 'abbot',
	'region' => '83',
	'place' => '330',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derry',
	'title_category' => 'abbot',
	'region' => '83',
	'place' => '331',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clogher',
	'title_category' => 'abbot',
	'region' => '83',
	'place' => '332',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kells',
	'title_category' => 'abbot',
	'region' => '84',
	'place' => '334',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Waterford',
	'title_category' => 'abbot',
	'region' => '84',
	'place' => '335',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durrow',
	'title_category' => 'abbot',
	'region' => '84',
	'place' => '336',
	'quarter' => '16073',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cashel',
	'title_category' => 'abbot',
	'region' => '85',
	'place' => '337',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limerick',
	'title_category' => 'abbot',
	'region' => '85',
	'place' => '338',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cork',
	'title_category' => 'abbot',
	'region' => '85',
	'place' => '339',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roscrea',
	'title_category' => 'abbot',
	'region' => '85',
	'place' => '340',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Galway',
	'title_category' => 'abbot',
	'region' => '86',
	'place' => '341',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mayo',
	'title_category' => 'abbot',
	'region' => '86',
	'place' => '342',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tuam',
	'title_category' => 'abbot',
	'region' => '86',
	'place' => '343',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achonry',
	'title_category' => 'abbot',
	'region' => '86',
	'place' => '344',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leyre',
	'title_category' => 'abbot',
	'region' => '87',
	'place' => '348',
	'quarter' => '16074',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Sebastian',
	'title_category' => 'abbot',
	'region' => '88',
	'place' => '349',
	'quarter' => '16075',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaca',
	'title_category' => 'abbot',
	'region' => '89',
	'place' => '353',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huesca',
	'title_category' => 'abbot',
	'region' => '89',
	'place' => '355',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sobrarbe',
	'title_category' => 'abbot',
	'region' => '89',
	'place' => '356',
	'quarter' => '16076',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaragoza',
	'title_category' => 'abbot',
	'region' => '90',
	'place' => '357',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albarracin',
	'title_category' => 'abbot',
	'region' => '90',
	'place' => '359',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rueda',
	'title_category' => 'abbot',
	'region' => '90',
	'place' => '360',
	'quarter' => '16077',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripoll',
	'title_category' => 'abbot',
	'region' => '91',
	'place' => '362',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sant Feliu de Guixols',
	'title_category' => 'abbot',
	'region' => '91',
	'place' => '364',
	'quarter' => '16078',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monserrat',
	'title_category' => 'abbot',
	'region' => '92',
	'place' => '368',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Castellon',
	'title_category' => 'abbot',
	'region' => '93',
	'place' => '371',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Serra',
	'title_category' => 'abbot',
	'region' => '93',
	'place' => '372',
	'quarter' => '16079',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gandia',
	'title_category' => 'abbot',
	'region' => '94',
	'place' => '376',
	'quarter' => '16080',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menorca',
	'title_category' => 'abbot',
	'region' => '95',
	'place' => '379',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ibiza',
	'title_category' => 'abbot',
	'region' => '95',
	'place' => '380',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leon',
	'title_category' => 'abbot',
	'region' => '96',
	'place' => '381',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Guillermo',
	'title_category' => 'abbot',
	'region' => '96',
	'place' => '383',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sahagun',
	'title_category' => 'abbot',
	'region' => '96',
	'place' => '384',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oviedo',
	'title_category' => 'abbot',
	'region' => '97',
	'place' => '385',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santo Toribio',
	'title_category' => 'abbot',
	'region' => '97',
	'place' => '388',
	'quarter' => '16081',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valladolid',
	'title_category' => 'abbot',
	'region' => '98',
	'place' => '389',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avila',
	'title_category' => 'abbot',
	'region' => '98',
	'place' => '390',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamanca',
	'title_category' => 'abbot',
	'region' => '98',
	'place' => '392',
	'quarter' => '16082',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Burgos',
	'title_category' => 'abbot',
	'region' => '99',
	'place' => '393',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palencia',
	'title_category' => 'abbot',
	'region' => '99',
	'place' => '395',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Millan',
	'title_category' => 'abbot',
	'region' => '99',
	'place' => '396',
	'quarter' => '16083',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santiago',
	'title_category' => 'abbot',
	'region' => '100',
	'place' => '397',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ourense',
	'title_category' => 'abbot',
	'region' => '100',
	'place' => '398',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coruna',
	'title_category' => 'abbot',
	'region' => '100',
	'place' => '399',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcobaca',
	'title_category' => 'abbot',
	'region' => '101',
	'place' => '404',
	'quarter' => '16084',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto',
	'title_category' => 'abbot',
	'region' => '102',
	'place' => '405',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guimaraes',
	'title_category' => 'abbot',
	'region' => '102',
	'place' => '406',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aveiro',
	'title_category' => 'abbot',
	'region' => '102',
	'place' => '408',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Braganca',
	'title_category' => 'abbot',
	'region' => '103',
	'place' => '409',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coimbra',
	'title_category' => 'abbot',
	'region' => '104',
	'place' => '413',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Evora',
	'title_category' => 'abbot',
	'region' => '105',
	'place' => '417',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Faro',
	'title_category' => 'abbot',
	'region' => '106',
	'place' => '421',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Silves',
	'title_category' => 'abbot',
	'region' => '106',
	'place' => '424',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cordoba',
	'title_category' => 'abbot',
	'region' => '107',
	'place' => '425',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ecija',
	'title_category' => 'abbot',
	'region' => '107',
	'place' => '428',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevilla',
	'title_category' => 'abbot',
	'region' => '108',
	'place' => '429',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Talavera',
	'title_category' => 'abbot',
	'region' => '110',
	'place' => '440',
	'quarter' => '16088',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Murcia',
	'title_category' => 'abbot',
	'region' => '113',
	'place' => '449',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ronda',
	'title_category' => 'abbot',
	'region' => '114',
	'place' => '456',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Milan',
	'title_category' => 'abbot',
	'region' => '115',
	'place' => '457',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brescia',
	'title_category' => 'abbot',
	'region' => '115',
	'place' => '458',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pavia',
	'title_category' => 'abbot',
	'region' => '115',
	'place' => '459',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cremona',
	'title_category' => 'abbot',
	'region' => '115',
	'place' => '460',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verona',
	'title_category' => 'abbot',
	'region' => '116',
	'place' => '461',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Padua',
	'title_category' => 'abbot',
	'region' => '116',
	'place' => '462',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vicenza',
	'title_category' => 'abbot',
	'region' => '116',
	'place' => '463',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mantua',
	'title_category' => 'abbot',
	'region' => '116',
	'place' => '464',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleria',
	'title_category' => 'abbot',
	'region' => '117',
	'place' => '467',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bobbio',
	'title_category' => 'abbot',
	'region' => '117',
	'place' => '468',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treviso',
	'title_category' => 'abbot',
	'region' => '118',
	'place' => '470',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chioggia',
	'title_category' => 'abbot',
	'region' => '118',
	'place' => '471',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belluno',
	'title_category' => 'abbot',
	'region' => '118',
	'place' => '472',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ravenna',
	'title_category' => 'abbot',
	'region' => '119',
	'place' => '473',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cesena',
	'title_category' => 'abbot',
	'region' => '119',
	'place' => '474',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forli',
	'title_category' => 'abbot',
	'region' => '119',
	'place' => '475',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rimini',
	'title_category' => 'abbot',
	'region' => '119',
	'place' => '476',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modena',
	'title_category' => 'abbot',
	'region' => '120',
	'place' => '477',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Parma',
	'title_category' => 'abbot',
	'region' => '120',
	'place' => '478',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ferrara',
	'title_category' => 'abbot',
	'region' => '120',
	'place' => '479',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bologna',
	'title_category' => 'abbot',
	'region' => '120',
	'place' => '480',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquileja',
	'title_category' => 'abbot',
	'region' => '121',
	'place' => '481',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Udine',
	'title_category' => 'abbot',
	'region' => '121',
	'place' => '483',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gemona',
	'title_category' => 'abbot',
	'region' => '121',
	'place' => '484',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turin',
	'title_category' => 'abbot',
	'region' => '122',
	'place' => '485',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ivrea',
	'title_category' => 'abbot',
	'region' => '122',
	'place' => '486',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinerollo',
	'title_category' => 'prince abbot',
	'region' => '122',
	'place' => '488',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Florence',
	'title_category' => 'abbot',
	'region' => '123',
	'place' => '489',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arezzo',
	'title_category' => 'abbot',
	'region' => '123',
	'place' => '491',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grosseto',
	'title_category' => 'abbot',
	'region' => '123',
	'place' => '492',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Spoleto',
	'title_category' => 'abbot',
	'region' => '124',
	'place' => '493',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquila',
	'title_category' => 'abbot',
	'region' => '124',
	'place' => '494',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancona',
	'title_category' => 'abbot',
	'region' => '124',
	'place' => '495',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Assissi',
	'title_category' => 'abbot',
	'region' => '124',
	'place' => '496',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frascati',
	'title_category' => 'abbot',
	'region' => '125',
	'place' => '498',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tivoli',
	'title_category' => 'abbot',
	'region' => '125',
	'place' => '499',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Subiaco',
	'title_category' => 'abbot',
	'region' => '125',
	'place' => '500',
	'quarter' => '16089',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrara',
	'title_category' => 'abbot',
	'region' => '126',
	'place' => '502',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lucca',
	'title_category' => 'abbot',
	'region' => '126',
	'place' => '503',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Volterra',
	'title_category' => 'abbot',
	'region' => '126',
	'place' => '504',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Naples',
	'title_category' => 'abbot',
	'region' => '127',
	'place' => '505',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amalfi',
	'title_category' => 'abbot',
	'region' => '127',
	'place' => '507',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cassino',
	'title_category' => 'abbot',
	'region' => '127',
	'place' => '508',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taranto',
	'title_category' => 'abbot',
	'region' => '128',
	'place' => '509',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brindisi',
	'title_category' => 'abbot',
	'region' => '128',
	'place' => '512',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cosenza',
	'title_category' => 'abbot',
	'region' => '129',
	'place' => '513',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rossano',
	'title_category' => 'abbot',
	'region' => '129',
	'place' => '514',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tropea',
	'title_category' => 'abbot',
	'region' => '129',
	'place' => '515',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vivarium',
	'title_category' => 'abbot',
	'region' => '129',
	'place' => '516',
	'quarter' => '16090',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monteverde',
	'title_category' => 'abbot',
	'region' => '130',
	'place' => '518',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Potenza',
	'title_category' => 'abbot',
	'region' => '130',
	'place' => '519',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viggiano',
	'title_category' => 'abbot',
	'region' => '130',
	'place' => '520',
	'quarter' => '16091',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sassari',
	'title_category' => 'abbot',
	'region' => '131',
	'place' => '521',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosa',
	'title_category' => 'abbot',
	'region' => '131',
	'place' => '523',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto Torres',
	'title_category' => 'abbot',
	'region' => '131',
	'place' => '524',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cagliari',
	'title_category' => 'abbot',
	'region' => '132',
	'place' => '525',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dolia',
	'title_category' => 'abbot',
	'region' => '132',
	'place' => '527',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iglesias',
	'title_category' => 'abbot',
	'region' => '132',
	'place' => '528',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cefalu',
	'title_category' => 'abbot',
	'region' => '133',
	'place' => '531',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taormina',
	'title_category' => 'abbot',
	'region' => '134',
	'place' => '534',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Catania',
	'title_category' => 'abbot',
	'region' => '134',
	'place' => '535',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troina',
	'title_category' => 'abbot',
	'region' => '134',
	'place' => '536',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rabat',
	'title_category' => 'abbot',
	'region' => '137',
	'place' => '546',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabarka',
	'title_category' => 'abbot',
	'region' => '148',
	'place' => '590',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kairouan',
	'title_category' => 'abbot',
	'region' => '150',
	'place' => '597',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sousse',
	'title_category' => 'abbot',
	'region' => '150',
	'place' => '598',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benghazi',
	'title_category' => 'abbot',
	'region' => '156',
	'place' => '621',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandria',
	'title_category' => 'abbot',
	'region' => '157',
	'place' => '625',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damietta',
	'title_category' => 'abbot',
	'region' => '157',
	'place' => '627',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cairo',
	'title_category' => 'abbot',
	'region' => '158',
	'place' => '629',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Natrun',
	'title_category' => 'abbot',
	'region' => '158',
	'place' => '632',
	'quarter' => '16093',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minya',
	'title_category' => 'abbot',
	'region' => '159',
	'place' => '633',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siwa',
	'title_category' => 'abbot',
	'region' => '159',
	'place' => '634',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anba Boula',
	'title_category' => 'abbot',
	'region' => '159',
	'place' => '636',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kharga',
	'title_category' => 'abbot',
	'region' => '160',
	'place' => '638',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zinaiqa',
	'title_category' => 'abbot',
	'region' => '160',
	'place' => '640',
	'quarter' => '16094',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leubus',
	'title_category' => 'prince abbot',
	'region' => '161',
	'place' => '644',
	'quarter' => '16095',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krakow',
	'title_category' => 'abbot',
	'region' => '162',
	'place' => '645',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Teczyn',
	'title_category' => 'abbot',
	'region' => '162',
	'place' => '646',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzberg',
	'title_category' => 'abbot',
	'region' => '162',
	'place' => '648',
	'quarter' => '16096',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gnesen',
	'title_category' => 'abbot',
	'region' => '163',
	'place' => '649',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Posen',
	'title_category' => 'abbot',
	'region' => '163',
	'place' => '650',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konin',
	'title_category' => 'abbot',
	'region' => '163',
	'place' => '651',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalisz',
	'title_category' => 'abbot',
	'region' => '163',
	'place' => '652',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plock',
	'title_category' => 'abbot',
	'region' => '164',
	'place' => '653',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leslau',
	'title_category' => 'abbot',
	'region' => '164',
	'place' => '655',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Radomir',
	'title_category' => 'abbot',
	'region' => '164',
	'place' => '656',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tracken',
	'title_category' => 'abbot',
	'region' => '166',
	'place' => '661',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vilnius',
	'title_category' => 'abbot',
	'region' => '166',
	'place' => '662',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minsk',
	'title_category' => 'abbot',
	'region' => '166',
	'place' => '664',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pula',
	'title_category' => 'abbot',
	'region' => '167',
	'place' => '665',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zadar',
	'title_category' => 'abbot',
	'region' => '168',
	'place' => '670',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Split',
	'title_category' => 'abbot',
	'region' => '168',
	'place' => '671',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Knin',
	'title_category' => 'abbot',
	'region' => '169',
	'place' => '673',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bihac',
	'title_category' => 'abbot',
	'region' => '169',
	'place' => '674',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kotor',
	'title_category' => 'abbot',
	'region' => '169',
	'place' => '676',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nitra',
	'title_category' => 'abbot',
	'region' => '170',
	'place' => '679',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Veszprem',
	'title_category' => 'abbot',
	'region' => '171',
	'place' => '681',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'abbot',
	'region' => '171',
	'place' => '684',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eger',
	'title_category' => 'abbot',
	'region' => '173',
	'place' => '689',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diosgyor',
	'title_category' => 'abbot',
	'region' => '173',
	'place' => '690',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bartfeld',
	'title_category' => 'abbot',
	'region' => '173',
	'place' => '691',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buda',
	'title_category' => 'abbot',
	'region' => '174',
	'place' => '693',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zounok',
	'title_category' => 'abbot',
	'region' => '174',
	'place' => '696',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'abbot',
	'region' => '175',
	'place' => '697',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalocsa',
	'title_category' => 'abbot',
	'region' => '175',
	'place' => '699',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alba Julia',
	'title_category' => 'abbot',
	'region' => '176',
	'place' => '701',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carta',
	'title_category' => 'abbot',
	'region' => '176',
	'place' => '704',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tismana',
	'title_category' => 'abbot',
	'region' => '177',
	'place' => '708',
	'quarter' => '16097',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kronstadt',
	'title_category' => 'abbot',
	'region' => '178',
	'place' => '712',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orhei',
	'title_category' => 'abbot',
	'region' => '180',
	'place' => '718',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chisinau',
	'title_category' => 'abbot',
	'region' => '180',
	'place' => '720',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rila',
	'title_category' => 'abbot',
	'region' => '181',
	'place' => '724',
	'quarter' => '16098',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visegrad',
	'title_category' => 'abbot',
	'region' => '183',
	'place' => '732',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasa',
	'title_category' => 'abbot',
	'region' => '184',
	'place' => '734',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'abbot',
	'region' => '184',
	'place' => '736',
	'quarter' => '16099',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'abbot',
	'region' => '185',
	'place' => '738',
	'quarter' => '16100',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zica',
	'title_category' => 'abbot',
	'region' => '185',
	'place' => '740',
	'quarter' => '16101',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prizren',
	'title_category' => 'abbot',
	'region' => '186',
	'place' => '741',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitina',
	'title_category' => 'abbot',
	'region' => '186',
	'place' => '744',
	'quarter' => '16102',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pec',
	'title_category' => 'abbot',
	'region' => '187',
	'place' => '747',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berane',
	'title_category' => 'abbot',
	'region' => '187',
	'place' => '748',
	'quarter' => '16103',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monastyrski',
	'title_category' => 'abbot',
	'region' => '188',
	'place' => '749',
	'quarter' => '16104',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pechersk',
	'title_category' => 'abbot',
	'region' => '190',
	'place' => '760',
	'quarter' => '16105',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Korosten',
	'title_category' => 'abbot',
	'region' => '192',
	'place' => '768',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mazyr',
	'title_category' => 'abbot',
	'region' => '193',
	'place' => '772',
	'quarter' => '16106',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roslav',
	'title_category' => 'abbot',
	'region' => '195',
	'place' => '780',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tula',
	'title_category' => 'abbot',
	'region' => '196',
	'place' => '784',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Simonov',
	'title_category' => 'abbot',
	'region' => '197',
	'place' => '788',
	'quarter' => '16108',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleskov',
	'title_category' => 'abbot',
	'region' => '198',
	'place' => '789',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gdov',
	'title_category' => 'abbot',
	'region' => '198',
	'place' => '792',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novgorod',
	'title_category' => 'abbot',
	'region' => '199',
	'place' => '793',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schlisselburg',
	'title_category' => 'abbot',
	'region' => '199',
	'place' => '796',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ufa',
	'title_category' => 'abbot',
	'region' => '200',
	'place' => '800',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vladimir',
	'title_category' => 'abbot',
	'region' => '201',
	'place' => '801',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nizhny',
	'title_category' => 'abbot',
	'region' => '201',
	'place' => '804',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cherepovets',
	'title_category' => 'abbot',
	'region' => '202',
	'place' => '807',
	'quarter' => '16109',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirillov',
	'title_category' => 'abbot',
	'region' => '202',
	'place' => '808',
	'quarter' => '16110',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olgov',
	'title_category' => 'abbot',
	'region' => '204',
	'place' => '816',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constantinople',
	'title_category' => 'abbot',
	'region' => '207',
	'place' => '825',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thessaloniki',
	'title_category' => 'abbot',
	'region' => '208',
	'place' => '829',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hilandar',
	'title_category' => 'abbot',
	'region' => '208',
	'place' => '832',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Athens',
	'title_category' => 'abbot',
	'region' => '209',
	'place' => '833',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ohrid',
	'title_category' => 'abbot',
	'region' => '212',
	'place' => '847',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Jovan',
	'title_category' => 'abbot',
	'region' => '212',
	'place' => '848',
	'quarter' => '16111',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chios',
	'title_category' => 'abbot',
	'region' => '215',
	'place' => '859',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patmos',
	'title_category' => 'abbot',
	'region' => '215',
	'place' => '860',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Miletus',
	'title_category' => 'abbot',
	'region' => '216',
	'place' => '862',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Efese',
	'title_category' => 'abbot',
	'region' => '216',
	'place' => '863',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bursa',
	'title_category' => 'abbot',
	'region' => '217',
	'place' => '867',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laranda',
	'title_category' => 'abbot',
	'region' => '218',
	'place' => '871',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caesarea',
	'title_category' => 'abbot',
	'region' => '223',
	'place' => '889',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebizond',
	'title_category' => 'abbot',
	'region' => '224',
	'place' => '893',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sivas',
	'title_category' => 'abbot',
	'region' => '228',
	'place' => '909',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kutais',
	'title_category' => 'abbot',
	'region' => '229',
	'place' => '916',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiflis',
	'title_category' => 'abbot',
	'region' => '230',
	'place' => '917',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Akhalkalaki',
	'title_category' => 'abbot',
	'region' => '230',
	'place' => '920',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Balanjar',
	'title_category' => 'abbot',
	'region' => '231',
	'place' => '924',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirants',
	'title_category' => 'abbot',
	'region' => '232',
	'place' => '928',
	'quarter' => '16112',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghaberd',
	'title_category' => 'abbot',
	'region' => '233',
	'place' => '932',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arakelots',
	'title_category' => 'abbot',
	'region' => '234',
	'place' => '936',
	'quarter' => '16113',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mardin',
	'title_category' => 'abbot',
	'region' => '235',
	'place' => '937',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cepha',
	'title_category' => 'abbot',
	'region' => '235',
	'place' => '939',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nisibis',
	'title_category' => 'abbot',
	'region' => '235',
	'place' => '940',
	'quarter' => '16114',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Isfahan',
	'title_category' => 'abbot',
	'region' => '241',
	'place' => '961',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zavareh',
	'title_category' => 'abbot',
	'region' => '241',
	'place' => '964',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhages',
	'title_category' => 'abbot',
	'region' => '242',
	'place' => '965',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasht',
	'title_category' => 'abbot',
	'region' => '243',
	'place' => '972',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hail',
	'title_category' => 'abbot',
	'region' => '246',
	'place' => '984',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mecca',
	'title_category' => 'abbot',
	'region' => '247',
	'place' => '985',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medina',
	'title_category' => 'abbot',
	'region' => '247',
	'place' => '988',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nabek',
	'title_category' => 'abbot',
	'region' => '252',
	'place' => '1008',
	'quarter' => '16115',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleppo',
	'title_category' => 'abbot',
	'region' => '256',
	'place' => '1021',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Raqqa',
	'title_category' => 'abbot',
	'region' => '257',
	'place' => '1025',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_monastic'
	]);
		
		
		
    }
}
