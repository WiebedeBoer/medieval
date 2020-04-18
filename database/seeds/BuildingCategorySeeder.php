<?php

use Illuminate\Database\Seeder;

class BuildingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		//businesses
		DB::table('building_categories')->insert([            
		'building_name' => 'chicken coop',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'duck coop',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'shepherd',
		'building_type' => 'paddock'
		]);	
		
		//chapels
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'chapel',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'musalla',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);			
		
		//churches
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'church',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	
		
		//cathedrals
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'cathedral',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'grand mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	

		//monasteries
		DB::table('building_categories')->insert([            
		'building_name' => 'monastery',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'monastery',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'monastery',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'monastery',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'khanqah',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);			
		
    }
}
