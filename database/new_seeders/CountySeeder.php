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
            DB::table('counties')->insert([
				'county_name' => '',				//total = 1346 counties
				'county_category' => '',			//Feudal_Manor (1191), Ecclesiastical_Manor (132), Monastic_Manor (6), Patrician_Manor (17) = 1346
				'de_jure_duchy' => '',
				'vernacular_religion' => '',		//Catholic, Orthodox_Greek, Orthodox_Serbian, Orthodox_Bulgarian, Muslim_Sunni, Muslim_Shia, Pagan
				'vernacular_cycle' => '',			//Matter_High_German, Matter_Low_German, Matter_Lombard, Matter_Venice, Matter_Tuscan, Matter_Rome, Matter_France, Matter_Britain, Matter_Aragon, Matter_Castile, Matter_Portugal, Matter_Norse, Matter_Byzantine, Matter_Sicily, Matter_Napels, Matter_Sardinia, Matter_Georgia, Matter_Armenia, Matter_Bulgaria, Matter_Vlach, Matter_Serbia, Matter_Rus, Matter_Andalus, Matter_Darija, Matter_Ifriqiya, Matter_Masri, Matter_Jazira, Matter_Levant, Matter_Hejaz, Matter_Najd, Matter_Turk, Matter_Persia, Matter_Magyar, Matter_Croat, Matter_Bohemia, Matter_Sorbia, Matter_Baltic, Matter_Polish
				'vernacular_culture' => '',			//Arpitan, Bavarian, Bohemian, Breton, Franconian, Frankish, Frisian, Flemish, Lombard, Occitan, Catalan, Saxon, Silesian, Moravian, Swabian, Livonian, Prussian, Wendish, Irish, English, Welsh, Gaelic, Pictish, Norwegian, Danish, Swedish, Finnish, Navarrese, Aragonese, Castillian, Leonese, Galician, Asturian, Cantabrian, Portuguese, Polish, Lithuanian, Hungarian, Croatian, Greek, Sicilian, Neapolitan, Sardinian, Georgian, Armenian, Bulgarian, Wallachian, Serbian, Russian, Ruthenian, Moorish, Arabic, Turkic, Persian
				'banal_moulin' => '',				//Watermill (121), Windmill (139), Horse_Mill (1097) = 1346
				'banal_pressoir' => '',				//Beverage_Wine (198), Beverage_Cider (82), Beverage_Elder (15), Beverage_Hops (16), Beverage_Gruit (123), Olive_Oil (7), Sweetener_Honey (186), Sweetener_Sugarcane (25), Sweetener_Date (44), None (656) = 1346
				'banal_chasse' => '',				//Falconry (9), Deer (50), Boar (31), Fur (6), None (1250) = 1346
				'marke_crops' => '',				//Perfume_Lavender (58), Perfume_Incense (10), Perfume_Rose (0), Fiber_Flax (57), Fiber_Hemp (16), Fiber_Cotton (15), Fiber_Silk (25), Dye_Saffron (30), Dye_Madder (6), Dye_Woad (38), Dye_Indigo (0), Dye_Kermes (13), None (1081) = 1346
				'marke_horse_transport' => '',		//Charger (308), Palfrey (404), Affer (337), Sumpter (303) = 1346
				'marke_animal_husbandry' => '',		//Cattle (499), Sheep (335), Pigs (356), Goats (156) = 1346
				'marke_poultry' => '',				//Chickens (1193), Ducks (154) = 1346
													//1 migration [500], 2 carolingian [770], 3 ottonian [940], 4 romanesque [980], 5 mercantile [1070], 6 gothic [1130], 7 renaissance [1250], 8 flamboyant [1350], 9 imperial [1420] 		
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
			
			/*
			//Destrier			war			horse
			//Charger			war			horse
			//Courser			war			horse
			//Palfrey			riding		horse
			//Rouncey			riding		horse
			//Hackney			riding		horse
			//Affer				draught		horse
			//Sumpter			pack		horse
			//Donkey_Train		pack		donkey
			//Draught_Oxen		draught		oxen
			//Oxen_Cart			pack		oxen
			//Dog_Cart			pack		dog
			//Camel_Caravan		pack		camel
			//
			//Hunting_Dog		hunting		dog
			//Falcon			hunting		falcon
			//
			//
			*/
			
			//Holy Roman Empire
			//Germany
			//Austria
			//1
			//melk, gottweig, sankt polten
            DB::table('counties')->insert([
				'county_name' => 'Grunsweit',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//2 
			//altenburg, eggenburg, rosenburg, chremis
            DB::table('counties')->insert([
				'county_name' => 'Ostmark',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//3
			//vienna, klosterneuburg, kreuzenstein
            DB::table('counties')->insert([
				'county_name' => 'Vienna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '1',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Bavaria
			//4
			//regensburg, straubing
            DB::table('counties')->insert([
				'county_name' => 'Donaugau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//5
			//bamberg, hallstadt
            DB::table('counties')->insert([
				'county_name' => 'Folkfeld',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//6
			//geisenhausen, veldenstein
            DB::table('counties')->insert([
				'county_name' => 'Isengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//7
			//egerburg, nuremberg, grafengehaig, windsheim
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//8
			//forchheim, staffelstein
            DB::table('counties')->insert([
				'county_name' => 'Radenzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//9
			//passau, erneck, vornbach
            DB::table('counties')->insert([
				'county_name' => 'Rottgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//10
			//vilshofen, furstenstein, saldenburg
            DB::table('counties')->insert([
				'county_name' => 'Schweinachgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//11
			//ingolstadt, neuburg, freising
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '2',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Brabant
			//12
			//brussels, louvain
            DB::table('counties')->insert([
				'county_name' => 'Brabant',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//13
			//hasselt, tongeren, borgloon, kuringen, herkenrode
            DB::table('counties')->insert([
				'county_name' => 'Haspengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//14
			//valenciennes, mons, lobbes, brakel
            DB::table('counties')->insert([
				'county_name' => 'Hennegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//15
			//cambrai, caudry
            DB::table('counties')->insert([
				'county_name' => 'Kamerykgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//16
			//antwerp, breda, tilburg, turnhout, stryen, geldrop, mierlo, heeswick, herlaar, waalwick, besoyen, bosch, orthen, bokhoven, ravenstein
            DB::table('counties')->insert([
				'county_name' => 'Toxandria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//17
			//ghent, axel, hulst, assenede, boekhoute, sluys, gavere
            DB::table('counties')->insert([
				'county_name' => 'Waasgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '3',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Carinthia
			//18
			//hengistburg, sankt nikolai
            DB::table('counties')->insert([
				'county_name' => 'Hengistgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//19
			//judenburg, frauenburg
            DB::table('counties')->insert([
				'county_name' => 'Ingeringtal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//20
			//steinz, graz, seckau
            DB::table('counties')->insert([
				'county_name' => 'Jauntal',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//21
			//karlsberg, klagenfurt, velden, sankt veit, gurk
            DB::table('counties')->insert([
				'county_name' => 'Kroatengau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//22
			//sankt paul, sankt andra
            DB::table('counties')->insert([
				'county_name' => 'Lavanttal',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//23
			//leoben, sankt stefan
            DB::table('counties')->insert([
				'county_name' => 'Leobental',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//24
			//kadour, lienz, villach, millstatt, treffen
            DB::table('counties')->insert([
				'county_name' => 'Lurngau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//25
			//eppenstein, hohenwang
            DB::table('counties')->insert([
				'county_name' => 'Murztal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//26
			//celje, richenburg
            DB::table('counties')->insert([
				'county_name' => 'Sanntal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '4',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Carniola
			//27
			//laibach, zobelsberg, krainburg
            DB::table('counties')->insert([
				'county_name' => 'Krainmark',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '5',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//28
			//tergeste, parenzo, mitterburg, pican, pula
            DB::table('counties')->insert([
				'county_name' => 'Histria',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '5',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Franconia
			//29
			//fulda, hunfeld, mellrichstadt, ebersburg, henneberg, schweinfurt
            DB::table('counties')->insert([
				'county_name' => 'Grabfeld',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//30
			//rotenburg, colmberg, comburg
            DB::table('counties')->insert([
				'county_name' => 'Gollachgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//31
			//kitzingen, gerolshofen
            DB::table('counties')->insert([
				'county_name' => 'Gotzfeld',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//32
			//mosbach, minneburg
            DB::table('counties')->insert([
				'county_name' => 'Jagstgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//33
			//hammelburg, gersfeld
            DB::table('counties')->insert([
				'county_name' => 'Saalgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//34
			//gosheim, kaisersheim
            DB::table('counties')->insert([
				'county_name' => 'Sualafeld',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//35
			//heilbronn, weinsberg, ellhofen, ohringen, hall, hohenstein
            DB::table('counties')->insert([
				'county_name' => 'Sulmgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//36
			//weikersheim, mergentheim
            DB::table('counties')->insert([
				'county_name' => 'Taubergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//37
			//wurzburg, wertheim, waldsassen, nordheim
            DB::table('counties')->insert([
				'county_name' => 'Waldsassengau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '6',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Frisia
			//38
			//oldenburg, rastede, westerstede
            DB::table('counties')->insert([
				'county_name' => 'Ammergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//39
			//aurichove, ihlow, marienhafe
            DB::table('counties')->insert([
				'county_name' => 'Auricherland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//40
			//goes, wissenkerk, hellenburg, renesse
            DB::table('counties')->insert([
				'county_name' => 'Beveland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//41
			//jouwer, haskerhorn, bakkeveen, beets, oudeschoot
            DB::table('counties')->insert([
				'county_name' => 'Bornegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//42
			//coevorden, groningen, ruinen, rolde, wolvega, appelsche, oostwold
            DB::table('counties')->insert([
				'county_name' => 'Drenthe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//43
			//meldorf, hemmingstedt, wohrden
            DB::table('counties')->insert([
				'county_name' => 'Dithmarschen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//44
			//emden, leer
            DB::table('counties')->insert([
				'county_name' => 'Emsigerland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//45
			//appingedam, winschoten, farmsum 
            DB::table('counties')->insert([
				'county_name' => 'Fivelgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//46
			//otterndorf, ritzebuttel 
            DB::table('counties')->insert([
				'county_name' => 'Hadeln',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//47
			//dordrecht, gouda, zuidewyn, ridderkerk, waarderhof
            DB::table('counties')->insert([
				'county_name' => 'Holtland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//48
			//winsum, bedum, selwerd
            DB::table('counties')->insert([
				'county_name' => 'Hunsingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//49
			//haarlem, alkmaar, amsterdam, edam, purmerstein, brederode, egmond, runxputte
            DB::table('counties')->insert([
				'county_name' => 'Kennemerland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//50
			//delft, vlaardingen, rotterdam, holylede, berkel
            DB::table('counties')->insert([
				'county_name' => 'Maasland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//51
			//utrecht, dorestadt, amerongen, zuilenburg, woudenberg, heemstede, nyenrode, vianen, woerden, lockhorst
            DB::table('counties')->insert([
				'county_name' => 'Nifterlake',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//52
			//norden, berum, jever
            DB::table('counties')->insert([
				'county_name' => 'Norderland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//53
			//ostringfeld, reepsholt, kniphausen
            DB::table('counties')->insert([
				'county_name' => 'Ostringen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//54
			//dockum, liowerd, klaarkamp, wytgaard, mariengaard
            DB::table('counties')->insert([
				'county_name' => 'Oostergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//55
			//leithen, wassenaar, cronestein, haag, loosduinen
            DB::table('counties')->insert([
				'county_name' => 'Rhineland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//56
			//nordenham, rodenkirchen, langwarden
            DB::table('counties')->insert([
				'county_name' => 'Rustringen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//57
			//zwolle, kampen, hasselt, waardenborg, hardenberg
            DB::table('counties')->insert([
				'county_name' => 'Salland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//58
			//starum, sloten, hemlum
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//59
			//tiel, buren, arkel, heusden, vianen, loevestein, almkerk, ammersoyen, zaltbommel, gorcum
            DB::table('counties')->insert([
				'county_name' => 'Teisterbant',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//60
			//oldenzaal, enschede, almelo, ottenstein
            DB::table('counties')->insert([
				'county_name' => 'Twente',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//61
			//elburg, harderwick, barnefeld, scherpenzeel, koldenhof, hall, woest hoef
            DB::table('counties')->insert([
				'county_name' => 'Veluwe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//62
			//vollenhove, kuinre, steenwick
            DB::table('counties')->insert([
				'county_name' => 'Vollenhove',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//63
			//flissinghe, serooskerke, middelburg
            DB::table('counties')->insert([
				'county_name' => 'Walcheren',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//64
			//froonacker, bolsward, drylts, hylpen, snits, harns, hoxwier, boksum, lidlum
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//65
			//hoorn, medemblik, enkhuizen
            DB::table('counties')->insert([
				'county_name' => 'Westflinge',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//66
			//sieversham, midlum, bederkesa, diepholt, weddewarden
            DB::table('counties')->insert([
				'county_name' => 'Wursten',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '7',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Frisian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Guelders
			//67
			//guelders, xanten, gennep, walbeck
            DB::table('counties')->insert([
				'county_name' => 'Hettergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//68
			//nymegen, arnhem, doornenburg, batenburg, appeltern, maldericke
            DB::table('counties')->insert([
				'county_name' => 'Betuwe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//69
			//cleves, kranenburg, boetselaer
            DB::table('counties')->insert([
				'county_name' => 'Cleveland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmilll',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//70
			//zutphen, deventer, doetinchem, doesburg, camphuysen, bronkhorst, spaansweerd, lochem, zeddam, wychen
            DB::table('counties')->insert([
				'county_name' => 'Hamaland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//71
			//tegelen, venlo, straelen
            DB::table('counties')->insert([
				'county_name' => 'Mulgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//72
			//duisburg, moers
            DB::table('counties')->insert([
				'county_name' => 'Ruhrgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '8',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Julich
			//73
			//julich, duren, aachen, burtscheid, kornelimunster
            DB::table('counties')->insert([
				'county_name' => 'Julichgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//74
			//kasselburg, gerolstein, kaufungen
            DB::table('counties')->insert([
				'county_name' => 'Eifelgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//75
			//zulpich, hallenburg
            DB::table('counties')->insert([
				'county_name' => 'Zulpichgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '9',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Limburg
			//76
			//limburg, liege, rocourt, herstal
            DB::table('counties')->insert([
				'county_name' => 'Luttichgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//77
			//stavelot, malmedy, wiltz, bouillon
            DB::table('counties')->insert([
				'county_name' => 'Ardennengau',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//78
			//dinant, poilvache, huy, veves
            DB::table('counties')->insert([
				'county_name' => 'Condrustgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//79
			//namur, florennes, gembloux
            DB::table('counties')->insert([
				'county_name' => 'Lommegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//80
			//maastricht, borgharen, valkenburg, thorn, aldeneik, susteren, odilienberg, kessel
            DB::table('counties')->insert([
				'county_name' => 'Maasgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '10',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Lorraine
			//81
			//metz, roncourt, semecourt, gorze
            DB::table('counties')->insert([
				'county_name' => 'Metzgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//82
			//bitche, zweibrucken, homburg
            DB::table('counties')->insert([
				'county_name' => 'Bleisgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//83
			//luneville, epinal, fontenoy, remiremont
            DB::table('counties')->insert([
				'county_name' => 'Chaumontois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//84
			//sarrebourg, saarbrucken, berg, bubingen, thorn
            DB::table('counties')->insert([
				'county_name' => 'Saargau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//85
			//weich, dieuze, salins
            DB::table('counties')->insert([
				'county_name' => 'Salingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//86
			//neufchateau, sandaucourt
            DB::table('counties')->insert([
				'county_name' => 'Soulossois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//87
			//toul, ochey, nancy, clairlieu
            DB::table('counties')->insert([
				'county_name' => 'Toullois',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '11',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Luxembourg
			//88
			//luxembourg, bettembourg
            DB::table('counties')->insert([
				'county_name' => 'Methingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//89
			//barrois, ligny
            DB::table('counties')->insert([
				'county_name' => 'Barrois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//90
			//sedan, mouzon
            DB::table('counties')->insert([
				'county_name' => 'Moselgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//91
			//verdun, recicourt
            DB::table('counties')->insert([
				'county_name' => 'Verdungau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//92
			//longwy, arlon, thionville, chiny, clairefontaine
            DB::table('counties')->insert([
				'county_name' => 'Wavergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '12',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Saxony
			//93
			//luneburg, bardowick, emmendorf, uelzen
            DB::table('counties')->insert([
				'county_name' => 'Bardengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//94
			//brunswick, hebesheim, haldensleben, supplinburg, riddagshausen
            DB::table('counties')->insert([
				'county_name' => 'Derlingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//95
			//hildesheim, poppenburg, marienrode
            DB::table('counties')->insert([
				'county_name' => 'Eastfalagau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//96
			//celle, hanover
            DB::table('counties')->insert([
				'county_name' => 'Gretingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//97
			//gandersheim, westerhof, willershausen, lamspringe
            DB::table('counties')->insert([
				'county_name' => 'Gudingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//98
			//duderstadt, pohlde
            DB::table('counties')->insert([
				'county_name' => 'Harzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//99
			//goslar, harzburg, osterode, harlingerode, lichtenstein, herzberg, walkenried, grauhof, woltingerode, zorge, hohoffenberg, langelsheim
            DB::table('counties')->insert([
				'county_name' => 'Wenzengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '13',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Styria
			//100
			//linz, wels, styraburg, kremsmunster, lambach
            DB::table('counties')->insert([
				'county_name' => 'Traungau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//101
			//sankt george, sankt margarethen, moosham, hochosterwitz
            DB::table('counties')->insert([
				'county_name' => 'Attergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//102
			//innsbruck, kufstein, admont, muhlau, stams, pfaffenhof, oberhof
            DB::table('counties')->insert([
				'county_name' => 'Ennstal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//103
			//mattighofen, fraunhofen
            DB::table('counties')->insert([
				'county_name' => 'Mattiggau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//104
			//brixen, bolzano, merano, tirol, reifenstein
            DB::table('counties')->insert([
				'county_name' => 'Norital',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//105
			//sankt moritz, schlandersberg
            DB::table('counties')->insert([
				'county_name' => 'Vinschgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '14',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Swabia
			//106
			//ortenberg, offenburg, gengenbach, schuttern, baden
            DB::table('counties')->insert([
				'county_name' => 'Ortengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//107
			//kempten, sulzberg, wagegg, finkelsburg, rettenberg, sankt ulrich
            DB::table('counties')->insert([
				'county_name' => 'Albegau',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//108
			//augsburg, wettenhausen, wittelsbach, memmingen, buxheim
            DB::table('counties')->insert([
				'county_name' => 'Augstgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//109
			//freiburg, zahringen, roggenburg, muttenz, wartenberg, basel, rotteln, staufen
            DB::table('counties')->insert([
				'county_name' => 'Breisgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//110
			//chur, disentis, feldkirchen, bludenz, sankt george, sonnenberg
            DB::table('counties')->insert([
				'county_name' => 'Churgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//111
			//singen, verenahof
            DB::table('counties')->insert([
				'county_name' => 'Hegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//112
			//ravensburg, weingarten, salem, baindt
            DB::table('counties')->insert([
				'county_name' => 'Linzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//113
			//greifenstein, tubingen, reutlingen, rottenburg
            DB::table('counties')->insert([
				'county_name' => 'Neckargau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//114
			//strassburg, hohenburg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//115
			//nordlingen, ellwangen
            DB::table('counties')->insert([
				'county_name' => 'Riesgau',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//116
			//hohenzollern, falkenstein, ulm, hohenstaufen, biberach, buchau, gutenzell, marchtal
            DB::table('counties')->insert([
				'county_name' => 'Schwerzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//117
			//einsiedeln, lenzburg
            DB::table('counties')->insert([
				'county_name' => 'Schwyzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//118
			//mulhausen, kolmar, murbach, lichtenberg
            DB::table('counties')->insert([
				'county_name' => 'Sundgau',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//119
			//konstanz, sankt gall, lindau, kirchberg, kreuzlingen, reichenau, engelberg, toggenburg
            DB::table('counties')->insert([
				'county_name' => 'Turgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//120
			//zurich, winterthur, kyburg
            DB::table('counties')->insert([
				'county_name' => 'Zurichgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '15',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Thuringia
			//121
			//erfurt, weimar, schmalkalden, wachsenburg, eisenach, wartburg
            DB::table('counties')->insert([
				'county_name' => 'Thuringgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//122
			//gruessen, runneburg
            DB::table('counties')->insert([
				'county_name' => 'Altgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//123
			//muhlhausen, anrode
            DB::table('counties')->insert([
				'county_name' => 'Eichsfeld',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//124
			//nordhausen, ebersburg
            DB::table('counties')->insert([
				'county_name' => 'Helmegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//125
			//arnstadt, liebenstein
            DB::table('counties')->insert([
				'county_name' => 'Langwitzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//126
			//sondershausen, frankenhausen
            DB::table('counties')->insert([
				'county_name' => 'Nabelgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//127
			//rudolstadt, greifenstein, saalfeld, leutenberg
            DB::table('counties')->insert([
				'county_name' => 'Orlagau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//128
			//naumburg, altenburg, moritzburg, gera, ronneburg
            DB::table('counties')->insert([
				'county_name' => 'Ostergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//129
			//zwickau, plauen, schwarzenberg, erlahammer
            DB::table('counties')->insert([
				'county_name' => 'Zwickaugau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '16',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Bremen
			//130
			//bremen, delmenhorst, hoya
            DB::table('counties')->insert([
				'county_name' => 'Largau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//131
			//meppen, lingen, papenburg
            DB::table('counties')->insert([
				'county_name' => 'Agradingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//132
			//arnsberg, soest, warstein, wedinghausen, marsfelde, herdringen, furstenberg
            DB::table('counties')->insert([
				'county_name' => 'Angerngau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//133
			//corvey, hoxter, amelungsborn, holzminden, everstein
            DB::table('counties')->insert([
				'county_name' => 'Augau',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//134
			//buckeburg, schaumburg, hamelin 
            DB::table('counties')->insert([
				'county_name' => 'Bukkigau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//135
			//bentheim, dinkelrode, marienrode, wietmarschen, salzbergen, elbergen
            DB::table('counties')->insert([
				'county_name' => 'Bursibant',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//136
			//minden, petershagen, schlusselburg, hausberge, rahden, reineburg
            DB::table('counties')->insert([
				'county_name' => 'Dervegau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//137
			//lippstadt, greven, lunen, nienburg
            DB::table('counties')->insert([
				'county_name' => 'Dreingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//138
			//osnabruck, yburg, marienfeld
            DB::table('counties')->insert([
				'county_name' => 'Gronegau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//139
			//tecklenburg, scapheim, cloppenburg, krapendorf
            DB::table('counties')->insert([
				'county_name' => 'Hasegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//140
			//stade, horneburg, harburg
            DB::table('counties')->insert([
				'county_name' => 'Heilangau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//141
			//niemunster, rendsburg, reinfeld
            DB::table('counties')->insert([
				'county_name' => 'Holsteingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//142
			//gottingen, leineberg 
            DB::table('counties')->insert([
				'county_name' => 'Leinegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//143
			//buxtehude, jesteburg
            DB::table('counties')->insert([
				'county_name' => 'Mosidegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//144
			//paderborn, salzkotten, wewer, hardehausen, warburg
            DB::table('counties')->insert([
				'county_name' => 'Padergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//145
			//ludinghausen, asbeck, coesfeld, darfeld, appelhulsen
            DB::table('counties')->insert([
				'county_name' => 'Stevergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//146
			//hamburg, ahrensburg, neuenfelde
            DB::table('counties')->insert([
				'county_name' => 'Stormarngau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//147
			//verden, rotenburg
            DB::table('counties')->insert([
				'county_name' => 'Sturmigau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//148
			//munster, warendorf, gelsenkirchen,asbeck
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//149
			//ravensberg, sparrenberg, limberg, herford
            DB::table('counties')->insert([
				'county_name' => 'Werregau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//150
			//hagen, attendorn, dortmund, hamm, essen, werden
            DB::table('counties')->insert([
				'county_name' => 'Westfaliagau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '17',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Cologne
			//151
			//cologne, friesheim, rondorf, palmersdorf, junkersdorf, burbach, pesch
            DB::table('counties')->insert([
				'county_name' => 'Gillgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//152
			//siegburg, rennenburg, blankenberg
            DB::table('counties')->insert([
				'county_name' => 'Auelgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//153
			//bonn, remagen
            DB::table('counties')->insert([
				'county_name' => 'Bonngau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//154
			//deutz, altenberg 
            DB::table('counties')->insert([
				'county_name' => 'Deutzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '18',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Magdeburg
			//155
			//magdeburg, haldesleben, oschersleben, unseburg, calbe, mammendorf
            DB::table('counties')->insert([
				'county_name' => 'Nordthuringgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//156
			//stendal, osterburg
            DB::table('counties')->insert([
				'county_name' => 'Balsamgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//157
			//erdeborn, alberstedt
            DB::table('counties')->insert([
				'county_name' => 'Friesenfeld',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//158
			//halberstadt, quedlinburg, gernrode
            DB::table('counties')->insert([
				'county_name' => 'Hartingau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//159
			//merseburg, halle, wettin
            DB::table('counties')->insert([
				'county_name' => 'Hassegau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//160
			//seehausen, salzwedel
            DB::table('counties')->insert([
				'county_name' => 'Osterwalde',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//161
			//bernburg, nienburg, ascherleben, hadmersleben, ballenstedt
            DB::table('counties')->insert([
				'county_name' => 'Schwabengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '19',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Saxon',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Mainz
			//162
			//mainz, worms, oppenheim, lorsch, eibingen, alzey
            DB::table('counties')->insert([
				'county_name' => 'Wormsfeld',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//163
			//hammerstein, logenstein
            DB::table('counties')->insert([
				'county_name' => 'Engersgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//164
			//kassel, staufenberg, hersfeld, fritzlar, friedelshausen
            DB::table('counties')->insert([
				'county_name' => 'Hessengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//165
			//limburg, marburg, weilburg, wetzlar, lahneck
            DB::table('counties')->insert([
				'county_name' => 'Lahngau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//166
			//mannheim, heidelberg, bruchhausen, grenzhof, schonau
            DB::table('counties')->insert([
				'county_name' => 'Lobdengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//167
			//aschaffenburg, seligenstadt
            DB::table('counties')->insert([
				'county_name' => 'Maingau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//168
			//ingelheim, spiesheim, saulheim, flonheim
            DB::table('counties')->insert([
				'county_name' => 'Nahegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//169
			//nidda, warnsberg
            DB::table('counties')->insert([
				'county_name' => 'Niddagau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//170
			//speyer, dudenhofen, wissembourg, klingenmunster
            DB::table('counties')->insert([
				'county_name' => 'Speyergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//171
			//sankt leon, bretzenheim
            DB::table('counties')->insert([
				'county_name' => 'Ufgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//172
			//frankfurt, homburg, kransberg, falkenstein, massenheim
            DB::table('counties')->insert([
				'county_name' => 'Wettergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//173
			//pforzheim, liebeneck
            DB::table('counties')->insert([
				'county_name' => 'Wurmgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '20',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Salzburg
			//174
			//salzburg, berchtesgaden
            DB::table('counties')->insert([
				'county_name' => 'Salzburggau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'				
            ]);
			//175
			//falkenstein, traunstein, baumburg, rosenheim, chiemsee
            DB::table('counties')->insert([
				'county_name' => 'Chiemgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//176
			//tamswick, sankt michael
            DB::table('counties')->insert([
				'county_name' => 'Lungau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//177
			//zell, saalfelden
            DB::table('counties')->insert([
				'county_name' => 'Pinzgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//178
			//tegernsee, ebertshausen, munich, staffelsee
            DB::table('counties')->insert([
				'county_name' => 'Sundergau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '21',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Bavarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Trier
			//179
			//bitburg, trier, prum, gerolstein, echternach, vianden, trittenheim
            DB::table('counties')->insert([
				'county_name' => 'Bitgau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//180
			//eltz, andernach, salm
            DB::table('counties')->insert([
				'county_name' => 'Maifeld',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//181
			//ravengiersburg, ehrenburg
            DB::table('counties')->insert([
				'county_name' => 'Hunsruckgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//182
			//treis, koblenz
            DB::table('counties')->insert([
				'county_name' => 'Trechirgau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '22',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Franconian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Lombardy
			//Milano
			//183
			//milano, monza, lecco, garegnano, morimondo, piona, como, torba, san giuliano, chiaravalle, san arialdo, marcallo, santa brera
            DB::table('counties')->insert([
				'county_name' => 'Milano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//184
			//bergamo, san pietro, stezzano, treviolo, mozzo, astino
            DB::table('counties')->insert([
				'county_name' => 'Bergamo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//185
			//brescia, rovato, polpenazze, bedizzole, san giorgo
            DB::table('counties')->insert([
				'county_name' => 'Brescia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//186
			//crema, vaiano, bagnolo, trescore
            DB::table('counties')->insert([
				'county_name' => 'Crema',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//187
			//cremona, caorso
            DB::table('counties')->insert([
				'county_name' => 'Cremona',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//188
			//pavullo, monterastello, montecuccolo
            DB::table('counties')->insert([
				'county_name' => 'Frignana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//189
			//lodi, cerreto
            DB::table('counties')->insert([
				'county_name' => 'Lodi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//190
			//mantua, polirone, levata, pietola, cavriana, gonzaga
            DB::table('counties')->insert([
				'county_name' => 'Mantua',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//191
			//modena, mirandola, vignola, nonantola
            DB::table('counties')->insert([
				'county_name' => 'Modena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//192
			//novara, chiavenna
            DB::table('counties')->insert([
				'county_name' => 'Novara',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//193
			//parma, fidenza, colorno, sanguigna, san vitale, castrignano, bardi
            DB::table('counties')->insert([
				'county_name' => 'Parma',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//194
			//pavia, certosa, san martino, carpignano
            DB::table('counties')->insert([
				'county_name' => 'Pavia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//195
			//piacenza, grazzano, bobbio
            DB::table('counties')->insert([
				'county_name' => 'Piacenza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//196
			//reggio, bagnolo, fogliano, canossa
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//197
			//tortona, montegioco, garbagna
            DB::table('counties')->insert([
				'county_name' => 'Tortona',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//198
			//vernio, montepiano
            DB::table('counties')->insert([
				'county_name' => 'Vernio',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Piedmont
			//199
			//alba, monforte, diano
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//200
			//asti, burio, loreto
            DB::table('counties')->insert([
				'county_name' => 'Asti',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//201
			//valloriate, san dalmazzo
            DB::table('counties')->insert([
				'county_name' => 'Auriate',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//202
			//canavese, ivrea
            DB::table('counties')->insert([
				'county_name' => 'Canavese',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//203
			//casale, san giorgo, san nazzaro
            DB::table('counties')->insert([
				'county_name' => 'Casale',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//204
			//cuneo, saluzzo, castellaro, staffarda
            DB::table('counties')->insert([
				'county_name' => 'Cuneo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//205
			//alessandria, acqui
            DB::table('counties')->insert([
				'county_name' => 'Montferrat',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '23',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//206
			//pragelato, pinerolo, exilles
            DB::table('counties')->insert([
				'county_name' => 'Pragelato',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//207
			//susa, novalesa
            DB::table('counties')->insert([
				'county_name' => 'Susa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//208
			//turino, moncalieri, chieri, rivoli
            DB::table('counties')->insert([
				'county_name' => 'Turino',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//209
			//vercelli, salasco, quinto
            DB::table('counties')->insert([
				'county_name' => 'Vercelli',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//210
			//vigevano, lomello, robbio
            DB::table('counties')->insert([
				'county_name' => 'Vigevano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '24',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Tuscany
			//211
			//siena, monteriggioni, san galgano, corsignano, monte oliveto, gaiole, castellina, cuna, frosini, san salvatore, santa anna, san pietro
            DB::table('counties')->insert([
				'county_name' => 'Siena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//212
			//grosseto, orbetello, manciano, grancia
            DB::table('counties')->insert([
				'county_name' => 'Grosseto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//213
			//piombino, massa, bracciano
            DB::table('counties')->insert([
				'county_name' => 'Piombino',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//214
			//sovana, sorano, pitigliano, fregiano
            DB::table('counties')->insert([
				'county_name' => 'Sovana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '25',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Verona
			//215
			//verona, bovolone, bonavigo, bussolengo, legnago, san bonifacio, san martino
            DB::table('counties')->insert([
				'county_name' => 'Verona',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//216
			//padova, masera, vigonza, praglia, este, monselice, solesino
            DB::table('counties')->insert([
				'county_name' => 'Padova',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//217
			//rovigo, vangadizza, adria, loreo, lendinara
            DB::table('counties')->insert([
				'county_name' => 'Rovigo',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//218
			//vicenza, montecchio, bassano, valdagno, san valentino
            DB::table('counties')->insert([
				'county_name' => 'Vicenza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//219
			//trent, appenzell, rofreit
            DB::table('counties')->insert([
				'county_name' => 'Trent',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '26',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Aquileia
			//220
			//aquileia, udine, tarcento, monfalcone
            DB::table('counties')->insert([
				'county_name' => 'Friuli',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//221
			//gorizia, gradisca
            DB::table('counties')->insert([
				'county_name' => 'Gorizia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//222
			//pordenone, san vito, aviano, polcenigo
            DB::table('counties')->insert([
				'county_name' => 'Pordenone',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '27',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Florence
			//223
			//florence, bagno, san gimignano, marcialla, maiano, frantoio
            DB::table('counties')->insert([
				'county_name' => 'Florence',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//224
			//arezzo, montevarchi, focognano, san nicolo, camaldoli, montisi, san silvestro
            DB::table('counties')->insert([
				'county_name' => 'Arezzo',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//225
			//cortona, castello
            DB::table('counties')->insert([
				'county_name' => 'Cortona',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//226
			//perugia, assisi, foligno, gubbio
            DB::table('counties')->insert([
				'county_name' => 'Perugia',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//227
			//prato, filettole, montemurlo, san clemente
            DB::table('counties')->insert([
				'county_name' => 'Prato',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '28',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Genoa
			//228
			//genoa, arenzano, mignanego, chiavari, canellona
            DB::table('counties')->insert([
				'county_name' => 'Genoa',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//229
			//luni, pontremoli, bagnone, porto venere, volpiglione, castelpoggio
            DB::table('counties')->insert([
				'county_name' => 'Lunigiana',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//230
			//massa, carrara
            DB::table('counties')->insert([
				'county_name' => 'Massa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '29',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Noli
			//231
			//noli, savona, vado, albissola, varazze
            DB::table('counties')->insert([
				'county_name' => 'Noli',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//232
			//albenga, san fedele, lusignano
            DB::table('counties')->insert([
				'county_name' => 'Albenga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//233
			//finale, verezzi
            DB::table('counties')->insert([
				'county_name' => 'Finale',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '30',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Oneglia
			//234
			//oneglia, loano
            DB::table('counties')->insert([
				'county_name' => 'Oneglia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//235
			//monaco, menton, roquebrune
            DB::table('counties')->insert([
				'county_name' => 'Monaco',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//236
			//ventimiglia, dolceaqua
            DB::table('counties')->insert([
				'county_name' => 'Ventimiglia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '31',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Lucca
			//237
			//lucca, barga
            DB::table('counties')->insert([
				'county_name' => 'Lucca',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '32',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//238
			//pistoia, pescia, agliana, uzzano
            DB::table('counties')->insert([
				'county_name' => 'Pistoia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '32',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Pisa
			//239
			//pisa, cascina, zambra, castelfranco, san giuliano, pontedera, vecchiano 
            DB::table('counties')->insert([
				'county_name' => 'Pisa',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//240
			//corte, alando, aleria, ajaccio, morosaglia
            DB::table('counties')->insert([
				'county_name' => 'Corsica',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//241
			//livorno, sassetta, san vincenzo 
            DB::table('counties')->insert([
				'county_name' => 'Livorno',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//242
			//riparbella, cecina, bibbona, castellina
            DB::table('counties')->insert([
				'county_name' => 'Riparbella',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//243
			//volterra, chianni, monteverdi, saline
            DB::table('counties')->insert([
				'county_name' => 'Volterra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '33',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Tuscan',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Venice
			//244
			//venice, chioggia, torcello, san donato, portogruaro, spinea, martellago, san ilario, mirano, salzano, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Dogado',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//245
			//belluno, feltre, sedico, alpago, san giustina
            DB::table('counties')->insert([
				'county_name' => 'Belluno',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//246
			//treviso, mogliano, conegliano, castelfranco, biancade, musestre, oderzo
            DB::table('counties')->insert([
				'county_name' => 'Treviso',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '34',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Venice',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Bohemia
			//Bohemia
			//247
			//prague, kaurim, siebenlinden
            DB::table('counties')->insert([
				'county_name' => 'Prague',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//248
			//bechin, tabor
            DB::table('counties')->insert([
				'county_name' => 'Bechin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//249
			//bunzlau, reichenberg, waldstein, pernstein, pardubitz
            DB::table('counties')->insert([
				'county_name' => 'Bunzlau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//250
			//elbogen, karlsbad
            DB::table('counties')->insert([
				'county_name' => 'Elbogen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//251
			//glatz, wunschelburg, kunzendorf
            DB::table('counties')->insert([
				'county_name' => 'Glatzerland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//252
			//koniggratz, nachod, braunau, welisch, podiebrad, sadowa, lichtenburg
            DB::table('counties')->insert([
				'county_name' => 'Koniggratz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//253
			//leitmeritz, aussig
            DB::table('counties')->insert([
				'county_name' => 'Leitmeritz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//254
			//pilsen, kladrau, tepl, klattau, taus, tachau
            DB::table('counties')->insert([
				'county_name' => 'Pilsen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//255
			//rakonitz, purglitz
            DB::table('counties')->insert([
				'county_name' => 'Rakonitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//256
			//schlan, brandeis, kladen
            DB::table('counties')->insert([
				'county_name' => 'Schlan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//257
			//saaz, komotau, laun, plass
            DB::table('counties')->insert([
				'county_name' => 'Saaz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//258
			//tschaslau, kuttenberg, sedlec, kladrub
            DB::table('counties')->insert([
				'county_name' => 'Tschaslawsko',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '35',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Bohemian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Lusatia
			//259
			//meissen, seusslitz, grossenhain
            DB::table('counties')->insert([
				'county_name' => 'Meissengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//260
			//hoyerswerda, bautzen
            DB::table('counties')->insert([
				'county_name' => 'Milzenigau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//261
			//dohna, dresden, briesnitz, leipzig
            DB::table('counties')->insert([
				'county_name' => 'Nisangau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//262
			//spremberg, senftenberg, lebusa
            DB::table('counties')->insert([
				'county_name' => 'Lusizigau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//263
			//lubben, lieberose
            DB::table('counties')->insert([
				'county_name' => 'Selpuligau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '36',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Moravia
			//264
			//brunn, pernstein, austerlitz, goding, lodenitz
            DB::table('counties')->insert([
				'county_name' => 'Brunn',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//265
			//iglau, pilgrams
            DB::table('counties')->insert([
				'county_name' => 'Iglau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//266
			//olmutz, prossnitz, sternberg, hradisch
            DB::table('counties')->insert([
				'county_name' => 'Olmutz',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//267
			//prerau, weisskirchen, leipnik, kremsier
            DB::table('counties')->insert([
				'county_name' => 'Prerau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//268
			//velingrad, zlin
            DB::table('counties')->insert([
				'county_name' => 'Velingrad',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//269
			//znaim, kralitz
            DB::table('counties')->insert([
				'county_name' => 'Znaim',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '37',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Bohemia',
				'vernacular_culture' => 'Moravian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Lower Silesia
			//270
			//jauer, grussau, bolkenhain
            DB::table('counties')->insert([
				'county_name' => 'Jauer',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//271
			//glogau, hermsdorf
            DB::table('counties')->insert([
				'county_name' => 'Glogau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//272
			//leubus, wolau, buckow, muncheberg
            DB::table('counties')->insert([
				'county_name' => 'Leubus',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//273
			//liegnitz, hoyn, parchwitz, arnsdorf
            DB::table('counties')->insert([
				'county_name' => 'Liegnitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//274
			//oels, wartenberg, ferstenberg, bernstadt
            DB::table('counties')->insert([
				'county_name' => 'Oels',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//275
			//schweidnitz, striegau, schmiedeberg, hirschberg 
            DB::table('counties')->insert([
				'county_name' => 'Schweidnitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '38',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Upper Silesia
			//276
			//oppeln, krappitz
            DB::table('counties')->insert([
				'county_name' => 'Oppeln',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//277
			//breslau, waldenburg, freiburg, frohlichdorf 
            DB::table('counties')->insert([
				'county_name' => 'Breslau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//278
			//brieg, grottkau, lowen
            DB::table('counties')->insert([
				'county_name' => 'Brieg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Windmilll',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//279
			//ratibor, pless, beuthen
            DB::table('counties')->insert([
				'county_name' => 'Ratibor',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//280
			//teschen, golleschau, ustron
            DB::table('counties')->insert([
				'county_name' => 'Teschen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//281
			//troppau, lischwitz, jagerndorf
            DB::table('counties')->insert([
				'county_name' => 'Troppau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '39',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sorbia',
				'vernacular_culture' => 'Silesian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Burgundy
			//Burgundy
			//282
			//vezelay, bazoches
            DB::table('counties')->insert([
				'county_name' => 'Avalois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//283
			//autun, saint loup, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Autunais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//284
			//auxerre, saint maurice
            DB::table('counties')->insert([
				'county_name' => 'Auxerrois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//285
			//saint reine, chatellenot, chateauneuf, commarin, fontette, montbard, avallon, saulieu
            DB::table('counties')->insert([
				'county_name' => 'Auxois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//286
			//beaujeu, quincie, saint nizier, sou, arnas
            DB::table('counties')->insert([
				'county_name' => 'Beaujolais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//287
			//citeaux, savigny, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Beaunois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//288
			//chalon, saint germain
            DB::table('counties')->insert([
				'county_name' => 'Chalonais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//289
			//chatillon, molesme, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Lassois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//290
			//macon, cluny, charolles, clayette, semur
            DB::table('counties')->insert([
				'county_name' => 'Maconnais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//291
			//nevers, marais
            DB::table('counties')->insert([
				'county_name' => 'Nivernais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//292
			//tonerre, quincy
            DB::table('counties')->insert([
				'county_name' => 'Tonerrois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '40',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Cisjurania
			//293
			//grenoble, voiron, chartreuse, bayard
            DB::table('counties')->insert([
				'county_name' => 'Dauphine',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//294
			//albon, mantaille
            DB::table('counties')->insert([
				'county_name' => 'Albon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//295
			//billieme, saint ouen
            DB::table('counties')->insert([
				'county_name' => 'Belinois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//296
			//embrun, risoul
            DB::table('counties')->insert([
				'county_name' => 'Embrunnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//297
			//forcalquier, gap, apt, sisteron
            DB::table('counties')->insert([
				'county_name' => 'Forcalquier',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//298
			//lyon, irigny, seyssuel, givors, savigny
            DB::table('counties')->insert([
				'county_name' => 'Lyonnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//299
			//briancon, clavieres
            DB::table('counties')->insert([
				'county_name' => 'Mauronais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//300
			//valence, montelier, saint marcel, montmeyran
            DB::table('counties')->insert([
				'county_name' => 'Valentinois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//301
			//vienne, chonas, ampuis
            DB::table('counties')->insert([
				'county_name' => 'Viennois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '41',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Transjurania
			//302
			//besancon, dole
            DB::table('counties')->insert([
				'county_name' => 'Amosenais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//303
			//habsburg, aarau, bern, lucerne, muri, wettingen, neuenhof, lucelle, sankt urban, arwangen, langenstein
            DB::table('counties')->insert([
				'county_name' => 'Aargau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_High_German',
				'vernacular_culture' => 'Swabian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//304
			//solothurn, saint denis
            DB::table('counties')->insert([
				'county_name' => 'Bargenais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//305
			//lausanne, orbe, payerne, avenches
            DB::table('counties')->insert([
				'county_name' => 'Lausonnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//306
			//vesoul, luxieul
            DB::table('counties')->insert([
				'county_name' => 'Portenais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//307
			//neuchatel, yverdon, morges, sankt roman, envi, motheron, pailly, peney, hautcret
            DB::table('counties')->insert([
				'county_name' => 'Vaudenais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '42',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Orange
			//308
			//orange, caderousse, puegoulen 
            DB::table('counties')->insert([
				'county_name' => 'Orange',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//309
			//venasque, avignon, carpentras, cavaillon, sorgue, saint remy
            DB::table('counties')->insert([
				'county_name' => 'Venaissin',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//310
			//viviers, saint andeol, aigeuze, saint martin, saint just, nyons, montelimar, vaison
            DB::table('counties')->insert([
				'county_name' => 'Vivarais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '43',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Provence
			//311
			//aix, salon
            DB::table('counties')->insert([
				'county_name' => 'Provence',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//312
			//arles, montmajour, tarascon
            DB::table('counties')->insert([
				'county_name' => 'Arles',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//313
			//baux, mouries, riez, senez, digne
            DB::table('counties')->insert([
				'county_name' => 'Baux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//314
			//marseille, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Marseille',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//315
			//nice, villefranche, escarene, guillaumes, saint etienne, vence, glandeves, grasse, frejus
            DB::table('counties')->insert([
				'county_name' => 'Nice',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//316
			//toulon, ollioules, ollieres
            DB::table('counties')->insert([
				'county_name' => 'Toulon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '44',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Savoy
			//317
			//chambery, aix le bains
            DB::table('counties')->insert([
				'county_name' => 'Savoia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//318
			//aosta, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Aosta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//319
			//thonon, bons, chablis, saint cosme
            DB::table('counties')->insert([
				'county_name' => 'Chablais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//320
			//geneva, annecy
            DB::table('counties')->insert([
				'county_name' => 'Genevanais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//321
			//moutiers, montagny
            DB::table('counties')->insert([
				'county_name' => 'Tarantais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//322
			//sion, martigny, raron
            DB::table('counties')->insert([
				'county_name' => 'Valais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '45',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Arpitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Papal States
			//Rome
			//323
			//rome, nettuno, tivoli, civitavecchia, velletri, montecelio, subiaco
            DB::table('counties')->insert([
				'county_name' => 'Rome',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//324
			//frosinone, cassino, alatri, sora, ceccano, anagni, ferentino, veroli
            DB::table('counties')->insert([
				'county_name' => 'Frosinone',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//325
			//terracina, fondi, castellone, gaeta
            DB::table('counties')->insert([
				'county_name' => 'Latina',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//326
			//rieti, farfa, corvaro
            DB::table('counties')->insert([
				'county_name' => 'Rieti',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//327
			//viterbo, castellana, toscanella, corneto, vetralla
            DB::table('counties')->insert([
				'county_name' => 'Viterbo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '46',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Romagna
			//328
			//ferrara, cento, comacchio, argenta, copparo
            DB::table('counties')->insert([
				'county_name' => 'Ferrara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//329
			//bologna, forli, faenza, imola, molinella, san pietro, san giovanni, monterenzio
            DB::table('counties')->insert([
				'county_name' => 'Bologna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//330
			//carpegna, rimini, verucchio, coriano
            DB::table('counties')->insert([
				'county_name' => 'Carpegna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//331
			//ravenna, lugo, cervia, bagnacavallo, massa, conselice
            DB::table('counties')->insert([
				'county_name' => 'Ravenna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '47',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Lombard',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Spoleto
			//332
			//ancona, senigallia
            DB::table('counties')->insert([
				'county_name' => 'Ancona',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//333
			//chieti, ortona, vasto, lanciano, san vito, san giovanni
            DB::table('counties')->insert([
				'county_name' => 'Chieti',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//334
			//fermo, camerino, macerata
            DB::table('counties')->insert([
				'county_name' => 'Fermo',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//335
			//pescara, montesilvano, san angelo
            DB::table('counties')->insert([
				'county_name' => 'Pescara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//336
			//spoleto, aquila
            DB::table('counties')->insert([
				'county_name' => 'Spoleto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '48',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Urbino
			//337
			//urbino, montebello, cavallino, fermignano
            DB::table('counties')->insert([
				'county_name' => 'Urbino',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '49',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//338
			//pesaro, fano, mondolfo
            DB::table('counties')->insert([
				'county_name' => 'Pesaro',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '49',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Rome',
				'vernacular_culture' => 'Lombard',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Teutonic Order State
			//Livonia
			//339
			//riga, lennewarden, kirchholm, dunamunde, geisthof, kramershof
            DB::table('counties')->insert([
				'county_name' => 'Livland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//340
			//ascheraden, kokenhusen
            DB::table('counties')->insert([
				'county_name' => 'Ascheraden',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//341
			//dorpat, talkhof, wendau, kolk, brigitten, lovecotte 
            DB::table('counties')->insert([
				'county_name' => 'Dorpat',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//342
			//dunaburg, selburg, dubena
            DB::table('counties')->insert([
				'county_name' => 'Dunaburg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//343
			//fellin, karkus, tarwast, paistel
            DB::table('counties')->insert([
				'county_name' => 'Fellin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//344
			//goldingen, talsen, frauenburg, sackenhausen, windau, kormalen
            DB::table('counties')->insert([
				'county_name' => 'Kurland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//345
			//mitau, annenburg, autzenburg
            DB::table('counties')->insert([
				'county_name' => 'Mitau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//346
			//lemburg, jurgensburg 
            DB::table('counties')->insert([
				'county_name' => 'Segewold',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//347
			//wenden, wolmar, lemsal, wainsel
            DB::table('counties')->insert([
				'county_name' => 'Wenden',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//348
			//wolkenburg, rositten
            DB::table('counties')->insert([
				'county_name' => 'Wolkenburg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '50',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Estonia
			//349
			//reval, sankt matthias, weissenstein, wesenberg, narva
            DB::table('counties')->insert([
				'county_name' => 'Reval',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '51',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//350
			//pernau, hapsal, arensburg, soneburg
            DB::table('counties')->insert([
				'county_name' => 'Pernau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '51',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Livonian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Prussia
			//351
			//marienburg, altfeld, klakendorf, klettendorf, marienwerder
            DB::table('counties')->insert([
				'county_name' => 'Pomesanengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//352
			//bartenstein, heilsberg, schippenbeil
            DB::table('counties')->insert([
				'county_name' => 'Bartengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//353
			//braunsberg, allenstein, bischofsburg, wartenburg
            DB::table('counties')->insert([
				'county_name' => 'Ermland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//354
			//memelburg, windenburg, rutzau
            DB::table('counties')->insert([
				'county_name' => 'Memelland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//355
			//landeshut, schalauerburg
            DB::table('counties')->insert([
				'county_name' => 'Nadrauengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//356
			//brandenburg, tapiow, wehlau
            DB::table('counties')->insert([
				'county_name' => 'Natangergau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//357
			//elbing, tolkemitz, muhlhausen, konigshagen
            DB::table('counties')->insert([
				'county_name' => 'Pogesanengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//358
			//koningsberg, insterburg, angerburg, gerdauen
            DB::table('counties')->insert([
				'county_name' => 'Samland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '52',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Prussian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Pomerelia
			//359
			//danzig, prust, hohenstein, oliva, kowale, wisselinke
            DB::table('counties')->insert([
				'county_name' => 'Danzig',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//360
			//butow, rummelsburg, damerkow, hygendorf
            DB::table('counties')->insert([
				'county_name' => 'Butow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//361
			//dirschau, mewe, neuenburg
            DB::table('counties')->insert([
				'county_name' => 'Dirschau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//362
			//karthaus, zuckau, chmelno
            DB::table('counties')->insert([
				'county_name' => 'Karthaus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//363
			//kulm, althaus, rehden, graudenz
            DB::table('counties')->insert([
				'county_name' => 'Kulmerland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//364
			//lauenburg, neuendorf, vietzig
            DB::table('counties')->insert([
				'county_name' => 'Lauenburg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//365
			//putzig, krockow, kossakowitz
            DB::table('counties')->insert([
				'county_name' => 'Putzig',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//366
			//baldenburg, schlochau
            DB::table('counties')->insert([
				'county_name' => 'Schlochau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//367
			//schwetz, bromberg
            DB::table('counties')->insert([
				'county_name' => 'Schwetz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//368
			//thorn, birgelau, zlotoria, grebocin 
            DB::table('counties')->insert([
				'county_name' => 'Thorn',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//369
			//tuchel, seehaupten
            DB::table('counties')->insert([
				'county_name' => 'Tuchel',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '53',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Pomerania
			//370
			//kammin, gulzow, schwirsen, dievenow
            DB::table('counties')->insert([
				'county_name' => 'Kammin',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//371
			//arnswalde, bernstein, kolbacz
            DB::table('counties')->insert([
				'county_name' => 'Arnswalde',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//372
			//gollnow, massow, stepenitz 
            DB::table('counties')->insert([
				'county_name' => 'Gollnow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//373
			//greifenhagen, barwalde 
            DB::table('counties')->insert([
				'county_name' => 'Greifenhagen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//374
			//greifenberg, treptow 
            DB::table('counties')->insert([
				'county_name' => 'Greifenberg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//375
			//pyritz, warnitz, prillwitz
            DB::table('counties')->insert([
				'county_name' => 'Pyritz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//376
			//kessin, rostock, stralsund, greifswald, demmin, grimmen
            DB::table('counties')->insert([
				'county_name' => 'Kessinigau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//377
			//kolberg, degow
            DB::table('counties')->insert([
				'county_name' => 'Kolberg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//378
			//koslin, zanow, bublitz, pollnow
            DB::table('counties')->insert([
				'county_name' => 'Koslin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//379
			//neustettin, baldenburg
            DB::table('counties')->insert([
				'county_name' => 'Neustettin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//380
			//schivelbein, stolzenberg 
            DB::table('counties')->insert([
				'county_name' => 'Schivelbein',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//381
			//slupsk, kublitz, glowitz
            DB::table('counties')->insert([
				'county_name' => 'Slupsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//382
			//schlawe, rugenwalde, malchow
            DB::table('counties')->insert([
				'county_name' => 'Schlawe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//383
			//stettin, prenzlow, pasewalk, kolbatz, mohringen, gunnitz, warsow 
            DB::table('counties')->insert([
				'county_name' => 'Stettin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//384
			//wolgast, neuenkirchen, buggenhagen, wollin
            DB::table('counties')->insert([
				'county_name' => 'Wostrosegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '54',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Brandenburg
			//385
			//brandenburg, potsdam
            DB::table('counties')->insert([
				'county_name' => 'Havelland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//386
			//wusterhausen, wittstock
            DB::table('counties')->insert([
				'county_name' => 'Dossegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//387
			//perleberg, pritzwalk, wittenberg
            DB::table('counties')->insert([
				'county_name' => 'Linaggau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//388
			//havelberg, plattenburg
            DB::table('counties')->insert([
				'county_name' => 'Nelitzigau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//389
			//berlin, spandau, kopenick, tempelhof, rosenfeld, helwichdorf, kaulsdorf, maltersdorf, biesdorf, morczahn
            DB::table('counties')->insert([
				'county_name' => 'Retschanengau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//390
			//rowenburg, schenkenberg, uckerfeld, templin
            DB::table('counties')->insert([
				'county_name' => 'Uckermark',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '55',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Mecklenburg
			//391
			//teterow, malchin
            DB::table('counties')->insert([
				'county_name' => 'Circipanigau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//392
			//mecklenburg, wismar
            DB::table('counties')->insert([
				'county_name' => 'Obotritegau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//393
			//schwerin, ratzeburg
            DB::table('counties')->insert([
				'county_name' => 'Polabigau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//394
			//lubeck, oldenburg, segeberg, preetz
            DB::table('counties')->insert([
				'county_name' => 'Wagrigau',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '56',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Wendish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//France
			//France
			//Anjou
			//395
			//angers, saumur, fontevraud, bauge
            DB::table('counties')->insert([
				'county_name' => 'Anjou',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//396
			//mans, chalons, laval, evron, mayenne
            DB::table('counties')->insert([
				'county_name' => 'Maine',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//397
			//mortagne, nogent
            DB::table('counties')->insert([
				'county_name' => 'Perche',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//398
			//tours, cormery, gaillard, amboise, villandry, chatigny, saint martin, chinon, fondettes, villaines, saint genouph
            DB::table('counties')->insert([
				'county_name' => 'Touraine',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//399
			//vendome, freteval, lavardin, montoire
            DB::table('counties')->insert([
				'county_name' => 'Vendomois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '57',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Aquitaine
			//400
			//bordeaux, albret, fronsac, meyrinac
            DB::table('counties')->insert([
				'county_name' => 'Bordelais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//401
			//agen, moirax, lavardac
            DB::table('counties')->insert([
				'county_name' => 'Agenais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//402
			//angouleme, saint michel, chateauneuf
            DB::table('counties')->insert([
				'county_name' => 'Angoumois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//403
			//bazas, langon, marmande, roquetaillade, villandraut
            DB::table('counties')->insert([
				'county_name' => 'Bazadais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//404
			//limoges, ventadour, saint angel
            DB::table('counties')->insert([
				'county_name' => 'Limousin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//405
			//lectoure, beaumont
            DB::table('counties')->insert([
				'county_name' => 'Lomagne',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//406
			//perigueux, bergerac
            DB::table('counties')->insert([
				'county_name' => 'Perigord',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//407
			//saintes, royan, saint jean, taillebourg
            DB::table('counties')->insert([
				'county_name' => 'Saintogne',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '58',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Auvergne
			//408
			//randon, saint colombe, menat
            DB::table('counties')->insert([
				'county_name' => 'Auvergne',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//409
			//aurillac, ytrac
            DB::table('counties')->insert([
				'county_name' => 'Aurillac',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//410
			//brioude, saint ferreol, saint beauzire, chaise dieu, sauveterre
            DB::table('counties')->insert([
				'county_name' => 'Brioude',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//411
			//carlat, messilhac
            DB::table('counties')->insert([
				'county_name' => 'Carlat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//412
			//clermont, montpensier, thiers
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//413
			//feurs, montbrison, saint etienne, valbenoite
            DB::table('counties')->insert([
				'county_name' => 'Forez',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//414
			//murat, mercoeur, saint flour
            DB::table('counties')->insert([
				'county_name' => 'Murat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '59',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Berry
			//415
			//bourges, meillant, massay, saint gildas, chateauroux, issoudun
            DB::table('counties')->insert([
				'county_name' => 'Berry',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '60',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//416
			//sancerre, saint satur, saint gemme, launay, crezancy, reugny, champtin, vauvredon
            DB::table('counties')->insert([
				'county_name' => 'Sancerre',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '60',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Bourbonnais
			//417
			//bourbon, sauvigny, moulins
            DB::table('counties')->insert([
				'county_name' => 'Bourbonnais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '61',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//418
			//montlucon, ainay, nassigny, herisson, evaux
            DB::table('counties')->insert([
				'county_name' => 'Montlucon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '61',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Gascony
			//419
			//eauze, manciet, nogaro
            DB::table('counties')->insert([
				'county_name' => 'Armagnac',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//420
			//mirande, masseube, auch
            DB::table('counties')->insert([
				'county_name' => 'Astarac',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//421
			//pau, oloron, maure
            DB::table('counties')->insert([
				'county_name' => 'Bearn',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//422
			//escaladieu, tarbes, maubourguet
            DB::table('counties')->insert([
				'county_name' => 'Bigorre',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//423
			//saint bertrand, saint gaudens, muret, luchon
            DB::table('counties')->insert([
				'county_name' => 'Comminges',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//424
			//saint lizier, saint girons
            DB::table('counties')->insert([
				'county_name' => 'Couserans',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//425
			//dax, bayonne, tartas
            DB::table('counties')->insert([
				'county_name' => 'Dax',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//426
			//bouillas, fluerance, vic
            DB::table('counties')->insert([
				'county_name' => 'Fezensac',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//427
			//montmarsan, roquefort 
            DB::table('counties')->insert([
				'county_name' => 'Marsan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//428
			//aire, geaune
            DB::table('counties')->insert([
				'county_name' => 'Tursan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '62',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Champagne
			//429
			//reims, bazancourt, roucy, thony, fismes, verzy, epernay
            DB::table('counties')->insert([
				'county_name' => 'Remois',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//430
			//brienne, lesmont, precy, blaincourt, vaubercey, dienville
            DB::table('counties')->insert([
				'county_name' => 'Brenois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//431
			//chalons, nettancourt, trois fontaines, vitry
            DB::table('counties')->insert([
				'county_name' => 'Chalonnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//432
			//duesme, oigny, bussy, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Duesmois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//433
			//langres, dijon
            DB::table('counties')->insert([
				'county_name' => 'Langres',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//434
			//meaux, thierry, coulommiers, crecy, crouy
            DB::table('counties')->insert([
				'county_name' => 'Meaux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//435
			//perthes, larzicourt, saint dizier
            DB::table('counties')->insert([
				'county_name' => 'Perthois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//436
			//provins, cigy, chenoise, cerneux
            DB::table('counties')->insert([
				'county_name' => 'Provins',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//437
			//rethel, attigny, porcien
            DB::table('counties')->insert([
				'county_name' => 'Rethelois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//438
			//sens, joigny, montigny, brienon, mussy, marcilly, paraclete
            DB::table('counties')->insert([
				'county_name' => 'Senois',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//439
			//troyes, clairvaux, saint bernard, fraville, longchamp
            DB::table('counties')->insert([
				'county_name' => 'Troyes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '63',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Francia
			//440
			//paris, saint denis, ecouen
            DB::table('counties')->insert([
				'county_name' => 'Pay de France',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//441
			//beauvais, goincourt, gerberoy, fouquenies
            DB::table('counties')->insert([
				'county_name' => 'Beauvaisis',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//442
			//beaumont, jouy, argenteuil
            DB::table('counties')->insert([
				'county_name' => 'Beaumont',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//443
			//brie, melun, saint fargeau, lagny, yerres, brunoy, grosbois, vincennes
            DB::table('counties')->insert([
				'county_name' => 'Brie',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//444
			//clermont, angicourt, liancourt
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//445
			//ferrieres, landon, fontainebleau, ganne
            DB::table('counties')->insert([
				'county_name' => 'Gatinais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//446
			//chatres, corbeil, clamart, dourdan, montlhery, palaiseau, montagu
            DB::table('counties')->insert([
				'county_name' => 'Hurepoix',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//447
			//mantes, rambouillet, beynes, houdan, gassicourt, saint germain, mesnil
            DB::table('counties')->insert([
				'county_name' => 'Mantois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//448
			//senlis, compiegne, ressons, gournay, bayencourt
            DB::table('counties')->insert([
				'county_name' => 'Senlis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//449
			//soissons, oulchy
            DB::table('counties')->insert([
				'county_name' => 'Soissonnais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//450
			//vez, oigny, laneuf, saint mard
            DB::table('counties')->insert([
				'county_name' => 'Valois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//451
			//saint clair, pontoise
            DB::table('counties')->insert([
				'county_name' => 'Vexin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '64',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Normandy
			//452
			//rouen, harcourt, jumieges, heurteauville, saint saens, meslay, saint martin, saint philbert, brionne, wandrille, saint pierre
            DB::table('counties')->insert([
				'county_name' => 'Roumois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//453
			//alencon, argentan, sees, sarceaux
            DB::table('counties')->insert([
				'county_name' => 'Alencon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//454
			//avranches, lucerne, subligny
            DB::table('counties')->insert([
				'county_name' => 'Avranches',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//455
			//bayeux, caen, audrieu, mondaye, beaumont, coupesarte, creully
            DB::table('counties')->insert([
				'county_name' => 'Bayeux',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//456
			//fecamp, graville, tancarville, saint wandrille
            DB::table('counties')->insert([
				'county_name' => 'Caux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//457
			//coutances, cherbourg, hauteville, valognes, saint lo, lessay, vire, chanteloup, gratot, pirou, bricquebec, saint sauveur
            DB::table('counties')->insert([
				'county_name' => 'Coutances',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//458
			//evreux, verneuil, gaillard, gisors, vernon, acquigny, brecourt, villers
            DB::table('counties')->insert([
				'county_name' => 'Evreux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//459
			//eu, dieppe, aumale, arques
            DB::table('counties')->insert([
				'county_name' => 'Eu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//460
			//lisieux, falaise, honfleur, saint michel, courcy, crevecoeur, blangy
            DB::table('counties')->insert([
				'county_name' => 'Lisieux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//461
			//mortain, domfront
            DB::table('counties')->insert([
				'county_name' => 'Mortainais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '65',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Norman',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Orleanais
			//462
			//orleans, fleury, meung, combreux
            DB::table('counties')->insert([
				'county_name' => 'Orleanais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//463
			//blois, chambord, chaumont, bievre, pontlevoy
            DB::table('counties')->insert([
				'county_name' => 'Blaisois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//464
			//chartres, leveville, bretigny, saint pere, sours, ouarville
            DB::table('counties')->insert([
				'county_name' => 'Chartres',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//465
			//chateaudun, courtalain
            DB::table('counties')->insert([
				'county_name' => 'Dunois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//466
			//dreux, marsalin, nonancourt
            DB::table('counties')->insert([
				'county_name' => 'Dreux',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//467
			//etampes, chalo, mereville, longpont, chaloche
            DB::table('counties')->insert([
				'county_name' => 'Etampois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//468
			//nemours, montargis, moncourt
            DB::table('counties')->insert([
				'county_name' => 'Nemours',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '66',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Picardy
			//469
			//arras, saint omer, bethune, lens, buissiere, cauchy
            DB::table('counties')->insert([
				'county_name' => 'Artois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//470
			//amiens, flixecourt, picquigny, corbie, bretonneux, boves, mericourt, verger, fleurie
            DB::table('counties')->insert([
				'county_name' => 'Amienois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//471
			//boulogne, etaples
            DB::table('counties')->insert([
				'county_name' => 'Boulenois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//472
			//bruges, ypres, lille, douai, veurne, poperinge, dunkirk, gravelines, bergues, bogaerde
            DB::table('counties')->insert([
				'county_name' => 'Flanders',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Low_German',
				'vernacular_culture' => 'Flemish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//473
			//guines, calais, piehem
            DB::table('counties')->insert([
				'county_name' => 'Guines',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//474
			//laon, coucy, corbeny
            DB::table('counties')->insert([
				'county_name' => 'Laonnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//475
			//montreuil, recques, agincourt
            DB::table('counties')->insert([
				'county_name' => 'Montreuil',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//476
			//noyon, sempigny, morlincourt, varesnes, salency
            DB::table('counties')->insert([
				'county_name' => 'Noyonnais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//477
			//crecy, nouvion, saint ricquier, abbekerke
            DB::table('counties')->insert([
				'county_name' => 'Ponthieu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//478
			//therouanne, royon, saint pol
            DB::table('counties')->insert([
				'county_name' => 'Ternois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//479
			//tournai, mouscron, courtrai
            DB::table('counties')->insert([
				'county_name' => 'Tournais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//480
			//peronne, saint quentin, bohain, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Vermandois',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '67',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Poitou
			//481
			//poitiers, parthenay, niort, saint junien, touffou, chauvigny, vouille, lusignan
            DB::table('counties')->insert([
				'county_name' => 'Poitou',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//482
			//chatelaillon, mauze, rochelle
            DB::table('counties')->insert([
				'county_name' => 'Aunis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//483
			//brioux, aubigne, melleran, melle
            DB::table('counties')->insert([
				'county_name' => 'Briancais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//484
			//chatellerault, clairvaux, usseau, saint michel, marigny, valady, panat, ruffepeyre
            DB::table('counties')->insert([
				'county_name' => 'Chatellerault',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//485
			//gueret, bellac, aubusson, grandmont, saint leger, marcheix, rancon
            DB::table('counties')->insert([
				'county_name' => 'Marche',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//486
			//thouars, fontenay, montaigu, talmont, buffon, saint remy
            DB::table('counties')->insert([
				'county_name' => 'Thouarsais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//487
			//turenne, brive, tulle, noailhac, collonges, charroux, savigne, sarlat, puytignon, castelnaud
            DB::table('counties')->insert([
				'county_name' => 'Turenne',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '68',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Frankish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Toulouse
			//488
			//toulouse, lavaur, castelginest, colomiers, montgiscard, brax
            DB::table('counties')->insert([
				'county_name' => 'Toulouse',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//489
			//albi, castelnau, saint jeury
            DB::table('counties')->insert([
				'county_name' => 'Albi',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//490
			//carcasonne, castelnaudary, mirepoix, puylaurens, camon
            DB::table('counties')->insert([
				'county_name' => 'Carcasonne',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//491
			//foix, tarascon, montgrenier
            DB::table('counties')->insert([
				'county_name' => 'Foix',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//492
			//javols, mende, langogne, prunieres, apcher
            DB::table('counties')->insert([
				'county_name' => 'Gevaudan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//493
			//melgueil, montpellier, maguelonne
            DB::table('counties')->insert([
				'county_name' => 'Melgueil',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//494
			//millau, melac
            DB::table('counties')->insert([
				'county_name' => 'Millau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//495
			//narbonne, beziers, lodeve, agde
            DB::table('counties')->insert([
				'county_name' => 'Narbonne',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//496
			//nimes, uzes
            DB::table('counties')->insert([
				'county_name' => 'Nimes',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//497
			//cahors, montauban, gourdon, figeac, aujols, arcambal, cabrerets, rudelle
            DB::table('counties')->insert([
				'county_name' => 'Quercy',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//498
			//rodez, villefranche, saint radegonde, belcastel, bertholene
            DB::table('counties')->insert([
				'county_name' => 'Rouergue',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//499
			//puy, montlaur
            DB::table('counties')->insert([
				'county_name' => 'Velay',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '69',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_France',
				'vernacular_culture' => 'Occitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Brittany
			//Brittany
			//500
			//quimper, concarneau, locronan
            DB::table('counties')->insert([
				'county_name' => 'Cornouailles',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//501
			//ach, saint mathieu, brest
            DB::table('counties')->insert([
				'county_name' => 'Ach',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//502
			//dol, tronchet, combourg, tremeheuc, saint marcan, boussac, saint malo
            DB::table('counties')->insert([
				'county_name' => 'Dol',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//503
			//saint pol, morlaix, lannion, kerouzere
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//504
			//rohan, carhaix, josselin, ponthivy
            DB::table('counties')->insert([
				'county_name' => 'Poher',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//505
			//vannes, ploermel
            DB::table('counties')->insert([
				'county_name' => 'Vannais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '70',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Domnonee
			//506
			//saint brieuc, guingamp, chatelaudren, saint magliore
            DB::table('counties')->insert([
				'county_name' => 'Penthievre',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//507
			//alet, chateauneuf, saint guinoux
            DB::table('counties')->insert([
				'county_name' => 'Alet',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//508
			//treguier, lezardrieux, plouguiel
            DB::table('counties')->insert([
				'county_name' => 'Tregor',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '71',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Retz
			//509
			//pornic, paimboeuf, machecoul, bourgneuf, reze
            DB::table('counties')->insert([
				'county_name' => 'Retz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//510
			//nantes, guerande, chateaubriant, juigne
            DB::table('counties')->insert([
				'county_name' => 'Nantais',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//511
			//rennes, fougeres
            DB::table('counties')->insert([
				'county_name' => 'Rennais',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '72',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Breton',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Britain
			//Ireland
			//Connacht
			//512
			//galway, athenry, claregalway, feartagar, kiltartan, hackett, loughrea, tuam, clonfert, dunmore
            DB::table('counties')->insert([
				'county_name' => 'Galway',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//513
			//mayo, ballintubber, burriscarra, cong, errew, castlebar, kilcommon, kilkelly, urlaur, claremorris, ashford, killala
            DB::table('counties')->insert([
				'county_name' => 'Mayo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//514
			//roscommon, boyle, donamon, elphin, clonmacnoise
            DB::table('counties')->insert([
				'county_name' => 'Roscommon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//515
			//sligo, ballymote, markree, templehouse, achonry
            DB::table('counties')->insert([
				'county_name' => 'Sligo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '73',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Leinster
			//516
			//carlow, ballyloughan, ballymoon, leighlin, leighlinbridge, killerig
            DB::table('counties')->insert([
				'county_name' => 'Carlow',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//517
			//kildare, athy, castledermot, moone, barberstown, kilkea, kilteel, maynooth, reeves, rheban, norragh
            DB::table('counties')->insert([
				'county_name' => 'Kildare',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//518
			//kilkenny, kells, graignamanagh, ennisnagh, fertagh, freshford, ullard, gowran, robhar, cuffesgrange, woolengrange
            DB::table('counties')->insert([
				'county_name' => 'Kilkenny',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//519
			//fortleix, cullahill, lea, killeshin, oughaval, grangebeg
            DB::table('counties')->insert([
				'county_name' => 'Leix',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//520
			//clonmel, athassel, nenagh, ardfinnan, loughmoe, cashel
            DB::table('counties')->insert([
				'county_name' => 'Tipperary',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//521
			//waterford, lismore, crooke, dungarvan, ardmore, mothel, rincrew
            DB::table('counties')->insert([
				'county_name' => 'Waterford',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//522
			//wexford, carnsore, dunbrody, ferns, selskar, tintern
            DB::table('counties')->insert([
				'county_name' => 'Wexford',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//523
			//wicklow, kindlestown, baltinglass, glendalough
            DB::table('counties')->insert([
				'county_name' => 'Wicklow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '74',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Meath
			//524
			//dublin, clontarf, kinsealy, lusk, castleknock, baldoyle
            DB::table('counties')->insert([
				'county_name' => 'Dublin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//525
			//longford, ardagh, granard, moydow, rathcline, abbeyshrule
            DB::table('counties')->insert([
				'county_name' => 'Longford',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//526
			//tara, trim, navan, athlone, skryne, dunshaughlin, kells, clonard, bective, fore, taghmon
            DB::table('counties')->insert([
				'county_name' => 'Meath',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//527
			//tullamore, blundell, leap, clonmacnoise, gallen, roscrea
            DB::table('counties')->insert([
				'county_name' => 'Offaly',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '75',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Munster
			//528
			//ennis, bunratty, kilmihil, kilalloe, corcomroe
            DB::table('counties')->insert([
				'county_name' => 'Clare',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//529
			//cork, bantry, fermoy, castlelyons, mourneabbey, blarney, widenham, cloyne, buttevant
            DB::table('counties')->insert([
				'county_name' => 'Cork',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//530
			//castlegregory, dingle, dunkerron, abbeydorney, ardfert, killarney, aghadoe, innisfallen
            DB::table('counties')->insert([
				'county_name' => 'Kerry',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//531
			//limerick, adare, monasteranenaugh, mungret, askeaton, croom
            DB::table('counties')->insert([
				'county_name' => 'Limerick',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '76',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Ulster
			//532
			//antrim, carra, carrickfergus, dunluce, dunseverick, dromore
            DB::table('counties')->insert([
				'county_name' => 'Antrim',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//533
			//armagh, killeavy, fairview
            DB::table('counties')->insert([
				'county_name' => 'Armagh',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//534
			//cavan, cloughoughter, drumlane, kilmore
            DB::table('counties')->insert([
				'county_name' => 'Cavan',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//535
			//derry, coleraine, dungiven, magoscain, maghera
            DB::table('counties')->insert([
				'county_name' => 'Derry',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//536
			//donegal, carrickabragy, northburgh, rahan, raphoe
            DB::table('counties')->insert([
				'county_name' => 'Donegal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//537
			//downpatrick, kilkeel, dundrum, clough, killyleagh, sketrick, ardglass, grey, inch
            DB::table('counties')->insert([
				'county_name' => 'Down',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//538
			//enniskillen, lisgoole, rossory
            DB::table('counties')->insert([
				'county_name' => 'Fermanagh',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//539
			//leitrim, carrick, mohill, fenagh
            DB::table('counties')->insert([
				'county_name' => 'Leitrim',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//540
			//louth, dundalk, drogheda, carlingford, monasterboice, mellifont
            DB::table('counties')->insert([
				'county_name' => 'Louth',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//541
			//monaghan, inniskeen, tehellan
            DB::table('counties')->insert([
				'county_name' => 'Monaghan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Irish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//542
			//omagh, dungannon, ardboe, carrickmore, clogher, donaghey
            DB::table('counties')->insert([
				'county_name' => 'Tyrone',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '77',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//England
			//East Anglia
			//543
			//norwich, thetford, aylsham, burnham, yarmouth, lynn, walsingham, acle, rising, saint benet
            DB::table('counties')->insert([
				'county_name' => 'Norfolk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '78',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//544
			//ipswich, lowestoft, saint edmunds, dunwich, sudbury, bungay, clare, wattisham
            DB::table('counties')->insert([
				'county_name' => 'Suffolk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '78',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Essex
			//545
			//colchester, chelmsford, hadleigh, hedingham, walden, beeleigh, coggeshall, waltham
            DB::table('counties')->insert([
				'county_name' => 'Essex',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//546
			//hertford, berkhamsted, therfield, pirton, brickendon, saint albans, langley
            DB::table('counties')->insert([
				'county_name' => 'Hertfordshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//547
			//london, ruislip, kensington, finsbury, paddington, hampstead, hackney, stepney, westminster, clerkenwell, twickenham
            DB::table('counties')->insert([
				'county_name' => 'Middlesex',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '79',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Hwicce
			//548
			//gloucester, deerhurst, flaxley, tewkesbury, wotton, cirencester, arlingham
            DB::table('counties')->insert([
				'county_name' => 'Gloucestershire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//549
			//warwick, alcester, merevale, astley, kenilworth, stoneleigh, coventry
            DB::table('counties')->insert([
				'county_name' => 'Warwickshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//550
			//winchcombe, sudeley, hailes
            DB::table('counties')->insert([
				'county_name' => 'Winchcombeshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//551
			//worcester, bordesley, evesham, malvern, pershore
            DB::table('counties')->insert([
				'county_name' => 'Worcestershire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '80',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Kent
			//552
			//aylesford, ashford, rochester, maidstone, boxley, dartford, gravesend, orprington
            DB::table('counties')->insert([
				'county_name' => 'Aylesfordshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//553
			//canterbury, chatham, sandwich, dover, leeds, appleby
            DB::table('counties')->insert([
				'county_name' => 'Kent',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//554
			//hythe, saltwood, lympne, folkestone
            DB::table('counties')->insert([
				'county_name' => 'Shepwayshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '81',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Lindsey
			//555
			//derby, peveril, haddon, codnor, dale, darley
            DB::table('counties')->insert([
				'county_name' => 'Derbyshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//556
			//leicester, belvoir, croxton, owston, breedon
            DB::table('counties')->insert([
				'county_name' => 'Leicestershire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//557
			//lincoln, somerton, alvingham, bardney, boston, bourne, crowland, grimsby, kirkstead, stamford, tattershall, thornton
            DB::table('counties')->insert([
				'county_name' => 'Lincolnshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//558
			//nottingham, newark, rufford, sutton, mansfield, southwell
            DB::table('counties')->insert([
				'county_name' => 'Nothinghamshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//559
			//oakham, uppingham, burley
            DB::table('counties')->insert([
				'county_name' => 'Rutland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '82',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Mercia
			//560
			//chester, saighton, aldford, beeston, halton, doddington, dodleston, frodsham, pulford, nantwich
            DB::table('counties')->insert([
				'county_name' => 'Cheshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//561
			//hereford, goodrich, dore, leominster, ledbury, wilton
            DB::table('counties')->insert([
				'county_name' => 'Herefordshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//562
			//shrewsbury, stokesay, whittington, ludlow, bromfield, lilleshall
            DB::table('counties')->insert([
				'county_name' => 'Shropshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//563
			//stafford, lichfield, tamworth, croxden, chartley
            DB::table('counties')->insert([
				'county_name' => 'Staffordshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '83',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Mid Anglia
			//564
			//bedford, elstow, flitwick, tilsworth, dunstable
            DB::table('counties')->insert([
				'county_name' => 'Bedfordshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//565
			//buckingham, bradwell, cublington, aylesbury, notley
            DB::table('counties')->insert([
				'county_name' => 'Buckinghamshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//566
			//cambridge, ely, anglesey, chatteris, bodsey, soham, thorney, peterborough
            DB::table('counties')->insert([
				'county_name' => 'Cambridgeshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//567
			//huntingdon, saint ives, saint neots, stilton, tetworth, waresley, ramsey
            DB::table('counties')->insert([
				'county_name' => 'Huntingdonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//568
			//northampton, brixworth, barnwell, rockingham, pipewell
            DB::table('counties')->insert([
				'county_name' => 'Northamptonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//569
			//oxford, wallingford, dorchester, eynsham, wroxton
            DB::table('counties')->insert([
				'county_name' => 'Oxfordshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '84',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Northumbria
			//570
			//allerton, birkby, sigston
            DB::table('counties')->insert([
				'county_name' => 'Allertonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//571
			//aldborough, ripley, whixley, wetherby, knaresborough
            DB::table('counties')->insert([
				'county_name' => 'Burghshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//572
			//carlisle, appleby, saint bees, brougham, kendal, workington, furness
            DB::table('counties')->insert([
				'county_name' => 'Cumberland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//573
			//durham, darlington, barnard, bowes, jarrow, coundon
            DB::table('counties')->insert([
				'county_name' => 'Durham',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//574
			//sheffield, ecclesfield, bradfield, stannington
            DB::table('counties')->insert([
				'county_name' => 'Hallamshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//575
			//hexham, whitley
            DB::table('counties')->insert([
				'county_name' => 'Hexhamshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//576
			//howden, asselby
            DB::table('counties')->insert([
				'county_name' => 'Howdenshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//577
			//alnwick, bamburgh, lindisfarne
            DB::table('counties')->insert([
				'county_name' => 'Northumberland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//578
			//lancaster, clitheroe, sawley, whalley, marland
            DB::table('counties')->insert([
				'county_name' => 'Lancashire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//579
			//richmond, wensley, middleham
            DB::table('counties')->insert([
				'county_name' => 'Richmondshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//580
			//york, beverley, bridlington, bolton, coverham, fountains, cayton, ripon, selby, whitby, pontefract, helmsley, rievaulx, laskill, scarborough
            DB::table('counties')->insert([
				'county_name' => 'Yorkshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '85',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sussex
			//581
			//arundel, lyminster, littlehampton
            DB::table('counties')->insert([
				'county_name' => 'Arundelshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//582
			//bramber, worthing, brighton
            DB::table('counties')->insert([
				'county_name' => 'Brambershire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//583
			//chichester, bosham
            DB::table('counties')->insert([
				'county_name' => 'Chichestershire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//584
			//lewes, kingston
            DB::table('counties')->insert([
				'county_name' => 'Leweshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//585
			//pevensey, hailsham
            DB::table('counties')->insert([
				'county_name' => 'Pevenshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//586
			//hastings, bexhill, battle
            DB::table('counties')->insert([
				'county_name' => 'Sussex',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '86',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Wessex
			//587
			//reading, slough, windsor, abingdon
            DB::table('counties')->insert([
				'county_name' => 'Berkshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//588
			//dorchester, abbotsbury, sherborne, wareham, wimborne, corfe, shaftesbury
            DB::table('counties')->insert([
				'county_name' => 'Dorsetshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//589
			//winchester, southampton
            DB::table('counties')->insert([
				'county_name' => 'Hampshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//590
			//somerton, sutton, taunton, bath, bruton, wells
            DB::table('counties')->insert([
				'county_name' => 'Somersetshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//591
			//guildford, woking, farnham, wallington, brixton, waverley, northolt
            DB::table('counties')->insert([
				'county_name' => 'Surrey',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Hops',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//592
			//wilton, trowbridge, amesbury, easton, malmesbury, salisbury, tisbury
            DB::table('counties')->insert([
				'county_name' => 'Wiltshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '87',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'English',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Wales
			//Cornwall
			//593
			//truro, restormel, bodmin, cardinham, launceston, saint german, tintagel, trematon
            DB::table('counties')->insert([
				'county_name' => 'Cornwall',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '88',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//594
			//exeter, gidleigh, lydford, okehampton, axminster, barnstaple, buckfast, buckland, chudleigh, newenham, plymouth, tavistock, totnes
            DB::table('counties')->insert([
				'county_name' => 'Devonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '88',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Dyfed
			//595
			//cardigan, aberystwyth, llanbadarn, llantood
            DB::table('counties')->insert([
				'county_name' => 'Cardiganshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//596
			//carmarthen, carreg, dinefwr, kidwelly, laugharne, llandovery, llansteffan, talley, whitland
            DB::table('counties')->insert([
				'county_name' => 'Carmarthenshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//597
			//pembroke, carew, cilgerran, haverford, manorbier, tenby, saint dogmaels, templeton, saint davids
            DB::table('counties')->insert([
				'county_name' => 'Pembrokeshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '89',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Gwent
			//598
			//candleston, coity, kenfig, newcastle, cardiff, neath, llantrisant, llandaff, ewenny, penrhys, saint donats
            DB::table('counties')->insert([
				'county_name' => 'Glamorganshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '90',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//599
			//monmouth, abergavenny, raglan, caerphilly, morgraig, ruperra, caldicot, chepstow, dingestow, grosmont, llanfair, llangibby, skenfrith, trellech, caerleon, newport, pencoed, penhow, caerwent
            DB::table('counties')->insert([
				'county_name' => 'Monmouthshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '90',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Gwyned
			//600
			//aberlleiniog, beaumaris, llanfaes, penmon
            DB::table('counties')->insert([
				'county_name' => 'Anglesey',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//601
			//caernarfon, conwy, deganwy, dolwyddelan, dolbadarn, harlech, maenan, bangor, cymer
            DB::table('counties')->insert([
				'county_name' => 'Caernarvonshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//602
			//denbigh, rhuddlan, ruthin, saint asaph, wrexham
            DB::table('counties')->insert([
				'county_name' => 'Denbighshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//603
			//flint, caergwrle, ewloe, hawarden, mold, basingwerk, talacre
            DB::table('counties')->insert([
				'county_name' => 'Flintshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '91',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Powys
			//604
			//brecon, morlais, blaenllynfi, bronllys, crickhowell, tretower
            DB::table('counties')->insert([
				'county_name' => 'Brecknockshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//605
			//montgomery, powis, dolforwyn, llanlugan
            DB::table('counties')->insert([
				'county_name' => 'Montgomeryshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//606
			//aberedw, cefnllys, hay
            DB::table('counties')->insert([
				'county_name' => 'Radnorshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '92',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Welsh',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Scotland
			//Alba
			//607
			//aberdeen, balmoral, balquhain, cairnbulg, coull, dundarg, fyvie, inverallochy, inverugie, leslie, udny, deer, huntly
            DB::table('counties')->insert([
				'county_name' => 'Aberdeenshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',,						
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//608
			//banff, mortlach, doune, keith
            DB::table('counties')->insert([
				'county_name' => 'Banffshire',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//609
			//clackmannan, alloa
            DB::table('counties')->insert([
				'county_name' => 'Clackmannanshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//610
			//saint andrews, aberdour, ballinbreich, lochore, wemyss, balmerino, culross, dunfermline, inchcolm, lindores
            DB::table('counties')->insert([
				'county_name' => 'Fife',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//611
			//forfar, brechin, arbroath, montrose, dundee, angus
            DB::table('counties')->insert([
				'county_name' => 'Forfarshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//612
			//kincardine, banchory, stonehaven, dunnottar
            DB::table('counties')->insert([
				'county_name' => 'Kincardineshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//613
			//kinross, cleish, scotlandwell
            DB::table('counties')->insert([
				'county_name' => 'Kinrossshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//614
			//perth, dunkeld, elcho, inverquiech, kinclaven, clunie, abernethy, muthill, scone, ruthven, inchaffray
            DB::table('counties')->insert([
				'county_name' => 'Perthshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '93',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Bernicia
			//615
			//berwick, lauder, thirlestane, duns, coldstream, coldingham
            DB::table('counties')->insert([
				'county_name' => 'Berwickshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//616
			//edinburgh, holyrood, roslyn, arniston, craigmillar, bathgate, strathbrock
            DB::table('counties')->insert([
				'county_name' => 'Edinburghshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//617
			//haddington, dunbar, byres, dirleton, innerwick, markle, tantallon, waughton, yester
            DB::table('counties')->insert([
				'county_name' => 'Haddingtonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//618
			//linlithgow, livingston, abercorn, falkirk, grangemouth
            DB::table('counties')->insert([
				'county_name' => 'Linlithgowshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//619
			//stirling, dunblane, cambuskenneth, culcreuch, mugodock, bannockburn
            DB::table('counties')->insert([
				'county_name' => 'Stirlingshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '94',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Dalriada
			//620
			//lismore, coeffin, achanduin, saddell, dunadd, ardchattan, ardtonish
            DB::table('counties')->insert([
				'county_name' => 'Argyll',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//621
			//brodick, lamlash
            DB::table('counties')->insert([
				'county_name' => 'Bute',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//622
			//rushen, douglas, peel, ramsey, bemaken, ballaugh, marown, onchan
            DB::table('counties')->insert([
				'county_name' => 'Mann',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '95',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Fortriu
			//623
			//dingwall, fortrose, ross
            DB::table('counties')->insert([
				'county_name' => 'Cromartyshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//624
			//elgin, dallas, forres, kinloss, urquhart, duffus
            DB::table('counties')->insert([
				'county_name' => 'Elginshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//625
			//inverness, kilmallie, inverlochy, mingarry, applecross, beauly
            DB::table('counties')->insert([
				'county_name' => 'Invernessshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//626
			//nairn, rait, cawdor, eren
            DB::table('counties')->insert([
				'county_name' => 'Nairnshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//627
			//dornoch, durness, dunrobin, skelbo, skibo, berriedale, aberscross
            DB::table('counties')->insert([
				'county_name' => 'Sutherland',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '96',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Galloway
			//628
			//kirkcudbright, annan, buittle, caerloverock, dundrennan
            DB::table('counties')->insert([
				'county_name' => 'Kirkcudbrightshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '97',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//629
			//wigtown, whithorn, cruggleton, fearn, glenluce, dunragit
            DB::table('counties')->insert([
				'county_name' => 'Wigtownshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '97',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Gododdin
			//630
			//dumfries, auchen, closeburn, lochmaben, robgill, sanquhar, tibbers, dercongal, sweetheart
            DB::table('counties')->insert([
				'county_name' => 'Dumfriesshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//631
			//peebles, skirling, mossfennan, traquair
            DB::table('counties')->insert([
				'county_name' => 'Peeblesshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//632
			//roxburgh, jedburgh, kelso, dryburgh, melrose, hawick, drygrange
            DB::table('counties')->insert([
				'county_name' => 'Roxburghshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//633
			//selkirk, yarrow, galashiels
            DB::table('counties')->insert([
				'county_name' => 'Selkirkshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '98',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Strathclyde
			//634
			//ayr, largs, busbie, cessnock, crossraguel, barnweill, craigie, gadgirth, kilwinning, grangehill, aiket
            DB::table('counties')->insert([
				'county_name' => 'Ayrshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//635
			//dunbarton, inchmurrin
            DB::table('counties')->insert([
				'county_name' => 'Dunbartonshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//636
			//lanark, glasgow, carstairs, kilbride, rutherglen, crookston
            DB::table('counties')->insert([
				'county_name' => 'Lanarkshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//637
			//paisley, polnoon
            DB::table('counties')->insert([
				'county_name' => 'Renfrewshire',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '99',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Gaelic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Aragon
			//Aragon
			//Aragon
			//638
			//alcaniz, caspe, cantavieja, codonera, alcorisa
            DB::table('counties')->insert([
				'county_name' => 'Aragon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//639
			//monzon, san pedro, fraga
            DB::table('counties')->insert([
				'county_name' => 'Cinca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//640
			//valderrobres, valjunquera, arens, lledo, fuentespalda
            DB::table('counties')->insert([
				'county_name' => 'Matarrana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '100',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Barcelona
			//641
			//manresa, cardona, rajadell
            DB::table('counties')->insert([
				'county_name' => 'Bages',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//642
			//barcelona, santa coloma, badalona, castellet
            DB::table('counties')->insert([
				'county_name' => 'Barcelona',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//643
			//berga, baga, san salvador, gironella, cercs, vallcebre
            DB::table('counties')->insert([
				'county_name' => 'Bergueda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//644
			//san feliu, fels, montserrat, san boi, cornella, corbera
            DB::table('counties')->insert([
				'county_name' => 'Llobregat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//645
			//mataro, cabrils, dosrius, santa florentina
            DB::table('counties')->insert([
				'county_name' => 'Maresme',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//646
			//vic, manlleu, tona, san julian, seva, cabrera
            DB::table('counties')->insert([
				'county_name' => 'Osona',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//647
			//terrassa, bisbal, ripollet, sabadell, san marcial, granollers, franqueses, canoves, roca, montbui, ametlla, gallifa
            DB::table('counties')->insert([
				'county_name' => 'Valles',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '101',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Girona
			//648
			//puigcerda, llivia, baltarga, pedra, guils
            DB::table('counties')->insert([
				'county_name' => 'Cerdanya',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//649
			//castellano, corneilla, san martin
            DB::table('counties')->insert([
				'county_name' => 'Conflent',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//650
			//emporda, figueres, peralada, requesens, pubol, quermanco, montgri
            DB::table('counties')->insert([
				'county_name' => 'Emporda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//651
			//girona, salto
            DB::table('counties')->insert([
				'county_name' => 'Girones',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//652
			//rennes, limoux 
            DB::table('counties')->insert([
				'county_name' => 'Razes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//653
			//ripoll, besalu, san joan, camprodon, olot, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Ripolles',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//654
			//perpignan, elna
            DB::table('counties')->insert([
				'county_name' => 'Rosello',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//655
			//santa coloma, lloret, blanes, cassa
            DB::table('counties')->insert([
				'county_name' => 'Selva',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '102',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Huesca
			//656
			//huesca, loarre, montearagon, casbas
            DB::table('counties')->insert([
				'county_name' => 'Huesca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//657
			//jacca, suesa, mianos, san juan
            DB::table('counties')->insert([
				'county_name' => 'Jacetania',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//658
			//benabarre, graus
            DB::table('counties')->insert([
				'county_name' => 'Ribagorza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//659
			//boltana, ainsa
            DB::table('counties')->insert([
				'county_name' => 'Sobrarbe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '103',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Lleida
			//660
			//lleida, besora
            DB::table('counties')->insert([
				'county_name' => 'Lleida',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//661
			//talarn, eroles
            DB::table('counties')->insert([
				'county_name' => 'Pallars',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//662
			//urgell, balaguer, mollerusa, anglesola, golmes, tarrega
            DB::table('counties')->insert([
				'county_name' => 'Urgell',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '104',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Tarragona
			//663
			//amposta, rapita, alcanar
            DB::table('counties')->insert([
				'county_name' => 'Montsia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//664
			//tarragona, poblet, barbera, sarral
            DB::table('counties')->insert([
				'county_name' => 'Tarragona',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//665
			//tortosa, alfara
            DB::table('counties')->insert([
				'county_name' => 'Tortosa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '105',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Catalan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Teruel
			//666
			//albarracin, peracense, bezas, manzanera
            DB::table('counties')->insert([
				'county_name' => 'Albarracin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '106',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//667
			//teruel, alfambra
            DB::table('counties')->insert([
				'county_name' => 'Teruel',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '106',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Zaragoza
			//668
			//illeuca, moncayo, jarque, isuela, olvega
            DB::table('counties')->insert([
				'county_name' => 'Aranda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//669
			//calatayud, maluenda, piedra
            DB::table('counties')->insert([
				'county_name' => 'Calatayud',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//670
			//zaragoza, tarazona, rueda
            DB::table('counties')->insert([
				'county_name' => 'Zaragoza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '107',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Aragonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Navarre
			//Alava
			//671
			//ayala, arceniega, mariaca
            DB::table('counties')->insert([
				'county_name' => 'Ayala',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//672
			//gasteiz, armentia
            DB::table('counties')->insert([
				'county_name' => 'Gasteiz',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//673
			//labastida, laguardia, lanciego, san millan, cornago, clavijo, arnedo, leiva, najera, calahorra, anguiano
            DB::table('counties')->insert([
				'county_name' => 'Rioja',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '108',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Gipuzcoa
			//674
			//san sebastian, astigarraga, zarautz
            DB::table('counties')->insert([
				'county_name' => 'Donostialdea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//675
			//leitza, leintz
            DB::table('counties')->insert([
				'county_name' => 'Leitzaldea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//676
			//mungia, butron
            DB::table('counties')->insert([
				'county_name' => 'Mungialdea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//677
			//tolosa, amasa
            DB::table('counties')->insert([
				'county_name' => 'Tolosaldea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '109',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Navarre
			//678
			//estella, viana, arroniz
            DB::table('counties')->insert([
				'county_name' => 'Estella',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//679
			//pamplona, orcoyen
            DB::table('counties')->insert([
				'county_name' => 'Irunerria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//680
			//sanguesa, xavier, san salvador
            DB::table('counties')->insert([
				'county_name' => 'Sanguesa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//681
			//tafalla, olite
            DB::table('counties')->insert([
				'county_name' => 'Tafalla',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//682
			//tudela, cascante, tulebras
            DB::table('counties')->insert([
				'county_name' => 'Tudela',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//683
			//ultzama, arre, san miguel
            DB::table('counties')->insert([
				'county_name' => 'Ultzamaldea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '110',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Viscaya
			//684
			//bermeo, gernika
            DB::table('counties')->insert([
				'county_name' => 'Busturialdea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//685
			//bilbao, erandio, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Bilbaoldea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//686
			//arrigorriaga, berango
            DB::table('counties')->insert([
				'county_name' => 'Uribe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '111',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Aragon',
				'vernacular_culture' => 'Navarrese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Castile
			//Castile
			//Avila
			//687
			//avila, barco, bonilla, mironcillo, villatoro
            DB::table('counties')->insert([
				'county_name' => 'Avila',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//688
			//arevalo, torralba
            DB::table('counties')->insert([
				'county_name' => 'Morana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//689
			//san pedro, mombeltran
            DB::table('counties')->insert([
				'county_name' => 'San Pedro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '112',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Burgos
			//690
			//lerma, barriosuso, villahoz, cebrecos, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Arlanza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//691
			//briviesca, rodilla, san salvador, miranda, moscadero, valpuesta
            DB::table('counties')->insert([
				'county_name' => 'Bureba',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//692
			//burgos, ubierna, saldana, tardajos, rabe, modubar, cubor
            DB::table('counties')->insert([
				'county_name' => 'Burgos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '113',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Palencia
			//693
			//palencia, medina, villarcayo, taranco, frias
            DB::table('counties')->insert([
				'county_name' => 'Campos',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//694
			//palenzuela, astudillo, castroverde
            DB::table('counties')->insert([
				'county_name' => 'Cerrato',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//695
			//matabuena, bustillo, santa maria, villabellaco
            DB::table('counties')->insert([
				'county_name' => 'Valdivia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '114',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Segovia
			//696
			//coca, villeguillo, navas, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Coca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//697
			//riaza, cantespino, languilla
            DB::table('counties')->insert([
				'county_name' => 'Riaza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//698
			//segovia, turegano, pedraza, cantimpalos
            DB::table('counties')->insert([
				'county_name' => 'Segovia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//699
			//sepulveda, castilnovo
            DB::table('counties')->insert([
				'county_name' => 'Sepulveda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '115',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Soria
			//700
			//almazan, villasayas, llamosos, soliedra, moron
            DB::table('counties')->insert([
				'county_name' => 'Almazan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//701
			//berlanga, rello
            DB::table('counties')->insert([
				'county_name' => 'Berlanga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//702
			//gomara, almenar, cihuela, ciria, penalcazar
            DB::table('counties')->insert([
				'county_name' => 'Gomara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//703
			//osma, ucero, caracena
            DB::table('counties')->insert([
				'county_name' => 'Osma',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//704
			//soria, calatanazor, garray, gormaz, san esteban
            DB::table('counties')->insert([
				'county_name' => 'Soria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '116',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Toledo
			//705
			//torrecilla, sevilleja, san martin
            DB::table('counties')->insert([
				'county_name' => 'Jara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//706
			//madrid, manzanares
            DB::table('counties')->insert([
				'county_name' => 'Madrid',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//707
			//ocana, oreja
            DB::table('counties')->insert([
				'county_name' => 'Ocana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//708
			//sesena, illescas, villaseca, cabanas, numancia, olmos
            DB::table('counties')->insert([
				'county_name' => 'Sagra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//709
			//talavera, bayuela, malpica, oropesa, san martin
            DB::table('counties')->insert([
				'county_name' => 'Talavera',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//710
			//toledo, montalban, guadamur, consuegra, cuerva, malamoneda, mascaraque, orgaz, guadalerzas, bargas, santa clara, almonacid, minaya, burguillos 
            DB::table('counties')->insert([
				'county_name' => 'Toledo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//711
			//torrijos, fuensalida, barcience, escalona, maqueda, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Torrijos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//712
			//aranjuez, chinchon, villarejo
            DB::table('counties')->insert([
				'county_name' => 'Vegas',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '117',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Valladolid
			//713
			//renedo, terradillos, santa maria, torresandino, amusquillo, canillas, encinas
            DB::table('counties')->insert([
				'county_name' => 'Esgueva',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//714
			//medina, tordesillas, mota, pozal, coleme
            DB::table('counties')->insert([
				'county_name' => 'Medina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//715
			//iscar, portillo, cabrejas, cuellar, olmedo
            DB::table('counties')->insert([
				'county_name' => 'Pinares',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//716
			//penafiel, corrales, curiel
            DB::table('counties')->insert([
				'county_name' => 'Penafiel',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//717
			//valladolid, simancas, fuensaldana, torrelobaton, villalba, tudela, santa maria, cabezon
            DB::table('counties')->insert([
				'county_name' => 'Pisuerga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//718
			//medina, uruena, villabragima, albergue
            DB::table('counties')->insert([
				'county_name' => 'Rioseco',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '118',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Castillian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Galicia
			//Coruna
			//719
			//coruna, arteijo, san salvador, culleredo, sada, san martin
            DB::table('counties')->insert([
				'county_name' => 'Coruna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//720
			//pontedeume, san juan, cabanas
            DB::table('counties')->insert([
				'county_name' => 'Eume',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//721
			//ferrol, mogardos, moeche
            DB::table('counties')->insert([
				'county_name' => 'Ferrol',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//722
			//santiago, altamira, vedra, san miguel
            DB::table('counties')->insert([
				'county_name' => 'Santiago',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//723
			//aranga, traba, san xurxo, vimianzo
            DB::table('counties')->insert([
				'county_name' => 'Trastamara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '119',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Lugo
			//724
			//lugo, castroverde, doiras, friol
            DB::table('counties')->insert([
				'county_name' => 'Lugo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//725
			//alfoz, foz, lorenzana, viveiro, ribadeo 
            DB::table('counties')->insert([
				'county_name' => 'Marina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//726
			//meira, pol, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Meira',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//727
			//sarria, incio, samos
            DB::table('counties')->insert([
				'county_name' => 'Sarria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//728
			//palas, monterosso
            DB::table('counties')->insert([
				'county_name' => 'Ulloa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '120',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Ourense
			//729
			//carballino, pinor, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Carballino',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//730
			//celanova, gomesende
            DB::table('counties')->insert([
				'county_name' => 'Celanova',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//731
			//ourense, barbadanes, san esteban, ribadavia, maceda
            DB::table('counties')->insert([
				'county_name' => 'Ourense',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//732
			//barco, villamartin, carbelleda
            DB::table('counties')->insert([
				'county_name' => 'Valdeorras',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//733
			//viana, monterrey
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '121',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Pontevedra
			//734
			//caldas, catoira, san lazaro
            DB::table('counties')->insert([
				'county_name' => 'Caldas',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//735
			//pontevedra, caldelas
            DB::table('counties')->insert([
				'county_name' => 'Pontevedra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//736
			//vigo, sobroso, tuy, tebra, tomino, sotomayor
            DB::table('counties')->insert([
				'county_name' => 'Vigo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '122',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Galician',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Leon
			//Caceres
			//737
			//valencia, herrera, alcantara, san vincente, eljas, brozas, penafiel
            DB::table('counties')->insert([
				'county_name' => 'Alcantara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//738
			//caceres, torreorgaz, mogollones, monroy, portezuelo, montanchez
            DB::table('counties')->insert([
				'county_name' => 'Caceres',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//739
			//plasencia, coria, galisteo, jarandilla, monfrague, valverde, segura
            DB::table('counties')->insert([
				'county_name' => 'Plasencia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//740
			//trujillo, almaraz, belvis
            DB::table('counties')->insert([
				'county_name' => 'Trujillo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '123',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Leon
			//741
			//astorga, san justo, santa colomba
            DB::table('counties')->insert([
				'county_name' => 'Astorga',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//742
			//baneza, castrillo, castrocalbon, destriana, san esteban, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Baneza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//743
			//ponferrada, cornatel, sarracin, san pedro, balboa, san andres, bembibre, villafranca
            DB::table('counties')->insert([
				'county_name' => 'Bierzo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//744
			//leon, san andres, ribaseca, san claudio, sariegos
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//745
			//sahagun, almanza, cea
            DB::table('counties')->insert([
				'county_name' => 'Sahagun',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '124',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Salamanca
			//746
			//alba, san leonardo, aldeaseca, anaya, coca, pedraza, pedrosillo
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//747
			//cantalapiedra, cantalpino, poveda, tarazona
            DB::table('counties')->insert([
				'county_name' => 'Cantalapiedra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//748
			//guijuelo, congosto, salvatierra
            DB::table('counties')->insert([
				'county_name' => 'Guijuelo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//749
			//ledesma, tremedal, monleras, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Ledesma',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//750
			//penaranda, alaraz, alconada, cantaracillo
            DB::table('counties')->insert([
				'county_name' => 'Penaranda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//751
			//rodrigo, ituero, espeja, fuentes, alameda, abusejo, aldahuela, yeltes, retortillo, tenebron, agallas, herguijuela, martiago
            DB::table('counties')->insert([
				'county_name' => 'Rodrigo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//752
			//salamanca, tamames, aldeatejada, arapiles, barbadillo, buenamadre, san munoz, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Salamanca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//753
			//vitigudino, san felices, ahigal, bogajo, cerralbo, fuenteliante, lumbrales, olmedo, masueco, mieza, perena, vilvestre, almendra
            DB::table('counties')->insert([
				'county_name' => 'Vitigudino',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '125',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Zamora
			//754
			//zamora, alcanices, alcorcillo, arcillera, villalonso
            DB::table('counties')->insert([
				'county_name' => 'Aliste',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//755
			//carbajales, cernadilla, manzanal, espadanedo, peque
            DB::table('counties')->insert([
				'county_name' => 'Carballeda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//756
			//guarrate, argujillo, canizal
            DB::table('counties')->insert([
				'county_name' => 'Guarena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//757
			//sanabria, otero, cerezal, calabor, santa cruz, san martin, trefacio, galende
            DB::table('counties')->insert([
				'county_name' => 'Sanabria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//758
			//bermillo, alfaraz, fermoselle, asmesnal, almeida, cabanas
            DB::table('counties')->insert([
				'county_name' => 'Sayago',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//759
			//tabara, faramontanos, moreruela, pozuelo, santa maria, santa eulalia
            DB::table('counties')->insert([
				'county_name' => 'Tabara',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '126',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Leonese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Asturias
			//Asturias
			//760
			//aviles, candamo, castrillon, gozon
            DB::table('counties')->insert([
				'county_name' => 'Aviles',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//761
			//gijon, carreno, villaviciosa, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Gijon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//762
			//navia, castropol, coana, san martin, san tirzo, santa eulalia
            DB::table('counties')->insert([
				'county_name' => 'Navia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//763
			//oviedo, bimenes, cabranes, grado, llanera, morcin, proaza, riosa, siero, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Oviedo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '127',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Asturian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Cantabria
			//764
			//reinosa, santa maria, san pedro, argueso, aguilar
            DB::table('counties')->insert([
				'county_name' => 'Campoo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//765
			//liebana, potes, piasca, san toribio
            DB::table('counties')->insert([
				'county_name' => 'Liebana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//766
			//santander, astillero, penagos
            DB::table('counties')->insert([
				'county_name' => 'Santander',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//767
			//miera, santona, san vincente, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Trasmiera',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '128',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Castile',
				'vernacular_culture' => 'Cantabrian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Portugal
			//Aveiro
			//768
			//aveiro, agueda, cima, santa maria, espinho, arouca, feira
            DB::table('counties')->insert([
				'county_name' => 'Aveiro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//769
			//braga, dumio, barcelos, guimaraes, sao andre
            DB::table('counties')->insert([
				'county_name' => 'Braga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//770
			//porto, cedofeita, amarante, trofa, penafiel, aguiar, quinta
            DB::table('counties')->insert([
				'county_name' => 'Porto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//771
			//viana, arcos, santa maria, fonces, caminha, melgaco
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '129',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Beira
			//772
			//branco, belmonte, fundao, serta
            DB::table('counties')->insert([
				'county_name' => 'Branco',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//773
			//coimbra, montemor, lorvao, soure, arouce, miranda
            DB::table('counties')->insert([
				'county_name' => 'Coimbra',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//774
			//guarda, sabugal, almeida, trancoso
            DB::table('counties')->insert([
				'county_name' => 'Guarda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//775
			//viseu, zurara, lamego, sao joao
            DB::table('counties')->insert([
				'county_name' => 'Viseu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '130',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Braganca
			//776
			//braganca, miranda, mirandela, mogadouro, vinhais
            DB::table('counties')->insert([
				'county_name' => 'Braganca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '131',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//777
			//vila real, vila pouca, alijo, boticas, montalegre, celeiros, murca, santa marta
            DB::table('counties')->insert([
				'county_name' => 'Vila Real',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '131',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Estremadura
			//778
			//leiria, pombal, alcobaca, batalha, nazare
            DB::table('counties')->insert([
				'county_name' => 'Leiria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//779
			//lisboa, alenquer, cascais, loures, lourinha, mafra, sintra
            DB::table('counties')->insert([
				'county_name' => 'Lisboa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//780
			//santarem, tomar, almourol
            DB::table('counties')->insert([
				'county_name' => 'Ribatejo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//781
			//setubal, moita, alcochete, almada, barreiro, montijo, palmela, sesimbra, seixal
            DB::table('counties')->insert([
				'county_name' => 'Setubal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '132',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Portugal',
				'vernacular_culture' => 'Portuguese',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Danelagen
			//Denmark
			//Jutland
			//782
			//aarhus, horsens, essenbaek, randers, alling, vissing, meilgaard, ulstrup
            DB::table('counties')->insert([
				'county_name' => 'Aarhus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//783
			//borglum, saeby, vrejlev, hundslund, dueholm, vestervig, hojen
            DB::table('counties')->insert([
				'county_name' => 'Borglum',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//784
			//ribe, seem, kolding, vejle
            DB::table('counties')->insert([
				'county_name' => 'Ribe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//785
			//slesvig, guldholm, flensburg, rude, tonder, logum, haderslev, alsborg, sonderborg, hedeby
            DB::table('counties')->insert([
				'county_name' => 'Slesvig',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//786
			//viborg, aalborg, sebber, vitskol, glenstrup, spottrup, drastrup
            DB::table('counties')->insert([
				'county_name' => 'Viborg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '133',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Scania
			//787
			//solvesborg, ronneby
            DB::table('counties')->insert([
				'county_name' => 'Blekinge',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//788
			//gamleborg, ronne, hammershus, aarsdale, nekso, gudhjem, hasle, aakirkeby, sandvig, svaneke
            DB::table('counties')->insert([
				'county_name' => 'Bornholm',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//789
			//falkenberg, varberg, halmstad, laholm, as
            DB::table('counties')->insert([
				'county_name' => 'Halland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'Falconry',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//790
			//hiddensee, maschenholt, bergen
            DB::table('counties')->insert([
				'county_name' => 'Rugen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//791
			//trelleborg, backaskog, barseback, borringe, bosjo, dyback, hovdala, karnan, lindholmen, smedstorp, lund, herrevad, malmohus, borgeby
            DB::table('counties')->insert([
				'county_name' => 'Scania',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '134',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Sjaeland
			//792
			//odense, assens, dalum, holme, faborg, svendborg, nyborg
            DB::table('counties')->insert([
				'county_name' => 'Funen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//793
			//nakskov, halsted, nysted, nykobing, aalholm, stubberup
            DB::table('counties')->insert([
				'county_name' => 'Lolland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//794
			//roskilde, koge, selso, vallo 				
            DB::table('counties')->insert([
				'county_name' => 'Roskilde',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//795
			//kobenhavn, esrum, asserbo, soborg
            DB::table('counties')->insert([
				'county_name' => 'Sjaeland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//796
			//soro, antvorskov, kalundborg, ringsted, naestved, vordingborg
            DB::table('counties')->insert([
				'county_name' => 'Soro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '135',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Danish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Norway
			//Nordjor (Northern Isles)
			//797
			//wick, halkirk, thurso, sinclair
            DB::table('counties')->insert([
				'county_name' => 'Caithness',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Pictish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//798
			//kirkwall, holm, sandwick, eynhallow, birsay
            DB::table('counties')->insert([
				'county_name' => 'Orkney',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//799
			//tingwall, sandsting, dunrossness, cunningsburgh
            DB::table('counties')->insert([
				'county_name' => 'Shetland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '136',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Sodor (Southern Isles)
			//800
			//dunyvaig, kilchoman, kildalton
            DB::table('counties')->insert([
				'county_name' => 'Islay',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//801
			//stornoway, duneistean, aignish
            DB::table('counties')->insert([
				'county_name' => 'Lewis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//802
			//iona, moy, aros, duart
            DB::table('counties')->insert([
				'county_name' => 'Mull',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//803
			//dunvegan, dunscaith, duntulm, portree, broadford
            DB::table('counties')->insert([
				'county_name' => 'Skye',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Britain',
				'vernacular_culture' => 'Scottish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//804
			//calvay, borve
            DB::table('counties')->insert([
				'county_name' => 'Uist',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '137',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Hedmark (eidsivating)
			//805
			//granavollen, tingelstad, lunner, ulnes, hedalen, lomen, slidre
            DB::table('counties')->insert([
				'county_name' => 'Hadeland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//806
			//hamar, loten, stange, tingnes, moelv
            DB::table('counties')->insert([
				'county_name' => 'Hedmark',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//807
			//lillestrom, sorum, lorenskog, raelingen, nes, eidsvoll, ullensaker 
            DB::table('counties')->insert([
				'county_name' => 'Romerike',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '138',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Oppland (frostating)
			//808
			//are, bodin, gildeskal, mattmar 
            DB::table('counties')->insert([
				'county_name' => 'Jamtland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//809
			//ranem, sakshaug, gangstadhaugen, snasa, maere, alstadhaug, stiklestad, orland, viklem
            DB::table('counties')->insert([
				'county_name' => 'Namdal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//810
			//lillehammer, lom, asnes, follebu, gausdal, ringebu, lena, hunn
            DB::table('counties')->insert([
				'county_name' => 'Oppland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Elder',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//811
			//trondheim, lade, stoksund, haltdalen, dolmoya, skaun, mebonden, vaernes 
            DB::table('counties')->insert([
				'county_name' => 'Trondelag',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '139',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Rogaland (gulating)
			//812
			//egersund, bjerkreim, heskestad 
            DB::table('counties')->insert([
				'county_name' => 'Dalane',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//813
			//haugesund, avaldsnes, torvestad
            DB::table('counties')->insert([
				'county_name' => 'Haugeland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//814
			//stavanger, tinghaug, tjora, njaerheim, ogna, varhaug 
            DB::table('counties')->insert([
				'county_name' => 'Jaeren',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//815
			//sauda, jelsa, hjelmeland, fister, ardal, strand, kvitsoy, suldal 
            DB::table('counties')->insert([
				'county_name' => 'Rogaland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '140',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Sorland (borgarting)
			//816
			//vanse, oddernes, mandal, spangereid, vigeland, vigmostad, birkenes, moland, hovag 
            DB::table('counties')->insert([
				'county_name' => 'Agder',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//817
			//skien, siljan, gjerpen, eidanger 
            DB::table('counties')->insert([
				'county_name' => 'Grenland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//818
			//eidsborg, bo, kviteseid, sauherad, nesodden, romnes, heddal, flatdal 
            DB::table('counties')->insert([
				'county_name' => 'Telemark',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '141',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Vestland (gulating)
			//819
			//vassas, bronnoy, odda 
            DB::table('counties')->insert([
				'county_name' => 'Hordaland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//820
			//veoya, aheim, borgund, orskog, rodven, vestnes, kvernes, edoy, tingvoll 
            DB::table('counties')->insert([
				'county_name' => 'Romsdal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//821
			//bergen, arstad, lyse, gimmestad
            DB::table('counties')->insert([
				'county_name' => 'Vestland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '142',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Gruit',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Viken (borgarting)
			//822
			//asker, baerum, haslum 
            DB::table('counties')->insert([
				'county_name' => 'Akershus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//823
			//hallingdal, roldal, flesberg, rollag, nore, uvdal, ringerike, hole 
            DB::table('counties')->insert([
				'county_name' => 'Buskerud',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//824
			//sarpsborg, askim, trogstad 
            DB::table('counties')->insert([
				'county_name' => 'Ostfold',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//825
			//kungahalla, marstrand, uddeval, kville, tanum, vettaland, herrestad, bohus 
            DB::table('counties')->insert([
				'county_name' => 'Ranrike',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//826
			//larvik, borre, tonsberg, skaun 
            DB::table('counties')->insert([
				'county_name' => 'Vestfold',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//827
			//oslo, vestby, hurum, frogn, nesodden, as, ski, enebakk  
            DB::table('counties')->insert([
				'county_name' => 'Vingulmark',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '143',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Norwegian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Sweden
			//Gotland
			//828
			//visby, hemse, vasterhejde, stenkumla, havdhem, kraklingbo, hajdeby, hastnas, roma
            DB::table('counties')->insert([
				'county_name' => 'Gotland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//829
			//linkoping, norrkoping, soderkoping, vadstena, skanninge, bjalbo, tidersrum, ekenas, vreta
            DB::table('counties')->insert([
				'county_name' => 'Ostergotland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//830
			//husaby, lacko, falkoping, skara, skovde, bogesund, ale, dalaborg, alvborg
            DB::table('counties')->insert([
				'county_name' => 'Vastergotland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '144',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Norrland
			//831
			//styresholm, sjalevads, arnas, anundsjo
            DB::table('counties')->insert([
				'county_name' => 'Angermanland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//832
			//torsaker, gavle, ockelbo
            DB::table('counties')->insert([
				'county_name' => 'Gastrikland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//833
			//ljusdal, bollnas
            DB::table('counties')->insert([
				'county_name' => 'Halsingland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '145',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Osterland
			//834
			//kastelholm, hammarland
            DB::table('counties')->insert([
				'county_name' => 'Aland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//835
			//turku, stenberga, somero, biskopsborg
            DB::table('counties')->insert([
				'county_name' => 'Finland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//836
			//viborg, kexholm, hamina, kouvola, hollola
            DB::table('counties')->insert([
				'county_name' => 'Karelia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//837
			//raseborg, koskela, esbo, kerava, hogfors
            DB::table('counties')->insert([
				'county_name' => 'Nyland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//838
			//ouluborg, korsholm
            DB::table('counties')->insert([
				'county_name' => 'Ostrobothnia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//839
			//kokemaki, vreghdenborg
            DB::table('counties')->insert([
				'county_name' => 'Satakunta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//840
			//olofsborg, saint michel
            DB::table('counties')->insert([
				'county_name' => 'Savonia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//841
			//hame, birkala
            DB::table('counties')->insert([
				'county_name' => 'Tavastland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '146',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Finnish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Smaland
			//842
			//borgholm, alby, ottenby, halltorp, kopingsvik
            DB::table('counties')->insert([
				'county_name' => 'Oland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '147',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//843
			//kalmar, vastervik, vaxjo, vimmerby, eksjo, ljungby, hulingsryd, hassleby, gamleby, nydala
            DB::table('counties')->insert([
				'county_name' => 'Smaland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '147',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Svealand
			//844
			//hedemora, avesta, falun, korsgard
            DB::table('counties')->insert([
				'county_name' => 'Dalarna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//845
			//orebro, riseberga, askersund, kumla, goksholm
            DB::table('counties')->insert([
				'county_name' => 'Narke',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//846
			//stockholm, strangnas, sodertalje, nykoping, torshalla, trosa, djursholm, horningsholm, birka
            DB::table('counties')->insert([
				'county_name' => 'Sodermanland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//847
			//uppsala, osthammar, riksby, stockby, solna, sollentuna, sigtuna, enkoping, alsno, penningby, orbyhus
            DB::table('counties')->insert([
				'county_name' => 'Uppland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Hemp',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//848
			//arvika, gunnarskog, varnums, alvdal
            DB::table('counties')->insert([
				'county_name' => 'Varmland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//849
			//arboga, norberg, bogard, skinnsackeberg, lindesberg, vasteras, vanstagard, vallstagard
            DB::table('counties')->insert([
				'county_name' => 'Vastmanland',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '148',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Norse',
				'vernacular_culture' => 'Swedish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Poland
			//Poland
			//Greater Poland
			//850
			//gostyn, kroben, punitz, borek, rawitz
            DB::table('counties')->insert([
				'county_name' => 'Gostyn',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Shep',
				'marke_poultry' => 'Chickens'
            ]);
			//851
			//grodisze, rakwitz, wielichowo, wollstein
            DB::table('counties')->insert([
				'county_name' => 'Grodisze',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//852
			//jarotschin, zerkow
            DB::table('counties')->insert([
				'county_name' => 'Jarotschin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//853
			//kosten, kriewen
            DB::table('counties')->insert([
				'county_name' => 'Kosten',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//854
			//lissa, oseczno, reisen
            DB::table('counties')->insert([
				'county_name' => 'Lissa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '149',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Lesser Poland
			//855
			//auswintz, zator, ossek
            DB::table('counties')->insert([
				'county_name' => 'Auswintz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//856
			//chrzanow, tchebin, libiaz
            DB::table('counties')->insert([
				'county_name' => 'Chrzanow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//857
			//sandez, grunberg, piwniczna, muszyna
            DB::table('counties')->insert([
				'county_name' => 'Sandez',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//858
			//tarnow, zabno, tuchow, woynitz, dunaiz, ryglitz, cieskowitz, radlow
            DB::table('counties')->insert([
				'county_name' => 'Tarnow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//859
			//wadowitz, andrichow
            DB::table('counties')->insert([
				'county_name' => 'Wadowitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//860
			//lublin, chelm
            DB::table('counties')->insert([
				'county_name' => 'Lublin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//861
			//lukow, stoczek
            DB::table('counties')->insert([
				'county_name' => 'Lukow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//862
			//sandomierz, zawichost, koprzywnica, klimontow, ostrow, kunow, keltz, swieta katarzyna
            DB::table('counties')->insert([
				'county_name' => 'Sandomierz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '150',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Gnesen
			//863
			//gnesen, tremessen, witkowo, schwarzenau, kletzko, malachowo, makownica, ruchocin
            DB::table('counties')->insert([
				'county_name' => 'Gnesen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//864
			//kolo, moosburg, dabie, klodawa
            DB::table('counties')->insert([
				'county_name' => 'Kolo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//865
			//kunau, schlusselsee, gohlen, buddenhof, sompolno, kleczew, marszewo
            DB::table('counties')->insert([
				'county_name' => 'Kunau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//866
			//slupca, hinterberg
            DB::table('counties')->insert([
				'county_name' => 'Slupca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//867
			//turek, tviliskow, dobra
            DB::table('counties')->insert([
				'county_name' => 'Turek',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//868
			//znin, bartschin
            DB::table('counties')->insert([
				'county_name' => 'Znin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '151',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Kalisz
			//869
			//kalisz, opatowek, stavischin
            DB::table('counties')->insert([
				'county_name' => 'Kalisz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//870
			//pleschen, chocz, dobrzyca, czermin
            DB::table('counties')->insert([
				'county_name' => 'Pleschen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//871
			//schildberg, kempen, grabow
            DB::table('counties')->insert([
				'county_name' => 'Schildberg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//872
			//wielun, ruda, wierzchlas, benandcize
            DB::table('counties')->insert([
				'county_name' => 'Wielun',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//873
			//wreschen, peisern
            DB::table('counties')->insert([
				'county_name' => 'Wreschen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '152',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Krakow
			//874
			//krakow, tyniec, babice, szlomnik, skala, salzberg, miechow, myslenitz, proszowitz, hebdow, gross salze, niepolomitz, sieroslawitz, plawowitz
            DB::table('counties')->insert([
				'county_name' => 'Krakow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//875
			//olkusz, wolbrom, boleslaw, skiborzyce
            DB::table('counties')->insert([
				'county_name' => 'Olkusz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//876
			//czestochowa, lelow, olsztyn
            DB::table('counties')->insert([
				'county_name' => 'Czestochowa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//877
			//gorlitz, beitsch, bobow, brigel
            DB::table('counties')->insert([
				'county_name' => 'Gorlitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '153',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Kuyavia
			//878
			//brodnica, kruszyny, jablonow, gorzino
            DB::table('counties')->insert([
				'county_name' => 'Brodnica',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//879
			//inowroclaw, kruschwitz, argenau, pakosch
            DB::table('counties')->insert([
				'county_name' => 'Inowroclaw',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//880
			//leipe, dobrin, zbyszewo, skepe, rypin, leslau
            DB::table('counties')->insert([
				'county_name' => 'Leipe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//881
			//mogilno, strelno
            DB::table('counties')->insert([
				'county_name' => 'Mogilno',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//882
			//naklo, schubin, kcynia, mrotschen
            DB::table('counties')->insert([
				'county_name' => 'Naklo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//883
			//radziejow, piotrkow
            DB::table('counties')->insert([
				'county_name' => 'Radziejow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '154',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Mazovia
			//884
			//losice, meseritz, drohiczyn, sokolow
            DB::table('counties')->insert([
				'county_name' => 'Losice',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//885
			//makow, rozan, ostroleka, pomian, wyszkow, pultusk, przasnysz, ciechanow
            DB::table('counties')->insert([
				'county_name' => 'Makow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//886
			//minsk, grebkow 
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//887
			//zuromin, biezun, sierp
            DB::table('counties')->insert([
				'county_name' => 'Zuromin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//888
			//rawa, rawska
            DB::table('counties')->insert([
				'county_name' => 'Rawa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//889
			//wizna, lomza, nowogrod
            DB::table('counties')->insert([
				'county_name' => 'Wizna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '155',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Plock
			//890
			//plock, drobin, wyszogrod, plonsk, sochaczew
            DB::table('counties')->insert([
				'county_name' => 'Plock',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//891
			//gostynin, gabin
            DB::table('counties')->insert([
				'county_name' => 'Gostynin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//892
			//mlawa, szrensk
            DB::table('counties')->insert([
				'county_name' => 'Mlawa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '156',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Posen
			//893
			//posen, schwersenz, moschin, bnin, pudewitz, radzim, kostschin, stenschewo, schroda
            DB::table('counties')->insert([
				'county_name' => 'Posen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//894
			//chodziez, samotschin, margonin
            DB::table('counties')->insert([
				'county_name' => 'Chodziez',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//895
			//gorzow, kustrin, vietz
            DB::table('counties')->insert([
				'county_name' => 'Gorzow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//896
			//pila, wirsitz, lobsens, usch, wissek, jastrow, krojanke
            DB::table('counties')->insert([
				'county_name' => 'Pila',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//897
			//rogasen, obornik
            DB::table('counties')->insert([
				'county_name' => 'Rogasen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//898
			//samter, wronke, pinne
            DB::table('counties')->insert([
				'county_name' => 'Samter',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//899
			//scharnikau, filehne, schonlanke
            DB::table('counties')->insert([
				'county_name' => 'Scharnikau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//900
			//schrim, ksiaz, dolsk
            DB::table('counties')->insert([
				'county_name' => 'Schrim',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '157',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Sieradz
			//901
			//sieradz, warta, schwarzau
            DB::table('counties')->insert([
				'county_name' => 'Sieradz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//902
			//radom, skaryszew, ilza, szydlowitz, garwolin, grojec
            DB::table('counties')->insert([
				'county_name' => 'Radom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//903
			//lentschitz, piatek, grabow
            DB::table('counties')->insert([
				'county_name' => 'Lentschitz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '158',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Warsaw
			//904
			//warsaw, brodnow, ujazdow, ozarow, blonie, piaseczno, grodzisk
            DB::table('counties')->insert([
				'county_name' => 'Warsaw',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '159',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//905
			//czersk, brusy, raciaz
            DB::table('counties')->insert([
				'county_name' => 'Czersk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '159',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Polish',
				'vernacular_culture' => 'Polish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Lithuania
			//Minsk
			//906
			//minsk, cherven
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//907
			//gomel, rechytsa, dobrush
            DB::table('counties')->insert([
				'county_name' => 'Gomel',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//908
			//mogilev, babruysk, drutsk
            DB::table('counties')->insert([
				'county_name' => 'Mogilev',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '160',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Lahoysk
			//909
			//lahoysk, dobrenovo
            DB::table('counties')->insert([
				'county_name' => 'Lahoysk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '161',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//910
			//barysaw, gora
            DB::table('counties')->insert([
				'county_name' => 'Barysaw',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '161',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Samogitia
			//911
			//panevezys, birsen, kupishik
            DB::table('counties')->insert([
				'county_name' => 'Panevezys',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//912
			//schaulen, bajenburg
            DB::table('counties')->insert([
				'county_name' => 'Schaulen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//913
			//redau, palanga, telsche, mazeike 
            DB::table('counties')->insert([
				'county_name' => 'Redau',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '162',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Tracken
			//914
			//alytus, grodno, lyda
            DB::table('counties')->insert([
				'county_name' => 'Alytus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '163',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//915
			//kauen, birstonas
            DB::table('counties')->insert([
				'county_name' => 'Kauen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '163',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//916
			//tracken, paneriai
            DB::table('counties')->insert([
				'county_name' => 'Tracken',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '163',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Vilnius
			//917
			//vilnius, kreva, medininkai
            DB::table('counties')->insert([
				'county_name' => 'Vilnius',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//918
			//kernave, vilkomir
            DB::table('counties')->insert([
				'county_name' => 'Kernave',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '164',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Baltic',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Hungary
			//Hungary
			//Hungary
			//919
			//gyor, bony, gyorladamer, pannonhalma
            DB::table('counties')->insert([
				'county_name' => 'Gyor',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//920
			//wieselburg, neusiedl, rackendorf
            DB::table('counties')->insert([
				'county_name' => 'Moson',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//921
			//kaposvar, barcs, fonyod, nagyatad, siofok, thob
            DB::table('counties')->insert([
				'county_name' => 'Somogy',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//922
			//sopron, mattersburg, eisenstadt, oberpullendorf
            DB::table('counties')->insert([
				'county_name' => 'Sopron',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//923
			//vasvar, kleinmariazell, oberwart, koszeg, szentgotthard, szombathely
            DB::table('counties')->insert([
				'county_name' => 'Vas',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//924
			//vezprem, ajka, papa, tapolca, varpalota, zirc, tihany
            DB::table('counties')->insert([
				'county_name' => 'Vezprem',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//925
			//zalaegerszeg, zalavar, keszthely, nagykanizsa, tolmaj, rezi, szanto, tatikavar, golombuk, almad
            DB::table('counties')->insert([
				'county_name' => 'Zala',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '165',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Buda
			//926
			//bac, kalocsa, kecskemet, pirtov, tatahaza, ujsolt
            DB::table('counties')->insert([
				'county_name' => 'Bac',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//927
			//pecs, mohacs, komlo, pecsvarad
            DB::table('counties')->insert([
				'county_name' => 'Baranya',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//928
			//esztergom, visegrad, muzla, sturovo
            DB::table('counties')->insert([
				'county_name' => 'Esztergom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//929
			//fehervar, mor
            DB::table('counties')->insert([
				'county_name' => 'Fejer',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//930
			//eger, kisnana, sirok, belapatfalva, feltarkan
            DB::table('counties')->insert([
				'county_name' => 'Heves',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//931
			//pest, buda, vecses, csekekata
            DB::table('counties')->insert([
				'county_name' => 'Pest',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//932
			//szolnok, jaszbereny, zenthmyclos, bekes, gyula, szarvas
            DB::table('counties')->insert([
				'county_name' => 'Szolnok',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '166',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Nitra
			//933
			//nitra, surany, hlohovec, topolcany, zabokreky, piestany, prievidza, holic, senica, trnovec, cachtice, beckov, ducove
            DB::table('counties')->insert([
				'county_name' => 'Nitra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//934
			//arvavaraylla, bingenstad, turdoschin
            DB::table('counties')->insert([
				'county_name' => 'Arva',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//935
			//bars, leva
            DB::table('counties')->insert([
				'county_name' => 'Bars',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//936
			//hont, vac
            DB::table('counties')->insert([
				'county_name' => 'Hont',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//937
			//komarom, zemianska, tata, hurbanovo
            DB::table('counties')->insert([
				'county_name' => 'Komarom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//938
			//liptoszentmiklos, hradok, lupca, ruzomberok
            DB::table('counties')->insert([
				'county_name' => 'Lipto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//939
			//orava, dolny
            DB::table('counties')->insert([
				'county_name' => 'Orava',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//940
			//pozsony, dunajska, galanta, malacky, trnava, samorin, senec
            DB::table('counties')->insert([
				'county_name' => 'Pozsony',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//941
			//trencsen, banovce, ilava, kischutz, bytca, puchov, povazky, sylna
            DB::table('counties')->insert([
				'county_name' => 'Trencsen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//942
			//besztercebanya, brezno, zvolen
            DB::table('counties')->insert([
				'county_name' => 'Zolyom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '167',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Temesvar
			//943
			//temesvar, deta, kovin, buzias, ciacova, werschetz
            DB::table('counties')->insert([
				'county_name' => 'Temesvar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Deer',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//944
			//arad, lipova, vinga
            DB::table('counties')->insert([
				'county_name' => 'Arad',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//945
			//bihar, nagyvarad
            DB::table('counties')->insert([
				'county_name' => 'Bihar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//946
			//csanad, marosvar
            DB::table('counties')->insert([
				'county_name' => 'Csanad',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//947
			//caransebes, lugoj
            DB::table('counties')->insert([
				'county_name' => 'Caransebes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '168',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Ungvar
			//948
			//ungvar, kapos, serednie
            DB::table('counties')->insert([
				'county_name' => 'Ungvar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//949
			//beregzasz, munkacs
            DB::table('counties')->insert([
				'county_name' => 'Bereg',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//950
			//borsod, miskolc
            DB::table('counties')->insert([
				'county_name' => 'Borsod',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//951
			//debrecen, szoboszlo
            DB::table('counties')->insert([
				'county_name' => 'Hajdu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//952
			//nyiregyhaza, kisvar, nagykallo, harangod, bakta, nyirbator, tiszanagyfalu
            DB::table('counties')->insert([
				'county_name' => 'Szabolcs',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//953
			//szatmar, mateszalka, nagybanya, nagykaroly, nagysomkut, szatmarnemeti
            DB::table('counties')->insert([
				'county_name' => 'Szatmar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//954
			//spis, levoca, gelnica, kesmark, lubovna, ofalu, varalja
            DB::table('counties')->insert([
				'county_name' => 'Szepes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//955
			//zemplen, tokaj, kysfalud, helmech, secovce, brekov, jasenov, cicava, sarospatak, zeltberg, szerencs, snina, vranov
            DB::table('counties')->insert([
				'county_name' => 'Zemplen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '169',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Transylvania
			//956
			//aranyosgyeres, felvinc, turda, miereschhall, torocko, mireslau, guylafehervar
            DB::table('counties')->insert([
				'county_name' => 'Aranyosszek',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//957
			//csiksomlyo, csikszereda
            DB::table('counties')->insert([
				'county_name' => 'Csikszek',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//958
			//sepsiszentgyorgy, kezdivasarhely, nagyajta 
            DB::table('counties')->insert([
				'county_name' => 'Haromzsek',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//959
			//koloszvar, szamosujvar, desvar
            DB::table('counties')->insert([
				'county_name' => 'Koloszvar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//960
			//marosvasarhely, teleki, mezosamsond
            DB::table('counties')->insert([
				'county_name' => 'Marosszek',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//961
			//szaszsebes, nagydisznod, nagyszeben, szelistye, szerdahely
            DB::table('counties')->insert([
				'county_name' => 'Szeben',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//962
			//udvarhely, marosheviz
            DB::table('counties')->insert([
				'county_name' => 'Udvarhelyszek',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '170',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Magyar',
				'vernacular_culture' => 'Hungarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Croatia
			//Dalmatia
			//963
			//bribir, skradin
            DB::table('counties')->insert([
				'county_name' => 'Bribir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//964
			//knin, drnis
            DB::table('counties')->insert([
				'county_name' => 'Knin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//965
			//udbina, lapac
            DB::table('counties')->insert([
				'county_name' => 'Krbava',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//966
			//gospic, sokolac, otocac, baska, senj
            DB::table('counties')->insert([
				'county_name' => 'Lika',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//967
			//modrus, ogulin, rijeka, kotor, bakar, slunj, dubovac
            DB::table('counties')->insert([
				'county_name' => 'Modrus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '171',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Ragusa
			//968
			//ragusa, trebinje, korcula, narona
            DB::table('counties')->insert([
				'county_name' => 'Ragusa',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//969
			//cetina, civljane, sibenik, vrlika, glavas, prozor, sinj, trilj, stolac, gradac
            DB::table('counties')->insert([
				'county_name' => 'Cetina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//970
			//kotor, dobrota, risan
            DB::table('counties')->insert([
				'county_name' => 'Kotor',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '172',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Slavonia
			//971
			//zagreb, sisak
            DB::table('counties')->insert([
				'county_name' => 'Zagreb',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//972
			//bjelovar, cazma, daruvar
            DB::table('counties')->insert([
				'county_name' => 'Bjelovar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//973
			//pozega, pakrac
            DB::table('counties')->insert([
				'county_name' => 'Pozega',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//974
			//vukovar, szavaszentdemeter
            DB::table('counties')->insert([
				'county_name' => 'Syrmia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//975
			//varazdin, ludbreg
            DB::table('counties')->insert([
				'county_name' => 'Varazdin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//976
			//veroce, osijek, nasice, dakovo
            DB::table('counties')->insert([
				'county_name' => 'Veroce',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '173',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Split
			//977
			//split, klis, solin, hvar, makarska
            DB::table('counties')->insert([
				'county_name' => 'Split',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '174',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//978
			//trogir, komiza
            DB::table('counties')->insert([
				'county_name' => 'Trogir',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '174',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Zadar
			//979
			//zadar, orbrovac, pag, nin, benkovac, starigrad, rab
            DB::table('counties')->insert([
				'county_name' => 'Zadar',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//980
			//cres, lubenice, martinscica, losinj, osor
            DB::table('counties')->insert([
				'county_name' => 'Cres',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//981
			//veglia, jurandvor, vrbnik, moschau, dobrinj
            DB::table('counties')->insert([
				'county_name' => 'Veglia',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '175',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Croat',
				'vernacular_culture' => 'Croatian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sicily
			//Palermo
			//982
			//palermo, momreale, corleone, santa anna
            DB::table('counties')->insert([
				'county_name' => 'Palermo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//983
			//caccamo, termini
            DB::table('counties')->insert([
				'county_name' => 'Caccamo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//984
			//cefalu, castelbuono
            DB::table('counties')->insert([
				'county_name' => 'Cefalu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '176',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Trapani
			//985
			//trapani, erice
            DB::table('counties')->insert([
				'county_name' => 'Trapani',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//986
			//alcamo, castellammare
            DB::table('counties')->insert([
				'county_name' => 'Alcamo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//987
			//marsala, mazara, castelvetrano, motya
            DB::table('counties')->insert([
				'county_name' => 'Marsala',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '177',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Messina
			//988
			//messina, oliveri, santa maria 
            DB::table('counties')->insert([
				'county_name' => 'Messina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//989
			//milazzo, patti, tindari
            DB::table('counties')->insert([
				'county_name' => 'Milazzo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//990
			//taormina, mola
            DB::table('counties')->insert([
				'county_name' => 'Taormina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '178',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Agrigento
			//991
			//agrigento, sciacca
            DB::table('counties')->insert([
				'county_name' => 'Agrigento',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//992
			//licata, montechiaro
            DB::table('counties')->insert([
				'county_name' => 'Licata',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//993
			//gela, riesi
            DB::table('counties')->insert([
				'county_name' => 'Gela',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//994
			//caltanisetta, mazzarino, mussomeli, mafredonico 
            DB::table('counties')->insert([
				'county_name' => 'Caltanisetta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '179',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Catania
			//995
			//catania, aci
            DB::table('counties')->insert([
				'county_name' => 'Catania',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '180',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//996
			//caltagirone, mirabella
            DB::table('counties')->insert([
				'county_name' => 'Caltagirone',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '180',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Siracusa
			//997
			//siracusa, noto, maniace, mottava
            DB::table('counties')->insert([
				'county_name' => 'Siracusa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '181',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//998
			//modica, scicli, ispica, monterosso
            DB::table('counties')->insert([
				'county_name' => 'Modica',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '181',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//999
			//ragusa, chiaramonte, comiso, giarratana
            DB::table('counties')->insert([
				'county_name' => 'Ragusa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '181',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sicily',
				'vernacular_culture' => 'Sicilian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Naples
			//Naples
			//1000
			//naples, giugliano, casoria, afragola, acerra, marano, melito, portici
            DB::table('counties')->insert([
				'county_name' => 'Naples',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1001
			//aversa, frignano, san marcellino
            DB::table('counties')->insert([
				'county_name' => 'Aversa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1002
			//nola, marciano, saviano
            DB::table('counties')->insert([
				'county_name' => 'Nola',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Capua
			//1003
			//volturno, pantano
            DB::table('counties')->insert([
				'county_name' => 'Volturno',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '182',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1004
			//capua, san angelo, cajazzo, carinola, presenzano
            DB::table('counties')->insert([
				'county_name' => 'Capua',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '183',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1005
			//caserta, mondragone
            DB::table('counties')->insert([
				'county_name' => 'Caserta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '183',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Amalfi
			//1006
			//amalfi, ravello, scala, scalelle
            DB::table('counties')->insert([
				'county_name' => 'Amalfi',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1007
			//sorrento, torca
            DB::table('counties')->insert([
				'county_name' => 'Sorrento',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '184',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Calabria
			//1008
			//catanzaro, san floro, squillace
            DB::table('counties')->insert([
				'county_name' => 'Catanzaro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1009
			//cosenza, mendicino, santa maria, san vito
            DB::table('counties')->insert([
				'county_name' => 'Cosenza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1010
			//crotone, caccuri, ciro, santa severina
            DB::table('counties')->insert([
				'county_name' => 'Crotone',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1011
			//reggio, catona
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '185',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Basilicata
			//1012
			//matera, montescaglioso, camarda, pisticci, policoro
            DB::table('counties')->insert([
				'county_name' => 'Matera',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1013
			//potenza, acerenza, melfi
            DB::table('counties')->insert([
				'county_name' => 'Potenza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '186',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Lavender',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Taranto
			//1014
			//taranto, avetrana, castellaneta, crispiano, manduria, mottola, sava
            DB::table('counties')->insert([
				'county_name' => 'Taranto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//1015
			//bari, conversano, mola, san vito
            DB::table('counties')->insert([
				'county_name' => 'Bari',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1016
			//brindisi, mesagne, san demetrio, san donaci, serranova
            DB::table('counties')->insert([
				'county_name' => 'Brindisi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//1017
			//lecce, ostuni, san domenico, monteroni, nardo, mazzetta
            DB::table('counties')->insert([
				'county_name' => 'Lecce',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '187',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Foggia
			//1018
			//foggia, vico, ischitella, san pietro, lucera, bovino
            DB::table('counties')->insert([
				'county_name' => 'Foggia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1019
			//fiorentino, dragonara, san severo, san paolo
            DB::table('counties')->insert([
				'county_name' => 'Sangro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1020
			//lesina, san matteo
            DB::table('counties')->insert([
				'county_name' => 'Lesina',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1021
			//termoli, san giacomo, larino
            DB::table('counties')->insert([
				'county_name' => 'Termoli',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '188',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Benevento
			//1022
			//benevento, montesarchio, santa agata, san marco
            DB::table('counties')->insert([
				'county_name' => 'Benevento',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1023
			//bojano, san massimo, monteverde
            DB::table('counties')->insert([
				'county_name' => 'Bojano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1024
			//isernia, carpinone, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Isernia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1025
			//molise, frosolone
            DB::table('counties')->insert([
				'county_name' => 'Molise',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1026
			//alife, san simeone
            DB::table('counties')->insert([
				'county_name' => 'Alife',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1027
			//calvi, san giorgio, venticano
            DB::table('counties')->insert([
				'county_name' => 'Calvi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1028
			//celano, santa jona
            DB::table('counties')->insert([
				'county_name' => 'Celano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1029
			//mignano, gallucio, venafro, triverno
            DB::table('counties')->insert([
				'county_name' => 'Mignano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '189',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Salerno
			//1030
			//salerno, cava, san lorenzo
            DB::table('counties')->insert([
				'county_name' => 'Salerno',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '190',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1031
			//castiglione, baronissi, fisciano
            DB::table('counties')->insert([
				'county_name' => 'Castiglione',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '190',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1032
			//padula, san giacomo
            DB::table('counties')->insert([
				'county_name' => 'Cilento',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '190',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Napels',
				'vernacular_culture' => 'Neapolitan',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sardinia
			//Gallura
			//1033
			//olbia, maddalena, santa teresa, pedres
            DB::table('counties')->insert([
				'county_name' => 'Olbia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '191',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1034
			//montacuto, berchidda, castro
            DB::table('counties')->insert([
				'county_name' => 'Montacuto',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '191',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Logudoro 
			//1035
			//torres, santa andrea, santa giusta
            DB::table('counties')->insert([
				'county_name' => 'Torres',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '192',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1036
			//sassari, ottava, usini
            DB::table('counties')->insert([
				'county_name' => 'Sassari',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '192',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Arborea
			//1037
			//oristano, tharros, santa giusta
            DB::table('counties')->insert([
				'county_name' => 'Oristano',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '193',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//1038
			//sanluri, monreale, sardara, collinas
            DB::table('counties')->insert([
				'county_name' => 'Campadino',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '193',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Cagliari
			//1039
			//cagliari, furtei, monastir
            DB::table('counties')->insert([
				'county_name' => 'Cagliari',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '194',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//1040
			//tortoli, nuoro, orosei
            DB::table('counties')->insert([
				'county_name' => 'Oglistria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '194',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//1041
			//castiadas, san vito
            DB::table('counties')->insert([
				'county_name' => 'Sarrabus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '194',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => 'Matter_Sardinia',
				'vernacular_culture' => 'Sardinian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Byzantine
			//Thrace
			//Thrace
			//1042
			//constantinople
            DB::table('counties')->insert([
				'county_name' => 'Constantinople',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '195',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//1043
			//ergisce
            DB::table('counties')->insert([
				'county_name' => 'Ergisce',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '195',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Macedonia
			//
			//adrianople, meric, hosa
            DB::table('counties')->insert([
				'county_name' => 'Adrianople',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bergule, cypsela, ergene, plotinopolis, heroic
            DB::table('counties')->insert([
				'county_name' => 'Bergule',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//traianapolis, mosynopolis, rusion
            DB::table('counties')->insert([
				'county_name' => 'Traianopolis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Thessalonica
			//Hellas
			//
			//athens
            DB::table('counties')->insert([
				'county_name' => 'Attica',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//thebes
            DB::table('counties')->insert([
				'county_name' => 'Boeotia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//chalcis
            DB::table('counties')->insert([
				'county_name' => 'Euboea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//larissa, elassona, farsala
            DB::table('counties')->insert([
				'county_name' => 'Thessaly',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lamia, thaumace, ravenica, amphissa, bodonitsa
            DB::table('counties')->insert([
				'county_name' => 'Phthia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Peloponessos
			//
			//corinth, nemea
            DB::table('counties')->insert([
				'county_name' => 'Corinthia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//argos
            DB::table('counties')->insert([
				'county_name' => 'Argos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//patras
            DB::table('counties')->insert([
				'county_name' => 'Patras',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//monemvasia
            DB::table('counties')->insert([
				'county_name' => 'Laconia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Candia
			//
			//heraklion
            DB::table('counties')->insert([
				'county_name' => 'Heraklion',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//chania
            DB::table('counties')->insert([
				'county_name' => 'Chania',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Archipelago
			//
			//chios, anavatos, pyrgi, elata, mesta, nea moni, volissos
            DB::table('counties')->insert([
				'county_name' => 'Chios',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Epirus
			//
			//naupaktos
            DB::table('counties')->insert([
				'county_name' => 'Naupaktos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Thessalonica
			//
			//thessalonica
            DB::table('counties')->insert([
				'county_name' => 'Thessalonica',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Strymon
			//
			//serres
            DB::table('counties')->insert([
				'county_name' => 'Serres',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//christoupolis
            DB::table('counties')->insert([
				'county_name' => 'Christoupolis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Trebizond
			//Paphlagonia
			//
			//germanicopolis
            DB::table('counties')->insert([
				'county_name' => 'Germanicopolis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Armeniac
			//
			//amasia
            DB::table('counties')->insert([
				'county_name' => 'Amasia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Chaldia
			//
			//trapezus
            DB::table('counties')->insert([
				'county_name' => 'Trapezus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Crimea
			//
			//chersonesus
            DB::table('counties')->insert([
				'county_name' => 'Chersonesus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Anatolia
			//Samos
			//
			//samos, pythagoreion, makrini
            DB::table('counties')->insert([
				'county_name' => 'Samos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ephesos
            DB::table('counties')->insert([
				'county_name' => 'Ephesos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//smyrna
            DB::table('counties')->insert([
				'county_name' => 'Smyrna',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Thracesia
			//
			//sardes
            DB::table('counties')->insert([
				'county_name' => 'Sardes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//chonae
            DB::table('counties')->insert([
				'county_name' => 'Chonae',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Bucellaria
			//
			//ancyra, balbadon
            DB::table('counties')->insert([
				'county_name' => 'Ancyra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Anatolia
			//
			//iconium
            DB::table('counties')->insert([
				'county_name' => 'Iconium',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Cappadocia
			//
			//caesarea
            DB::table('counties')->insert([
				'county_name' => 'Caesarea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Seleucia
			//
			//seleucea
            DB::table('counties')->insert([
				'county_name' => 'Seleucea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//adana, mopsuestia, sis, arqakaghni, drazark, yuregir
            DB::table('counties')->insert([
				'county_name' => 'Adana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tarsos, zephyrion
            DB::table('counties')->insert([
				'county_name' => 'Tarsos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Opsicia
			//
			//cyzicus
            DB::table('counties')->insert([
				'county_name' => 'Cyzicus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Nicaea
			//
			//nicaea
            DB::table('counties')->insert([
				'county_name' => 'Nicaea',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Lycia
			//
			//rhodes
            DB::table('counties')->insert([
				'county_name' => 'Rhodes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Pamphylia
			//
			//attaleia
            DB::table('counties')->insert([
				'county_name' => 'Attaleia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Byzantine',
				'vernacular_culture' => 'Greek',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Georgia
			//Georgia
			//Georgia
			//Colchis
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Phasis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//pityus
            DB::table('counties')->insert([
				'county_name' => 'Pityus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//kutaisi, gelati
            DB::table('counties')->insert([
				'county_name' => 'Imereti',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//batumi
            DB::table('counties')->insert([
				'county_name' => 'Batumi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Javakheti
			//
			//akhalkalaki
            DB::table('counties')->insert([
				'county_name' => 'Akhalkalaki',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Kartli
			//
			//bolnisi
            DB::table('counties')->insert([
				'county_name' => 'Bolnisi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tiblisi
            DB::table('counties')->insert([
				'county_name' => 'Tiblisi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//rustavi
            DB::table('counties')->insert([
				'county_name' => 'Rustavi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//gori
            DB::table('counties')->insert([
				'county_name' => 'Gori',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Kakheti
			//
			//telavi, ikalto
            DB::table('counties')->insert([
				'county_name' => 'Telavi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Georgia',
				'vernacular_culture' => 'Georgian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Armenia
			//Vaspurakan
			//
			//van
            DB::table('counties')->insert([
				'county_name' => 'Van',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Taron
			//
			//acilisene
            DB::table('counties')->insert([
				'county_name' => 'Acilisene',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//karapet
            DB::table('counties')->insert([
				'county_name' => 'Karapet',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Kars
			//
			//kars
            DB::table('counties')->insert([
				'county_name' => 'Kars',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ani
            DB::table('counties')->insert([
				'county_name' => 'Ani',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Azerbaijan
			//
			//baku
            DB::table('counties')->insert([
				'county_name' => 'Baku',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//rasht, rudhkan, koshkt, kuchesfahan, lasht
            DB::table('counties')->insert([
				'county_name' => 'Rasht',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Armenia',
				'vernacular_culture' => 'Armenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Kievan Rus
			//Kyiv
			//Kyiv 
			//
			//kyiv, podil, pechersk, vydubychi, chvastiv, vyshhorod, mezhyhirya, yuriiv, chernobyl, lyutizh, boiarka, chabany, kozyn, trypillia
            DB::table('counties')->insert([
				'county_name' => 'Kyiv',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Boar',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bratslav, vinnytsia
            DB::table('counties')->insert([
				'county_name' => 'Bratslav',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//cherkasy, kaniv, bohuslav, korsun 
            DB::table('counties')->insert([
				'county_name' => 'Cherkasy',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//korosten, ovruch, zhytomyr
            DB::table('counties')->insert([
				'county_name' => 'Korosten',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Pereyaslavl
			//
			//pereyaslavl, boryspil
            DB::table('counties')->insert([
				'county_name' => 'Pereyaslavl',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//poltava, lubny
            DB::table('counties')->insert([
				'county_name' => 'Poltava',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Chernigov
			//Chernigov
			//
			//chernigov, kozelets, sedniv
            DB::table('counties')->insert([
				'county_name' => 'Chernigov',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bryansk, kursk, oryol, rylsk, starodub, trubcvesk, sevsk, belgorod, svensky
            DB::table('counties')->insert([
				'county_name' => 'Bryansk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Cider',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lyubech, loyew
            DB::table('counties')->insert([
				'county_name' => 'Lyubech',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//mozhaysk, borodino
            DB::table('counties')->insert([
				'county_name' => 'Mozhaysk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//novosil, odoyev
            DB::table('counties')->insert([
				'county_name' => 'Novosil',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Ryazan
			//
			//ryazan, kadom, yelatma, pronsk
            DB::table('counties')->insert([
				'county_name' => 'Ryazan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//murom, borisoglebsky
            DB::table('counties')->insert([
				'county_name' => 'Murom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tula, belyov
            DB::table('counties')->insert([
				'county_name' => 'Tula',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//kaluga, mosalsk, kozelsk, tarusa, obolensk
            DB::table('counties')->insert([
				'county_name' => 'Kaluga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//vorotynsk, peremyshl, karachev
            DB::table('counties')->insert([
				'county_name' => 'Vorotynsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Halych
			//Halych
			//
			//halych, kolomyia
            DB::table('counties')->insert([
				'county_name' => 'Halych',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//peremyshl, sambir, lubaczow
            DB::table('counties')->insert([
				'county_name' => 'Peremyshl',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lviv, grodek, zudech
            DB::table('counties')->insert([
				'county_name' => 'Lviv',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//belz, sokal 
            DB::table('counties')->insert([
				'county_name' => 'Belz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Podolia
			//
			//kamianets, chernivtsi, khotyn 
            DB::table('counties')->insert([
				'county_name' => 'Podolia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//terebovlia, moklekov
            DB::table('counties')->insert([
				'county_name' => 'Terebovlia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Volhynia
			//
			//volodymyr, kovel, ratne, shatsk
            DB::table('counties')->insert([
				'county_name' => 'Volhynia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//brest, belz
            DB::table('counties')->insert([
				'county_name' => 'Brest',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//kremenets, shumsk
            DB::table('counties')->insert([
				'county_name' => 'Kremenets',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lutsk, busk
            DB::table('counties')->insert([
				'county_name' => 'Lutsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Turov
			//
			//turov, pinsk, mazyr
            DB::table('counties')->insert([
				'county_name' => 'Turov',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//slutsk, kletsk
            DB::table('counties')->insert([
				'county_name' => 'Slutsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Ruthenian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Vladimir
			//Vladimir
			//
			//vladimir, kirzhach, gavrilov
            DB::table('counties')->insert([
				'county_name' => 'Vladimir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//vyazniki, yaropolk 
            DB::table('counties')->insert([
				'county_name' => 'Vyazniki',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//nizhny novgorod, gorokhovets, gorodets
            DB::table('counties')->insert([
				'county_name' => 'Nizhny Novgorod',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Moscow
			//
			//moscow, orekhovo, korolyov, danilov
            DB::table('counties')->insert([
				'county_name' => 'Moscow',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//dmitrov, sergiyev, dedenyovo
            DB::table('counties')->insert([
				'county_name' => 'Dmitrov',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//volokolamsk, lotoshino
            DB::table('counties')->insert([
				'county_name' => 'Volokolamsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//zvenigorod, ruza 
            DB::table('counties')->insert([
				'county_name' => 'Zvenigorod',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Suzdal
			//
			//suzdal, ves
            DB::table('counties')->insert([
				'county_name' => 'Suzdal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//yuryev, kuzmadino
            DB::table('counties')->insert([
				'county_name' => 'Yuryev',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//starodub, kovrov
            DB::table('counties')->insert([
				'county_name' => 'Starodub',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Smolensk
			//Smolensk
			//
			//smolensk, monastyrshchina, gnezdovo
            DB::table('counties')->insert([
				'county_name' => 'Smolensk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//roslavl, vyazma
            DB::table('counties')->insert([
				'county_name' => 'Roslavl',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//toropets, morsow
            DB::table('counties')->insert([
				'county_name' => 'Toropets',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//mstivlavl, svyato
            DB::table('counties')->insert([
				'county_name' => 'Mstislavl',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Rzhev
			//
			//rzhev, eltsy
            DB::table('counties')->insert([
				'county_name' => 'Rzhev',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//zubtsov, gorodok
            DB::table('counties')->insert([
				'county_name' => 'Zubtsov',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Affer',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Tver
			//
			//tver, kashin, ostakhov, torzhok, klin
            DB::table('counties')->insert([
				'county_name' => 'Tver',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//galich, soligalich, makaryev
            DB::table('counties')->insert([
				'county_name' => 'Galich',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//kostroma, ipatiev, nerekhta
            DB::table('counties')->insert([
				'county_name' => 'Kostroma',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//pereslavl, nikitsky
            DB::table('counties')->insert([
				'county_name' => 'Pereslavl',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//rostov, sarsky
            DB::table('counties')->insert([
				'county_name' => 'Rostov',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//yaroslavl, uglich, vologda, cherepovets
            DB::table('counties')->insert([
				'county_name' => 'Yaroslavl',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Novgorod
			//Novgorod
			//
			//novgorod, rusa 
            DB::table('counties')->insert([
				'county_name' => 'Novgorod',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'Fur',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ladoga, oreshek, keksholm, koporye
            DB::table('counties')->insert([
				'county_name' => 'Ladoga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Polotsk
			//
			//polotsk, rasony
            DB::table('counties')->insert([
				'county_name' => 'Polotsk',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => '',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//zaslawye, krevo, golshany
            DB::table('counties')->insert([
				'county_name' => 'Zaslawye',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => '',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//vitebsk, orsha, gorodok
            DB::table('counties')->insert([
				'county_name' => 'Vitebsk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Catholic',
				'vernacular_cycle' => '',
				'vernacular_culture' => 'Lithuanian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Pleskov
			//
			//pleskov, opochka, gdov, porkhov, ostrov, izborsk
            DB::table('counties')->insert([
				'county_name' => 'Pleskov',
				'county_category' => 'Patrician_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//kholm, velikiye luki
            DB::table('counties')->insert([
				'county_name' => 'Kholm',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Greek',
				'vernacular_cycle' => 'Matter_Rus',
				'vernacular_culture' => 'Russian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Honey',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Sumpter',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Bulgaria
			//Bulgaria
			//Preslav
			//
			//preslav
            DB::table('counties')->insert([
				'county_name' => 'Preslav',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Bulgaria',
				'vernacular_culture' => 'Bulgarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Tarnovo
			//
			//tarnovo
            DB::table('counties')->insert([
				'county_name' => 'Tarnovo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Bulgaria',
				'vernacular_culture' => 'Bulgarian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Wallachia
			//Wallachia
			//
			//targoviste
            DB::table('counties')->insert([
				'county_name' => 'Targoviste',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Moldavia
			//
			//suceava
            DB::table('counties')->insert([
				'county_name' => 'Suceava',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Bulgarian',
				'vernacular_cycle' => 'Matter_Vlach',
				'vernacular_culture' => 'Wallachian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Serbia
			//Serbia
			//Rashka
			//
			//ras, studenica
            DB::table('counties')->insert([
				'county_name' => 'Rashka',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Bosnia
			//Bosnia
			//
			//srebrenik
            DB::table('counties')->insert([
				'county_name' => 'Srebrenik',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Orthodox_Serbian',
				'vernacular_cycle' => 'Matter_Serbia',
				'vernacular_culture' => 'Serbian',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Cordoba
			//Andalucia
			//Algeciras
			//
			//algeciras
            DB::table('counties')->insert([
				'county_name' => 'Algeciras',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//gibraltar
            DB::table('counties')->insert([
				'county_name' => 'Gibraltar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Almeria
			//
			//almeria
            DB::table('counties')->insert([
				'county_name' => 'Almeria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//baza, cullar, caniles, benamaurel, freila
            DB::table('counties')->insert([
				'county_name' => 'Baza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Arcos
			//
			//cadiz, arcos, olvera, alcala, espera, zahara, ubrique, bornos
            DB::table('counties')->insert([
				'county_name' => 'Cadiz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jerez
            DB::table('counties')->insert([
				'county_name' => 'Jerez',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//sanlucar
            DB::table('counties')->insert([
				'county_name' => 'Sanlucar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Carmona
			//
			//carmona
            DB::table('counties')->insert([
				'county_name' => 'Carmona',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ecija
            DB::table('counties')->insert([
				'county_name' => 'Ecija',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//Cordoba
			//
			//andujar
            DB::table('counties')->insert([
				'county_name' => 'Andujar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//carpio
            DB::table('counties')->insert([
				'county_name' => 'Carpio',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//cordoba, azahara, balma, santa cruz, bujalance, santa isabel
            DB::table('counties')->insert([
				'county_name' => 'Cordoba',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//rute, lucena, cabra
            DB::table('counties')->insert([
				'county_name' => 'Subbetica',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//baena, qasira, espejo
            DB::table('counties')->insert([
				'county_name' => 'Baena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//montilla, aguilar, montemayor
            DB::table('counties')->insert([
				'county_name' => 'Cordobesa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//martos
            DB::table('counties')->insert([
				'county_name' => 'Martos',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Woad',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//pedroche
            DB::table('counties')->insert([
				'county_name' => 'Pedroche',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Granada
			//
			//orgiva, castaras, juviles, trevelez, valor, portugos, torvizcon
            DB::table('counties')->insert([
				'county_name' => 'Alpujarra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//baeza
            DB::table('counties')->insert([
				'county_name' => 'Baeza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//linares
            DB::table('counties')->insert([
				'county_name' => 'Morena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//granada, albolote, alfacar, beas, churriana, cogollos, lachar, peligros
            DB::table('counties')->insert([
				'county_name' => 'Granada',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//guadix
            DB::table('counties')->insert([
				'county_name' => 'Guadix',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jaen, andujar
            DB::table('counties')->insert([
				'county_name' => 'Jaen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//orjiva
            DB::table('counties')->insert([
				'county_name' => 'Lecrin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//motril
            DB::table('counties')->insert([
				'county_name' => 'Motril',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//torvizcon
            DB::table('counties')->insert([
				'county_name' => 'Torvizcon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ubeda
            DB::table('counties')->insert([
				'county_name' => 'Ubeda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Malaga
			//
			//alhama
            DB::table('counties')->insert([
				'county_name' => 'Alhama',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//antequera
            DB::table('counties')->insert([
				'county_name' => 'Antequerra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//loja
            DB::table('counties')->insert([
				'county_name' => 'Loja',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//malaga
            DB::table('counties')->insert([
				'county_name' => 'Malaga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Ronda
			//
			//marbella
            DB::table('counties')->insert([
				'county_name' => 'Marbella',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ronda
            DB::table('counties')->insert([
				'county_name' => 'Ronda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Sevilla
			//
			//albaida, gines, gelves, olivares, pilas, tomares, san isidore
            DB::table('counties')->insert([
				'county_name' => 'Aljarafe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//estepa
            DB::table('counties')->insert([
				'county_name' => 'Estepa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//sevilla, cartuja, utrera, san luis
            DB::table('counties')->insert([
				'county_name' => 'Sevilla',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Algarves
			//Algarves
			//
			//faro, tavira, alcoutim, salir
            DB::table('counties')->insert([
				'county_name' => 'Faro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//mertola, serpa, moura, noudar
            DB::table('counties')->insert([
				'county_name' => 'Mertola',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//silves, lagos, alcantarilha, aljezur, alvor, paderne
            DB::table('counties')->insert([
				'county_name' => 'Silves',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Badajoz
			//
			//badajoz, albuquerque, talavera, barbacena, elvas
            DB::table('counties')->insert([
				'county_name' => 'Badajoz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//beja, ourique, vidigueira, messejana, cola, alvito, aljustrel
            DB::table('counties')->insert([
				'county_name' => 'Beja',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//evora, alandroal, arraiolos, estremoz, mourao, viana, redondo, portel
            DB::table('counties')->insert([
				'county_name' => 'Evora',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//medellin, guarena
            DB::table('counties')->insert([
				'county_name' => 'Guadiana',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//llerena, berlanga, usagre, azuaga
            DB::table('counties')->insert([
				'county_name' => 'Llerena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//merida, zafra, valverde, mirandilla, san servan, alange, calzada, lobon
            DB::table('counties')->insert([
				'county_name' => 'Merida',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//olivenza, nogales, alconchel, higuera
            DB::table('counties')->insert([
				'county_name' => 'Olivenza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//portalegre, alegrete, avis, monforte, marvao
            DB::table('counties')->insert([
				'county_name' => 'Portalegre',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//villanueva, castuera
            DB::table('counties')->insert([
				'county_name' => 'Serena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Pigs',
				'marke_poultry' => 'Chickens'
            ]);
			//Huelva
			//
			//aracena, santa eulalia, aroche, cala, cortegana, santa olalla
            DB::table('counties')->insert([
				'county_name' => 'Aracena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//huelva, ayamonte, cartaya
            DB::table('counties')->insert([
				'county_name' => 'Huelva',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//niebla, moguer, almonte
            DB::table('counties')->insert([
				'county_name' => 'Niebla',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Kermes',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Levante
			//Alpuente
			//
			//huete, almonacid, guadalajara, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Alcarria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//almarza, buitrago
            DB::table('counties')->insert([
				'county_name' => 'Almarza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alcala, valverde, pezuela, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Henares',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//medinaceli, arcos, somaen
            DB::table('counties')->insert([
				'county_name' => 'Medinaceli',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//molina, ventosa, tortuera
            DB::table('counties')->insert([
				'county_name' => 'Molina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alpuente, cuenca, atienza, siguenza, bonaval
            DB::table('counties')->insert([
				'county_name' => 'Serrania',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Baleares
			//
			//ibiza
            DB::table('counties')->insert([
				'county_name' => 'Ibiza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//palma
            DB::table('counties')->insert([
				'county_name' => 'Mallorca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alayor, ciudadela, mahon, mercadal
            DB::table('counties')->insert([
				'county_name' => 'Menorca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Denia
			//
			//albacete
            DB::table('counties')->insert([
				'county_name' => 'Albacete',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alcaraz
            DB::table('counties')->insert([
				'county_name' => 'Alcaraz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alcira
            DB::table('counties')->insert([
				'county_name' => 'Alcira',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alcoy
            DB::table('counties')->insert([
				'county_name' => 'Alcoy',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alicanta
            DB::table('counties')->insert([
				'county_name' => 'Alicante',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//almagro, villa real, san juan, valdepenas
            DB::table('counties')->insert([
				'county_name' => 'Almagro',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//chinchilla
            DB::table('counties')->insert([
				'county_name' => 'Chinchilla',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//cofrentes
            DB::table('counties')->insert([
				'county_name' => 'Cofrentes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//denia
            DB::table('counties')->insert([
				'county_name' => 'Denia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jativa
            DB::table('counties')->insert([
				'county_name' => 'Jativa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//montesa
            DB::table('counties')->insert([
				'county_name' => 'Montesa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Murcia
			//
			//cartagena
            DB::table('counties')->insert([
				'county_name' => 'Cartagena',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//cieza
            DB::table('counties')->insert([
				'county_name' => 'Cieza',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//hellin
            DB::table('counties')->insert([
				'county_name' => 'Hellin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lorca
            DB::table('counties')->insert([
				'county_name' => 'Lorca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//murcia
            DB::table('counties')->insert([
				'county_name' => 'Murcia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//orihuella
            DB::table('counties')->insert([
				'county_name' => 'Orihuela',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//segura
            DB::table('counties')->insert([
				'county_name' => 'Segura',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Valencia
			//
			//castellon
            DB::table('counties')->insert([
				'county_name' => 'Castellon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//morella
            DB::table('counties')->insert([
				'county_name' => 'Morella',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//peniscola
            DB::table('counties')->insert([
				'county_name' => 'Peniscola',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//san clemente
            DB::table('counties')->insert([
				'county_name' => 'San Clemente',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//valencia, montesa
            DB::table('counties')->insert([
				'county_name' => 'Valencia',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Andalus',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Almohad
			//Marrakesh
			//Marrakesh
			//
			//marrakesh
            DB::table('counties')->insert([
				'county_name' => 'Marrakesh',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//safi
            DB::table('counties')->insert([
				'county_name' => 'Safi',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//mogador
            DB::table('counties')->insert([
				'county_name' => 'Mogador',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//aghmat
            DB::table('counties')->insert([
				'county_name' => 'Aghmat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Tadla
			//
			//khenifra
            DB::table('counties')->insert([
				'county_name' => 'Khenifra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//mellal
            DB::table('counties')->insert([
				'county_name' => 'Mellal',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Sijilmassa
			//
			//sijilmassa, rissani
            DB::table('counties')->insert([
				'county_name' => 'Tafilalt',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//merzouga, 
            DB::table('counties')->insert([
				'county_name' => 'Merzouga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//erfoud, 
            DB::table('counties')->insert([
				'county_name' => 'Erfoud',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Ouarzazate
			//
			//ouarzazate
            DB::table('counties')->insert([
				'county_name' => 'Ouarzazate',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//zagora
            DB::table('counties')->insert([
				'county_name' => 'Zagora',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tinghir
            DB::table('counties')->insert([
				'county_name' => 'Tinghir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Fez
			//Fez
			//
			//fez
            DB::table('counties')->insert([
				'county_name' => 'Fez',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//meknes
            DB::table('counties')->insert([
				'county_name' => 'Meknes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Rabat
			//
			//rabat, sale, temara
            DB::table('counties')->insert([
				'county_name' => 'Rabat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//mehdya, 
            DB::table('counties')->insert([
				'county_name' => 'Mehdya',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Tangier
			//
			//tangier 
            DB::table('counties')->insert([
				'county_name' => 'Tangier',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tetouan 
            DB::table('counties')->insert([
				'county_name' => 'Tetouan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//kebir 
            DB::table('counties')->insert([
				'county_name' => 'Kebir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ouazzane 
            DB::table('counties')->insert([
				'county_name' => 'Ouazzane',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Kairouan
			//Kairouan
			//
			//kairouan
            DB::table('counties')->insert([
				'county_name' => 'Kairouan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Tunis
			//
			//tunis
            DB::table('counties')->insert([
				'county_name' => 'Tunis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bizerte
            DB::table('counties')->insert([
				'county_name' => 'Bizerte',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Djerid
			//
			//gafsa
            DB::table('counties')->insert([
				'county_name' => 'Djerid',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Tripoli
			//
			//tripoli
            DB::table('counties')->insert([
				'county_name' => 'Tripoli',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Sirte
			//
			//sirte
            DB::table('counties')->insert([
				'county_name' => 'Sirte',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Ifriqiya',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Tlemcen
			//Tlemcen
			//
			//tlemcen
            DB::table('counties')->insert([
				'county_name' => 'Tlemcen',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Oujda
			//
			//oujda
            DB::table('counties')->insert([
				'county_name' => 'Oujda',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Oran
			//
			//oran
            DB::table('counties')->insert([
				'county_name' => 'Oran',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Algiers
			//
			//algiers
            DB::table('counties')->insert([
				'county_name' => 'Algiers',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Tiaret
			//
			//tiaret
            DB::table('counties')->insert([
				'county_name' => 'Tiaret',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Mzab
			//
			//mzab
            DB::table('counties')->insert([
				'county_name' => 'Mzab',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Laghouat
			//
			//laghouat
            DB::table('counties')->insert([
				'county_name' => 'Laghouat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Djelfa
			//
			//djelfa
            DB::table('counties')->insert([
				'county_name' => 'Djelfa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Ifni
			//Ifni
			//
			//ifni
            DB::table('counties')->insert([
				'county_name' => 'Ifni',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Tiznit',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Chickens'
            ]);
			//Taroudant
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Taroudant',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Agadir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Ducks'
            ]);
			//Figuig
			//Figuig
			//
			//figuig
            DB::table('counties')->insert([
				'county_name' => 'Figuig',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bechar
            DB::table('counties')->insert([
				'county_name' => 'Bechar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//moghrar
            DB::table('counties')->insert([
				'county_name' => 'Moghrar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Adrar
			//
			//adrar
            DB::table('counties')->insert([
				'county_name' => 'Tuat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//timimoun
            DB::table('counties')->insert([
				'county_name' => 'Ademait',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Darija',
				'vernacular_culture' => 'Moorish',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Abbasid
			//Baghdad
			//
			//baghdad
            DB::table('counties')->insert([
				'county_name' => 'Baghdad',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Jazira',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Karbala',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Jazira',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Najaf',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Jazira',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Syria
			//Damascus
			//
			//damascus, saqba, sawa, douma, zamalka, dannun, nawa
            DB::table('counties')->insert([
				'county_name' => 'Damascus',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//nabek, qara, atiyah, yabroud
            DB::table('counties')->insert([
				'county_name' => 'Qalamoun',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jayrud, maaloula, jubbadin, arous
            DB::table('counties')->insert([
				'county_name' => 'Jayrud',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//dumayr, adra
            DB::table('counties')->insert([
				'county_name' => 'Dumayr',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//suada, shahba, salkhad, qanawat, kafr
            DB::table('counties')->insert([
				'county_name' => 'Suada',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bosra, jimal, izra, dera
            DB::table('counties')->insert([
				'county_name' => 'Bosra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Jabal
			//
			//aleppo
            DB::table('counties')->insert([
				'county_name' => 'Aleppo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//Homs
			//
			//homs
            DB::table('counties')->insert([
				'county_name' => 'Homs',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//tripoli, jubail
            DB::table('counties')->insert([
				'county_name' => 'Tripoli',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//beirut, anjar, zahle, karak, marjaba, qamar
            DB::table('counties')->insert([
				'county_name' => 'Beirut',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//sidon
            DB::table('counties')->insert([
				'county_name' => 'Sidon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//tyre
            DB::table('counties')->insert([
				'county_name' => 'Tyre',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Najd
			//Najd
			//
			//kharj
            DB::table('counties')->insert([
				'county_name' => 'Kharj',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Najd',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Najd',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Antioch
			//Antioch
			//
			//antioch, gephyra, saint symeon, koz, daphne, kastana, seleucia
            DB::table('counties')->insert([
				'county_name' => 'Antioch',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//alexandretta, rosos, bagras, payas
            DB::table('counties')->insert([
				'county_name' => 'Alexandretta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Fatimid
			//Cairo
			//Cairo
			//
			//cairo, fustat, askar,qatta, darb, marq
            DB::table('counties')->insert([
				'county_name' => 'Cairo',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//helwan, deir tin
            DB::table('counties')->insert([
				'county_name' => 'Helwan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Alexandria
			//
			//alexandria
            DB::table('counties')->insert([
				'county_name' => 'Alexandria',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//damanhur, delengat, baroud
            DB::table('counties')->insert([
				'county_name' => 'Damanhur',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//rosetta, balhib
            DB::table('counties')->insert([
				'county_name' => 'Rosetta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Mansoura
			//
			//mansoura, deir askar
            DB::table('counties')->insert([
				'county_name' => 'Mansoura',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//dekernes, zmoumis, timay
            DB::table('counties')->insert([
				'county_name' => 'Dekernes',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Madder',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Damietta
			//
			//damietta, bura, damul
            DB::table('counties')->insert([
				'county_name' => 'Damietta',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//tinnis, manzala
            DB::table('counties')->insert([
				'county_name' => 'Tinnis',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Minya
			//
			//minya
            DB::table('counties')->insert([
				'county_name' => 'Minya',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Asyut
			//
			//asyut
            DB::table('counties')->insert([
				'county_name' => 'Asyut',
				'county_category' => 'Ecclesiastical_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Watermill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Cotton',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Cattle',
				'marke_poultry' => 'Ducks'
            ]);
			//Kharga
			//
			//kharga, wahat, mahariq, munira, dabadib
            DB::table('counties')->insert([
				'county_name' => 'Kharga',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//dakhla, masara
            DB::table('counties')->insert([
				'county_name' => 'Dakhla',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Baritun
			//
			//baritun, negila
            DB::table('counties')->insert([
				'county_name' => 'Baritun',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//siwa, shali, aghurmi
            DB::table('counties')->insert([
				'county_name' => 'Siwa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//nitria, scetis, kellia
            DB::table('counties')->insert([
				'county_name' => 'Natrun',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Boula
			//
			//deir anba, deir mar
            DB::table('counties')->insert([
				'county_name' => 'Boula',
				'county_category' => 'Monastic_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//qoseir, banat
            DB::table('counties')->insert([
				'county_name' => 'Hammamat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Masri',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Goats',
				'marke_poultry' => 'Chickens'
            ]);
			//Jerusalem
			//Jerusalem
			//
			//jerusalem
            DB::table('counties')->insert([
				'county_name' => 'Jerusalem',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//ascolon, jura, majdal
            DB::table('counties')->insert([
				'county_name' => 'Ascolon',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Beverage_Wine',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jericho
            DB::table('counties')->insert([
				'county_name' => 'Jericho',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Galilee
			//
			//tiberias, hattin, nazareth
            DB::table('counties')->insert([
				'county_name' => 'Tiberias',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Olive_Oil',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//banias, qeruh, qanatir
            DB::table('counties')->insert([
				'county_name' => 'Banias',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Flax',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//haifa, carmel
            DB::table('counties')->insert([
				'county_name' => 'Haifa',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Levant',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Hejaz
			//Mecca
			//
			//mecca
            DB::table('counties')->insert([
				'county_name' => 'Mecca',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//jeddah, asfan
            DB::table('counties')->insert([
				'county_name' => 'Jeddah',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//taif
            DB::table('counties')->insert([
				'county_name' => 'Taif',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Medina
			//
			//medina
            DB::table('counties')->insert([
				'county_name' => 'Medina',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//yanbu
            DB::table('counties')->insert([
				'county_name' => 'Yanbu',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//khaybar, tayma
            DB::table('counties')->insert([
				'county_name' => 'Khaybar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Tabuk
			//
			//tabuk
            DB::table('counties')->insert([
				'county_name' => 'Tabuk',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//aqaba, muan
            DB::table('counties')->insert([
				'county_name' => 'Sharat',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//hegra
            DB::table('counties')->insert([
				'county_name' => 'Hegra',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Hejaz',
				'vernacular_culture' => 'Arabic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Perfume_Incense',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Khazar
			//Khazaria
			//Aqtobe
			//
			//aqtobe
            DB::table('counties')->insert([
				'county_name' => 'Aqtobe',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sarkel
			//
			//sarkel
            DB::table('counties')->insert([
				'county_name' => 'Sarkel',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Atil
			//
			//atil
            DB::table('counties')->insert([
				'county_name' => 'Atil',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Bolghar
			//
			//bolghar
            DB::table('counties')->insert([
				'county_name' => 'Bolghar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Bilar
			//
			//bilar
            DB::table('counties')->insert([
				'county_name' => 'Bilar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Alania
			//Derbent
			//
			//derbent
            DB::table('counties')->insert([
				'county_name' => 'Derbent',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Azov
			//
			//azov
            DB::table('counties')->insert([
				'county_name' => 'Azov',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Cumania
			//Sighnaq
			//
			//sighnaq
            DB::table('counties')->insert([
				'county_name' => 'Sighnaq',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sozak
			//
			//sozak
            DB::table('counties')->insert([
				'county_name' => 'Sozak',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Sibir
			//
			//qashliq
            DB::table('counties')->insert([
				'county_name' => 'Sibir',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Sunni',
				'vernacular_cycle' => 'Matter_Turk',
				'vernacular_culture' => 'Turkic',
				'banal_moulin' => 'Horse_Mill',
				'banal_pressoir' => 'None',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Seljuk
			//Kwarezm
			//Gurganj
			//
			//gurganj, ak
            DB::table('counties')->insert([
				'county_name' => 'Gurganj',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//toprak, ayaz, guldursun, kyzyl
            DB::table('counties')->insert([
				'county_name' => 'Khorezm',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Khiva
			//
			//khiva, ichan, kardurankhas
            DB::table('counties')->insert([
				'county_name' => 'Khiva',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//durghan, jakarband, tahiriya
            DB::table('counties')->insert([
				'county_name' => 'Durghan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Merv
			//
			//merv, bayram, gyaur, kurban, kyz, shaim, erk
            DB::table('counties')->insert([
				'county_name' => 'Merv',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//sarakhs, sharaf
            DB::table('counties')->insert([
				'county_name' => 'Sarakhs',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bereket, kyzyl
            DB::table('counties')->insert([
				'county_name' => 'Bereket',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Charger',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Isfahan
			//Isfahan
			//
			//isfahan
            DB::table('counties')->insert([
				'county_name' => 'Isfahan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//qom
            DB::table('counties')->insert([
				'county_name' => 'Qom',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//yazd, chahak
            DB::table('counties')->insert([
				'county_name' => 'Yazd',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//karaj
            DB::table('counties')->insert([
				'county_name' => 'Karaj',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//qazvin
            DB::table('counties')->insert([
				'county_name' => 'Qazvin',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Shiraz
			//
			//shiraz
            DB::table('counties')->insert([
				'county_name' => 'Shiraz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Hormuz
			//Hormuz
			//
			//hormuz
            DB::table('counties')->insert([
				'county_name' => 'Hormuz',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//minab
            DB::table('counties')->insert([
				'county_name' => 'Minab',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Sugarcane',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Ducks'
            ]);
			//
			//bandar
            DB::table('counties')->insert([
				'county_name' => 'Bandar',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//lengeh
            DB::table('counties')->insert([
				'county_name' => 'Lengeh',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//Kerman
			//
			//kerman, mahan, baghin
            DB::table('counties')->insert([
				'county_name' => 'Kerman',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Dye_Saffron',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//bam, rayen
            DB::table('counties')->insert([
				'county_name' => 'Bam',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'Fiber_Silk',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
			//
			//rafsinjan, bayaz, kuhbanan, behabad
            DB::table('counties')->insert([
				'county_name' => 'Rafsinjan',
				'county_category' => 'Feudal_Manor',
				'de_jure_duchy' => '',
				'vernacular_religion' => 'Muslim_Shia',
				'vernacular_cycle' => 'Matter_Persia',
				'vernacular_culture' => 'Persian',
				'banal_moulin' => 'Windmill',
				'banal_pressoir' => 'Sweetener_Date',
				'banal_chasse' => 'None',
				'marke_crops' => 'None',
				'marke_horse_transport' => 'Palfrey',
				'marke_animal_husbandry' => 'Sheep',
				'marke_poultry' => 'Chickens'
            ]);
    }
}