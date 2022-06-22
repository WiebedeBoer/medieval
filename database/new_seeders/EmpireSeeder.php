<?php

use Illuminate\Database\Seeder;

class EmpireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
			
			/*
			//example
            DB::table('empires')->insert([
				'empire_name' => '', 
				'empire_category' => '',		//Princely_Elective, High_Kingdom, Feudal_Empire, Composite_Crown, Commonwealth, Caliphate, Horde
				'flag' => '',					//holy_roman_empire
				'law_succession' => '',			//Elective Monarchy, Salic Primogeniture, Agnatic Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',			//
				'law_court' => '',				//				
				'levy_feudal' => '',			//
				'levy_ecclesiastical' => '',	//
				'levy_burgher' => '',			//
				'tax_feudal' => '',				//		
				'tax_ecclesiastical' => '',		//				
				'tax_burgher' => 'normal'		//
				'souvereign' => '1'
            ]);
			*/			
			
			//catholic
			//western continental europe
			//1 //germany, lombardy, bohemia, burgundy, terra mariana, papal states
            DB::table('empires')->insert([
				'empire_name' => 'Holy Roman Empire', 
				'empire_category' => 'Princely_Elective',
				'flag' => 'holy_roman_empire',
				'law_succession' => 'Elective Monarchy',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			//2 //france
            DB::table('empires')->insert([
				'empire_name' => 'Crown of France', 
				'empire_category' => 'Composite_Crown',
				'flag' => 'france',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			//british isles			
			//3 //ireland, england, scotland, wales
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Britain', 
				'empire_category' => 'Composite_Crown',
				'flag' => 'england',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//iberian peninsula
			//4 //aragon, navarre
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Aragon', 
				'empire_category' => 'Composite_Crown',
				'flag' => 'aragon',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			//5 //castile, galicia, leon, portugal
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Castile', 
				'empire_category' => 'Composite_Crown',
				'flag' => 'castile',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);			
			//scandinavia
			//6 //denmark, norway, sweden
            DB::table('empires')->insert([
				'empire_name' => 'Danelagen', 
				'empire_category' => 'Commonwealth',
				'flag' => 'denmark',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//eastern continental europe
			// //poland, lithuania
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Poland', 
				'empire_category' => 'Commonwealth',
				'flag' => '',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			// //hungary, croatia
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Hungary', 
				'empire_category' => 'Commonwealth',
				'flag' => '',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			
			//orthodox
			//eastern continental europe
			// //anatolia, trebizond, thrace, greece, georgia, armenia, sicily, sardinia, naples
            DB::table('empires')->insert([
				'empire_name' => 'Byzantine Empire', 
				'empire_category' => 'Feudal_Empire',
				'flag' => 'byzantine',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);			
			// //bulgaria, wallachia
            DB::table('empires')->insert([
				'empire_name' => 'Bulgarian Empire', 
				'empire_category' => 'Feudal_Empire',
				'flag' => 'bulgaria',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			// //serbia, bosnia
            DB::table('empires')->insert([
				'empire_name' => 'Serbian Empire', 
				'empire_category' => 'Feudal_Empire',
				'flag' => 'serbia',
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//
            DB::table('empires')->insert([
				'empire_name' => 'Kievan Russia', 
				'empire_category' => 'Feudal_Empire',
				'flag' => 'serbia',
				'law_succession' => 'Agnatic Seniority',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			
			//muslim
			//iberian peninsula
			// //andalucia
            DB::table('empires')->insert([
				'empire_name' => 'Cordoba', 
				'empire_category' => 'Caliphate',
				'flag' => 'fatimid',
				'law_succession' => 'Shura',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//maghreb
			//
            DB::table('empires')->insert([
				'empire_name' => 'Almohad', 
				'empire_category' => 'Caliphate',
				'flag' => 'almohad',
				'law_succession' => 'Shura',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);
			//arabia
			//
            DB::table('empires')->insert([
				'empire_name' => 'Abbasid', 
				'empire_category' => 'Caliphate',
				'flag' => 'abbasid',
				'law_succession' => 'Shura',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//egypt
			//
            DB::table('empires')->insert([
				'empire_name' => 'Fatimid', 
				'empire_category' => 'Caliphate',
				'flag' => 'fatimid',
				'law_succession' => 'Shura',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	

			//pagan
			//pontic steppe
			//khazaria, cumania, crimea, alania
            DB::table('empires')->insert([
				'empire_name' => 'Khazar Empire', 
				'empire_category' => 'Horde',
				'flag' => '',
				'law_succession' => 'Yassa',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);	
			//turan
			//oghuz, transoxiana
            DB::table('empires')->insert([
				'empire_name' => 'Seljuk Empire', 
				'empire_category' => 'Horde',
				'flag' => '',
				'law_succession' => 'Yassa',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1'
            ]);				
    }
}