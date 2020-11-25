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
//monastic foundation abbey .
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
//monastic foundation abbey .
DB::table('buildings')->insert([
'building_name' => 'Carmelite Order Foundation Abbey',
'building_type' => '107',
'place' => '192',
'quarter' => '18486',
'region' => '48'
]);
//monastic foundation abbey, Clairvaux
DB::table('buildings')->insert([
'building_name' => 'Cistercian Order Foundation Abbey',
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
//monastic foundation abbey .
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
//sufi foundation order .
DB::table('buildings')->insert([
'building_name' => 'Sufi Order',
'building_type' => '123',
'place' => '988',
'quarter' => '18488',
'region' => '247'
]); 
//common abbeys     
        

    }
}
