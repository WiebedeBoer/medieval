<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	//admin
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

		//universities
DB::table('titles')->insert([
 'title_name' => '[college-master] of Erfurt',
 'region' => '2',
 'place' => '7',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Greifswald',
 'region' => '6',
 'place' => '24',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vienna',
 'region' => '10',
 'place' => '37',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Angers',
 'region' => '36',
 'place' => '141',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Grenoble',
 'region' => '45',
 'place' => '177',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lund',
 'region' => '63',
 'place' => '249',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Uppsala',
 'region' => '65',
 'place' => '259',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vicenza',
 'region' => '116',
 'place' => '463',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Parma',
 'region' => '120',
 'place' => '478',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bologna',
 'region' => '120',
 'place' => '480',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Florence',
 'region' => '123',
 'place' => '489',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arezzo',
 'region' => '123',
 'place' => '491',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_college'
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
		
//hospitals and hospices
DB::table('titles')->insert([
 'title_name' => '[college-master] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ulm',
 'region' => '13',
 'place' => '49',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pruem',
 'region' => '20',
 'place' => '80',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amiens',
 'region' => '31',
 'place' => '121',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of York',
 'region' => '52',
 'place' => '205',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Durham',
 'region' => '52',
 'place' => '206',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cirencester',
 'region' => '53',
 'place' => '212',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ayr',
 'region' => '75',
 'place' => '300',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Subiaco',
 'region' => '125',
 'place' => '500',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kotor',
 'region' => '169',
 'place' => '676',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'religion' => 'Catholic',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tulcea',
 'region' => '179',
 'place' => '715',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => 'Serbian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edirne',
 'region' => '207',
 'place' => '827',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Divrigi',
 'region' => '228',
 'place' => '910',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kutais',
 'region' => '229',
 'place' => '916',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => 'Greek Orthodox',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '5',
 'career' => 'fixed_hospice'
]); 

	
	}
}
