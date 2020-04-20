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
		//monastic guilds
		//guild 9
		DB::table('guilds')->insert([
			'guild_name' => 'Augustinian Order',
			'guild_category' => 'monastic',
			'place' => '497',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 10
		DB::table('guilds')->insert([
			'guild_name' => 'Benedictine Order',
			'guild_category' => 'monastic',
			'place' => '500',
			'realm' => '2',
			'master' => '1'
		]);	
		//guild 11
		DB::table('guilds')->insert([
			'guild_name' => 'Carmelite Order',
			'guild_category' => 'monastic',
			'place' => '192',
			'realm' => '8',
			'master' => '1'
		]);	
		//guild 12
		DB::table('guilds')->insert([
			'guild_name' => 'Cistercian Order',
			'guild_category' => 'monastic',
			'place' => '132',
			'realm' => '9',
			'master' => '1'
		]);	
		//guild 13
		DB::table('guilds')->insert([
			'guild_name' => 'Franciscan Order',
			'guild_category' => 'monastic',
			'place' => '496',
			'realm' => '2',
			'master' => '1'
		]);			
		
    }
}
