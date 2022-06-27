<?php

use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
			/*
			//example
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',			//Feudal, Ecclesiastical, Monastic_Order, Crusader_Order, Crowned_Republic
				'de_jure_duchy' => '',				
				'vernacular_culture' => '',			//
				'vernacular_architecture' => '',	//
													//1 migration (500), 2 carolingian (770), 3 ottonian (940), 4 romanesque (980), 5 mercantile (1070), 6 gothic (1130), 7 renaissance (1250), 8 flamboyant (1350), 9 imperial (1420) 		
				'science_literature' => '',			//1 miniature, 2 lyric poetry, 3 courtly love, 4 ---, 5 heraldry, 6 ---, 7 rondel, 8 saltarello, 9 blockbook
				'science_architecture' => '',		//1 hillfort, 2 great hall I, 3 enclosure, 4 great hall II, 5 concentric, 6 lancet, 7 ribbed vault, 8 great hall III, 9 great hall IV
				'science_monasticism' => '',		//1 monast, 2 relics I, 3 relics II, 4 relics III, 5 passagium, 6 mendicant, 7 inquisition, 8 relics IV, 9 relics V
				'science_engineering' => '',		//1 traction, 2 ---, 3 counterpoise, spinning wheel, 5 horizontal loom, 6 treadwheel, 7 stagecoach, 8 sapping I, 9 sapping II
				'science_agriculture' => '',		//1 one-field system, 2 horse collar, 3 two-field system, 4 husbandry I, 5 three-field system, 6 basket press, 7 husbandry II, 8 husbandry III, 9 husbandry IV
				'science_cavalry' => '',			//1 stirrup, 2 horseshoe, 3 ---, 4 ---, 5 ---, 6 chivalry, 7 joust, 8 ---, 9 gendarme
				'science_melee' => '',				//1 tourney, 2 berserk I, 3 berserk II, 4 berserk III, 5 hastilude, 6 free company, 7 pike, 8 halberd, 9 landsknecht
				'science_skirmish' => '',			//1 archery I, 2 archery II, 3 archery III, 4 archery IV, 5 longbow, 6 arbalest, 7 ---, 8 pavise I, 9 pavise II
				'science_armour' => '',				//1 hauberk, 2 ---, 3 ---, 4 ---, 5 chausses, 6 coat of plates, 7 brigandine, 8 cuirass, 9 plate armour	
				'science_metallurgy' => '',			//1 bloomery, 2 alchemy, 3 ---, 4 ---, 5 chimney, 6 blast furnace, 7 gunpowder, 8 cannon, 9 matchlock		
				'science_ship' => '',				//1 clinker built, 2 ---, 3 stern rudder, 4 ---, 5 compass, 6 ---, 7 portolan chart, 8 ---, 9 carvel built	
				'science_education' => '',			//1 quadrivium, 2 trivium, 3 ---, 4 ---, 5 studium generale, 6 scholastics I, 7 humanism, 8 ---, 9 scholastics II
				'science_manufacturing' => '',		//1 yoke, 2 mills I, 3 guilds, 4 ---, 5 mills II, 6 satin weave, 7 mills III, 8 factory, 9 canvas
				'science_trade' => '',				//1 market right, 2 staple right, 3 ---, 4 ---, 5 trade fair, 6 merchant banking, 7 anchor currency, 8 spice trade I, 9 spice trade II
				
				'levy_feudal' => '',				//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal
				'levy_burgher' => '',				//minimal, normal, large, maximal
				'tax_feudal' => '',					//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal				
				'tax_burgher' => '',				//minimal, normal, large, maximal				
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1',		(kingdom)
				'tenant_in_chief' => '1',		(duchy)
				'mesne_lord' => '1'				(county)
            ]);			
			*/
			
			//
			// 
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_culture' => '',	
				'vernacular_architecture' => '',
				'science_literature' => '1',			
				'science_architecture' => '1',		
				'science_monasticism' => '1',		
				'science_engineering' => '1',		
				'science_agriculture' => '1',		
				'science_cavalry' => '1',			
				'science_melee' => '1',				
				'science_skirmish' => '1',			
				'science_armour' => '1',				
				'science_metallurgy' => '1',					
				'science_ship' => '1',				
				'science_education' => '1',			
				'science_manufacturing' => '1',		
				'science_trade' => '1',							
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',	
				'tax_burgher' => 'normal',				
				'souvereign' => '1',
				'lord_paramount' => '1',
				'tenant_in_chief' => '1',
				'mesne_lord' => '1'
            ]);
	
		
		//defunct empires
	
			
    }
}