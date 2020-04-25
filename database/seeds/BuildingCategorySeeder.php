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
		
		DB::table('building_categories')->insert([            
		'building_name' => 'swineherd',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'cowherd',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'horseherd',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'camelherd',
		'building_type' => 'paddock'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fishery',
		'building_type' => 'fishery'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'sugar plantation',
		'building_type' => 'plantation'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'dates plantation',
		'building_type' => 'plantation'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'orchard',
		'building_type' => 'plantation'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'olive yard',
		'building_type' => 'plantation'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'apiary',
		'building_type' => 'coppice woodland'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'forester',
		'building_type' => 'coppice woodland'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'falconer',
		'building_type' => 'kingswood'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'gameward',
		'building_type' => 'kingswood'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'trapper',
		'building_type' => 'kingswood'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'grain field',
		'building_type' => 'field'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'vineyard',
		'building_type' => 'field'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'flax field',
		'building_type' => 'field'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'elderberry field',
		'building_type' => 'field'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'lavender field',
		'building_type' => 'field'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'woad field',
		'building_type' => 'field'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'madder field',
		'building_type' => 'field'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'herbal garden',
		'building_type' => 'field'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'heath',
		'building_type' => 'field'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'lead mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'iron mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'gold mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'silver mine',
		'building_type' => 'mine'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'tin mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'emerald mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'ruby mine',
		'building_type' => 'mine'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'salt mine',
		'building_type' => 'mine'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'quarry',
		'building_type' => 'quarry'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'clay pit',
		'building_type' => 'pit'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'butcher',
		'building_type' => 'food shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'vintner',
		'building_type' => 'food shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'brewery',
		'building_type' => 'food shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'bakery',
		'building_type' => 'food shop'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'cheesemonger',
		'building_type' => 'food shop'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'butter maker',
		'building_type' => 'food shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'fishmonger',
		'building_type' => 'food shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'weaponsmith',
		'building_type' => 'armorer'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'bowyer',
		'building_type' => 'armorer'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'poleturner',
		'building_type' => 'armorer'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'chandler',
		'building_type' => 'crafts'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'rope maker',
		'building_type' => 'crafts'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'basket maker',
		'building_type' => 'crafts'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'soap maker',
		'building_type' => 'crafts'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'carpenter',
		'building_type' => 'crafts'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'painter',
		'building_type' => 'atelier'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'perfumer',
		'building_type' => 'atelier'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'bookbinder',
		'building_type' => 'atelier'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'caravaner',
		'building_type' => 'importer'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'sugarcane mill',
		'building_type' => 'mill'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'gristmill',
		'building_type' => 'mill'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'oil mill',
		'building_type' => 'mill'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'flax mill',
		'building_type' => 'mill'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'fulling mill',
		'building_type' => 'mill'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'sawmill',
		'building_type' => 'mill'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'paper mill',
		'building_type' => 'mill'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'tannery',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'dyer',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'weaver',
		'building_type' => 'cloth shop'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'furrier',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'carpet maker',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'tailor',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'armorer',
		'building_type' => 'cloth shop'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'potterer',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'brick maker',
		'building_type' => 'furnace'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'tile maker',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'smelter',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'glassmaker',
		'building_type' => 'furnace'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'blacksmith',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'jeweler',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'goldsmith',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'silversmith',
		'building_type' => 'furnace'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'pewterer',
		'building_type' => 'furnace'
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
		
		//fortified churches
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'fortified church',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'fortified mosque',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);			
	
		//fortress churches
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'church fortress',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'amsar',
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

		//catholic monastic
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);			
		
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Catholic'
		]);	
		
		//greek orthodox monastic
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);			
		
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Greek Orthodox'
		]);	
		
		//russian orthodox monastic
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);			
		
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Russian Orthodox'
		]);			

		//serbian orthodox monastic
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);			
		
		DB::table('building_categories')->insert([            
		'building_name' => 'priory',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'abbey',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fortified abbey',
		'building_type' => 'monastic',
		'religion' => 'Serbian Orthodox'
		]);	
		
		//muslim sufi
		DB::table('building_categories')->insert([            
		'building_name' => 'hermitage',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);		
		
		DB::table('building_categories')->insert([            
		'building_name' => 'dayr',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'khanqah',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);
		
		DB::table('building_categories')->insert([            
		'building_name' => 'ribat',
		'building_type' => 'monastic',
		'religion' => 'Muslim'
		]);
		
		//crusader
		DB::table('building_categories')->insert([            
		'building_name' => 'chapterhouse',
		'building_type' => 'crusader',
		'religion' => 'Catholic'
		]);	

		//glebe
		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Catholic'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'rectory',
		'building_type' => 'clergy',
		'religion' => 'Serbian Orthodox'
		]);			
		
		DB::table('building_categories')->insert([            
		'building_name' => 'manzil',
		'building_type' => 'clergy',
		'religion' => 'Muslim'
		]);	
		
		//education
		DB::table('building_categories')->insert([            
		'building_name' => 'school',
		'building_type' => 'education'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Catholic'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'university',
		'building_type' => 'education',
		'religion' => 'Serbian Orthodox'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'madrassa',
		'building_type' => 'education',
		'religion' => 'Muslim'
		]);	
		
		//health
		DB::table('building_categories')->insert([            
		'building_name' => 'almshouse',
		'building_type' => 'health'
		]);	
				
		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Catholic'
		]);

		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Greek Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Russian Orthodox'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'hospital',
		'building_type' => 'health',
		'religion' => 'Serbian Orthodox'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'khastakhaneh',
		'building_type' => 'health',
		'religion' => 'Muslim'
		]);

		//catholic defenses
		DB::table('building_categories')->insert([            
		'building_name' => 'cottage',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				

		DB::table('building_categories')->insert([            
		'building_name' => 'townhouse',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'housebarn',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'bastle house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'merchant house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		
		DB::table('building_categories')->insert([            
		'building_name' => 'strong house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'chivalric house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	

		DB::table('building_categories')->insert([            
		'building_name' => 'hall house',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'hall keep',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		
		DB::table('building_categories')->insert([            
		'building_name' => 'gatehouse keep',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'motte and bailey castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'tower castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'courtyard castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'z plan castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		
		DB::table('building_categories')->insert([            
		'building_name' => 'l plan castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		

		DB::table('building_categories')->insert([            
		'building_name' => 'towered castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);		
		
		DB::table('building_categories')->insert([            
		'building_name' => 'concentric castle',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);				
		
		DB::table('building_categories')->insert([            
		'building_name' => 'citadel',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'palais',
		'building_type' => 'defenses',
		'religion' => 'Catholic'
		]);	

		//catholic commerce
		DB::table('building_categories')->insert([            
		'building_name' => 'tavern',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'inn',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'roadside inn',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'port',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'factory',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'staple port',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'guild hall',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'market',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'fair',
		'building_type' => 'commerce',
		'religion' => 'Catholic'
		]);	
		
		//catholic town 
		DB::table('building_categories')->insert([            
		'building_name' => 'town hall',
		'building_type' => 'town',
		'religion' => 'Catholic'
		]);			

		DB::table('building_categories')->insert([            
		'building_name' => 'town wall',
		'building_type' => 'town',
		'religion' => 'Catholic'
		]);			
		
		//catholic entertainment
		DB::table('building_categories')->insert([            
		'building_name' => 'hunting lodge',
		'building_type' => 'entertainment',
		'religion' => 'Catholic'
		]);	
		
		DB::table('building_categories')->insert([            
		'building_name' => 'tiltyard',
		'building_type' => 'entertainment',
		'religion' => 'Catholic'
		]);			
		
    }
}
