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
				'barony_category' => '',			//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Crowned_Republic
				'settlement_category' => '',
				'de_jure_county' => '',				
				'manor_assembly' => '',				//Diet, Senate, Moot, Parliament, Council
				'manor_court' => '',				//feudal, ecclesiastical, burgher, commoner	
				'population' => '',
				'levy_feudal' => '',				//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',				//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',					//minimal, normal, large, maximal; default=normal		
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal; default=minimal				
				'tax_burgher' => '',				//minimal, normal, large, maximal; default=normal				
				'souvereign' => '1',			(empire); default=1
				'lord_paramount' => '1',		(kingdom); default=1
				'tenant_in_chief' => '1',		(duchy); default=1
				'mesne_lord' => '1'				(county); default=1
				'lord_of_the_manor' => '1'		(barony); default=1
            ]);
			*/

		
			//
			// 
			//
            DB::table('baronies')->insert([
				'barony_name' => '',
				'barony_category' => '',
				'settlement_category' => '',
				'de_jure_county' => '',
				'manor_assembly' => '',
				'manor_court' => '',
				'population' => ''				
            ]);
	
		
		//defunct empires
	
			
    }
}