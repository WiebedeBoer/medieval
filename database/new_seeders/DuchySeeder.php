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
				'duchy_category' => '',			//Feudal, Ecclesiastical, Burgher
				'de_jure_kingdom' => '',		//	
				'law_succession' => '',			//Elective Monarchy, Salic Primogeniture, Agnatic Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',			//
				'law_court' => '',				//			
				'levy_feudal' => '',			//
				'levy_ecclesiastical' => '',	//
				'levy_burgher' => '',			//
				'tax_feudal' => '',				//			
				'tax_ecclesiastical' => '',		//				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
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
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}