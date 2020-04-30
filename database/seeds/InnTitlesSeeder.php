<?php

use Illuminate\Database\Seeder;

class InnTitlesSeeder extends Seeder
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

//hostlers, innkeepers, publicans		
DB::table('titles')->insert([
 'title_name' => '[hostler] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Corvey',
 'region' => '1',
 'place' => '4',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dresden',
 'region' => '2',
 'place' => '6',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Chemnitz',
 'region' => '2',
 'place' => '8',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Magdeburg',
 'region' => '3',
 'place' => '9',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gernrode',
 'region' => '3',
 'place' => '12',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Schwerin',
 'region' => '4',
 'place' => '13',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Broda',
 'region' => '4',
 'place' => '16',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Salzwedel',
 'region' => '5',
 'place' => '18',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Havelberg',
 'region' => '5',
 'place' => '19',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Lindow',
 'region' => '5',
 'place' => '20',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kolberg',
 'region' => '6',
 'place' => '23',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Osnabruck',
 'region' => '7',
 'place' => '27',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Paderborn',
 'region' => '7',
 'place' => '28',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Augsburg',
 'region' => '8',
 'place' => '30',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Nuremberg',
 'region' => '8',
 'place' => '32',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Salzburg',
 'region' => '9',
 'place' => '33',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hallstat',
 'region' => '9',
 'place' => '35',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Berchtesgaden',
 'region' => '9',
 'place' => '36',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sankt Polten',
 'region' => '10',
 'place' => '39',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Graz',
 'region' => '11',
 'place' => '41',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Styraburg',
 'region' => '11',
 'place' => '43',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Seckau',
 'region' => '11',
 'place' => '44',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bozen',
 'region' => '12',
 'place' => '46',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Trent',
 'region' => '12',
 'place' => '47',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Brixen',
 'region' => '12',
 'place' => '48',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zurich',
 'region' => '14',
 'place' => '54',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sankt Gallen',
 'region' => '14',
 'place' => '56',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Colmar',
 'region' => '15',
 'place' => '58',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Strassbourg',
 'region' => '15',
 'place' => '59',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Wissembourg',
 'region' => '15',
 'place' => '60',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Karlstein',
 'region' => '16',
 'place' => '62',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Pilsen',
 'region' => '16',
 'place' => '63',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Plass',
 'region' => '16',
 'place' => '64',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Olmutz',
 'region' => '17',
 'place' => '67',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Trebitz',
 'region' => '17',
 'place' => '68',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Fulda',
 'region' => '18',
 'place' => '72',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Liege',
 'region' => '19',
 'place' => '75',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Stavelot',
 'region' => '19',
 'place' => '76',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pruem',
 'region' => '20',
 'place' => '80',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Zutphen',
 'region' => '21',
 'place' => '82',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Deventer',
 'region' => '21',
 'place' => '84',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Emden',
 'region' => '23',
 'place' => '90',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Breda',
 'region' => '24',
 'place' => '94',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Antwerp',
 'region' => '24',
 'place' => '95',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Thorn',
 'region' => '24',
 'place' => '96',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ghent',
 'region' => '25',
 'place' => '98',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cambrai',
 'region' => '25',
 'place' => '99',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ypres',
 'region' => '25',
 'place' => '100',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Klagenfurt',
 'region' => '26',
 'place' => '101',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gorizia',
 'region' => '26',
 'place' => '103',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Moosburg',
 'region' => '26',
 'place' => '104',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Krainburg',
 'region' => '27',
 'place' => '105',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Laibach',
 'region' => '27',
 'place' => '107',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sittich',
 'region' => '27',
 'place' => '108',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vannes',
 'region' => '28',
 'place' => '109',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rohan',
 'region' => '28',
 'place' => '110',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Redon',
 'region' => '28',
 'place' => '112',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Meaux',
 'region' => '29',
 'place' => '114',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Chartres',
 'region' => '29',
 'place' => '115',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saint Denis',
 'region' => '29',
 'place' => '116',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Verdun',
 'region' => '30',
 'place' => '119',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Amiens',
 'region' => '31',
 'place' => '121',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Laon',
 'region' => '31',
 'place' => '123',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saint Omer',
 'region' => '31',
 'place' => '124',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Clairvaux',
 'region' => '33',
 'place' => '132',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tours',
 'region' => '35',
 'place' => '137',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Chinon',
 'region' => '35',
 'place' => '139',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mans',
 'region' => '36',
 'place' => '143',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Chatellerault',
 'region' => '37',
 'place' => '146',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nevers',
 'region' => '38',
 'place' => '151',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vezelay',
 'region' => '38',
 'place' => '152',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Moulins',
 'region' => '39',
 'place' => '153',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gueret',
 'region' => '39',
 'place' => '155',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Issoire',
 'region' => '40',
 'place' => '160',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Saint Benoit',
 'region' => '42',
 'place' => '168',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Auch',
 'region' => '43',
 'place' => '171',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Montauban',
 'region' => '43',
 'place' => '172',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Angouleme',
 'region' => '44',
 'place' => '173',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tulle',
 'region' => '44',
 'place' => '176',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vienne',
 'region' => '45',
 'place' => '178',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Autun',
 'region' => '45',
 'place' => '180',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Citeaux',
 'region' => '46',
 'place' => '184',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of London',
 'region' => '47',
 'place' => '185',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Guildford',
 'region' => '47',
 'place' => '187',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ashford',
 'region' => '48',
 'place' => '191',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Maidstone',
 'region' => '48',
 'place' => '192',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Winchester',
 'region' => '49',
 'place' => '193',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Wells',
 'region' => '49',
 'place' => '195',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Wimborne',
 'region' => '49',
 'place' => '196',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Truro',
 'region' => '50',
 'place' => '197',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bodmin',
 'region' => '50',
 'place' => '198',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Saint German',
 'region' => '50',
 'place' => '199',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Madron',
 'region' => '50',
 'place' => '200',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ipswich',
 'region' => '51',
 'place' => '202',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Croxton',
 'region' => '51',
 'place' => '204',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of York',
 'region' => '52',
 'place' => '205',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Durham',
 'region' => '52',
 'place' => '206',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Scarborough',
 'region' => '52',
 'place' => '207',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lancaster',
 'region' => '52',
 'place' => '208',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Worcester',
 'region' => '53',
 'place' => '209',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cirencester',
 'region' => '53',
 'place' => '212',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Saint Albans',
 'region' => '54',
 'place' => '216',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Leicester',
 'region' => '55',
 'place' => '220',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Lincoln',
 'region' => '56',
 'place' => '221',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Stamford',
 'region' => '56',
 'place' => '224',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bangor',
 'region' => '57',
 'place' => '227',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Shrewsbury',
 'region' => '58',
 'place' => '230',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Glasbury',
 'region' => '58',
 'place' => '231',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Llanllugan',
 'region' => '58',
 'place' => '232',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tonsborg',
 'region' => '60',
 'place' => '238',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hamar',
 'region' => '60',
 'place' => '239',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gimsoy',
 'region' => '60',
 'place' => '240',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Holm',
 'region' => '61',
 'place' => '242',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Halsnoy',
 'region' => '61',
 'place' => '244',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Esrum',
 'region' => '62',
 'place' => '248',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Halmstad',
 'region' => '63',
 'place' => '251',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Herrevad',
 'region' => '63',
 'place' => '252',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Essenbaek',
 'region' => '64',
 'place' => '256',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Eskilstuna',
 'region' => '65',
 'place' => '260',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Visby',
 'region' => '66',
 'place' => '261',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nydala',
 'region' => '66',
 'place' => '264',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Jonkoping',
 'region' => '67',
 'place' => '267',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vadstena',
 'region' => '67',
 'place' => '268',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pilten',
 'region' => '69',
 'place' => '273',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Koningsberg',
 'region' => '70',
 'place' => '280',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dunbar',
 'region' => '73',
 'place' => '291',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Haddington',
 'region' => '73',
 'place' => '292',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Jedburgh',
 'region' => '74',
 'place' => '296',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kilmarnock',
 'region' => '75',
 'place' => '298',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ayr',
 'region' => '75',
 'place' => '300',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Carlisle',
 'region' => '76',
 'place' => '301',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kirkcudbright',
 'region' => '76',
 'place' => '304',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dunaverty',
 'region' => '77',
 'place' => '307',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Perth',
 'region' => '78',
 'place' => '309',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Stirling',
 'region' => '78',
 'place' => '310',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dunfermline',
 'region' => '78',
 'place' => '312',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Elgin',
 'region' => '79',
 'place' => '313',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nairn',
 'region' => '79',
 'place' => '314',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Scone',
 'region' => '80',
 'place' => '319',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Arbroath',
 'region' => '80',
 'place' => '320',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Rosemarkie',
 'region' => '81',
 'place' => '323',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Dornoch',
 'region' => '81',
 'place' => '324',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Millmount',
 'region' => '82',
 'place' => '328',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Clogher',
 'region' => '83',
 'place' => '332',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Wexford',
 'region' => '84',
 'place' => '333',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kells',
 'region' => '84',
 'place' => '334',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Durrow',
 'region' => '84',
 'place' => '336',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Leyre',
 'region' => '87',
 'place' => '348',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of San Sebastian',
 'region' => '88',
 'place' => '349',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sobrarbe',
 'region' => '89',
 'place' => '356',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rueda',
 'region' => '90',
 'place' => '360',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sant Feliu de Guixols',
 'region' => '91',
 'place' => '364',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Manresa',
 'region' => '92',
 'place' => '367',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Monserrat',
 'region' => '92',
 'place' => '368',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Serra',
 'region' => '93',
 'place' => '372',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alicante',
 'region' => '94',
 'place' => '375',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gandia',
 'region' => '94',
 'place' => '376',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of San Guillermo',
 'region' => '96',
 'place' => '383',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sahagun',
 'region' => '96',
 'place' => '384',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aviles',
 'region' => '97',
 'place' => '386',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gijon',
 'region' => '97',
 'place' => '387',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Santo Toribio',
 'region' => '97',
 'place' => '388',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Santo Domingo de Silos',
 'region' => '99',
 'place' => '394',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of San Millan',
 'region' => '99',
 'place' => '396',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Coruna',
 'region' => '100',
 'place' => '399',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Santarem',
 'region' => '101',
 'place' => '403',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Alcobaca',
 'region' => '101',
 'place' => '404',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Aveiro',
 'region' => '102',
 'place' => '408',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Verin',
 'region' => '103',
 'place' => '411',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Moura',
 'region' => '105',
 'place' => '419',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Alvor',
 'region' => '106',
 'place' => '423',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Silves',
 'region' => '106',
 'place' => '424',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Huelva',
 'region' => '108',
 'place' => '432',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Talavera',
 'region' => '110',
 'place' => '440',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Antquera',
 'region' => '111',
 'place' => '443',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Motril',
 'region' => '112',
 'place' => '447',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alicante',
 'region' => '113',
 'place' => '451',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Malaga',
 'region' => '114',
 'place' => '453',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Marbella',
 'region' => '114',
 'place' => '455',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ronda',
 'region' => '114',
 'place' => '456',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Milan',
 'region' => '115',
 'place' => '457',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cremona',
 'region' => '115',
 'place' => '460',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Noli',
 'region' => '117',
 'place' => '466',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bobbio',
 'region' => '117',
 'place' => '468',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Chioggia',
 'region' => '118',
 'place' => '471',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Belluno',
 'region' => '118',
 'place' => '472',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cesena',
 'region' => '119',
 'place' => '474',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aquileja',
 'region' => '121',
 'place' => '481',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pordenone',
 'region' => '121',
 'place' => '482',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Udine',
 'region' => '121',
 'place' => '483',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gemona',
 'region' => '121',
 'place' => '484',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ivrea',
 'region' => '122',
 'place' => '486',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pinerollo',
 'region' => '122',
 'place' => '488',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Grosseto',
 'region' => '123',
 'place' => '492',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Spoleto',
 'region' => '124',
 'place' => '493',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Assissi',
 'region' => '124',
 'place' => '496',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tivoli',
 'region' => '125',
 'place' => '499',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Subiaco',
 'region' => '125',
 'place' => '500',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Volterra',
 'region' => '126',
 'place' => '504',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gaeta',
 'region' => '127',
 'place' => '506',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cassino',
 'region' => '127',
 'place' => '508',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cosenza',
 'region' => '129',
 'place' => '513',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vivarium',
 'region' => '129',
 'place' => '516',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Potenza',
 'region' => '130',
 'place' => '519',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Viggiano',
 'region' => '130',
 'place' => '520',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Olbia',
 'region' => '131',
 'place' => '522',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bosa',
 'region' => '131',
 'place' => '523',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Oristano',
 'region' => '132',
 'place' => '526',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dolia',
 'region' => '132',
 'place' => '527',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cefalu',
 'region' => '133',
 'place' => '531',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Marsala',
 'region' => '133',
 'place' => '532',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tangiers',
 'region' => '136',
 'place' => '541',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ceuta',
 'region' => '136',
 'place' => '542',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ouazzane',
 'region' => '136',
 'place' => '543',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tetouan',
 'region' => '136',
 'place' => '544',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Anfa',
 'region' => '137',
 'place' => '545',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Fedala',
 'region' => '137',
 'place' => '548',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sefrou',
 'region' => '138',
 'place' => '550',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ouarzazate',
 'region' => '139',
 'place' => '554',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mogador',
 'region' => '139',
 'place' => '555',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Taroudant',
 'region' => '140',
 'place' => '557',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Agadir',
 'region' => '140',
 'place' => '558',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tindouf',
 'region' => '140',
 'place' => '559',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tinmel',
 'region' => '140',
 'place' => '560',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Figuig',
 'region' => '141',
 'place' => '561',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sijilmassa',
 'region' => '141',
 'place' => '562',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tinghir',
 'region' => '141',
 'place' => '563',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rachidiya',
 'region' => '141',
 'place' => '564',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Oujda',
 'region' => '142',
 'place' => '566',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mellila',
 'region' => '142',
 'place' => '567',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Taourirt',
 'region' => '142',
 'place' => '568',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Oran',
 'region' => '143',
 'place' => '569',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mostaganem',
 'region' => '143',
 'place' => '570',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mascara',
 'region' => '143',
 'place' => '572',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Djelfa',
 'region' => '144',
 'place' => '573',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Laghouat',
 'region' => '144',
 'place' => '574',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghardaia',
 'region' => '144',
 'place' => '575',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Khaled',
 'region' => '145',
 'place' => '577',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Biskra',
 'region' => '145',
 'place' => '578',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ouargla',
 'region' => '145',
 'place' => '579',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Touggourt',
 'region' => '145',
 'place' => '580',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Algiers',
 'region' => '146',
 'place' => '581',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Medea',
 'region' => '146',
 'place' => '582',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Achir',
 'region' => '146',
 'place' => '584',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bejaia',
 'region' => '147',
 'place' => '585',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Jijel',
 'region' => '147',
 'place' => '586',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Setif',
 'region' => '147',
 'place' => '587',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Eulma',
 'region' => '147',
 'place' => '588',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Annaba',
 'region' => '148',
 'place' => '589',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Jendouba',
 'region' => '148',
 'place' => '591',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kaf',
 'region' => '148',
 'place' => '592',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zaghouan',
 'region' => '149',
 'place' => '594',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hammamet',
 'region' => '149',
 'place' => '595',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bizerte',
 'region' => '149',
 'place' => '596',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sousse',
 'region' => '150',
 'place' => '598',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sfax',
 'region' => '150',
 'place' => '599',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mahdia',
 'region' => '150',
 'place' => '600',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gabes',
 'region' => '151',
 'place' => '601',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gafsa',
 'region' => '151',
 'place' => '602',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kebili',
 'region' => '151',
 'place' => '603',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tozeur',
 'region' => '151',
 'place' => '604',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghadames',
 'region' => '152',
 'place' => '605',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tamanrasset',
 'region' => '152',
 'place' => '607',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghat',
 'region' => '152',
 'place' => '608',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tripoli',
 'region' => '153',
 'place' => '609',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Misrata',
 'region' => '153',
 'place' => '611',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zuwara',
 'region' => '153',
 'place' => '612',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Germa',
 'region' => '154',
 'place' => '613',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sabha',
 'region' => '154',
 'place' => '614',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zouila',
 'region' => '154',
 'place' => '615',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Qatrun',
 'region' => '154',
 'place' => '616',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kufra',
 'region' => '155',
 'place' => '617',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Awjila',
 'region' => '155',
 'place' => '619',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Marada',
 'region' => '155',
 'place' => '620',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Benghazi',
 'region' => '156',
 'place' => '621',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Derna',
 'region' => '156',
 'place' => '622',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tobruk',
 'region' => '156',
 'place' => '623',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rosetta',
 'region' => '157',
 'place' => '626',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mansoura',
 'region' => '157',
 'place' => '628',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Helwan',
 'region' => '158',
 'place' => '630',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Fayum',
 'region' => '158',
 'place' => '631',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Natrun',
 'region' => '158',
 'place' => '632',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Minya',
 'region' => '159',
 'place' => '633',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Siwa',
 'region' => '159',
 'place' => '634',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Farafra',
 'region' => '159',
 'place' => '635',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Anba Boula',
 'region' => '159',
 'place' => '636',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Asyut',
 'region' => '160',
 'place' => '637',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kharga',
 'region' => '160',
 'place' => '638',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aswan',
 'region' => '160',
 'place' => '639',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zinaiqa',
 'region' => '160',
 'place' => '640',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Liegnitz',
 'region' => '161',
 'place' => '641',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Glogau',
 'region' => '161',
 'place' => '642',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Leubus',
 'region' => '161',
 'place' => '644',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Teczyn',
 'region' => '162',
 'place' => '646',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tarnau',
 'region' => '162',
 'place' => '647',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Salzberg',
 'region' => '162',
 'place' => '648',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Konin',
 'region' => '163',
 'place' => '651',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kalisz',
 'region' => '163',
 'place' => '652',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Plock',
 'region' => '164',
 'place' => '653',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Leslau',
 'region' => '164',
 'place' => '655',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Radomir',
 'region' => '164',
 'place' => '656',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Brest',
 'region' => '165',
 'place' => '657',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kobryn',
 'region' => '165',
 'place' => '659',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Wolkowysk',
 'region' => '165',
 'place' => '660',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kauen',
 'region' => '166',
 'place' => '663',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rovigno',
 'region' => '167',
 'place' => '666',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vikla',
 'region' => '167',
 'place' => '667',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => '1',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ragusa',
 'region' => '168',
 'place' => '669',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bihac',
 'region' => '169',
 'place' => '674',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Konjic',
 'region' => '169',
 'place' => '675',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kotor',
 'region' => '169',
 'place' => '676',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tyrnau',
 'region' => '170',
 'place' => '678',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nitra',
 'region' => '170',
 'place' => '679',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Egerszeg',
 'region' => '171',
 'place' => '683',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bystrica',
 'region' => '172',
 'place' => '686',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Krupina',
 'region' => '172',
 'place' => '687',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bartfeld',
 'region' => '173',
 'place' => '691',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kassow',
 'region' => '173',
 'place' => '692',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kecskemet',
 'region' => '174',
 'place' => '694',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Debrecen',
 'region' => '174',
 'place' => '695',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => '1',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vukovar',
 'region' => '175',
 'place' => '698',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Carta',
 'region' => '176',
 'place' => '704',
 'religion' => '1',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Targu Jiu',
 'region' => '177',
 'place' => '705',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Curtea Arges',
 'region' => '177',
 'place' => '707',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tismana',
 'region' => '177',
 'place' => '708',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bucharest',
 'region' => '178',
 'place' => '710',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kronstadt',
 'region' => '178',
 'place' => '712',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Constanta',
 'region' => '179',
 'place' => '713',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Harsova',
 'region' => '179',
 'place' => '714',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tulcea',
 'region' => '179',
 'place' => '715',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Calarasi',
 'region' => '179',
 'place' => '716',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Suceava',
 'region' => '180',
 'place' => '717',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Odessa',
 'region' => '180',
 'place' => '719',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Chisinau',
 'region' => '180',
 'place' => '720',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sofia',
 'region' => '181',
 'place' => '721',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Stip',
 'region' => '181',
 'place' => '723',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rila',
 'region' => '181',
 'place' => '724',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gorazde',
 'region' => '183',
 'place' => '729',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => '2',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bukovo',
 'region' => '185',
 'place' => '738',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Krusevac',
 'region' => '185',
 'place' => '739',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zica',
 'region' => '185',
 'place' => '740',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => '2',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pristina',
 'region' => '187',
 'place' => '745',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Pec',
 'region' => '187',
 'place' => '747',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Berane',
 'region' => '187',
 'place' => '748',
 'religion' => '2',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Monastyrski',
 'region' => '188',
 'place' => '749',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Poltava',
 'region' => '188',
 'place' => '751',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Oleshia',
 'region' => '188',
 'place' => '752',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cherkasy',
 'region' => '189',
 'place' => '756',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Borispyl',
 'region' => '190',
 'place' => '758',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Yuriev',
 'region' => '190',
 'place' => '759',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Turov',
 'region' => '192',
 'place' => '765',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Slutsk',
 'region' => '192',
 'place' => '767',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Korosten',
 'region' => '192',
 'place' => '768',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lyubech',
 'region' => '193',
 'place' => '770',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mazyr',
 'region' => '193',
 'place' => '772',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Orsha',
 'region' => '194',
 'place' => '774',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Barysaw',
 'region' => '194',
 'place' => '776',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Smolensk',
 'region' => '195',
 'place' => '777',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vyazma',
 'region' => '195',
 'place' => '779',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ryazan',
 'region' => '196',
 'place' => '781',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kolomna',
 'region' => '196',
 'place' => '782',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kasimov',
 'region' => '196',
 'place' => '783',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tula',
 'region' => '196',
 'place' => '784',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sergiev',
 'region' => '197',
 'place' => '786',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Zvenigorod',
 'region' => '197',
 'place' => '787',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ostrov',
 'region' => '198',
 'place' => '791',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ladoga',
 'region' => '199',
 'place' => '795',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kazan',
 'region' => '200',
 'place' => '799',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ufa',
 'region' => '200',
 'place' => '800',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Suzdal',
 'region' => '201',
 'place' => '803',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nizhny',
 'region' => '201',
 'place' => '804',
 'religion' => '3',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rybinsk',
 'region' => '202',
 'place' => '806',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Cherepovets',
 'region' => '202',
 'place' => '807',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kirillov',
 'region' => '202',
 'place' => '808',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Oryol',
 'region' => '203',
 'place' => '809',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Lipetsk',
 'region' => '203',
 'place' => '812',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => '3',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Olgov',
 'region' => '204',
 'place' => '816',
 'religion' => '3',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Atil',
 'region' => '205',
 'place' => '817',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saraibatu',
 'region' => '205',
 'place' => '818',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saraiberke',
 'region' => '205',
 'place' => '819',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Khiva',
 'region' => '206',
 'place' => '822',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Saraidzhuk',
 'region' => '206',
 'place' => '823',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Redosto',
 'region' => '207',
 'place' => '826',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Edirne',
 'region' => '207',
 'place' => '827',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Corlu',
 'region' => '207',
 'place' => '828',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Stratonicea',
 'region' => '208',
 'place' => '830',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Thebes',
 'region' => '209',
 'place' => '835',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Corinth',
 'region' => '210',
 'place' => '839',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kruja',
 'region' => '212',
 'place' => '845',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Durres',
 'region' => '212',
 'place' => '846',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Saint Jovan',
 'region' => '212',
 'place' => '848',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kastoria',
 'region' => '213',
 'place' => '849',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Prilep',
 'region' => '213',
 'place' => '851',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Berat',
 'region' => '213',
 'place' => '852',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Lemnos',
 'region' => '214',
 'place' => '854',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Samos',
 'region' => '215',
 'place' => '858',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Patmos',
 'region' => '215',
 'place' => '860',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sardes',
 'region' => '216',
 'place' => '864',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kios',
 'region' => '217',
 'place' => '866',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ousakeion',
 'region' => '218',
 'place' => '872',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Makre',
 'region' => '219',
 'place' => '876',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ancyra',
 'region' => '220',
 'place' => '877',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gordion',
 'region' => '220',
 'place' => '878',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Cotyaeum',
 'region' => '220',
 'place' => '879',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Dorylaeum',
 'region' => '220',
 'place' => '880',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kastamuni',
 'region' => '221',
 'place' => '882',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Amasra',
 'region' => '221',
 'place' => '883',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Claudiopolis',
 'region' => '221',
 'place' => '884',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Garsaura',
 'region' => '223',
 'place' => '890',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Magida',
 'region' => '223',
 'place' => '891',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Muskara',
 'region' => '223',
 'place' => '892',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Riza',
 'region' => '224',
 'place' => '895',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kerasous',
 'region' => '224',
 'place' => '896',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Corum',
 'region' => '226',
 'place' => '903',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Takat',
 'region' => '226',
 'place' => '904',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Harput',
 'region' => '227',
 'place' => '906',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Romanoupolis',
 'region' => '227',
 'place' => '908',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Divrigi',
 'region' => '228',
 'place' => '910',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Albistan',
 'region' => '228',
 'place' => '911',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tavium',
 'region' => '228',
 'place' => '912',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Batumi',
 'region' => '229',
 'place' => '913',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Poti',
 'region' => '229',
 'place' => '914',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Surami',
 'region' => '230',
 'place' => '918',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Akhalkalaki',
 'region' => '230',
 'place' => '920',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Derbent',
 'region' => '231',
 'place' => '921',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Baku',
 'region' => '231',
 'place' => '922',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mingecevir',
 'region' => '231',
 'place' => '923',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Balanjar',
 'region' => '231',
 'place' => '924',
 'religion' => '4',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Yerevan',
 'region' => '232',
 'place' => '926',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghars',
 'region' => '232',
 'place' => '927',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kirants',
 'region' => '232',
 'place' => '928',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nakhichevan',
 'region' => '233',
 'place' => '929',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Khoy',
 'region' => '233',
 'place' => '930',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ordubad',
 'region' => '233',
 'place' => '931',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tatvan',
 'region' => '234',
 'place' => '933',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Manzikert',
 'region' => '234',
 'place' => '934',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bitlis',
 'region' => '234',
 'place' => '935',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Arakelots',
 'region' => '234',
 'place' => '936',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nisibis',
 'region' => '235',
 'place' => '940',
 'religion' => '4',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Berkri',
 'region' => '236',
 'place' => '942',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Archesh',
 'region' => '236',
 'place' => '943',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Ostan',
 'region' => '236',
 'place' => '944',
 'religion' => '4',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Beyhaq',
 'region' => '237',
 'place' => '946',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mashhad',
 'region' => '237',
 'place' => '947',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Konjikala',
 'region' => '237',
 'place' => '948',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kashmar',
 'region' => '238',
 'place' => '949',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Gonabad',
 'region' => '238',
 'place' => '950',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tabas',
 'region' => '238',
 'place' => '951',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Birjand',
 'region' => '238',
 'place' => '952',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kerman',
 'region' => '239',
 'place' => '953',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rafsanjan',
 'region' => '239',
 'place' => '955',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Sirjan',
 'region' => '239',
 'place' => '956',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bushire',
 'region' => '240',
 'place' => '958',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Yasuj',
 'region' => '240',
 'place' => '960',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Yazd',
 'region' => '241',
 'place' => '963',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zavareh',
 'region' => '241',
 'place' => '964',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kashan',
 'region' => '242',
 'place' => '966',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Qazvin',
 'region' => '242',
 'place' => '968',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Astarabad',
 'region' => '243',
 'place' => '969',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Rasht',
 'region' => '243',
 'place' => '972',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tabriz',
 'region' => '244',
 'place' => '973',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Sofian',
 'region' => '244',
 'place' => '974',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zanjan',
 'region' => '244',
 'place' => '975',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Ardabil',
 'region' => '244',
 'place' => '976',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kermanshah',
 'region' => '245',
 'place' => '978',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hadjar',
 'region' => '246',
 'place' => '983',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[publican] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => '5',
 'rank' => '2',
 'career' => 'tavern_publican'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Taif',
 'region' => '247',
 'place' => '986',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Jeddah',
 'region' => '247',
 'place' => '987',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Dedan',
 'region' => '248',
 'place' => '989',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tayma',
 'region' => '248',
 'place' => '991',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Maan',
 'region' => '248',
 'place' => '992',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Hebron',
 'region' => '249',
 'place' => '995',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nazareth',
 'region' => '250',
 'place' => '998',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bosra',
 'region' => '251',
 'place' => '1001',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Irbid',
 'region' => '251',
 'place' => '1003',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Palmyra',
 'region' => '252',
 'place' => '1007',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Homs',
 'region' => '253',
 'place' => '1009',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Qusayr',
 'region' => '253',
 'place' => '1010',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Salamiyah',
 'region' => '253',
 'place' => '1011',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Tartous',
 'region' => '254',
 'place' => '1014',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Alexandretta',
 'region' => '255',
 'place' => '1018',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Idlib',
 'region' => '255',
 'place' => '1019',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Afrin',
 'region' => '255',
 'place' => '1020',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Bab',
 'region' => '256',
 'place' => '1023',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Safira',
 'region' => '256',
 'place' => '1024',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Zor',
 'region' => '257',
 'place' => '1028',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Erbil',
 'region' => '258',
 'place' => '1029',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Kirkuk',
 'region' => '258',
 'place' => '1031',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[innkeeper] of Telafer',
 'region' => '258',
 'place' => '1032',
 'religion' => '5',
 'rank' => '3',
 'career' => 'tavern_innkeeper'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Tikrit',
 'region' => '259',
 'place' => '1034',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Anbar',
 'region' => '259',
 'place' => '1035',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Samarra',
 'region' => '259',
 'place' => '1036',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Samawah',
 'region' => '260',
 'place' => '1037',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
]);

DB::table('titles')->insert([
 'title_name' => '[hostler] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => '5',
 'rank' => '4',
 'career' => 'tavern_hostler'
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
		
//falconers and gamekeepers
DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Corvey',
 'region' => '1',
 'place' => '4',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Magdeburg',
 'region' => '3',
 'place' => '9',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gernrode',
 'region' => '3',
 'place' => '12',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Salzwedel',
 'region' => '5',
 'place' => '18',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Havelberg',
 'region' => '5',
 'place' => '19',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Lindow',
 'region' => '5',
 'place' => '20',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kolberg',
 'region' => '6',
 'place' => '23',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Osnabruck',
 'region' => '7',
 'place' => '27',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Paderborn',
 'region' => '7',
 'place' => '28',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Sankt Polten',
 'region' => '10',
 'place' => '39',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Colmar',
 'region' => '15',
 'place' => '58',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Strassbourg',
 'region' => '15',
 'place' => '59',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Wissembourg',
 'region' => '15',
 'place' => '60',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Karlstein',
 'region' => '16',
 'place' => '62',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pilsen',
 'region' => '16',
 'place' => '63',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Plass',
 'region' => '16',
 'place' => '64',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Olmutz',
 'region' => '17',
 'place' => '67',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Trebitz',
 'region' => '17',
 'place' => '68',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Fulda',
 'region' => '18',
 'place' => '72',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pruem',
 'region' => '20',
 'place' => '80',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Zutphen',
 'region' => '21',
 'place' => '82',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Deventer',
 'region' => '21',
 'place' => '84',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Emden',
 'region' => '23',
 'place' => '90',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Breda',
 'region' => '24',
 'place' => '94',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Antwerp',
 'region' => '24',
 'place' => '95',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Thorn',
 'region' => '24',
 'place' => '96',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vannes',
 'region' => '28',
 'place' => '109',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Rohan',
 'region' => '28',
 'place' => '110',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Redon',
 'region' => '28',
 'place' => '112',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Verdun',
 'region' => '30',
 'place' => '119',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Chatellerault',
 'region' => '37',
 'place' => '146',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Moulins',
 'region' => '39',
 'place' => '153',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gueret',
 'region' => '39',
 'place' => '155',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of London',
 'region' => '47',
 'place' => '185',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Guildford',
 'region' => '47',
 'place' => '187',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Ashford',
 'region' => '48',
 'place' => '191',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Maidstone',
 'region' => '48',
 'place' => '192',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Worcester',
 'region' => '53',
 'place' => '209',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cirencester',
 'region' => '53',
 'place' => '212',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Ely',
 'region' => '54',
 'place' => '213',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Saint Albans',
 'region' => '54',
 'place' => '216',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Lincoln',
 'region' => '56',
 'place' => '221',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Stamford',
 'region' => '56',
 'place' => '224',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Holm',
 'region' => '61',
 'place' => '242',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Halsnoy',
 'region' => '61',
 'place' => '244',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Esrum',
 'region' => '62',
 'place' => '248',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Visby',
 'region' => '66',
 'place' => '261',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Nydala',
 'region' => '66',
 'place' => '264',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Jedburgh',
 'region' => '74',
 'place' => '296',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Carlisle',
 'region' => '76',
 'place' => '301',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Whithorn',
 'region' => '76',
 'place' => '303',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kirkcudbright',
 'region' => '76',
 'place' => '304',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Dunaverty',
 'region' => '77',
 'place' => '307',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Iona',
 'region' => '77',
 'place' => '308',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Elgin',
 'region' => '79',
 'place' => '313',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Nairn',
 'region' => '79',
 'place' => '314',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Mortlach',
 'region' => '79',
 'place' => '315',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Leyre',
 'region' => '87',
 'place' => '348',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of San Sebastian',
 'region' => '88',
 'place' => '349',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Alicante',
 'region' => '94',
 'place' => '375',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gandia',
 'region' => '94',
 'place' => '376',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Moura',
 'region' => '105',
 'place' => '419',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Alicante',
 'region' => '113',
 'place' => '451',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cesena',
 'region' => '119',
 'place' => '474',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Forli',
 'region' => '119',
 'place' => '475',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ivrea',
 'region' => '122',
 'place' => '486',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pinerollo',
 'region' => '122',
 'place' => '488',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gaeta',
 'region' => '127',
 'place' => '506',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Cassino',
 'region' => '127',
 'place' => '508',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Sefrou',
 'region' => '138',
 'place' => '550',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Brest',
 'region' => '165',
 'place' => '657',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kobryn',
 'region' => '165',
 'place' => '659',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Wolkowysk',
 'region' => '165',
 'place' => '660',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kauen',
 'region' => '166',
 'place' => '663',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ragusa',
 'region' => '168',
 'place' => '669',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Kecskemet',
 'region' => '174',
 'place' => '694',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Debrecen',
 'region' => '174',
 'place' => '695',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Carta',
 'region' => '176',
 'place' => '704',
 'religion' => '1',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => '2',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Borispyl',
 'region' => '190',
 'place' => '758',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Yuriev',
 'region' => '190',
 'place' => '759',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Sergiev',
 'region' => '197',
 'place' => '786',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Zvenigorod',
 'region' => '197',
 'place' => '787',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ostrov',
 'region' => '198',
 'place' => '791',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ladoga',
 'region' => '199',
 'place' => '795',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => '3',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Khiva',
 'region' => '206',
 'place' => '822',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Saraidzhuk',
 'region' => '206',
 'place' => '823',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Stratonicea',
 'region' => '208',
 'place' => '830',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Thebes',
 'region' => '209',
 'place' => '835',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Lemnos',
 'region' => '214',
 'place' => '854',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Batumi',
 'region' => '229',
 'place' => '913',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Poti',
 'region' => '229',
 'place' => '914',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Berkri',
 'region' => '236',
 'place' => '942',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Archesh',
 'region' => '236',
 'place' => '943',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[gamekeeper] of Ostan',
 'region' => '236',
 'place' => '944',
 'religion' => '4',
 'rank' => '3',
 'career' => 'hunt_game'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Hadjar',
 'region' => '246',
 'place' => '983',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Palmyra',
 'region' => '252',
 'place' => '1007',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Samawah',
 'region' => '260',
 'place' => '1037',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]);

DB::table('titles')->insert([
 'title_name' => '[falconer] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => '5',
 'rank' => '3',
 'career' => 'hunt_falcon'
]); 


    }
}
