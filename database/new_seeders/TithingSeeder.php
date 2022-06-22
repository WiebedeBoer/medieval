<?php

use Illuminate\Database\Seeder;

class TithingSeeder extends Seeder
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
            DB::table('tithings')->insert([
				'tithing_name' => '',
				'tithing_category' => ' ',	//
				'de_jure_barony' => '',		//
				'law_succession' => '',		//Elective Monarchy, Salic Primogeniture, Agnatic Seniority, Tanistry, Shura, Yassa
				'law_assembly' => '',		//
				'law_court' => '',			//				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1',
				'lord_of_the_manor' => '1',
				'tenant_paravail' => '1'		
            ]);
			*/
			
			//catholic
			//western continental
			//
            DB::table('tithings')->insert([
				'tithing_name' => '',
				'tithing_category' => ' ',
				'de_jure_barony' => '',
				'law_succession' => '',
				'law_assembly' => '',
				'law_court' => '',				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1',
				'lord_of_the_manor' => '1',
				'tenant_paravail' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}