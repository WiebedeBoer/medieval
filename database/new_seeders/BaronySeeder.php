<?php

use Illuminate\Database\Seeder;

class BaronySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			/*
            DB::table('baronies')->insert([
				'barony_name' => '',
				'barony_category' => '',		//
				'de_jure_county' => '',			//
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
				'tenant_in_chief' => '1',
				'mesne_lord' => '1',
				'lord_of_the_manor' => '1',
            ]);
			*/

		
			//
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => '',
				'barony_category' => '',
				'de_jure_county' => '',
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
				'tenant_in_chief' => '1',
				'mesne_lord' => '1',
				'lord_of_the_manor' => '1',
            ]);
	
		
		//defunct empires
	
			
    }
}