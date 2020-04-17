<?php

use Illuminate\Database\Seeder;

class EquipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //horses
		DB::table('equipment_categories')->insert([            
		'equipment' => 'destrier',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '6',
		'agility' => '2'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'courser',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '6',
		'agility' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'jennet',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '6',
		'agility' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'palfrey',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '8',
		'riding' => '6',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hackney',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '8',
		'riding' => '6',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'rouncey',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '8',
		'riding' => '6',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'sumpter',
		'type' => 'horse',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '2',
		'draught' => '0',
		'riding' => '6',
		'agility' => '0'
		]);	
		
		//oxen
		DB::table('equipment_categories')->insert([            
		'equipment' => 'ox cart',
		'type' => 'oxen',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '4',
		'draught' => '0',
		'riding' => '2',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'oxen plough',
		'type' => 'oxen',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '4',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//camels
		DB::table('equipment_categories')->insert([            
		'equipment' => 'camel caravan',
		'type' => 'camel',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '6',
		'draught' => '0',
		'riding' => '5',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'bedouin camel',
		'type' => 'camel',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '5',
		'agility' => '0'
		]);	
		
		//ships
		DB::table('equipment_categories')->insert([            
		'equipment' => 'knarr',
		'type' => 'ship',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '24',
		'draught' => '0',
		'riding' => '7',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'cog',
		'type' => 'ship',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '40',
		'draught' => '0',
		'riding' => '7',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hulk',
		'type' => 'ship',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '40',
		'draught' => '0',
		'riding' => '7',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'carrack',
		'type' => 'ship',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '60',
		'draught' => '0',
		'riding' => '7',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'caravel',
		'type' => 'ship',
		'armor' => '0',
		'melee' => '0',
		'range' => '0',
		'cargo' => '50',
		'draught' => '0',
		'riding' => '7',
		'agility' => '0'
		]);	
		
		//shields
		DB::table('equipment_categories')->insert([            
		'equipment' => 'round shield',
		'type' => 'shield',
		'armor' => '2',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'heater shield',
		'type' => 'shield',
		'armor' => '2',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		//helmets
		DB::table('equipment_categories')->insert([            
		'equipment' => 'bascinet',
		'type' => 'helmet',
		'armor' => '2',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heaume',
		'type' => 'helmet',
		'armor' => '2',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'nasal helmet',
		'type' => 'helmet',
		'armor' => '2',
		'melee' => '0',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//bows
		DB::table('equipment_categories')->insert([            
		'equipment' => 'shortbow',
		'type' => 'bow',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'longbow',
		'type' => 'bow',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'crossbow',
		'type' => 'bow',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'composite bow',
		'type' => 'bow',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//javelin
		DB::table('equipment_categories')->insert([            
		'equipment' => 'javelin',
		'type' => 'javelin',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//matchlock
		DB::table('equipment_categories')->insert([            
		'equipment' => 'arquebus',
		'type' => 'matchlock',
		'armor' => '0',
		'melee' => '0',
		'range' => '2',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);

		//polearm
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spear',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'pike',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'bill',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'halberd',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);

		DB::table('equipment_categories')->insert([            
		'equipment' => 'voulge',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);

		DB::table('equipment_categories')->insert([            
		'equipment' => 'poleaxe',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'guisarme',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'bardiche',
		'type' => 'polearm',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//daggers
		DB::table('equipment_categories')->insert([            
		'equipment' => 'dagger',
		'type' => 'dagger',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//maces
		DB::table('equipment_categories')->insert([            
		'equipment' => 'mace',
		'type' => 'mace',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//axes
		DB::table('equipment_categories')->insert([            
		'equipment' => 'axe',
		'type' => 'axe',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		//lances
		DB::table('equipment_categories')->insert([            
		'equipment' => 'lance',
		'type' => 'lance',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);

		//swords
		DB::table('equipment_categories')->insert([            
		'equipment' => 'norman sword',
		'type' => 'sword',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'knighly sword',
		'type' => 'sword',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'longsword',
		'type' => 'sword',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'falchion',
		'type' => 'sword',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'scimitar',
		'type' => 'sword',
		'armor' => '0',
		'melee' => '2',
		'range' => '0',
		'cargo' => '0',
		'draught' => '0',
		'riding' => '0',
		'agility' => '0'
		]);	
	
		
    }
}
