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
				'manor_assembly' => '',			//Diet, Senate, Moot, Parliament, Council
				'manor_court' => '',			//feudal, ecclesiastical, burgher, commoner				
				'levy_feudal' => '',			//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal
				'levy_burgher' => '',			//minimal, normal, large, maximal
				'tax_feudal' => '',				//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal				
				'tax_burgher' => ''				//minimal, normal, large, maximal				
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1',		(duchy)
				'mesne_lord' => '1',			(county)
				'lord_of_the_manor' => '1'		(barony)
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
				'manor_assembly' => '',
				'manor_court' => '',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',		
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1',
				'lord_of_the_manor' => '1',
            ]);
	
		
		//defunct empires
	
			
    }
}