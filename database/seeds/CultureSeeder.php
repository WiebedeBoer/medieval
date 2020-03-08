<?php

use Illuminate\Database\Seeder;

class CultureSeeder extends Seeder
{
	//regions
    public function run()
    {
        DB::table('regions')->insert([            
			'culture_name' => 'saxon',	
            'warrior_culture' => 'German',
			'chivalry_culture' => 'Western',	
            'manorial_culture' => 'Catholic',
			'commercial_culture' => 'Western'	         
        ]); 
    }
}
