<?php

use Illuminate\Database\Seeder;

class RealmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//default realms
		//realm 1, wanderers
		DB::table('realms')->insert([
			'realm_name' => 'Wanderers',
			'realm_type' => 'wanderers',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '497',			
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'							
		]);	
		//papacy
		//realm 2, papacy
		DB::table('realms')->insert([
			'realm_name' => 'Papal States',
			'realm_type' => 'papacy',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '497',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//empires
		//realm 3, holy roman empire
		DB::table('realms')->insert([
			'realm_name' => 'Holy Roman Empire',
			'realm_type' => 'elective empire',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '8',
			'capital' => '29',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 4, byzantine empire
		DB::table('realms')->insert([
			'realm_name' => 'Byzantine Empire',
			'realm_type' => 'feudal empire',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '825',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);					
		//crusaders
		//realm 5, teutonic order state
		DB::table('realms')->insert([
			'realm_name' => 'Teutonic Order State',
			'realm_type' => 'confederate crusader',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '34',
			'capital' => '277',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 6, knights hospitaller
		DB::table('realms')->insert([
			'realm_name' => 'Knights Hospitaller',
			'realm_type' => 'crusader',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '12',
			'capital' => '993',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm 7, knights templar
		DB::table('realms')->insert([
			'realm_name' => 'Knights Templar',
			'realm_type' => 'crusader',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '14',
			'capital' => '993',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//chivalric kingdoms
		//realm 8, england
		DB::table('realms')->insert([
			'realm_name' => 'England',
			'realm_type' => 'chivalric kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '18',
			'capital' => '185',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm 9, france
		DB::table('realms')->insert([
			'realm_name' => 'France',
			'realm_type' => 'chivalric kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '14',
			'capital' => '113',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm 10, hungary
		DB::table('realms')->insert([
			'realm_name' => 'Hungary',
			'realm_type' => 'chivalric kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '37',
			'capital' => '685',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
    }
}
