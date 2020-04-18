<?php

use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('resource_types')->insert([            
		'resource_name' => 'wax',
		'category' => 'resource'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'honey',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'eggs',
		'category' => 'resource'
		]);			
		
    }
}
