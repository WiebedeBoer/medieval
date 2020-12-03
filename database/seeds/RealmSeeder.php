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
			'culture' => '13'						
		]);	
		//papacy
		//realm 2, papacy
		DB::table('realms')->insert([
			'realm_name' => 'Papal States',
			'realm_type' => 'papacy',					
			'culture' => '13'		
		]);
		//elective empires
		//realm 3, holy roman empire
		DB::table('realms')->insert([
			'realm_name' => 'Holy Roman Empire',
			'realm_type' => 'elective_empire',			
			'culture' => '8'		
		]);	
		//dynastic empires
		//realm 4, byzantine empire
		DB::table('realms')->insert([
			'realm_name' => 'Byzantine Empire',
			'realm_type' => 'dynastic_empire',
			'culture' => '43'	
		]);					
		//confederate crusaders
		//realm 5, teutonic order state
		DB::table('realms')->insert([
			'realm_name' => 'Teutonic Order State',
			'realm_type' => 'confederate_crusader',	
			'culture' => '34'	
		]);	
		//crusaders
		//realm 6, knights hospitaller
		DB::table('realms')->insert([
			'realm_name' => 'Knights Hospitaller',
			'realm_type' => 'crusader',		
			'culture' => '12'	
		]);		
		//realm 7, knights templar
		DB::table('realms')->insert([
			'realm_name' => 'Knights Templar',
			'realm_type' => 'crusader',		
			'culture' => '14'	
		]);	
		//chivalric kingdoms
		//realm 8, england
		DB::table('realms')->insert([
			'realm_name' => 'England',
			'realm_type' => 'chivalric_kingdom',		
			'culture' => '18'		
		]);			
		//realm 9, france
		DB::table('realms')->insert([
			'realm_name' => 'France',
			'realm_type' => 'chivalric_kingdom',			
			'culture' => '14'		
		]);			
		//realm 10, hungary
		DB::table('realms')->insert([
			'realm_name' => 'Hungary',
			'realm_type' => 'chivalric_kingdom',	
			'culture' => '37'
		]);	
		//tanistry high kingdoms
		//realm 11, ireland
		DB::table('realms')->insert([
			'realm_name' => 'Ireland',
			'realm_type' => 'tanistry_high_kingdom',	
			'culture' => '22'	
		]);	
		//tanistry kingdoms
		//realm 12, ulster
		DB::table('realms')->insert([
			'realm_name' => 'Ulster',
			'realm_type' => 'tanistry_kingdom',	
			'culture' => '22'	
		]);	
		//realm 13, meath
		DB::table('realms')->insert([
			'realm_name' => 'Meath',
			'realm_type' => 'tanistry_kingdom',	
			'culture' => '22'
		]);	
		//realm 14, leinster
		DB::table('realms')->insert([
			'realm_name' => 'Leinster',
			'realm_type' => 'tanistry_kingdom',
			'culture' => '22'
		]);	
		//realm 15, munster
		DB::table('realms')->insert([
			'realm_name' => 'Munster',
			'realm_type' => 'tanistry_kingdom',
			'culture' => '22'
		]);	
		//realm 16, connaught
		DB::table('realms')->insert([
			'realm_name' => 'Connaught',
			'realm_type' => 'tanistry_kingdom',	
			'culture' => '22'	
		]);	
		//judicature kingdom
		//realm 17, sardinia
		DB::table('realms')->insert([
			'realm_name' => 'Sardinia',
			'realm_type' => 'judicature_kingdom',	
			'culture' => '24'
		]);		
		//dynastic kingdoms
		//realm 18, denmark
		DB::table('realms')->insert([
			'realm_name' => 'Denmark',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '1'
		]);	
		//realm 19, norway
		DB::table('realms')->insert([
			'realm_name' => 'Norway',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '3'
		]);	
		//realm 20, sweden
		DB::table('realms')->insert([
			'realm_name' => 'Sweden',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '2'
		]);	
		//realm 21, scotland
		DB::table('realms')->insert([
			'realm_name' => 'Scotland',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '20'
		]);
		//realm 22, burgundy
		DB::table('realms')->insert([
			'realm_name' => 'Burgundy',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '15'
		]);	
		//realm 23, germany
		DB::table('realms')->insert([
			'realm_name' => 'Germany',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '5'
		]);	
		//realm 24, italy
		DB::table('realms')->insert([
			'realm_name' => 'Italy',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '12'
		]);	
		//realm 25, bohemia
		DB::table('realms')->insert([
			'realm_name' => 'Bohemia',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '11'
		]);	
		//realm 26, naples
		DB::table('realms')->insert([
			'realm_name' => 'Naples',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '23'
		]);	
		//realm 27, sicily
		DB::table('realms')->insert([
			'realm_name' => 'Sicily',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '25'
		]);	
		//realm 28, croatia
		DB::table('realms')->insert([
			'realm_name' => 'Croatia',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '38'
		]);	
		//realm 29, poland
		DB::table('realms')->insert([
			'realm_name' => 'Poland',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '35'	
		]);
		//realm 30, navarre
		DB::table('realms')->insert([
			'realm_name' => 'Navarre',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '28'
		]);	
		//realm 31, aragon
		DB::table('realms')->insert([
			'realm_name' => 'Aragon',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '27'	
		]);	
		//realm 32, castile
		DB::table('realms')->insert([
			'realm_name' => 'Castile',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '29'	
		]);	
		//realm 33, leon
		DB::table('realms')->insert([
			'realm_name' => 'Leon',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '30'	
		]);	
		//realm 34, galicia
		DB::table('realms')->insert([
			'realm_name' => 'Galicia',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '31'	
		]);	
		//realm 35, portugal
		DB::table('realms')->insert([
			'realm_name' => 'Portugal',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '32'	
		]);
		//realm 36, kars
		DB::table('realms')->insert([
			'realm_name' => 'Kars',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '45'	
		]);	
		//realm 37, georgia
		DB::table('realms')->insert([
			'realm_name' => 'Georgia',
			'realm_type' => 'dynastic_kingdom',	
			'culture' => '44'	
		]);	
		//realm 38, bulgaria
		DB::table('realms')->insert([
			'realm_name' => 'Bulgaria',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '40'
		]);			
		//caliphates
		//realm 39, cordoba 
		DB::table('realms')->insert([
			'realm_name' => 'Cordoba',
			'realm_type' => 'dynastic_caliphate',
			'culture' => '46'
		]);	
		//realm 40, fez
		DB::table('realms')->insert([
			'realm_name' => 'Fez',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '52'
		]);	
		//realm 41, marrakesh
		DB::table('realms')->insert([
			'realm_name' => 'Marrakesh',
			'realm_type' => 'dynastic_caliphate',	
			'culture' => '52'
		]);	
		//realm 42, kairouan
		DB::table('realms')->insert([
			'realm_name' => 'Kairouan',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '51'
		]);	
		//realm 43, cairo
		DB::table('realms')->insert([
			'realm_name' => 'Cairo',
			'realm_type' => 'dynastic_caliphate',
			'culture' => '50'
		]);
		//realm 44, syria
		DB::table('realms')->insert([
			'realm_name' => 'Syria',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '47'
		]);	
		//realm 45 jerusalem
		DB::table('realms')->insert([
			'realm_name' => 'Jerusalem',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '47'
		]);	
		//realm 46, baghdad
		DB::table('realms')->insert([
			'realm_name' => 'Baghdad',
			'realm_type' => 'dynastic_caliphate',
			'culture' => '47'
		]);
		//realm 47, persia
		DB::table('realms')->insert([
			'realm_name' => 'Persia',
			'realm_type' => 'dynastic_kingdom',
			'culture' => '55'
		]);
		//sharifates
		//realm 48, hejaz
		DB::table('realms')->insert([
			'realm_name' => 'Hejaz',
			'realm_type' => 'dynastic_sharifate',	
			'culture' => '49'
		]);			
		//steppe kingdoms
		//realm 49, kwarezm
		DB::table('realms')->insert([
			'realm_name' => 'Kwarezm',
			'realm_type' => 'steppe_kingdom',
			'culture' => '54'
		]);	
		//realm 50, khazaria
		DB::table('realms')->insert([
			'realm_name' => 'Khazaria',
			'realm_type' => 'steppe_kingdom',
			'culture' => '54'
		]);	
		//grand duchy
		//realm 51, lithuania
		DB::table('realms')->insert([
			'realm_name' => 'Lithuania',
			'realm_type' => 'dynastic_grandduchy',
			'culture' => '36'
		]);	
		//realm 52, trebizond
		DB::table('realms')->insert([
			'realm_name' => 'Trebizond',
			'realm_type' => 'dynastic_grandduchy',
			'culture' => '43'
		]);			
		//arch duchy
		//realm 53, austria
		DB::table('realms')->insert([
			'realm_name' => 'Austria',
			'realm_type' => 'dynastic_archduchy',
			'culture' => '7'
		]);			
		//dynastic principalities
		//realm 54, wales
		DB::table('realms')->insert([
			'realm_name' => 'Wales',
			'realm_type' => 'dynastic_principality',
			'culture' => '19'
		]);	
		//realm 55, taranto
		DB::table('realms')->insert([
			'realm_name' => 'Taranto',
			'realm_type' => 'dynastic_principality',
			'culture' => '23'
		]);	
		//realm 56, benevento
		DB::table('realms')->insert([
			'realm_name' => 'Benevento',
			'realm_type' => 'dynastic_principality',
			'culture' => '23'
		]);	
		//realm 57, catalonia
		DB::table('realms')->insert([
			'realm_name' => 'Catalonia',
			'realm_type' => 'dynastic_principality',
			'culture' => '26'
		]);	
		//realm 58, asturias
		DB::table('realms')->insert([
			'realm_name' => 'Asturias',
			'realm_type' => 'dynastic_principality',
			'culture' => '30'
		]);	
		//realm 59, azerbaijan
		DB::table('realms')->insert([
			'realm_name' => 'Azerbaijan',
			'realm_type' => 'dynastic_principality',
			'culture' => '45'
		]);	
		//realm 60, armenia
		DB::table('realms')->insert([
			'realm_name' => 'Armenia',
			'realm_type' => 'dynastic_principality',
			'culture' => '45'
		]);		
		//realm 61, mardin 
		DB::table('realms')->insert([
			'realm_name' => 'Mardin',
			'realm_type' => 'dynastic_principality',
			'culture' => '45'
		]);	
		//realm 62, vaspurakan
		DB::table('realms')->insert([
			'realm_name' => 'Vaspurakan',
			'realm_type' => 'dynastic_principality',
			'culture' => '45'
		]);	
		//realm 63, amid 
		DB::table('realms')->insert([
			'realm_name' => 'Amid',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);			
		//realm 64, taron 
		DB::table('realms')->insert([
			'realm_name' => 'Taron',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 65, peleponessos
		DB::table('realms')->insert([
			'realm_name' => 'Peleponessos',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 66, hellas
		DB::table('realms')->insert([
			'realm_name' => 'Hellas',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 67, icosium
		DB::table('realms')->insert([
			'realm_name' => 'Icosium',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);			
		//realm 68, anatolia 
		DB::table('realms')->insert([
			'realm_name' => 'Anatolia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 69, karaman
		DB::table('realms')->insert([
			'realm_name' => 'Karaman',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 70, smyrna 
		DB::table('realms')->insert([
			'realm_name' => 'Smyrna',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 71, thracesia
		DB::table('realms')->insert([
			'realm_name' => 'Thracesia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);		
		//realm 72, coracesium 
		DB::table('realms')->insert([
			'realm_name' => 'Coracesium',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 73, Bursa
		DB::table('realms')->insert([
			'realm_name' => 'Bursa',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 74, opsicia
		DB::table('realms')->insert([
			'realm_name' => 'Opsicia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 75, cappadocia
		DB::table('realms')->insert([
			'realm_name' => 'Cappadocia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);		
		//realm 76, sebasteia
		DB::table('realms')->insert([
			'realm_name' => 'Sebasteia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 77, paphlagonia
		DB::table('realms')->insert([
			'realm_name' => 'Paphlagonia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 78, canik
		DB::table('realms')->insert([
			'realm_name' => 'Canik',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 79, nicopolis 
		DB::table('realms')->insert([
			'realm_name' => 'Nicopolis',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);		
		//realm 80, epirus 
		DB::table('realms')->insert([
			'realm_name' => 'Epirus',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 81, thessaloniki 
		DB::table('realms')->insert([
			'realm_name' => 'Thessaloniki',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 82, macedonia
		DB::table('realms')->insert([
			'realm_name' => 'Macedonia',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 83, bucellaria
		DB::table('realms')->insert([
			'realm_name' => 'Bucellaria',
			'realm_type' => 'dynastic_principality',
			'culture' => '43'
		]);	
		//realm 84, raskha 
		DB::table('realms')->insert([
			'realm_name' => 'Raskha',
			'realm_type' => 'dynastic_principality',
			'culture' => '39'
		]);	
		//realm 85, wallachia
		DB::table('realms')->insert([
			'realm_name' => 'Wallachia',
			'realm_type' => 'dynastic_principality',
			'culture' => '41'
		]);	
		//realm 86, moldova 
		DB::table('realms')->insert([
			'realm_name' => 'Moldova',
			'realm_type' => 'dynastic_principality',
			'culture' => '41'
		]);	
		//agnatic principalities
		//realm 87, Halych 
		DB::table('realms')->insert([
			'realm_name' => 'Halych',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);	
		//realm 88, Pereyaslav
		DB::table('realms')->insert([
			'realm_name' => 'Pereyaslav',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);
		//realm 89, Kiev
		DB::table('realms')->insert([
			'realm_name' => 'Kiev',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);	
		//realm 90, Tchernigov
		DB::table('realms')->insert([
			'realm_name' => 'Tchernigov',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);	
		//realm 91, Smolensk
		DB::table('realms')->insert([
			'realm_name' => 'Smolensk',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);	
		//realm 92, Polotsk
		DB::table('realms')->insert([
			'realm_name' => 'Polotsk',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);
		//realm 93, Ryazan
		DB::table('realms')->insert([
			'realm_name' => 'Ryazan',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);	
		//realm 94, Muscowy
		DB::table('realms')->insert([
			'realm_name' => 'Muscowy',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);		
		//realm 95, Pleskov
		DB::table('realms')->insert([
			'realm_name' => 'Pleskov',
			'realm_type' => 'agnatic_principality',
			'culture' => '42'
		]);						
		//emirates
		//realm 96, Zaragoza
		DB::table('realms')->insert([
			'realm_name' => 'Zaragoza',
			'realm_type' => 'dynastic_principality',
			'culture' => '27'
		]);			
		//realm 97, Baleares
		DB::table('realms')->insert([
			'realm_name' => 'Baleares',
			'realm_type' => 'dynastic_principality',
			'culture' => '26'
		]);			
		//realm 98, Valencia
		DB::table('realms')->insert([
			'realm_name' => 'Valencia',
			'realm_type' => 'dynastic_principality',
			'culture' => '26'
		]);			
		//realm 99, Denia
		DB::table('realms')->insert([
			'realm_name' => 'Denia',
			'realm_type' => 'dynastic_principality',
			'culture' => '26'
		]);	
		//realm 100, Murcia
		DB::table('realms')->insert([
			'realm_name' => 'Murcia',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);			
		//realm 101, Granada
		DB::table('realms')->insert([
			'realm_name' => 'Granada',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);	
		//realm 102, Almeria
		DB::table('realms')->insert([
			'realm_name' => 'Almeria',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);			
		//realm 103, Malaga
		DB::table('realms')->insert([
			'realm_name' => 'Malaga',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);	
		//realm 104, Sevilla
		DB::table('realms')->insert([
			'realm_name' => 'Sevilla',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);			
		//realm 105, Badajoz
		DB::table('realms')->insert([
			'realm_name' => 'Badajoz',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);	
		//realm 106, Toledo
		DB::table('realms')->insert([
			'realm_name' => 'Toledo',
			'realm_type' => 'dynastic_principality',
			'culture' => '46'
		]);			
		//realm 107, Algarve
		DB::table('realms')->insert([
			'realm_name' => 'Algarve',
			'realm_type' => 'dynastic_principality',
			'culture' => '53'
		]);	
		//realm 108, Ifni
		DB::table('realms')->insert([
			'realm_name' => 'Ifni',
			'realm_type' => 'dynastic_principality',	
			'culture' => '52'
		]);			
		//realm 109, Figuig
		DB::table('realms')->insert([
			'realm_name' => 'Figuig',
			'realm_type' => 'dynastic_principality',	
			'culture' => '52'
		]);				
		//realm 110, Najd
		DB::table('realms')->insert([
			'realm_name' => 'Najd',
			'realm_type' => 'dynastic_principality',	
			'culture' => '48'
		]);			
		//realm 111, Antioch
		DB::table('realms')->insert([
			'realm_name' => 'Antioch',
			'realm_type' => 'dynastic_principality',	
			'culture' => '47'
		]);	
		//realm 112, Isfahan
		DB::table('realms')->insert([
			'realm_name' => 'Isfahan',
			'realm_type' => 'dynastic_principality',
			'culture' => '55'
		]);	
		//merchant republics
		//realm 113, Venice
		DB::table('realms')->insert([
			'realm_name' => 'Venice',
			'realm_type' => 'merchant_republic',			
			'culture' => '12'
		]);	
		//realm 114, Genoa
		DB::table('realms')->insert([
			'realm_name' => 'Genoa',
			'realm_type' => 'merchant_republic',			
			'culture' => '12'
		]);	
		//realm 115, Noli
		DB::table('realms')->insert([
			'realm_name' => 'Noli',
			'realm_type' => 'merchant_republic',			
			'culture' => '12'
		]);	
		//realm 116, Gaeta
		DB::table('realms')->insert([
			'realm_name' => 'Gaeta',
			'realm_type' => 'merchant_republic',					
			'culture' => '23'
		]);	
		//realm 117, Pisa
		DB::table('realms')->insert([
			'realm_name' => 'Pisa',
			'realm_type' => 'merchant_republic',			
			'culture' => '13'
		]);			
		//realm 118, Ragusa
		DB::table('realms')->insert([
			'realm_name' => 'Ragusa',
			'realm_type' => 'merchant_republic',				
			'culture' => '38'
		]);	
		//realm 119, Amalfi
		DB::table('realms')->insert([
			'realm_name' => 'Amalfi',
			'realm_type' => 'merchant_republic',			
			'culture' => '23'
		]);			
		//realm 120, Ancona
		DB::table('realms')->insert([
			'realm_name' => 'Ancona',
			'realm_type' => 'merchant_republic',			
			'culture' => '13'
		]);	
		//realm 121, Florence
		DB::table('realms')->insert([
			'realm_name' => 'Florence',
			'realm_type' => 'merchant_republic',			
			'culture' => '13'
		]);		
		//realm 122, Lucca
		DB::table('realms')->insert([
			'realm_name' => 'Lucca',
			'realm_type' => 'merchant_republic',			
			'culture' => '13'
		]);	
		//realm 123, Novgorod
		DB::table('realms')->insert([
			'realm_name' => 'Novgorod',
			'realm_type' => 'merchant_republic',			
			'culture' => '42'			
		]);	
		//realm 124, Mongol Horde
		DB::table('realms')->insert([
			'realm_name' => 'Mongol Horde',
			'realm_type' => 'horde',			
			'culture' => '56'			
		]);	
		//realm 125, Albarracin
		DB::table('realms')->insert([
			'realm_name' => 'Albarracin',
			'realm_type' => 'dynastic_principality',			
			'culture' => '27'			
		]);	
		//realm 126, Albarracin
		DB::table('realms')->insert([
			'realm_name' => 'Tlemcen',
			'realm_type' => 'dynastic_kingdom',			
			'culture' => '52'			
		]);	
		//realm 127, Hormuz
		DB::table('realms')->insert([
			'realm_name' => 'Hormuz',
			'realm_type' => 'dynastic_principality',			
			'culture' => '55'			
		]);			
    }
}
