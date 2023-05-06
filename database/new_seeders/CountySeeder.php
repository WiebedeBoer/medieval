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
			*Feudal 83%, Ecclesiastical 10%, Monastic_Order 1%, Crusader_Order 2%, Crowned_Republic 4%
			*
			*Watermill 6%, Windmill 5%
			*
			*Hunting 5%	
			*Scents 5%, Cloth 8%, Dyes 6%
			*Warhorses 14%, Dairy 23%, Wool 25% 
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',			//Feudal (1117), Ecclesiastical (128), Monastic_Order (16), Crusader_Order (32), Crowned_Republic (50)
				'de_jure_duchy' => '',	
				'vernacular_religion' => '',		//Catholic, Orthodox_Greek, Orthodox_Serbian, Orthodox_Bulgarian, Sunni, Shia, Pagan
				'vernacular_cycle' => '',			//Matter_High_German, Matter_Low_German, Matter_Lombard, Matter_Venice, Matter_Tuscan, Matter_Rome, Matter_France, Matter_Britain, Matter_Aragon, Matter_Castile, Matter_Portugal, Matter_Norse, Matter_Byzantine, Matter_Sicily, Matter_Napels, Matter_Sardinia, Matter_Georgia, Matter_Armenia, Matter_Bulgaria, Matter_Vlach, Matter_Serbia, Matter_Rus, Matter_Andalus, Matter_Darija, Matter_Ifriqiya, Matter_Masri, Matter_Jazira, Matter_Levant, Matter_Hejaz, Matter_Najd, Matter_Turk, Matter_Persia, Matter_Magyar, Matter_Croat, Matter_Bohemia, Matter_Sorbia, Matter_Baltic, Matter_Polish	
				'vernacular_culture' => '',			//Arpitan, Bavarian, Bohemian, Breton, Franconian, Frankish, Frisian, Flemish, Lombard, Occitan, Catalan, Saxon, Silesian, Moravian, Swabian, Livonian, Prussian, Wendish, Irish, English, Welsh, Gaelic, Pictish, Norwegian, Danish, Swedish, Finnish, Navarrese, Aragonese, Castillian, Leonese, Galician, Asturian, Cantabrian, Portuguese, Polish, Lithuanian, Hungarian, Croatian, Greek, Sicilian, Neapolitan, Sardinian, Georgian, Armenian, Bulgarian, Wallachian, Serbian, Russian, Ruthenian, Moorish, Arabic, Turkic, Persian 
				'banal_moulin' => '',				//None, Watermill (77), Windmill (69)
				'banal_pressoir' => '',				//None, Beverage_Wine (188), Beverage_Cider (83), Beverage_Elder (15), Beverage_Hops (15), Beverage_Gruit (128), Sweetener_Honey (185), Sweetener_Sugarcane (29), Sweetener_Date (42)
				'banal_chasse' => '',				//None, Falconry (9), Deer (27), Boar (29), Fur	(6)	
				'marke_crops' => '',				//None (1088), Perfume_Lavender (58), Perfume_Incense (10), Perfume_Rose (0), Fiber_Flax (50), Fiber_Hemp (15), Fiber_Cotton (15), Fiber_Silk (24), Dye_Saffron (28), Dye_Madder (5), Dye_Woad (38), Dye_Indigo (0), Dye_Kermes (12); default=None
				'marke_animal_husbandry' => '',		//Stud (182), Cattle (315), Sheep (337), Camel (5), Pigs (251), Goats (153), Poultry (100), Ducks (5) 
													//1 migration (500), 2 carolingian (770), 3 ottonian (940), 4 romanesque (980), 5 mercantile (1070), 6 gothic (1130), 7 renaissance (1250), 8 flamboyant (1350), 9 imperial (1420) 		
				'science_court' => '',				//1 dais, 2 lyric poetry, 3 courtly love, 4 great survey, 5 heraldry, 6 chimney, 7 rondel, 8 saltarello, 9 canvas; default=1	
				'science_castle' => '',				//1 manor I, 2 motte, 3 enceinte, 4 donjon, 5 concentric, 6 manor II, 7 manor III, 8 manor IV, 9 manor V; default=1	
				'science_ecclesiastical' => '',		//1	quadrivium, 2 trivium, 3 relics I, 4 groin vault, 5 studium generale, 6 lancet window, 7 ribbed vault, 8 studium humanitas, 9 relics II; default=1	
				'science_monasticism' => '',		//1 cloister, 2 manuscripts I, 3 manuscripts II, 4 medicine, 5 passagium, 6 mendicant, 7 manuscripts III, 8 manuscripts IV, 9 manuscripts V; default=1	
				'science_port' => '',				//1 clinker built, 2 staple right, 3 stern rudder, 4 factory I, 5 compass, 6 treadwheel crane, 7 portolan chart, 8 factory II, 9 carvel built; default=1	
				'science_market' => '',				//1 fairs I, 2 mint right, 3 guilds, 4 fairs II, 5 fairs III, 6 merchant banking, 7 anchor currency, 8 fairs IV, fairs V; default=1	
				'science_commerce' => '',			//1 fabrics I, 2 panemone windmill, 3 fabrics II, 4 spinning wheel, 5 horizontal loom, 6 post mill, 7 stagecoach, 8 fabrics III, block printing; default=1	
				'science_agriculture' => '',		//1 one-field system, 2 horse collar, 3 two-field system, 4 husbandry I, 5 three-field system, 6 basket press, 7 husbandry II, 8 husbandry III, 9 husbandry IV; default=1	
				'science_cavalry' => '',			//1 stirrup, 2 tourney, 3 horseshoe, 4 chevauchee I, 5 hastilude, 6 chivalry, 7 joust, 8 gendarme, 9 chevauchee II; default=1					
				'science_melee' => '',				//1 round shield, 2 hafted axe, 3 knightly sword, 4 arming sword, 5 pike, 6 routier, 7 bardiche, 8 poleaxe, 9 longsword	; default=1				
				'science_skirmish' => '',			//1 archery I, 2 archery II, 3 archery III, 4 archery IV, 5 longbow, 6 arbalest, 7 archery V, 8 pavise I, 9 matchlock; default=1	
				'science_siege' => '',				//1 traction, 2 ram I, 3 ram II, ram III, 5 counterpoise, 6 blast furnace, 7 gunpowder, 8 cannon, 9 mantlet; default=1				
				'science_armour' => '',				//1 hauberk I, 2 hauberk II, 3 hauberk III, 4 hauberk IV, 5 chausses, 6 coat of plates, 7 brigandine, 8 tabard, 9 plate armour; default=1						
				'levy_feudal' => '',				//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',				//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',					//minimal, normal, large, maximal; default=normal		
				'tax_ecclesiastical' => '',			//minimal, normal, large, maximal; default=minimal				
				'tax_burgher' => '',				//minimal, normal, large, maximal; default=normal				
				'souvereign' => '1',			(empire); default=1
				'lord_paramount' => '1',		(kingdom); default=1
				'tenant_in_chief' => '1',		(duchy); default=1
				'mesne_lord' => '1'				(county); default=1
            ]);			
			*/
			
			//Holy Roman Empire
			//Germany
			//Austria
			//1
			//melk, gottweig, sankt polten
            DB::table('counties')->insert([
				'county_name' => 'Grunsweit',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',														
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//2 
			//altenburg, eggenburg, rosenburg, chremis
            DB::table('counties')->insert([
				'county_name' => 'Ostmark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',				
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Boar',											
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//3
			//vienna, klosterneuburg, kreuzenstein
            DB::table('counties')->insert([
				'county_name' => 'Vienna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',															
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'				
            ]);
			//Bavaria
			//4
			//regensburg, straubing
            DB::table('counties')->insert([
				'county_name' => 'Donaugau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',														
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//5
			//bamberg, hallstadt
            DB::table('counties')->insert([
				'county_name' => 'Folkfeld',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',										
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//6
			//geisenhausen, veldenstein
            DB::table('counties')->insert([
				'county_name' => 'Isengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',										
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//7
			//egerburg, nuremberg, grafengehaig, windsheim
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',							
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//8
			//forchheim, staffelstein
            DB::table('counties')->insert([
				'county_name' => 'Radenzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',										
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//9
			//passau, erneck, vornbach
            DB::table('counties')->insert([
				'county_name' => 'Rottgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//10
			//vilshofen, furstenstein, saldenburg
            DB::table('counties')->insert([
				'county_name' => 'Schweinachgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',										
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//11
			//ingolstadt, neuburg, freising
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',										
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Brabant
			//12
			//brussels, louvain
            DB::table('counties')->insert([
				'county_name' => 'Brabant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//13
			//hasselt, tongeren, borgloon, kuringen, herkenrode
            DB::table('counties')->insert([
				'county_name' => 'Haspengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//14
			//valenciennes, mons, lobbes, brakel
            DB::table('counties')->insert([
				'county_name' => 'Hennegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//15
			//cambrai, caudry
            DB::table('counties')->insert([
				'county_name' => 'Kamerykgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//16
			//antwerp, breda, tilburg, turnhout, stryen, geldrop, mierlo, heeswick, herlaar, waalwick, besoyen, bosch, orthen, bokhoven, ravenstein
            DB::table('counties')->insert([
				'county_name' => 'Toxandria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//17
			//ghent, axel, hulst, assenede, boekhoute, sluys, gavere
            DB::table('counties')->insert([
				'county_name' => 'Waasgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Carinthia
			//18
			//hengistburg, sankt nikolai
            DB::table('counties')->insert([
				'county_name' => 'Hengistgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//19
			//judenburg, frauenburg
            DB::table('counties')->insert([
				'county_name' => 'Ingeringtal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//20
			//steinz, graz, seckau
            DB::table('counties')->insert([
				'county_name' => 'Jauntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//21
			//karlsberg, klagenfurt, velden, sankt veit, gurk
            DB::table('counties')->insert([
				'county_name' => 'Kroatengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//22
			//sankt paul, sankt andra
            DB::table('counties')->insert([
				'county_name' => 'Lavanttal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//23
			//leoben, sankt stefan
            DB::table('counties')->insert([
				'county_name' => 'Leobental',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//24
			//kadour, lienz, villach
            DB::table('counties')->insert([
				'county_name' => 'Lurngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//25
			//eppenstein, hohenwang
            DB::table('counties')->insert([
				'county_name' => 'Murztal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//26
			//celje, richenburg
            DB::table('counties')->insert([
				'county_name' => 'Sanntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Carniola
			//27
			//laibach, zobelsberg
            DB::table('counties')->insert([
				'county_name' => 'Krainmark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//28
			//tergeste, parenzo, mitterburg, pican, pula
            DB::table('counties')->insert([
				'county_name' => 'Histria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Dye_Madder',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Franconia
			//29
			//fulda, hunfeld, mellrichstadt, ebersburg, henneberg, schweinfurt
            DB::table('counties')->insert([
				'county_name' => 'Grabfeld',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//30
			//rotenburg, colmberg, comburg
            DB::table('counties')->insert([
				'county_name' => 'Gollachgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//31
			//kitzingen, gerolshofen
            DB::table('counties')->insert([
				'county_name' => 'Gotzfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//32
			//mosbach, minneburg
            DB::table('counties')->insert([
				'county_name' => 'Jagstgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//33
			//hammelburg, gersfeld
            DB::table('counties')->insert([
				'county_name' => 'Saalgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//34
			//gosheim, kaisersheim
            DB::table('counties')->insert([
				'county_name' => 'Sualafeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//35
			//heilbronn, weinsberg, ellhofen, ohringen, hall, hohenstein
            DB::table('counties')->insert([
				'county_name' => 'Sulmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//36
			//weikersheim, mergentheim
            DB::table('counties')->insert([
				'county_name' => 'Taubergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//37
			//wurzburg, wertheim, waldsassen
            DB::table('counties')->insert([
				'county_name' => 'Waldsassengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Frisia
			//38
			//oldenburg, rastede, westerstede
            DB::table('counties')->insert([
				'county_name' => 'Ammergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//39
			//aurichove, ihlow, marienhafe
            DB::table('counties')->insert([
				'county_name' => 'Auricherland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//40
			//goes, wissenkerk, hellenburg, renesse
            DB::table('counties')->insert([
				'county_name' => 'Beveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//41
			//jouwer, haskerhorn, bakkeveen, beets, oudeschoot
            DB::table('counties')->insert([
				'county_name' => 'Bornegau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//42
			//coevorden, groningen, ruinen, rolde, wolvega, appelsche, oostwold
            DB::table('counties')->insert([
				'county_name' => 'Drenthe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//43
			//meldorf, hemmingstedt, wohrden
            DB::table('counties')->insert([
				'county_name' => 'Dithmarschen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//44
			//emden, leer
            DB::table('counties')->insert([
				'county_name' => 'Emsigerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//45
			//appingedam, winschoten, farmsum 
            DB::table('counties')->insert([
				'county_name' => 'Fivelgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//46
			//otterndorf, ritzebuttel 
            DB::table('counties')->insert([
				'county_name' => 'Hadeln',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//47
			//dordrecht, gouda, zuidewyn, ridderkerk
            DB::table('counties')->insert([
				'county_name' => 'Holtland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//48
			//winsum, bedum, selwerd
            DB::table('counties')->insert([
				'county_name' => 'Hunsingau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//49
			//haarlem, alkmaar, amsterdam, edam, purmerstein, brederode, egmond
            DB::table('counties')->insert([
				'county_name' => 'Kennemerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//50
			//delft, vlaardingen, rotterdam, holylede, berkel
            DB::table('counties')->insert([
				'county_name' => 'Maasland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//51
			//utrecht, dorestadt, amerongen, zuilenburg, woudenberg, heemstede, nyenrode, vianen, woerden, lockhorst
            DB::table('counties')->insert([
				'county_name' => 'Nifterlake',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//52
			//norden, berum, jever
            DB::table('counties')->insert([
				'county_name' => 'Norderland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//53
			//ostringfeld, reepsholt, kniphausen
            DB::table('counties')->insert([
				'county_name' => 'Ostringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//54
			//dockum, liowerd, klaarkamp, wytgaard, mariengaard
            DB::table('counties')->insert([
				'county_name' => 'Oostergau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//55
			//leithen, wassenaar, cronestein, haag, loosduinen
            DB::table('counties')->insert([
				'county_name' => 'Rhineland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//56
			//nordenham, rodenkirchen, langwarden
            DB::table('counties')->insert([
				'county_name' => 'Rustringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//57
			//zwolle, kampen, hasselt, waardenborg, hardenberg
            DB::table('counties')->insert([
				'county_name' => 'Salland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//58
			//starum, sloten, hemlum
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//59
			//tiel, buren, arkel, heusden, vianen, loevestein, almkerk, ammersoyen, zaltbommel
            DB::table('counties')->insert([
				'county_name' => 'Teisterbant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//60
			//oldenzaal, enschede, almelo, ottenstein
            DB::table('counties')->insert([
				'county_name' => 'Twente',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//61
			//elburg, harderwick, barnefeld, scherpenzeel
            DB::table('counties')->insert([
				'county_name' => 'Veluwe',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//62
			//vollenhove, kuinre, steenwick
            DB::table('counties')->insert([
				'county_name' => 'Vollenhove',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//63
			//flissinghe, serooskerke, middelburg
            DB::table('counties')->insert([
				'county_name' => 'Walcheren',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//64
			//froonacker, bolsward, drylts, hylpen, snits, harns, hoxwier, boksum, lidlum
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//65
			//hoorn, medemblik, enkhuizen
            DB::table('counties')->insert([
				'county_name' => 'Westflinge',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//66
			//sieversham, midlum, bederkesa, diepholt, weddewarden
            DB::table('counties')->insert([
				'county_name' => 'Wursten',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Guelders
			//67
			//guelders, xanten, gennep, walbeck
            DB::table('counties')->insert([
				'county_name' => 'Hettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//68
			//nymegen, arnhem, doornenburg, batenburg, appeltern, maldericke
            DB::table('counties')->insert([
				'county_name' => 'Betuwe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//69
			//cleves, kranenburg, boetselaer
            DB::table('counties')->insert([
				'county_name' => 'Cleveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmilll',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//70
			//zutphen, deventer, doetinchem, doesburg, camphuysen, bronkhorst, lochem, zeddam, wychen
            DB::table('counties')->insert([
				'county_name' => 'Hamaland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//71
			//tegelen, venlo, straelen
            DB::table('counties')->insert([
				'county_name' => 'Mulgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//72
			//duisburg, moers
            DB::table('counties')->insert([
				'county_name' => 'Ruhrgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Julich
			//73
			//julich, duren, aachen, burtscheid, kornelimunster
            DB::table('counties')->insert([
				'county_name' => 'Julichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//74
			//kasselburg, gerolstein, kaufungen
            DB::table('counties')->insert([
				'county_name' => 'Eifelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//75
			//zulpich, hallenburg
            DB::table('counties')->insert([
				'county_name' => 'Zulpichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Limburg
			//76
			//limburg, liege
            DB::table('counties')->insert([
				'county_name' => 'Luttichgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//77
			//stavelot, malmedy, wiltz, bouillon
            DB::table('counties')->insert([
				'county_name' => 'Ardennengau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//78
			//dinant, poilvache, huy
            DB::table('counties')->insert([
				'county_name' => 'Condrustgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//79
			//namur, florennes, gembloux
            DB::table('counties')->insert([
				'county_name' => 'Lommegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);			
			//80
			//maastricht, borgharen, valkenburg, thorn, aldeneik, susteren, odilienberg, kessel
            DB::table('counties')->insert([
				'county_name' => 'Maasgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Lorraine
			//81
			//metz, roncourt, semecourt, gorze
            DB::table('counties')->insert([
				'county_name' => 'Metzgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//82
			//bitche, zweibrucken, homburg
            DB::table('counties')->insert([
				'county_name' => 'Bleisgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//83
			//luneville, epinal, fontenoy, remiremont
            DB::table('counties')->insert([
				'county_name' => 'Chaumontois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//84
			//sarrebourg, saarbrucken
            DB::table('counties')->insert([
				'county_name' => 'Saargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//85
			//weich, dieuze, salins
            DB::table('counties')->insert([
				'county_name' => 'Salingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//86
			//neufchateau, sandaucourt
            DB::table('counties')->insert([
				'county_name' => 'Soulossois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//87
			//toul, ochey, nancy, clairlieu
            DB::table('counties')->insert([
				'county_name' => 'Toullois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Luxembourg
			//88
			//luxembourg, bettembourg
            DB::table('counties')->insert([
				'county_name' => 'Methingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//89
			//barrois, ligny
            DB::table('counties')->insert([
				'county_name' => 'Barrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//90
			//sedan, mouzon
            DB::table('counties')->insert([
				'county_name' => 'Moselgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//91
			//verdun, recicourt
            DB::table('counties')->insert([
				'county_name' => 'Verdungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//92
			//longwy, arlon, thionville, chiny, clairefontaine
            DB::table('counties')->insert([
				'county_name' => 'Wavergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Saxony
			//93
			//luneburg, bardowick, emmendorf, uelzen
            DB::table('counties')->insert([
				'county_name' => 'Bardengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//94
			//brunswick, hebesheim, haldensleben, supplinburg, riddagshausen
            DB::table('counties')->insert([
				'county_name' => 'Derlingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//95
			//hildesheim, poppenburg
            DB::table('counties')->insert([
				'county_name' => 'Eastfalagau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//96
			//celle, hanover
            DB::table('counties')->insert([
				'county_name' => 'Gretingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//97
			//gandersheim, westerhof, willershausen, lamspringe
            DB::table('counties')->insert([
				'county_name' => 'Gudingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//98
			//duderstadt, pohlde
            DB::table('counties')->insert([
				'county_name' => 'Harzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//99
			//goslar, harzburg, osterode, herzberg, walkenried
            DB::table('counties')->insert([
				'county_name' => 'Wenzengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Styria
			//100
			//linz, wels, styraburg, kremsmunster, lambach
            DB::table('counties')->insert([
				'county_name' => 'Traungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//101
			//sankt george, sankt margarethen, moosham
            DB::table('counties')->insert([
				'county_name' => 'Attergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//102
			//innsbruck, kufstein, admont, muhlau
            DB::table('counties')->insert([
				'county_name' => 'Ennstal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//103
			//mattighofen, fraunhofen
            DB::table('counties')->insert([
				'county_name' => 'Mattiggau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//104
			//brixen, bolzano, merano, tirol
            DB::table('counties')->insert([
				'county_name' => 'Norital',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Falconry',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//105
			//sankt moritz, schlandersberg
            DB::table('counties')->insert([
				'county_name' => 'Vinschgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Swabia
			//106
			//ortenberg, offenburg, gengenbach, schuttern, baden
            DB::table('counties')->insert([
				'county_name' => 'Ortengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//107
			//kempten, sulzberg, wagegg, finkelsburg, rettenberg, sankt ulrich
            DB::table('counties')->insert([
				'county_name' => 'Albegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//108
			//augsburg, wettenhausen, wittelsbach, memmingen, buxheim
            DB::table('counties')->insert([
				'county_name' => 'Augstgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//109
			//freiburg, zahringen, roggenburg, muttenz, wartenberg, basel
            DB::table('counties')->insert([
				'county_name' => 'Breisgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//110
			//chur, disentis, feldkirchen, bludenz, sankt george, sonnenberg
            DB::table('counties')->insert([
				'county_name' => 'Churgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//111
			//singen, verenahof
            DB::table('counties')->insert([
				'county_name' => 'Hegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//112
			//ravensburg, weingarten, salem, baindt
            DB::table('counties')->insert([
				'county_name' => 'Linzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//113
			//greifenstein, tubingen, reutlingen, rottenburg
            DB::table('counties')->insert([
				'county_name' => 'Neckargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//114
			//strassburg, hohenburg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//115
			//nordlingen, ellwangen
            DB::table('counties')->insert([
				'county_name' => 'Riesgau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//116
			//hohenzollern, falkenstein, ulm, hohenstaufen, biberach, buchau, gutenzell, marchtal
            DB::table('counties')->insert([
				'county_name' => 'Schwerzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//117
			//einsiedeln, lenzburg
            DB::table('counties')->insert([
				'county_name' => 'Schwyzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//118
			//mulhausen, kolmar, murbach, lichtenberg
            DB::table('counties')->insert([
				'county_name' => 'Sundgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//119
			//konstanz, sankt gall, lindau, kirchberg, kreuzlingen, reichenau, engelberg, toggenburg
            DB::table('counties')->insert([
				'county_name' => 'Turgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//120
			//zurich, winterthur, kyburg
            DB::table('counties')->insert([
				'county_name' => 'Zurichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Thuringia
			//121
			//erfurt, weimar, schmalkalden
            DB::table('counties')->insert([
				'county_name' => 'Thuringgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//122
			//gruessen, runneburg
            DB::table('counties')->insert([
				'county_name' => 'Altgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//123
			//muhlhausen, anrode
            DB::table('counties')->insert([
				'county_name' => 'Eichsfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//124
			//nordhausen, ebersburg
            DB::table('counties')->insert([
				'county_name' => 'Helmegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//125
			//arnstadt, liebenstein
            DB::table('counties')->insert([
				'county_name' => 'Langwitzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//126
			//sondershausen, frankenhausen
            DB::table('counties')->insert([
				'county_name' => 'Nabelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//127
			//rudolstadt, greifenstein, saalfeld, leutenberg
            DB::table('counties')->insert([
				'county_name' => 'Orlagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//128
			//naumburg, altenburg, moritzburg, gera, ronneburg
            DB::table('counties')->insert([
				'county_name' => 'Ostergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//129
			//zwickau, plauen
            DB::table('counties')->insert([
				'county_name' => 'Zwickaugau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Bremen
			//130
			//bremen, delmenhorst, hoya
            DB::table('counties')->insert([
				'county_name' => 'Largau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//131
			//meppen, lingen, papenburg
            DB::table('counties')->insert([
				'county_name' => 'Agradingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//132
			//arnsberg, soest, warstein, wedinghausen, marsfelde, herdringen, furstenberg
            DB::table('counties')->insert([
				'county_name' => 'Angerngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//133
			//corvey, hoxter, amelungsborn, holzminden, everstein
            DB::table('counties')->insert([
				'county_name' => 'Augau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//134
			//buckeburg, schaumburg, hamelin 
            DB::table('counties')->insert([
				'county_name' => 'Bukkigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//135
			//bentheim, dinkelrode, marienrode, wietmarschen, salzbergen, elbergen
            DB::table('counties')->insert([
				'county_name' => 'Bursibant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//136
			//minden, petershagen, schlusselburg, hausberge, rahden, reineburg
            DB::table('counties')->insert([
				'county_name' => 'Dervegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//137
			//lippstadt, greven, lunen, nienburg
            DB::table('counties')->insert([
				'county_name' => 'Dreingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//138
			//osnabruck, yburg, marienfeld
            DB::table('counties')->insert([
				'county_name' => 'Gronegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//139
			//tecklenburg, scapheim, cloppenburg, krapendorf
            DB::table('counties')->insert([
				'county_name' => 'Hasegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//140
			//stade, horneburg, harburg
            DB::table('counties')->insert([
				'county_name' => 'Heilangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//141
			//niemunster, rendsburg, reinfeld
            DB::table('counties')->insert([
				'county_name' => 'Holsteingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//142
			//gottingen, leineberg 
            DB::table('counties')->insert([
				'county_name' => 'Leinegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//143
			//buxtehude, jesteburg
            DB::table('counties')->insert([
				'county_name' => 'Mosidegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//144
			//paderborn, salzkotten, wewer, hardehausen, warburg
            DB::table('counties')->insert([
				'county_name' => 'Padergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//145
			//ludinghausen, asbeck, coesfeld, darfeld, appelhulsen
            DB::table('counties')->insert([
				'county_name' => 'Stevergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//146
			//hamburg, ahrensburg
            DB::table('counties')->insert([
				'county_name' => 'Stormarngau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//147
			//verden, rotenburg
            DB::table('counties')->insert([
				'county_name' => 'Sturmigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);						
			//148
			//munster, warendorf, gelsenkirchen,asbeck
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//149
			//ravensberg, sparrenberg, limberg, herford
            DB::table('counties')->insert([
				'county_name' => 'Werregau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//150
			//hagen, attendorn, dortmund, hamm, essen, werden
            DB::table('counties')->insert([
				'county_name' => 'Westfaliagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);						
			//Cologne
			//151
			//cologne, friesheim, rondorf, palmersdorf, junkersdorf, burbach, pesch
            DB::table('counties')->insert([
				'county_name' => 'Gillgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//152
			//siegburg, rennenburg, blankenberg
            DB::table('counties')->insert([
				'county_name' => 'Auelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//153
			//bonn, remagen
            DB::table('counties')->insert([
				'county_name' => 'Bonngau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//154
			//deutz, altenberg 
            DB::table('counties')->insert([
				'county_name' => 'Deutzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Magdeburg
			//155
			//magdeburg, haldesleben, oschersleben, unseburg, calbe
            DB::table('counties')->insert([
				'county_name' => 'Nordthuringgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//156
			//stendal, osterburg
            DB::table('counties')->insert([
				'county_name' => 'Balsamgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//157
			//erdeborn, alberstedt
            DB::table('counties')->insert([
				'county_name' => 'Friesenfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//158
			//halberstadt, quedlinburg, gernrode
            DB::table('counties')->insert([
				'county_name' => 'Hartingau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//159
			//merseburg, halle, wettin
            DB::table('counties')->insert([
				'county_name' => 'Hassegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//160
			//seehausen, salzwedel
            DB::table('counties')->insert([
				'county_name' => 'Osterwalde',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//161
			//bernburg, nienburg, ascherleben, hadmersleben, ballenstedt
            DB::table('counties')->insert([
				'county_name' => 'Schwabengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Mainz
			//162
			//mainz, worms, oppenheim, lorsch, eibingen
            DB::table('counties')->insert([
				'county_name' => 'Wormsfeld',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//163
			//hammerstein, logenstein
            DB::table('counties')->insert([
				'county_name' => 'Engersgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//164
			//kassel, staufenberg, hersfeld, fritzlar, friedelshausen
            DB::table('counties')->insert([
				'county_name' => 'Hessengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Boar',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//165
			//limburg, marburg, weilburg, wetzlar
            DB::table('counties')->insert([
				'county_name' => 'Lahngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//166
			//mannheim, heidelberg
            DB::table('counties')->insert([
				'county_name' => 'Lobdengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//167
			//aschaffenburg, seligenstadt
            DB::table('counties')->insert([
				'county_name' => 'Maingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//168
			//ingelheim, spiesheim, saulheim, flonheim
            DB::table('counties')->insert([
				'county_name' => 'Nahegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//169
			//nidda, warnsberg
            DB::table('counties')->insert([
				'county_name' => 'Niddagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//170
			//speyer, dudenhofen, wissembourg, klingenmunster
            DB::table('counties')->insert([
				'county_name' => 'Speyergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//171
			//sankt leon, bretzenheim
            DB::table('counties')->insert([
				'county_name' => 'Ufgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//172
			//frankfurt, homburg, kransberg, falkenstein
            DB::table('counties')->insert([
				'county_name' => 'Wettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//173
			//pforzheim, liebeneck
            DB::table('counties')->insert([
				'county_name' => 'Wurmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Salzburg
			//174
			//salzburg, berchtesgaden
            DB::table('counties')->insert([
				'county_name' => 'Salzburggau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'				
            ]);
			//175
			//falkenstein, traunstein, baumburg, rosenheim, chiemsee
            DB::table('counties')->insert([
				'county_name' => 'Chiemgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//176
			//tamswick, sankt michael
            DB::table('counties')->insert([
				'county_name' => 'Lungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//177
			//zell, saalfelden
            DB::table('counties')->insert([
				'county_name' => 'Pinzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//178
			//tegernsee, ebertshausen, munich, staffelsee
            DB::table('counties')->insert([
				'county_name' => 'Sundergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Trier
			//179
			//bitburg, trier, prum, gerolstein, echternach, vianden
            DB::table('counties')->insert([
				'county_name' => 'Bitgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//180
			//eltz, andernach, salm
            DB::table('counties')->insert([
				'county_name' => 'Maifeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//181
			//ravengiersburg, ehrenburg
            DB::table('counties')->insert([
				'county_name' => 'Hunsruckgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//182
			//treis, koblenz
            DB::table('counties')->insert([
				'county_name' => 'Trechirgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Lombardy
			//Milano
			//183
			//milano, monza, lecco, garegnano, morimondo, piona, como, torba, san giuliano
            DB::table('counties')->insert([
				'county_name' => 'Milano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//184
			//bergamo, san pietro, stezzano, treviolo, mozzo, astino
            DB::table('counties')->insert([
				'county_name' => 'Bergamo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//185
			//brescia, rovato, polpenazze, bedizzole, san giorgo
            DB::table('counties')->insert([
				'county_name' => 'Brescia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//186
			//crema, vaiano, bagnolo, trescore
            DB::table('counties')->insert([
				'county_name' => 'Crema',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//187
			//cremona, caorso
            DB::table('counties')->insert([
				'county_name' => 'Cremona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//188
			//pavullo, monterastello, montecuccolo
            DB::table('counties')->insert([
				'county_name' => 'Frignana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//189
			//lodi, cerreto
            DB::table('counties')->insert([
				'county_name' => 'Lodi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//190
			//mantua, polirone, levata, pietola, cavriana, gonzaga
            DB::table('counties')->insert([
				'county_name' => 'Mantua',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//191
			//modena, mirandola, vignola, nonantola
            DB::table('counties')->insert([
				'county_name' => 'Modena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//192
			//novara, chiavenna
            DB::table('counties')->insert([
				'county_name' => 'Novara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//193
			//parma, fidenza, colorno, sanguigna, san vitale, castrignano, bardi
            DB::table('counties')->insert([
				'county_name' => 'Parma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//194
			//pavia, certosa, san martino, carpignano
            DB::table('counties')->insert([
				'county_name' => 'Pavia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//195
			//piacenza, grazzano, bobbio
            DB::table('counties')->insert([
				'county_name' => 'Piacenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//196
			//reggio, bagnolo, fogliano, canossa
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//197
			//tortona, montegioco, garbagna
            DB::table('counties')->insert([
				'county_name' => 'Tortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//198
			//vernio, montepiano
            DB::table('counties')->insert([
				'county_name' => 'Vernio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Piedmont
			//199
			//alba, monforte, diano
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//200
			//asti, burio, loreto
            DB::table('counties')->insert([
				'county_name' => 'Asti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//201
			//valloriate, san dalmazzo
            DB::table('counties')->insert([
				'county_name' => 'Auriate',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//202
			//canavese, ivrea
            DB::table('counties')->insert([
				'county_name' => 'Canavese',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//203
			//casale, san giorgo, san nazzaro
            DB::table('counties')->insert([
				'county_name' => 'Casale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//204
			//cuneo, saluzzo, castellaro, staffarda
            DB::table('counties')->insert([
				'county_name' => 'Cuneo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//205
			//alessandria, acqui
            DB::table('counties')->insert([
				'county_name' => 'Montferrat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//206
			//pragelato, pinerolo, exilles
            DB::table('counties')->insert([
				'county_name' => 'Pragelato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//207
			//susa, novalesa
            DB::table('counties')->insert([
				'county_name' => 'Susa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//208
			//turino, moncalieri, chieri, rivoli
            DB::table('counties')->insert([
				'county_name' => 'Turino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//209
			//vercelli, salasco, quinto
            DB::table('counties')->insert([
				'county_name' => 'Vercelli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//210
			//vigevano, lomello, robbio
            DB::table('counties')->insert([
				'county_name' => 'Vigevano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Tuscany
			//211
			//siena, monteriggioni, san galgano, san gimignano, corsignano, monte oliveto, gaiole, castellina
            DB::table('counties')->insert([
				'county_name' => 'Siena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//212
			//grosseto, orbetello, manciano
            DB::table('counties')->insert([
				'county_name' => 'Grosseto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//213
			//piombino, massa, bracciano
            DB::table('counties')->insert([
				'county_name' => 'Piombino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//214
			//sovana, sorano, pitigliano, fregiano
            DB::table('counties')->insert([
				'county_name' => 'Sovana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Verona
			//215
			//verona, bovolone, bonavigo, bussolengo, legnago, san bonifacio, san martino
            DB::table('counties')->insert([
				'county_name' => 'Verona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//216
			//padova, masera, vigonza, praglia, este, monselice, solesino
            DB::table('counties')->insert([
				'county_name' => 'Padova',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//217
			//rovigo, vangadizza, adria, loreo, lendinara
            DB::table('counties')->insert([
				'county_name' => 'Rovigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//218
			//vicenza, montecchio, bassano, valdagno
            DB::table('counties')->insert([
				'county_name' => 'Vicenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//219
			//trent, appenzell, rofreit
            DB::table('counties')->insert([
				'county_name' => 'Trent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//Aquileia
			//220
			//aquileia, udine, tarcento, monfalcone
            DB::table('counties')->insert([
				'county_name' => 'Friuli',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//221
			//gorizia, gradisca
            DB::table('counties')->insert([
				'county_name' => 'Gorizia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//222
			//pordenone, san vito, aviano, polcenigo
            DB::table('counties')->insert([
				'county_name' => 'Pordenone',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Florence
			//223
			//florence, bagno, san gimigano
            DB::table('counties')->insert([
				'county_name' => 'Florence',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//224
			//arezzo, montevarchi, focognano, san nicolo
            DB::table('counties')->insert([
				'county_name' => 'Arezzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//225
			//cortona, castello
            DB::table('counties')->insert([
				'county_name' => 'Cortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//226
			//perugia, assisi, foligno, gubbio
            DB::table('counties')->insert([
				'county_name' => 'Perugia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//227
			//prato, filettole, montemurlo
            DB::table('counties')->insert([
				'county_name' => 'Prato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//Genoa
			//228
			//genoa, arenzano, mignanego, chiavari
            DB::table('counties')->insert([
				'county_name' => 'Genoa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//229
			//luni, pontremoli, bagnone, porto venere
            DB::table('counties')->insert([
				'county_name' => 'Lunigiana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//230
			//massa, carrara
            DB::table('counties')->insert([
				'county_name' => 'Massa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Noli
			//231
			//noli, savona, vado, albissola
            DB::table('counties')->insert([
				'county_name' => 'Noli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//232
			//albenga, san fedele, lusignano
            DB::table('counties')->insert([
				'county_name' => 'Albenga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//233
			//finale, verezzi
            DB::table('counties')->insert([
				'county_name' => 'Finale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Oneglia
			//234
			//oneglia, loano
            DB::table('counties')->insert([
				'county_name' => 'Oneglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//235
			//monaco, menton, roquebrune
            DB::table('counties')->insert([
				'county_name' => 'Monaco',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//236
			//ventimiglia, dolceaqua
            DB::table('counties')->insert([
				'county_name' => 'Ventimiglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Lucca
			//237
			//lucca, barga
            DB::table('counties')->insert([
				'county_name' => 'Lucca',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '32',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//238
			//pistoia, pescia, agliana, uzzano
            DB::table('counties')->insert([
				'county_name' => 'Pistoia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '32',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Pisa
			//239
			//pisa, cascina, castelfranco, san giuliano, pontedera, vecchiano 
            DB::table('counties')->insert([
				'county_name' => 'Pisa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//240
			//corte, alando, aleria, ajaccio, morosaglia
            DB::table('counties')->insert([
				'county_name' => 'Corsica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//241
			//livorno, sassetta, san vincenzo 
            DB::table('counties')->insert([
				'county_name' => 'Livorno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Madder',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//242
			//riparbella, cecina, bibbona, castellina
            DB::table('counties')->insert([
				'county_name' => 'Riparbella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//243
			//volterra, chianni, monteverdi, saline
            DB::table('counties')->insert([
				'county_name' => 'Volterra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Venice
			//244
			//venice, chioggia, torcello, san donato, portogruaro, spinea, martellago, san ilario, mirano, salzano
            DB::table('counties')->insert([
				'county_name' => 'Dogado',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//245
			//belluno, feltre, sedico, alpago, san giustina
            DB::table('counties')->insert([
				'county_name' => 'Belluno',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//246
			//treviso, mogliano, conegliano, castelfranco, biancade, musestre, oderzo
            DB::table('counties')->insert([
				'county_name' => 'Treviso',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Bohemia
			//Bohemia
			//247
			//prague, kaurim, siebenlinden
            DB::table('counties')->insert([
				'county_name' => 'Prague',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//248
			//bechin, tabor
            DB::table('counties')->insert([
				'county_name' => 'Bechin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//249
			//bunzlau, reichenberg, waldstein, pernstein, pardubitz
            DB::table('counties')->insert([
				'county_name' => 'Bunzlau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//250
			//elbogen, karlsbad
            DB::table('counties')->insert([
				'county_name' => 'Elbogen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//251
			//glatz, wunschelburg, kunzendorf
            DB::table('counties')->insert([
				'county_name' => 'Glatzerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//252
			//koniggratz, nachod, braunau, welisch, podiebrad, sadowa, lichtenburg
            DB::table('counties')->insert([
				'county_name' => 'Koniggratz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//253
			//leitmeritz, aussig
            DB::table('counties')->insert([
				'county_name' => 'Leitmeritz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//254
			//pilsen, kladrau, tepl, klattau, taus, tachau
            DB::table('counties')->insert([
				'county_name' => 'Pilsen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//255
			//rakonitz, purglitz
            DB::table('counties')->insert([
				'county_name' => 'Rakonitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//256
			//schlan, brandeis, kladen
            DB::table('counties')->insert([
				'county_name' => 'Schlan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//257
			//saaz, komotau, laun, plass
            DB::table('counties')->insert([
				'county_name' => 'Saaz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//258
			//tschaslau, kuttenberg, sedlec, kladrub
            DB::table('counties')->insert([
				'county_name' => 'Tschaslawsko',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Lusatia
			//259
			//meissen, seusslitz
            DB::table('counties')->insert([
				'county_name' => 'Meissengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//260
			//hoyerswerda, bautzen
            DB::table('counties')->insert([
				'county_name' => 'Milzenigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//261
			//dohna, dresden, briesnitz, leipzig
            DB::table('counties')->insert([
				'county_name' => 'Nisangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//262
			//spremberg, senftenberg, lebusa
            DB::table('counties')->insert([
				'county_name' => 'Lusizigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//263
			//lubben, lieberose
            DB::table('counties')->insert([
				'county_name' => 'Selpuligau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Moravia
			//264
			//brunn, pernstein, austerlitz, goding, lodenitz
            DB::table('counties')->insert([
				'county_name' => 'Brunn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//265
			//iglau, pilgrams
            DB::table('counties')->insert([
				'county_name' => 'Iglau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//266
			//olmutz, prossnitz, sternberg
            DB::table('counties')->insert([
				'county_name' => 'Olmutz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//267
			//prerau, weisskirchen, leipnik, kremsier
            DB::table('counties')->insert([
				'county_name' => 'Prerau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//268
			//velingrad, zlin
            DB::table('counties')->insert([
				'county_name' => 'Velingrad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//269
			//znaim, kralitz
            DB::table('counties')->insert([
				'county_name' => 'Znaim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',	
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Lower Silesia
			//270
			//jauer, grussau, bolkenhain
            DB::table('counties')->insert([
				'county_name' => 'Jauer',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//271
			//glogau, hermsdorf
            DB::table('counties')->insert([
				'county_name' => 'Glogau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//272
			//leubus, wolau
            DB::table('counties')->insert([
				'county_name' => 'Leubus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//273
			//liegnitz, hoyn, parchwitz, arnsdorf
            DB::table('counties')->insert([
				'county_name' => 'Liegnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//274
			//oels, wartenberg, ferstenberg, bernstadt
            DB::table('counties')->insert([
				'county_name' => 'Oels',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//275
			//schweidnitz, striegau, schmiedeberg, hirschberg 
            DB::table('counties')->insert([
				'county_name' => 'Schweidnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Upper Silesia
			//276
			//oppeln, krappitz
            DB::table('counties')->insert([
				'county_name' => 'Oppeln',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//277
			//breslau, waldenburg 
            DB::table('counties')->insert([
				'county_name' => 'Breslau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//278
			//brieg, grottkau, lowen
            DB::table('counties')->insert([
				'county_name' => 'Brieg',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Windmilll',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//279
			//ratibor, pless, beuthen
            DB::table('counties')->insert([
				'county_name' => 'Ratibor',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//280
			//teschen, golleschau, ustron
            DB::table('counties')->insert([
				'county_name' => 'Teschen',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//281
			//troppau, lischwitz, jagerndorf
            DB::table('counties')->insert([
				'county_name' => 'Troppau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',	
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Burgundy
			//Burgundy
			//282
			//vezelay, bazoches
            DB::table('counties')->insert([
				'county_name' => 'Avalois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//283
			//autun, saint loup, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Autunais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//284
			//auxerre, saint maurice
            DB::table('counties')->insert([
				'county_name' => 'Auxerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//285
			//saint reine, chatellenot, chateauneuf, commarin
            DB::table('counties')->insert([
				'county_name' => 'Auxois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//286
			//beaujeu, quincie, saint nizier
            DB::table('counties')->insert([
				'county_name' => 'Beaujolais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//287
			//citeaux, savigny
            DB::table('counties')->insert([
				'county_name' => 'Beaunois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//288
			//chalon, saint germain
            DB::table('counties')->insert([
				'county_name' => 'Chalonais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//289
			//chatillon, molesme, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Lassois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//290
			//macon, cluny, charolles, clayette, semur
            DB::table('counties')->insert([
				'county_name' => 'Maconnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//291
			//nevers, marais
            DB::table('counties')->insert([
				'county_name' => 'Nivernais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//292
			//tonerre, quincy
            DB::table('counties')->insert([
				'county_name' => 'Tonerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);		
			//Cisjurania
			//293
			//grenoble, voiron, chartreuse
            DB::table('counties')->insert([
				'county_name' => 'Dauphine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//294
			//albon, mantaille
            DB::table('counties')->insert([
				'county_name' => 'Albon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//295
			//billieme, saint ouen
            DB::table('counties')->insert([
				'county_name' => 'Belinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//296
			//embrun, risoul
            DB::table('counties')->insert([
				'county_name' => 'Embrunnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//297
			//forcalquier, gap, apt, sisteron
            DB::table('counties')->insert([
				'county_name' => 'Forcalquier',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//298
			//lyon, irigny, seyssuel, givors, savigny
            DB::table('counties')->insert([
				'county_name' => 'Lyonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//299
			//briancon, clavieres
            DB::table('counties')->insert([
				'county_name' => 'Mauronais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//300
			//valence, montelier, saint marcel, montmeyran
            DB::table('counties')->insert([
				'county_name' => 'Valentinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//301
			//vienne, chonas, ampuis
            DB::table('counties')->insert([
				'county_name' => 'Viennois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Transjurania
			//302
			//besancon, dole
            DB::table('counties')->insert([
				'county_name' => 'Amosenais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//303
			//habsburg, aarau, bern, lucerne, muri
            DB::table('counties')->insert([
				'county_name' => 'Aargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',	
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//304
			//solothurn, saint denis
            DB::table('counties')->insert([
				'county_name' => 'Bargenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//305
			//lausanne, orbe, payerne, avenches
            DB::table('counties')->insert([
				'county_name' => 'Lausonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//306
			//vesoul, luxieul
            DB::table('counties')->insert([
				'county_name' => 'Portenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//307
			//neuchatel, yverdon
            DB::table('counties')->insert([
				'county_name' => 'Vaudenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//Orange
			//308
			//orange, caderousse, puegoulen 
            DB::table('counties')->insert([
				'county_name' => 'Orange',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//309
			//venasque, avignon, carpentras, cavaillon, sorgue, saint remy
            DB::table('counties')->insert([
				'county_name' => 'Venaissin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//310
			//viviers, saint andeol, saint martin, saint just, nyons, montelimar, vaison
            DB::table('counties')->insert([
				'county_name' => 'Vivarais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Provence
			//311
			//aix, salon
            DB::table('counties')->insert([
				'county_name' => 'Provence',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//312
			//arles, montmajour, tarascon
            DB::table('counties')->insert([
				'county_name' => 'Arles',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//313
			//baux, mouries, riez, senez, digne
            DB::table('counties')->insert([
				'county_name' => 'Baux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//314
			//marseille, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Marseille',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//315
			//nice, villefranche, escarene, guillaumes, saint etienne, vence, glandeves, grasse, frejus
            DB::table('counties')->insert([
				'county_name' => 'Nice',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//316
			//toulon, ollioules, ollieres
            DB::table('counties')->insert([
				'county_name' => 'Toulon',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Savoy
			//317
			//chambery, aix le bains
            DB::table('counties')->insert([
				'county_name' => 'Savoia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//318
			//aosta, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Aosta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//319
			//thonon, bons
            DB::table('counties')->insert([
				'county_name' => 'Chablais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//320
			//geneva, annecy
            DB::table('counties')->insert([
				'county_name' => 'Genevanais',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//321
			//moutiers, montagny
            DB::table('counties')->insert([
				'county_name' => 'Tarantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//322
			//sion, martigny, raron
            DB::table('counties')->insert([
				'county_name' => 'Valais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Papal States
			//Rome
			//323
			//rome, nettuno, tivoli, civitavecchia, velletri, montecelio, subiaco
            DB::table('counties')->insert([
				'county_name' => 'Rome',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//324
			//frosinone, cassino, alatri, sora, ceccano, anagni, ferentino, veroli
            DB::table('counties')->insert([
				'county_name' => 'Frosinone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//325
			//terracina, fondi, castellone, gaeta
            DB::table('counties')->insert([
				'county_name' => 'Latina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//326
			//rieti, farfa, corvaro
            DB::table('counties')->insert([
				'county_name' => 'Rieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//327
			//viterbo, castellana, toscanella, corneto, vetralla
            DB::table('counties')->insert([
				'county_name' => 'Viterbo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//Romagna
			//328
			//ferrara, cento, comacchio, argenta, copparo
            DB::table('counties')->insert([
				'county_name' => 'Ferrara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Boar',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//329
			//bologna, forli, faenza, imola, molinella, san pietro, san giovanni, monterenzio
            DB::table('counties')->insert([
				'county_name' => 'Bologna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//330
			//carpegna, rimini, verucchio, coriano
            DB::table('counties')->insert([
				'county_name' => 'Carpegna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//331
			//ravenna, lugo, cervia, bagnacavallo, massa, conselice
            DB::table('counties')->insert([
				'county_name' => 'Ravenna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Spoleto
			//332
			//ancona, senigallia
            DB::table('counties')->insert([
				'county_name' => 'Ancona',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//333
			//chieti, ortona, vasto, lanciano, san vito, san giovanni
            DB::table('counties')->insert([
				'county_name' => 'Chieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//334
			//fermo, camerino, macerata
            DB::table('counties')->insert([
				'county_name' => 'Fermo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//335
			//pescara, montesilvano, san angelo
            DB::table('counties')->insert([
				'county_name' => 'Pescara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//336
			//spoleto, aquila
            DB::table('counties')->insert([
				'county_name' => 'Spoleto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Urbino
			//337
			//urbino, montebello, cavallino, fermignano
            DB::table('counties')->insert([
				'county_name' => 'Urbino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '49',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//338
			//pesaro, fano, mondolfo
            DB::table('counties')->insert([
				'county_name' => 'Pesaro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '49',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',	
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Teutonic Order State
			//Livonia
			//339
			//riga, lennewarden, kirchholm, dunamunde
            DB::table('counties')->insert([
				'county_name' => 'Livland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//340
			//ascheraden, kokenhusen
            DB::table('counties')->insert([
				'county_name' => 'Ascheraden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//341
			//dorpat, talkhof, wendau 
            DB::table('counties')->insert([
				'county_name' => 'Dorpat',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//342
			//dunaburg, selburg 
            DB::table('counties')->insert([
				'county_name' => 'Dunaburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//343
			//fellin, karkus
            DB::table('counties')->insert([
				'county_name' => 'Fellin',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//344
			//goldingen, talsen, frauenburg, sackenhausen, windau
            DB::table('counties')->insert([
				'county_name' => 'Kurland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//345
			//mitau, annenburg, autzenburg
            DB::table('counties')->insert([
				'county_name' => 'Mitau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//346
			//lemburg, jurgensburg 
            DB::table('counties')->insert([
				'county_name' => 'Segewold',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//347
			//wenden, wolmar, lemsal
            DB::table('counties')->insert([
				'county_name' => 'Wenden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//348
			//wolkenburg, rositten
            DB::table('counties')->insert([
				'county_name' => 'Wolkenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Estonia
			//349
			//reval, sankt matthias, weissenstein, wesenberg, narva
            DB::table('counties')->insert([
				'county_name' => 'Reval',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//350
			//pernau, hapsal, arensburg, soneburg
            DB::table('counties')->insert([
				'county_name' => 'Pernau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Prussia
			//351
			//marienburg, altfeld, klakendorf, klettendorf, marienwerder
            DB::table('counties')->insert([
				'county_name' => 'Pomesanengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//352
			//bartenstein, heilsberg, schippenbeil
            DB::table('counties')->insert([
				'county_name' => 'Bartengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//353
			//braunsberg, allenstein, bischofsburg, wartenburg
            DB::table('counties')->insert([
				'county_name' => 'Ermland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//354
			//memelburg, windenburg, rutzau
            DB::table('counties')->insert([
				'county_name' => 'Memelland',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//355
			//landeshut, schalauerburg
            DB::table('counties')->insert([
				'county_name' => 'Nadrauengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//356
			//brandenburg, tapiow, wehlau
            DB::table('counties')->insert([
				'county_name' => 'Natangergau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//357
			//elbing, tolkemitz, muhlhausen
            DB::table('counties')->insert([
				'county_name' => 'Pogesanengau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//358
			//koningsberg, insterburg, angerburg, gerdauen
            DB::table('counties')->insert([
				'county_name' => 'Samland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Pomerelia
			//359
			//danzig, prust, hohenstein, oliva
            DB::table('counties')->insert([
				'county_name' => 'Danzig',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//360
			//butow, rummelsburg, damerkow
            DB::table('counties')->insert([
				'county_name' => 'Butow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//361
			//dirschau, mewe, neuenburg
            DB::table('counties')->insert([
				'county_name' => 'Dirschau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//362
			//karthaus, zuckau, chmelno
            DB::table('counties')->insert([
				'county_name' => 'Karthaus',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//363
			//kulm, althaus, rehden, graudenz
            DB::table('counties')->insert([
				'county_name' => 'Kulmerland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//364
			//lauenburg, neuendorf, vietzig
            DB::table('counties')->insert([
				'county_name' => 'Lauenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//365
			//putzig, krockow, kossakowitz
            DB::table('counties')->insert([
				'county_name' => 'Putzig',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//366
			//baldenburg, schlochau
            DB::table('counties')->insert([
				'county_name' => 'Schlochau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//367
			//schwetz, bromberg
            DB::table('counties')->insert([
				'county_name' => 'Schwetz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//368
			//thorn, birgelau 
            DB::table('counties')->insert([
				'county_name' => 'Thorn',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//369
			//tuchel, seehaupten
            DB::table('counties')->insert([
				'county_name' => 'Tuchel',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Pomerania
			//370
			//kammin, gulzow, schwirsen, dievenow
            DB::table('counties')->insert([
				'county_name' => 'Kammin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//371
			//arnswalde, bernstein, kolbacz
            DB::table('counties')->insert([
				'county_name' => 'Arnswalde',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//372
			//gollnow, massow, stepenitz 
            DB::table('counties')->insert([
				'county_name' => 'Gollnow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//373
			//greifenhagen, barwalde 
            DB::table('counties')->insert([
				'county_name' => 'Greifenhagen',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//374
			//greifenberg, treptow 
            DB::table('counties')->insert([
				'county_name' => 'Greifenberg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//375
			//pyritz, warnitz, prillwitz
            DB::table('counties')->insert([
				'county_name' => 'Pyritz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//376
			//kessin, rostock, stralsund, greifswald, demmin, grimmen
            DB::table('counties')->insert([
				'county_name' => 'Kessinigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Ducks'
            ]);
			//377
			//kolberg, degow
            DB::table('counties')->insert([
				'county_name' => 'Kolberg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//378
			//koslin, zanow, bublitz, pollnow
            DB::table('counties')->insert([
				'county_name' => 'Koslin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//379
			//neustettin, baldenburg
            DB::table('counties')->insert([
				'county_name' => 'Neustettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//380
			//schivelbein, stolzenberg 
            DB::table('counties')->insert([
				'county_name' => 'Schivelbein',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//381
			//slupsk, kublitz, glowitz
            DB::table('counties')->insert([
				'county_name' => 'Slupsk',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//382
			//schlawe, rugenwalde, malchow
            DB::table('counties')->insert([
				'county_name' => 'Schlawe',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//383
			//stettin, prenzlow, pasewalk, kolbatz 
            DB::table('counties')->insert([
				'county_name' => 'Stettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Ducks'
            ]);
			//384
			//wolgast, neuenkirchen, buggenhagen, wollin
            DB::table('counties')->insert([
				'county_name' => 'Wostrosegau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Brandenburg
			//385
			//brandenburg, potsdam
            DB::table('counties')->insert([
				'county_name' => 'Havelland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//386
			//wusterhausen, wittstock
            DB::table('counties')->insert([
				'county_name' => 'Dossegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//387
			//perleberg, pritzwalk, wittenberg
            DB::table('counties')->insert([
				'county_name' => 'Linaggau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//388
			//havelberg, plattenburg
            DB::table('counties')->insert([
				'county_name' => 'Nelitzigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//389
			//berlin, spandau, kopenick, tempelhof, rosenfeld, helwichdorf, kaulsdorf, maltersdorf, biesdorf, morczahn
            DB::table('counties')->insert([
				'county_name' => 'Retschanengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//390
			//rowenburg, schenkenberg, uckerfeld, templin
            DB::table('counties')->insert([
				'county_name' => 'Uckermark',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Mecklenburg
			//391
			//teterow, malchin
            DB::table('counties')->insert([
				'county_name' => 'Circipanigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//392
			//mecklenburg, wismar
            DB::table('counties')->insert([
				'county_name' => 'Obotritegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//393
			//schwerin, ratzeburg
            DB::table('counties')->insert([
				'county_name' => 'Polabigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//394
			//lubeck, oldenburg, segeberg, preetz
            DB::table('counties')->insert([
				'county_name' => 'Wagrigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//France
			//France
			//Anjou
			//395
			//angers, saumur, fontevraud, bauge
            DB::table('counties')->insert([
				'county_name' => 'Anjou',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//396
			//mans, chalons, laval, evron, mayenne
            DB::table('counties')->insert([
				'county_name' => 'Maine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//397
			//mortagne, nogent
            DB::table('counties')->insert([
				'county_name' => 'Perche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//398
			//tours, cormery, gaillard, amboise, villandry, chatigny, saint martin, chinon
            DB::table('counties')->insert([
				'county_name' => 'Touraine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//399
			//vendome, freteval, lavardin, montoire
            DB::table('counties')->insert([
				'county_name' => 'Vendomois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Aquitaine
			//400
			//bordeaux, albret, fronsac
            DB::table('counties')->insert([
				'county_name' => 'Bordelais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//401
			//agen, moirax, lavardac
            DB::table('counties')->insert([
				'county_name' => 'Agenais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//402
			//angouleme, saint michel, chateauneuf
            DB::table('counties')->insert([
				'county_name' => 'Angoumois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//403
			//bazas, langon, marmande, roquetaillade, villandraut
            DB::table('counties')->insert([
				'county_name' => 'Bazadais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//404
			//limoges, ventadour, saint angel
            DB::table('counties')->insert([
				'county_name' => 'Limousin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//405
			//lectoure, beaumont
            DB::table('counties')->insert([
				'county_name' => 'Lomagne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//406
			//perigueux, bergerac
            DB::table('counties')->insert([
				'county_name' => 'Perigord',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//407
			//saintes, royan, saint jean, taillebourg
            DB::table('counties')->insert([
				'county_name' => 'Saintogne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Auvergne
			//408
			//randon, saint colombe, menat
            DB::table('counties')->insert([
				'county_name' => 'Auvergne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//409
			//aurillac, ytrac
            DB::table('counties')->insert([
				'county_name' => 'Aurillac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//410
			//brioude, saint ferreol, saint beauzire, chaise dieu, sauveterre
            DB::table('counties')->insert([
				'county_name' => 'Brioude',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//411
			//carlat, messilhac
            DB::table('counties')->insert([
				'county_name' => 'Carlat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//412
			//clermont, montpensier, thiers
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//413
			//feurs, montbrison, saint etienne, valbenoite
            DB::table('counties')->insert([
				'county_name' => 'Forez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//414
			//murat, mercoeur, saint flour
            DB::table('counties')->insert([
				'county_name' => 'Murat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Berry
			//415
			//bourges, meillant, massay
            DB::table('counties')->insert([
				'county_name' => 'Berry',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//416
			//sancerre, saint satur, saint gemme, launay, crezancy, reugny, champtin, vauvredon
            DB::table('counties')->insert([
				'county_name' => 'Sancerre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Bourbonnais
			//417
			//bourbon, sauvigny, moulins
            DB::table('counties')->insert([
				'county_name' => 'Bourbonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//418
			//montlucon, ainay, nassigny, herisson, evaux
            DB::table('counties')->insert([
				'county_name' => 'Montlucon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);		
			//Gascony
			//419
			//eauze, manciet, nogaro
            DB::table('counties')->insert([
				'county_name' => 'Armagnac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//420
			//mirande, masseube, auch
            DB::table('counties')->insert([
				'county_name' => 'Astarac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//421
			//pau, oloron, maure
            DB::table('counties')->insert([
				'county_name' => 'Bearn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//422
			//escaladieu, tarbes, maubourguet
            DB::table('counties')->insert([
				'county_name' => 'Bigorre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//423
			//saint bertrand, saint gaudens, muret, luchon
            DB::table('counties')->insert([
				'county_name' => 'Comminges',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//424
			//saint lizier, saint girons
            DB::table('counties')->insert([
				'county_name' => 'Couserans',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//425
			//dax, bayonne, tartas
            DB::table('counties')->insert([
				'county_name' => 'Dax',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//426
			//bouillas, fluerance, vic
            DB::table('counties')->insert([
				'county_name' => 'Fezensac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//427
			//montmarsan, roquefort 
            DB::table('counties')->insert([
				'county_name' => 'Marsan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//428
			//aire, geaune
            DB::table('counties')->insert([
				'county_name' => 'Tursan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Champagne
			//429
			//reims, bazancourt, roucy, thony, fismes, verzy, epernay
            DB::table('counties')->insert([
				'county_name' => 'Remois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//430
			//brienne, lesmont, precy, blaincourt, vaubercey, dienville
            DB::table('counties')->insert([
				'county_name' => 'Brenois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//431
			//chalons, nettancourt, trois fontaines, vitry
            DB::table('counties')->insert([
				'county_name' => 'Chalonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//432
			//duesme, oigny, bussy, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Duesmois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//433
			//langres, dijon
            DB::table('counties')->insert([
				'county_name' => 'Langres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//434
			//meaux, thierry, coulommiers, crecy, crouy
            DB::table('counties')->insert([
				'county_name' => 'Meaux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//435
			//perthes, larzicourt, saint dizier
            DB::table('counties')->insert([
				'county_name' => 'Perthois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//436
			//provins, cigy, chenoise, cerneux
            DB::table('counties')->insert([
				'county_name' => 'Provins',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//437
			//rethel, attigny, porcien
            DB::table('counties')->insert([
				'county_name' => 'Rethelois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//438
			//sens, joigny, montigny, brienon, mussy, marcilly, paraclete
            DB::table('counties')->insert([
				'county_name' => 'Senois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//439
			//troyes, clairvaux
            DB::table('counties')->insert([
				'county_name' => 'Troyes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Francia
			//440
			//paris, saint denis, ecouen
            DB::table('counties')->insert([
				'county_name' => 'Pay de France',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//441
			//beauvais, goincourt, gerberoy
            DB::table('counties')->insert([
				'county_name' => 'Beauvaisis',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//442
			//beaumont, jouy, argenteuil
            DB::table('counties')->insert([
				'county_name' => 'Beaumont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//443
			//brie, melun, saint fargeau, lagny, yerres, brunoy, grosbois
            DB::table('counties')->insert([
				'county_name' => 'Brie',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//444
			//clermont, angicourt, liancourt
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//445
			//ferrieres, landon, fontainebleau, ganne
            DB::table('counties')->insert([
				'county_name' => 'Gatinais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//446
			//chatres, corbeil, clamart, dourdan, montlhery, palaiseau, montagu
            DB::table('counties')->insert([
				'county_name' => 'Hurepoix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//447
			//mantes, rambouillet, beynes, houdan, gassicourt
            DB::table('counties')->insert([
				'county_name' => 'Mantois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//448
			//senlis, compiegne
            DB::table('counties')->insert([
				'county_name' => 'Senlis',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//449
			//soissons, oulchy
            DB::table('counties')->insert([
				'county_name' => 'Soissonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//450
			//vez, oigny, laneuf, saint mard
            DB::table('counties')->insert([
				'county_name' => 'Valois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//451
			//saint clair, pontoise
            DB::table('counties')->insert([
				'county_name' => 'Vexin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Normandy
			//452
			//rouen, harcourt, jumieges, heurteauville, saint saens, meslay, saint martin, saint philbert, brionne
            DB::table('counties')->insert([
				'county_name' => 'Roumois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Ducks'
            ]);	
			//453
			//alencon, argentan, sees
            DB::table('counties')->insert([
				'county_name' => 'Alencon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//454
			//avranches, lucerne, subligny
            DB::table('counties')->insert([
				'county_name' => 'Avranches',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//455
			//bayeux, caen, audrieu, mondaye, beaumont, coupesarte, creully
            DB::table('counties')->insert([
				'county_name' => 'Bayeux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//456
			//fecamp, graville, tancarville, saint wandrille
            DB::table('counties')->insert([
				'county_name' => 'Caux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//457
			//coutances, cherbourg, hauteville, valognes, saint lo, lessay, vire, chanteloup, gratot, pirou, bricquebec, saint sauveur
            DB::table('counties')->insert([
				'county_name' => 'Coutances',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//458
			//evreux, verneuil, gaillard, gisors, vernon, acquigny, brecourt
            DB::table('counties')->insert([
				'county_name' => 'Evreux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//459
			//eu, dieppe, aumale, arques
            DB::table('counties')->insert([
				'county_name' => 'Eu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);		
			//460
			//lisieux, falaise, honfleur, saint michel, courcy, crevecoeur, blangy
            DB::table('counties')->insert([
				'county_name' => 'Lisieux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//461
			//mortain, domfront
            DB::table('counties')->insert([
				'county_name' => 'Mortainais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Orleanais
			//462
			//orleans, fleury, meung, combreux
            DB::table('counties')->insert([
				'county_name' => 'Orleanais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//463
			//blois, chambord, chaumont, bievre, pontlevoy
            DB::table('counties')->insert([
				'county_name' => 'Blaisois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//464
			//chartres, leveville, bretigny, saint pere, sours, ouarville
            DB::table('counties')->insert([
				'county_name' => 'Chartres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//465
			//chateaudun, courtalain
            DB::table('counties')->insert([
				'county_name' => 'Dunois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//466
			//dreux, marsalin, nonancourt
            DB::table('counties')->insert([
				'county_name' => 'Dreux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//467
			//etampes, chalo, mereville
            DB::table('counties')->insert([
				'county_name' => 'Etampois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//468
			//nemours, montargis, moncourt
            DB::table('counties')->insert([
				'county_name' => 'Nemours',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Picardy
			//469
			//arras, saint omer, bethune, lens, buissiere, cauchy
            DB::table('counties')->insert([
				'county_name' => 'Artois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//470
			//amiens, flixecourt, picquigny, corbie, bretonneux, boves, mericourt
            DB::table('counties')->insert([
				'county_name' => 'Amienois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//471
			//boulogne, etaples
            DB::table('counties')->insert([
				'county_name' => 'Boulenois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//472
			//bruges, ypres, lille, douai, veurne, poperinge, dunkirk, gravelines, bergues
            DB::table('counties')->insert([
				'county_name' => 'Flanders',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',	
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//473
			//guines, calais, piehem
            DB::table('counties')->insert([
				'county_name' => 'Guines',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//474
			//laon, coucy, corbeny
            DB::table('counties')->insert([
				'county_name' => 'Laonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//475
			//montreuil, recques, agincourt
            DB::table('counties')->insert([
				'county_name' => 'Montreuil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//476
			//noyon, sempigny, morlincourt, varesnes, salency
            DB::table('counties')->insert([
				'county_name' => 'Noyonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//477
			//crecy, nouvion, saint ricquier, abbekerke
            DB::table('counties')->insert([
				'county_name' => 'Ponthieu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//478
			//therouanne, royon, saint pol
            DB::table('counties')->insert([
				'county_name' => 'Ternois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//479
			//tournai, mouscron, courtrai
            DB::table('counties')->insert([
				'county_name' => 'Tournais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//480
			//peronne, saint quentin, bohain, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Vermandois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Poitou
			//481
			//poitiers, parthenay, niort, saint junien, touffou, chauvigny, vouille, lusignan
            DB::table('counties')->insert([
				'county_name' => 'Poitou',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//482
			//chatelaillon, mauze, rochelle
            DB::table('counties')->insert([
				'county_name' => 'Aunis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//483
			//brioux, aubigne, melleran, melle
            DB::table('counties')->insert([
				'county_name' => 'Briancais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//484
			//chatellerault, clairvaux, usseau, saint michel, marigny
            DB::table('counties')->insert([
				'county_name' => 'Chatellerault',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//485
			//gueret, bellac, aubusson, grandmont, saint leger, marcheix, rancon
            DB::table('counties')->insert([
				'county_name' => 'Marche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//486
			//thouars, fontenay, montaigu, talmont
            DB::table('counties')->insert([
				'county_name' => 'Thouarsais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//487
			//turenne, brive, tulle, noailhac, collonges, charroux, savigne, sarlat, puytignon, castelnaud
            DB::table('counties')->insert([
				'county_name' => 'Turenne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Toulouse
			//488
			//toulouse, lavaur, castelginest, colomiers, montgiscard, brax
            DB::table('counties')->insert([
				'county_name' => 'Toulouse',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//489
			//albi, castelnau, saint jeury
            DB::table('counties')->insert([
				'county_name' => 'Albi',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//490
			//carcasonne, castelnaudary, mirepoix, puylaurens, camon
            DB::table('counties')->insert([
				'county_name' => 'Carcasonne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//491
			//foix, tarascon, montgrenier
            DB::table('counties')->insert([
				'county_name' => 'Foix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//492
			//javols, mende, langogne, prunieres, apcher
            DB::table('counties')->insert([
				'county_name' => 'Gevaudan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//493
			//melgueil, montpellier, maguelonne
            DB::table('counties')->insert([
				'county_name' => 'Melgueil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//494
			//millau, melac
            DB::table('counties')->insert([
				'county_name' => 'Millau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//495
			//narbonne, beziers, lodeve, agde
            DB::table('counties')->insert([
				'county_name' => 'Narbonne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//496
			//nimes, uzes
            DB::table('counties')->insert([
				'county_name' => 'Nimes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//497
			//cahors, montauban, gourdon, figeac, aujols, arcambal, cabrerets, rudelle
            DB::table('counties')->insert([
				'county_name' => 'Quercy',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//498
			//rodez, villefranche, saint radegonde, belcastel, bertholene
            DB::table('counties')->insert([
				'county_name' => 'Rouergue',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',	
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//499
			//puy, montlaur
            DB::table('counties')->insert([
				'county_name' => 'Velay',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Brittany
			//Brittany
			//500
			//quimper, concarneau, locronan
            DB::table('counties')->insert([
				'county_name' => 'Cornouailles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//501
			//ach, saint mathieu, brest
            DB::table('counties')->insert([
				'county_name' => 'Ach',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//502
			//dol, tronchet, combourg, tremeheuc, saint marcan, boussac, saint malo
            DB::table('counties')->insert([
				'county_name' => 'Dol',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//503
			//saint pol, morlaix, lannion, kerouzere
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//504
			//rohan, carhaix, josselin, ponthivy
            DB::table('counties')->insert([
				'county_name' => 'Poher',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//505
			//vannes, ploermel
            DB::table('counties')->insert([
				'county_name' => 'Vannais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Domnonee
			//506
			//saint brieuc, guingamp, chatelaudren, saint magliore
            DB::table('counties')->insert([
				'county_name' => 'Penthievre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//507
			//alet, chateauneuf, saint guinoux
            DB::table('counties')->insert([
				'county_name' => 'Alet',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//508
			//treguier, lezardrieux, plouguiel
            DB::table('counties')->insert([
				'county_name' => 'Tregor',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Retz
			//509
			//pornic, paimboeuf, machecoul, bourgneuf
            DB::table('counties')->insert([
				'county_name' => 'Retz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',						
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//510
			//nantes, guerande
            DB::table('counties')->insert([
				'county_name' => 'Nantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//511
			//rennes, fougeres
            DB::table('counties')->insert([
				'county_name' => 'Rennais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Boar',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Britain
			//Ireland
			//Connacht
			//512
			//galway, athenry, claregalway, feartagar, kiltartan, hackett, loughrea, tuam, clonfert, dunmore
            DB::table('counties')->insert([
				'county_name' => 'Galway',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//513
			//mayo, ballintubber, burriscarra, cong, errew, castlebar, kilcommon, kilkelly, urlaur, claremorris, ashford, killala
            DB::table('counties')->insert([
				'county_name' => 'Mayo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//514
			//roscommon, boyle, donamon, elphin, clonmacnoise
            DB::table('counties')->insert([
				'county_name' => 'Roscommon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//515
			//sligo, ballymote, markree, templehouse, achonry
            DB::table('counties')->insert([
				'county_name' => 'Sligo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Leinster
			//516
			//carlow, ballyloughan, ballymoon, leighlin, leighlinbridge, killerig
            DB::table('counties')->insert([
				'county_name' => 'Carlow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//517
			//kildare, athy, castledermot, moone, barberstown, kilkea, kilteel, maynooth, reeves, rheban, norragh
            DB::table('counties')->insert([
				'county_name' => 'Kildare',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//518
			//kilkenny, kells, graignamanagh, ennisnagh, fertagh, freshford, ullard, gowran, robhar, cuffesgrange, woolengrange
            DB::table('counties')->insert([
				'county_name' => 'Kilkenny',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//519
			//fortleix, cullahill, lea, killeshin, oughaval, grangebeg
            DB::table('counties')->insert([
				'county_name' => 'Leix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//520
			//clonmel, athassel, nenagh, ardfinnan, loughmoe, cashel
            DB::table('counties')->insert([
				'county_name' => 'Tipperary',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//521
			//waterford, lismore, crooke, dungarvan, ardmore, mothel, rincrew
            DB::table('counties')->insert([
				'county_name' => 'Waterford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//522
			//wexford, carnsore, dunbrody, ferns, selskar, tintern
            DB::table('counties')->insert([
				'county_name' => 'Wexford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//523
			//wicklow, kindlestown, baltinglass, glendalough
            DB::table('counties')->insert([
				'county_name' => 'Wicklow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Meath
			//524
			//dublin, clontarf, kinsealy, lusk, castleknock, baldoyle
            DB::table('counties')->insert([
				'county_name' => 'Dublin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//525
			//longford, ardagh, granard, moydow, rathcline, abbeyshrule
            DB::table('counties')->insert([
				'county_name' => 'Longford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//526
			//tara, trim, navan, athlone, skryne, dunshaughlin, kells, clonard, bective, fore, taghmon
            DB::table('counties')->insert([
				'county_name' => 'Meath',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//527
			//tullamore, blundell, leap, clonmacnoise, gallen, roscrea
            DB::table('counties')->insert([
				'county_name' => 'Offaly',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Munster
			//528
			//ennis, bunratty, kilmihil, kilalloe, corcomroe
            DB::table('counties')->insert([
				'county_name' => 'Clare',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//529
			//cork, bantry, fermoy, castlelyons, mourneabbey, blarney, widenham, cloyne, buttevant
            DB::table('counties')->insert([
				'county_name' => 'Cork',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//530
			//castlegregory, dingle, dunkerron, abbeydorney, ardfert, killarney, aghadoe, innisfallen
            DB::table('counties')->insert([
				'county_name' => 'Kerry',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//531
			//limerick, adare, monasteranenaugh, mungret, askeaton, croom
            DB::table('counties')->insert([
				'county_name' => 'Limerick',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Ulster
			//532
			//antrim, carra, carrickfergus, dunluce, dunseverick, dromore
            DB::table('counties')->insert([
				'county_name' => 'Antrim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//533
			//armagh, killeavy, fairview
            DB::table('counties')->insert([
				'county_name' => 'Armagh',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//534
			//cavan, cloughoughter, drumlane, kilmore
            DB::table('counties')->insert([
				'county_name' => 'Cavan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//535
			//derry, coleraine, dungiven, magoscain, maghera
            DB::table('counties')->insert([
				'county_name' => 'Derry',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//536
			//donegal, carrickabragy, northburgh, rahan, raphoe
            DB::table('counties')->insert([
				'county_name' => 'Donegal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//537
			//downpatrick, kilkeel, dundrum, clough, killyleagh, sketrick, ardglass, grey, inch
            DB::table('counties')->insert([
				'county_name' => 'Down',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//538
			//enniskillen, lisgoole, rossory
            DB::table('counties')->insert([
				'county_name' => 'Fermanagh',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//539
			//leitrim, carrick, mohill, fenagh
            DB::table('counties')->insert([
				'county_name' => 'Leitrim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//540
			//louth, dundalk, drogheda, carlingford, monasterboice, mellifont
            DB::table('counties')->insert([
				'county_name' => 'Louth',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//541
			//monaghan, inniskeen, tehellan
            DB::table('counties')->insert([
				'county_name' => 'Monaghan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//542
			//omagh, dungannon, ardboe, carrickmore, clogher, donaghey
            DB::table('counties')->insert([
				'county_name' => 'Tyrone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//England
			//East Anglia
			//543
			//norwich, thetford, aylsham, burnham, yarmouth, lynn, walsingham, acle, rising, saint benet
            DB::table('counties')->insert([
				'county_name' => 'Norfolk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '78',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//544
			//ipswich, lowestoft, saint edmunds, dunwich, sudbury, bungay, clare
            DB::table('counties')->insert([
				'county_name' => 'Suffolk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '78',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',							
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Essex
			//545
			//colchester, chelmsford, hadleigh, hedingham, walden, beeleigh, coggeshall, waltham
            DB::table('counties')->insert([
				'county_name' => 'Essex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//546
			//hertford, berkhamsted, therfield, pirton, brickendon, saint albans, langley
            DB::table('counties')->insert([
				'county_name' => 'Hertfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//547
			//london, ruislip, kensington, finsbury, paddington, hampstead, hackney, stepney, westminster, clerkenwell, twickenham
            DB::table('counties')->insert([
				'county_name' => 'Middlesex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Hwicce
			//548
			//gloucester, deerhurst, flaxley, tewkesbury, wotton, cirencester, arlingham
            DB::table('counties')->insert([
				'county_name' => 'Gloucestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//549
			//warwick, alcester, merevale, astley, kenilworth, stoneleigh, coventry
            DB::table('counties')->insert([
				'county_name' => 'Warwickshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//550
			//winchcombe, sudeley, hailes
            DB::table('counties')->insert([
				'county_name' => 'Winchcombeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//551
			//worcester, bordesley, evesham, malvern, pershore
            DB::table('counties')->insert([
				'county_name' => 'Worcestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Kent
			//552
			//aylesford, ashford, rochester, maidstone, boxley, dartford, gravesend, orprington
            DB::table('counties')->insert([
				'county_name' => 'Aylesfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Ducks'
            ]);	
			//553
			//canterbury, chatham, sandwich, dover, leeds
            DB::table('counties')->insert([
				'county_name' => 'Kent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//554
			//hythe, saltwood, lympne, folkestone
            DB::table('counties')->insert([
				'county_name' => 'Shepwayshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Lindsey
			//555
			//derby, peveril, haddon, codnor, dale, darley
            DB::table('counties')->insert([
				'county_name' => 'Derbyshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//556
			//leicester, belvoir, croxton, owston, breedon
            DB::table('counties')->insert([
				'county_name' => 'Leicestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//557
			//lincoln, somerton, alvingham, bardney, boston, bourne, crowland, grimsby, kirkstead, stamford, tattershall, thornton
            DB::table('counties')->insert([
				'county_name' => 'Lincolnshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//558
			//nottingham, newark, rufford, sutton, mansfield, southwell
            DB::table('counties')->insert([
				'county_name' => 'Nothinghamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//559
			//oakham, uppingham, burley
            DB::table('counties')->insert([
				'county_name' => 'Rutland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Mercia
			//560
			//chester, saighton, aldford, beeston, halton, doddington, dodleston, frodsham, pulford, nantwich
            DB::table('counties')->insert([
				'county_name' => 'Cheshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//561
			//hereford, goodrich, dore, leominster, ledbury, wilton
            DB::table('counties')->insert([
				'county_name' => 'Herefordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//562
			//shrewsbury, stokesay, whittington, ludlow, bromfield, lilleshall
            DB::table('counties')->insert([
				'county_name' => 'Shropshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//563
			//stafford, lichfield, tamworth, croxden, chartley
            DB::table('counties')->insert([
				'county_name' => 'Staffordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Mid Anglia
			//564
			//bedford, elstow, flitwick, tilsworth
            DB::table('counties')->insert([
				'county_name' => 'Bedfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//565
			//buckingham, bradwell, cublington, aylesbury, notley
            DB::table('counties')->insert([
				'county_name' => 'Buckinghamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Ducks'
            ]);	
			//566
			//cambridge, ely, anglesey, chatteris, bodsey, soham, thorney, peterborough
            DB::table('counties')->insert([
				'county_name' => 'Cambridgeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//567
			//huntingdon, saint ives, saint neots, stilton, tetworth, ramsey
            DB::table('counties')->insert([
				'county_name' => 'Huntingdonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//568
			//northampton, brixworth, barnwell, rockingham, pipewell
            DB::table('counties')->insert([
				'county_name' => 'Northamptonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//569
			//oxford, wallingford, dorchester, eynsham, wroxton
            DB::table('counties')->insert([
				'county_name' => 'Oxfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//Northumbria
			//570
			//allerton, birkby, sigston
            DB::table('counties')->insert([
				'county_name' => 'Allertonshire',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//571
			//aldborough, ripley, whixley, wetherby, knaresborough
            DB::table('counties')->insert([
				'county_name' => 'Burghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//572
			//carlisle, appleby, saint bees, brougham, kendal, workington, furness
            DB::table('counties')->insert([
				'county_name' => 'Cumberland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//573
			//durham, darlington, barnard, bowes, jarrow
            DB::table('counties')->insert([
				'county_name' => 'Durham',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//574
			//sheffield, ecclesfield, bradfield, stannington
            DB::table('counties')->insert([
				'county_name' => 'Hallamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//575
			//hexham, whitley
            DB::table('counties')->insert([
				'county_name' => 'Hexhamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//576
			//howden, asselby
            DB::table('counties')->insert([
				'county_name' => 'Howdenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//577
			//alnwick, bamburgh, lindisfarne
            DB::table('counties')->insert([
				'county_name' => 'Northumberland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//578
			//lancaster, clitheroe, sawley, whalley
            DB::table('counties')->insert([
				'county_name' => 'Lancashire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//579
			//richmond, wensley, middleham
            DB::table('counties')->insert([
				'county_name' => 'Richmondshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//580
			//york, beverley, bridlington, bolton, coverham, fountains, cayton, ripon, selby, whitby, pontefract, helmsley, scarborough
            DB::table('counties')->insert([
				'county_name' => 'Yorkshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Sussex
			//581
			//arundel, lyminster, littlehampton
            DB::table('counties')->insert([
				'county_name' => 'Arundelshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//582
			//bramber, worthing, brighton
            DB::table('counties')->insert([
				'county_name' => 'Brambershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//583
			//chichester, bosham
            DB::table('counties')->insert([
				'county_name' => 'Chichestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//584
			//lewes, kingston
            DB::table('counties')->insert([
				'county_name' => 'Leweshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//585
			//pevensey, hailsham
            DB::table('counties')->insert([
				'county_name' => 'Pevenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//586
			//hastings, bexhill, battle
            DB::table('counties')->insert([
				'county_name' => 'Sussex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Wessex
			//587
			//reading, slough, windsor, abingdon
            DB::table('counties')->insert([
				'county_name' => 'Berkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//588
			//dorchester, abbotsbury, sherborne, wareham, wimborne, corfe, shaftesbury
            DB::table('counties')->insert([
				'county_name' => 'Dorsetshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//589
			//winchester, southampton
            DB::table('counties')->insert([
				'county_name' => 'Hampshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//590
			//somerton, sutton, taunton, bath, bruton, wells
            DB::table('counties')->insert([
				'county_name' => 'Somersetshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//591
			//guildford, woking, farnham, wallington, brixton, waverley
            DB::table('counties')->insert([
				'county_name' => 'Surrey',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Hops',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);		
			//592
			//wilton, trowbridge, amesbury, easton, malmesbury, salisbury, tisbury
            DB::table('counties')->insert([
				'county_name' => 'Wiltshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Wales
			//Cornwall
			//593
			//truro, restormel, bodmin, cardinham, launceston, saint german, tintagel, trematon
            DB::table('counties')->insert([
				'county_name' => 'Cornwall',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '88',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//594
			//exeter, gidleigh, lydford, okehampton, axminster, barnstaple, buckfast, buckland, chudleigh, newenham, plymouth, tavistock, totnes
            DB::table('counties')->insert([
				'county_name' => 'Devonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '88',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Falconry',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Dyfed
			//595
			//cardigan, aberystwyth, llanbadarn
            DB::table('counties')->insert([
				'county_name' => 'Cardiganshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//596
			//carmarthen, carreg, dinefwr, kidwelly, laugharne, llandovery, llansteffan, talley, whitland
            DB::table('counties')->insert([
				'county_name' => 'Carmarthenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//597
			//pembroke, carew, cilgerran, haverford, manorbier, tenby, saint dogmaels, templeton, saint davids
            DB::table('counties')->insert([
				'county_name' => 'Pembrokeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Gwent
			//598
			//candleston, coity, kenfig, newcastle, cardiff, neath, llantrisant, llandaff, ewenny, penrhys
            DB::table('counties')->insert([
				'county_name' => 'Glamorganshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '90',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//599
			//monmouth, abergavenny, raglan, caerphilly, morgraig, ruperra, caldicot, chepstow, dingestow, grosmont, llanfair, llangibby, skenfrith, trellech, caerleon, newport, pencoed, penhow
            DB::table('counties')->insert([
				'county_name' => 'Monmouthshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '90',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Gwyned
			//600
			//aberlleiniog, beaumaris, llanfaes, penmon
            DB::table('counties')->insert([
				'county_name' => 'Anglesey',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//601
			//caernarfon, conwy, deganwy, dolwyddelan, dolbadarn, harlech, maenan, bangor, cymer
            DB::table('counties')->insert([
				'county_name' => 'Caernarvonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//602
			//denbigh, rhuddlan, ruthin, saint asaph, wrexham
            DB::table('counties')->insert([
				'county_name' => 'Denbighshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//603
			//flint, caergwrle, ewloe, hawarden, mold, basingwerk, talacre
            DB::table('counties')->insert([
				'county_name' => 'Flintshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Powys
			//604
			//brecon, morlais, blaenllynfi, bronllys, crickhowell, tretower
            DB::table('counties')->insert([
				'county_name' => 'Brecknockshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//605
			//montgomery, powis, dolforwyn, llanlugan
            DB::table('counties')->insert([
				'county_name' => 'Montgomeryshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//606
			//aberedw, cefnllys, hay
            DB::table('counties')->insert([
				'county_name' => 'Radnorshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Scotland
			//Alba
			//607
			//aberdeen, balmoral, balquhain, cairnbulg, coull, dundarg, fyvie, inverallochy, inverugie, leslie, udny, deer, huntly
            DB::table('counties')->insert([
				'county_name' => 'Aberdeenshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',,						
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//608
			//banff, mortlach, doune, keith
            DB::table('counties')->insert([
				'county_name' => 'Banffshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//609
			//clackmannan, alloa
            DB::table('counties')->insert([
				'county_name' => 'Clackmannanshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//610
			//saint andrews, aberdour, ballinbreich, lochore, wemyss, balmerino, culross, dunfermline, inchcolm, lindores
            DB::table('counties')->insert([
				'county_name' => 'Fife',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//611
			//forfar, brechin, arbroath, montrose, dundee, angus
            DB::table('counties')->insert([
				'county_name' => 'Forfarshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//612
			//kincardine, banchory, stonehaven, dunnottar
            DB::table('counties')->insert([
				'county_name' => 'Kincardineshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//613
			//kinross, cleish, scotlandwell
            DB::table('counties')->insert([
				'county_name' => 'Kinrossshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//614
			//perth, dunkeld, elcho, inverquiech, kinclaven, clunie, abernethy, muthill, scone, ruthven, inchaffray
            DB::table('counties')->insert([
				'county_name' => 'Perthshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Bernicia
			//615
			//berwick, lauder, thirlestane, duns, coldstream
            DB::table('counties')->insert([
				'county_name' => 'Berwickshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//616
			//edinburgh, holyrood, roslyn, arniston, craigmillar, bathgate, strathbrock
            DB::table('counties')->insert([
				'county_name' => 'Edinburghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//617
			//haddington, dunbar, byres, dirleton, innerwick, markle, tantallon, waughton, yester
            DB::table('counties')->insert([
				'county_name' => 'Haddingtonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//618
			//linlithgow, livingston, abercorn, falkirk
            DB::table('counties')->insert([
				'county_name' => 'Linlithgowshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//619
			//stirling, dunblane, cambuskenneth, culcreuch, mugodock, bannockburn
            DB::table('counties')->insert([
				'county_name' => 'Stirlingshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Dalriada
			//620
			//lismore, coeffin, achanduin, saddell, dunadd, ardchattan, ardtonish
            DB::table('counties')->insert([
				'county_name' => 'Argyll',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//621
			//brodick, lamlash
            DB::table('counties')->insert([
				'county_name' => 'Bute',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//622
			//rushen, douglas, peel, ramsey, bemaken, ballaugh, marown, onchan
            DB::table('counties')->insert([
				'county_name' => 'Mann',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Fortriu
			//623
			//dingwall, fortrose, ross
            DB::table('counties')->insert([
				'county_name' => 'Cromartyshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//624
			//elgin, dallas, forres, kinloss, urquhart, duffus
            DB::table('counties')->insert([
				'county_name' => 'Elginshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//625
			//inverness, kilmallie, inverlochy, mingarry, applecross, beauly
            DB::table('counties')->insert([
				'county_name' => 'Invernessshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//626
			//nairn, rait, cawdor, eren
            DB::table('counties')->insert([
				'county_name' => 'Nairnshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//627
			//dornoch, durness, dunrobin, skelbo, skibo, berriedale, aberscross
            DB::table('counties')->insert([
				'county_name' => 'Sutherland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Galloway
			//628
			//kirkcudbright, annan, buittle, caerloverock, dundrennan
            DB::table('counties')->insert([
				'county_name' => 'Kirkcudbrightshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '97',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//629
			//wigtown, whithorn, cruggleton, fearn, glenluce
            DB::table('counties')->insert([
				'county_name' => 'Wigtownshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '97',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Gododdin
			//630
			//dumfries, auchen, closeburn, lochmaben, robgill, sanquhar, tibbers, dercongal, sweetheart
            DB::table('counties')->insert([
				'county_name' => 'Dumfriesshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//631
			//peebles, skirling, mossfennan, traquair
            DB::table('counties')->insert([
				'county_name' => 'Peeblesshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',	
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//632
			//roxburgh, jedburgh, kelso, dryburgh, melrose, hawick
            DB::table('counties')->insert([
				'county_name' => 'Roxburghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//633
			//selkirk, yarrow, galashiels
            DB::table('counties')->insert([
				'county_name' => 'Selkirkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);		
			//Strathclyde
			//634
			//ayr, largs, busbie, cessnock, crossraguel, barnweill, craigie, gadgirth, kilwinning
            DB::table('counties')->insert([
				'county_name' => 'Ayrshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//635
			//dunbarton, inchmurrin
            DB::table('counties')->insert([
				'county_name' => 'Dunbartonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Deer',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//636
			//lanark, glasgow, carstairs, kilbride, rutherglen, crookston
            DB::table('counties')->insert([
				'county_name' => 'Lanarkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//637
			//paisley, polnoon
            DB::table('counties')->insert([
				'county_name' => 'Renfrewshire',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Aragon
			//Aragon
			//Aragon
			//638
			//alcaniz, caspe, cantavieja, codonera, alcorisa
            DB::table('counties')->insert([
				'county_name' => 'Aragon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//639
			//monzon, san pedro, fraga
            DB::table('counties')->insert([
				'county_name' => 'Cinca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//640
			//valderrobres, valjunquera, arens, lledo, fuentespalda
            DB::table('counties')->insert([
				'county_name' => 'Matarrana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Barcelona
			//641
			//manresa, cardona, rajadell
            DB::table('counties')->insert([
				'county_name' => 'Bages',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//642
			//barcelona, santa coloma, badalona, castellet
            DB::table('counties')->insert([
				'county_name' => 'Barcelona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//643
			//berga, baga, san salvador, gironella, cercs, vallcebre
            DB::table('counties')->insert([
				'county_name' => 'Bergueda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//644
			//san feliu, fels, montserrat, san boi, cornella, corbera
            DB::table('counties')->insert([
				'county_name' => 'Llobregat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//645
			//mataro, cabrils, dosrius, santa florentina
            DB::table('counties')->insert([
				'county_name' => 'Maresme',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//646
			//vic, manlleu, tona, san julian, seva, cabrera
            DB::table('counties')->insert([
				'county_name' => 'Osona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//647
			//terrassa, bisbal, ripollet, sabadell, san marcial, granollers, franqueses, canoves, roca, montbui, ametlla, gallifa
            DB::table('counties')->insert([
				'county_name' => 'Valles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Girona
			//648
			//puigcerda, llivia, baltarga, pedra, guils
            DB::table('counties')->insert([
				'county_name' => 'Cerdanya',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//649
			//castellano, corneilla, san martin
            DB::table('counties')->insert([
				'county_name' => 'Conflent',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//650
			//emporda, figueres, peralada, requesens, pubol, quermanco, montgri
            DB::table('counties')->insert([
				'county_name' => 'Emporda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//651
			//girona, salto
            DB::table('counties')->insert([
				'county_name' => 'Girones',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//652
			//rennes, limoux 
            DB::table('counties')->insert([
				'county_name' => 'Razes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//653
			//ripoll, besalu, san joan, camprodon, olot
            DB::table('counties')->insert([
				'county_name' => 'Ripolles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//654
			//perpignan, elna
            DB::table('counties')->insert([
				'county_name' => 'Rosello',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//655
			//santa coloma, lloret, blanes, cassa
            DB::table('counties')->insert([
				'county_name' => 'Selva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',		
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Huesca
			//656
			//huesca, loarre, montearagon
            DB::table('counties')->insert([
				'county_name' => 'Huesca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//657
			//jacca, suesa, mianos, san juan
            DB::table('counties')->insert([
				'county_name' => 'Jacetania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//658
			//benabarre, graus
            DB::table('counties')->insert([
				'county_name' => 'Ribagorza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//659
			//boltana, ainsa
            DB::table('counties')->insert([
				'county_name' => 'Sobrarbe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Lleida
			//660
			//lleida, besora
            DB::table('counties')->insert([
				'county_name' => 'Lleida',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//661
			//talarn, eroles
            DB::table('counties')->insert([
				'county_name' => 'Pallars',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//662
			//urgell, balaguer, mollerusa, anglesola, golmes, tarrega
            DB::table('counties')->insert([
				'county_name' => 'Urgell',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Tarragona
			//663
			//amposta, rapita, alcanar
            DB::table('counties')->insert([
				'county_name' => 'Montsia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//664
			//tarragona, poblet
            DB::table('counties')->insert([
				'county_name' => 'Tarragona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//665
			//tortosa, alfara
            DB::table('counties')->insert([
				'county_name' => 'Tortosa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Teruel
			//666
			//albarracin, peracense, bezas, manzanera
            DB::table('counties')->insert([
				'county_name' => 'Albarracin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '106',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//667
			//teruel, alfambra
            DB::table('counties')->insert([
				'county_name' => 'Teruel',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '106',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Zaragoza
			//668
			//illeuca, moncayo, jarque, isuela, olvega
            DB::table('counties')->insert([
				'county_name' => 'Aranda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//669
			//calatayud, maluenda, piedra
            DB::table('counties')->insert([
				'county_name' => 'Calatayud',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//670
			//zaragoza, tarazona
            DB::table('counties')->insert([
				'county_name' => 'Zaragoza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);						
			//Navarre
			//Alava
			//671
			//ayala, arceniega, mariaca
            DB::table('counties')->insert([
				'county_name' => 'Ayala',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//672
			//gasteiz, armentia
            DB::table('counties')->insert([
				'county_name' => 'Gasteiz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//673
			//labastida, laguardia, lanciego, san millan, cornago, clavijo, arnedo, leiva, najera, calahorra
            DB::table('counties')->insert([
				'county_name' => 'Rioja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Gipuzcoa
			//674
			//san sebastian, astigarraga, zarautz
            DB::table('counties')->insert([
				'county_name' => 'Donostialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//675
			//leitza, leintz
            DB::table('counties')->insert([
				'county_name' => 'Leitzaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//676
			//mungia, butron
            DB::table('counties')->insert([
				'county_name' => 'Mungialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//677
			//tolosa, amasa
            DB::table('counties')->insert([
				'county_name' => 'Tolosaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Navarre
			//678
			//estella, viana
            DB::table('counties')->insert([
				'county_name' => 'Estella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//679
			//pamplona, orcoyen
            DB::table('counties')->insert([
				'county_name' => 'Irunerria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//680
			//sanguesa, xavier, san salvador
            DB::table('counties')->insert([
				'county_name' => 'Sanguesa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//681
			//tafalla, olite
            DB::table('counties')->insert([
				'county_name' => 'Tafalla',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//682
			//tudela, cascante, tulebras
            DB::table('counties')->insert([
				'county_name' => 'Tudela',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//683
			//ultzama, arre, san miguel
            DB::table('counties')->insert([
				'county_name' => 'Ultzamaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Viscaya
			//684
			//bermeo, gernika
            DB::table('counties')->insert([
				'county_name' => 'Busturialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//685
			//bilbao, erandio, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Bilbaoldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//686
			//arrigorriaga, berango
            DB::table('counties')->insert([
				'county_name' => 'Uribe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',	
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Castile
			//Castile
			//Avila
			//687
			//avila, barco, bonilla, mironcillo, villatoro
            DB::table('counties')->insert([
				'county_name' => 'Avila',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//688
			//arevalo, torralba
            DB::table('counties')->insert([
				'county_name' => 'Morana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//689
			//san pedro, mombeltran
            DB::table('counties')->insert([
				'county_name' => 'San Pedro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Burgos
			//690
			//lerma, barriosuso, villahoz, cebrecos, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Arlanza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//691
			//briviesca, rodilla, san salvador, miranda, moscadero, valpuesta
            DB::table('counties')->insert([
				'county_name' => 'Bureba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//692
			//burgos, ubierna, saldana, tardajos, rabe, modubar
            DB::table('counties')->insert([
				'county_name' => 'Burgos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);						
			//Palencia
			//693
			//palencia, medina, villarcayo, taranco, frias
            DB::table('counties')->insert([
				'county_name' => 'Campos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//694
			//palenzuela, astudillo, castroverde
            DB::table('counties')->insert([
				'county_name' => 'Cerrato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//695
			//matabuena, bustillo, santa maria, villabellaco
            DB::table('counties')->insert([
				'county_name' => 'Valdivia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//Segovia
			//696
			//coca, villeguillo, navas, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Coca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//697
			//riaza, cantespino, languilla
            DB::table('counties')->insert([
				'county_name' => 'Riaza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//698
			//segovia, turegano, pedraza, cantimpalos
            DB::table('counties')->insert([
				'county_name' => 'Segovia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//699
			//sepulveda, castilnovo
            DB::table('counties')->insert([
				'county_name' => 'Sepulveda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Soria
			//700
			//almazan, villasayas, llamosos, soliedra, moron
            DB::table('counties')->insert([
				'county_name' => 'Almazan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//701
			//berlanga, rello
            DB::table('counties')->insert([
				'county_name' => 'Berlanga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//702
			//gomara, almenar, cihuela, ciria, penalcazar
            DB::table('counties')->insert([
				'county_name' => 'Gomara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//703
			//osma, ucero, caracena
            DB::table('counties')->insert([
				'county_name' => 'Osma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//704
			//soria, calatanazor, garray, gormaz, san esteban
            DB::table('counties')->insert([
				'county_name' => 'Soria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Toledo
			//705
			//torrecilla, sevilleja, san martin
            DB::table('counties')->insert([
				'county_name' => 'Jara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//706
			//madrid, manzanares
            DB::table('counties')->insert([
				'county_name' => 'Madrid',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//707
			//ocana, oreja
            DB::table('counties')->insert([
				'county_name' => 'Ocana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//708
			//sesena, illescas, villaseca, cabanas, numancia, olmos
            DB::table('counties')->insert([
				'county_name' => 'Sagra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//709
			//talavera, bayuela, malpica, oropesa, san martin
            DB::table('counties')->insert([
				'county_name' => 'Talavera',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//710
			//toledo, montalban, guadamur, consuegra, cuerva, malamoneda, mascaraque, orgaz, guadalerzas 
            DB::table('counties')->insert([
				'county_name' => 'Toledo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//711
			//torrijos, fuensalida, barcience, escalona, maqueda, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Torrijos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//712
			//aranjuez, chinchon, villarejo
            DB::table('counties')->insert([
				'county_name' => 'Vegas',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Valladolid
			//713
			//renedo, terradillos, santa maria, torresandino, amusquillo, canillas, encinas
            DB::table('counties')->insert([
				'county_name' => 'Esgueva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//714
			//medina, tordesillas, mota, pozal
            DB::table('counties')->insert([
				'county_name' => 'Medina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//715
			//iscar, portillo, cabrejas, cuellar, olmedo
            DB::table('counties')->insert([
				'county_name' => 'Pinares',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//716
			//penafiel, corrales, curiel
            DB::table('counties')->insert([
				'county_name' => 'Penafiel',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//717
			//valladolid, simancas, fuensaldana, torrelobaton, villalba, simancas, tudela, santa maria, cabezon
            DB::table('counties')->insert([
				'county_name' => 'Pisuerga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//718
			//medina, uruena, villabragima
            DB::table('counties')->insert([
				'county_name' => 'Rioseco',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Galicia
			//Coruna
			//719
			//coruna, arteijo, san salvador, culleredo, sada
            DB::table('counties')->insert([
				'county_name' => 'Coruna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//720
			//pontedeume, san juan, cabanas
            DB::table('counties')->insert([
				'county_name' => 'Eume',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//721
			//ferrol, mogardos, moeche
            DB::table('counties')->insert([
				'county_name' => 'Ferrol',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//722
			//santiago, altamira, vedra
            DB::table('counties')->insert([
				'county_name' => 'Santiago',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//723
			//aranga, faro, traba, san xurxo, vimianzo
            DB::table('counties')->insert([
				'county_name' => 'Trastamara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Lugo
			//724
			//lugo, castroverde, doiras, friol
            DB::table('counties')->insert([
				'county_name' => 'Lugo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//725
			//alfoz, foz, lorenzana, viveiro, ribadeo 
            DB::table('counties')->insert([
				'county_name' => 'Marina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//726
			//meira, pol
            DB::table('counties')->insert([
				'county_name' => 'Meira',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//727
			//sarria, incio
            DB::table('counties')->insert([
				'county_name' => 'Sarria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//728
			//palas, monterosso
            DB::table('counties')->insert([
				'county_name' => 'Ulloa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Ourense
			//729
			//carballino, pinor, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Carballino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//730
			//celanova, gomesende
            DB::table('counties')->insert([
				'county_name' => 'Celanova',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//731
			//ourense, barbadanes, san esteban, ribadavia, maceda
            DB::table('counties')->insert([
				'county_name' => 'Ourense',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//732
			//barco, villamartin, carbelleda
            DB::table('counties')->insert([
				'county_name' => 'Valdeorras',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//733
			//viana, monterrey
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Pontevedra
			//734
			//caldas, catoira, san lazaro
            DB::table('counties')->insert([
				'county_name' => 'Caldas',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//735
			//pontevedra, caldelas
            DB::table('counties')->insert([
				'county_name' => 'Pontevedra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//736
			//vigo, sobroso, tuy, tebra, tomino, sotomayor
            DB::table('counties')->insert([
				'county_name' => 'Vigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Leon
			//Caceres
			//737
			//valencia, herrera, cabeza, san vincente, eljas, brozas, penafiel
            DB::table('counties')->insert([
				'county_name' => 'Alcantara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//738
			//caceres, torreorgaz, mogollones, monroy, portezuelo, montanchez
            DB::table('counties')->insert([
				'county_name' => 'Caceres',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//739
			//plasencia, coria, galisteo, jarandilla, monfrague, valverde, segura
            DB::table('counties')->insert([
				'county_name' => 'Plasencia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//740
			//trujillo, almaraz, belvis
            DB::table('counties')->insert([
				'county_name' => 'Trujillo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Leon
			//741
			//astorga, san justo, santa colomba
            DB::table('counties')->insert([
				'county_name' => 'Astorga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//742
			//baneza, castrillo, castrocalbon, destriana, san esteban, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Baneza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//743
			//ponferrada, cornatel, sarracin, san pedro, balboa, san andres, bembibre, villafranca
            DB::table('counties')->insert([
				'county_name' => 'Bierzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//744
			//leon, san andres, ribaseca, san claudio, sariegos
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//745
			//sahagun, almanza, cea
            DB::table('counties')->insert([
				'county_name' => 'Sahagun',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Salamanca
			//746
			//alba, aldeaseca, anaya, coca, pedraza, pedrosillo
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//747
			//cantalapiedra, cantalpino, poveda, tarazona
            DB::table('counties')->insert([
				'county_name' => 'Cantalapiedra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//748
			//guijuelo, congosto, salvatierra
            DB::table('counties')->insert([
				'county_name' => 'Guijuelo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//749
			//ledesma, zafron, tremedal, monleras, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Ledesma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//750
			//penaranda, alaraz, alconada, cantaracillo
            DB::table('counties')->insert([
				'county_name' => 'Penaranda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//751
			//rodrigo, ituero, espeja, fuentes, alameda, abusejo, aldahuela, yeltes, retortillo, tenebron, agallas, herguijuela, martiago
            DB::table('counties')->insert([
				'county_name' => 'Rodrigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//752
			//salamanca, tamames, aldeatejada, arapiles, barbadillo, buenamadre, calvarassa, calzada, san munoz, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Salamanca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//753
			//vitigudino, san felices, ahigal, bogajo, cerralbo, fuenteliante, lumbrales, olmedo, masueco, mieza, perena, vilvestre, almendra
            DB::table('counties')->insert([
				'county_name' => 'Vitigudino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Zamora
			//754
			//zamora, alcanices, alcorcillo, arcillera, villalonso
            DB::table('counties')->insert([
				'county_name' => 'Aliste',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//755
			//carbajales, cernadilla, espanedo, manzanal, peque
            DB::table('counties')->insert([
				'county_name' => 'Carballeda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//756
			//guarrate, argujillo, canizal
            DB::table('counties')->insert([
				'county_name' => 'Guarena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',	
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//757
			//sanabria, alcanices, otero, cerezal, calabor, santa cruz, trefacio
            DB::table('counties')->insert([
				'county_name' => 'Sanabria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//758
			//bermillo, fermoselle, alfaraz, asmesnal
            DB::table('counties')->insert([
				'county_name' => 'Sayago',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//759
			//tabara, faramontanos, moreruela, pozuelo
            DB::table('counties')->insert([
				'county_name' => 'Tabara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Asturias
			//Asturias
			//760
			//aviles, candamo, castrillon, gozon
            DB::table('counties')->insert([
				'county_name' => 'Aviles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//761
			//gijon, carreno, villaviciosa, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Gijon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//762
			//navia, castropol, coana, san martin, san tirzo, santa eulalia, villanueva
            DB::table('counties')->insert([
				'county_name' => 'Navia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//763
			//oviedo, bimenes, cabranes, grado, llanera, morcin, proaza, riosa, siero, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Oviedo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Cantabria
			//764
			//reinosa, santa maria, san pedro, argueso, aguilar
            DB::table('counties')->insert([
				'county_name' => 'Campoo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//765
			//liebana, potes, piasca, san toribio
            DB::table('counties')->insert([
				'county_name' => 'Liebana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//766
			//santander, collado, astillero
            DB::table('counties')->insert([
				'county_name' => 'Santander',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//767
			//miera, santona, san vincente, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Trasmiera',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',		
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Portugal
			//Aveiro
			//768
			//aveiro, agueda, santa maria, espinho, arouca
            DB::table('counties')->insert([
				'county_name' => 'Aveiro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',		
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//769
			//braga, faria, barcelos
            DB::table('counties')->insert([
				'county_name' => 'Braga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//770
			//porto, cedofeita, amarante, moreira, trofa, santiago, valongo, penafiel
            DB::table('counties')->insert([
				'county_name' => 'Porto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//771
			//viana, arcos, caminha, melgaco
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Beira
			//772
			//branco, belmonte, fundao, serta
            DB::table('counties')->insert([
				'county_name' => 'Branco',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//773
			//coimbra, montemor, redondos, soure
            DB::table('counties')->insert([
				'county_name' => 'Coimbra',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//774
			//guarda, sabugal
            DB::table('counties')->insert([
				'county_name' => 'Guarda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//775
			//viseu, cinfaes, lamego, mangualde
            DB::table('counties')->insert([
				'county_name' => 'Viseu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Braganca
			//776
			//braganca, miranda, mirandela, mogadouro, vimioso
            DB::table('counties')->insert([
				'county_name' => 'Braganca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '131',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//777
			//vila real, vila pouca, alijo, boticas, montalegre, celeiros, murca
            DB::table('counties')->insert([
				'county_name' => 'Vila Real',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '131',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Estremadura
			//778
			//leiria, pombal, alcobaca, batalha, nazare
            DB::table('counties')->insert([
				'county_name' => 'Leiria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//779
			//lisboa, alenquer, cascais, loures, lourinha, mafra, sintra
            DB::table('counties')->insert([
				'county_name' => 'Lisboa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//780
			//santarem, tomar, almourol
            DB::table('counties')->insert([
				'county_name' => 'Ribatejo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//781
			//setubal, moita, alcochete, almada
            DB::table('counties')->insert([
				'county_name' => 'Setubal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',	
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//Danelagen
			//Denmark
			//Jutland
			//782
			//aarhus, horsens, essenbaek, randers, alling, vissing, meilgaard, ulstrup
            DB::table('counties')->insert([
				'county_name' => 'Aarhus',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//783
			//borglum, saeby, vrejlev, hundslund, dueholm, vestervig, hojen
            DB::table('counties')->insert([
				'county_name' => 'Borglum',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//784
			//ribe, seem, kolding, vejle
            DB::table('counties')->insert([
				'county_name' => 'Ribe',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//785
			//slesvig, guldholm, flensburg, rude, tonder, logum, haderslev, alsborg, sonderborg, hedeby
            DB::table('counties')->insert([
				'county_name' => 'Slesvig',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//786
			//viborg, aalborg, sebber, vitskol, glenstrup, spottrup
            DB::table('counties')->insert([
				'county_name' => 'Viborg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//Scania
			//787
			//solvesborg, ronneby
            DB::table('counties')->insert([
				'county_name' => 'Blekinge',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//788
			//gamleborg, ronne, hammershus, aarsdale, nekso, gudhjem, hasle, aakirkeby, sandvig, svaneke
            DB::table('counties')->insert([
				'county_name' => 'Bornholm',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//789
			//falkenberg, varberg, halmstad, laholm, as
            DB::table('counties')->insert([
				'county_name' => 'Halland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//790
			//hiddensee, maschenholt, bergen
            DB::table('counties')->insert([
				'county_name' => 'Rugen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//791
			//trelleborg, backaskog, barseback, borringe, bosjo, dyback, hovdala, karnan, lindholm, smedstorp, lund, herrevad, malmohus, borgeby
            DB::table('counties')->insert([
				'county_name' => 'Scania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Sjaeland
			//792
			//odense, assens, dalum, holme, faborg, svendborg, nyborg
            DB::table('counties')->insert([
				'county_name' => 'Funen',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//793
			//nakskov, halsted, nysted, nykobing, aalholm
            DB::table('counties')->insert([
				'county_name' => 'Lolland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//794
			//roskilde, koge, selso, vallo 				
            DB::table('counties')->insert([
				'county_name' => 'Roskilde',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//795
			//kobenhavn, esrum, asserbo, soborg
            DB::table('counties')->insert([
				'county_name' => 'Sjaeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//796
			//soro, antvorskov, kalundborg, ringsted, naestved, vordingborg
            DB::table('counties')->insert([
				'county_name' => 'Soro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Norway
			//Nordjor (Northern Isles)
			//797
			//wick, halkirk, thurso, sinclair
            DB::table('counties')->insert([
				'county_name' => 'Caithness',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//798
			//kirkwall, holm, sandwick, eynhallow, birsay
            DB::table('counties')->insert([
				'county_name' => 'Orkney',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//799
			//tingwall, sandsting, dunrossness, cunningsburgh
            DB::table('counties')->insert([
				'county_name' => 'Shetland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Sodor (Southern Isles)
			//800
			//dunyvaig, kilchoman, kildalton
            DB::table('counties')->insert([
				'county_name' => 'Islay',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//801
			//stornoway, duneistean, aignish
            DB::table('counties')->insert([
				'county_name' => 'Lewis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',		
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//802
			//iona, moy, aros, duart
            DB::table('counties')->insert([
				'county_name' => 'Mull',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//803
			//dunvegan, dunscaith, duntulm, portree, broadford
            DB::table('counties')->insert([
				'county_name' => 'Skye',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',		
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//804
			//calvay, borve
            DB::table('counties')->insert([
				'county_name' => 'Uist',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);							
			//Hedmark (eidsivating)
			//805
			//granavollen, tingelstad, lunner, ulnes, hedal, lomen, slidre
            DB::table('counties')->insert([
				'county_name' => 'Hadeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//806
			//hamar, loten, stange, tingnes, moelv
            DB::table('counties')->insert([
				'county_name' => 'Hedmark',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//807
			//lillestrom, sorum, lorenskog, raelingen, nes, eidsvoll, ullensaker 
            DB::table('counties')->insert([
				'county_name' => 'Romerike',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Oppland (frostating)
			//808
			//are, bodin, gildeskal, mattmar 
            DB::table('counties')->insert([
				'county_name' => 'Jamtland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//809
			//ranem, sakshaug, gangstad, snasa, maere, alstadhaug, stiklestad, orland
            DB::table('counties')->insert([
				'county_name' => 'Namdal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//810
			//lillehammer, lom, asnes, follebu, gausdal, ringebu, lena  
            DB::table('counties')->insert([
				'county_name' => 'Oppland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Elder',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//811
			//trondheim, lade, orland, stoksund, haltdal, dolmoya, skaun, mebonden, vaernes 
            DB::table('counties')->insert([
				'county_name' => 'Trondelag',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);						
			//Rogaland (gulating)
			//812
			//egersund, bjerkreim, heskestad 
            DB::table('counties')->insert([
				'county_name' => 'Dalane',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//813
			//haugesund, avaldsnes, torvestad, akra 
            DB::table('counties')->insert([
				'county_name' => 'Haugeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//814
			//stavanger, tinghaug, tjora, njaerheim, ogna, varhaug 
            DB::table('counties')->insert([
				'county_name' => 'Jaeren',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//815
			//sauda, jelsa, hjelmeland, fister, ardal, strand, kvitsoy, suldal 
            DB::table('counties')->insert([
				'county_name' => 'Rogaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Sorland (borgarting)
			//816
			//vanse, oddernes, mandal, spangereid, vigeland, vigmostad, birkenes, moland, hovag 
            DB::table('counties')->insert([
				'county_name' => 'Agder',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//817
			//skien, siljan, gjerpen, eidanger 
            DB::table('counties')->insert([
				'county_name' => 'Grenland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//818
			//eidsborg, bo, kviteseid, sauherad, nesodden, romnes, heddal, flatdal 
            DB::table('counties')->insert([
				'county_name' => 'Telemark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Vestland (gulating)
			//819
			//vassas, bronnoy, odda 
            DB::table('counties')->insert([
				'county_name' => 'Hordaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//820
			//veoya, aheim, borgund, orskog, rodven, vestnes, kvernes, edoya, tingvoll 
            DB::table('counties')->insert([
				'county_name' => 'Romsdal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//821
			//bergen, arstad, lyse, gimmestad
            DB::table('counties')->insert([
				'county_name' => 'Vestland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Gruit',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Viken (borgarting)
			//822
			//asker, baerum, haslum 
            DB::table('counties')->insert([
				'county_name' => 'Akershus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//823
			//hallingdal, roldal, flesberg, rollag, nore, uvdal, ringerike, hole 
            DB::table('counties')->insert([
				'county_name' => 'Buskerud',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//824
			//sarpsborg, askim, trogstad 
            DB::table('counties')->insert([
				'county_name' => 'Ostfold',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//825
			//kungahalla, marstrand, uddeval, kville, tanum, vettaland, herrestad, bohus 
            DB::table('counties')->insert([
				'county_name' => 'Ranrike',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//826
			//larvik, borre, tonsberg, skaun 
            DB::table('counties')->insert([
				'county_name' => 'Vestfold',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//827
			//oslo, vestby, hurum, frogn, nesodden, as, ski, enebakk  
            DB::table('counties')->insert([
				'county_name' => 'Vingulmark',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//Sweden
			//Gotland
			//828
			//visby, hemse, vasterhejde, stenkumla, havdhem, kraklingbo, hastnas, roma
            DB::table('counties')->insert([
				'county_name' => 'Gotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//829
			//linkoping, norrkoping, soderkoping, vadstena, skanninge, bjalbo, tidersrum, ekenas, vreta
            DB::table('counties')->insert([
				'county_name' => 'Ostergotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//830
			//husaby, lacko, falkoping, skara, skovde, bogesund, ale, dalaborg, alvborg
            DB::table('counties')->insert([
				'county_name' => 'Vastergotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Norrland
			//831
			//gudmund, sjalevads, arnas, anundsjo
            DB::table('counties')->insert([
				'county_name' => 'Angermanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//832
			//torsaker, gavle, ockelbo
            DB::table('counties')->insert([
				'county_name' => 'Gastrikland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//833
			//ljusdal, bollnas
            DB::table('counties')->insert([
				'county_name' => 'Halsingland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Osterland
			//834
			//kastelholm, hammarland
            DB::table('counties')->insert([
				'county_name' => 'Aland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//835
			//turku, stenberga, somero, biskopsborg
            DB::table('counties')->insert([
				'county_name' => 'Finland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//836
			//viborg, kexholm, hamina, kouvola, hollola
            DB::table('counties')->insert([
				'county_name' => 'Karelia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//837
			//raseborg, koskela, esbo, kerava, hogfors
            DB::table('counties')->insert([
				'county_name' => 'Nyland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//838
			//ouluborg, korsholm
            DB::table('counties')->insert([
				'county_name' => 'Ostrobothnia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//839
			//kokemaki, vreghdenborg
            DB::table('counties')->insert([
				'county_name' => 'Satakunta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//840
			//olofsborg, saint michel, nyslott
            DB::table('counties')->insert([
				'county_name' => 'Savonia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//841
			//hame, birkala
            DB::table('counties')->insert([
				'county_name' => 'Tavastland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Smaland
			//842
			//borgholm, alby, ottenby, halltorp, kopingsvik
            DB::table('counties')->insert([
				'county_name' => 'Oland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '147',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//843
			//kalmar, vastervik, vaxjo, vimmerby, eksjo, ljungby, hulingsryd, hassleby, gamleby
            DB::table('counties')->insert([
				'county_name' => 'Smaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '147',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Svealand
			//844
			//hedemora, avesta
            DB::table('counties')->insert([
				'county_name' => 'Dalarna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//845
			//orebro, riseberga, askersund, kumla, goksholm
            DB::table('counties')->insert([
				'county_name' => 'Narke',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//846
			//stockholm, strangnas, sodertalje, nykoping, torshalla, trosa, djursholm, horningsholm, birka
            DB::table('counties')->insert([
				'county_name' => 'Sodermanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//847
			//uppsala, osthammar, riksby, stockby, solna, sollentuna, sigtuna, enkoping, alsno, penningby, orbyhus
            DB::table('counties')->insert([
				'county_name' => 'Uppland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Hemp',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//848
			//arvika, gunnarskog, varnums, alvdal
            DB::table('counties')->insert([
				'county_name' => 'Varmland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//849
			//arboga, norberg, skinnsackeberg, lindesberg, vasteras
            DB::table('counties')->insert([
				'county_name' => 'Vastmanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',	
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Poland
			//Poland
			//Greater Poland
			//850
			//gostyn, kroben, punitz, borek, rawitz
            DB::table('counties')->insert([
				'county_name' => 'Gostyn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//851
			//grodisze, rakwitz, wielichowo, wollstein
            DB::table('counties')->insert([
				'county_name' => 'Grodisze',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//852
			//jarotschin, zerkow
            DB::table('counties')->insert([
				'county_name' => 'Jarotschin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//853
			//kosten, kriewen
            DB::table('counties')->insert([
				'county_name' => 'Kosten',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//854
			//lissa, oseczno, reisen
            DB::table('counties')->insert([
				'county_name' => 'Lissa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//Lesser Poland
			//855
			//auswitz, zator, ossek
            DB::table('counties')->insert([
				'county_name' => 'Auswitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//856
			//chrzanow, tchebin, libiaz
            DB::table('counties')->insert([
				'county_name' => 'Chrzanow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//857
			//sandez, grunberg, piwniczna, muszyna
            DB::table('counties')->insert([
				'county_name' => 'Sandez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//858
			//tarnow, zabno, tuchow, woynitz, dunaiz, ryglitz, cieskowitz, radlow
            DB::table('counties')->insert([
				'county_name' => 'Tarnow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//859
			//wadowitz, andrichow
            DB::table('counties')->insert([
				'county_name' => 'Wadowitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//860
			//lublin, chelm
            DB::table('counties')->insert([
				'county_name' => 'Lublin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//861
			//lukow, stoczek
            DB::table('counties')->insert([
				'county_name' => 'Lukow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//862
			//sandomierz, zawichost, koprzywnica, klimontow
            DB::table('counties')->insert([
				'county_name' => 'Sandomierz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Gnesen
			//863
			//gnesen, tremessen, witkowo, schwarzenau, kletzko
            DB::table('counties')->insert([
				'county_name' => 'Gnesen',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//864
			//kolo, moosburg, dabie, klodawa
            DB::table('counties')->insert([
				'county_name' => 'Kolo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//865
			//kunau, schlusselsee, gohlen, sompolno, kleczew
            DB::table('counties')->insert([
				'county_name' => 'Kunau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//866
			//slupca, zagorow
            DB::table('counties')->insert([
				'county_name' => 'Slupca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//867
			//turek, tviliskow, dobra
            DB::table('counties')->insert([
				'county_name' => 'Turek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//868
			//znin, bartschin
            DB::table('counties')->insert([
				'county_name' => 'Znin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Kalisz
			//869
			//kalisz, opatowek, stavissin
            DB::table('counties')->insert([
				'county_name' => 'Kalisz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//870
			//pleschen, chocz, dobrzyca
            DB::table('counties')->insert([
				'county_name' => 'Pleschen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//871
			//schildberg, kempen, grabow
            DB::table('counties')->insert([
				'county_name' => 'Schildberg',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//872
			//wielun, ruda
            DB::table('counties')->insert([
				'county_name' => 'Wielun',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//873
			//wreschen, peisern
            DB::table('counties')->insert([
				'county_name' => 'Wreschen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Krakow
			//874
			//krakow, tyniec, babice, krzeszowitz, szlomnik, skala, salzberg, miechow, myslenitz, proszowitz, hebdow, gross salze, niepolomitz
            DB::table('counties')->insert([
				'county_name' => 'Krakow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//875
			//olkusz, wolbrom, boleslaw
            DB::table('counties')->insert([
				'county_name' => 'Olkusz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//876
			//czestochowa, lelow, olsztyn
            DB::table('counties')->insert([
				'county_name' => 'Czestochowa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//877
			//gorlitz, beitsch, bobow, brigel
            DB::table('counties')->insert([
				'county_name' => 'Gorlitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Kuyavia
			//878
			//brodnica, jablonow, gorzino
            DB::table('counties')->insert([
				'county_name' => 'Brodnica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//879
			//inowroclaw, kruschwitz, argenau, pakosch
            DB::table('counties')->insert([
				'county_name' => 'Inowroclaw',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//880
			//leipe, dobrin, skepe, rypin, leslau
            DB::table('counties')->insert([
				'county_name' => 'Leipe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//881
			//mogilno, strelno
            DB::table('counties')->insert([
				'county_name' => 'Mogilno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//882
			//naklo, schubin, kcynia, mrotschen
            DB::table('counties')->insert([
				'county_name' => 'Naklo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);		
			//883
			//radziejow, piotrkow
            DB::table('counties')->insert([
				'county_name' => 'Radziejow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Mazovia
			//884
			//losice, meseritz, drohiczyn, sokolow
            DB::table('counties')->insert([
				'county_name' => 'Losice',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//885
			//makow, razon, ostroleka, wyszkow, pultusk, przasnysz, ciechanow
            DB::table('counties')->insert([
				'county_name' => 'Makow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//886
			//minsk, grebkow 
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);		
			//887
			//zuromin, biezun, sierp
            DB::table('counties')->insert([
				'county_name' => 'Zuromin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//888
			//rawa, rawska
            DB::table('counties')->insert([
				'county_name' => 'Rawa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//889
			//wizna, lomza, nowogrod
            DB::table('counties')->insert([
				'county_name' => 'Wizna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Plock
			//890
			//plock, drobin, wyszogrod, plonsk, sochaczew
            DB::table('counties')->insert([
				'county_name' => 'Plock',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//891
			//gostynin, gabin
            DB::table('counties')->insert([
				'county_name' => 'Gostynin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//892
			//mlawa, szrensk
            DB::table('counties')->insert([
				'county_name' => 'Mlawa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Posen
			//893
			//posen, schwersenz, moschin, bnin, pudewitz, radzim, kostschin, stenschewo, buk, schroda
            DB::table('counties')->insert([
				'county_name' => 'Posen',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//894
			//chodziez, samotschin, margonin
            DB::table('counties')->insert([
				'county_name' => 'Chodziez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//895
			//gorzow, kustrin, vietz
            DB::table('counties')->insert([
				'county_name' => 'Gorzow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//896
			//pila, wirsitz, lobsens, usch, wissek, jastrow, krojanke
            DB::table('counties')->insert([
				'county_name' => 'Pila',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//897
			//rogasen, obornik
            DB::table('counties')->insert([
				'county_name' => 'Rogasen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//898
			//samter, wronke, pinne
            DB::table('counties')->insert([
				'county_name' => 'Samter',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//899
			//scharnikau, filehne, schonlanke
            DB::table('counties')->insert([
				'county_name' => 'Scharnikau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//900
			//schrim, ksiaz, dolsk
            DB::table('counties')->insert([
				'county_name' => 'Schrim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Sieradz
			//901
			//sieradz, warta
            DB::table('counties')->insert([
				'county_name' => 'Sieradz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//902
			//radom, skaryszew, ilza, szydlowitz, garwolin, grojec
            DB::table('counties')->insert([
				'county_name' => 'Radom',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//903
			//lentschitz, piatek
            DB::table('counties')->insert([
				'county_name' => 'Lentschitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Warsaw
			//904
			//warsaw, ozarow, blonie, piaseczno, grodzisk
            DB::table('counties')->insert([
				'county_name' => 'Warsaw',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '159',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//905
			//czersk, brusy
            DB::table('counties')->insert([
				'county_name' => 'Czersk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '159',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',	
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Lithuania
			//Minsk
			//906
			//minsk, barysaw, lahoysk, zaslawye
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//907
			//gomel, rechytsa, dobrush
            DB::table('counties')->insert([
				'county_name' => 'Gomel',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//908
			//mogilev, babruysk, drutsk
            DB::table('counties')->insert([
				'county_name' => 'Mogilev',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Samogitia
			//909
			//panevezys, birsen
            DB::table('counties')->insert([
				'county_name' => 'Panevezys',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '161',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//910
			//schaulen, bajenburg
            DB::table('counties')->insert([
				'county_name' => 'Schaulen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '161',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//911
			//redau, palanga, telsche, mazeike 
            DB::table('counties')->insert([
				'county_name' => 'Redau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '161',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//Tracken
			//912
			//alytus, grodno, lyda
            DB::table('counties')->insert([
				'county_name' => 'Alytus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//913
			//kauen, bajenburg
            DB::table('counties')->insert([
				'county_name' => 'Kauen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//914
			//tracken, paneriai
            DB::table('counties')->insert([
				'county_name' => 'Tracken',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//Vilnius
			//915
			//vilnius, kreva, medininkai
            DB::table('counties')->insert([
				'county_name' => 'Vilnius',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '163',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//916
			//kernave, vilkomir
            DB::table('counties')->insert([
				'county_name' => 'Kernave',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '163',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',	
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Hungary
			//Hungary
			//Hungary		
			//917
			//gyor, bony, gyorladamer, pannonhalma
            DB::table('counties')->insert([
				'county_name' => 'Gyor',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//918
			//moson, neusiedl, rajka
            DB::table('counties')->insert([
				'county_name' => 'Moson',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//919
			//kaposvar, barcs, fonyod, nagyatad, siofok, thob
            DB::table('counties')->insert([
				'county_name' => 'Somogy',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//920
			//sopron, mattersburg, eisenstadt, oberpullendorf
            DB::table('counties')->insert([
				'county_name' => 'Sopron',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//921
			//vasvar, kleinmariazell, oberwart, koszeg, szentgotthard, szombathely
            DB::table('counties')->insert([
				'county_name' => 'Vas',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//922
			//vezprem, ajka, papa, tapolca, varpalota, zirc
            DB::table('counties')->insert([
				'county_name' => 'Vezprem',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//923
			//zalaegerszeg, zalavar
            DB::table('counties')->insert([
				'county_name' => 'Zala',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Buda
			//924
			//bac, kalocsa, kecskemet 
            DB::table('counties')->insert([
				'county_name' => 'Bac',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//925
			//pecs, mohacs, komlo
            DB::table('counties')->insert([
				'county_name' => 'Baranya',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//926
			//esztergom, visegrad, muzla, sturovo
            DB::table('counties')->insert([
				'county_name' => 'Esztergom',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//927
			//fehervar, mor
            DB::table('counties')->insert([
				'county_name' => 'Fejer',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//928
			//eger, kisnana, belapatfalva
            DB::table('counties')->insert([
				'county_name' => 'Heves',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//929
			//pest, buda, vecses, nagykata
            DB::table('counties')->insert([
				'county_name' => 'Pest',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//930
			//szolnok, jaszbereny, zenthmyclos, bekes, gyula, szarvas
            DB::table('counties')->insert([
				'county_name' => 'Szolnok',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Nitra
			//931
			//nitra, surany, hlohovec, topolcany, zabokreky, piestany, prievidza, holic, senica, trnovec, cachtice, beckov, ducove
            DB::table('counties')->insert([
				'county_name' => 'Nitra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//932
			//arvavaraylla, bingenstad, turdoschin
            DB::table('counties')->insert([
				'county_name' => 'Arva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//933
			//bars, leva
            DB::table('counties')->insert([
				'county_name' => 'Bars',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//934
			//hont, vac
            DB::table('counties')->insert([
				'county_name' => 'Hont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//935
			//komarom, zemianska, tata, hurbanovo
            DB::table('counties')->insert([
				'county_name' => 'Komarom',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//936
			//liptoszentmiklos, hradok, lupca, ruzomberok
            DB::table('counties')->insert([
				'county_name' => 'Lipto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//937
			//orava, dolny
            DB::table('counties')->insert([
				'county_name' => 'Orava',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//938
			//pozsony, dunajska, galanta, malacky, trnava, samorin, senec
            DB::table('counties')->insert([
				'county_name' => 'Pozsony',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//939
			//trencsen, banovce, ilava, kischutz, bytca, puchov, povazky, sylna
            DB::table('counties')->insert([
				'county_name' => 'Trencsen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//940
			//besztercebanya, brezno, zvolen
            DB::table('counties')->insert([
				'county_name' => 'Zolyom',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Temesvar
			//941
			//temesvar, deta, kovin, buzias, ciacova, rekas, werschetz
            DB::table('counties')->insert([
				'county_name' => 'Temesvar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//942
			//arad, lipova, vinga
            DB::table('counties')->insert([
				'county_name' => 'Arad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//943
			//bihar, nagyvarad
            DB::table('counties')->insert([
				'county_name' => 'Bihar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//944
			//csanad, marosvar
            DB::table('counties')->insert([
				'county_name' => 'Csanad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//945
			//caransebes, lugoj
            DB::table('counties')->insert([
				'county_name' => 'Caransebes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Ungvar
			//946
			//ungvar, kapos, serednie
            DB::table('counties')->insert([
				'county_name' => 'Ungvar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//947
			//beregzasz, munkacs
            DB::table('counties')->insert([
				'county_name' => 'Bereg',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//948
			//borsod, miskolc
            DB::table('counties')->insert([
				'county_name' => 'Borsod',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//949
			//debrecen, szoboszlo
            DB::table('counties')->insert([
				'county_name' => 'Hajdu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//950
			//nyiregyhaza, kisvar, nagykallo, bakta, nyirbator
            DB::table('counties')->insert([
				'county_name' => 'Szabolcs',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//951
			//szatmar, mateszalka, nagybanya, nagykaroly, nagysomkut, szatmarnemeti
            DB::table('counties')->insert([
				'county_name' => 'Szatmar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//952
			//spis, levoca, gelnica, kesmark, lubovna, ofalu, sopota, varalja
            DB::table('counties')->insert([
				'county_name' => 'Szepes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//953
			//zemplen, tokaj, helmech, secovce, brekov, jasenov, cicava, sarospatak, zeltberg, szerencs, snina, vranov
            DB::table('counties')->insert([
				'county_name' => 'Zemplen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Transylvania
			//954
			//aranyosgyeres, felvinc, turda, holten, miereschhall, torocko, mireslau, guylafehervar
            DB::table('counties')->insert([
				'county_name' => 'Aranyosszek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//955
			//csiksomlyo, csikszereda
            DB::table('counties')->insert([
				'county_name' => 'Csikszek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',							
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//956
			//sepsiszentgyorgy, kezdivasarhely, nagyajta 
            DB::table('counties')->insert([
				'county_name' => 'Haromzsek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//957
			//koloszvar, szamosujvar, desvar
            DB::table('counties')->insert([
				'county_name' => 'Koloszvar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//958
			//marosvasarhely, teleki, mezosamsond
            DB::table('counties')->insert([
				'county_name' => 'Marosszek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//959
			//szaszsebes, nagydisznod, nagyszeben, szelistye, szerdahely
            DB::table('counties')->insert([
				'county_name' => 'Szeben',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',	
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//960
			//udvarhely, marosheviz
            DB::table('counties')->insert([
				'county_name' => 'Udvarhelyszek',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Croatia
			//Dalmatia
			//961
			//bribir, skradin
            DB::table('counties')->insert([
				'county_name' => 'Bribir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//962
			//knin, drnis
            DB::table('counties')->insert([
				'county_name' => 'Knin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//963
			//udbina, lapac
            DB::table('counties')->insert([
				'county_name' => 'Krbava',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//964
			//gospic, lapac, sokolac, otocac, baska, senj
            DB::table('counties')->insert([
				'county_name' => 'Lika',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//965
			//modrus, ogulin, rijeka, kotor, bakar, slunj, karlovac
            DB::table('counties')->insert([
				'county_name' => 'Modrus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Ragusa
			//966
			//ragusa, trebinje, korcula, narona
            DB::table('counties')->insert([
				'county_name' => 'Ragusa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//967
			//cetina, civljane, sibenik, vrlika, glavas, prozor, sinj, trilj, stolac, gradac
            DB::table('counties')->insert([
				'county_name' => 'Cetina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//968
			//kotor, dobrota, risan
            DB::table('counties')->insert([
				'county_name' => 'Kotor',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Slavonia
			//969
			//zagreb, sisak
            DB::table('counties')->insert([
				'county_name' => 'Zagreb',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//970
			//bjelovar, cazma, daruvar
            DB::table('counties')->insert([
				'county_name' => 'Bjelovar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//971
			//pozega, pakrac
            DB::table('counties')->insert([
				'county_name' => 'Pozega',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//972
			//vukovar, szavaszentdemeter
            DB::table('counties')->insert([
				'county_name' => 'Syrmia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//973
			//varazdin, ludbreg
            DB::table('counties')->insert([
				'county_name' => 'Varazdin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);		
			//974
			//veroce, osijek, nasice, dakovo
            DB::table('counties')->insert([
				'county_name' => 'Veroce',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Split
			//975
			//split, klis, solin, hvar, makarska
            DB::table('counties')->insert([
				'county_name' => 'Split',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//976
			//trogir, komiza
            DB::table('counties')->insert([
				'county_name' => 'Trogir',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Zadar
			//977
			//zadar, orbrovac, pag, nin, benkovac, starigrad, rab
            DB::table('counties')->insert([
				'county_name' => 'Zadar',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '174',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//978
			//cres, lubenice, martinscica, losinj, osor
            DB::table('counties')->insert([
				'county_name' => 'Cres',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '174',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//979
			//veglia, jurandvor, vrbnik, moschau
            DB::table('counties')->insert([
				'county_name' => 'Veglia',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '174',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',	
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Sicily
			//Palermo
			//980
			//palermo, momreale, corleone
            DB::table('counties')->insert([
				'county_name' => 'Palermo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',		
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//981
			//caccamo, termini
            DB::table('counties')->insert([
				'county_name' => 'Caccamo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//982
			//cefalu, castelbuono
            DB::table('counties')->insert([
				'county_name' => 'Cefalu',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Trapani
			//983
			//trapani, erice
            DB::table('counties')->insert([
				'county_name' => 'Trapani',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//984
			//alcamo, castellammare
            DB::table('counties')->insert([
				'county_name' => 'Alcamo',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//985
			//marsala, mazara, castelvetrano, motya
            DB::table('counties')->insert([
				'county_name' => 'Marsala',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Messina
			//986
			//messina, oliveri 
            DB::table('counties')->insert([
				'county_name' => 'Messina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//987
			//milazzo, patti, tindari
            DB::table('counties')->insert([
				'county_name' => 'Milazzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//988
			//taormina, mola
            DB::table('counties')->insert([
				'county_name' => 'Taormina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Agrigento
			//989
			//agrigento, sciacca
            DB::table('counties')->insert([
				'county_name' => 'Agrigento',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//990
			//licata, montechiaro
            DB::table('counties')->insert([
				'county_name' => 'Licata',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//991
			//gela, riesi
            DB::table('counties')->insert([
				'county_name' => 'Gela',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//992
			//caltanisetta, mazzarino, mussomeli, mafredonico 
            DB::table('counties')->insert([
				'county_name' => 'Caltanisetta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Catania
			//993
			//catania, aci
            DB::table('counties')->insert([
				'county_name' => 'Catania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//994
			//caltagirone, mirabella
            DB::table('counties')->insert([
				'county_name' => 'Caltagirone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Siracusa
			//995
			//siracusa, noto, maniace
            DB::table('counties')->insert([
				'county_name' => 'Siracusa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '180',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//996
			//modica, scicli, ispica, monterosso
            DB::table('counties')->insert([
				'county_name' => 'Modica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '180',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//997
			//ragusa, chiaramonte, comiso, giarratana
            DB::table('counties')->insert([
				'county_name' => 'Ragusa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '180',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',	
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Naples
			//Naples
			//998
			//naples, giugliano, pompei, casoria, afragola, acerra, marano
            DB::table('counties')->insert([
				'county_name' => 'Naples',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '181',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '181',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Capua
			//
			//capua, san angelo
            DB::table('counties')->insert([
				'county_name' => 'Capua',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//caserta, mondragone
            DB::table('counties')->insert([
				'county_name' => 'Caserta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Amalfi
			//
			//amalfi
            DB::table('counties')->insert([
				'county_name' => 'Amalfi',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '183',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//sorrento
            DB::table('counties')->insert([
				'county_name' => 'Sorrento',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '183',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Calabria
			//
			//catanzaro, san floro, squillace
            DB::table('counties')->insert([
				'county_name' => 'Catanzaro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//cosenza, mendicino
            DB::table('counties')->insert([
				'county_name' => 'Cosenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//crotone
            DB::table('counties')->insert([
				'county_name' => 'Crotone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//reggio
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//Basilicata
			//
			//matera
            DB::table('counties')->insert([
				'county_name' => 'Matera',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//potenza
            DB::table('counties')->insert([
				'county_name' => 'Potenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Taranto
			//
			//taranto
            DB::table('counties')->insert([
				'county_name' => 'Taranto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//bari
            DB::table('counties')->insert([
				'county_name' => 'Bari',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//
			//brindisi
            DB::table('counties')->insert([
				'county_name' => 'Brindisi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//lecce
            DB::table('counties')->insert([
				'county_name' => 'Lecce',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Foggia
			//
			//foggia
            DB::table('counties')->insert([
				'county_name' => 'Foggia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Benevento
			//
			//benevento
            DB::table('counties')->insert([
				'county_name' => 'Benevento',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Salerno
			//
			//salerno, cava
            DB::table('counties')->insert([
				'county_name' => 'Salerno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',	
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Sardinia
			//Gallura
			//
			//olbia
            DB::table('counties')->insert([
				'county_name' => 'Olbia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '190',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '190',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Logudoro 
			//
			//torres
            DB::table('counties')->insert([
				'county_name' => 'Torres',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '191',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//sassari
            DB::table('counties')->insert([
				'county_name' => 'Sassari',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '192',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Arborea
			//
			//oristano, tharros
            DB::table('counties')->insert([
				'county_name' => 'Oristano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '192',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//sanluri
            DB::table('counties')->insert([
				'county_name' => 'Campadino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '192',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Cagliari
			//
			//cagliari
            DB::table('counties')->insert([
				'county_name' => 'Cagliari',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '193',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//tortoli, nuoro
            DB::table('counties')->insert([
				'county_name' => 'Oglistria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '193',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//castiadas, san vito
            DB::table('counties')->insert([
				'county_name' => 'Sarrabus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '193',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',	
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);		
			//Byzantine			
			//Thrace
			//Thrace
			//
			//constantinople
            DB::table('counties')->insert([
				'county_name' => 'Constantinople',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//ergisce
            DB::table('counties')->insert([
				'county_name' => 'Ergisce',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Macedonia
			//
			//adrianople
            DB::table('counties')->insert([
				'county_name' => 'Adrianople',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//bergule
            DB::table('counties')->insert([
				'county_name' => 'Bergule',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Thessalonica
			//Hellas
			//
			//athens
            DB::table('counties')->insert([
				'county_name' => 'Attica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//thebes
            DB::table('counties')->insert([
				'county_name' => 'Boeotia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//chalcis
            DB::table('counties')->insert([
				'county_name' => 'Euboea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//larissa, elassona, farsala
            DB::table('counties')->insert([
				'county_name' => 'Thessaly',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//lamia, thaumace, ravenica, amphissa, bodonitsa
            DB::table('counties')->insert([
				'county_name' => 'Phthia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Peloponessos
			//
			//corinth, nemea
            DB::table('counties')->insert([
				'county_name' => 'Corinthia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//argos
            DB::table('counties')->insert([
				'county_name' => 'Argos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//patras
            DB::table('counties')->insert([
				'county_name' => 'Patras',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//
			//monemvasia
            DB::table('counties')->insert([
				'county_name' => 'Laconia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//Archipelago
			//
			//chios
            DB::table('counties')->insert([
				'county_name' => 'Chios',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Epirus
			//
			//naupaktos
            DB::table('counties')->insert([
				'county_name' => 'Naupaktos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Thessalonica
			//
			//thessalonica
            DB::table('counties')->insert([
				'county_name' => 'Thessalonica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Strymon
			//
			//serres
            DB::table('counties')->insert([
				'county_name' => 'Serres',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//christoupolis
            DB::table('counties')->insert([
				'county_name' => 'Christoupolis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Trebizond
			//Paphlagonia
			//
			//germanicopolis
            DB::table('counties')->insert([
				'county_name' => 'Germanicopolis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Armeniac
			//
			//amasia
            DB::table('counties')->insert([
				'county_name' => 'Amasia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Chaldia
			//
			//trapezus
            DB::table('counties')->insert([
				'county_name' => 'Trapezus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Crimea
			//
			//chersonesus
            DB::table('counties')->insert([
				'county_name' => 'Chersonesus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Anatolia
			//Thracesia
			//
			//sardes
            DB::table('counties')->insert([
				'county_name' => 'Sardes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Bucellaria
			//
			//ancyra
            DB::table('counties')->insert([
				'county_name' => 'Ancyra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Anatolia
			//
			//iconium
            DB::table('counties')->insert([
				'county_name' => 'Iconium',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Cappadocia
			//
			//caesarea
            DB::table('counties')->insert([
				'county_name' => 'Caesarea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Seleucia
			//
			//seleucea
            DB::table('counties')->insert([
				'county_name' => 'Seleucea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Opsicia
			//
			//cyzicus
            DB::table('counties')->insert([
				'county_name' => 'Cyzicus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Nicaea
			//
			//nicaea
            DB::table('counties')->insert([
				'county_name' => 'Nicaea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',		
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',	
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Lycia
			//
			//rhodes
            DB::table('counties')->insert([
				'county_name' => 'Rhodes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',		
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',		
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Pamphylia
			//
			//attaleia
            DB::table('counties')->insert([
				'county_name' => 'Attaleia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',		
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',		
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);					
			//Georgia
			//Georgia
			//Georgia
			//Colchis
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Phasis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//pityus
            DB::table('counties')->insert([
				'county_name' => 'Pityus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//kutaisi, gelati
            DB::table('counties')->insert([
				'county_name' => 'Imereti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//batumi
            DB::table('counties')->insert([
				'county_name' => 'Batumi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Javakheti
			//
			//akhalkalaki
            DB::table('counties')->insert([
				'county_name' => 'Akhalkalaki',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Kartli
			//
			//bolnisi
            DB::table('counties')->insert([
				'county_name' => 'Bolnisi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//tiblisi
            DB::table('counties')->insert([
				'county_name' => 'Tiblisi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//rustavi
            DB::table('counties')->insert([
				'county_name' => 'Rustavi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//gori
            DB::table('counties')->insert([
				'county_name' => 'Gori',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Kakheti
			//
			//telavi, ikalto
            DB::table('counties')->insert([
				'county_name' => 'Telavi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',	
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Armenia
			//Vaspurakan
			//
			//van
            DB::table('counties')->insert([
				'county_name' => 'Van',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Taron
			//
			//acilisene
            DB::table('counties')->insert([
				'county_name' => 'Acilisene',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',	
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//karapet
            DB::table('counties')->insert([
				'county_name' => 'Karapet',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Kars
			//
			//kars
            DB::table('counties')->insert([
				'county_name' => 'Kars',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//ani
            DB::table('counties')->insert([
				'county_name' => 'Ani',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Azerbaijan
			//
			//baku
            DB::table('counties')->insert([
				'county_name' => 'Baku',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',		
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Kievan Rus
			//Kiev
			//Kiev 
			//
			//kiev, pechersk, chvastiv, vyshhorod, mezhyhirya, yuriiv, chernobyl
            DB::table('counties')->insert([
				'county_name' => 'Kiev',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//
			//bratslav, vinnytsia
            DB::table('counties')->insert([
				'county_name' => 'Bratslav',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//
			//cherkasy, kaniv, bohuslav, korsun 
            DB::table('counties')->insert([
				'county_name' => 'Cherkasy',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//
			//korosten, ovruch, zhytomyr
            DB::table('counties')->insert([
				'county_name' => 'Korosten',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//Pereyaslavl
			//
			//pereyaslavl, boryspil
            DB::table('counties')->insert([
				'county_name' => 'Pereyaslavl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//
			//poltava, lubny
            DB::table('counties')->insert([
				'county_name' => 'Poltava',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Chernigov
			//Chernigov
			//
			//chernigov, kozelets, sedniv
            DB::table('counties')->insert([
				'county_name' => 'Chernigov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//bryansk, kursk, oryol, rylsk, starodub, trubcvesk, sevsk, belgorod, svensky
            DB::table('counties')->insert([
				'county_name' => 'Bryansk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Cider',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//lyubech, loyew
            DB::table('counties')->insert([
				'county_name' => 'Lyubech',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//mozhaysk, borodino
            DB::table('counties')->insert([
				'county_name' => 'Mozhaysk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//novosil, odoyev
            DB::table('counties')->insert([
				'county_name' => 'Novosil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Ryazan
			//
			//ryazan, kadom, yelatma, pronsk
            DB::table('counties')->insert([
				'county_name' => 'Ryazan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//murom, borisoglebsky
            DB::table('counties')->insert([
				'county_name' => 'Murom',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//tula, belyov
            DB::table('counties')->insert([
				'county_name' => 'Tula',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//kaluga, mosalsk, kozelsk, tarusa, obolensk
            DB::table('counties')->insert([
				'county_name' => 'Kaluga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//vorotynsk, peremyshl, karachev
            DB::table('counties')->insert([
				'county_name' => 'Vorotynsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);							
			//Halych
			//Halych
			//
			//halych, kolomyia
            DB::table('counties')->insert([
				'county_name' => 'Halych',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//peremyshl, sambir, lubaczow
            DB::table('counties')->insert([
				'county_name' => 'Peremyshl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//lviv, grodek, zudech
            DB::table('counties')->insert([
				'county_name' => 'Lviv',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//belz, sokal 
            DB::table('counties')->insert([
				'county_name' => 'Belz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Podolia
			//
			//kamianets, chernivtsi, khotyn 
            DB::table('counties')->insert([
				'county_name' => 'Podolia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//terebovlia, moklekov
            DB::table('counties')->insert([
				'county_name' => 'Terebovlia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Volhynia
			//
			//volodymyr, kovel, ratne, shatsk
            DB::table('counties')->insert([
				'county_name' => 'Volhynia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//brest, belz
            DB::table('counties')->insert([
				'county_name' => 'Brest',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//kremenets, shumsk
            DB::table('counties')->insert([
				'county_name' => 'Kremenets',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//lutsk, busk
            DB::table('counties')->insert([
				'county_name' => 'Lutsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Turov
			//
			//turov, pinsk, mazyr
            DB::table('counties')->insert([
				'county_name' => 'Turov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//slutsk, kletsk
            DB::table('counties')->insert([
				'county_name' => 'Slutsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Vladimir
			//Vladimir
			//
			//vladimir, kirzhach, gavrilov
            DB::table('counties')->insert([
				'county_name' => 'Vladimir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//vyazniki, yaropolk 
            DB::table('counties')->insert([
				'county_name' => 'Vyazniki',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//nizhny novgorod, gorokhovets, gorodets
            DB::table('counties')->insert([
				'county_name' => 'Nizhny Novgorod',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Moscow
			//
			//moscow, orekhovo, korolyov, danilov
            DB::table('counties')->insert([
				'county_name' => 'Moscow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//dmitrov, sergiyev, dedenyovo
            DB::table('counties')->insert([
				'county_name' => 'Dmitrov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//volokolamsk, lotoshino
            DB::table('counties')->insert([
				'county_name' => 'Volokolamsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//
			//zvenigorod, ruza 
            DB::table('counties')->insert([
				'county_name' => 'Zvenigorod',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Suzdal
			//
			//suzdal, ves
            DB::table('counties')->insert([
				'county_name' => 'Suzdal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//yuryev, kuzmadino
            DB::table('counties')->insert([
				'county_name' => 'Yuryev',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);		
			//
			//starodub, kovrov
            DB::table('counties')->insert([
				'county_name' => 'Starodub',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//Smolensk
			//Smolensk
			//
			//smolensk, monastyrshchina, gnezdovo
            DB::table('counties')->insert([
				'county_name' => 'Smolensk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//roslavl, vyazma
            DB::table('counties')->insert([
				'county_name' => 'Roslavl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//
			//toropets, morsow
            DB::table('counties')->insert([
				'county_name' => 'Toropets',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);				
			//
			//mstivlavl, svyato
            DB::table('counties')->insert([
				'county_name' => 'Mstislavl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);					
			//Rzhev
			//
			//rzhev, eltsy
            DB::table('counties')->insert([
				'county_name' => 'Rzhev',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//zubtsov, gorodok
            DB::table('counties')->insert([
				'county_name' => 'Zubtsov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//Tver
			//
			//tver, kashin, ostakhov, torzhok, klin
            DB::table('counties')->insert([
				'county_name' => 'Tver',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);
			//
			//galich, soligalich, makaryev
            DB::table('counties')->insert([
				'county_name' => 'Galich',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',	
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//kostroma, ipatiev, nerekhta
            DB::table('counties')->insert([
				'county_name' => 'Kostroma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//
			//pereslavl, nikitsky
            DB::table('counties')->insert([
				'county_name' => 'Pereslavl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//rostov, sarsky
            DB::table('counties')->insert([
				'county_name' => 'Rostov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//yaroslavl, uglich, vologda, cherepovets
            DB::table('counties')->insert([
				'county_name' => 'Yaroslavl',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Stud'
            ]);				
			//Novgorod
			//Novgorod
			//
			//novgorod, rusa 
            DB::table('counties')->insert([
				'county_name' => 'Novgorod',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'Fur',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//ladoga, oreshek, keksholm, koporye
            DB::table('counties')->insert([
				'county_name' => 'Ladoga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Polotsk
			//
			//polotsk, rasony
            DB::table('counties')->insert([
				'county_name' => 'Polotsk',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => '',		
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//vitebsk, orsha, gorodok
            DB::table('counties')->insert([
				'county_name' => 'Vitebsk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => '',		
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);				
			//Pleskov			
			//
			//pleskov, opochka, gdov, porkhov, ostrov, izborsk
            DB::table('counties')->insert([
				'county_name' => 'Pleskov',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Pigs'
            ]);	
			//
			//kholm, velikiye luki
            DB::table('counties')->insert([
				'county_name' => 'Kholm',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',		
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Honey',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Pigs'
            ]);			
			//Bulgaria
			//Bulgaria
			//Preslav
			//
			//preslav
            DB::table('counties')->insert([
				'county_name' => 'Preslav',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Bulgaria',		
				'vernacular_culture' => 'Bulgarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Tarnovo
			//
			//tarnovo
            DB::table('counties')->insert([
				'county_name' => 'Tarnovo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Bulgaria',		
				'vernacular_culture' => 'Bulgarian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Wallachia
			//Wallachia
			//
			//targoviste
            DB::table('counties')->insert([
				'county_name' => 'Targoviste',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',	
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',	
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Moldavia
			//
			//suceava
            DB::table('counties')->insert([
				'county_name' => 'Suceava',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',	
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',	
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Serbia
			//Serbia
			//Rashka
			//
			//ras, studenica
            DB::table('counties')->insert([
				'county_name' => 'Rashka',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',		
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',		
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Bosnia
			//Bosnia
			//
			//srebrenik
            DB::table('counties')->insert([
				'county_name' => 'Srebrenik',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',		
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',		
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Cordoba
			//Andalucia
			//Algeciras
			//
			//algeciras
            DB::table('counties')->insert([
				'county_name' => 'Algeciras',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',		
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//gibraltar
            DB::table('counties')->insert([
				'county_name' => 'Gibraltar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//Almeria
			//
			//almeria
            DB::table('counties')->insert([
				'county_name' => 'Almeria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//baza, cullar, caniles, benamaurel, freila
            DB::table('counties')->insert([
				'county_name' => 'Baza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Arcos
			//
			//cadiz, arcos
            DB::table('counties')->insert([
				'county_name' => 'Cadiz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//jerez
            DB::table('counties')->insert([
				'county_name' => 'Jerez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//sanlucar
            DB::table('counties')->insert([
				'county_name' => 'Sanlucar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//Carmona
			//
			//carmona
            DB::table('counties')->insert([
				'county_name' => 'Carmona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//ecija
            DB::table('counties')->insert([
				'county_name' => 'Ecija',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Poultry'
            ]);				
			//Cordoba
			//
			//andujar
            DB::table('counties')->insert([
				'county_name' => 'Andujar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//carpio
            DB::table('counties')->insert([
				'county_name' => 'Carpio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//cordoba
            DB::table('counties')->insert([
				'county_name' => 'Cordoba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//martos
            DB::table('counties')->insert([
				'county_name' => 'Martos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//pedroche
            DB::table('counties')->insert([
				'county_name' => 'Pedroche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Granada
			//
			//orgiva, castaras, juviles, trevelez, valor, portugos, torvizcon
            DB::table('counties')->insert([
				'county_name' => 'Alpujarra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//baeza
            DB::table('counties')->insert([
				'county_name' => 'Baeza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//carolina
            DB::table('counties')->insert([
				'county_name' => 'Carolina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//granada, albolote, alfacar, beas, churriana, cogollos, lachar, peligros
            DB::table('counties')->insert([
				'county_name' => 'Granada',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//guadix
            DB::table('counties')->insert([
				'county_name' => 'Guadix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//jaen, andujar
            DB::table('counties')->insert([
				'county_name' => 'Jaen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//orjiva
            DB::table('counties')->insert([
				'county_name' => 'Lecrin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//motril
            DB::table('counties')->insert([
				'county_name' => 'Motril',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//torvizcon
            DB::table('counties')->insert([
				'county_name' => 'Torvizcon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//ubeda
            DB::table('counties')->insert([
				'county_name' => 'Ubeda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Malaga
			//
			//alhama
            DB::table('counties')->insert([
				'county_name' => 'Alhama',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//antequera
            DB::table('counties')->insert([
				'county_name' => 'Antequerra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//loja
            DB::table('counties')->insert([
				'county_name' => 'Loja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//malaga
            DB::table('counties')->insert([
				'county_name' => 'Malaga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Ronda
			//
			//marbella
            DB::table('counties')->insert([
				'county_name' => 'Marbella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//ronda
            DB::table('counties')->insert([
				'county_name' => 'Ronda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//Sevilla
			//
			//gines, gelves, olivares, pilas, tomares, san isidore
            DB::table('counties')->insert([
				'county_name' => 'Aljarafe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//estepa
            DB::table('counties')->insert([
				'county_name' => 'Estepa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//sevilla, cartuja, utrera
            DB::table('counties')->insert([
				'county_name' => 'Sevilla',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Algarves
			//Algarves
			//
			//faro, tavira, alcoutim, salir
            DB::table('counties')->insert([
				'county_name' => 'Faro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//mertola, serpa, moura, noudar
            DB::table('counties')->insert([
				'county_name' => 'Mertola',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//silves, lagos, alcantarilha, aljezur, alvor, paderne
            DB::table('counties')->insert([
				'county_name' => 'Silves',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Badajoz
			//
			//badajoz, albuquerque, talavera, barbacena, elvas
            DB::table('counties')->insert([
				'county_name' => 'Badajoz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//beja, ourique, vidigueira, messejana, cola, alvito, aljustrel
            DB::table('counties')->insert([
				'county_name' => 'Beja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//evora, alandroal, arraiolos, estremoz, mourao, viana, redondo, portel
            DB::table('counties')->insert([
				'county_name' => 'Evora',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//medellin, guarena
            DB::table('counties')->insert([
				'county_name' => 'Guadiana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//
			//llerena, berlanga, usagre, azuaga
            DB::table('counties')->insert([
				'county_name' => 'Llerena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//merida, zafra, valverde, mirandilla, san servan, alange, calzada, lobon
            DB::table('counties')->insert([
				'county_name' => 'Merida',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//olivenza, nogales, alconchel, higuera
            DB::table('counties')->insert([
				'county_name' => 'Olivenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//
			//portalegre, alegrete, avis, monforte, marvao
            DB::table('counties')->insert([
				'county_name' => 'Portalegre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);	
			//
			//villanueva, castuera
            DB::table('counties')->insert([
				'county_name' => 'Serena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Poultry'
            ]);
			//Huelva
			//
			//aracena, santa eulalia, aroche, cala, cortegana, santa olalla
            DB::table('counties')->insert([
				'county_name' => 'Aracena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//huelva, ayamonte, cartaya
            DB::table('counties')->insert([
				'county_name' => 'Huelva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//niebla, moguer, almonte
            DB::table('counties')->insert([
				'county_name' => 'Niebla',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',						
				'marke_animal_husbandry' => 'Cattle'
            ]);			
			//Levante
			//Alpuente
			//
			//huete, almonacid, guadalajara, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Alcarria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//almarza, buitrago
            DB::table('counties')->insert([
				'county_name' => 'Almarza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//alcala, valverde, pezuela, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Henares',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//medinaceli, arcos, somaen
            DB::table('counties')->insert([
				'county_name' => 'Medinaceli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//molina, ventosa, tortuera
            DB::table('counties')->insert([
				'county_name' => 'Molina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//alpuente, cuenca, atienza, siguenza, bonaval
            DB::table('counties')->insert([
				'county_name' => 'Serrania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Mallorca
			//
			//ibiza
            DB::table('counties')->insert([
				'county_name' => 'Ibiza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//palma
            DB::table('counties')->insert([
				'county_name' => 'Mallorca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//
			//alayor, ciudadela, mahon, mercadal
            DB::table('counties')->insert([
				'county_name' => 'Menorca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);			
			//Denia
			//
			//albacete
            DB::table('counties')->insert([
				'county_name' => 'Albacete',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//alcaraz
            DB::table('counties')->insert([
				'county_name' => 'Alcaraz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//
			//alcira
            DB::table('counties')->insert([
				'county_name' => 'Alcira',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//alcoy
            DB::table('counties')->insert([
				'county_name' => 'Alcoy',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//alicanta
            DB::table('counties')->insert([
				'county_name' => 'Alicante',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//almagro, villa real, san juan, valdepenas
            DB::table('counties')->insert([
				'county_name' => 'Almagro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//chinchilla
            DB::table('counties')->insert([
				'county_name' => 'Chinchilla',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//cofrentes
            DB::table('counties')->insert([
				'county_name' => 'Cofrentes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//
			//denia
            DB::table('counties')->insert([
				'county_name' => 'Denia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//jativa
            DB::table('counties')->insert([
				'county_name' => 'Jativa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//montesa
            DB::table('counties')->insert([
				'county_name' => 'Montesa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Murcia
			//
			//cartagena
            DB::table('counties')->insert([
				'county_name' => 'Cartagena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//cieza
            DB::table('counties')->insert([
				'county_name' => 'Cieza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//hellin
            DB::table('counties')->insert([
				'county_name' => 'Hellin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//lorca
            DB::table('counties')->insert([
				'county_name' => 'Lorca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//
			//murcia
            DB::table('counties')->insert([
				'county_name' => 'Murcia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//orihuella
            DB::table('counties')->insert([
				'county_name' => 'Orihuela',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//segura
            DB::table('counties')->insert([
				'county_name' => 'Segura',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Valencia
			//
			//castellon
            DB::table('counties')->insert([
				'county_name' => 'Castellon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//morella
            DB::table('counties')->insert([
				'county_name' => 'Morella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//peniscola
            DB::table('counties')->insert([
				'county_name' => 'Peniscola',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//san clemente
            DB::table('counties')->insert([
				'county_name' => 'San Clemente',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//valencia
            DB::table('counties')->insert([
				'county_name' => 'Valencia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Andalus',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Almohad
			//Marrakesh
			//Marrakesh
			//
			//marrakesh
            DB::table('counties')->insert([
				'county_name' => 'Marrakesh',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//safi
            DB::table('counties')->insert([
				'county_name' => 'Safi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//mogador
            DB::table('counties')->insert([
				'county_name' => 'Mogador',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Sijilmassa
			//
			//sijilmassa, rissani
            DB::table('counties')->insert([
				'county_name' => 'Tafilalt',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//merzouga, 
            DB::table('counties')->insert([
				'county_name' => 'Merzouga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//erfoud, 
            DB::table('counties')->insert([
				'county_name' => 'Erfoud',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Ouarzazate
			//
			//ouarzazate
            DB::table('counties')->insert([
				'county_name' => 'Ouarzazate',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//zagora
            DB::table('counties')->insert([
				'county_name' => 'Zagora',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//tinghir
            DB::table('counties')->insert([
				'county_name' => 'Tinghir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Fez
			//Fez
			//
			//fez
            DB::table('counties')->insert([
				'county_name' => 'Fez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//meknes
            DB::table('counties')->insert([
				'county_name' => 'Meknes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Rabat
			//
			//rabat, sale, temara
            DB::table('counties')->insert([
				'county_name' => 'Rabat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//mehdya, 
            DB::table('counties')->insert([
				'county_name' => 'Mehdya',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Tangier
			//
			//tangier 
            DB::table('counties')->insert([
				'county_name' => 'Tangier',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//tetouan 
            DB::table('counties')->insert([
				'county_name' => 'Tetouan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//kebir 
            DB::table('counties')->insert([
				'county_name' => 'Kebir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//ouazzane 
            DB::table('counties')->insert([
				'county_name' => 'Ouazzane',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);			
			//Kairouan
			//Kairouan
			//
			//kairouan
            DB::table('counties')->insert([
				'county_name' => 'Kairouan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Tunis
			//
			//tunis
            DB::table('counties')->insert([
				'county_name' => 'Tunis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//bizerte
            DB::table('counties')->insert([
				'county_name' => 'Bizerte',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Djerid
			//
			//gafsa
            DB::table('counties')->insert([
				'county_name' => 'Djerid',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//Tripoli
			//
			//tripoli
            DB::table('counties')->insert([
				'county_name' => 'Tripoli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Sirte
			//
			//sirte
            DB::table('counties')->insert([
				'county_name' => 'Sirte',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Tlemcen
			//Tlemcen
			//
			//tlemcen
            DB::table('counties')->insert([
				'county_name' => 'Tlemcen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Oujda
			//
			//oujda
            DB::table('counties')->insert([
				'county_name' => 'Oujda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Oran
			//
			//oran
            DB::table('counties')->insert([
				'county_name' => 'Oran',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Algiers
			//
			//algiers
            DB::table('counties')->insert([
				'county_name' => 'Algiers',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Tiaret
			//
			//tiaret
            DB::table('counties')->insert([
				'county_name' => 'Tiaret',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Mzab
			//
			//mzab
            DB::table('counties')->insert([
				'county_name' => 'Mzab',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Laghouat
			//
			//laghouat
            DB::table('counties')->insert([
				'county_name' => 'Laghouat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Djelfa
			//
			//djelfa
            DB::table('counties')->insert([
				'county_name' => 'Djelfa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Ifni
			//Ifni
			//
			//ifni
            DB::table('counties')->insert([
				'county_name' => 'Ifni',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Cattle'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Tiznit',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Taroudant
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Taroudant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Agadir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Figuig
			//Figuig
			//
			//figuig
            DB::table('counties')->insert([
				'county_name' => 'Figuig',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Bechar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Moghrar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);	
			//Adrar
			//
			//adrar
            DB::table('counties')->insert([
				'county_name' => 'Tuat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);		
			//
			//timimoun
            DB::table('counties')->insert([
				'county_name' => 'Ademait',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Darija',	
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);				
			//Abbasid
			//Baghdad
			//
			//baghdad
            DB::table('counties')->insert([
				'county_name' => 'Baghdad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Jazira',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Jazira',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Syria
			//Damascus
			//
			//damascus
            DB::table('counties')->insert([
				'county_name' => 'Damascus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Levant',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Jabal
			//
			//aleppo
            DB::table('counties')->insert([
				'county_name' => 'Aleppo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Levant',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Homs
			//
			//homs
            DB::table('counties')->insert([
				'county_name' => 'Homs',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Levant',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',				
				'banal_pressoir' => 'Beverage_Wine',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Najd
			//Najd
			//
			//kharj
            DB::table('counties')->insert([
				'county_name' => 'Kharj',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Najd',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Najd',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Antioch
			//Antioch
			//
			//antioch
            DB::table('counties')->insert([
				'county_name' => 'Antioch',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Fatimid
			//Cairo
			//Cairo
			//
			//cairo
            DB::table('counties')->insert([
				'county_name' => 'Cairo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Stud'
            ]);	
			//Alexandria
			//
			//alexandria
            DB::table('counties')->insert([
				'county_name' => 'Alexandria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Mansoura
			//
			//mansoura
            DB::table('counties')->insert([
				'county_name' => 'Mansoura',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Damietta
			//
			//damietta
            DB::table('counties')->insert([
				'county_name' => 'Damietta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Minya
			//
			//minya
            DB::table('counties')->insert([
				'county_name' => 'Minya',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Asyut
			//
			//asyut
            DB::table('counties')->insert([
				'county_name' => 'Asyut',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',						
				'marke_animal_husbandry' => 'Cattle'
            ]);
			//Kharga
			//
			//kharga, wahat, mahariq, munira, dabadib
            DB::table('counties')->insert([
				'county_name' => 'Kharga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//dakhla, masara
            DB::table('counties')->insert([
				'county_name' => 'Dakhla',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Baritun
			//
			//baritun, negila
            DB::table('counties')->insert([
				'county_name' => 'Baritun',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//siwa, shali, aghurmi
            DB::table('counties')->insert([
				'county_name' => 'Siwa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//nitria, scetis, kellia
            DB::table('counties')->insert([
				'county_name' => 'Natrun',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Boula
			//
			//deir anba, deir mar
            DB::table('counties')->insert([
				'county_name' => 'Boula',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',									
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//
			//qoseir, banat
            DB::table('counties')->insert([
				'county_name' => 'Hammamat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Masri',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Goats'
            ]);
			//Jerusalem
			//Jerusalem
			//
			//jerusalem
            DB::table('counties')->insert([
				'county_name' => 'Jerusalem',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Levant',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Levant',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Hejaz
			//Mecca
			//
			//mecca
            DB::table('counties')->insert([
				'county_name' => 'Mecca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//
			//jeddah, asfan
            DB::table('counties')->insert([
				'county_name' => 'Jeddah',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//
			//taif
            DB::table('counties')->insert([
				'county_name' => 'Taif',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Stud'
            ]);
			//Medina
			//
			//medina
            DB::table('counties')->insert([
				'county_name' => 'Medina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//yanbu
            DB::table('counties')->insert([
				'county_name' => 'Yanbu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//khaybar, tayma
            DB::table('counties')->insert([
				'county_name' => 'Khaybar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',						
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Tabuk
			//
			//tabuk
            DB::table('counties')->insert([
				'county_name' => 'Tabuk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',								
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//aqaba, muan
            DB::table('counties')->insert([
				'county_name' => 'Sharat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//hegra
            DB::table('counties')->insert([
				'county_name' => 'Hegra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',	
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Khazar
			//Khazaria
			//Aqtobe
			//
			//aqtobe
            DB::table('counties')->insert([
				'county_name' => 'Aqtobe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Sarkel
			//
			//sarkel
            DB::table('counties')->insert([
				'county_name' => 'Sarkel',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);			
			//Atil
			//
			//atil
            DB::table('counties')->insert([
				'county_name' => 'Atil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Bolghar
			//
			//bolghar
            DB::table('counties')->insert([
				'county_name' => 'Bolghar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Bilar
			//
			//bilar
            DB::table('counties')->insert([
				'county_name' => 'Bilar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Alania
			//Derbent
			//
			//derbent
            DB::table('counties')->insert([
				'county_name' => 'Derbent',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Azov
			//
			//azov
            DB::table('counties')->insert([
				'county_name' => 'Azov',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Cumania
			//Sighnaq
			//
			//sighnaq
            DB::table('counties')->insert([
				'county_name' => 'Sighnaq',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Sozak
			//
			//sozak
            DB::table('counties')->insert([
				'county_name' => 'Sozak',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',	
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Sibir
			//
			//qashliq
            DB::table('counties')->insert([
				'county_name' => 'Sibir',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'None',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Seljuk
			//Kwarezm
			//Gurganj
			//
			//gurganj
            DB::table('counties')->insert([
				'county_name' => 'Gurganj',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Khiva
			//
			//khiva
            DB::table('counties')->insert([
				'county_name' => 'Khiva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Isfahan
			//Isfahan
			//
			//isfahan
            DB::table('counties')->insert([
				'county_name' => 'Isfahan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);
			//Shiraz
			//
			//shiraz
            DB::table('counties')->insert([
				'county_name' => 'Shiraz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
			//Hormuz
			//Hormuz
			//
			//hormuz
            DB::table('counties')->insert([
				'county_name' => 'Hormuz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//minab
            DB::table('counties')->insert([
				'county_name' => 'Minab',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//bandar
            DB::table('counties')->insert([
				'county_name' => 'Bandar',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//lengeh
            DB::table('counties')->insert([
				'county_name' => 'Lengeh',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Sugarcane',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//Kerman
			//
			//kerman, mahan
            DB::table('counties')->insert([
				'county_name' => 'Kerman',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//bam, rayen
            DB::table('counties')->insert([
				'county_name' => 'Bam',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',						
				'marke_animal_husbandry' => 'Sheep'
            ]);	
			//
			//rafsinjan, bayaz
            DB::table('counties')->insert([
				'county_name' => 'Rafsinjan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Shia',
				'vernacular_cycle' => 'Matter_Persia',	
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'None',				
				'banal_pressoir' => 'Sweetener_Date',				
				'banal_chasse' => 'None',					
				'marke_crops' => 'None',						
				'marke_animal_husbandry' => 'Sheep'
            ]);				
    }
}