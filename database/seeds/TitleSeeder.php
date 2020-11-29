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
 'quarter' => '14800',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rostock',
 'region' => '4',
 'place' => '14',
 'quarter' => '14801',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Greifswald',
 'region' => '6',
 'place' => '24',
 'quarter' => '14802',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Wurzburg',
 'region' => '8',
 'place' => '31',
 'quarter' => '14803',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vienna',
 'region' => '10',
 'place' => '37',
 'quarter' => '14804',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pressburg',
 'region' => '10',
 'place' => '40',
 'quarter' => '14805',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Freiburg',
 'region' => '13',
 'place' => '51',
 'quarter' => '14806',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Basel',
 'region' => '14',
 'place' => '55',
 'quarter' => '14807',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mainz',
 'region' => '18',
 'place' => '69',
 'quarter' => '14808',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Heidelberg',
 'region' => '18',
 'place' => '70',
 'quarter' => '14809',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cologne',
 'region' => '19',
 'place' => '73',
 'quarter' => '14810',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Trier',
 'region' => '20',
 'place' => '77',
 'quarter' => '14811',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Louvain',
 'region' => '24',
 'place' => '93',
 'quarter' => '14812',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Paris',
 'region' => '29',
 'place' => '113',
 'quarter' => '14813',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Caen',
 'region' => '32',
 'place' => '126',
 'quarter' => '14814',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Orleans',
 'region' => '34',
 'place' => '133',
 'quarter' => '14815',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Angers',
 'region' => '36',
 'place' => '141',
 'quarter' => '14816',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Poitiers',
 'region' => '37',
 'place' => '145',
 'quarter' => '14817',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bourges',
 'region' => '38',
 'place' => '149',
 'quarter' => '14818',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aix',
 'region' => '41',
 'place' => '162',
 'quarter' => '14819',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Avignon',
 'region' => '41',
 'place' => '164',
 'quarter' => '14820',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Toulouse',
 'region' => '42',
 'place' => '165',
 'quarter' => '14821',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bordeaux',
 'region' => '43',
 'place' => '169',
 'quarter' => '14822',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cahors',
 'region' => '43',
 'place' => '170',
 'quarter' => '14823',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Grenoble',
 'region' => '45',
 'place' => '177',
 'quarter' => '14824',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dijon',
 'region' => '46',
 'place' => '181',
 'quarter' => '14825',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Besancon',
 'region' => '46',
 'place' => '182',
 'quarter' => '14826',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cambridge',
 'region' => '54',
 'place' => '214',
 'quarter' => '14827',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Oxford',
 'region' => '54',
 'place' => '215',
 'quarter' => '14828',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lund',
 'region' => '63',
 'place' => '249',
 'quarter' => '14829',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Uppsala',
 'region' => '65',
 'place' => '259',
 'quarter' => '14830',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arensburg',
 'region' => '72',
 'place' => '287',
 'quarter' => '14831',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Glasgow',
 'region' => '75',
 'place' => '299',
 'quarter' => '14832',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Saint Andrews',
 'region' => '78',
 'place' => '311',
 'quarter' => '14833',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aberdeen',
 'region' => '79',
 'place' => '316',
 'quarter' => '14834',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Huesca',
 'region' => '89',
 'place' => '355',
 'quarter' => '14835',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'quarter' => '14836',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Barcelona',
 'region' => '92',
 'place' => '365',
 'quarter' => '14837',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valencia',
 'region' => '93',
 'place' => '369',
 'quarter' => '14838',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palma',
 'region' => '95',
 'place' => '377',
 'quarter' => '14839',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Valladolid',
 'region' => '98',
 'place' => '389',
 'quarter' => '14840',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Salamanca',
 'region' => '98',
 'place' => '392',
 'quarter' => '14841',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Palencia',
 'region' => '99',
 'place' => '395',
 'quarter' => '14842',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lisbon',
 'region' => '101',
 'place' => '401',
 'quarter' => '14843',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Coimbra',
 'region' => '104',
 'place' => '413',
 'quarter' => '14844',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cordoba',
 'region' => '107',
 'place' => '425',
 'quarter' => '14845',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Granada',
 'region' => '111',
 'place' => '441',
 'quarter' => '14846',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Murcia',
 'region' => '113',
 'place' => '449',
 'quarter' => '14847',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pavia',
 'region' => '115',
 'place' => '459',
 'quarter' => '14848',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Padua',
 'region' => '116',
 'place' => '462',
 'quarter' => '14849',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Vicenza',
 'region' => '116',
 'place' => '463',
 'quarter' => '14850',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Genoa',
 'region' => '117',
 'place' => '465',
 'quarter' => '14851',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Venice',
 'region' => '118',
 'place' => '469',
 'quarter' => '14852',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Modena',
 'region' => '120',
 'place' => '477',
 'quarter' => '14853',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Parma',
 'region' => '120',
 'place' => '478',
 'quarter' => '14854',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ferrara',
 'region' => '120',
 'place' => '479',
 'quarter' => '14855',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bologna',
 'region' => '120',
 'place' => '480',
 'quarter' => '14856',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Turin',
 'region' => '122',
 'place' => '485',
 'quarter' => '14857',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Florence',
 'region' => '123',
 'place' => '489',
 'quarter' => '14858',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Siena',
 'region' => '123',
 'place' => '490',
 'quarter' => '14859',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arezzo',
 'region' => '123',
 'place' => '491',
 'quarter' => '14860',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rome',
 'region' => '125',
 'place' => '497',
 'quarter' => '14861',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pisa',
 'region' => '126',
 'place' => '501',
 'quarter' => '14862',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Naples',
 'region' => '127',
 'place' => '505',
 'quarter' => '14863',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Catania',
 'region' => '134',
 'place' => '535',
 'quarter' => '14864',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sale',
 'region' => '137',
 'place' => '547',
 'quarter' => '14865',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Fez',
 'region' => '138',
 'place' => '549',
 'quarter' => '14866',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Meknes',
 'region' => '138',
 'place' => '552',
 'quarter' => '14867',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'quarter' => '14868',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'quarter' => '14869',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tiaret',
 'region' => '143',
 'place' => '571',
 'quarter' => '14870',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tedelles',
 'region' => '146',
 'place' => '583',
 'quarter' => '14871',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tunis',
 'region' => '149',
 'place' => '593',
 'quarter' => '14872',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kairouan',
 'region' => '150',
 'place' => '597',
 'quarter' => '14873',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Alexandria',
 'region' => '157',
 'place' => '625',
 'quarter' => '14874',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cairo',
 'region' => '158',
 'place' => '629',
 'quarter' => '14875',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Krakow',
 'region' => '162',
 'place' => '645',
 'quarter' => '14876',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Zadar',
 'region' => '168',
 'place' => '670',
 'quarter' => '14877',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '171',
 'place' => '684',
 'quarter' => '14878',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Buda',
 'region' => '174',
 'place' => '693',
 'quarter' => '14879',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pecs',
 'region' => '175',
 'place' => '697',
 'quarter' => '14880',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Constantinople',
 'region' => '207',
 'place' => '825',
 'quarter' => '14881',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'quarter' => '14882',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Athens',
 'region' => '209',
 'place' => '833',
 'quarter' => '14883',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Miletus',
 'region' => '216',
 'place' => '862',
 'quarter' => '14884',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Sivas',
 'region' => '228',
 'place' => '909',
 'quarter' => '14885',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ani',
 'region' => '232',
 'place' => '925',
 'quarter' => '14886',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mardin',
 'region' => '235',
 'place' => '937',
 'quarter' => '14887',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cepha',
 'region' => '235',
 'place' => '939',
 'quarter' => '14888',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Nishapur',
 'region' => '237',
 'place' => '945',
 'quarter' => '14889',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Isfahan',
 'region' => '241',
 'place' => '961',
 'quarter' => '14890',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ghom',
 'region' => '242',
 'place' => '967',
 'quarter' => '14891',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amol',
 'region' => '243',
 'place' => '971',
 'quarter' => '14892',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hamadan',
 'region' => '245',
 'place' => '977',
 'quarter' => '14893',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Mecca',
 'region' => '247',
 'place' => '985',
 'quarter' => '14894',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'quarter' => '14895',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Hama',
 'region' => '253',
 'place' => '1012',
 'quarter' => '14896',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'quarter' => '14897',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Beirut',
 'region' => '254',
 'place' => '1015',
 'quarter' => '14898',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Antioch',
 'region' => '255',
 'place' => '1017',
 'quarter' => '14899',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'quarter' => '14900',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'quarter' => '14901',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Karbala',
 'region' => '260',
 'place' => '1038',
 'quarter' => '14902',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kufah',
 'region' => '260',
 'place' => '1039',
 'quarter' => '14903',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_college'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Najaf',
 'region' => '260',
 'place' => '1040',
 'quarter' => '14904',
 'religion' => '5',
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
 'quarter' => '9361',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Innsbruck',
 'region' => '12',
 'place' => '45',
 'quarter' => '9362',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ulm',
 'region' => '13',
 'place' => '49',
 'quarter' => '9363',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bern',
 'region' => '14',
 'place' => '53',
 'quarter' => '9364',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pruem',
 'region' => '20',
 'place' => '80',
 'quarter' => '9365',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Gouda',
 'region' => '22',
 'place' => '86',
 'quarter' => '9366',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Groningen',
 'region' => '23',
 'place' => '91',
 'quarter' => '9367',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Quimper',
 'region' => '28',
 'place' => '111',
 'quarter' => '9368',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Langres',
 'region' => '30',
 'place' => '120',
 'quarter' => '9369',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amiens',
 'region' => '31',
 'place' => '121',
 'quarter' => '9370',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Arles',
 'region' => '41',
 'place' => '161',
 'quarter' => '9371',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Limoges',
 'region' => '44',
 'place' => '174',
 'quarter' => '9372',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Perigeux',
 'region' => '44',
 'place' => '175',
 'quarter' => '9373',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Chalon',
 'region' => '46',
 'place' => '183',
 'quarter' => '9374',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of London',
 'region' => '47',
 'place' => '185',
 'quarter' => '9375',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Westminster',
 'region' => '47',
 'place' => '188',
 'quarter' => '9376',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dover',
 'region' => '48',
 'place' => '190',
 'quarter' => '9377',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Southampton',
 'region' => '49',
 'place' => '194',
 'quarter' => '9378',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Norwich',
 'region' => '51',
 'place' => '201',
 'quarter' => '9379',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Saint Edmunds',
 'region' => '51',
 'place' => '203',
 'quarter' => '9380',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of York',
 'region' => '52',
 'place' => '205',
 'quarter' => '9381',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Durham',
 'region' => '52',
 'place' => '206',
 'quarter' => '9382',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cirencester',
 'region' => '53',
 'place' => '212',
 'quarter' => '9383',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Stafford',
 'region' => '55',
 'place' => '219',
 'quarter' => '9384',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Nottingham',
 'region' => '56',
 'place' => '222',
 'quarter' => '9385',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bergen',
 'region' => '61',
 'place' => '241',
 'quarter' => '9386',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Stavanger',
 'region' => '61',
 'place' => '243',
 'quarter' => '9387',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'quarter' => '9388',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Aalborg',
 'region' => '64',
 'place' => '254',
 'quarter' => '9389',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Riga',
 'region' => '68',
 'place' => '269',
 'quarter' => '9390',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Talsen',
 'region' => '69',
 'place' => '276',
 'quarter' => '9391',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Marienburg',
 'region' => '70',
 'place' => '277',
 'quarter' => '9392',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Danzig',
 'region' => '70',
 'place' => '279',
 'quarter' => '9393',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Reval',
 'region' => '72',
 'place' => '285',
 'quarter' => '9394',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'quarter' => '9395',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'quarter' => '9396',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Ayr',
 'region' => '75',
 'place' => '300',
 'quarter' => '9397',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Dundee',
 'region' => '80',
 'place' => '317',
 'quarter' => '9398',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Waterford',
 'region' => '84',
 'place' => '335',
 'quarter' => '9399',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Cork',
 'region' => '85',
 'place' => '339',
 'quarter' => '9400',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Olite',
 'region' => '87',
 'place' => '346',
 'quarter' => '9401',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bilbao',
 'region' => '88',
 'place' => '351',
 'quarter' => '9402',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Jaca',
 'region' => '89',
 'place' => '353',
 'quarter' => '9403',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Gerona',
 'region' => '91',
 'place' => '361',
 'quarter' => '9404',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Badajoz',
 'region' => '109',
 'place' => '433',
 'quarter' => '9405',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Subiaco',
 'region' => '125',
 'place' => '500',
 'quarter' => '9406',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Lucca',
 'region' => '126',
 'place' => '503',
 'quarter' => '9407',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amalfi',
 'region' => '127',
 'place' => '507',
 'quarter' => '9408',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Taranto',
 'region' => '128',
 'place' => '509',
 'quarter' => '9409',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Bari',
 'region' => '128',
 'place' => '510',
 'quarter' => '9410',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kotor',
 'region' => '169',
 'place' => '676',
 'quarter' => '9411',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Esztergom',
 'region' => '172',
 'place' => '685',
 'quarter' => '9412',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kalocsa',
 'region' => '175',
 'place' => '699',
 'quarter' => '9413',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Alba Julia',
 'region' => '176',
 'place' => '701',
 'quarter' => '9414',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tulcea',
 'region' => '179',
 'place' => '715',
 'quarter' => '9415',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'quarter' => '9416',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Belgrade',
 'region' => '184',
 'place' => '733',
 'quarter' => '9417',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'quarter' => '9418',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'quarter' => '9419',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Novgorod',
 'region' => '199',
 'place' => '793',
 'quarter' => '9420',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edirne',
 'region' => '207',
 'place' => '827',
 'quarter' => '9421',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Iraklion',
 'region' => '214',
 'place' => '853',
 'quarter' => '9422',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Patros',
 'region' => '214',
 'place' => '856',
 'quarter' => '9423',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Pergamum',
 'region' => '217',
 'place' => '868',
 'quarter' => '9424',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Tarsus',
 'region' => '222',
 'place' => '885',
 'quarter' => '9425',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Edessa',
 'region' => '225',
 'place' => '897',
 'quarter' => '9426',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Amasia',
 'region' => '226',
 'place' => '901',
 'quarter' => '9427',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Divrigi',
 'region' => '228',
 'place' => '910',
 'quarter' => '9428',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Kutais',
 'region' => '229',
 'place' => '916',
 'quarter' => '9429',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Van',
 'region' => '236',
 'place' => '941',
 'quarter' => '9430',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Shiraz',
 'region' => '240',
 'place' => '957',
 'quarter' => '9431',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Rhages',
 'region' => '242',
 'place' => '965',
 'quarter' => '9432',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Medina',
 'region' => '247',
 'place' => '988',
 'quarter' => '9433',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_hospice'
]);

DB::table('titles')->insert([
 'title_name' => '[college-master] of Damascus',
 'region' => '252',
 'place' => '1005',
 'quarter' => '9434',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_hospice'
]); 

	
	}
}
