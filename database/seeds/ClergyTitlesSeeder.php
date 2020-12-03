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

	DB::table('titles')->insert([
	'title_name' => 'Bremen',
	'title_category' => 'prince archbishop',
	'region' => '1',
	'place' => '1',
	'quarter' => '17170',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oldenburg',
	'title_category' => 'priest',
	'region' => '1',
	'place' => '2',
	'quarter' => '17171',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamburg',
	'title_category' => 'priest',
	'region' => '1',
	'place' => '3',
	'quarter' => '17172',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corvey',
	'title_category' => 'priest',
	'region' => '1',
	'place' => '4',
	'quarter' => '17173',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meissen',
	'title_category' => 'prince bishop',
	'region' => '2',
	'place' => '5',
	'quarter' => '17174',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dresden',
	'title_category' => 'prince archbishop',
	'region' => '2',
	'place' => '6',
	'quarter' => '17175',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erfurt',
	'title_category' => 'bishop',
	'region' => '2',
	'place' => '7',
	'quarter' => '17176',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chemnitz',
	'title_category' => 'priest',
	'region' => '2',
	'place' => '8',
	'quarter' => '17177',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magdeburg',
	'title_category' => 'prince archbishop',
	'region' => '3',
	'place' => '9',
	'quarter' => '17178',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merseburg',
	'title_category' => 'prince bishop',
	'region' => '3',
	'place' => '10',
	'quarter' => '17179',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halberstadt',
	'title_category' => 'prince bishop',
	'region' => '3',
	'place' => '11',
	'quarter' => '17180',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gernrode',
	'title_category' => 'priest',
	'region' => '3',
	'place' => '12',
	'quarter' => '17181',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schwerin',
	'title_category' => 'prince bishop',
	'region' => '4',
	'place' => '13',
	'quarter' => '17182',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rostock',
	'title_category' => 'priest',
	'region' => '4',
	'place' => '14',
	'quarter' => '17183',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lubeck',
	'title_category' => 'prince bishop',
	'region' => '4',
	'place' => '15',
	'quarter' => '17184',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Broda',
	'title_category' => 'priest',
	'region' => '4',
	'place' => '16',
	'quarter' => '17185',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brandenburg',
	'title_category' => 'prince bishop',
	'region' => '5',
	'place' => '17',
	'quarter' => '17186',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzwedel',
	'title_category' => 'priest',
	'region' => '5',
	'place' => '18',
	'quarter' => '17187',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Havelberg',
	'title_category' => 'prince bishop',
	'region' => '5',
	'place' => '19',
	'quarter' => '17188',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lindow',
	'title_category' => 'priest',
	'region' => '5',
	'place' => '20',
	'quarter' => '17189',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stettin',
	'title_category' => 'priest',
	'region' => '6',
	'place' => '21',
	'quarter' => '17190',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifenberg',
	'title_category' => 'priest',
	'region' => '6',
	'place' => '22',
	'quarter' => '17191',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolberg',
	'title_category' => 'prince bishop',
	'region' => '6',
	'place' => '23',
	'quarter' => '17192',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifswald',
	'title_category' => 'priest',
	'region' => '6',
	'place' => '24',
	'quarter' => '17193',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Munster',
	'title_category' => 'prince bishop',
	'region' => '7',
	'place' => '25',
	'quarter' => '17194',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bielefeld',
	'title_category' => 'priest',
	'region' => '7',
	'place' => '26',
	'quarter' => '17195',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osnabruck',
	'title_category' => 'prince bishop',
	'region' => '7',
	'place' => '27',
	'quarter' => '17196',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderborn',
	'title_category' => 'prince bishop',
	'region' => '7',
	'place' => '28',
	'quarter' => '17197',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Regensburg',
	'title_category' => 'prince bishop',
	'region' => '8',
	'place' => '29',
	'quarter' => '17198',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Augsburg',
	'title_category' => 'prince bishop',
	'region' => '8',
	'place' => '30',
	'quarter' => '17199',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wurzburg',
	'title_category' => 'prince bishop',
	'region' => '8',
	'place' => '31',
	'quarter' => '17200',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nuremberg',
	'title_category' => 'priest',
	'region' => '8',
	'place' => '32',
	'quarter' => '17201',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzburg',
	'title_category' => 'prince archbishop',
	'region' => '9',
	'place' => '33',
	'quarter' => '17202',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenwerfen',
	'title_category' => 'priest',
	'region' => '9',
	'place' => '34',
	'quarter' => '17203',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hallstat',
	'title_category' => 'priest',
	'region' => '9',
	'place' => '35',
	'quarter' => '17204',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berchtesgaden',
	'title_category' => 'priest',
	'region' => '9',
	'place' => '36',
	'quarter' => '17205',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienna',
	'title_category' => 'bishop',
	'region' => '10',
	'place' => '37',
	'quarter' => '17206',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schaunberg',
	'title_category' => 'priest',
	'region' => '10',
	'place' => '38',
	'quarter' => '17207',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Polten',
	'title_category' => 'prince bishop',
	'region' => '10',
	'place' => '39',
	'quarter' => '17208',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pressburg',
	'title_category' => 'priest',
	'region' => '10',
	'place' => '40',
	'quarter' => '17209',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Graz',
	'title_category' => 'priest',
	'region' => '11',
	'place' => '41',
	'quarter' => '17210',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenwang',
	'title_category' => 'priest',
	'region' => '11',
	'place' => '42',
	'quarter' => '17211',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Styraburg',
	'title_category' => 'priest',
	'region' => '11',
	'place' => '43',
	'quarter' => '17212',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Seckau',
	'title_category' => 'priest',
	'region' => '11',
	'place' => '44',
	'quarter' => '17213',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Innsbruck',
	'title_category' => 'priest',
	'region' => '12',
	'place' => '45',
	'quarter' => '17214',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bozen',
	'title_category' => 'priest',
	'region' => '12',
	'place' => '46',
	'quarter' => '17215',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trent',
	'title_category' => 'prince bishop',
	'region' => '12',
	'place' => '47',
	'quarter' => '17216',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brixen',
	'title_category' => 'prince bishop',
	'region' => '12',
	'place' => '48',
	'quarter' => '17217',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ulm',
	'title_category' => 'priest',
	'region' => '13',
	'place' => '49',
	'quarter' => '17218',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenzollern',
	'title_category' => 'priest',
	'region' => '13',
	'place' => '50',
	'quarter' => '17219',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Freiburg',
	'title_category' => 'priest',
	'region' => '13',
	'place' => '51',
	'quarter' => '17220',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hohenstaufen',
	'title_category' => 'priest',
	'region' => '13',
	'place' => '52',
	'quarter' => '17221',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bern',
	'title_category' => 'priest',
	'region' => '14',
	'place' => '53',
	'quarter' => '17222',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zurich',
	'title_category' => 'priest',
	'region' => '14',
	'place' => '54',
	'quarter' => '17223',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Basel',
	'title_category' => 'prince bishop',
	'region' => '14',
	'place' => '55',
	'quarter' => '17224',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sankt Gallen',
	'title_category' => 'priest',
	'region' => '14',
	'place' => '56',
	'quarter' => '17225',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hagenau',
	'title_category' => 'priest',
	'region' => '15',
	'place' => '57',
	'quarter' => '17226',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Colmar',
	'title_category' => 'priest',
	'region' => '15',
	'place' => '58',
	'quarter' => '17227',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Strassbourg',
	'title_category' => 'prince bishop',
	'region' => '15',
	'place' => '59',
	'quarter' => '17228',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wissembourg',
	'title_category' => 'priest',
	'region' => '15',
	'place' => '60',
	'quarter' => '17229',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prague',
	'title_category' => 'archbishop',
	'region' => '16',
	'place' => '61',
	'quarter' => '17230',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Karlstein',
	'title_category' => 'priest',
	'region' => '16',
	'place' => '62',
	'quarter' => '17231',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilsen',
	'title_category' => 'priest',
	'region' => '16',
	'place' => '63',
	'quarter' => '17232',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plass',
	'title_category' => 'priest',
	'region' => '16',
	'place' => '64',
	'quarter' => '17233',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brunn',
	'title_category' => 'priest',
	'region' => '17',
	'place' => '65',
	'quarter' => '17234',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zlin',
	'title_category' => 'priest',
	'region' => '17',
	'place' => '66',
	'quarter' => '17235',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olmutz',
	'title_category' => 'prince bishop',
	'region' => '17',
	'place' => '67',
	'quarter' => '17236',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebitz',
	'title_category' => 'priest',
	'region' => '17',
	'place' => '68',
	'quarter' => '17237',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mainz',
	'title_category' => 'prince archbishop',
	'region' => '18',
	'place' => '69',
	'quarter' => '17238',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heidelberg',
	'title_category' => 'prince bishop',
	'region' => '18',
	'place' => '70',
	'quarter' => '17239',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frankfurt',
	'title_category' => 'priest',
	'region' => '18',
	'place' => '71',
	'quarter' => '17240',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fulda',
	'title_category' => 'priest',
	'region' => '18',
	'place' => '72',
	'quarter' => '17241',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cologne',
	'title_category' => 'prince archbishop',
	'region' => '19',
	'place' => '73',
	'quarter' => '17242',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aachen',
	'title_category' => 'priest',
	'region' => '19',
	'place' => '74',
	'quarter' => '17243',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liege',
	'title_category' => 'prince bishop',
	'region' => '19',
	'place' => '75',
	'quarter' => '17244',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavelot',
	'title_category' => 'priest',
	'region' => '19',
	'place' => '76',
	'quarter' => '17245',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trier',
	'title_category' => 'prince archbishop',
	'region' => '20',
	'place' => '77',
	'quarter' => '17246',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Luxembourg',
	'title_category' => 'priest',
	'region' => '20',
	'place' => '78',
	'quarter' => '17247',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Metz',
	'title_category' => 'prince bishop',
	'region' => '20',
	'place' => '79',
	'quarter' => '17248',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pruem',
	'title_category' => 'priest',
	'region' => '20',
	'place' => '80',
	'quarter' => '17249',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guelders',
	'title_category' => 'priest',
	'region' => '21',
	'place' => '81',
	'quarter' => '17250',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zutphen',
	'title_category' => 'priest',
	'region' => '21',
	'place' => '82',
	'quarter' => '17251',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nimeguen',
	'title_category' => 'priest',
	'region' => '21',
	'place' => '83',
	'quarter' => '17252',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Deventer',
	'title_category' => 'priest',
	'region' => '21',
	'place' => '84',
	'quarter' => '17253',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorestad',
	'title_category' => 'priest',
	'region' => '22',
	'place' => '85',
	'quarter' => '17254',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gouda',
	'title_category' => 'priest',
	'region' => '22',
	'place' => '86',
	'quarter' => '17255',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Utrecht',
	'title_category' => 'prince bishop',
	'region' => '22',
	'place' => '87',
	'quarter' => '17256',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amsterdam',
	'title_category' => 'priest',
	'region' => '22',
	'place' => '88',
	'quarter' => '17257',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sneek',
	'title_category' => 'priest',
	'region' => '23',
	'place' => '89',
	'quarter' => '17258',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emden',
	'title_category' => 'priest',
	'region' => '23',
	'place' => '90',
	'quarter' => '17259',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Groningen',
	'title_category' => 'priest',
	'region' => '23',
	'place' => '91',
	'quarter' => '17260',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dokkum',
	'title_category' => 'priest',
	'region' => '23',
	'place' => '92',
	'quarter' => '17261',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Louvain',
	'title_category' => 'priest',
	'region' => '24',
	'place' => '93',
	'quarter' => '17262',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breda',
	'title_category' => 'priest',
	'region' => '24',
	'place' => '94',
	'quarter' => '17263',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antwerp',
	'title_category' => 'priest',
	'region' => '24',
	'place' => '95',
	'quarter' => '17264',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thorn',
	'title_category' => 'priest',
	'region' => '24',
	'place' => '96',
	'quarter' => '17265',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bruges',
	'title_category' => 'priest',
	'region' => '25',
	'place' => '97',
	'quarter' => '17266',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghent',
	'title_category' => 'priest',
	'region' => '25',
	'place' => '98',
	'quarter' => '17267',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambrai',
	'title_category' => 'prince bishop',
	'region' => '25',
	'place' => '99',
	'quarter' => '17268',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ypres',
	'title_category' => 'priest',
	'region' => '25',
	'place' => '100',
	'quarter' => '17269',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klagenfurt',
	'title_category' => 'bishop',
	'region' => '26',
	'place' => '101',
	'quarter' => '17270',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treffen',
	'title_category' => 'priest',
	'region' => '26',
	'place' => '102',
	'quarter' => '17271',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorizia',
	'title_category' => 'prince bishop',
	'region' => '26',
	'place' => '103',
	'quarter' => '17272',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moosburg',
	'title_category' => 'priest',
	'region' => '26',
	'place' => '104',
	'quarter' => '17273',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krainburg',
	'title_category' => 'priest',
	'region' => '27',
	'place' => '105',
	'quarter' => '17274',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Heunburg',
	'title_category' => 'priest',
	'region' => '27',
	'place' => '106',
	'quarter' => '17275',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laibach',
	'title_category' => 'prince bishop',
	'region' => '27',
	'place' => '107',
	'quarter' => '17276',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sittich',
	'title_category' => 'priest',
	'region' => '27',
	'place' => '108',
	'quarter' => '17277',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vannes',
	'title_category' => 'priest',
	'region' => '28',
	'place' => '109',
	'quarter' => '17278',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rohan',
	'title_category' => 'priest',
	'region' => '28',
	'place' => '110',
	'quarter' => '17279',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Quimper',
	'title_category' => 'bishop',
	'region' => '28',
	'place' => '111',
	'quarter' => '17280',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redon',
	'title_category' => 'priest',
	'region' => '28',
	'place' => '112',
	'quarter' => '17281',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paris',
	'title_category' => 'bishop',
	'region' => '29',
	'place' => '113',
	'quarter' => '17282',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meaux',
	'title_category' => 'bishop',
	'region' => '29',
	'place' => '114',
	'quarter' => '17283',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chartres',
	'title_category' => 'bishop',
	'region' => '29',
	'place' => '115',
	'quarter' => '17284',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Denis',
	'title_category' => 'priest',
	'region' => '29',
	'place' => '116',
	'quarter' => '17285',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bar',
	'title_category' => 'priest',
	'region' => '30',
	'place' => '117',
	'quarter' => '17286',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Neufchateau',
	'title_category' => 'priest',
	'region' => '30',
	'place' => '118',
	'quarter' => '17287',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verdun',
	'title_category' => 'prince bishop',
	'region' => '30',
	'place' => '119',
	'quarter' => '17288',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Langres',
	'title_category' => 'bishop',
	'region' => '30',
	'place' => '120',
	'quarter' => '17289',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amiens',
	'title_category' => 'priest',
	'region' => '31',
	'place' => '121',
	'quarter' => '17290',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boulogne',
	'title_category' => 'priest',
	'region' => '31',
	'place' => '122',
	'quarter' => '17291',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laon',
	'title_category' => 'prince bishop',
	'region' => '31',
	'place' => '123',
	'quarter' => '17292',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Omer',
	'title_category' => 'priest',
	'region' => '31',
	'place' => '124',
	'quarter' => '17293',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rouen',
	'title_category' => 'archbishop',
	'region' => '32',
	'place' => '125',
	'quarter' => '17294',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caen',
	'title_category' => 'priest',
	'region' => '32',
	'place' => '126',
	'quarter' => '17295',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisieux',
	'title_category' => 'bishop',
	'region' => '32',
	'place' => '127',
	'quarter' => '17296',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayeux',
	'title_category' => 'bishop',
	'region' => '32',
	'place' => '128',
	'quarter' => '17297',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troyes',
	'title_category' => 'bishop',
	'region' => '33',
	'place' => '129',
	'quarter' => '17298',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thierry',
	'title_category' => 'priest',
	'region' => '33',
	'place' => '130',
	'quarter' => '17299',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reims',
	'title_category' => 'prince archbishop',
	'region' => '33',
	'place' => '131',
	'quarter' => '17300',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clairvaux',
	'title_category' => 'priest',
	'region' => '33',
	'place' => '132',
	'quarter' => '17301',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orleans',
	'title_category' => 'bishop',
	'region' => '34',
	'place' => '133',
	'quarter' => '17302',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chateaudun',
	'title_category' => 'priest',
	'region' => '34',
	'place' => '134',
	'quarter' => '17303',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Blois',
	'title_category' => 'priest',
	'region' => '34',
	'place' => '135',
	'quarter' => '17304',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vendome',
	'title_category' => 'priest',
	'region' => '34',
	'place' => '136',
	'quarter' => '17305',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tours',
	'title_category' => 'archbishop',
	'region' => '35',
	'place' => '137',
	'quarter' => '17306',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plessis',
	'title_category' => 'priest',
	'region' => '35',
	'place' => '138',
	'quarter' => '17307',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chinon',
	'title_category' => 'priest',
	'region' => '35',
	'place' => '139',
	'quarter' => '17308',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Loches',
	'title_category' => 'priest',
	'region' => '35',
	'place' => '140',
	'quarter' => '17309',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angers',
	'title_category' => 'bishop',
	'region' => '36',
	'place' => '141',
	'quarter' => '17310',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gontier',
	'title_category' => 'priest',
	'region' => '36',
	'place' => '142',
	'quarter' => '17311',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mans',
	'title_category' => 'bishop',
	'region' => '36',
	'place' => '143',
	'quarter' => '17312',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laval',
	'title_category' => 'priest',
	'region' => '36',
	'place' => '144',
	'quarter' => '17313',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poitiers',
	'title_category' => 'bishop',
	'region' => '37',
	'place' => '145',
	'quarter' => '17314',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chatellerault',
	'title_category' => 'priest',
	'region' => '37',
	'place' => '146',
	'quarter' => '17315',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montmorillon',
	'title_category' => 'priest',
	'region' => '37',
	'place' => '147',
	'quarter' => '17316',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vauclair',
	'title_category' => 'priest',
	'region' => '37',
	'place' => '148',
	'quarter' => '17317',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bourges',
	'title_category' => 'archbishop',
	'region' => '38',
	'place' => '149',
	'quarter' => '17318',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chateauroux',
	'title_category' => 'priest',
	'region' => '38',
	'place' => '150',
	'quarter' => '17319',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nevers',
	'title_category' => 'priest',
	'region' => '38',
	'place' => '151',
	'quarter' => '17320',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vezelay',
	'title_category' => 'priest',
	'region' => '38',
	'place' => '152',
	'quarter' => '17321',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moulins',
	'title_category' => 'priest',
	'region' => '39',
	'place' => '153',
	'quarter' => '17322',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montlucon',
	'title_category' => 'priest',
	'region' => '39',
	'place' => '154',
	'quarter' => '17323',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gueret',
	'title_category' => 'priest',
	'region' => '39',
	'place' => '155',
	'quarter' => '17324',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vichy',
	'title_category' => 'priest',
	'region' => '39',
	'place' => '156',
	'quarter' => '17325',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clermont Ferrand',
	'title_category' => 'bishop',
	'region' => '40',
	'place' => '157',
	'quarter' => '17326',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montbrison',
	'title_category' => 'priest',
	'region' => '40',
	'place' => '158',
	'quarter' => '17327',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Puy en Velay',
	'title_category' => 'bishop',
	'region' => '40',
	'place' => '159',
	'quarter' => '17328',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Issoire',
	'title_category' => 'priest',
	'region' => '40',
	'place' => '160',
	'quarter' => '17329',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arles',
	'title_category' => 'priest',
	'region' => '41',
	'place' => '161',
	'quarter' => '17330',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aix',
	'title_category' => 'priest',
	'region' => '41',
	'place' => '162',
	'quarter' => '17331',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marseille',
	'title_category' => 'bishop',
	'region' => '41',
	'place' => '163',
	'quarter' => '17332',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avignon',
	'title_category' => 'bishop',
	'region' => '41',
	'place' => '164',
	'quarter' => '17333',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toulouse',
	'title_category' => 'archbishop',
	'region' => '42',
	'place' => '165',
	'quarter' => '17334',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carcasonne',
	'title_category' => 'bishop',
	'region' => '42',
	'place' => '166',
	'quarter' => '17335',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Narbonne',
	'title_category' => 'bishop',
	'region' => '42',
	'place' => '167',
	'quarter' => '17336',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Benoit',
	'title_category' => 'priest',
	'region' => '42',
	'place' => '168',
	'quarter' => '17337',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bordeaux',
	'title_category' => 'archbishop',
	'region' => '43',
	'place' => '169',
	'quarter' => '17338',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cahors',
	'title_category' => 'priest',
	'region' => '43',
	'place' => '170',
	'quarter' => '17339',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Auch',
	'title_category' => 'priest',
	'region' => '43',
	'place' => '171',
	'quarter' => '17340',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Montauban',
	'title_category' => 'priest',
	'region' => '43',
	'place' => '172',
	'quarter' => '17341',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Angouleme',
	'title_category' => 'bishop',
	'region' => '44',
	'place' => '173',
	'quarter' => '17342',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limoges',
	'title_category' => 'bishop',
	'region' => '44',
	'place' => '174',
	'quarter' => '17343',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perigeux',
	'title_category' => 'bishop',
	'region' => '44',
	'place' => '175',
	'quarter' => '17344',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulle',
	'title_category' => 'priest',
	'region' => '44',
	'place' => '176',
	'quarter' => '17345',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grenoble',
	'title_category' => 'bishop',
	'region' => '45',
	'place' => '177',
	'quarter' => '17346',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vienne',
	'title_category' => 'bishop',
	'region' => '45',
	'place' => '178',
	'quarter' => '17347',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyon',
	'title_category' => 'archbishop',
	'region' => '45',
	'place' => '179',
	'quarter' => '17348',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Autun',
	'title_category' => 'bishop',
	'region' => '45',
	'place' => '180',
	'quarter' => '17349',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dijon',
	'title_category' => 'bishop',
	'region' => '46',
	'place' => '181',
	'quarter' => '17350',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Besancon',
	'title_category' => 'prince archbishop',
	'region' => '46',
	'place' => '182',
	'quarter' => '17351',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chalon',
	'title_category' => 'bishop',
	'region' => '46',
	'place' => '183',
	'quarter' => '17352',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Citeaux',
	'title_category' => 'priest',
	'region' => '46',
	'place' => '184',
	'quarter' => '17353',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'London',
	'title_category' => 'bishop',
	'region' => '47',
	'place' => '185',
	'quarter' => '17354',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Windsor',
	'title_category' => 'priest',
	'region' => '47',
	'place' => '186',
	'quarter' => '17355',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guildford',
	'title_category' => 'priest',
	'region' => '47',
	'place' => '187',
	'quarter' => '17356',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Westminster',
	'title_category' => 'priest',
	'region' => '47',
	'place' => '188',
	'quarter' => '17357',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Canterbury',
	'title_category' => 'archbishop',
	'region' => '48',
	'place' => '189',
	'quarter' => '17358',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dover',
	'title_category' => 'priest',
	'region' => '48',
	'place' => '190',
	'quarter' => '17359',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ashford',
	'title_category' => 'priest',
	'region' => '48',
	'place' => '191',
	'quarter' => '17360',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maidstone',
	'title_category' => 'priest',
	'region' => '48',
	'place' => '192',
	'quarter' => '17361',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Winchester',
	'title_category' => 'priest',
	'region' => '49',
	'place' => '193',
	'quarter' => '17362',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Southampton',
	'title_category' => 'priest',
	'region' => '49',
	'place' => '194',
	'quarter' => '17363',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wells',
	'title_category' => 'bishop',
	'region' => '49',
	'place' => '195',
	'quarter' => '17364',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wimborne',
	'title_category' => 'priest',
	'region' => '49',
	'place' => '196',
	'quarter' => '17365',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Truro',
	'title_category' => 'priest',
	'region' => '50',
	'place' => '197',
	'quarter' => '17366',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bodmin',
	'title_category' => 'priest',
	'region' => '50',
	'place' => '198',
	'quarter' => '17367',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint German',
	'title_category' => 'bishop',
	'region' => '50',
	'place' => '199',
	'quarter' => '17368',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Madron',
	'title_category' => 'priest',
	'region' => '50',
	'place' => '200',
	'quarter' => '17369',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Norwich',
	'title_category' => 'bishop',
	'region' => '51',
	'place' => '201',
	'quarter' => '17370',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ipswich',
	'title_category' => 'priest',
	'region' => '51',
	'place' => '202',
	'quarter' => '17371',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Edmunds',
	'title_category' => 'bishop',
	'region' => '51',
	'place' => '203',
	'quarter' => '17372',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Croxton',
	'title_category' => 'priest',
	'region' => '51',
	'place' => '204',
	'quarter' => '17373',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'York',
	'title_category' => 'archbishop',
	'region' => '52',
	'place' => '205',
	'quarter' => '17374',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durham',
	'title_category' => 'prince bishop',
	'region' => '52',
	'place' => '206',
	'quarter' => '17375',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scarborough',
	'title_category' => 'priest',
	'region' => '52',
	'place' => '207',
	'quarter' => '17376',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lancaster',
	'title_category' => 'priest',
	'region' => '52',
	'place' => '208',
	'quarter' => '17377',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Worcester',
	'title_category' => 'bishop',
	'region' => '53',
	'place' => '209',
	'quarter' => '17378',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gloucester',
	'title_category' => 'priest',
	'region' => '53',
	'place' => '210',
	'quarter' => '17379',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bristol',
	'title_category' => 'priest',
	'region' => '53',
	'place' => '211',
	'quarter' => '17380',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cirencester',
	'title_category' => 'priest',
	'region' => '53',
	'place' => '212',
	'quarter' => '17381',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ely',
	'title_category' => 'bishop',
	'region' => '54',
	'place' => '213',
	'quarter' => '17382',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cambridge',
	'title_category' => 'priest',
	'region' => '54',
	'place' => '214',
	'quarter' => '17383',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oxford',
	'title_category' => 'priest',
	'region' => '54',
	'place' => '215',
	'quarter' => '17384',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Albans',
	'title_category' => 'priest',
	'region' => '54',
	'place' => '216',
	'quarter' => '17385',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tamworth',
	'title_category' => 'priest',
	'region' => '55',
	'place' => '217',
	'quarter' => '17386',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warwick',
	'title_category' => 'priest',
	'region' => '55',
	'place' => '218',
	'quarter' => '17387',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stafford',
	'title_category' => 'priest',
	'region' => '55',
	'place' => '219',
	'quarter' => '17388',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leicester',
	'title_category' => 'priest',
	'region' => '55',
	'place' => '220',
	'quarter' => '17389',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lincoln',
	'title_category' => 'priest',
	'region' => '56',
	'place' => '221',
	'quarter' => '17390',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nottingham',
	'title_category' => 'priest',
	'region' => '56',
	'place' => '222',
	'quarter' => '17391',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boston',
	'title_category' => 'priest',
	'region' => '56',
	'place' => '223',
	'quarter' => '17392',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stamford',
	'title_category' => 'priest',
	'region' => '56',
	'place' => '224',
	'quarter' => '17393',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caernarfon',
	'title_category' => 'priest',
	'region' => '57',
	'place' => '225',
	'quarter' => '17394',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harlech',
	'title_category' => 'priest',
	'region' => '57',
	'place' => '226',
	'quarter' => '17395',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bangor',
	'title_category' => 'bishop',
	'region' => '57',
	'place' => '227',
	'quarter' => '17396',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Conwy',
	'title_category' => 'priest',
	'region' => '57',
	'place' => '228',
	'quarter' => '17397',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chester',
	'title_category' => 'priest',
	'region' => '58',
	'place' => '229',
	'quarter' => '17398',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shrewsbury',
	'title_category' => 'priest',
	'region' => '58',
	'place' => '230',
	'quarter' => '17399',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasbury',
	'title_category' => 'bishop',
	'region' => '58',
	'place' => '231',
	'quarter' => '17400',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Llanllugan',
	'title_category' => 'priest',
	'region' => '58',
	'place' => '232',
	'quarter' => '17401',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerwent',
	'title_category' => 'priest',
	'region' => '59',
	'place' => '233',
	'quarter' => '17402',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carmarthen',
	'title_category' => 'priest',
	'region' => '59',
	'place' => '234',
	'quarter' => '17403',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cardiff',
	'title_category' => 'bishop',
	'region' => '59',
	'place' => '235',
	'quarter' => '17404',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Abergavenny',
	'title_category' => 'priest',
	'region' => '59',
	'place' => '236',
	'quarter' => '17405',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oslo',
	'title_category' => 'bishop',
	'region' => '60',
	'place' => '237',
	'quarter' => '17406',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tonsborg',
	'title_category' => 'priest',
	'region' => '60',
	'place' => '238',
	'quarter' => '17407',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamar',
	'title_category' => 'bishop',
	'region' => '60',
	'place' => '239',
	'quarter' => '17408',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gimsoy',
	'title_category' => 'priest',
	'region' => '60',
	'place' => '240',
	'quarter' => '17409',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bergen',
	'title_category' => 'bishop',
	'region' => '61',
	'place' => '241',
	'quarter' => '17410',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Holm',
	'title_category' => 'priest',
	'region' => '61',
	'place' => '242',
	'quarter' => '17411',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavanger',
	'title_category' => 'bishop',
	'region' => '61',
	'place' => '243',
	'quarter' => '17412',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halsnoy',
	'title_category' => 'priest',
	'region' => '61',
	'place' => '244',
	'quarter' => '17413',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Copenhagen',
	'title_category' => 'priest',
	'region' => '62',
	'place' => '245',
	'quarter' => '17414',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalundborg',
	'title_category' => 'priest',
	'region' => '62',
	'place' => '246',
	'quarter' => '17415',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roskilde',
	'title_category' => 'bishop',
	'region' => '62',
	'place' => '247',
	'quarter' => '17416',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esrum',
	'title_category' => 'priest',
	'region' => '62',
	'place' => '248',
	'quarter' => '17417',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lund',
	'title_category' => 'archbishop',
	'region' => '63',
	'place' => '249',
	'quarter' => '17418',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trelleborg',
	'title_category' => 'priest',
	'region' => '63',
	'place' => '250',
	'quarter' => '17419',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halmstad',
	'title_category' => 'priest',
	'region' => '63',
	'place' => '251',
	'quarter' => '17420',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Herrevad',
	'title_category' => 'priest',
	'region' => '63',
	'place' => '252',
	'quarter' => '17421',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aarhus',
	'title_category' => 'bishop',
	'region' => '64',
	'place' => '253',
	'quarter' => '17422',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aalborg',
	'title_category' => 'priest',
	'region' => '64',
	'place' => '254',
	'quarter' => '17423',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripen',
	'title_category' => 'bishop',
	'region' => '64',
	'place' => '255',
	'quarter' => '17424',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Essenbaek',
	'title_category' => 'priest',
	'region' => '64',
	'place' => '256',
	'quarter' => '17425',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stockholm',
	'title_category' => 'priest',
	'region' => '65',
	'place' => '257',
	'quarter' => '17426',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vasteras',
	'title_category' => 'bishop',
	'region' => '65',
	'place' => '258',
	'quarter' => '17427',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Uppsala',
	'title_category' => 'bishop',
	'region' => '65',
	'place' => '259',
	'quarter' => '17428',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eskilstuna',
	'title_category' => 'priest',
	'region' => '65',
	'place' => '260',
	'quarter' => '17429',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visby',
	'title_category' => 'priest',
	'region' => '66',
	'place' => '261',
	'quarter' => '17430',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalmar',
	'title_category' => 'priest',
	'region' => '66',
	'place' => '262',
	'quarter' => '17431',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vaxjo',
	'title_category' => 'priest',
	'region' => '66',
	'place' => '263',
	'quarter' => '17432',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nydala',
	'title_category' => 'priest',
	'region' => '66',
	'place' => '264',
	'quarter' => '17433',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skara',
	'title_category' => 'bishop',
	'region' => '67',
	'place' => '265',
	'quarter' => '17434',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dalaborg',
	'title_category' => 'priest',
	'region' => '67',
	'place' => '266',
	'quarter' => '17435',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jonkoping',
	'title_category' => 'priest',
	'region' => '67',
	'place' => '267',
	'quarter' => '17436',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vadstena',
	'title_category' => 'priest',
	'region' => '67',
	'place' => '268',
	'quarter' => '17437',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riga',
	'title_category' => 'prince archbishop',
	'region' => '68',
	'place' => '269',
	'quarter' => '17438',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wenden',
	'title_category' => 'priest',
	'region' => '68',
	'place' => '270',
	'quarter' => '17439',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Walk',
	'title_category' => 'priest',
	'region' => '68',
	'place' => '271',
	'quarter' => '17440',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunaburg',
	'title_category' => 'priest',
	'region' => '68',
	'place' => '272',
	'quarter' => '17441',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pilten',
	'title_category' => 'prince bishop',
	'region' => '69',
	'place' => '273',
	'quarter' => '17442',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Libau',
	'title_category' => 'priest',
	'region' => '69',
	'place' => '274',
	'quarter' => '17443',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Goldingen',
	'title_category' => 'priest',
	'region' => '69',
	'place' => '275',
	'quarter' => '17444',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Talsen',
	'title_category' => 'priest',
	'region' => '69',
	'place' => '276',
	'quarter' => '17445',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marienburg',
	'title_category' => 'priest',
	'region' => '70',
	'place' => '277',
	'quarter' => '17446',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elbing',
	'title_category' => 'priest',
	'region' => '70',
	'place' => '278',
	'quarter' => '17447',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Danzig',
	'title_category' => 'priest',
	'region' => '70',
	'place' => '279',
	'quarter' => '17448',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Koningsberg',
	'title_category' => 'prince bishop',
	'region' => '70',
	'place' => '280',
	'quarter' => '17449',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Memelburg',
	'title_category' => 'priest',
	'region' => '71',
	'place' => '281',
	'quarter' => '17450',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saule',
	'title_category' => 'priest',
	'region' => '71',
	'place' => '282',
	'quarter' => '17451',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tilsit',
	'title_category' => 'priest',
	'region' => '71',
	'place' => '283',
	'quarter' => '17452',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Georgenburg',
	'title_category' => 'priest',
	'region' => '71',
	'place' => '284',
	'quarter' => '17453',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reval',
	'title_category' => 'bishop',
	'region' => '72',
	'place' => '285',
	'quarter' => '17454',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Weissenstein',
	'title_category' => 'priest',
	'region' => '72',
	'place' => '286',
	'quarter' => '17455',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arensburg',
	'title_category' => 'prince bishop',
	'region' => '72',
	'place' => '287',
	'quarter' => '17456',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hapsal',
	'title_category' => 'prince bishop',
	'region' => '72',
	'place' => '288',
	'quarter' => '17457',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edinburgh',
	'title_category' => 'bishop',
	'region' => '73',
	'place' => '289',
	'quarter' => '17458',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Linlithgow',
	'title_category' => 'priest',
	'region' => '73',
	'place' => '290',
	'quarter' => '17459',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunbar',
	'title_category' => 'priest',
	'region' => '73',
	'place' => '291',
	'quarter' => '17460',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Haddington',
	'title_category' => 'priest',
	'region' => '73',
	'place' => '292',
	'quarter' => '17461',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bamburgh',
	'title_category' => 'priest',
	'region' => '74',
	'place' => '293',
	'quarter' => '17462',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alnwick',
	'title_category' => 'priest',
	'region' => '74',
	'place' => '294',
	'quarter' => '17463',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berwick',
	'title_category' => 'priest',
	'region' => '74',
	'place' => '295',
	'quarter' => '17464',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jedburgh',
	'title_category' => 'priest',
	'region' => '74',
	'place' => '296',
	'quarter' => '17465',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dumbarton',
	'title_category' => 'priest',
	'region' => '75',
	'place' => '297',
	'quarter' => '17466',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kilmarnock',
	'title_category' => 'priest',
	'region' => '75',
	'place' => '298',
	'quarter' => '17467',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glasgow',
	'title_category' => 'bishop',
	'region' => '75',
	'place' => '299',
	'quarter' => '17468',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ayr',
	'title_category' => 'priest',
	'region' => '75',
	'place' => '300',
	'quarter' => '17469',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carlisle',
	'title_category' => 'bishop',
	'region' => '76',
	'place' => '301',
	'quarter' => '17470',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerloverock',
	'title_category' => 'priest',
	'region' => '76',
	'place' => '302',
	'quarter' => '17471',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Whithorn',
	'title_category' => 'bishop',
	'region' => '76',
	'place' => '303',
	'quarter' => '17472',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkcudbright',
	'title_category' => 'priest',
	'region' => '76',
	'place' => '304',
	'quarter' => '17473',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunadd',
	'title_category' => 'priest',
	'region' => '77',
	'place' => '305',
	'quarter' => '17474',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunollie',
	'title_category' => 'priest',
	'region' => '77',
	'place' => '306',
	'quarter' => '17475',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunaverty',
	'title_category' => 'priest',
	'region' => '77',
	'place' => '307',
	'quarter' => '17476',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iona',
	'title_category' => 'bishop',
	'region' => '77',
	'place' => '308',
	'quarter' => '17477',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Perth',
	'title_category' => 'priest',
	'region' => '78',
	'place' => '309',
	'quarter' => '17478',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stirling',
	'title_category' => 'priest',
	'region' => '78',
	'place' => '310',
	'quarter' => '17479',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Andrews',
	'title_category' => 'bishop',
	'region' => '78',
	'place' => '311',
	'quarter' => '17480',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dunfermline',
	'title_category' => 'priest',
	'region' => '78',
	'place' => '312',
	'quarter' => '17481',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Elgin',
	'title_category' => 'bishop',
	'region' => '79',
	'place' => '313',
	'quarter' => '17482',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nairn',
	'title_category' => 'priest',
	'region' => '79',
	'place' => '314',
	'quarter' => '17483',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mortlach',
	'title_category' => 'bishop',
	'region' => '79',
	'place' => '315',
	'quarter' => '17484',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aberdeen',
	'title_category' => 'bishop',
	'region' => '79',
	'place' => '316',
	'quarter' => '17485',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dundee',
	'title_category' => 'priest',
	'region' => '80',
	'place' => '317',
	'quarter' => '17486',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forfar',
	'title_category' => 'priest',
	'region' => '80',
	'place' => '318',
	'quarter' => '17487',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scone',
	'title_category' => 'priest',
	'region' => '80',
	'place' => '319',
	'quarter' => '17488',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arbroath',
	'title_category' => 'priest',
	'region' => '80',
	'place' => '320',
	'quarter' => '17489',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dingwall',
	'title_category' => 'priest',
	'region' => '81',
	'place' => '321',
	'quarter' => '17490',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Helmsdale',
	'title_category' => 'priest',
	'region' => '81',
	'place' => '322',
	'quarter' => '17491',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosemarkie',
	'title_category' => 'bishop',
	'region' => '81',
	'place' => '323',
	'quarter' => '17492',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dornoch',
	'title_category' => 'bishop',
	'region' => '81',
	'place' => '324',
	'quarter' => '17493',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dublin',
	'title_category' => 'archbishop',
	'region' => '82',
	'place' => '325',
	'quarter' => '17494',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tara',
	'title_category' => 'priest',
	'region' => '82',
	'place' => '326',
	'quarter' => '17495',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kildare',
	'title_category' => 'bishop',
	'region' => '82',
	'place' => '327',
	'quarter' => '17496',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Millmount',
	'title_category' => 'priest',
	'region' => '82',
	'place' => '328',
	'quarter' => '17497',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Armagh',
	'title_category' => 'archbishop',
	'region' => '83',
	'place' => '329',
	'quarter' => '17498',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrickfergus',
	'title_category' => 'priest',
	'region' => '83',
	'place' => '330',
	'quarter' => '17499',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derry',
	'title_category' => 'bishop',
	'region' => '83',
	'place' => '331',
	'quarter' => '17500',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Clogher',
	'title_category' => 'bishop',
	'region' => '83',
	'place' => '332',
	'quarter' => '17501',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wexford',
	'title_category' => 'priest',
	'region' => '84',
	'place' => '333',
	'quarter' => '17502',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kells',
	'title_category' => 'priest',
	'region' => '84',
	'place' => '334',
	'quarter' => '17503',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Waterford',
	'title_category' => 'priest',
	'region' => '84',
	'place' => '335',
	'quarter' => '17504',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durrow',
	'title_category' => 'priest',
	'region' => '84',
	'place' => '336',
	'quarter' => '17505',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cashel',
	'title_category' => 'archbishop',
	'region' => '85',
	'place' => '337',
	'quarter' => '17506',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limerick',
	'title_category' => 'bishop',
	'region' => '85',
	'place' => '338',
	'quarter' => '17507',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cork',
	'title_category' => 'bishop',
	'region' => '85',
	'place' => '339',
	'quarter' => '17508',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roscrea',
	'title_category' => 'priest',
	'region' => '85',
	'place' => '340',
	'quarter' => '17509',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Galway',
	'title_category' => 'priest',
	'region' => '86',
	'place' => '341',
	'quarter' => '17510',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mayo',
	'title_category' => 'bishop',
	'region' => '86',
	'place' => '342',
	'quarter' => '17511',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tuam',
	'title_category' => 'archbishop',
	'region' => '86',
	'place' => '343',
	'quarter' => '17512',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achonry',
	'title_category' => 'bishop',
	'region' => '86',
	'place' => '344',
	'quarter' => '17513',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pamplona',
	'title_category' => 'bishop',
	'region' => '87',
	'place' => '345',
	'quarter' => '17514',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olite',
	'title_category' => 'priest',
	'region' => '87',
	'place' => '346',
	'quarter' => '17515',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tudela',
	'title_category' => 'bishop',
	'region' => '87',
	'place' => '347',
	'quarter' => '17516',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leyre',
	'title_category' => 'priest',
	'region' => '87',
	'place' => '348',
	'quarter' => '17517',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Sebastian',
	'title_category' => 'priest',
	'region' => '88',
	'place' => '349',
	'quarter' => '17518',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durango',
	'title_category' => 'priest',
	'region' => '88',
	'place' => '350',
	'quarter' => '17519',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilbao',
	'title_category' => 'priest',
	'region' => '88',
	'place' => '351',
	'quarter' => '17520',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gastehiz',
	'title_category' => 'bishop',
	'region' => '88',
	'place' => '352',
	'quarter' => '17521',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaca',
	'title_category' => 'bishop',
	'region' => '89',
	'place' => '353',
	'quarter' => '17522',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monzon',
	'title_category' => 'bishop',
	'region' => '89',
	'place' => '354',
	'quarter' => '17523',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huesca',
	'title_category' => 'bishop',
	'region' => '89',
	'place' => '355',
	'quarter' => '17524',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sobrarbe',
	'title_category' => 'priest',
	'region' => '89',
	'place' => '356',
	'quarter' => '17525',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaragoza',
	'title_category' => 'archbishop',
	'region' => '90',
	'place' => '357',
	'quarter' => '17526',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Molina de Aragon',
	'title_category' => 'priest',
	'region' => '90',
	'place' => '358',
	'quarter' => '17527',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albarracin',
	'title_category' => 'bishop',
	'region' => '90',
	'place' => '359',
	'quarter' => '17528',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rueda',
	'title_category' => 'priest',
	'region' => '90',
	'place' => '360',
	'quarter' => '17529',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gerona',
	'title_category' => 'bishop',
	'region' => '91',
	'place' => '361',
	'quarter' => '17530',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripoll',
	'title_category' => 'priest',
	'region' => '91',
	'place' => '362',
	'quarter' => '17531',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Emporda',
	'title_category' => 'priest',
	'region' => '91',
	'place' => '363',
	'quarter' => '17532',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sant Feliu de Guixols',
	'title_category' => 'priest',
	'region' => '91',
	'place' => '364',
	'quarter' => '17533',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barcelona',
	'title_category' => 'bishop',
	'region' => '92',
	'place' => '365',
	'quarter' => '17534',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barbens',
	'title_category' => 'priest',
	'region' => '92',
	'place' => '366',
	'quarter' => '17535',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manresa',
	'title_category' => 'priest',
	'region' => '92',
	'place' => '367',
	'quarter' => '17536',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monserrat',
	'title_category' => 'priest',
	'region' => '92',
	'place' => '368',
	'quarter' => '17537',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valencia',
	'title_category' => 'bishop',
	'region' => '93',
	'place' => '369',
	'quarter' => '17538',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sagunto',
	'title_category' => 'priest',
	'region' => '93',
	'place' => '370',
	'quarter' => '17539',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Castellon',
	'title_category' => 'bishop',
	'region' => '93',
	'place' => '371',
	'quarter' => '17540',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Serra',
	'title_category' => 'priest',
	'region' => '93',
	'place' => '372',
	'quarter' => '17541',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Denia',
	'title_category' => 'priest',
	'region' => '94',
	'place' => '373',
	'quarter' => '17542',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guadalest',
	'title_category' => 'priest',
	'region' => '94',
	'place' => '374',
	'quarter' => '17543',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'priest',
	'region' => '94',
	'place' => '375',
	'quarter' => '17544',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gandia',
	'title_category' => 'priest',
	'region' => '94',
	'place' => '376',
	'quarter' => '17545',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palma',
	'title_category' => 'bishop',
	'region' => '95',
	'place' => '377',
	'quarter' => '17546',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pollenca',
	'title_category' => 'priest',
	'region' => '95',
	'place' => '378',
	'quarter' => '17547',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menorca',
	'title_category' => 'bishop',
	'region' => '95',
	'place' => '379',
	'quarter' => '17548',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ibiza',
	'title_category' => 'bishop',
	'region' => '95',
	'place' => '380',
	'quarter' => '17549',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leon',
	'title_category' => 'bishop',
	'region' => '96',
	'place' => '381',
	'quarter' => '17550',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Robla',
	'title_category' => 'priest',
	'region' => '96',
	'place' => '382',
	'quarter' => '17551',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Guillermo',
	'title_category' => 'priest',
	'region' => '96',
	'place' => '383',
	'quarter' => '17552',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sahagun',
	'title_category' => 'priest',
	'region' => '96',
	'place' => '384',
	'quarter' => '17553',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oviedo',
	'title_category' => 'bishop',
	'region' => '97',
	'place' => '385',
	'quarter' => '17554',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aviles',
	'title_category' => 'priest',
	'region' => '97',
	'place' => '386',
	'quarter' => '17555',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gijon',
	'title_category' => 'priest',
	'region' => '97',
	'place' => '387',
	'quarter' => '17556',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santo Toribio',
	'title_category' => 'priest',
	'region' => '97',
	'place' => '388',
	'quarter' => '17557',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valladolid',
	'title_category' => 'bishop',
	'region' => '98',
	'place' => '389',
	'quarter' => '17558',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avila',
	'title_category' => 'bishop',
	'region' => '98',
	'place' => '390',
	'quarter' => '17559',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Segovia',
	'title_category' => 'bishop',
	'region' => '98',
	'place' => '391',
	'quarter' => '17560',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamanca',
	'title_category' => 'bishop',
	'region' => '98',
	'place' => '392',
	'quarter' => '17561',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Burgos',
	'title_category' => 'bishop',
	'region' => '99',
	'place' => '393',
	'quarter' => '17562',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santo Domingo de Silos',
	'title_category' => 'priest',
	'region' => '99',
	'place' => '394',
	'quarter' => '17563',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palencia',
	'title_category' => 'bishop',
	'region' => '99',
	'place' => '395',
	'quarter' => '17564',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Millan',
	'title_category' => 'priest',
	'region' => '99',
	'place' => '396',
	'quarter' => '17565',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santiago',
	'title_category' => 'archbishop',
	'region' => '100',
	'place' => '397',
	'quarter' => '17566',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ourense',
	'title_category' => 'bishop',
	'region' => '100',
	'place' => '398',
	'quarter' => '17567',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coruna',
	'title_category' => 'bishop',
	'region' => '100',
	'place' => '399',
	'quarter' => '17568',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ponferrada',
	'title_category' => 'priest',
	'region' => '100',
	'place' => '400',
	'quarter' => '17569',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisbon',
	'title_category' => 'archbishop',
	'region' => '101',
	'place' => '401',
	'quarter' => '17570',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sintra',
	'title_category' => 'priest',
	'region' => '101',
	'place' => '402',
	'quarter' => '17571',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Santarem',
	'title_category' => 'priest',
	'region' => '101',
	'place' => '403',
	'quarter' => '17572',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcobaca',
	'title_category' => 'priest',
	'region' => '101',
	'place' => '404',
	'quarter' => '17573',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto',
	'title_category' => 'bishop',
	'region' => '102',
	'place' => '405',
	'quarter' => '17574',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guimaraes',
	'title_category' => 'priest',
	'region' => '102',
	'place' => '406',
	'quarter' => '17575',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viana',
	'title_category' => 'priest',
	'region' => '102',
	'place' => '407',
	'quarter' => '17576',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aveiro',
	'title_category' => 'priest',
	'region' => '102',
	'place' => '408',
	'quarter' => '17577',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Braganca',
	'title_category' => 'priest',
	'region' => '103',
	'place' => '409',
	'quarter' => '17578',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sanabria',
	'title_category' => 'priest',
	'region' => '103',
	'place' => '410',
	'quarter' => '17579',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verin',
	'title_category' => 'priest',
	'region' => '103',
	'place' => '411',
	'quarter' => '17580',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mirandela',
	'title_category' => 'priest',
	'region' => '103',
	'place' => '412',
	'quarter' => '17581',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coimbra',
	'title_category' => 'prince bishop',
	'region' => '104',
	'place' => '413',
	'quarter' => '17582',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tomar',
	'title_category' => 'priest',
	'region' => '104',
	'place' => '414',
	'quarter' => '17583',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leiria',
	'title_category' => 'priest',
	'region' => '104',
	'place' => '415',
	'quarter' => '17584',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pombal',
	'title_category' => 'priest',
	'region' => '104',
	'place' => '416',
	'quarter' => '17585',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Evora',
	'title_category' => 'bishop',
	'region' => '105',
	'place' => '417',
	'quarter' => '17586',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcacer',
	'title_category' => 'priest',
	'region' => '105',
	'place' => '418',
	'quarter' => '17587',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moura',
	'title_category' => 'priest',
	'region' => '105',
	'place' => '419',
	'quarter' => '17588',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Avis',
	'title_category' => 'priest',
	'region' => '105',
	'place' => '420',
	'quarter' => '17589',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Faro',
	'title_category' => 'bishop',
	'region' => '106',
	'place' => '421',
	'quarter' => '17590',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Paderne',
	'title_category' => 'priest',
	'region' => '106',
	'place' => '422',
	'quarter' => '17591',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alvor',
	'title_category' => 'priest',
	'region' => '106',
	'place' => '423',
	'quarter' => '17592',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Silves',
	'title_category' => 'bishop',
	'region' => '106',
	'place' => '424',
	'quarter' => '17593',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cordoba',
	'title_category' => 'bishop',
	'region' => '107',
	'place' => '425',
	'quarter' => '17594',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Andujar',
	'title_category' => 'priest',
	'region' => '107',
	'place' => '426',
	'quarter' => '17595',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaen',
	'title_category' => 'bishop',
	'region' => '107',
	'place' => '427',
	'quarter' => '17596',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ecija',
	'title_category' => 'priest',
	'region' => '107',
	'place' => '428',
	'quarter' => '17597',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevilla',
	'title_category' => 'bishop',
	'region' => '108',
	'place' => '429',
	'quarter' => '17598',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Osuna',
	'title_category' => 'priest',
	'region' => '108',
	'place' => '430',
	'quarter' => '17599',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cadiz',
	'title_category' => 'bishop',
	'region' => '108',
	'place' => '431',
	'quarter' => '17600',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Huelva',
	'title_category' => 'priest',
	'region' => '108',
	'place' => '432',
	'quarter' => '17601',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Badajoz',
	'title_category' => 'bishop',
	'region' => '109',
	'place' => '433',
	'quarter' => '17602',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zafra',
	'title_category' => 'priest',
	'region' => '109',
	'place' => '434',
	'quarter' => '17603',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Merida',
	'title_category' => 'bishop',
	'region' => '109',
	'place' => '435',
	'quarter' => '17604',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olivenza',
	'title_category' => 'priest',
	'region' => '109',
	'place' => '436',
	'quarter' => '17605',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Toledo',
	'title_category' => 'bishop',
	'region' => '110',
	'place' => '437',
	'quarter' => '17606',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almaden',
	'title_category' => 'priest',
	'region' => '110',
	'place' => '438',
	'quarter' => '17607',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Consuegra',
	'title_category' => 'priest',
	'region' => '110',
	'place' => '439',
	'quarter' => '17608',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Talavera',
	'title_category' => 'priest',
	'region' => '110',
	'place' => '440',
	'quarter' => '17609',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Granada',
	'title_category' => 'bishop',
	'region' => '111',
	'place' => '441',
	'quarter' => '17610',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcaudete',
	'title_category' => 'priest',
	'region' => '111',
	'place' => '442',
	'quarter' => '17611',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antquera',
	'title_category' => 'priest',
	'region' => '111',
	'place' => '443',
	'quarter' => '17612',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Guadix',
	'title_category' => 'priest',
	'region' => '111',
	'place' => '444',
	'quarter' => '17613',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Almeria',
	'title_category' => 'bishop',
	'region' => '112',
	'place' => '445',
	'quarter' => '17614',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baza',
	'title_category' => 'bishop',
	'region' => '112',
	'place' => '446',
	'quarter' => '17615',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Motril',
	'title_category' => 'priest',
	'region' => '112',
	'place' => '447',
	'quarter' => '17616',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lorca',
	'title_category' => 'priest',
	'region' => '112',
	'place' => '448',
	'quarter' => '17617',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Murcia',
	'title_category' => 'bishop',
	'region' => '113',
	'place' => '449',
	'quarter' => '17618',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alcoy',
	'title_category' => 'priest',
	'region' => '113',
	'place' => '450',
	'quarter' => '17619',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'priest',
	'region' => '113',
	'place' => '451',
	'quarter' => '17620',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cartagena',
	'title_category' => 'bishop',
	'region' => '113',
	'place' => '452',
	'quarter' => '17621',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Malaga',
	'title_category' => 'bishop',
	'region' => '114',
	'place' => '453',
	'quarter' => '17622',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Loja',
	'title_category' => 'priest',
	'region' => '114',
	'place' => '454',
	'quarter' => '17623',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marbella',
	'title_category' => 'priest',
	'region' => '114',
	'place' => '455',
	'quarter' => '17624',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ronda',
	'title_category' => 'priest',
	'region' => '114',
	'place' => '456',
	'quarter' => '17625',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Milan',
	'title_category' => 'archbishop',
	'region' => '115',
	'place' => '457',
	'quarter' => '17626',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brescia',
	'title_category' => 'bishop',
	'region' => '115',
	'place' => '458',
	'quarter' => '17627',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pavia',
	'title_category' => 'bishop',
	'region' => '115',
	'place' => '459',
	'quarter' => '17628',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cremona',
	'title_category' => 'priest',
	'region' => '115',
	'place' => '460',
	'quarter' => '17629',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Verona',
	'title_category' => 'bishop',
	'region' => '116',
	'place' => '461',
	'quarter' => '17630',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Padua',
	'title_category' => 'bishop',
	'region' => '116',
	'place' => '462',
	'quarter' => '17631',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vicenza',
	'title_category' => 'bishop',
	'region' => '116',
	'place' => '463',
	'quarter' => '17632',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mantua',
	'title_category' => 'bishop',
	'region' => '116',
	'place' => '464',
	'quarter' => '17633',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Genoa',
	'title_category' => 'archbishop',
	'region' => '117',
	'place' => '465',
	'quarter' => '17634',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Noli',
	'title_category' => 'bishop',
	'region' => '117',
	'place' => '466',
	'quarter' => '17635',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleria',
	'title_category' => 'bishop',
	'region' => '117',
	'place' => '467',
	'quarter' => '17636',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bobbio',
	'title_category' => 'priest',
	'region' => '117',
	'place' => '468',
	'quarter' => '17637',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Venice',
	'title_category' => 'priest',
	'region' => '118',
	'place' => '469',
	'quarter' => '17638',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Treviso',
	'title_category' => 'bishop',
	'region' => '118',
	'place' => '470',
	'quarter' => '17639',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chioggia',
	'title_category' => 'bishop',
	'region' => '118',
	'place' => '471',
	'quarter' => '17640',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belluno',
	'title_category' => 'prince bishop',
	'region' => '118',
	'place' => '472',
	'quarter' => '17641',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ravenna',
	'title_category' => 'archbishop',
	'region' => '119',
	'place' => '473',
	'quarter' => '17642',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cesena',
	'title_category' => 'priest',
	'region' => '119',
	'place' => '474',
	'quarter' => '17643',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Forli',
	'title_category' => 'bishop',
	'region' => '119',
	'place' => '475',
	'quarter' => '17644',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rimini',
	'title_category' => 'bishop',
	'region' => '119',
	'place' => '476',
	'quarter' => '17645',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modena',
	'title_category' => 'bishop',
	'region' => '120',
	'place' => '477',
	'quarter' => '17646',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Parma',
	'title_category' => 'bishop',
	'region' => '120',
	'place' => '478',
	'quarter' => '17647',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ferrara',
	'title_category' => 'bishop',
	'region' => '120',
	'place' => '479',
	'quarter' => '17648',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bologna',
	'title_category' => 'bishop',
	'region' => '120',
	'place' => '480',
	'quarter' => '17649',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquileja',
	'title_category' => 'prince archbishop',
	'region' => '121',
	'place' => '481',
	'quarter' => '17650',
	'religion' => '1',
	'rank' => '9',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pordenone',
	'title_category' => 'priest',
	'region' => '121',
	'place' => '482',
	'quarter' => '17651',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Udine',
	'title_category' => 'bishop',
	'region' => '121',
	'place' => '483',
	'quarter' => '17652',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gemona',
	'title_category' => 'priest',
	'region' => '121',
	'place' => '484',
	'quarter' => '17653',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turin',
	'title_category' => 'bishop',
	'region' => '122',
	'place' => '485',
	'quarter' => '17654',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ivrea',
	'title_category' => 'priest',
	'region' => '122',
	'place' => '486',
	'quarter' => '17655',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asti',
	'title_category' => 'prince bishop',
	'region' => '122',
	'place' => '487',
	'quarter' => '17656',
	'religion' => '1',
	'rank' => '7',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinerollo',
	'title_category' => 'priest',
	'region' => '122',
	'place' => '488',
	'quarter' => '17657',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Florence',
	'title_category' => 'bishop',
	'region' => '123',
	'place' => '489',
	'quarter' => '17658',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siena',
	'title_category' => 'bishop',
	'region' => '123',
	'place' => '490',
	'quarter' => '17659',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arezzo',
	'title_category' => 'bishop',
	'region' => '123',
	'place' => '491',
	'quarter' => '17660',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Grosseto',
	'title_category' => 'bishop',
	'region' => '123',
	'place' => '492',
	'quarter' => '17661',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Spoleto',
	'title_category' => 'bishop',
	'region' => '124',
	'place' => '493',
	'quarter' => '17662',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquila',
	'title_category' => 'bishop',
	'region' => '124',
	'place' => '494',
	'quarter' => '17663',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancona',
	'title_category' => 'bishop',
	'region' => '124',
	'place' => '495',
	'quarter' => '17664',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Assissi',
	'title_category' => 'priest',
	'region' => '124',
	'place' => '496',
	'quarter' => '17665',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rome',
	'title_category' => 'priest',
	'region' => '125',
	'place' => '497',
	'quarter' => '17666',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Frascati',
	'title_category' => 'bishop',
	'region' => '125',
	'place' => '498',
	'quarter' => '17667',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tivoli',
	'title_category' => 'bishop',
	'region' => '125',
	'place' => '499',
	'quarter' => '17668',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Subiaco',
	'title_category' => 'priest',
	'region' => '125',
	'place' => '500',
	'quarter' => '17669',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pisa',
	'title_category' => 'archbishop',
	'region' => '126',
	'place' => '501',
	'quarter' => '17670',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrara',
	'title_category' => 'bishop',
	'region' => '126',
	'place' => '502',
	'quarter' => '17671',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lucca',
	'title_category' => 'bishop',
	'region' => '126',
	'place' => '503',
	'quarter' => '17672',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Volterra',
	'title_category' => 'bishop',
	'region' => '126',
	'place' => '504',
	'quarter' => '17673',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Naples',
	'title_category' => 'archbishop',
	'region' => '127',
	'place' => '505',
	'quarter' => '17674',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gaeta',
	'title_category' => 'priest',
	'region' => '127',
	'place' => '506',
	'quarter' => '17675',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amalfi',
	'title_category' => 'archbishop',
	'region' => '127',
	'place' => '507',
	'quarter' => '17676',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cassino',
	'title_category' => 'priest',
	'region' => '127',
	'place' => '508',
	'quarter' => '17677',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taranto',
	'title_category' => 'bishop',
	'region' => '128',
	'place' => '509',
	'quarter' => '17678',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bari',
	'title_category' => 'archbishop',
	'region' => '128',
	'place' => '510',
	'quarter' => '17679',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siponto',
	'title_category' => 'archbishop',
	'region' => '128',
	'place' => '511',
	'quarter' => '17680',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brindisi',
	'title_category' => 'archbishop',
	'region' => '128',
	'place' => '512',
	'quarter' => '17681',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cosenza',
	'title_category' => 'archbishop',
	'region' => '129',
	'place' => '513',
	'quarter' => '17682',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rossano',
	'title_category' => 'archbishop',
	'region' => '129',
	'place' => '514',
	'quarter' => '17683',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tropea',
	'title_category' => 'priest',
	'region' => '129',
	'place' => '515',
	'quarter' => '17684',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vivarium',
	'title_category' => 'priest',
	'region' => '129',
	'place' => '516',
	'quarter' => '17685',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benevento',
	'title_category' => 'archbishop',
	'region' => '130',
	'place' => '517',
	'quarter' => '17686',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monteverde',
	'title_category' => 'bishop',
	'region' => '130',
	'place' => '518',
	'quarter' => '17687',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Potenza',
	'title_category' => 'bishop',
	'region' => '130',
	'place' => '519',
	'quarter' => '17688',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viggiano',
	'title_category' => 'priest',
	'region' => '130',
	'place' => '520',
	'quarter' => '17689',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sassari',
	'title_category' => 'archbishop',
	'region' => '131',
	'place' => '521',
	'quarter' => '17690',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olbia',
	'title_category' => 'priest',
	'region' => '131',
	'place' => '522',
	'quarter' => '17691',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosa',
	'title_category' => 'bishop',
	'region' => '131',
	'place' => '523',
	'quarter' => '17692',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto Torres',
	'title_category' => 'bishop',
	'region' => '131',
	'place' => '524',
	'quarter' => '17693',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cagliari',
	'title_category' => 'archbishop',
	'region' => '132',
	'place' => '525',
	'quarter' => '17694',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oristano',
	'title_category' => 'priest',
	'region' => '132',
	'place' => '526',
	'quarter' => '17695',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dolia',
	'title_category' => 'bishop',
	'region' => '132',
	'place' => '527',
	'quarter' => '17696',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iglesias',
	'title_category' => 'bishop',
	'region' => '132',
	'place' => '528',
	'quarter' => '17697',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palermo',
	'title_category' => 'archbishop',
	'region' => '133',
	'place' => '529',
	'quarter' => '17698',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agrigento',
	'title_category' => 'bishop',
	'region' => '133',
	'place' => '530',
	'quarter' => '17699',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cefalu',
	'title_category' => 'priest',
	'region' => '133',
	'place' => '531',
	'quarter' => '17700',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marsala',
	'title_category' => 'priest',
	'region' => '133',
	'place' => '532',
	'quarter' => '17701',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Messina',
	'title_category' => 'bishop',
	'region' => '134',
	'place' => '533',
	'quarter' => '17702',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taormina',
	'title_category' => 'bishop',
	'region' => '134',
	'place' => '534',
	'quarter' => '17703',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Catania',
	'title_category' => 'priest',
	'region' => '134',
	'place' => '535',
	'quarter' => '17704',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Troina',
	'title_category' => 'bishop',
	'region' => '134',
	'place' => '536',
	'quarter' => '17705',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siracusa',
	'title_category' => 'bishop',
	'region' => '135',
	'place' => '537',
	'quarter' => '17706',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caltagirone',
	'title_category' => 'priest',
	'region' => '135',
	'place' => '538',
	'quarter' => '17707',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valletta',
	'title_category' => 'priest',
	'region' => '135',
	'place' => '539',
	'quarter' => '17708',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modica',
	'title_category' => 'priest',
	'region' => '135',
	'place' => '540',
	'quarter' => '17709',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tangiers',
	'title_category' => 'bishop',
	'region' => '136',
	'place' => '541',
	'quarter' => '17710',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ceuta',
	'title_category' => 'priest',
	'region' => '136',
	'place' => '542',
	'quarter' => '17711',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouazzane',
	'title_category' => 'priest',
	'region' => '136',
	'place' => '543',
	'quarter' => '17712',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tetouan',
	'title_category' => 'priest',
	'region' => '136',
	'place' => '544',
	'quarter' => '17713',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anfa',
	'title_category' => 'priest',
	'region' => '137',
	'place' => '545',
	'quarter' => '17714',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rabat',
	'title_category' => 'priest',
	'region' => '137',
	'place' => '546',
	'quarter' => '17715',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sale',
	'title_category' => 'priest',
	'region' => '137',
	'place' => '547',
	'quarter' => '17716',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fedala',
	'title_category' => 'priest',
	'region' => '137',
	'place' => '548',
	'quarter' => '17717',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fez',
	'title_category' => 'priest',
	'region' => '138',
	'place' => '549',
	'quarter' => '17718',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sefrou',
	'title_category' => 'priest',
	'region' => '138',
	'place' => '550',
	'quarter' => '17719',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taza',
	'title_category' => 'bishop',
	'region' => '138',
	'place' => '551',
	'quarter' => '17720',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Meknes',
	'title_category' => 'priest',
	'region' => '138',
	'place' => '552',
	'quarter' => '17721',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marrakesh',
	'title_category' => 'priest',
	'region' => '139',
	'place' => '553',
	'quarter' => '17722',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouarzazate',
	'title_category' => 'priest',
	'region' => '139',
	'place' => '554',
	'quarter' => '17723',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mogador',
	'title_category' => 'priest',
	'region' => '139',
	'place' => '555',
	'quarter' => '17724',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benhaddou',
	'title_category' => 'priest',
	'region' => '139',
	'place' => '556',
	'quarter' => '17725',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taroudant',
	'title_category' => 'priest',
	'region' => '140',
	'place' => '557',
	'quarter' => '17726',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agadir',
	'title_category' => 'priest',
	'region' => '140',
	'place' => '558',
	'quarter' => '17727',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tindouf',
	'title_category' => 'priest',
	'region' => '140',
	'place' => '559',
	'quarter' => '17728',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinmel',
	'title_category' => 'bishop',
	'region' => '140',
	'place' => '560',
	'quarter' => '17729',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Figuig',
	'title_category' => 'priest',
	'region' => '141',
	'place' => '561',
	'quarter' => '17730',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sijilmassa',
	'title_category' => 'priest',
	'region' => '141',
	'place' => '562',
	'quarter' => '17731',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tinghir',
	'title_category' => 'priest',
	'region' => '141',
	'place' => '563',
	'quarter' => '17732',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rachidiya',
	'title_category' => 'priest',
	'region' => '141',
	'place' => '564',
	'quarter' => '17733',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tlemcen',
	'title_category' => 'bishop',
	'region' => '142',
	'place' => '565',
	'quarter' => '17734',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oujda',
	'title_category' => 'priest',
	'region' => '142',
	'place' => '566',
	'quarter' => '17735',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mellila',
	'title_category' => 'priest',
	'region' => '142',
	'place' => '567',
	'quarter' => '17736',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taourirt',
	'title_category' => 'priest',
	'region' => '142',
	'place' => '568',
	'quarter' => '17737',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oran',
	'title_category' => 'priest',
	'region' => '143',
	'place' => '569',
	'quarter' => '17738',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mostaganem',
	'title_category' => 'bishop',
	'region' => '143',
	'place' => '570',
	'quarter' => '17739',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiaret',
	'title_category' => 'priest',
	'region' => '143',
	'place' => '571',
	'quarter' => '17740',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mascara',
	'title_category' => 'priest',
	'region' => '143',
	'place' => '572',
	'quarter' => '17741',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Djelfa',
	'title_category' => 'bishop',
	'region' => '144',
	'place' => '573',
	'quarter' => '17742',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laghouat',
	'title_category' => 'priest',
	'region' => '144',
	'place' => '574',
	'quarter' => '17743',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghardaia',
	'title_category' => 'priest',
	'region' => '144',
	'place' => '575',
	'quarter' => '17744',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Menia',
	'title_category' => 'priest',
	'region' => '144',
	'place' => '576',
	'quarter' => '17745',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khaled',
	'title_category' => 'priest',
	'region' => '145',
	'place' => '577',
	'quarter' => '17746',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biskra',
	'title_category' => 'priest',
	'region' => '145',
	'place' => '578',
	'quarter' => '17747',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ouargla',
	'title_category' => 'priest',
	'region' => '145',
	'place' => '579',
	'quarter' => '17748',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Touggourt',
	'title_category' => 'priest',
	'region' => '145',
	'place' => '580',
	'quarter' => '17749',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Algiers',
	'title_category' => 'priest',
	'region' => '146',
	'place' => '581',
	'quarter' => '17750',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medea',
	'title_category' => 'priest',
	'region' => '146',
	'place' => '582',
	'quarter' => '17751',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tedelles',
	'title_category' => 'priest',
	'region' => '146',
	'place' => '583',
	'quarter' => '17752',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Achir',
	'title_category' => 'priest',
	'region' => '146',
	'place' => '584',
	'quarter' => '17753',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bejaia',
	'title_category' => 'bishop',
	'region' => '147',
	'place' => '585',
	'quarter' => '17754',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jijel',
	'title_category' => 'priest',
	'region' => '147',
	'place' => '586',
	'quarter' => '17755',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Setif',
	'title_category' => 'bishop',
	'region' => '147',
	'place' => '587',
	'quarter' => '17756',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eulma',
	'title_category' => 'priest',
	'region' => '147',
	'place' => '588',
	'quarter' => '17757',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Annaba',
	'title_category' => 'bishop',
	'region' => '148',
	'place' => '589',
	'quarter' => '17758',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabarka',
	'title_category' => 'bishop',
	'region' => '148',
	'place' => '590',
	'quarter' => '17759',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jendouba',
	'title_category' => 'priest',
	'region' => '148',
	'place' => '591',
	'quarter' => '17760',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaf',
	'title_category' => 'priest',
	'region' => '148',
	'place' => '592',
	'quarter' => '17761',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tunis',
	'title_category' => 'priest',
	'region' => '149',
	'place' => '593',
	'quarter' => '17762',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zaghouan',
	'title_category' => 'bishop',
	'region' => '149',
	'place' => '594',
	'quarter' => '17763',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hammamet',
	'title_category' => 'priest',
	'region' => '149',
	'place' => '595',
	'quarter' => '17764',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bizerte',
	'title_category' => 'priest',
	'region' => '149',
	'place' => '596',
	'quarter' => '17765',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kairouan',
	'title_category' => 'priest',
	'region' => '150',
	'place' => '597',
	'quarter' => '17766',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sousse',
	'title_category' => 'priest',
	'region' => '150',
	'place' => '598',
	'quarter' => '17767',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sfax',
	'title_category' => 'priest',
	'region' => '150',
	'place' => '599',
	'quarter' => '17768',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mahdia',
	'title_category' => 'priest',
	'region' => '150',
	'place' => '600',
	'quarter' => '17769',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gabes',
	'title_category' => 'bishop',
	'region' => '151',
	'place' => '601',
	'quarter' => '17770',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gafsa',
	'title_category' => 'bishop',
	'region' => '151',
	'place' => '602',
	'quarter' => '17771',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kebili',
	'title_category' => 'priest',
	'region' => '151',
	'place' => '603',
	'quarter' => '17772',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tozeur',
	'title_category' => 'priest',
	'region' => '151',
	'place' => '604',
	'quarter' => '17773',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghadames',
	'title_category' => 'bishop',
	'region' => '152',
	'place' => '605',
	'quarter' => '17774',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medenine',
	'title_category' => 'priest',
	'region' => '152',
	'place' => '606',
	'quarter' => '17775',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tamanrasset',
	'title_category' => 'priest',
	'region' => '152',
	'place' => '607',
	'quarter' => '17776',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghat',
	'title_category' => 'priest',
	'region' => '152',
	'place' => '608',
	'quarter' => '17777',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'priest',
	'region' => '153',
	'place' => '609',
	'quarter' => '17778',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zliten',
	'title_category' => 'priest',
	'region' => '153',
	'place' => '610',
	'quarter' => '17779',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Misrata',
	'title_category' => 'priest',
	'region' => '153',
	'place' => '611',
	'quarter' => '17780',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zuwara',
	'title_category' => 'priest',
	'region' => '153',
	'place' => '612',
	'quarter' => '17781',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Germa',
	'title_category' => 'priest',
	'region' => '154',
	'place' => '613',
	'quarter' => '17782',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sabha',
	'title_category' => 'priest',
	'region' => '154',
	'place' => '614',
	'quarter' => '17783',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zouila',
	'title_category' => 'priest',
	'region' => '154',
	'place' => '615',
	'quarter' => '17784',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qatrun',
	'title_category' => 'priest',
	'region' => '154',
	'place' => '616',
	'quarter' => '17785',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufra',
	'title_category' => 'priest',
	'region' => '155',
	'place' => '617',
	'quarter' => '17786',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghiranghedi',
	'title_category' => 'priest',
	'region' => '155',
	'place' => '618',
	'quarter' => '17787',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Awjila',
	'title_category' => 'priest',
	'region' => '155',
	'place' => '619',
	'quarter' => '17788',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marada',
	'title_category' => 'priest',
	'region' => '155',
	'place' => '620',
	'quarter' => '17789',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benghazi',
	'title_category' => 'priest',
	'region' => '156',
	'place' => '621',
	'quarter' => '17790',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derna',
	'title_category' => 'bishop',
	'region' => '156',
	'place' => '622',
	'quarter' => '17791',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tobruk',
	'title_category' => 'bishop',
	'region' => '156',
	'place' => '623',
	'quarter' => '17792',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ajdabiya',
	'title_category' => 'priest',
	'region' => '156',
	'place' => '624',
	'quarter' => '17793',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandria',
	'title_category' => 'priest',
	'region' => '157',
	'place' => '625',
	'quarter' => '17794',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosetta',
	'title_category' => 'priest',
	'region' => '157',
	'place' => '626',
	'quarter' => '17795',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damietta',
	'title_category' => 'bishop',
	'region' => '157',
	'place' => '627',
	'quarter' => '17796',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mansoura',
	'title_category' => 'priest',
	'region' => '157',
	'place' => '628',
	'quarter' => '17797',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cairo',
	'title_category' => 'bishop',
	'region' => '158',
	'place' => '629',
	'quarter' => '17798',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Helwan',
	'title_category' => 'bishop',
	'region' => '158',
	'place' => '630',
	'quarter' => '17799',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fayum',
	'title_category' => 'bishop',
	'region' => '158',
	'place' => '631',
	'quarter' => '17800',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Natrun',
	'title_category' => 'priest',
	'region' => '158',
	'place' => '632',
	'quarter' => '17801',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minya',
	'title_category' => 'priest',
	'region' => '159',
	'place' => '633',
	'quarter' => '17802',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siwa',
	'title_category' => 'priest',
	'region' => '159',
	'place' => '634',
	'quarter' => '17803',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Farafra',
	'title_category' => 'priest',
	'region' => '159',
	'place' => '635',
	'quarter' => '17804',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anba Boula',
	'title_category' => 'priest',
	'region' => '159',
	'place' => '636',
	'quarter' => '17805',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Asyut',
	'title_category' => 'priest',
	'region' => '160',
	'place' => '637',
	'quarter' => '17806',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kharga',
	'title_category' => 'priest',
	'region' => '160',
	'place' => '638',
	'quarter' => '17807',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aswan',
	'title_category' => 'bishop',
	'region' => '160',
	'place' => '639',
	'quarter' => '17808',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zinaiqa',
	'title_category' => 'priest',
	'region' => '160',
	'place' => '640',
	'quarter' => '17809',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Liegnitz',
	'title_category' => 'priest',
	'region' => '161',
	'place' => '641',
	'quarter' => '17810',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glogau',
	'title_category' => 'priest',
	'region' => '161',
	'place' => '642',
	'quarter' => '17811',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Breslau',
	'title_category' => 'bishop',
	'region' => '161',
	'place' => '643',
	'quarter' => '17812',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leubus',
	'title_category' => 'priest',
	'region' => '161',
	'place' => '644',
	'quarter' => '17813',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krakow',
	'title_category' => 'bishop',
	'region' => '162',
	'place' => '645',
	'quarter' => '17814',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Teczyn',
	'title_category' => 'priest',
	'region' => '162',
	'place' => '646',
	'quarter' => '17815',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnau',
	'title_category' => 'priest',
	'region' => '162',
	'place' => '647',
	'quarter' => '17816',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salzberg',
	'title_category' => 'priest',
	'region' => '162',
	'place' => '648',
	'quarter' => '17817',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gnesen',
	'title_category' => 'archbishop',
	'region' => '163',
	'place' => '649',
	'quarter' => '17818',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Posen',
	'title_category' => 'bishop',
	'region' => '163',
	'place' => '650',
	'quarter' => '17819',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konin',
	'title_category' => 'bishop',
	'region' => '163',
	'place' => '651',
	'quarter' => '17820',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalisz',
	'title_category' => 'priest',
	'region' => '163',
	'place' => '652',
	'quarter' => '17821',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Plock',
	'title_category' => 'bishop',
	'region' => '164',
	'place' => '653',
	'quarter' => '17822',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Warsaw',
	'title_category' => 'priest',
	'region' => '164',
	'place' => '654',
	'quarter' => '17823',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leslau',
	'title_category' => 'bishop',
	'region' => '164',
	'place' => '655',
	'quarter' => '17824',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Radomir',
	'title_category' => 'priest',
	'region' => '164',
	'place' => '656',
	'quarter' => '17825',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brest',
	'title_category' => 'priest',
	'region' => '165',
	'place' => '657',
	'quarter' => '17826',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Goroden',
	'title_category' => 'priest',
	'region' => '165',
	'place' => '658',
	'quarter' => '17827',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kobryn',
	'title_category' => 'priest',
	'region' => '165',
	'place' => '659',
	'quarter' => '17828',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Wolkowysk',
	'title_category' => 'priest',
	'region' => '165',
	'place' => '660',
	'quarter' => '17829',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tracken',
	'title_category' => 'priest',
	'region' => '166',
	'place' => '661',
	'quarter' => '17830',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vilnius',
	'title_category' => 'bishop',
	'region' => '166',
	'place' => '662',
	'quarter' => '17831',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kauen',
	'title_category' => 'priest',
	'region' => '166',
	'place' => '663',
	'quarter' => '17832',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Minsk',
	'title_category' => 'priest',
	'region' => '166',
	'place' => '664',
	'quarter' => '17833',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pula',
	'title_category' => 'bishop',
	'region' => '167',
	'place' => '665',
	'quarter' => '17834',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rovigno',
	'title_category' => 'priest',
	'region' => '167',
	'place' => '666',
	'quarter' => '17835',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vikla',
	'title_category' => 'priest',
	'region' => '167',
	'place' => '667',
	'quarter' => '17836',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trsat',
	'title_category' => 'priest',
	'region' => '167',
	'place' => '668',
	'quarter' => '17837',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ragusa',
	'title_category' => 'priest',
	'region' => '168',
	'place' => '669',
	'quarter' => '17838',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zadar',
	'title_category' => 'archbishop',
	'region' => '168',
	'place' => '670',
	'quarter' => '17839',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Split',
	'title_category' => 'archbishop',
	'region' => '168',
	'place' => '671',
	'quarter' => '17840',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biograd',
	'title_category' => 'bishop',
	'region' => '168',
	'place' => '672',
	'quarter' => '17841',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Knin',
	'title_category' => 'bishop',
	'region' => '169',
	'place' => '673',
	'quarter' => '17842',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bihac',
	'title_category' => 'priest',
	'region' => '169',
	'place' => '674',
	'quarter' => '17843',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjic',
	'title_category' => 'priest',
	'region' => '169',
	'place' => '675',
	'quarter' => '17844',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kotor',
	'title_category' => 'bishop',
	'region' => '169',
	'place' => '676',
	'quarter' => '17845',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gyor',
	'title_category' => 'bishop',
	'region' => '170',
	'place' => '677',
	'quarter' => '17846',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyrnau',
	'title_category' => 'priest',
	'region' => '170',
	'place' => '678',
	'quarter' => '17847',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nitra',
	'title_category' => 'bishop',
	'region' => '170',
	'place' => '679',
	'quarter' => '17848',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sopron',
	'title_category' => 'priest',
	'region' => '170',
	'place' => '680',
	'quarter' => '17849',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Veszprem',
	'title_category' => 'bishop',
	'region' => '171',
	'place' => '681',
	'quarter' => '17850',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fehervar',
	'title_category' => 'priest',
	'region' => '171',
	'place' => '682',
	'quarter' => '17851',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Egerszeg',
	'title_category' => 'priest',
	'region' => '171',
	'place' => '683',
	'quarter' => '17852',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'bishop',
	'region' => '171',
	'place' => '684',
	'quarter' => '17853',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Esztergom',
	'title_category' => 'archbishop',
	'region' => '172',
	'place' => '685',
	'quarter' => '17854',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bystrica',
	'title_category' => 'priest',
	'region' => '172',
	'place' => '686',
	'quarter' => '17855',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krupina',
	'title_category' => 'priest',
	'region' => '172',
	'place' => '687',
	'quarter' => '17856',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Leua',
	'title_category' => 'priest',
	'region' => '172',
	'place' => '688',
	'quarter' => '17857',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eger',
	'title_category' => 'bishop',
	'region' => '173',
	'place' => '689',
	'quarter' => '17858',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diosgyor',
	'title_category' => 'priest',
	'region' => '173',
	'place' => '690',
	'quarter' => '17859',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bartfeld',
	'title_category' => 'priest',
	'region' => '173',
	'place' => '691',
	'quarter' => '17860',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kassow',
	'title_category' => 'priest',
	'region' => '173',
	'place' => '692',
	'quarter' => '17861',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buda',
	'title_category' => 'priest',
	'region' => '174',
	'place' => '693',
	'quarter' => '17862',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kecskemet',
	'title_category' => 'priest',
	'region' => '174',
	'place' => '694',
	'quarter' => '17863',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Debrecen',
	'title_category' => 'priest',
	'region' => '174',
	'place' => '695',
	'quarter' => '17864',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zounok',
	'title_category' => 'priest',
	'region' => '174',
	'place' => '696',
	'quarter' => '17865',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pecs',
	'title_category' => 'bishop',
	'region' => '175',
	'place' => '697',
	'quarter' => '17866',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vukovar',
	'title_category' => 'priest',
	'region' => '175',
	'place' => '698',
	'quarter' => '17867',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kalocsa',
	'title_category' => 'archbishop',
	'region' => '175',
	'place' => '699',
	'quarter' => '17868',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Virovitica',
	'title_category' => 'priest',
	'region' => '175',
	'place' => '700',
	'quarter' => '17869',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alba Julia',
	'title_category' => 'bishop',
	'region' => '176',
	'place' => '701',
	'quarter' => '17870',
	'religion' => '1',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schaasburg',
	'title_category' => 'priest',
	'region' => '176',
	'place' => '702',
	'quarter' => '17871',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Klausenburg',
	'title_category' => 'priest',
	'region' => '176',
	'place' => '703',
	'quarter' => '17872',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carta',
	'title_category' => 'priest',
	'region' => '176',
	'place' => '704',
	'quarter' => '17873',
	'religion' => '1',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targu Jiu',
	'title_category' => 'priest',
	'region' => '177',
	'place' => '705',
	'quarter' => '17874',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Drobeta',
	'title_category' => 'priest',
	'region' => '177',
	'place' => '706',
	'quarter' => '17875',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Curtea Arges',
	'title_category' => 'priest',
	'region' => '177',
	'place' => '707',
	'quarter' => '17876',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tismana',
	'title_category' => 'priest',
	'region' => '177',
	'place' => '708',
	'quarter' => '17877',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Targoviste',
	'title_category' => 'priest',
	'region' => '178',
	'place' => '709',
	'quarter' => '17878',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bucharest',
	'title_category' => 'bishop',
	'region' => '178',
	'place' => '710',
	'quarter' => '17879',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Torzburg',
	'title_category' => 'priest',
	'region' => '178',
	'place' => '711',
	'quarter' => '17880',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kronstadt',
	'title_category' => 'priest',
	'region' => '178',
	'place' => '712',
	'quarter' => '17881',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constanta',
	'title_category' => 'priest',
	'region' => '179',
	'place' => '713',
	'quarter' => '17882',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harsova',
	'title_category' => 'priest',
	'region' => '179',
	'place' => '714',
	'quarter' => '17883',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tulcea',
	'title_category' => 'priest',
	'region' => '179',
	'place' => '715',
	'quarter' => '17884',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Calarasi',
	'title_category' => 'priest',
	'region' => '179',
	'place' => '716',
	'quarter' => '17885',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suceava',
	'title_category' => 'priest',
	'region' => '180',
	'place' => '717',
	'quarter' => '17886',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orhei',
	'title_category' => 'priest',
	'region' => '180',
	'place' => '718',
	'quarter' => '17887',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Odessa',
	'title_category' => 'priest',
	'region' => '180',
	'place' => '719',
	'quarter' => '17888',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chisinau',
	'title_category' => 'priest',
	'region' => '180',
	'place' => '720',
	'quarter' => '17889',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sofia',
	'title_category' => 'priest',
	'region' => '181',
	'place' => '721',
	'quarter' => '17890',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleven',
	'title_category' => 'priest',
	'region' => '181',
	'place' => '722',
	'quarter' => '17891',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stip',
	'title_category' => 'bishop',
	'region' => '181',
	'place' => '723',
	'quarter' => '17892',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rila',
	'title_category' => 'priest',
	'region' => '181',
	'place' => '724',
	'quarter' => '17893',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Varna',
	'title_category' => 'priest',
	'region' => '182',
	'place' => '725',
	'quarter' => '17894',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pliska',
	'title_category' => 'archbishop',
	'region' => '182',
	'place' => '726',
	'quarter' => '17895',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Preslav',
	'title_category' => 'archbishop',
	'region' => '182',
	'place' => '727',
	'quarter' => '17896',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarnovo',
	'title_category' => 'bishop',
	'region' => '182',
	'place' => '728',
	'quarter' => '17897',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gorazde',
	'title_category' => 'priest',
	'region' => '183',
	'place' => '729',
	'quarter' => '17898',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zenica',
	'title_category' => 'priest',
	'region' => '183',
	'place' => '730',
	'quarter' => '17899',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sebrenik',
	'title_category' => 'priest',
	'region' => '183',
	'place' => '731',
	'quarter' => '17900',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visegrad',
	'title_category' => 'priest',
	'region' => '183',
	'place' => '732',
	'quarter' => '17901',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Belgrade',
	'title_category' => 'archbishop',
	'region' => '184',
	'place' => '733',
	'quarter' => '17902',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasa',
	'title_category' => 'priest',
	'region' => '184',
	'place' => '734',
	'quarter' => '17903',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valjevo',
	'title_category' => 'priest',
	'region' => '184',
	'place' => '735',
	'quarter' => '17904',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'priest',
	'region' => '184',
	'place' => '736',
	'quarter' => '17905',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rashka',
	'title_category' => 'bishop',
	'region' => '185',
	'place' => '737',
	'quarter' => '17906',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukovo',
	'title_category' => 'priest',
	'region' => '185',
	'place' => '738',
	'quarter' => '17907',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Krusevac',
	'title_category' => 'bishop',
	'region' => '185',
	'place' => '739',
	'quarter' => '17908',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zica',
	'title_category' => 'priest',
	'region' => '185',
	'place' => '740',
	'quarter' => '17909',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prizren',
	'title_category' => 'archbishop',
	'region' => '186',
	'place' => '741',
	'quarter' => '17910',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kumanovo',
	'title_category' => 'priest',
	'region' => '186',
	'place' => '742',
	'quarter' => '17911',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Skopje',
	'title_category' => 'archbishop',
	'region' => '186',
	'place' => '743',
	'quarter' => '17912',
	'religion' => '2',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitina',
	'title_category' => 'priest',
	'region' => '186',
	'place' => '744',
	'quarter' => '17913',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pristina',
	'title_category' => 'priest',
	'region' => '187',
	'place' => '745',
	'quarter' => '17914',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zvecan',
	'title_category' => 'priest',
	'region' => '187',
	'place' => '746',
	'quarter' => '17915',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pec',
	'title_category' => 'priest',
	'region' => '187',
	'place' => '747',
	'quarter' => '17916',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berane',
	'title_category' => 'priest',
	'region' => '187',
	'place' => '748',
	'quarter' => '17917',
	'religion' => '2',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Monastyrski',
	'title_category' => 'priest',
	'region' => '188',
	'place' => '749',
	'quarter' => '17918',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samkarsh',
	'title_category' => 'priest',
	'region' => '188',
	'place' => '750',
	'quarter' => '17919',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poltava',
	'title_category' => 'priest',
	'region' => '188',
	'place' => '751',
	'quarter' => '17920',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oleshia',
	'title_category' => 'priest',
	'region' => '188',
	'place' => '752',
	'quarter' => '17921',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pereyaslav',
	'title_category' => 'priest',
	'region' => '189',
	'place' => '753',
	'quarter' => '17922',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Korsun',
	'title_category' => 'priest',
	'region' => '189',
	'place' => '754',
	'quarter' => '17923',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kaniv',
	'title_category' => 'priest',
	'region' => '189',
	'place' => '755',
	'quarter' => '17924',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cherkasy',
	'title_category' => 'priest',
	'region' => '189',
	'place' => '756',
	'quarter' => '17925',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kiev',
	'title_category' => 'archbishop',
	'region' => '190',
	'place' => '757',
	'quarter' => '17926',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Borispyl',
	'title_category' => 'priest',
	'region' => '190',
	'place' => '758',
	'quarter' => '17927',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yuriev',
	'title_category' => 'priest',
	'region' => '190',
	'place' => '759',
	'quarter' => '17928',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pechersk',
	'title_category' => 'priest',
	'region' => '190',
	'place' => '760',
	'quarter' => '17929',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halych',
	'title_category' => 'priest',
	'region' => '191',
	'place' => '761',
	'quarter' => '17930',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolomyia',
	'title_category' => 'priest',
	'region' => '191',
	'place' => '762',
	'quarter' => '17931',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lviv',
	'title_category' => 'archbishop',
	'region' => '191',
	'place' => '763',
	'quarter' => '17932',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Terebovlia',
	'title_category' => 'priest',
	'region' => '191',
	'place' => '764',
	'quarter' => '17933',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Turov',
	'title_category' => 'priest',
	'region' => '192',
	'place' => '765',
	'quarter' => '17934',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pinesk',
	'title_category' => 'priest',
	'region' => '192',
	'place' => '766',
	'quarter' => '17935',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Slutsk',
	'title_category' => 'priest',
	'region' => '192',
	'place' => '767',
	'quarter' => '17936',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Korosten',
	'title_category' => 'priest',
	'region' => '192',
	'place' => '768',
	'quarter' => '17937',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tchernigov',
	'title_category' => 'priest',
	'region' => '193',
	'place' => '769',
	'quarter' => '17938',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lyubech',
	'title_category' => 'priest',
	'region' => '193',
	'place' => '770',
	'quarter' => '17939',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gomel',
	'title_category' => 'priest',
	'region' => '193',
	'place' => '771',
	'quarter' => '17940',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mazyr',
	'title_category' => 'priest',
	'region' => '193',
	'place' => '772',
	'quarter' => '17941',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Polotsk',
	'title_category' => 'bishop',
	'region' => '194',
	'place' => '773',
	'quarter' => '17942',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Orsha',
	'title_category' => 'priest',
	'region' => '194',
	'place' => '774',
	'quarter' => '17943',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vitebsk',
	'title_category' => 'priest',
	'region' => '194',
	'place' => '775',
	'quarter' => '17944',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barysaw',
	'title_category' => 'priest',
	'region' => '194',
	'place' => '776',
	'quarter' => '17945',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smolensk',
	'title_category' => 'priest',
	'region' => '195',
	'place' => '777',
	'quarter' => '17946',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bryansk',
	'title_category' => 'priest',
	'region' => '195',
	'place' => '778',
	'quarter' => '17947',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vyazma',
	'title_category' => 'priest',
	'region' => '195',
	'place' => '779',
	'quarter' => '17948',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Roslav',
	'title_category' => 'priest',
	'region' => '195',
	'place' => '780',
	'quarter' => '17949',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ryazan',
	'title_category' => 'priest',
	'region' => '196',
	'place' => '781',
	'quarter' => '17950',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolomna',
	'title_category' => 'priest',
	'region' => '196',
	'place' => '782',
	'quarter' => '17951',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kasimov',
	'title_category' => 'priest',
	'region' => '196',
	'place' => '783',
	'quarter' => '17952',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tula',
	'title_category' => 'priest',
	'region' => '196',
	'place' => '784',
	'quarter' => '17953',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Moscow',
	'title_category' => 'bishop',
	'region' => '197',
	'place' => '785',
	'quarter' => '17954',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sergiev',
	'title_category' => 'priest',
	'region' => '197',
	'place' => '786',
	'quarter' => '17955',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zvenigorod',
	'title_category' => 'priest',
	'region' => '197',
	'place' => '787',
	'quarter' => '17956',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Simonov',
	'title_category' => 'priest',
	'region' => '197',
	'place' => '788',
	'quarter' => '17957',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pleskov',
	'title_category' => 'bishop',
	'region' => '198',
	'place' => '789',
	'quarter' => '17958',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porkhov',
	'title_category' => 'priest',
	'region' => '198',
	'place' => '790',
	'quarter' => '17959',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ostrov',
	'title_category' => 'priest',
	'region' => '198',
	'place' => '791',
	'quarter' => '17960',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gdov',
	'title_category' => 'priest',
	'region' => '198',
	'place' => '792',
	'quarter' => '17961',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novgorod',
	'title_category' => 'archbishop',
	'region' => '199',
	'place' => '793',
	'quarter' => '17962',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rusa',
	'title_category' => 'priest',
	'region' => '199',
	'place' => '794',
	'quarter' => '17963',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ladoga',
	'title_category' => 'priest',
	'region' => '199',
	'place' => '795',
	'quarter' => '17964',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Schlisselburg',
	'title_category' => 'priest',
	'region' => '199',
	'place' => '796',
	'quarter' => '17965',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bolgar',
	'title_category' => 'priest',
	'region' => '200',
	'place' => '797',
	'quarter' => '17966',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilyar',
	'title_category' => 'priest',
	'region' => '200',
	'place' => '798',
	'quarter' => '17967',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kazan',
	'title_category' => 'priest',
	'region' => '200',
	'place' => '799',
	'quarter' => '17968',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ufa',
	'title_category' => 'priest',
	'region' => '200',
	'place' => '800',
	'quarter' => '17969',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vladimir',
	'title_category' => 'bishop',
	'region' => '201',
	'place' => '801',
	'quarter' => '17970',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vyazniki',
	'title_category' => 'priest',
	'region' => '201',
	'place' => '802',
	'quarter' => '17971',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Suzdal',
	'title_category' => 'bishop',
	'region' => '201',
	'place' => '803',
	'quarter' => '17972',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nizhny',
	'title_category' => 'priest',
	'region' => '201',
	'place' => '804',
	'quarter' => '17973',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vologda',
	'title_category' => 'bishop',
	'region' => '202',
	'place' => '805',
	'quarter' => '17974',
	'religion' => '3',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rybinsk',
	'title_category' => 'priest',
	'region' => '202',
	'place' => '806',
	'quarter' => '17975',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cherepovets',
	'title_category' => 'priest',
	'region' => '202',
	'place' => '807',
	'quarter' => '17976',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirillov',
	'title_category' => 'priest',
	'region' => '202',
	'place' => '808',
	'quarter' => '17977',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oryol',
	'title_category' => 'priest',
	'region' => '203',
	'place' => '809',
	'quarter' => '17978',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Novosil',
	'title_category' => 'priest',
	'region' => '203',
	'place' => '810',
	'quarter' => '17979',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kromy',
	'title_category' => 'priest',
	'region' => '203',
	'place' => '811',
	'quarter' => '17980',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lipetsk',
	'title_category' => 'priest',
	'region' => '203',
	'place' => '812',
	'quarter' => '17981',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sevsk',
	'title_category' => 'priest',
	'region' => '204',
	'place' => '813',
	'quarter' => '17982',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rylsk',
	'title_category' => 'priest',
	'region' => '204',
	'place' => '814',
	'quarter' => '17983',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kursk',
	'title_category' => 'priest',
	'region' => '204',
	'place' => '815',
	'quarter' => '17984',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Olgov',
	'title_category' => 'priest',
	'region' => '204',
	'place' => '816',
	'quarter' => '17985',
	'religion' => '3',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Atil',
	'title_category' => 'priest',
	'region' => '205',
	'place' => '817',
	'quarter' => '17986',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraibatu',
	'title_category' => 'priest',
	'region' => '205',
	'place' => '818',
	'quarter' => '17987',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraiberke',
	'title_category' => 'priest',
	'region' => '205',
	'place' => '819',
	'quarter' => '17988',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khumar',
	'title_category' => 'priest',
	'region' => '205',
	'place' => '820',
	'quarter' => '17989',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gurganj',
	'title_category' => 'priest',
	'region' => '206',
	'place' => '821',
	'quarter' => '17990',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khiva',
	'title_category' => 'priest',
	'region' => '206',
	'place' => '822',
	'quarter' => '17991',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saraidzhuk',
	'title_category' => 'priest',
	'region' => '206',
	'place' => '823',
	'quarter' => '17992',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mishrian',
	'title_category' => 'bishop',
	'region' => '206',
	'place' => '824',
	'quarter' => '17993',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constantinople',
	'title_category' => 'priest',
	'region' => '207',
	'place' => '825',
	'quarter' => '17994',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redosto',
	'title_category' => 'priest',
	'region' => '207',
	'place' => '826',
	'quarter' => '17995',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edirne',
	'title_category' => 'priest',
	'region' => '207',
	'place' => '827',
	'quarter' => '17996',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corlu',
	'title_category' => 'bishop',
	'region' => '207',
	'place' => '828',
	'quarter' => '17997',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thessaloniki',
	'title_category' => 'priest',
	'region' => '208',
	'place' => '829',
	'quarter' => '17998',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stratonicea',
	'title_category' => 'priest',
	'region' => '208',
	'place' => '830',
	'quarter' => '17999',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Melnik',
	'title_category' => 'archbishop',
	'region' => '208',
	'place' => '831',
	'quarter' => '18000',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hilandar',
	'title_category' => 'priest',
	'region' => '208',
	'place' => '832',
	'quarter' => '18001',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Athens',
	'title_category' => 'archbishop',
	'region' => '209',
	'place' => '833',
	'quarter' => '18002',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lamia',
	'title_category' => 'priest',
	'region' => '209',
	'place' => '834',
	'quarter' => '18003',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thebes',
	'title_category' => 'priest',
	'region' => '209',
	'place' => '835',
	'quarter' => '18004',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Larissa',
	'title_category' => 'bishop',
	'region' => '209',
	'place' => '836',
	'quarter' => '18005',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mystras',
	'title_category' => 'priest',
	'region' => '210',
	'place' => '837',
	'quarter' => '18006',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modon',
	'title_category' => 'bishop',
	'region' => '210',
	'place' => '838',
	'quarter' => '18007',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corinth',
	'title_category' => 'priest',
	'region' => '210',
	'place' => '839',
	'quarter' => '18008',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Glarentza',
	'title_category' => 'priest',
	'region' => '210',
	'place' => '840',
	'quarter' => '18009',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arta',
	'title_category' => 'bishop',
	'region' => '211',
	'place' => '841',
	'quarter' => '18010',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gardiki',
	'title_category' => 'priest',
	'region' => '211',
	'place' => '842',
	'quarter' => '18011',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ioannina',
	'title_category' => 'archbishop',
	'region' => '211',
	'place' => '843',
	'quarter' => '18012',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amfissa',
	'title_category' => 'priest',
	'region' => '211',
	'place' => '844',
	'quarter' => '18013',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kruja',
	'title_category' => 'priest',
	'region' => '212',
	'place' => '845',
	'quarter' => '18014',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Durres',
	'title_category' => 'archbishop',
	'region' => '212',
	'place' => '846',
	'quarter' => '18015',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ohrid',
	'title_category' => 'archbishop',
	'region' => '212',
	'place' => '847',
	'quarter' => '18016',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Jovan',
	'title_category' => 'priest',
	'region' => '212',
	'place' => '848',
	'quarter' => '18017',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastoria',
	'title_category' => 'priest',
	'region' => '213',
	'place' => '849',
	'quarter' => '18018',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bitola',
	'title_category' => 'priest',
	'region' => '213',
	'place' => '850',
	'quarter' => '18019',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Prilep',
	'title_category' => 'priest',
	'region' => '213',
	'place' => '851',
	'quarter' => '18020',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berat',
	'title_category' => 'priest',
	'region' => '213',
	'place' => '852',
	'quarter' => '18021',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Iraklion',
	'title_category' => 'archbishop',
	'region' => '214',
	'place' => '853',
	'quarter' => '18022',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lemnos',
	'title_category' => 'priest',
	'region' => '214',
	'place' => '854',
	'quarter' => '18023',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chania',
	'title_category' => 'priest',
	'region' => '214',
	'place' => '855',
	'quarter' => '18024',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patros',
	'title_category' => 'priest',
	'region' => '214',
	'place' => '856',
	'quarter' => '18025',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smyrna',
	'title_category' => 'bishop',
	'region' => '215',
	'place' => '857',
	'quarter' => '18026',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samos',
	'title_category' => 'priest',
	'region' => '215',
	'place' => '858',
	'quarter' => '18027',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chios',
	'title_category' => 'priest',
	'region' => '215',
	'place' => '859',
	'quarter' => '18028',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patmos',
	'title_category' => 'priest',
	'region' => '215',
	'place' => '860',
	'quarter' => '18029',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tralles',
	'title_category' => 'bishop',
	'region' => '216',
	'place' => '861',
	'quarter' => '18030',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Miletus',
	'title_category' => 'archbishop',
	'region' => '216',
	'place' => '862',
	'quarter' => '18031',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Efese',
	'title_category' => 'archbishop',
	'region' => '216',
	'place' => '863',
	'quarter' => '18032',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sardes',
	'title_category' => 'bishop',
	'region' => '216',
	'place' => '864',
	'quarter' => '18033',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicaea',
	'title_category' => 'archbishop',
	'region' => '217',
	'place' => '865',
	'quarter' => '18034',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kios',
	'title_category' => 'archbishop',
	'region' => '217',
	'place' => '866',
	'quarter' => '18035',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bursa',
	'title_category' => 'priest',
	'region' => '217',
	'place' => '867',
	'quarter' => '18036',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pergamum',
	'title_category' => 'archbishop',
	'region' => '217',
	'place' => '868',
	'quarter' => '18037',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ikonion',
	'title_category' => 'archbishop',
	'region' => '218',
	'place' => '869',
	'quarter' => '18038',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mistheia',
	'title_category' => 'bishop',
	'region' => '218',
	'place' => '870',
	'quarter' => '18039',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Laranda',
	'title_category' => 'bishop',
	'region' => '218',
	'place' => '871',
	'quarter' => '18040',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ousakeion',
	'title_category' => 'priest',
	'region' => '218',
	'place' => '872',
	'quarter' => '18041',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coracesium',
	'title_category' => 'bishop',
	'region' => '219',
	'place' => '873',
	'quarter' => '18042',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhodos',
	'title_category' => 'archbishop',
	'region' => '219',
	'place' => '874',
	'quarter' => '18043',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Attalia',
	'title_category' => 'bishop',
	'region' => '219',
	'place' => '875',
	'quarter' => '18044',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Makre',
	'title_category' => 'priest',
	'region' => '219',
	'place' => '876',
	'quarter' => '18045',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancyra',
	'title_category' => 'archbishop',
	'region' => '220',
	'place' => '877',
	'quarter' => '18046',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gordion',
	'title_category' => 'priest',
	'region' => '220',
	'place' => '878',
	'quarter' => '18047',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cotyaeum',
	'title_category' => 'bishop',
	'region' => '220',
	'place' => '879',
	'quarter' => '18048',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dorylaeum',
	'title_category' => 'bishop',
	'region' => '220',
	'place' => '880',
	'quarter' => '18049',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sinope',
	'title_category' => 'bishop',
	'region' => '221',
	'place' => '881',
	'quarter' => '18050',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kastamuni',
	'title_category' => 'priest',
	'region' => '221',
	'place' => '882',
	'quarter' => '18051',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasra',
	'title_category' => 'priest',
	'region' => '221',
	'place' => '883',
	'quarter' => '18052',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Claudiopolis',
	'title_category' => 'bishop',
	'region' => '221',
	'place' => '884',
	'quarter' => '18053',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarsus',
	'title_category' => 'archbishop',
	'region' => '222',
	'place' => '885',
	'quarter' => '18054',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Adana',
	'title_category' => 'priest',
	'region' => '222',
	'place' => '886',
	'quarter' => '18055',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nicosia',
	'title_category' => 'archbishop',
	'region' => '222',
	'place' => '887',
	'quarter' => '18056',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limasol',
	'title_category' => 'priest',
	'region' => '222',
	'place' => '888',
	'quarter' => '18057',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caesarea',
	'title_category' => 'bishop',
	'region' => '223',
	'place' => '889',
	'quarter' => '18058',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Garsaura',
	'title_category' => 'bishop',
	'region' => '223',
	'place' => '890',
	'quarter' => '18059',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Magida',
	'title_category' => 'priest',
	'region' => '223',
	'place' => '891',
	'quarter' => '18060',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Muskara',
	'title_category' => 'priest',
	'region' => '223',
	'place' => '892',
	'quarter' => '18061',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebizond',
	'title_category' => 'archbishop',
	'region' => '224',
	'place' => '893',
	'quarter' => '18062',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bayberdon',
	'title_category' => 'priest',
	'region' => '224',
	'place' => '894',
	'quarter' => '18063',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riza',
	'title_category' => 'priest',
	'region' => '224',
	'place' => '895',
	'quarter' => '18064',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerasous',
	'title_category' => 'bishop',
	'region' => '224',
	'place' => '896',
	'quarter' => '18065',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edessa',
	'title_category' => 'bishop',
	'region' => '225',
	'place' => '897',
	'quarter' => '18066',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Semsur',
	'title_category' => 'priest',
	'region' => '225',
	'place' => '898',
	'quarter' => '18067',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amouda',
	'title_category' => 'priest',
	'region' => '225',
	'place' => '899',
	'quarter' => '18068',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antep',
	'title_category' => 'priest',
	'region' => '225',
	'place' => '900',
	'quarter' => '18069',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasia',
	'title_category' => 'archbishop',
	'region' => '226',
	'place' => '901',
	'quarter' => '18070',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samsun',
	'title_category' => 'bishop',
	'region' => '226',
	'place' => '902',
	'quarter' => '18071',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Corum',
	'title_category' => 'bishop',
	'region' => '226',
	'place' => '903',
	'quarter' => '18072',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Takat',
	'title_category' => 'priest',
	'region' => '226',
	'place' => '904',
	'quarter' => '18073',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Diyarbakir',
	'title_category' => 'bishop',
	'region' => '227',
	'place' => '905',
	'quarter' => '18074',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Harput',
	'title_category' => 'priest',
	'region' => '227',
	'place' => '906',
	'quarter' => '18075',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erzincan',
	'title_category' => 'archbishop',
	'region' => '227',
	'place' => '907',
	'quarter' => '18076',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Romanoupolis',
	'title_category' => 'priest',
	'region' => '227',
	'place' => '908',
	'quarter' => '18077',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sivas',
	'title_category' => 'priest',
	'region' => '228',
	'place' => '909',
	'quarter' => '18078',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Divrigi',
	'title_category' => 'priest',
	'region' => '228',
	'place' => '910',
	'quarter' => '18079',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Albistan',
	'title_category' => 'priest',
	'region' => '228',
	'place' => '911',
	'quarter' => '18080',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tavium',
	'title_category' => 'bishop',
	'region' => '228',
	'place' => '912',
	'quarter' => '18081',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Batumi',
	'title_category' => 'priest',
	'region' => '229',
	'place' => '913',
	'quarter' => '18082',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poti',
	'title_category' => 'priest',
	'region' => '229',
	'place' => '914',
	'quarter' => '18083',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pitsunda',
	'title_category' => 'archbishop',
	'region' => '229',
	'place' => '915',
	'quarter' => '18084',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kutais',
	'title_category' => 'priest',
	'region' => '229',
	'place' => '916',
	'quarter' => '18085',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tiflis',
	'title_category' => 'archbishop',
	'region' => '230',
	'place' => '917',
	'quarter' => '18086',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Surami',
	'title_category' => 'priest',
	'region' => '230',
	'place' => '918',
	'quarter' => '18087',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gori',
	'title_category' => 'priest',
	'region' => '230',
	'place' => '919',
	'quarter' => '18088',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Akhalkalaki',
	'title_category' => 'priest',
	'region' => '230',
	'place' => '920',
	'quarter' => '18089',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derbent',
	'title_category' => 'priest',
	'region' => '231',
	'place' => '921',
	'quarter' => '18090',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baku',
	'title_category' => 'priest',
	'region' => '231',
	'place' => '922',
	'quarter' => '18091',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mingecevir',
	'title_category' => 'priest',
	'region' => '231',
	'place' => '923',
	'quarter' => '18092',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Balanjar',
	'title_category' => 'priest',
	'region' => '231',
	'place' => '924',
	'quarter' => '18093',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ani',
	'title_category' => 'bishop',
	'region' => '232',
	'place' => '925',
	'quarter' => '18094',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yerevan',
	'title_category' => 'priest',
	'region' => '232',
	'place' => '926',
	'quarter' => '18095',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghars',
	'title_category' => 'bishop',
	'region' => '232',
	'place' => '927',
	'quarter' => '18096',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirants',
	'title_category' => 'priest',
	'region' => '232',
	'place' => '928',
	'quarter' => '18097',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nakhichevan',
	'title_category' => 'priest',
	'region' => '233',
	'place' => '929',
	'quarter' => '18098',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Khoy',
	'title_category' => 'priest',
	'region' => '233',
	'place' => '930',
	'quarter' => '18099',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ordubad',
	'title_category' => 'priest',
	'region' => '233',
	'place' => '931',
	'quarter' => '18100',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghaberd',
	'title_category' => 'priest',
	'region' => '233',
	'place' => '932',
	'quarter' => '18101',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tatvan',
	'title_category' => 'priest',
	'region' => '234',
	'place' => '933',
	'quarter' => '18102',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manzikert',
	'title_category' => 'priest',
	'region' => '234',
	'place' => '934',
	'quarter' => '18103',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bitlis',
	'title_category' => 'priest',
	'region' => '234',
	'place' => '935',
	'quarter' => '18104',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Arakelots',
	'title_category' => 'priest',
	'region' => '234',
	'place' => '936',
	'quarter' => '18105',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mardin',
	'title_category' => 'bishop',
	'region' => '235',
	'place' => '937',
	'quarter' => '18106',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saird',
	'title_category' => 'priest',
	'region' => '235',
	'place' => '938',
	'quarter' => '18107',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cepha',
	'title_category' => 'bishop',
	'region' => '235',
	'place' => '939',
	'quarter' => '18108',
	'religion' => '4',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nisibis',
	'title_category' => 'priest',
	'region' => '235',
	'place' => '940',
	'quarter' => '18109',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Van',
	'title_category' => 'priest',
	'region' => '236',
	'place' => '941',
	'quarter' => '18110',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Berkri',
	'title_category' => 'priest',
	'region' => '236',
	'place' => '942',
	'quarter' => '18111',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Archesh',
	'title_category' => 'priest',
	'region' => '236',
	'place' => '943',
	'quarter' => '18112',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ostan',
	'title_category' => 'priest',
	'region' => '236',
	'place' => '944',
	'quarter' => '18113',
	'religion' => '4',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nishapur',
	'title_category' => 'priest',
	'region' => '237',
	'place' => '945',
	'quarter' => '18114',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beyhaq',
	'title_category' => 'priest',
	'region' => '237',
	'place' => '946',
	'quarter' => '18115',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mashhad',
	'title_category' => 'bishop',
	'region' => '237',
	'place' => '947',
	'quarter' => '18116',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Konjikala',
	'title_category' => 'priest',
	'region' => '237',
	'place' => '948',
	'quarter' => '18117',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashmar',
	'title_category' => 'priest',
	'region' => '238',
	'place' => '949',
	'quarter' => '18118',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gonabad',
	'title_category' => 'priest',
	'region' => '238',
	'place' => '950',
	'quarter' => '18119',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabas',
	'title_category' => 'priest',
	'region' => '238',
	'place' => '951',
	'quarter' => '18120',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Birjand',
	'title_category' => 'priest',
	'region' => '238',
	'place' => '952',
	'quarter' => '18121',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerman',
	'title_category' => 'priest',
	'region' => '239',
	'place' => '953',
	'quarter' => '18122',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bam',
	'title_category' => 'priest',
	'region' => '239',
	'place' => '954',
	'quarter' => '18123',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rafsanjan',
	'title_category' => 'priest',
	'region' => '239',
	'place' => '955',
	'quarter' => '18124',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sirjan',
	'title_category' => 'priest',
	'region' => '239',
	'place' => '956',
	'quarter' => '18125',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Shiraz',
	'title_category' => 'priest',
	'region' => '240',
	'place' => '957',
	'quarter' => '18126',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bushire',
	'title_category' => 'bishop',
	'region' => '240',
	'place' => '958',
	'quarter' => '18127',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hormuz',
	'title_category' => 'priest',
	'region' => '240',
	'place' => '959',
	'quarter' => '18128',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yasuj',
	'title_category' => 'priest',
	'region' => '240',
	'place' => '960',
	'quarter' => '18129',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Isfahan',
	'title_category' => 'bishop',
	'region' => '241',
	'place' => '961',
	'quarter' => '18130',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dezgord',
	'title_category' => 'priest',
	'region' => '241',
	'place' => '962',
	'quarter' => '18131',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Yazd',
	'title_category' => 'priest',
	'region' => '241',
	'place' => '963',
	'quarter' => '18132',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zavareh',
	'title_category' => 'priest',
	'region' => '241',
	'place' => '964',
	'quarter' => '18133',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhages',
	'title_category' => 'priest',
	'region' => '242',
	'place' => '965',
	'quarter' => '18134',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kashan',
	'title_category' => 'priest',
	'region' => '242',
	'place' => '966',
	'quarter' => '18135',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ghom',
	'title_category' => 'bishop',
	'region' => '242',
	'place' => '967',
	'quarter' => '18136',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qazvin',
	'title_category' => 'priest',
	'region' => '242',
	'place' => '968',
	'quarter' => '18137',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Astarabad',
	'title_category' => 'priest',
	'region' => '243',
	'place' => '969',
	'quarter' => '18138',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alamut',
	'title_category' => 'priest',
	'region' => '243',
	'place' => '970',
	'quarter' => '18139',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amol',
	'title_category' => 'priest',
	'region' => '243',
	'place' => '971',
	'quarter' => '18140',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rasht',
	'title_category' => 'priest',
	'region' => '243',
	'place' => '972',
	'quarter' => '18141',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tabriz',
	'title_category' => 'priest',
	'region' => '244',
	'place' => '973',
	'quarter' => '18142',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sofian',
	'title_category' => 'priest',
	'region' => '244',
	'place' => '974',
	'quarter' => '18143',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zanjan',
	'title_category' => 'priest',
	'region' => '244',
	'place' => '975',
	'quarter' => '18144',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ardabil',
	'title_category' => 'priest',
	'region' => '244',
	'place' => '976',
	'quarter' => '18145',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamadan',
	'title_category' => 'priest',
	'region' => '245',
	'place' => '977',
	'quarter' => '18146',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kermanshah',
	'title_category' => 'priest',
	'region' => '245',
	'place' => '978',
	'quarter' => '18147',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Falak',
	'title_category' => 'priest',
	'region' => '245',
	'place' => '979',
	'quarter' => '18148',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bukan',
	'title_category' => 'priest',
	'region' => '245',
	'place' => '980',
	'quarter' => '18149',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hajr',
	'title_category' => 'priest',
	'region' => '246',
	'place' => '981',
	'quarter' => '18150',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Buraidah',
	'title_category' => 'priest',
	'region' => '246',
	'place' => '982',
	'quarter' => '18151',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hadjar',
	'title_category' => 'priest',
	'region' => '246',
	'place' => '983',
	'quarter' => '18152',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hail',
	'title_category' => 'priest',
	'region' => '246',
	'place' => '984',
	'quarter' => '18153',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mecca',
	'title_category' => 'archbishop',
	'region' => '247',
	'place' => '985',
	'quarter' => '18154',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taif',
	'title_category' => 'priest',
	'region' => '247',
	'place' => '986',
	'quarter' => '18155',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jeddah',
	'title_category' => 'priest',
	'region' => '247',
	'place' => '987',
	'quarter' => '18156',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Medina',
	'title_category' => 'archbishop',
	'region' => '247',
	'place' => '988',
	'quarter' => '18157',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dedan',
	'title_category' => 'priest',
	'region' => '248',
	'place' => '989',
	'quarter' => '18158',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eilat',
	'title_category' => 'priest',
	'region' => '248',
	'place' => '990',
	'quarter' => '18159',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tayma',
	'title_category' => 'priest',
	'region' => '248',
	'place' => '991',
	'quarter' => '18160',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Maan',
	'title_category' => 'priest',
	'region' => '248',
	'place' => '992',
	'quarter' => '18161',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jerusalem',
	'title_category' => 'priest',
	'region' => '249',
	'place' => '993',
	'quarter' => '18162',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ascalon',
	'title_category' => 'priest',
	'region' => '249',
	'place' => '994',
	'quarter' => '18163',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hebron',
	'title_category' => 'priest',
	'region' => '249',
	'place' => '995',
	'quarter' => '18164',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jaffa',
	'title_category' => 'priest',
	'region' => '249',
	'place' => '996',
	'quarter' => '18165',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Acre',
	'title_category' => 'priest',
	'region' => '250',
	'place' => '997',
	'quarter' => '18166',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nazareth',
	'title_category' => 'archbishop',
	'region' => '250',
	'place' => '998',
	'quarter' => '18167',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nablus',
	'title_category' => 'priest',
	'region' => '250',
	'place' => '999',
	'quarter' => '18168',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyre',
	'title_category' => 'priest',
	'region' => '250',
	'place' => '1000',
	'quarter' => '18169',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosra',
	'title_category' => 'bishop',
	'region' => '251',
	'place' => '1001',
	'quarter' => '18170',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amman',
	'title_category' => 'priest',
	'region' => '251',
	'place' => '1002',
	'quarter' => '18171',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Irbid',
	'title_category' => 'priest',
	'region' => '251',
	'place' => '1003',
	'quarter' => '18172',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salkhad',
	'title_category' => 'priest',
	'region' => '251',
	'place' => '1004',
	'quarter' => '18173',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damascus',
	'title_category' => 'archbishop',
	'region' => '252',
	'place' => '1005',
	'quarter' => '18174',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kasr al Gharbi',
	'title_category' => 'priest',
	'region' => '252',
	'place' => '1006',
	'quarter' => '18175',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palmyra',
	'title_category' => 'priest',
	'region' => '252',
	'place' => '1007',
	'quarter' => '18176',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nabek',
	'title_category' => 'priest',
	'region' => '252',
	'place' => '1008',
	'quarter' => '18177',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Homs',
	'title_category' => 'priest',
	'region' => '253',
	'place' => '1009',
	'quarter' => '18178',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Qusayr',
	'title_category' => 'priest',
	'region' => '253',
	'place' => '1010',
	'quarter' => '18179',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Salamiyah',
	'title_category' => 'bishop',
	'region' => '253',
	'place' => '1011',
	'quarter' => '18180',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hama',
	'title_category' => 'priest',
	'region' => '253',
	'place' => '1012',
	'quarter' => '18181',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'priest',
	'region' => '254',
	'place' => '1013',
	'quarter' => '18182',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tartous',
	'title_category' => 'bishop',
	'region' => '254',
	'place' => '1014',
	'quarter' => '18183',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beirut',
	'title_category' => 'bishop',
	'region' => '254',
	'place' => '1015',
	'quarter' => '18184',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Margat',
	'title_category' => 'priest',
	'region' => '254',
	'place' => '1016',
	'quarter' => '18185',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antioch',
	'title_category' => 'priest',
	'region' => '255',
	'place' => '1017',
	'quarter' => '18186',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandretta',
	'title_category' => 'bishop',
	'region' => '255',
	'place' => '1018',
	'quarter' => '18187',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Idlib',
	'title_category' => 'priest',
	'region' => '255',
	'place' => '1019',
	'quarter' => '18188',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Afrin',
	'title_category' => 'priest',
	'region' => '255',
	'place' => '1020',
	'quarter' => '18189',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleppo',
	'title_category' => 'archbishop',
	'region' => '256',
	'place' => '1021',
	'quarter' => '18190',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Manbij',
	'title_category' => 'priest',
	'region' => '256',
	'place' => '1022',
	'quarter' => '18191',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bab',
	'title_category' => 'priest',
	'region' => '256',
	'place' => '1023',
	'quarter' => '18192',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Safira',
	'title_category' => 'priest',
	'region' => '256',
	'place' => '1024',
	'quarter' => '18193',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Raqqa',
	'title_category' => 'bishop',
	'region' => '257',
	'place' => '1025',
	'quarter' => '18194',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jabar',
	'title_category' => 'priest',
	'region' => '257',
	'place' => '1026',
	'quarter' => '18195',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhesaina',
	'title_category' => 'bishop',
	'region' => '257',
	'place' => '1027',
	'quarter' => '18196',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zor',
	'title_category' => 'priest',
	'region' => '257',
	'place' => '1028',
	'quarter' => '18197',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Erbil',
	'title_category' => 'bishop',
	'region' => '258',
	'place' => '1029',
	'quarter' => '18198',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mosul',
	'title_category' => 'priest',
	'region' => '258',
	'place' => '1030',
	'quarter' => '18199',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkuk',
	'title_category' => 'priest',
	'region' => '258',
	'place' => '1031',
	'quarter' => '18200',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Telafer',
	'title_category' => 'priest',
	'region' => '258',
	'place' => '1032',
	'quarter' => '18201',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Baghdad',
	'title_category' => 'archbishop',
	'region' => '259',
	'place' => '1033',
	'quarter' => '18202',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tikrit',
	'title_category' => 'bishop',
	'region' => '259',
	'place' => '1034',
	'quarter' => '18203',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Anbar',
	'title_category' => 'bishop',
	'region' => '259',
	'place' => '1035',
	'quarter' => '18204',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samarra',
	'title_category' => 'priest',
	'region' => '259',
	'place' => '1036',
	'quarter' => '18205',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samawah',
	'title_category' => 'priest',
	'region' => '260',
	'place' => '1037',
	'quarter' => '18206',
	'religion' => '5',
	'rank' => '3',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Karbala',
	'title_category' => 'bishop',
	'region' => '260',
	'place' => '1038',
	'quarter' => '18207',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kufah',
	'title_category' => 'bishop',
	'region' => '260',
	'place' => '1039',
	'quarter' => '18208',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Najaf',
	'title_category' => 'bishop',
	'region' => '260',
	'place' => '1040',
	'quarter' => '18209',
	'religion' => '5',
	'rank' => '5',
	'career' => 'fixed_eclessiastical'
	]);
		
		
    }
}
