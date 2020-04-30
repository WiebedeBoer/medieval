<?php

use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//1
		DB::table('religions')->insert([            
		'religion' => 'Catholic',
		'religion_type' => 'Catholic'
		]);	
		//2
		DB::table('religions')->insert([            
		'religion' => 'Serbian Orthodox',
		'religion_type' => 'Eastern Orthodox'
		]);	
		//3
		DB::table('religions')->insert([            
		'religion' => 'Russian Orthodox',
		'religion_type' => 'Eastern Orthodox'
		]);	
		//4
		DB::table('religions')->insert([            
		'religion' => 'Greek Orthodox',
		'religion_type' => 'Eastern Orthodox'
		]);	
		//5
		DB::table('religions')->insert([            
		'religion' => 'Muslim',
		'religion_type' => 'Islamic'
		]);	
		//6
		DB::table('religions')->insert([            
		'religion' => 'Jewish',
		'religion_type' => 'Judaism'
		]);	
		//7
		DB::table('religions')->insert([            
		'religion' => 'Tengrism',
		'religion_type' => 'Paganistic'
		]);	
		//8
		DB::table('religions')->insert([            
		'religion' => 'Nordic Paganism',
		'religion_type' => 'Paganistic'
		]);	
		//9
		DB::table('religions')->insert([            
		'religion' => 'none',
		'religion_type' => 'default'
		]);	
    }
}
