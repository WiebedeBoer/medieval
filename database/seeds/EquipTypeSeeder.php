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
		'riding' => '6',
		'charge' => '32',
		'manouver' => '44'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spirited destrier',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '33',
		'manouver' => '46'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'champion destrier',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '34',
		'manouver' => '48'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'courser',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '12',
		'manouver' => '44'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spirited courser',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '13',
		'manouver' => '46'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'champion courser',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '13',
		'manouver' => '48'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'palfrey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '7',
		'manouver' => '40',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spirited palfrey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '8',
		'manouver' => '42',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'champion palfrey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '9',
		'manouver' => '44',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'rouncey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '7',
		'manouver' => '40',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spirited rouncey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '8',
		'manouver' => '42',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'champion rouncey',
		'type' => 'horse',
		'armor' => '0',
		'riding' => '6',
		'charge' => '9',
		'manouver' => '44',
		'draught' => '8'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'sumpter',
		'type' => 'horse',
		'cargo' => '2',
		'riding' => '6'
		]);	
		
		//oxen
		DB::table('equipment_categories')->insert([            
		'equipment' => 'ox cart',
		'type' => 'oxen',
		'cargo' => '4',
		'riding' => '2'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'oxen plough',
		'type' => 'oxen',
		'draught' => '4'
		]);	
		
		//camels
		DB::table('equipment_categories')->insert([            
		'equipment' => 'caravan camel',
		'type' => 'camel',
		'cargo' => '6',
		'riding' => '5'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'camel',
		'type' => 'camel',
		'armor' => '0',
		'riding' => '5',
		'charge' => '12',
		'manouver' => '50'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spirited camel',
		'type' => 'camel',
		'armor' => '0',
		'riding' => '5',
		'charge' => '13',
		'manouver' => '52'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'champion camel',
		'type' => 'camel',
		'armor' => '0',
		'riding' => '5',
		'charge' => '14',
		'manouver' => '54'
		]);	
		
		//ships
		DB::table('equipment_categories')->insert([            
		'equipment' => 'knarr',
		'type' => 'ship',
		'cargo' => '24',
		'riding' => '7'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'cog',
		'type' => 'ship',
		'cargo' => '40',
		'riding' => '7'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hulk',
		'type' => 'ship',
		'cargo' => '40',
		'riding' => '7'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'carrack',
		'type' => 'ship',
		'cargo' => '60',
		'riding' => '7'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'caravel',
		'type' => 'ship',
		'cargo' => '50',
		'riding' => '7'
		]);	
		
		//shields
		DB::table('equipment_categories')->insert([            
		'equipment' => 'round shield',
		'type' => 'shield',
		'armor' => '65'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened round shield',
		'type' => 'shield',
		'armor' => '67'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced round shield',
		'type' => 'shield',
		'armor' => '69'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'heater shield',
		'type' => 'shield',
		'armor' => '74'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened heater shield',
		'type' => 'shield',
		'armor' => '76'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced heater shield',
		'type' => 'shield',
		'armor' => '78'
		]);	

		//helmets
		DB::table('equipment_categories')->insert([            
		'equipment' => 'nasal helmet',
		'type' => 'helmet',
		'armor' => '40'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened nasal helmet',
		'type' => 'helmet',
		'armor' => '42'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced nasal helmet',
		'type' => 'helmet',
		'armor' => '44'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'bascinet',
		'type' => 'helmet',
		'armor' => '45'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened bascinet',
		'type' => 'helmet',
		'armor' => '47'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced bascinet',
		'type' => 'helmet',
		'armor' => '49'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heaume',
		'type' => 'helmet',
		'armor' => '53'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened heaume',
		'type' => 'helmet',
		'armor' => '55'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced heaume',
		'type' => 'helmet',
		'armor' => '57'
		]);	
		
		//armor
		DB::table('equipment_categories')->insert([            
		'equipment' => 'plate armor',
		'type' => 'armor',
		'armor' => '55'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened plate armor',
		'type' => 'armor',
		'armor' => '57'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced plate armor',
		'type' => 'armor',
		'armor' => '59'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'scale armor',
		'type' => 'armor',
		'armor' => '52'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened scale armor',
		'type' => 'armor',
		'armor' => '54'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced scale armor',
		'type' => 'armor',
		'armor' => '56'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'mail armor',
		'type' => 'armor',
		'armor' => '50'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened mail armor',
		'type' => 'armor',
		'armor' => '52'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced mail armor',
		'type' => 'armor',
		'armor' => '54'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hauberk',
		'type' => 'armor',
		'armor' => '40'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened hauberk',
		'type' => 'armor',
		'armor' => '42'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced hauberk',
		'type' => 'armor',
		'armor' => '44'
		]);		

		DB::table('equipment_categories')->insert([            
		'equipment' => 'leather armor',
		'type' => 'armor',
		'armor' => '32'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened leather armor',
		'type' => 'armor',
		'armor' => '34'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced leather armor',
		'type' => 'armor',
		'armor' => '36'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'gambeson',
		'type' => 'armor',
		'armor' => '21'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'hardened gambeson',
		'type' => 'armor',
		'armor' => '23'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'reinforced gambeson',
		'type' => 'armor',
		'armor' => '25'
		]);			
		
		//bows
		DB::table('equipment_categories')->insert([            
		'equipment' => 'shortbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '18'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong shortbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '21'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork shortbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '23'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'longbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '22'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong longbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '25'
		]);

		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork longbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '27'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'composite bow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '25'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong composite bow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '28'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork composite bow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '30'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'crossbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '44'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong crossbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '47'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork crossbow',
		'type' => 'bow',
		'accuracy' => '99',
		'range' => '49'
		]);	
		
		//thrown weapons	
		DB::table('equipment_categories')->insert([            
		'equipment' => 'throwing dagger',
		'type' => 'thrown',
		'accuracy' => '99',
		'range' => '25'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'javelin',
		'type' => 'thrown',
		'accuracy' => '99',
		'range' => '34'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'throwing axe',
		'type' => 'thrown',
		'accuracy' => '99',
		'range' => '35'
		]);	
		
		//matchlock
		DB::table('equipment_categories')->insert([            
		'equipment' => 'arquebus',
		'type' => 'matchlock',
		'accuracy' => '99',
		'range' => '45'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong arquebus',
		'type' => 'matchlock',
		'accuracy' => '99',
		'range' => '48'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork arquebus',
		'type' => 'matchlock',
		'accuracy' => '99',
		'range' => '50'
		]);

		//polearm
		DB::table('equipment_categories')->insert([            
		'equipment' => 'poleaxe',
		'type' => 'polearm',
		'swing' => '50',
		'thrust' => '15'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'bardiche',
		'type' => 'polearm',
		'swing' => '48',
		'thrust' => '17'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy bardiche',
		'type' => 'polearm',
		'swing' => '50',
		'thrust' => '19'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'voulge',
		'type' => 'polearm',
		'swing' => '40',
		'thrust' => '18'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy voulge',
		'type' => 'polearm',
		'swing' => '42',
		'thrust' => '20'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'halberd',
		'type' => 'polearm',
		'swing' => '39',
		'thrust' => '19'
		]);

		DB::table('equipment_categories')->insert([            
		'equipment' => 'guisarme',
		'type' => 'polearm',
		'swing' => '38',
		'thrust' => '20'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'bill',
		'type' => 'polearm',
		'swing' => '36',
		'thrust' => '22'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'spear',
		'type' => 'polearm',
		'swing' => '20',
		'thrust' => '27'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'pike',
		'type' => 'polearm',
		'swing' => '20',
		'thrust' => '33'
		]);	
		
		//cavalry lances
		DB::table('equipment_categories')->insert([            
		'equipment' => 'lance',
		'type' => 'lance',
		'swing' => '16',
		'thrust' => '27'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy lance',
		'type' => 'lance',
		'swing' => '18',
		'thrust' => '29'
		]);
		
		//bludgeon weapons
		DB::table('equipment_categories')->insert([            
		'equipment' => 'mace',
		'type' => 'bludgeon',
		'swing' => '35',
		'thrust' => '21'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy mace',
		'type' => 'bludgeon',
		'swing' => '37',
		'thrust' => '23'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'axe',
		'type' => 'bludgeon',
		'swing' => '31',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy axe',
		'type' => 'bludgeon',
		'swing' => '33',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'battle axe',
		'type' => 'bludgeon',
		'swing' => '38',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'heavy battle axe',
		'type' => 'bludgeon',
		'swing' => '40',
		'thrust' => '0'
		]);	
		
		//daggers
		DB::table('equipment_categories')->insert([            
		'equipment' => 'dagger',
		'type' => 'dagger',
		'swing' => '22',
		'thrust' => '19'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong dagger',
		'type' => 'dagger',
		'swing' => '25',
		'thrust' => '22'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork dagger',
		'type' => 'dagger',
		'swing' => '27',
		'thrust' => '24'
		]);	

		//one handed blades
		DB::table('equipment_categories')->insert([            
		'equipment' => 'norman sword',
		'type' => 'sword',
		'swing' => '30',
		'thrust' => '21'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong norman sword',
		'type' => 'sword',
		'swing' => '33',
		'thrust' => '24'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong norman sword',
		'type' => 'sword',
		'swing' => '35',
		'thrust' => '26'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'knightly sword',
		'type' => 'sword',
		'swing' => '33',
		'thrust' => '28'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong knightly sword',
		'type' => 'sword',
		'swing' => '36',
		'thrust' => '31'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork knightly sword',
		'type' => 'sword',
		'swing' => '38',
		'thrust' => '33'
		]);	
				
		DB::table('equipment_categories')->insert([            
		'equipment' => 'falchion',
		'type' => 'sword',
		'swing' => '30',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong falchion',
		'type' => 'sword',
		'swing' => '33',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork falchion',
		'type' => 'sword',
		'swing' => '35',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'scimitar',
		'type' => 'sword',
		'swing' => '30',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong scimitar',
		'type' => 'sword',
		'swing' => '33',
		'thrust' => '0'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork scimitar',
		'type' => 'sword',
		'swing' => '35',
		'thrust' => '0'
		]);	
		
		//two handed blades
		DB::table('equipment_categories')->insert([            
		'equipment' => 'longsword',
		'type' => 'longsword',
		'swing' => '39',
		'thrust' => '31'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'strong longsword',
		'type' => 'longsword',
		'swing' => '42',
		'thrust' => '34'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'masterwork longsword',
		'type' => 'longsword',
		'swing' => '44',
		'thrust' => '36'
		]);	
		
		//illuminated manuscripts
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Armagh',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Bern',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Cambridge',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Carinthia',
		'type' => 'manuscript',
		'literature' => '1'
		]);

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Corbie',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Exeter',
		'type' => 'manuscript',
		'literature' => '1'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Florence',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Fulda',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Kells',
		'type' => 'manuscript',
		'literature' => '1'
		]);		
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Leon',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Mainz',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Milan',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Naples',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Oxford',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Prague',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Rouen',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Saint Gall',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Toledo',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Tours',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Wurzburg',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Autun Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Brescia Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Durham Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Echternach Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Egmond Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Lindisfarne Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);		

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Lorsch Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Paris Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Verona Gospels',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Song of Antioch',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Song of Jerusalem',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Song of William',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Parcival and the Story of the Grail',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Lancelot and the Knight of the Cart',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Yvain and the Knight of the Lion',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Gawain and the Green Knight',
		'type' => 'manuscript',
		'literature' => '1'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tristan and Iseult',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'The Death of Arthur',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales of Canterbury',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Romance of Alexander',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Romance of Thebes',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Romance of Troy',
		'type' => 'manuscript',
		'literature' => '1'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Epic of Beowulf',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Epic of Ferumbras',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Epic of Roland',
		'type' => 'manuscript',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Epic of Saint George and the Dragon',
		'type' => 'manuscript',
		'literature' => '1'
		]);	

		//arabic miniatures
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales from Aleppo',
		'type' => 'miniatures',
		'literature' => '1'
		]);			
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales from Baghdad',
		'type' => 'miniatures',
		'literature' => '1'
		]);		
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Knowledge',
		'type' => 'miniatures',
		'literature' => '1'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales of Bayad and Riyad',
		'type' => 'miniatures',
		'literature' => '1'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales from Tabriz',
		'type' => 'miniatures',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Tales of Timur',
		'type' => 'miniatures',
		'literature' => '1'
		]);
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Book of Wonders',
		'type' => 'miniatures',
		'literature' => '1'
		]);	
		
		//block books
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Paupers Bible',
		'type' => 'blockbook',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Songs Book',
		'type' => 'blockbook',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Canticles Book',
		'type' => 'blockbook',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Fables Book',
		'type' => 'blockbook',
		'literature' => '1'
		]);	
		
		DB::table('equipment_categories')->insert([            
		'equipment' => 'Speculum of Alchemy',
		'type' => 'blockbook',
		'literature' => '1'
		]);			

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Speculum of Astronomy',
		'type' => 'blockbook',
		'literature' => '1'
		]);		

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Speculum of Salvation',
		'type' => 'blockbook',
		'literature' => '1'
		]);	

		DB::table('equipment_categories')->insert([            
		'equipment' => 'Speculum of Judges',
		'type' => 'blockbook',
		'literature' => '1'
		]);			
	
		
    }
}
