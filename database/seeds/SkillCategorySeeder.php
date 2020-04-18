<?php

use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('skill_categories')->insert([            
		'skill' => 'administration',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'engineer',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'farmer',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'literature',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'philosophy',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'poetry',
		'category' => 'management'
		]);	
		
		DB::table('skill_categories')->insert([            
		'skill' => 'architect',
		'category' => 'construction'
		]);	

		DB::table('skill_categories')->insert([            
		'skill' => 'masonry',
		'category' => 'construction'
		]);	

		DB::table('skill_categories')->insert([            
		'skill' => 'medicine',
		'category' => 'miscellaneous'
		]);

		DB::table('skill_categories')->insert([            
		'skill' => 'archery',
		'category' => 'combat'
		]);	

		DB::table('skill_categories')->insert([            
		'skill' => 'heroic',
		'category' => 'combat'
		]);

		DB::table('skill_categories')->insert([            
		'skill' => 'machinery',
		'category' => 'combat'
		]);	

		DB::table('skill_categories')->insert([            
		'skill' => 'cartography',
		'category' => 'logistics'
		]);	

		DB::table('skill_categories')->insert([            
		'skill' => 'navy',
		'category' => 'logistics'
		]);				
		
		
    }
}
