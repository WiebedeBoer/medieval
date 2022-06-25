<?php

use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
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
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',			//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Crowned_Republic
				'de_jure_duchy' => '',				
				'vernacular_architecture' => '',	//				
				'levy_feudal' => '',				//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal
				'levy_burgher' => '',				//minimal, normal, large, maximal
				'tax_feudal' => '',					//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal				
				'tax_burgher' => '',				//minimal, normal, large, maximal				
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1',		(duchy)
				'mesne_lord' => '1'				(county)
            ]);			
			*/
			
			//
			// 
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_architecture' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}