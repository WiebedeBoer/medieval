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
				'vernacular_cycle' => '',			//Matter_of_Britain, Carolingian, Byzantine, Rus, Persian, Arab	
				'vernacular_architecture' => '',	//
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
			
			//holy roman empire
			//germany
			//Austria
			//1
			//melk, gottweig, saint polten
            DB::table('counties')->insert([
				'county_name' => 'Grunsweit',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//2 
			//altenburg, eggenburg, rosenburg, chremis
            DB::table('counties')->insert([
				'county_name' => 'Ostmark',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//3
			//vienna, klosterneuburg
            DB::table('counties')->insert([
				'county_name' => 'Vienna',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Bavaria
			//4
			//regensburg, straubing
            DB::table('counties')->insert([
				'county_name' => 'Donaugau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//5
			//bamberg, hallstadt
            DB::table('counties')->insert([
				'county_name' => 'Folkfeld',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//geisenhausen, velden
            DB::table('counties')->insert([
				'county_name' => 'Isengau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//egerburg, nuremberg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//forchheim, staffelstein
            DB::table('counties')->insert([
				'county_name' => 'Radenzgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//passau, erneck
            DB::table('counties')->insert([
				'county_name' => 'Rottgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//vilshofen, furstenstein, saldenburg
            DB::table('counties')->insert([
				'county_name' => 'Schweinachgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//ingolstadt, neuburg
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Brabant
			//
			//brussels, louvain
            DB::table('counties')->insert([
				'county_name' => 'Brabant',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//hasselt, tongeren, borgloon
            DB::table('counties')->insert([
				'county_name' => 'Haspengau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//valenciennes, mons
            DB::table('counties')->insert([
				'county_name' => 'Hennegau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//cambrai, caudry
            DB::table('counties')->insert([
				'county_name' => 'Kamerykgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//antwerp, breda, tilburg, turnhout
            DB::table('counties')->insert([
				'county_name' => 'Toxandria',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//axel, hulst, assenede, boekhoute, ghent
            DB::table('counties')->insert([
				'county_name' => 'Waasgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Carinthia
			//
			//graz, hengistburg
            DB::table('counties')->insert([
				'county_name' => 'Hengistgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//judenburg, frauenburg
            DB::table('counties')->insert([
				'county_name' => 'Ingeringtal',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//steinz, graz
            DB::table('counties')->insert([
				'county_name' => 'Jauntal',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//karlsberg, klagenfurt, velden, saint veit
            DB::table('counties')->insert([
				'county_name' => 'Kroatengau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//leoben, saint stefan
            DB::table('counties')->insert([
				'county_name' => 'Leobental',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//eppenstein, hohenwang
            DB::table('counties')->insert([
				'county_name' => 'Murztal',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//celje, richenburg
            DB::table('counties')->insert([
				'county_name' => 'Sanntal',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Carniola
			//
			//laibach, zobelsberg
            DB::table('counties')->insert([
				'county_name' => 'Krainmark',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//tergeste, parenzo, mitterburg
            DB::table('counties')->insert([
				'county_name' => 'Histria',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Franconia
			//
			//fulda, hunfeld, mellrichstadt, ebersburg, henneberg, schweinfurt
            DB::table('counties')->insert([
				'county_name' => 'Grabfeld',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//rotenburg, colmberg
            DB::table('counties')->insert([
				'county_name' => 'Gollachgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//kitzingen, gerolshofen
            DB::table('counties')->insert([
				'county_name' => 'Gotzfeld',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//mosbach, minneburg
            DB::table('counties')->insert([
				'county_name' => 'Jagstgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//hammelburg, gersfeld
            DB::table('counties')->insert([
				'county_name' => 'Saalgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//gosheim, kaisersheim
            DB::table('counties')->insert([
				'county_name' => 'Sualafeld',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//heilbronn, weinsberg, ellhofen, ohringen
            DB::table('counties')->insert([
				'county_name' => 'Sulmgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//weikersheim, mergentheim
            DB::table('counties')->insert([
				'county_name' => 'Taubergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//wurzburg, wertheim
            DB::table('counties')->insert([
				'county_name' => 'Waldsassengau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Frisia
			//
			//oldenburg
            DB::table('counties')->insert([
				'county_name' => 'Ammergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//aurich
            DB::table('counties')->insert([
				'county_name' => 'Auricherland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Beveland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Bornegau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Brokmerland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//coevorden, groningen
            DB::table('counties')->insert([
				'county_name' => 'Drenthe',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//meldorf, hemmingstedt, wohrden
            DB::table('counties')->insert([
				'county_name' => 'Dithmarschen',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//emden
            DB::table('counties')->insert([
				'county_name' => 'Emsigerland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Flethite',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//appingedam, winschoten
            DB::table('counties')->insert([
				'county_name' => 'Fivelgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//harlingen
            DB::table('counties')->insert([
				'county_name' => 'Harlingerland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Hunsingau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Kennemerland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Nifterlake',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//norden
            DB::table('counties')->insert([
				'county_name' => 'Norderland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Ostringen',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//dockum, lintwarde
            DB::table('counties')->insert([
				'county_name' => 'Oostergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Rustringen',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//zwolle, kampen
            DB::table('counties')->insert([
				'county_name' => 'Salland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//stavoren
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//oldenzaal, enschede
            DB::table('counties')->insert([
				'county_name' => 'Twente',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//elburg, harderwick
            DB::table('counties')->insert([
				'county_name' => 'Veluwe',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//vollenhove
            DB::table('counties')->insert([
				'county_name' => 'Vollenhove',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Walcheren',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//froonacker
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Westflinge',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Wursten',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//Guelders
			//
			//guelders, xanten, gennep
            DB::table('counties')->insert([
				'county_name' => 'Hettergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//nymegen, arnhem, doornenburg
            DB::table('counties')->insert([
				'county_name' => 'Betuwe',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//cleves, kranenburg
            DB::table('counties')->insert([
				'county_name' => 'Cleveland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//zutphen, deventer, doetinchem
            DB::table('counties')->insert([
				'county_name' => 'Hamaland',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//tegelen, venlo
            DB::table('counties')->insert([
				'county_name' => 'Mulgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//duisburg, moers
            DB::table('counties')->insert([
				'county_name' => 'Ruhrgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Julich
			//
			//julich, duren
            DB::table('counties')->insert([
				'county_name' => 'Julichgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//kasselburg, gerolstein
            DB::table('counties')->insert([
				'county_name' => 'Eifelgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//zulpich, hallenburg
            DB::table('counties')->insert([
				'county_name' => 'Zulpichgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Limburg
			//
			//limburg, liege, valkenburg
            DB::table('counties')->insert([
				'county_name' => 'Luttichgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//stavelot, malmedy
            DB::table('counties')->insert([
				'county_name' => 'Ardennengau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//dinant, huy
            DB::table('counties')->insert([
				'county_name' => 'Condrustgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//namur
            DB::table('counties')->insert([
				'county_name' => 'Lommegau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//
			//maastricht
            DB::table('counties')->insert([
				'county_name' => 'Maasgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Styria
			//
			//linz, wels, styraburg
            DB::table('counties')->insert([
				'county_name' => 'Traungau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//saint george, saint margarethen
            DB::table('counties')->insert([
				'county_name' => 'Attergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//
			//innsbruck, kufstein
            DB::table('counties')->insert([
				'county_name' => 'Ennstal',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//mattighofen, fraunhofen
            DB::table('counties')->insert([
				'county_name' => 'Mattiggau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//brixen, bolzano, merano
            DB::table('counties')->insert([
				'county_name' => 'Norital',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//saint moritz, schlandersberg
            DB::table('counties')->insert([
				'county_name' => 'Vinschgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Cologne
			//
			//cologne, friesheim, rondorf, palmersdorf, junkersdorf
            DB::table('counties')->insert([
				'county_name' => 'Gillgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//siegburg, rennenburg, blankenberg
            DB::table('counties')->insert([
				'county_name' => 'Auelgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//bonn, remagen
            DB::table('counties')->insert([
				'county_name' => 'Bonngau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//deutz, altenberg 
            DB::table('counties')->insert([
				'county_name' => 'Deutzgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Mainz
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//Salzburg
			//
			//salzburg, berchtesgaden
            DB::table('counties')->insert([
				'county_name' => 'Salzburggau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//falkenstein, traunstein, baumburg, rosenheim
            DB::table('counties')->insert([
				'county_name' => 'Chiemgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//tamswick, saint michael
            DB::table('counties')->insert([
				'county_name' => 'Lungau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//zell, saalfelden
            DB::table('counties')->insert([
				'county_name' => 'Pinzgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//tergernsee
            DB::table('counties')->insert([
				'county_name' => 'Sundergau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//Trier
			//
			//bitburg, trier, prum, gerolstein
            DB::table('counties')->insert([
				'county_name' => 'Bitgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//eltz, andernach
            DB::table('counties')->insert([
				'county_name' => 'Maifeld',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//ravengiersburg, ehrenburg
            DB::table('counties')->insert([
				'county_name' => 'Hunsruckgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//treis, koblenz
            DB::table('counties')->insert([
				'county_name' => 'Trechirgau',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			
			

			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			
    }
}