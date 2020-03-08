<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
	//places
    public function run()
    {
        DB::table('places')->insert([            
            'region' => '1',
			'place_name' => 'Bremen',	
            'place_type' => 'capital',
			'population' => '600',	
            'fortification' => 'burgh',
			'commerce' => 'grain',	
            'feudal' => 'knight',
			'church' => 'prince-archbishop',	
            'civil' => 'lord_mayor',
			'monastic' => 'lord_abbot',	
            'factory' => 'cooper',
			'arms' => 'shipyard',
            'education' => 'none'			
        ]);        
    }
}
