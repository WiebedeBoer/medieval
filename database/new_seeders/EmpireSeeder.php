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
				'empire_category' => '',		//Princely_Elective (1), Feudal_Empire (5), Composite_Crown (4), Commonwealth (3), Caliphate (4), Horde (2)
				'law_succession' => '',			//Elective_Monarchy (1), Salic_Primogeniture (11), Agnatic_Seniority (1), Tanistry (0), Shura (4), Yassa (2)	
				'law_assembly' => '',			//absolute, limited, medium, high; default=medium	
				'law_court' => '',				//itinerant (11), palatial (2), divan (4), sarai (2)				
				'levy_feudal' => '',			//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',			//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',				//minimal, normal, large, maximal; default=minimal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal				
				'tax_burgher' => ''				//minimal, normal, large, maximal; default=normal	
				'souvereign' => '1',			(empire); default=1
            ]);
			*/			
			
			//Catholic
			//1 //Germany, Lombardy, Bohemia, Burgundy, Papal States, Teutonic Order State
            DB::table('empires')->insert([
				'empire_name' => 'Holy Roman Empire', 
				'empire_category' => 'Princely_Elective',
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//2 //France, Brittany
            DB::table('empires')->insert([
				'empire_name' => 'Crown of France', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);		
			//3 //Ireland, England, Wales, Scotland
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Britain', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//4 //Aragon, Navarre
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Aragon', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//5 //Castile, Galicia, Leon, Asturias, Portugal
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Castile', 
				'empire_category' => 'Composite_Crown',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);			
			//6 //Denmark, Norway, Sweden
            DB::table('empires')->insert([
				'empire_name' => 'Danelagen', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//7 //Poland, Lithuania
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Poland', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//8 //Hungary, Croatia
            DB::table('empires')->insert([
				'empire_name' => 'Crown of Hungary', 
				'empire_category' => 'Commonwealth',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//9 Sicily, Naples, Sardinia
            DB::table('empires')->insert([
				'empire_name' => 'Trinacria', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'
            ]);				
			//Greek Orthodox
			//10 //Thrace, Thessalonica, Trebizond, Anatolia, Georgia, Armenia
            DB::table('empires')->insert([
				'empire_name' => 'Byzantine Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'
            ]);	
			//11 //Kiev, Chernigov, Ruthenia, Vladimir, Smolensk, Novgorod
            DB::table('empires')->insert([
				'empire_name' => 'Kievan Russia', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//Bulgarian Orthodox
			//12 //Bulgaria, Wallachia
            DB::table('empires')->insert([
				'empire_name' => 'Bulgarian Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);
			//Serbian Orthodox
			//13 //Serbia, Bosnia
            DB::table('empires')->insert([
				'empire_name' => 'Serbian Empire', 
				'empire_category' => 'Feudal_Empire',
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);				
			//Muslim
			//14 //Andalucia, Algarves, Levante
            DB::table('empires')->insert([
				'empire_name' => 'Cordoba', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//15 //Marrakesh, Fez, Kairouan, Tlemcen, Ifni, Figuig
            DB::table('empires')->insert([
				'empire_name' => 'Almohad', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'			
            ]);
			//16 //Baghdad, Syria, Najd, Antioch
            DB::table('empires')->insert([
				'empire_name' => 'Abbasid', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//17 //Cairo, Jerusalem, Hejaz
            DB::table('empires')->insert([
				'empire_name' => 'Fatimid', 
				'empire_category' => 'Caliphate',
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//18 //Khazaria, Alania, Cumania
            DB::table('empires')->insert([
				'empire_name' => 'Khazar Empire', 
				'empire_category' => 'Horde',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//19 //Kwarezm, Isfahan, Hormuz
            DB::table('empires')->insert([
				'empire_name' => 'Seljuk Empire', 
				'empire_category' => 'Horde',
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);				
    }
}