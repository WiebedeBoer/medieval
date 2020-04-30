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
		
//knights hospitaller commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Magdeburg',
 'region' => '3',
 'place' => '9',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Munster',
 'region' => '7',
 'place' => '25',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Graz',
 'region' => '11',
 'place' => '41',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Zurich',
 'region' => '14',
 'place' => '54',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Basel',
 'region' => '14',
 'place' => '55',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Frankfurt',
 'region' => '18',
 'place' => '71',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Emden',
 'region' => '23',
 'place' => '90',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Amiens',
 'region' => '31',
 'place' => '121',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Aix',
 'region' => '41',
 'place' => '162',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lincoln',
 'region' => '56',
 'place' => '221',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Santo Domingo de Silos',
 'region' => '99',
 'place' => '394',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Santarem',
 'region' => '101',
 'place' => '403',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Asti',
 'region' => '122',
 'place' => '487',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Breslau',
 'region' => '161',
 'place' => '643',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => '2',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_hospitaller'
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

//knights templar commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Halberstadt',
 'region' => '3',
 'place' => '11',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Stettin',
 'region' => '6',
 'place' => '21',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Metz',
 'region' => '20',
 'place' => '79',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Langres',
 'region' => '30',
 'place' => '120',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mans',
 'region' => '36',
 'place' => '143',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Poitiers',
 'region' => '37',
 'place' => '145',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Puy en Velay',
 'region' => '40',
 'place' => '159',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Besancon',
 'region' => '46',
 'place' => '182',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Chalon',
 'region' => '46',
 'place' => '183',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of London',
 'region' => '47',
 'place' => '185',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Norwich',
 'region' => '51',
 'place' => '201',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Scarborough',
 'region' => '52',
 'place' => '207',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Bristol',
 'region' => '53',
 'place' => '211',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Oxford',
 'region' => '54',
 'place' => '215',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Wexford',
 'region' => '84',
 'place' => '333',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siena',
 'region' => '123',
 'place' => '490',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marsala',
 'region' => '133',
 'place' => '532',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => '5',
 'rank' => '4',
 'career' => 'commander_templar'
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

//teutonic knights commanders
DB::table('titles')->insert([
 'title_name' => '[commander] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Utrecht',
 'region' => '22',
 'place' => '87',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Pilten',
 'region' => '69',
 'place' => '273',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Koningsberg',
 'region' => '70',
 'place' => '280',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Arensburg',
 'region' => '72',
 'place' => '287',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Hapsal',
 'region' => '72',
 'place' => '288',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Siponto',
 'region' => '128',
 'place' => '511',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => '1',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => '2',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);

DB::table('titles')->insert([
 'title_name' => '[commander] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => '4',
 'rank' => '4',
 'career' => 'commander_teutonic'
]);
    }
}
