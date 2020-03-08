<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
