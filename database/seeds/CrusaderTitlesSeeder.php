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
		
		DB::table('titles')->insert([
			'title_name' => 'Oldenburg',
			'title_category' => 'commander',
			'region' => '1',
			'place' => '2',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Magdeburg',
			'title_category' => 'commander',
			'region' => '3',
			'place' => '9',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Halberstadt',
			'title_category' => 'commander',
			'region' => '3',
			'place' => '11',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rostock',
			'title_category' => 'commander',
			'region' => '4',
			'place' => '14',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lubeck',
			'title_category' => 'commander',
			'region' => '4',
			'place' => '15',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brandenburg',
			'title_category' => 'commander',
			'region' => '5',
			'place' => '17',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Stettin',
			'title_category' => 'commander',
			'region' => '6',
			'place' => '21',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Munster',
			'title_category' => 'commander',
			'region' => '7',
			'place' => '25',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Regensburg',
			'title_category' => 'commander',
			'region' => '8',
			'place' => '29',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Graz',
			'title_category' => 'commander',
			'region' => '11',
			'place' => '41',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Freiburg',
			'title_category' => 'commander',
			'region' => '13',
			'place' => '51',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bern',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '53',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Zurich',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '54',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Basel',
			'title_category' => 'commander',
			'region' => '14',
			'place' => '55',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Prague',
			'title_category' => 'commander',
			'region' => '16',
			'place' => '61',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Brunn',
			'title_category' => 'commander',
			'region' => '17',
			'place' => '65',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mainz',
			'title_category' => 'commander',
			'region' => '18',
			'place' => '69',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Frankfurt',
			'title_category' => 'commander',
			'region' => '18',
			'place' => '71',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aachen',
			'title_category' => 'commander',
			'region' => '19',
			'place' => '74',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Trier',
			'title_category' => 'commander',
			'region' => '20',
			'place' => '77',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Metz',
			'title_category' => 'commander',
			'region' => '20',
			'place' => '79',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nimeguen',
			'title_category' => 'commander',
			'region' => '21',
			'place' => '83',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gouda',
			'title_category' => 'commander',
			'region' => '22',
			'place' => '86',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Utrecht',
			'title_category' => 'commander',
			'region' => '22',
			'place' => '87',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sneek',
			'title_category' => 'commander',
			'region' => '23',
			'place' => '89',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Emden',
			'title_category' => 'commander',
			'region' => '23',
			'place' => '90',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Paris',
			'title_category' => 'commander',
			'region' => '29',
			'place' => '113',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bar',
			'title_category' => 'commander',
			'region' => '30',
			'place' => '117',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Langres',
			'title_category' => 'commander',
			'region' => '30',
			'place' => '120',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amiens',
			'title_category' => 'commander',
			'region' => '31',
			'place' => '121',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Troyes',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '129',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Thierry',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '130',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Reims',
			'title_category' => 'commander',
			'region' => '33',
			'place' => '131',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gontier',
			'title_category' => 'commander',
			'region' => '36',
			'place' => '142',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mans',
			'title_category' => 'commander',
			'region' => '36',
			'place' => '143',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Poitiers',
			'title_category' => 'commander',
			'region' => '37',
			'place' => '145',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Clermont Ferrand',
			'title_category' => 'commander',
			'region' => '40',
			'place' => '157',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Puy en Velay',
			'title_category' => 'commander',
			'region' => '40',
			'place' => '159',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Aix',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '162',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marseille',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '163',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avignon',
			'title_category' => 'commander',
			'region' => '41',
			'place' => '164',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toulouse',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '165',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Carcasonne',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '166',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Narbonne',
			'title_category' => 'commander',
			'region' => '42',
			'place' => '167',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cahors',
			'title_category' => 'commander',
			'region' => '43',
			'place' => '170',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dijon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '181',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Besancon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '182',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chalon',
			'title_category' => 'commander',
			'region' => '46',
			'place' => '183',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'London',
			'title_category' => 'commander',
			'region' => '47',
			'place' => '185',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Norwich',
			'title_category' => 'commander',
			'region' => '51',
			'place' => '201',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Scarborough',
			'title_category' => 'commander',
			'region' => '52',
			'place' => '207',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bristol',
			'title_category' => 'commander',
			'region' => '53',
			'place' => '211',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Oxford',
			'title_category' => 'commander',
			'region' => '54',
			'place' => '215',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tamworth',
			'title_category' => 'commander',
			'region' => '55',
			'place' => '217',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Warwick',
			'title_category' => 'commander',
			'region' => '55',
			'place' => '218',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lincoln',
			'title_category' => 'commander',
			'region' => '56',
			'place' => '221',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Chester',
			'title_category' => 'commander',
			'region' => '58',
			'place' => '229',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Cardiff',
			'title_category' => 'commander',
			'region' => '59',
			'place' => '235',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Riga',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '269',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wenden',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '270',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Walk',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '271',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dunaburg',
			'title_category' => 'commander',
			'region' => '68',
			'place' => '272',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pilten',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '273',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Libau',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '274',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Goldingen',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '275',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Talsen',
			'title_category' => 'commander',
			'region' => '69',
			'place' => '276',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Elbing',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '278',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Danzig',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '279',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Koningsberg',
			'title_category' => 'commander',
			'region' => '70',
			'place' => '280',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Memelburg',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '281',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Saule',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '282',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tilsit',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '283',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Georgenburg',
			'title_category' => 'commander',
			'region' => '71',
			'place' => '284',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Reval',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '285',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Weissenstein',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '286',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Arensburg',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '287',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Hapsal',
			'title_category' => 'commander',
			'region' => '72',
			'place' => '288',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Linlithgow',
			'title_category' => 'commander',
			'region' => '73',
			'place' => '290',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Alnwick',
			'title_category' => 'commander',
			'region' => '74',
			'place' => '294',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Dublin',
			'title_category' => 'commander',
			'region' => '82',
			'place' => '325',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tara',
			'title_category' => 'commander',
			'region' => '82',
			'place' => '326',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Wexford',
			'title_category' => 'commander',
			'region' => '84',
			'place' => '333',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pamplona',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '345',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Olite',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '346',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tudela',
			'title_category' => 'commander',
			'region' => '87',
			'place' => '347',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gastehiz',
			'title_category' => 'commander',
			'region' => '88',
			'place' => '352',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Monzon',
			'title_category' => 'commander',
			'region' => '89',
			'place' => '354',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gerona',
			'title_category' => 'commander',
			'region' => '91',
			'place' => '361',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Emporda',
			'title_category' => 'commander',
			'region' => '91',
			'place' => '363',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barcelona',
			'title_category' => 'commander',
			'region' => '92',
			'place' => '365',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Barbens',
			'title_category' => 'commander',
			'region' => '92',
			'place' => '366',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valencia',
			'title_category' => 'commander',
			'region' => '93',
			'place' => '369',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palma',
			'title_category' => 'commander',
			'region' => '95',
			'place' => '377',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pollenca',
			'title_category' => 'commander',
			'region' => '95',
			'place' => '378',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Segovia',
			'title_category' => 'commander',
			'region' => '98',
			'place' => '391',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Santo Domingo de Silos',
			'title_category' => 'commander',
			'region' => '99',
			'place' => '394',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ponferrada',
			'title_category' => 'commander',
			'region' => '100',
			'place' => '400',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lisbon',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '401',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sintra',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '402',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Santarem',
			'title_category' => 'commander',
			'region' => '101',
			'place' => '403',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Viana',
			'title_category' => 'commander',
			'region' => '102',
			'place' => '407',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mirandela',
			'title_category' => 'commander',
			'region' => '103',
			'place' => '412',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tomar',
			'title_category' => 'commander',
			'region' => '104',
			'place' => '414',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pombal',
			'title_category' => 'commander',
			'region' => '104',
			'place' => '416',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Avis',
			'title_category' => 'commander',
			'region' => '105',
			'place' => '420',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Osuna',
			'title_category' => 'commander',
			'region' => '108',
			'place' => '430',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Toledo',
			'title_category' => 'commander',
			'region' => '110',
			'place' => '437',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Almaden',
			'title_category' => 'commander',
			'region' => '110',
			'place' => '438',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Genoa',
			'title_category' => 'commander',
			'region' => '117',
			'place' => '465',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Venice',
			'title_category' => 'commander',
			'region' => '118',
			'place' => '469',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Asti',
			'title_category' => 'commander',
			'region' => '122',
			'place' => '487',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siena',
			'title_category' => 'commander',
			'region' => '123',
			'place' => '490',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rome',
			'title_category' => 'commander',
			'region' => '125',
			'place' => '497',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Pisa',
			'title_category' => 'commander',
			'region' => '126',
			'place' => '501',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Bari',
			'title_category' => 'commander',
			'region' => '128',
			'place' => '510',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siponto',
			'title_category' => 'commander',
			'region' => '128',
			'place' => '511',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Benevento',
			'title_category' => 'commander',
			'region' => '130',
			'place' => '517',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Palermo',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '529',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Agrigento',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '530',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Marsala',
			'title_category' => 'commander',
			'region' => '133',
			'place' => '532',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Messina',
			'title_category' => 'commander',
			'region' => '134',
			'place' => '533',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Siracusa',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '537',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Valletta',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '539',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modica',
			'title_category' => 'commander',
			'region' => '135',
			'place' => '540',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Breslau',
			'title_category' => 'commander',
			'region' => '161',
			'place' => '643',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Biograd',
			'title_category' => 'commander',
			'region' => '168',
			'place' => '672',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gyor',
			'title_category' => 'commander',
			'region' => '170',
			'place' => '677',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Sopron',
			'title_category' => 'commander',
			'region' => '170',
			'place' => '680',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Fehervar',
			'title_category' => 'commander',
			'region' => '171',
			'place' => '682',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Esztergom',
			'title_category' => 'commander',
			'region' => '172',
			'place' => '685',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Virovitica',
			'title_category' => 'commander',
			'region' => '175',
			'place' => '700',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Klausenburg',
			'title_category' => 'commander',
			'region' => '176',
			'place' => '703',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Drobeta',
			'title_category' => 'commander',
			'region' => '177',
			'place' => '706',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Torzburg',
			'title_category' => 'commander',
			'region' => '178',
			'place' => '711',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Lamia',
			'title_category' => 'commander',
			'region' => '209',
			'place' => '834',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Mystras',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '837',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Modon',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '838',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Glarentza',
			'title_category' => 'commander',
			'region' => '210',
			'place' => '840',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Gardiki',
			'title_category' => 'commander',
			'region' => '211',
			'place' => '842',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ioannina',
			'title_category' => 'commander',
			'region' => '211',
			'place' => '843',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Smyrna',
			'title_category' => 'commander',
			'region' => '215',
			'place' => '857',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Rhodos',
			'title_category' => 'commander',
			'region' => '219',
			'place' => '874',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tarsus',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '885',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Adana',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '886',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_teutonic'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nicosia',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '887',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Limasol',
			'title_category' => 'commander',
			'region' => '222',
			'place' => '888',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antep',
			'title_category' => 'commander',
			'region' => '225',
			'place' => '900',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Ascalon',
			'title_category' => 'commander',
			'region' => '249',
			'place' => '994',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Jaffa',
			'title_category' => 'commander',
			'region' => '249',
			'place' => '996',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Acre',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '997',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Nablus',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '999',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tyre',
			'title_category' => 'commander',
			'region' => '250',
			'place' => '1000',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Amman',
			'title_category' => 'commander',
			'region' => '251',
			'place' => '1002',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Tripoli',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1013',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Beirut',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1015',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Margat',
			'title_category' => 'commander',
			'region' => '254',
			'place' => '1016',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_hospitaller'
			]);
			DB::table('titles')->insert([
			'title_name' => 'Antioch',
			'title_category' => 'commander',
			'region' => '255',
			'place' => '1017',
			'religion' => '1',
			'rank' => '4',
			'career' => 'commander_templar'
			]); 
    }
}
