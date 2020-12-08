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
		
	//lord warden and lord mayor
	DB::table('titles')->insert([
		'title_name' => 'Pisa',
		'title_category' => 'burgrave',
		'region' => '126',
		'place' => '501',
		'quarter' => '14260',
		'religion' => '1',
		'rank' => '6',
		'career' => 'fixed_burgher'
	]);	
	DB::table('titles')->insert([
	'title_name' => 'Bremen',
	'title_category' => 'high mayor',
	'region' => '1',
	'place' => '1',
	'quarter' => '13760',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamburg',
	'title_category' => 'high mayor',
	'region' => '1',
	'place' => '3',
	'quarter' => '13762',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meissen',
	'title_category' => 'burgrave',
	'region' => '2',
	'place' => '5',
	'quarter' => '13764',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dresden',
	'title_category' => 'lord mayor',
	'region' => '2',
	'place' => '6',
	'quarter' => '13765',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erfurt',
	'title_category' => 'lord mayor',
	'region' => '2',
	'place' => '7',
	'quarter' => '13766',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chemnitz',
	'title_category' => 'lord mayor',
	'region' => '2',
	'place' => '8',
	'quarter' => '13767',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magdeburg',
	'title_category' => 'burgrave',
	'region' => '3',
	'place' => '9',
	'quarter' => '13768',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merseburg',
	'title_category' => 'lord mayor',
	'region' => '3',
	'place' => '10',
	'quarter' => '13769',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halberstadt',
	'title_category' => 'lord mayor',
	'region' => '3',
	'place' => '11',
	'quarter' => '13770',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schwerin',
	'title_category' => 'lord mayor',
	'region' => '4',
	'place' => '13',
	'quarter' => '13772',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rostock',
	'title_category' => 'lord mayor',
	'region' => '4',
	'place' => '14',
	'quarter' => '13773',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lubeck',
	'title_category' => 'high mayor',
	'region' => '4',
	'place' => '15',
	'quarter' => '13774',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brandenburg',
	'title_category' => 'lord mayor',
	'region' => '5',
	'place' => '17',
	'quarter' => '13776',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzwedel',
	'title_category' => 'lord mayor',
	'region' => '5',
	'place' => '18',
	'quarter' => '13777',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Havelberg',
	'title_category' => 'lord mayor',
	'region' => '5',
	'place' => '19',
	'quarter' => '13778',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stettin',
	'title_category' => 'lord mayor',
	'region' => '6',
	'place' => '21',
	'quarter' => '13780',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolberg',
	'title_category' => 'lord mayor',
	'region' => '6',
	'place' => '23',
	'quarter' => '13782',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifswald',
	'title_category' => 'lord mayor',
	'region' => '6',
	'place' => '24',
	'quarter' => '13783',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Munster',
	'title_category' => 'lord mayor',
	'region' => '7',
	'place' => '25',
	'quarter' => '13784',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osnabruck',
	'title_category' => 'lord mayor',
	'region' => '7',
	'place' => '27',
	'quarter' => '13786',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderborn',
	'title_category' => 'lord mayor',
	'region' => '7',
	'place' => '28',
	'quarter' => '13787',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Regensburg',
	'title_category' => 'high mayor',
	'region' => '8',
	'place' => '29',
	'quarter' => '13788',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Augsburg',
	'title_category' => 'high mayor',
	'region' => '8',
	'place' => '30',
	'quarter' => '13789',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wurzburg',
	'title_category' => 'lord mayor',
	'region' => '8',
	'place' => '31',
	'quarter' => '13790',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nuremberg',
	'title_category' => 'burgrave',
	'region' => '8',
	'place' => '32',
	'quarter' => '13791',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzburg',
	'title_category' => 'burgrave',
	'region' => '9',
	'place' => '33',
	'quarter' => '13792',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hallstat',
	'title_category' => 'lord mayor',
	'region' => '9',
	'place' => '35',
	'quarter' => '13794',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienna',
	'title_category' => 'lord mayor',
	'region' => '10',
	'place' => '37',
	'quarter' => '13796',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Polten',
	'title_category' => 'lord mayor',
	'region' => '10',
	'place' => '39',
	'quarter' => '13798',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pressburg',
	'title_category' => 'lord mayor',
	'region' => '10',
	'place' => '40',
	'quarter' => '13799',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Graz',
	'title_category' => 'lord mayor',
	'region' => '11',
	'place' => '41',
	'quarter' => '13800',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenwang',
	'title_category' => 'lord mayor',
	'region' => '11',
	'place' => '42',
	'quarter' => '13801',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Styraburg',
	'title_category' => 'lord mayor',
	'region' => '11',
	'place' => '43',
	'quarter' => '13802',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Innsbruck',
	'title_category' => 'lord mayor',
	'region' => '12',
	'place' => '45',
	'quarter' => '13804',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bozen',
	'title_category' => 'lord mayor',
	'region' => '12',
	'place' => '46',
	'quarter' => '13805',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trent',
	'title_category' => 'lord mayor',
	'region' => '12',
	'place' => '47',
	'quarter' => '13806',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brixen',
	'title_category' => 'lord mayor',
	'region' => '12',
	'place' => '48',
	'quarter' => '13807',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ulm',
	'title_category' => 'high mayor',
	'region' => '13',
	'place' => '49',
	'quarter' => '13808',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Freiburg',
	'title_category' => 'high mayor',
	'region' => '13',
	'place' => '51',
	'quarter' => '13810',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bern',
	'title_category' => 'high mayor',
	'region' => '14',
	'place' => '53',
	'quarter' => '13812',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zurich',
	'title_category' => 'high mayor',
	'region' => '14',
	'place' => '54',
	'quarter' => '13813',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Basel',
	'title_category' => 'high mayor',
	'region' => '14',
	'place' => '55',
	'quarter' => '13814',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Gallen',
	'title_category' => 'lord mayor',
	'region' => '14',
	'place' => '56',
	'quarter' => '13815',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hagenau',
	'title_category' => 'high mayor',
	'region' => '15',
	'place' => '57',
	'quarter' => '13816',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Colmar',
	'title_category' => 'high mayor',
	'region' => '15',
	'place' => '58',
	'quarter' => '13817',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Strassbourg',
	'title_category' => 'high mayor',
	'region' => '15',
	'place' => '59',
	'quarter' => '13818',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wissembourg',
	'title_category' => 'high mayor',
	'region' => '15',
	'place' => '60',
	'quarter' => '13819',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prague',
	'title_category' => 'burgrave',
	'region' => '16',
	'place' => '61',
	'quarter' => '13820',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilsen',
	'title_category' => 'lord mayor',
	'region' => '16',
	'place' => '63',
	'quarter' => '13822',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brunn',
	'title_category' => 'lord mayor',
	'region' => '17',
	'place' => '65',
	'quarter' => '13824',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zlin',
	'title_category' => 'lord mayor',
	'region' => '17',
	'place' => '66',
	'quarter' => '13825',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olmutz',
	'title_category' => 'lord mayor',
	'region' => '17',
	'place' => '67',
	'quarter' => '13826',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mainz',
	'title_category' => 'lord mayor',
	'region' => '18',
	'place' => '69',
	'quarter' => '13828',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heidelberg',
	'title_category' => 'lord mayor',
	'region' => '18',
	'place' => '70',
	'quarter' => '13829',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frankfurt',
	'title_category' => 'high mayor',
	'region' => '18',
	'place' => '71',
	'quarter' => '13830',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cologne',
	'title_category' => 'high mayor',
	'region' => '19',
	'place' => '73',
	'quarter' => '13832',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aachen',
	'title_category' => 'high mayor',
	'region' => '19',
	'place' => '74',
	'quarter' => '13833',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liege',
	'title_category' => 'lord mayor',
	'region' => '19',
	'place' => '75',
	'quarter' => '13834',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trier',
	'title_category' => 'lord mayor',
	'region' => '20',
	'place' => '77',
	'quarter' => '13836',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Luxembourg',
	'title_category' => 'lord mayor',
	'region' => '20',
	'place' => '78',
	'quarter' => '13837',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Metz',
	'title_category' => 'high mayor',
	'region' => '20',
	'place' => '79',
	'quarter' => '13838',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zutphen',
	'title_category' => 'lord mayor',
	'region' => '21',
	'place' => '82',
	'quarter' => '13841',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nimeguen',
	'title_category' => 'high mayor',
	'region' => '21',
	'place' => '83',
	'quarter' => '13842',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Deventer',
	'title_category' => 'high mayor',
	'region' => '21',
	'place' => '84',
	'quarter' => '13843',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorestad',
	'title_category' => 'lord mayor',
	'region' => '22',
	'place' => '85',
	'quarter' => '13844',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gouda',
	'title_category' => 'lord mayor',
	'region' => '22',
	'place' => '86',
	'quarter' => '13845',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Utrecht',
	'title_category' => 'lord mayor',
	'region' => '22',
	'place' => '87',
	'quarter' => '13846',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amsterdam',
	'title_category' => 'lord mayor',
	'region' => '22',
	'place' => '88',
	'quarter' => '13847',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sneek',
	'title_category' => 'lord mayor',
	'region' => '23',
	'place' => '89',
	'quarter' => '13848',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emden',
	'title_category' => 'lord mayor',
	'region' => '23',
	'place' => '90',
	'quarter' => '13849',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Groningen',
	'title_category' => 'lord mayor',
	'region' => '23',
	'place' => '91',
	'quarter' => '13850',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dokkum',
	'title_category' => 'lord mayor',
	'region' => '23',
	'place' => '92',
	'quarter' => '13851',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Louvain',
	'title_category' => 'lord mayor',
	'region' => '24',
	'place' => '93',
	'quarter' => '13852',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breda',
	'title_category' => 'lord mayor',
	'region' => '24',
	'place' => '94',
	'quarter' => '13853',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antwerp',
	'title_category' => 'burgrave',
	'region' => '24',
	'place' => '95',
	'quarter' => '13854',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bruges',
	'title_category' => 'lord mayor',
	'region' => '25',
	'place' => '97',
	'quarter' => '13856',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghent',
	'title_category' => 'lord mayor',
	'region' => '25',
	'place' => '98',
	'quarter' => '13857',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambrai',
	'title_category' => 'high mayor',
	'region' => '25',
	'place' => '99',
	'quarter' => '13858',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ypres',
	'title_category' => 'lord mayor',
	'region' => '25',
	'place' => '100',
	'quarter' => '13859',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klagenfurt',
	'title_category' => 'lord mayor',
	'region' => '26',
	'place' => '101',
	'quarter' => '13860',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treffen',
	'title_category' => 'lord mayor',
	'region' => '26',
	'place' => '102',
	'quarter' => '13861',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorizia',
	'title_category' => 'lord mayor',
	'region' => '26',
	'place' => '103',
	'quarter' => '13862',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krainburg',
	'title_category' => 'lord mayor',
	'region' => '27',
	'place' => '105',
	'quarter' => '13864',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laibach',
	'title_category' => 'lord mayor',
	'region' => '27',
	'place' => '107',
	'quarter' => '13866',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vannes',
	'title_category' => 'lord mayor',
	'region' => '28',
	'place' => '109',
	'quarter' => '13868',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Quimper',
	'title_category' => 'lord mayor',
	'region' => '28',
	'place' => '111',
	'quarter' => '13870',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paris',
	'title_category' => 'lord mayor',
	'region' => '29',
	'place' => '113',
	'quarter' => '13872',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meaux',
	'title_category' => 'lord mayor',
	'region' => '29',
	'place' => '114',
	'quarter' => '13873',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chartres',
	'title_category' => 'lord mayor',
	'region' => '29',
	'place' => '115',
	'quarter' => '13874',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Denis',
	'title_category' => 'lord mayor',
	'region' => '29',
	'place' => '116',
	'quarter' => '13875',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verdun',
	'title_category' => 'high mayor',
	'region' => '30',
	'place' => '119',
	'quarter' => '13878',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Langres',
	'title_category' => 'lord mayor',
	'region' => '30',
	'place' => '120',
	'quarter' => '13879',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amiens',
	'title_category' => 'lord mayor',
	'region' => '31',
	'place' => '121',
	'quarter' => '13880',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boulogne',
	'title_category' => 'lord mayor',
	'region' => '31',
	'place' => '122',
	'quarter' => '13881',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laon',
	'title_category' => 'lord mayor',
	'region' => '31',
	'place' => '123',
	'quarter' => '13882',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Omer',
	'title_category' => 'lord mayor',
	'region' => '31',
	'place' => '124',
	'quarter' => '13883',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rouen',
	'title_category' => 'lord mayor',
	'region' => '32',
	'place' => '125',
	'quarter' => '13884',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caen',
	'title_category' => 'lord mayor',
	'region' => '32',
	'place' => '126',
	'quarter' => '13885',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisieux',
	'title_category' => 'lord mayor',
	'region' => '32',
	'place' => '127',
	'quarter' => '13886',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayeux',
	'title_category' => 'lord mayor',
	'region' => '32',
	'place' => '128',
	'quarter' => '13887',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troyes',
	'title_category' => 'lord mayor',
	'region' => '33',
	'place' => '129',
	'quarter' => '13888',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reims',
	'title_category' => 'lord mayor',
	'region' => '33',
	'place' => '131',
	'quarter' => '13890',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orleans',
	'title_category' => 'lord mayor',
	'region' => '34',
	'place' => '133',
	'quarter' => '13892',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Blois',
	'title_category' => 'lord mayor',
	'region' => '34',
	'place' => '135',
	'quarter' => '13894',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tours',
	'title_category' => 'lord mayor',
	'region' => '35',
	'place' => '137',
	'quarter' => '13896',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angers',
	'title_category' => 'lord mayor',
	'region' => '36',
	'place' => '141',
	'quarter' => '13900',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mans',
	'title_category' => 'lord mayor',
	'region' => '36',
	'place' => '143',
	'quarter' => '13902',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poitiers',
	'title_category' => 'lord mayor',
	'region' => '37',
	'place' => '145',
	'quarter' => '13904',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montmorillon',
	'title_category' => 'lord mayor',
	'region' => '37',
	'place' => '147',
	'quarter' => '13906',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bourges',
	'title_category' => 'lord mayor',
	'region' => '38',
	'place' => '149',
	'quarter' => '13908',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nevers',
	'title_category' => 'lord mayor',
	'region' => '38',
	'place' => '151',
	'quarter' => '13910',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vezelay',
	'title_category' => 'lord mayor',
	'region' => '38',
	'place' => '152',
	'quarter' => '13911',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moulins',
	'title_category' => 'lord mayor',
	'region' => '39',
	'place' => '153',
	'quarter' => '13912',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clermont Ferrand',
	'title_category' => 'lord mayor',
	'region' => '40',
	'place' => '157',
	'quarter' => '13916',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Puy en Velay',
	'title_category' => 'lord mayor',
	'region' => '40',
	'place' => '159',
	'quarter' => '13918',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arles',
	'title_category' => 'lord mayor',
	'region' => '41',
	'place' => '161',
	'quarter' => '13920',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aix',
	'title_category' => 'lord mayor',
	'region' => '41',
	'place' => '162',
	'quarter' => '13921',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marseille',
	'title_category' => 'lord mayor',
	'region' => '41',
	'place' => '163',
	'quarter' => '13922',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avignon',
	'title_category' => 'lord mayor',
	'region' => '41',
	'place' => '164',
	'quarter' => '13923',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toulouse',
	'title_category' => 'lord mayor',
	'region' => '42',
	'place' => '165',
	'quarter' => '13924',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carcasonne',
	'title_category' => 'lord mayor',
	'region' => '42',
	'place' => '166',
	'quarter' => '13925',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Narbonne',
	'title_category' => 'lord mayor',
	'region' => '42',
	'place' => '167',
	'quarter' => '13926',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bordeaux',
	'title_category' => 'lord mayor',
	'region' => '43',
	'place' => '169',
	'quarter' => '13928',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cahors',
	'title_category' => 'lord mayor',
	'region' => '43',
	'place' => '170',
	'quarter' => '13929',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Auch',
	'title_category' => 'lord mayor',
	'region' => '43',
	'place' => '171',
	'quarter' => '13930',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angouleme',
	'title_category' => 'lord mayor',
	'region' => '44',
	'place' => '173',
	'quarter' => '13932',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limoges',
	'title_category' => 'lord mayor',
	'region' => '44',
	'place' => '174',
	'quarter' => '13933',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perigeux',
	'title_category' => 'lord mayor',
	'region' => '44',
	'place' => '175',
	'quarter' => '13934',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grenoble',
	'title_category' => 'lord mayor',
	'region' => '45',
	'place' => '177',
	'quarter' => '13936',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienne',
	'title_category' => 'lord mayor',
	'region' => '45',
	'place' => '178',
	'quarter' => '13937',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyon',
	'title_category' => 'lord mayor',
	'region' => '45',
	'place' => '179',
	'quarter' => '13938',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Autun',
	'title_category' => 'lord mayor',
	'region' => '45',
	'place' => '180',
	'quarter' => '13939',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dijon',
	'title_category' => 'lord mayor',
	'region' => '46',
	'place' => '181',
	'quarter' => '13940',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Besancon',
	'title_category' => 'high mayor',
	'region' => '46',
	'place' => '182',
	'quarter' => '13941',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chalon',
	'title_category' => 'lord mayor',
	'region' => '46',
	'place' => '183',
	'quarter' => '13942',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'London',
	'title_category' => 'lord mayor',
	'region' => '47',
	'place' => '185',
	'quarter' => '13944',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guildford',
	'title_category' => 'lord mayor',
	'region' => '47',
	'place' => '187',
	'quarter' => '13946',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Westminster',
	'title_category' => 'lord mayor',
	'region' => '47',
	'place' => '188',
	'quarter' => '13947',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Canterbury',
	'title_category' => 'lord mayor',
	'region' => '48',
	'place' => '189',
	'quarter' => '13948',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cinque Ports',
	'title_category' => 'lord warden',
	'region' => '48',
	'place' => '190',
	'quarter' => '13949',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ashford',
	'title_category' => 'lord mayor',
	'region' => '48',
	'place' => '191',
	'quarter' => '13950',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maidstone',
	'title_category' => 'lord mayor',
	'region' => '48',
	'place' => '192',
	'quarter' => '13951',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Winchester',
	'title_category' => 'lord mayor',
	'region' => '49',
	'place' => '193',
	'quarter' => '13952',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wells',
	'title_category' => 'lord mayor',
	'region' => '49',
	'place' => '195',
	'quarter' => '13954',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stannaries',
	'title_category' => 'lord warden',
	'region' => '50',
	'place' => '197',
	'quarter' => '13956',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bodmin',
	'title_category' => 'lord mayor',
	'region' => '50',
	'place' => '198',
	'quarter' => '13957',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint German',
	'title_category' => 'lord mayor',
	'region' => '50',
	'place' => '199',
	'quarter' => '13958',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Norwich',
	'title_category' => 'lord mayor',
	'region' => '51',
	'place' => '201',
	'quarter' => '13960',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ipswich',
	'title_category' => 'lord mayor',
	'region' => '51',
	'place' => '202',
	'quarter' => '13961',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Edmunds',
	'title_category' => 'lord mayor',
	'region' => '51',
	'place' => '203',
	'quarter' => '13962',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'York',
	'title_category' => 'lord mayor',
	'region' => '52',
	'place' => '205',
	'quarter' => '13964',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durham',
	'title_category' => 'lord mayor',
	'region' => '52',
	'place' => '206',
	'quarter' => '13965',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scarborough',
	'title_category' => 'lord mayor',
	'region' => '52',
	'place' => '207',
	'quarter' => '13966',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lancaster',
	'title_category' => 'lord mayor',
	'region' => '52',
	'place' => '208',
	'quarter' => '13967',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Worcester',
	'title_category' => 'lord mayor',
	'region' => '53',
	'place' => '209',
	'quarter' => '13968',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gloucester',
	'title_category' => 'lord mayor',
	'region' => '53',
	'place' => '210',
	'quarter' => '13969',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bristol',
	'title_category' => 'lord mayor',
	'region' => '53',
	'place' => '211',
	'quarter' => '13970',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cirencester',
	'title_category' => 'lord mayor',
	'region' => '53',
	'place' => '212',
	'quarter' => '13971',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ely',
	'title_category' => 'lord mayor',
	'region' => '54',
	'place' => '213',
	'quarter' => '13972',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambridge',
	'title_category' => 'lord mayor',
	'region' => '54',
	'place' => '214',
	'quarter' => '13973',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oxford',
	'title_category' => 'lord mayor',
	'region' => '54',
	'place' => '215',
	'quarter' => '13974',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Albans',
	'title_category' => 'lord mayor',
	'region' => '54',
	'place' => '216',
	'quarter' => '13975',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warwick',
	'title_category' => 'lord mayor',
	'region' => '55',
	'place' => '218',
	'quarter' => '13977',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stafford',
	'title_category' => 'lord mayor',
	'region' => '55',
	'place' => '219',
	'quarter' => '13978',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leicester',
	'title_category' => 'lord mayor',
	'region' => '55',
	'place' => '220',
	'quarter' => '13979',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lincoln',
	'title_category' => 'lord mayor',
	'region' => '56',
	'place' => '221',
	'quarter' => '13980',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boston',
	'title_category' => 'lord mayor',
	'region' => '56',
	'place' => '223',
	'quarter' => '13982',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stamford',
	'title_category' => 'lord mayor',
	'region' => '56',
	'place' => '224',
	'quarter' => '13983',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caernarfon',
	'title_category' => 'lord mayor',
	'region' => '57',
	'place' => '225',
	'quarter' => '13984',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bangor',
	'title_category' => 'lord mayor',
	'region' => '57',
	'place' => '227',
	'quarter' => '13986',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chester',
	'title_category' => 'lord mayor',
	'region' => '58',
	'place' => '229',
	'quarter' => '13988',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shrewsbury',
	'title_category' => 'lord mayor',
	'region' => '58',
	'place' => '230',
	'quarter' => '13989',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasbury',
	'title_category' => 'lord mayor',
	'region' => '58',
	'place' => '231',
	'quarter' => '13990',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerwent',
	'title_category' => 'lord mayor',
	'region' => '59',
	'place' => '233',
	'quarter' => '13992',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carmarthen',
	'title_category' => 'lord mayor',
	'region' => '59',
	'place' => '234',
	'quarter' => '13993',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cardiff',
	'title_category' => 'lord mayor',
	'region' => '59',
	'place' => '235',
	'quarter' => '13994',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Abergavenny',
	'title_category' => 'lord mayor',
	'region' => '59',
	'place' => '236',
	'quarter' => '13995',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oslo',
	'title_category' => 'lord mayor',
	'region' => '60',
	'place' => '237',
	'quarter' => '13996',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamar',
	'title_category' => 'lord mayor',
	'region' => '60',
	'place' => '239',
	'quarter' => '13998',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bergen',
	'title_category' => 'lord mayor',
	'region' => '61',
	'place' => '241',
	'quarter' => '14000',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavanger',
	'title_category' => 'lord mayor',
	'region' => '61',
	'place' => '243',
	'quarter' => '14002',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Copenhagen',
	'title_category' => 'lord mayor',
	'region' => '62',
	'place' => '245',
	'quarter' => '14004',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roskilde',
	'title_category' => 'lord mayor',
	'region' => '62',
	'place' => '247',
	'quarter' => '14006',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lund',
	'title_category' => 'lord mayor',
	'region' => '63',
	'place' => '249',
	'quarter' => '14008',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halmstad',
	'title_category' => 'lord mayor',
	'region' => '63',
	'place' => '251',
	'quarter' => '14010',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aarhus',
	'title_category' => 'lord mayor',
	'region' => '64',
	'place' => '253',
	'quarter' => '14012',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aalborg',
	'title_category' => 'lord mayor',
	'region' => '64',
	'place' => '254',
	'quarter' => '14013',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripen',
	'title_category' => 'lord mayor',
	'region' => '64',
	'place' => '255',
	'quarter' => '14014',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stockholm',
	'title_category' => 'lord mayor',
	'region' => '65',
	'place' => '257',
	'quarter' => '14016',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vasteras',
	'title_category' => 'lord mayor',
	'region' => '65',
	'place' => '258',
	'quarter' => '14017',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Uppsala',
	'title_category' => 'lord mayor',
	'region' => '65',
	'place' => '259',
	'quarter' => '14018',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visby',
	'title_category' => 'lord mayor',
	'region' => '66',
	'place' => '261',
	'quarter' => '14020',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vaxjo',
	'title_category' => 'lord mayor',
	'region' => '66',
	'place' => '263',
	'quarter' => '14022',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skara',
	'title_category' => 'lord mayor',
	'region' => '67',
	'place' => '265',
	'quarter' => '14024',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jonkoping',
	'title_category' => 'lord mayor',
	'region' => '67',
	'place' => '267',
	'quarter' => '14026',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riga',
	'title_category' => 'high mayor',
	'region' => '68',
	'place' => '269',
	'quarter' => '14028',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Walk',
	'title_category' => 'lord mayor',
	'region' => '68',
	'place' => '271',
	'quarter' => '14030',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilten',
	'title_category' => 'lord mayor',
	'region' => '69',
	'place' => '273',
	'quarter' => '14032',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Libau',
	'title_category' => 'lord mayor',
	'region' => '69',
	'place' => '274',
	'quarter' => '14033',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Goldingen',
	'title_category' => 'lord mayor',
	'region' => '69',
	'place' => '275',
	'quarter' => '14034',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marienburg',
	'title_category' => 'lord mayor',
	'region' => '70',
	'place' => '277',
	'quarter' => '14036',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Danzig',
	'title_category' => 'lord mayor',
	'region' => '70',
	'place' => '279',
	'quarter' => '14038',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Koningsberg',
	'title_category' => 'lord mayor',
	'region' => '70',
	'place' => '280',
	'quarter' => '14039',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Memelburg',
	'title_category' => 'lord mayor',
	'region' => '71',
	'place' => '281',
	'quarter' => '14040',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tilsit',
	'title_category' => 'lord mayor',
	'region' => '71',
	'place' => '283',
	'quarter' => '14042',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reval',
	'title_category' => 'lord mayor',
	'region' => '72',
	'place' => '285',
	'quarter' => '14044',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arensburg',
	'title_category' => 'lord mayor',
	'region' => '72',
	'place' => '287',
	'quarter' => '14046',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hapsal',
	'title_category' => 'lord mayor',
	'region' => '72',
	'place' => '288',
	'quarter' => '14047',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edinburgh',
	'title_category' => 'lord mayor',
	'region' => '73',
	'place' => '289',
	'quarter' => '14048',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Haddington',
	'title_category' => 'lord mayor',
	'region' => '73',
	'place' => '292',
	'quarter' => '14051',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bamburgh',
	'title_category' => 'lord mayor',
	'region' => '74',
	'place' => '293',
	'quarter' => '14052',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berwick',
	'title_category' => 'lord mayor',
	'region' => '74',
	'place' => '295',
	'quarter' => '14054',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jedburgh',
	'title_category' => 'lord mayor',
	'region' => '74',
	'place' => '296',
	'quarter' => '14055',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dumbarton',
	'title_category' => 'lord mayor',
	'region' => '75',
	'place' => '297',
	'quarter' => '14056',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kilmarnock',
	'title_category' => 'lord mayor',
	'region' => '75',
	'place' => '298',
	'quarter' => '14057',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasgow',
	'title_category' => 'lord mayor',
	'region' => '75',
	'place' => '299',
	'quarter' => '14058',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ayr',
	'title_category' => 'lord mayor',
	'region' => '75',
	'place' => '300',
	'quarter' => '14059',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marches',
	'title_category' => 'lord warden',
	'region' => '76',
	'place' => '301',
	'quarter' => '14060',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Whithorn',
	'title_category' => 'lord mayor',
	'region' => '76',
	'place' => '303',
	'quarter' => '14062',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iona',
	'title_category' => 'lord mayor',
	'region' => '77',
	'place' => '308',
	'quarter' => '14067',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perth',
	'title_category' => 'lord mayor',
	'region' => '78',
	'place' => '309',
	'quarter' => '14068',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stirling',
	'title_category' => 'lord mayor',
	'region' => '78',
	'place' => '310',
	'quarter' => '14069',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Andrews',
	'title_category' => 'lord mayor',
	'region' => '78',
	'place' => '311',
	'quarter' => '14070',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunfermline',
	'title_category' => 'lord mayor',
	'region' => '78',
	'place' => '312',
	'quarter' => '14071',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elgin',
	'title_category' => 'lord mayor',
	'region' => '79',
	'place' => '313',
	'quarter' => '14072',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mortlach',
	'title_category' => 'lord mayor',
	'region' => '79',
	'place' => '315',
	'quarter' => '14074',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aberdeen',
	'title_category' => 'lord mayor',
	'region' => '79',
	'place' => '316',
	'quarter' => '14075',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dundee',
	'title_category' => 'lord mayor',
	'region' => '80',
	'place' => '317',
	'quarter' => '14076',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scone',
	'title_category' => 'lord mayor',
	'region' => '80',
	'place' => '319',
	'quarter' => '14078',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosemarkie',
	'title_category' => 'lord mayor',
	'region' => '81',
	'place' => '323',
	'quarter' => '14082',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dornoch',
	'title_category' => 'lord mayor',
	'region' => '81',
	'place' => '324',
	'quarter' => '14083',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dublin',
	'title_category' => 'lord mayor',
	'region' => '82',
	'place' => '325',
	'quarter' => '14084',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kildare',
	'title_category' => 'lord mayor',
	'region' => '82',
	'place' => '327',
	'quarter' => '14086',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Armagh',
	'title_category' => 'lord mayor',
	'region' => '83',
	'place' => '329',
	'quarter' => '14088',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derry',
	'title_category' => 'lord mayor',
	'region' => '83',
	'place' => '331',
	'quarter' => '14090',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Waterford',
	'title_category' => 'lord mayor',
	'region' => '84',
	'place' => '335',
	'quarter' => '14094',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cashel',
	'title_category' => 'lord mayor',
	'region' => '85',
	'place' => '337',
	'quarter' => '14096',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limerick',
	'title_category' => 'lord mayor',
	'region' => '85',
	'place' => '338',
	'quarter' => '14097',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cork',
	'title_category' => 'lord mayor',
	'region' => '85',
	'place' => '339',
	'quarter' => '14098',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mayo',
	'title_category' => 'lord mayor',
	'region' => '86',
	'place' => '342',
	'quarter' => '14101',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tuam',
	'title_category' => 'lord mayor',
	'region' => '86',
	'place' => '343',
	'quarter' => '14102',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achonry',
	'title_category' => 'lord mayor',
	'region' => '86',
	'place' => '344',
	'quarter' => '14103',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pamplona',
	'title_category' => 'lord mayor',
	'region' => '87',
	'place' => '345',
	'quarter' => '14104',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tudela',
	'title_category' => 'lord mayor',
	'region' => '87',
	'place' => '347',
	'quarter' => '14106',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durango',
	'title_category' => 'lord mayor',
	'region' => '88',
	'place' => '350',
	'quarter' => '14109',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gastehiz',
	'title_category' => 'lord mayor',
	'region' => '88',
	'place' => '352',
	'quarter' => '14111',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaca',
	'title_category' => 'lord mayor',
	'region' => '89',
	'place' => '353',
	'quarter' => '14112',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monzon',
	'title_category' => 'lord mayor',
	'region' => '89',
	'place' => '354',
	'quarter' => '14113',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huesca',
	'title_category' => 'lord mayor',
	'region' => '89',
	'place' => '355',
	'quarter' => '14114',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaragoza',
	'title_category' => 'lord mayor',
	'region' => '90',
	'place' => '357',
	'quarter' => '14116',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albarracin',
	'title_category' => 'lord mayor',
	'region' => '90',
	'place' => '359',
	'quarter' => '14118',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gerona',
	'title_category' => 'lord mayor',
	'region' => '91',
	'place' => '361',
	'quarter' => '14120',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emporda',
	'title_category' => 'lord mayor',
	'region' => '91',
	'place' => '363',
	'quarter' => '14122',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barcelona',
	'title_category' => 'lord mayor',
	'region' => '92',
	'place' => '365',
	'quarter' => '14124',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manresa',
	'title_category' => 'lord mayor',
	'region' => '92',
	'place' => '367',
	'quarter' => '14126',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valencia',
	'title_category' => 'lord mayor',
	'region' => '93',
	'place' => '369',
	'quarter' => '14128',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Castellon',
	'title_category' => 'lord mayor',
	'region' => '93',
	'place' => '371',
	'quarter' => '14130',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Denia',
	'title_category' => 'lord mayor',
	'region' => '94',
	'place' => '373',
	'quarter' => '14132',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'lord mayor',
	'region' => '94',
	'place' => '375',
	'quarter' => '14134',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palma',
	'title_category' => 'lord mayor',
	'region' => '95',
	'place' => '377',
	'quarter' => '14136',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pollenca',
	'title_category' => 'lord mayor',
	'region' => '95',
	'place' => '378',
	'quarter' => '14137',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menorca',
	'title_category' => 'lord mayor',
	'region' => '95',
	'place' => '379',
	'quarter' => '14138',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ibiza',
	'title_category' => 'lord mayor',
	'region' => '95',
	'place' => '380',
	'quarter' => '14139',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leon',
	'title_category' => 'lord mayor',
	'region' => '96',
	'place' => '381',
	'quarter' => '14140',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oviedo',
	'title_category' => 'lord mayor',
	'region' => '97',
	'place' => '385',
	'quarter' => '14144',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aviles',
	'title_category' => 'lord mayor',
	'region' => '97',
	'place' => '386',
	'quarter' => '14145',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gijon',
	'title_category' => 'lord mayor',
	'region' => '97',
	'place' => '387',
	'quarter' => '14146',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valladolid',
	'title_category' => 'lord mayor',
	'region' => '98',
	'place' => '389',
	'quarter' => '14148',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avila',
	'title_category' => 'lord mayor',
	'region' => '98',
	'place' => '390',
	'quarter' => '14149',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Segovia',
	'title_category' => 'lord mayor',
	'region' => '98',
	'place' => '391',
	'quarter' => '14150',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamanca',
	'title_category' => 'lord mayor',
	'region' => '98',
	'place' => '392',
	'quarter' => '14151',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Burgos',
	'title_category' => 'lord mayor',
	'region' => '99',
	'place' => '393',
	'quarter' => '14152',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santiago',
	'title_category' => 'lord mayor',
	'region' => '100',
	'place' => '397',
	'quarter' => '14156',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ourense',
	'title_category' => 'lord mayor',
	'region' => '100',
	'place' => '398',
	'quarter' => '14157',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coruna',
	'title_category' => 'lord mayor',
	'region' => '100',
	'place' => '399',
	'quarter' => '14158',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisbon',
	'title_category' => 'lord mayor',
	'region' => '101',
	'place' => '401',
	'quarter' => '14160',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santarem',
	'title_category' => 'lord mayor',
	'region' => '101',
	'place' => '403',
	'quarter' => '14162',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto',
	'title_category' => 'lord mayor',
	'region' => '102',
	'place' => '405',
	'quarter' => '14164',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guimaraes',
	'title_category' => 'lord mayor',
	'region' => '102',
	'place' => '406',
	'quarter' => '14165',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viana',
	'title_category' => 'lord mayor',
	'region' => '102',
	'place' => '407',
	'quarter' => '14166',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aveiro',
	'title_category' => 'lord mayor',
	'region' => '102',
	'place' => '408',
	'quarter' => '14167',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Braganca',
	'title_category' => 'lord mayor',
	'region' => '103',
	'place' => '409',
	'quarter' => '14168',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sanabria',
	'title_category' => 'lord mayor',
	'region' => '103',
	'place' => '410',
	'quarter' => '14169',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verin',
	'title_category' => 'lord mayor',
	'region' => '103',
	'place' => '411',
	'quarter' => '14170',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mirandela',
	'title_category' => 'lord mayor',
	'region' => '103',
	'place' => '412',
	'quarter' => '14171',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coimbra',
	'title_category' => 'lord mayor',
	'region' => '104',
	'place' => '413',
	'quarter' => '14172',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Evora',
	'title_category' => 'lord mayor',
	'region' => '105',
	'place' => '417',
	'quarter' => '14176',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moura',
	'title_category' => 'lord mayor',
	'region' => '105',
	'place' => '419',
	'quarter' => '14178',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Faro',
	'title_category' => 'lord mayor',
	'region' => '106',
	'place' => '421',
	'quarter' => '14180',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alvor',
	'title_category' => 'lord mayor',
	'region' => '106',
	'place' => '423',
	'quarter' => '14182',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Silves',
	'title_category' => 'lord mayor',
	'region' => '106',
	'place' => '424',
	'quarter' => '14183',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cordoba',
	'title_category' => 'lord mayor',
	'region' => '107',
	'place' => '425',
	'quarter' => '14184',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaen',
	'title_category' => 'lord mayor',
	'region' => '107',
	'place' => '427',
	'quarter' => '14186',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ecija',
	'title_category' => 'lord mayor',
	'region' => '107',
	'place' => '428',
	'quarter' => '14187',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevilla',
	'title_category' => 'lord mayor',
	'region' => '108',
	'place' => '429',
	'quarter' => '14188',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osuna',
	'title_category' => 'lord mayor',
	'region' => '108',
	'place' => '430',
	'quarter' => '14189',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cadiz',
	'title_category' => 'lord mayor',
	'region' => '108',
	'place' => '431',
	'quarter' => '14190',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huelva',
	'title_category' => 'lord mayor',
	'region' => '108',
	'place' => '432',
	'quarter' => '14191',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Badajoz',
	'title_category' => 'lord mayor',
	'region' => '109',
	'place' => '433',
	'quarter' => '14192',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merida',
	'title_category' => 'lord mayor',
	'region' => '109',
	'place' => '435',
	'quarter' => '14194',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toledo',
	'title_category' => 'lord mayor',
	'region' => '110',
	'place' => '437',
	'quarter' => '14196',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almaden',
	'title_category' => 'lord mayor',
	'region' => '110',
	'place' => '438',
	'quarter' => '14197',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Consuegra',
	'title_category' => 'lord mayor',
	'region' => '110',
	'place' => '439',
	'quarter' => '14198',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Granada',
	'title_category' => 'lord mayor',
	'region' => '111',
	'place' => '441',
	'quarter' => '14200',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guadix',
	'title_category' => 'lord mayor',
	'region' => '111',
	'place' => '444',
	'quarter' => '14203',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almeria',
	'title_category' => 'lord mayor',
	'region' => '112',
	'place' => '445',
	'quarter' => '14204',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baza',
	'title_category' => 'lord mayor',
	'region' => '112',
	'place' => '446',
	'quarter' => '14205',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Motril',
	'title_category' => 'lord mayor',
	'region' => '112',
	'place' => '447',
	'quarter' => '14206',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lorca',
	'title_category' => 'lord mayor',
	'region' => '112',
	'place' => '448',
	'quarter' => '14207',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Murcia',
	'title_category' => 'lord mayor',
	'region' => '113',
	'place' => '449',
	'quarter' => '14208',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'lord mayor',
	'region' => '113',
	'place' => '451',
	'quarter' => '14210',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cartagena',
	'title_category' => 'lord mayor',
	'region' => '113',
	'place' => '452',
	'quarter' => '14211',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Malaga',
	'title_category' => 'lord mayor',
	'region' => '114',
	'place' => '453',
	'quarter' => '14212',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marbella',
	'title_category' => 'lord mayor',
	'region' => '114',
	'place' => '455',
	'quarter' => '14214',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ronda',
	'title_category' => 'lord mayor',
	'region' => '114',
	'place' => '456',
	'quarter' => '14215',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Milan',
	'title_category' => 'burgrave',
	'region' => '115',
	'place' => '457',
	'quarter' => '14216',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brescia',
	'title_category' => 'lord mayor',
	'region' => '115',
	'place' => '458',
	'quarter' => '14217',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pavia',
	'title_category' => 'lord mayor',
	'region' => '115',
	'place' => '459',
	'quarter' => '14218',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cremona',
	'title_category' => 'lord mayor',
	'region' => '115',
	'place' => '460',
	'quarter' => '14219',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verona',
	'title_category' => 'lord mayor',
	'region' => '116',
	'place' => '461',
	'quarter' => '14220',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Padua',
	'title_category' => 'lord mayor',
	'region' => '116',
	'place' => '462',
	'quarter' => '14221',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vicenza',
	'title_category' => 'lord mayor',
	'region' => '116',
	'place' => '463',
	'quarter' => '14222',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mantua',
	'title_category' => 'lord mayor',
	'region' => '116',
	'place' => '464',
	'quarter' => '14223',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleria',
	'title_category' => 'lord mayor',
	'region' => '117',
	'place' => '467',
	'quarter' => '14226',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treviso',
	'title_category' => 'lord mayor',
	'region' => '118',
	'place' => '470',
	'quarter' => '14229',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chioggia',
	'title_category' => 'lord mayor',
	'region' => '118',
	'place' => '471',
	'quarter' => '14230',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belluno',
	'title_category' => 'lord mayor',
	'region' => '118',
	'place' => '472',
	'quarter' => '14231',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ravenna',
	'title_category' => 'lord mayor',
	'region' => '119',
	'place' => '473',
	'quarter' => '14232',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cesena',
	'title_category' => 'lord mayor',
	'region' => '119',
	'place' => '474',
	'quarter' => '14233',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forli',
	'title_category' => 'lord mayor',
	'region' => '119',
	'place' => '475',
	'quarter' => '14234',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rimini',
	'title_category' => 'lord mayor',
	'region' => '119',
	'place' => '476',
	'quarter' => '14235',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modena',
	'title_category' => 'lord mayor',
	'region' => '120',
	'place' => '477',
	'quarter' => '14236',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Parma',
	'title_category' => 'lord mayor',
	'region' => '120',
	'place' => '478',
	'quarter' => '14237',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ferrara',
	'title_category' => 'lord mayor',
	'region' => '120',
	'place' => '479',
	'quarter' => '14238',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bologna',
	'title_category' => 'lord mayor',
	'region' => '120',
	'place' => '480',
	'quarter' => '14239',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquileja',
	'title_category' => 'lord mayor',
	'region' => '121',
	'place' => '481',
	'quarter' => '14240',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pordenone',
	'title_category' => 'lord mayor',
	'region' => '121',
	'place' => '482',
	'quarter' => '14241',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Udine',
	'title_category' => 'lord mayor',
	'region' => '121',
	'place' => '483',
	'quarter' => '14242',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gemona',
	'title_category' => 'lord mayor',
	'region' => '121',
	'place' => '484',
	'quarter' => '14243',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turin',
	'title_category' => 'lord mayor',
	'region' => '122',
	'place' => '485',
	'quarter' => '14244',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ivrea',
	'title_category' => 'lord mayor',
	'region' => '122',
	'place' => '486',
	'quarter' => '14245',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asti',
	'title_category' => 'lord mayor',
	'region' => '122',
	'place' => '487',
	'quarter' => '14246',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arezzo',
	'title_category' => 'lord mayor',
	'region' => '123',
	'place' => '491',
	'quarter' => '14250',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grosseto',
	'title_category' => 'lord mayor',
	'region' => '123',
	'place' => '492',
	'quarter' => '14251',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Spoleto',
	'title_category' => 'lord mayor',
	'region' => '124',
	'place' => '493',
	'quarter' => '14252',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Assissi',
	'title_category' => 'lord mayor',
	'region' => '124',
	'place' => '496',
	'quarter' => '14255',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rome',
	'title_category' => 'lord mayor',
	'region' => '125',
	'place' => '497',
	'quarter' => '14256',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frascati',
	'title_category' => 'lord mayor',
	'region' => '125',
	'place' => '498',
	'quarter' => '14257',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tivoli',
	'title_category' => 'lord mayor',
	'region' => '125',
	'place' => '499',
	'quarter' => '14258',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrara',
	'title_category' => 'lord mayor',
	'region' => '126',
	'place' => '502',
	'quarter' => '14261',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lucca',
	'title_category' => 'lord mayor',
	'region' => '126',
	'place' => '503',
	'quarter' => '14262',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Volterra',
	'title_category' => 'lord mayor',
	'region' => '126',
	'place' => '504',
	'quarter' => '14263',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Naples',
	'title_category' => 'lord mayor',
	'region' => '127',
	'place' => '505',
	'quarter' => '14264',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taranto',
	'title_category' => 'lord mayor',
	'region' => '128',
	'place' => '509',
	'quarter' => '14268',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bari',
	'title_category' => 'lord mayor',
	'region' => '128',
	'place' => '510',
	'quarter' => '14269',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siponto',
	'title_category' => 'lord mayor',
	'region' => '128',
	'place' => '511',
	'quarter' => '14270',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brindisi',
	'title_category' => 'lord mayor',
	'region' => '128',
	'place' => '512',
	'quarter' => '14271',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cosenza',
	'title_category' => 'lord mayor',
	'region' => '129',
	'place' => '513',
	'quarter' => '14272',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rossano',
	'title_category' => 'lord mayor',
	'region' => '129',
	'place' => '514',
	'quarter' => '14273',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tropea',
	'title_category' => 'lord mayor',
	'region' => '129',
	'place' => '515',
	'quarter' => '14274',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benevento',
	'title_category' => 'lord mayor',
	'region' => '130',
	'place' => '517',
	'quarter' => '14276',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monteverde',
	'title_category' => 'lord mayor',
	'region' => '130',
	'place' => '518',
	'quarter' => '14277',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Potenza',
	'title_category' => 'lord mayor',
	'region' => '130',
	'place' => '519',
	'quarter' => '14278',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sassari',
	'title_category' => 'lord mayor',
	'region' => '131',
	'place' => '521',
	'quarter' => '14280',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olbia',
	'title_category' => 'lord mayor',
	'region' => '131',
	'place' => '522',
	'quarter' => '14281',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosa',
	'title_category' => 'lord mayor',
	'region' => '131',
	'place' => '523',
	'quarter' => '14282',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto Torres',
	'title_category' => 'lord mayor',
	'region' => '131',
	'place' => '524',
	'quarter' => '14283',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cagliari',
	'title_category' => 'lord mayor',
	'region' => '132',
	'place' => '525',
	'quarter' => '14284',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oristano',
	'title_category' => 'lord mayor',
	'region' => '132',
	'place' => '526',
	'quarter' => '14285',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dolia',
	'title_category' => 'lord mayor',
	'region' => '132',
	'place' => '527',
	'quarter' => '14286',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iglesias',
	'title_category' => 'lord mayor',
	'region' => '132',
	'place' => '528',
	'quarter' => '14287',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palermo',
	'title_category' => 'lord mayor',
	'region' => '133',
	'place' => '529',
	'quarter' => '14288',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agrigento',
	'title_category' => 'lord mayor',
	'region' => '133',
	'place' => '530',
	'quarter' => '14289',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cefalu',
	'title_category' => 'lord mayor',
	'region' => '133',
	'place' => '531',
	'quarter' => '14290',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marsala',
	'title_category' => 'lord mayor',
	'region' => '133',
	'place' => '532',
	'quarter' => '14291',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Messina',
	'title_category' => 'lord mayor',
	'region' => '134',
	'place' => '533',
	'quarter' => '14292',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taormina',
	'title_category' => 'lord mayor',
	'region' => '134',
	'place' => '534',
	'quarter' => '14293',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Catania',
	'title_category' => 'lord mayor',
	'region' => '134',
	'place' => '535',
	'quarter' => '14294',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troina',
	'title_category' => 'lord mayor',
	'region' => '134',
	'place' => '536',
	'quarter' => '14295',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siracusa',
	'title_category' => 'lord mayor',
	'region' => '135',
	'place' => '537',
	'quarter' => '14296',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valletta',
	'title_category' => 'lord mayor',
	'region' => '135',
	'place' => '539',
	'quarter' => '14298',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modica',
	'title_category' => 'lord mayor',
	'region' => '135',
	'place' => '540',
	'quarter' => '14299',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tangiers',
	'title_category' => 'lord mayor',
	'region' => '136',
	'place' => '541',
	'quarter' => '14300',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ceuta',
	'title_category' => 'lord mayor',
	'region' => '136',
	'place' => '542',
	'quarter' => '14301',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouazzane',
	'title_category' => 'lord mayor',
	'region' => '136',
	'place' => '543',
	'quarter' => '14302',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tetouan',
	'title_category' => 'lord mayor',
	'region' => '136',
	'place' => '544',
	'quarter' => '14303',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anfa',
	'title_category' => 'lord mayor',
	'region' => '137',
	'place' => '545',
	'quarter' => '14304',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rabat',
	'title_category' => 'lord mayor',
	'region' => '137',
	'place' => '546',
	'quarter' => '14305',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sale',
	'title_category' => 'lord mayor',
	'region' => '137',
	'place' => '547',
	'quarter' => '14306',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fedala',
	'title_category' => 'lord mayor',
	'region' => '137',
	'place' => '548',
	'quarter' => '14307',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fez',
	'title_category' => 'lord mayor',
	'region' => '138',
	'place' => '549',
	'quarter' => '14308',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sefrou',
	'title_category' => 'lord mayor',
	'region' => '138',
	'place' => '550',
	'quarter' => '14309',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taza',
	'title_category' => 'lord mayor',
	'region' => '138',
	'place' => '551',
	'quarter' => '14310',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meknes',
	'title_category' => 'lord mayor',
	'region' => '138',
	'place' => '552',
	'quarter' => '14311',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marrakesh',
	'title_category' => 'lord mayor',
	'region' => '139',
	'place' => '553',
	'quarter' => '14312',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouarzazate',
	'title_category' => 'lord mayor',
	'region' => '139',
	'place' => '554',
	'quarter' => '14313',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mogador',
	'title_category' => 'lord mayor',
	'region' => '139',
	'place' => '555',
	'quarter' => '14314',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benhaddou',
	'title_category' => 'lord mayor',
	'region' => '139',
	'place' => '556',
	'quarter' => '14315',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taroudant',
	'title_category' => 'lord mayor',
	'region' => '140',
	'place' => '557',
	'quarter' => '14316',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agadir',
	'title_category' => 'lord mayor',
	'region' => '140',
	'place' => '558',
	'quarter' => '14317',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tindouf',
	'title_category' => 'lord mayor',
	'region' => '140',
	'place' => '559',
	'quarter' => '14318',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinmel',
	'title_category' => 'lord mayor',
	'region' => '140',
	'place' => '560',
	'quarter' => '14319',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Figuig',
	'title_category' => 'lord mayor',
	'region' => '141',
	'place' => '561',
	'quarter' => '14320',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sijilmassa',
	'title_category' => 'lord mayor',
	'region' => '141',
	'place' => '562',
	'quarter' => '14321',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinghir',
	'title_category' => 'lord mayor',
	'region' => '141',
	'place' => '563',
	'quarter' => '14322',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tlemcen',
	'title_category' => 'lord mayor',
	'region' => '142',
	'place' => '565',
	'quarter' => '14324',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oujda',
	'title_category' => 'lord mayor',
	'region' => '142',
	'place' => '566',
	'quarter' => '14325',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mellila',
	'title_category' => 'lord mayor',
	'region' => '142',
	'place' => '567',
	'quarter' => '14326',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oran',
	'title_category' => 'lord mayor',
	'region' => '143',
	'place' => '569',
	'quarter' => '14328',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mostaganem',
	'title_category' => 'lord mayor',
	'region' => '143',
	'place' => '570',
	'quarter' => '14329',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiaret',
	'title_category' => 'lord mayor',
	'region' => '143',
	'place' => '571',
	'quarter' => '14330',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mascara',
	'title_category' => 'lord mayor',
	'region' => '143',
	'place' => '572',
	'quarter' => '14331',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Djelfa',
	'title_category' => 'lord mayor',
	'region' => '144',
	'place' => '573',
	'quarter' => '14332',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghardaia',
	'title_category' => 'lord mayor',
	'region' => '144',
	'place' => '575',
	'quarter' => '14334',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khaled',
	'title_category' => 'lord mayor',
	'region' => '145',
	'place' => '577',
	'quarter' => '14336',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biskra',
	'title_category' => 'lord mayor',
	'region' => '145',
	'place' => '578',
	'quarter' => '14337',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouargla',
	'title_category' => 'lord mayor',
	'region' => '145',
	'place' => '579',
	'quarter' => '14338',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Touggourt',
	'title_category' => 'lord mayor',
	'region' => '145',
	'place' => '580',
	'quarter' => '14339',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Algiers',
	'title_category' => 'lord mayor',
	'region' => '146',
	'place' => '581',
	'quarter' => '14340',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medea',
	'title_category' => 'lord mayor',
	'region' => '146',
	'place' => '582',
	'quarter' => '14341',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tedelles',
	'title_category' => 'lord mayor',
	'region' => '146',
	'place' => '583',
	'quarter' => '14342',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achir',
	'title_category' => 'lord mayor',
	'region' => '146',
	'place' => '584',
	'quarter' => '14343',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bejaia',
	'title_category' => 'lord mayor',
	'region' => '147',
	'place' => '585',
	'quarter' => '14344',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jijel',
	'title_category' => 'lord mayor',
	'region' => '147',
	'place' => '586',
	'quarter' => '14345',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Setif',
	'title_category' => 'lord mayor',
	'region' => '147',
	'place' => '587',
	'quarter' => '14346',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eulma',
	'title_category' => 'lord mayor',
	'region' => '147',
	'place' => '588',
	'quarter' => '14347',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Annaba',
	'title_category' => 'lord mayor',
	'region' => '148',
	'place' => '589',
	'quarter' => '14348',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabarka',
	'title_category' => 'lord mayor',
	'region' => '148',
	'place' => '590',
	'quarter' => '14349',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jendouba',
	'title_category' => 'lord mayor',
	'region' => '148',
	'place' => '591',
	'quarter' => '14350',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaf',
	'title_category' => 'lord mayor',
	'region' => '148',
	'place' => '592',
	'quarter' => '14351',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tunis',
	'title_category' => 'lord mayor',
	'region' => '149',
	'place' => '593',
	'quarter' => '14352',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaghouan',
	'title_category' => 'lord mayor',
	'region' => '149',
	'place' => '594',
	'quarter' => '14353',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hammamet',
	'title_category' => 'lord mayor',
	'region' => '149',
	'place' => '595',
	'quarter' => '14354',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bizerte',
	'title_category' => 'lord mayor',
	'region' => '149',
	'place' => '596',
	'quarter' => '14355',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kairouan',
	'title_category' => 'lord mayor',
	'region' => '150',
	'place' => '597',
	'quarter' => '14356',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sousse',
	'title_category' => 'lord mayor',
	'region' => '150',
	'place' => '598',
	'quarter' => '14357',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sfax',
	'title_category' => 'lord mayor',
	'region' => '150',
	'place' => '599',
	'quarter' => '14358',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mahdia',
	'title_category' => 'lord mayor',
	'region' => '150',
	'place' => '600',
	'quarter' => '14359',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gabes',
	'title_category' => 'lord mayor',
	'region' => '151',
	'place' => '601',
	'quarter' => '14360',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gafsa',
	'title_category' => 'lord mayor',
	'region' => '151',
	'place' => '602',
	'quarter' => '14361',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kebili',
	'title_category' => 'lord mayor',
	'region' => '151',
	'place' => '603',
	'quarter' => '14362',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghadames',
	'title_category' => 'lord mayor',
	'region' => '152',
	'place' => '605',
	'quarter' => '14364',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tamanrasset',
	'title_category' => 'lord mayor',
	'region' => '152',
	'place' => '607',
	'quarter' => '14366',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghat',
	'title_category' => 'lord mayor',
	'region' => '152',
	'place' => '608',
	'quarter' => '14367',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'lord mayor',
	'region' => '153',
	'place' => '609',
	'quarter' => '14368',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Misrata',
	'title_category' => 'lord mayor',
	'region' => '153',
	'place' => '611',
	'quarter' => '14370',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Germa',
	'title_category' => 'lord mayor',
	'region' => '154',
	'place' => '613',
	'quarter' => '14372',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sabha',
	'title_category' => 'lord mayor',
	'region' => '154',
	'place' => '614',
	'quarter' => '14373',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zouila',
	'title_category' => 'lord mayor',
	'region' => '154',
	'place' => '615',
	'quarter' => '14374',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qatrun',
	'title_category' => 'lord mayor',
	'region' => '154',
	'place' => '616',
	'quarter' => '14375',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufra',
	'title_category' => 'lord mayor',
	'region' => '155',
	'place' => '617',
	'quarter' => '14376',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Awjila',
	'title_category' => 'lord mayor',
	'region' => '155',
	'place' => '619',
	'quarter' => '14378',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benghazi',
	'title_category' => 'lord mayor',
	'region' => '156',
	'place' => '621',
	'quarter' => '14380',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derna',
	'title_category' => 'lord mayor',
	'region' => '156',
	'place' => '622',
	'quarter' => '14381',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tobruk',
	'title_category' => 'lord mayor',
	'region' => '156',
	'place' => '623',
	'quarter' => '14382',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandria',
	'title_category' => 'lord mayor',
	'region' => '157',
	'place' => '625',
	'quarter' => '14384',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosetta',
	'title_category' => 'lord mayor',
	'region' => '157',
	'place' => '626',
	'quarter' => '14385',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damietta',
	'title_category' => 'lord mayor',
	'region' => '157',
	'place' => '627',
	'quarter' => '14386',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mansoura',
	'title_category' => 'lord mayor',
	'region' => '157',
	'place' => '628',
	'quarter' => '14387',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cairo',
	'title_category' => 'lord mayor',
	'region' => '158',
	'place' => '629',
	'quarter' => '14388',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Helwan',
	'title_category' => 'lord mayor',
	'region' => '158',
	'place' => '630',
	'quarter' => '14389',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fayum',
	'title_category' => 'lord mayor',
	'region' => '158',
	'place' => '631',
	'quarter' => '14390',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minya',
	'title_category' => 'lord mayor',
	'region' => '159',
	'place' => '633',
	'quarter' => '14392',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siwa',
	'title_category' => 'lord mayor',
	'region' => '159',
	'place' => '634',
	'quarter' => '14393',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Farafra',
	'title_category' => 'lord mayor',
	'region' => '159',
	'place' => '635',
	'quarter' => '14394',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asyut',
	'title_category' => 'lord mayor',
	'region' => '160',
	'place' => '637',
	'quarter' => '14396',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kharga',
	'title_category' => 'lord mayor',
	'region' => '160',
	'place' => '638',
	'quarter' => '14397',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aswan',
	'title_category' => 'lord mayor',
	'region' => '160',
	'place' => '639',
	'quarter' => '14398',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liegnitz',
	'title_category' => 'lord mayor',
	'region' => '161',
	'place' => '641',
	'quarter' => '14400',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glogau',
	'title_category' => 'lord mayor',
	'region' => '161',
	'place' => '642',
	'quarter' => '14401',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breslau',
	'title_category' => 'lord mayor',
	'region' => '161',
	'place' => '643',
	'quarter' => '14402',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krakow',
	'title_category' => 'burgrave',
	'region' => '162',
	'place' => '645',
	'quarter' => '14404',
	'religion' => '1',
	'rank' => '6',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnau',
	'title_category' => 'lord mayor',
	'region' => '162',
	'place' => '647',
	'quarter' => '14406',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzberg',
	'title_category' => 'lord mayor',
	'region' => '162',
	'place' => '648',
	'quarter' => '14407',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gnesen',
	'title_category' => 'lord mayor',
	'region' => '163',
	'place' => '649',
	'quarter' => '14408',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Posen',
	'title_category' => 'lord mayor',
	'region' => '163',
	'place' => '650',
	'quarter' => '14409',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konin',
	'title_category' => 'lord mayor',
	'region' => '163',
	'place' => '651',
	'quarter' => '14410',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalisz',
	'title_category' => 'lord mayor',
	'region' => '163',
	'place' => '652',
	'quarter' => '14411',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plock',
	'title_category' => 'lord mayor',
	'region' => '164',
	'place' => '653',
	'quarter' => '14412',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warsaw',
	'title_category' => 'lord mayor',
	'region' => '164',
	'place' => '654',
	'quarter' => '14413',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leslau',
	'title_category' => 'lord mayor',
	'region' => '164',
	'place' => '655',
	'quarter' => '14414',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Radomir',
	'title_category' => 'lord mayor',
	'region' => '164',
	'place' => '656',
	'quarter' => '14415',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brest',
	'title_category' => 'lord mayor',
	'region' => '165',
	'place' => '657',
	'quarter' => '14416',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kobryn',
	'title_category' => 'lord mayor',
	'region' => '165',
	'place' => '659',
	'quarter' => '14418',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wolkowysk',
	'title_category' => 'lord mayor',
	'region' => '165',
	'place' => '660',
	'quarter' => '14419',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tracken',
	'title_category' => 'lord mayor',
	'region' => '166',
	'place' => '661',
	'quarter' => '14420',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vilnius',
	'title_category' => 'lord mayor',
	'region' => '166',
	'place' => '662',
	'quarter' => '14421',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kauen',
	'title_category' => 'lord mayor',
	'region' => '166',
	'place' => '663',
	'quarter' => '14422',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minsk',
	'title_category' => 'lord mayor',
	'region' => '166',
	'place' => '664',
	'quarter' => '14423',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pula',
	'title_category' => 'lord mayor',
	'region' => '167',
	'place' => '665',
	'quarter' => '14424',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rovigno',
	'title_category' => 'lord mayor',
	'region' => '167',
	'place' => '666',
	'quarter' => '14425',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vikla',
	'title_category' => 'lord mayor',
	'region' => '167',
	'place' => '667',
	'quarter' => '14426',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zadar',
	'title_category' => 'lord mayor',
	'region' => '168',
	'place' => '670',
	'quarter' => '14429',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Split',
	'title_category' => 'lord mayor',
	'region' => '168',
	'place' => '671',
	'quarter' => '14430',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biograd',
	'title_category' => 'lord mayor',
	'region' => '168',
	'place' => '672',
	'quarter' => '14431',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Knin',
	'title_category' => 'lord mayor',
	'region' => '169',
	'place' => '673',
	'quarter' => '14432',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bihac',
	'title_category' => 'lord mayor',
	'region' => '169',
	'place' => '674',
	'quarter' => '14433',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjic',
	'title_category' => 'lord mayor',
	'region' => '169',
	'place' => '675',
	'quarter' => '14434',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kotor',
	'title_category' => 'lord mayor',
	'region' => '169',
	'place' => '676',
	'quarter' => '14435',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gyor',
	'title_category' => 'lord mayor',
	'region' => '170',
	'place' => '677',
	'quarter' => '14436',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyrnau',
	'title_category' => 'lord mayor',
	'region' => '170',
	'place' => '678',
	'quarter' => '14437',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nitra',
	'title_category' => 'lord mayor',
	'region' => '170',
	'place' => '679',
	'quarter' => '14438',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Veszprem',
	'title_category' => 'lord mayor',
	'region' => '171',
	'place' => '681',
	'quarter' => '14440',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fehervar',
	'title_category' => 'lord mayor',
	'region' => '171',
	'place' => '682',
	'quarter' => '14441',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Egerszeg',
	'title_category' => 'lord mayor',
	'region' => '171',
	'place' => '683',
	'quarter' => '14442',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'lord mayor',
	'region' => '171',
	'place' => '684',
	'quarter' => '14443',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esztergom',
	'title_category' => 'lord mayor',
	'region' => '172',
	'place' => '685',
	'quarter' => '14444',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bystrica',
	'title_category' => 'lord mayor',
	'region' => '172',
	'place' => '686',
	'quarter' => '14445',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krupina',
	'title_category' => 'lord mayor',
	'region' => '172',
	'place' => '687',
	'quarter' => '14446',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eger',
	'title_category' => 'lord mayor',
	'region' => '173',
	'place' => '689',
	'quarter' => '14448',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bartfeld',
	'title_category' => 'lord mayor',
	'region' => '173',
	'place' => '691',
	'quarter' => '14450',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kassow',
	'title_category' => 'lord mayor',
	'region' => '173',
	'place' => '692',
	'quarter' => '14451',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buda',
	'title_category' => 'lord mayor',
	'region' => '174',
	'place' => '693',
	'quarter' => '14452',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kecskemet',
	'title_category' => 'lord mayor',
	'region' => '174',
	'place' => '694',
	'quarter' => '14453',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Debrecen',
	'title_category' => 'lord mayor',
	'region' => '174',
	'place' => '695',
	'quarter' => '14454',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zounok',
	'title_category' => 'lord mayor',
	'region' => '174',
	'place' => '696',
	'quarter' => '14455',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'lord mayor',
	'region' => '175',
	'place' => '697',
	'quarter' => '14456',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vukovar',
	'title_category' => 'lord mayor',
	'region' => '175',
	'place' => '698',
	'quarter' => '14457',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalocsa',
	'title_category' => 'lord mayor',
	'region' => '175',
	'place' => '699',
	'quarter' => '14458',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alba Julia',
	'title_category' => 'lord mayor',
	'region' => '176',
	'place' => '701',
	'quarter' => '14460',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schaasburg',
	'title_category' => 'lord mayor',
	'region' => '176',
	'place' => '702',
	'quarter' => '14461',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klausenburg',
	'title_category' => 'lord mayor',
	'region' => '176',
	'place' => '703',
	'quarter' => '14462',
	'religion' => '1',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targu Jiu',
	'title_category' => 'lord mayor',
	'region' => '177',
	'place' => '705',
	'quarter' => '14464',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Drobeta',
	'title_category' => 'lord mayor',
	'region' => '177',
	'place' => '706',
	'quarter' => '14465',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Curtea Arges',
	'title_category' => 'lord mayor',
	'region' => '177',
	'place' => '707',
	'quarter' => '14466',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targoviste',
	'title_category' => 'lord mayor',
	'region' => '178',
	'place' => '709',
	'quarter' => '14468',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bucharest',
	'title_category' => 'lord mayor',
	'region' => '178',
	'place' => '710',
	'quarter' => '14469',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constanta',
	'title_category' => 'lord mayor',
	'region' => '179',
	'place' => '713',
	'quarter' => '14472',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harsova',
	'title_category' => 'lord mayor',
	'region' => '179',
	'place' => '714',
	'quarter' => '14473',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulcea',
	'title_category' => 'lord mayor',
	'region' => '179',
	'place' => '715',
	'quarter' => '14474',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Calarasi',
	'title_category' => 'lord mayor',
	'region' => '179',
	'place' => '716',
	'quarter' => '14475',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suceava',
	'title_category' => 'lord mayor',
	'region' => '180',
	'place' => '717',
	'quarter' => '14476',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Odessa',
	'title_category' => 'lord mayor',
	'region' => '180',
	'place' => '719',
	'quarter' => '14478',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chisinau',
	'title_category' => 'lord mayor',
	'region' => '180',
	'place' => '720',
	'quarter' => '14479',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sofia',
	'title_category' => 'lord mayor',
	'region' => '181',
	'place' => '721',
	'quarter' => '14480',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stip',
	'title_category' => 'lord mayor',
	'region' => '181',
	'place' => '723',
	'quarter' => '14482',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Varna',
	'title_category' => 'lord mayor',
	'region' => '182',
	'place' => '725',
	'quarter' => '14484',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pliska',
	'title_category' => 'lord mayor',
	'region' => '182',
	'place' => '726',
	'quarter' => '14485',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Preslav',
	'title_category' => 'lord mayor',
	'region' => '182',
	'place' => '727',
	'quarter' => '14486',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnovo',
	'title_category' => 'lord mayor',
	'region' => '182',
	'place' => '728',
	'quarter' => '14487',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorazde',
	'title_category' => 'lord mayor',
	'region' => '183',
	'place' => '729',
	'quarter' => '14488',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zenica',
	'title_category' => 'lord mayor',
	'region' => '183',
	'place' => '730',
	'quarter' => '14489',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sebrenik',
	'title_category' => 'lord mayor',
	'region' => '183',
	'place' => '731',
	'quarter' => '14490',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belgrade',
	'title_category' => 'lord mayor',
	'region' => '184',
	'place' => '733',
	'quarter' => '14492',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valjevo',
	'title_category' => 'lord mayor',
	'region' => '184',
	'place' => '735',
	'quarter' => '14494',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rashka',
	'title_category' => 'lord mayor',
	'region' => '185',
	'place' => '737',
	'quarter' => '14496',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krusevac',
	'title_category' => 'lord mayor',
	'region' => '185',
	'place' => '739',
	'quarter' => '14498',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prizren',
	'title_category' => 'lord mayor',
	'region' => '186',
	'place' => '741',
	'quarter' => '14500',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skopje',
	'title_category' => 'lord mayor',
	'region' => '186',
	'place' => '743',
	'quarter' => '14502',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pristina',
	'title_category' => 'lord mayor',
	'region' => '187',
	'place' => '745',
	'quarter' => '14504',
	'religion' => '2',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samkarsh',
	'title_category' => 'lord mayor',
	'region' => '188',
	'place' => '750',
	'quarter' => '14509',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poltava',
	'title_category' => 'lord mayor',
	'region' => '188',
	'place' => '751',
	'quarter' => '14510',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pereyaslav',
	'title_category' => 'lord mayor',
	'region' => '189',
	'place' => '753',
	'quarter' => '14512',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaniv',
	'title_category' => 'lord mayor',
	'region' => '189',
	'place' => '755',
	'quarter' => '14514',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kiev',
	'title_category' => 'lord mayor',
	'region' => '190',
	'place' => '757',
	'quarter' => '14516',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yuriev',
	'title_category' => 'lord mayor',
	'region' => '190',
	'place' => '759',
	'quarter' => '14518',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halych',
	'title_category' => 'lord mayor',
	'region' => '191',
	'place' => '761',
	'quarter' => '14520',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolomyia',
	'title_category' => 'lord mayor',
	'region' => '191',
	'place' => '762',
	'quarter' => '14521',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lviv',
	'title_category' => 'lord mayor',
	'region' => '191',
	'place' => '763',
	'quarter' => '14522',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Terebovlia',
	'title_category' => 'lord mayor',
	'region' => '191',
	'place' => '764',
	'quarter' => '14523',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turov',
	'title_category' => 'lord mayor',
	'region' => '192',
	'place' => '765',
	'quarter' => '14524',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinesk',
	'title_category' => 'lord mayor',
	'region' => '192',
	'place' => '766',
	'quarter' => '14525',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Slutsk',
	'title_category' => 'lord mayor',
	'region' => '192',
	'place' => '767',
	'quarter' => '14526',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tchernigov',
	'title_category' => 'lord mayor',
	'region' => '193',
	'place' => '769',
	'quarter' => '14528',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gomel',
	'title_category' => 'lord mayor',
	'region' => '193',
	'place' => '771',
	'quarter' => '14530',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Polotsk',
	'title_category' => 'lord mayor',
	'region' => '194',
	'place' => '773',
	'quarter' => '14532',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitebsk',
	'title_category' => 'lord mayor',
	'region' => '194',
	'place' => '775',
	'quarter' => '14534',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smolensk',
	'title_category' => 'lord mayor',
	'region' => '195',
	'place' => '777',
	'quarter' => '14536',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bryansk',
	'title_category' => 'lord mayor',
	'region' => '195',
	'place' => '778',
	'quarter' => '14537',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vyazma',
	'title_category' => 'lord mayor',
	'region' => '195',
	'place' => '779',
	'quarter' => '14538',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ryazan',
	'title_category' => 'lord mayor',
	'region' => '196',
	'place' => '781',
	'quarter' => '14540',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kasimov',
	'title_category' => 'lord mayor',
	'region' => '196',
	'place' => '783',
	'quarter' => '14542',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moscow',
	'title_category' => 'lord mayor',
	'region' => '197',
	'place' => '785',
	'quarter' => '14544',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zvenigorod',
	'title_category' => 'lord mayor',
	'region' => '197',
	'place' => '787',
	'quarter' => '14546',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleskov',
	'title_category' => 'lord mayor',
	'region' => '198',
	'place' => '789',
	'quarter' => '14548',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ostrov',
	'title_category' => 'lord mayor',
	'region' => '198',
	'place' => '791',
	'quarter' => '14550',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novgorod',
	'title_category' => 'lord mayor',
	'region' => '199',
	'place' => '793',
	'quarter' => '14552',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ladoga',
	'title_category' => 'lord mayor',
	'region' => '199',
	'place' => '795',
	'quarter' => '14554',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bolgar',
	'title_category' => 'lord mayor',
	'region' => '200',
	'place' => '797',
	'quarter' => '14556',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilyar',
	'title_category' => 'lord mayor',
	'region' => '200',
	'place' => '798',
	'quarter' => '14557',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kazan',
	'title_category' => 'lord mayor',
	'region' => '200',
	'place' => '799',
	'quarter' => '14558',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ufa',
	'title_category' => 'lord mayor',
	'region' => '200',
	'place' => '800',
	'quarter' => '14559',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vladimir',
	'title_category' => 'lord mayor',
	'region' => '201',
	'place' => '801',
	'quarter' => '14560',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suzdal',
	'title_category' => 'lord mayor',
	'region' => '201',
	'place' => '803',
	'quarter' => '14562',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nizhny',
	'title_category' => 'lord mayor',
	'region' => '201',
	'place' => '804',
	'quarter' => '14563',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vologda',
	'title_category' => 'lord mayor',
	'region' => '202',
	'place' => '805',
	'quarter' => '14564',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oryol',
	'title_category' => 'lord mayor',
	'region' => '203',
	'place' => '809',
	'quarter' => '14568',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novosil',
	'title_category' => 'lord mayor',
	'region' => '203',
	'place' => '810',
	'quarter' => '14569',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kromy',
	'title_category' => 'lord mayor',
	'region' => '203',
	'place' => '811',
	'quarter' => '14570',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevsk',
	'title_category' => 'lord mayor',
	'region' => '204',
	'place' => '813',
	'quarter' => '14572',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rylsk',
	'title_category' => 'lord mayor',
	'region' => '204',
	'place' => '814',
	'quarter' => '14573',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kursk',
	'title_category' => 'lord mayor',
	'region' => '204',
	'place' => '815',
	'quarter' => '14574',
	'religion' => '3',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Atil',
	'title_category' => 'lord mayor',
	'region' => '205',
	'place' => '817',
	'quarter' => '14576',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraibatu',
	'title_category' => 'lord mayor',
	'region' => '205',
	'place' => '818',
	'quarter' => '14577',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraiberke',
	'title_category' => 'lord mayor',
	'region' => '205',
	'place' => '819',
	'quarter' => '14578',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khumar',
	'title_category' => 'lord mayor',
	'region' => '205',
	'place' => '820',
	'quarter' => '14579',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gurganj',
	'title_category' => 'lord mayor',
	'region' => '206',
	'place' => '821',
	'quarter' => '14580',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khiva',
	'title_category' => 'lord mayor',
	'region' => '206',
	'place' => '822',
	'quarter' => '14581',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraidzhuk',
	'title_category' => 'lord mayor',
	'region' => '206',
	'place' => '823',
	'quarter' => '14582',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mishrian',
	'title_category' => 'lord mayor',
	'region' => '206',
	'place' => '824',
	'quarter' => '14583',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constantinople',
	'title_category' => 'lord mayor',
	'region' => '207',
	'place' => '825',
	'quarter' => '14584',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redosto',
	'title_category' => 'lord mayor',
	'region' => '207',
	'place' => '826',
	'quarter' => '14585',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edirne',
	'title_category' => 'lord mayor',
	'region' => '207',
	'place' => '827',
	'quarter' => '14586',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corlu',
	'title_category' => 'lord mayor',
	'region' => '207',
	'place' => '828',
	'quarter' => '14587',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thessaloniki',
	'title_category' => 'lord mayor',
	'region' => '208',
	'place' => '829',
	'quarter' => '14588',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stratonicea',
	'title_category' => 'lord mayor',
	'region' => '208',
	'place' => '830',
	'quarter' => '14589',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Melnik',
	'title_category' => 'lord mayor',
	'region' => '208',
	'place' => '831',
	'quarter' => '14590',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Athens',
	'title_category' => 'lord mayor',
	'region' => '209',
	'place' => '833',
	'quarter' => '14592',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lamia',
	'title_category' => 'lord mayor',
	'region' => '209',
	'place' => '834',
	'quarter' => '14593',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thebes',
	'title_category' => 'lord mayor',
	'region' => '209',
	'place' => '835',
	'quarter' => '14594',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Larissa',
	'title_category' => 'lord mayor',
	'region' => '209',
	'place' => '836',
	'quarter' => '14595',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mystras',
	'title_category' => 'lord mayor',
	'region' => '210',
	'place' => '837',
	'quarter' => '14596',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modon',
	'title_category' => 'lord mayor',
	'region' => '210',
	'place' => '838',
	'quarter' => '14597',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corinth',
	'title_category' => 'lord mayor',
	'region' => '210',
	'place' => '839',
	'quarter' => '14598',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glarentza',
	'title_category' => 'lord mayor',
	'region' => '210',
	'place' => '840',
	'quarter' => '14599',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arta',
	'title_category' => 'lord mayor',
	'region' => '211',
	'place' => '841',
	'quarter' => '14600',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ioannina',
	'title_category' => 'lord mayor',
	'region' => '211',
	'place' => '843',
	'quarter' => '14602',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amfissa',
	'title_category' => 'lord mayor',
	'region' => '211',
	'place' => '844',
	'quarter' => '14603',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kruja',
	'title_category' => 'lord mayor',
	'region' => '212',
	'place' => '845',
	'quarter' => '14604',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ohrid',
	'title_category' => 'lord mayor',
	'region' => '212',
	'place' => '847',
	'quarter' => '14606',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastoria',
	'title_category' => 'lord mayor',
	'region' => '213',
	'place' => '849',
	'quarter' => '14608',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prilep',
	'title_category' => 'lord mayor',
	'region' => '213',
	'place' => '851',
	'quarter' => '14610',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iraklion',
	'title_category' => 'lord mayor',
	'region' => '214',
	'place' => '853',
	'quarter' => '14612',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lemnos',
	'title_category' => 'lord mayor',
	'region' => '214',
	'place' => '854',
	'quarter' => '14613',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chania',
	'title_category' => 'lord mayor',
	'region' => '214',
	'place' => '855',
	'quarter' => '14614',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patros',
	'title_category' => 'lord mayor',
	'region' => '214',
	'place' => '856',
	'quarter' => '14615',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smyrna',
	'title_category' => 'lord mayor',
	'region' => '215',
	'place' => '857',
	'quarter' => '14616',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samos',
	'title_category' => 'lord mayor',
	'region' => '215',
	'place' => '858',
	'quarter' => '14617',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chios',
	'title_category' => 'lord mayor',
	'region' => '215',
	'place' => '859',
	'quarter' => '14618',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patmos',
	'title_category' => 'lord mayor',
	'region' => '215',
	'place' => '860',
	'quarter' => '14619',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tralles',
	'title_category' => 'lord mayor',
	'region' => '216',
	'place' => '861',
	'quarter' => '14620',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Miletus',
	'title_category' => 'lord mayor',
	'region' => '216',
	'place' => '862',
	'quarter' => '14621',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Efese',
	'title_category' => 'lord mayor',
	'region' => '216',
	'place' => '863',
	'quarter' => '14622',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sardes',
	'title_category' => 'lord mayor',
	'region' => '216',
	'place' => '864',
	'quarter' => '14623',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicaea',
	'title_category' => 'lord mayor',
	'region' => '217',
	'place' => '865',
	'quarter' => '14624',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kios',
	'title_category' => 'lord mayor',
	'region' => '217',
	'place' => '866',
	'quarter' => '14625',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bursa',
	'title_category' => 'lord mayor',
	'region' => '217',
	'place' => '867',
	'quarter' => '14626',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pergamum',
	'title_category' => 'lord mayor',
	'region' => '217',
	'place' => '868',
	'quarter' => '14627',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ikonion',
	'title_category' => 'lord mayor',
	'region' => '218',
	'place' => '869',
	'quarter' => '14628',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mistheia',
	'title_category' => 'lord mayor',
	'region' => '218',
	'place' => '870',
	'quarter' => '14629',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laranda',
	'title_category' => 'lord mayor',
	'region' => '218',
	'place' => '871',
	'quarter' => '14630',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ousakeion',
	'title_category' => 'lord mayor',
	'region' => '218',
	'place' => '872',
	'quarter' => '14631',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coracesium',
	'title_category' => 'lord mayor',
	'region' => '219',
	'place' => '873',
	'quarter' => '14632',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhodos',
	'title_category' => 'lord mayor',
	'region' => '219',
	'place' => '874',
	'quarter' => '14633',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Attalia',
	'title_category' => 'lord mayor',
	'region' => '219',
	'place' => '875',
	'quarter' => '14634',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Makre',
	'title_category' => 'lord mayor',
	'region' => '219',
	'place' => '876',
	'quarter' => '14635',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancyra',
	'title_category' => 'lord mayor',
	'region' => '220',
	'place' => '877',
	'quarter' => '14636',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gordion',
	'title_category' => 'lord mayor',
	'region' => '220',
	'place' => '878',
	'quarter' => '14637',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cotyaeum',
	'title_category' => 'lord mayor',
	'region' => '220',
	'place' => '879',
	'quarter' => '14638',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorylaeum',
	'title_category' => 'lord mayor',
	'region' => '220',
	'place' => '880',
	'quarter' => '14639',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sinope',
	'title_category' => 'lord mayor',
	'region' => '221',
	'place' => '881',
	'quarter' => '14640',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastamuni',
	'title_category' => 'lord mayor',
	'region' => '221',
	'place' => '882',
	'quarter' => '14641',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasra',
	'title_category' => 'lord mayor',
	'region' => '221',
	'place' => '883',
	'quarter' => '14642',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Claudiopolis',
	'title_category' => 'lord mayor',
	'region' => '221',
	'place' => '884',
	'quarter' => '14643',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarsus',
	'title_category' => 'lord mayor',
	'region' => '222',
	'place' => '885',
	'quarter' => '14644',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Adana',
	'title_category' => 'lord mayor',
	'region' => '222',
	'place' => '886',
	'quarter' => '14645',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicosia',
	'title_category' => 'lord mayor',
	'region' => '222',
	'place' => '887',
	'quarter' => '14646',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limasol',
	'title_category' => 'lord mayor',
	'region' => '222',
	'place' => '888',
	'quarter' => '14647',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caesarea',
	'title_category' => 'lord mayor',
	'region' => '223',
	'place' => '889',
	'quarter' => '14648',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Garsaura',
	'title_category' => 'lord mayor',
	'region' => '223',
	'place' => '890',
	'quarter' => '14649',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magida',
	'title_category' => 'lord mayor',
	'region' => '223',
	'place' => '891',
	'quarter' => '14650',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Muskara',
	'title_category' => 'lord mayor',
	'region' => '223',
	'place' => '892',
	'quarter' => '14651',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebizond',
	'title_category' => 'lord mayor',
	'region' => '224',
	'place' => '893',
	'quarter' => '14652',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayberdon',
	'title_category' => 'lord mayor',
	'region' => '224',
	'place' => '894',
	'quarter' => '14653',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riza',
	'title_category' => 'lord mayor',
	'region' => '224',
	'place' => '895',
	'quarter' => '14654',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerasous',
	'title_category' => 'lord mayor',
	'region' => '224',
	'place' => '896',
	'quarter' => '14655',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edessa',
	'title_category' => 'lord mayor',
	'region' => '225',
	'place' => '897',
	'quarter' => '14656',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasia',
	'title_category' => 'lord mayor',
	'region' => '226',
	'place' => '901',
	'quarter' => '14660',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samsun',
	'title_category' => 'lord mayor',
	'region' => '226',
	'place' => '902',
	'quarter' => '14661',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corum',
	'title_category' => 'lord mayor',
	'region' => '226',
	'place' => '903',
	'quarter' => '14662',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Takat',
	'title_category' => 'lord mayor',
	'region' => '226',
	'place' => '904',
	'quarter' => '14663',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diyarbakir',
	'title_category' => 'lord mayor',
	'region' => '227',
	'place' => '905',
	'quarter' => '14664',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harput',
	'title_category' => 'lord mayor',
	'region' => '227',
	'place' => '906',
	'quarter' => '14665',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erzincan',
	'title_category' => 'lord mayor',
	'region' => '227',
	'place' => '907',
	'quarter' => '14666',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Romanoupolis',
	'title_category' => 'lord mayor',
	'region' => '227',
	'place' => '908',
	'quarter' => '14667',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sivas',
	'title_category' => 'lord mayor',
	'region' => '228',
	'place' => '909',
	'quarter' => '14668',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Divrigi',
	'title_category' => 'lord mayor',
	'region' => '228',
	'place' => '910',
	'quarter' => '14669',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albistan',
	'title_category' => 'lord mayor',
	'region' => '228',
	'place' => '911',
	'quarter' => '14670',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tavium',
	'title_category' => 'lord mayor',
	'region' => '228',
	'place' => '912',
	'quarter' => '14671',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Batumi',
	'title_category' => 'lord mayor',
	'region' => '229',
	'place' => '913',
	'quarter' => '14672',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poti',
	'title_category' => 'lord mayor',
	'region' => '229',
	'place' => '914',
	'quarter' => '14673',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pitsunda',
	'title_category' => 'lord mayor',
	'region' => '229',
	'place' => '915',
	'quarter' => '14674',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kutais',
	'title_category' => 'lord mayor',
	'region' => '229',
	'place' => '916',
	'quarter' => '14675',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiflis',
	'title_category' => 'lord mayor',
	'region' => '230',
	'place' => '917',
	'quarter' => '14676',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derbent',
	'title_category' => 'lord mayor',
	'region' => '231',
	'place' => '921',
	'quarter' => '14680',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baku',
	'title_category' => 'lord mayor',
	'region' => '231',
	'place' => '922',
	'quarter' => '14681',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mingecevir',
	'title_category' => 'lord mayor',
	'region' => '231',
	'place' => '923',
	'quarter' => '14682',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Balanjar',
	'title_category' => 'lord mayor',
	'region' => '231',
	'place' => '924',
	'quarter' => '14683',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ani',
	'title_category' => 'lord mayor',
	'region' => '232',
	'place' => '925',
	'quarter' => '14684',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yerevan',
	'title_category' => 'lord mayor',
	'region' => '232',
	'place' => '926',
	'quarter' => '14685',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghars',
	'title_category' => 'lord mayor',
	'region' => '232',
	'place' => '927',
	'quarter' => '14686',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nakhichevan',
	'title_category' => 'lord mayor',
	'region' => '233',
	'place' => '929',
	'quarter' => '14688',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khoy',
	'title_category' => 'lord mayor',
	'region' => '233',
	'place' => '930',
	'quarter' => '14689',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ordubad',
	'title_category' => 'lord mayor',
	'region' => '233',
	'place' => '931',
	'quarter' => '14690',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tatvan',
	'title_category' => 'lord mayor',
	'region' => '234',
	'place' => '933',
	'quarter' => '14692',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manzikert',
	'title_category' => 'lord mayor',
	'region' => '234',
	'place' => '934',
	'quarter' => '14693',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bitlis',
	'title_category' => 'lord mayor',
	'region' => '234',
	'place' => '935',
	'quarter' => '14694',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mardin',
	'title_category' => 'lord mayor',
	'region' => '235',
	'place' => '937',
	'quarter' => '14696',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saird',
	'title_category' => 'lord mayor',
	'region' => '235',
	'place' => '938',
	'quarter' => '14697',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cepha',
	'title_category' => 'lord mayor',
	'region' => '235',
	'place' => '939',
	'quarter' => '14698',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Van',
	'title_category' => 'lord mayor',
	'region' => '236',
	'place' => '941',
	'quarter' => '14700',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berkri',
	'title_category' => 'lord mayor',
	'region' => '236',
	'place' => '942',
	'quarter' => '14701',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Archesh',
	'title_category' => 'lord mayor',
	'region' => '236',
	'place' => '943',
	'quarter' => '14702',
	'religion' => '4',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nishapur',
	'title_category' => 'lord mayor',
	'region' => '237',
	'place' => '945',
	'quarter' => '14704',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beyhaq',
	'title_category' => 'lord mayor',
	'region' => '237',
	'place' => '946',
	'quarter' => '14705',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mashhad',
	'title_category' => 'lord mayor',
	'region' => '237',
	'place' => '947',
	'quarter' => '14706',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjikala',
	'title_category' => 'lord mayor',
	'region' => '237',
	'place' => '948',
	'quarter' => '14707',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashmar',
	'title_category' => 'lord mayor',
	'region' => '238',
	'place' => '949',
	'quarter' => '14708',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gonabad',
	'title_category' => 'lord mayor',
	'region' => '238',
	'place' => '950',
	'quarter' => '14709',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabas',
	'title_category' => 'lord mayor',
	'region' => '238',
	'place' => '951',
	'quarter' => '14710',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Birjand',
	'title_category' => 'lord mayor',
	'region' => '238',
	'place' => '952',
	'quarter' => '14711',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerman',
	'title_category' => 'lord mayor',
	'region' => '239',
	'place' => '953',
	'quarter' => '14712',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rafsanjan',
	'title_category' => 'lord mayor',
	'region' => '239',
	'place' => '955',
	'quarter' => '14714',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sirjan',
	'title_category' => 'lord mayor',
	'region' => '239',
	'place' => '956',
	'quarter' => '14715',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shiraz',
	'title_category' => 'lord mayor',
	'region' => '240',
	'place' => '957',
	'quarter' => '14716',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bushire',
	'title_category' => 'lord mayor',
	'region' => '240',
	'place' => '958',
	'quarter' => '14717',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hormuz',
	'title_category' => 'lord mayor',
	'region' => '240',
	'place' => '959',
	'quarter' => '14718',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yasuj',
	'title_category' => 'lord mayor',
	'region' => '240',
	'place' => '960',
	'quarter' => '14719',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Isfahan',
	'title_category' => 'lord mayor',
	'region' => '241',
	'place' => '961',
	'quarter' => '14720',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yazd',
	'title_category' => 'lord mayor',
	'region' => '241',
	'place' => '963',
	'quarter' => '14722',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhages',
	'title_category' => 'lord mayor',
	'region' => '242',
	'place' => '965',
	'quarter' => '14724',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashan',
	'title_category' => 'lord mayor',
	'region' => '242',
	'place' => '966',
	'quarter' => '14725',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghom',
	'title_category' => 'lord mayor',
	'region' => '242',
	'place' => '967',
	'quarter' => '14726',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qazvin',
	'title_category' => 'lord mayor',
	'region' => '242',
	'place' => '968',
	'quarter' => '14727',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Astarabad',
	'title_category' => 'lord mayor',
	'region' => '243',
	'place' => '969',
	'quarter' => '14728',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amol',
	'title_category' => 'lord mayor',
	'region' => '243',
	'place' => '971',
	'quarter' => '14730',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasht',
	'title_category' => 'lord mayor',
	'region' => '243',
	'place' => '972',
	'quarter' => '14731',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabriz',
	'title_category' => 'lord mayor',
	'region' => '244',
	'place' => '973',
	'quarter' => '14732',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zanjan',
	'title_category' => 'lord mayor',
	'region' => '244',
	'place' => '975',
	'quarter' => '14734',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ardabil',
	'title_category' => 'lord mayor',
	'region' => '244',
	'place' => '976',
	'quarter' => '14735',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamadan',
	'title_category' => 'lord mayor',
	'region' => '245',
	'place' => '977',
	'quarter' => '14736',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kermanshah',
	'title_category' => 'lord mayor',
	'region' => '245',
	'place' => '978',
	'quarter' => '14737',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Falak',
	'title_category' => 'lord mayor',
	'region' => '245',
	'place' => '979',
	'quarter' => '14738',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hajr',
	'title_category' => 'lord mayor',
	'region' => '246',
	'place' => '981',
	'quarter' => '14740',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buraidah',
	'title_category' => 'lord mayor',
	'region' => '246',
	'place' => '982',
	'quarter' => '14741',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hadjar',
	'title_category' => 'lord mayor',
	'region' => '246',
	'place' => '983',
	'quarter' => '14742',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hail',
	'title_category' => 'lord mayor',
	'region' => '246',
	'place' => '984',
	'quarter' => '14743',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mecca',
	'title_category' => 'lord mayor',
	'region' => '247',
	'place' => '985',
	'quarter' => '14744',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taif',
	'title_category' => 'lord mayor',
	'region' => '247',
	'place' => '986',
	'quarter' => '14745',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jeddah',
	'title_category' => 'lord mayor',
	'region' => '247',
	'place' => '987',
	'quarter' => '14746',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medina',
	'title_category' => 'lord mayor',
	'region' => '247',
	'place' => '988',
	'quarter' => '14747',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dedan',
	'title_category' => 'lord mayor',
	'region' => '248',
	'place' => '989',
	'quarter' => '14748',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eilat',
	'title_category' => 'lord mayor',
	'region' => '248',
	'place' => '990',
	'quarter' => '14749',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tayma',
	'title_category' => 'lord mayor',
	'region' => '248',
	'place' => '991',
	'quarter' => '14750',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maan',
	'title_category' => 'lord mayor',
	'region' => '248',
	'place' => '992',
	'quarter' => '14751',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jerusalem',
	'title_category' => 'lord mayor',
	'region' => '249',
	'place' => '993',
	'quarter' => '14752',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hebron',
	'title_category' => 'lord mayor',
	'region' => '249',
	'place' => '995',
	'quarter' => '14754',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Acre',
	'title_category' => 'lord mayor',
	'region' => '250',
	'place' => '997',
	'quarter' => '14756',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nazareth',
	'title_category' => 'lord mayor',
	'region' => '250',
	'place' => '998',
	'quarter' => '14757',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nablus',
	'title_category' => 'lord mayor',
	'region' => '250',
	'place' => '999',
	'quarter' => '14758',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyre',
	'title_category' => 'lord mayor',
	'region' => '250',
	'place' => '1000',
	'quarter' => '14759',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosra',
	'title_category' => 'lord mayor',
	'region' => '251',
	'place' => '1001',
	'quarter' => '14760',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amman',
	'title_category' => 'lord mayor',
	'region' => '251',
	'place' => '1002',
	'quarter' => '14761',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Irbid',
	'title_category' => 'lord mayor',
	'region' => '251',
	'place' => '1003',
	'quarter' => '14762',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damascus',
	'title_category' => 'lord mayor',
	'region' => '252',
	'place' => '1005',
	'quarter' => '14764',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palmyra',
	'title_category' => 'lord mayor',
	'region' => '252',
	'place' => '1007',
	'quarter' => '14766',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Homs',
	'title_category' => 'lord mayor',
	'region' => '253',
	'place' => '1009',
	'quarter' => '14768',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qusayr',
	'title_category' => 'lord mayor',
	'region' => '253',
	'place' => '1010',
	'quarter' => '14769',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamiyah',
	'title_category' => 'lord mayor',
	'region' => '253',
	'place' => '1011',
	'quarter' => '14770',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'lord mayor',
	'region' => '254',
	'place' => '1013',
	'quarter' => '14772',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tartous',
	'title_category' => 'lord mayor',
	'region' => '254',
	'place' => '1014',
	'quarter' => '14773',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beirut',
	'title_category' => 'lord mayor',
	'region' => '254',
	'place' => '1015',
	'quarter' => '14774',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antioch',
	'title_category' => 'lord mayor',
	'region' => '255',
	'place' => '1017',
	'quarter' => '14776',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandretta',
	'title_category' => 'lord mayor',
	'region' => '255',
	'place' => '1018',
	'quarter' => '14777',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Idlib',
	'title_category' => 'lord mayor',
	'region' => '255',
	'place' => '1019',
	'quarter' => '14778',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Afrin',
	'title_category' => 'lord mayor',
	'region' => '255',
	'place' => '1020',
	'quarter' => '14779',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleppo',
	'title_category' => 'lord mayor',
	'region' => '256',
	'place' => '1021',
	'quarter' => '14780',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bab',
	'title_category' => 'lord mayor',
	'region' => '256',
	'place' => '1023',
	'quarter' => '14782',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Safira',
	'title_category' => 'lord mayor',
	'region' => '256',
	'place' => '1024',
	'quarter' => '14783',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Raqqa',
	'title_category' => 'lord mayor',
	'region' => '257',
	'place' => '1025',
	'quarter' => '14784',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhesaina',
	'title_category' => 'lord mayor',
	'region' => '257',
	'place' => '1027',
	'quarter' => '14786',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erbil',
	'title_category' => 'lord mayor',
	'region' => '258',
	'place' => '1029',
	'quarter' => '14788',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mosul',
	'title_category' => 'lord mayor',
	'region' => '258',
	'place' => '1030',
	'quarter' => '14789',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkuk',
	'title_category' => 'lord mayor',
	'region' => '258',
	'place' => '1031',
	'quarter' => '14790',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Telafer',
	'title_category' => 'lord mayor',
	'region' => '258',
	'place' => '1032',
	'quarter' => '14791',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghdad',
	'title_category' => 'lord mayor',
	'region' => '259',
	'place' => '1033',
	'quarter' => '14792',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tikrit',
	'title_category' => 'lord mayor',
	'region' => '259',
	'place' => '1034',
	'quarter' => '14793',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anbar',
	'title_category' => 'lord mayor',
	'region' => '259',
	'place' => '1035',
	'quarter' => '14794',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samarra',
	'title_category' => 'lord mayor',
	'region' => '259',
	'place' => '1036',
	'quarter' => '14795',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samawah',
	'title_category' => 'lord mayor',
	'region' => '260',
	'place' => '1037',
	'quarter' => '14796',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Karbala',
	'title_category' => 'lord mayor',
	'region' => '260',
	'place' => '1038',
	'quarter' => '14797',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufah',
	'title_category' => 'lord mayor',
	'region' => '260',
	'place' => '1039',
	'quarter' => '14798',
	'religion' => '5',
	'rank' => '4',
	'career' => 'fixed_burgher'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Najaf',
	'title_category' => 'lord mayor',
	'region' => '260',
	'place' => '1040',
	'quarter' => '14799',
	'religion' => '5',
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

			//trade and guilds
			DB::table('titles')->insert([
			'title_name' => 'Hanseatic League',
			'title_category' => 'alderman',
			'region' => '4',
			'place' => '15',
			'quarter' => '16144',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lorrainian League',
			'title_category' => 'alderman',
			'region' => '20',
			'place' => '79',
			'quarter' => '16208',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alsatian League',
			'title_category' => 'alderman',
			'region' => '15',
			'place' => '59',
			'quarter' => '16188',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Swabian League',
			'title_category' => 'alderman',
			'region' => '8',
			'place' => '30',
			'quarter' => '16159',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lombard League',
			'title_category' => 'alderman',
			'region' => '116',
			'place' => '461',
			'quarter' => '16590',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tuscan League',
			'title_category' => 'alderman',
			'region' => '123',
			'place' => '489',
			'quarter' => '16618',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhenish League',
			'title_category' => 'alderman',
			'region' => '19',
			'place' => '73',
			'quarter' => '16202',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Prussian League',
			'title_category' => 'alderman',
			'region' => '70',
			'place' => '277',
			'quarter' => '16406',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hungarian League',
			'title_category' => 'alderman',
			'region' => '172',
			'place' => '685',
			'quarter' => '16814',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_league'
			]);
			DB::table('titles')->insert([
			'title_name' => 'London Steelyard',
			'title_category' => 'alderman master',
			'region' => '47',
			'place' => '185',
			'quarter' => '16314',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bruges',
			'title_category' => 'alderman master',
			'region' => '25',
			'place' => '97',
			'quarter' => '16226',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tyskebryggen',
			'title_category' => 'alderman master',
			'region' => '61',
			'place' => '241',
			'quarter' => '16370',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kauen',
			'title_category' => 'alderman master',
			'region' => '166',
			'place' => '663',
			'quarter' => '16792',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Novgorod Peterhof',
			'title_category' => 'alderman master',
			'region' => '199',
			'place' => '793',
			'quarter' => '16922',
			'religion' => '3',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pleskov',
			'title_category' => 'alderman master',
			'region' => '198',
			'place' => '789',
			'quarter' => '16918',
			'religion' => '3',
			'rank' => '4',
			'career' => 'trade_kontor'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Champagne Fairs',
			'title_category' => 'alderman',
			'region' => '33',
			'place' => '129',
			'quarter' => '16258',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toulouse Fair',
			'title_category' => 'alderman',
			'region' => '42',
			'place' => '165',
			'quarter' => '16294',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nuremberg Fair',
			'title_category' => 'alderman',
			'region' => '8',
			'place' => '32',
			'quarter' => '16161',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Genoa Fair',
			'title_category' => 'alderman',
			'region' => '117',
			'place' => '465',
			'quarter' => '16594',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Venice Fair',
			'title_category' => 'alderman',
			'region' => '118',
			'place' => '469',
			'quarter' => '16598',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Florence Fair',
			'title_category' => 'alderman',
			'region' => '123',
			'place' => '489',
			'quarter' => '16618',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Scarborough Fair',
			'title_category' => 'alderman',
			'region' => '52',
			'place' => '207',
			'quarter' => '16336',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cologne Fair',
			'title_category' => 'alderman',
			'region' => '19',
			'place' => '73',
			'quarter' => '16202',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Frankfurt Fair',
			'title_category' => 'alderman',
			'region' => '18',
			'place' => '71',
			'quarter' => '16200',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lyon Fair',
			'title_category' => 'alderman',
			'region' => '45',
			'place' => '179',
			'quarter' => '16308',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palermo Fair',
			'title_category' => 'alderman',
			'region' => '133',
			'place' => '529',
			'quarter' => '16658',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Santiago Fair',
			'title_category' => 'alderman',
			'region' => '100',
			'place' => '397',
			'quarter' => '16526',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Leon Fair',
			'title_category' => 'alderman',
			'region' => '96',
			'place' => '381',
			'quarter' => '16510',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pamplona Fair',
			'title_category' => 'alderman',
			'region' => '87',
			'place' => '345',
			'quarter' => '16474',
			'religion' => '1',
			'rank' => '4',
			'career' => 'trade_fair'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cheesemongers Guild',
			'title_category' => 'guild master',
			'region' => '22',
			'place' => '86',
			'quarter' => '16215',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coopers Guild',
			'title_category' => 'guild master',
			'region' => '22',
			'place' => '85',
			'quarter' => '16214',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '25',
			'place' => '97',
			'quarter' => '16226',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '25',
			'place' => '98',
			'quarter' => '16227',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '25',
			'place' => '100',
			'quarter' => '16229',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '25',
			'place' => '99',
			'quarter' => '16228',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '47',
			'place' => '185',
			'quarter' => '16314',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '52',
			'place' => '207',
			'quarter' => '16336',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '51',
			'place' => '201',
			'quarter' => '16330',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '56',
			'place' => '221',
			'quarter' => '16350',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Potterers Guild',
			'title_category' => 'guild master',
			'region' => '19',
			'place' => '73',
			'quarter' => '16202',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bookbinders Guild',
			'title_category' => 'guild master',
			'region' => '8',
			'place' => '32',
			'quarter' => '16161',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Salters Guild',
			'title_category' => 'guild master',
			'region' => '1',
			'place' => '3',
			'quarter' => '16132',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fishmongers Guild',
			'title_category' => 'guild master',
			'region' => '4',
			'place' => '14',
			'quarter' => '16143',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coopers Guild',
			'title_category' => 'guild master',
			'region' => '4',
			'place' => '15',
			'quarter' => '16144',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coopers Guild',
			'title_category' => 'guild master',
			'region' => '10',
			'place' => '37',
			'quarter' => '16166',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '118',
			'place' => '469',
			'quarter' => '16598',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '115',
			'place' => '457',
			'quarter' => '16586',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '116',
			'place' => '464',
			'quarter' => '16593',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '117',
			'place' => '465',
			'quarter' => '16594',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '116',
			'place' => '462',
			'quarter' => '16591',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '116',
			'place' => '461',
			'quarter' => '16590',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '126',
			'place' => '501',
			'quarter' => '16630',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '126',
			'place' => '503',
			'quarter' => '16632',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '168',
			'place' => '669',
			'quarter' => '16798',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '133',
			'place' => '532',
			'quarter' => '16661',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '133',
			'place' => '529',
			'quarter' => '16658',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '127',
			'place' => '507',
			'quarter' => '16636',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '127',
			'place' => '506',
			'quarter' => '16635',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '162',
			'place' => '645',
			'quarter' => '16774',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '70',
			'place' => '277',
			'quarter' => '16406',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '70',
			'place' => '279',
			'quarter' => '16408',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '70',
			'place' => '280',
			'quarter' => '16409',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chandlers Guild',
			'title_category' => 'guild master',
			'region' => '68',
			'place' => '269',
			'quarter' => '16398',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '72',
			'place' => '285',
			'quarter' => '16414',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fishmongers Guild',
			'title_category' => 'guild master',
			'region' => '61',
			'place' => '241',
			'quarter' => '16370',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fishmongers Guild',
			'title_category' => 'guild master',
			'region' => '63',
			'place' => '250',
			'quarter' => '16379',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coopers Guild',
			'title_category' => 'guild master',
			'region' => '65',
			'place' => '257',
			'quarter' => '16386',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '29',
			'place' => '113',
			'quarter' => '16242',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cheesemongers Guild',
			'title_category' => 'guild master',
			'region' => '29',
			'place' => '114',
			'quarter' => '16243',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tanners Guild',
			'title_category' => 'guild master',
			'region' => '29',
			'place' => '115',
			'quarter' => '16244',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '29',
			'place' => '116',
			'quarter' => '16245',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mercers Guild',
			'title_category' => 'guild master',
			'region' => '34',
			'place' => '134',
			'quarter' => '16263',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '42',
			'place' => '165',
			'quarter' => '16294',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '43',
			'place' => '169',
			'quarter' => '16298',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '46',
			'place' => '183',
			'quarter' => '16312',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '41',
			'place' => '164',
			'quarter' => '16293',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '33',
			'place' => '131',
			'quarter' => '16260',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '33',
			'place' => '132',
			'quarter' => '16261',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '98',
			'place' => '390',
			'quarter' => '16519',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '98',
			'place' => '391',
			'quarter' => '16520',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '99',
			'place' => '393',
			'quarter' => '16522',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vintners Guild',
			'title_category' => 'guild master',
			'region' => '102',
			'place' => '405',
			'quarter' => '16534',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Furriers Guild',
			'title_category' => 'guild master',
			'region' => '198',
			'place' => '789',
			'quarter' => '16918',
			'religion' => '3',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Furriers Guild',
			'title_category' => 'guild master',
			'region' => '199',
			'place' => '795',
			'quarter' => '16924',
			'religion' => '3',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chandlers Guild',
			'title_category' => 'guild master',
			'region' => '190',
			'place' => '757',
			'quarter' => '16886',
			'religion' => '3',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '207',
			'place' => '825',
			'quarter' => '16954',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '209',
			'place' => '835',
			'quarter' => '16964',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '228',
			'place' => '909',
			'quarter' => '17038',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '210',
			'place' => '839',
			'quarter' => '16968',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '215',
			'place' => '857',
			'quarter' => '16986',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '222',
			'place' => '887',
			'quarter' => '17016',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '217',
			'place' => '867',
			'quarter' => '16996',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '218',
			'place' => '869',
			'quarter' => '16998',
			'religion' => '4',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tanners Guild',
			'title_category' => 'guild master',
			'region' => '107',
			'place' => '425',
			'quarter' => '16554',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '111',
			'place' => '441',
			'quarter' => '16570',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '93',
			'place' => '369',
			'quarter' => '16498',
			'religion' => '1',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '112',
			'place' => '445',
			'quarter' => '16574',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dyers Guild',
			'title_category' => 'guild master',
			'region' => '138',
			'place' => '549',
			'quarter' => '16678',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '139',
			'place' => '553',
			'quarter' => '16682',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '149',
			'place' => '593',
			'quarter' => '16722',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Potterers Guild',
			'title_category' => 'guild master',
			'region' => '158',
			'place' => '629',
			'quarter' => '16758',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '249',
			'place' => '993',
			'quarter' => '17122',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '252',
			'place' => '1005',
			'quarter' => '17134',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cutlers Guild',
			'title_category' => 'guild master',
			'region' => '252',
			'place' => '1005',
			'quarter' => '17134',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cutlers Guild',
			'title_category' => 'guild master',
			'region' => '259',
			'place' => '1033',
			'quarter' => '17162',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '241',
			'place' => '961',
			'quarter' => '17090',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '240',
			'place' => '957',
			'quarter' => '17086',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drapers Guild',
			'title_category' => 'guild master',
			'region' => '239',
			'place' => '953',
			'quarter' => '17082',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Haberdashers Guild',
			'title_category' => 'guild master',
			'region' => '242',
			'place' => '965',
			'quarter' => '17094',
			'religion' => '5',
			'rank' => '3',
			'career' => 'guild_grandmaster'
			]); 
		
    }
}
