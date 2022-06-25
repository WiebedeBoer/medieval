<?php

use Illuminate\Database\Seeder;

class DuchySeeder extends Seeder
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
            DB::table('duchies')->insert([
				'duchy_name' => '',				
				'duchy_category' => '',			//Feudal, Ecclesiastical, Crowned_Republic
				'de_jure_kingdom' => '',		//	
				'law_succession' => '',			//Elective_Monarchy, Salic_Primogeniture, Agnatic_Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',			//absolute, limited, medium, high
				'law_court' => '',				//itinerant, palatial
				'vernacular_cycle' => '',		//Matter_of_Britain, Carolingian, Byzantine, Rus, Persian, Arab					
				'levy_feudal' => '',			//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal
				'levy_burgher' => '',			//minimal, normal, large, maximal
				'tax_feudal' => '',				//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal				
				'tax_burgher' => ''				//minimal, normal, large, maximal			
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1'		(duchy)
            ]);			
			*/
			
			
			//
			// 
			//
            DB::table('duchies')->insert([
				'duchy_name' => '',
				'duchy_category' => '',
				'de_jure_kingdom' => '',	
				'law_succession' => '',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',
				'vernacular_culture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',					
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}