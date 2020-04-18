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
		//resources
		DB::table('resource_types')->insert([            
		'resource_name' => 'chickens',
		'category' => 'resource'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'ducks',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'sheep',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'goats',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'pigs',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'cattle',
		'category' => 'resource'
		]);

		DB::table('resource_types')->insert([            
		'resource_name' => 'horses',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'camels',
		'category' => 'resource'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'fishery',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'sugarcane',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'dates',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'fruits',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'olives',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'beehives',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'coppice',
		'category' => 'resource'
		]);

		DB::table('resource_types')->insert([            
		'resource_name' => 'rabbits',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'fowl',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'deer',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'rodents',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'grains',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'vines',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'flax',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'elder',
		'category' => 'resource'
		]);

		DB::table('resource_types')->insert([            
		'resource_name' => 'lavender',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'woad',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'madder',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'mint',
		'category' => 'resource'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'parsley',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'rosemary',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'sage',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'rhubarb',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'hops',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'heather',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'ore',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'emeralds',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'rubies',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'salt rock',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'stone',
		'category' => 'resource'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'clay',
		'category' => 'resource'
		]);	
		
		//catch
		DB::table('resource_types')->insert([            
		'resource_name' => 'fish catch',
		'category' => 'catch'
		]);	
		
		//dairy
		DB::table('resource_types')->insert([            
		'resource_name' => 'dairy',
		'category' => 'dairy'
		]);	

		//meat
		DB::table('resource_types')->insert([            
		'resource_name' => 'poultry',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'duck meat',
		'category' => 'meat'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'mutton',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'chevon',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'pork',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'beef',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'rabbit meat',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'venison',
		'category' => 'meat'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'fowl',
		'category' => 'meat'
		]);				

		DB::table('resource_types')->insert([            
		'resource_name' => 'hides',
		'category' => 'meat'
		]);	

		//trading
		DB::table('resource_types')->insert([            
		'resource_name' => 'oxen',
		'category' => 'trading'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'horse',
		'category' => 'trading'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'camel',
		'category' => 'trading'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'barrel',
		'category' => 'trading'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'basket',
		'category' => 'trading'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'pottery',
		'category' => 'trading'
		]);	

		//construction
		DB::table('resource_types')->insert([            
		'resource_name' => 'tatch',
		'category' => 'construction'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'stones',
		'category' => 'construction'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'tiles',
		'category' => 'construction'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'timber',
		'category' => 'construction'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'hardware',
		'category' => 'construction'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'stained glass',
		'category' => 'construction'
		]);	
		
		//produce
		DB::table('resource_types')->insert([            
		'resource_name' => 'eggs',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'wool',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'sugarcane',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'dates',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'fruit',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'wax',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'honey',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'wood',
		'category' => 'produce'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'cedar',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'mushrooms',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'pelts',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'grain',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'flax',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'lavender',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'woad dye',
		'category' => 'produce'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'madder dye',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'herbs',
		'category' => 'produce'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'scents',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'emerald',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'ruby',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'salt',
		'category' => 'produce'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'clay',
		'category' => 'produce'
		]);			
		
		//ores
		DB::table('resource_types')->insert([            
		'resource_name' => 'lead ore',
		'category' => 'ore'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'iron ore',
		'category' => 'ore'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'gold ore',
		'category' => 'ore'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'silver ore',
		'category' => 'ore'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'tin ore',
		'category' => 'ore'
		]);	

		//imports
		DB::table('resource_types')->insert([            
		'resource_name' => 'spices',
		'category' => 'import'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'silk',
		'category' => 'import'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'ivory',
		'category' => 'import'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'incense',
		'category' => 'import'
		]);	
		
		//gruit
		DB::table('resource_types')->insert([            
		'resource_name' => 'olives',
		'category' => 'gruit'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'grapes',
		'category' => 'gruit'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'linseed',
		'category' => 'gruit'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'elderberry',
		'category' => 'gruit'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'hops',
		'category' => 'gruit'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'heather',
		'category' => 'gruit'
		]);	
		
		//products
		DB::table('resource_types')->insert([            
		'resource_name' => 'flour',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'oil',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'butter',
		'category' => 'product'
		]);		

		DB::table('resource_types')->insert([            
		'resource_name' => 'iron',
		'category' => 'product'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'gold',
		'category' => 'product'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'silver',
		'category' => 'product'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'tin',
		'category' => 'product'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'lead',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'leather',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'tools',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'candles',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'yarn',
		'category' => 'product'
		]);
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'dyed yarn',
		'category' => 'product'
		]);
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'dyes',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'ropes',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'soap',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'cloth',
		'category' => 'product'
		]);

		DB::table('resource_types')->insert([            
		'resource_name' => 'fur',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'paper',
		'category' => 'product'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'parchment',
		'category' => 'product'
		]);			
		
		//goods
		DB::table('resource_types')->insert([            
		'resource_name' => 'meat',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'wine',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'beer',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'cider',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'mead',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'bread',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'cake',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'cheese',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'fish',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'armor',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'weapons',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'furniture',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'paintings',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'perfume',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'books',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'carpet',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'clothing',
		'category' => 'good'
		]);	
		
		DB::table('resource_types')->insert([            
		'resource_name' => 'tableware',
		'category' => 'good'
		]);

		DB::table('resource_types')->insert([            
		'resource_name' => 'jewelry',
		'category' => 'good'
		]);	

		DB::table('resource_types')->insert([            
		'resource_name' => 'silverwork',
		'category' => 'good'
		]);			
		
    }
}
