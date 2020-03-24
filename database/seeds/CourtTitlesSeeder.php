<?php

use Illuminate\Database\Seeder;

class CourtTitlesSeeder extends Seeder
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

//marshalls
DB::table('titles')->insert([
 'title_name' => '[marshall] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Aachen',
 'region' => '19',
 'place' => '74',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Dublin',
 'region' => '82',
 'place' => '325',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Wexford',
 'region' => '84',
 'place' => '333',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tuam',
 'region' => '86',
 'place' => '343',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Murcia',
 'region' => '113',
 'place' => '449',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Malaga',
 'region' => '114',
 'place' => '453',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Rome',
 'region' => '125',
 'place' => '497',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Taroudant',
 'region' => '140',
 'place' => '557',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Sijilmassa',
 'region' => '141',
 'place' => '562',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tlemcen',
 'region' => '142',
 'place' => '565',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Curtea Arges',
 'region' => '177',
 'place' => '707',
 'religion' => 'Serbian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Suceava',
 'region' => '180',
 'place' => '717',
 'religion' => 'Serbian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => 'Serbian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Turov',
 'region' => '192',
 'place' => '765',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Smolensk',
 'region' => '195',
 'place' => '777',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Ryazan',
 'region' => '196',
 'place' => '781',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Atil',
 'region' => '205',
 'place' => '817',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Kruja',
 'region' => '212',
 'place' => '845',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Ancyra',
 'region' => '220',
 'place' => '877',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Caesarea',
 'region' => '223',
 'place' => '889',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Nakhichevan',
 'region' => '233',
 'place' => '929',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Bitlis',
 'region' => '234',
 'place' => '935',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
]);

DB::table('titles')->insert([
 'title_name' => '[marshall] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '8',
 'career' => 'court_marshall'
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

		//viceroys
		DB::table('titles')->insert([
			'title_name' => '[viceroy] of Ireland',
			'region' => '82',
			'place' => '325',
			'religion' => 'Catholic',
			'rank' => '8',
			'career' => 'court_viceroy'
		]); 
		
		DB::table('titles')->insert([
			'title_name' => '[viceroy] of Sardinia',
			'region' => '131',
			'place' => '521',
			'religion' => 'Catholic',
			'rank' => '8',
			'career' => 'court_viceroy'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[viceroy] of Sicily',
			'region' => '133',
			'place' => '529',
			'religion' => 'Catholic',
			'rank' => '8',
			'career' => 'court_viceroy'
		]);	

		//stewards
		DB::table('titles')->insert([
			'title_name' => '[steward] of Frisia',
			'region' => '23',
			'place' => '89',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[steward] of Drenthe',
			'region' => '23',
			'place' => '91',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	

		DB::table('titles')->insert([
			'title_name' => '[steward] of Hainaut',
			'region' => '25',
			'place' => '99',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);			

		DB::table('titles')->insert([
			'title_name' => '[steward] of Artois',
			'region' => '31',
			'place' => '121',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Guelders',
			'region' => '21',
			'place' => '82',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Liege',
			'region' => '19',
			'place' => '75',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Holland',
			'region' => '22',
			'place' => '86',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Luxembourg',
			'region' => '20',
			'place' => '78',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Utrecht',
			'region' => '22',
			'place' => '87',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Flanders',
			'region' => '25',
			'place' => '98',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Norway',
			'region' => '61',
			'place' => '241',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Denmark',
			'region' => '62',
			'place' => '245',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Sweden',
			'region' => '65',
			'place' => '257',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of France',
			'region' => '29',
			'place' => '113', 
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Normandy',
			'region' => '32',
			'place' => '125',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Toulouse',
			'region' => '42',
			'place' => '165',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of England',
			'region' => '47',
			'place' => '185', 
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Scotland',
			'region' => '73',
			'place' => '289', 
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Metz',
			'region' => '20',
			'place' => '79',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Burgundy',
			'region' => '46',
			'place' => '181',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
				
		DB::table('titles')->insert([
			'title_name' => '[steward] of Croatia',
			'region' => '169',
			'place' => '673',
			'religion' => 'Catholic',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Muscowy',
			'region' => '197',
			'place' => '785',
			'religion' => 'Russian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Novgorod',
			'region' => '199',
			'place' => '793',
			'religion' => 'Russian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Pleskov',
			'region' => '198',
			'place' => '789',
			'religion' => 'Russian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Bosnia',
			'region' => '183',
			'place' => '729',
			'religion' => 'Serbian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);	
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Bulgaria',
			'region' => '182',
			'place' => '727',
			'religion' => 'Serbian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Moldova',
			'region' => '180',
			'place' => '717',
			'religion' => 'Serbian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Wallachia',
			'region' => '177',
			'place' => '707',
			'religion' => 'Serbian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
		]);
		
		DB::table('titles')->insert([
			'title_name' => '[steward] of Transsylvania',
			'region' => '178',
			'place' => '711',
			'religion' => 'Serbian Orthodox',
			'rank' => '7',
			'career' => 'court_steward'
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
//chamberlains
DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Prague',
 'region' => '16',
 'place' => '61',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Paris',
 'region' => '29',
 'place' => '113',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Edinburgh',
 'region' => '73',
 'place' => '289',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Zaragoza',
 'region' => '90',
 'place' => '357',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Albarracin',
 'region' => '90',
 'place' => '359',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Denia',
 'region' => '94',
 'place' => '373',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Lisbon',
 'region' => '101',
 'place' => '401',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Cordoba',
 'region' => '107',
 'place' => '425',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Badajoz',
 'region' => '109',
 'place' => '433',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Almeria',
 'region' => '112',
 'place' => '445',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Pavia',
 'region' => '115',
 'place' => '459',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Naples',
 'region' => '127',
 'place' => '505',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Benevento',
 'region' => '130',
 'place' => '517',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Sassari',
 'region' => '131',
 'place' => '521',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Fez',
 'region' => '138',
 'place' => '549',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Marrakesh',
 'region' => '139',
 'place' => '553',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Taroudant',
 'region' => '140',
 'place' => '557',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Sijilmassa',
 'region' => '141',
 'place' => '562',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Kairouan',
 'region' => '150',
 'place' => '597',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Cairo',
 'region' => '158',
 'place' => '629',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Knin',
 'region' => '169',
 'place' => '673',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Esztergom',
 'region' => '172',
 'place' => '685',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Curtea Arges',
 'region' => '177',
 'place' => '707',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Preslav',
 'region' => '182',
 'place' => '727',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Rashka',
 'region' => '185',
 'place' => '737',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Pereyaslav',
 'region' => '189',
 'place' => '753',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Halych',
 'region' => '191',
 'place' => '761',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Turov',
 'region' => '192',
 'place' => '765',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Tchernigov',
 'region' => '193',
 'place' => '769',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Polotsk',
 'region' => '194',
 'place' => '773',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Smolensk',
 'region' => '195',
 'place' => '777',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Ryazan',
 'region' => '196',
 'place' => '781',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Moscow',
 'region' => '197',
 'place' => '785',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Pleskov',
 'region' => '198',
 'place' => '789',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Novgorod',
 'region' => '199',
 'place' => '793',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Atil',
 'region' => '205',
 'place' => '817',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Gurganj',
 'region' => '206',
 'place' => '821',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Thessaloniki',
 'region' => '208',
 'place' => '829',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Melnik',
 'region' => '208',
 'place' => '831',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Mystras',
 'region' => '210',
 'place' => '837',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Arta',
 'region' => '211',
 'place' => '841',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Kruja',
 'region' => '212',
 'place' => '845',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Tralles',
 'region' => '216',
 'place' => '861',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Nicaea',
 'region' => '217',
 'place' => '865',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Bursa',
 'region' => '217',
 'place' => '867',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Ikonion',
 'region' => '218',
 'place' => '869',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Mistheia',
 'region' => '218',
 'place' => '870',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Laranda',
 'region' => '218',
 'place' => '871',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Coracesium',
 'region' => '219',
 'place' => '873',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Diyarbakir',
 'region' => '227',
 'place' => '905',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Erzincan',
 'region' => '227',
 'place' => '907',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Sivas',
 'region' => '228',
 'place' => '909',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Tiflis',
 'region' => '230',
 'place' => '917',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Ani',
 'region' => '232',
 'place' => '925',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Nakhichevan',
 'region' => '233',
 'place' => '929',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Bitlis',
 'region' => '234',
 'place' => '935',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Mardin',
 'region' => '235',
 'place' => '937',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Cepha',
 'region' => '235',
 'place' => '939',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Shiraz',
 'region' => '240',
 'place' => '957',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Isfahan',
 'region' => '241',
 'place' => '961',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Hajr',
 'region' => '246',
 'place' => '981',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Mecca',
 'region' => '247',
 'place' => '985',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Jerusalem',
 'region' => '249',
 'place' => '993',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Damascus',
 'region' => '252',
 'place' => '1005',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Antioch',
 'region' => '255',
 'place' => '1017',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
]);

DB::table('titles')->insert([
 'title_name' => '[chamberlain] of Baghdad',
 'region' => '259',
 'place' => '1033',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chamberlain'
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
//chancellors
DB::table('titles')->insert([
 'title_name' => '[chancellor] of Bern',
 'region' => '14',
 'place' => '53',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Regensburg',
 'region' => '8',
 'place' => '29',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Augsburg',
 'region' => '8',
 'place' => '30',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Nuremberg',
 'region' => '8',
 'place' => '32',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Mainz',
 'region' => '18',
 'place' => '69',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Cologne',
 'region' => '19',
 'place' => '73',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Trier',
 'region' => '20',
 'place' => '77',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Rouen',
 'region' => '32',
 'place' => '125',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Reims',
 'region' => '33',
 'place' => '131',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Tonsborg',
 'region' => '60',
 'place' => '238',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Krakow',
 'region' => '162',
 'place' => '645',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Caernarfon',
 'region' => '57',
 'place' => '225',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Visby',
 'region' => '66',
 'place' => '261',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Skara',
 'region' => '67',
 'place' => '265',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Marienburg',
 'region' => '70',
 'place' => '277',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Ourense',
 'region' => '100',
 'place' => '398',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Coimbra',
 'region' => '104',
 'place' => '413',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Evora',
 'region' => '105',
 'place' => '417',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Buda',
 'region' => '174',
 'place' => '693',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Palencia',
 'region' => '99',
 'place' => '395',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Valladolid',
 'region' => '98',
 'place' => '389',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Granada',
 'region' => '111',
 'place' => '441',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Sevilla',
 'region' => '108',
 'place' => '429',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Toledo',
 'region' => '110',
 'place' => '437',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_chancellor'
]); 

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_chancellor'
]); 

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Kiev',
 'region' => '190',
 'place' => '757',
 'religion' => 'Russian Orthodox',
 'rank' => '4',
 'career' => 'court_chancellor'
]); 

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Pamplona',
 'region' => '87',
 'place' => '345',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Jaca',
 'region' => '89',
 'place' => '353',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Leon',
 'region' => '96',
 'place' => '381',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Oviedo',
 'region' => '97',
 'place' => '385',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
]);

DB::table('titles')->insert([
 'title_name' => '[chancellor] of Santiago',
 'region' => '100',
 'place' => '397',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_chancellor'
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

//admirals
DB::table('titles')->insert([
 'title_name' => '[admiral] of Bremen',
 'region' => '1',
 'place' => '1',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Hamburg',
 'region' => '1',
 'place' => '3',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Lubeck',
 'region' => '4',
 'place' => '15',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Amsterdam',
 'region' => '22',
 'place' => '88',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Antwerp',
 'region' => '24',
 'place' => '95',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Quimper',
 'region' => '28',
 'place' => '111',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Marseille',
 'region' => '41',
 'place' => '163',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of London',
 'region' => '47',
 'place' => '185',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Oslo',
 'region' => '60',
 'place' => '237',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Stavanger',
 'region' => '61',
 'place' => '243',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Copenhagen',
 'region' => '62',
 'place' => '245',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Ripen',
 'region' => '64',
 'place' => '255',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Stockholm',
 'region' => '65',
 'place' => '257',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Riga',
 'region' => '68',
 'place' => '269',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Barcelona',
 'region' => '92',
 'place' => '365',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Valencia',
 'region' => '93',
 'place' => '369',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Palma',
 'region' => '95',
 'place' => '377',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Viana',
 'region' => '102',
 'place' => '407',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Genoa',
 'region' => '117',
 'place' => '465',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Noli',
 'region' => '117',
 'place' => '466',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Venice',
 'region' => '118',
 'place' => '469',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Ancona',
 'region' => '124',
 'place' => '495',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Pisa',
 'region' => '126',
 'place' => '501',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Amalfi',
 'region' => '127',
 'place' => '507',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Taranto',
 'region' => '128',
 'place' => '509',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Palermo',
 'region' => '133',
 'place' => '529',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Ragusa',
 'region' => '168',
 'place' => '669',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => 'Catholic',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Constanta',
 'region' => '179',
 'place' => '713',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => 'Serbian Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Constantinople',
 'region' => '207',
 'place' => '825',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Athens',
 'region' => '209',
 'place' => '833',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Smyrna',
 'region' => '215',
 'place' => '857',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Sinope',
 'region' => '221',
 'place' => '881',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Amasra',
 'region' => '221',
 'place' => '883',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Trebizond',
 'region' => '224',
 'place' => '893',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Samsun',
 'region' => '226',
 'place' => '902',
 'religion' => 'Greek Orthodox',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Hormuz',
 'region' => '240',
 'place' => '959',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Jeddah',
 'region' => '247',
 'place' => '987',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);

DB::table('titles')->insert([
 'title_name' => '[admiral] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => 'Muslim',
 'rank' => '4',
 'career' => 'court_admiral'
]);




    }
}
