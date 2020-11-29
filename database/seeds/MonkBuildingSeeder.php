<?php

use Illuminate\Database\Seeder;

class MonkBuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//crusader building
//crusader foundation chapterhouse, Marienburg
DB::table('buildings')->insert([
'building_name' => 'Teutonic Knights Foundation Chapterhouse',
'building_type' => '125',
'place' => '277',
'quarter' => '18482',
'region' => '70'
]);
//crusader foundation chapterhouse, Jerusalem
DB::table('buildings')->insert([
'building_name' => 'Knights Hospitaller Foundation Chapterhouse',
'building_type' => '125',
'place' => '993',
'quarter' => '18483',
'region' => '249'
]);
//crusader foundation chapterhouse, Jerusalem
DB::table('buildings')->insert([
'building_name' => 'Knights Templar Foundation Chapterhouse',
'building_type' => '125',
'place' => '993',
'quarter' => '18484',
'region' => '249'
]);
//monastic building
//monastic foundation abbey . rome
DB::table('buildings')->insert([
'building_name' => 'Augustinian Order Foundation Abbey',
'building_type' => '107',
'place' => '497',
'quarter' => '18485',
'region' => '125'
]);
//monastic foundation abbey, Subiaco
DB::table('buildings')->insert([
'building_name' => 'Benedictine Order Foundation Abbey',
'building_type' => '107',
'place' => '500',
'quarter' => '16089',
'region' => '125'
]);
//monastic foundation abbey . maidstone
DB::table('buildings')->insert([
'building_name' => 'Carmelite Order Foundation Abbey',
'building_type' => '107',
'place' => '192',
'quarter' => '18486',
'region' => '48'
]);
//monastic abbey, Clairvaux
DB::table('buildings')->insert([
'building_name' => 'Cistercian Order Abbey of Clairvaux',
'building_type' => '107',
'place' => '132',
'quarter' => '16052',
'region' => '33'
]);
//monastic foundation abbey, Assissi
DB::table('buildings')->insert([
'building_name' => 'Franciscan Order Foundation Abbey',
'building_type' => '107',
'place' => '496',
'quarter' => '16043',
'region' => '124'
]);
//other monastic foundation
//monastic foundation abbey . constantinople
DB::table('buildings')->insert([
'building_name' => 'Greek Orthodox Monastery',
'building_type' => '111',
'place' => '825',
'quarter' => '18487',
'region' => '207'
]);
//monastic foundation abbey, bukovo
DB::table('buildings')->insert([
'building_name' => 'Serbian Orthodox Monastery',
'building_type' => '119',
'place' => '736',
'quarter' => '16099',
'region' => '184'
]);
//monastic foundation abbey, Monastyrski
DB::table('buildings')->insert([
'building_name' => 'Russian Orthodox Monastery',
'building_type' => '115',
'place' => '749',
'quarter' => '16104',
'region' => '188'
]);
//sufi building
//sufi foundation order . medina
DB::table('buildings')->insert([
'building_name' => 'Sufi Order',
'building_type' => '123',
'place' => '988',
'quarter' => '18488',
'region' => '247'
]); 
    //common catholic abbeys  
    DB::table('buildings')->insert([
        'building_name' => 'Abbey of Corvey',
        'building_type' => '107',
        'place' => '4',
        'quarter' => '16029',
        'region' => '1'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Gernrode',
        'building_type' => '107',
        'place' => '12',
        'quarter' => '16030',
        'region' => '3'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Berchtesgaden',
        'building_type' => '107',
        'place' => '36',
        'quarter' => '16031',
        'region' => '9'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Sankt Gallen',
        'building_type' => '107',
        'place' => '56',
        'quarter' => '16032',
        'region' => '14'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Fulda',
        'building_type' => '107',
        'place' => '72',
        'quarter' => '16033',
        'region' => '18'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Stavelot',
        'building_type' => '107',
        'place' => '76',
        'quarter' => '16034',
        'region' => '19'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Pruem',
        'building_type' => '107',
        'place' => '80',
        'quarter' => '16035',
        'region' => '20'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Thorn',
        'building_type' => '107',
        'place' => '96',
        'quarter' => '16036',
        'region' => '24'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Saint Denis',
        'building_type' => '107',
        'place' => '116',
        'quarter' => '16037',
        'region' => '29'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Vezelay',
        'building_type' => '107',
        'place' => '152',
        'quarter' => '16038',
        'region' => '38'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Dunfermline',
        'building_type' => '107',
        'place' => '312',
        'quarter' => '16039',
        'region' => '78'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Wexford',
        'building_type' => '107',
        'place' => '333',
        'quarter' => '16040',
        'region' => '84'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Santo Domingo de Silos',
        'building_type' => '107',
        'place' => '394',
        'quarter' => '16041',
        'region' => '99'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Pinerollo',
        'building_type' => '107',
        'place' => '488',
        'quarter' => '16042',
        'region' => '122'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Broda',
        'building_type' => '107',
        'place' => '16',
        'quarter' => '16044',
        'region' => '4'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Paderborn',
        'building_type' => '107',
        'place' => '28',
        'quarter' => '16045',
        'region' => '7'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Seckau',
        'building_type' => '107',
        'place' => '44',
        'quarter' => '16046',
        'region' => '11'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Plass',
        'building_type' => '107',
        'place' => '64',
        'quarter' => '16047',
        'region' => '16'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Trebitz',
        'building_type' => '107',
        'place' => '68',
        'quarter' => '16048',
        'region' => '17'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Moosburg',
        'building_type' => '107',
        'place' => '104',
        'quarter' => '16049',
        'region' => '26'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Sittich',
        'building_type' => '107',
        'place' => '108',
        'quarter' => '16050',
        'region' => '27'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Redon',
        'building_type' => '107',
        'place' => '112',
        'quarter' => '16051',
        'region' => '28'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Issoire',
        'building_type' => '107',
        'place' => '160',
        'quarter' => '16053',
        'region' => '40'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Saint Benoit',
        'building_type' => '107',
        'place' => '168',
        'quarter' => '16054',
        'region' => '42'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Montauban',
        'building_type' => '107',
        'place' => '172',
        'quarter' => '16055',
        'region' => '43'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Tulle',
        'building_type' => '107',
        'place' => '176',
        'quarter' => '16056',
        'region' => '44'
        ]);
        //citeaux foundation
        DB::table('buildings')->insert([
        'building_name' => 'Cistercian Order Foundation Abbey',
        'building_type' => '107',
        'place' => '184',
        'quarter' => '16057',
        'region' => '46'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Wimborne',
        'building_type' => '107',
        'place' => '196',
        'quarter' => '16058',
        'region' => '49'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Madron',
        'building_type' => '107',
        'place' => '200',
        'quarter' => '16059',
        'region' => '50'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Croxton',
        'building_type' => '107',
        'place' => '204',
        'quarter' => '16060',
        'region' => '51'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Llanllugan',
        'building_type' => '107',
        'place' => '232',
        'quarter' => '16061',
        'region' => '58'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Gimsoy',
        'building_type' => '107',
        'place' => '240',
        'quarter' => '16062',
        'region' => '60'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Halsnoy',
        'building_type' => '107',
        'place' => '244',
        'quarter' => '16063',
        'region' => '61'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Esrum',
        'building_type' => '107',
        'place' => '248',
        'quarter' => '16064',
        'region' => '62'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Herrevad',
        'building_type' => '107',
        'place' => '252',
        'quarter' => '16065',
        'region' => '63'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Essenbaek',
        'building_type' => '107',
        'place' => '256',
        'quarter' => '16066',
        'region' => '64'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Eskilstuna',
        'building_type' => '107',
        'place' => '260',
        'quarter' => '16067',
        'region' => '65'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Nydala',
        'building_type' => '107',
        'place' => '264',
        'quarter' => '16068',
        'region' => '66'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Vadstena',
        'building_type' => '107',
        'place' => '268',
        'quarter' => '16069',
        'region' => '67'
        ]);
        //not
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Georgenburg',
        'building_type' => '107',
        'place' => '284',
        'quarter' => '16070',
        'region' => '71'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Kirkcudbright',
        'building_type' => '107',
        'place' => '304',
        'quarter' => '16071',
        'region' => '76'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Arbroath',
        'building_type' => '107',
        'place' => '320',
        'quarter' => '16072',
        'region' => '80'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Durrow',
        'building_type' => '107',
        'place' => '336',
        'quarter' => '16073',
        'region' => '84'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Leyre',
        'building_type' => '107',
        'place' => '348',
        'quarter' => '16074',
        'region' => '87'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of San Sebastian',
        'building_type' => '107',
        'place' => '349',
        'quarter' => '16075',
        'region' => '88'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Sobrarbe',
        'building_type' => '107',
        'place' => '356',
        'quarter' => '16076',
        'region' => '89'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Rueda',
        'building_type' => '107',
        'place' => '360',
        'quarter' => '16077',
        'region' => '90'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Sant Feliu de Guixols',
        'building_type' => '107',
        'place' => '364',
        'quarter' => '16078',
        'region' => '91'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Serra',
        'building_type' => '107',
        'place' => '372',
        'quarter' => '16079',
        'region' => '93'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Gandia',
        'building_type' => '107',
        'place' => '376',
        'quarter' => '16080',
        'region' => '94'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Santo Toribio',
        'building_type' => '107',
        'place' => '388',
        'quarter' => '16081',
        'region' => '97'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Salamanca',
        'building_type' => '107',
        'place' => '392',
        'quarter' => '16082',
        'region' => '98'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of San Millan',
        'building_type' => '107',
        'place' => '396',
        'quarter' => '16083',
        'region' => '99'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Alcobaca',
        'building_type' => '107',
        'place' => '404',
        'quarter' => '16084',
        'region' => '101'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Vivarium',
        'building_type' => '107',
        'place' => '516',
        'quarter' => '16090',
        'region' => '129'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Viggiano',
        'building_type' => '107',
        'place' => '520',
        'quarter' => '16091',
        'region' => '130'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Leubus',
        'building_type' => '107',
        'place' => '644',
        'quarter' => '16095',
        'region' => '161'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Salzberg',
        'building_type' => '107',
        'place' => '648',
        'quarter' => '16096',
        'region' => '162'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Lindow',
        'building_type' => '107',
        'place' => '20',
        'quarter' => '16118',
        'region' => '5'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Saint Albans',
        'building_type' => '107',
        'place' => '216',
        'quarter' => '16119',
        'region' => '54'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Kells',
        'building_type' => '107',
        'place' => '334',
        'quarter' => '16120',
        'region' => '84'
        ]);
        //not
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Monserrat',
        'building_type' => '107',
        'place' => '368',
        'quarter' => '16121',
        'region' => '92'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Sahagun',
        'building_type' => '107',
        'place' => '384',
        'quarter' => '16122',
        'region' => '96'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Bobbio',
        'building_type' => '107',
        'place' => '468',
        'quarter' => '16123',
        'region' => '117'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Cassino',
        'building_type' => '107',
        'place' => '508',
        'quarter' => '16124',
        'region' => '127'
        ]);
        DB::table('buildings')->insert([
        'building_name' => 'Abbey of Carta',
        'building_type' => '107',
        'place' => '704',
        'quarter' => '16126',
        'region' => '176'
        ]);  
        //common greek orthodox monasteries
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Saint Jovan',
            'building_type' => '111',
            'place' => '848',
            'quarter' => '16111',
            'region' => '212'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Kirants',
            'building_type' => '111',
            'place' => '928',
            'quarter' => '16112',
            'region' => '232'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Arakelots',
            'building_type' => '111',
            'place' => '936',
            'quarter' => '16113',
            'region' => '234'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Nisibis',
            'building_type' => '111',
            'place' => '940',
            'quarter' => '16114',
            'region' => '235'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Hilandar',
            'building_type' => '111',
            'place' => '832',
            'quarter' => '16128',
            'region' => '208'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Patmos',
            'building_type' => '111',
            'place' => '860',
            'quarter' => '16129',
            'region' => '215'
            ]); 
        //common serbian orthodox monasteries
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Tismana',
            'building_type' => '119',
            'place' => '708',
            'quarter' => '16097',
            'region' => '177'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Rila',
            'building_type' => '119',
            'place' => '724',
            'quarter' => '16098',
            'region' => '181'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Bukovo',
            'building_type' => '119',
            'place' => '738',
            'quarter' => '16100',
            'region' => '185'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Zica',
            'building_type' => '119',
            'place' => '740',
            'quarter' => '16101',
            'region' => '185'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Vitina',
            'building_type' => '119',
            'place' => '744',
            'quarter' => '16102',
            'region' => '186'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Berane',
            'building_type' => '119',
            'place' => '748',
            'quarter' => '16103',
            'region' => '187'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Rasa',
            'building_type' => '119',
            'place' => '734',
            'quarter' => '16127',
            'region' => '184'
            ]); 
        //russian orthodox monasteries
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Pechersk',
            'building_type' => '115',
            'place' => '760',
            'quarter' => '16105',
            'region' => '190'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Mazyr',
            'building_type' => '115',
            'place' => '772',
            'quarter' => '16106',
            'region' => '193'
            ]);
            //not
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Sergiev',
            'building_type' => '115',
            'place' => '786',
            'quarter' => '16107',
            'region' => '197'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Simonov',
            'building_type' => '115',
            'place' => '788',
            'quarter' => '16108',
            'region' => '197'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Cherepovets',
            'building_type' => '115',
            'place' => '807',
            'quarter' => '16109',
            'region' => '202'
            ]);
            DB::table('buildings')->insert([
            'building_name' => 'monastery of Kirillov',
            'building_type' => '115',
            'place' => '808',
            'quarter' => '16110',
            'region' => '202'
            ]); 
 

    }
}
