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
				'vernacular_architecture' => '',	//Arpitan, Bavarian, Franconian, Frisian, Flemish, Saxon, Swabian 
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
			//melk , gottweig , sankt polten
            DB::table('counties')->insert([
				'county_name' => 'Grunsweit',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '1',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//2 
			//altenburg, eggenburg, rosenburg, chremis
            DB::table('counties')->insert([
				'county_name' => 'Ostmark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '1',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//3
			//vienna, klosterneuburg
            DB::table('counties')->insert([
				'county_name' => 'Vienna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '1',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//Bavaria
			//4
			//regensburg, straubing
            DB::table('counties')->insert([
				'county_name' => 'Donaugau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//5
			//bamberg, hallstadt
            DB::table('counties')->insert([
				'county_name' => 'Folkfeld',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//6
			//geisenhausen, velden
            DB::table('counties')->insert([
				'county_name' => 'Isengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//7
			//egerburg, nuremberg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//8
			//forchheim, staffelstein
            DB::table('counties')->insert([
				'county_name' => 'Radenzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//9
			//passau, erneck
            DB::table('counties')->insert([
				'county_name' => 'Rottgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//10
			//vilshofen, furstenstein, saldenburg
            DB::table('counties')->insert([
				'county_name' => 'Schweinachgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//11
			//ingolstadt, neuburg
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '2',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//Brabant
			//12
			//brussels, louvain
            DB::table('counties')->insert([
				'county_name' => 'Brabant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//13
			//hasselt, tongeren, borgloon
            DB::table('counties')->insert([
				'county_name' => 'Haspengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//14
			//valenciennes, mons
            DB::table('counties')->insert([
				'county_name' => 'Hennegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//15
			//cambrai, caudry
            DB::table('counties')->insert([
				'county_name' => 'Kamerykgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);				
			//16
			//antwerp, breda, tilburg, turnhout, stryen, geldrop, mierlo
            DB::table('counties')->insert([
				'county_name' => 'Toxandria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//17
			//axel, hulst, assenede, boekhoute, ghent, sluys
            DB::table('counties')->insert([
				'county_name' => 'Waasgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);				
			//Carinthia
			//18
			//hengistburg, sankt nikolai
            DB::table('counties')->insert([
				'county_name' => 'Hengistgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//19
			//judenburg, frauenburg
            DB::table('counties')->insert([
				'county_name' => 'Ingeringtal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//20
			//steinz, graz
            DB::table('counties')->insert([
				'county_name' => 'Jauntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//21
			//karlsberg, klagenfurt, velden, sankt veit
            DB::table('counties')->insert([
				'county_name' => 'Kroatengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//22
			//leoben, sankt stefan
            DB::table('counties')->insert([
				'county_name' => 'Leobental',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//23
			//kadour, lienz, villach
            DB::table('counties')->insert([
				'county_name' => 'Lurngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//24
			//eppenstein, hohenwang
            DB::table('counties')->insert([
				'county_name' => 'Murztal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//25
			//celje, richenburg
            DB::table('counties')->insert([
				'county_name' => 'Sanntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//Carniola
			//26
			//laibach, zobelsberg
            DB::table('counties')->insert([
				'county_name' => 'Krainmark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//27
			//tergeste, parenzo, mitterburg
            DB::table('counties')->insert([
				'county_name' => 'Histria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//Franconia
			//28
			//fulda, hunfeld, mellrichstadt, ebersburg, henneberg, schweinfurt
            DB::table('counties')->insert([
				'county_name' => 'Grabfeld',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//29
			//rotenburg, colmberg
            DB::table('counties')->insert([
				'county_name' => 'Gollachgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//30
			//kitzingen, gerolshofen
            DB::table('counties')->insert([
				'county_name' => 'Gotzfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//31
			//mosbach, minneburg
            DB::table('counties')->insert([
				'county_name' => 'Jagstgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//32
			//hammelburg, gersfeld
            DB::table('counties')->insert([
				'county_name' => 'Saalgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//33
			//gosheim, kaisersheim
            DB::table('counties')->insert([
				'county_name' => 'Sualafeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//34
			//heilbronn, weinsberg, ellhofen, ohringen
            DB::table('counties')->insert([
				'county_name' => 'Sulmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//35
			//weikersheim, mergentheim
            DB::table('counties')->insert([
				'county_name' => 'Taubergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//36
			//wurzburg, wertheim
            DB::table('counties')->insert([
				'county_name' => 'Waldsassengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//Frisia
			//37
			//oldenburg, rastede
            DB::table('counties')->insert([
				'county_name' => 'Ammergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//38
			//aurich, marienhafe
            DB::table('counties')->insert([
				'county_name' => 'Auricherland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//39
			//goes, wissenkerk, hellenburg
            DB::table('counties')->insert([
				'county_name' => 'Beveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//40
			//jouwer, haskerhorn
            DB::table('counties')->insert([
				'county_name' => 'Bornegau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//41
			//coevorden, groningen , ruinen 
            DB::table('counties')->insert([
				'county_name' => 'Drenthe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//42
			//meldorf, hemmingstedt, wohrden
            DB::table('counties')->insert([
				'county_name' => 'Dithmarschen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//43
			//emden , leer 
            DB::table('counties')->insert([
				'county_name' => 'Emsigerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//44
			//appingedam , winschoten 
            DB::table('counties')->insert([
				'county_name' => 'Fivelgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//45
			//otterndorf, ritzebuttel 
            DB::table('counties')->insert([
				'county_name' => 'Hadeln',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//46
			//dordrecht, gouda 
            DB::table('counties')->insert([
				'county_name' => 'Holtland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//47
			//winsum, bedum, selwerd 
            DB::table('counties')->insert([
				'county_name' => 'Hunsingau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//48
			//haarlem, alkmaar, amsterdam, edam, purmerstein 
            DB::table('counties')->insert([
				'county_name' => 'Kennemerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);
			//49
			//delft, vlaardingen, rotterdam 
            DB::table('counties')->insert([
				'county_name' => 'Maasland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//50
			//utrecht, dorestadt, amerongen, zuilenburg, woudenberg, heemstede, nyenrode 
            DB::table('counties')->insert([
				'county_name' => 'Nifterlake',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//51
			//norden, berum, jever
            DB::table('counties')->insert([
				'county_name' => 'Norderland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//52
			//ostringfeld, reepsholt, kniphausen
            DB::table('counties')->insert([
				'county_name' => 'Ostringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//53
			//dockum, nyenhove, klaarkamp
            DB::table('counties')->insert([
				'county_name' => 'Oostergau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//54
			//leithen, wassenaar, cronestein
            DB::table('counties')->insert([
				'county_name' => 'Rhineland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//55
			//nordenham, rodekirchen, langwarden
            DB::table('counties')->insert([
				'county_name' => 'Rustringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//56
			//zwolle, kampen, hasselt, waardenborg
            DB::table('counties')->insert([
				'county_name' => 'Salland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//57
			//starum, sloten
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);
			//58
			//tiel, buren, arkel, heusden, vianen, loevestein, almkerk
            DB::table('counties')->insert([
				'county_name' => 'Teisterbant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//59
			//oldenzaal, enschede, almelo
            DB::table('counties')->insert([
				'county_name' => 'Twente',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//60
			//elburg, harderwick, barnefeld, scherpenzeel
            DB::table('counties')->insert([
				'county_name' => 'Veluwe',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//61
			//vollenhove, kuinre, steenwick
            DB::table('counties')->insert([
				'county_name' => 'Vollenhove',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//62
			//flissinghe, serooskerke, middelburg
            DB::table('counties')->insert([
				'county_name' => 'Walcheren',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//63
			//froonacker, bolsward, drylts, hylpen, snits, harns
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//64
			//hoorn, medemblik, enkhuizen 
            DB::table('counties')->insert([
				'county_name' => 'Westflinge',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//65
			//sieversham, midlum, bederkesa, diepholt, weddewarden
            DB::table('counties')->insert([
				'county_name' => 'Wursten',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//Guelders
			//66
			//guelders, xanten, gennep, walbeck
            DB::table('counties')->insert([
				'county_name' => 'Hettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//67
			//nymegen, arnhem, doornenburg, batenburg, appeltern
            DB::table('counties')->insert([
				'county_name' => 'Betuwe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//68
			//cleves, kranenburg
            DB::table('counties')->insert([
				'county_name' => 'Cleveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//69
			//zutphen, deventer, doetinchem, doesburg, camphuysen, bronkhorst
            DB::table('counties')->insert([
				'county_name' => 'Hamaland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//70
			//tegelen, venlo, straelen
            DB::table('counties')->insert([
				'county_name' => 'Mulgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//71
			//duisburg, moers
            DB::table('counties')->insert([
				'county_name' => 'Ruhrgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Julich
			//72
			//julich, duren
            DB::table('counties')->insert([
				'county_name' => 'Julichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//73
			//kasselburg, gerolstein
            DB::table('counties')->insert([
				'county_name' => 'Eifelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//74
			//zulpich, hallenburg
            DB::table('counties')->insert([
				'county_name' => 'Zulpichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Limburg
			//75
			//limburg, liege
            DB::table('counties')->insert([
				'county_name' => 'Luttichgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//76
			//stavelot, malmedy, wiltz, bouillon
            DB::table('counties')->insert([
				'county_name' => 'Ardennengau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//77
			//dinant, huy
            DB::table('counties')->insert([
				'county_name' => 'Condrustgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//78
			//namur, florennes
            DB::table('counties')->insert([
				'county_name' => 'Lommegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);			
			//79
			//maastricht, valkenburg
            DB::table('counties')->insert([
				'county_name' => 'Maasgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Lorraine
			//80
			//metz, roncourt, semecourt
            DB::table('counties')->insert([
				'county_name' => 'Metzgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//81
			//bitche, zweibrucken, homburg
            DB::table('counties')->insert([
				'county_name' => 'Bleisgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//82
			//luneville, epinal
            DB::table('counties')->insert([
				'county_name' => 'Chaumontois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//83
			//sarrebourg, saarbrucken
            DB::table('counties')->insert([
				'county_name' => 'Saargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//84
			//weich, dieuze, salins
            DB::table('counties')->insert([
				'county_name' => 'Salingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//85
			//neufchateau, sandaucourt
            DB::table('counties')->insert([
				'county_name' => 'Soulossois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//86
			//toul, ochey
            DB::table('counties')->insert([
				'county_name' => 'Toullois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Luxembourg
			//87
			//luxembourg, bettembourg
            DB::table('counties')->insert([
				'county_name' => 'Methingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//88
			//barrois, ligny
            DB::table('counties')->insert([
				'county_name' => 'Barrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//89
			//sedan, mouzon
            DB::table('counties')->insert([
				'county_name' => 'Moselgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//90
			//verdun, recicourt
            DB::table('counties')->insert([
				'county_name' => 'Verdungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//91
			//longwy, arlon, thionville, chiny
            DB::table('counties')->insert([
				'county_name' => 'Wavergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Saxony
			//92
			//luneburg, bardowick, emmendorf
            DB::table('counties')->insert([
				'county_name' => 'Bardengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//93
			//brunswick, hebesheim
            DB::table('counties')->insert([
				'county_name' => 'Derlingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//94
			//hildesheim, poppenburg
            DB::table('counties')->insert([
				'county_name' => 'Eastfalagau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//95
			//celle, hanover
            DB::table('counties')->insert([
				'county_name' => 'Gretingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//96
			//gandersheim, westerhof 
            DB::table('counties')->insert([
				'county_name' => 'Gudingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//97
			//duderstadt, pohlde
            DB::table('counties')->insert([
				'county_name' => 'Harzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//98
			//goslar, harzburg
            DB::table('counties')->insert([
				'county_name' => 'Wenzengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Styria
			//99
			//linz, wels, styraburg
            DB::table('counties')->insert([
				'county_name' => 'Traungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//100
			//sankt george, sankt margarethen
            DB::table('counties')->insert([
				'county_name' => 'Attergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);			
			//101
			//innsbruck, kufstein
            DB::table('counties')->insert([
				'county_name' => 'Ennstal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//102
			//mattighofen, fraunhofen
            DB::table('counties')->insert([
				'county_name' => 'Mattiggau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//103
			//brixen, bolzano, merano
            DB::table('counties')->insert([
				'county_name' => 'Norital',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//104
			//sankt moritz, schlandersberg
            DB::table('counties')->insert([
				'county_name' => 'Vinschgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//Swabia
			//105
			//ortenberg, offenburg, gengenbach, baden
            DB::table('counties')->insert([
				'county_name' => 'Ortengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//106
			//kempten, sulzberg
            DB::table('counties')->insert([
				'county_name' => 'Albegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//107
			//augsburg, wettenhausen
            DB::table('counties')->insert([
				'county_name' => 'Augstgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//108
			//freiburg, zahringen, basel, roggenburg
            DB::table('counties')->insert([
				'county_name' => 'Breisgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//109
			//chur, disentis, feldkirchen, bludenz, sankt george
            DB::table('counties')->insert([
				'county_name' => 'Churgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//110
			//singen, verenahof
            DB::table('counties')->insert([
				'county_name' => 'Hegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);			
			//111
			//ravensburg, weingarten, salem
            DB::table('counties')->insert([
				'county_name' => 'Linzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//112
			//greifenstein, tubingen, reutlingen, rottenburg
            DB::table('counties')->insert([
				'county_name' => 'Neckargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//113
			//strassburg, hohenburg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//114
			//nordlingen, ellwangen
            DB::table('counties')->insert([
				'county_name' => 'Riesgau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//115
			//hohenzollern, falkenstein, ulm
            DB::table('counties')->insert([
				'county_name' => 'Schwerzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//116
			//einsiedeln, lenzburg
            DB::table('counties')->insert([
				'county_name' => 'Schwyzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//117
			//mulhausen, kolmar
            DB::table('counties')->insert([
				'county_name' => 'Sundgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//118
			//konstanz, sankt gall, lindau, kirchberg 
            DB::table('counties')->insert([
				'county_name' => 'Turgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//119
			//zurich, winterthur, kyburg
            DB::table('counties')->insert([
				'county_name' => 'Zurichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//Thuringia
			//120
			//erfurt, weimar
            DB::table('counties')->insert([
				'county_name' => 'Thuringgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//121
			//gruessen, runneburg
            DB::table('counties')->insert([
				'county_name' => 'Altgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//122
			//muhlhausen, anrode
            DB::table('counties')->insert([
				'county_name' => 'Eichsfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//123
			//nordhausen, ebersburg
            DB::table('counties')->insert([
				'county_name' => 'Helmegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//124
			//arnstadt, liebenstein
            DB::table('counties')->insert([
				'county_name' => 'Langwitzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//125
			//sondershausen, frankenhausen
            DB::table('counties')->insert([
				'county_name' => 'Nabelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//126
			//rudolstadt, greifenstein, saalfeld, leutenberg
            DB::table('counties')->insert([
				'county_name' => 'Orlagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//127
			//naumburg, altenburg, moritzburg, gera, ronneburg
            DB::table('counties')->insert([
				'county_name' => 'Ostergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//128
			//zwickau, plauen
            DB::table('counties')->insert([
				'county_name' => 'Zwickaugau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//Bremen
			//129
			//bremen, delmenhorst, hoya
            DB::table('counties')->insert([
				'county_name' => 'Largau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//130
			//meppen, lingen, papenburg
            DB::table('counties')->insert([
				'county_name' => 'Agradingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//131
			//arnsberg, soest, warstein
            DB::table('counties')->insert([
				'county_name' => 'Angerngau',
				'county_category' => '',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//132
			//corvey, hoxter
            DB::table('counties')->insert([
				'county_name' => 'Augau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//133
			//buckeburg, schaumburg, hamelin 
            DB::table('counties')->insert([
				'county_name' => 'Bukkigau',
				'county_category' => '',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//134
			//bentheim, dinkelrode, marienrode, wietmarschen, salzbergen, elbergen
            DB::table('counties')->insert([
				'county_name' => 'Bursibant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//135
			//minden, petershagen, schlusselburg
            DB::table('counties')->insert([
				'county_name' => 'Dervegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//136
			//lippstadt, greven, lunen
            DB::table('counties')->insert([
				'county_name' => 'Dreingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//137
			//osnabruck, yburg, marienfeld
            DB::table('counties')->insert([
				'county_name' => 'Gronegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//138
			//tecklenburg, scapheim, cloppenburg
            DB::table('counties')->insert([
				'county_name' => 'Hasegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//139
			//stade, horneburg, harburg
            DB::table('counties')->insert([
				'county_name' => 'Heilangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//140
			//niemunster, rendsburg, reinfeld
            DB::table('counties')->insert([
				'county_name' => 'Holsteingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//141
			//gottingen, nienburg
            DB::table('counties')->insert([
				'county_name' => 'Leinegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//142
			//buxtehude, jesteburg
            DB::table('counties')->insert([
				'county_name' => 'Mosidegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//143
			//paderborn, salzkotten, wewer
            DB::table('counties')->insert([
				'county_name' => 'Padergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//144
			//ludinghausen, asbeck, coesfeld, darfeld, appelhulsen
            DB::table('counties')->insert([
				'county_name' => 'Stevergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//145
			//hamburg, ahrensburg
            DB::table('counties')->insert([
				'county_name' => 'Stormarngau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//146
			//verden, rotenburg
            DB::table('counties')->insert([
				'county_name' => 'Sturmigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);						
			//147
			//munster, warendorf, gelsenkirchen
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//148
			//ravensberg, sparrenberg, limberg, herford
            DB::table('counties')->insert([
				'county_name' => 'Werregau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//149
			//hagen, attendorn, dortmund, hamm
            DB::table('counties')->insert([
				'county_name' => 'Westfaliagau',
				'county_category' => '',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);						
			//Cologne
			//150
			//cologne, friesheim, rondorf, palmersdorf, junkersdorf
            DB::table('counties')->insert([
				'county_name' => 'Gillgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//151
			//siegburg, rennenburg, blankenberg
            DB::table('counties')->insert([
				'county_name' => 'Auelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//152
			//bonn, remagen
            DB::table('counties')->insert([
				'county_name' => 'Bonngau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//153
			//deutz, altenberg 
            DB::table('counties')->insert([
				'county_name' => 'Deutzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Magdeburg
			//154
			//magdeburg, haldesleben, oschersleben, unseburg, calbe
            DB::table('counties')->insert([
				'county_name' => 'Nordthuringgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//155
			//stendal, osterburg
            DB::table('counties')->insert([
				'county_name' => 'Balsamgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);			
			//156
			//erdeborn, alberstedt
            DB::table('counties')->insert([
				'county_name' => 'Friesenfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//157
			//halberstadt, quedlinburg
            DB::table('counties')->insert([
				'county_name' => 'Hartingau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//158
			//merseburg, halle
            DB::table('counties')->insert([
				'county_name' => 'Hassegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//159
			//seehausen, salzwedel
            DB::table('counties')->insert([
				'county_name' => 'Osterwalde',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//160
			//bernburg, ninenburg, ascherleben, hadmersleben, ballenstedt
            DB::table('counties')->insert([
				'county_name' => 'Schwabengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Mainz
			//161
			//maiz, worms, oppenheim, hammerstein
            DB::table('counties')->insert([
				'county_name' => 'Wormsfeld',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//162
			//hammerstein, logenstein
            DB::table('counties')->insert([
				'county_name' => 'Engersgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);			
			//163
			//kassel, staufenberg, hersfeld, fritzlar, 
            DB::table('counties')->insert([
				'county_name' => 'Hessengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//164
			//limburg, marburg, weilburg, wetzlar
            DB::table('counties')->insert([
				'county_name' => 'Lahngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//165
			//mannheim, heidelberg
            DB::table('counties')->insert([
				'county_name' => 'Lobdengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//166
			//afschaffenburg, seligenstadt
            DB::table('counties')->insert([
				'county_name' => 'Maingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//167
			//ingelheim, spiesheim, saulheim, flonheim
            DB::table('counties')->insert([
				'county_name' => 'Nahegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//168
			//nidda, warnsberg
            DB::table('counties')->insert([
				'county_name' => 'Niddagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//169
			//speyer, dudenhofen, wissembourg
            DB::table('counties')->insert([
				'county_name' => 'Speyergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//170
			//sankt leon, brettenheim
            DB::table('counties')->insert([
				'county_name' => 'Ufgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//171
			//frankfurt, homburg, kransberg, falkenstein
            DB::table('counties')->insert([
				'county_name' => 'Wettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//172
			//pforzheim, liebeneck
            DB::table('counties')->insert([
				'county_name' => 'Wurmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//Salzburg
			//173
			//salzburg, berchtesgaden
            DB::table('counties')->insert([
				'county_name' => 'Salzburggau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//174
			//falkenstein, traunstein, baumburg, rosenheim
            DB::table('counties')->insert([
				'county_name' => 'Chiemgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//175
			//tamswick, sankt michael
            DB::table('counties')->insert([
				'county_name' => 'Lungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//176
			//zell, saalfelden
            DB::table('counties')->insert([
				'county_name' => 'Pinzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//177
			//tergernsee, ebertshausen
            DB::table('counties')->insert([
				'county_name' => 'Sundergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//Trier
			//178
			//bitburg, trier, prum, gerolstein, echternach, vianden
            DB::table('counties')->insert([
				'county_name' => 'Bitgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//179
			//eltz, andernach, salm
            DB::table('counties')->insert([
				'county_name' => 'Maifeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//180
			//ravengiersburg, ehrenburg
            DB::table('counties')->insert([
				'county_name' => 'Hunsruckgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//181
			//treis, koblenz
            DB::table('counties')->insert([
				'county_name' => 'Trechirgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Lombardy
			//Milano
			//182
			//milano, monza, lecco, garegnano, morimondo, piona, como, torba, san giuliano
            DB::table('counties')->insert([
				'county_name' => 'Milano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//183
			//alessandria, acqui
            DB::table('counties')->insert([
				'county_name' => 'Alessandria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//184
			//bergamo, san pietro, stezzano, treviolo, mozzo, astino
            DB::table('counties')->insert([
				'county_name' => 'Bergamo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//185
			//brescia, rovato, polpenazze, bedizzole, san giorgo
            DB::table('counties')->insert([
				'county_name' => 'Brescia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//186
			//crema, vaiano, bagnolo, trescore
            DB::table('counties')->insert([
				'county_name' => 'Crema',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//187
			//cremona, caorso
            DB::table('counties')->insert([
				'county_name' => 'Cremona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//188
			//pavullo, monterastello, montecuccolo
            DB::table('counties')->insert([
				'county_name' => 'Frignana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//189
			//lodi, cerreto
            DB::table('counties')->insert([
				'county_name' => 'Lodi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//190
			//mantua, polirone, levata, pietola, cavriana
            DB::table('counties')->insert([
				'county_name' => 'Mantua',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//191
			//modena, mirandola, vignola
            DB::table('counties')->insert([
				'county_name' => 'Modena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//192
			//novara, chiavenna
            DB::table('counties')->insert([
				'county_name' => 'Novara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//193
			//parma, fidenza, colorno, san vitale, lagorano, castrignano
            DB::table('counties')->insert([
				'county_name' => 'Parma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//194
			//pavia, certosa, san martino, carpignano
            DB::table('counties')->insert([
				'county_name' => 'Pavia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//195
			//piacenza, grazzano, bobbio
            DB::table('counties')->insert([
				'county_name' => 'Piacenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//196
			//reggio, bagnolo, fogliano
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//197
			//tortona, montegioco, garbagna
            DB::table('counties')->insert([
				'county_name' => 'Tortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//198
			//vernio, montepiano
            DB::table('counties')->insert([
				'county_name' => 'Vernio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Piedmont
			//199
			//alba, monforte, diano
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//200
			//asti, burio, loreto
            DB::table('counties')->insert([
				'county_name' => 'Asti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//201
			//canavese, ivrea
            DB::table('counties')->insert([
				'county_name' => 'Canavese',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//202
			//casale, san giorgo, san nazzaro
            DB::table('counties')->insert([
				'county_name' => 'Casale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//203
			//turino, moncalieri, chieri, rivoli
            DB::table('counties')->insert([
				'county_name' => 'Montferrat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//204
			//saluzzo, castellaro, staffarda
            DB::table('counties')->insert([
				'county_name' => 'Cuneo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//205
			//susa, novalesa
            DB::table('counties')->insert([
				'county_name' => 'Susa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//206
			//vercelli, salasco, quinto
            DB::table('counties')->insert([
				'county_name' => 'Vercelli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Tuscany
			//207
			//siena, monteriggioni, san galgano, san gimignano, corsignano, monte oliveto, gaiole, castellina
            DB::table('counties')->insert([
				'county_name' => 'Siena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//208
			//grosseto, orbetello, manciano
            DB::table('counties')->insert([
				'county_name' => 'Grosseto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//209
			//piombino, massa, castello di valle
            DB::table('counties')->insert([
				'county_name' => 'Piombino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//210
			//sovana, sorano, pitigliano, fregiano
            DB::table('counties')->insert([
				'county_name' => 'Sovana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//Verona
			//211
			//verona, bovolone, bonavigo, bussolengo, legnago, san bonifacio, san martino
            DB::table('counties')->insert([
				'county_name' => 'Verona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//212
			//padova, masera, vigonza, praglia, este, monselice
            DB::table('counties')->insert([
				'county_name' => 'Padova',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//213
			//rovigo, vangadizza, adria, loreo, lendinara
            DB::table('counties')->insert([
				'county_name' => 'Rovigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//214
			//vicenza, montecchio, bassano, valdagno
            DB::table('counties')->insert([
				'county_name' => 'Vicenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//215
			//trent, appenzell,rofreit
            DB::table('counties')->insert([
				'county_name' => 'Trent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);			
			//Aquileia
			//216
			//aquileia, udine, tarcento, monfalcone
            DB::table('counties')->insert([
				'county_name' => 'Friuli',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//217
			//gorizia, gradisca
            DB::table('counties')->insert([
				'county_name' => 'Gorizia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//218
			//pordenone, san vito, aviano, polcenigo
            DB::table('counties')->insert([
				'county_name' => 'Pordenone',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Florence
			//219
			//florence, bagno, san gimigano
            DB::table('counties')->insert([
				'county_name' => 'Florence',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//220
			//arezzo, montevarchi, focognano, san nicolo
            DB::table('counties')->insert([
				'county_name' => 'Arezzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//221
			//cortona, perugia, castello
            DB::table('counties')->insert([
				'county_name' => 'Cortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//222
			//prato, filettole, montemurlo
            DB::table('counties')->insert([
				'county_name' => 'Prato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//Genoa
			//223
			//genoa, arenzano, mignanego, chiavari
            DB::table('counties')->insert([
				'county_name' => 'Genoa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//224
			//luni, pontremoli, bagnone, porto venere
            DB::table('counties')->insert([
				'county_name' => 'Lunigiana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//225
			//massa, carrara
            DB::table('counties')->insert([
				'county_name' => 'Massa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Noli
			//226
			//noli, savona, vado, albissola
            DB::table('counties')->insert([
				'county_name' => 'Noli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//227
			//finale, verezzi, albenga
            DB::table('counties')->insert([
				'county_name' => 'Finale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Oneglia
			//228
			//oneglia, loano
            DB::table('counties')->insert([
				'county_name' => 'Oneglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//229
			//ventimiglia, dolceaqua
            DB::table('counties')->insert([
				'county_name' => 'Ventimiglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Lucca
			//230
			//lucca, barga
            DB::table('counties')->insert([
				'county_name' => 'Lucca',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//231
			//pistoja, pescia, agliana, uzzano
            DB::table('counties')->insert([
				'county_name' => 'Pistoja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Pisa
			//
			//pisa, 
            DB::table('counties')->insert([
				'county_name' => 'Pisa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//
			//livorno, sassetta, san vincenzo, cecina, bibbona
            DB::table('counties')->insert([
				'county_name' => 'Livorno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//
			//volterra
            DB::table('counties')->insert([
				'county_name' => 'Volterra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Venice
			//
			//venice, chioggia
            DB::table('counties')->insert([
				'county_name' => 'Dogado',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//
			//belluno
            DB::table('counties')->insert([
				'county_name' => 'Belluno',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//
			//treviso
            DB::table('counties')->insert([
				'county_name' => 'Treviso',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//Bohemia
			//Bohemia
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Lusatia
			//
			//meissen, seusslitz
            DB::table('counties')->insert([
				'county_name' => 'Meissengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//hoyerswerda, bautzen
            DB::table('counties')->insert([
				'county_name' => 'Milzenigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//
			//dohna, dresden, briesnitz
            DB::table('counties')->insert([
				'county_name' => 'Nisangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//spremberg, senftenberg, lebusa
            DB::table('counties')->insert([
				'county_name' => 'Lusizigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//lubben, lieberose
            DB::table('counties')->insert([
				'county_name' => 'Selpuligau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Moravia
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Burgundy
			//Burgundy
			//
			//vezelay, bazoches
            DB::table('counties')->insert([
				'county_name' => 'Avalois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//autun, saint loup
            DB::table('counties')->insert([
				'county_name' => 'Autunais',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//auxerre, saint maurice
            DB::table('counties')->insert([
				'county_name' => 'Auxerrois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//saint reine, chatellenot, chateauneuf, commarin
            DB::table('counties')->insert([
				'county_name' => 'Auxois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//beaujeu, quincie, saint nizier
            DB::table('counties')->insert([
				'county_name' => 'Beaujolais',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//citeaux, savigny
            DB::table('counties')->insert([
				'county_name' => 'Beaunois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//chalon, saint germain
            DB::table('counties')->insert([
				'county_name' => 'Chalonais',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//chatillon, molesme, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Lassois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//macon, cluny
            DB::table('counties')->insert([
				'county_name' => 'Maconnais',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//nevers, marais
            DB::table('counties')->insert([
				'county_name' => 'Nivernais',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//tonerre, quincy
            DB::table('counties')->insert([
				'county_name' => 'Tonerrois',
				'county_category' => '',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Cisjurania
			//
			//grenoble, voiron, chartreuse
            DB::table('counties')->insert([
				'county_name' => 'Dauphine',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//billieme, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Belinois',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//embrun, risoul
            DB::table('counties')->insert([
				'county_name' => 'Embrunnais',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//forcalquier, gap
            DB::table('counties')->insert([
				'county_name' => 'Forcalquier',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//
			//lyon
            DB::table('counties')->insert([
				'county_name' => 'Lyonnais',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//briancon, clavieres
            DB::table('counties')->insert([
				'county_name' => 'Mauronais',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);			
			//
			//valence, montelier, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Valentinois',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//
			//vienne, albon
            DB::table('counties')->insert([
				'county_name' => 'Viennois',
				'county_category' => '',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Transjurania
			//
			//besancon, dole
            DB::table('counties')->insert([
				'county_name' => 'Amosenais',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//
			//habsburg, aarau, bern, lucerne
            DB::table('counties')->insert([
				'county_name' => 'Aargau',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//
			//solothurn, saint denis
            DB::table('counties')->insert([
				'county_name' => 'Bargenais',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//
			//lausanne, orbe, payerne, avenches
            DB::table('counties')->insert([
				'county_name' => 'Lausonnais',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//
			//vesoul, luxieul
            DB::table('counties')->insert([
				'county_name' => 'Portenais',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//neuchatel, yverdon
            DB::table('counties')->insert([
				'county_name' => 'Vaudenais',
				'county_category' => '',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Orange
			//
			//orange, caderousse, puegoulen
            DB::table('counties')->insert([
				'county_name' => 'Orange',
				'county_category' => '',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//venasque, carpentras, cavaillon, sorgue, vaison
            DB::table('counties')->insert([
				'county_name' => 'Venaissin',
				'county_category' => '',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//viviers, saint andeol, saint martin, saint just
            DB::table('counties')->insert([
				'county_name' => 'Vivarais',
				'county_category' => '',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Provence
			//
			//aix
            DB::table('counties')->insert([
				'county_name' => 'Aix',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//arles
            DB::table('counties')->insert([
				'county_name' => 'Arles',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Marseille',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Monaco',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Nice',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Savoy
			//
			//chambery, aix le bains
            DB::table('counties')->insert([
				'county_name' => 'Savoia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//aosta, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Aosta',
				'county_category' => '',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//thonon, bons
            DB::table('counties')->insert([
				'county_name' => 'Chablais',
				'county_category' => '',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//geneva, annecy
            DB::table('counties')->insert([
				'county_name' => 'Genevanais',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//
			//moutiers, montagny
            DB::table('counties')->insert([
				'county_name' => 'Tarantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//
			//sion, martigny, raron
            DB::table('counties')->insert([
				'county_name' => 'Valais',
				'county_category' => 'Eastfalagau',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//Papal States
			//Rome
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Rome',
				'county_category' => '',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Romagna
			//
			//ferrara
            DB::table('counties')->insert([
				'county_name' => 'Ferrara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//bologna, forli, faenza
            DB::table('counties')->insert([
				'county_name' => 'Bologna',
				'county_category' => '',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//carpegna, rimini
            DB::table('counties')->insert([
				'county_name' => 'Carpegna',
				'county_category' => '',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//ravenna,
            DB::table('counties')->insert([
				'county_name' => 'Ravenna',
				'county_category' => '',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Spoleto
			//
			//ancona, senigallia
            DB::table('counties')->insert([
				'county_name' => 'Ancona',
				'county_category' => '',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//fermo, camerino
            DB::table('counties')->insert([
				'county_name' => 'Fermo',
				'county_category' => '',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//spoleto, 
            DB::table('counties')->insert([
				'county_name' => 'Spoleto',
				'county_category' => '',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//Urbino
			//
			//urbno, pesaro
            DB::table('counties')->insert([
				'county_name' => 'Urbino',
				'county_category' => '',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Teutonic Order State
			//Livonia
			//
			//riga, lennewarden, kirchholm, dunamunde
            DB::table('counties')->insert([
				'county_name' => 'Livland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//ascheraden, kokenhusen
            DB::table('counties')->insert([
				'county_name' => 'Ascheraden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//dorpat, talkhof, wendau, 
            DB::table('counties')->insert([
				'county_name' => 'Dorpat',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//dunaburg, selburg 
            DB::table('counties')->insert([
				'county_name' => 'Dunaburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//fellin, karkus
            DB::table('counties')->insert([
				'county_name' => 'Fellin',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//goldingen, talsen, frauenburg, sackenhausen, windau
            DB::table('counties')->insert([
				'county_name' => 'Kurland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//mitau, annenburg, autzenburg
            DB::table('counties')->insert([
				'county_name' => 'Mitau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//lemburg, jurgensburg 
            DB::table('counties')->insert([
				'county_name' => 'Segewold',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//wenden, wolmar, lemsal
            DB::table('counties')->insert([
				'county_name' => 'Wenden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//wolkenburg, rositten
            DB::table('counties')->insert([
				'county_name' => 'Wolkenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Estonia
			//
			//reval, sankt matthias, weissenstein, wesenberg, narva
            DB::table('counties')->insert([
				'county_name' => 'Reval',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '49',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//pernau, hapsal, arensburg, soneburg
            DB::table('counties')->insert([
				'county_name' => 'Pernau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '49',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Prussia
			//
			//marienburg, altfeld, klakendorf, klettendorf
            DB::table('counties')->insert([
				'county_name' => 'Pomesanengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//bartenstein, heilsberg, schippenbeil
            DB::table('counties')->insert([
				'county_name' => 'Bartengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//braunsberg, allenstein, bischofsburg, wartenburg
            DB::table('counties')->insert([
				'county_name' => 'Ermland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//memelburg, windenburg, rutzau
            DB::table('counties')->insert([
				'county_name' => 'Memelland',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//landeshut, schalauerburg
            DB::table('counties')->insert([
				'county_name' => 'Nadrauengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//brandenburg, tapiow, wehlau
            DB::table('counties')->insert([
				'county_name' => 'Natangergau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//elbing, tolkemitz, muhlhausen
            DB::table('counties')->insert([
				'county_name' => 'Pogesanengau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//konigsberg, insterburg, angerburg, gerdauen
            DB::table('counties')->insert([
				'county_name' => 'Samland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Pomerelia
			//
			//danzig, prust, hohenstein, oliva
            DB::table('counties')->insert([
				'county_name' => 'Danzig',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//butow, rummelsburg, damerkow
            DB::table('counties')->insert([
				'county_name' => 'Butow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//
			//dirschau, mewe, neuenburg, 
            DB::table('counties')->insert([
				'county_name' => 'Dirschau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//karthaus, zuckau, chmelno
            DB::table('counties')->insert([
				'county_name' => 'Karthaus',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//kulm, althaus, rehden, graudenz
            DB::table('counties')->insert([
				'county_name' => 'Kulmerland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//lauenburg, neuendorf, vietzig
            DB::table('counties')->insert([
				'county_name' => 'Lauenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//putzig, krockow, kossakowitz
            DB::table('counties')->insert([
				'county_name' => 'Putzig',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//baldenburg, schlochau
            DB::table('counties')->insert([
				'county_name' => 'Schlochau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//schwetz, bromberg
            DB::table('counties')->insert([
				'county_name' => 'Schwetz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//thorn, birgelau, 
            DB::table('counties')->insert([
				'county_name' => 'Thorn',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//tuchel, seehaupten
            DB::table('counties')->insert([
				'county_name' => 'Tuchel',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Pomerania
			//
			//kammin, gulzow, schwirsen, dievenow
            DB::table('counties')->insert([
				'county_name' => 'Kammin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//arnswalde, bernstein
            DB::table('counties')->insert([
				'county_name' => 'Arnswalde',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//gollnow, massow, stepenitz 
            DB::table('counties')->insert([
				'county_name' => 'Gollnow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//greifenhagen, barwalde 
            DB::table('counties')->insert([
				'county_name' => 'Greifenhagen',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//greifenberg, treptow 
            DB::table('counties')->insert([
				'county_name' => 'Greifenberg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//pyritz, warnitz, prillwitz
            DB::table('counties')->insert([
				'county_name' => 'Pyritz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//kessin, rostock, stralsund, greifswald, demmin, grimmen
            DB::table('counties')->insert([
				'county_name' => 'Kessinigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//kolberg, degow
            DB::table('counties')->insert([
				'county_name' => 'Kolberg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//koslin, zanow, bublitz, pollnow
            DB::table('counties')->insert([
				'county_name' => 'Koslin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//neustettin, baldenburg
            DB::table('counties')->insert([
				'county_name' => 'Neustettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//schivelbein, stolzenberg, 
            DB::table('counties')->insert([
				'county_name' => 'Schivelbein',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//slupsk, kublitz, glowitz
            DB::table('counties')->insert([
				'county_name' => 'Slupsk',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//schlawe, rugenwalde, malchow
            DB::table('counties')->insert([
				'county_name' => 'Schlawe',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//stettin, predzlow, pasewalk, kolbatz 
            DB::table('counties')->insert([
				'county_name' => 'Stettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//wolgast, neuenkirchen, buggenhagen, wollin
            DB::table('counties')->insert([
				'county_name' => 'Wostrosegau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Brandenburg
			//
			//brandenburg, potsdam
            DB::table('counties')->insert([
				'county_name' => 'Havelland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//wusterhausen, wittstock
            DB::table('counties')->insert([
				'county_name' => 'Dossegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//perleberg, pritzwalk, wittenberg
            DB::table('counties')->insert([
				'county_name' => 'Linaggau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//havelberg, plattenburg
            DB::table('counties')->insert([
				'county_name' => 'Nelitzigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//berlin, tempelhof, rosenfeld, helwichdorf, kaulsdorf, maltersdorf, biesdorf, morczahn
            DB::table('counties')->insert([
				'county_name' => 'Retschanengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//
			//rowenburg, schenkenberg, uckerfeld, templin
            DB::table('counties')->insert([
				'county_name' => 'Uckermark',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Mecklenburg
			//
			//teterow, malchin, demmin
            DB::table('counties')->insert([
				'county_name' => 'Circipanigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//mecklenburg, wismar
            DB::table('counties')->insert([
				'county_name' => 'Obotritegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//schwerin, ratzeburg
            DB::table('counties')->insert([
				'county_name' => 'Polabigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//
			//lubeck, oldenburg, segeberg, preetz
            DB::table('counties')->insert([
				'county_name' => 'Wagrigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);

			//France
			//France
			//Anjou
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Aquitaine
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Auvergne
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Berry
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Bourbonnais
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Brittany
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Casgony
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
			//Champagne
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
			//Francia
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
			//Normandy
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
			//Orleanais
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
			//Picardy
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
			//Poitou
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
			//Toulouse
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
    }
}