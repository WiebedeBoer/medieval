<?php

use Illuminate\Database\Seeder;

class NobleTitlesSeeder extends Seeder
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

//dukes
DB::table('titles')->insert([
 'title_name' => '[duke] of Mecklenburg',
 'region' => '4',
 'place' => '13',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Brandenburg',
 'region' => '5',
 'place' => '17',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Bavaria',
 'region' => '8',
 'place' => '29',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Austria',
 'region' => '10',
 'place' => '37',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Styria',
 'region' => '11',
 'place' => '41',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Brittany',
 'region' => '28',
 'place' => '109',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Normandy',
 'region' => '32',
 'place' => '125',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Prussia',
 'region' => '70',
 'place' => '277',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Estonia',
 'region' => '72',
 'place' => '285',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Lombardy',
 'region' => '115',
 'place' => '457',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Verona',
 'region' => '116',
 'place' => '464',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Emilia',
 'region' => '120',
 'place' => '477',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Tuscany',
 'region' => '126',
 'place' => '503',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Calabria',
 'region' => '129',
 'place' => '513',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Upper Silesia',
 'region' => '161',
 'place' => '641',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Lower Silesia',
 'region' => '161',
 'place' => '642',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Greater Poland',
 'region' => '163',
 'place' => '650',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Masovia',
 'region' => '164',
 'place' => '653',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Croatia',
 'region' => '169',
 'place' => '676',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Burgenland',
 'region' => '170',
 'place' => '679',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Vac',
 'region' => '174',
 'place' => '693',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Transsylvania',
 'region' => '176',
 'place' => '701',
 'religion' => '1',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Bosnia',
 'region' => '183',
 'place' => '729',
 'religion' => '2',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Macedonia',
 'region' => '213',
 'place' => '849',
 'religion' => '4',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Cibyrrhaeot',
 'region' => '219',
 'place' => '874',
 'religion' => '4',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Abchasia',
 'region' => '229',
 'place' => '913',
 'religion' => '4',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Georgia',
 'region' => '230',
 'place' => '918',
 'religion' => '4',
 'rank' => '9',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[duke] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => '5',
 'rank' => '9',
 'career' => 'fixed_nobility'
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

//margraviates
DB::table('titles')->insert([
 'title_name' => '[margrave] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Upper Saxony',
 'region' => '2',
 'place' => '6',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Thuringia',
 'region' => '2',
 'place' => '7',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Anhalt',
 'region' => '5',
 'place' => '18',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Styria',
 'region' => '11',
 'place' => '43',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Moravia',
 'region' => '17',
 'place' => '65',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Carinthia',
 'region' => '26',
 'place' => '101',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Carniola',
 'region' => '27',
 'place' => '105',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Cheshire',
 'region' => '53',
 'place' => '210',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Powys',
 'region' => '58',
 'place' => '229',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Shropshire',
 'region' => '58',
 'place' => '230',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Prussia',
 'region' => '70',
 'place' => '279',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Bernicia',
 'region' => '74',
 'place' => '294',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Cumbria',
 'region' => '76',
 'place' => '301',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Avila',
 'region' => '98',
 'place' => '390',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Beira',
 'region' => '104',
 'place' => '416',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Treviso',
 'region' => '118',
 'place' => '470',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[margrave] of Turin',
 'region' => '122',
 'place' => '485',
 'religion' => '1',
 'rank' => '8',
 'career' => 'fixed_nobility'
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

//counts
DB::table('titles')->insert([
 'title_name' => '[count] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pressburg',
 'region' => '10',
 'place' => '40',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Freiburg',
 'region' => '13',
 'place' => '51',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zutphen',
 'region' => '21',
 'place' => '82',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nimeguen',
 'region' => '21',
 'place' => '83',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of East Frisia',
 'region' => '23',
 'place' => '90',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Louvain',
 'region' => '24',
 'place' => '93',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Flanders',
 'region' => '25',
 'place' => '98',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gorizia',
 'region' => '26',
 'place' => '103',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Picardy',
 'region' => '31',
 'place' => '121',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lisieux',
 'region' => '32',
 'place' => '127',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Troyes',
 'region' => '33',
 'place' => '129',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Orleans',
 'region' => '34',
 'place' => '133',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Touraine',
 'region' => '35',
 'place' => '137',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anjou',
 'region' => '36',
 'place' => '141',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Maine',
 'region' => '36',
 'place' => '143',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poitou',
 'region' => '37',
 'place' => '145',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bourges',
 'region' => '38',
 'place' => '149',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nivernais',
 'region' => '38',
 'place' => '151',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bourbonnais',
 'region' => '39',
 'place' => '153',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Auvergne',
 'region' => '40',
 'place' => '157',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Avignon',
 'region' => '41',
 'place' => '164',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Toulouse',
 'region' => '42',
 'place' => '165',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Guyenne',
 'region' => '43',
 'place' => '169',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Angoumois',
 'region' => '44',
 'place' => '173',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limousine',
 'region' => '44',
 'place' => '174',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Perigeux',
 'region' => '44',
 'place' => '175',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dauphine',
 'region' => '45',
 'place' => '177',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Burgundy',
 'region' => '46',
 'place' => '181',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Surrey',
 'region' => '47',
 'place' => '187',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kent',
 'region' => '48',
 'place' => '192',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hampshire',
 'region' => '49',
 'place' => '193',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cornwall',
 'region' => '50',
 'place' => '197',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Norfolk',
 'region' => '51',
 'place' => '201',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Suffolk',
 'region' => '51',
 'place' => '202',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yorkshire',
 'region' => '52',
 'place' => '205',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lancashire',
 'region' => '52',
 'place' => '208',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Worcestershire',
 'region' => '53',
 'place' => '209',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cambridgeshire',
 'region' => '54',
 'place' => '214',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oxfordshire',
 'region' => '54',
 'place' => '215',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Warwickshire',
 'region' => '55',
 'place' => '218',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Leicestershire',
 'region' => '55',
 'place' => '220',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lincolnshire',
 'region' => '56',
 'place' => '221',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nottinghamshire',
 'region' => '56',
 'place' => '222',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Carmarthenshire',
 'region' => '59',
 'place' => '234',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Glamorgan',
 'region' => '59',
 'place' => '235',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vestfold',
 'region' => '60',
 'place' => '238',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oppland',
 'region' => '60',
 'place' => '239',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hordaland',
 'region' => '61',
 'place' => '241',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nordland',
 'region' => '61',
 'place' => '242',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rogaland',
 'region' => '61',
 'place' => '243',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Roskilde',
 'region' => '62',
 'place' => '247',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Halmstad',
 'region' => '63',
 'place' => '251',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aarhus',
 'region' => '64',
 'place' => '253',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aalborg',
 'region' => '64',
 'place' => '254',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vasteras',
 'region' => '65',
 'place' => '258',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Uppland',
 'region' => '65',
 'place' => '259',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gotland',
 'region' => '66',
 'place' => '261',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vaxjo',
 'region' => '66',
 'place' => '263',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jonkoping',
 'region' => '67',
 'place' => '267',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dunbarshire',
 'region' => '73',
 'place' => '291',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Northumbria',
 'region' => '74',
 'place' => '293',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Roxburghshire',
 'region' => '74',
 'place' => '296',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ayrshire',
 'region' => '75',
 'place' => '300',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Argyll',
 'region' => '77',
 'place' => '307',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Perthshire',
 'region' => '78',
 'place' => '309',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Stirlingshire',
 'region' => '78',
 'place' => '310',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Morayshire',
 'region' => '79',
 'place' => '313',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nairnshire',
 'region' => '79',
 'place' => '314',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aberdeenshire',
 'region' => '79',
 'place' => '316',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kildare',
 'region' => '82',
 'place' => '327',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limerick',
 'region' => '85',
 'place' => '338',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cork',
 'region' => '85',
 'place' => '339',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tudela',
 'region' => '87',
 'place' => '347',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bilbao',
 'region' => '88',
 'place' => '351',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gastehiz',
 'region' => '88',
 'place' => '352',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Monzon',
 'region' => '89',
 'place' => '354',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Huesca',
 'region' => '89',
 'place' => '355',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gerona',
 'region' => '91',
 'place' => '361',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Emporda',
 'region' => '91',
 'place' => '363',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Castellon',
 'region' => '93',
 'place' => '371',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alicante',
 'region' => '94',
 'place' => '375',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Menorca',
 'region' => '95',
 'place' => '379',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ibiza',
 'region' => '95',
 'place' => '380',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aviles',
 'region' => '97',
 'place' => '386',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gijon',
 'region' => '97',
 'place' => '387',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Salamanca',
 'region' => '98',
 'place' => '392',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Burgos',
 'region' => '99',
 'place' => '393',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Faro',
 'region' => '106',
 'place' => '421',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Huelva',
 'region' => '108',
 'place' => '432',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Antquera',
 'region' => '111',
 'place' => '443',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alicante',
 'region' => '113',
 'place' => '451',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ronda',
 'region' => '114',
 'place' => '456',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aleria',
 'region' => '117',
 'place' => '467',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Brindisi',
 'region' => '128',
 'place' => '512',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olbia',
 'region' => '131',
 'place' => '522',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Porto Torres',
 'region' => '131',
 'place' => '524',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oristano',
 'region' => '132',
 'place' => '526',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Agrigento',
 'region' => '133',
 'place' => '530',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Siracusa',
 'region' => '135',
 'place' => '537',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Valletta',
 'region' => '135',
 'place' => '539',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Modica',
 'region' => '135',
 'place' => '540',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tangiers',
 'region' => '136',
 'place' => '541',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ceuta',
 'region' => '136',
 'place' => '542',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouazzane',
 'region' => '136',
 'place' => '543',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tetouan',
 'region' => '136',
 'place' => '544',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anfa',
 'region' => '137',
 'place' => '545',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fedala',
 'region' => '137',
 'place' => '548',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Taza',
 'region' => '138',
 'place' => '551',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Meknes',
 'region' => '138',
 'place' => '552',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouarzazate',
 'region' => '139',
 'place' => '554',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mogador',
 'region' => '139',
 'place' => '555',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Agadir',
 'region' => '140',
 'place' => '558',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tindouf',
 'region' => '140',
 'place' => '559',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tinmel',
 'region' => '140',
 'place' => '560',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Figuig',
 'region' => '141',
 'place' => '561',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tinghir',
 'region' => '141',
 'place' => '563',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mellila',
 'region' => '142',
 'place' => '567',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Oran',
 'region' => '143',
 'place' => '569',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mostaganem',
 'region' => '143',
 'place' => '570',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tiaret',
 'region' => '143',
 'place' => '571',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mascara',
 'region' => '143',
 'place' => '572',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Djelfa',
 'region' => '144',
 'place' => '573',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghardaia',
 'region' => '144',
 'place' => '575',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Biskra',
 'region' => '145',
 'place' => '578',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ouargla',
 'region' => '145',
 'place' => '579',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Touggourt',
 'region' => '145',
 'place' => '580',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Algiers',
 'region' => '146',
 'place' => '581',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Setif',
 'region' => '147',
 'place' => '587',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tunis',
 'region' => '149',
 'place' => '593',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hammamet',
 'region' => '149',
 'place' => '595',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bizerte',
 'region' => '149',
 'place' => '596',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sousse',
 'region' => '150',
 'place' => '598',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sfax',
 'region' => '150',
 'place' => '599',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gabes',
 'region' => '151',
 'place' => '601',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gafsa',
 'region' => '151',
 'place' => '602',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kebili',
 'region' => '151',
 'place' => '603',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghadames',
 'region' => '152',
 'place' => '605',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghat',
 'region' => '152',
 'place' => '608',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tripoli',
 'region' => '153',
 'place' => '609',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Misrata',
 'region' => '153',
 'place' => '611',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Germa',
 'region' => '154',
 'place' => '613',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kufra',
 'region' => '155',
 'place' => '617',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Benghazi',
 'region' => '156',
 'place' => '621',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alexandria',
 'region' => '157',
 'place' => '625',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rosetta',
 'region' => '157',
 'place' => '626',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Damietta',
 'region' => '157',
 'place' => '627',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mansoura',
 'region' => '157',
 'place' => '628',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Helwan',
 'region' => '158',
 'place' => '630',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fayum',
 'region' => '158',
 'place' => '631',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Minya',
 'region' => '159',
 'place' => '633',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Farafra',
 'region' => '159',
 'place' => '635',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Asyut',
 'region' => '160',
 'place' => '637',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aswan',
 'region' => '160',
 'place' => '639',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vilnius',
 'region' => '166',
 'place' => '662',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kauen',
 'region' => '166',
 'place' => '663',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pula',
 'region' => '167',
 'place' => '665',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vikla',
 'region' => '167',
 'place' => '667',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Split',
 'region' => '168',
 'place' => '671',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bihac',
 'region' => '169',
 'place' => '674',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gyor',
 'region' => '170',
 'place' => '677',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Veszprem',
 'region' => '171',
 'place' => '681',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Fehervar',
 'region' => '171',
 'place' => '682',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Egerszeg',
 'region' => '171',
 'place' => '683',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pecs',
 'region' => '171',
 'place' => '684',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kecskemet',
 'region' => '174',
 'place' => '694',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zounok',
 'region' => '174',
 'place' => '696',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pecs',
 'region' => '175',
 'place' => '697',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vukovar',
 'region' => '175',
 'place' => '698',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Virovitica',
 'region' => '175',
 'place' => '700',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Klausenburg',
 'region' => '176',
 'place' => '703',
 'religion' => '1',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Targu Jiu',
 'region' => '177',
 'place' => '705',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Constanta',
 'region' => '179',
 'place' => '713',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Odessa',
 'region' => '180',
 'place' => '719',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sofia',
 'region' => '181',
 'place' => '721',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Varna',
 'region' => '182',
 'place' => '725',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Belgrade',
 'region' => '184',
 'place' => '733',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Krusevac',
 'region' => '185',
 'place' => '739',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Prizren',
 'region' => '186',
 'place' => '741',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Skopje',
 'region' => '186',
 'place' => '743',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pristina',
 'region' => '187',
 'place' => '745',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => '2',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poltava',
 'region' => '188',
 'place' => '751',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Slutsk',
 'region' => '192',
 'place' => '767',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ostrov',
 'region' => '198',
 'place' => '791',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gdov',
 'region' => '198',
 'place' => '792',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ladoga',
 'region' => '199',
 'place' => '795',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ufa',
 'region' => '200',
 'place' => '800',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vladimir',
 'region' => '201',
 'place' => '801',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nizhny',
 'region' => '201',
 'place' => '804',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Olgov',
 'region' => '204',
 'place' => '816',
 'religion' => '3',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraibatu',
 'region' => '205',
 'place' => '818',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraiberke',
 'region' => '205',
 'place' => '819',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khiva',
 'region' => '206',
 'place' => '822',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saraidzhuk',
 'region' => '206',
 'place' => '823',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mishrian',
 'region' => '206',
 'place' => '824',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Edirne',
 'region' => '207',
 'place' => '827',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Thebes',
 'region' => '209',
 'place' => '835',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Larissa',
 'region' => '209',
 'place' => '836',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Corinth',
 'region' => '210',
 'place' => '839',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ioannina',
 'region' => '211',
 'place' => '843',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Durres',
 'region' => '212',
 'place' => '846',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Berat',
 'region' => '213',
 'place' => '852',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Iraklion',
 'region' => '214',
 'place' => '853',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Efese',
 'region' => '216',
 'place' => '863',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sardes',
 'region' => '216',
 'place' => '864',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pergamum',
 'region' => '217',
 'place' => '868',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Attalia',
 'region' => '219',
 'place' => '875',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Cotyaeum',
 'region' => '220',
 'place' => '879',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kastamuni',
 'region' => '221',
 'place' => '882',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amasra',
 'region' => '221',
 'place' => '883',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Claudiopolis',
 'region' => '221',
 'place' => '884',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tarsus',
 'region' => '222',
 'place' => '885',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Adana',
 'region' => '222',
 'place' => '886',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Limasol',
 'region' => '222',
 'place' => '888',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Garsaura',
 'region' => '223',
 'place' => '890',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Magida',
 'region' => '223',
 'place' => '891',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kerasous',
 'region' => '224',
 'place' => '896',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Edessa',
 'region' => '225',
 'place' => '897',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amasia',
 'region' => '226',
 'place' => '901',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Romanoupolis',
 'region' => '227',
 'place' => '908',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Albistan',
 'region' => '228',
 'place' => '911',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tavium',
 'region' => '228',
 'place' => '912',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Poti',
 'region' => '229',
 'place' => '914',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Pitsunda',
 'region' => '229',
 'place' => '915',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Akhalkalaki',
 'region' => '230',
 'place' => '920',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Derbent',
 'region' => '231',
 'place' => '921',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baku',
 'region' => '231',
 'place' => '922',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mingecevir',
 'region' => '231',
 'place' => '923',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Balanjar',
 'region' => '231',
 'place' => '924',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yerevan',
 'region' => '232',
 'place' => '926',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghars',
 'region' => '232',
 'place' => '927',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Khoy',
 'region' => '233',
 'place' => '930',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ordubad',
 'region' => '233',
 'place' => '931',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tatvan',
 'region' => '234',
 'place' => '933',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Manzikert',
 'region' => '234',
 'place' => '934',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Van',
 'region' => '236',
 'place' => '941',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Archesh',
 'region' => '236',
 'place' => '943',
 'religion' => '4',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nishapur',
 'region' => '237',
 'place' => '945',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Beyhaq',
 'region' => '237',
 'place' => '946',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mashhad',
 'region' => '237',
 'place' => '947',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Konjikala',
 'region' => '237',
 'place' => '948',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kashmar',
 'region' => '238',
 'place' => '949',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Gonabad',
 'region' => '238',
 'place' => '950',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tabas',
 'region' => '238',
 'place' => '951',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Birjand',
 'region' => '238',
 'place' => '952',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kerman',
 'region' => '239',
 'place' => '953',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rafsanjan',
 'region' => '239',
 'place' => '955',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Sirjan',
 'region' => '239',
 'place' => '956',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bushire',
 'region' => '240',
 'place' => '958',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yasuj',
 'region' => '240',
 'place' => '960',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Yazd',
 'region' => '241',
 'place' => '963',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zavareh',
 'region' => '241',
 'place' => '964',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rhages',
 'region' => '242',
 'place' => '965',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kashan',
 'region' => '242',
 'place' => '966',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ghom',
 'region' => '242',
 'place' => '967',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Qazvin',
 'region' => '242',
 'place' => '968',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Astarabad',
 'region' => '243',
 'place' => '969',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amol',
 'region' => '243',
 'place' => '971',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rasht',
 'region' => '243',
 'place' => '972',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tabriz',
 'region' => '244',
 'place' => '973',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zanjan',
 'region' => '244',
 'place' => '975',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ardabil',
 'region' => '244',
 'place' => '976',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hamadan',
 'region' => '245',
 'place' => '977',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kermanshah',
 'region' => '245',
 'place' => '978',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hadjar',
 'region' => '246',
 'place' => '983',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hail',
 'region' => '246',
 'place' => '984',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Taif',
 'region' => '247',
 'place' => '986',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jeddah',
 'region' => '247',
 'place' => '987',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Medina',
 'region' => '247',
 'place' => '988',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Dedan',
 'region' => '248',
 'place' => '989',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tayma',
 'region' => '248',
 'place' => '991',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Maan',
 'region' => '248',
 'place' => '992',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Hebron',
 'region' => '249',
 'place' => '995',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Jaffa',
 'region' => '249',
 'place' => '996',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nazareth',
 'region' => '250',
 'place' => '998',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Nablus',
 'region' => '250',
 'place' => '999',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tyre',
 'region' => '250',
 'place' => '1000',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bosra',
 'region' => '251',
 'place' => '1001',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Amman',
 'region' => '251',
 'place' => '1002',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Irbid',
 'region' => '251',
 'place' => '1003',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Palmyra',
 'region' => '252',
 'place' => '1007',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Homs',
 'region' => '253',
 'place' => '1009',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Qusayr',
 'region' => '253',
 'place' => '1010',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Salamiyah',
 'region' => '253',
 'place' => '1011',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tripoli',
 'region' => '254',
 'place' => '1013',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tartous',
 'region' => '254',
 'place' => '1014',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Beirut',
 'region' => '254',
 'place' => '1015',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Alexandretta',
 'region' => '255',
 'place' => '1018',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Idlib',
 'region' => '255',
 'place' => '1019',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Aleppo',
 'region' => '256',
 'place' => '1021',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Bab',
 'region' => '256',
 'place' => '1023',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Safira',
 'region' => '256',
 'place' => '1024',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Raqqa',
 'region' => '257',
 'place' => '1025',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Rhesaina',
 'region' => '257',
 'place' => '1027',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Zor',
 'region' => '257',
 'place' => '1028',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Erbil',
 'region' => '258',
 'place' => '1029',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kirkuk',
 'region' => '258',
 'place' => '1031',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Telafer',
 'region' => '258',
 'place' => '1032',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Tikrit',
 'region' => '259',
 'place' => '1034',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Anbar',
 'region' => '259',
 'place' => '1035',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samarra',
 'region' => '259',
 'place' => '1036',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Samawah',
 'region' => '260',
 'place' => '1037',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Karbala',
 'region' => '260',
 'place' => '1038',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Kufah',
 'region' => '260',
 'place' => '1039',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[count] of Najaf',
 'region' => '260',
 'place' => '1040',
 'religion' => '5',
 'rank' => '7',
 'career' => 'fixed_nobility'
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

//castellans
DB::table('titles')->insert([
 'title_name' => '[castellan] of Oldenburg',
 'region' => '1',
 'place' => '2',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Meissen',
 'region' => '2',
 'place' => '5',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Merseburg',
 'region' => '3',
 'place' => '10',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bielefeld',
 'region' => '7',
 'place' => '26',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenwerfen',
 'region' => '9',
 'place' => '34',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schaunberg',
 'region' => '10',
 'place' => '38',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenwang',
 'region' => '11',
 'place' => '42',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenzollern',
 'region' => '13',
 'place' => '50',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hohenstaufen',
 'region' => '13',
 'place' => '52',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hagenau',
 'region' => '15',
 'place' => '57',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Karlstein',
 'region' => '16',
 'place' => '62',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pilsen',
 'region' => '16',
 'place' => '63',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brunn',
 'region' => '17',
 'place' => '65',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Luxembourg',
 'region' => '20',
 'place' => '78',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guelders',
 'region' => '21',
 'place' => '81',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Breda',
 'region' => '24',
 'place' => '94',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bruges',
 'region' => '25',
 'place' => '97',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ghent',
 'region' => '25',
 'place' => '98',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ypres',
 'region' => '25',
 'place' => '100',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Treffen',
 'region' => '26',
 'place' => '102',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Heunburg',
 'region' => '27',
 'place' => '106',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rohan',
 'region' => '28',
 'place' => '110',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bar',
 'region' => '30',
 'place' => '117',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Boulogne',
 'region' => '31',
 'place' => '122',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saint Omer',
 'region' => '31',
 'place' => '124',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caen',
 'region' => '32',
 'place' => '126',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bayeux',
 'region' => '32',
 'place' => '128',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Thierry',
 'region' => '33',
 'place' => '130',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chateaudun',
 'region' => '34',
 'place' => '134',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Blois',
 'region' => '34',
 'place' => '135',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vendome',
 'region' => '34',
 'place' => '136',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chinon',
 'region' => '35',
 'place' => '139',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gontier',
 'region' => '36',
 'place' => '142',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Laval',
 'region' => '36',
 'place' => '144',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chatellerault',
 'region' => '37',
 'place' => '146',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gueret',
 'region' => '39',
 'place' => '155',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vichy',
 'region' => '39',
 'place' => '156',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Clermont Ferrand',
 'region' => '40',
 'place' => '157',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Montbrison',
 'region' => '40',
 'place' => '158',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Arles',
 'region' => '41',
 'place' => '161',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carcasonne',
 'region' => '42',
 'place' => '166',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Narbonne',
 'region' => '42',
 'place' => '167',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cahors',
 'region' => '43',
 'place' => '170',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Limoges',
 'region' => '44',
 'place' => '174',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lyon',
 'region' => '45',
 'place' => '179',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dijon',
 'region' => '46',
 'place' => '181',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guildford',
 'region' => '47',
 'place' => '187',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dover',
 'region' => '48',
 'place' => '190',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bodmin',
 'region' => '50',
 'place' => '198',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gloucester',
 'region' => '53',
 'place' => '210',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cambridge',
 'region' => '54',
 'place' => '214',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Warwick',
 'region' => '55',
 'place' => '218',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Stafford',
 'region' => '55',
 'place' => '219',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Nottingham',
 'region' => '56',
 'place' => '222',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Boston',
 'region' => '56',
 'place' => '223',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Chester',
 'region' => '58',
 'place' => '229',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Shrewsbury',
 'region' => '58',
 'place' => '230',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carmarthen',
 'region' => '59',
 'place' => '234',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cardiff',
 'region' => '59',
 'place' => '235',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Hamar',
 'region' => '60',
 'place' => '239',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bergen',
 'region' => '61',
 'place' => '241',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Holm',
 'region' => '61',
 'place' => '242',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalmar',
 'region' => '66',
 'place' => '262',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dalaborg',
 'region' => '67',
 'place' => '266',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Wenden',
 'region' => '68',
 'place' => '270',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Elbing',
 'region' => '70',
 'place' => '278',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Danzig',
 'region' => '70',
 'place' => '279',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Reval',
 'region' => '72',
 'place' => '285',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunbar',
 'region' => '73',
 'place' => '291',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bamburgh',
 'region' => '74',
 'place' => '293',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alnwick',
 'region' => '74',
 'place' => '294',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dunaverty',
 'region' => '77',
 'place' => '307',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Nairn',
 'region' => '79',
 'place' => '314',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dundee',
 'region' => '80',
 'place' => '317',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tara',
 'region' => '82',
 'place' => '326',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Millmount',
 'region' => '82',
 'place' => '328',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Armagh',
 'region' => '83',
 'place' => '329',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cashel',
 'region' => '85',
 'place' => '337',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Galway',
 'region' => '86',
 'place' => '341',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mayo',
 'region' => '86',
 'place' => '342',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Molina de Aragon',
 'region' => '90',
 'place' => '358',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ripoll',
 'region' => '91',
 'place' => '362',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Robla',
 'region' => '96',
 'place' => '382',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Segovia',
 'region' => '98',
 'place' => '391',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sintra',
 'region' => '101',
 'place' => '402',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Porto',
 'region' => '102',
 'place' => '405',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guimaraes',
 'region' => '102',
 'place' => '406',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Braganca',
 'region' => '103',
 'place' => '409',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sanabria',
 'region' => '103',
 'place' => '410',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pombal',
 'region' => '104',
 'place' => '416',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Jaen',
 'region' => '107',
 'place' => '427',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Osuna',
 'region' => '108',
 'place' => '430',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cadiz',
 'region' => '108',
 'place' => '431',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Merida',
 'region' => '109',
 'place' => '435',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Olivenza',
 'region' => '109',
 'place' => '436',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Almaden',
 'region' => '110',
 'place' => '438',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Baza',
 'region' => '112',
 'place' => '446',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lorca',
 'region' => '112',
 'place' => '448',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cartagena',
 'region' => '113',
 'place' => '452',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Milan',
 'region' => '115',
 'place' => '457',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brescia',
 'region' => '115',
 'place' => '458',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Verona',
 'region' => '116',
 'place' => '461',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Padua',
 'region' => '116',
 'place' => '462',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mantua',
 'region' => '116',
 'place' => '464',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Modena',
 'region' => '120',
 'place' => '477',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ferrara',
 'region' => '120',
 'place' => '479',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Carrara',
 'region' => '126',
 'place' => '502',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lucca',
 'region' => '126',
 'place' => '503',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Cagliari',
 'region' => '132',
 'place' => '525',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Iglesias',
 'region' => '132',
 'place' => '528',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Messina',
 'region' => '134',
 'place' => '533',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rabat',
 'region' => '137',
 'place' => '546',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Benhaddou',
 'region' => '139',
 'place' => '556',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Medenine',
 'region' => '152',
 'place' => '606',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Glogau',
 'region' => '161',
 'place' => '642',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Teczyn',
 'region' => '162',
 'place' => '646',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tarnau',
 'region' => '162',
 'place' => '647',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gnesen',
 'region' => '163',
 'place' => '649',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Posen',
 'region' => '163',
 'place' => '650',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kalisz',
 'region' => '163',
 'place' => '652',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Warsaw',
 'region' => '164',
 'place' => '654',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Radomir',
 'region' => '164',
 'place' => '656',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Brest',
 'region' => '165',
 'place' => '657',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tracken',
 'region' => '166',
 'place' => '661',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Minsk',
 'region' => '166',
 'place' => '664',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Trsat',
 'region' => '167',
 'place' => '668',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zadar',
 'region' => '168',
 'place' => '670',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Leua',
 'region' => '172',
 'place' => '688',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Diosgyor',
 'region' => '173',
 'place' => '690',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schaasburg',
 'region' => '176',
 'place' => '702',
 'religion' => '1',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Drobeta',
 'region' => '177',
 'place' => '706',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Targoviste',
 'region' => '178',
 'place' => '709',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Torzburg',
 'region' => '178',
 'place' => '711',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kronstadt',
 'region' => '178',
 'place' => '712',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pleven',
 'region' => '181',
 'place' => '722',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pliska',
 'region' => '182',
 'place' => '726',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Tarnovo',
 'region' => '182',
 'place' => '728',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zenica',
 'region' => '183',
 'place' => '730',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Visegrad',
 'region' => '183',
 'place' => '732',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kumanovo',
 'region' => '186',
 'place' => '742',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Zvecan',
 'region' => '187',
 'place' => '746',
 'religion' => '2',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Samkarsh',
 'region' => '188',
 'place' => '750',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lviv',
 'region' => '191',
 'place' => '763',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Terebovlia',
 'region' => '191',
 'place' => '764',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gomel',
 'region' => '193',
 'place' => '771',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vitebsk',
 'region' => '194',
 'place' => '775',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bryansk',
 'region' => '195',
 'place' => '778',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rusa',
 'region' => '199',
 'place' => '794',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bolgar',
 'region' => '200',
 'place' => '797',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Vologda',
 'region' => '202',
 'place' => '805',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Novosil',
 'region' => '203',
 'place' => '810',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kursk',
 'region' => '204',
 'place' => '815',
 'religion' => '3',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Khumar',
 'region' => '205',
 'place' => '820',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bitola',
 'region' => '213',
 'place' => '850',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Miletus',
 'region' => '216',
 'place' => '862',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Rhodos',
 'region' => '219',
 'place' => '874',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bayberdon',
 'region' => '224',
 'place' => '894',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Surami',
 'region' => '230',
 'place' => '918',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Gori',
 'region' => '230',
 'place' => '919',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Baghaberd',
 'region' => '233',
 'place' => '932',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Saird',
 'region' => '235',
 'place' => '938',
 'religion' => '4',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Buraidah',
 'region' => '246',
 'place' => '982',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Eilat',
 'region' => '248',
 'place' => '990',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Ascalon',
 'region' => '249',
 'place' => '994',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Acre',
 'region' => '250',
 'place' => '997',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Margat',
 'region' => '254',
 'place' => '1016',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Manbij',
 'region' => '256',
 'place' => '1022',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
]);

DB::table('titles')->insert([
 'title_name' => '[castellan] of Mosul',
 'region' => '258',
 'place' => '1030',
 'religion' => '5',
 'rank' => '6',
 'career' => 'fixed_nobility'
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

//barons
DB::table('titles')->insert([
 'title_name' => '[baron] of Chemnitz',
 'region' => '2',
 'place' => '8',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Greifenberg',
 'region' => '6',
 'place' => '22',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Groningen',
 'region' => '23',
 'place' => '91',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Neufchateau',
 'region' => '30',
 'place' => '118',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Loches',
 'region' => '35',
 'place' => '140',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Windsor',
 'region' => '47',
 'place' => '186',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Westminster',
 'region' => '47',
 'place' => '188',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Canterbury',
 'region' => '48',
 'place' => '189',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Southampton',
 'region' => '49',
 'place' => '194',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tamworth',
 'region' => '55',
 'place' => '217',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harlech',
 'region' => '57',
 'place' => '226',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Conwy',
 'region' => '57',
 'place' => '228',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Caerwent',
 'region' => '59',
 'place' => '233',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kalundborg',
 'region' => '62',
 'place' => '246',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Linlithgow',
 'region' => '73',
 'place' => '290',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Berwick',
 'region' => '74',
 'place' => '295',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dumbarton',
 'region' => '75',
 'place' => '297',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Glasgow',
 'region' => '75',
 'place' => '299',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Caerloverock',
 'region' => '76',
 'place' => '302',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dunadd',
 'region' => '77',
 'place' => '305',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Forfar',
 'region' => '80',
 'place' => '318',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dingwall',
 'region' => '81',
 'place' => '321',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Helmsdale',
 'region' => '81',
 'place' => '322',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Carrickfergus',
 'region' => '83',
 'place' => '330',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Derry',
 'region' => '83',
 'place' => '331',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Waterford',
 'region' => '84',
 'place' => '335',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Achonry',
 'region' => '86',
 'place' => '344',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Olite',
 'region' => '87',
 'place' => '346',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Barbens',
 'region' => '92',
 'place' => '366',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sagunto',
 'region' => '93',
 'place' => '370',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Guadalest',
 'region' => '94',
 'place' => '374',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Pollenca',
 'region' => '95',
 'place' => '378',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Mirandela',
 'region' => '103',
 'place' => '412',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Leiria',
 'region' => '104',
 'place' => '415',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcacer',
 'region' => '105',
 'place' => '418',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alvor',
 'region' => '106',
 'place' => '423',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Andujar',
 'region' => '107',
 'place' => '426',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zafra',
 'region' => '109',
 'place' => '434',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Consuegra',
 'region' => '110',
 'place' => '439',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcaudete',
 'region' => '111',
 'place' => '442',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Guadix',
 'region' => '111',
 'place' => '444',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Motril',
 'region' => '112',
 'place' => '447',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alcoy',
 'region' => '113',
 'place' => '450',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Marbella',
 'region' => '114',
 'place' => '455',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Frascati',
 'region' => '125',
 'place' => '498',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bari',
 'region' => '128',
 'place' => '510',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Monteverde',
 'region' => '130',
 'place' => '518',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Cefalu',
 'region' => '133',
 'place' => '531',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Taormina',
 'region' => '134',
 'place' => '534',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Catania',
 'region' => '134',
 'place' => '535',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Troina',
 'region' => '134',
 'place' => '536',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sale',
 'region' => '137',
 'place' => '547',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sefrou',
 'region' => '138',
 'place' => '550',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rachidiya',
 'region' => '141',
 'place' => '564',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oujda',
 'region' => '142',
 'place' => '566',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Taourirt',
 'region' => '142',
 'place' => '568',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Laghouat',
 'region' => '144',
 'place' => '574',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Khaled',
 'region' => '145',
 'place' => '577',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Medea',
 'region' => '146',
 'place' => '582',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tedelles',
 'region' => '146',
 'place' => '583',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Achir',
 'region' => '146',
 'place' => '584',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bejaia',
 'region' => '147',
 'place' => '585',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jijel',
 'region' => '147',
 'place' => '586',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Eulma',
 'region' => '147',
 'place' => '588',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Annaba',
 'region' => '148',
 'place' => '589',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tabarka',
 'region' => '148',
 'place' => '590',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jendouba',
 'region' => '148',
 'place' => '591',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kaf',
 'region' => '148',
 'place' => '592',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zaghouan',
 'region' => '149',
 'place' => '594',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Mahdia',
 'region' => '150',
 'place' => '600',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tozeur',
 'region' => '151',
 'place' => '604',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tamanrasset',
 'region' => '152',
 'place' => '607',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zliten',
 'region' => '153',
 'place' => '610',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zuwara',
 'region' => '153',
 'place' => '612',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sabha',
 'region' => '154',
 'place' => '614',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zouila',
 'region' => '154',
 'place' => '615',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Qatrun',
 'region' => '154',
 'place' => '616',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Awjila',
 'region' => '155',
 'place' => '619',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Marada',
 'region' => '155',
 'place' => '620',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Derna',
 'region' => '156',
 'place' => '622',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tobruk',
 'region' => '156',
 'place' => '623',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ajdabiya',
 'region' => '156',
 'place' => '624',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Siwa',
 'region' => '159',
 'place' => '634',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kharga',
 'region' => '160',
 'place' => '638',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Goroden',
 'region' => '165',
 'place' => '658',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kobryn',
 'region' => '165',
 'place' => '659',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Wolkowysk',
 'region' => '165',
 'place' => '660',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Biograd',
 'region' => '168',
 'place' => '672',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sopron',
 'region' => '170',
 'place' => '680',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Eger',
 'region' => '173',
 'place' => '689',
 'religion' => '1',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bucharest',
 'region' => '178',
 'place' => '710',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harsova',
 'region' => '179',
 'place' => '714',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tulcea',
 'region' => '179',
 'place' => '715',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Calarasi',
 'region' => '179',
 'place' => '716',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Orhei',
 'region' => '180',
 'place' => '718',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Chisinau',
 'region' => '180',
 'place' => '720',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Stip',
 'region' => '181',
 'place' => '723',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sebrenik',
 'region' => '183',
 'place' => '731',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Valjevo',
 'region' => '184',
 'place' => '735',
 'religion' => '2',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oleshia',
 'region' => '188',
 'place' => '752',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kaniv',
 'region' => '189',
 'place' => '755',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Cherkasy',
 'region' => '189',
 'place' => '756',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Borispyl',
 'region' => '190',
 'place' => '758',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Yuriev',
 'region' => '190',
 'place' => '759',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Pinesk',
 'region' => '192',
 'place' => '766',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Korosten',
 'region' => '192',
 'place' => '768',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lyubech',
 'region' => '193',
 'place' => '770',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Orsha',
 'region' => '194',
 'place' => '774',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Barysaw',
 'region' => '194',
 'place' => '776',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Vyazma',
 'region' => '195',
 'place' => '779',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Roslav',
 'region' => '195',
 'place' => '780',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kolomna',
 'region' => '196',
 'place' => '782',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kasimov',
 'region' => '196',
 'place' => '783',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Tula',
 'region' => '196',
 'place' => '784',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Zvenigorod',
 'region' => '197',
 'place' => '787',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Schlisselburg',
 'region' => '199',
 'place' => '796',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bilyar',
 'region' => '200',
 'place' => '798',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kazan',
 'region' => '200',
 'place' => '799',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Suzdal',
 'region' => '201',
 'place' => '803',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rybinsk',
 'region' => '202',
 'place' => '806',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Oryol',
 'region' => '203',
 'place' => '809',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kromy',
 'region' => '203',
 'place' => '811',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lipetsk',
 'region' => '203',
 'place' => '812',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sevsk',
 'region' => '204',
 'place' => '813',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Rylsk',
 'region' => '204',
 'place' => '814',
 'religion' => '3',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Redosto',
 'region' => '207',
 'place' => '826',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Corlu',
 'region' => '207',
 'place' => '828',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Stratonicea',
 'region' => '208',
 'place' => '830',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lamia',
 'region' => '209',
 'place' => '834',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Modon',
 'region' => '210',
 'place' => '838',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Glarentza',
 'region' => '210',
 'place' => '840',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Gardiki',
 'region' => '211',
 'place' => '842',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ohrid',
 'region' => '212',
 'place' => '847',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Prilep',
 'region' => '213',
 'place' => '851',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Lemnos',
 'region' => '214',
 'place' => '854',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Chania',
 'region' => '214',
 'place' => '855',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Patros',
 'region' => '214',
 'place' => '856',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Samos',
 'region' => '215',
 'place' => '858',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kios',
 'region' => '217',
 'place' => '866',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ousakeion',
 'region' => '218',
 'place' => '872',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Makre',
 'region' => '219',
 'place' => '876',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Gordion',
 'region' => '220',
 'place' => '878',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Dorylaeum',
 'region' => '220',
 'place' => '880',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Nicosia',
 'region' => '222',
 'place' => '887',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Muskara',
 'region' => '223',
 'place' => '892',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Riza',
 'region' => '224',
 'place' => '895',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Semsur',
 'region' => '225',
 'place' => '898',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Amouda',
 'region' => '225',
 'place' => '899',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Corum',
 'region' => '226',
 'place' => '903',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Takat',
 'region' => '226',
 'place' => '904',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Harput',
 'region' => '227',
 'place' => '906',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Berkri',
 'region' => '236',
 'place' => '942',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Ostan',
 'region' => '236',
 'place' => '944',
 'religion' => '4',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Bam',
 'region' => '239',
 'place' => '954',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Alamut',
 'region' => '243',
 'place' => '970',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Sofian',
 'region' => '244',
 'place' => '974',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Kasr al Gharbi',
 'region' => '252',
 'place' => '1006',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Hama',
 'region' => '253',
 'place' => '1012',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
]);

DB::table('titles')->insert([
 'title_name' => '[baron] of Jabar',
 'region' => '257',
 'place' => '1026',
 'religion' => '5',
 'rank' => '5',
 'career' => 'fixed_barony'
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

//lords
DB::table('titles')->insert([
 'title_name' => '[lord] of Rostock',
 'region' => '4',
 'place' => '14',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zlin',
 'region' => '17',
 'place' => '66',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dorestad',
 'region' => '22',
 'place' => '85',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Gouda',
 'region' => '22',
 'place' => '86',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Sneek',
 'region' => '23',
 'place' => '89',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dokkum',
 'region' => '23',
 'place' => '92',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Plessis',
 'region' => '35',
 'place' => '138',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Montmorillon',
 'region' => '37',
 'place' => '147',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vauclair',
 'region' => '37',
 'place' => '148',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Chateauroux',
 'region' => '38',
 'place' => '150',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Montlucon',
 'region' => '39',
 'place' => '154',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Abergavenny',
 'region' => '59',
 'place' => '236',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Trelleborg',
 'region' => '63',
 'place' => '250',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Walk',
 'region' => '68',
 'place' => '271',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dunaburg',
 'region' => '68',
 'place' => '272',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Libau',
 'region' => '69',
 'place' => '274',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Goldingen',
 'region' => '69',
 'place' => '275',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Talsen',
 'region' => '69',
 'place' => '276',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Memelburg',
 'region' => '71',
 'place' => '281',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Saule',
 'region' => '71',
 'place' => '282',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tilsit',
 'region' => '71',
 'place' => '283',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Georgenburg',
 'region' => '71',
 'place' => '284',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Weissenstein',
 'region' => '72',
 'place' => '286',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dunollie',
 'region' => '77',
 'place' => '306',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Roscrea',
 'region' => '85',
 'place' => '340',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Durango',
 'region' => '88',
 'place' => '350',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ponferrada',
 'region' => '100',
 'place' => '400',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Verin',
 'region' => '103',
 'place' => '411',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tomar',
 'region' => '104',
 'place' => '414',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Avis',
 'region' => '105',
 'place' => '420',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Paderne',
 'region' => '106',
 'place' => '422',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ecija',
 'region' => '107',
 'place' => '428',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Talavera',
 'region' => '110',
 'place' => '440',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Loja',
 'region' => '114',
 'place' => '454',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ravenna',
 'region' => '119',
 'place' => '473',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rimini',
 'region' => '119',
 'place' => '476',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Aquila',
 'region' => '124',
 'place' => '494',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rossano',
 'region' => '129',
 'place' => '514',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tropea',
 'region' => '129',
 'place' => '515',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Caltagirone',
 'region' => '135',
 'place' => '538',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Menia',
 'region' => '144',
 'place' => '576',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Ghiranghedi',
 'region' => '155',
 'place' => '618',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Natrun',
 'region' => '158',
 'place' => '632',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Anba Boula',
 'region' => '159',
 'place' => '636',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zinaiqa',
 'region' => '160',
 'place' => '640',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rovigno',
 'region' => '167',
 'place' => '666',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kassow',
 'region' => '173',
 'place' => '692',
 'religion' => '1',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Tismana',
 'region' => '177',
 'place' => '708',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rila',
 'region' => '181',
 'place' => '724',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Rasa',
 'region' => '184',
 'place' => '734',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukovo',
 'region' => '184',
 'place' => '736',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukovo',
 'region' => '185',
 'place' => '738',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Zica',
 'region' => '185',
 'place' => '740',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vitina',
 'region' => '186',
 'place' => '744',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Pec',
 'region' => '187',
 'place' => '747',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Berane',
 'region' => '187',
 'place' => '748',
 'religion' => '2',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Monastyrski',
 'region' => '188',
 'place' => '749',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Korsun',
 'region' => '189',
 'place' => '754',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Pechersk',
 'region' => '190',
 'place' => '760',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kolomyia',
 'region' => '191',
 'place' => '762',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Mazyr',
 'region' => '193',
 'place' => '772',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Sergiev',
 'region' => '197',
 'place' => '786',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Simonov',
 'region' => '197',
 'place' => '788',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Porkhov',
 'region' => '198',
 'place' => '790',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Vyazniki',
 'region' => '201',
 'place' => '802',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Cherepovets',
 'region' => '202',
 'place' => '807',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kirillov',
 'region' => '202',
 'place' => '808',
 'religion' => '3',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Hilandar',
 'region' => '208',
 'place' => '832',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Amfissa',
 'region' => '211',
 'place' => '844',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Saint Jovan',
 'region' => '212',
 'place' => '848',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Chios',
 'region' => '215',
 'place' => '859',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Patmos',
 'region' => '215',
 'place' => '860',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Antep',
 'region' => '225',
 'place' => '900',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Kirants',
 'region' => '232',
 'place' => '928',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Arakelots',
 'region' => '234',
 'place' => '936',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Nisibis',
 'region' => '235',
 'place' => '940',
 'religion' => '4',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Dezgord',
 'region' => '241',
 'place' => '962',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Falak',
 'region' => '245',
 'place' => '979',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Bukan',
 'region' => '245',
 'place' => '980',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Salkhad',
 'region' => '251',
 'place' => '1004',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);

DB::table('titles')->insert([
 'title_name' => '[lord] of Nabek',
 'region' => '252',
 'place' => '1008',
 'religion' => '5',
 'rank' => '4',
 'career' => 'fixed_lordship'
]);		
		
		
    }
}
