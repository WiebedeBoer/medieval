<?php

use Illuminate\Database\Seeder;

class GuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//default guilds
		//guild 1 wanderers
		DB::table('guilds')->insert([
			'guild_name' => 'Wanderers',
			'guild_category' => 'wanderers',
			'place' => '497',
			'realm' => '1',
			'master' => '1'
		]);	
		//chivalric guilds
		//guild 2, england, windsor
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Garter',
			'guild_category' => 'chivalric',
			'place' => '186',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 3, france, paris
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Star',
			'guild_category' => 'chivalric',
			'place' => '113',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 4, hungary, esztergom
		DB::table('guilds')->insert([
			'guild_name' => 'Order Saint George',
			'guild_category' => 'chivalric',
			'place' => '685',
			'realm' => '1',
			'master' => '1'
		]);	
		//guild 5, holy roman empire, bruges
		DB::table('guilds')->insert([
			'guild_name' => 'Order of the Golden Fleece',
			'guild_category' => 'chivalric',
			'place' => '97',
			'realm' => '3',
			'master' => '1'
		]);	
		//crusader guilds
		//guild 6, teutonic knights
		DB::table('guilds')->insert([
			'guild_name' => 'Teutonic Knights',
			'guild_category' => 'crusader',
			'place' => '277',
			'realm' => '5',
			'master' => '1'
		]);	
		//guild 7, knights hospitaller
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Hospitaller',
			'guild_category' => 'crusader',
			'place' => '993',
			'realm' => '6',
			'master' => '1'
		]);	
		//guild 8, knights templar
		DB::table('guilds')->insert([
			'guild_name' => 'Knights Templar',
			'guild_category' => 'crusader',
			'place' => '993',
			'realm' => '7',
			'master' => '1'
		]);	
    }
}
