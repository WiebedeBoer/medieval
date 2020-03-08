<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
