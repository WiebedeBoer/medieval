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
			'quarter' => '19529',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hamburg',
			'title_category' => 'abbot',
			'region' => '1',
			'place' => '3',
			'quarter' => '19530',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Corvey',
			'title_category' => 'prince abbot',
			'region' => '1',
			'place' => '4',
			'quarter' => '16029',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Meissen',
			'title_category' => 'abbot',
			'region' => '2',
			'place' => '5',
			'quarter' => '19531',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dresden',
			'title_category' => 'abbot',
			'region' => '2',
			'place' => '6',
			'quarter' => '19532',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Erfurt',
			'title_category' => 'abbot',
			'region' => '2',
			'place' => '7',
			'quarter' => '19533',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chemnitz',
			'title_category' => 'abbot',
			'region' => '2',
			'place' => '8',
			'quarter' => '19534',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Merseburg',
			'title_category' => 'abbot',
			'region' => '3',
			'place' => '10',
			'quarter' => '19535',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gernrode',
			'title_category' => 'prince abbot',
			'region' => '3',
			'place' => '12',
			'quarter' => '16030',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Schwerin',
			'title_category' => 'abbot',
			'region' => '4',
			'place' => '13',
			'quarter' => '19536',
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
			'quarter' => '19537',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Havelberg',
			'title_category' => 'abbot',
			'region' => '5',
			'place' => '19',
			'quarter' => '19538',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lindow',
			'title_category' => 'abbot',
			'region' => '5',
			'place' => '20',
			'quarter' => '16118',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kolberg',
			'title_category' => 'abbot',
			'region' => '6',
			'place' => '23',
			'quarter' => '19539',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Greifswald',
			'title_category' => 'abbot',
			'region' => '6',
			'place' => '24',
			'quarter' => '19540',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Osnabruck',
			'title_category' => 'abbot',
			'region' => '7',
			'place' => '27',
			'quarter' => '19541',
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
			'quarter' => '19542',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wurzburg',
			'title_category' => 'abbot',
			'region' => '8',
			'place' => '31',
			'quarter' => '19543',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nuremberg',
			'title_category' => 'abbot',
			'region' => '8',
			'place' => '32',
			'quarter' => '19544',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Salzburg',
			'title_category' => 'abbot',
			'region' => '9',
			'place' => '33',
			'quarter' => '19545',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Berchtesgaden',
			'title_category' => 'prince provost',
			'region' => '9',
			'place' => '36',
			'quarter' => '16031',
			'religion' => '1',
			'rank' => '6',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vienna',
			'title_category' => 'abbot',
			'region' => '10',
			'place' => '37',
			'quarter' => '19546',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sankt Polten',
			'title_category' => 'abbot',
			'region' => '10',
			'place' => '39',
			'quarter' => '19547',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pressburg',
			'title_category' => 'abbot',
			'region' => '10',
			'place' => '40',
			'quarter' => '19548',
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
			'quarter' => '19549',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bozen',
			'title_category' => 'abbot',
			'region' => '12',
			'place' => '46',
			'quarter' => '19550',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trent',
			'title_category' => 'abbot',
			'region' => '12',
			'place' => '47',
			'quarter' => '19551',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brixen',
			'title_category' => 'abbot',
			'region' => '12',
			'place' => '48',
			'quarter' => '19552',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sankt Gallen',
			'title_category' => 'prince abbot',
			'region' => '14',
			'place' => '56',
			'quarter' => '16032',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Strassbourg',
			'title_category' => 'abbot',
			'region' => '15',
			'place' => '59',
			'quarter' => '19553',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			//wissembourg
			DB::table('titles')->insert([
			'title_name' => 'Wissembourg',
			'title_category' => 'prince abbot',
			'region' => '15',
			'place' => '60',
			'quarter' => '19855',
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
			'quarter' => '19554',
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
			'quarter' => '19555',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fulda',
			'title_category' => 'prince abbot',
			'region' => '18',
			'place' => '72',
			'quarter' => '16033',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cologne',
			'title_category' => 'abbot',
			'region' => '19',
			'place' => '73',
			'quarter' => '19556',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Liege',
			'title_category' => 'abbot',
			'region' => '19',
			'place' => '75',
			'quarter' => '19557',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stavelot',
			'title_category' => 'prince abbot',
			'region' => '19',
			'place' => '76',
			'quarter' => '16034',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pruem',
			'title_category' => 'prince abbot',
			'region' => '20',
			'place' => '80',
			'quarter' => '16035',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Guelders',
			'title_category' => 'abbot',
			'region' => '21',
			'place' => '81',
			'quarter' => '19558',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Deventer',
			'title_category' => 'abbot',
			'region' => '21',
			'place' => '84',
			'quarter' => '19559',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amsterdam',
			'title_category' => 'abbot',
			'region' => '22',
			'place' => '88',
			'quarter' => '19560',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Groningen',
			'title_category' => 'abbot',
			'region' => '23',
			'place' => '91',
			'quarter' => '19561',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dokkum',
			'title_category' => 'abbot',
			'region' => '23',
			'place' => '92',
			'quarter' => '19562',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Louvain',
			'title_category' => 'abbot',
			'region' => '24',
			'place' => '93',
			'quarter' => '19563',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antwerp',
			'title_category' => 'abbot',
			'region' => '24',
			'place' => '95',
			'quarter' => '19564',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Thorn',
			'title_category' => 'prince abbot',
			'region' => '24',
			'place' => '96',
			'quarter' => '16036',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bruges',
			'title_category' => 'abbot',
			'region' => '25',
			'place' => '97',
			'quarter' => '19565',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ghent',
			'title_category' => 'abbot',
			'region' => '25',
			'place' => '98',
			'quarter' => '19566',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cambrai',
			'title_category' => 'abbot',
			'region' => '25',
			'place' => '99',
			'quarter' => '19567',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ypres',
			'title_category' => 'abbot',
			'region' => '25',
			'place' => '100',
			'quarter' => '19568',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gorizia',
			'title_category' => 'abbot',
			'region' => '26',
			'place' => '103',
			'quarter' => '19569',
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
			'quarter' => '19570',
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
			'quarter' => '19571',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Quimper',
			'title_category' => 'abbot',
			'region' => '28',
			'place' => '111',
			'quarter' => '19572',
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
			'quarter' => '19573',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chartres',
			'title_category' => 'abbot',
			'region' => '29',
			'place' => '115',
			'quarter' => '19574',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Denis',
			'title_category' => 'abbot',
			'region' => '29',
			'place' => '116',
			'quarter' => '16037',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Verdun',
			'title_category' => 'abbot',
			'region' => '30',
			'place' => '119',
			'quarter' => '19575',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Laon',
			'title_category' => 'abbot',
			'region' => '31',
			'place' => '123',
			'quarter' => '19576',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Omer',
			'title_category' => 'abbot',
			'region' => '31',
			'place' => '124',
			'quarter' => '19577',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rouen',
			'title_category' => 'abbot',
			'region' => '32',
			'place' => '125',
			'quarter' => '19578',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Caen',
			'title_category' => 'abbot',
			'region' => '32',
			'place' => '126',
			'quarter' => '19579',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lisieux',
			'title_category' => 'abbot',
			'region' => '32',
			'place' => '127',
			'quarter' => '19580',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bayeux',
			'title_category' => 'abbot',
			'region' => '32',
			'place' => '128',
			'quarter' => '19581',
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
			'quarter' => '19582',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vendome',
			'title_category' => 'abbot',
			'region' => '34',
			'place' => '136',
			'quarter' => '19583',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tours',
			'title_category' => 'abbot',
			'region' => '35',
			'place' => '137',
			'quarter' => '19584',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Loches',
			'title_category' => 'abbot',
			'region' => '35',
			'place' => '140',
			'quarter' => '19585',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Angers',
			'title_category' => 'abbot',
			'region' => '36',
			'place' => '141',
			'quarter' => '19586',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Laval',
			'title_category' => 'abbot',
			'region' => '36',
			'place' => '144',
			'quarter' => '19587',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vauclair',
			'title_category' => 'abbot',
			'region' => '37',
			'place' => '148',
			'quarter' => '19588',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bourges',
			'title_category' => 'abbot',
			'region' => '38',
			'place' => '149',
			'quarter' => '19589',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chateauroux',
			'title_category' => 'abbot',
			'region' => '38',
			'place' => '150',
			'quarter' => '19590',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vezelay',
			'title_category' => 'abbot',
			'region' => '38',
			'place' => '152',
			'quarter' => '16038',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Montlucon',
			'title_category' => 'abbot',
			'region' => '39',
			'place' => '154',
			'quarter' => '19591',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vichy',
			'title_category' => 'abbot',
			'region' => '39',
			'place' => '156',
			'quarter' => '19592',
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
			'quarter' => '19593',
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
			'quarter' => '19594',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Auch',
			'title_category' => 'abbot',
			'region' => '43',
			'place' => '171',
			'quarter' => '19595',
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
			'quarter' => '19596',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Limoges',
			'title_category' => 'abbot',
			'region' => '44',
			'place' => '174',
			'quarter' => '19597',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Perigeux',
			'title_category' => 'abbot',
			'region' => '44',
			'place' => '175',
			'quarter' => '19598',
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
			'quarter' => '19599',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vienne',
			'title_category' => 'abbot',
			'region' => '45',
			'place' => '178',
			'quarter' => '19600',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lyon',
			'title_category' => 'abbot',
			'region' => '45',
			'place' => '179',
			'quarter' => '19601',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Autun',
			'title_category' => 'abbot',
			'region' => '45',
			'place' => '180',
			'quarter' => '19602',
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
			'quarter' => '19603',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Canterbury',
			'title_category' => 'abbot',
			'region' => '48',
			'place' => '189',
			'quarter' => '19604',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Maidstone',
			'title_category' => 'abbot',
			'region' => '48',
			'place' => '192',
			'quarter' => '18486',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Winchester',
			'title_category' => 'abbot',
			'region' => '49',
			'place' => '193',
			'quarter' => '19605',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wells',
			'title_category' => 'abbot',
			'region' => '49',
			'place' => '195',
			'quarter' => '19606',
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
			'quarter' => '19607',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint German',
			'title_category' => 'abbot',
			'region' => '50',
			'place' => '199',
			'quarter' => '19608',
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
			'quarter' => '19609',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Edmunds',
			'title_category' => 'abbot',
			'region' => '51',
			'place' => '203',
			'quarter' => '19610',
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
			'quarter' => '19611',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Durham',
			'title_category' => 'abbot',
			'region' => '52',
			'place' => '206',
			'quarter' => '19612',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lancaster',
			'title_category' => 'abbot',
			'region' => '52',
			'place' => '208',
			'quarter' => '19613',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Worcester',
			'title_category' => 'abbot',
			'region' => '53',
			'place' => '209',
			'quarter' => '19614',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gloucester',
			'title_category' => 'abbot',
			'region' => '53',
			'place' => '210',
			'quarter' => '19615',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ely',
			'title_category' => 'abbot',
			'region' => '54',
			'place' => '213',
			'quarter' => '19616',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cambridge',
			'title_category' => 'abbot',
			'region' => '54',
			'place' => '214',
			'quarter' => '19617',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Albans',
			'title_category' => 'abbot',
			'region' => '54',
			'place' => '216',
			'quarter' => '16119',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stafford',
			'title_category' => 'abbot',
			'region' => '55',
			'place' => '219',
			'quarter' => '19618',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Leicester',
			'title_category' => 'abbot',
			'region' => '55',
			'place' => '220',
			'quarter' => '19619',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nottingham',
			'title_category' => 'abbot',
			'region' => '56',
			'place' => '222',
			'quarter' => '19620',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Boston',
			'title_category' => 'abbot',
			'region' => '56',
			'place' => '223',
			'quarter' => '19621',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stamford',
			'title_category' => 'abbot',
			'region' => '56',
			'place' => '224',
			'quarter' => '19622',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bangor',
			'title_category' => 'abbot',
			'region' => '57',
			'place' => '227',
			'quarter' => '19623',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Conwy',
			'title_category' => 'abbot',
			'region' => '57',
			'place' => '228',
			'quarter' => '19624',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Shrewsbury',
			'title_category' => 'abbot',
			'region' => '58',
			'place' => '230',
			'quarter' => '19625',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Glasbury',
			'title_category' => 'abbot',
			'region' => '58',
			'place' => '231',
			'quarter' => '19626',
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
			'quarter' => '19627',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carmarthen',
			'title_category' => 'abbot',
			'region' => '59',
			'place' => '234',
			'quarter' => '19628',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Abergavenny',
			'title_category' => 'abbot',
			'region' => '59',
			'place' => '236',
			'quarter' => '19629',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oslo',
			'title_category' => 'abbot',
			'region' => '60',
			'place' => '237',
			'quarter' => '19630',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tonsborg',
			'title_category' => 'abbot',
			'region' => '60',
			'place' => '238',
			'quarter' => '19631',
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
			'quarter' => '19632',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stavanger',
			'title_category' => 'abbot',
			'region' => '61',
			'place' => '243',
			'quarter' => '19633',
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
			'quarter' => '19634',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kalundborg',
			'title_category' => 'abbot',
			'region' => '62',
			'place' => '246',
			'quarter' => '19635',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Roskilde',
			'title_category' => 'abbot',
			'region' => '62',
			'place' => '247',
			'quarter' => '19636',
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
			'quarter' => '19637',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trelleborg',
			'title_category' => 'abbot',
			'region' => '63',
			'place' => '250',
			'quarter' => '19638',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Halmstad',
			'title_category' => 'abbot',
			'region' => '63',
			'place' => '251',
			'quarter' => '19639',
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
			'quarter' => '19640',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aalborg',
			'title_category' => 'abbot',
			'region' => '64',
			'place' => '254',
			'quarter' => '19641',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ripen',
			'title_category' => 'abbot',
			'region' => '64',
			'place' => '255',
			'quarter' => '19642',
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
			'quarter' => '19643',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vasteras',
			'title_category' => 'abbot',
			'region' => '65',
			'place' => '258',
			'quarter' => '19644',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Uppsala',
			'title_category' => 'abbot',
			'region' => '65',
			'place' => '259',
			'quarter' => '19645',
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
			'quarter' => '19646',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kalmar',
			'title_category' => 'abbot',
			'region' => '66',
			'place' => '262',
			'quarter' => '19647',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vaxjo',
			'title_category' => 'abbot',
			'region' => '66',
			'place' => '263',
			'quarter' => '19648',
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
			'quarter' => '19649',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jonkoping',
			'title_category' => 'abbot',
			'region' => '67',
			'place' => '267',
			'quarter' => '19650',
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
			'quarter' => '19651',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haddington',
			'title_category' => 'abbot',
			'region' => '73',
			'place' => '292',
			'quarter' => '19652',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bamburgh',
			'title_category' => 'abbot',
			'region' => '74',
			'place' => '293',
			'quarter' => '19653',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Berwick',
			'title_category' => 'abbot',
			'region' => '74',
			'place' => '295',
			'quarter' => '19654',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jedburgh',
			'title_category' => 'abbot',
			'region' => '74',
			'place' => '296',
			'quarter' => '19655',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dumbarton',
			'title_category' => 'abbot',
			'region' => '75',
			'place' => '297',
			'quarter' => '19656',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Glasgow',
			'title_category' => 'abbot',
			'region' => '75',
			'place' => '299',
			'quarter' => '19657',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ayr',
			'title_category' => 'abbot',
			'region' => '75',
			'place' => '300',
			'quarter' => '19658',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carlisle',
			'title_category' => 'abbot',
			'region' => '76',
			'place' => '301',
			'quarter' => '19659',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Whithorn',
			'title_category' => 'abbot',
			'region' => '76',
			'place' => '303',
			'quarter' => '19660',
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
			'quarter' => '19661',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Perth',
			'title_category' => 'abbot',
			'region' => '78',
			'place' => '309',
			'quarter' => '19662',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Andrews',
			'title_category' => 'abbot',
			'region' => '78',
			'place' => '311',
			'quarter' => '19663',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dunfermline',
			'title_category' => 'abbot',
			'region' => '78',
			'place' => '312',
			'quarter' => '16039',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Elgin',
			'title_category' => 'abbot',
			'region' => '79',
			'place' => '313',
			'quarter' => '19664',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mortlach',
			'title_category' => 'abbot',
			'region' => '79',
			'place' => '315',
			'quarter' => '19665',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aberdeen',
			'title_category' => 'abbot',
			'region' => '79',
			'place' => '316',
			'quarter' => '19666',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dundee',
			'title_category' => 'abbot',
			'region' => '80',
			'place' => '317',
			'quarter' => '19667',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Scone',
			'title_category' => 'abbot',
			'region' => '80',
			'place' => '319',
			'quarter' => '19668',
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
			'quarter' => '19669',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dornoch',
			'title_category' => 'abbot',
			'region' => '81',
			'place' => '324',
			'quarter' => '19670',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kildare',
			'title_category' => 'abbot',
			'region' => '82',
			'place' => '327',
			'quarter' => '19671',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Millmount',
			'title_category' => 'abbot',
			'region' => '82',
			'place' => '328',
			'quarter' => '19672',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Armagh',
			'title_category' => 'abbot',
			'region' => '83',
			'place' => '329',
			'quarter' => '19673',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carrickfergus',
			'title_category' => 'abbot',
			'region' => '83',
			'place' => '330',
			'quarter' => '19674',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Derry',
			'title_category' => 'abbot',
			'region' => '83',
			'place' => '331',
			'quarter' => '19675',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Clogher',
			'title_category' => 'abbot',
			'region' => '83',
			'place' => '332',
			'quarter' => '19676',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kells',
			'title_category' => 'abbot',
			'region' => '84',
			'place' => '334',
			'quarter' => '16120',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Waterford',
			'title_category' => 'abbot',
			'region' => '84',
			'place' => '335',
			'quarter' => '19677',
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
			'quarter' => '19678',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Limerick',
			'title_category' => 'abbot',
			'region' => '85',
			'place' => '338',
			'quarter' => '19679',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cork',
			'title_category' => 'abbot',
			'region' => '85',
			'place' => '339',
			'quarter' => '19680',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Roscrea',
			'title_category' => 'abbot',
			'region' => '85',
			'place' => '340',
			'quarter' => '19681',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Galway',
			'title_category' => 'abbot',
			'region' => '86',
			'place' => '341',
			'quarter' => '19682',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mayo',
			'title_category' => 'abbot',
			'region' => '86',
			'place' => '342',
			'quarter' => '19683',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tuam',
			'title_category' => 'abbot',
			'region' => '86',
			'place' => '343',
			'quarter' => '19684',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Achonry',
			'title_category' => 'abbot',
			'region' => '86',
			'place' => '344',
			'quarter' => '19685',
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
			'quarter' => '19686',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Huesca',
			'title_category' => 'abbot',
			'region' => '89',
			'place' => '355',
			'quarter' => '19687',
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
			'quarter' => '19688',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Albarracin',
			'title_category' => 'abbot',
			'region' => '90',
			'place' => '359',
			'quarter' => '19689',
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
			'quarter' => '19690',
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
			'quarter' => '16121',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Castellon',
			'title_category' => 'abbot',
			'region' => '93',
			'place' => '371',
			'quarter' => '19691',
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
			'quarter' => '19692',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ibiza',
			'title_category' => 'abbot',
			'region' => '95',
			'place' => '380',
			'quarter' => '19693',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Leon',
			'title_category' => 'abbot',
			'region' => '96',
			'place' => '381',
			'quarter' => '19694',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'San Guillermo',
			'title_category' => 'abbot',
			'region' => '96',
			'place' => '383',
			'quarter' => '19695',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sahagun',
			'title_category' => 'abbot',
			'region' => '96',
			'place' => '384',
			'quarter' => '16122',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oviedo',
			'title_category' => 'abbot',
			'region' => '97',
			'place' => '385',
			'quarter' => '19696',
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
			'quarter' => '19697',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avila',
			'title_category' => 'abbot',
			'region' => '98',
			'place' => '390',
			'quarter' => '19698',
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
			'quarter' => '19699',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palencia',
			'title_category' => 'abbot',
			'region' => '99',
			'place' => '395',
			'quarter' => '19700',
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
			'quarter' => '19701',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ourense',
			'title_category' => 'abbot',
			'region' => '100',
			'place' => '398',
			'quarter' => '19702',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coruna',
			'title_category' => 'abbot',
			'region' => '100',
			'place' => '399',
			'quarter' => '19703',
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
			'quarter' => '19704',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Guimaraes',
			'title_category' => 'abbot',
			'region' => '102',
			'place' => '406',
			'quarter' => '19705',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aveiro',
			'title_category' => 'abbot',
			'region' => '102',
			'place' => '408',
			'quarter' => '19706',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Braganca',
			'title_category' => 'abbot',
			'region' => '103',
			'place' => '409',
			'quarter' => '19707',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coimbra',
			'title_category' => 'abbot',
			'region' => '104',
			'place' => '413',
			'quarter' => '19708',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Evora',
			'title_category' => 'abbot',
			'region' => '105',
			'place' => '417',
			'quarter' => '19709',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Faro',
			'title_category' => 'abbot',
			'region' => '106',
			'place' => '421',
			'quarter' => '19710',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Silves',
			'title_category' => 'abbot',
			'region' => '106',
			'place' => '424',
			'quarter' => '19711',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cordoba',
			'title_category' => 'abbot',
			'region' => '107',
			'place' => '425',
			'quarter' => '19712',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ecija',
			'title_category' => 'abbot',
			'region' => '107',
			'place' => '428',
			'quarter' => '19713',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sevilla',
			'title_category' => 'abbot',
			'region' => '108',
			'place' => '429',
			'quarter' => '19714',
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
			'quarter' => '19715',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ronda',
			'title_category' => 'abbot',
			'region' => '114',
			'place' => '456',
			'quarter' => '19716',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Milan',
			'title_category' => 'abbot',
			'region' => '115',
			'place' => '457',
			'quarter' => '19717',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brescia',
			'title_category' => 'abbot',
			'region' => '115',
			'place' => '458',
			'quarter' => '19718',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pavia',
			'title_category' => 'abbot',
			'region' => '115',
			'place' => '459',
			'quarter' => '19719',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cremona',
			'title_category' => 'abbot',
			'region' => '115',
			'place' => '460',
			'quarter' => '19720',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Verona',
			'title_category' => 'abbot',
			'region' => '116',
			'place' => '461',
			'quarter' => '19721',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Padua',
			'title_category' => 'abbot',
			'region' => '116',
			'place' => '462',
			'quarter' => '19722',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vicenza',
			'title_category' => 'abbot',
			'region' => '116',
			'place' => '463',
			'quarter' => '19723',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mantua',
			'title_category' => 'abbot',
			'region' => '116',
			'place' => '464',
			'quarter' => '19724',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aleria',
			'title_category' => 'abbot',
			'region' => '117',
			'place' => '467',
			'quarter' => '19725',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bobbio',
			'title_category' => 'abbot',
			'region' => '117',
			'place' => '468',
			'quarter' => '16123',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Treviso',
			'title_category' => 'abbot',
			'region' => '118',
			'place' => '470',
			'quarter' => '19726',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chioggia',
			'title_category' => 'abbot',
			'region' => '118',
			'place' => '471',
			'quarter' => '19727',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Belluno',
			'title_category' => 'abbot',
			'region' => '118',
			'place' => '472',
			'quarter' => '19728',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ravenna',
			'title_category' => 'abbot',
			'region' => '119',
			'place' => '473',
			'quarter' => '19729',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cesena',
			'title_category' => 'abbot',
			'region' => '119',
			'place' => '474',
			'quarter' => '19730',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Forli',
			'title_category' => 'abbot',
			'region' => '119',
			'place' => '475',
			'quarter' => '19731',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rimini',
			'title_category' => 'abbot',
			'region' => '119',
			'place' => '476',
			'quarter' => '19732',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modena',
			'title_category' => 'abbot',
			'region' => '120',
			'place' => '477',
			'quarter' => '19733',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Parma',
			'title_category' => 'abbot',
			'region' => '120',
			'place' => '478',
			'quarter' => '19734',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ferrara',
			'title_category' => 'abbot',
			'region' => '120',
			'place' => '479',
			'quarter' => '19735',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bologna',
			'title_category' => 'abbot',
			'region' => '120',
			'place' => '480',
			'quarter' => '19736',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aquileja',
			'title_category' => 'abbot',
			'region' => '121',
			'place' => '481',
			'quarter' => '19737',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Udine',
			'title_category' => 'abbot',
			'region' => '121',
			'place' => '483',
			'quarter' => '19738',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gemona',
			'title_category' => 'abbot',
			'region' => '121',
			'place' => '484',
			'quarter' => '19739',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Turin',
			'title_category' => 'abbot',
			'region' => '122',
			'place' => '485',
			'quarter' => '19740',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ivrea',
			'title_category' => 'abbot',
			'region' => '122',
			'place' => '486',
			'quarter' => '19741',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pinerollo',
			'title_category' => 'prince abbot',
			'region' => '122',
			'place' => '488',
			'quarter' => '16042',
			'religion' => '1',
			'rank' => '7',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Florence',
			'title_category' => 'abbot',
			'region' => '123',
			'place' => '489',
			'quarter' => '19742',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arezzo',
			'title_category' => 'abbot',
			'region' => '123',
			'place' => '491',
			'quarter' => '19743',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Grosseto',
			'title_category' => 'abbot',
			'region' => '123',
			'place' => '492',
			'quarter' => '19744',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Spoleto',
			'title_category' => 'abbot',
			'region' => '124',
			'place' => '493',
			'quarter' => '19745',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aquila',
			'title_category' => 'abbot',
			'region' => '124',
			'place' => '494',
			'quarter' => '19746',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ancona',
			'title_category' => 'abbot',
			'region' => '124',
			'place' => '495',
			'quarter' => '19747',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Assissi',
			'title_category' => 'abbot',
			'region' => '124',
			'place' => '496',
			'quarter' => '16043',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Frascati',
			'title_category' => 'abbot',
			'region' => '125',
			'place' => '498',
			'quarter' => '19748',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tivoli',
			'title_category' => 'abbot',
			'region' => '125',
			'place' => '499',
			'quarter' => '19749',
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
			'quarter' => '19750',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lucca',
			'title_category' => 'abbot',
			'region' => '126',
			'place' => '503',
			'quarter' => '19751',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Volterra',
			'title_category' => 'abbot',
			'region' => '126',
			'place' => '504',
			'quarter' => '19752',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Naples',
			'title_category' => 'abbot',
			'region' => '127',
			'place' => '505',
			'quarter' => '19753',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amalfi',
			'title_category' => 'abbot',
			'region' => '127',
			'place' => '507',
			'quarter' => '19754',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cassino',
			'title_category' => 'abbot',
			'region' => '127',
			'place' => '508',
			'quarter' => '16124',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Taranto',
			'title_category' => 'abbot',
			'region' => '128',
			'place' => '509',
			'quarter' => '19755',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brindisi',
			'title_category' => 'abbot',
			'region' => '128',
			'place' => '512',
			'quarter' => '19756',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cosenza',
			'title_category' => 'abbot',
			'region' => '129',
			'place' => '513',
			'quarter' => '19757',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rossano',
			'title_category' => 'abbot',
			'region' => '129',
			'place' => '514',
			'quarter' => '19758',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tropea',
			'title_category' => 'abbot',
			'region' => '129',
			'place' => '515',
			'quarter' => '19759',
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
			'quarter' => '19760',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Potenza',
			'title_category' => 'abbot',
			'region' => '130',
			'place' => '519',
			'quarter' => '19761',
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
			'quarter' => '19762',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bosa',
			'title_category' => 'abbot',
			'region' => '131',
			'place' => '523',
			'quarter' => '19763',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Porto Torres',
			'title_category' => 'abbot',
			'region' => '131',
			'place' => '524',
			'quarter' => '19764',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cagliari',
			'title_category' => 'abbot',
			'region' => '132',
			'place' => '525',
			'quarter' => '19765',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dolia',
			'title_category' => 'abbot',
			'region' => '132',
			'place' => '527',
			'quarter' => '19766',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Iglesias',
			'title_category' => 'abbot',
			'region' => '132',
			'place' => '528',
			'quarter' => '19767',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cefalu',
			'title_category' => 'abbot',
			'region' => '133',
			'place' => '531',
			'quarter' => '19768',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Taormina',
			'title_category' => 'abbot',
			'region' => '134',
			'place' => '534',
			'quarter' => '19769',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Catania',
			'title_category' => 'abbot',
			'region' => '134',
			'place' => '535',
			'quarter' => '19770',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Troina',
			'title_category' => 'abbot',
			'region' => '134',
			'place' => '536',
			'quarter' => '19771',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rabat',
			'title_category' => 'abbot',
			'region' => '137',
			'place' => '546',
			'quarter' => '19772',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tabarka',
			'title_category' => 'abbot',
			'region' => '148',
			'place' => '590',
			'quarter' => '19773',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kairouan',
			'title_category' => 'abbot',
			'region' => '150',
			'place' => '597',
			'quarter' => '19774',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sousse',
			'title_category' => 'abbot',
			'region' => '150',
			'place' => '598',
			'quarter' => '19775',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Benghazi',
			'title_category' => 'abbot',
			'region' => '156',
			'place' => '621',
			'quarter' => '19776',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alexandria',
			'title_category' => 'abbot',
			'region' => '157',
			'place' => '625',
			'quarter' => '19777',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Damietta',
			'title_category' => 'abbot',
			'region' => '157',
			'place' => '627',
			'quarter' => '19778',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cairo',
			'title_category' => 'abbot',
			'region' => '158',
			'place' => '629',
			'quarter' => '19779',
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
			'quarter' => '19780',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siwa',
			'title_category' => 'abbot',
			'region' => '159',
			'place' => '634',
			'quarter' => '19781',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Anba Boula',
			'title_category' => 'abbot',
			'region' => '159',
			'place' => '636',
			'quarter' => '16125',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kharga',
			'title_category' => 'abbot',
			'region' => '160',
			'place' => '638',
			'quarter' => '19782',
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
			'quarter' => '19783',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Teczyn',
			'title_category' => 'abbot',
			'region' => '162',
			'place' => '646',
			'quarter' => '19784',
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
			'quarter' => '19785',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Posen',
			'title_category' => 'abbot',
			'region' => '163',
			'place' => '650',
			'quarter' => '19786',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Konin',
			'title_category' => 'abbot',
			'region' => '163',
			'place' => '651',
			'quarter' => '19787',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kalisz',
			'title_category' => 'abbot',
			'region' => '163',
			'place' => '652',
			'quarter' => '19788',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Plock',
			'title_category' => 'abbot',
			'region' => '164',
			'place' => '653',
			'quarter' => '19789',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Leslau',
			'title_category' => 'abbot',
			'region' => '164',
			'place' => '655',
			'quarter' => '19790',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Radomir',
			'title_category' => 'abbot',
			'region' => '164',
			'place' => '656',
			'quarter' => '19791',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tracken',
			'title_category' => 'abbot',
			'region' => '166',
			'place' => '661',
			'quarter' => '19792',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vilnius',
			'title_category' => 'abbot',
			'region' => '166',
			'place' => '662',
			'quarter' => '19793',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Minsk',
			'title_category' => 'abbot',
			'region' => '166',
			'place' => '664',
			'quarter' => '19794',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pula',
			'title_category' => 'abbot',
			'region' => '167',
			'place' => '665',
			'quarter' => '19795',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zadar',
			'title_category' => 'abbot',
			'region' => '168',
			'place' => '670',
			'quarter' => '19796',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Split',
			'title_category' => 'abbot',
			'region' => '168',
			'place' => '671',
			'quarter' => '19797',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Knin',
			'title_category' => 'abbot',
			'region' => '169',
			'place' => '673',
			'quarter' => '19798',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bihac',
			'title_category' => 'abbot',
			'region' => '169',
			'place' => '674',
			'quarter' => '19799',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kotor',
			'title_category' => 'abbot',
			'region' => '169',
			'place' => '676',
			'quarter' => '19800',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nitra',
			'title_category' => 'abbot',
			'region' => '170',
			'place' => '679',
			'quarter' => '19801',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Veszprem',
			'title_category' => 'abbot',
			'region' => '171',
			'place' => '681',
			'quarter' => '19802',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pecs',
			'title_category' => 'abbot',
			'region' => '171',
			'place' => '684',
			'quarter' => '19803',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Eger',
			'title_category' => 'abbot',
			'region' => '173',
			'place' => '689',
			'quarter' => '19804',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Diosgyor',
			'title_category' => 'abbot',
			'region' => '173',
			'place' => '690',
			'quarter' => '19805',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bartfeld',
			'title_category' => 'abbot',
			'region' => '173',
			'place' => '691',
			'quarter' => '19806',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Buda',
			'title_category' => 'abbot',
			'region' => '174',
			'place' => '693',
			'quarter' => '19807',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zounok',
			'title_category' => 'abbot',
			'region' => '174',
			'place' => '696',
			'quarter' => '19808',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pecs',
			'title_category' => 'abbot',
			'region' => '175',
			'place' => '697',
			'quarter' => '19809',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kalocsa',
			'title_category' => 'abbot',
			'region' => '175',
			'place' => '699',
			'quarter' => '19810',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alba Julia',
			'title_category' => 'abbot',
			'region' => '176',
			'place' => '701',
			'quarter' => '19811',
			'religion' => '1',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carta',
			'title_category' => 'abbot',
			'region' => '176',
			'place' => '704',
			'quarter' => '16126',
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
			'quarter' => '19812',
			'religion' => '2',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Orhei',
			'title_category' => 'abbot',
			'region' => '180',
			'place' => '718',
			'quarter' => '19813',
			'religion' => '2',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chisinau',
			'title_category' => 'abbot',
			'region' => '180',
			'place' => '720',
			'quarter' => '19814',
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
			'quarter' => '19815',
			'religion' => '2',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rasa',
			'title_category' => 'abbot',
			'region' => '184',
			'place' => '734',
			'quarter' => '16127',
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
			'quarter' => '19816',
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
			'quarter' => '19817',
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
			'quarter' => '19818',
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
			'quarter' => '19819',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tula',
			'title_category' => 'abbot',
			'region' => '196',
			'place' => '784',
			'quarter' => '19820',
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
			'quarter' => '19821',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gdov',
			'title_category' => 'abbot',
			'region' => '198',
			'place' => '792',
			'quarter' => '19822',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Novgorod',
			'title_category' => 'abbot',
			'region' => '199',
			'place' => '793',
			'quarter' => '19823',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Schlisselburg',
			'title_category' => 'abbot',
			'region' => '199',
			'place' => '796',
			'quarter' => '19824',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ufa',
			'title_category' => 'abbot',
			'region' => '200',
			'place' => '800',
			'quarter' => '19825',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vladimir',
			'title_category' => 'abbot',
			'region' => '201',
			'place' => '801',
			'quarter' => '19826',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nizhny',
			'title_category' => 'abbot',
			'region' => '201',
			'place' => '804',
			'quarter' => '19827',
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
			'quarter' => '19828',
			'religion' => '3',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Constantinople',
			'title_category' => 'abbot',
			'region' => '207',
			'place' => '825',
			'quarter' => '18487',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Thessaloniki',
			'title_category' => 'abbot',
			'region' => '208',
			'place' => '829',
			'quarter' => '19829',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hilandar',
			'title_category' => 'abbot',
			'region' => '208',
			'place' => '832',
			'quarter' => '16128',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Athens',
			'title_category' => 'abbot',
			'region' => '209',
			'place' => '833',
			'quarter' => '19830',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ohrid',
			'title_category' => 'abbot',
			'region' => '212',
			'place' => '847',
			'quarter' => '19831',
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
			'quarter' => '19832',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Patmos',
			'title_category' => 'abbot',
			'region' => '215',
			'place' => '860',
			'quarter' => '16129',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Miletus',
			'title_category' => 'abbot',
			'region' => '216',
			'place' => '862',
			'quarter' => '19833',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Efese',
			'title_category' => 'abbot',
			'region' => '216',
			'place' => '863',
			'quarter' => '19834',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bursa',
			'title_category' => 'abbot',
			'region' => '217',
			'place' => '867',
			'quarter' => '19835',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Laranda',
			'title_category' => 'abbot',
			'region' => '218',
			'place' => '871',
			'quarter' => '19836',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Caesarea',
			'title_category' => 'abbot',
			'region' => '223',
			'place' => '889',
			'quarter' => '19837',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trebizond',
			'title_category' => 'abbot',
			'region' => '224',
			'place' => '893',
			'quarter' => '19838',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sivas',
			'title_category' => 'abbot',
			'region' => '228',
			'place' => '909',
			'quarter' => '19839',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kutais',
			'title_category' => 'abbot',
			'region' => '229',
			'place' => '916',
			'quarter' => '19840',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tiflis',
			'title_category' => 'abbot',
			'region' => '230',
			'place' => '917',
			'quarter' => '19841',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Akhalkalaki',
			'title_category' => 'abbot',
			'region' => '230',
			'place' => '920',
			'quarter' => '19842',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Balanjar',
			'title_category' => 'abbot',
			'region' => '231',
			'place' => '924',
			'quarter' => '19843',
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
			'quarter' => '19844',
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
			'quarter' => '19845',
			'religion' => '4',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cepha',
			'title_category' => 'abbot',
			'region' => '235',
			'place' => '939',
			'quarter' => '19846',
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
			'quarter' => '19847',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zavareh',
			'title_category' => 'abbot',
			'region' => '241',
			'place' => '964',
			'quarter' => '19848',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhages',
			'title_category' => 'abbot',
			'region' => '242',
			'place' => '965',
			'quarter' => '19849',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rasht',
			'title_category' => 'abbot',
			'region' => '243',
			'place' => '972',
			'quarter' => '19850',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hail',
			'title_category' => 'abbot',
			'region' => '246',
			'place' => '984',
			'quarter' => '19851',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mecca',
			'title_category' => 'abbot',
			'region' => '247',
			'place' => '985',
			'quarter' => '19852',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Medina',
			'title_category' => 'abbot',
			'region' => '247',
			'place' => '988',
			'quarter' => '18488',
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
			'quarter' => '19853',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Raqqa',
			'title_category' => 'abbot',
			'region' => '257',
			'place' => '1025',
			'quarter' => '19854',
			'religion' => '5',
			'rank' => '4',
			'career' => 'fixed_monastic'
			]); 


		
		
		
    }
}
