<?php

use Illuminate\Database\Seeder;

class ChurchQuarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //parishes
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oldenburg',
'quarter_category' => '18',
'place' => '2',
'region' => '1'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hamburg',
'quarter_category' => '18',
'place' => '3',
'region' => '1'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Corvey',
'quarter_category' => '18',
'place' => '4',
'region' => '1'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chemnitz',
'quarter_category' => '18',
'place' => '8',
'region' => '2'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gernrode',
'quarter_category' => '18',
'place' => '12',
'region' => '3'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rostock',
'quarter_category' => '18',
'place' => '14',
'region' => '4'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Broda',
'quarter_category' => '18',
'place' => '16',
'region' => '4'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Salzwedel',
'quarter_category' => '18',
'place' => '18',
'region' => '5'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lindow',
'quarter_category' => '18',
'place' => '20',
'region' => '5'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stettin',
'quarter_category' => '18',
'place' => '21',
'region' => '6'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Greifenberg',
'quarter_category' => '18',
'place' => '22',
'region' => '6'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Greifswald',
'quarter_category' => '18',
'place' => '24',
'region' => '6'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bielefeld',
'quarter_category' => '18',
'place' => '26',
'region' => '7'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nuremberg',
'quarter_category' => '18',
'place' => '32',
'region' => '8'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hohenwerfen',
'quarter_category' => '18',
'place' => '34',
'region' => '9'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hallstat',
'quarter_category' => '18',
'place' => '35',
'region' => '9'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Berchtesgaden',
'quarter_category' => '18',
'place' => '36',
'region' => '9'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Schaunberg',
'quarter_category' => '18',
'place' => '38',
'region' => '10'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pressburg',
'quarter_category' => '18',
'place' => '40',
'region' => '10'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Graz',
'quarter_category' => '18',
'place' => '41',
'region' => '11'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hohenwang',
'quarter_category' => '18',
'place' => '42',
'region' => '11'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Styraburg',
'quarter_category' => '18',
'place' => '43',
'region' => '11'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Seckau',
'quarter_category' => '18',
'place' => '44',
'region' => '11'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Innsbruck',
'quarter_category' => '18',
'place' => '45',
'region' => '12'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bozen',
'quarter_category' => '18',
'place' => '46',
'region' => '12'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ulm',
'quarter_category' => '18',
'place' => '49',
'region' => '13'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hohenzollern',
'quarter_category' => '18',
'place' => '50',
'region' => '13'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Freiburg',
'quarter_category' => '18',
'place' => '51',
'region' => '13'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hohenstaufen',
'quarter_category' => '18',
'place' => '52',
'region' => '13'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bern',
'quarter_category' => '18',
'place' => '53',
'region' => '14'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zurich',
'quarter_category' => '18',
'place' => '54',
'region' => '14'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sankt Gallen',
'quarter_category' => '18',
'place' => '56',
'region' => '14'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hagenau',
'quarter_category' => '18',
'place' => '57',
'region' => '15'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Colmar',
'quarter_category' => '18',
'place' => '58',
'region' => '15'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Wissembourg',
'quarter_category' => '18',
'place' => '60',
'region' => '15'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Karlstein',
'quarter_category' => '18',
'place' => '62',
'region' => '16'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pilsen',
'quarter_category' => '18',
'place' => '63',
'region' => '16'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Plass',
'quarter_category' => '18',
'place' => '64',
'region' => '16'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Brunn',
'quarter_category' => '18',
'place' => '65',
'region' => '17'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zlin',
'quarter_category' => '18',
'place' => '66',
'region' => '17'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Trebitz',
'quarter_category' => '18',
'place' => '68',
'region' => '17'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Frankfurt',
'quarter_category' => '18',
'place' => '71',
'region' => '18'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Fulda',
'quarter_category' => '18',
'place' => '72',
'region' => '18'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Aachen',
'quarter_category' => '18',
'place' => '74',
'region' => '19'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stavelot',
'quarter_category' => '18',
'place' => '76',
'region' => '19'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Luxembourg',
'quarter_category' => '18',
'place' => '78',
'region' => '20'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pruem',
'quarter_category' => '18',
'place' => '80',
'region' => '20'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Guelders',
'quarter_category' => '18',
'place' => '81',
'region' => '21'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zutphen',
'quarter_category' => '18',
'place' => '82',
'region' => '21'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nimeguen',
'quarter_category' => '18',
'place' => '83',
'region' => '21'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Deventer',
'quarter_category' => '18',
'place' => '84',
'region' => '21'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dorestad',
'quarter_category' => '18',
'place' => '85',
'region' => '22'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gouda',
'quarter_category' => '18',
'place' => '86',
'region' => '22'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amsterdam',
'quarter_category' => '18',
'place' => '88',
'region' => '22'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sneek',
'quarter_category' => '18',
'place' => '89',
'region' => '23'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Emden',
'quarter_category' => '18',
'place' => '90',
'region' => '23'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Groningen',
'quarter_category' => '18',
'place' => '91',
'region' => '23'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dokkum',
'quarter_category' => '18',
'place' => '92',
'region' => '23'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Louvain',
'quarter_category' => '18',
'place' => '93',
'region' => '24'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Breda',
'quarter_category' => '18',
'place' => '94',
'region' => '24'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Antwerp',
'quarter_category' => '18',
'place' => '95',
'region' => '24'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Thorn',
'quarter_category' => '18',
'place' => '96',
'region' => '24'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bruges',
'quarter_category' => '18',
'place' => '97',
'region' => '25'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ghent',
'quarter_category' => '18',
'place' => '98',
'region' => '25'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ypres',
'quarter_category' => '18',
'place' => '100',
'region' => '25'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Treffen',
'quarter_category' => '18',
'place' => '102',
'region' => '26'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Moosburg',
'quarter_category' => '18',
'place' => '104',
'region' => '26'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Krainburg',
'quarter_category' => '18',
'place' => '105',
'region' => '27'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Heunburg',
'quarter_category' => '18',
'place' => '106',
'region' => '27'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sittich',
'quarter_category' => '18',
'place' => '108',
'region' => '27'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vannes',
'quarter_category' => '18',
'place' => '109',
'region' => '28'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rohan',
'quarter_category' => '18',
'place' => '110',
'region' => '28'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Redon',
'quarter_category' => '18',
'place' => '112',
'region' => '28'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saint Denis',
'quarter_category' => '18',
'place' => '116',
'region' => '29'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bar',
'quarter_category' => '18',
'place' => '117',
'region' => '30'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Neufchateau',
'quarter_category' => '18',
'place' => '118',
'region' => '30'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amiens',
'quarter_category' => '18',
'place' => '121',
'region' => '31'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Boulogne',
'quarter_category' => '18',
'place' => '122',
'region' => '31'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saint Omer',
'quarter_category' => '18',
'place' => '124',
'region' => '31'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Caen',
'quarter_category' => '18',
'place' => '126',
'region' => '32'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Thierry',
'quarter_category' => '18',
'place' => '130',
'region' => '33'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Clairvaux',
'quarter_category' => '18',
'place' => '132',
'region' => '33'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chateaudun',
'quarter_category' => '18',
'place' => '134',
'region' => '34'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Blois',
'quarter_category' => '18',
'place' => '135',
'region' => '34'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vendome',
'quarter_category' => '18',
'place' => '136',
'region' => '34'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Plessis',
'quarter_category' => '18',
'place' => '138',
'region' => '35'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chinon',
'quarter_category' => '18',
'place' => '139',
'region' => '35'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Loches',
'quarter_category' => '18',
'place' => '140',
'region' => '35'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gontier',
'quarter_category' => '18',
'place' => '142',
'region' => '36'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Laval',
'quarter_category' => '18',
'place' => '144',
'region' => '36'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chatellerault',
'quarter_category' => '18',
'place' => '146',
'region' => '37'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Montmorillon',
'quarter_category' => '18',
'place' => '147',
'region' => '37'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vauclair',
'quarter_category' => '18',
'place' => '148',
'region' => '37'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chateauroux',
'quarter_category' => '18',
'place' => '150',
'region' => '38'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nevers',
'quarter_category' => '18',
'place' => '151',
'region' => '38'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vezelay',
'quarter_category' => '18',
'place' => '152',
'region' => '38'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Moulins',
'quarter_category' => '18',
'place' => '153',
'region' => '39'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Montlucon',
'quarter_category' => '18',
'place' => '154',
'region' => '39'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gueret',
'quarter_category' => '18',
'place' => '155',
'region' => '39'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vichy',
'quarter_category' => '18',
'place' => '156',
'region' => '39'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Montbrison',
'quarter_category' => '18',
'place' => '158',
'region' => '40'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Issoire',
'quarter_category' => '18',
'place' => '160',
'region' => '40'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Arles',
'quarter_category' => '18',
'place' => '161',
'region' => '41'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Aix',
'quarter_category' => '18',
'place' => '162',
'region' => '41'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saint Benoit',
'quarter_category' => '18',
'place' => '168',
'region' => '42'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cahors',
'quarter_category' => '18',
'place' => '170',
'region' => '43'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Auch',
'quarter_category' => '18',
'place' => '171',
'region' => '43'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Montauban',
'quarter_category' => '18',
'place' => '172',
'region' => '43'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tulle',
'quarter_category' => '18',
'place' => '176',
'region' => '44'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Citeaux',
'quarter_category' => '18',
'place' => '184',
'region' => '46'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Windsor',
'quarter_category' => '18',
'place' => '186',
'region' => '47'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Guildford',
'quarter_category' => '18',
'place' => '187',
'region' => '47'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Westminster',
'quarter_category' => '18',
'place' => '188',
'region' => '47'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dover',
'quarter_category' => '18',
'place' => '190',
'region' => '48'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ashford',
'quarter_category' => '18',
'place' => '191',
'region' => '48'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Maidstone',
'quarter_category' => '18',
'place' => '192',
'region' => '48'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Winchester',
'quarter_category' => '18',
'place' => '193',
'region' => '49'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Southampton',
'quarter_category' => '18',
'place' => '194',
'region' => '49'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Wimborne',
'quarter_category' => '18',
'place' => '196',
'region' => '49'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Truro',
'quarter_category' => '18',
'place' => '197',
'region' => '50'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bodmin',
'quarter_category' => '18',
'place' => '198',
'region' => '50'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Madron',
'quarter_category' => '18',
'place' => '200',
'region' => '50'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ipswich',
'quarter_category' => '18',
'place' => '202',
'region' => '51'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Croxton',
'quarter_category' => '18',
'place' => '204',
'region' => '51'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Scarborough',
'quarter_category' => '18',
'place' => '207',
'region' => '52'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lancaster',
'quarter_category' => '18',
'place' => '208',
'region' => '52'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gloucester',
'quarter_category' => '18',
'place' => '210',
'region' => '53'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bristol',
'quarter_category' => '18',
'place' => '211',
'region' => '53'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cirencester',
'quarter_category' => '18',
'place' => '212',
'region' => '53'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cambridge',
'quarter_category' => '18',
'place' => '214',
'region' => '54'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oxford',
'quarter_category' => '18',
'place' => '215',
'region' => '54'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saint Albans',
'quarter_category' => '18',
'place' => '216',
'region' => '54'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tamworth',
'quarter_category' => '18',
'place' => '217',
'region' => '55'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Warwick',
'quarter_category' => '18',
'place' => '218',
'region' => '55'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stafford',
'quarter_category' => '18',
'place' => '219',
'region' => '55'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Leicester',
'quarter_category' => '18',
'place' => '220',
'region' => '55'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lincoln',
'quarter_category' => '18',
'place' => '221',
'region' => '56'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nottingham',
'quarter_category' => '18',
'place' => '222',
'region' => '56'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Boston',
'quarter_category' => '18',
'place' => '223',
'region' => '56'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stamford',
'quarter_category' => '18',
'place' => '224',
'region' => '56'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Caernarfon',
'quarter_category' => '18',
'place' => '225',
'region' => '57'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Harlech',
'quarter_category' => '18',
'place' => '226',
'region' => '57'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Conwy',
'quarter_category' => '18',
'place' => '228',
'region' => '57'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chester',
'quarter_category' => '18',
'place' => '229',
'region' => '58'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Shrewsbury',
'quarter_category' => '18',
'place' => '230',
'region' => '58'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Llanllugan',
'quarter_category' => '18',
'place' => '232',
'region' => '58'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Caerwent',
'quarter_category' => '18',
'place' => '233',
'region' => '59'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Carmarthen',
'quarter_category' => '18',
'place' => '234',
'region' => '59'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Abergavenny',
'quarter_category' => '18',
'place' => '236',
'region' => '59'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tonsborg',
'quarter_category' => '18',
'place' => '238',
'region' => '60'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gimsoy',
'quarter_category' => '18',
'place' => '240',
'region' => '60'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Holm',
'quarter_category' => '18',
'place' => '242',
'region' => '61'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Halsnoy',
'quarter_category' => '18',
'place' => '244',
'region' => '61'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Copenhagen',
'quarter_category' => '18',
'place' => '245',
'region' => '62'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kalundborg',
'quarter_category' => '18',
'place' => '246',
'region' => '62'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Esrum',
'quarter_category' => '18',
'place' => '248',
'region' => '62'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Trelleborg',
'quarter_category' => '18',
'place' => '250',
'region' => '63'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Halmstad',
'quarter_category' => '18',
'place' => '251',
'region' => '63'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Herrevad',
'quarter_category' => '18',
'place' => '252',
'region' => '63'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Aalborg',
'quarter_category' => '18',
'place' => '254',
'region' => '64'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Essenbaek',
'quarter_category' => '18',
'place' => '256',
'region' => '64'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stockholm',
'quarter_category' => '18',
'place' => '257',
'region' => '65'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Eskilstuna',
'quarter_category' => '18',
'place' => '260',
'region' => '65'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Visby',
'quarter_category' => '18',
'place' => '261',
'region' => '66'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kalmar',
'quarter_category' => '18',
'place' => '262',
'region' => '66'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vaxjo',
'quarter_category' => '18',
'place' => '263',
'region' => '66'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nydala',
'quarter_category' => '18',
'place' => '264',
'region' => '66'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dalaborg',
'quarter_category' => '18',
'place' => '266',
'region' => '67'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jonkoping',
'quarter_category' => '18',
'place' => '267',
'region' => '67'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vadstena',
'quarter_category' => '18',
'place' => '268',
'region' => '67'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Wenden',
'quarter_category' => '18',
'place' => '270',
'region' => '68'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Walk',
'quarter_category' => '18',
'place' => '271',
'region' => '68'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunaburg',
'quarter_category' => '18',
'place' => '272',
'region' => '68'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Libau',
'quarter_category' => '18',
'place' => '274',
'region' => '69'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Goldingen',
'quarter_category' => '18',
'place' => '275',
'region' => '69'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Talsen',
'quarter_category' => '18',
'place' => '276',
'region' => '69'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Marienburg',
'quarter_category' => '18',
'place' => '277',
'region' => '70'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Elbing',
'quarter_category' => '18',
'place' => '278',
'region' => '70'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Danzig',
'quarter_category' => '18',
'place' => '279',
'region' => '70'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Memelburg',
'quarter_category' => '18',
'place' => '281',
'region' => '71'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saule',
'quarter_category' => '18',
'place' => '282',
'region' => '71'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tilsit',
'quarter_category' => '18',
'place' => '283',
'region' => '71'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Georgenburg',
'quarter_category' => '18',
'place' => '284',
'region' => '71'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Weissenstein',
'quarter_category' => '18',
'place' => '286',
'region' => '72'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Linlithgow',
'quarter_category' => '18',
'place' => '290',
'region' => '73'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunbar',
'quarter_category' => '18',
'place' => '291',
'region' => '73'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Haddington',
'quarter_category' => '18',
'place' => '292',
'region' => '73'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bamburgh',
'quarter_category' => '18',
'place' => '293',
'region' => '74'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alnwick',
'quarter_category' => '18',
'place' => '294',
'region' => '74'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Berwick',
'quarter_category' => '18',
'place' => '295',
'region' => '74'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jedburgh',
'quarter_category' => '18',
'place' => '296',
'region' => '74'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dumbarton',
'quarter_category' => '18',
'place' => '297',
'region' => '75'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kilmarnock',
'quarter_category' => '18',
'place' => '298',
'region' => '75'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ayr',
'quarter_category' => '18',
'place' => '300',
'region' => '75'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Caerloverock',
'quarter_category' => '18',
'place' => '302',
'region' => '76'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kirkcudbright',
'quarter_category' => '18',
'place' => '304',
'region' => '76'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunadd',
'quarter_category' => '18',
'place' => '305',
'region' => '77'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunollie',
'quarter_category' => '18',
'place' => '306',
'region' => '77'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunaverty',
'quarter_category' => '18',
'place' => '307',
'region' => '77'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Perth',
'quarter_category' => '18',
'place' => '309',
'region' => '78'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stirling',
'quarter_category' => '18',
'place' => '310',
'region' => '78'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dunfermline',
'quarter_category' => '18',
'place' => '312',
'region' => '78'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nairn',
'quarter_category' => '18',
'place' => '314',
'region' => '79'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dundee',
'quarter_category' => '18',
'place' => '317',
'region' => '80'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Forfar',
'quarter_category' => '18',
'place' => '318',
'region' => '80'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Scone',
'quarter_category' => '18',
'place' => '319',
'region' => '80'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Arbroath',
'quarter_category' => '18',
'place' => '320',
'region' => '80'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dingwall',
'quarter_category' => '18',
'place' => '321',
'region' => '81'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Helmsdale',
'quarter_category' => '18',
'place' => '322',
'region' => '81'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tara',
'quarter_category' => '18',
'place' => '326',
'region' => '82'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Millmount',
'quarter_category' => '18',
'place' => '328',
'region' => '82'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Carrickfergus',
'quarter_category' => '18',
'place' => '330',
'region' => '83'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Wexford',
'quarter_category' => '18',
'place' => '333',
'region' => '84'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kells',
'quarter_category' => '18',
'place' => '334',
'region' => '84'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Waterford',
'quarter_category' => '18',
'place' => '335',
'region' => '84'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Durrow',
'quarter_category' => '18',
'place' => '336',
'region' => '84'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Roscrea',
'quarter_category' => '18',
'place' => '340',
'region' => '85'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Galway',
'quarter_category' => '18',
'place' => '341',
'region' => '86'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Olite',
'quarter_category' => '18',
'place' => '346',
'region' => '87'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Leyre',
'quarter_category' => '18',
'place' => '348',
'region' => '87'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'San Sebastian',
'quarter_category' => '18',
'place' => '349',
'region' => '88'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Durango',
'quarter_category' => '18',
'place' => '350',
'region' => '88'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bilbao',
'quarter_category' => '18',
'place' => '351',
'region' => '88'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sobrarbe',
'quarter_category' => '18',
'place' => '356',
'region' => '89'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Molina de Aragon',
'quarter_category' => '18',
'place' => '358',
'region' => '90'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rueda',
'quarter_category' => '18',
'place' => '360',
'region' => '90'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ripoll',
'quarter_category' => '18',
'place' => '362',
'region' => '91'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Emporda',
'quarter_category' => '18',
'place' => '363',
'region' => '91'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sant Feliu de Guixols',
'quarter_category' => '18',
'place' => '364',
'region' => '91'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Barbens',
'quarter_category' => '18',
'place' => '366',
'region' => '92'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Manresa',
'quarter_category' => '18',
'place' => '367',
'region' => '92'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Monserrat',
'quarter_category' => '18',
'place' => '368',
'region' => '92'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sagunto',
'quarter_category' => '18',
'place' => '370',
'region' => '93'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Serra',
'quarter_category' => '18',
'place' => '372',
'region' => '93'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Denia',
'quarter_category' => '18',
'place' => '373',
'region' => '94'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Guadalest',
'quarter_category' => '18',
'place' => '374',
'region' => '94'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alicante',
'quarter_category' => '18',
'place' => '375',
'region' => '94'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gandia',
'quarter_category' => '18',
'place' => '376',
'region' => '94'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pollenca',
'quarter_category' => '18',
'place' => '378',
'region' => '95'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Robla',
'quarter_category' => '18',
'place' => '382',
'region' => '96'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'San Guillermo',
'quarter_category' => '18',
'place' => '383',
'region' => '96'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sahagun',
'quarter_category' => '18',
'place' => '384',
'region' => '96'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Aviles',
'quarter_category' => '18',
'place' => '386',
'region' => '97'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gijon',
'quarter_category' => '18',
'place' => '387',
'region' => '97'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Santo Toribio',
'quarter_category' => '18',
'place' => '388',
'region' => '97'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Santo Domingo de Silos',
'quarter_category' => '18',
'place' => '394',
'region' => '99'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'San Millan',
'quarter_category' => '18',
'place' => '396',
'region' => '99'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ponferrada',
'quarter_category' => '18',
'place' => '400',
'region' => '100'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sintra',
'quarter_category' => '18',
'place' => '402',
'region' => '101'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Santarem',
'quarter_category' => '18',
'place' => '403',
'region' => '101'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alcobaca',
'quarter_category' => '18',
'place' => '404',
'region' => '101'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Guimaraes',
'quarter_category' => '18',
'place' => '406',
'region' => '102'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Viana',
'quarter_category' => '18',
'place' => '407',
'region' => '102'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Aveiro',
'quarter_category' => '18',
'place' => '408',
'region' => '102'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Braganca',
'quarter_category' => '18',
'place' => '409',
'region' => '103'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sanabria',
'quarter_category' => '18',
'place' => '410',
'region' => '103'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Verin',
'quarter_category' => '18',
'place' => '411',
'region' => '103'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mirandela',
'quarter_category' => '18',
'place' => '412',
'region' => '103'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tomar',
'quarter_category' => '18',
'place' => '414',
'region' => '104'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Leiria',
'quarter_category' => '18',
'place' => '415',
'region' => '104'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pombal',
'quarter_category' => '18',
'place' => '416',
'region' => '104'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alcacer',
'quarter_category' => '18',
'place' => '418',
'region' => '105'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Moura',
'quarter_category' => '18',
'place' => '419',
'region' => '105'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Avis',
'quarter_category' => '18',
'place' => '420',
'region' => '105'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Paderne',
'quarter_category' => '18',
'place' => '422',
'region' => '106'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alvor',
'quarter_category' => '18',
'place' => '423',
'region' => '106'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Andujar',
'quarter_category' => '18',
'place' => '426',
'region' => '107'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ecija',
'quarter_category' => '18',
'place' => '428',
'region' => '107'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Osuna',
'quarter_category' => '18',
'place' => '430',
'region' => '108'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Huelva',
'quarter_category' => '18',
'place' => '432',
'region' => '108'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zafra',
'quarter_category' => '18',
'place' => '434',
'region' => '109'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Olivenza',
'quarter_category' => '18',
'place' => '436',
'region' => '109'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Almaden',
'quarter_category' => '18',
'place' => '438',
'region' => '110'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Consuegra',
'quarter_category' => '18',
'place' => '439',
'region' => '110'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Talavera',
'quarter_category' => '18',
'place' => '440',
'region' => '110'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alcaudete',
'quarter_category' => '18',
'place' => '442',
'region' => '111'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Antquera',
'quarter_category' => '18',
'place' => '443',
'region' => '111'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Guadix',
'quarter_category' => '18',
'place' => '444',
'region' => '111'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Motril',
'quarter_category' => '18',
'place' => '447',
'region' => '112'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lorca',
'quarter_category' => '18',
'place' => '448',
'region' => '112'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alcoy',
'quarter_category' => '18',
'place' => '450',
'region' => '113'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alicante',
'quarter_category' => '18',
'place' => '451',
'region' => '113'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Loja',
'quarter_category' => '18',
'place' => '454',
'region' => '114'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Marbella',
'quarter_category' => '18',
'place' => '455',
'region' => '114'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ronda',
'quarter_category' => '18',
'place' => '456',
'region' => '114'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cremona',
'quarter_category' => '18',
'place' => '460',
'region' => '115'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bobbio',
'quarter_category' => '18',
'place' => '468',
'region' => '117'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Venice',
'quarter_category' => '18',
'place' => '469',
'region' => '118'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cesena',
'quarter_category' => '18',
'place' => '474',
'region' => '119'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pordenone',
'quarter_category' => '18',
'place' => '482',
'region' => '121'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gemona',
'quarter_category' => '18',
'place' => '484',
'region' => '121'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ivrea',
'quarter_category' => '18',
'place' => '486',
'region' => '122'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pinerollo',
'quarter_category' => '18',
'place' => '488',
'region' => '122'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Assissi',
'quarter_category' => '18',
'place' => '496',
'region' => '124'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Subiaco',
'quarter_category' => '18',
'place' => '500',
'region' => '125'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gaeta',
'quarter_category' => '18',
'place' => '506',
'region' => '127'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cassino',
'quarter_category' => '18',
'place' => '508',
'region' => '127'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tropea',
'quarter_category' => '18',
'place' => '515',
'region' => '129'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vivarium',
'quarter_category' => '18',
'place' => '516',
'region' => '129'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Viggiano',
'quarter_category' => '18',
'place' => '520',
'region' => '130'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Olbia',
'quarter_category' => '18',
'place' => '522',
'region' => '131'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oristano',
'quarter_category' => '18',
'place' => '526',
'region' => '132'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cefalu',
'quarter_category' => '18',
'place' => '531',
'region' => '133'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Marsala',
'quarter_category' => '18',
'place' => '532',
'region' => '133'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Catania',
'quarter_category' => '18',
'place' => '535',
'region' => '134'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Caltagirone',
'quarter_category' => '18',
'place' => '538',
'region' => '135'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Valletta',
'quarter_category' => '18',
'place' => '539',
'region' => '135'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Modica',
'quarter_category' => '18',
'place' => '540',
'region' => '135'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ceuta',
'quarter_category' => '18',
'place' => '542',
'region' => '136'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ouazzane',
'quarter_category' => '18',
'place' => '543',
'region' => '136'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tetouan',
'quarter_category' => '18',
'place' => '544',
'region' => '136'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Anfa',
'quarter_category' => '18',
'place' => '545',
'region' => '137'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rabat',
'quarter_category' => '18',
'place' => '546',
'region' => '137'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sale',
'quarter_category' => '18',
'place' => '547',
'region' => '137'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Fedala',
'quarter_category' => '18',
'place' => '548',
'region' => '137'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Fez',
'quarter_category' => '18',
'place' => '549',
'region' => '138'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sefrou',
'quarter_category' => '18',
'place' => '550',
'region' => '138'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Meknes',
'quarter_category' => '18',
'place' => '552',
'region' => '138'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Marrakesh',
'quarter_category' => '18',
'place' => '553',
'region' => '139'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ouarzazate',
'quarter_category' => '18',
'place' => '554',
'region' => '139'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mogador',
'quarter_category' => '18',
'place' => '555',
'region' => '139'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Benhaddou',
'quarter_category' => '18',
'place' => '556',
'region' => '139'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Taroudant',
'quarter_category' => '18',
'place' => '557',
'region' => '140'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Agadir',
'quarter_category' => '18',
'place' => '558',
'region' => '140'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tindouf',
'quarter_category' => '18',
'place' => '559',
'region' => '140'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Figuig',
'quarter_category' => '18',
'place' => '561',
'region' => '141'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sijilmassa',
'quarter_category' => '18',
'place' => '562',
'region' => '141'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tinghir',
'quarter_category' => '18',
'place' => '563',
'region' => '141'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rachidiya',
'quarter_category' => '18',
'place' => '564',
'region' => '141'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oujda',
'quarter_category' => '18',
'place' => '566',
'region' => '142'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mellila',
'quarter_category' => '18',
'place' => '567',
'region' => '142'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Taourirt',
'quarter_category' => '18',
'place' => '568',
'region' => '142'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oran',
'quarter_category' => '18',
'place' => '569',
'region' => '143'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tiaret',
'quarter_category' => '18',
'place' => '571',
'region' => '143'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mascara',
'quarter_category' => '18',
'place' => '572',
'region' => '143'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Laghouat',
'quarter_category' => '18',
'place' => '574',
'region' => '144'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ghardaia',
'quarter_category' => '18',
'place' => '575',
'region' => '144'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Menia',
'quarter_category' => '18',
'place' => '576',
'region' => '144'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Khaled',
'quarter_category' => '18',
'place' => '577',
'region' => '145'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Biskra',
'quarter_category' => '18',
'place' => '578',
'region' => '145'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ouargla',
'quarter_category' => '18',
'place' => '579',
'region' => '145'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Touggourt',
'quarter_category' => '18',
'place' => '580',
'region' => '145'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Algiers',
'quarter_category' => '18',
'place' => '581',
'region' => '146'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Medea',
'quarter_category' => '18',
'place' => '582',
'region' => '146'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tedelles',
'quarter_category' => '18',
'place' => '583',
'region' => '146'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Achir',
'quarter_category' => '18',
'place' => '584',
'region' => '146'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jijel',
'quarter_category' => '18',
'place' => '586',
'region' => '147'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Eulma',
'quarter_category' => '18',
'place' => '588',
'region' => '147'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jendouba',
'quarter_category' => '18',
'place' => '591',
'region' => '148'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kaf',
'quarter_category' => '18',
'place' => '592',
'region' => '148'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tunis',
'quarter_category' => '18',
'place' => '593',
'region' => '149'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hammamet',
'quarter_category' => '18',
'place' => '595',
'region' => '149'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bizerte',
'quarter_category' => '18',
'place' => '596',
'region' => '149'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kairouan',
'quarter_category' => '18',
'place' => '597',
'region' => '150'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sousse',
'quarter_category' => '18',
'place' => '598',
'region' => '150'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sfax',
'quarter_category' => '18',
'place' => '599',
'region' => '150'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mahdia',
'quarter_category' => '18',
'place' => '600',
'region' => '150'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kebili',
'quarter_category' => '18',
'place' => '603',
'region' => '151'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tozeur',
'quarter_category' => '18',
'place' => '604',
'region' => '151'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Medenine',
'quarter_category' => '18',
'place' => '606',
'region' => '152'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tamanrasset',
'quarter_category' => '18',
'place' => '607',
'region' => '152'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ghat',
'quarter_category' => '18',
'place' => '608',
'region' => '152'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tripoli',
'quarter_category' => '18',
'place' => '609',
'region' => '153'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zliten',
'quarter_category' => '18',
'place' => '610',
'region' => '153'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Misrata',
'quarter_category' => '18',
'place' => '611',
'region' => '153'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zuwara',
'quarter_category' => '18',
'place' => '612',
'region' => '153'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Germa',
'quarter_category' => '18',
'place' => '613',
'region' => '154'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sabha',
'quarter_category' => '18',
'place' => '614',
'region' => '154'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zouila',
'quarter_category' => '18',
'place' => '615',
'region' => '154'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Qatrun',
'quarter_category' => '18',
'place' => '616',
'region' => '154'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kufra',
'quarter_category' => '18',
'place' => '617',
'region' => '155'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ghiranghedi',
'quarter_category' => '18',
'place' => '618',
'region' => '155'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Awjila',
'quarter_category' => '18',
'place' => '619',
'region' => '155'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Marada',
'quarter_category' => '18',
'place' => '620',
'region' => '155'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Benghazi',
'quarter_category' => '18',
'place' => '621',
'region' => '156'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ajdabiya',
'quarter_category' => '18',
'place' => '624',
'region' => '156'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rosetta',
'quarter_category' => '18',
'place' => '626',
'region' => '157'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mansoura',
'quarter_category' => '18',
'place' => '628',
'region' => '157'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Natrun',
'quarter_category' => '18',
'place' => '632',
'region' => '158'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Minya',
'quarter_category' => '18',
'place' => '633',
'region' => '159'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Siwa',
'quarter_category' => '18',
'place' => '634',
'region' => '159'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Farafra',
'quarter_category' => '18',
'place' => '635',
'region' => '159'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Anba Boula',
'quarter_category' => '18',
'place' => '636',
'region' => '159'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Asyut',
'quarter_category' => '18',
'place' => '637',
'region' => '160'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kharga',
'quarter_category' => '18',
'place' => '638',
'region' => '160'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zinaiqa',
'quarter_category' => '18',
'place' => '640',
'region' => '160'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Liegnitz',
'quarter_category' => '18',
'place' => '641',
'region' => '161'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Glogau',
'quarter_category' => '18',
'place' => '642',
'region' => '161'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Leubus',
'quarter_category' => '18',
'place' => '644',
'region' => '161'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Teczyn',
'quarter_category' => '18',
'place' => '646',
'region' => '162'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tarnau',
'quarter_category' => '18',
'place' => '647',
'region' => '162'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Salzberg',
'quarter_category' => '18',
'place' => '648',
'region' => '162'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kalisz',
'quarter_category' => '18',
'place' => '652',
'region' => '163'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Warsaw',
'quarter_category' => '18',
'place' => '654',
'region' => '164'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Radomir',
'quarter_category' => '18',
'place' => '656',
'region' => '164'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Brest',
'quarter_category' => '18',
'place' => '657',
'region' => '165'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Goroden',
'quarter_category' => '18',
'place' => '658',
'region' => '165'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kobryn',
'quarter_category' => '18',
'place' => '659',
'region' => '165'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Wolkowysk',
'quarter_category' => '18',
'place' => '660',
'region' => '165'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tracken',
'quarter_category' => '18',
'place' => '661',
'region' => '166'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kauen',
'quarter_category' => '18',
'place' => '663',
'region' => '166'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Minsk',
'quarter_category' => '18',
'place' => '664',
'region' => '166'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rovigno',
'quarter_category' => '18',
'place' => '666',
'region' => '167'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vikla',
'quarter_category' => '18',
'place' => '667',
'region' => '167'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Trsat',
'quarter_category' => '18',
'place' => '668',
'region' => '167'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ragusa',
'quarter_category' => '18',
'place' => '669',
'region' => '168'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bihac',
'quarter_category' => '18',
'place' => '674',
'region' => '169'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Konjic',
'quarter_category' => '18',
'place' => '675',
'region' => '169'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tyrnau',
'quarter_category' => '18',
'place' => '678',
'region' => '170'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sopron',
'quarter_category' => '18',
'place' => '680',
'region' => '170'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Fehervar',
'quarter_category' => '18',
'place' => '682',
'region' => '171'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Egerszeg',
'quarter_category' => '18',
'place' => '683',
'region' => '171'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bystrica',
'quarter_category' => '18',
'place' => '686',
'region' => '172'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Krupina',
'quarter_category' => '18',
'place' => '687',
'region' => '172'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Leua',
'quarter_category' => '18',
'place' => '688',
'region' => '172'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Diosgyor',
'quarter_category' => '18',
'place' => '690',
'region' => '173'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bartfeld',
'quarter_category' => '18',
'place' => '691',
'region' => '173'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kassow',
'quarter_category' => '18',
'place' => '692',
'region' => '173'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Buda',
'quarter_category' => '18',
'place' => '693',
'region' => '174'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kecskemet',
'quarter_category' => '18',
'place' => '694',
'region' => '174'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Debrecen',
'quarter_category' => '18',
'place' => '695',
'region' => '174'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zounok',
'quarter_category' => '18',
'place' => '696',
'region' => '174'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vukovar',
'quarter_category' => '18',
'place' => '698',
'region' => '175'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Virovitica',
'quarter_category' => '18',
'place' => '700',
'region' => '175'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Schaasburg',
'quarter_category' => '18',
'place' => '702',
'region' => '176'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Klausenburg',
'quarter_category' => '18',
'place' => '703',
'region' => '176'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Carta',
'quarter_category' => '18',
'place' => '704',
'region' => '176'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Targu Jiu',
'quarter_category' => '18',
'place' => '705',
'region' => '177'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Drobeta',
'quarter_category' => '18',
'place' => '706',
'region' => '177'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Curtea Arges',
'quarter_category' => '18',
'place' => '707',
'region' => '177'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tismana',
'quarter_category' => '18',
'place' => '708',
'region' => '177'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Targoviste',
'quarter_category' => '18',
'place' => '709',
'region' => '178'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Torzburg',
'quarter_category' => '18',
'place' => '711',
'region' => '178'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kronstadt',
'quarter_category' => '18',
'place' => '712',
'region' => '178'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Constanta',
'quarter_category' => '18',
'place' => '713',
'region' => '179'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Harsova',
'quarter_category' => '18',
'place' => '714',
'region' => '179'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tulcea',
'quarter_category' => '18',
'place' => '715',
'region' => '179'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Calarasi',
'quarter_category' => '18',
'place' => '716',
'region' => '179'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Suceava',
'quarter_category' => '18',
'place' => '717',
'region' => '180'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Orhei',
'quarter_category' => '18',
'place' => '718',
'region' => '180'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Odessa',
'quarter_category' => '18',
'place' => '719',
'region' => '180'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chisinau',
'quarter_category' => '18',
'place' => '720',
'region' => '180'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sofia',
'quarter_category' => '18',
'place' => '721',
'region' => '181'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pleven',
'quarter_category' => '18',
'place' => '722',
'region' => '181'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rila',
'quarter_category' => '18',
'place' => '724',
'region' => '181'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Varna',
'quarter_category' => '18',
'place' => '725',
'region' => '182'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gorazde',
'quarter_category' => '18',
'place' => '729',
'region' => '183'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zenica',
'quarter_category' => '18',
'place' => '730',
'region' => '183'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sebrenik',
'quarter_category' => '18',
'place' => '731',
'region' => '183'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Visegrad',
'quarter_category' => '18',
'place' => '732',
'region' => '183'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rasa',
'quarter_category' => '18',
'place' => '734',
'region' => '184'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Valjevo',
'quarter_category' => '18',
'place' => '735',
'region' => '184'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bukovo',
'quarter_category' => '18',
'place' => '736',
'region' => '184'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bukovo',
'quarter_category' => '18',
'place' => '738',
'region' => '185'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zica',
'quarter_category' => '18',
'place' => '740',
'region' => '185'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kumanovo',
'quarter_category' => '18',
'place' => '742',
'region' => '186'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vitina',
'quarter_category' => '18',
'place' => '744',
'region' => '186'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pristina',
'quarter_category' => '18',
'place' => '745',
'region' => '187'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zvecan',
'quarter_category' => '18',
'place' => '746',
'region' => '187'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pec',
'quarter_category' => '18',
'place' => '747',
'region' => '187'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Berane',
'quarter_category' => '18',
'place' => '748',
'region' => '187'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Monastyrski',
'quarter_category' => '18',
'place' => '749',
'region' => '188'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Samkarsh',
'quarter_category' => '18',
'place' => '750',
'region' => '188'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Poltava',
'quarter_category' => '18',
'place' => '751',
'region' => '188'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oleshia',
'quarter_category' => '18',
'place' => '752',
'region' => '188'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pereyaslav',
'quarter_category' => '18',
'place' => '753',
'region' => '189'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Korsun',
'quarter_category' => '18',
'place' => '754',
'region' => '189'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kaniv',
'quarter_category' => '18',
'place' => '755',
'region' => '189'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cherkasy',
'quarter_category' => '18',
'place' => '756',
'region' => '189'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Borispyl',
'quarter_category' => '18',
'place' => '758',
'region' => '190'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Yuriev',
'quarter_category' => '18',
'place' => '759',
'region' => '190'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pechersk',
'quarter_category' => '18',
'place' => '760',
'region' => '190'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Halych',
'quarter_category' => '18',
'place' => '761',
'region' => '191'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kolomyia',
'quarter_category' => '18',
'place' => '762',
'region' => '191'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Terebovlia',
'quarter_category' => '18',
'place' => '764',
'region' => '191'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Turov',
'quarter_category' => '18',
'place' => '765',
'region' => '192'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Pinesk',
'quarter_category' => '18',
'place' => '766',
'region' => '192'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Slutsk',
'quarter_category' => '18',
'place' => '767',
'region' => '192'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Korosten',
'quarter_category' => '18',
'place' => '768',
'region' => '192'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tchernigov',
'quarter_category' => '18',
'place' => '769',
'region' => '193'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lyubech',
'quarter_category' => '18',
'place' => '770',
'region' => '193'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gomel',
'quarter_category' => '18',
'place' => '771',
'region' => '193'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mazyr',
'quarter_category' => '18',
'place' => '772',
'region' => '193'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Orsha',
'quarter_category' => '18',
'place' => '774',
'region' => '194'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vitebsk',
'quarter_category' => '18',
'place' => '775',
'region' => '194'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Barysaw',
'quarter_category' => '18',
'place' => '776',
'region' => '194'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Smolensk',
'quarter_category' => '18',
'place' => '777',
'region' => '195'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bryansk',
'quarter_category' => '18',
'place' => '778',
'region' => '195'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vyazma',
'quarter_category' => '18',
'place' => '779',
'region' => '195'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Roslav',
'quarter_category' => '18',
'place' => '780',
'region' => '195'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ryazan',
'quarter_category' => '18',
'place' => '781',
'region' => '196'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kolomna',
'quarter_category' => '18',
'place' => '782',
'region' => '196'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kasimov',
'quarter_category' => '18',
'place' => '783',
'region' => '196'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tula',
'quarter_category' => '18',
'place' => '784',
'region' => '196'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sergiev',
'quarter_category' => '18',
'place' => '786',
'region' => '197'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zvenigorod',
'quarter_category' => '18',
'place' => '787',
'region' => '197'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Simonov',
'quarter_category' => '18',
'place' => '788',
'region' => '197'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Porkhov',
'quarter_category' => '18',
'place' => '790',
'region' => '198'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ostrov',
'quarter_category' => '18',
'place' => '791',
'region' => '198'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gdov',
'quarter_category' => '18',
'place' => '792',
'region' => '198'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rusa',
'quarter_category' => '18',
'place' => '794',
'region' => '199'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ladoga',
'quarter_category' => '18',
'place' => '795',
'region' => '199'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Schlisselburg',
'quarter_category' => '18',
'place' => '796',
'region' => '199'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bolgar',
'quarter_category' => '18',
'place' => '797',
'region' => '200'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bilyar',
'quarter_category' => '18',
'place' => '798',
'region' => '200'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kazan',
'quarter_category' => '18',
'place' => '799',
'region' => '200'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ufa',
'quarter_category' => '18',
'place' => '800',
'region' => '200'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Vyazniki',
'quarter_category' => '18',
'place' => '802',
'region' => '201'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nizhny',
'quarter_category' => '18',
'place' => '804',
'region' => '201'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rybinsk',
'quarter_category' => '18',
'place' => '806',
'region' => '202'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Cherepovets',
'quarter_category' => '18',
'place' => '807',
'region' => '202'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kirillov',
'quarter_category' => '18',
'place' => '808',
'region' => '202'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Oryol',
'quarter_category' => '18',
'place' => '809',
'region' => '203'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Novosil',
'quarter_category' => '18',
'place' => '810',
'region' => '203'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kromy',
'quarter_category' => '18',
'place' => '811',
'region' => '203'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lipetsk',
'quarter_category' => '18',
'place' => '812',
'region' => '203'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sevsk',
'quarter_category' => '18',
'place' => '813',
'region' => '204'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rylsk',
'quarter_category' => '18',
'place' => '814',
'region' => '204'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kursk',
'quarter_category' => '18',
'place' => '815',
'region' => '204'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Olgov',
'quarter_category' => '18',
'place' => '816',
'region' => '204'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Atil',
'quarter_category' => '18',
'place' => '817',
'region' => '205'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saraibatu',
'quarter_category' => '18',
'place' => '818',
'region' => '205'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saraiberke',
'quarter_category' => '18',
'place' => '819',
'region' => '205'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Khumar',
'quarter_category' => '18',
'place' => '820',
'region' => '205'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gurganj',
'quarter_category' => '18',
'place' => '821',
'region' => '206'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Khiva',
'quarter_category' => '18',
'place' => '822',
'region' => '206'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saraidzhuk',
'quarter_category' => '18',
'place' => '823',
'region' => '206'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Redosto',
'quarter_category' => '18',
'place' => '826',
'region' => '207'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Edirne',
'quarter_category' => '18',
'place' => '827',
'region' => '207'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Thessaloniki',
'quarter_category' => '18',
'place' => '829',
'region' => '208'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Stratonicea',
'quarter_category' => '18',
'place' => '830',
'region' => '208'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hilandar',
'quarter_category' => '18',
'place' => '832',
'region' => '208'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lamia',
'quarter_category' => '18',
'place' => '834',
'region' => '209'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Thebes',
'quarter_category' => '18',
'place' => '835',
'region' => '209'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mystras',
'quarter_category' => '18',
'place' => '837',
'region' => '210'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Corinth',
'quarter_category' => '18',
'place' => '839',
'region' => '210'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Glarentza',
'quarter_category' => '18',
'place' => '840',
'region' => '210'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gardiki',
'quarter_category' => '18',
'place' => '842',
'region' => '211'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amfissa',
'quarter_category' => '18',
'place' => '844',
'region' => '211'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kruja',
'quarter_category' => '18',
'place' => '845',
'region' => '212'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saint Jovan',
'quarter_category' => '18',
'place' => '848',
'region' => '212'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kastoria',
'quarter_category' => '18',
'place' => '849',
'region' => '213'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bitola',
'quarter_category' => '18',
'place' => '850',
'region' => '213'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Prilep',
'quarter_category' => '18',
'place' => '851',
'region' => '213'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Berat',
'quarter_category' => '18',
'place' => '852',
'region' => '213'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Lemnos',
'quarter_category' => '18',
'place' => '854',
'region' => '214'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chania',
'quarter_category' => '18',
'place' => '855',
'region' => '214'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Patros',
'quarter_category' => '18',
'place' => '856',
'region' => '214'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Samos',
'quarter_category' => '18',
'place' => '858',
'region' => '215'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Chios',
'quarter_category' => '18',
'place' => '859',
'region' => '215'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Patmos',
'quarter_category' => '18',
'place' => '860',
'region' => '215'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bursa',
'quarter_category' => '18',
'place' => '867',
'region' => '217'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ousakeion',
'quarter_category' => '18',
'place' => '872',
'region' => '218'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Makre',
'quarter_category' => '18',
'place' => '876',
'region' => '219'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gordion',
'quarter_category' => '18',
'place' => '878',
'region' => '220'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kastamuni',
'quarter_category' => '18',
'place' => '882',
'region' => '221'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amasra',
'quarter_category' => '18',
'place' => '883',
'region' => '221'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Adana',
'quarter_category' => '18',
'place' => '886',
'region' => '222'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Limasol',
'quarter_category' => '18',
'place' => '888',
'region' => '222'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Magida',
'quarter_category' => '18',
'place' => '891',
'region' => '223'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Muskara',
'quarter_category' => '18',
'place' => '892',
'region' => '223'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bayberdon',
'quarter_category' => '18',
'place' => '894',
'region' => '224'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Riza',
'quarter_category' => '18',
'place' => '895',
'region' => '224'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Semsur',
'quarter_category' => '18',
'place' => '898',
'region' => '225'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amouda',
'quarter_category' => '18',
'place' => '899',
'region' => '225'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Antep',
'quarter_category' => '18',
'place' => '900',
'region' => '225'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Takat',
'quarter_category' => '18',
'place' => '904',
'region' => '226'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Harput',
'quarter_category' => '18',
'place' => '906',
'region' => '227'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Romanoupolis',
'quarter_category' => '18',
'place' => '908',
'region' => '227'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sivas',
'quarter_category' => '18',
'place' => '909',
'region' => '228'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Divrigi',
'quarter_category' => '18',
'place' => '910',
'region' => '228'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Albistan',
'quarter_category' => '18',
'place' => '911',
'region' => '228'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Batumi',
'quarter_category' => '18',
'place' => '913',
'region' => '229'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Poti',
'quarter_category' => '18',
'place' => '914',
'region' => '229'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kutais',
'quarter_category' => '18',
'place' => '916',
'region' => '229'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Surami',
'quarter_category' => '18',
'place' => '918',
'region' => '230'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gori',
'quarter_category' => '18',
'place' => '919',
'region' => '230'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Akhalkalaki',
'quarter_category' => '18',
'place' => '920',
'region' => '230'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Derbent',
'quarter_category' => '18',
'place' => '921',
'region' => '231'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Baku',
'quarter_category' => '18',
'place' => '922',
'region' => '231'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mingecevir',
'quarter_category' => '18',
'place' => '923',
'region' => '231'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Balanjar',
'quarter_category' => '18',
'place' => '924',
'region' => '231'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Yerevan',
'quarter_category' => '18',
'place' => '926',
'region' => '232'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kirants',
'quarter_category' => '18',
'place' => '928',
'region' => '232'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nakhichevan',
'quarter_category' => '18',
'place' => '929',
'region' => '233'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Khoy',
'quarter_category' => '18',
'place' => '930',
'region' => '233'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ordubad',
'quarter_category' => '18',
'place' => '931',
'region' => '233'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Baghaberd',
'quarter_category' => '18',
'place' => '932',
'region' => '233'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tatvan',
'quarter_category' => '18',
'place' => '933',
'region' => '234'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Manzikert',
'quarter_category' => '18',
'place' => '934',
'region' => '234'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bitlis',
'quarter_category' => '18',
'place' => '935',
'region' => '234'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Arakelots',
'quarter_category' => '18',
'place' => '936',
'region' => '234'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Saird',
'quarter_category' => '18',
'place' => '938',
'region' => '235'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nisibis',
'quarter_category' => '18',
'place' => '940',
'region' => '235'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Van',
'quarter_category' => '18',
'place' => '941',
'region' => '236'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Berkri',
'quarter_category' => '18',
'place' => '942',
'region' => '236'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Archesh',
'quarter_category' => '18',
'place' => '943',
'region' => '236'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ostan',
'quarter_category' => '18',
'place' => '944',
'region' => '236'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nishapur',
'quarter_category' => '18',
'place' => '945',
'region' => '237'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Beyhaq',
'quarter_category' => '18',
'place' => '946',
'region' => '237'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Konjikala',
'quarter_category' => '18',
'place' => '948',
'region' => '237'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kashmar',
'quarter_category' => '18',
'place' => '949',
'region' => '238'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Gonabad',
'quarter_category' => '18',
'place' => '950',
'region' => '238'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tabas',
'quarter_category' => '18',
'place' => '951',
'region' => '238'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Birjand',
'quarter_category' => '18',
'place' => '952',
'region' => '238'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kerman',
'quarter_category' => '18',
'place' => '953',
'region' => '239'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bam',
'quarter_category' => '18',
'place' => '954',
'region' => '239'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rafsanjan',
'quarter_category' => '18',
'place' => '955',
'region' => '239'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sirjan',
'quarter_category' => '18',
'place' => '956',
'region' => '239'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Shiraz',
'quarter_category' => '18',
'place' => '957',
'region' => '240'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hormuz',
'quarter_category' => '18',
'place' => '959',
'region' => '240'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Yasuj',
'quarter_category' => '18',
'place' => '960',
'region' => '240'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dezgord',
'quarter_category' => '18',
'place' => '962',
'region' => '241'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Yazd',
'quarter_category' => '18',
'place' => '963',
'region' => '241'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zavareh',
'quarter_category' => '18',
'place' => '964',
'region' => '241'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rhages',
'quarter_category' => '18',
'place' => '965',
'region' => '242'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kashan',
'quarter_category' => '18',
'place' => '966',
'region' => '242'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Qazvin',
'quarter_category' => '18',
'place' => '968',
'region' => '242'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Astarabad',
'quarter_category' => '18',
'place' => '969',
'region' => '243'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Alamut',
'quarter_category' => '18',
'place' => '970',
'region' => '243'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amol',
'quarter_category' => '18',
'place' => '971',
'region' => '243'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Rasht',
'quarter_category' => '18',
'place' => '972',
'region' => '243'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tabriz',
'quarter_category' => '18',
'place' => '973',
'region' => '244'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Sofian',
'quarter_category' => '18',
'place' => '974',
'region' => '244'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zanjan',
'quarter_category' => '18',
'place' => '975',
'region' => '244'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ardabil',
'quarter_category' => '18',
'place' => '976',
'region' => '244'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hamadan',
'quarter_category' => '18',
'place' => '977',
'region' => '245'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kermanshah',
'quarter_category' => '18',
'place' => '978',
'region' => '245'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Falak',
'quarter_category' => '18',
'place' => '979',
'region' => '245'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bukan',
'quarter_category' => '18',
'place' => '980',
'region' => '245'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hajr',
'quarter_category' => '18',
'place' => '981',
'region' => '246'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Buraidah',
'quarter_category' => '18',
'place' => '982',
'region' => '246'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hadjar',
'quarter_category' => '18',
'place' => '983',
'region' => '246'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hail',
'quarter_category' => '18',
'place' => '984',
'region' => '246'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Taif',
'quarter_category' => '18',
'place' => '986',
'region' => '247'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jeddah',
'quarter_category' => '18',
'place' => '987',
'region' => '247'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Dedan',
'quarter_category' => '18',
'place' => '989',
'region' => '248'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Eilat',
'quarter_category' => '18',
'place' => '990',
'region' => '248'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tayma',
'quarter_category' => '18',
'place' => '991',
'region' => '248'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Maan',
'quarter_category' => '18',
'place' => '992',
'region' => '248'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Ascalon',
'quarter_category' => '18',
'place' => '994',
'region' => '249'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hebron',
'quarter_category' => '18',
'place' => '995',
'region' => '249'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jaffa',
'quarter_category' => '18',
'place' => '996',
'region' => '249'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Acre',
'quarter_category' => '18',
'place' => '997',
'region' => '250'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nablus',
'quarter_category' => '18',
'place' => '999',
'region' => '250'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tyre',
'quarter_category' => '18',
'place' => '1000',
'region' => '250'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Amman',
'quarter_category' => '18',
'place' => '1002',
'region' => '251'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Irbid',
'quarter_category' => '18',
'place' => '1003',
'region' => '251'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Salkhad',
'quarter_category' => '18',
'place' => '1004',
'region' => '251'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kasr al Gharbi',
'quarter_category' => '18',
'place' => '1006',
'region' => '252'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Palmyra',
'quarter_category' => '18',
'place' => '1007',
'region' => '252'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Nabek',
'quarter_category' => '18',
'place' => '1008',
'region' => '252'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Homs',
'quarter_category' => '18',
'place' => '1009',
'region' => '253'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Qusayr',
'quarter_category' => '18',
'place' => '1010',
'region' => '253'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Hama',
'quarter_category' => '18',
'place' => '1012',
'region' => '253'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Tripoli',
'quarter_category' => '18',
'place' => '1013',
'region' => '254'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Margat',
'quarter_category' => '18',
'place' => '1016',
'region' => '254'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Idlib',
'quarter_category' => '18',
'place' => '1019',
'region' => '255'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Afrin',
'quarter_category' => '18',
'place' => '1020',
'region' => '255'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Manbij',
'quarter_category' => '18',
'place' => '1022',
'region' => '256'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Bab',
'quarter_category' => '18',
'place' => '1023',
'region' => '256'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Safira',
'quarter_category' => '18',
'place' => '1024',
'region' => '256'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Jabar',
'quarter_category' => '18',
'place' => '1026',
'region' => '257'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Zor',
'quarter_category' => '18',
'place' => '1028',
'region' => '257'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Mosul',
'quarter_category' => '18',
'place' => '1030',
'region' => '258'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Kirkuk',
'quarter_category' => '18',
'place' => '1031',
'region' => '258'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Telafer',
'quarter_category' => '18',
'place' => '1032',
'region' => '258'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Samarra',
'quarter_category' => '18',
'place' => '1036',
'region' => '259'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'parish',
'quarter_name' => 'Samawah',
'quarter_category' => '18',
'place' => '1037',
'region' => '260'
]); 
//dioceses
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bremen',
'quarter_category' => '19',
'place' => '1',
'region' => '1'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Meissen',
'quarter_category' => '19',
'place' => '5',
'region' => '2'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dresden',
'quarter_category' => '19',
'place' => '6',
'region' => '2'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Erfurt',
'quarter_category' => '19',
'place' => '7',
'region' => '2'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Magdeburg',
'quarter_category' => '19',
'place' => '9',
'region' => '3'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Merseburg',
'quarter_category' => '19',
'place' => '10',
'region' => '3'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Halberstadt',
'quarter_category' => '19',
'place' => '11',
'region' => '3'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Schwerin',
'quarter_category' => '19',
'place' => '13',
'region' => '4'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lubeck',
'quarter_category' => '19',
'place' => '15',
'region' => '4'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Brandenburg',
'quarter_category' => '19',
'place' => '17',
'region' => '5'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Havelberg',
'quarter_category' => '19',
'place' => '19',
'region' => '5'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kolberg',
'quarter_category' => '19',
'place' => '23',
'region' => '6'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Munster',
'quarter_category' => '19',
'place' => '25',
'region' => '7'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Osnabruck',
'quarter_category' => '19',
'place' => '27',
'region' => '7'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Paderborn',
'quarter_category' => '19',
'place' => '28',
'region' => '7'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Regensburg',
'quarter_category' => '19',
'place' => '29',
'region' => '8'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Augsburg',
'quarter_category' => '19',
'place' => '30',
'region' => '8'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Wurzburg',
'quarter_category' => '19',
'place' => '31',
'region' => '8'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Salzburg',
'quarter_category' => '19',
'place' => '33',
'region' => '9'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vienna',
'quarter_category' => '19',
'place' => '37',
'region' => '10'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Sankt Polten',
'quarter_category' => '19',
'place' => '39',
'region' => '10'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Trent',
'quarter_category' => '19',
'place' => '47',
'region' => '12'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Brixen',
'quarter_category' => '19',
'place' => '48',
'region' => '12'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Basel',
'quarter_category' => '19',
'place' => '55',
'region' => '14'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Strassbourg',
'quarter_category' => '19',
'place' => '59',
'region' => '15'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Prague',
'quarter_category' => '19',
'place' => '61',
'region' => '16'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Olmutz',
'quarter_category' => '19',
'place' => '67',
'region' => '17'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mainz',
'quarter_category' => '19',
'place' => '69',
'region' => '18'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Heidelberg',
'quarter_category' => '19',
'place' => '70',
'region' => '18'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cologne',
'quarter_category' => '19',
'place' => '73',
'region' => '19'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Liege',
'quarter_category' => '19',
'place' => '75',
'region' => '19'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Trier',
'quarter_category' => '19',
'place' => '77',
'region' => '20'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Metz',
'quarter_category' => '19',
'place' => '79',
'region' => '20'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Utrecht',
'quarter_category' => '19',
'place' => '87',
'region' => '22'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cambrai',
'quarter_category' => '19',
'place' => '99',
'region' => '25'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Klagenfurt',
'quarter_category' => '19',
'place' => '101',
'region' => '26'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gorizia',
'quarter_category' => '19',
'place' => '103',
'region' => '26'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Laibach',
'quarter_category' => '19',
'place' => '107',
'region' => '27'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Quimper',
'quarter_category' => '19',
'place' => '111',
'region' => '28'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Paris',
'quarter_category' => '19',
'place' => '113',
'region' => '29'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Meaux',
'quarter_category' => '19',
'place' => '114',
'region' => '29'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Chartres',
'quarter_category' => '19',
'place' => '115',
'region' => '29'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Verdun',
'quarter_category' => '19',
'place' => '119',
'region' => '30'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Langres',
'quarter_category' => '19',
'place' => '120',
'region' => '30'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Laon',
'quarter_category' => '19',
'place' => '123',
'region' => '31'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rouen',
'quarter_category' => '19',
'place' => '125',
'region' => '32'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lisieux',
'quarter_category' => '19',
'place' => '127',
'region' => '32'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bayeux',
'quarter_category' => '19',
'place' => '128',
'region' => '32'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Troyes',
'quarter_category' => '19',
'place' => '129',
'region' => '33'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Reims',
'quarter_category' => '19',
'place' => '131',
'region' => '33'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Orleans',
'quarter_category' => '19',
'place' => '133',
'region' => '34'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tours',
'quarter_category' => '19',
'place' => '137',
'region' => '35'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Angers',
'quarter_category' => '19',
'place' => '141',
'region' => '36'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mans',
'quarter_category' => '19',
'place' => '143',
'region' => '36'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Poitiers',
'quarter_category' => '19',
'place' => '145',
'region' => '37'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bourges',
'quarter_category' => '19',
'place' => '149',
'region' => '38'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Clermont Ferrand',
'quarter_category' => '19',
'place' => '157',
'region' => '40'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Puy en Velay',
'quarter_category' => '19',
'place' => '159',
'region' => '40'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Marseille',
'quarter_category' => '19',
'place' => '163',
'region' => '41'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Avignon',
'quarter_category' => '19',
'place' => '164',
'region' => '41'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Toulouse',
'quarter_category' => '19',
'place' => '165',
'region' => '42'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Carcasonne',
'quarter_category' => '19',
'place' => '166',
'region' => '42'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Narbonne',
'quarter_category' => '19',
'place' => '167',
'region' => '42'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bordeaux',
'quarter_category' => '19',
'place' => '169',
'region' => '43'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Angouleme',
'quarter_category' => '19',
'place' => '173',
'region' => '44'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Limoges',
'quarter_category' => '19',
'place' => '174',
'region' => '44'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Perigeux',
'quarter_category' => '19',
'place' => '175',
'region' => '44'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Grenoble',
'quarter_category' => '19',
'place' => '177',
'region' => '45'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vienne',
'quarter_category' => '19',
'place' => '178',
'region' => '45'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lyon',
'quarter_category' => '19',
'place' => '179',
'region' => '45'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Autun',
'quarter_category' => '19',
'place' => '180',
'region' => '45'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dijon',
'quarter_category' => '19',
'place' => '181',
'region' => '46'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Besancon',
'quarter_category' => '19',
'place' => '182',
'region' => '46'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Chalon',
'quarter_category' => '19',
'place' => '183',
'region' => '46'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'London',
'quarter_category' => '19',
'place' => '185',
'region' => '47'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Canterbury',
'quarter_category' => '19',
'place' => '189',
'region' => '48'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Wells',
'quarter_category' => '19',
'place' => '195',
'region' => '49'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Saint German',
'quarter_category' => '19',
'place' => '199',
'region' => '50'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Norwich',
'quarter_category' => '19',
'place' => '201',
'region' => '51'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Saint Edmunds',
'quarter_category' => '19',
'place' => '203',
'region' => '51'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'York',
'quarter_category' => '19',
'place' => '205',
'region' => '52'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Durham',
'quarter_category' => '19',
'place' => '206',
'region' => '52'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Worcester',
'quarter_category' => '19',
'place' => '209',
'region' => '53'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ely',
'quarter_category' => '19',
'place' => '213',
'region' => '54'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bangor',
'quarter_category' => '19',
'place' => '227',
'region' => '57'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Glasbury',
'quarter_category' => '19',
'place' => '231',
'region' => '58'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cardiff',
'quarter_category' => '19',
'place' => '235',
'region' => '59'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Oslo',
'quarter_category' => '19',
'place' => '237',
'region' => '60'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Hamar',
'quarter_category' => '19',
'place' => '239',
'region' => '60'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bergen',
'quarter_category' => '19',
'place' => '241',
'region' => '61'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Stavanger',
'quarter_category' => '19',
'place' => '243',
'region' => '61'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Roskilde',
'quarter_category' => '19',
'place' => '247',
'region' => '62'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lund',
'quarter_category' => '19',
'place' => '249',
'region' => '63'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aarhus',
'quarter_category' => '19',
'place' => '253',
'region' => '64'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ripen',
'quarter_category' => '19',
'place' => '255',
'region' => '64'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vasteras',
'quarter_category' => '19',
'place' => '258',
'region' => '65'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Uppsala',
'quarter_category' => '19',
'place' => '259',
'region' => '65'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Skara',
'quarter_category' => '19',
'place' => '265',
'region' => '67'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Riga',
'quarter_category' => '19',
'place' => '269',
'region' => '68'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pilten',
'quarter_category' => '19',
'place' => '273',
'region' => '69'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Koningsberg',
'quarter_category' => '19',
'place' => '280',
'region' => '70'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Reval',
'quarter_category' => '19',
'place' => '285',
'region' => '72'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Arensburg',
'quarter_category' => '19',
'place' => '287',
'region' => '72'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Hapsal',
'quarter_category' => '19',
'place' => '288',
'region' => '72'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Edinburgh',
'quarter_category' => '19',
'place' => '289',
'region' => '73'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Glasgow',
'quarter_category' => '19',
'place' => '299',
'region' => '75'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Carlisle',
'quarter_category' => '19',
'place' => '301',
'region' => '76'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Whithorn',
'quarter_category' => '19',
'place' => '303',
'region' => '76'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Iona',
'quarter_category' => '19',
'place' => '308',
'region' => '77'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Saint Andrews',
'quarter_category' => '19',
'place' => '311',
'region' => '78'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Elgin',
'quarter_category' => '19',
'place' => '313',
'region' => '79'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mortlach',
'quarter_category' => '19',
'place' => '315',
'region' => '79'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aberdeen',
'quarter_category' => '19',
'place' => '316',
'region' => '79'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rosemarkie',
'quarter_category' => '19',
'place' => '323',
'region' => '81'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dornoch',
'quarter_category' => '19',
'place' => '324',
'region' => '81'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dublin',
'quarter_category' => '19',
'place' => '325',
'region' => '82'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kildare',
'quarter_category' => '19',
'place' => '327',
'region' => '82'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Armagh',
'quarter_category' => '19',
'place' => '329',
'region' => '83'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Derry',
'quarter_category' => '19',
'place' => '331',
'region' => '83'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Clogher',
'quarter_category' => '19',
'place' => '332',
'region' => '83'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cashel',
'quarter_category' => '19',
'place' => '337',
'region' => '85'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Limerick',
'quarter_category' => '19',
'place' => '338',
'region' => '85'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cork',
'quarter_category' => '19',
'place' => '339',
'region' => '85'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mayo',
'quarter_category' => '19',
'place' => '342',
'region' => '86'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tuam',
'quarter_category' => '19',
'place' => '343',
'region' => '86'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Achonry',
'quarter_category' => '19',
'place' => '344',
'region' => '86'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pamplona',
'quarter_category' => '19',
'place' => '345',
'region' => '87'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tudela',
'quarter_category' => '19',
'place' => '347',
'region' => '87'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gastehiz',
'quarter_category' => '19',
'place' => '352',
'region' => '88'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Jaca',
'quarter_category' => '19',
'place' => '353',
'region' => '89'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Monzon',
'quarter_category' => '19',
'place' => '354',
'region' => '89'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Huesca',
'quarter_category' => '19',
'place' => '355',
'region' => '89'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Zaragoza',
'quarter_category' => '19',
'place' => '357',
'region' => '90'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Albarracin',
'quarter_category' => '19',
'place' => '359',
'region' => '90'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gerona',
'quarter_category' => '19',
'place' => '361',
'region' => '91'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Barcelona',
'quarter_category' => '19',
'place' => '365',
'region' => '92'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Valencia',
'quarter_category' => '19',
'place' => '369',
'region' => '93'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Castellon',
'quarter_category' => '19',
'place' => '371',
'region' => '93'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Palma',
'quarter_category' => '19',
'place' => '377',
'region' => '95'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Menorca',
'quarter_category' => '19',
'place' => '379',
'region' => '95'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ibiza',
'quarter_category' => '19',
'place' => '380',
'region' => '95'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Leon',
'quarter_category' => '19',
'place' => '381',
'region' => '96'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Oviedo',
'quarter_category' => '19',
'place' => '385',
'region' => '97'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Valladolid',
'quarter_category' => '19',
'place' => '389',
'region' => '98'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Avila',
'quarter_category' => '19',
'place' => '390',
'region' => '98'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Segovia',
'quarter_category' => '19',
'place' => '391',
'region' => '98'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Salamanca',
'quarter_category' => '19',
'place' => '392',
'region' => '98'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Burgos',
'quarter_category' => '19',
'place' => '393',
'region' => '99'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Palencia',
'quarter_category' => '19',
'place' => '395',
'region' => '99'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Santiago',
'quarter_category' => '19',
'place' => '397',
'region' => '100'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ourense',
'quarter_category' => '19',
'place' => '398',
'region' => '100'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Coruna',
'quarter_category' => '19',
'place' => '399',
'region' => '100'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lisbon',
'quarter_category' => '19',
'place' => '401',
'region' => '101'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Porto',
'quarter_category' => '19',
'place' => '405',
'region' => '102'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Coimbra',
'quarter_category' => '19',
'place' => '413',
'region' => '104'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Evora',
'quarter_category' => '19',
'place' => '417',
'region' => '105'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Faro',
'quarter_category' => '19',
'place' => '421',
'region' => '106'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Silves',
'quarter_category' => '19',
'place' => '424',
'region' => '106'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cordoba',
'quarter_category' => '19',
'place' => '425',
'region' => '107'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Jaen',
'quarter_category' => '19',
'place' => '427',
'region' => '107'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Sevilla',
'quarter_category' => '19',
'place' => '429',
'region' => '108'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cadiz',
'quarter_category' => '19',
'place' => '431',
'region' => '108'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Badajoz',
'quarter_category' => '19',
'place' => '433',
'region' => '109'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Merida',
'quarter_category' => '19',
'place' => '435',
'region' => '109'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Toledo',
'quarter_category' => '19',
'place' => '437',
'region' => '110'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Granada',
'quarter_category' => '19',
'place' => '441',
'region' => '111'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Almeria',
'quarter_category' => '19',
'place' => '445',
'region' => '112'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Baza',
'quarter_category' => '19',
'place' => '446',
'region' => '112'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Murcia',
'quarter_category' => '19',
'place' => '449',
'region' => '113'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cartagena',
'quarter_category' => '19',
'place' => '452',
'region' => '113'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Malaga',
'quarter_category' => '19',
'place' => '453',
'region' => '114'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Milan',
'quarter_category' => '19',
'place' => '457',
'region' => '115'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Brescia',
'quarter_category' => '19',
'place' => '458',
'region' => '115'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pavia',
'quarter_category' => '19',
'place' => '459',
'region' => '115'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Verona',
'quarter_category' => '19',
'place' => '461',
'region' => '116'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Padua',
'quarter_category' => '19',
'place' => '462',
'region' => '116'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vicenza',
'quarter_category' => '19',
'place' => '463',
'region' => '116'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mantua',
'quarter_category' => '19',
'place' => '464',
'region' => '116'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Genoa',
'quarter_category' => '19',
'place' => '465',
'region' => '117'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Noli',
'quarter_category' => '19',
'place' => '466',
'region' => '117'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aleria',
'quarter_category' => '19',
'place' => '467',
'region' => '117'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Treviso',
'quarter_category' => '19',
'place' => '470',
'region' => '118'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Chioggia',
'quarter_category' => '19',
'place' => '471',
'region' => '118'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Belluno',
'quarter_category' => '19',
'place' => '472',
'region' => '118'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ravenna',
'quarter_category' => '19',
'place' => '473',
'region' => '119'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Forli',
'quarter_category' => '19',
'place' => '475',
'region' => '119'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rimini',
'quarter_category' => '19',
'place' => '476',
'region' => '119'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Modena',
'quarter_category' => '19',
'place' => '477',
'region' => '120'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Parma',
'quarter_category' => '19',
'place' => '478',
'region' => '120'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ferrara',
'quarter_category' => '19',
'place' => '479',
'region' => '120'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bologna',
'quarter_category' => '19',
'place' => '480',
'region' => '120'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aquileja',
'quarter_category' => '19',
'place' => '481',
'region' => '121'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Udine',
'quarter_category' => '19',
'place' => '483',
'region' => '121'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Turin',
'quarter_category' => '19',
'place' => '485',
'region' => '122'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Asti',
'quarter_category' => '19',
'place' => '487',
'region' => '122'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Florence',
'quarter_category' => '19',
'place' => '489',
'region' => '123'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Siena',
'quarter_category' => '19',
'place' => '490',
'region' => '123'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Arezzo',
'quarter_category' => '19',
'place' => '491',
'region' => '123'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Grosseto',
'quarter_category' => '19',
'place' => '492',
'region' => '123'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Spoleto',
'quarter_category' => '19',
'place' => '493',
'region' => '124'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aquila',
'quarter_category' => '19',
'place' => '494',
'region' => '124'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ancona',
'quarter_category' => '19',
'place' => '495',
'region' => '124'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rome',
'quarter_category' => '19',
'place' => '497',
'region' => '125'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Frascati',
'quarter_category' => '19',
'place' => '498',
'region' => '125'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tivoli',
'quarter_category' => '19',
'place' => '499',
'region' => '125'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pisa',
'quarter_category' => '19',
'place' => '501',
'region' => '126'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Carrara',
'quarter_category' => '19',
'place' => '502',
'region' => '126'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lucca',
'quarter_category' => '19',
'place' => '503',
'region' => '126'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Volterra',
'quarter_category' => '19',
'place' => '504',
'region' => '126'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Naples',
'quarter_category' => '19',
'place' => '505',
'region' => '127'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Amalfi',
'quarter_category' => '19',
'place' => '507',
'region' => '127'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Taranto',
'quarter_category' => '19',
'place' => '509',
'region' => '128'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bari',
'quarter_category' => '19',
'place' => '510',
'region' => '128'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Siponto',
'quarter_category' => '19',
'place' => '511',
'region' => '128'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Brindisi',
'quarter_category' => '19',
'place' => '512',
'region' => '128'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cosenza',
'quarter_category' => '19',
'place' => '513',
'region' => '129'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rossano',
'quarter_category' => '19',
'place' => '514',
'region' => '129'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Benevento',
'quarter_category' => '19',
'place' => '517',
'region' => '130'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Monteverde',
'quarter_category' => '19',
'place' => '518',
'region' => '130'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Potenza',
'quarter_category' => '19',
'place' => '519',
'region' => '130'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Sassari',
'quarter_category' => '19',
'place' => '521',
'region' => '131'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bosa',
'quarter_category' => '19',
'place' => '523',
'region' => '131'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Porto Torres',
'quarter_category' => '19',
'place' => '524',
'region' => '131'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cagliari',
'quarter_category' => '19',
'place' => '525',
'region' => '132'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dolia',
'quarter_category' => '19',
'place' => '527',
'region' => '132'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Iglesias',
'quarter_category' => '19',
'place' => '528',
'region' => '132'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Palermo',
'quarter_category' => '19',
'place' => '529',
'region' => '133'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Agrigento',
'quarter_category' => '19',
'place' => '530',
'region' => '133'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Messina',
'quarter_category' => '19',
'place' => '533',
'region' => '134'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Taormina',
'quarter_category' => '19',
'place' => '534',
'region' => '134'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Troina',
'quarter_category' => '19',
'place' => '536',
'region' => '134'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Siracusa',
'quarter_category' => '19',
'place' => '537',
'region' => '135'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tangiers',
'quarter_category' => '19',
'place' => '541',
'region' => '136'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Taza',
'quarter_category' => '19',
'place' => '551',
'region' => '138'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tinmel',
'quarter_category' => '19',
'place' => '560',
'region' => '140'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tlemcen',
'quarter_category' => '19',
'place' => '565',
'region' => '142'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mostaganem',
'quarter_category' => '19',
'place' => '570',
'region' => '143'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Djelfa',
'quarter_category' => '19',
'place' => '573',
'region' => '144'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bejaia',
'quarter_category' => '19',
'place' => '585',
'region' => '147'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Setif',
'quarter_category' => '19',
'place' => '587',
'region' => '147'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Annaba',
'quarter_category' => '19',
'place' => '589',
'region' => '148'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tabarka',
'quarter_category' => '19',
'place' => '590',
'region' => '148'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Zaghouan',
'quarter_category' => '19',
'place' => '594',
'region' => '149'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gabes',
'quarter_category' => '19',
'place' => '601',
'region' => '151'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gafsa',
'quarter_category' => '19',
'place' => '602',
'region' => '151'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ghadames',
'quarter_category' => '19',
'place' => '605',
'region' => '152'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Derna',
'quarter_category' => '19',
'place' => '622',
'region' => '156'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tobruk',
'quarter_category' => '19',
'place' => '623',
'region' => '156'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Alexandria',
'quarter_category' => '19',
'place' => '625',
'region' => '157'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Damietta',
'quarter_category' => '19',
'place' => '627',
'region' => '157'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cairo',
'quarter_category' => '19',
'place' => '629',
'region' => '158'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Helwan',
'quarter_category' => '19',
'place' => '630',
'region' => '158'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Fayum',
'quarter_category' => '19',
'place' => '631',
'region' => '158'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aswan',
'quarter_category' => '19',
'place' => '639',
'region' => '160'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Breslau',
'quarter_category' => '19',
'place' => '643',
'region' => '161'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Krakow',
'quarter_category' => '19',
'place' => '645',
'region' => '162'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gnesen',
'quarter_category' => '19',
'place' => '649',
'region' => '163'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Posen',
'quarter_category' => '19',
'place' => '650',
'region' => '163'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Konin',
'quarter_category' => '19',
'place' => '651',
'region' => '163'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Plock',
'quarter_category' => '19',
'place' => '653',
'region' => '164'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Leslau',
'quarter_category' => '19',
'place' => '655',
'region' => '164'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vilnius',
'quarter_category' => '19',
'place' => '662',
'region' => '166'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pula',
'quarter_category' => '19',
'place' => '665',
'region' => '167'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Zadar',
'quarter_category' => '19',
'place' => '670',
'region' => '168'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Split',
'quarter_category' => '19',
'place' => '671',
'region' => '168'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Biograd',
'quarter_category' => '19',
'place' => '672',
'region' => '168'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Knin',
'quarter_category' => '19',
'place' => '673',
'region' => '169'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kotor',
'quarter_category' => '19',
'place' => '676',
'region' => '169'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Gyor',
'quarter_category' => '19',
'place' => '677',
'region' => '170'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Nitra',
'quarter_category' => '19',
'place' => '679',
'region' => '170'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Veszprem',
'quarter_category' => '19',
'place' => '681',
'region' => '171'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pecs',
'quarter_category' => '19',
'place' => '684',
'region' => '171'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Esztergom',
'quarter_category' => '19',
'place' => '685',
'region' => '172'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Eger',
'quarter_category' => '19',
'place' => '689',
'region' => '173'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pecs',
'quarter_category' => '19',
'place' => '697',
'region' => '175'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kalocsa',
'quarter_category' => '19',
'place' => '699',
'region' => '175'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Alba Julia',
'quarter_category' => '19',
'place' => '701',
'region' => '176'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bucharest',
'quarter_category' => '19',
'place' => '710',
'region' => '178'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Stip',
'quarter_category' => '19',
'place' => '723',
'region' => '181'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pliska',
'quarter_category' => '19',
'place' => '726',
'region' => '182'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Preslav',
'quarter_category' => '19',
'place' => '727',
'region' => '182'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tarnovo',
'quarter_category' => '19',
'place' => '728',
'region' => '182'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Belgrade',
'quarter_category' => '19',
'place' => '733',
'region' => '184'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rashka',
'quarter_category' => '19',
'place' => '737',
'region' => '185'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Krusevac',
'quarter_category' => '19',
'place' => '739',
'region' => '185'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Prizren',
'quarter_category' => '19',
'place' => '741',
'region' => '186'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Skopje',
'quarter_category' => '19',
'place' => '743',
'region' => '186'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kiev',
'quarter_category' => '19',
'place' => '757',
'region' => '190'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Lviv',
'quarter_category' => '19',
'place' => '763',
'region' => '191'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Polotsk',
'quarter_category' => '19',
'place' => '773',
'region' => '194'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Moscow',
'quarter_category' => '19',
'place' => '785',
'region' => '197'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pleskov',
'quarter_category' => '19',
'place' => '789',
'region' => '198'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Novgorod',
'quarter_category' => '19',
'place' => '793',
'region' => '199'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vladimir',
'quarter_category' => '19',
'place' => '801',
'region' => '201'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Suzdal',
'quarter_category' => '19',
'place' => '803',
'region' => '201'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Vologda',
'quarter_category' => '19',
'place' => '805',
'region' => '202'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mishrian',
'quarter_category' => '19',
'place' => '824',
'region' => '206'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Constantinople',
'quarter_category' => '19',
'place' => '825',
'region' => '207'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Corlu',
'quarter_category' => '19',
'place' => '828',
'region' => '207'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Melnik',
'quarter_category' => '19',
'place' => '831',
'region' => '208'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Athens',
'quarter_category' => '19',
'place' => '833',
'region' => '209'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Larissa',
'quarter_category' => '19',
'place' => '836',
'region' => '209'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Modon',
'quarter_category' => '19',
'place' => '838',
'region' => '210'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Arta',
'quarter_category' => '19',
'place' => '841',
'region' => '211'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ioannina',
'quarter_category' => '19',
'place' => '843',
'region' => '211'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Durres',
'quarter_category' => '19',
'place' => '846',
'region' => '212'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ohrid',
'quarter_category' => '19',
'place' => '847',
'region' => '212'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Iraklion',
'quarter_category' => '19',
'place' => '853',
'region' => '214'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Smyrna',
'quarter_category' => '19',
'place' => '857',
'region' => '215'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tralles',
'quarter_category' => '19',
'place' => '861',
'region' => '216'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Miletus',
'quarter_category' => '19',
'place' => '862',
'region' => '216'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Efese',
'quarter_category' => '19',
'place' => '863',
'region' => '216'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Sardes',
'quarter_category' => '19',
'place' => '864',
'region' => '216'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Nicaea',
'quarter_category' => '19',
'place' => '865',
'region' => '217'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kios',
'quarter_category' => '19',
'place' => '866',
'region' => '217'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pergamum',
'quarter_category' => '19',
'place' => '868',
'region' => '217'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ikonion',
'quarter_category' => '19',
'place' => '869',
'region' => '218'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mistheia',
'quarter_category' => '19',
'place' => '870',
'region' => '218'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Laranda',
'quarter_category' => '19',
'place' => '871',
'region' => '218'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Coracesium',
'quarter_category' => '19',
'place' => '873',
'region' => '219'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rhodos',
'quarter_category' => '19',
'place' => '874',
'region' => '219'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Attalia',
'quarter_category' => '19',
'place' => '875',
'region' => '219'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ancyra',
'quarter_category' => '19',
'place' => '877',
'region' => '220'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cotyaeum',
'quarter_category' => '19',
'place' => '879',
'region' => '220'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Dorylaeum',
'quarter_category' => '19',
'place' => '880',
'region' => '220'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Sinope',
'quarter_category' => '19',
'place' => '881',
'region' => '221'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Claudiopolis',
'quarter_category' => '19',
'place' => '884',
'region' => '221'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tarsus',
'quarter_category' => '19',
'place' => '885',
'region' => '222'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Nicosia',
'quarter_category' => '19',
'place' => '887',
'region' => '222'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Caesarea',
'quarter_category' => '19',
'place' => '889',
'region' => '223'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Garsaura',
'quarter_category' => '19',
'place' => '890',
'region' => '223'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Trebizond',
'quarter_category' => '19',
'place' => '893',
'region' => '224'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kerasous',
'quarter_category' => '19',
'place' => '896',
'region' => '224'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Edessa',
'quarter_category' => '19',
'place' => '897',
'region' => '225'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Amasia',
'quarter_category' => '19',
'place' => '901',
'region' => '226'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Samsun',
'quarter_category' => '19',
'place' => '902',
'region' => '226'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Corum',
'quarter_category' => '19',
'place' => '903',
'region' => '226'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Diyarbakir',
'quarter_category' => '19',
'place' => '905',
'region' => '227'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Erzincan',
'quarter_category' => '19',
'place' => '907',
'region' => '227'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tavium',
'quarter_category' => '19',
'place' => '912',
'region' => '228'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Pitsunda',
'quarter_category' => '19',
'place' => '915',
'region' => '229'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tiflis',
'quarter_category' => '19',
'place' => '917',
'region' => '230'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ani',
'quarter_category' => '19',
'place' => '925',
'region' => '232'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ghars',
'quarter_category' => '19',
'place' => '927',
'region' => '232'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mardin',
'quarter_category' => '19',
'place' => '937',
'region' => '235'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Cepha',
'quarter_category' => '19',
'place' => '939',
'region' => '235'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mashhad',
'quarter_category' => '19',
'place' => '947',
'region' => '237'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bushire',
'quarter_category' => '19',
'place' => '958',
'region' => '240'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Isfahan',
'quarter_category' => '19',
'place' => '961',
'region' => '241'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Ghom',
'quarter_category' => '19',
'place' => '967',
'region' => '242'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Mecca',
'quarter_category' => '19',
'place' => '985',
'region' => '247'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Medina',
'quarter_category' => '19',
'place' => '988',
'region' => '247'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Jerusalem',
'quarter_category' => '19',
'place' => '993',
'region' => '249'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Nazareth',
'quarter_category' => '19',
'place' => '998',
'region' => '250'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Bosra',
'quarter_category' => '19',
'place' => '1001',
'region' => '251'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Damascus',
'quarter_category' => '19',
'place' => '1005',
'region' => '252'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Salamiyah',
'quarter_category' => '19',
'place' => '1011',
'region' => '253'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tartous',
'quarter_category' => '19',
'place' => '1014',
'region' => '254'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Beirut',
'quarter_category' => '19',
'place' => '1015',
'region' => '254'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Antioch',
'quarter_category' => '19',
'place' => '1017',
'region' => '255'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Alexandretta',
'quarter_category' => '19',
'place' => '1018',
'region' => '255'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Aleppo',
'quarter_category' => '19',
'place' => '1021',
'region' => '256'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Raqqa',
'quarter_category' => '19',
'place' => '1025',
'region' => '257'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Rhesaina',
'quarter_category' => '19',
'place' => '1027',
'region' => '257'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Erbil',
'quarter_category' => '19',
'place' => '1029',
'region' => '258'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Baghdad',
'quarter_category' => '19',
'place' => '1033',
'region' => '259'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Tikrit',
'quarter_category' => '19',
'place' => '1034',
'region' => '259'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Anbar',
'quarter_category' => '19',
'place' => '1035',
'region' => '259'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Karbala',
'quarter_category' => '19',
'place' => '1038',
'region' => '260'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Kufah',
'quarter_category' => '19',
'place' => '1039',
'region' => '260'
]);
DB::table('quarters')->insert([
'quarter_rank' => 'diocese',
'quarter_name' => 'Najaf',
'quarter_category' => '19',
'place' => '1040',
'region' => '260'
]); 
    }
}
