<?php

use Illuminate\Database\Seeder;

class CrusaderTitlesSeeder extends Seeder
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
		//crusader
		DB::table('titles')->insert([
			'title_name' => 'Oldenburg',
			'title_category' => 'commander',
			'region' => '1',
			'place' => '2',
			'quarter' => '19856',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Magdeburg',
			'title_category' => 'commander',
			'region' => '3',
			'place' => '9',
			'quarter' => '19857',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Halberstadt',
			'title_category' => 'commander',
			'region' => '3',
			'place' => '11',
			'quarter' => '19858',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rostock',
			'title_category' => 'commander',
			'region' => '4',
			'place' => '14',
			'quarter' => '19859',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lubeck',
			'title_category' => 'commander',
			'region' => '4',
			'place' => '15',
			'quarter' => '19860',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brandenburg',
			'title_category' => 'commander',
			'region' => '5',
			'place' => '17',
			'quarter' => '19861',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stettin',
			'title_category' => 'commander',
			'region' => '6',
			'place' => '21',
			'quarter' => '19862',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Munster',
			'title_category' => 'commander',
			'region' => '7',
			'place' => '25',
			'quarter' => '19863',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Regensburg',
			'title_category' => 'commander',
			'region' => '8',
			'place' => '29',
			'quarter' => '19864',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Graz',
			'title_category' => 'commander',
			'region' => '11',
			'place' => '41',
			'quarter' => '19865',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Freiburg',
			'title_category' => 'commander',
			'region' => '13',
			'place' => '51',
			'quarter' => '19866',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bern',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '53',
			'quarter' => '19867',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zurich',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '54',
			'quarter' => '19868',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Basel',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '55',
			'quarter' => '19869',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Prague',
			'title_category' => 'commander',
			'region' => '16',
			'place' => '61',
			'quarter' => '19870',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brunn',
			'title_category' => 'commander',
			'region' => '17',
			'place' => '65',
			'quarter' => '19871',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mainz',
			'title_category' => 'commander',
			'region' => '18',
			'place' => '69',
			'quarter' => '19872',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Frankfurt',
			'title_category' => 'commander',
			'region' => '18',
			'place' => '71',
			'quarter' => '19873',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aachen',
			'title_category' => 'commander',
			'region' => '19',
			'place' => '74',
			'quarter' => '19874',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trier',
			'title_category' => 'commander',
			'region' => '20',
			'place' => '77',
			'quarter' => '19875',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Metz',
			'title_category' => 'commander',
			'region' => '20',
			'place' => '79',
			'quarter' => '19876',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nimeguen',
			'title_category' => 'commander',
			'region' => '21',
			'place' => '83',
			'quarter' => '19877',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gouda',
			'title_category' => 'commander',
			'region' => '22',
			'place' => '86',
			'quarter' => '19878',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Utrecht',
			'title_category' => 'commander',
			'region' => '22',
			'place' => '87',
			'quarter' => '19879',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sneek',
			'title_category' => 'commander',
			'region' => '23',
			'place' => '89',
			'quarter' => '19880',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Emden',
			'title_category' => 'commander',
			'region' => '23',
			'place' => '90',
			'quarter' => '19881',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Paris',
			'title_category' => 'commander',
			'region' => '29',
			'place' => '113',
			'quarter' => '19882',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bar',
			'title_category' => 'commander',
			'region' => '30',
			'place' => '117',
			'quarter' => '19883',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Langres',
			'title_category' => 'commander',
			'region' => '30',
			'place' => '120',
			'quarter' => '19884',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amiens',
			'title_category' => 'commander',
			'region' => '31',
			'place' => '121',
			'quarter' => '19885',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Troyes',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '129',
			'quarter' => '19886',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Thierry',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '130',
			'quarter' => '19887',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Reims',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '131',
			'quarter' => '19888',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gontier',
			'title_category' => 'commander',
			'region' => '36',
			'place' => '142',
			'quarter' => '19889',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mans',
			'title_category' => 'commander',
			'region' => '36',
			'place' => '143',
			'quarter' => '19890',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Poitiers',
			'title_category' => 'commander',
			'region' => '37',
			'place' => '145',
			'quarter' => '19891',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Clermont Ferrand',
			'title_category' => 'commander',
			'region' => '40',
			'place' => '157',
			'quarter' => '19892',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Puy en Velay',
			'title_category' => 'commander',
			'region' => '40',
			'place' => '159',
			'quarter' => '19893',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aix',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '162',
			'quarter' => '19894',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marseille',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '163',
			'quarter' => '19895',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avignon',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '164',
			'quarter' => '19896',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toulouse',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '165',
			'quarter' => '19897',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carcasonne',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '166',
			'quarter' => '19898',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Narbonne',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '167',
			'quarter' => '19899',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cahors',
			'title_category' => 'commander',
			'region' => '43',
			'place' => '170',
			'quarter' => '19900',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dijon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '181',
			'quarter' => '19901',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Besancon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '182',
			'quarter' => '19902',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chalon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '183',
			'quarter' => '19903',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'London',
			'title_category' => 'commander',
			'region' => '47',
			'place' => '185',
			'quarter' => '19904',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Norwich',
			'title_category' => 'commander',
			'region' => '51',
			'place' => '201',
			'quarter' => '19905',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Scarborough',
			'title_category' => 'commander',
			'region' => '52',
			'place' => '207',
			'quarter' => '19906',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bristol',
			'title_category' => 'commander',
			'region' => '53',
			'place' => '211',
			'quarter' => '19907',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oxford',
			'title_category' => 'commander',
			'region' => '54',
			'place' => '215',
			'quarter' => '19908',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tamworth',
			'title_category' => 'commander',
			'region' => '55',
			'place' => '217',
			'quarter' => '19909',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Warwick',
			'title_category' => 'commander',
			'region' => '55',
			'place' => '218',
			'quarter' => '19910',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lincoln',
			'title_category' => 'commander',
			'region' => '56',
			'place' => '221',
			'quarter' => '19911',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chester',
			'title_category' => 'commander',
			'region' => '58',
			'place' => '229',
			'quarter' => '19912',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cardiff',
			'title_category' => 'commander',
			'region' => '59',
			'place' => '235',
			'quarter' => '19913',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Riga',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '269',
			'quarter' => '19914',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wenden',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '270',
			'quarter' => '19915',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Walk',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '271',
			'quarter' => '19916',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dunaburg',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '272',
			'quarter' => '19917',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pilten',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '273',
			'quarter' => '19918',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Libau',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '274',
			'quarter' => '19919',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Goldingen',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '275',
			'quarter' => '19920',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Talsen',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '276',
			'quarter' => '19921',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Elbing',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '278',
			'quarter' => '19922',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Danzig',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '279',
			'quarter' => '19923',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Koningsberg',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '280',
			'quarter' => '19924',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Memelburg',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '281',
			'quarter' => '19925',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saule',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '282',
			'quarter' => '19926',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tilsit',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '283',
			'quarter' => '19927',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Georgenburg',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '284',
			'quarter' => '19928',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Reval',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '285',
			'quarter' => '19929',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Weissenstein',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '286',
			'quarter' => '19930',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arensburg',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '287',
			'quarter' => '19931',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hapsal',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '288',
			'quarter' => '19932',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Linlithgow',
			'title_category' => 'commander',
			'region' => '73',
			'place' => '290',
			'quarter' => '19933',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alnwick',
			'title_category' => 'commander',
			'region' => '74',
			'place' => '294',
			'quarter' => '19934',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dublin',
			'title_category' => 'commander',
			'region' => '82',
			'place' => '325',
			'quarter' => '19935',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tara',
			'title_category' => 'commander',
			'region' => '82',
			'place' => '326',
			'quarter' => '19936',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wexford',
			'title_category' => 'commander',
			'region' => '84',
			'place' => '333',
			'quarter' => '19937',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pamplona',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '345',
			'quarter' => '19938',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Olite',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '346',
			'quarter' => '19939',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tudela',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '347',
			'quarter' => '19940',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gastehiz',
			'title_category' => 'commander',
			'region' => '88',
			'place' => '352',
			'quarter' => '19941',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Monzon',
			'title_category' => 'commander',
			'region' => '89',
			'place' => '354',
			'quarter' => '19942',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gerona',
			'title_category' => 'commander',
			'region' => '91',
			'place' => '361',
			'quarter' => '19943',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Emporda',
			'title_category' => 'commander',
			'region' => '91',
			'place' => '363',
			'quarter' => '19944',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barcelona',
			'title_category' => 'commander',
			'region' => '92',
			'place' => '365',
			'quarter' => '19945',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barbens',
			'title_category' => 'commander',
			'region' => '92',
			'place' => '366',
			'quarter' => '19946',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valencia',
			'title_category' => 'commander',
			'region' => '93',
			'place' => '369',
			'quarter' => '19947',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palma',
			'title_category' => 'commander',
			'region' => '95',
			'place' => '377',
			'quarter' => '19948',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pollenca',
			'title_category' => 'commander',
			'region' => '95',
			'place' => '378',
			'quarter' => '19949',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Segovia',
			'title_category' => 'commander',
			'region' => '98',
			'place' => '391',
			'quarter' => '19950',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Santo Domingo de Silos',
			'title_category' => 'commander',
			'region' => '99',
			'place' => '394',
			'quarter' => '19951',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ponferrada',
			'title_category' => 'commander',
			'region' => '100',
			'place' => '400',
			'quarter' => '19952',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lisbon',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '401',
			'quarter' => '19953',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sintra',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '402',
			'quarter' => '19954',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Santarem',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '403',
			'quarter' => '19955',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Viana',
			'title_category' => 'commander',
			'region' => '102',
			'place' => '407',
			'quarter' => '19956',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mirandela',
			'title_category' => 'commander',
			'region' => '103',
			'place' => '412',
			'quarter' => '19957',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tomar',
			'title_category' => 'commander',
			'region' => '104',
			'place' => '414',
			'quarter' => '19958',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pombal',
			'title_category' => 'commander',
			'region' => '104',
			'place' => '416',
			'quarter' => '19959',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avis',
			'title_category' => 'commander',
			'region' => '105',
			'place' => '420',
			'quarter' => '19960',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Osuna',
			'title_category' => 'commander',
			'region' => '108',
			'place' => '430',
			'quarter' => '19961',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toledo',
			'title_category' => 'commander',
			'region' => '110',
			'place' => '437',
			'quarter' => '19962',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Almaden',
			'title_category' => 'commander',
			'region' => '110',
			'place' => '438',
			'quarter' => '19963',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Genoa',
			'title_category' => 'commander',
			'region' => '117',
			'place' => '465',
			'quarter' => '19964',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Venice',
			'title_category' => 'commander',
			'region' => '118',
			'place' => '469',
			'quarter' => '19965',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Asti',
			'title_category' => 'commander',
			'region' => '122',
			'place' => '487',
			'quarter' => '19966',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siena',
			'title_category' => 'commander',
			'region' => '123',
			'place' => '490',
			'quarter' => '19967',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rome',
			'title_category' => 'commander',
			'region' => '125',
			'place' => '497',
			'quarter' => '19968',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pisa',
			'title_category' => 'commander',
			'region' => '126',
			'place' => '501',
			'quarter' => '19969',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bari',
			'title_category' => 'commander',
			'region' => '128',
			'place' => '510',
			'quarter' => '19970',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siponto',
			'title_category' => 'commander',
			'region' => '128',
			'place' => '511',
			'quarter' => '19971',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Benevento',
			'title_category' => 'commander',
			'region' => '130',
			'place' => '517',
			'quarter' => '19972',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palermo',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '529',
			'quarter' => '19973',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Agrigento',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '530',
			'quarter' => '19974',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marsala',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '532',
			'quarter' => '19975',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Messina',
			'title_category' => 'commander',
			'region' => '134',
			'place' => '533',
			'quarter' => '19976',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siracusa',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '537',
			'quarter' => '19977',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valletta',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '539',
			'quarter' => '19978',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modica',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '540',
			'quarter' => '19979',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Breslau',
			'title_category' => 'commander',
			'region' => '161',
			'place' => '643',
			'quarter' => '19980',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Biograd',
			'title_category' => 'commander',
			'region' => '168',
			'place' => '672',
			'quarter' => '19981',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gyor',
			'title_category' => 'commander',
			'region' => '170',
			'place' => '677',
			'quarter' => '19982',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sopron',
			'title_category' => 'commander',
			'region' => '170',
			'place' => '680',
			'quarter' => '19983',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fehervar',
			'title_category' => 'commander',
			'region' => '171',
			'place' => '682',
			'quarter' => '19984',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Esztergom',
			'title_category' => 'commander',
			'region' => '172',
			'place' => '685',
			'quarter' => '19985',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Virovitica',
			'title_category' => 'commander',
			'region' => '175',
			'place' => '700',
			'quarter' => '19986',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Klausenburg',
			'title_category' => 'commander',
			'region' => '176',
			'place' => '703',
			'quarter' => '19987',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drobeta',
			'title_category' => 'commander',
			'region' => '177',
			'place' => '706',
			'quarter' => '19988',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Torzburg',
			'title_category' => 'commander',
			'region' => '178',
			'place' => '711',
			'quarter' => '19989',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lamia',
			'title_category' => 'commander',
			'region' => '209',
			'place' => '834',
			'quarter' => '19990',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mystras',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '837',
			'quarter' => '19991',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modon',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '838',
			'quarter' => '19992',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Glarentza',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '840',
			'quarter' => '19993',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gardiki',
			'title_category' => 'commander',
			'region' => '211',
			'place' => '842',
			'quarter' => '19994',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ioannina',
			'title_category' => 'commander',
			'region' => '211',
			'place' => '843',
			'quarter' => '19995',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Smyrna',
			'title_category' => 'commander',
			'region' => '215',
			'place' => '857',
			'quarter' => '19996',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhodos',
			'title_category' => 'commander',
			'region' => '219',
			'place' => '874',
			'quarter' => '19997',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tarsus',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '885',
			'quarter' => '19998',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Adana',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '886',
			'quarter' => '19999',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nicosia',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '887',
			'quarter' => '20000',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Limasol',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '888',
			'quarter' => '20001',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antep',
			'title_category' => 'commander',
			'region' => '225',
			'place' => '900',
			'quarter' => '20002',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ascalon',
			'title_category' => 'commander',
			'region' => '249',
			'place' => '994',
			'quarter' => '20003',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jaffa',
			'title_category' => 'commander',
			'region' => '249',
			'place' => '996',
			'quarter' => '20004',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Acre',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '997',
			'quarter' => '20005',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nablus',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '999',
			'quarter' => '20006',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tyre',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '1000',
			'quarter' => '20007',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amman',
			'title_category' => 'commander',
			'region' => '251',
			'place' => '1002',
			'quarter' => '20008',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tripoli',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1013',
			'quarter' => '20009',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Beirut',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1015',
			'quarter' => '20010',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Margat',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1016',
			'quarter' => '20011',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antioch',
			'title_category' => 'commander',
			'region' => '255',
			'place' => '1017',
			'quarter' => '20012',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]); 


    }
}
