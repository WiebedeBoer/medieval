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
				'county_category' => '',			//
				'de_jure_duchy' => '',				//
				'law_succession' => '',				//Elective Monarchy, Salic Primogeniture, Agnatic Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',				//
				'law_court' => '',					//
				'vernacular_architecture' => '',	//				
				'levy_feudal' => '',				//
				'levy_ecclesiastical' => '',		//
				'levy_burgher' => '',				//
				'tax_feudal' => '',					//				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1'
            ]);			
			*/
			
			//
			// 
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'law_succession' => '',
				'law_assembly' => '',
				'law_court' => '',	
				'vernacular_architecture' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}