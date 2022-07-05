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
				castle construction					cost				salary
				motte-and-bailey 3 months			tower 300			knight 40
				castle 2 to 10 years				small castle 600
			
			*/
		
			/*
			//example
            DB::table('tithings')->insert([
				'tithing_name' => '',
				'tithing_category' => ' ',		//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Burgher, Villager	
				'de_jure_barony' => '',		
				'manor_court' => '',			//Barony, County, Duchy, Royal, University, Ecclesiastical
				'quarter_northeast' => '',		//, , , ; default=Fallow
				'quarter_northwest' => '',		//, , , ; default=Fallow
				'quarter_southeast' => '',		//, , , ; default=Fallow
				'quarter_southwest' => '',		//, , , ; default=Fallow		
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1',		(duchy)
				'mesne_lord' => '1',			(county)
				'lord_of_the_manor' => '1',		(barony)
				'tenant_paravail' => '1'		(tithing)
            ]);
			*/
			
			//catholic
			//western continental
			//
            DB::table('tithings')->insert([
				'tithing_name' => '',
				'tithing_category' => 'Feudal',
				'de_jure_barony' => '',
				'manor_court' => 'Barony'				
            ]);
	
		
		//defunct empires
	
			
    }
}