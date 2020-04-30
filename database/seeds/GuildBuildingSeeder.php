<?php

use Illuminate\Database\Seeder;

class GuildBuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//military guild halls
DB::table('buildings')->insert([
'building_name' => 'Order of the Garter',
'building_type' => '256',
'place' => '186',
'quarter' => '1246',
'region' => '47'
]);
DB::table('buildings')->insert([
'building_name' => 'Order of the Star',
'building_type' => '256',
'place' => '113',
'quarter' => '1174',
'region' => '29'
]);
DB::table('buildings')->insert([
'building_name' => 'Order Saint George',
'building_type' => '256',
'place' => '685',
'quarter' => '1744',
'region' => '172'
]);
DB::table('buildings')->insert([
'building_name' => 'Order of the Golden Fleece',
'building_type' => '256',
'place' => '97',
'quarter' => '1158',
'region' => '25'
]);
//league guild halls
DB::table('buildings')->insert([
'building_name' => 'Hanseatic League',
'building_type' => '256',
'place' => '15',
'quarter' => '3083',
'region' => '4'
]);
DB::table('buildings')->insert([
'building_name' => 'Lorrainian League',
'building_type' => '256',
'place' => '79',
'quarter' => '3147',
'region' => '20'
]);
DB::table('buildings')->insert([
'building_name' => 'Alsatian League',
'building_type' => '256',
'place' => '59',
'quarter' => '3127',
'region' => '15'
]);
DB::table('buildings')->insert([
'building_name' => 'Swabian League',
'building_type' => '256',
'place' => '30',
'quarter' => '3098',
'region' => '8'
]);
DB::table('buildings')->insert([
'building_name' => 'Lombard League',
'building_type' => '256',
'place' => '461',
'quarter' => '3529',
'region' => '116'
]);
DB::table('buildings')->insert([
'building_name' => 'Tuscan League',
'building_type' => '256',
'place' => '489',
'quarter' => '3557',
'region' => '123'
]);
DB::table('buildings')->insert([
'building_name' => 'Rhenish League',
'building_type' => '256',
'place' => '73',
'quarter' => '3141',
'region' => '19'
]);
DB::table('buildings')->insert([
'building_name' => 'Prussian League',
'building_type' => '256',
'place' => '277',
'quarter' => '3345',
'region' => '70'
]);
DB::table('buildings')->insert([
'building_name' => 'Hungarian League',
'building_type' => '256',
'place' => '685',
'quarter' => '3753',
'region' => '172'
]);
//kontor guild halls
DB::table('buildings')->insert([
'building_name' => 'London Steelyard',
'building_type' => '256',
'place' => '185',
'quarter' => '3253',
'region' => '47'
]);
DB::table('buildings')->insert([
'building_name' => 'Bruges',
'building_type' => '256',
'place' => '97',
'quarter' => '3165',
'region' => '25'
]);
DB::table('buildings')->insert([
'building_name' => 'Tyskebryggen',
'building_type' => '256',
'place' => '241',
'quarter' => '3309',
'region' => '61'
]);
DB::table('buildings')->insert([
'building_name' => 'Kauen',
'building_type' => '256',
'place' => '663',
'quarter' => '3731',
'region' => '166'
]);
DB::table('buildings')->insert([
'building_name' => 'Novgorod Peterhof',
'building_type' => '256',
'place' => '793',
'quarter' => '3861',
'region' => '199'
]);
DB::table('buildings')->insert([
'building_name' => 'Pleskov',
'building_type' => '256',
'place' => '789',
'quarter' => '3857',
'region' => '198'
]);
//fair guild halls
DB::table('buildings')->insert([
'building_name' => 'Champagne Fairs',
'building_type' => '256',
'place' => '129',
'quarter' => '3197',
'region' => '33'
]);
DB::table('buildings')->insert([
'building_name' => 'Toulouse Fair',
'building_type' => '256',
'place' => '165',
'quarter' => '3233',
'region' => '42'
]);
DB::table('buildings')->insert([
'building_name' => 'Nuremberg Fair',
'building_type' => '256',
'place' => '32',
'quarter' => '3100',
'region' => '8'
]);
DB::table('buildings')->insert([
'building_name' => 'Genoa Fair',
'building_type' => '256',
'place' => '465',
'quarter' => '3533',
'region' => '117'
]);
DB::table('buildings')->insert([
'building_name' => 'Venice Fair',
'building_type' => '256',
'place' => '469',
'quarter' => '3537',
'region' => '118'
]);
DB::table('buildings')->insert([
'building_name' => 'Florence Fair',
'building_type' => '256',
'place' => '489',
'quarter' => '3557',
'region' => '123'
]);
DB::table('buildings')->insert([
'building_name' => 'Scarborough Fair',
'building_type' => '256',
'place' => '207',
'quarter' => '3275',
'region' => '52'
]);
DB::table('buildings')->insert([
'building_name' => 'Cologne Fair',
'building_type' => '256',
'place' => '73',
'quarter' => '3141',
'region' => '19'
]);
DB::table('buildings')->insert([
'building_name' => 'Frankfurt Fair',
'building_type' => '256',
'place' => '71',
'quarter' => '3139',
'region' => '18'
]);
DB::table('buildings')->insert([
'building_name' => 'Lyon Fair',
'building_type' => '256',
'place' => '179',
'quarter' => '3247',
'region' => '45'
]);
DB::table('buildings')->insert([
'building_name' => 'Palermo Fair',
'building_type' => '256',
'place' => '529',
'quarter' => '3597',
'region' => '133'
]);
DB::table('buildings')->insert([
'building_name' => 'Santiago Fair',
'building_type' => '256',
'place' => '397',
'quarter' => '3465',
'region' => '100'
]);
DB::table('buildings')->insert([
'building_name' => 'Leon Fair',
'building_type' => '256',
'place' => '381',
'quarter' => '3449',
'region' => '96'
]);
DB::table('buildings')->insert([
'building_name' => 'Pamplona Fair',
'building_type' => '256',
'place' => '345',
'quarter' => '3413',
'region' => '87'
]);
//merchant guild halls
DB::table('buildings')->insert([
'building_name' => 'Cheesemongers Guild',
'building_type' => '256',
'place' => '86',
'quarter' => '3154',
'region' => '22'
]);
DB::table('buildings')->insert([
'building_name' => 'Coopers Guild',
'building_type' => '256',
'place' => '85',
'quarter' => '3153',
'region' => '22'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '97',
'quarter' => '3165',
'region' => '25'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '98',
'quarter' => '3166',
'region' => '25'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '100',
'quarter' => '3168',
'region' => '25'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '99',
'quarter' => '3167',
'region' => '25'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '185',
'quarter' => '3253',
'region' => '47'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '207',
'quarter' => '3275',
'region' => '52'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '201',
'quarter' => '3269',
'region' => '51'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '221',
'quarter' => '3289',
'region' => '56'
]);
DB::table('buildings')->insert([
'building_name' => 'Potterers Guild',
'building_type' => '256',
'place' => '73',
'quarter' => '3141',
'region' => '19'
]);
DB::table('buildings')->insert([
'building_name' => 'Bookbinders Guild',
'building_type' => '256',
'place' => '32',
'quarter' => '3100',
'region' => '8'
]);
DB::table('buildings')->insert([
'building_name' => 'Salters Guild',
'building_type' => '256',
'place' => '3',
'quarter' => '3071',
'region' => '1'
]);
DB::table('buildings')->insert([
'building_name' => 'Fishmongers Guild',
'building_type' => '256',
'place' => '14',
'quarter' => '3082',
'region' => '4'
]);
DB::table('buildings')->insert([
'building_name' => 'Coopers Guild',
'building_type' => '256',
'place' => '15',
'quarter' => '3083',
'region' => '4'
]);
DB::table('buildings')->insert([
'building_name' => 'Coopers Guild',
'building_type' => '256',
'place' => '37',
'quarter' => '3105',
'region' => '10'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '469',
'quarter' => '3537',
'region' => '118'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '457',
'quarter' => '3525',
'region' => '115'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '464',
'quarter' => '3532',
'region' => '116'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '465',
'quarter' => '3533',
'region' => '117'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '462',
'quarter' => '3530',
'region' => '116'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '461',
'quarter' => '3529',
'region' => '116'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '501',
'quarter' => '3569',
'region' => '126'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '503',
'quarter' => '3571',
'region' => '126'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '669',
'quarter' => '3737',
'region' => '168'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '532',
'quarter' => '3600',
'region' => '133'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '529',
'quarter' => '3597',
'region' => '133'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '507',
'quarter' => '3575',
'region' => '127'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '506',
'quarter' => '3574',
'region' => '127'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '645',
'quarter' => '3713',
'region' => '162'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '277',
'quarter' => '3345',
'region' => '70'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '279',
'quarter' => '3347',
'region' => '70'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '280',
'quarter' => '3348',
'region' => '70'
]);
DB::table('buildings')->insert([
'building_name' => 'Chandlers Guild',
'building_type' => '256',
'place' => '269',
'quarter' => '3337',
'region' => '68'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '285',
'quarter' => '3353',
'region' => '72'
]);
DB::table('buildings')->insert([
'building_name' => 'Fishmongers Guild',
'building_type' => '256',
'place' => '241',
'quarter' => '3309',
'region' => '61'
]);
DB::table('buildings')->insert([
'building_name' => 'Fishmongers Guild',
'building_type' => '256',
'place' => '250',
'quarter' => '3318',
'region' => '63'
]);
DB::table('buildings')->insert([
'building_name' => 'Coopers Guild',
'building_type' => '256',
'place' => '257',
'quarter' => '3325',
'region' => '65'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '113',
'quarter' => '3181',
'region' => '29'
]);
DB::table('buildings')->insert([
'building_name' => 'Cheesemongers Guild',
'building_type' => '256',
'place' => '114',
'quarter' => '3182',
'region' => '29'
]);
DB::table('buildings')->insert([
'building_name' => 'Tanners Guild',
'building_type' => '256',
'place' => '115',
'quarter' => '3183',
'region' => '29'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '116',
'quarter' => '3184',
'region' => '29'
]);
DB::table('buildings')->insert([
'building_name' => 'Mercers Guild',
'building_type' => '256',
'place' => '134',
'quarter' => '3202',
'region' => '34'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '165',
'quarter' => '3233',
'region' => '42'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '169',
'quarter' => '3237',
'region' => '43'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '183',
'quarter' => '3251',
'region' => '46'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '164',
'quarter' => '3232',
'region' => '41'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '131',
'quarter' => '3199',
'region' => '33'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '132',
'quarter' => '3200',
'region' => '33'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '390',
'quarter' => '3458',
'region' => '98'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '391',
'quarter' => '3459',
'region' => '98'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '393',
'quarter' => '3461',
'region' => '99'
]);
DB::table('buildings')->insert([
'building_name' => 'Vintners Guild',
'building_type' => '256',
'place' => '405',
'quarter' => '3473',
'region' => '102'
]);
DB::table('buildings')->insert([
'building_name' => 'Furriers Guild',
'building_type' => '256',
'place' => '789',
'quarter' => '3857',
'region' => '198'
]);
DB::table('buildings')->insert([
'building_name' => 'Furriers Guild',
'building_type' => '256',
'place' => '795',
'quarter' => '3863',
'region' => '199'
]);
DB::table('buildings')->insert([
'building_name' => 'Chandlers Guild',
'building_type' => '256',
'place' => '757',
'quarter' => '3825',
'region' => '190'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '825',
'quarter' => '3893',
'region' => '207'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '835',
'quarter' => '3903',
'region' => '209'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '909',
'quarter' => '3977',
'region' => '228'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '839',
'quarter' => '3907',
'region' => '210'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '857',
'quarter' => '3925',
'region' => '215'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '887',
'quarter' => '3955',
'region' => '222'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '867',
'quarter' => '3935',
'region' => '217'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '869',
'quarter' => '3937',
'region' => '218'
]);
DB::table('buildings')->insert([
'building_name' => 'Tanners Guild',
'building_type' => '256',
'place' => '425',
'quarter' => '3493',
'region' => '107'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '441',
'quarter' => '3509',
'region' => '111'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '369',
'quarter' => '3437',
'region' => '93'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '445',
'quarter' => '3513',
'region' => '112'
]);
DB::table('buildings')->insert([
'building_name' => 'Dyers Guild',
'building_type' => '256',
'place' => '549',
'quarter' => '3617',
'region' => '138'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '553',
'quarter' => '3621',
'region' => '139'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '593',
'quarter' => '3661',
'region' => '149'
]);
DB::table('buildings')->insert([
'building_name' => 'Potterers Guild',
'building_type' => '256',
'place' => '629',
'quarter' => '3697',
'region' => '158'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '993',
'quarter' => '4061',
'region' => '249'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '1005',
'quarter' => '4073',
'region' => '252'
]);
DB::table('buildings')->insert([
'building_name' => 'Cutlers Guild',
'building_type' => '256',
'place' => '1005',
'quarter' => '4073',
'region' => '252'
]);
DB::table('buildings')->insert([
'building_name' => 'Cutlers Guild',
'building_type' => '256',
'place' => '1033',
'quarter' => '4101',
'region' => '259'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '961',
'quarter' => '4029',
'region' => '241'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '957',
'quarter' => '4025',
'region' => '240'
]);
DB::table('buildings')->insert([
'building_name' => 'Drapers Guild',
'building_type' => '256',
'place' => '953',
'quarter' => '4021',
'region' => '239'
]);
DB::table('buildings')->insert([
'building_name' => 'Haberdashers Guild',
'building_type' => '256',
'place' => '965',
'quarter' => '4033',
'region' => '242'
]); 

//crusader foundation chapterhouses
DB::table('buildings')->insert([
'building_name' => 'Teutonic Knights Foundation Chapterhouse',
'building_type' => '125',
'place' => '277',
'quarter' => '2309',
'region' => '70'
]);
DB::table('buildings')->insert([
'building_name' => 'Knights Hospitaller Foundation Chapterhouse',
'building_type' => '125',
'place' => '993',
'quarter' => '2647',
'region' => '249'
]);
DB::table('buildings')->insert([
'building_name' => 'Knights Templar Foundation Chapterhouse',
'building_type' => '125',
'place' => '993',
'quarter' => '2647',
'region' => '249'
]);
//monastic foundation abbeys
DB::table('buildings')->insert([
'building_name' => 'Augustinian Order Foundation Abbey',
'building_type' => '107',
'place' => '497',
'quarter' => '2475',
'region' => '125'
]);
DB::table('buildings')->insert([
'building_name' => 'Benedictine Order Foundation Abbey',
'building_type' => '107',
'place' => '500',
'quarter' => '2478',
'region' => '125'
]);
DB::table('buildings')->insert([
'building_name' => 'Carmelite Order Foundation Abbey',
'building_type' => '107',
'place' => '192',
'quarter' => '2232',
'region' => '48'
]);
DB::table('buildings')->insert([
'building_name' => 'Cistercian Order Foundation Abbey',
'building_type' => '107',
'place' => '132',
'quarter' => '2186',
'region' => '33'
]);
DB::table('buildings')->insert([
'building_name' => 'Franciscan Order Foundation Abbey',
'building_type' => '107',
'place' => '496',
'quarter' => '2474',
'region' => '124'
]);
//other monastic foundation
DB::table('buildings')->insert([
'building_name' => 'Greek Orthodox Monastery',
'building_type' => '111',
'place' => '825',
'quarter' => '2602',
'region' => '207'
]);
DB::table('buildings')->insert([
'building_name' => 'Serbian Orthodox Monastery',
'building_type' => '119',
'place' => '736',
'quarter' => '2578',
'region' => '184'
]);
DB::table('buildings')->insert([
'building_name' => 'Russian Orthodox Monastery',
'building_type' => '115',
'place' => '749',
'quarter' => '2585',
'region' => '188'
]);
DB::table('buildings')->insert([
'building_name' => 'Sufi Order',
'building_type' => '123',
'place' => '988',
'quarter' => '2646',
'region' => '247'
]); 
		
		
    }
}
