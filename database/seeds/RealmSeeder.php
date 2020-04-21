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
		//elective empires
		//realm 3, holy roman empire
		DB::table('realms')->insert([
			'realm_name' => 'Holy Roman Empire',
			'realm_type' => 'elective_empire',
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
		//dynastic empires
		//realm 4, byzantine empire
		DB::table('realms')->insert([
			'realm_name' => 'Byzantine Empire',
			'realm_type' => 'dynastic_empire',
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
		//confederate crusaders
		//realm 5, teutonic order state
		DB::table('realms')->insert([
			'realm_name' => 'Teutonic Order State',
			'realm_type' => 'confederate_crusader',
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
		//crusaders
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
			'realm_type' => 'chivalric_kingdom',
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
			'realm_type' => 'chivalric_kingdom',
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
			'realm_type' => 'chivalric_kingdom',
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
		//tanistry high kingdoms
		//realm 11, ireland
		DB::table('realms')->insert([
			'realm_name' => 'Ireland',
			'realm_type' => 'tanistry_high_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '326',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//tanistry kingdoms
		//realm 12, ulster
		DB::table('realms')->insert([
			'realm_name' => 'Ulster',
			'realm_type' => 'tanistry_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '329',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 13, meath
		DB::table('realms')->insert([
			'realm_name' => 'Meath',
			'realm_type' => 'tanistry_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '325',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 14, leinster
		DB::table('realms')->insert([
			'realm_name' => 'Leinster',
			'realm_type' => 'tanistry_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '333',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 15, munster
		DB::table('realms')->insert([
			'realm_name' => 'Munster',
			'realm_type' => 'tanistry_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '337',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm 16, connaught
		DB::table('realms')->insert([
			'realm_name' => 'Connaught',
			'realm_type' => 'tanistry_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '22',
			'capital' => '343',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//judicature kingdom
		//realm 17, sardinia
		DB::table('realms')->insert([
			'realm_name' => 'Sardinia',
			'realm_type' => 'judicature_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '24',
			'capital' => '521',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//dynastic kingdoms
		//realm , denmark
		DB::table('realms')->insert([
			'realm_name' => 'Denmark',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '1',
			'capital' => '245',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , norway
		DB::table('realms')->insert([
			'realm_name' => 'Norway',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '3',
			'capital' => '237',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , sweden
		DB::table('realms')->insert([
			'realm_name' => 'Sweden',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '2',
			'capital' => '257',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , scotland
		DB::table('realms')->insert([
			'realm_name' => 'Scotland',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '20',
			'capital' => '289',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//realm , burgundy
		DB::table('realms')->insert([
			'realm_name' => 'Burgundy',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '15',
			'capital' => '161',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , germany
		DB::table('realms')->insert([
			'realm_name' => 'Germany',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '5',
			'capital' => '74',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , italy
		DB::table('realms')->insert([
			'realm_name' => 'Italy',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '12',
			'capital' => '459',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , bohemia
		DB::table('realms')->insert([
			'realm_name' => 'Bohemia',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '11',
			'capital' => '61',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , naples
		DB::table('realms')->insert([
			'realm_name' => 'Naples',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '23',
			'capital' => '505',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , sicily
		DB::table('realms')->insert([
			'realm_name' => 'Sicily',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '25',
			'capital' => '529',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , croatia
		DB::table('realms')->insert([
			'realm_name' => 'Croatia',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '38',
			'capital' => '673',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , poland
		DB::table('realms')->insert([
			'realm_name' => 'Poland',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '35',
			'capital' => '645',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//realm , navarre
		DB::table('realms')->insert([
			'realm_name' => 'Navarre',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '28',
			'capital' => '345',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , aragon
		DB::table('realms')->insert([
			'realm_name' => 'Aragon',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '27',
			'capital' => '353',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , castile
		DB::table('realms')->insert([
			'realm_name' => 'Castile',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '29',
			'capital' => '389',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , leon
		DB::table('realms')->insert([
			'realm_name' => 'Leon',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '30',
			'capital' => '381',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , galicia
		DB::table('realms')->insert([
			'realm_name' => 'Galicia',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '31',
			'capital' => '397',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , portugal
		DB::table('realms')->insert([
			'realm_name' => 'Portugal',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '32',
			'capital' => '401',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Kars',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '45',
			'capital' => '925',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Georgia',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '44',
			'capital' => '917',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Thrace',
			'realm_type' => 'dynastic_kingdom',
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
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Bulgaria',
			'realm_type' => 'dynastic_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '40',
			'capital' => '727',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//caliphates
		//realm , cordoba 
		DB::table('realms')->insert([
			'realm_name' => 'Cordoba',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '425',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Fez',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '52',
			'capital' => '549',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Marrakesh',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '52',
			'capital' => '553',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Kairouan',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '51',
			'capital' => '597',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Cairo',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '50',
			'capital' => '629',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Syria',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '47',
			'capital' => '1005',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Jerusalem',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '47',
			'capital' => '993',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Baghdad',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '47',
			'capital' => '1033',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Persia',
			'realm_type' => 'dynastic_caliphate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '55',
			'capital' => '957',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);
		//sharifates
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Hejaz',
			'realm_type' => 'dynastic_sharifate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '49',
			'capital' => '988',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//steppe kingdoms
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Kwarezm',
			'realm_type' => 'steppe_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '54',
			'capital' => '821',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Khazaria',
			'realm_type' => 'steppe_kingdom',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '54',
			'capital' => '817',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//grand duchy
		//realm , lithuania
		DB::table('realms')->insert([
			'realm_name' => 'Lithuania',
			'realm_type' => 'dynastic_grandduchy',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '36',
			'capital' => '661',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , trebizond
		DB::table('realms')->insert([
			'realm_name' => 'Trebizond',
			'realm_type' => 'dynastic_grandduchy',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '893',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//arch duchy
		//realm , austria
		DB::table('realms')->insert([
			'realm_name' => 'Austria',
			'realm_type' => 'dynastic_archduchy',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '7',
			'capital' => '37',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//dynastic principalities
		//realm , wales
		DB::table('realms')->insert([
			'realm_name' => 'Wales',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '19',
			'capital' => '225',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , taranto
		DB::table('realms')->insert([
			'realm_name' => 'Taranto',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '23',
			'capital' => '509',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , benevento
		DB::table('realms')->insert([
			'realm_name' => 'Benevento',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '23',
			'capital' => '517',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , catalonia
		DB::table('realms')->insert([
			'realm_name' => 'Catalonia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '26',
			'capital' => '365',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , asturias
		DB::table('realms')->insert([
			'realm_name' => 'Asturias',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '30',
			'capital' => '385',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , 
		DB::table('realms')->insert([
			'realm_name' => 'Azerbaijan',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '45',
			'capital' => '929',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , 
		DB::table('realms')->insert([
			'realm_name' => 'Armenia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '45',
			'capital' => '935',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm , 
		DB::table('realms')->insert([
			'realm_name' => 'Mardin',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '45',
			'capital' => '937',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , 
		DB::table('realms')->insert([
			'realm_name' => 'Vaspurakan',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '45',
			'capital' => '939',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm , amid 
		DB::table('realms')->insert([
			'realm_name' => 'Amid',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '905',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Taron',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '907',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Peleponessos',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '837',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Hellas',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '833',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Icosium',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '869',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Anatolia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '870',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Karaman',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '871',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Smyrna',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '857',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Thracesia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '861',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Coracesium',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '873',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Bursa',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '867',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Opsicia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '865',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Cappadocia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '889',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Sebasteia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '909',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Paphlagonia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '881',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Canik',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '902',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Nicopolis',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '841',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Epirus',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '845',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Thessaloniki',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '829',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Macedonia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '831',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Bucellaria',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '43',
			'capital' => '877',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Raskha',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '39',
			'capital' => '737',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Wallachia',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '41',
			'capital' => '707',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Moldova',
			'realm_type' => 'dynastic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '41',
			'capital' => '717',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//agnatic principalities
		//realm ,  
		DB::table('realms')->insert([
			'realm_name' => 'Halych',
			'realm_type' => 'agnatic_principality',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '42',
			'capital' => '761',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		
		//emirates
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Zaragoza',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '27',
			'capital' => '357',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Baleares',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '26',
			'capital' => '377',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Valencia',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '26',
			'capital' => '369',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Denia',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '26',
			'capital' => '373',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Murcia',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '449',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Granada',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '441',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Almeria',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '445',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Malaga',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '453',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Sevilla',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '429',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Badajoz',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '433',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Toledo',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '46',
			'capital' => '437',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Algarve',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '53',
			'capital' => '421',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Ifni',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '52',
			'capital' => '557',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Figuig',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '52',
			'capital' => '562',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);				
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Najd',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '48',
			'capital' => '981',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Antioch',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '47',
			'capital' => '1017',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Isfahan',
			'realm_type' => 'dynastic_emirate',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '55',
			'capital' => '961',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//merchant republics
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Venice',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '12',
			'capital' => '469',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Genoa',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '12',
			'capital' => '465',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Noli',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '12',
			'capital' => '466',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Gaeta',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '23',
			'capital' => '506',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Pisa',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '501',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Ragusa',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '38',
			'capital' => '669',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Amalfi',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '23',
			'capital' => '507',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);			
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Ancona',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '495',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Florence',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '489',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);		
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Lucca',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'capital' => '503',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		//realm
		DB::table('realms')->insert([
			'realm_name' => 'Novgorod',
			'realm_type' => 'merchant_republic',
			'ruler' => '1',
			'dynasty' => '1',
			'culture' => '42',
			'capital' => '793',
			'chancellor' => '1',
			'chamberlain' => '1',
			'marshall' => '1',
			'admiral' => '1',
			'steward' => '1'
		]);	
		
    }
}
