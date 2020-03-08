<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('fkeySeeder');
		//tables
		$this->call('CultureSeeder');
		$this->call('RegionSeeder');
		$this->call('PlaceSeeder');
    }
}

class fkeySeeder extends Seeder
{
	//foreign keys
    public function run()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
        });
        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
        });  
		
    }
}

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
