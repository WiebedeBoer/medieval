<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CultureSeeder extends Seeder
{
	//cultures
    public function run()
    {
        DB::table('cultures')->insert([            
			'culture_name' => 'saxon',	
            'warrior_culture' => 'German',
			'chivalry_culture' => 'Western',	
            'manorial_culture' => 'Catholic',
			'commercial_culture' => 'Western'	         
        ]); 
    }
}
