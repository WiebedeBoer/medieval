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
    
    //merchant guild hall Hamburg
    DB::table('buildings')->insert([
    'building_name' => 'Salters Guild',
    'building_type' => '256',
    'place' => '3',
    'quarter' => '16132',
    'region' => '1'
    ]);
    //merchant guild hall Rostock
    DB::table('buildings')->insert([
    'building_name' => 'Fishmongers Guild',
    'building_type' => '256',
    'place' => '14',
    'quarter' => '16143',
    'region' => '4'
    ]);
    //merchant guild hall lubeck
    DB::table('buildings')->insert([
    'building_name' => 'Coopers Guild',
    'building_type' => '256',
    'place' => '15',
    'quarter' => '16144',
    'region' => '4'
    ]);
    //league guild halls
    DB::table('buildings')->insert([
    'building_name' => 'Hanseatic League',
    'building_type' => '256',
    'place' => '15',
    'quarter' => '16144',
    'region' => '4'
    ]);
    //city league augsburg
    DB::table('buildings')->insert([
    'building_name' => 'Swabian League',
    'building_type' => '256',
    'place' => '30',
    'quarter' => '16159',
    'region' => '8'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Nuremberg Fair',
    'building_type' => '256',
    'place' => '32',
    'quarter' => '16161',
    'region' => '8'
    ]);
    //merchant guild hall Nuremberg
    DB::table('buildings')->insert([
    'building_name' => 'Bookbinders Guild',
    'building_type' => '256',
    'place' => '32',
    'quarter' => '16161',
    'region' => '8'
    ]);
    //merchant guild hall Vienna
    DB::table('buildings')->insert([
    'building_name' => 'Coopers Guild',
    'building_type' => '256',
    'place' => '37',
    'quarter' => '16166',
    'region' => '10'
    ]);
    //city league Strassbourg
    DB::table('buildings')->insert([
    'building_name' => 'Alsatian League',
    'building_type' => '256',
    'place' => '59',
    'quarter' => '16188',
    'region' => '15'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Frankfurt Fair',
    'building_type' => '256',
    'place' => '71',
    'quarter' => '16200',
    'region' => '18'
    ]);
    //city league cologne
    DB::table('buildings')->insert([
    'building_name' => 'Rhenish League',
    'building_type' => '256',
    'place' => '73',
    'quarter' => '16202',
    'region' => '19'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Cologne Fair',
    'building_type' => '256',
    'place' => '73',
    'quarter' => '16202',
    'region' => '19'
    ]);
    //merchant guild hall Cologne
    DB::table('buildings')->insert([
    'building_name' => 'Potterers Guild',
    'building_type' => '256',
    'place' => '73',
    'quarter' => '16202',
    'region' => '19'
    ]);
    //city league metz
    DB::table('buildings')->insert([
    'building_name' => 'Lorrainian League',
    'building_type' => '256',
    'place' => '79',
    'quarter' => '16208',
    'region' => '20'
    ]);
    //merchant guild hall Dorestad
    DB::table('buildings')->insert([
    'building_name' => 'Coopers Guild',
    'building_type' => '256',
    'place' => '85',
    'quarter' => '16214',
    'region' => '22'
    ]);
    //merchant guild hall Gouda
    DB::table('buildings')->insert([
    'building_name' => 'Cheesemongers Guild',
    'building_type' => '256',
    'place' => '86',
    'quarter' => '16215',
    'region' => '22'
    ]);
    //chivalry guild bruges
    DB::table('buildings')->insert([
        'building_name' => 'Order of the Golden Fleece',
        'building_type' => '256',
        'place' => '97',
        'quarter' => '18585',
        'region' => '25'
    ]);
    //kontor guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Bruges',
    'building_type' => '256',
    'place' => '97',
    'quarter' => '16226',
    'region' => '25'
    ]);
    //merchant guild hall Bruges
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '97',
    'quarter' => '16226',
    'region' => '25'
    ]);
    //merchant guild hall Ghent
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '98',
    'quarter' => '16227',
    'region' => '25'
    ]);
    //merchant guild hall Cambrai
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '99',
    'quarter' => '16228',
    'region' => '25'
    ]);
    //merchant guild hall Ypres
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '100',
    'quarter' => '16229',
    'region' => '25'
    ]);
    //chivalry guild paris
    DB::table('buildings')->insert([
        'building_name' => 'Order of the Star',
        'building_type' => '256',
        'place' => '113',
        'quarter' => '18601',
        'region' => '29'
    ]);
    //merchant guild hall paris
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '113',
    'quarter' => '16242',
    'region' => '29'
    ]);
    //merchant guild hall Meaux
    DB::table('buildings')->insert([
    'building_name' => 'Cheesemongers Guild',
    'building_type' => '256',
    'place' => '114',
    'quarter' => '16243',
    'region' => '29'
    ]);
    //merchant guild hall Chartres
    DB::table('buildings')->insert([
    'building_name' => 'Tanners Guild',
    'building_type' => '256',
    'place' => '115',
    'quarter' => '16244',
    'region' => '29'
    ]);
    //merchant guild hall Saint Denis
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '116',
    'quarter' => '16245',
    'region' => '29'
    ]);
    //fair guild hall troyes
    DB::table('buildings')->insert([
    'building_name' => 'Champagne Fairs',
    'building_type' => '256',
    'place' => '129',
    'quarter' => '16258',
    'region' => '33'
    ]);
    //merchant guild hall Reims
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '131',
    'quarter' => '16260',
    'region' => '33'
    ]);
    //merchant guild hall Clairvaux
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '132',
    'quarter' => '16261',
    'region' => '33'
    ]);
    //merchant guild hall Chateaudun
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '134',
    'quarter' => '16263',
    'region' => '34'
    ]);
    //merchant guild hall Avignon
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '164',
    'quarter' => '16293',
    'region' => '41'
    ]);
    //merchant guild hall Toulouse
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '165',
    'quarter' => '16294',
    'region' => '42'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Toulouse Fair',
    'building_type' => '256',
    'place' => '165',
    'quarter' => '16294',
    'region' => '42'
    ]);
    //merchant guild hall Bordeaux
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '169',
    'quarter' => '16298',
    'region' => '43'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Lyon Fair',
    'building_type' => '256',
    'place' => '179',
    'quarter' => '16308',
    'region' => '45'
    ]);
    //merchant guild hall Chalon
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '183',
    'quarter' => '16312',
    'region' => '46'
    ]);
    //merchant guild hall london
    DB::table('buildings')->insert([
        'building_name' => 'Drapers Guild',
        'building_type' => '256',
        'place' => '185',
        'quarter' => '16314',
        'region' => '47'
    ]);
    //kontor guild hall london
    DB::table('buildings')->insert([
    'building_name' => 'London Steelyard',
    'building_type' => '256',
    'place' => '185',
    'quarter' => '16314',
    'region' => '47'
    ]);
    //chivalry guild windsor
    DB::table('buildings')->insert([
        'building_name' => 'Order of the Garter',
        'building_type' => '256',
        'place' => '186',
        'quarter' => '18674',
        'region' => '47'
    ]);
    //merchant guild hall Norwich
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '201',
    'quarter' => '16330',
    'region' => '51'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Scarborough Fair',
    'building_type' => '256',
    'place' => '207',
    'quarter' => '16336',
    'region' => '52'
    ]);
    //merchant guild hall Scarborough
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '207',
    'quarter' => '16336',
    'region' => '52'
    ]);
    //merchant guild hall Lincoln
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '221',
    'quarter' => '16350',
    'region' => '56'
    ]);
    //kontor guild hall bergen
    DB::table('buildings')->insert([
    'building_name' => 'Tyskebryggen',
    'building_type' => '256',
    'place' => '241',
    'quarter' => '16370',
    'region' => '61'
    ]);
    //merchant guild hall bergen
    DB::table('buildings')->insert([
    'building_name' => 'Fishmongers Guild',
    'building_type' => '256',
    'place' => '241',
    'quarter' => '16370',
    'region' => '61'
    ]);
    //merchant guild hall Trelleborg
    DB::table('buildings')->insert([
    'building_name' => 'Fishmongers Guild',
    'building_type' => '256',
    'place' => '250',
    'quarter' => '16379',
    'region' => '63'
    ]);
    //merchant guild hall Stockholm
    DB::table('buildings')->insert([
    'building_name' => 'Coopers Guild',
    'building_type' => '256',
    'place' => '257',
    'quarter' => '16386',
    'region' => '65'
    ]);
    //merchant guild hall Riga
    DB::table('buildings')->insert([
    'building_name' => 'Chandlers Guild',
    'building_type' => '256',
    'place' => '269',
    'quarter' => '16398',
    'region' => '68'
    ]);
    //city league Marienburg
    DB::table('buildings')->insert([
    'building_name' => 'Prussian League',
    'building_type' => '256',
    'place' => '277',
    'quarter' => '16406',
    'region' => '70'
    ]);
    //merchant guild hall Marienburg
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '277',
    'quarter' => '16406',
    'region' => '70'
    ]);
    //merchant guild hall Danzig
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '279',
    'quarter' => '16408',
    'region' => '70'
    ]);
    //merchant guild hall Koningsberg
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '280',
    'quarter' => '16409',
    'region' => '70'
    ]);
    //merchant guild hall Reval
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '285',
    'quarter' => '16414',
    'region' => '72'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Pamplona Fair',
    'building_type' => '256',
    'place' => '345',
    'quarter' => '16474',
    'region' => '87'
    ]);
    //merchant guild hall Valencia
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '369',
    'quarter' => '16498',
    'region' => '93'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Leon Fair',
    'building_type' => '256',
    'place' => '381',
    'quarter' => '16510',
    'region' => '96'
    ]);
    //merchant guild hall Avila
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '390',
    'quarter' => '16519',
    'region' => '98'
    ]);
    //merchant guild hall Segovia
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '391',
    'quarter' => '16520',
    'region' => '98'
    ]);
    //merchant guild hall Burgos
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '393',
    'quarter' => '16522',
    'region' => '99'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Santiago Fair',
    'building_type' => '256',
    'place' => '397',
    'quarter' => '16526',
    'region' => '100'
    ]);
    //merchant guild hall Porto
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '405',
    'quarter' => '16534',
    'region' => '102'
    ]);
    //merchant guild hall Cordoba
    DB::table('buildings')->insert([
    'building_name' => 'Tanners Guild',
    'building_type' => '256',
    'place' => '425',
    'quarter' => '16554',
    'region' => '107'
    ]);
    //merchant guild hall Granada
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '441',
    'quarter' => '16570',
    'region' => '111'
    ]);
    //merchant guild hall Almeria
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '445',
    'quarter' => '16574',
    'region' => '112'
    ]);
    //merchant guild hall Milan
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '457',
    'quarter' => '16586',
    'region' => '115'
    ]);
    //city league verona
    DB::table('buildings')->insert([
    'building_name' => 'Lombard League',
    'building_type' => '256',
    'place' => '461',
    'quarter' => '16590',
    'region' => '116'
    ]);
    //merchant guild hall verona
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '461',
    'quarter' => '16590',
    'region' => '116'
    ]);
    //merchant guild hall Padua
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '462',
    'quarter' => '16591',
    'region' => '116'
    ]);
    //merchant guild hall Mantua
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '464',
    'quarter' => '16593',
    'region' => '116'
    ]);
    //merchant guild hall Genoa
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '465',
    'quarter' => '16594',
    'region' => '117'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Genoa Fair',
    'building_type' => '256',
    'place' => '465',
    'quarter' => '16594',
    'region' => '117'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Venice Fair',
    'building_type' => '256',
    'place' => '469',
    'quarter' => '16598',
    'region' => '118'
    ]);
    //merchant guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '469',
    'quarter' => '16598',
    'region' => '118'
    ]);
    //city league florence
    DB::table('buildings')->insert([
    'building_name' => 'Tuscan League',
    'building_type' => '256',
    'place' => '489',
    'quarter' => '16618',
    'region' => '123'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Florence Fair',
    'building_type' => '256',
    'place' => '489',
    'quarter' => '16618',
    'region' => '123'
    ]);
    //merchant guild hall Pisa
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '501',
    'quarter' => '16630',
    'region' => '126'
    ]);
    //merchant guild hall Lucca
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '503',
    'quarter' => '16632',
    'region' => '126'
    ]);
    //merchant guild hall Gaeta
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '506',
    'quarter' => '16635',
    'region' => '127'
    ]);
    //merchant guild hall Amalfi
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '507',
    'quarter' => '16636',
    'region' => '127'
    ]);
    //fair guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Palermo Fair',
    'building_type' => '256',
    'place' => '529',
    'quarter' => '16658',
    'region' => '133'
    ]);
    //merchant guild hall Palermo
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '529',
    'quarter' => '16658',
    'region' => '133'
    ]);
    //merchant guild hall Marsala
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '532',
    'quarter' => '16661',
    'region' => '133'
    ]);
    //merchant guild hall Fez
    DB::table('buildings')->insert([
    'building_name' => 'Dyers Guild',
    'building_type' => '256',
    'place' => '549',
    'quarter' => '16678',
    'region' => '138'
    ]);
    //merchant guild hall Marrakesh
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '553',
    'quarter' => '16682',
    'region' => '139'
    ]);
    //merchant guild hall Tunis
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '593',
    'quarter' => '16722',
    'region' => '149'
    ]);
    //merchant guild hall Cairo
    DB::table('buildings')->insert([
    'building_name' => 'Potterers Guild',
    'building_type' => '256',
    'place' => '629',
    'quarter' => '16758',
    'region' => '158'
    ]);
    //merchant guild hall Krakow
    DB::table('buildings')->insert([
    'building_name' => 'Mercers Guild',
    'building_type' => '256',
    'place' => '645',
    'quarter' => '16774',
    'region' => '162'
    ]);
    //kontor guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Kauen',
    'building_type' => '256',
    'place' => '663',
    'quarter' => '16792',
    'region' => '166'
    ]);
    //merchant guild hall Ragusa
    DB::table('buildings')->insert([
    'building_name' => 'Vintners Guild',
    'building_type' => '256',
    'place' => '669',
    'quarter' => '16798',
    'region' => '168'
    ]);
    //chivalry guild Esztergom
    DB::table('buildings')->insert([
        'building_name' => 'Order Saint George',
        'building_type' => '256',
        'place' => '685',
        'quarter' => '19173',
        'region' => '172'
    ]);
    //city league Esztergom
    DB::table('buildings')->insert([
    'building_name' => 'Hungarian League',
    'building_type' => '256',
    'place' => '685',
    'quarter' => '16814',
    'region' => '172'
    ]);
    //merchant guild hall Kiev
    DB::table('buildings')->insert([
    'building_name' => 'Chandlers Guild',
    'building_type' => '256',
    'place' => '757',
    'quarter' => '16886',
    'region' => '190'
    ]);
    //kontor guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Pleskov',
    'building_type' => '256',
    'place' => '789',
    'quarter' => '16918',
    'region' => '198'
    ]);
    //merchant guild hall Pleskov
    DB::table('buildings')->insert([
    'building_name' => 'Furriers Guild',
    'building_type' => '256',
    'place' => '789',
    'quarter' => '16918',
    'region' => '198'
    ]);
    //kontor guild hall
    DB::table('buildings')->insert([
    'building_name' => 'Novgorod Peterhof',
    'building_type' => '256',
    'place' => '793',
    'quarter' => '16922',
    'region' => '199'
    ]);
    //merchant guild hall Ladoga
    DB::table('buildings')->insert([
    'building_name' => 'Furriers Guild',
    'building_type' => '256',
    'place' => '795',
    'quarter' => '16924',
    'region' => '199'
    ]);
    //merchant guild hall Constantinople
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '825',
    'quarter' => '16954',
    'region' => '207'
    ]);
    //merchant guild hall Thebes
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '835',
    'quarter' => '16964',
    'region' => '209'
    ]);
    //merchant guild hall Corinth
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '839',
    'quarter' => '16968',
    'region' => '210'
    ]);
    //merchant guild hall Smyrna
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '857',
    'quarter' => '16986',
    'region' => '215'
    ]);
    //merchant guild hall Bursa
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '867',
    'quarter' => '16996',
    'region' => '217'
    ]);
    //merchant guild hall Ikonion
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '869',
    'quarter' => '16998',
    'region' => '218'
    ]);
    //merchant guild hall Nicosia
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '887',
    'quarter' => '17016',
    'region' => '222'
    ]);
    //merchant guild hall Sivas
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '909',
    'quarter' => '17038',
    'region' => '228'
    ]);
    //merchant guild hall Kerman
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '953',
    'quarter' => '17082',
    'region' => '239'
    ]);
    //merchant guild hall Shiraz
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '957',
    'quarter' => '17086',
    'region' => '240'
    ]);
    //merchant guild hall Isfahan
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '961',
    'quarter' => '17090',
    'region' => '241'
    ]);
    //merchant guild hall Rhages
    DB::table('buildings')->insert([
    'building_name' => 'Haberdashers Guild',
    'building_type' => '256',
    'place' => '965',
    'quarter' => '17094',
    'region' => '242'
    ]); 
    //merchant guild hall Jerusalem
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '993',
    'quarter' => '17122',
    'region' => '249'
    ]);
    //merchant guild hall Damascus
    DB::table('buildings')->insert([
    'building_name' => 'Drapers Guild',
    'building_type' => '256',
    'place' => '1005',
    'quarter' => '17134',
    'region' => '252'
    ]);
    //merchant guild hall Damascus
    DB::table('buildings')->insert([
    'building_name' => 'Cutlers Guild',
    'building_type' => '256',
    'place' => '1005',
    'quarter' => '17134',
    'region' => '252'
    ]);
    //merchant guild hall Baghdad
    DB::table('buildings')->insert([
    'building_name' => 'Cutlers Guild',
    'building_type' => '256',
    'place' => '1033',
    'quarter' => '17162',
    'region' => '259'
    ]);   
		
    }
}
