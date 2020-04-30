<?php

use Illuminate\Database\Seeder;

class RoomChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crusader
DB::table('rooms')->insert([
'room_name' => 'chapterhouse',
'room_category' => 'bedroom',
'building' => '5473'
]);
DB::table('rooms')->insert([
'room_name' => 'refectory',
'room_category' => 'banquet hall',
'building' => '5473'
]);
DB::table('rooms')->insert([
'room_name' => 'muniment',
'room_category' => 'muniment',
'building' => '5473'
]);
DB::table('rooms')->insert([
'room_name' => 'chapterhouse',
'room_category' => 'bedroom',
'building' => '5474'
]);
DB::table('rooms')->insert([
'room_name' => 'refectory',
'room_category' => 'banquet hall',
'building' => '5474'
]);
DB::table('rooms')->insert([
'room_name' => 'muniment',
'room_category' => 'muniment',
'building' => '5474'
]);
DB::table('rooms')->insert([
'room_name' => 'chapterhouse',
'room_category' => 'bedroom',
'building' => '5475'
]);
DB::table('rooms')->insert([
'room_name' => 'refectory',
'room_category' => 'banquet hall',
'building' => '5475'
]);
DB::table('rooms')->insert([
'room_name' => 'muniment',
'room_category' => 'muniment',
'building' => '5475'
]); 
    }
}
