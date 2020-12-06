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
			'title_name' => 'Erfurt',
			'title_category' => 'lord warden',
			'region' => '2',
			'place' => '7',
			'quarter' => '14800',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rostock',
			'title_category' => 'lord warden',
			'region' => '4',
			'place' => '14',
			'quarter' => '14801',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Greifswald',
			'title_category' => 'lord warden',
			'region' => '6',
			'place' => '24',
			'quarter' => '14802',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wurzburg',
			'title_category' => 'lord warden',
			'region' => '8',
			'place' => '31',
			'quarter' => '14803',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vienna',
			'title_category' => 'lord warden',
			'region' => '10',
			'place' => '37',
			'quarter' => '14804',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pressburg',
			'title_category' => 'lord warden',
			'region' => '10',
			'place' => '40',
			'quarter' => '14805',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Freiburg',
			'title_category' => 'lord warden',
			'region' => '13',
			'place' => '51',
			'quarter' => '14806',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Basel',
			'title_category' => 'lord warden',
			'region' => '14',
			'place' => '55',
			'quarter' => '14807',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mainz',
			'title_category' => 'lord warden',
			'region' => '18',
			'place' => '69',
			'quarter' => '14808',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Heidelberg',
			'title_category' => 'lord warden',
			'region' => '18',
			'place' => '70',
			'quarter' => '14809',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cologne',
			'title_category' => 'lord warden',
			'region' => '19',
			'place' => '73',
			'quarter' => '14810',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trier',
			'title_category' => 'lord warden',
			'region' => '20',
			'place' => '77',
			'quarter' => '14811',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Louvain',
			'title_category' => 'lord warden',
			'region' => '24',
			'place' => '93',
			'quarter' => '14812',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Paris',
			'title_category' => 'lord warden',
			'region' => '29',
			'place' => '113',
			'quarter' => '14813',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Caen',
			'title_category' => 'lord warden',
			'region' => '32',
			'place' => '126',
			'quarter' => '14814',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Orleans',
			'title_category' => 'lord warden',
			'region' => '34',
			'place' => '133',
			'quarter' => '14815',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Angers',
			'title_category' => 'lord warden',
			'region' => '36',
			'place' => '141',
			'quarter' => '14816',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Poitiers',
			'title_category' => 'lord warden',
			'region' => '37',
			'place' => '145',
			'quarter' => '14817',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bourges',
			'title_category' => 'lord warden',
			'region' => '38',
			'place' => '149',
			'quarter' => '14818',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aix',
			'title_category' => 'lord warden',
			'region' => '41',
			'place' => '162',
			'quarter' => '14819',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avignon',
			'title_category' => 'lord warden',
			'region' => '41',
			'place' => '164',
			'quarter' => '14820',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toulouse',
			'title_category' => 'lord warden',
			'region' => '42',
			'place' => '165',
			'quarter' => '14821',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bordeaux',
			'title_category' => 'lord warden',
			'region' => '43',
			'place' => '169',
			'quarter' => '14822',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cahors',
			'title_category' => 'lord warden',
			'region' => '43',
			'place' => '170',
			'quarter' => '14823',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Grenoble',
			'title_category' => 'lord warden',
			'region' => '45',
			'place' => '177',
			'quarter' => '14824',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dijon',
			'title_category' => 'lord warden',
			'region' => '46',
			'place' => '181',
			'quarter' => '14825',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Besancon',
			'title_category' => 'lord warden',
			'region' => '46',
			'place' => '182',
			'quarter' => '14826',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cambridge',
			'title_category' => 'lord warden',
			'region' => '54',
			'place' => '214',
			'quarter' => '14827',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oxford',
			'title_category' => 'lord warden',
			'region' => '54',
			'place' => '215',
			'quarter' => '14828',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lund',
			'title_category' => 'lord warden',
			'region' => '63',
			'place' => '249',
			'quarter' => '14829',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Uppsala',
			'title_category' => 'lord warden',
			'region' => '65',
			'place' => '259',
			'quarter' => '14830',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arensburg',
			'title_category' => 'lord warden',
			'region' => '72',
			'place' => '287',
			'quarter' => '14831',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Glasgow',
			'title_category' => 'lord warden',
			'region' => '75',
			'place' => '299',
			'quarter' => '14832',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Andrews',
			'title_category' => 'lord warden',
			'region' => '78',
			'place' => '311',
			'quarter' => '14833',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aberdeen',
			'title_category' => 'lord warden',
			'region' => '79',
			'place' => '316',
			'quarter' => '14834',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Huesca',
			'title_category' => 'lord warden',
			'region' => '89',
			'place' => '355',
			'quarter' => '14835',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zaragoza',
			'title_category' => 'lord warden',
			'region' => '90',
			'place' => '357',
			'quarter' => '14836',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barcelona',
			'title_category' => 'lord warden',
			'region' => '92',
			'place' => '365',
			'quarter' => '14837',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valencia',
			'title_category' => 'lord warden',
			'region' => '93',
			'place' => '369',
			'quarter' => '14838',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palma',
			'title_category' => 'lord warden',
			'region' => '95',
			'place' => '377',
			'quarter' => '14839',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valladolid',
			'title_category' => 'lord warden',
			'region' => '98',
			'place' => '389',
			'quarter' => '14840',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Salamanca',
			'title_category' => 'lord warden',
			'region' => '98',
			'place' => '392',
			'quarter' => '14841',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palencia',
			'title_category' => 'lord warden',
			'region' => '99',
			'place' => '395',
			'quarter' => '14842',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lisbon',
			'title_category' => 'lord warden',
			'region' => '101',
			'place' => '401',
			'quarter' => '14843',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Coimbra',
			'title_category' => 'lord warden',
			'region' => '104',
			'place' => '413',
			'quarter' => '14844',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cordoba',
			'title_category' => 'lord warden',
			'region' => '107',
			'place' => '425',
			'quarter' => '14845',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Granada',
			'title_category' => 'lord warden',
			'region' => '111',
			'place' => '441',
			'quarter' => '14846',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Murcia',
			'title_category' => 'lord warden',
			'region' => '113',
			'place' => '449',
			'quarter' => '14847',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pavia',
			'title_category' => 'lord warden',
			'region' => '115',
			'place' => '459',
			'quarter' => '14848',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Padua',
			'title_category' => 'lord warden',
			'region' => '116',
			'place' => '462',
			'quarter' => '14849',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Vicenza',
			'title_category' => 'lord warden',
			'region' => '116',
			'place' => '463',
			'quarter' => '14850',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Genoa',
			'title_category' => 'lord warden',
			'region' => '117',
			'place' => '465',
			'quarter' => '14851',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Venice',
			'title_category' => 'lord warden',
			'region' => '118',
			'place' => '469',
			'quarter' => '14852',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modena',
			'title_category' => 'lord warden',
			'region' => '120',
			'place' => '477',
			'quarter' => '14853',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Parma',
			'title_category' => 'lord warden',
			'region' => '120',
			'place' => '478',
			'quarter' => '14854',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ferrara',
			'title_category' => 'lord warden',
			'region' => '120',
			'place' => '479',
			'quarter' => '14855',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bologna',
			'title_category' => 'lord warden',
			'region' => '120',
			'place' => '480',
			'quarter' => '14856',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Turin',
			'title_category' => 'lord warden',
			'region' => '122',
			'place' => '485',
			'quarter' => '14857',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Florence',
			'title_category' => 'lord warden',
			'region' => '123',
			'place' => '489',
			'quarter' => '14858',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siena',
			'title_category' => 'lord warden',
			'region' => '123',
			'place' => '490',
			'quarter' => '14859',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arezzo',
			'title_category' => 'lord warden',
			'region' => '123',
			'place' => '491',
			'quarter' => '14860',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rome',
			'title_category' => 'lord warden',
			'region' => '125',
			'place' => '497',
			'quarter' => '14861',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pisa',
			'title_category' => 'lord warden',
			'region' => '126',
			'place' => '501',
			'quarter' => '14862',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Naples',
			'title_category' => 'lord warden',
			'region' => '127',
			'place' => '505',
			'quarter' => '14863',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Catania',
			'title_category' => 'lord warden',
			'region' => '134',
			'place' => '535',
			'quarter' => '14864',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sale',
			'title_category' => 'lord warden',
			'region' => '137',
			'place' => '547',
			'quarter' => '14865',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fez',
			'title_category' => 'lord warden',
			'region' => '138',
			'place' => '549',
			'quarter' => '14866',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Meknes',
			'title_category' => 'lord warden',
			'region' => '138',
			'place' => '552',
			'quarter' => '14867',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marrakesh',
			'title_category' => 'lord warden',
			'region' => '139',
			'place' => '553',
			'quarter' => '14868',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tlemcen',
			'title_category' => 'lord warden',
			'region' => '142',
			'place' => '565',
			'quarter' => '14869',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tiaret',
			'title_category' => 'lord warden',
			'region' => '143',
			'place' => '571',
			'quarter' => '14870',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tedelles',
			'title_category' => 'lord warden',
			'region' => '146',
			'place' => '583',
			'quarter' => '14871',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tunis',
			'title_category' => 'lord warden',
			'region' => '149',
			'place' => '593',
			'quarter' => '14872',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kairouan',
			'title_category' => 'lord warden',
			'region' => '150',
			'place' => '597',
			'quarter' => '14873',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alexandria',
			'title_category' => 'lord warden',
			'region' => '157',
			'place' => '625',
			'quarter' => '14874',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cairo',
			'title_category' => 'lord warden',
			'region' => '158',
			'place' => '629',
			'quarter' => '14875',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Krakow',
			'title_category' => 'lord warden',
			'region' => '162',
			'place' => '645',
			'quarter' => '14876',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zadar',
			'title_category' => 'lord warden',
			'region' => '168',
			'place' => '670',
			'quarter' => '14877',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pecs',
			'title_category' => 'lord warden',
			'region' => '171',
			'place' => '684',
			'quarter' => '14878',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Buda',
			'title_category' => 'lord warden',
			'region' => '174',
			'place' => '693',
			'quarter' => '14879',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pecs',
			'title_category' => 'lord warden',
			'region' => '175',
			'place' => '697',
			'quarter' => '14880',
			'religion' => '1',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Constantinople',
			'title_category' => 'lord warden',
			'region' => '207',
			'place' => '825',
			'quarter' => '14881',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Thessaloniki',
			'title_category' => 'lord warden',
			'region' => '208',
			'place' => '829',
			'quarter' => '14882',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Athens',
			'title_category' => 'lord warden',
			'region' => '209',
			'place' => '833',
			'quarter' => '14883',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Miletus',
			'title_category' => 'lord warden',
			'region' => '216',
			'place' => '862',
			'quarter' => '14884',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sivas',
			'title_category' => 'lord warden',
			'region' => '228',
			'place' => '909',
			'quarter' => '14885',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ani',
			'title_category' => 'lord warden',
			'region' => '232',
			'place' => '925',
			'quarter' => '14886',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mardin',
			'title_category' => 'lord warden',
			'region' => '235',
			'place' => '937',
			'quarter' => '14887',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cepha',
			'title_category' => 'lord warden',
			'region' => '235',
			'place' => '939',
			'quarter' => '14888',
			'religion' => '4',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nishapur',
			'title_category' => 'lord warden',
			'region' => '237',
			'place' => '945',
			'quarter' => '14889',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Isfahan',
			'title_category' => 'lord warden',
			'region' => '241',
			'place' => '961',
			'quarter' => '14890',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ghom',
			'title_category' => 'lord warden',
			'region' => '242',
			'place' => '967',
			'quarter' => '14891',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amol',
			'title_category' => 'lord warden',
			'region' => '243',
			'place' => '971',
			'quarter' => '14892',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hamadan',
			'title_category' => 'lord warden',
			'region' => '245',
			'place' => '977',
			'quarter' => '14893',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mecca',
			'title_category' => 'lord warden',
			'region' => '247',
			'place' => '985',
			'quarter' => '14894',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jerusalem',
			'title_category' => 'lord warden',
			'region' => '249',
			'place' => '993',
			'quarter' => '14895',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hama',
			'title_category' => 'lord warden',
			'region' => '253',
			'place' => '1012',
			'quarter' => '14896',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tripoli',
			'title_category' => 'lord warden',
			'region' => '254',
			'place' => '1013',
			'quarter' => '14897',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Beirut',
			'title_category' => 'lord warden',
			'region' => '254',
			'place' => '1015',
			'quarter' => '14898',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antioch',
			'title_category' => 'lord warden',
			'region' => '255',
			'place' => '1017',
			'quarter' => '14899',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhesaina',
			'title_category' => 'lord warden',
			'region' => '257',
			'place' => '1027',
			'quarter' => '14900',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Baghdad',
			'title_category' => 'lord warden',
			'region' => '259',
			'place' => '1033',
			'quarter' => '14901',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Karbala',
			'title_category' => 'lord warden',
			'region' => '260',
			'place' => '1038',
			'quarter' => '14902',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kufah',
			'title_category' => 'lord warden',
			'region' => '260',
			'place' => '1039',
			'quarter' => '14903',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Najaf',
			'title_category' => 'lord warden',
			'region' => '260',
			'place' => '1040',
			'quarter' => '14904',
			'religion' => '5',
			'rank' => '5',
			'career' => 'college_master'
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
			'title_name' => 'Lubeck',
			'title_category' => 'lord warden',
			'region' => '4',
			'place' => '15',
			'quarter' => '9361',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Innsbruck',
			'title_category' => 'lord warden',
			'region' => '12',
			'place' => '45',
			'quarter' => '9362',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ulm',
			'title_category' => 'lord warden',
			'region' => '13',
			'place' => '49',
			'quarter' => '9363',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bern',
			'title_category' => 'lord warden',
			'region' => '14',
			'place' => '53',
			'quarter' => '9364',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pruem',
			'title_category' => 'lord warden',
			'region' => '20',
			'place' => '80',
			'quarter' => '9365',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gouda',
			'title_category' => 'lord warden',
			'region' => '22',
			'place' => '86',
			'quarter' => '9366',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Groningen',
			'title_category' => 'lord warden',
			'region' => '23',
			'place' => '91',
			'quarter' => '9367',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Quimper',
			'title_category' => 'lord warden',
			'region' => '28',
			'place' => '111',
			'quarter' => '9368',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Langres',
			'title_category' => 'lord warden',
			'region' => '30',
			'place' => '120',
			'quarter' => '9369',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amiens',
			'title_category' => 'lord warden',
			'region' => '31',
			'place' => '121',
			'quarter' => '9370',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arles',
			'title_category' => 'lord warden',
			'region' => '41',
			'place' => '161',
			'quarter' => '9371',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Limoges',
			'title_category' => 'lord warden',
			'region' => '44',
			'place' => '174',
			'quarter' => '9372',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Perigeux',
			'title_category' => 'lord warden',
			'region' => '44',
			'place' => '175',
			'quarter' => '9373',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chalon',
			'title_category' => 'lord warden',
			'region' => '46',
			'place' => '183',
			'quarter' => '9374',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'London',
			'title_category' => 'lord warden',
			'region' => '47',
			'place' => '185',
			'quarter' => '9375',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Westminster',
			'title_category' => 'lord warden',
			'region' => '47',
			'place' => '188',
			'quarter' => '9376',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dover',
			'title_category' => 'lord warden',
			'region' => '48',
			'place' => '190',
			'quarter' => '9377',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Southampton',
			'title_category' => 'lord warden',
			'region' => '49',
			'place' => '194',
			'quarter' => '9378',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Norwich',
			'title_category' => 'lord warden',
			'region' => '51',
			'place' => '201',
			'quarter' => '9379',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saint Edmunds',
			'title_category' => 'lord warden',
			'region' => '51',
			'place' => '203',
			'quarter' => '9380',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'York',
			'title_category' => 'lord warden',
			'region' => '52',
			'place' => '205',
			'quarter' => '9381',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Durham',
			'title_category' => 'lord warden',
			'region' => '52',
			'place' => '206',
			'quarter' => '9382',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cirencester',
			'title_category' => 'lord warden',
			'region' => '53',
			'place' => '212',
			'quarter' => '9383',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stafford',
			'title_category' => 'lord warden',
			'region' => '55',
			'place' => '219',
			'quarter' => '9384',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nottingham',
			'title_category' => 'lord warden',
			'region' => '56',
			'place' => '222',
			'quarter' => '9385',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bergen',
			'title_category' => 'lord warden',
			'region' => '61',
			'place' => '241',
			'quarter' => '9386',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stavanger',
			'title_category' => 'lord warden',
			'region' => '61',
			'place' => '243',
			'quarter' => '9387',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Copenhagen',
			'title_category' => 'lord warden',
			'region' => '62',
			'place' => '245',
			'quarter' => '9388',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aalborg',
			'title_category' => 'lord warden',
			'region' => '64',
			'place' => '254',
			'quarter' => '9389',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Riga',
			'title_category' => 'lord warden',
			'region' => '68',
			'place' => '269',
			'quarter' => '9390',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Talsen',
			'title_category' => 'lord warden',
			'region' => '69',
			'place' => '276',
			'quarter' => '9391',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marienburg',
			'title_category' => 'lord warden',
			'region' => '70',
			'place' => '277',
			'quarter' => '9392',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Danzig',
			'title_category' => 'lord warden',
			'region' => '70',
			'place' => '279',
			'quarter' => '9393',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Reval',
			'title_category' => 'lord warden',
			'region' => '72',
			'place' => '285',
			'quarter' => '9394',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Edinburgh',
			'title_category' => 'lord warden',
			'region' => '73',
			'place' => '289',
			'quarter' => '9395',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dumbarton',
			'title_category' => 'lord warden',
			'region' => '75',
			'place' => '297',
			'quarter' => '9396',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ayr',
			'title_category' => 'lord warden',
			'region' => '75',
			'place' => '300',
			'quarter' => '9397',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dundee',
			'title_category' => 'lord warden',
			'region' => '80',
			'place' => '317',
			'quarter' => '9398',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Waterford',
			'title_category' => 'lord warden',
			'region' => '84',
			'place' => '335',
			'quarter' => '9399',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cork',
			'title_category' => 'lord warden',
			'region' => '85',
			'place' => '339',
			'quarter' => '9400',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Olite',
			'title_category' => 'lord warden',
			'region' => '87',
			'place' => '346',
			'quarter' => '9401',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bilbao',
			'title_category' => 'lord warden',
			'region' => '88',
			'place' => '351',
			'quarter' => '9402',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jaca',
			'title_category' => 'lord warden',
			'region' => '89',
			'place' => '353',
			'quarter' => '9403',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gerona',
			'title_category' => 'lord warden',
			'region' => '91',
			'place' => '361',
			'quarter' => '9404',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Badajoz',
			'title_category' => 'lord warden',
			'region' => '109',
			'place' => '433',
			'quarter' => '9405',
			'religion' => '5',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Subiaco',
			'title_category' => 'lord warden',
			'region' => '125',
			'place' => '500',
			'quarter' => '9406',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lucca',
			'title_category' => 'lord warden',
			'region' => '126',
			'place' => '503',
			'quarter' => '9407',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amalfi',
			'title_category' => 'lord warden',
			'region' => '127',
			'place' => '507',
			'quarter' => '9408',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Taranto',
			'title_category' => 'lord warden',
			'region' => '128',
			'place' => '509',
			'quarter' => '9409',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bari',
			'title_category' => 'lord warden',
			'region' => '128',
			'place' => '510',
			'quarter' => '9410',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kotor',
			'title_category' => 'lord warden',
			'region' => '169',
			'place' => '676',
			'quarter' => '9411',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Esztergom',
			'title_category' => 'lord warden',
			'region' => '172',
			'place' => '685',
			'quarter' => '9412',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kalocsa',
			'title_category' => 'lord warden',
			'region' => '175',
			'place' => '699',
			'quarter' => '9413',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alba Julia',
			'title_category' => 'lord warden',
			'region' => '176',
			'place' => '701',
			'quarter' => '9414',
			'religion' => '1',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tulcea',
			'title_category' => 'lord warden',
			'region' => '179',
			'place' => '715',
			'quarter' => '9415',
			'religion' => '2',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tarnovo',
			'title_category' => 'lord warden',
			'region' => '182',
			'place' => '728',
			'quarter' => '9416',
			'religion' => '2',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Belgrade',
			'title_category' => 'lord warden',
			'region' => '184',
			'place' => '733',
			'quarter' => '9417',
			'religion' => '2',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pereyaslav',
			'title_category' => 'lord warden',
			'region' => '189',
			'place' => '753',
			'quarter' => '9418',
			'religion' => '3',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tchernigov',
			'title_category' => 'lord warden',
			'region' => '193',
			'place' => '769',
			'quarter' => '9419',
			'religion' => '3',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Novgorod',
			'title_category' => 'lord warden',
			'region' => '199',
			'place' => '793',
			'quarter' => '9420',
			'religion' => '3',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Edirne',
			'title_category' => 'lord warden',
			'region' => '207',
			'place' => '827',
			'quarter' => '9421',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Iraklion',
			'title_category' => 'lord warden',
			'region' => '214',
			'place' => '853',
			'quarter' => '9422',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Patros',
			'title_category' => 'lord warden',
			'region' => '214',
			'place' => '856',
			'quarter' => '9423',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pergamum',
			'title_category' => 'lord warden',
			'region' => '217',
			'place' => '868',
			'quarter' => '9424',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tarsus',
			'title_category' => 'lord warden',
			'region' => '222',
			'place' => '885',
			'quarter' => '9425',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Edessa',
			'title_category' => 'lord warden',
			'region' => '225',
			'place' => '897',
			'quarter' => '9426',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amasia',
			'title_category' => 'lord warden',
			'region' => '226',
			'place' => '901',
			'quarter' => '9427',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Divrigi',
			'title_category' => 'lord warden',
			'region' => '228',
			'place' => '910',
			'quarter' => '9428',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Kutais',
			'title_category' => 'lord warden',
			'region' => '229',
			'place' => '916',
			'quarter' => '9429',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Van',
			'title_category' => 'lord warden',
			'region' => '236',
			'place' => '941',
			'quarter' => '9430',
			'religion' => '4',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Shiraz',
			'title_category' => 'lord warden',
			'region' => '240',
			'place' => '957',
			'quarter' => '9431',
			'religion' => '5',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhages',
			'title_category' => 'lord warden',
			'region' => '242',
			'place' => '965',
			'quarter' => '9432',
			'religion' => '5',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Medina',
			'title_category' => 'lord warden',
			'region' => '247',
			'place' => '988',
			'quarter' => '9433',
			'religion' => '5',
			'rank' => '5',
			'career' => 'fixed_hospice'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Damascus',
			'title_category' => 'lord warden',
			'region' => '252',
			'place' => '1005',
			'quarter' => '9434',
			'religion' => '5',
			'rank' => '5',
			'career' => 'fixed_hospice'
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
'title_name' => 'Bremen',
'title_category' => 'gamekeeper',
'region' => '1',
'place' => '1',
'quarter' => '18210',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'gamekeeper',
'region' => '1',
'place' => '2',
'quarter' => '18211',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'gamekeeper',
'region' => '1',
'place' => '3',
'quarter' => '18212',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'gamekeeper',
'region' => '1',
'place' => '4',
'quarter' => '18213',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'gamekeeper',
'region' => '3',
'place' => '9',
'quarter' => '18214',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'gamekeeper',
'region' => '3',
'place' => '10',
'quarter' => '18215',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'gamekeeper',
'region' => '3',
'place' => '11',
'quarter' => '18216',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'gamekeeper',
'region' => '3',
'place' => '12',
'quarter' => '18217',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'gamekeeper',
'region' => '6',
'place' => '21',
'quarter' => '18218',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'gamekeeper',
'region' => '6',
'place' => '22',
'quarter' => '18219',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'gamekeeper',
'region' => '6',
'place' => '23',
'quarter' => '18220',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'gamekeeper',
'region' => '6',
'place' => '24',
'quarter' => '18221',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'gamekeeper',
'region' => '7',
'place' => '25',
'quarter' => '18222',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'gamekeeper',
'region' => '7',
'place' => '26',
'quarter' => '18223',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'gamekeeper',
'region' => '7',
'place' => '27',
'quarter' => '18224',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'gamekeeper',
'region' => '7',
'place' => '28',
'quarter' => '18225',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'gamekeeper',
'region' => '13',
'place' => '49',
'quarter' => '18226',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'gamekeeper',
'region' => '13',
'place' => '50',
'quarter' => '18227',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'gamekeeper',
'region' => '13',
'place' => '51',
'quarter' => '18228',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'gamekeeper',
'region' => '13',
'place' => '52',
'quarter' => '18229',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'gamekeeper',
'region' => '15',
'place' => '57',
'quarter' => '18230',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'gamekeeper',
'region' => '15',
'place' => '58',
'quarter' => '18231',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'gamekeeper',
'region' => '15',
'place' => '59',
'quarter' => '18232',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'gamekeeper',
'region' => '15',
'place' => '60',
'quarter' => '18233',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'gamekeeper',
'region' => '16',
'place' => '61',
'quarter' => '18234',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'gamekeeper',
'region' => '16',
'place' => '62',
'quarter' => '18235',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'gamekeeper',
'region' => '16',
'place' => '63',
'quarter' => '18236',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'gamekeeper',
'region' => '16',
'place' => '64',
'quarter' => '18237',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'gamekeeper',
'region' => '17',
'place' => '65',
'quarter' => '18238',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'gamekeeper',
'region' => '17',
'place' => '66',
'quarter' => '18239',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'gamekeeper',
'region' => '17',
'place' => '67',
'quarter' => '18240',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'gamekeeper',
'region' => '17',
'place' => '68',
'quarter' => '18241',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'gamekeeper',
'region' => '18',
'place' => '69',
'quarter' => '18242',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'gamekeeper',
'region' => '18',
'place' => '70',
'quarter' => '18243',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'gamekeeper',
'region' => '18',
'place' => '71',
'quarter' => '18244',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'gamekeeper',
'region' => '18',
'place' => '72',
'quarter' => '18245',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'gamekeeper',
'region' => '20',
'place' => '77',
'quarter' => '18246',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'gamekeeper',
'region' => '20',
'place' => '78',
'quarter' => '18247',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'gamekeeper',
'region' => '20',
'place' => '79',
'quarter' => '18248',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'gamekeeper',
'region' => '20',
'place' => '80',
'quarter' => '18249',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'gamekeeper',
'region' => '22',
'place' => '85',
'quarter' => '18250',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'gamekeeper',
'region' => '22',
'place' => '86',
'quarter' => '18251',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'gamekeeper',
'region' => '22',
'place' => '87',
'quarter' => '18252',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'gamekeeper',
'region' => '22',
'place' => '88',
'quarter' => '18253',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'gamekeeper',
'region' => '23',
'place' => '89',
'quarter' => '18254',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'gamekeeper',
'region' => '23',
'place' => '90',
'quarter' => '18255',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'gamekeeper',
'region' => '23',
'place' => '91',
'quarter' => '18256',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'gamekeeper',
'region' => '23',
'place' => '92',
'quarter' => '18257',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'gamekeeper',
'region' => '24',
'place' => '93',
'quarter' => '18258',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'gamekeeper',
'region' => '24',
'place' => '94',
'quarter' => '18259',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'gamekeeper',
'region' => '24',
'place' => '95',
'quarter' => '18260',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'gamekeeper',
'region' => '24',
'place' => '96',
'quarter' => '18261',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'gamekeeper',
'region' => '28',
'place' => '109',
'quarter' => '18262',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'gamekeeper',
'region' => '28',
'place' => '110',
'quarter' => '18263',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'gamekeeper',
'region' => '28',
'place' => '111',
'quarter' => '18264',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'gamekeeper',
'region' => '28',
'place' => '112',
'quarter' => '18265',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'gamekeeper',
'region' => '30',
'place' => '117',
'quarter' => '18266',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'gamekeeper',
'region' => '30',
'place' => '118',
'quarter' => '18267',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'gamekeeper',
'region' => '30',
'place' => '119',
'quarter' => '18268',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'gamekeeper',
'region' => '30',
'place' => '120',
'quarter' => '18269',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'gamekeeper',
'region' => '32',
'place' => '125',
'quarter' => '18270',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'gamekeeper',
'region' => '32',
'place' => '126',
'quarter' => '18271',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'gamekeeper',
'region' => '32',
'place' => '127',
'quarter' => '18272',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'gamekeeper',
'region' => '32',
'place' => '128',
'quarter' => '18273',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'gamekeeper',
'region' => '37',
'place' => '145',
'quarter' => '18274',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'gamekeeper',
'region' => '37',
'place' => '146',
'quarter' => '18275',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'gamekeeper',
'region' => '37',
'place' => '147',
'quarter' => '18276',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'gamekeeper',
'region' => '37',
'place' => '148',
'quarter' => '18277',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'gamekeeper',
'region' => '39',
'place' => '153',
'quarter' => '18278',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'gamekeeper',
'region' => '39',
'place' => '154',
'quarter' => '18279',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'gamekeeper',
'region' => '39',
'place' => '155',
'quarter' => '18280',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'gamekeeper',
'region' => '39',
'place' => '156',
'quarter' => '18281',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'gamekeeper',
'region' => '47',
'place' => '185',
'quarter' => '18282',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'gamekeeper',
'region' => '47',
'place' => '186',
'quarter' => '18283',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'gamekeeper',
'region' => '47',
'place' => '187',
'quarter' => '18284',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'gamekeeper',
'region' => '47',
'place' => '188',
'quarter' => '18285',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'gamekeeper',
'region' => '53',
'place' => '209',
'quarter' => '18286',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'gamekeeper',
'region' => '53',
'place' => '210',
'quarter' => '18287',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'gamekeeper',
'region' => '53',
'place' => '211',
'quarter' => '18288',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'gamekeeper',
'region' => '53',
'place' => '212',
'quarter' => '18289',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'gamekeeper',
'region' => '56',
'place' => '221',
'quarter' => '18290',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'gamekeeper',
'region' => '56',
'place' => '222',
'quarter' => '18291',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'gamekeeper',
'region' => '56',
'place' => '223',
'quarter' => '18292',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'gamekeeper',
'region' => '56',
'place' => '224',
'quarter' => '18293',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'gamekeeper',
'region' => '59',
'place' => '233',
'quarter' => '18294',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'gamekeeper',
'region' => '59',
'place' => '234',
'quarter' => '18295',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'gamekeeper',
'region' => '59',
'place' => '235',
'quarter' => '18296',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'gamekeeper',
'region' => '59',
'place' => '236',
'quarter' => '18297',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'gamekeeper',
'region' => '61',
'place' => '241',
'quarter' => '18298',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'gamekeeper',
'region' => '61',
'place' => '242',
'quarter' => '18299',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'gamekeeper',
'region' => '61',
'place' => '243',
'quarter' => '18300',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'gamekeeper',
'region' => '61',
'place' => '244',
'quarter' => '18301',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'gamekeeper',
'region' => '62',
'place' => '245',
'quarter' => '18302',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'gamekeeper',
'region' => '62',
'place' => '246',
'quarter' => '18303',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'gamekeeper',
'region' => '62',
'place' => '247',
'quarter' => '18304',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'gamekeeper',
'region' => '62',
'place' => '248',
'quarter' => '18305',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'gamekeeper',
'region' => '66',
'place' => '261',
'quarter' => '18306',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'gamekeeper',
'region' => '66',
'place' => '262',
'quarter' => '18307',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'gamekeeper',
'region' => '66',
'place' => '263',
'quarter' => '18308',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'gamekeeper',
'region' => '66',
'place' => '264',
'quarter' => '18309',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'gamekeeper',
'region' => '72',
'place' => '285',
'quarter' => '18310',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'gamekeeper',
'region' => '72',
'place' => '286',
'quarter' => '18311',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'gamekeeper',
'region' => '72',
'place' => '287',
'quarter' => '18312',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'gamekeeper',
'region' => '72',
'place' => '288',
'quarter' => '18313',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'gamekeeper',
'region' => '74',
'place' => '293',
'quarter' => '18314',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'gamekeeper',
'region' => '74',
'place' => '294',
'quarter' => '18315',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'gamekeeper',
'region' => '74',
'place' => '295',
'quarter' => '18316',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'gamekeeper',
'region' => '74',
'place' => '296',
'quarter' => '18317',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'gamekeeper',
'region' => '76',
'place' => '301',
'quarter' => '18318',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'gamekeeper',
'region' => '76',
'place' => '302',
'quarter' => '18319',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'gamekeeper',
'region' => '76',
'place' => '303',
'quarter' => '18320',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'gamekeeper',
'region' => '76',
'place' => '304',
'quarter' => '18321',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'gamekeeper',
'region' => '77',
'place' => '305',
'quarter' => '18322',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'gamekeeper',
'region' => '77',
'place' => '306',
'quarter' => '18323',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'gamekeeper',
'region' => '77',
'place' => '307',
'quarter' => '18324',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'gamekeeper',
'region' => '77',
'place' => '308',
'quarter' => '18325',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'gamekeeper',
'region' => '79',
'place' => '313',
'quarter' => '18326',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'gamekeeper',
'region' => '79',
'place' => '314',
'quarter' => '18327',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'gamekeeper',
'region' => '79',
'place' => '315',
'quarter' => '18328',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'gamekeeper',
'region' => '79',
'place' => '316',
'quarter' => '18329',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'gamekeeper',
'region' => '85',
'place' => '337',
'quarter' => '18330',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'gamekeeper',
'region' => '85',
'place' => '338',
'quarter' => '18331',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'gamekeeper',
'region' => '85',
'place' => '339',
'quarter' => '18332',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'gamekeeper',
'region' => '85',
'place' => '340',
'quarter' => '18333',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'gamekeeper',
'region' => '87',
'place' => '345',
'quarter' => '18334',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'gamekeeper',
'region' => '87',
'place' => '346',
'quarter' => '18335',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'gamekeeper',
'region' => '87',
'place' => '347',
'quarter' => '18336',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'gamekeeper',
'region' => '87',
'place' => '348',
'quarter' => '18337',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'gamekeeper',
'region' => '94',
'place' => '373',
'quarter' => '18338',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'gamekeeper',
'region' => '94',
'place' => '374',
'quarter' => '18339',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'gamekeeper',
'region' => '94',
'place' => '375',
'quarter' => '18340',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'gamekeeper',
'region' => '94',
'place' => '376',
'quarter' => '18341',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'gamekeeper',
'region' => '105',
'place' => '417',
'quarter' => '18342',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'gamekeeper',
'region' => '105',
'place' => '418',
'quarter' => '18343',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'gamekeeper',
'region' => '105',
'place' => '419',
'quarter' => '18344',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'gamekeeper',
'region' => '105',
'place' => '420',
'quarter' => '18345',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'gamekeeper',
'region' => '119',
'place' => '473',
'quarter' => '18346',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'gamekeeper',
'region' => '119',
'place' => '474',
'quarter' => '18347',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'gamekeeper',
'region' => '119',
'place' => '475',
'quarter' => '18348',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'gamekeeper',
'region' => '119',
'place' => '476',
'quarter' => '18349',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'gamekeeper',
'region' => '122',
'place' => '485',
'quarter' => '18350',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'gamekeeper',
'region' => '122',
'place' => '486',
'quarter' => '18351',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'gamekeeper',
'region' => '122',
'place' => '487',
'quarter' => '18352',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'gamekeeper',
'region' => '122',
'place' => '488',
'quarter' => '18353',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'gamekeeper',
'region' => '127',
'place' => '505',
'quarter' => '18354',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'gamekeeper',
'region' => '127',
'place' => '506',
'quarter' => '18355',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'gamekeeper',
'region' => '127',
'place' => '507',
'quarter' => '18356',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'gamekeeper',
'region' => '127',
'place' => '508',
'quarter' => '18357',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'gamekeeper',
'region' => '134',
'place' => '533',
'quarter' => '18358',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'gamekeeper',
'region' => '134',
'place' => '534',
'quarter' => '18359',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'gamekeeper',
'region' => '134',
'place' => '535',
'quarter' => '18360',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'gamekeeper',
'region' => '134',
'place' => '536',
'quarter' => '18361',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'gamekeeper',
'region' => '165',
'place' => '657',
'quarter' => '18362',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'gamekeeper',
'region' => '165',
'place' => '658',
'quarter' => '18363',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'gamekeeper',
'region' => '165',
'place' => '659',
'quarter' => '18364',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'gamekeeper',
'region' => '165',
'place' => '660',
'quarter' => '18365',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'gamekeeper',
'region' => '166',
'place' => '661',
'quarter' => '18366',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'gamekeeper',
'region' => '166',
'place' => '662',
'quarter' => '18367',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'gamekeeper',
'region' => '166',
'place' => '663',
'quarter' => '18368',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'gamekeeper',
'region' => '166',
'place' => '664',
'quarter' => '18369',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'gamekeeper',
'region' => '168',
'place' => '669',
'quarter' => '18370',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'gamekeeper',
'region' => '168',
'place' => '670',
'quarter' => '18371',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'gamekeeper',
'region' => '168',
'place' => '671',
'quarter' => '18372',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'gamekeeper',
'region' => '168',
'place' => '672',
'quarter' => '18373',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'gamekeeper',
'region' => '176',
'place' => '701',
'quarter' => '18374',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'gamekeeper',
'region' => '176',
'place' => '702',
'quarter' => '18375',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'gamekeeper',
'region' => '176',
'place' => '703',
'quarter' => '18376',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'gamekeeper',
'region' => '176',
'place' => '704',
'quarter' => '18377',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'gamekeeper',
'region' => '184',
'place' => '733',
'quarter' => '18378',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'gamekeeper',
'region' => '184',
'place' => '734',
'quarter' => '18379',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'gamekeeper',
'region' => '184',
'place' => '735',
'quarter' => '18380',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'gamekeeper',
'region' => '184',
'place' => '736',
'quarter' => '18381',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'gamekeeper',
'region' => '186',
'place' => '741',
'quarter' => '18382',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'gamekeeper',
'region' => '186',
'place' => '742',
'quarter' => '18383',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'gamekeeper',
'region' => '186',
'place' => '743',
'quarter' => '18384',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'gamekeeper',
'region' => '186',
'place' => '744',
'quarter' => '18385',
'religion' => '2',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'gamekeeper',
'region' => '190',
'place' => '757',
'quarter' => '18386',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'gamekeeper',
'region' => '190',
'place' => '758',
'quarter' => '18387',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'gamekeeper',
'region' => '190',
'place' => '759',
'quarter' => '18388',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'gamekeeper',
'region' => '190',
'place' => '760',
'quarter' => '18389',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'gamekeeper',
'region' => '191',
'place' => '761',
'quarter' => '18390',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'gamekeeper',
'region' => '191',
'place' => '762',
'quarter' => '18391',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'gamekeeper',
'region' => '191',
'place' => '763',
'quarter' => '18392',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'gamekeeper',
'region' => '191',
'place' => '764',
'quarter' => '18393',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'gamekeeper',
'region' => '197',
'place' => '785',
'quarter' => '18394',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'gamekeeper',
'region' => '197',
'place' => '786',
'quarter' => '18395',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'gamekeeper',
'region' => '197',
'place' => '787',
'quarter' => '18396',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'gamekeeper',
'region' => '197',
'place' => '788',
'quarter' => '18397',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'gamekeeper',
'region' => '198',
'place' => '789',
'quarter' => '18398',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'gamekeeper',
'region' => '198',
'place' => '790',
'quarter' => '18399',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'gamekeeper',
'region' => '198',
'place' => '791',
'quarter' => '18400',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'gamekeeper',
'region' => '198',
'place' => '792',
'quarter' => '18401',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'gamekeeper',
'region' => '199',
'place' => '793',
'quarter' => '18402',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'gamekeeper',
'region' => '199',
'place' => '794',
'quarter' => '18403',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'gamekeeper',
'region' => '199',
'place' => '795',
'quarter' => '18404',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'gamekeeper',
'region' => '199',
'place' => '796',
'quarter' => '18405',
'religion' => '3',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'gamekeeper',
'region' => '208',
'place' => '829',
'quarter' => '18406',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'gamekeeper',
'region' => '208',
'place' => '830',
'quarter' => '18407',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'gamekeeper',
'region' => '208',
'place' => '831',
'quarter' => '18408',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'gamekeeper',
'region' => '208',
'place' => '832',
'quarter' => '18409',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'gamekeeper',
'region' => '209',
'place' => '833',
'quarter' => '18410',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'gamekeeper',
'region' => '209',
'place' => '834',
'quarter' => '18411',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'gamekeeper',
'region' => '209',
'place' => '835',
'quarter' => '18412',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'gamekeeper',
'region' => '209',
'place' => '836',
'quarter' => '18413',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'gamekeeper',
'region' => '211',
'place' => '841',
'quarter' => '18414',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'gamekeeper',
'region' => '211',
'place' => '842',
'quarter' => '18415',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'gamekeeper',
'region' => '211',
'place' => '843',
'quarter' => '18416',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'gamekeeper',
'region' => '211',
'place' => '844',
'quarter' => '18417',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'gamekeeper',
'region' => '214',
'place' => '853',
'quarter' => '18418',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'gamekeeper',
'region' => '214',
'place' => '854',
'quarter' => '18419',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'gamekeeper',
'region' => '214',
'place' => '855',
'quarter' => '18420',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'gamekeeper',
'region' => '214',
'place' => '856',
'quarter' => '18421',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'gamekeeper',
'region' => '229',
'place' => '913',
'quarter' => '18422',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'gamekeeper',
'region' => '229',
'place' => '914',
'quarter' => '18423',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'gamekeeper',
'region' => '229',
'place' => '915',
'quarter' => '18424',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'gamekeeper',
'region' => '229',
'place' => '916',
'quarter' => '18425',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'gamekeeper',
'region' => '236',
'place' => '941',
'quarter' => '18426',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'gamekeeper',
'region' => '236',
'place' => '942',
'quarter' => '18427',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'gamekeeper',
'region' => '236',
'place' => '943',
'quarter' => '18428',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'gamekeeper',
'region' => '236',
'place' => '944',
'quarter' => '18429',
'religion' => '4',
'rank' => '3',
'career' => 'hunt_game'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'falconer',
'region' => '5',
'place' => '17',
'quarter' => '18430',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'falconer',
'region' => '5',
'place' => '18',
'quarter' => '18431',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'falconer',
'region' => '5',
'place' => '19',
'quarter' => '18432',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'falconer',
'region' => '5',
'place' => '20',
'quarter' => '18433',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'falconer',
'region' => '10',
'place' => '37',
'quarter' => '18434',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'falconer',
'region' => '10',
'place' => '38',
'quarter' => '18435',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'falconer',
'region' => '10',
'place' => '39',
'quarter' => '18436',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'falconer',
'region' => '10',
'place' => '40',
'quarter' => '18437',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'falconer',
'region' => '21',
'place' => '81',
'quarter' => '18438',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'falconer',
'region' => '21',
'place' => '82',
'quarter' => '18439',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'falconer',
'region' => '21',
'place' => '83',
'quarter' => '18440',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'falconer',
'region' => '21',
'place' => '84',
'quarter' => '18441',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'falconer',
'region' => '48',
'place' => '189',
'quarter' => '18442',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'falconer',
'region' => '48',
'place' => '190',
'quarter' => '18443',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'falconer',
'region' => '48',
'place' => '191',
'quarter' => '18444',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'falconer',
'region' => '48',
'place' => '192',
'quarter' => '18445',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'falconer',
'region' => '54',
'place' => '213',
'quarter' => '18446',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'falconer',
'region' => '54',
'place' => '214',
'quarter' => '18447',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'falconer',
'region' => '54',
'place' => '215',
'quarter' => '18448',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'falconer',
'region' => '54',
'place' => '216',
'quarter' => '18449',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'falconer',
'region' => '88',
'place' => '349',
'quarter' => '18450',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'falconer',
'region' => '88',
'place' => '350',
'quarter' => '18451',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'falconer',
'region' => '88',
'place' => '351',
'quarter' => '18452',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'falconer',
'region' => '88',
'place' => '352',
'quarter' => '18453',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'falconer',
'region' => '113',
'place' => '449',
'quarter' => '18454',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'falconer',
'region' => '113',
'place' => '450',
'quarter' => '18455',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'falconer',
'region' => '113',
'place' => '451',
'quarter' => '18456',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'falconer',
'region' => '113',
'place' => '452',
'quarter' => '18457',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'falconer',
'region' => '138',
'place' => '549',
'quarter' => '18458',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'falconer',
'region' => '138',
'place' => '550',
'quarter' => '18459',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'falconer',
'region' => '138',
'place' => '551',
'quarter' => '18460',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'falconer',
'region' => '138',
'place' => '552',
'quarter' => '18461',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'falconer',
'region' => '174',
'place' => '693',
'quarter' => '18462',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'falconer',
'region' => '174',
'place' => '694',
'quarter' => '18463',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'falconer',
'region' => '174',
'place' => '695',
'quarter' => '18464',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'falconer',
'region' => '174',
'place' => '696',
'quarter' => '18465',
'religion' => '1',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'falconer',
'region' => '206',
'place' => '821',
'quarter' => '18466',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'falconer',
'region' => '206',
'place' => '822',
'quarter' => '18467',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'falconer',
'region' => '206',
'place' => '823',
'quarter' => '18468',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'falconer',
'region' => '206',
'place' => '824',
'quarter' => '18469',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'falconer',
'region' => '246',
'place' => '981',
'quarter' => '18470',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'falconer',
'region' => '246',
'place' => '982',
'quarter' => '18471',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'falconer',
'region' => '246',
'place' => '983',
'quarter' => '18472',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'falconer',
'region' => '246',
'place' => '984',
'quarter' => '18473',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'falconer',
'region' => '252',
'place' => '1005',
'quarter' => '18474',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'falconer',
'region' => '252',
'place' => '1006',
'quarter' => '18475',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'falconer',
'region' => '252',
'place' => '1007',
'quarter' => '18476',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'falconer',
'region' => '252',
'place' => '1008',
'quarter' => '18477',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'falconer',
'region' => '260',
'place' => '1037',
'quarter' => '18478',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'falconer',
'region' => '260',
'place' => '1038',
'quarter' => '18479',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'falconer',
'region' => '260',
'place' => '1039',
'quarter' => '18480',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'falconer',
'region' => '260',
'place' => '1040',
'quarter' => '18481',
'religion' => '5',
'rank' => '3',
'career' => 'hunt_falcon'
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

	//ports
	DB::table('titles')->insert([
	'title_name' => 'Bremen',
	'title_category' => 'lord warden',
	'region' => '1',
	'place' => '1',
	'quarter' => '13595',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hamburg',
	'title_category' => 'lord warden',
	'region' => '1',
	'place' => '3',
	'quarter' => '13596',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rostock',
	'title_category' => 'lord warden',
	'region' => '4',
	'place' => '14',
	'quarter' => '13597',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lubeck',
	'title_category' => 'lord warden',
	'region' => '4',
	'place' => '15',
	'quarter' => '13598',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stettin',
	'title_category' => 'lord warden',
	'region' => '6',
	'place' => '21',
	'quarter' => '13599',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kolberg',
	'title_category' => 'lord warden',
	'region' => '6',
	'place' => '23',
	'quarter' => '13600',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Greifswald',
	'title_category' => 'lord warden',
	'region' => '6',
	'place' => '24',
	'quarter' => '13601',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amsterdam',
	'title_category' => 'lord warden',
	'region' => '22',
	'place' => '88',
	'quarter' => '13602',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dokkum',
	'title_category' => 'lord warden',
	'region' => '23',
	'place' => '92',
	'quarter' => '13603',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Antwerp',
	'title_category' => 'lord warden',
	'region' => '24',
	'place' => '95',
	'quarter' => '13604',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bruges',
	'title_category' => 'lord warden',
	'region' => '25',
	'place' => '97',
	'quarter' => '13605',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vannes',
	'title_category' => 'lord warden',
	'region' => '28',
	'place' => '109',
	'quarter' => '13606',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Quimper',
	'title_category' => 'lord warden',
	'region' => '28',
	'place' => '111',
	'quarter' => '13607',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Boulogne',
	'title_category' => 'lord warden',
	'region' => '31',
	'place' => '122',
	'quarter' => '13608',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lisieux',
	'title_category' => 'lord warden',
	'region' => '32',
	'place' => '127',
	'quarter' => '13609',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marseille',
	'title_category' => 'lord warden',
	'region' => '41',
	'place' => '163',
	'quarter' => '13610',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'London',
	'title_category' => 'lord warden',
	'region' => '47',
	'place' => '185',
	'quarter' => '13611',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dover',
	'title_category' => 'lord warden',
	'region' => '48',
	'place' => '190',
	'quarter' => '13612',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Truro',
	'title_category' => 'lord warden',
	'region' => '50',
	'place' => '197',
	'quarter' => '13613',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint German',
	'title_category' => 'lord warden',
	'region' => '50',
	'place' => '199',
	'quarter' => '13614',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Madron',
	'title_category' => 'lord warden',
	'region' => '50',
	'place' => '200',
	'quarter' => '13615',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Scarborough',
	'title_category' => 'lord warden',
	'region' => '52',
	'place' => '207',
	'quarter' => '13616',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oslo',
	'title_category' => 'lord warden',
	'region' => '60',
	'place' => '237',
	'quarter' => '13617',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bergen',
	'title_category' => 'lord warden',
	'region' => '61',
	'place' => '241',
	'quarter' => '13618',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stavanger',
	'title_category' => 'lord warden',
	'region' => '61',
	'place' => '243',
	'quarter' => '13619',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Copenhagen',
	'title_category' => 'lord warden',
	'region' => '62',
	'place' => '245',
	'quarter' => '13620',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trelleborg',
	'title_category' => 'lord warden',
	'region' => '63',
	'place' => '250',
	'quarter' => '13621',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Halmstad',
	'title_category' => 'lord warden',
	'region' => '63',
	'place' => '251',
	'quarter' => '13622',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ripen',
	'title_category' => 'lord warden',
	'region' => '64',
	'place' => '255',
	'quarter' => '13623',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stockholm',
	'title_category' => 'lord warden',
	'region' => '65',
	'place' => '257',
	'quarter' => '13624',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Visby',
	'title_category' => 'lord warden',
	'region' => '66',
	'place' => '261',
	'quarter' => '13625',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riga',
	'title_category' => 'lord warden',
	'region' => '68',
	'place' => '269',
	'quarter' => '13626',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Danzig',
	'title_category' => 'lord warden',
	'region' => '70',
	'place' => '279',
	'quarter' => '13627',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Reval',
	'title_category' => 'lord warden',
	'region' => '72',
	'place' => '285',
	'quarter' => '13628',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hapsal',
	'title_category' => 'lord warden',
	'region' => '72',
	'place' => '288',
	'quarter' => '13629',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Edinburgh',
	'title_category' => 'lord warden',
	'region' => '73',
	'place' => '289',
	'quarter' => '13630',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Caerloverock',
	'title_category' => 'lord warden',
	'region' => '76',
	'place' => '302',
	'quarter' => '13631',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Whithorn',
	'title_category' => 'lord warden',
	'region' => '76',
	'place' => '303',
	'quarter' => '13632',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kirkcudbright',
	'title_category' => 'lord warden',
	'region' => '76',
	'place' => '304',
	'quarter' => '13633',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Saint Andrews',
	'title_category' => 'lord warden',
	'region' => '78',
	'place' => '311',
	'quarter' => '13634',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Nairn',
	'title_category' => 'lord warden',
	'region' => '79',
	'place' => '314',
	'quarter' => '13635',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aberdeen',
	'title_category' => 'lord warden',
	'region' => '79',
	'place' => '316',
	'quarter' => '13636',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dundee',
	'title_category' => 'lord warden',
	'region' => '80',
	'place' => '317',
	'quarter' => '13637',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosemarkie',
	'title_category' => 'lord warden',
	'region' => '81',
	'place' => '323',
	'quarter' => '13638',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dornoch',
	'title_category' => 'lord warden',
	'region' => '81',
	'place' => '324',
	'quarter' => '13639',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Dublin',
	'title_category' => 'lord warden',
	'region' => '82',
	'place' => '325',
	'quarter' => '13640',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrickfergus',
	'title_category' => 'lord warden',
	'region' => '83',
	'place' => '330',
	'quarter' => '13641',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derry',
	'title_category' => 'lord warden',
	'region' => '83',
	'place' => '331',
	'quarter' => '13642',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Galway',
	'title_category' => 'lord warden',
	'region' => '86',
	'place' => '341',
	'quarter' => '13643',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'San Sebastian',
	'title_category' => 'lord warden',
	'region' => '88',
	'place' => '349',
	'quarter' => '13644',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bilbao',
	'title_category' => 'lord warden',
	'region' => '88',
	'place' => '351',
	'quarter' => '13645',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sant Feliu de Guixols',
	'title_category' => 'lord warden',
	'region' => '91',
	'place' => '364',
	'quarter' => '13646',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Barcelona',
	'title_category' => 'lord warden',
	'region' => '92',
	'place' => '365',
	'quarter' => '13647',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valencia',
	'title_category' => 'lord warden',
	'region' => '93',
	'place' => '369',
	'quarter' => '13648',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sagunto',
	'title_category' => 'lord warden',
	'region' => '93',
	'place' => '370',
	'quarter' => '13649',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Castellon',
	'title_category' => 'lord warden',
	'region' => '93',
	'place' => '371',
	'quarter' => '13650',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Denia',
	'title_category' => 'lord warden',
	'region' => '94',
	'place' => '373',
	'quarter' => '13651',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'lord warden',
	'region' => '94',
	'place' => '375',
	'quarter' => '13652',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palma',
	'title_category' => 'lord warden',
	'region' => '95',
	'place' => '377',
	'quarter' => '13653',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pollenca',
	'title_category' => 'lord warden',
	'region' => '95',
	'place' => '378',
	'quarter' => '13654',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aviles',
	'title_category' => 'lord warden',
	'region' => '97',
	'place' => '386',
	'quarter' => '13655',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coruna',
	'title_category' => 'lord warden',
	'region' => '100',
	'place' => '399',
	'quarter' => '13656',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Viana',
	'title_category' => 'lord warden',
	'region' => '102',
	'place' => '407',
	'quarter' => '13657',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cadiz',
	'title_category' => 'lord warden',
	'region' => '108',
	'place' => '431',
	'quarter' => '13658',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Motril',
	'title_category' => 'lord warden',
	'region' => '112',
	'place' => '447',
	'quarter' => '13659',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alicante',
	'title_category' => 'lord warden',
	'region' => '113',
	'place' => '451',
	'quarter' => '13660',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Malaga',
	'title_category' => 'lord warden',
	'region' => '114',
	'place' => '453',
	'quarter' => '13661',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marbella',
	'title_category' => 'lord warden',
	'region' => '114',
	'place' => '455',
	'quarter' => '13662',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Genoa',
	'title_category' => 'lord warden',
	'region' => '117',
	'place' => '465',
	'quarter' => '13663',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Noli',
	'title_category' => 'lord warden',
	'region' => '117',
	'place' => '466',
	'quarter' => '13664',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aleria',
	'title_category' => 'lord warden',
	'region' => '117',
	'place' => '467',
	'quarter' => '13665',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Venice',
	'title_category' => 'lord warden',
	'region' => '118',
	'place' => '469',
	'quarter' => '13666',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chioggia',
	'title_category' => 'lord warden',
	'region' => '118',
	'place' => '471',
	'quarter' => '13667',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Aquileja',
	'title_category' => 'lord warden',
	'region' => '121',
	'place' => '481',
	'quarter' => '13668',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ancona',
	'title_category' => 'lord warden',
	'region' => '124',
	'place' => '495',
	'quarter' => '13669',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pisa',
	'title_category' => 'lord warden',
	'region' => '126',
	'place' => '501',
	'quarter' => '13670',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Carrara',
	'title_category' => 'lord warden',
	'region' => '126',
	'place' => '502',
	'quarter' => '13671',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amalfi',
	'title_category' => 'lord warden',
	'region' => '127',
	'place' => '507',
	'quarter' => '13672',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taranto',
	'title_category' => 'lord warden',
	'region' => '128',
	'place' => '509',
	'quarter' => '13673',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bari',
	'title_category' => 'lord warden',
	'region' => '128',
	'place' => '510',
	'quarter' => '13674',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Brindisi',
	'title_category' => 'lord warden',
	'region' => '128',
	'place' => '512',
	'quarter' => '13675',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rossano',
	'title_category' => 'lord warden',
	'region' => '129',
	'place' => '514',
	'quarter' => '13676',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tropea',
	'title_category' => 'lord warden',
	'region' => '129',
	'place' => '515',
	'quarter' => '13677',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bosa',
	'title_category' => 'lord warden',
	'region' => '131',
	'place' => '523',
	'quarter' => '13678',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Porto Torres',
	'title_category' => 'lord warden',
	'region' => '131',
	'place' => '524',
	'quarter' => '13679',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cagliari',
	'title_category' => 'lord warden',
	'region' => '132',
	'place' => '525',
	'quarter' => '13680',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Palermo',
	'title_category' => 'lord warden',
	'region' => '133',
	'place' => '529',
	'quarter' => '13681',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agrigento',
	'title_category' => 'lord warden',
	'region' => '133',
	'place' => '530',
	'quarter' => '13682',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Cefalu',
	'title_category' => 'lord warden',
	'region' => '133',
	'place' => '531',
	'quarter' => '13683',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Marsala',
	'title_category' => 'lord warden',
	'region' => '133',
	'place' => '532',
	'quarter' => '13684',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Taormina',
	'title_category' => 'lord warden',
	'region' => '134',
	'place' => '534',
	'quarter' => '13685',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Catania',
	'title_category' => 'lord warden',
	'region' => '134',
	'place' => '535',
	'quarter' => '13686',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Siracusa',
	'title_category' => 'lord warden',
	'region' => '135',
	'place' => '537',
	'quarter' => '13687',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Valletta',
	'title_category' => 'lord warden',
	'region' => '135',
	'place' => '539',
	'quarter' => '13688',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tangiers',
	'title_category' => 'lord warden',
	'region' => '136',
	'place' => '541',
	'quarter' => '13689',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ceuta',
	'title_category' => 'lord warden',
	'region' => '136',
	'place' => '542',
	'quarter' => '13690',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sale',
	'title_category' => 'lord warden',
	'region' => '137',
	'place' => '547',
	'quarter' => '13691',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Fedala',
	'title_category' => 'lord warden',
	'region' => '137',
	'place' => '548',
	'quarter' => '13692',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Agadir',
	'title_category' => 'lord warden',
	'region' => '140',
	'place' => '558',
	'quarter' => '13693',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mellila',
	'title_category' => 'lord warden',
	'region' => '142',
	'place' => '567',
	'quarter' => '13694',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Algiers',
	'title_category' => 'lord warden',
	'region' => '146',
	'place' => '581',
	'quarter' => '13695',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tedelles',
	'title_category' => 'lord warden',
	'region' => '146',
	'place' => '583',
	'quarter' => '13696',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Bejaia',
	'title_category' => 'lord warden',
	'region' => '147',
	'place' => '585',
	'quarter' => '13697',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Annaba',
	'title_category' => 'lord warden',
	'region' => '148',
	'place' => '589',
	'quarter' => '13698',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tunis',
	'title_category' => 'lord warden',
	'region' => '149',
	'place' => '593',
	'quarter' => '13699',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hammamet',
	'title_category' => 'lord warden',
	'region' => '149',
	'place' => '595',
	'quarter' => '13700',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Mahdia',
	'title_category' => 'lord warden',
	'region' => '150',
	'place' => '600',
	'quarter' => '13701',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gabes',
	'title_category' => 'lord warden',
	'region' => '151',
	'place' => '601',
	'quarter' => '13702',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'lord warden',
	'region' => '153',
	'place' => '609',
	'quarter' => '13703',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Misrata',
	'title_category' => 'lord warden',
	'region' => '153',
	'place' => '611',
	'quarter' => '13704',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Benghazi',
	'title_category' => 'lord warden',
	'region' => '156',
	'place' => '621',
	'quarter' => '13705',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derna',
	'title_category' => 'lord warden',
	'region' => '156',
	'place' => '622',
	'quarter' => '13706',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tobruk',
	'title_category' => 'lord warden',
	'region' => '156',
	'place' => '623',
	'quarter' => '13707',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandria',
	'title_category' => 'lord warden',
	'region' => '157',
	'place' => '625',
	'quarter' => '13708',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rosetta',
	'title_category' => 'lord warden',
	'region' => '157',
	'place' => '626',
	'quarter' => '13709',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Damietta',
	'title_category' => 'lord warden',
	'region' => '157',
	'place' => '627',
	'quarter' => '13710',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Pula',
	'title_category' => 'lord warden',
	'region' => '167',
	'place' => '665',
	'quarter' => '13711',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rovigno',
	'title_category' => 'lord warden',
	'region' => '167',
	'place' => '666',
	'quarter' => '13712',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Vikla',
	'title_category' => 'lord warden',
	'region' => '167',
	'place' => '667',
	'quarter' => '13713',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trsat',
	'title_category' => 'lord warden',
	'region' => '167',
	'place' => '668',
	'quarter' => '13714',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Ragusa',
	'title_category' => 'lord warden',
	'region' => '168',
	'place' => '669',
	'quarter' => '13715',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Zadar',
	'title_category' => 'lord warden',
	'region' => '168',
	'place' => '670',
	'quarter' => '13716',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Split',
	'title_category' => 'lord warden',
	'region' => '168',
	'place' => '671',
	'quarter' => '13717',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Biograd',
	'title_category' => 'lord warden',
	'region' => '168',
	'place' => '672',
	'quarter' => '13718',
	'religion' => '1',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constanta',
	'title_category' => 'lord warden',
	'region' => '179',
	'place' => '713',
	'quarter' => '13719',
	'religion' => '2',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Odessa',
	'title_category' => 'lord warden',
	'region' => '180',
	'place' => '719',
	'quarter' => '13720',
	'religion' => '2',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Varna',
	'title_category' => 'lord warden',
	'region' => '182',
	'place' => '725',
	'quarter' => '13721',
	'religion' => '2',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samkarsh',
	'title_category' => 'lord warden',
	'region' => '188',
	'place' => '750',
	'quarter' => '13722',
	'religion' => '3',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Oleshia',
	'title_category' => 'lord warden',
	'region' => '188',
	'place' => '752',
	'quarter' => '13723',
	'religion' => '3',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Constantinople',
	'title_category' => 'lord warden',
	'region' => '207',
	'place' => '825',
	'quarter' => '13724',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Redosto',
	'title_category' => 'lord warden',
	'region' => '207',
	'place' => '826',
	'quarter' => '13725',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Thessaloniki',
	'title_category' => 'lord warden',
	'region' => '208',
	'place' => '829',
	'quarter' => '13726',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Stratonicea',
	'title_category' => 'lord warden',
	'region' => '208',
	'place' => '830',
	'quarter' => '13727',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Athens',
	'title_category' => 'lord warden',
	'region' => '209',
	'place' => '833',
	'quarter' => '13728',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lamia',
	'title_category' => 'lord warden',
	'region' => '209',
	'place' => '834',
	'quarter' => '13729',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Modon',
	'title_category' => 'lord warden',
	'region' => '210',
	'place' => '838',
	'quarter' => '13730',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Gardiki',
	'title_category' => 'lord warden',
	'region' => '211',
	'place' => '842',
	'quarter' => '13731',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Lemnos',
	'title_category' => 'lord warden',
	'region' => '214',
	'place' => '854',
	'quarter' => '13732',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chania',
	'title_category' => 'lord warden',
	'region' => '214',
	'place' => '855',
	'quarter' => '13733',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Patros',
	'title_category' => 'lord warden',
	'region' => '214',
	'place' => '856',
	'quarter' => '13734',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Smyrna',
	'title_category' => 'lord warden',
	'region' => '215',
	'place' => '857',
	'quarter' => '13735',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Chios',
	'title_category' => 'lord warden',
	'region' => '215',
	'place' => '859',
	'quarter' => '13736',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kios',
	'title_category' => 'lord warden',
	'region' => '217',
	'place' => '866',
	'quarter' => '13737',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Coracesium',
	'title_category' => 'lord warden',
	'region' => '219',
	'place' => '873',
	'quarter' => '13738',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Rhodos',
	'title_category' => 'lord warden',
	'region' => '219',
	'place' => '874',
	'quarter' => '13739',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Attalia',
	'title_category' => 'lord warden',
	'region' => '219',
	'place' => '875',
	'quarter' => '13740',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Sinope',
	'title_category' => 'lord warden',
	'region' => '221',
	'place' => '881',
	'quarter' => '13741',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Amasra',
	'title_category' => 'lord warden',
	'region' => '221',
	'place' => '883',
	'quarter' => '13742',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tarsus',
	'title_category' => 'lord warden',
	'region' => '222',
	'place' => '885',
	'quarter' => '13743',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Limasol',
	'title_category' => 'lord warden',
	'region' => '222',
	'place' => '888',
	'quarter' => '13744',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Trebizond',
	'title_category' => 'lord warden',
	'region' => '224',
	'place' => '893',
	'quarter' => '13745',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Riza',
	'title_category' => 'lord warden',
	'region' => '224',
	'place' => '895',
	'quarter' => '13746',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Kerasous',
	'title_category' => 'lord warden',
	'region' => '224',
	'place' => '896',
	'quarter' => '13747',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Samsun',
	'title_category' => 'lord warden',
	'region' => '226',
	'place' => '902',
	'quarter' => '13748',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Batumi',
	'title_category' => 'lord warden',
	'region' => '229',
	'place' => '913',
	'quarter' => '13749',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Poti',
	'title_category' => 'lord warden',
	'region' => '229',
	'place' => '914',
	'quarter' => '13750',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Derbent',
	'title_category' => 'lord warden',
	'region' => '231',
	'place' => '921',
	'quarter' => '13751',
	'religion' => '4',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Hormuz',
	'title_category' => 'lord warden',
	'region' => '240',
	'place' => '959',
	'quarter' => '13752',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Jeddah',
	'title_category' => 'lord warden',
	'region' => '247',
	'place' => '987',
	'quarter' => '13753',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Eilat',
	'title_category' => 'lord warden',
	'region' => '248',
	'place' => '990',
	'quarter' => '13754',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Acre',
	'title_category' => 'lord warden',
	'region' => '250',
	'place' => '997',
	'quarter' => '13755',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tyre',
	'title_category' => 'lord warden',
	'region' => '250',
	'place' => '1000',
	'quarter' => '13756',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Tripoli',
	'title_category' => 'lord warden',
	'region' => '254',
	'place' => '1013',
	'quarter' => '13757',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Beirut',
	'title_category' => 'lord warden',
	'region' => '254',
	'place' => '1015',
	'quarter' => '13758',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);
	DB::table('titles')->insert([
	'title_name' => 'Alexandretta',
	'title_category' => 'lord warden',
	'region' => '255',
	'place' => '1018',
	'quarter' => '13759',
	'religion' => '5',
	'rank' => '5',
	'career' => 'harbour_master'
	]);

	//extra abbeys
	DB::table('titles')->insert([
		'title_name' => 'Wexford',
		'title_category' => 'abbot',
		'region' => '84',
		'place' => '333',
		'quarter' => '16040',
		'religion' => '1',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Santo Domingo de Silos',
		'title_category' => 'abbot',
		'region' => '99',
		'place' => '394',
		'quarter' => '16041',
		'religion' => '1',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Georgenburg',
		'title_category' => 'abbot',
		'region' => '71',
		'place' => '284',
		'quarter' => '16070',
		'religion' => '1',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Avis',
		'title_category' => 'abbot',
		'region' => '105',
		'place' => '420',
		'quarter' => '16085',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Alvor',
		'title_category' => 'abbot',
		'region' => '106',
		'place' => '423',
		'quarter' => '16086',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Huelva',
		'title_category' => 'abbot',
		'region' => '108',
		'place' => '432',
		'quarter' => '16087',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Touggourt',
		'title_category' => 'abbot',
		'region' => '145',
		'place' => '580',
		'quarter' => '16092',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Sergiev',
		'title_category' => 'abbot',
		'region' => '197',
		'place' => '786',
		'quarter' => '16107',
		'religion' => '3',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Hama',
		'title_category' => 'abbot',
		'region' => '253',
		'place' => '1012',
		'quarter' => '16116',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	DB::table('titles')->insert([
		'title_name' => 'Afrin',
		'title_category' => 'abbot',
		'region' => '255',
		'place' => '1020',
		'quarter' => '16117',
		'religion' => '5',
		'rank' => '4',
		'career' => 'fixed_monastic'
	]);

	//tiltyard knights
	DB::table('titles')->insert([
		'title_name' => 'Meissen',
		'title_category' => 'knight',
		'region' => '2',
		'place' => '5',
		'quarter' => '14905',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Dresden',
		'title_category' => 'knight',
		'region' => '2',
		'place' => '6',
		'quarter' => '14906',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Erfurt',
		'title_category' => 'knight',
		'region' => '2',
		'place' => '7',
		'quarter' => '14907',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Chemnitz',
		'title_category' => 'knight',
		'region' => '2',
		'place' => '8',
		'quarter' => '14908',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Regensburg',
		'title_category' => 'knight',
		'region' => '8',
		'place' => '29',
		'quarter' => '14909',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Augsburg',
		'title_category' => 'knight',
		'region' => '8',
		'place' => '30',
		'quarter' => '14910',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Wurzburg',
		'title_category' => 'knight',
		'region' => '8',
		'place' => '31',
		'quarter' => '14911',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Nuremberg',
		'title_category' => 'knight',
		'region' => '8',
		'place' => '32',
		'quarter' => '14912',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Innsbruck',
		'title_category' => 'knight',
		'region' => '12',
		'place' => '45',
		'quarter' => '14913',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Bozen',
		'title_category' => 'knight',
		'region' => '12',
		'place' => '46',
		'quarter' => '14914',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Trent',
		'title_category' => 'knight',
		'region' => '12',
		'place' => '47',
		'quarter' => '14915',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Brixen',
		'title_category' => 'knight',
		'region' => '12',
		'place' => '48',
		'quarter' => '14916',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Bruges',
		'title_category' => 'knight',
		'region' => '25',
		'place' => '97',
		'quarter' => '14917',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Ghent',
		'title_category' => 'knight',
		'region' => '25',
		'place' => '98',
		'quarter' => '14918',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Cambrai',
		'title_category' => 'knight',
		'region' => '25',
		'place' => '99',
		'quarter' => '14919',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Ypres',
		'title_category' => 'knight',
		'region' => '25',
		'place' => '100',
		'quarter' => '14920',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Paris',
		'title_category' => 'knight',
		'region' => '29',
		'place' => '113',
		'quarter' => '14921',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Meaux',
		'title_category' => 'knight',
		'region' => '29',
		'place' => '114',
		'quarter' => '14922',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Chartres',
		'title_category' => 'knight',
		'region' => '29',
		'place' => '115',
		'quarter' => '14923',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Saint Denis',
		'title_category' => 'knight',
		'region' => '29',
		'place' => '116',
		'quarter' => '14924',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Amiens',
		'title_category' => 'knight',
		'region' => '31',
		'place' => '121',
		'quarter' => '14925',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Boulogne',
		'title_category' => 'knight',
		'region' => '31',
		'place' => '122',
		'quarter' => '14926',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Laon',
		'title_category' => 'knight',
		'region' => '31',
		'place' => '123',
		'quarter' => '14927',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Saint Omer',
		'title_category' => 'knight',
		'region' => '31',
		'place' => '124',
		'quarter' => '14928',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Orleans',
		'title_category' => 'knight',
		'region' => '34',
		'place' => '133',
		'quarter' => '14929',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Chateaudun',
		'title_category' => 'knight',
		'region' => '34',
		'place' => '134',
		'quarter' => '14930',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Blois',
		'title_category' => 'knight',
		'region' => '34',
		'place' => '135',
		'quarter' => '14931',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Vendome',
		'title_category' => 'knight',
		'region' => '34',
		'place' => '136',
		'quarter' => '14932',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Arles',
		'title_category' => 'knight',
		'region' => '41',
		'place' => '161',
		'quarter' => '14933',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Aix',
		'title_category' => 'knight',
		'region' => '41',
		'place' => '162',
		'quarter' => '14934',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Marseille',
		'title_category' => 'knight',
		'region' => '41',
		'place' => '163',
		'quarter' => '14935',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Avignon',
		'title_category' => 'knight',
		'region' => '41',
		'place' => '164',
		'quarter' => '14936',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Dijon',
		'title_category' => 'knight',
		'region' => '46',
		'place' => '181',
		'quarter' => '14937',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Besancon',
		'title_category' => 'knight',
		'region' => '46',
		'place' => '182',
		'quarter' => '14938',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Chalon',
		'title_category' => 'knight',
		'region' => '46',
		'place' => '183',
		'quarter' => '14939',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Citeaux',
		'title_category' => 'knight',
		'region' => '46',
		'place' => '184',
		'quarter' => '14940',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'York',
		'title_category' => 'knight',
		'region' => '52',
		'place' => '205',
		'quarter' => '14941',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Durham',
		'title_category' => 'knight',
		'region' => '52',
		'place' => '206',
		'quarter' => '14942',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Scarborough',
		'title_category' => 'knight',
		'region' => '52',
		'place' => '207',
		'quarter' => '14943',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Lancaster',
		'title_category' => 'knight',
		'region' => '52',
		'place' => '208',
		'quarter' => '14944',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Tamworth',
		'title_category' => 'knight',
		'region' => '55',
		'place' => '217',
		'quarter' => '14945',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Warwick',
		'title_category' => 'knight',
		'region' => '55',
		'place' => '218',
		'quarter' => '14946',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Stafford',
		'title_category' => 'knight',
		'region' => '55',
		'place' => '219',
		'quarter' => '14947',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Leicester',
		'title_category' => 'knight',
		'region' => '55',
		'place' => '220',
		'quarter' => '14948',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Edinburgh',
		'title_category' => 'knight',
		'region' => '73',
		'place' => '289',
		'quarter' => '14949',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Linlithgow',
		'title_category' => 'knight',
		'region' => '73',
		'place' => '290',
		'quarter' => '14950',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Dunbar',
		'title_category' => 'knight',
		'region' => '73',
		'place' => '291',
		'quarter' => '14951',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Haddington',
		'title_category' => 'knight',
		'region' => '73',
		'place' => '292',
		'quarter' => '14952',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Leon',
		'title_category' => 'knight',
		'region' => '96',
		'place' => '381',
		'quarter' => '14953',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Robla',
		'title_category' => 'knight',
		'region' => '96',
		'place' => '382',
		'quarter' => '14954',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'San Guillermo',
		'title_category' => 'knight',
		'region' => '96',
		'place' => '383',
		'quarter' => '14955',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Sahagun',
		'title_category' => 'knight',
		'region' => '96',
		'place' => '384',
		'quarter' => '14956',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Valladolid',
		'title_category' => 'knight',
		'region' => '98',
		'place' => '389',
		'quarter' => '14957',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Avila',
		'title_category' => 'knight',
		'region' => '98',
		'place' => '390',
		'quarter' => '14958',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Segovia',
		'title_category' => 'knight',
		'region' => '98',
		'place' => '391',
		'quarter' => '14959',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Salamanca',
		'title_category' => 'knight',
		'region' => '98',
		'place' => '392',
		'quarter' => '14960',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Florence',
		'title_category' => 'knight',
		'region' => '123',
		'place' => '489',
		'quarter' => '14961',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Siena',
		'title_category' => 'knight',
		'region' => '123',
		'place' => '490',
		'quarter' => '14962',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Arezzo',
		'title_category' => 'knight',
		'region' => '123',
		'place' => '491',
		'quarter' => '14963',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Grosseto',
		'title_category' => 'knight',
		'region' => '123',
		'place' => '492',
		'quarter' => '14964',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Spoleto',
		'title_category' => 'knight',
		'region' => '124',
		'place' => '493',
		'quarter' => '14965',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Aquila',
		'title_category' => 'knight',
		'region' => '124',
		'place' => '494',
		'quarter' => '14966',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Ancona',
		'title_category' => 'knight',
		'region' => '124',
		'place' => '495',
		'quarter' => '14967',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]);
		DB::table('titles')->insert([
		'title_name' => 'Assissi',
		'title_category' => 'knight',
		'region' => '124',
		'place' => '496',
		'quarter' => '14968',
		'religion' => '1',
		'rank' => '3',
		'career' => 'fixed_gentry'
		]); 

		//markets

		//factories
	
	}
}
