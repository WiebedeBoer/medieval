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
        //crusader rooms
            DB::table('rooms')->insert([
            'room_name' => 'chapterhouse',
            'room_category' => 'bedroom',
            'building' => '12259'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'refectory',
            'room_category' => 'banquet hall',
            'building' => '12259'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'muniment',
            'room_category' => 'muniment',
            'building' => '12259'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'chapterhouse',
            'room_category' => 'bedroom',
            'building' => '12260'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'refectory',
            'room_category' => 'banquet hall',
            'building' => '12260'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'muniment',
            'room_category' => 'muniment',
            'building' => '12260'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'chapterhouse',
            'room_category' => 'bedroom',
            'building' => '12261'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'refectory',
            'room_category' => 'banquet hall',
            'building' => '12261'
            ]);
            DB::table('rooms')->insert([
            'room_name' => 'muniment',
            'room_category' => 'muniment',
            'building' => '12261'
            ]); 
 
    }
}
