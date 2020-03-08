<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
	//regions
    public function run()
    {
        DB::table('regions')->insert([            
			'region_name' => 'Lower Saxony',	
            'rank' => 'prince-archbishopric',
			'climate' => 'temperate_woodlands_marshes',	
            'herb' => 'heather',
			'style' => 'hunt',	
            'ride' => 'stud',
			'culture' => '1',	
            'cycle' => 'ottonian',
			'region_x' => '839',	
            'region_y' => '635',	         
        ]); 
    }
}
