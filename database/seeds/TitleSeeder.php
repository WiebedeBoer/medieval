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
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'patrician',
'region' => '1',
'place' => '1',
'quarter' => '16130',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'hufner',
'region' => '1',
'place' => '2',
'quarter' => '16131',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'patrician',
'region' => '1',
'place' => '3',
'quarter' => '16132',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'hufner',
'region' => '1',
'place' => '4',
'quarter' => '16133',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'patrician',
'region' => '2',
'place' => '5',
'quarter' => '16134',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'patrician',
'region' => '2',
'place' => '6',
'quarter' => '16135',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'patrician',
'region' => '2',
'place' => '7',
'quarter' => '16136',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'patrician',
'region' => '2',
'place' => '8',
'quarter' => '16137',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'patrician',
'region' => '3',
'place' => '9',
'quarter' => '16138',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'patrician',
'region' => '3',
'place' => '10',
'quarter' => '16139',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'patrician',
'region' => '3',
'place' => '11',
'quarter' => '16140',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'hufner',
'region' => '3',
'place' => '12',
'quarter' => '16141',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'patrician',
'region' => '4',
'place' => '13',
'quarter' => '16142',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'patrician',
'region' => '4',
'place' => '14',
'quarter' => '16143',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'patrician',
'region' => '4',
'place' => '15',
'quarter' => '16144',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'hufner',
'region' => '4',
'place' => '16',
'quarter' => '16145',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'patrician',
'region' => '5',
'place' => '17',
'quarter' => '16146',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'patrician',
'region' => '5',
'place' => '18',
'quarter' => '16147',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'patrician',
'region' => '5',
'place' => '19',
'quarter' => '16148',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'hufner',
'region' => '5',
'place' => '20',
'quarter' => '16149',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'patrician',
'region' => '6',
'place' => '21',
'quarter' => '16150',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'hufner',
'region' => '6',
'place' => '22',
'quarter' => '16151',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'patrician',
'region' => '6',
'place' => '23',
'quarter' => '16152',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'patrician',
'region' => '6',
'place' => '24',
'quarter' => '16153',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'patrician',
'region' => '7',
'place' => '25',
'quarter' => '16154',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'hufner',
'region' => '7',
'place' => '26',
'quarter' => '16155',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'patrician',
'region' => '7',
'place' => '27',
'quarter' => '16156',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'patrician',
'region' => '7',
'place' => '28',
'quarter' => '16157',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '29',
'quarter' => '16158',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '30',
'quarter' => '16159',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '31',
'quarter' => '16160',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'patrician',
'region' => '8',
'place' => '32',
'quarter' => '16161',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'patrician',
'region' => '9',
'place' => '33',
'quarter' => '16162',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'hufner',
'region' => '9',
'place' => '34',
'quarter' => '16163',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'patrician',
'region' => '9',
'place' => '35',
'quarter' => '16164',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'hufner',
'region' => '9',
'place' => '36',
'quarter' => '16165',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'patrician',
'region' => '10',
'place' => '37',
'quarter' => '16166',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'hufner',
'region' => '10',
'place' => '38',
'quarter' => '16167',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'patrician',
'region' => '10',
'place' => '39',
'quarter' => '16168',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'patrician',
'region' => '10',
'place' => '40',
'quarter' => '16169',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'patrician',
'region' => '11',
'place' => '41',
'quarter' => '16170',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'patrician',
'region' => '11',
'place' => '42',
'quarter' => '16171',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'patrician',
'region' => '11',
'place' => '43',
'quarter' => '16172',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'hufner',
'region' => '11',
'place' => '44',
'quarter' => '16173',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'patrician',
'region' => '12',
'place' => '45',
'quarter' => '16174',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'patrician',
'region' => '12',
'place' => '46',
'quarter' => '16175',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'patrician',
'region' => '12',
'place' => '47',
'quarter' => '16176',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'patrician',
'region' => '12',
'place' => '48',
'quarter' => '16177',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'patrician',
'region' => '13',
'place' => '49',
'quarter' => '16178',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'hufner',
'region' => '13',
'place' => '50',
'quarter' => '16179',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'patrician',
'region' => '13',
'place' => '51',
'quarter' => '16180',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'hufner',
'region' => '13',
'place' => '52',
'quarter' => '16181',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'patrician',
'region' => '14',
'place' => '53',
'quarter' => '16182',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'patrician',
'region' => '14',
'place' => '54',
'quarter' => '16183',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'patrician',
'region' => '14',
'place' => '55',
'quarter' => '16184',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'patrician',
'region' => '14',
'place' => '56',
'quarter' => '16185',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'patrician',
'region' => '15',
'place' => '57',
'quarter' => '16186',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'patrician',
'region' => '15',
'place' => '58',
'quarter' => '16187',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'patrician',
'region' => '15',
'place' => '59',
'quarter' => '16188',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'patrician',
'region' => '15',
'place' => '60',
'quarter' => '16189',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'patrician',
'region' => '16',
'place' => '61',
'quarter' => '16190',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'hufner',
'region' => '16',
'place' => '62',
'quarter' => '16191',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'patrician',
'region' => '16',
'place' => '63',
'quarter' => '16192',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'hufner',
'region' => '16',
'place' => '64',
'quarter' => '16193',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'patrician',
'region' => '17',
'place' => '65',
'quarter' => '16194',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'patrician',
'region' => '17',
'place' => '66',
'quarter' => '16195',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'patrician',
'region' => '17',
'place' => '67',
'quarter' => '16196',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'hufner',
'region' => '17',
'place' => '68',
'quarter' => '16197',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'patrician',
'region' => '18',
'place' => '69',
'quarter' => '16198',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'patrician',
'region' => '18',
'place' => '70',
'quarter' => '16199',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'patrician',
'region' => '18',
'place' => '71',
'quarter' => '16200',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'hufner',
'region' => '18',
'place' => '72',
'quarter' => '16201',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'patrician',
'region' => '19',
'place' => '73',
'quarter' => '16202',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'patrician',
'region' => '19',
'place' => '74',
'quarter' => '16203',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'patrician',
'region' => '19',
'place' => '75',
'quarter' => '16204',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'hufner',
'region' => '19',
'place' => '76',
'quarter' => '16205',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'patrician',
'region' => '20',
'place' => '77',
'quarter' => '16206',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'patrician',
'region' => '20',
'place' => '78',
'quarter' => '16207',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'patrician',
'region' => '20',
'place' => '79',
'quarter' => '16208',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'hufner',
'region' => '20',
'place' => '80',
'quarter' => '16209',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'hufner',
'region' => '21',
'place' => '81',
'quarter' => '16210',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'patrician',
'region' => '21',
'place' => '82',
'quarter' => '16211',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'patrician',
'region' => '21',
'place' => '83',
'quarter' => '16212',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'patrician',
'region' => '21',
'place' => '84',
'quarter' => '16213',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'patrician',
'region' => '22',
'place' => '85',
'quarter' => '16214',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'patrician',
'region' => '22',
'place' => '86',
'quarter' => '16215',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'patrician',
'region' => '22',
'place' => '87',
'quarter' => '16216',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'patrician',
'region' => '22',
'place' => '88',
'quarter' => '16217',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'patrician',
'region' => '23',
'place' => '89',
'quarter' => '16218',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'patrician',
'region' => '23',
'place' => '90',
'quarter' => '16219',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'patrician',
'region' => '23',
'place' => '91',
'quarter' => '16220',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'patrician',
'region' => '23',
'place' => '92',
'quarter' => '16221',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'patrician',
'region' => '24',
'place' => '93',
'quarter' => '16222',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'patrician',
'region' => '24',
'place' => '94',
'quarter' => '16223',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'patrician',
'region' => '24',
'place' => '95',
'quarter' => '16224',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'hufner',
'region' => '24',
'place' => '96',
'quarter' => '16225',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'patrician',
'region' => '25',
'place' => '97',
'quarter' => '16226',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'patrician',
'region' => '25',
'place' => '98',
'quarter' => '16227',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'patrician',
'region' => '25',
'place' => '99',
'quarter' => '16228',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'patrician',
'region' => '25',
'place' => '100',
'quarter' => '16229',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'patrician',
'region' => '26',
'place' => '101',
'quarter' => '16230',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'patrician',
'region' => '26',
'place' => '102',
'quarter' => '16231',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'patrician',
'region' => '26',
'place' => '103',
'quarter' => '16232',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'hufner',
'region' => '26',
'place' => '104',
'quarter' => '16233',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'patrician',
'region' => '27',
'place' => '105',
'quarter' => '16234',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'hufner',
'region' => '27',
'place' => '106',
'quarter' => '16235',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'patrician',
'region' => '27',
'place' => '107',
'quarter' => '16236',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'hufner',
'region' => '27',
'place' => '108',
'quarter' => '16237',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'patrician',
'region' => '28',
'place' => '109',
'quarter' => '16238',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'hufner',
'region' => '28',
'place' => '110',
'quarter' => '16239',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'patrician',
'region' => '28',
'place' => '111',
'quarter' => '16240',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'hufner',
'region' => '28',
'place' => '112',
'quarter' => '16241',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'patrician',
'region' => '29',
'place' => '113',
'quarter' => '16242',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'patrician',
'region' => '29',
'place' => '114',
'quarter' => '16243',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'patrician',
'region' => '29',
'place' => '115',
'quarter' => '16244',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'patrician',
'region' => '29',
'place' => '116',
'quarter' => '16245',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'hufner',
'region' => '30',
'place' => '117',
'quarter' => '16246',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'hufner',
'region' => '30',
'place' => '118',
'quarter' => '16247',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'patrician',
'region' => '30',
'place' => '119',
'quarter' => '16248',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'patrician',
'region' => '30',
'place' => '120',
'quarter' => '16249',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'patrician',
'region' => '31',
'place' => '121',
'quarter' => '16250',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'patrician',
'region' => '31',
'place' => '122',
'quarter' => '16251',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'patrician',
'region' => '31',
'place' => '123',
'quarter' => '16252',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'patrician',
'region' => '31',
'place' => '124',
'quarter' => '16253',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'patrician',
'region' => '32',
'place' => '125',
'quarter' => '16254',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'patrician',
'region' => '32',
'place' => '126',
'quarter' => '16255',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'patrician',
'region' => '32',
'place' => '127',
'quarter' => '16256',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'patrician',
'region' => '32',
'place' => '128',
'quarter' => '16257',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'patrician',
'region' => '33',
'place' => '129',
'quarter' => '16258',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'hufner',
'region' => '33',
'place' => '130',
'quarter' => '16259',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'patrician',
'region' => '33',
'place' => '131',
'quarter' => '16260',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'hufner',
'region' => '33',
'place' => '132',
'quarter' => '16261',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'patrician',
'region' => '34',
'place' => '133',
'quarter' => '16262',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'hufner',
'region' => '34',
'place' => '134',
'quarter' => '16263',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'patrician',
'region' => '34',
'place' => '135',
'quarter' => '16264',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'hufner',
'region' => '34',
'place' => '136',
'quarter' => '16265',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'patrician',
'region' => '35',
'place' => '137',
'quarter' => '16266',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'hufner',
'region' => '35',
'place' => '138',
'quarter' => '16267',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'hufner',
'region' => '35',
'place' => '139',
'quarter' => '16268',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'hufner',
'region' => '35',
'place' => '140',
'quarter' => '16269',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'patrician',
'region' => '36',
'place' => '141',
'quarter' => '16270',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'hufner',
'region' => '36',
'place' => '142',
'quarter' => '16271',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'patrician',
'region' => '36',
'place' => '143',
'quarter' => '16272',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'hufner',
'region' => '36',
'place' => '144',
'quarter' => '16273',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'patrician',
'region' => '37',
'place' => '145',
'quarter' => '16274',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'hufner',
'region' => '37',
'place' => '146',
'quarter' => '16275',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'patrician',
'region' => '37',
'place' => '147',
'quarter' => '16276',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'hufner',
'region' => '37',
'place' => '148',
'quarter' => '16277',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'patrician',
'region' => '38',
'place' => '149',
'quarter' => '16278',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'hufner',
'region' => '38',
'place' => '150',
'quarter' => '16279',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'patrician',
'region' => '38',
'place' => '151',
'quarter' => '16280',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'patrician',
'region' => '38',
'place' => '152',
'quarter' => '16281',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'patrician',
'region' => '39',
'place' => '153',
'quarter' => '16282',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'hufner',
'region' => '39',
'place' => '154',
'quarter' => '16283',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'hufner',
'region' => '39',
'place' => '155',
'quarter' => '16284',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'hufner',
'region' => '39',
'place' => '156',
'quarter' => '16285',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'patrician',
'region' => '40',
'place' => '157',
'quarter' => '16286',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'hufner',
'region' => '40',
'place' => '158',
'quarter' => '16287',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'patrician',
'region' => '40',
'place' => '159',
'quarter' => '16288',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'hufner',
'region' => '40',
'place' => '160',
'quarter' => '16289',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'patrician',
'region' => '41',
'place' => '161',
'quarter' => '16290',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'patrician',
'region' => '41',
'place' => '162',
'quarter' => '16291',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'patrician',
'region' => '41',
'place' => '163',
'quarter' => '16292',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'patrician',
'region' => '41',
'place' => '164',
'quarter' => '16293',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'patrician',
'region' => '42',
'place' => '165',
'quarter' => '16294',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'patrician',
'region' => '42',
'place' => '166',
'quarter' => '16295',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'patrician',
'region' => '42',
'place' => '167',
'quarter' => '16296',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'hufner',
'region' => '42',
'place' => '168',
'quarter' => '16297',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'patrician',
'region' => '43',
'place' => '169',
'quarter' => '16298',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'patrician',
'region' => '43',
'place' => '170',
'quarter' => '16299',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'patrician',
'region' => '43',
'place' => '171',
'quarter' => '16300',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'hufner',
'region' => '43',
'place' => '172',
'quarter' => '16301',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'patrician',
'region' => '44',
'place' => '173',
'quarter' => '16302',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'patrician',
'region' => '44',
'place' => '174',
'quarter' => '16303',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'patrician',
'region' => '44',
'place' => '175',
'quarter' => '16304',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'hufner',
'region' => '44',
'place' => '176',
'quarter' => '16305',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'patrician',
'region' => '45',
'place' => '177',
'quarter' => '16306',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'patrician',
'region' => '45',
'place' => '178',
'quarter' => '16307',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'patrician',
'region' => '45',
'place' => '179',
'quarter' => '16308',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'patrician',
'region' => '45',
'place' => '180',
'quarter' => '16309',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'patrician',
'region' => '46',
'place' => '181',
'quarter' => '16310',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'patrician',
'region' => '46',
'place' => '182',
'quarter' => '16311',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'patrician',
'region' => '46',
'place' => '183',
'quarter' => '16312',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'hufner',
'region' => '46',
'place' => '184',
'quarter' => '16313',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'patrician',
'region' => '47',
'place' => '185',
'quarter' => '16314',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'hufner',
'region' => '47',
'place' => '186',
'quarter' => '16315',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'patrician',
'region' => '47',
'place' => '187',
'quarter' => '16316',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'patrician',
'region' => '47',
'place' => '188',
'quarter' => '16317',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'patrician',
'region' => '48',
'place' => '189',
'quarter' => '16318',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'patrician',
'region' => '48',
'place' => '190',
'quarter' => '16319',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'patrician',
'region' => '48',
'place' => '191',
'quarter' => '16320',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'patrician',
'region' => '48',
'place' => '192',
'quarter' => '16321',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'patrician',
'region' => '49',
'place' => '193',
'quarter' => '16322',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'hufner',
'region' => '49',
'place' => '194',
'quarter' => '16323',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'patrician',
'region' => '49',
'place' => '195',
'quarter' => '16324',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'hufner',
'region' => '49',
'place' => '196',
'quarter' => '16325',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'patrician',
'region' => '50',
'place' => '197',
'quarter' => '16326',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'patrician',
'region' => '50',
'place' => '198',
'quarter' => '16327',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'patrician',
'region' => '50',
'place' => '199',
'quarter' => '16328',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'hufner',
'region' => '50',
'place' => '200',
'quarter' => '16329',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'patrician',
'region' => '51',
'place' => '201',
'quarter' => '16330',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'patrician',
'region' => '51',
'place' => '202',
'quarter' => '16331',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'patrician',
'region' => '51',
'place' => '203',
'quarter' => '16332',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'hufner',
'region' => '51',
'place' => '204',
'quarter' => '16333',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'patrician',
'region' => '52',
'place' => '205',
'quarter' => '16334',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'patrician',
'region' => '52',
'place' => '206',
'quarter' => '16335',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'patrician',
'region' => '52',
'place' => '207',
'quarter' => '16336',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'patrician',
'region' => '52',
'place' => '208',
'quarter' => '16337',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'patrician',
'region' => '53',
'place' => '209',
'quarter' => '16338',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'patrician',
'region' => '53',
'place' => '210',
'quarter' => '16339',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'patrician',
'region' => '53',
'place' => '211',
'quarter' => '16340',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'patrician',
'region' => '53',
'place' => '212',
'quarter' => '16341',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'patrician',
'region' => '54',
'place' => '213',
'quarter' => '16342',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'patrician',
'region' => '54',
'place' => '214',
'quarter' => '16343',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'patrician',
'region' => '54',
'place' => '215',
'quarter' => '16344',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'patrician',
'region' => '54',
'place' => '216',
'quarter' => '16345',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'hufner',
'region' => '55',
'place' => '217',
'quarter' => '16346',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'patrician',
'region' => '55',
'place' => '218',
'quarter' => '16347',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'patrician',
'region' => '55',
'place' => '219',
'quarter' => '16348',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'patrician',
'region' => '55',
'place' => '220',
'quarter' => '16349',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'patrician',
'region' => '56',
'place' => '221',
'quarter' => '16350',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'hufner',
'region' => '56',
'place' => '222',
'quarter' => '16351',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'patrician',
'region' => '56',
'place' => '223',
'quarter' => '16352',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'patrician',
'region' => '56',
'place' => '224',
'quarter' => '16353',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'patrician',
'region' => '57',
'place' => '225',
'quarter' => '16354',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'hufner',
'region' => '57',
'place' => '226',
'quarter' => '16355',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'patrician',
'region' => '57',
'place' => '227',
'quarter' => '16356',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'hufner',
'region' => '57',
'place' => '228',
'quarter' => '16357',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'patrician',
'region' => '58',
'place' => '229',
'quarter' => '16358',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'patrician',
'region' => '58',
'place' => '230',
'quarter' => '16359',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'patrician',
'region' => '58',
'place' => '231',
'quarter' => '16360',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'hufner',
'region' => '58',
'place' => '232',
'quarter' => '16361',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'patrician',
'region' => '59',
'place' => '233',
'quarter' => '16362',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'patrician',
'region' => '59',
'place' => '234',
'quarter' => '16363',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'patrician',
'region' => '59',
'place' => '235',
'quarter' => '16364',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'patrician',
'region' => '59',
'place' => '236',
'quarter' => '16365',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'patrician',
'region' => '60',
'place' => '237',
'quarter' => '16366',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'hufner',
'region' => '60',
'place' => '238',
'quarter' => '16367',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'patrician',
'region' => '60',
'place' => '239',
'quarter' => '16368',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'hufner',
'region' => '60',
'place' => '240',
'quarter' => '16369',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'patrician',
'region' => '61',
'place' => '241',
'quarter' => '16370',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'hufner',
'region' => '61',
'place' => '242',
'quarter' => '16371',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'patrician',
'region' => '61',
'place' => '243',
'quarter' => '16372',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'hufner',
'region' => '61',
'place' => '244',
'quarter' => '16373',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'patrician',
'region' => '62',
'place' => '245',
'quarter' => '16374',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'hufner',
'region' => '62',
'place' => '246',
'quarter' => '16375',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'patrician',
'region' => '62',
'place' => '247',
'quarter' => '16376',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'hufner',
'region' => '62',
'place' => '248',
'quarter' => '16377',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'patrician',
'region' => '63',
'place' => '249',
'quarter' => '16378',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'hufner',
'region' => '63',
'place' => '250',
'quarter' => '16379',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'patrician',
'region' => '63',
'place' => '251',
'quarter' => '16380',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'hufner',
'region' => '63',
'place' => '252',
'quarter' => '16381',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'patrician',
'region' => '64',
'place' => '253',
'quarter' => '16382',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'patrician',
'region' => '64',
'place' => '254',
'quarter' => '16383',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'patrician',
'region' => '64',
'place' => '255',
'quarter' => '16384',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'hufner',
'region' => '64',
'place' => '256',
'quarter' => '16385',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'patrician',
'region' => '65',
'place' => '257',
'quarter' => '16386',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'patrician',
'region' => '65',
'place' => '258',
'quarter' => '16387',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'patrician',
'region' => '65',
'place' => '259',
'quarter' => '16388',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'hufner',
'region' => '65',
'place' => '260',
'quarter' => '16389',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'patrician',
'region' => '66',
'place' => '261',
'quarter' => '16390',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'hufner',
'region' => '66',
'place' => '262',
'quarter' => '16391',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'patrician',
'region' => '66',
'place' => '263',
'quarter' => '16392',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'hufner',
'region' => '66',
'place' => '264',
'quarter' => '16393',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'patrician',
'region' => '67',
'place' => '265',
'quarter' => '16394',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'hufner',
'region' => '67',
'place' => '266',
'quarter' => '16395',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'patrician',
'region' => '67',
'place' => '267',
'quarter' => '16396',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'hufner',
'region' => '67',
'place' => '268',
'quarter' => '16397',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'patrician',
'region' => '68',
'place' => '269',
'quarter' => '16398',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'hufner',
'region' => '68',
'place' => '270',
'quarter' => '16399',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'patrician',
'region' => '68',
'place' => '271',
'quarter' => '16400',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'hufner',
'region' => '68',
'place' => '272',
'quarter' => '16401',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'patrician',
'region' => '69',
'place' => '273',
'quarter' => '16402',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'patrician',
'region' => '69',
'place' => '274',
'quarter' => '16403',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'patrician',
'region' => '69',
'place' => '275',
'quarter' => '16404',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'hufner',
'region' => '69',
'place' => '276',
'quarter' => '16405',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'patrician',
'region' => '70',
'place' => '277',
'quarter' => '16406',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'hufner',
'region' => '70',
'place' => '278',
'quarter' => '16407',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'patrician',
'region' => '70',
'place' => '279',
'quarter' => '16408',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'patrician',
'region' => '70',
'place' => '280',
'quarter' => '16409',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'patrician',
'region' => '71',
'place' => '281',
'quarter' => '16410',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'hufner',
'region' => '71',
'place' => '282',
'quarter' => '16411',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'patrician',
'region' => '71',
'place' => '283',
'quarter' => '16412',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'hufner',
'region' => '71',
'place' => '284',
'quarter' => '16413',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'patrician',
'region' => '72',
'place' => '285',
'quarter' => '16414',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'hufner',
'region' => '72',
'place' => '286',
'quarter' => '16415',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'patrician',
'region' => '72',
'place' => '287',
'quarter' => '16416',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'patrician',
'region' => '72',
'place' => '288',
'quarter' => '16417',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'patrician',
'region' => '73',
'place' => '289',
'quarter' => '16418',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'hufner',
'region' => '73',
'place' => '290',
'quarter' => '16419',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'hufner',
'region' => '73',
'place' => '291',
'quarter' => '16420',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'patrician',
'region' => '73',
'place' => '292',
'quarter' => '16421',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'patrician',
'region' => '74',
'place' => '293',
'quarter' => '16422',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'hufner',
'region' => '74',
'place' => '294',
'quarter' => '16423',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'patrician',
'region' => '74',
'place' => '295',
'quarter' => '16424',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'patrician',
'region' => '74',
'place' => '296',
'quarter' => '16425',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'patrician',
'region' => '75',
'place' => '297',
'quarter' => '16426',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'patrician',
'region' => '75',
'place' => '298',
'quarter' => '16427',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'patrician',
'region' => '75',
'place' => '299',
'quarter' => '16428',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'patrician',
'region' => '75',
'place' => '300',
'quarter' => '16429',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'patrician',
'region' => '76',
'place' => '301',
'quarter' => '16430',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'hufner',
'region' => '76',
'place' => '302',
'quarter' => '16431',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'patrician',
'region' => '76',
'place' => '303',
'quarter' => '16432',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'hufner',
'region' => '76',
'place' => '304',
'quarter' => '16433',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'hufner',
'region' => '77',
'place' => '305',
'quarter' => '16434',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'hufner',
'region' => '77',
'place' => '306',
'quarter' => '16435',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'hufner',
'region' => '77',
'place' => '307',
'quarter' => '16436',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'patrician',
'region' => '77',
'place' => '308',
'quarter' => '16437',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'patrician',
'region' => '78',
'place' => '309',
'quarter' => '16438',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'patrician',
'region' => '78',
'place' => '310',
'quarter' => '16439',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'patrician',
'region' => '78',
'place' => '311',
'quarter' => '16440',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'patrician',
'region' => '78',
'place' => '312',
'quarter' => '16441',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'patrician',
'region' => '79',
'place' => '313',
'quarter' => '16442',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'hufner',
'region' => '79',
'place' => '314',
'quarter' => '16443',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'patrician',
'region' => '79',
'place' => '315',
'quarter' => '16444',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'patrician',
'region' => '79',
'place' => '316',
'quarter' => '16445',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'patrician',
'region' => '80',
'place' => '317',
'quarter' => '16446',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'hufner',
'region' => '80',
'place' => '318',
'quarter' => '16447',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'patrician',
'region' => '80',
'place' => '319',
'quarter' => '16448',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'hufner',
'region' => '80',
'place' => '320',
'quarter' => '16449',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'hufner',
'region' => '81',
'place' => '321',
'quarter' => '16450',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'hufner',
'region' => '81',
'place' => '322',
'quarter' => '16451',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'patrician',
'region' => '81',
'place' => '323',
'quarter' => '16452',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'patrician',
'region' => '81',
'place' => '324',
'quarter' => '16453',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'patrician',
'region' => '82',
'place' => '325',
'quarter' => '16454',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'hufner',
'region' => '82',
'place' => '326',
'quarter' => '16455',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'patrician',
'region' => '82',
'place' => '327',
'quarter' => '16456',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'hufner',
'region' => '82',
'place' => '328',
'quarter' => '16457',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'patrician',
'region' => '83',
'place' => '329',
'quarter' => '16458',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'hufner',
'region' => '83',
'place' => '330',
'quarter' => '16459',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'patrician',
'region' => '83',
'place' => '331',
'quarter' => '16460',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'hufner',
'region' => '83',
'place' => '332',
'quarter' => '16461',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'hufner',
'region' => '84',
'place' => '333',
'quarter' => '16462',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'hufner',
'region' => '84',
'place' => '334',
'quarter' => '16463',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'patrician',
'region' => '84',
'place' => '335',
'quarter' => '16464',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'hufner',
'region' => '84',
'place' => '336',
'quarter' => '16465',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'patrician',
'region' => '85',
'place' => '337',
'quarter' => '16466',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'patrician',
'region' => '85',
'place' => '338',
'quarter' => '16467',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'patrician',
'region' => '85',
'place' => '339',
'quarter' => '16468',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'hufner',
'region' => '85',
'place' => '340',
'quarter' => '16469',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'hufner',
'region' => '86',
'place' => '341',
'quarter' => '16470',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'patrician',
'region' => '86',
'place' => '342',
'quarter' => '16471',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'patrician',
'region' => '86',
'place' => '343',
'quarter' => '16472',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'patrician',
'region' => '86',
'place' => '344',
'quarter' => '16473',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'patrician',
'region' => '87',
'place' => '345',
'quarter' => '16474',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'hufner',
'region' => '87',
'place' => '346',
'quarter' => '16475',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'patrician',
'region' => '87',
'place' => '347',
'quarter' => '16476',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'hufner',
'region' => '87',
'place' => '348',
'quarter' => '16477',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'hufner',
'region' => '88',
'place' => '349',
'quarter' => '16478',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'patrician',
'region' => '88',
'place' => '350',
'quarter' => '16479',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'hufner',
'region' => '88',
'place' => '351',
'quarter' => '16480',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'patrician',
'region' => '88',
'place' => '352',
'quarter' => '16481',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'patrician',
'region' => '89',
'place' => '353',
'quarter' => '16482',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'patrician',
'region' => '89',
'place' => '354',
'quarter' => '16483',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'patrician',
'region' => '89',
'place' => '355',
'quarter' => '16484',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'hufner',
'region' => '89',
'place' => '356',
'quarter' => '16485',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'patrician',
'region' => '90',
'place' => '357',
'quarter' => '16486',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'hufner',
'region' => '90',
'place' => '358',
'quarter' => '16487',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'patrician',
'region' => '90',
'place' => '359',
'quarter' => '16488',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'hufner',
'region' => '90',
'place' => '360',
'quarter' => '16489',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'patrician',
'region' => '91',
'place' => '361',
'quarter' => '16490',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'hufner',
'region' => '91',
'place' => '362',
'quarter' => '16491',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'patrician',
'region' => '91',
'place' => '363',
'quarter' => '16492',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'hufner',
'region' => '91',
'place' => '364',
'quarter' => '16493',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'patrician',
'region' => '92',
'place' => '365',
'quarter' => '16494',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'hufner',
'region' => '92',
'place' => '366',
'quarter' => '16495',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'patrician',
'region' => '92',
'place' => '367',
'quarter' => '16496',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'hufner',
'region' => '92',
'place' => '368',
'quarter' => '16497',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'patrician',
'region' => '93',
'place' => '369',
'quarter' => '16498',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'hufner',
'region' => '93',
'place' => '370',
'quarter' => '16499',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'patrician',
'region' => '93',
'place' => '371',
'quarter' => '16500',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'hufner',
'region' => '93',
'place' => '372',
'quarter' => '16501',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'patrician',
'region' => '94',
'place' => '373',
'quarter' => '16502',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'hufner',
'region' => '94',
'place' => '374',
'quarter' => '16503',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'patrician',
'region' => '94',
'place' => '375',
'quarter' => '16504',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'hufner',
'region' => '94',
'place' => '376',
'quarter' => '16505',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'patrician',
'region' => '95',
'place' => '377',
'quarter' => '16506',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'patrician',
'region' => '95',
'place' => '378',
'quarter' => '16507',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'patrician',
'region' => '95',
'place' => '379',
'quarter' => '16508',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'patrician',
'region' => '95',
'place' => '380',
'quarter' => '16509',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'patrician',
'region' => '96',
'place' => '381',
'quarter' => '16510',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'hufner',
'region' => '96',
'place' => '382',
'quarter' => '16511',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'hufner',
'region' => '96',
'place' => '383',
'quarter' => '16512',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'hufner',
'region' => '96',
'place' => '384',
'quarter' => '16513',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'patrician',
'region' => '97',
'place' => '385',
'quarter' => '16514',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'patrician',
'region' => '97',
'place' => '386',
'quarter' => '16515',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'patrician',
'region' => '97',
'place' => '387',
'quarter' => '16516',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'hufner',
'region' => '97',
'place' => '388',
'quarter' => '16517',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'patrician',
'region' => '98',
'place' => '389',
'quarter' => '16518',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'patrician',
'region' => '98',
'place' => '390',
'quarter' => '16519',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'patrician',
'region' => '98',
'place' => '391',
'quarter' => '16520',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'patrician',
'region' => '98',
'place' => '392',
'quarter' => '16521',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'patrician',
'region' => '99',
'place' => '393',
'quarter' => '16522',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'hufner',
'region' => '99',
'place' => '394',
'quarter' => '16523',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'hufner',
'region' => '99',
'place' => '395',
'quarter' => '16524',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'hufner',
'region' => '99',
'place' => '396',
'quarter' => '16525',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'patrician',
'region' => '100',
'place' => '397',
'quarter' => '16526',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'patrician',
'region' => '100',
'place' => '398',
'quarter' => '16527',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'patrician',
'region' => '100',
'place' => '399',
'quarter' => '16528',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'hufner',
'region' => '100',
'place' => '400',
'quarter' => '16529',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'patrician',
'region' => '101',
'place' => '401',
'quarter' => '16530',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'hufner',
'region' => '101',
'place' => '402',
'quarter' => '16531',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'patrician',
'region' => '101',
'place' => '403',
'quarter' => '16532',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'hufner',
'region' => '101',
'place' => '404',
'quarter' => '16533',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'patrician',
'region' => '102',
'place' => '405',
'quarter' => '16534',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'patrician',
'region' => '102',
'place' => '406',
'quarter' => '16535',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'patrician',
'region' => '102',
'place' => '407',
'quarter' => '16536',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'patrician',
'region' => '102',
'place' => '408',
'quarter' => '16537',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'patrician',
'region' => '103',
'place' => '409',
'quarter' => '16538',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'patrician',
'region' => '103',
'place' => '410',
'quarter' => '16539',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'patrician',
'region' => '103',
'place' => '411',
'quarter' => '16540',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'patrician',
'region' => '103',
'place' => '412',
'quarter' => '16541',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'patrician',
'region' => '104',
'place' => '413',
'quarter' => '16542',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'hufner',
'region' => '104',
'place' => '414',
'quarter' => '16543',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'hufner',
'region' => '104',
'place' => '415',
'quarter' => '16544',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'hufner',
'region' => '104',
'place' => '416',
'quarter' => '16545',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'patrician',
'region' => '105',
'place' => '417',
'quarter' => '16546',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'hufner',
'region' => '105',
'place' => '418',
'quarter' => '16547',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'patrician',
'region' => '105',
'place' => '419',
'quarter' => '16548',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'hufner',
'region' => '105',
'place' => '420',
'quarter' => '16549',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'patrician',
'region' => '106',
'place' => '421',
'quarter' => '16550',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'hufner',
'region' => '106',
'place' => '422',
'quarter' => '16551',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'patrician',
'region' => '106',
'place' => '423',
'quarter' => '16552',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'patrician',
'region' => '106',
'place' => '424',
'quarter' => '16553',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'patrician',
'region' => '107',
'place' => '425',
'quarter' => '16554',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'hufner',
'region' => '107',
'place' => '426',
'quarter' => '16555',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'patrician',
'region' => '107',
'place' => '427',
'quarter' => '16556',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'patrician',
'region' => '107',
'place' => '428',
'quarter' => '16557',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'patrician',
'region' => '108',
'place' => '429',
'quarter' => '16558',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'patrician',
'region' => '108',
'place' => '430',
'quarter' => '16559',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'patrician',
'region' => '108',
'place' => '431',
'quarter' => '16560',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'patrician',
'region' => '108',
'place' => '432',
'quarter' => '16561',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'patrician',
'region' => '109',
'place' => '433',
'quarter' => '16562',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'hufner',
'region' => '109',
'place' => '434',
'quarter' => '16563',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'patrician',
'region' => '109',
'place' => '435',
'quarter' => '16564',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'hufner',
'region' => '109',
'place' => '436',
'quarter' => '16565',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'patrician',
'region' => '110',
'place' => '437',
'quarter' => '16566',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'patrician',
'region' => '110',
'place' => '438',
'quarter' => '16567',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'patrician',
'region' => '110',
'place' => '439',
'quarter' => '16568',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'hufner',
'region' => '110',
'place' => '440',
'quarter' => '16569',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'patrician',
'region' => '111',
'place' => '441',
'quarter' => '16570',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'hufner',
'region' => '111',
'place' => '442',
'quarter' => '16571',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'hufner',
'region' => '111',
'place' => '443',
'quarter' => '16572',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'patrician',
'region' => '111',
'place' => '444',
'quarter' => '16573',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'patrician',
'region' => '112',
'place' => '445',
'quarter' => '16574',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'patrician',
'region' => '112',
'place' => '446',
'quarter' => '16575',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'patrician',
'region' => '112',
'place' => '447',
'quarter' => '16576',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'patrician',
'region' => '112',
'place' => '448',
'quarter' => '16577',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'patrician',
'region' => '113',
'place' => '449',
'quarter' => '16578',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'hufner',
'region' => '113',
'place' => '450',
'quarter' => '16579',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'patrician',
'region' => '113',
'place' => '451',
'quarter' => '16580',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'patrician',
'region' => '113',
'place' => '452',
'quarter' => '16581',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'patrician',
'region' => '114',
'place' => '453',
'quarter' => '16582',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'hufner',
'region' => '114',
'place' => '454',
'quarter' => '16583',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'patrician',
'region' => '114',
'place' => '455',
'quarter' => '16584',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'patrician',
'region' => '114',
'place' => '456',
'quarter' => '16585',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'patrician',
'region' => '115',
'place' => '457',
'quarter' => '16586',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'patrician',
'region' => '115',
'place' => '458',
'quarter' => '16587',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'patrician',
'region' => '115',
'place' => '459',
'quarter' => '16588',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'patrician',
'region' => '115',
'place' => '460',
'quarter' => '16589',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'patrician',
'region' => '116',
'place' => '461',
'quarter' => '16590',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'patrician',
'region' => '116',
'place' => '462',
'quarter' => '16591',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'patrician',
'region' => '116',
'place' => '463',
'quarter' => '16592',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'patrician',
'region' => '116',
'place' => '464',
'quarter' => '16593',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'patrician',
'region' => '117',
'place' => '465',
'quarter' => '16594',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'patrician',
'region' => '117',
'place' => '466',
'quarter' => '16595',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'patrician',
'region' => '117',
'place' => '467',
'quarter' => '16596',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'hufner',
'region' => '117',
'place' => '468',
'quarter' => '16597',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'patrician',
'region' => '118',
'place' => '469',
'quarter' => '16598',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'patrician',
'region' => '118',
'place' => '470',
'quarter' => '16599',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'patrician',
'region' => '118',
'place' => '471',
'quarter' => '16600',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'patrician',
'region' => '118',
'place' => '472',
'quarter' => '16601',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'patrician',
'region' => '119',
'place' => '473',
'quarter' => '16602',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'patrician',
'region' => '119',
'place' => '474',
'quarter' => '16603',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'patrician',
'region' => '119',
'place' => '475',
'quarter' => '16604',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'patrician',
'region' => '119',
'place' => '476',
'quarter' => '16605',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'patrician',
'region' => '120',
'place' => '477',
'quarter' => '16606',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'patrician',
'region' => '120',
'place' => '478',
'quarter' => '16607',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'patrician',
'region' => '120',
'place' => '479',
'quarter' => '16608',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'patrician',
'region' => '120',
'place' => '480',
'quarter' => '16609',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'patrician',
'region' => '121',
'place' => '481',
'quarter' => '16610',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'patrician',
'region' => '121',
'place' => '482',
'quarter' => '16611',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'patrician',
'region' => '121',
'place' => '483',
'quarter' => '16612',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'patrician',
'region' => '121',
'place' => '484',
'quarter' => '16613',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'patrician',
'region' => '122',
'place' => '485',
'quarter' => '16614',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'patrician',
'region' => '122',
'place' => '486',
'quarter' => '16615',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'patrician',
'region' => '122',
'place' => '487',
'quarter' => '16616',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'hufner',
'region' => '122',
'place' => '488',
'quarter' => '16617',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'patrician',
'region' => '123',
'place' => '489',
'quarter' => '16618',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'patrician',
'region' => '123',
'place' => '490',
'quarter' => '16619',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'patrician',
'region' => '123',
'place' => '491',
'quarter' => '16620',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'patrician',
'region' => '123',
'place' => '492',
'quarter' => '16621',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'patrician',
'region' => '124',
'place' => '493',
'quarter' => '16622',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'hufner',
'region' => '124',
'place' => '494',
'quarter' => '16623',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'patrician',
'region' => '124',
'place' => '495',
'quarter' => '16624',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'patrician',
'region' => '124',
'place' => '496',
'quarter' => '16625',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'patrician',
'region' => '125',
'place' => '497',
'quarter' => '16626',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'patrician',
'region' => '125',
'place' => '498',
'quarter' => '16627',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'patrician',
'region' => '125',
'place' => '499',
'quarter' => '16628',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'hufner',
'region' => '125',
'place' => '500',
'quarter' => '16629',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'patrician',
'region' => '126',
'place' => '501',
'quarter' => '16630',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'patrician',
'region' => '126',
'place' => '502',
'quarter' => '16631',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'patrician',
'region' => '126',
'place' => '503',
'quarter' => '16632',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'patrician',
'region' => '126',
'place' => '504',
'quarter' => '16633',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'patrician',
'region' => '127',
'place' => '505',
'quarter' => '16634',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'patrician',
'region' => '127',
'place' => '506',
'quarter' => '16635',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'patrician',
'region' => '127',
'place' => '507',
'quarter' => '16636',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'hufner',
'region' => '127',
'place' => '508',
'quarter' => '16637',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'patrician',
'region' => '128',
'place' => '509',
'quarter' => '16638',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'patrician',
'region' => '128',
'place' => '510',
'quarter' => '16639',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'patrician',
'region' => '128',
'place' => '511',
'quarter' => '16640',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'patrician',
'region' => '128',
'place' => '512',
'quarter' => '16641',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'patrician',
'region' => '129',
'place' => '513',
'quarter' => '16642',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'patrician',
'region' => '129',
'place' => '514',
'quarter' => '16643',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'patrician',
'region' => '129',
'place' => '515',
'quarter' => '16644',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'hufner',
'region' => '129',
'place' => '516',
'quarter' => '16645',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'patrician',
'region' => '130',
'place' => '517',
'quarter' => '16646',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'patrician',
'region' => '130',
'place' => '518',
'quarter' => '16647',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'patrician',
'region' => '130',
'place' => '519',
'quarter' => '16648',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'hufner',
'region' => '130',
'place' => '520',
'quarter' => '16649',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'patrician',
'region' => '131',
'place' => '521',
'quarter' => '16650',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'patrician',
'region' => '131',
'place' => '522',
'quarter' => '16651',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'patrician',
'region' => '131',
'place' => '523',
'quarter' => '16652',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'patrician',
'region' => '131',
'place' => '524',
'quarter' => '16653',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'patrician',
'region' => '132',
'place' => '525',
'quarter' => '16654',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'patrician',
'region' => '132',
'place' => '526',
'quarter' => '16655',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'patrician',
'region' => '132',
'place' => '527',
'quarter' => '16656',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'patrician',
'region' => '132',
'place' => '528',
'quarter' => '16657',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'patrician',
'region' => '133',
'place' => '529',
'quarter' => '16658',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'patrician',
'region' => '133',
'place' => '530',
'quarter' => '16659',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'patrician',
'region' => '133',
'place' => '531',
'quarter' => '16660',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'patrician',
'region' => '133',
'place' => '532',
'quarter' => '16661',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'patrician',
'region' => '134',
'place' => '533',
'quarter' => '16662',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'patrician',
'region' => '134',
'place' => '534',
'quarter' => '16663',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'patrician',
'region' => '134',
'place' => '535',
'quarter' => '16664',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'patrician',
'region' => '134',
'place' => '536',
'quarter' => '16665',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'patrician',
'region' => '135',
'place' => '537',
'quarter' => '16666',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'hufner',
'region' => '135',
'place' => '538',
'quarter' => '16667',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'patrician',
'region' => '135',
'place' => '539',
'quarter' => '16668',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'patrician',
'region' => '135',
'place' => '540',
'quarter' => '16669',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'patrician',
'region' => '136',
'place' => '541',
'quarter' => '16670',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'patrician',
'region' => '136',
'place' => '542',
'quarter' => '16671',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'patrician',
'region' => '136',
'place' => '543',
'quarter' => '16672',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'patrician',
'region' => '136',
'place' => '544',
'quarter' => '16673',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'patrician',
'region' => '137',
'place' => '545',
'quarter' => '16674',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'patrician',
'region' => '137',
'place' => '546',
'quarter' => '16675',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'patrician',
'region' => '137',
'place' => '547',
'quarter' => '16676',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'patrician',
'region' => '137',
'place' => '548',
'quarter' => '16677',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'patrician',
'region' => '138',
'place' => '549',
'quarter' => '16678',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'patrician',
'region' => '138',
'place' => '550',
'quarter' => '16679',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'patrician',
'region' => '138',
'place' => '551',
'quarter' => '16680',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'patrician',
'region' => '138',
'place' => '552',
'quarter' => '16681',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'patrician',
'region' => '139',
'place' => '553',
'quarter' => '16682',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'patrician',
'region' => '139',
'place' => '554',
'quarter' => '16683',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'patrician',
'region' => '139',
'place' => '555',
'quarter' => '16684',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'patrician',
'region' => '139',
'place' => '556',
'quarter' => '16685',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'patrician',
'region' => '140',
'place' => '557',
'quarter' => '16686',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'patrician',
'region' => '140',
'place' => '558',
'quarter' => '16687',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'patrician',
'region' => '140',
'place' => '559',
'quarter' => '16688',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'patrician',
'region' => '140',
'place' => '560',
'quarter' => '16689',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'patrician',
'region' => '141',
'place' => '561',
'quarter' => '16690',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'patrician',
'region' => '141',
'place' => '562',
'quarter' => '16691',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'patrician',
'region' => '141',
'place' => '563',
'quarter' => '16692',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'hufner',
'region' => '141',
'place' => '564',
'quarter' => '16693',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'patrician',
'region' => '142',
'place' => '565',
'quarter' => '16694',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'patrician',
'region' => '142',
'place' => '566',
'quarter' => '16695',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'patrician',
'region' => '142',
'place' => '567',
'quarter' => '16696',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'hufner',
'region' => '142',
'place' => '568',
'quarter' => '16697',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'patrician',
'region' => '143',
'place' => '569',
'quarter' => '16698',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'patrician',
'region' => '143',
'place' => '570',
'quarter' => '16699',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'patrician',
'region' => '143',
'place' => '571',
'quarter' => '16700',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'patrician',
'region' => '143',
'place' => '572',
'quarter' => '16701',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'patrician',
'region' => '144',
'place' => '573',
'quarter' => '16702',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'hufner',
'region' => '144',
'place' => '574',
'quarter' => '16703',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'patrician',
'region' => '144',
'place' => '575',
'quarter' => '16704',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'hufner',
'region' => '144',
'place' => '576',
'quarter' => '16705',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'patrician',
'region' => '145',
'place' => '577',
'quarter' => '16706',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'patrician',
'region' => '145',
'place' => '578',
'quarter' => '16707',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'patrician',
'region' => '145',
'place' => '579',
'quarter' => '16708',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'patrician',
'region' => '145',
'place' => '580',
'quarter' => '16709',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'patrician',
'region' => '146',
'place' => '581',
'quarter' => '16710',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'patrician',
'region' => '146',
'place' => '582',
'quarter' => '16711',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'patrician',
'region' => '146',
'place' => '583',
'quarter' => '16712',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'patrician',
'region' => '146',
'place' => '584',
'quarter' => '16713',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'patrician',
'region' => '147',
'place' => '585',
'quarter' => '16714',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'patrician',
'region' => '147',
'place' => '586',
'quarter' => '16715',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'patrician',
'region' => '147',
'place' => '587',
'quarter' => '16716',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'patrician',
'region' => '147',
'place' => '588',
'quarter' => '16717',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'patrician',
'region' => '148',
'place' => '589',
'quarter' => '16718',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'patrician',
'region' => '148',
'place' => '590',
'quarter' => '16719',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'patrician',
'region' => '148',
'place' => '591',
'quarter' => '16720',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'patrician',
'region' => '148',
'place' => '592',
'quarter' => '16721',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'patrician',
'region' => '149',
'place' => '593',
'quarter' => '16722',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'patrician',
'region' => '149',
'place' => '594',
'quarter' => '16723',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'patrician',
'region' => '149',
'place' => '595',
'quarter' => '16724',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'patrician',
'region' => '149',
'place' => '596',
'quarter' => '16725',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'patrician',
'region' => '150',
'place' => '597',
'quarter' => '16726',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'patrician',
'region' => '150',
'place' => '598',
'quarter' => '16727',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'patrician',
'region' => '150',
'place' => '599',
'quarter' => '16728',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'patrician',
'region' => '150',
'place' => '600',
'quarter' => '16729',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'patrician',
'region' => '151',
'place' => '601',
'quarter' => '16730',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'patrician',
'region' => '151',
'place' => '602',
'quarter' => '16731',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'patrician',
'region' => '151',
'place' => '603',
'quarter' => '16732',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'hufner',
'region' => '151',
'place' => '604',
'quarter' => '16733',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'patrician',
'region' => '152',
'place' => '605',
'quarter' => '16734',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'hufner',
'region' => '152',
'place' => '606',
'quarter' => '16735',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'patrician',
'region' => '152',
'place' => '607',
'quarter' => '16736',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'patrician',
'region' => '152',
'place' => '608',
'quarter' => '16737',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'patrician',
'region' => '153',
'place' => '609',
'quarter' => '16738',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'hufner',
'region' => '153',
'place' => '610',
'quarter' => '16739',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'patrician',
'region' => '153',
'place' => '611',
'quarter' => '16740',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'hufner',
'region' => '153',
'place' => '612',
'quarter' => '16741',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'patrician',
'region' => '154',
'place' => '613',
'quarter' => '16742',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'patrician',
'region' => '154',
'place' => '614',
'quarter' => '16743',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'patrician',
'region' => '154',
'place' => '615',
'quarter' => '16744',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'patrician',
'region' => '154',
'place' => '616',
'quarter' => '16745',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'patrician',
'region' => '155',
'place' => '617',
'quarter' => '16746',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'hufner',
'region' => '155',
'place' => '618',
'quarter' => '16747',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'patrician',
'region' => '155',
'place' => '619',
'quarter' => '16748',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'hufner',
'region' => '155',
'place' => '620',
'quarter' => '16749',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'patrician',
'region' => '156',
'place' => '621',
'quarter' => '16750',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'patrician',
'region' => '156',
'place' => '622',
'quarter' => '16751',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'patrician',
'region' => '156',
'place' => '623',
'quarter' => '16752',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'hufner',
'region' => '156',
'place' => '624',
'quarter' => '16753',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'patrician',
'region' => '157',
'place' => '625',
'quarter' => '16754',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'patrician',
'region' => '157',
'place' => '626',
'quarter' => '16755',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'patrician',
'region' => '157',
'place' => '627',
'quarter' => '16756',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'patrician',
'region' => '157',
'place' => '628',
'quarter' => '16757',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'patrician',
'region' => '158',
'place' => '629',
'quarter' => '16758',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'patrician',
'region' => '158',
'place' => '630',
'quarter' => '16759',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'patrician',
'region' => '158',
'place' => '631',
'quarter' => '16760',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'hufner',
'region' => '158',
'place' => '632',
'quarter' => '16761',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'patrician',
'region' => '159',
'place' => '633',
'quarter' => '16762',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'patrician',
'region' => '159',
'place' => '634',
'quarter' => '16763',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'patrician',
'region' => '159',
'place' => '635',
'quarter' => '16764',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'hufner',
'region' => '159',
'place' => '636',
'quarter' => '16765',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'patrician',
'region' => '160',
'place' => '637',
'quarter' => '16766',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'patrician',
'region' => '160',
'place' => '638',
'quarter' => '16767',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'patrician',
'region' => '160',
'place' => '639',
'quarter' => '16768',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'hufner',
'region' => '160',
'place' => '640',
'quarter' => '16769',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'patrician',
'region' => '161',
'place' => '641',
'quarter' => '16770',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'patrician',
'region' => '161',
'place' => '642',
'quarter' => '16771',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'patrician',
'region' => '161',
'place' => '643',
'quarter' => '16772',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'hufner',
'region' => '161',
'place' => '644',
'quarter' => '16773',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'patrician',
'region' => '162',
'place' => '645',
'quarter' => '16774',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'hufner',
'region' => '162',
'place' => '646',
'quarter' => '16775',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'patrician',
'region' => '162',
'place' => '647',
'quarter' => '16776',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'patrician',
'region' => '162',
'place' => '648',
'quarter' => '16777',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'patrician',
'region' => '163',
'place' => '649',
'quarter' => '16778',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'patrician',
'region' => '163',
'place' => '650',
'quarter' => '16779',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'patrician',
'region' => '163',
'place' => '651',
'quarter' => '16780',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'patrician',
'region' => '163',
'place' => '652',
'quarter' => '16781',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'patrician',
'region' => '164',
'place' => '653',
'quarter' => '16782',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'patrician',
'region' => '164',
'place' => '654',
'quarter' => '16783',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'patrician',
'region' => '164',
'place' => '655',
'quarter' => '16784',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'patrician',
'region' => '164',
'place' => '656',
'quarter' => '16785',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'patrician',
'region' => '165',
'place' => '657',
'quarter' => '16786',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'hufner',
'region' => '165',
'place' => '658',
'quarter' => '16787',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'patrician',
'region' => '165',
'place' => '659',
'quarter' => '16788',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'patrician',
'region' => '165',
'place' => '660',
'quarter' => '16789',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'patrician',
'region' => '166',
'place' => '661',
'quarter' => '16790',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'patrician',
'region' => '166',
'place' => '662',
'quarter' => '16791',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'patrician',
'region' => '166',
'place' => '663',
'quarter' => '16792',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'patrician',
'region' => '166',
'place' => '664',
'quarter' => '16793',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'patrician',
'region' => '167',
'place' => '665',
'quarter' => '16794',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'patrician',
'region' => '167',
'place' => '666',
'quarter' => '16795',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'patrician',
'region' => '167',
'place' => '667',
'quarter' => '16796',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'hufner',
'region' => '167',
'place' => '668',
'quarter' => '16797',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'patrician',
'region' => '168',
'place' => '669',
'quarter' => '16798',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'patrician',
'region' => '168',
'place' => '670',
'quarter' => '16799',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'patrician',
'region' => '168',
'place' => '671',
'quarter' => '16800',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'patrician',
'region' => '168',
'place' => '672',
'quarter' => '16801',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'patrician',
'region' => '169',
'place' => '673',
'quarter' => '16802',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'patrician',
'region' => '169',
'place' => '674',
'quarter' => '16803',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'patrician',
'region' => '169',
'place' => '675',
'quarter' => '16804',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'patrician',
'region' => '169',
'place' => '676',
'quarter' => '16805',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'patrician',
'region' => '170',
'place' => '677',
'quarter' => '16806',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'patrician',
'region' => '170',
'place' => '678',
'quarter' => '16807',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'patrician',
'region' => '170',
'place' => '679',
'quarter' => '16808',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'hufner',
'region' => '170',
'place' => '680',
'quarter' => '16809',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'patrician',
'region' => '171',
'place' => '681',
'quarter' => '16810',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'patrician',
'region' => '171',
'place' => '682',
'quarter' => '16811',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'patrician',
'region' => '171',
'place' => '683',
'quarter' => '16812',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'patrician',
'region' => '171',
'place' => '684',
'quarter' => '16813',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'patrician',
'region' => '172',
'place' => '685',
'quarter' => '16814',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'patrician',
'region' => '172',
'place' => '686',
'quarter' => '16815',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'patrician',
'region' => '172',
'place' => '687',
'quarter' => '16816',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'hufner',
'region' => '172',
'place' => '688',
'quarter' => '16817',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'patrician',
'region' => '173',
'place' => '689',
'quarter' => '16818',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'hufner',
'region' => '173',
'place' => '690',
'quarter' => '16819',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'patrician',
'region' => '173',
'place' => '691',
'quarter' => '16820',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'patrician',
'region' => '173',
'place' => '692',
'quarter' => '16821',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'patrician',
'region' => '174',
'place' => '693',
'quarter' => '16822',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'patrician',
'region' => '174',
'place' => '694',
'quarter' => '16823',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'patrician',
'region' => '174',
'place' => '695',
'quarter' => '16824',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'patrician',
'region' => '174',
'place' => '696',
'quarter' => '16825',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'patrician',
'region' => '175',
'place' => '697',
'quarter' => '16826',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'patrician',
'region' => '175',
'place' => '698',
'quarter' => '16827',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'patrician',
'region' => '175',
'place' => '699',
'quarter' => '16828',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'hufner',
'region' => '175',
'place' => '700',
'quarter' => '16829',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'patrician',
'region' => '176',
'place' => '701',
'quarter' => '16830',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'patrician',
'region' => '176',
'place' => '702',
'quarter' => '16831',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'patrician',
'region' => '176',
'place' => '703',
'quarter' => '16832',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'hufner',
'region' => '176',
'place' => '704',
'quarter' => '16833',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'patrician',
'region' => '177',
'place' => '705',
'quarter' => '16834',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'patrician',
'region' => '177',
'place' => '706',
'quarter' => '16835',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'patrician',
'region' => '177',
'place' => '707',
'quarter' => '16836',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'hufner',
'region' => '177',
'place' => '708',
'quarter' => '16837',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'patrician',
'region' => '178',
'place' => '709',
'quarter' => '16838',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'patrician',
'region' => '178',
'place' => '710',
'quarter' => '16839',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'hufner',
'region' => '178',
'place' => '711',
'quarter' => '16840',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'hufner',
'region' => '178',
'place' => '712',
'quarter' => '16841',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'patrician',
'region' => '179',
'place' => '713',
'quarter' => '16842',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'patrician',
'region' => '179',
'place' => '714',
'quarter' => '16843',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'patrician',
'region' => '179',
'place' => '715',
'quarter' => '16844',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'patrician',
'region' => '179',
'place' => '716',
'quarter' => '16845',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'patrician',
'region' => '180',
'place' => '717',
'quarter' => '16846',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'hufner',
'region' => '180',
'place' => '718',
'quarter' => '16847',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'patrician',
'region' => '180',
'place' => '719',
'quarter' => '16848',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'patrician',
'region' => '180',
'place' => '720',
'quarter' => '16849',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'patrician',
'region' => '181',
'place' => '721',
'quarter' => '16850',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'hufner',
'region' => '181',
'place' => '722',
'quarter' => '16851',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'patrician',
'region' => '181',
'place' => '723',
'quarter' => '16852',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'hufner',
'region' => '181',
'place' => '724',
'quarter' => '16853',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'patrician',
'region' => '182',
'place' => '725',
'quarter' => '16854',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'patrician',
'region' => '182',
'place' => '726',
'quarter' => '16855',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'patrician',
'region' => '182',
'place' => '727',
'quarter' => '16856',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'patrician',
'region' => '182',
'place' => '728',
'quarter' => '16857',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'patrician',
'region' => '183',
'place' => '729',
'quarter' => '16858',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'patrician',
'region' => '183',
'place' => '730',
'quarter' => '16859',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'patrician',
'region' => '183',
'place' => '731',
'quarter' => '16860',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'hufner',
'region' => '183',
'place' => '732',
'quarter' => '16861',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'patrician',
'region' => '184',
'place' => '733',
'quarter' => '16862',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'hufner',
'region' => '184',
'place' => '734',
'quarter' => '16863',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'patrician',
'region' => '184',
'place' => '735',
'quarter' => '16864',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'hufner',
'region' => '184',
'place' => '736',
'quarter' => '16865',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'patrician',
'region' => '185',
'place' => '737',
'quarter' => '16866',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'hufner',
'region' => '185',
'place' => '738',
'quarter' => '16867',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'patrician',
'region' => '185',
'place' => '739',
'quarter' => '16868',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'hufner',
'region' => '185',
'place' => '740',
'quarter' => '16869',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'patrician',
'region' => '186',
'place' => '741',
'quarter' => '16870',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'hufner',
'region' => '186',
'place' => '742',
'quarter' => '16871',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'patrician',
'region' => '186',
'place' => '743',
'quarter' => '16872',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'hufner',
'region' => '186',
'place' => '744',
'quarter' => '16873',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'patrician',
'region' => '187',
'place' => '745',
'quarter' => '16874',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'hufner',
'region' => '187',
'place' => '746',
'quarter' => '16875',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'hufner',
'region' => '187',
'place' => '747',
'quarter' => '16876',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'hufner',
'region' => '187',
'place' => '748',
'quarter' => '16877',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'hufner',
'region' => '188',
'place' => '749',
'quarter' => '16878',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'patrician',
'region' => '188',
'place' => '750',
'quarter' => '16879',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'patrician',
'region' => '188',
'place' => '751',
'quarter' => '16880',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'hufner',
'region' => '188',
'place' => '752',
'quarter' => '16881',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'patrician',
'region' => '189',
'place' => '753',
'quarter' => '16882',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'hufner',
'region' => '189',
'place' => '754',
'quarter' => '16883',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'patrician',
'region' => '189',
'place' => '755',
'quarter' => '16884',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'hufner',
'region' => '189',
'place' => '756',
'quarter' => '16885',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'patrician',
'region' => '190',
'place' => '757',
'quarter' => '16886',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'hufner',
'region' => '190',
'place' => '758',
'quarter' => '16887',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'patrician',
'region' => '190',
'place' => '759',
'quarter' => '16888',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'hufner',
'region' => '190',
'place' => '760',
'quarter' => '16889',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'patrician',
'region' => '191',
'place' => '761',
'quarter' => '16890',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'patrician',
'region' => '191',
'place' => '762',
'quarter' => '16891',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'patrician',
'region' => '191',
'place' => '763',
'quarter' => '16892',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'patrician',
'region' => '191',
'place' => '764',
'quarter' => '16893',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'patrician',
'region' => '192',
'place' => '765',
'quarter' => '16894',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'patrician',
'region' => '192',
'place' => '766',
'quarter' => '16895',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'patrician',
'region' => '192',
'place' => '767',
'quarter' => '16896',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'hufner',
'region' => '192',
'place' => '768',
'quarter' => '16897',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'patrician',
'region' => '193',
'place' => '769',
'quarter' => '16898',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'hufner',
'region' => '193',
'place' => '770',
'quarter' => '16899',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'patrician',
'region' => '193',
'place' => '771',
'quarter' => '16900',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'hufner',
'region' => '193',
'place' => '772',
'quarter' => '16901',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'patrician',
'region' => '194',
'place' => '773',
'quarter' => '16902',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'hufner',
'region' => '194',
'place' => '774',
'quarter' => '16903',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'patrician',
'region' => '194',
'place' => '775',
'quarter' => '16904',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'hufner',
'region' => '194',
'place' => '776',
'quarter' => '16905',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'patrician',
'region' => '195',
'place' => '777',
'quarter' => '16906',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'patrician',
'region' => '195',
'place' => '778',
'quarter' => '16907',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'patrician',
'region' => '195',
'place' => '779',
'quarter' => '16908',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'hufner',
'region' => '195',
'place' => '780',
'quarter' => '16909',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'patrician',
'region' => '196',
'place' => '781',
'quarter' => '16910',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'hufner',
'region' => '196',
'place' => '782',
'quarter' => '16911',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'patrician',
'region' => '196',
'place' => '783',
'quarter' => '16912',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'hufner',
'region' => '196',
'place' => '784',
'quarter' => '16913',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'patrician',
'region' => '197',
'place' => '785',
'quarter' => '16914',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'hufner',
'region' => '197',
'place' => '786',
'quarter' => '16915',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'patrician',
'region' => '197',
'place' => '787',
'quarter' => '16916',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'hufner',
'region' => '197',
'place' => '788',
'quarter' => '16917',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'patrician',
'region' => '198',
'place' => '789',
'quarter' => '16918',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'hufner',
'region' => '198',
'place' => '790',
'quarter' => '16919',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'patrician',
'region' => '198',
'place' => '791',
'quarter' => '16920',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'hufner',
'region' => '198',
'place' => '792',
'quarter' => '16921',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'patrician',
'region' => '199',
'place' => '793',
'quarter' => '16922',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'hufner',
'region' => '199',
'place' => '794',
'quarter' => '16923',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'patrician',
'region' => '199',
'place' => '795',
'quarter' => '16924',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'hufner',
'region' => '199',
'place' => '796',
'quarter' => '16925',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'patrician',
'region' => '200',
'place' => '797',
'quarter' => '16926',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'patrician',
'region' => '200',
'place' => '798',
'quarter' => '16927',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'patrician',
'region' => '200',
'place' => '799',
'quarter' => '16928',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'patrician',
'region' => '200',
'place' => '800',
'quarter' => '16929',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'patrician',
'region' => '201',
'place' => '801',
'quarter' => '16930',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'hufner',
'region' => '201',
'place' => '802',
'quarter' => '16931',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'patrician',
'region' => '201',
'place' => '803',
'quarter' => '16932',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'patrician',
'region' => '201',
'place' => '804',
'quarter' => '16933',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'patrician',
'region' => '202',
'place' => '805',
'quarter' => '16934',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'hufner',
'region' => '202',
'place' => '806',
'quarter' => '16935',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'hufner',
'region' => '202',
'place' => '807',
'quarter' => '16936',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'hufner',
'region' => '202',
'place' => '808',
'quarter' => '16937',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'patrician',
'region' => '203',
'place' => '809',
'quarter' => '16938',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'patrician',
'region' => '203',
'place' => '810',
'quarter' => '16939',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'patrician',
'region' => '203',
'place' => '811',
'quarter' => '16940',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'hufner',
'region' => '203',
'place' => '812',
'quarter' => '16941',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'patrician',
'region' => '204',
'place' => '813',
'quarter' => '16942',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'patrician',
'region' => '204',
'place' => '814',
'quarter' => '16943',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'patrician',
'region' => '204',
'place' => '815',
'quarter' => '16944',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'hufner',
'region' => '204',
'place' => '816',
'quarter' => '16945',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'patrician',
'region' => '205',
'place' => '817',
'quarter' => '16946',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'patrician',
'region' => '205',
'place' => '818',
'quarter' => '16947',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'patrician',
'region' => '205',
'place' => '819',
'quarter' => '16948',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'patrician',
'region' => '205',
'place' => '820',
'quarter' => '16949',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'patrician',
'region' => '206',
'place' => '821',
'quarter' => '16950',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'patrician',
'region' => '206',
'place' => '822',
'quarter' => '16951',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'patrician',
'region' => '206',
'place' => '823',
'quarter' => '16952',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'patrician',
'region' => '206',
'place' => '824',
'quarter' => '16953',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'patrician',
'region' => '207',
'place' => '825',
'quarter' => '16954',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'patrician',
'region' => '207',
'place' => '826',
'quarter' => '16955',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'patrician',
'region' => '207',
'place' => '827',
'quarter' => '16956',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'patrician',
'region' => '207',
'place' => '828',
'quarter' => '16957',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'patrician',
'region' => '208',
'place' => '829',
'quarter' => '16958',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'patrician',
'region' => '208',
'place' => '830',
'quarter' => '16959',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'patrician',
'region' => '208',
'place' => '831',
'quarter' => '16960',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'hufner',
'region' => '208',
'place' => '832',
'quarter' => '16961',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'patrician',
'region' => '209',
'place' => '833',
'quarter' => '16962',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'patrician',
'region' => '209',
'place' => '834',
'quarter' => '16963',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'patrician',
'region' => '209',
'place' => '835',
'quarter' => '16964',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'patrician',
'region' => '209',
'place' => '836',
'quarter' => '16965',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'patrician',
'region' => '210',
'place' => '837',
'quarter' => '16966',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'patrician',
'region' => '210',
'place' => '838',
'quarter' => '16967',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'patrician',
'region' => '210',
'place' => '839',
'quarter' => '16968',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'patrician',
'region' => '210',
'place' => '840',
'quarter' => '16969',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'patrician',
'region' => '211',
'place' => '841',
'quarter' => '16970',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'hufner',
'region' => '211',
'place' => '842',
'quarter' => '16971',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'patrician',
'region' => '211',
'place' => '843',
'quarter' => '16972',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'patrician',
'region' => '211',
'place' => '844',
'quarter' => '16973',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'patrician',
'region' => '212',
'place' => '845',
'quarter' => '16974',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'hufner',
'region' => '212',
'place' => '846',
'quarter' => '16975',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'patrician',
'region' => '212',
'place' => '847',
'quarter' => '16976',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'hufner',
'region' => '212',
'place' => '848',
'quarter' => '16977',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'patrician',
'region' => '213',
'place' => '849',
'quarter' => '16978',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'hufner',
'region' => '213',
'place' => '850',
'quarter' => '16979',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'patrician',
'region' => '213',
'place' => '851',
'quarter' => '16980',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'hufner',
'region' => '213',
'place' => '852',
'quarter' => '16981',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'patrician',
'region' => '214',
'place' => '853',
'quarter' => '16982',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'patrician',
'region' => '214',
'place' => '854',
'quarter' => '16983',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'patrician',
'region' => '214',
'place' => '855',
'quarter' => '16984',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'patrician',
'region' => '214',
'place' => '856',
'quarter' => '16985',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'patrician',
'region' => '215',
'place' => '857',
'quarter' => '16986',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'patrician',
'region' => '215',
'place' => '858',
'quarter' => '16987',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'patrician',
'region' => '215',
'place' => '859',
'quarter' => '16988',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'patrician',
'region' => '215',
'place' => '860',
'quarter' => '16989',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'patrician',
'region' => '216',
'place' => '861',
'quarter' => '16990',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'patrician',
'region' => '216',
'place' => '862',
'quarter' => '16991',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'patrician',
'region' => '216',
'place' => '863',
'quarter' => '16992',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'patrician',
'region' => '216',
'place' => '864',
'quarter' => '16993',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'patrician',
'region' => '217',
'place' => '865',
'quarter' => '16994',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'patrician',
'region' => '217',
'place' => '866',
'quarter' => '16995',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'patrician',
'region' => '217',
'place' => '867',
'quarter' => '16996',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'patrician',
'region' => '217',
'place' => '868',
'quarter' => '16997',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'patrician',
'region' => '218',
'place' => '869',
'quarter' => '16998',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'patrician',
'region' => '218',
'place' => '870',
'quarter' => '16999',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'patrician',
'region' => '218',
'place' => '871',
'quarter' => '17000',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'patrician',
'region' => '218',
'place' => '872',
'quarter' => '17001',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'patrician',
'region' => '219',
'place' => '873',
'quarter' => '17002',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'patrician',
'region' => '219',
'place' => '874',
'quarter' => '17003',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'patrician',
'region' => '219',
'place' => '875',
'quarter' => '17004',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'patrician',
'region' => '219',
'place' => '876',
'quarter' => '17005',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'patrician',
'region' => '220',
'place' => '877',
'quarter' => '17006',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'patrician',
'region' => '220',
'place' => '878',
'quarter' => '17007',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'patrician',
'region' => '220',
'place' => '879',
'quarter' => '17008',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'patrician',
'region' => '220',
'place' => '880',
'quarter' => '17009',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'patrician',
'region' => '221',
'place' => '881',
'quarter' => '17010',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'patrician',
'region' => '221',
'place' => '882',
'quarter' => '17011',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'patrician',
'region' => '221',
'place' => '883',
'quarter' => '17012',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'patrician',
'region' => '221',
'place' => '884',
'quarter' => '17013',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'patrician',
'region' => '222',
'place' => '885',
'quarter' => '17014',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'patrician',
'region' => '222',
'place' => '886',
'quarter' => '17015',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'patrician',
'region' => '222',
'place' => '887',
'quarter' => '17016',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'patrician',
'region' => '222',
'place' => '888',
'quarter' => '17017',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'patrician',
'region' => '223',
'place' => '889',
'quarter' => '17018',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'patrician',
'region' => '223',
'place' => '890',
'quarter' => '17019',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'patrician',
'region' => '223',
'place' => '891',
'quarter' => '17020',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'patrician',
'region' => '223',
'place' => '892',
'quarter' => '17021',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'patrician',
'region' => '224',
'place' => '893',
'quarter' => '17022',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'patrician',
'region' => '224',
'place' => '894',
'quarter' => '17023',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'patrician',
'region' => '224',
'place' => '895',
'quarter' => '17024',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'patrician',
'region' => '224',
'place' => '896',
'quarter' => '17025',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'patrician',
'region' => '225',
'place' => '897',
'quarter' => '17026',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'hufner',
'region' => '225',
'place' => '898',
'quarter' => '17027',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'hufner',
'region' => '225',
'place' => '899',
'quarter' => '17028',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'hufner',
'region' => '225',
'place' => '900',
'quarter' => '17029',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'patrician',
'region' => '226',
'place' => '901',
'quarter' => '17030',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'patrician',
'region' => '226',
'place' => '902',
'quarter' => '17031',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'patrician',
'region' => '226',
'place' => '903',
'quarter' => '17032',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'patrician',
'region' => '226',
'place' => '904',
'quarter' => '17033',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'patrician',
'region' => '227',
'place' => '905',
'quarter' => '17034',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'patrician',
'region' => '227',
'place' => '906',
'quarter' => '17035',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'patrician',
'region' => '227',
'place' => '907',
'quarter' => '17036',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'patrician',
'region' => '227',
'place' => '908',
'quarter' => '17037',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'patrician',
'region' => '228',
'place' => '909',
'quarter' => '17038',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'patrician',
'region' => '228',
'place' => '910',
'quarter' => '17039',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'patrician',
'region' => '228',
'place' => '911',
'quarter' => '17040',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'patrician',
'region' => '228',
'place' => '912',
'quarter' => '17041',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'patrician',
'region' => '229',
'place' => '913',
'quarter' => '17042',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'patrician',
'region' => '229',
'place' => '914',
'quarter' => '17043',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'patrician',
'region' => '229',
'place' => '915',
'quarter' => '17044',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'patrician',
'region' => '229',
'place' => '916',
'quarter' => '17045',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'patrician',
'region' => '230',
'place' => '917',
'quarter' => '17046',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'hufner',
'region' => '230',
'place' => '918',
'quarter' => '17047',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'hufner',
'region' => '230',
'place' => '919',
'quarter' => '17048',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'hufner',
'region' => '230',
'place' => '920',
'quarter' => '17049',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'patrician',
'region' => '231',
'place' => '921',
'quarter' => '17050',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'patrician',
'region' => '231',
'place' => '922',
'quarter' => '17051',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'patrician',
'region' => '231',
'place' => '923',
'quarter' => '17052',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'patrician',
'region' => '231',
'place' => '924',
'quarter' => '17053',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'patrician',
'region' => '232',
'place' => '925',
'quarter' => '17054',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'patrician',
'region' => '232',
'place' => '926',
'quarter' => '17055',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'patrician',
'region' => '232',
'place' => '927',
'quarter' => '17056',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'hufner',
'region' => '232',
'place' => '928',
'quarter' => '17057',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'patrician',
'region' => '233',
'place' => '929',
'quarter' => '17058',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'patrician',
'region' => '233',
'place' => '930',
'quarter' => '17059',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'patrician',
'region' => '233',
'place' => '931',
'quarter' => '17060',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'hufner',
'region' => '233',
'place' => '932',
'quarter' => '17061',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'patrician',
'region' => '234',
'place' => '933',
'quarter' => '17062',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'patrician',
'region' => '234',
'place' => '934',
'quarter' => '17063',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'patrician',
'region' => '234',
'place' => '935',
'quarter' => '17064',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'hufner',
'region' => '234',
'place' => '936',
'quarter' => '17065',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'patrician',
'region' => '235',
'place' => '937',
'quarter' => '17066',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'patrician',
'region' => '235',
'place' => '938',
'quarter' => '17067',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'patrician',
'region' => '235',
'place' => '939',
'quarter' => '17068',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'hufner',
'region' => '235',
'place' => '940',
'quarter' => '17069',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'patrician',
'region' => '236',
'place' => '941',
'quarter' => '17070',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'patrician',
'region' => '236',
'place' => '942',
'quarter' => '17071',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'patrician',
'region' => '236',
'place' => '943',
'quarter' => '17072',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'hufner',
'region' => '236',
'place' => '944',
'quarter' => '17073',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'patrician',
'region' => '237',
'place' => '945',
'quarter' => '17074',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'patrician',
'region' => '237',
'place' => '946',
'quarter' => '17075',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'patrician',
'region' => '237',
'place' => '947',
'quarter' => '17076',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'patrician',
'region' => '237',
'place' => '948',
'quarter' => '17077',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'patrician',
'region' => '238',
'place' => '949',
'quarter' => '17078',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'patrician',
'region' => '238',
'place' => '950',
'quarter' => '17079',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'patrician',
'region' => '238',
'place' => '951',
'quarter' => '17080',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'patrician',
'region' => '238',
'place' => '952',
'quarter' => '17081',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'patrician',
'region' => '239',
'place' => '953',
'quarter' => '17082',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'hufner',
'region' => '239',
'place' => '954',
'quarter' => '17083',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'patrician',
'region' => '239',
'place' => '955',
'quarter' => '17084',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'patrician',
'region' => '239',
'place' => '956',
'quarter' => '17085',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'patrician',
'region' => '240',
'place' => '957',
'quarter' => '17086',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'patrician',
'region' => '240',
'place' => '958',
'quarter' => '17087',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'patrician',
'region' => '240',
'place' => '959',
'quarter' => '17088',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'patrician',
'region' => '240',
'place' => '960',
'quarter' => '17089',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'patrician',
'region' => '241',
'place' => '961',
'quarter' => '17090',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'hufner',
'region' => '241',
'place' => '962',
'quarter' => '17091',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'patrician',
'region' => '241',
'place' => '963',
'quarter' => '17092',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'hufner',
'region' => '241',
'place' => '964',
'quarter' => '17093',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'patrician',
'region' => '242',
'place' => '965',
'quarter' => '17094',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'patrician',
'region' => '242',
'place' => '966',
'quarter' => '17095',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'patrician',
'region' => '242',
'place' => '967',
'quarter' => '17096',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'patrician',
'region' => '242',
'place' => '968',
'quarter' => '17097',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'patrician',
'region' => '243',
'place' => '969',
'quarter' => '17098',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'hufner',
'region' => '243',
'place' => '970',
'quarter' => '17099',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'patrician',
'region' => '243',
'place' => '971',
'quarter' => '17100',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'patrician',
'region' => '243',
'place' => '972',
'quarter' => '17101',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'patrician',
'region' => '244',
'place' => '973',
'quarter' => '17102',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'hufner',
'region' => '244',
'place' => '974',
'quarter' => '17103',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'patrician',
'region' => '244',
'place' => '975',
'quarter' => '17104',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'patrician',
'region' => '244',
'place' => '976',
'quarter' => '17105',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'patrician',
'region' => '245',
'place' => '977',
'quarter' => '17106',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'patrician',
'region' => '245',
'place' => '978',
'quarter' => '17107',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'patrician',
'region' => '245',
'place' => '979',
'quarter' => '17108',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'hufner',
'region' => '245',
'place' => '980',
'quarter' => '17109',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'patrician',
'region' => '246',
'place' => '981',
'quarter' => '17110',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'patrician',
'region' => '246',
'place' => '982',
'quarter' => '17111',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'patrician',
'region' => '246',
'place' => '983',
'quarter' => '17112',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'patrician',
'region' => '246',
'place' => '984',
'quarter' => '17113',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'patrician',
'region' => '247',
'place' => '985',
'quarter' => '17114',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'patrician',
'region' => '247',
'place' => '986',
'quarter' => '17115',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'patrician',
'region' => '247',
'place' => '987',
'quarter' => '17116',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'patrician',
'region' => '247',
'place' => '988',
'quarter' => '17117',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'patrician',
'region' => '248',
'place' => '989',
'quarter' => '17118',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'patrician',
'region' => '248',
'place' => '990',
'quarter' => '17119',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'patrician',
'region' => '248',
'place' => '991',
'quarter' => '17120',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'patrician',
'region' => '248',
'place' => '992',
'quarter' => '17121',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'patrician',
'region' => '249',
'place' => '993',
'quarter' => '17122',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'hufner',
'region' => '249',
'place' => '994',
'quarter' => '17123',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'patrician',
'region' => '249',
'place' => '995',
'quarter' => '17124',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'hufner',
'region' => '249',
'place' => '996',
'quarter' => '17125',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'patrician',
'region' => '250',
'place' => '997',
'quarter' => '17126',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'patrician',
'region' => '250',
'place' => '998',
'quarter' => '17127',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'patrician',
'region' => '250',
'place' => '999',
'quarter' => '17128',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'patrician',
'region' => '250',
'place' => '1000',
'quarter' => '17129',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'patrician',
'region' => '251',
'place' => '1001',
'quarter' => '17130',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'patrician',
'region' => '251',
'place' => '1002',
'quarter' => '17131',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'patrician',
'region' => '251',
'place' => '1003',
'quarter' => '17132',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'hufner',
'region' => '251',
'place' => '1004',
'quarter' => '17133',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'patrician',
'region' => '252',
'place' => '1005',
'quarter' => '17134',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'hufner',
'region' => '252',
'place' => '1006',
'quarter' => '17135',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'patrician',
'region' => '252',
'place' => '1007',
'quarter' => '17136',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'hufner',
'region' => '252',
'place' => '1008',
'quarter' => '17137',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'patrician',
'region' => '253',
'place' => '1009',
'quarter' => '17138',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'patrician',
'region' => '253',
'place' => '1010',
'quarter' => '17139',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'patrician',
'region' => '253',
'place' => '1011',
'quarter' => '17140',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'hufner',
'region' => '253',
'place' => '1012',
'quarter' => '17141',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'patrician',
'region' => '254',
'place' => '1013',
'quarter' => '17142',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'patrician',
'region' => '254',
'place' => '1014',
'quarter' => '17143',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'patrician',
'region' => '254',
'place' => '1015',
'quarter' => '17144',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'hufner',
'region' => '254',
'place' => '1016',
'quarter' => '17145',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'patrician',
'region' => '255',
'place' => '1017',
'quarter' => '17146',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'patrician',
'region' => '255',
'place' => '1018',
'quarter' => '17147',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'patrician',
'region' => '255',
'place' => '1019',
'quarter' => '17148',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'patrician',
'region' => '255',
'place' => '1020',
'quarter' => '17149',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'patrician',
'region' => '256',
'place' => '1021',
'quarter' => '17150',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'hufner',
'region' => '256',
'place' => '1022',
'quarter' => '17151',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'patrician',
'region' => '256',
'place' => '1023',
'quarter' => '17152',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'patrician',
'region' => '256',
'place' => '1024',
'quarter' => '17153',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'patrician',
'region' => '257',
'place' => '1025',
'quarter' => '17154',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'hufner',
'region' => '257',
'place' => '1026',
'quarter' => '17155',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'patrician',
'region' => '257',
'place' => '1027',
'quarter' => '17156',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'hufner',
'region' => '257',
'place' => '1028',
'quarter' => '17157',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'patrician',
'region' => '258',
'place' => '1029',
'quarter' => '17158',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'patrician',
'region' => '258',
'place' => '1030',
'quarter' => '17159',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'patrician',
'region' => '258',
'place' => '1031',
'quarter' => '17160',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'patrician',
'region' => '258',
'place' => '1032',
'quarter' => '17161',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'patrician',
'region' => '259',
'place' => '1033',
'quarter' => '17162',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'patrician',
'region' => '259',
'place' => '1034',
'quarter' => '17163',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'patrician',
'region' => '259',
'place' => '1035',
'quarter' => '17164',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'patrician',
'region' => '259',
'place' => '1036',
'quarter' => '17165',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'patrician',
'region' => '260',
'place' => '1037',
'quarter' => '17166',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'patrician',
'region' => '260',
'place' => '1038',
'quarter' => '17167',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'patrician',
'region' => '260',
'place' => '1039',
'quarter' => '17168',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'patrician',
'region' => '260',
'place' => '1040',
'quarter' => '17169',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
//factories
DB::table('titles')->insert([
'title_name' => 'Bremen',
'title_category' => 'patrician',
'region' => '1',
'place' => '1',
'quarter' => '14969',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oldenburg',
'title_category' => 'hufner',
'region' => '1',
'place' => '2',
'quarter' => '14970',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hamburg',
'title_category' => 'patrician',
'region' => '1',
'place' => '3',
'quarter' => '14971',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corvey',
'title_category' => 'hufner',
'region' => '1',
'place' => '4',
'quarter' => '14972',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Meissen',
'title_category' => 'patrician',
'region' => '2',
'place' => '5',
'quarter' => '14973',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dresden',
'title_category' => 'patrician',
'region' => '2',
'place' => '6',
'quarter' => '14974',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Erfurt',
'title_category' => 'patrician',
'region' => '2',
'place' => '7',
'quarter' => '14975',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chemnitz',
'title_category' => 'patrician',
'region' => '2',
'place' => '8',
'quarter' => '14976',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Magdeburg',
'title_category' => 'patrician',
'region' => '3',
'place' => '9',
'quarter' => '14977',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Merseburg',
'title_category' => 'patrician',
'region' => '3',
'place' => '10',
'quarter' => '14978',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Halberstadt',
'title_category' => 'patrician',
'region' => '3',
'place' => '11',
'quarter' => '14979',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gernrode',
'title_category' => 'hufner',
'region' => '3',
'place' => '12',
'quarter' => '14980',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Schwerin',
'title_category' => 'patrician',
'region' => '4',
'place' => '13',
'quarter' => '14981',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rostock',
'title_category' => 'patrician',
'region' => '4',
'place' => '14',
'quarter' => '14982',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lubeck',
'title_category' => 'patrician',
'region' => '4',
'place' => '15',
'quarter' => '14983',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Broda',
'title_category' => 'hufner',
'region' => '4',
'place' => '16',
'quarter' => '14984',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Brandenburg',
'title_category' => 'patrician',
'region' => '5',
'place' => '17',
'quarter' => '14985',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzwedel',
'title_category' => 'patrician',
'region' => '5',
'place' => '18',
'quarter' => '14986',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Havelberg',
'title_category' => 'patrician',
'region' => '5',
'place' => '19',
'quarter' => '14987',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lindow',
'title_category' => 'hufner',
'region' => '5',
'place' => '20',
'quarter' => '14988',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stettin',
'title_category' => 'patrician',
'region' => '6',
'place' => '21',
'quarter' => '14989',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Greifenberg',
'title_category' => 'hufner',
'region' => '6',
'place' => '22',
'quarter' => '14990',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kolberg',
'title_category' => 'patrician',
'region' => '6',
'place' => '23',
'quarter' => '14991',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Greifswald',
'title_category' => 'patrician',
'region' => '6',
'place' => '24',
'quarter' => '14992',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Munster',
'title_category' => 'patrician',
'region' => '7',
'place' => '25',
'quarter' => '14993',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bielefeld',
'title_category' => 'hufner',
'region' => '7',
'place' => '26',
'quarter' => '14994',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Osnabruck',
'title_category' => 'patrician',
'region' => '7',
'place' => '27',
'quarter' => '14995',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Paderborn',
'title_category' => 'patrician',
'region' => '7',
'place' => '28',
'quarter' => '14996',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Regensburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '29',
'quarter' => '14997',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Augsburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '30',
'quarter' => '14998',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wurzburg',
'title_category' => 'patrician',
'region' => '8',
'place' => '31',
'quarter' => '14999',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nuremberg',
'title_category' => 'patrician',
'region' => '8',
'place' => '32',
'quarter' => '15000',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzburg',
'title_category' => 'patrician',
'region' => '9',
'place' => '33',
'quarter' => '15001',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwerfen',
'title_category' => 'hufner',
'region' => '9',
'place' => '34',
'quarter' => '15002',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hallstat',
'title_category' => 'patrician',
'region' => '9',
'place' => '35',
'quarter' => '15003',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berchtesgaden',
'title_category' => 'hufner',
'region' => '9',
'place' => '36',
'quarter' => '15004',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vienna',
'title_category' => 'patrician',
'region' => '10',
'place' => '37',
'quarter' => '15005',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schaunberg',
'title_category' => 'hufner',
'region' => '10',
'place' => '38',
'quarter' => '15006',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Polten',
'title_category' => 'patrician',
'region' => '10',
'place' => '39',
'quarter' => '15007',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pressburg',
'title_category' => 'patrician',
'region' => '10',
'place' => '40',
'quarter' => '15008',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Graz',
'title_category' => 'patrician',
'region' => '11',
'place' => '41',
'quarter' => '15009',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenwang',
'title_category' => 'patrician',
'region' => '11',
'place' => '42',
'quarter' => '15010',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Styraburg',
'title_category' => 'patrician',
'region' => '11',
'place' => '43',
'quarter' => '15011',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Seckau',
'title_category' => 'hufner',
'region' => '11',
'place' => '44',
'quarter' => '15012',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Innsbruck',
'title_category' => 'patrician',
'region' => '12',
'place' => '45',
'quarter' => '15013',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bozen',
'title_category' => 'patrician',
'region' => '12',
'place' => '46',
'quarter' => '15014',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trent',
'title_category' => 'patrician',
'region' => '12',
'place' => '47',
'quarter' => '15015',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brixen',
'title_category' => 'patrician',
'region' => '12',
'place' => '48',
'quarter' => '15016',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ulm',
'title_category' => 'patrician',
'region' => '13',
'place' => '49',
'quarter' => '15017',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenzollern',
'title_category' => 'hufner',
'region' => '13',
'place' => '50',
'quarter' => '15018',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Freiburg',
'title_category' => 'patrician',
'region' => '13',
'place' => '51',
'quarter' => '15019',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hohenstaufen',
'title_category' => 'hufner',
'region' => '13',
'place' => '52',
'quarter' => '15020',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bern',
'title_category' => 'patrician',
'region' => '14',
'place' => '53',
'quarter' => '15021',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zurich',
'title_category' => 'patrician',
'region' => '14',
'place' => '54',
'quarter' => '15022',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Basel',
'title_category' => 'patrician',
'region' => '14',
'place' => '55',
'quarter' => '15023',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sankt Gallen',
'title_category' => 'patrician',
'region' => '14',
'place' => '56',
'quarter' => '15024',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hagenau',
'title_category' => 'patrician',
'region' => '15',
'place' => '57',
'quarter' => '15025',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Colmar',
'title_category' => 'patrician',
'region' => '15',
'place' => '58',
'quarter' => '15026',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Strassbourg',
'title_category' => 'patrician',
'region' => '15',
'place' => '59',
'quarter' => '15027',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wissembourg',
'title_category' => 'patrician',
'region' => '15',
'place' => '60',
'quarter' => '15028',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Prague',
'title_category' => 'patrician',
'region' => '16',
'place' => '61',
'quarter' => '15029',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Karlstein',
'title_category' => 'hufner',
'region' => '16',
'place' => '62',
'quarter' => '15030',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pilsen',
'title_category' => 'patrician',
'region' => '16',
'place' => '63',
'quarter' => '15031',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plass',
'title_category' => 'hufner',
'region' => '16',
'place' => '64',
'quarter' => '15032',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Brunn',
'title_category' => 'patrician',
'region' => '17',
'place' => '65',
'quarter' => '15033',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zlin',
'title_category' => 'patrician',
'region' => '17',
'place' => '66',
'quarter' => '15034',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olmutz',
'title_category' => 'patrician',
'region' => '17',
'place' => '67',
'quarter' => '15035',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trebitz',
'title_category' => 'hufner',
'region' => '17',
'place' => '68',
'quarter' => '15036',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mainz',
'title_category' => 'patrician',
'region' => '18',
'place' => '69',
'quarter' => '15037',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Heidelberg',
'title_category' => 'patrician',
'region' => '18',
'place' => '70',
'quarter' => '15038',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Frankfurt',
'title_category' => 'patrician',
'region' => '18',
'place' => '71',
'quarter' => '15039',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fulda',
'title_category' => 'hufner',
'region' => '18',
'place' => '72',
'quarter' => '15040',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cologne',
'title_category' => 'patrician',
'region' => '19',
'place' => '73',
'quarter' => '15041',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aachen',
'title_category' => 'patrician',
'region' => '19',
'place' => '74',
'quarter' => '15042',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Liege',
'title_category' => 'patrician',
'region' => '19',
'place' => '75',
'quarter' => '15043',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stavelot',
'title_category' => 'hufner',
'region' => '19',
'place' => '76',
'quarter' => '15044',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Trier',
'title_category' => 'patrician',
'region' => '20',
'place' => '77',
'quarter' => '15045',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Luxembourg',
'title_category' => 'patrician',
'region' => '20',
'place' => '78',
'quarter' => '15046',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Metz',
'title_category' => 'patrician',
'region' => '20',
'place' => '79',
'quarter' => '15047',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pruem',
'title_category' => 'hufner',
'region' => '20',
'place' => '80',
'quarter' => '15048',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guelders',
'title_category' => 'hufner',
'region' => '21',
'place' => '81',
'quarter' => '15049',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zutphen',
'title_category' => 'patrician',
'region' => '21',
'place' => '82',
'quarter' => '15050',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nimeguen',
'title_category' => 'patrician',
'region' => '21',
'place' => '83',
'quarter' => '15051',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Deventer',
'title_category' => 'patrician',
'region' => '21',
'place' => '84',
'quarter' => '15052',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dorestad',
'title_category' => 'patrician',
'region' => '22',
'place' => '85',
'quarter' => '15053',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gouda',
'title_category' => 'patrician',
'region' => '22',
'place' => '86',
'quarter' => '15054',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Utrecht',
'title_category' => 'patrician',
'region' => '22',
'place' => '87',
'quarter' => '15055',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amsterdam',
'title_category' => 'patrician',
'region' => '22',
'place' => '88',
'quarter' => '15056',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sneek',
'title_category' => 'patrician',
'region' => '23',
'place' => '89',
'quarter' => '15057',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Emden',
'title_category' => 'patrician',
'region' => '23',
'place' => '90',
'quarter' => '15058',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Groningen',
'title_category' => 'patrician',
'region' => '23',
'place' => '91',
'quarter' => '15059',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dokkum',
'title_category' => 'patrician',
'region' => '23',
'place' => '92',
'quarter' => '15060',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Louvain',
'title_category' => 'patrician',
'region' => '24',
'place' => '93',
'quarter' => '15061',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Breda',
'title_category' => 'patrician',
'region' => '24',
'place' => '94',
'quarter' => '15062',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Antwerp',
'title_category' => 'patrician',
'region' => '24',
'place' => '95',
'quarter' => '15063',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thorn',
'title_category' => 'hufner',
'region' => '24',
'place' => '96',
'quarter' => '15064',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bruges',
'title_category' => 'patrician',
'region' => '25',
'place' => '97',
'quarter' => '15065',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghent',
'title_category' => 'patrician',
'region' => '25',
'place' => '98',
'quarter' => '15066',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cambrai',
'title_category' => 'patrician',
'region' => '25',
'place' => '99',
'quarter' => '15067',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ypres',
'title_category' => 'patrician',
'region' => '25',
'place' => '100',
'quarter' => '15068',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Klagenfurt',
'title_category' => 'patrician',
'region' => '26',
'place' => '101',
'quarter' => '15069',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Treffen',
'title_category' => 'patrician',
'region' => '26',
'place' => '102',
'quarter' => '15070',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gorizia',
'title_category' => 'patrician',
'region' => '26',
'place' => '103',
'quarter' => '15071',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Moosburg',
'title_category' => 'hufner',
'region' => '26',
'place' => '104',
'quarter' => '15072',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krainburg',
'title_category' => 'patrician',
'region' => '27',
'place' => '105',
'quarter' => '15073',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Heunburg',
'title_category' => 'hufner',
'region' => '27',
'place' => '106',
'quarter' => '15074',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Laibach',
'title_category' => 'patrician',
'region' => '27',
'place' => '107',
'quarter' => '15075',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sittich',
'title_category' => 'hufner',
'region' => '27',
'place' => '108',
'quarter' => '15076',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vannes',
'title_category' => 'patrician',
'region' => '28',
'place' => '109',
'quarter' => '15077',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rohan',
'title_category' => 'hufner',
'region' => '28',
'place' => '110',
'quarter' => '15078',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Quimper',
'title_category' => 'patrician',
'region' => '28',
'place' => '111',
'quarter' => '15079',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Redon',
'title_category' => 'hufner',
'region' => '28',
'place' => '112',
'quarter' => '15080',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Paris',
'title_category' => 'patrician',
'region' => '29',
'place' => '113',
'quarter' => '15081',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Meaux',
'title_category' => 'patrician',
'region' => '29',
'place' => '114',
'quarter' => '15082',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chartres',
'title_category' => 'patrician',
'region' => '29',
'place' => '115',
'quarter' => '15083',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Denis',
'title_category' => 'patrician',
'region' => '29',
'place' => '116',
'quarter' => '15084',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bar',
'title_category' => 'hufner',
'region' => '30',
'place' => '117',
'quarter' => '15085',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Neufchateau',
'title_category' => 'hufner',
'region' => '30',
'place' => '118',
'quarter' => '15086',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Verdun',
'title_category' => 'patrician',
'region' => '30',
'place' => '119',
'quarter' => '15087',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Langres',
'title_category' => 'patrician',
'region' => '30',
'place' => '120',
'quarter' => '15088',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amiens',
'title_category' => 'patrician',
'region' => '31',
'place' => '121',
'quarter' => '15089',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Boulogne',
'title_category' => 'patrician',
'region' => '31',
'place' => '122',
'quarter' => '15090',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laon',
'title_category' => 'patrician',
'region' => '31',
'place' => '123',
'quarter' => '15091',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Omer',
'title_category' => 'patrician',
'region' => '31',
'place' => '124',
'quarter' => '15092',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rouen',
'title_category' => 'patrician',
'region' => '32',
'place' => '125',
'quarter' => '15093',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caen',
'title_category' => 'patrician',
'region' => '32',
'place' => '126',
'quarter' => '15094',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lisieux',
'title_category' => 'patrician',
'region' => '32',
'place' => '127',
'quarter' => '15095',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bayeux',
'title_category' => 'patrician',
'region' => '32',
'place' => '128',
'quarter' => '15096',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Troyes',
'title_category' => 'patrician',
'region' => '33',
'place' => '129',
'quarter' => '15097',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thierry',
'title_category' => 'hufner',
'region' => '33',
'place' => '130',
'quarter' => '15098',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Reims',
'title_category' => 'patrician',
'region' => '33',
'place' => '131',
'quarter' => '15099',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Clairvaux',
'title_category' => 'hufner',
'region' => '33',
'place' => '132',
'quarter' => '15100',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Orleans',
'title_category' => 'patrician',
'region' => '34',
'place' => '133',
'quarter' => '15101',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chateaudun',
'title_category' => 'hufner',
'region' => '34',
'place' => '134',
'quarter' => '15102',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Blois',
'title_category' => 'patrician',
'region' => '34',
'place' => '135',
'quarter' => '15103',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vendome',
'title_category' => 'hufner',
'region' => '34',
'place' => '136',
'quarter' => '15104',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tours',
'title_category' => 'patrician',
'region' => '35',
'place' => '137',
'quarter' => '15105',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plessis',
'title_category' => 'hufner',
'region' => '35',
'place' => '138',
'quarter' => '15106',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Chinon',
'title_category' => 'hufner',
'region' => '35',
'place' => '139',
'quarter' => '15107',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Loches',
'title_category' => 'hufner',
'region' => '35',
'place' => '140',
'quarter' => '15108',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Angers',
'title_category' => 'patrician',
'region' => '36',
'place' => '141',
'quarter' => '15109',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gontier',
'title_category' => 'hufner',
'region' => '36',
'place' => '142',
'quarter' => '15110',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mans',
'title_category' => 'patrician',
'region' => '36',
'place' => '143',
'quarter' => '15111',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laval',
'title_category' => 'hufner',
'region' => '36',
'place' => '144',
'quarter' => '15112',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Poitiers',
'title_category' => 'patrician',
'region' => '37',
'place' => '145',
'quarter' => '15113',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chatellerault',
'title_category' => 'hufner',
'region' => '37',
'place' => '146',
'quarter' => '15114',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Montmorillon',
'title_category' => 'patrician',
'region' => '37',
'place' => '147',
'quarter' => '15115',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vauclair',
'title_category' => 'hufner',
'region' => '37',
'place' => '148',
'quarter' => '15116',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bourges',
'title_category' => 'patrician',
'region' => '38',
'place' => '149',
'quarter' => '15117',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chateauroux',
'title_category' => 'hufner',
'region' => '38',
'place' => '150',
'quarter' => '15118',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nevers',
'title_category' => 'patrician',
'region' => '38',
'place' => '151',
'quarter' => '15119',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vezelay',
'title_category' => 'patrician',
'region' => '38',
'place' => '152',
'quarter' => '15120',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Moulins',
'title_category' => 'patrician',
'region' => '39',
'place' => '153',
'quarter' => '15121',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montlucon',
'title_category' => 'hufner',
'region' => '39',
'place' => '154',
'quarter' => '15122',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gueret',
'title_category' => 'hufner',
'region' => '39',
'place' => '155',
'quarter' => '15123',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vichy',
'title_category' => 'hufner',
'region' => '39',
'place' => '156',
'quarter' => '15124',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Clermont Ferrand',
'title_category' => 'patrician',
'region' => '40',
'place' => '157',
'quarter' => '15125',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montbrison',
'title_category' => 'hufner',
'region' => '40',
'place' => '158',
'quarter' => '15126',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Puy en Velay',
'title_category' => 'patrician',
'region' => '40',
'place' => '159',
'quarter' => '15127',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Issoire',
'title_category' => 'hufner',
'region' => '40',
'place' => '160',
'quarter' => '15128',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Arles',
'title_category' => 'patrician',
'region' => '41',
'place' => '161',
'quarter' => '15129',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aix',
'title_category' => 'patrician',
'region' => '41',
'place' => '162',
'quarter' => '15130',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marseille',
'title_category' => 'patrician',
'region' => '41',
'place' => '163',
'quarter' => '15131',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avignon',
'title_category' => 'patrician',
'region' => '41',
'place' => '164',
'quarter' => '15132',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Toulouse',
'title_category' => 'patrician',
'region' => '42',
'place' => '165',
'quarter' => '15133',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carcasonne',
'title_category' => 'patrician',
'region' => '42',
'place' => '166',
'quarter' => '15134',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Narbonne',
'title_category' => 'patrician',
'region' => '42',
'place' => '167',
'quarter' => '15135',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Benoit',
'title_category' => 'hufner',
'region' => '42',
'place' => '168',
'quarter' => '15136',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bordeaux',
'title_category' => 'patrician',
'region' => '43',
'place' => '169',
'quarter' => '15137',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cahors',
'title_category' => 'patrician',
'region' => '43',
'place' => '170',
'quarter' => '15138',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Auch',
'title_category' => 'patrician',
'region' => '43',
'place' => '171',
'quarter' => '15139',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Montauban',
'title_category' => 'hufner',
'region' => '43',
'place' => '172',
'quarter' => '15140',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Angouleme',
'title_category' => 'patrician',
'region' => '44',
'place' => '173',
'quarter' => '15141',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limoges',
'title_category' => 'patrician',
'region' => '44',
'place' => '174',
'quarter' => '15142',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Perigeux',
'title_category' => 'patrician',
'region' => '44',
'place' => '175',
'quarter' => '15143',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tulle',
'title_category' => 'hufner',
'region' => '44',
'place' => '176',
'quarter' => '15144',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Grenoble',
'title_category' => 'patrician',
'region' => '45',
'place' => '177',
'quarter' => '15145',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vienne',
'title_category' => 'patrician',
'region' => '45',
'place' => '178',
'quarter' => '15146',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lyon',
'title_category' => 'patrician',
'region' => '45',
'place' => '179',
'quarter' => '15147',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Autun',
'title_category' => 'patrician',
'region' => '45',
'place' => '180',
'quarter' => '15148',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dijon',
'title_category' => 'patrician',
'region' => '46',
'place' => '181',
'quarter' => '15149',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Besancon',
'title_category' => 'patrician',
'region' => '46',
'place' => '182',
'quarter' => '15150',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chalon',
'title_category' => 'patrician',
'region' => '46',
'place' => '183',
'quarter' => '15151',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Citeaux',
'title_category' => 'hufner',
'region' => '46',
'place' => '184',
'quarter' => '15152',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'London',
'title_category' => 'patrician',
'region' => '47',
'place' => '185',
'quarter' => '15153',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Windsor',
'title_category' => 'hufner',
'region' => '47',
'place' => '186',
'quarter' => '15154',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guildford',
'title_category' => 'patrician',
'region' => '47',
'place' => '187',
'quarter' => '15155',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Westminster',
'title_category' => 'patrician',
'region' => '47',
'place' => '188',
'quarter' => '15156',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Canterbury',
'title_category' => 'patrician',
'region' => '48',
'place' => '189',
'quarter' => '15157',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dover',
'title_category' => 'patrician',
'region' => '48',
'place' => '190',
'quarter' => '15158',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ashford',
'title_category' => 'patrician',
'region' => '48',
'place' => '191',
'quarter' => '15159',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Maidstone',
'title_category' => 'patrician',
'region' => '48',
'place' => '192',
'quarter' => '15160',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Winchester',
'title_category' => 'patrician',
'region' => '49',
'place' => '193',
'quarter' => '15161',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Southampton',
'title_category' => 'hufner',
'region' => '49',
'place' => '194',
'quarter' => '15162',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Wells',
'title_category' => 'patrician',
'region' => '49',
'place' => '195',
'quarter' => '15163',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wimborne',
'title_category' => 'hufner',
'region' => '49',
'place' => '196',
'quarter' => '15164',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Truro',
'title_category' => 'patrician',
'region' => '50',
'place' => '197',
'quarter' => '15165',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bodmin',
'title_category' => 'patrician',
'region' => '50',
'place' => '198',
'quarter' => '15166',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint German',
'title_category' => 'patrician',
'region' => '50',
'place' => '199',
'quarter' => '15167',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Madron',
'title_category' => 'hufner',
'region' => '50',
'place' => '200',
'quarter' => '15168',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Norwich',
'title_category' => 'patrician',
'region' => '51',
'place' => '201',
'quarter' => '15169',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ipswich',
'title_category' => 'patrician',
'region' => '51',
'place' => '202',
'quarter' => '15170',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Edmunds',
'title_category' => 'patrician',
'region' => '51',
'place' => '203',
'quarter' => '15171',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Croxton',
'title_category' => 'hufner',
'region' => '51',
'place' => '204',
'quarter' => '15172',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'York',
'title_category' => 'patrician',
'region' => '52',
'place' => '205',
'quarter' => '15173',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durham',
'title_category' => 'patrician',
'region' => '52',
'place' => '206',
'quarter' => '15174',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Scarborough',
'title_category' => 'patrician',
'region' => '52',
'place' => '207',
'quarter' => '15175',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lancaster',
'title_category' => 'patrician',
'region' => '52',
'place' => '208',
'quarter' => '15176',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Worcester',
'title_category' => 'patrician',
'region' => '53',
'place' => '209',
'quarter' => '15177',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gloucester',
'title_category' => 'patrician',
'region' => '53',
'place' => '210',
'quarter' => '15178',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bristol',
'title_category' => 'patrician',
'region' => '53',
'place' => '211',
'quarter' => '15179',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cirencester',
'title_category' => 'patrician',
'region' => '53',
'place' => '212',
'quarter' => '15180',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ely',
'title_category' => 'patrician',
'region' => '54',
'place' => '213',
'quarter' => '15181',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cambridge',
'title_category' => 'patrician',
'region' => '54',
'place' => '214',
'quarter' => '15182',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oxford',
'title_category' => 'patrician',
'region' => '54',
'place' => '215',
'quarter' => '15183',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Albans',
'title_category' => 'patrician',
'region' => '54',
'place' => '216',
'quarter' => '15184',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tamworth',
'title_category' => 'hufner',
'region' => '55',
'place' => '217',
'quarter' => '15185',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Warwick',
'title_category' => 'patrician',
'region' => '55',
'place' => '218',
'quarter' => '15186',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stafford',
'title_category' => 'patrician',
'region' => '55',
'place' => '219',
'quarter' => '15187',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leicester',
'title_category' => 'patrician',
'region' => '55',
'place' => '220',
'quarter' => '15188',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lincoln',
'title_category' => 'patrician',
'region' => '56',
'place' => '221',
'quarter' => '15189',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nottingham',
'title_category' => 'hufner',
'region' => '56',
'place' => '222',
'quarter' => '15190',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Boston',
'title_category' => 'patrician',
'region' => '56',
'place' => '223',
'quarter' => '15191',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stamford',
'title_category' => 'patrician',
'region' => '56',
'place' => '224',
'quarter' => '15192',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caernarfon',
'title_category' => 'patrician',
'region' => '57',
'place' => '225',
'quarter' => '15193',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harlech',
'title_category' => 'hufner',
'region' => '57',
'place' => '226',
'quarter' => '15194',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bangor',
'title_category' => 'patrician',
'region' => '57',
'place' => '227',
'quarter' => '15195',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Conwy',
'title_category' => 'hufner',
'region' => '57',
'place' => '228',
'quarter' => '15196',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Chester',
'title_category' => 'patrician',
'region' => '58',
'place' => '229',
'quarter' => '15197',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Shrewsbury',
'title_category' => 'patrician',
'region' => '58',
'place' => '230',
'quarter' => '15198',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glasbury',
'title_category' => 'patrician',
'region' => '58',
'place' => '231',
'quarter' => '15199',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Llanllugan',
'title_category' => 'hufner',
'region' => '58',
'place' => '232',
'quarter' => '15200',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Caerwent',
'title_category' => 'patrician',
'region' => '59',
'place' => '233',
'quarter' => '15201',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carmarthen',
'title_category' => 'patrician',
'region' => '59',
'place' => '234',
'quarter' => '15202',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cardiff',
'title_category' => 'patrician',
'region' => '59',
'place' => '235',
'quarter' => '15203',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Abergavenny',
'title_category' => 'patrician',
'region' => '59',
'place' => '236',
'quarter' => '15204',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oslo',
'title_category' => 'patrician',
'region' => '60',
'place' => '237',
'quarter' => '15205',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tonsborg',
'title_category' => 'hufner',
'region' => '60',
'place' => '238',
'quarter' => '15206',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hamar',
'title_category' => 'patrician',
'region' => '60',
'place' => '239',
'quarter' => '15207',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gimsoy',
'title_category' => 'hufner',
'region' => '60',
'place' => '240',
'quarter' => '15208',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bergen',
'title_category' => 'patrician',
'region' => '61',
'place' => '241',
'quarter' => '15209',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Holm',
'title_category' => 'hufner',
'region' => '61',
'place' => '242',
'quarter' => '15210',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stavanger',
'title_category' => 'patrician',
'region' => '61',
'place' => '243',
'quarter' => '15211',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Halsnoy',
'title_category' => 'hufner',
'region' => '61',
'place' => '244',
'quarter' => '15212',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Copenhagen',
'title_category' => 'patrician',
'region' => '62',
'place' => '245',
'quarter' => '15213',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalundborg',
'title_category' => 'hufner',
'region' => '62',
'place' => '246',
'quarter' => '15214',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Roskilde',
'title_category' => 'patrician',
'region' => '62',
'place' => '247',
'quarter' => '15215',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Esrum',
'title_category' => 'hufner',
'region' => '62',
'place' => '248',
'quarter' => '15216',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Lund',
'title_category' => 'patrician',
'region' => '63',
'place' => '249',
'quarter' => '15217',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trelleborg',
'title_category' => 'hufner',
'region' => '63',
'place' => '250',
'quarter' => '15218',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Halmstad',
'title_category' => 'patrician',
'region' => '63',
'place' => '251',
'quarter' => '15219',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Herrevad',
'title_category' => 'hufner',
'region' => '63',
'place' => '252',
'quarter' => '15220',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Aarhus',
'title_category' => 'patrician',
'region' => '64',
'place' => '253',
'quarter' => '15221',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aalborg',
'title_category' => 'patrician',
'region' => '64',
'place' => '254',
'quarter' => '15222',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ripen',
'title_category' => 'patrician',
'region' => '64',
'place' => '255',
'quarter' => '15223',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Essenbaek',
'title_category' => 'hufner',
'region' => '64',
'place' => '256',
'quarter' => '15224',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stockholm',
'title_category' => 'patrician',
'region' => '65',
'place' => '257',
'quarter' => '15225',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vasteras',
'title_category' => 'patrician',
'region' => '65',
'place' => '258',
'quarter' => '15226',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Uppsala',
'title_category' => 'patrician',
'region' => '65',
'place' => '259',
'quarter' => '15227',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eskilstuna',
'title_category' => 'hufner',
'region' => '65',
'place' => '260',
'quarter' => '15228',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Visby',
'title_category' => 'patrician',
'region' => '66',
'place' => '261',
'quarter' => '15229',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalmar',
'title_category' => 'hufner',
'region' => '66',
'place' => '262',
'quarter' => '15230',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vaxjo',
'title_category' => 'patrician',
'region' => '66',
'place' => '263',
'quarter' => '15231',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nydala',
'title_category' => 'hufner',
'region' => '66',
'place' => '264',
'quarter' => '15232',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Skara',
'title_category' => 'patrician',
'region' => '67',
'place' => '265',
'quarter' => '15233',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dalaborg',
'title_category' => 'hufner',
'region' => '67',
'place' => '266',
'quarter' => '15234',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Jonkoping',
'title_category' => 'patrician',
'region' => '67',
'place' => '267',
'quarter' => '15235',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vadstena',
'title_category' => 'hufner',
'region' => '67',
'place' => '268',
'quarter' => '15236',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Riga',
'title_category' => 'patrician',
'region' => '68',
'place' => '269',
'quarter' => '15237',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wenden',
'title_category' => 'hufner',
'region' => '68',
'place' => '270',
'quarter' => '15238',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Walk',
'title_category' => 'patrician',
'region' => '68',
'place' => '271',
'quarter' => '15239',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaburg',
'title_category' => 'hufner',
'region' => '68',
'place' => '272',
'quarter' => '15240',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pilten',
'title_category' => 'patrician',
'region' => '69',
'place' => '273',
'quarter' => '15241',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Libau',
'title_category' => 'patrician',
'region' => '69',
'place' => '274',
'quarter' => '15242',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Goldingen',
'title_category' => 'patrician',
'region' => '69',
'place' => '275',
'quarter' => '15243',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Talsen',
'title_category' => 'hufner',
'region' => '69',
'place' => '276',
'quarter' => '15244',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Marienburg',
'title_category' => 'patrician',
'region' => '70',
'place' => '277',
'quarter' => '15245',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Elbing',
'title_category' => 'hufner',
'region' => '70',
'place' => '278',
'quarter' => '15246',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Danzig',
'title_category' => 'patrician',
'region' => '70',
'place' => '279',
'quarter' => '15247',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Koningsberg',
'title_category' => 'patrician',
'region' => '70',
'place' => '280',
'quarter' => '15248',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Memelburg',
'title_category' => 'patrician',
'region' => '71',
'place' => '281',
'quarter' => '15249',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saule',
'title_category' => 'hufner',
'region' => '71',
'place' => '282',
'quarter' => '15250',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tilsit',
'title_category' => 'patrician',
'region' => '71',
'place' => '283',
'quarter' => '15251',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Georgenburg',
'title_category' => 'hufner',
'region' => '71',
'place' => '284',
'quarter' => '15252',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Reval',
'title_category' => 'patrician',
'region' => '72',
'place' => '285',
'quarter' => '15253',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Weissenstein',
'title_category' => 'hufner',
'region' => '72',
'place' => '286',
'quarter' => '15254',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Arensburg',
'title_category' => 'patrician',
'region' => '72',
'place' => '287',
'quarter' => '15255',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hapsal',
'title_category' => 'patrician',
'region' => '72',
'place' => '288',
'quarter' => '15256',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edinburgh',
'title_category' => 'patrician',
'region' => '73',
'place' => '289',
'quarter' => '15257',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Linlithgow',
'title_category' => 'hufner',
'region' => '73',
'place' => '290',
'quarter' => '15258',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunbar',
'title_category' => 'hufner',
'region' => '73',
'place' => '291',
'quarter' => '15259',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Haddington',
'title_category' => 'patrician',
'region' => '73',
'place' => '292',
'quarter' => '15260',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bamburgh',
'title_category' => 'patrician',
'region' => '74',
'place' => '293',
'quarter' => '15261',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alnwick',
'title_category' => 'hufner',
'region' => '74',
'place' => '294',
'quarter' => '15262',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Berwick',
'title_category' => 'patrician',
'region' => '74',
'place' => '295',
'quarter' => '15263',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jedburgh',
'title_category' => 'patrician',
'region' => '74',
'place' => '296',
'quarter' => '15264',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dumbarton',
'title_category' => 'patrician',
'region' => '75',
'place' => '297',
'quarter' => '15265',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kilmarnock',
'title_category' => 'patrician',
'region' => '75',
'place' => '298',
'quarter' => '15266',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glasgow',
'title_category' => 'patrician',
'region' => '75',
'place' => '299',
'quarter' => '15267',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ayr',
'title_category' => 'patrician',
'region' => '75',
'place' => '300',
'quarter' => '15268',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carlisle',
'title_category' => 'patrician',
'region' => '76',
'place' => '301',
'quarter' => '15269',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caerloverock',
'title_category' => 'hufner',
'region' => '76',
'place' => '302',
'quarter' => '15270',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Whithorn',
'title_category' => 'patrician',
'region' => '76',
'place' => '303',
'quarter' => '15271',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkcudbright',
'title_category' => 'hufner',
'region' => '76',
'place' => '304',
'quarter' => '15272',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunadd',
'title_category' => 'hufner',
'region' => '77',
'place' => '305',
'quarter' => '15273',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunollie',
'title_category' => 'hufner',
'region' => '77',
'place' => '306',
'quarter' => '15274',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dunaverty',
'title_category' => 'hufner',
'region' => '77',
'place' => '307',
'quarter' => '15275',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Iona',
'title_category' => 'patrician',
'region' => '77',
'place' => '308',
'quarter' => '15276',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Perth',
'title_category' => 'patrician',
'region' => '78',
'place' => '309',
'quarter' => '15277',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stirling',
'title_category' => 'patrician',
'region' => '78',
'place' => '310',
'quarter' => '15278',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Andrews',
'title_category' => 'patrician',
'region' => '78',
'place' => '311',
'quarter' => '15279',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dunfermline',
'title_category' => 'patrician',
'region' => '78',
'place' => '312',
'quarter' => '15280',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Elgin',
'title_category' => 'patrician',
'region' => '79',
'place' => '313',
'quarter' => '15281',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nairn',
'title_category' => 'hufner',
'region' => '79',
'place' => '314',
'quarter' => '15282',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mortlach',
'title_category' => 'patrician',
'region' => '79',
'place' => '315',
'quarter' => '15283',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aberdeen',
'title_category' => 'patrician',
'region' => '79',
'place' => '316',
'quarter' => '15284',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dundee',
'title_category' => 'patrician',
'region' => '80',
'place' => '317',
'quarter' => '15285',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Forfar',
'title_category' => 'hufner',
'region' => '80',
'place' => '318',
'quarter' => '15286',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Scone',
'title_category' => 'patrician',
'region' => '80',
'place' => '319',
'quarter' => '15287',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arbroath',
'title_category' => 'hufner',
'region' => '80',
'place' => '320',
'quarter' => '15288',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Dingwall',
'title_category' => 'hufner',
'region' => '81',
'place' => '321',
'quarter' => '15289',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Helmsdale',
'title_category' => 'hufner',
'region' => '81',
'place' => '322',
'quarter' => '15290',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rosemarkie',
'title_category' => 'patrician',
'region' => '81',
'place' => '323',
'quarter' => '15291',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dornoch',
'title_category' => 'patrician',
'region' => '81',
'place' => '324',
'quarter' => '15292',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dublin',
'title_category' => 'patrician',
'region' => '82',
'place' => '325',
'quarter' => '15293',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tara',
'title_category' => 'hufner',
'region' => '82',
'place' => '326',
'quarter' => '15294',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kildare',
'title_category' => 'patrician',
'region' => '82',
'place' => '327',
'quarter' => '15295',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Millmount',
'title_category' => 'hufner',
'region' => '82',
'place' => '328',
'quarter' => '15296',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Armagh',
'title_category' => 'patrician',
'region' => '83',
'place' => '329',
'quarter' => '15297',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carrickfergus',
'title_category' => 'hufner',
'region' => '83',
'place' => '330',
'quarter' => '15298',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Derry',
'title_category' => 'patrician',
'region' => '83',
'place' => '331',
'quarter' => '15299',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Clogher',
'title_category' => 'hufner',
'region' => '83',
'place' => '332',
'quarter' => '15300',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Wexford',
'title_category' => 'hufner',
'region' => '84',
'place' => '333',
'quarter' => '15301',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kells',
'title_category' => 'hufner',
'region' => '84',
'place' => '334',
'quarter' => '15302',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Waterford',
'title_category' => 'patrician',
'region' => '84',
'place' => '335',
'quarter' => '15303',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durrow',
'title_category' => 'hufner',
'region' => '84',
'place' => '336',
'quarter' => '15304',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cashel',
'title_category' => 'patrician',
'region' => '85',
'place' => '337',
'quarter' => '15305',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limerick',
'title_category' => 'patrician',
'region' => '85',
'place' => '338',
'quarter' => '15306',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cork',
'title_category' => 'patrician',
'region' => '85',
'place' => '339',
'quarter' => '15307',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Roscrea',
'title_category' => 'hufner',
'region' => '85',
'place' => '340',
'quarter' => '15308',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Galway',
'title_category' => 'hufner',
'region' => '86',
'place' => '341',
'quarter' => '15309',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mayo',
'title_category' => 'patrician',
'region' => '86',
'place' => '342',
'quarter' => '15310',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tuam',
'title_category' => 'patrician',
'region' => '86',
'place' => '343',
'quarter' => '15311',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Achonry',
'title_category' => 'patrician',
'region' => '86',
'place' => '344',
'quarter' => '15312',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pamplona',
'title_category' => 'patrician',
'region' => '87',
'place' => '345',
'quarter' => '15313',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olite',
'title_category' => 'hufner',
'region' => '87',
'place' => '346',
'quarter' => '15314',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tudela',
'title_category' => 'patrician',
'region' => '87',
'place' => '347',
'quarter' => '15315',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leyre',
'title_category' => 'hufner',
'region' => '87',
'place' => '348',
'quarter' => '15316',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Sebastian',
'title_category' => 'hufner',
'region' => '88',
'place' => '349',
'quarter' => '15317',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Durango',
'title_category' => 'patrician',
'region' => '88',
'place' => '350',
'quarter' => '15318',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bilbao',
'title_category' => 'hufner',
'region' => '88',
'place' => '351',
'quarter' => '15319',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gastehiz',
'title_category' => 'patrician',
'region' => '88',
'place' => '352',
'quarter' => '15320',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jaca',
'title_category' => 'patrician',
'region' => '89',
'place' => '353',
'quarter' => '15321',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monzon',
'title_category' => 'patrician',
'region' => '89',
'place' => '354',
'quarter' => '15322',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Huesca',
'title_category' => 'patrician',
'region' => '89',
'place' => '355',
'quarter' => '15323',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sobrarbe',
'title_category' => 'hufner',
'region' => '89',
'place' => '356',
'quarter' => '15324',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zaragoza',
'title_category' => 'patrician',
'region' => '90',
'place' => '357',
'quarter' => '15325',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Molina de Aragon',
'title_category' => 'hufner',
'region' => '90',
'place' => '358',
'quarter' => '15326',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Albarracin',
'title_category' => 'patrician',
'region' => '90',
'place' => '359',
'quarter' => '15327',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rueda',
'title_category' => 'hufner',
'region' => '90',
'place' => '360',
'quarter' => '15328',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gerona',
'title_category' => 'patrician',
'region' => '91',
'place' => '361',
'quarter' => '15329',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ripoll',
'title_category' => 'hufner',
'region' => '91',
'place' => '362',
'quarter' => '15330',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Emporda',
'title_category' => 'patrician',
'region' => '91',
'place' => '363',
'quarter' => '15331',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sant Feliu de Guixols',
'title_category' => 'hufner',
'region' => '91',
'place' => '364',
'quarter' => '15332',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Barcelona',
'title_category' => 'patrician',
'region' => '92',
'place' => '365',
'quarter' => '15333',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Barbens',
'title_category' => 'hufner',
'region' => '92',
'place' => '366',
'quarter' => '15334',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Manresa',
'title_category' => 'patrician',
'region' => '92',
'place' => '367',
'quarter' => '15335',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monserrat',
'title_category' => 'hufner',
'region' => '92',
'place' => '368',
'quarter' => '15336',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valencia',
'title_category' => 'patrician',
'region' => '93',
'place' => '369',
'quarter' => '15337',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sagunto',
'title_category' => 'hufner',
'region' => '93',
'place' => '370',
'quarter' => '15338',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Castellon',
'title_category' => 'patrician',
'region' => '93',
'place' => '371',
'quarter' => '15339',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Serra',
'title_category' => 'hufner',
'region' => '93',
'place' => '372',
'quarter' => '15340',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Denia',
'title_category' => 'patrician',
'region' => '94',
'place' => '373',
'quarter' => '15341',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Guadalest',
'title_category' => 'hufner',
'region' => '94',
'place' => '374',
'quarter' => '15342',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'patrician',
'region' => '94',
'place' => '375',
'quarter' => '15343',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gandia',
'title_category' => 'hufner',
'region' => '94',
'place' => '376',
'quarter' => '15344',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palma',
'title_category' => 'patrician',
'region' => '95',
'place' => '377',
'quarter' => '15345',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pollenca',
'title_category' => 'patrician',
'region' => '95',
'place' => '378',
'quarter' => '15346',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Menorca',
'title_category' => 'patrician',
'region' => '95',
'place' => '379',
'quarter' => '15347',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ibiza',
'title_category' => 'patrician',
'region' => '95',
'place' => '380',
'quarter' => '15348',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leon',
'title_category' => 'patrician',
'region' => '96',
'place' => '381',
'quarter' => '15349',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Robla',
'title_category' => 'hufner',
'region' => '96',
'place' => '382',
'quarter' => '15350',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Guillermo',
'title_category' => 'hufner',
'region' => '96',
'place' => '383',
'quarter' => '15351',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sahagun',
'title_category' => 'hufner',
'region' => '96',
'place' => '384',
'quarter' => '15352',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oviedo',
'title_category' => 'patrician',
'region' => '97',
'place' => '385',
'quarter' => '15353',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aviles',
'title_category' => 'patrician',
'region' => '97',
'place' => '386',
'quarter' => '15354',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gijon',
'title_category' => 'patrician',
'region' => '97',
'place' => '387',
'quarter' => '15355',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Toribio',
'title_category' => 'hufner',
'region' => '97',
'place' => '388',
'quarter' => '15356',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valladolid',
'title_category' => 'patrician',
'region' => '98',
'place' => '389',
'quarter' => '15357',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avila',
'title_category' => 'patrician',
'region' => '98',
'place' => '390',
'quarter' => '15358',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Segovia',
'title_category' => 'patrician',
'region' => '98',
'place' => '391',
'quarter' => '15359',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salamanca',
'title_category' => 'patrician',
'region' => '98',
'place' => '392',
'quarter' => '15360',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Burgos',
'title_category' => 'patrician',
'region' => '99',
'place' => '393',
'quarter' => '15361',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Santo Domingo de Silos',
'title_category' => 'hufner',
'region' => '99',
'place' => '394',
'quarter' => '15362',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palencia',
'title_category' => 'hufner',
'region' => '99',
'place' => '395',
'quarter' => '15363',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'San Millan',
'title_category' => 'hufner',
'region' => '99',
'place' => '396',
'quarter' => '15364',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Santiago',
'title_category' => 'patrician',
'region' => '100',
'place' => '397',
'quarter' => '15365',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ourense',
'title_category' => 'patrician',
'region' => '100',
'place' => '398',
'quarter' => '15366',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coruna',
'title_category' => 'patrician',
'region' => '100',
'place' => '399',
'quarter' => '15367',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ponferrada',
'title_category' => 'hufner',
'region' => '100',
'place' => '400',
'quarter' => '15368',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Lisbon',
'title_category' => 'patrician',
'region' => '101',
'place' => '401',
'quarter' => '15369',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sintra',
'title_category' => 'hufner',
'region' => '101',
'place' => '402',
'quarter' => '15370',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Santarem',
'title_category' => 'patrician',
'region' => '101',
'place' => '403',
'quarter' => '15371',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcobaca',
'title_category' => 'hufner',
'region' => '101',
'place' => '404',
'quarter' => '15372',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Porto',
'title_category' => 'patrician',
'region' => '102',
'place' => '405',
'quarter' => '15373',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Guimaraes',
'title_category' => 'patrician',
'region' => '102',
'place' => '406',
'quarter' => '15374',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Viana',
'title_category' => 'patrician',
'region' => '102',
'place' => '407',
'quarter' => '15375',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aveiro',
'title_category' => 'patrician',
'region' => '102',
'place' => '408',
'quarter' => '15376',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Braganca',
'title_category' => 'patrician',
'region' => '103',
'place' => '409',
'quarter' => '15377',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sanabria',
'title_category' => 'patrician',
'region' => '103',
'place' => '410',
'quarter' => '15378',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Verin',
'title_category' => 'patrician',
'region' => '103',
'place' => '411',
'quarter' => '15379',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mirandela',
'title_category' => 'patrician',
'region' => '103',
'place' => '412',
'quarter' => '15380',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coimbra',
'title_category' => 'patrician',
'region' => '104',
'place' => '413',
'quarter' => '15381',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tomar',
'title_category' => 'hufner',
'region' => '104',
'place' => '414',
'quarter' => '15382',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Leiria',
'title_category' => 'hufner',
'region' => '104',
'place' => '415',
'quarter' => '15383',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pombal',
'title_category' => 'hufner',
'region' => '104',
'place' => '416',
'quarter' => '15384',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Evora',
'title_category' => 'patrician',
'region' => '105',
'place' => '417',
'quarter' => '15385',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcacer',
'title_category' => 'hufner',
'region' => '105',
'place' => '418',
'quarter' => '15386',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Moura',
'title_category' => 'patrician',
'region' => '105',
'place' => '419',
'quarter' => '15387',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Avis',
'title_category' => 'hufner',
'region' => '105',
'place' => '420',
'quarter' => '15388',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Faro',
'title_category' => 'patrician',
'region' => '106',
'place' => '421',
'quarter' => '15389',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Paderne',
'title_category' => 'hufner',
'region' => '106',
'place' => '422',
'quarter' => '15390',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alvor',
'title_category' => 'patrician',
'region' => '106',
'place' => '423',
'quarter' => '15391',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Silves',
'title_category' => 'patrician',
'region' => '106',
'place' => '424',
'quarter' => '15392',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cordoba',
'title_category' => 'patrician',
'region' => '107',
'place' => '425',
'quarter' => '15393',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Andujar',
'title_category' => 'hufner',
'region' => '107',
'place' => '426',
'quarter' => '15394',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Jaen',
'title_category' => 'patrician',
'region' => '107',
'place' => '427',
'quarter' => '15395',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ecija',
'title_category' => 'patrician',
'region' => '107',
'place' => '428',
'quarter' => '15396',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sevilla',
'title_category' => 'patrician',
'region' => '108',
'place' => '429',
'quarter' => '15397',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Osuna',
'title_category' => 'patrician',
'region' => '108',
'place' => '430',
'quarter' => '15398',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cadiz',
'title_category' => 'patrician',
'region' => '108',
'place' => '431',
'quarter' => '15399',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Huelva',
'title_category' => 'patrician',
'region' => '108',
'place' => '432',
'quarter' => '15400',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Badajoz',
'title_category' => 'patrician',
'region' => '109',
'place' => '433',
'quarter' => '15401',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zafra',
'title_category' => 'hufner',
'region' => '109',
'place' => '434',
'quarter' => '15402',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Merida',
'title_category' => 'patrician',
'region' => '109',
'place' => '435',
'quarter' => '15403',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olivenza',
'title_category' => 'hufner',
'region' => '109',
'place' => '436',
'quarter' => '15404',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Toledo',
'title_category' => 'patrician',
'region' => '110',
'place' => '437',
'quarter' => '15405',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Almaden',
'title_category' => 'patrician',
'region' => '110',
'place' => '438',
'quarter' => '15406',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Consuegra',
'title_category' => 'patrician',
'region' => '110',
'place' => '439',
'quarter' => '15407',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Talavera',
'title_category' => 'hufner',
'region' => '110',
'place' => '440',
'quarter' => '15408',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Granada',
'title_category' => 'patrician',
'region' => '111',
'place' => '441',
'quarter' => '15409',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcaudete',
'title_category' => 'hufner',
'region' => '111',
'place' => '442',
'quarter' => '15410',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antquera',
'title_category' => 'hufner',
'region' => '111',
'place' => '443',
'quarter' => '15411',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Guadix',
'title_category' => 'patrician',
'region' => '111',
'place' => '444',
'quarter' => '15412',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Almeria',
'title_category' => 'patrician',
'region' => '112',
'place' => '445',
'quarter' => '15413',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baza',
'title_category' => 'patrician',
'region' => '112',
'place' => '446',
'quarter' => '15414',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Motril',
'title_category' => 'patrician',
'region' => '112',
'place' => '447',
'quarter' => '15415',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lorca',
'title_category' => 'patrician',
'region' => '112',
'place' => '448',
'quarter' => '15416',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Murcia',
'title_category' => 'patrician',
'region' => '113',
'place' => '449',
'quarter' => '15417',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alcoy',
'title_category' => 'hufner',
'region' => '113',
'place' => '450',
'quarter' => '15418',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alicante',
'title_category' => 'patrician',
'region' => '113',
'place' => '451',
'quarter' => '15419',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cartagena',
'title_category' => 'patrician',
'region' => '113',
'place' => '452',
'quarter' => '15420',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Malaga',
'title_category' => 'patrician',
'region' => '114',
'place' => '453',
'quarter' => '15421',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Loja',
'title_category' => 'hufner',
'region' => '114',
'place' => '454',
'quarter' => '15422',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Marbella',
'title_category' => 'patrician',
'region' => '114',
'place' => '455',
'quarter' => '15423',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ronda',
'title_category' => 'patrician',
'region' => '114',
'place' => '456',
'quarter' => '15424',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Milan',
'title_category' => 'patrician',
'region' => '115',
'place' => '457',
'quarter' => '15425',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brescia',
'title_category' => 'patrician',
'region' => '115',
'place' => '458',
'quarter' => '15426',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pavia',
'title_category' => 'patrician',
'region' => '115',
'place' => '459',
'quarter' => '15427',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cremona',
'title_category' => 'patrician',
'region' => '115',
'place' => '460',
'quarter' => '15428',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Verona',
'title_category' => 'patrician',
'region' => '116',
'place' => '461',
'quarter' => '15429',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Padua',
'title_category' => 'patrician',
'region' => '116',
'place' => '462',
'quarter' => '15430',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vicenza',
'title_category' => 'patrician',
'region' => '116',
'place' => '463',
'quarter' => '15431',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mantua',
'title_category' => 'patrician',
'region' => '116',
'place' => '464',
'quarter' => '15432',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Genoa',
'title_category' => 'patrician',
'region' => '117',
'place' => '465',
'quarter' => '15433',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Noli',
'title_category' => 'patrician',
'region' => '117',
'place' => '466',
'quarter' => '15434',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aleria',
'title_category' => 'patrician',
'region' => '117',
'place' => '467',
'quarter' => '15435',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bobbio',
'title_category' => 'hufner',
'region' => '117',
'place' => '468',
'quarter' => '15436',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Venice',
'title_category' => 'patrician',
'region' => '118',
'place' => '469',
'quarter' => '15437',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Treviso',
'title_category' => 'patrician',
'region' => '118',
'place' => '470',
'quarter' => '15438',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chioggia',
'title_category' => 'patrician',
'region' => '118',
'place' => '471',
'quarter' => '15439',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Belluno',
'title_category' => 'patrician',
'region' => '118',
'place' => '472',
'quarter' => '15440',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ravenna',
'title_category' => 'patrician',
'region' => '119',
'place' => '473',
'quarter' => '15441',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cesena',
'title_category' => 'patrician',
'region' => '119',
'place' => '474',
'quarter' => '15442',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Forli',
'title_category' => 'patrician',
'region' => '119',
'place' => '475',
'quarter' => '15443',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rimini',
'title_category' => 'patrician',
'region' => '119',
'place' => '476',
'quarter' => '15444',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modena',
'title_category' => 'patrician',
'region' => '120',
'place' => '477',
'quarter' => '15445',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Parma',
'title_category' => 'patrician',
'region' => '120',
'place' => '478',
'quarter' => '15446',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ferrara',
'title_category' => 'patrician',
'region' => '120',
'place' => '479',
'quarter' => '15447',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bologna',
'title_category' => 'patrician',
'region' => '120',
'place' => '480',
'quarter' => '15448',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aquileja',
'title_category' => 'patrician',
'region' => '121',
'place' => '481',
'quarter' => '15449',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pordenone',
'title_category' => 'patrician',
'region' => '121',
'place' => '482',
'quarter' => '15450',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Udine',
'title_category' => 'patrician',
'region' => '121',
'place' => '483',
'quarter' => '15451',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gemona',
'title_category' => 'patrician',
'region' => '121',
'place' => '484',
'quarter' => '15452',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Turin',
'title_category' => 'patrician',
'region' => '122',
'place' => '485',
'quarter' => '15453',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ivrea',
'title_category' => 'patrician',
'region' => '122',
'place' => '486',
'quarter' => '15454',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Asti',
'title_category' => 'patrician',
'region' => '122',
'place' => '487',
'quarter' => '15455',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pinerollo',
'title_category' => 'hufner',
'region' => '122',
'place' => '488',
'quarter' => '15456',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Florence',
'title_category' => 'patrician',
'region' => '123',
'place' => '489',
'quarter' => '15457',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siena',
'title_category' => 'patrician',
'region' => '123',
'place' => '490',
'quarter' => '15458',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arezzo',
'title_category' => 'patrician',
'region' => '123',
'place' => '491',
'quarter' => '15459',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Grosseto',
'title_category' => 'patrician',
'region' => '123',
'place' => '492',
'quarter' => '15460',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Spoleto',
'title_category' => 'patrician',
'region' => '124',
'place' => '493',
'quarter' => '15461',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aquila',
'title_category' => 'hufner',
'region' => '124',
'place' => '494',
'quarter' => '15462',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ancona',
'title_category' => 'patrician',
'region' => '124',
'place' => '495',
'quarter' => '15463',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Assissi',
'title_category' => 'patrician',
'region' => '124',
'place' => '496',
'quarter' => '15464',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rome',
'title_category' => 'patrician',
'region' => '125',
'place' => '497',
'quarter' => '15465',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Frascati',
'title_category' => 'patrician',
'region' => '125',
'place' => '498',
'quarter' => '15466',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tivoli',
'title_category' => 'patrician',
'region' => '125',
'place' => '499',
'quarter' => '15467',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Subiaco',
'title_category' => 'hufner',
'region' => '125',
'place' => '500',
'quarter' => '15468',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pisa',
'title_category' => 'patrician',
'region' => '126',
'place' => '501',
'quarter' => '15469',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carrara',
'title_category' => 'patrician',
'region' => '126',
'place' => '502',
'quarter' => '15470',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lucca',
'title_category' => 'patrician',
'region' => '126',
'place' => '503',
'quarter' => '15471',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Volterra',
'title_category' => 'patrician',
'region' => '126',
'place' => '504',
'quarter' => '15472',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Naples',
'title_category' => 'patrician',
'region' => '127',
'place' => '505',
'quarter' => '15473',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gaeta',
'title_category' => 'patrician',
'region' => '127',
'place' => '506',
'quarter' => '15474',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amalfi',
'title_category' => 'patrician',
'region' => '127',
'place' => '507',
'quarter' => '15475',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cassino',
'title_category' => 'hufner',
'region' => '127',
'place' => '508',
'quarter' => '15476',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Taranto',
'title_category' => 'patrician',
'region' => '128',
'place' => '509',
'quarter' => '15477',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bari',
'title_category' => 'patrician',
'region' => '128',
'place' => '510',
'quarter' => '15478',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siponto',
'title_category' => 'patrician',
'region' => '128',
'place' => '511',
'quarter' => '15479',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brindisi',
'title_category' => 'patrician',
'region' => '128',
'place' => '512',
'quarter' => '15480',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cosenza',
'title_category' => 'patrician',
'region' => '129',
'place' => '513',
'quarter' => '15481',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rossano',
'title_category' => 'patrician',
'region' => '129',
'place' => '514',
'quarter' => '15482',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tropea',
'title_category' => 'patrician',
'region' => '129',
'place' => '515',
'quarter' => '15483',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vivarium',
'title_category' => 'hufner',
'region' => '129',
'place' => '516',
'quarter' => '15484',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Benevento',
'title_category' => 'patrician',
'region' => '130',
'place' => '517',
'quarter' => '15485',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Monteverde',
'title_category' => 'patrician',
'region' => '130',
'place' => '518',
'quarter' => '15486',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Potenza',
'title_category' => 'patrician',
'region' => '130',
'place' => '519',
'quarter' => '15487',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Viggiano',
'title_category' => 'hufner',
'region' => '130',
'place' => '520',
'quarter' => '15488',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sassari',
'title_category' => 'patrician',
'region' => '131',
'place' => '521',
'quarter' => '15489',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olbia',
'title_category' => 'patrician',
'region' => '131',
'place' => '522',
'quarter' => '15490',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bosa',
'title_category' => 'patrician',
'region' => '131',
'place' => '523',
'quarter' => '15491',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Porto Torres',
'title_category' => 'patrician',
'region' => '131',
'place' => '524',
'quarter' => '15492',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cagliari',
'title_category' => 'patrician',
'region' => '132',
'place' => '525',
'quarter' => '15493',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oristano',
'title_category' => 'patrician',
'region' => '132',
'place' => '526',
'quarter' => '15494',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dolia',
'title_category' => 'patrician',
'region' => '132',
'place' => '527',
'quarter' => '15495',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Iglesias',
'title_category' => 'patrician',
'region' => '132',
'place' => '528',
'quarter' => '15496',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Palermo',
'title_category' => 'patrician',
'region' => '133',
'place' => '529',
'quarter' => '15497',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Agrigento',
'title_category' => 'patrician',
'region' => '133',
'place' => '530',
'quarter' => '15498',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cefalu',
'title_category' => 'patrician',
'region' => '133',
'place' => '531',
'quarter' => '15499',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marsala',
'title_category' => 'patrician',
'region' => '133',
'place' => '532',
'quarter' => '15500',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Messina',
'title_category' => 'patrician',
'region' => '134',
'place' => '533',
'quarter' => '15501',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taormina',
'title_category' => 'patrician',
'region' => '134',
'place' => '534',
'quarter' => '15502',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Catania',
'title_category' => 'patrician',
'region' => '134',
'place' => '535',
'quarter' => '15503',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Troina',
'title_category' => 'patrician',
'region' => '134',
'place' => '536',
'quarter' => '15504',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siracusa',
'title_category' => 'patrician',
'region' => '135',
'place' => '537',
'quarter' => '15505',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caltagirone',
'title_category' => 'hufner',
'region' => '135',
'place' => '538',
'quarter' => '15506',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valletta',
'title_category' => 'patrician',
'region' => '135',
'place' => '539',
'quarter' => '15507',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modica',
'title_category' => 'patrician',
'region' => '135',
'place' => '540',
'quarter' => '15508',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tangiers',
'title_category' => 'patrician',
'region' => '136',
'place' => '541',
'quarter' => '15509',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ceuta',
'title_category' => 'patrician',
'region' => '136',
'place' => '542',
'quarter' => '15510',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouazzane',
'title_category' => 'patrician',
'region' => '136',
'place' => '543',
'quarter' => '15511',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tetouan',
'title_category' => 'patrician',
'region' => '136',
'place' => '544',
'quarter' => '15512',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anfa',
'title_category' => 'patrician',
'region' => '137',
'place' => '545',
'quarter' => '15513',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rabat',
'title_category' => 'patrician',
'region' => '137',
'place' => '546',
'quarter' => '15514',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sale',
'title_category' => 'patrician',
'region' => '137',
'place' => '547',
'quarter' => '15515',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fedala',
'title_category' => 'patrician',
'region' => '137',
'place' => '548',
'quarter' => '15516',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fez',
'title_category' => 'patrician',
'region' => '138',
'place' => '549',
'quarter' => '15517',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sefrou',
'title_category' => 'patrician',
'region' => '138',
'place' => '550',
'quarter' => '15518',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taza',
'title_category' => 'patrician',
'region' => '138',
'place' => '551',
'quarter' => '15519',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Meknes',
'title_category' => 'patrician',
'region' => '138',
'place' => '552',
'quarter' => '15520',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marrakesh',
'title_category' => 'patrician',
'region' => '139',
'place' => '553',
'quarter' => '15521',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouarzazate',
'title_category' => 'patrician',
'region' => '139',
'place' => '554',
'quarter' => '15522',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mogador',
'title_category' => 'patrician',
'region' => '139',
'place' => '555',
'quarter' => '15523',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Benhaddou',
'title_category' => 'patrician',
'region' => '139',
'place' => '556',
'quarter' => '15524',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taroudant',
'title_category' => 'patrician',
'region' => '140',
'place' => '557',
'quarter' => '15525',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Agadir',
'title_category' => 'patrician',
'region' => '140',
'place' => '558',
'quarter' => '15526',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tindouf',
'title_category' => 'patrician',
'region' => '140',
'place' => '559',
'quarter' => '15527',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tinmel',
'title_category' => 'patrician',
'region' => '140',
'place' => '560',
'quarter' => '15528',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Figuig',
'title_category' => 'patrician',
'region' => '141',
'place' => '561',
'quarter' => '15529',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sijilmassa',
'title_category' => 'patrician',
'region' => '141',
'place' => '562',
'quarter' => '15530',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tinghir',
'title_category' => 'patrician',
'region' => '141',
'place' => '563',
'quarter' => '15531',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rachidiya',
'title_category' => 'hufner',
'region' => '141',
'place' => '564',
'quarter' => '15532',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tlemcen',
'title_category' => 'patrician',
'region' => '142',
'place' => '565',
'quarter' => '15533',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oujda',
'title_category' => 'patrician',
'region' => '142',
'place' => '566',
'quarter' => '15534',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mellila',
'title_category' => 'patrician',
'region' => '142',
'place' => '567',
'quarter' => '15535',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taourirt',
'title_category' => 'hufner',
'region' => '142',
'place' => '568',
'quarter' => '15536',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oran',
'title_category' => 'patrician',
'region' => '143',
'place' => '569',
'quarter' => '15537',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mostaganem',
'title_category' => 'patrician',
'region' => '143',
'place' => '570',
'quarter' => '15538',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tiaret',
'title_category' => 'patrician',
'region' => '143',
'place' => '571',
'quarter' => '15539',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mascara',
'title_category' => 'patrician',
'region' => '143',
'place' => '572',
'quarter' => '15540',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Djelfa',
'title_category' => 'patrician',
'region' => '144',
'place' => '573',
'quarter' => '15541',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laghouat',
'title_category' => 'hufner',
'region' => '144',
'place' => '574',
'quarter' => '15542',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ghardaia',
'title_category' => 'patrician',
'region' => '144',
'place' => '575',
'quarter' => '15543',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Menia',
'title_category' => 'hufner',
'region' => '144',
'place' => '576',
'quarter' => '15544',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Khaled',
'title_category' => 'patrician',
'region' => '145',
'place' => '577',
'quarter' => '15545',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Biskra',
'title_category' => 'patrician',
'region' => '145',
'place' => '578',
'quarter' => '15546',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ouargla',
'title_category' => 'patrician',
'region' => '145',
'place' => '579',
'quarter' => '15547',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Touggourt',
'title_category' => 'patrician',
'region' => '145',
'place' => '580',
'quarter' => '15548',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Algiers',
'title_category' => 'patrician',
'region' => '146',
'place' => '581',
'quarter' => '15549',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medea',
'title_category' => 'patrician',
'region' => '146',
'place' => '582',
'quarter' => '15550',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tedelles',
'title_category' => 'patrician',
'region' => '146',
'place' => '583',
'quarter' => '15551',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Achir',
'title_category' => 'patrician',
'region' => '146',
'place' => '584',
'quarter' => '15552',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bejaia',
'title_category' => 'patrician',
'region' => '147',
'place' => '585',
'quarter' => '15553',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jijel',
'title_category' => 'patrician',
'region' => '147',
'place' => '586',
'quarter' => '15554',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Setif',
'title_category' => 'patrician',
'region' => '147',
'place' => '587',
'quarter' => '15555',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eulma',
'title_category' => 'patrician',
'region' => '147',
'place' => '588',
'quarter' => '15556',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Annaba',
'title_category' => 'patrician',
'region' => '148',
'place' => '589',
'quarter' => '15557',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabarka',
'title_category' => 'patrician',
'region' => '148',
'place' => '590',
'quarter' => '15558',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jendouba',
'title_category' => 'patrician',
'region' => '148',
'place' => '591',
'quarter' => '15559',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kaf',
'title_category' => 'patrician',
'region' => '148',
'place' => '592',
'quarter' => '15560',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tunis',
'title_category' => 'patrician',
'region' => '149',
'place' => '593',
'quarter' => '15561',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zaghouan',
'title_category' => 'patrician',
'region' => '149',
'place' => '594',
'quarter' => '15562',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hammamet',
'title_category' => 'patrician',
'region' => '149',
'place' => '595',
'quarter' => '15563',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bizerte',
'title_category' => 'patrician',
'region' => '149',
'place' => '596',
'quarter' => '15564',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kairouan',
'title_category' => 'patrician',
'region' => '150',
'place' => '597',
'quarter' => '15565',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sousse',
'title_category' => 'patrician',
'region' => '150',
'place' => '598',
'quarter' => '15566',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sfax',
'title_category' => 'patrician',
'region' => '150',
'place' => '599',
'quarter' => '15567',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mahdia',
'title_category' => 'patrician',
'region' => '150',
'place' => '600',
'quarter' => '15568',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gabes',
'title_category' => 'patrician',
'region' => '151',
'place' => '601',
'quarter' => '15569',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gafsa',
'title_category' => 'patrician',
'region' => '151',
'place' => '602',
'quarter' => '15570',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kebili',
'title_category' => 'patrician',
'region' => '151',
'place' => '603',
'quarter' => '15571',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tozeur',
'title_category' => 'hufner',
'region' => '151',
'place' => '604',
'quarter' => '15572',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ghadames',
'title_category' => 'patrician',
'region' => '152',
'place' => '605',
'quarter' => '15573',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medenine',
'title_category' => 'hufner',
'region' => '152',
'place' => '606',
'quarter' => '15574',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tamanrasset',
'title_category' => 'patrician',
'region' => '152',
'place' => '607',
'quarter' => '15575',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghat',
'title_category' => 'patrician',
'region' => '152',
'place' => '608',
'quarter' => '15576',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'patrician',
'region' => '153',
'place' => '609',
'quarter' => '15577',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zliten',
'title_category' => 'hufner',
'region' => '153',
'place' => '610',
'quarter' => '15578',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Misrata',
'title_category' => 'patrician',
'region' => '153',
'place' => '611',
'quarter' => '15579',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zuwara',
'title_category' => 'hufner',
'region' => '153',
'place' => '612',
'quarter' => '15580',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Germa',
'title_category' => 'patrician',
'region' => '154',
'place' => '613',
'quarter' => '15581',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sabha',
'title_category' => 'patrician',
'region' => '154',
'place' => '614',
'quarter' => '15582',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zouila',
'title_category' => 'patrician',
'region' => '154',
'place' => '615',
'quarter' => '15583',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qatrun',
'title_category' => 'patrician',
'region' => '154',
'place' => '616',
'quarter' => '15584',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kufra',
'title_category' => 'patrician',
'region' => '155',
'place' => '617',
'quarter' => '15585',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghiranghedi',
'title_category' => 'hufner',
'region' => '155',
'place' => '618',
'quarter' => '15586',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Awjila',
'title_category' => 'patrician',
'region' => '155',
'place' => '619',
'quarter' => '15587',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Marada',
'title_category' => 'hufner',
'region' => '155',
'place' => '620',
'quarter' => '15588',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Benghazi',
'title_category' => 'patrician',
'region' => '156',
'place' => '621',
'quarter' => '15589',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Derna',
'title_category' => 'patrician',
'region' => '156',
'place' => '622',
'quarter' => '15590',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tobruk',
'title_category' => 'patrician',
'region' => '156',
'place' => '623',
'quarter' => '15591',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ajdabiya',
'title_category' => 'hufner',
'region' => '156',
'place' => '624',
'quarter' => '15592',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandria',
'title_category' => 'patrician',
'region' => '157',
'place' => '625',
'quarter' => '15593',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rosetta',
'title_category' => 'patrician',
'region' => '157',
'place' => '626',
'quarter' => '15594',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Damietta',
'title_category' => 'patrician',
'region' => '157',
'place' => '627',
'quarter' => '15595',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mansoura',
'title_category' => 'patrician',
'region' => '157',
'place' => '628',
'quarter' => '15596',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cairo',
'title_category' => 'patrician',
'region' => '158',
'place' => '629',
'quarter' => '15597',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Helwan',
'title_category' => 'patrician',
'region' => '158',
'place' => '630',
'quarter' => '15598',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fayum',
'title_category' => 'patrician',
'region' => '158',
'place' => '631',
'quarter' => '15599',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Natrun',
'title_category' => 'hufner',
'region' => '158',
'place' => '632',
'quarter' => '15600',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Minya',
'title_category' => 'patrician',
'region' => '159',
'place' => '633',
'quarter' => '15601',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Siwa',
'title_category' => 'patrician',
'region' => '159',
'place' => '634',
'quarter' => '15602',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Farafra',
'title_category' => 'patrician',
'region' => '159',
'place' => '635',
'quarter' => '15603',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anba Boula',
'title_category' => 'hufner',
'region' => '159',
'place' => '636',
'quarter' => '15604',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Asyut',
'title_category' => 'patrician',
'region' => '160',
'place' => '637',
'quarter' => '15605',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kharga',
'title_category' => 'patrician',
'region' => '160',
'place' => '638',
'quarter' => '15606',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aswan',
'title_category' => 'patrician',
'region' => '160',
'place' => '639',
'quarter' => '15607',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zinaiqa',
'title_category' => 'hufner',
'region' => '160',
'place' => '640',
'quarter' => '15608',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Liegnitz',
'title_category' => 'patrician',
'region' => '161',
'place' => '641',
'quarter' => '15609',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glogau',
'title_category' => 'patrician',
'region' => '161',
'place' => '642',
'quarter' => '15610',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Breslau',
'title_category' => 'patrician',
'region' => '161',
'place' => '643',
'quarter' => '15611',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leubus',
'title_category' => 'hufner',
'region' => '161',
'place' => '644',
'quarter' => '15612',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krakow',
'title_category' => 'patrician',
'region' => '162',
'place' => '645',
'quarter' => '15613',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Teczyn',
'title_category' => 'hufner',
'region' => '162',
'place' => '646',
'quarter' => '15614',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnau',
'title_category' => 'patrician',
'region' => '162',
'place' => '647',
'quarter' => '15615',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salzberg',
'title_category' => 'patrician',
'region' => '162',
'place' => '648',
'quarter' => '15616',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gnesen',
'title_category' => 'patrician',
'region' => '163',
'place' => '649',
'quarter' => '15617',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Posen',
'title_category' => 'patrician',
'region' => '163',
'place' => '650',
'quarter' => '15618',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konin',
'title_category' => 'patrician',
'region' => '163',
'place' => '651',
'quarter' => '15619',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalisz',
'title_category' => 'patrician',
'region' => '163',
'place' => '652',
'quarter' => '15620',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Plock',
'title_category' => 'patrician',
'region' => '164',
'place' => '653',
'quarter' => '15621',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Warsaw',
'title_category' => 'patrician',
'region' => '164',
'place' => '654',
'quarter' => '15622',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leslau',
'title_category' => 'patrician',
'region' => '164',
'place' => '655',
'quarter' => '15623',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Radomir',
'title_category' => 'patrician',
'region' => '164',
'place' => '656',
'quarter' => '15624',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Brest',
'title_category' => 'patrician',
'region' => '165',
'place' => '657',
'quarter' => '15625',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Goroden',
'title_category' => 'hufner',
'region' => '165',
'place' => '658',
'quarter' => '15626',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kobryn',
'title_category' => 'patrician',
'region' => '165',
'place' => '659',
'quarter' => '15627',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Wolkowysk',
'title_category' => 'patrician',
'region' => '165',
'place' => '660',
'quarter' => '15628',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tracken',
'title_category' => 'patrician',
'region' => '166',
'place' => '661',
'quarter' => '15629',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vilnius',
'title_category' => 'patrician',
'region' => '166',
'place' => '662',
'quarter' => '15630',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kauen',
'title_category' => 'patrician',
'region' => '166',
'place' => '663',
'quarter' => '15631',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Minsk',
'title_category' => 'patrician',
'region' => '166',
'place' => '664',
'quarter' => '15632',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pula',
'title_category' => 'patrician',
'region' => '167',
'place' => '665',
'quarter' => '15633',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rovigno',
'title_category' => 'patrician',
'region' => '167',
'place' => '666',
'quarter' => '15634',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vikla',
'title_category' => 'patrician',
'region' => '167',
'place' => '667',
'quarter' => '15635',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trsat',
'title_category' => 'hufner',
'region' => '167',
'place' => '668',
'quarter' => '15636',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ragusa',
'title_category' => 'patrician',
'region' => '168',
'place' => '669',
'quarter' => '15637',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zadar',
'title_category' => 'patrician',
'region' => '168',
'place' => '670',
'quarter' => '15638',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Split',
'title_category' => 'patrician',
'region' => '168',
'place' => '671',
'quarter' => '15639',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Biograd',
'title_category' => 'patrician',
'region' => '168',
'place' => '672',
'quarter' => '15640',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Knin',
'title_category' => 'patrician',
'region' => '169',
'place' => '673',
'quarter' => '15641',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bihac',
'title_category' => 'patrician',
'region' => '169',
'place' => '674',
'quarter' => '15642',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konjic',
'title_category' => 'patrician',
'region' => '169',
'place' => '675',
'quarter' => '15643',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kotor',
'title_category' => 'patrician',
'region' => '169',
'place' => '676',
'quarter' => '15644',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gyor',
'title_category' => 'patrician',
'region' => '170',
'place' => '677',
'quarter' => '15645',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tyrnau',
'title_category' => 'patrician',
'region' => '170',
'place' => '678',
'quarter' => '15646',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nitra',
'title_category' => 'patrician',
'region' => '170',
'place' => '679',
'quarter' => '15647',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sopron',
'title_category' => 'hufner',
'region' => '170',
'place' => '680',
'quarter' => '15648',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Veszprem',
'title_category' => 'patrician',
'region' => '171',
'place' => '681',
'quarter' => '15649',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Fehervar',
'title_category' => 'patrician',
'region' => '171',
'place' => '682',
'quarter' => '15650',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Egerszeg',
'title_category' => 'patrician',
'region' => '171',
'place' => '683',
'quarter' => '15651',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'patrician',
'region' => '171',
'place' => '684',
'quarter' => '15652',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Esztergom',
'title_category' => 'patrician',
'region' => '172',
'place' => '685',
'quarter' => '15653',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bystrica',
'title_category' => 'patrician',
'region' => '172',
'place' => '686',
'quarter' => '15654',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Krupina',
'title_category' => 'patrician',
'region' => '172',
'place' => '687',
'quarter' => '15655',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Leua',
'title_category' => 'hufner',
'region' => '172',
'place' => '688',
'quarter' => '15656',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Eger',
'title_category' => 'patrician',
'region' => '173',
'place' => '689',
'quarter' => '15657',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Diosgyor',
'title_category' => 'hufner',
'region' => '173',
'place' => '690',
'quarter' => '15658',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bartfeld',
'title_category' => 'patrician',
'region' => '173',
'place' => '691',
'quarter' => '15659',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kassow',
'title_category' => 'patrician',
'region' => '173',
'place' => '692',
'quarter' => '15660',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Buda',
'title_category' => 'patrician',
'region' => '174',
'place' => '693',
'quarter' => '15661',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kecskemet',
'title_category' => 'patrician',
'region' => '174',
'place' => '694',
'quarter' => '15662',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Debrecen',
'title_category' => 'patrician',
'region' => '174',
'place' => '695',
'quarter' => '15663',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zounok',
'title_category' => 'patrician',
'region' => '174',
'place' => '696',
'quarter' => '15664',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pecs',
'title_category' => 'patrician',
'region' => '175',
'place' => '697',
'quarter' => '15665',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vukovar',
'title_category' => 'patrician',
'region' => '175',
'place' => '698',
'quarter' => '15666',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kalocsa',
'title_category' => 'patrician',
'region' => '175',
'place' => '699',
'quarter' => '15667',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Virovitica',
'title_category' => 'hufner',
'region' => '175',
'place' => '700',
'quarter' => '15668',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Alba Julia',
'title_category' => 'patrician',
'region' => '176',
'place' => '701',
'quarter' => '15669',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schaasburg',
'title_category' => 'patrician',
'region' => '176',
'place' => '702',
'quarter' => '15670',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Klausenburg',
'title_category' => 'patrician',
'region' => '176',
'place' => '703',
'quarter' => '15671',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Carta',
'title_category' => 'hufner',
'region' => '176',
'place' => '704',
'quarter' => '15672',
'religion' => '1',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Targu Jiu',
'title_category' => 'patrician',
'region' => '177',
'place' => '705',
'quarter' => '15673',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Drobeta',
'title_category' => 'patrician',
'region' => '177',
'place' => '706',
'quarter' => '15674',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Curtea Arges',
'title_category' => 'patrician',
'region' => '177',
'place' => '707',
'quarter' => '15675',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tismana',
'title_category' => 'hufner',
'region' => '177',
'place' => '708',
'quarter' => '15676',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Targoviste',
'title_category' => 'patrician',
'region' => '178',
'place' => '709',
'quarter' => '15677',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bucharest',
'title_category' => 'patrician',
'region' => '178',
'place' => '710',
'quarter' => '15678',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Torzburg',
'title_category' => 'hufner',
'region' => '178',
'place' => '711',
'quarter' => '15679',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kronstadt',
'title_category' => 'hufner',
'region' => '178',
'place' => '712',
'quarter' => '15680',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Constanta',
'title_category' => 'patrician',
'region' => '179',
'place' => '713',
'quarter' => '15681',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harsova',
'title_category' => 'patrician',
'region' => '179',
'place' => '714',
'quarter' => '15682',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tulcea',
'title_category' => 'patrician',
'region' => '179',
'place' => '715',
'quarter' => '15683',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Calarasi',
'title_category' => 'patrician',
'region' => '179',
'place' => '716',
'quarter' => '15684',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Suceava',
'title_category' => 'patrician',
'region' => '180',
'place' => '717',
'quarter' => '15685',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Orhei',
'title_category' => 'hufner',
'region' => '180',
'place' => '718',
'quarter' => '15686',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Odessa',
'title_category' => 'patrician',
'region' => '180',
'place' => '719',
'quarter' => '15687',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chisinau',
'title_category' => 'patrician',
'region' => '180',
'place' => '720',
'quarter' => '15688',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sofia',
'title_category' => 'patrician',
'region' => '181',
'place' => '721',
'quarter' => '15689',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pleven',
'title_category' => 'hufner',
'region' => '181',
'place' => '722',
'quarter' => '15690',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Stip',
'title_category' => 'patrician',
'region' => '181',
'place' => '723',
'quarter' => '15691',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rila',
'title_category' => 'hufner',
'region' => '181',
'place' => '724',
'quarter' => '15692',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Varna',
'title_category' => 'patrician',
'region' => '182',
'place' => '725',
'quarter' => '15693',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pliska',
'title_category' => 'patrician',
'region' => '182',
'place' => '726',
'quarter' => '15694',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Preslav',
'title_category' => 'patrician',
'region' => '182',
'place' => '727',
'quarter' => '15695',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tarnovo',
'title_category' => 'patrician',
'region' => '182',
'place' => '728',
'quarter' => '15696',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gorazde',
'title_category' => 'patrician',
'region' => '183',
'place' => '729',
'quarter' => '15697',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zenica',
'title_category' => 'patrician',
'region' => '183',
'place' => '730',
'quarter' => '15698',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sebrenik',
'title_category' => 'patrician',
'region' => '183',
'place' => '731',
'quarter' => '15699',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Visegrad',
'title_category' => 'hufner',
'region' => '183',
'place' => '732',
'quarter' => '15700',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Belgrade',
'title_category' => 'patrician',
'region' => '184',
'place' => '733',
'quarter' => '15701',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rasa',
'title_category' => 'hufner',
'region' => '184',
'place' => '734',
'quarter' => '15702',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Valjevo',
'title_category' => 'patrician',
'region' => '184',
'place' => '735',
'quarter' => '15703',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'hufner',
'region' => '184',
'place' => '736',
'quarter' => '15704',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rashka',
'title_category' => 'patrician',
'region' => '185',
'place' => '737',
'quarter' => '15705',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukovo',
'title_category' => 'hufner',
'region' => '185',
'place' => '738',
'quarter' => '15706',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Krusevac',
'title_category' => 'patrician',
'region' => '185',
'place' => '739',
'quarter' => '15707',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zica',
'title_category' => 'hufner',
'region' => '185',
'place' => '740',
'quarter' => '15708',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Prizren',
'title_category' => 'patrician',
'region' => '186',
'place' => '741',
'quarter' => '15709',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kumanovo',
'title_category' => 'hufner',
'region' => '186',
'place' => '742',
'quarter' => '15710',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Skopje',
'title_category' => 'patrician',
'region' => '186',
'place' => '743',
'quarter' => '15711',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vitina',
'title_category' => 'hufner',
'region' => '186',
'place' => '744',
'quarter' => '15712',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pristina',
'title_category' => 'patrician',
'region' => '187',
'place' => '745',
'quarter' => '15713',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zvecan',
'title_category' => 'hufner',
'region' => '187',
'place' => '746',
'quarter' => '15714',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pec',
'title_category' => 'hufner',
'region' => '187',
'place' => '747',
'quarter' => '15715',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Berane',
'title_category' => 'hufner',
'region' => '187',
'place' => '748',
'quarter' => '15716',
'religion' => '2',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Monastyrski',
'title_category' => 'hufner',
'region' => '188',
'place' => '749',
'quarter' => '15717',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Samkarsh',
'title_category' => 'patrician',
'region' => '188',
'place' => '750',
'quarter' => '15718',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Poltava',
'title_category' => 'patrician',
'region' => '188',
'place' => '751',
'quarter' => '15719',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Oleshia',
'title_category' => 'hufner',
'region' => '188',
'place' => '752',
'quarter' => '15720',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pereyaslav',
'title_category' => 'patrician',
'region' => '189',
'place' => '753',
'quarter' => '15721',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Korsun',
'title_category' => 'hufner',
'region' => '189',
'place' => '754',
'quarter' => '15722',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kaniv',
'title_category' => 'patrician',
'region' => '189',
'place' => '755',
'quarter' => '15723',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cherkasy',
'title_category' => 'hufner',
'region' => '189',
'place' => '756',
'quarter' => '15724',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kiev',
'title_category' => 'patrician',
'region' => '190',
'place' => '757',
'quarter' => '15725',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Borispyl',
'title_category' => 'hufner',
'region' => '190',
'place' => '758',
'quarter' => '15726',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Yuriev',
'title_category' => 'patrician',
'region' => '190',
'place' => '759',
'quarter' => '15727',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pechersk',
'title_category' => 'hufner',
'region' => '190',
'place' => '760',
'quarter' => '15728',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Halych',
'title_category' => 'patrician',
'region' => '191',
'place' => '761',
'quarter' => '15729',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomyia',
'title_category' => 'patrician',
'region' => '191',
'place' => '762',
'quarter' => '15730',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lviv',
'title_category' => 'patrician',
'region' => '191',
'place' => '763',
'quarter' => '15731',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Terebovlia',
'title_category' => 'patrician',
'region' => '191',
'place' => '764',
'quarter' => '15732',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Turov',
'title_category' => 'patrician',
'region' => '192',
'place' => '765',
'quarter' => '15733',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pinesk',
'title_category' => 'patrician',
'region' => '192',
'place' => '766',
'quarter' => '15734',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Slutsk',
'title_category' => 'patrician',
'region' => '192',
'place' => '767',
'quarter' => '15735',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Korosten',
'title_category' => 'hufner',
'region' => '192',
'place' => '768',
'quarter' => '15736',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tchernigov',
'title_category' => 'patrician',
'region' => '193',
'place' => '769',
'quarter' => '15737',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lyubech',
'title_category' => 'hufner',
'region' => '193',
'place' => '770',
'quarter' => '15738',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gomel',
'title_category' => 'patrician',
'region' => '193',
'place' => '771',
'quarter' => '15739',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mazyr',
'title_category' => 'hufner',
'region' => '193',
'place' => '772',
'quarter' => '15740',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Polotsk',
'title_category' => 'patrician',
'region' => '194',
'place' => '773',
'quarter' => '15741',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Orsha',
'title_category' => 'hufner',
'region' => '194',
'place' => '774',
'quarter' => '15742',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Vitebsk',
'title_category' => 'patrician',
'region' => '194',
'place' => '775',
'quarter' => '15743',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Barysaw',
'title_category' => 'hufner',
'region' => '194',
'place' => '776',
'quarter' => '15744',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Smolensk',
'title_category' => 'patrician',
'region' => '195',
'place' => '777',
'quarter' => '15745',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bryansk',
'title_category' => 'patrician',
'region' => '195',
'place' => '778',
'quarter' => '15746',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazma',
'title_category' => 'patrician',
'region' => '195',
'place' => '779',
'quarter' => '15747',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Roslav',
'title_category' => 'hufner',
'region' => '195',
'place' => '780',
'quarter' => '15748',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ryazan',
'title_category' => 'patrician',
'region' => '196',
'place' => '781',
'quarter' => '15749',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kolomna',
'title_category' => 'hufner',
'region' => '196',
'place' => '782',
'quarter' => '15750',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kasimov',
'title_category' => 'patrician',
'region' => '196',
'place' => '783',
'quarter' => '15751',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tula',
'title_category' => 'hufner',
'region' => '196',
'place' => '784',
'quarter' => '15752',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Moscow',
'title_category' => 'patrician',
'region' => '197',
'place' => '785',
'quarter' => '15753',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sergiev',
'title_category' => 'hufner',
'region' => '197',
'place' => '786',
'quarter' => '15754',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zvenigorod',
'title_category' => 'patrician',
'region' => '197',
'place' => '787',
'quarter' => '15755',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Simonov',
'title_category' => 'hufner',
'region' => '197',
'place' => '788',
'quarter' => '15756',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Pleskov',
'title_category' => 'patrician',
'region' => '198',
'place' => '789',
'quarter' => '15757',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Porkhov',
'title_category' => 'hufner',
'region' => '198',
'place' => '790',
'quarter' => '15758',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ostrov',
'title_category' => 'patrician',
'region' => '198',
'place' => '791',
'quarter' => '15759',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gdov',
'title_category' => 'hufner',
'region' => '198',
'place' => '792',
'quarter' => '15760',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Novgorod',
'title_category' => 'patrician',
'region' => '199',
'place' => '793',
'quarter' => '15761',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rusa',
'title_category' => 'hufner',
'region' => '199',
'place' => '794',
'quarter' => '15762',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ladoga',
'title_category' => 'patrician',
'region' => '199',
'place' => '795',
'quarter' => '15763',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Schlisselburg',
'title_category' => 'hufner',
'region' => '199',
'place' => '796',
'quarter' => '15764',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bolgar',
'title_category' => 'patrician',
'region' => '200',
'place' => '797',
'quarter' => '15765',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bilyar',
'title_category' => 'patrician',
'region' => '200',
'place' => '798',
'quarter' => '15766',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kazan',
'title_category' => 'patrician',
'region' => '200',
'place' => '799',
'quarter' => '15767',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ufa',
'title_category' => 'patrician',
'region' => '200',
'place' => '800',
'quarter' => '15768',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vladimir',
'title_category' => 'patrician',
'region' => '201',
'place' => '801',
'quarter' => '15769',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vyazniki',
'title_category' => 'hufner',
'region' => '201',
'place' => '802',
'quarter' => '15770',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Suzdal',
'title_category' => 'patrician',
'region' => '201',
'place' => '803',
'quarter' => '15771',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nizhny',
'title_category' => 'patrician',
'region' => '201',
'place' => '804',
'quarter' => '15772',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Vologda',
'title_category' => 'patrician',
'region' => '202',
'place' => '805',
'quarter' => '15773',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rybinsk',
'title_category' => 'hufner',
'region' => '202',
'place' => '806',
'quarter' => '15774',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Cherepovets',
'title_category' => 'hufner',
'region' => '202',
'place' => '807',
'quarter' => '15775',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kirillov',
'title_category' => 'hufner',
'region' => '202',
'place' => '808',
'quarter' => '15776',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Oryol',
'title_category' => 'patrician',
'region' => '203',
'place' => '809',
'quarter' => '15777',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Novosil',
'title_category' => 'patrician',
'region' => '203',
'place' => '810',
'quarter' => '15778',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kromy',
'title_category' => 'patrician',
'region' => '203',
'place' => '811',
'quarter' => '15779',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lipetsk',
'title_category' => 'hufner',
'region' => '203',
'place' => '812',
'quarter' => '15780',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Sevsk',
'title_category' => 'patrician',
'region' => '204',
'place' => '813',
'quarter' => '15781',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rylsk',
'title_category' => 'patrician',
'region' => '204',
'place' => '814',
'quarter' => '15782',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kursk',
'title_category' => 'patrician',
'region' => '204',
'place' => '815',
'quarter' => '15783',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Olgov',
'title_category' => 'hufner',
'region' => '204',
'place' => '816',
'quarter' => '15784',
'religion' => '3',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Atil',
'title_category' => 'patrician',
'region' => '205',
'place' => '817',
'quarter' => '15785',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraibatu',
'title_category' => 'patrician',
'region' => '205',
'place' => '818',
'quarter' => '15786',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraiberke',
'title_category' => 'patrician',
'region' => '205',
'place' => '819',
'quarter' => '15787',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khumar',
'title_category' => 'patrician',
'region' => '205',
'place' => '820',
'quarter' => '15788',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gurganj',
'title_category' => 'patrician',
'region' => '206',
'place' => '821',
'quarter' => '15789',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khiva',
'title_category' => 'patrician',
'region' => '206',
'place' => '822',
'quarter' => '15790',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saraidzhuk',
'title_category' => 'patrician',
'region' => '206',
'place' => '823',
'quarter' => '15791',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mishrian',
'title_category' => 'patrician',
'region' => '206',
'place' => '824',
'quarter' => '15792',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Constantinople',
'title_category' => 'patrician',
'region' => '207',
'place' => '825',
'quarter' => '15793',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Redosto',
'title_category' => 'patrician',
'region' => '207',
'place' => '826',
'quarter' => '15794',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edirne',
'title_category' => 'patrician',
'region' => '207',
'place' => '827',
'quarter' => '15795',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corlu',
'title_category' => 'patrician',
'region' => '207',
'place' => '828',
'quarter' => '15796',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thessaloniki',
'title_category' => 'patrician',
'region' => '208',
'place' => '829',
'quarter' => '15797',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Stratonicea',
'title_category' => 'patrician',
'region' => '208',
'place' => '830',
'quarter' => '15798',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Melnik',
'title_category' => 'patrician',
'region' => '208',
'place' => '831',
'quarter' => '15799',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hilandar',
'title_category' => 'hufner',
'region' => '208',
'place' => '832',
'quarter' => '15800',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Athens',
'title_category' => 'patrician',
'region' => '209',
'place' => '833',
'quarter' => '15801',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lamia',
'title_category' => 'patrician',
'region' => '209',
'place' => '834',
'quarter' => '15802',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Thebes',
'title_category' => 'patrician',
'region' => '209',
'place' => '835',
'quarter' => '15803',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Larissa',
'title_category' => 'patrician',
'region' => '209',
'place' => '836',
'quarter' => '15804',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mystras',
'title_category' => 'patrician',
'region' => '210',
'place' => '837',
'quarter' => '15805',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Modon',
'title_category' => 'patrician',
'region' => '210',
'place' => '838',
'quarter' => '15806',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corinth',
'title_category' => 'patrician',
'region' => '210',
'place' => '839',
'quarter' => '15807',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Glarentza',
'title_category' => 'patrician',
'region' => '210',
'place' => '840',
'quarter' => '15808',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arta',
'title_category' => 'patrician',
'region' => '211',
'place' => '841',
'quarter' => '15809',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gardiki',
'title_category' => 'hufner',
'region' => '211',
'place' => '842',
'quarter' => '15810',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ioannina',
'title_category' => 'patrician',
'region' => '211',
'place' => '843',
'quarter' => '15811',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amfissa',
'title_category' => 'patrician',
'region' => '211',
'place' => '844',
'quarter' => '15812',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kruja',
'title_category' => 'patrician',
'region' => '212',
'place' => '845',
'quarter' => '15813',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Durres',
'title_category' => 'hufner',
'region' => '212',
'place' => '846',
'quarter' => '15814',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Ohrid',
'title_category' => 'patrician',
'region' => '212',
'place' => '847',
'quarter' => '15815',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saint Jovan',
'title_category' => 'hufner',
'region' => '212',
'place' => '848',
'quarter' => '15816',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Kastoria',
'title_category' => 'patrician',
'region' => '213',
'place' => '849',
'quarter' => '15817',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bitola',
'title_category' => 'hufner',
'region' => '213',
'place' => '850',
'quarter' => '15818',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Prilep',
'title_category' => 'patrician',
'region' => '213',
'place' => '851',
'quarter' => '15819',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berat',
'title_category' => 'hufner',
'region' => '213',
'place' => '852',
'quarter' => '15820',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Iraklion',
'title_category' => 'patrician',
'region' => '214',
'place' => '853',
'quarter' => '15821',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Lemnos',
'title_category' => 'patrician',
'region' => '214',
'place' => '854',
'quarter' => '15822',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chania',
'title_category' => 'patrician',
'region' => '214',
'place' => '855',
'quarter' => '15823',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Patros',
'title_category' => 'patrician',
'region' => '214',
'place' => '856',
'quarter' => '15824',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Smyrna',
'title_category' => 'patrician',
'region' => '215',
'place' => '857',
'quarter' => '15825',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samos',
'title_category' => 'patrician',
'region' => '215',
'place' => '858',
'quarter' => '15826',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Chios',
'title_category' => 'patrician',
'region' => '215',
'place' => '859',
'quarter' => '15827',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Patmos',
'title_category' => 'patrician',
'region' => '215',
'place' => '860',
'quarter' => '15828',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tralles',
'title_category' => 'patrician',
'region' => '216',
'place' => '861',
'quarter' => '15829',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Miletus',
'title_category' => 'patrician',
'region' => '216',
'place' => '862',
'quarter' => '15830',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Efese',
'title_category' => 'patrician',
'region' => '216',
'place' => '863',
'quarter' => '15831',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sardes',
'title_category' => 'patrician',
'region' => '216',
'place' => '864',
'quarter' => '15832',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nicaea',
'title_category' => 'patrician',
'region' => '217',
'place' => '865',
'quarter' => '15833',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kios',
'title_category' => 'patrician',
'region' => '217',
'place' => '866',
'quarter' => '15834',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bursa',
'title_category' => 'patrician',
'region' => '217',
'place' => '867',
'quarter' => '15835',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pergamum',
'title_category' => 'patrician',
'region' => '217',
'place' => '868',
'quarter' => '15836',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ikonion',
'title_category' => 'patrician',
'region' => '218',
'place' => '869',
'quarter' => '15837',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mistheia',
'title_category' => 'patrician',
'region' => '218',
'place' => '870',
'quarter' => '15838',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Laranda',
'title_category' => 'patrician',
'region' => '218',
'place' => '871',
'quarter' => '15839',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ousakeion',
'title_category' => 'patrician',
'region' => '218',
'place' => '872',
'quarter' => '15840',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Coracesium',
'title_category' => 'patrician',
'region' => '219',
'place' => '873',
'quarter' => '15841',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rhodos',
'title_category' => 'patrician',
'region' => '219',
'place' => '874',
'quarter' => '15842',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Attalia',
'title_category' => 'patrician',
'region' => '219',
'place' => '875',
'quarter' => '15843',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Makre',
'title_category' => 'patrician',
'region' => '219',
'place' => '876',
'quarter' => '15844',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ancyra',
'title_category' => 'patrician',
'region' => '220',
'place' => '877',
'quarter' => '15845',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gordion',
'title_category' => 'patrician',
'region' => '220',
'place' => '878',
'quarter' => '15846',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cotyaeum',
'title_category' => 'patrician',
'region' => '220',
'place' => '879',
'quarter' => '15847',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dorylaeum',
'title_category' => 'patrician',
'region' => '220',
'place' => '880',
'quarter' => '15848',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sinope',
'title_category' => 'patrician',
'region' => '221',
'place' => '881',
'quarter' => '15849',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kastamuni',
'title_category' => 'patrician',
'region' => '221',
'place' => '882',
'quarter' => '15850',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amasra',
'title_category' => 'patrician',
'region' => '221',
'place' => '883',
'quarter' => '15851',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Claudiopolis',
'title_category' => 'patrician',
'region' => '221',
'place' => '884',
'quarter' => '15852',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tarsus',
'title_category' => 'patrician',
'region' => '222',
'place' => '885',
'quarter' => '15853',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Adana',
'title_category' => 'patrician',
'region' => '222',
'place' => '886',
'quarter' => '15854',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nicosia',
'title_category' => 'patrician',
'region' => '222',
'place' => '887',
'quarter' => '15855',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Limasol',
'title_category' => 'patrician',
'region' => '222',
'place' => '888',
'quarter' => '15856',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Caesarea',
'title_category' => 'patrician',
'region' => '223',
'place' => '889',
'quarter' => '15857',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Garsaura',
'title_category' => 'patrician',
'region' => '223',
'place' => '890',
'quarter' => '15858',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Magida',
'title_category' => 'patrician',
'region' => '223',
'place' => '891',
'quarter' => '15859',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Muskara',
'title_category' => 'patrician',
'region' => '223',
'place' => '892',
'quarter' => '15860',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Trebizond',
'title_category' => 'patrician',
'region' => '224',
'place' => '893',
'quarter' => '15861',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bayberdon',
'title_category' => 'patrician',
'region' => '224',
'place' => '894',
'quarter' => '15862',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Riza',
'title_category' => 'patrician',
'region' => '224',
'place' => '895',
'quarter' => '15863',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kerasous',
'title_category' => 'patrician',
'region' => '224',
'place' => '896',
'quarter' => '15864',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Edessa',
'title_category' => 'patrician',
'region' => '225',
'place' => '897',
'quarter' => '15865',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Semsur',
'title_category' => 'hufner',
'region' => '225',
'place' => '898',
'quarter' => '15866',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amouda',
'title_category' => 'hufner',
'region' => '225',
'place' => '899',
'quarter' => '15867',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antep',
'title_category' => 'hufner',
'region' => '225',
'place' => '900',
'quarter' => '15868',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amasia',
'title_category' => 'patrician',
'region' => '226',
'place' => '901',
'quarter' => '15869',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samsun',
'title_category' => 'patrician',
'region' => '226',
'place' => '902',
'quarter' => '15870',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Corum',
'title_category' => 'patrician',
'region' => '226',
'place' => '903',
'quarter' => '15871',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Takat',
'title_category' => 'patrician',
'region' => '226',
'place' => '904',
'quarter' => '15872',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Diyarbakir',
'title_category' => 'patrician',
'region' => '227',
'place' => '905',
'quarter' => '15873',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Harput',
'title_category' => 'patrician',
'region' => '227',
'place' => '906',
'quarter' => '15874',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Erzincan',
'title_category' => 'patrician',
'region' => '227',
'place' => '907',
'quarter' => '15875',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Romanoupolis',
'title_category' => 'patrician',
'region' => '227',
'place' => '908',
'quarter' => '15876',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sivas',
'title_category' => 'patrician',
'region' => '228',
'place' => '909',
'quarter' => '15877',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Divrigi',
'title_category' => 'patrician',
'region' => '228',
'place' => '910',
'quarter' => '15878',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Albistan',
'title_category' => 'patrician',
'region' => '228',
'place' => '911',
'quarter' => '15879',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tavium',
'title_category' => 'patrician',
'region' => '228',
'place' => '912',
'quarter' => '15880',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Batumi',
'title_category' => 'patrician',
'region' => '229',
'place' => '913',
'quarter' => '15881',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Poti',
'title_category' => 'patrician',
'region' => '229',
'place' => '914',
'quarter' => '15882',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Pitsunda',
'title_category' => 'patrician',
'region' => '229',
'place' => '915',
'quarter' => '15883',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kutais',
'title_category' => 'patrician',
'region' => '229',
'place' => '916',
'quarter' => '15884',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tiflis',
'title_category' => 'patrician',
'region' => '230',
'place' => '917',
'quarter' => '15885',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Surami',
'title_category' => 'hufner',
'region' => '230',
'place' => '918',
'quarter' => '15886',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Gori',
'title_category' => 'hufner',
'region' => '230',
'place' => '919',
'quarter' => '15887',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Akhalkalaki',
'title_category' => 'hufner',
'region' => '230',
'place' => '920',
'quarter' => '15888',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Derbent',
'title_category' => 'patrician',
'region' => '231',
'place' => '921',
'quarter' => '15889',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baku',
'title_category' => 'patrician',
'region' => '231',
'place' => '922',
'quarter' => '15890',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mingecevir',
'title_category' => 'patrician',
'region' => '231',
'place' => '923',
'quarter' => '15891',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Balanjar',
'title_category' => 'patrician',
'region' => '231',
'place' => '924',
'quarter' => '15892',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ani',
'title_category' => 'patrician',
'region' => '232',
'place' => '925',
'quarter' => '15893',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Yerevan',
'title_category' => 'patrician',
'region' => '232',
'place' => '926',
'quarter' => '15894',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghars',
'title_category' => 'patrician',
'region' => '232',
'place' => '927',
'quarter' => '15895',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirants',
'title_category' => 'hufner',
'region' => '232',
'place' => '928',
'quarter' => '15896',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nakhichevan',
'title_category' => 'patrician',
'region' => '233',
'place' => '929',
'quarter' => '15897',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Khoy',
'title_category' => 'patrician',
'region' => '233',
'place' => '930',
'quarter' => '15898',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ordubad',
'title_category' => 'patrician',
'region' => '233',
'place' => '931',
'quarter' => '15899',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baghaberd',
'title_category' => 'hufner',
'region' => '233',
'place' => '932',
'quarter' => '15900',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tatvan',
'title_category' => 'patrician',
'region' => '234',
'place' => '933',
'quarter' => '15901',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Manzikert',
'title_category' => 'patrician',
'region' => '234',
'place' => '934',
'quarter' => '15902',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bitlis',
'title_category' => 'patrician',
'region' => '234',
'place' => '935',
'quarter' => '15903',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Arakelots',
'title_category' => 'hufner',
'region' => '234',
'place' => '936',
'quarter' => '15904',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Mardin',
'title_category' => 'patrician',
'region' => '235',
'place' => '937',
'quarter' => '15905',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Saird',
'title_category' => 'patrician',
'region' => '235',
'place' => '938',
'quarter' => '15906',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Cepha',
'title_category' => 'patrician',
'region' => '235',
'place' => '939',
'quarter' => '15907',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nisibis',
'title_category' => 'hufner',
'region' => '235',
'place' => '940',
'quarter' => '15908',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Van',
'title_category' => 'patrician',
'region' => '236',
'place' => '941',
'quarter' => '15909',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Berkri',
'title_category' => 'patrician',
'region' => '236',
'place' => '942',
'quarter' => '15910',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Archesh',
'title_category' => 'patrician',
'region' => '236',
'place' => '943',
'quarter' => '15911',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ostan',
'title_category' => 'hufner',
'region' => '236',
'place' => '944',
'quarter' => '15912',
'religion' => '4',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Nishapur',
'title_category' => 'patrician',
'region' => '237',
'place' => '945',
'quarter' => '15913',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Beyhaq',
'title_category' => 'patrician',
'region' => '237',
'place' => '946',
'quarter' => '15914',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mashhad',
'title_category' => 'patrician',
'region' => '237',
'place' => '947',
'quarter' => '15915',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Konjikala',
'title_category' => 'patrician',
'region' => '237',
'place' => '948',
'quarter' => '15916',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kashmar',
'title_category' => 'patrician',
'region' => '238',
'place' => '949',
'quarter' => '15917',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Gonabad',
'title_category' => 'patrician',
'region' => '238',
'place' => '950',
'quarter' => '15918',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabas',
'title_category' => 'patrician',
'region' => '238',
'place' => '951',
'quarter' => '15919',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Birjand',
'title_category' => 'patrician',
'region' => '238',
'place' => '952',
'quarter' => '15920',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kerman',
'title_category' => 'patrician',
'region' => '239',
'place' => '953',
'quarter' => '15921',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bam',
'title_category' => 'hufner',
'region' => '239',
'place' => '954',
'quarter' => '15922',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rafsanjan',
'title_category' => 'patrician',
'region' => '239',
'place' => '955',
'quarter' => '15923',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sirjan',
'title_category' => 'patrician',
'region' => '239',
'place' => '956',
'quarter' => '15924',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Shiraz',
'title_category' => 'patrician',
'region' => '240',
'place' => '957',
'quarter' => '15925',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bushire',
'title_category' => 'patrician',
'region' => '240',
'place' => '958',
'quarter' => '15926',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hormuz',
'title_category' => 'patrician',
'region' => '240',
'place' => '959',
'quarter' => '15927',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Yasuj',
'title_category' => 'patrician',
'region' => '240',
'place' => '960',
'quarter' => '15928',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Isfahan',
'title_category' => 'patrician',
'region' => '241',
'place' => '961',
'quarter' => '15929',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dezgord',
'title_category' => 'hufner',
'region' => '241',
'place' => '962',
'quarter' => '15930',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Yazd',
'title_category' => 'patrician',
'region' => '241',
'place' => '963',
'quarter' => '15931',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zavareh',
'title_category' => 'hufner',
'region' => '241',
'place' => '964',
'quarter' => '15932',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rhages',
'title_category' => 'patrician',
'region' => '242',
'place' => '965',
'quarter' => '15933',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kashan',
'title_category' => 'patrician',
'region' => '242',
'place' => '966',
'quarter' => '15934',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ghom',
'title_category' => 'patrician',
'region' => '242',
'place' => '967',
'quarter' => '15935',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qazvin',
'title_category' => 'patrician',
'region' => '242',
'place' => '968',
'quarter' => '15936',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Astarabad',
'title_category' => 'patrician',
'region' => '243',
'place' => '969',
'quarter' => '15937',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alamut',
'title_category' => 'hufner',
'region' => '243',
'place' => '970',
'quarter' => '15938',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Amol',
'title_category' => 'patrician',
'region' => '243',
'place' => '971',
'quarter' => '15939',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Rasht',
'title_category' => 'patrician',
'region' => '243',
'place' => '972',
'quarter' => '15940',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tabriz',
'title_category' => 'patrician',
'region' => '244',
'place' => '973',
'quarter' => '15941',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Sofian',
'title_category' => 'hufner',
'region' => '244',
'place' => '974',
'quarter' => '15942',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Zanjan',
'title_category' => 'patrician',
'region' => '244',
'place' => '975',
'quarter' => '15943',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ardabil',
'title_category' => 'patrician',
'region' => '244',
'place' => '976',
'quarter' => '15944',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hamadan',
'title_category' => 'patrician',
'region' => '245',
'place' => '977',
'quarter' => '15945',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kermanshah',
'title_category' => 'patrician',
'region' => '245',
'place' => '978',
'quarter' => '15946',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Falak',
'title_category' => 'patrician',
'region' => '245',
'place' => '979',
'quarter' => '15947',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bukan',
'title_category' => 'hufner',
'region' => '245',
'place' => '980',
'quarter' => '15948',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hajr',
'title_category' => 'patrician',
'region' => '246',
'place' => '981',
'quarter' => '15949',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Buraidah',
'title_category' => 'patrician',
'region' => '246',
'place' => '982',
'quarter' => '15950',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hadjar',
'title_category' => 'patrician',
'region' => '246',
'place' => '983',
'quarter' => '15951',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hail',
'title_category' => 'patrician',
'region' => '246',
'place' => '984',
'quarter' => '15952',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mecca',
'title_category' => 'patrician',
'region' => '247',
'place' => '985',
'quarter' => '15953',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Taif',
'title_category' => 'patrician',
'region' => '247',
'place' => '986',
'quarter' => '15954',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jeddah',
'title_category' => 'patrician',
'region' => '247',
'place' => '987',
'quarter' => '15955',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Medina',
'title_category' => 'patrician',
'region' => '247',
'place' => '988',
'quarter' => '15956',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Dedan',
'title_category' => 'patrician',
'region' => '248',
'place' => '989',
'quarter' => '15957',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Eilat',
'title_category' => 'patrician',
'region' => '248',
'place' => '990',
'quarter' => '15958',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tayma',
'title_category' => 'patrician',
'region' => '248',
'place' => '991',
'quarter' => '15959',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Maan',
'title_category' => 'patrician',
'region' => '248',
'place' => '992',
'quarter' => '15960',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jerusalem',
'title_category' => 'patrician',
'region' => '249',
'place' => '993',
'quarter' => '15961',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Ascalon',
'title_category' => 'hufner',
'region' => '249',
'place' => '994',
'quarter' => '15962',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Hebron',
'title_category' => 'patrician',
'region' => '249',
'place' => '995',
'quarter' => '15963',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jaffa',
'title_category' => 'hufner',
'region' => '249',
'place' => '996',
'quarter' => '15964',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Acre',
'title_category' => 'patrician',
'region' => '250',
'place' => '997',
'quarter' => '15965',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nazareth',
'title_category' => 'patrician',
'region' => '250',
'place' => '998',
'quarter' => '15966',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nablus',
'title_category' => 'patrician',
'region' => '250',
'place' => '999',
'quarter' => '15967',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tyre',
'title_category' => 'patrician',
'region' => '250',
'place' => '1000',
'quarter' => '15968',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Bosra',
'title_category' => 'patrician',
'region' => '251',
'place' => '1001',
'quarter' => '15969',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Amman',
'title_category' => 'patrician',
'region' => '251',
'place' => '1002',
'quarter' => '15970',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Irbid',
'title_category' => 'patrician',
'region' => '251',
'place' => '1003',
'quarter' => '15971',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salkhad',
'title_category' => 'hufner',
'region' => '251',
'place' => '1004',
'quarter' => '15972',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Damascus',
'title_category' => 'patrician',
'region' => '252',
'place' => '1005',
'quarter' => '15973',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kasr al Gharbi',
'title_category' => 'hufner',
'region' => '252',
'place' => '1006',
'quarter' => '15974',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Palmyra',
'title_category' => 'patrician',
'region' => '252',
'place' => '1007',
'quarter' => '15975',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Nabek',
'title_category' => 'hufner',
'region' => '252',
'place' => '1008',
'quarter' => '15976',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Homs',
'title_category' => 'patrician',
'region' => '253',
'place' => '1009',
'quarter' => '15977',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Qusayr',
'title_category' => 'patrician',
'region' => '253',
'place' => '1010',
'quarter' => '15978',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Salamiyah',
'title_category' => 'patrician',
'region' => '253',
'place' => '1011',
'quarter' => '15979',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Hama',
'title_category' => 'hufner',
'region' => '253',
'place' => '1012',
'quarter' => '15980',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Tripoli',
'title_category' => 'patrician',
'region' => '254',
'place' => '1013',
'quarter' => '15981',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tartous',
'title_category' => 'patrician',
'region' => '254',
'place' => '1014',
'quarter' => '15982',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Beirut',
'title_category' => 'patrician',
'region' => '254',
'place' => '1015',
'quarter' => '15983',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Margat',
'title_category' => 'hufner',
'region' => '254',
'place' => '1016',
'quarter' => '15984',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Antioch',
'title_category' => 'patrician',
'region' => '255',
'place' => '1017',
'quarter' => '15985',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Alexandretta',
'title_category' => 'patrician',
'region' => '255',
'place' => '1018',
'quarter' => '15986',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Idlib',
'title_category' => 'patrician',
'region' => '255',
'place' => '1019',
'quarter' => '15987',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Afrin',
'title_category' => 'patrician',
'region' => '255',
'place' => '1020',
'quarter' => '15988',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Aleppo',
'title_category' => 'patrician',
'region' => '256',
'place' => '1021',
'quarter' => '15989',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Manbij',
'title_category' => 'hufner',
'region' => '256',
'place' => '1022',
'quarter' => '15990',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Bab',
'title_category' => 'patrician',
'region' => '256',
'place' => '1023',
'quarter' => '15991',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Safira',
'title_category' => 'patrician',
'region' => '256',
'place' => '1024',
'quarter' => '15992',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Raqqa',
'title_category' => 'patrician',
'region' => '257',
'place' => '1025',
'quarter' => '15993',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Jabar',
'title_category' => 'hufner',
'region' => '257',
'place' => '1026',
'quarter' => '15994',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Rhesaina',
'title_category' => 'patrician',
'region' => '257',
'place' => '1027',
'quarter' => '15995',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Zor',
'title_category' => 'hufner',
'region' => '257',
'place' => '1028',
'quarter' => '15996',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_peasantry'
]);
DB::table('titles')->insert([
'title_name' => 'Erbil',
'title_category' => 'patrician',
'region' => '258',
'place' => '1029',
'quarter' => '15997',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Mosul',
'title_category' => 'patrician',
'region' => '258',
'place' => '1030',
'quarter' => '15998',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kirkuk',
'title_category' => 'patrician',
'region' => '258',
'place' => '1031',
'quarter' => '15999',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Telafer',
'title_category' => 'patrician',
'region' => '258',
'place' => '1032',
'quarter' => '16000',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Baghdad',
'title_category' => 'patrician',
'region' => '259',
'place' => '1033',
'quarter' => '16001',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Tikrit',
'title_category' => 'patrician',
'region' => '259',
'place' => '1034',
'quarter' => '16002',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Anbar',
'title_category' => 'patrician',
'region' => '259',
'place' => '1035',
'quarter' => '16003',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samarra',
'title_category' => 'patrician',
'region' => '259',
'place' => '1036',
'quarter' => '16004',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Samawah',
'title_category' => 'patrician',
'region' => '260',
'place' => '1037',
'quarter' => '16005',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Karbala',
'title_category' => 'patrician',
'region' => '260',
'place' => '1038',
'quarter' => '16006',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Kufah',
'title_category' => 'patrician',
'region' => '260',
'place' => '1039',
'quarter' => '16007',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);
DB::table('titles')->insert([
'title_name' => 'Najaf',
'title_category' => 'patrician',
'region' => '260',
'place' => '1040',
'quarter' => '16008',
'religion' => '5',
'rank' => '3',
'career' => 'fixed_burgher'
]);

	
	}
}
