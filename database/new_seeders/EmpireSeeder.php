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
				'empire_category' => '',		//Princely_Elective, Feudal_Empire, Composite_Crown, Commonwealth, Caliphate, Horde
				'law_succession' => '',			//Elective_Monarchy, Salic_Primogeniture, Agnatic_Seniority, Tanistry, Shura, Yassa	
				'law_assembly' => '',			//absolute, limited, medium, high; default=medium	
				'law_court' => '',				//itinerant, palatial				
				'levy_feudal' => '',			//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',			//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',				//minimal, normal, large, maximal; default=minimal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal				
				'tax_burgher' => ''				//minimal, normal, large, maximal; default=normal	
				'souvereign' => '1',			(empire); default=1
            ]);
			*/			
			
			//catholic
			//western continental europe
			//1 //germany, lombardy, bohemia, burgundy, terra mariana, papal states
            DB::table('empires')->insert([
				'empire_name' => 'Holy Roman Empire', 
				'empire_category' => 'Princely_Elective',
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//2 //france
            DB::table('empires')->insert([
				'empire_name' => 'Crown of France', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//british isles			
			//3 //ireland, england, scotland, wales
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Britain', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//iberian peninsula
			//4 //aragon, navarre
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Aragon', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//5 //castile, galicia, leon, portugal
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Castile', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);			
			//scandinavia
			//6 //denmark, norway, sweden
            DB::table('empires')->insert([
				'empire_name' => 'Danelagen', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//eastern continental europe
			//7 //poland, lithuania
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Poland', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//8 //hungary, croatia
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Hungary', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);			
			//orthodox
			//eastern continental europe
			//9 //anatolia, trebizond, thrace, thessalonica, georgia, armenia, sicily, sardinia, naples
            DB::table('empires')->insert([
				'empire_name' => 'Byzantine Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'
            ]);			
			//10 //bulgaria, wallachia
            DB::table('empires')->insert([
				'empire_name' => 'Bulgarian Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//11 //serbia, bosnia
            DB::table('empires')->insert([
				'empire_name' => 'Serbian Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//12 //kiev, murom, ruthenia, vladimir, smolensk, novgorod
            DB::table('empires')->insert([
				'empire_name' => 'Kievan Russia', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);				
			//muslim
			//iberian peninsula
			//13 //andalucia
            DB::table('empires')->insert([
				'empire_name' => 'Cordoba', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//maghreb
			//14 //marrakesh, fez, kairouan, tlemcen, ifni, figuig
            DB::table('empires')->insert([
				'empire_name' => 'Almohad', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'			
            ]);
			//arabia
			//15 //baghdad, syria, antioch, najd
            DB::table('empires')->insert([
				'empire_name' => 'Abbasid', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//egypt
			//16 //cairo, jerusalem, hejaz
            DB::table('empires')->insert([
				'empire_name' => 'Fatimid', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//pagan
			//pontic steppe
			//17 //khazaria, cumania, alania
            DB::table('empires')->insert([
				'empire_name' => 'Khazar Empire', 
				'empire_category' => 'Horde',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//turan
			//18 //oghuz, transoxiana, chagatai
            DB::table('empires')->insert([
				'empire_name' => 'Seljuk Empire', 
				'empire_category' => 'Horde',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);				
    }
}