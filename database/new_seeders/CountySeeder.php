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
				'vernacular_architecture' => '',	//Arpitan, Bavarian, Bohemian, Breton, Franconian, Frankish, Frisian, Flemish, Lombard, Occitan, Saxon, Silesian, Swabian, 
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
			//ingolstadt, neuburg, freising
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
				'vernacular_architecture' => 'Flemish'
            ]);	
			//13
			//hasselt, tongeren, borgloon
            DB::table('counties')->insert([
				'county_name' => 'Haspengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '3',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
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
				'vernacular_architecture' => 'Flemish'
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
			//wurzburg, wertheim, waldsassen
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
			//luneville, epinal, fontenoy, remiremont
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
			//brunswick, hebesheim, haldensleben, supplinburg
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
			//goslar, harzburg, osterode, herzberg
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
			//augsburg, wettenhausen, wittelsbach
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
			//hohenzollern, falkenstein, ulm, hohenstaufen
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
			//merseburg, halle, wettin
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
			//tergernsee, ebertshausen, munich, staffelsee
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
			//bergamo, san pietro, stezzano, treviolo, mozzo, astino
            DB::table('counties')->insert([
				'county_name' => 'Bergamo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//184
			//brescia, rovato, polpenazze, bedizzole, san giorgo
            DB::table('counties')->insert([
				'county_name' => 'Brescia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//185
			//crema, vaiano, bagnolo, trescore
            DB::table('counties')->insert([
				'county_name' => 'Crema',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//186
			//cremona, caorso
            DB::table('counties')->insert([
				'county_name' => 'Cremona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//187
			//pavullo, monterastello, montecuccolo
            DB::table('counties')->insert([
				'county_name' => 'Frignana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//188
			//lodi, cerreto
            DB::table('counties')->insert([
				'county_name' => 'Lodi',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//189
			//mantua, polirone, levata, pietola, cavriana, gonzaga
            DB::table('counties')->insert([
				'county_name' => 'Mantua',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//190
			//modena, mirandola, vignola, nonantola
            DB::table('counties')->insert([
				'county_name' => 'Modena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//191
			//novara, chiavenna
            DB::table('counties')->insert([
				'county_name' => 'Novara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//192
			//parma, fidenza, colorno, san vitale, lagorano, castrignano
            DB::table('counties')->insert([
				'county_name' => 'Parma',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//193
			//pavia, certosa, san martino, carpignano
            DB::table('counties')->insert([
				'county_name' => 'Pavia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//194
			//piacenza, grazzano, bobbio
            DB::table('counties')->insert([
				'county_name' => 'Piacenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//195
			//reggio, bagnolo, fogliano, canossa
            DB::table('counties')->insert([
				'county_name' => 'Reggio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//196
			//tortona, montegioco, garbagna
            DB::table('counties')->insert([
				'county_name' => 'Tortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//197
			//vernio, montepiano
            DB::table('counties')->insert([
				'county_name' => 'Vernio',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Piedmont
			//198
			//alba, monforte, diano
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//199
			//asti, burio, loreto
            DB::table('counties')->insert([
				'county_name' => 'Asti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//200
			//valloriate, san dalmazzo
            DB::table('counties')->insert([
				'county_name' => 'Auriate',
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
			//cuneo, saluzzo, castellaro, staffarda
            DB::table('counties')->insert([
				'county_name' => 'Cuneo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//204
			//alessandria, acqui
            DB::table('counties')->insert([
				'county_name' => 'Montferrat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//205
			//pragelato, pinerolo, exilles
            DB::table('counties')->insert([
				'county_name' => 'Pragelato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//206
			//susa, novalesa
            DB::table('counties')->insert([
				'county_name' => 'Susa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//207
			//turino, moncalieri, chieri, rivoli
            DB::table('counties')->insert([
				'county_name' => 'Turino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//208
			//vercelli, salasco, quinto
            DB::table('counties')->insert([
				'county_name' => 'Vercelli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//209
			//vigevano, lomello, robbio
            DB::table('counties')->insert([
				'county_name' => 'Vigevano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Tuscany
			//210
			//siena, monteriggioni, san galgano, san gimignano, corsignano, monte oliveto, gaiole, castellina
            DB::table('counties')->insert([
				'county_name' => 'Siena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//211
			//grosseto, orbetello, manciano
            DB::table('counties')->insert([
				'county_name' => 'Grosseto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//212
			//piombino, massa, castello di valle
            DB::table('counties')->insert([
				'county_name' => 'Piombino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//213
			//sovana, sorano, pitigliano, fregiano
            DB::table('counties')->insert([
				'county_name' => 'Sovana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//Verona
			//214
			//verona, bovolone, bonavigo, bussolengo, legnago, san bonifacio, san martino
            DB::table('counties')->insert([
				'county_name' => 'Verona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//215
			//padova, masera, vigonza, praglia, este, monselice, solesino
            DB::table('counties')->insert([
				'county_name' => 'Padova',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//216
			//rovigo, vangadizza, adria, loreo, lendinara
            DB::table('counties')->insert([
				'county_name' => 'Rovigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//217
			//vicenza, montecchio, bassano, valdagno
            DB::table('counties')->insert([
				'county_name' => 'Vicenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//218
			//trent, appenzell,rofreit
            DB::table('counties')->insert([
				'county_name' => 'Trent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);			
			//Aquileia
			//219
			//aquileia, udine, tarcento, monfalcone
            DB::table('counties')->insert([
				'county_name' => 'Friuli',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//220
			//gorizia, gradisca
            DB::table('counties')->insert([
				'county_name' => 'Gorizia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//221
			//pordenone, san vito, aviano, polcenigo
            DB::table('counties')->insert([
				'county_name' => 'Pordenone',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Florence
			//222
			//florence, bagno, san gimigano
            DB::table('counties')->insert([
				'county_name' => 'Florence',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//223
			//arezzo, montevarchi, focognano, san nicolo
            DB::table('counties')->insert([
				'county_name' => 'Arezzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//224
			//cortona, perugia, castello
            DB::table('counties')->insert([
				'county_name' => 'Cortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//225
			//perugia, assisi, foligno, gubbio
            DB::table('counties')->insert([
				'county_name' => 'Perugia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//226
			//prato, filettole, montemurlo
            DB::table('counties')->insert([
				'county_name' => 'Prato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);		
			//Genoa
			//227
			//genoa, arenzano, mignanego, chiavari
            DB::table('counties')->insert([
				'county_name' => 'Genoa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//228
			//luni, pontremoli, bagnone, porto venere
            DB::table('counties')->insert([
				'county_name' => 'Lunigiana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//229
			//massa, carrara
            DB::table('counties')->insert([
				'county_name' => 'Massa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Noli
			//230
			//noli, savona, vado, albissola
            DB::table('counties')->insert([
				'county_name' => 'Noli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//231
			//albenga, san fedele, lusignano
            DB::table('counties')->insert([
				'county_name' => 'Albenga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//232
			//finale, verezzi
            DB::table('counties')->insert([
				'county_name' => 'Finale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Oneglia
			//233
			//oneglia, loano
            DB::table('counties')->insert([
				'county_name' => 'Oneglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//234
			//monaco, menton, roquebrune
            DB::table('counties')->insert([
				'county_name' => 'Monaco',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//235
			//ventimiglia, dolceaqua
            DB::table('counties')->insert([
				'county_name' => 'Ventimiglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Lucca
			//236
			//lucca, barga
            DB::table('counties')->insert([
				'county_name' => 'Lucca',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//237
			//pistoja, pescia, agliana, uzzano
            DB::table('counties')->insert([
				'county_name' => 'Pistoja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Pisa
			//238
			//pisa, cascina, castelfranco, san giuliano, pontedera, vecchiano 
            DB::table('counties')->insert([
				'county_name' => 'Pisa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//239
			//corte, alando, aleria, ajaccio, morosaglia
            DB::table('counties')->insert([
				'county_name' => 'Corsica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//240
			//livorno, sassetta, san vincenzo 
            DB::table('counties')->insert([
				'county_name' => 'Livorno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//241
			//riparbella, cecina, bibbona, castellina
            DB::table('counties')->insert([
				'county_name' => 'Riparbella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//242
			//volterra, chianni, monteverdi, saline
            DB::table('counties')->insert([
				'county_name' => 'Volterra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Venice
			//243
			//venice, chioggia, torcello, san donato, portogruaro, spinea, martellago, san ilario, mirano, salzano
            DB::table('counties')->insert([
				'county_name' => 'Dogado',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//244
			//belluno, feltre, sedico, alpago, san giustina
            DB::table('counties')->insert([
				'county_name' => 'Belluno',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//245
			//treviso, mogliano, conegliano, castelfranco, biancade, musestre, oderzo
            DB::table('counties')->insert([
				'county_name' => 'Treviso',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//Bohemia
			//Bohemia
			//246
			//prague, kaurim, siebenlinden
            DB::table('counties')->insert([
				'county_name' => 'Prague',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//247
			//bechin, tabor
            DB::table('counties')->insert([
				'county_name' => 'Bechin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);			
			//248
			//bunzlau, reichenberg, waldstein
            DB::table('counties')->insert([
				'county_name' => 'Bunzlau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//249
			//elbogen, karlsbad
            DB::table('counties')->insert([
				'county_name' => 'Elbogen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//250
			//glatz, wunschelburg, kunzendorf
            DB::table('counties')->insert([
				'county_name' => 'Glatzerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//251
			//koniggratz, nachod, braunau, welisch, podiebrad, sadowa, lichtenburg
            DB::table('counties')->insert([
				'county_name' => 'Koniggratz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//252
			//leitmeritz, aussig
            DB::table('counties')->insert([
				'county_name' => 'Leitmeritz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//253
			//pilsen, kladrau, tepl, klattau, taus, tachau
            DB::table('counties')->insert([
				'county_name' => 'Pilsen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//254
			//rakonitz, purglitz
            DB::table('counties')->insert([
				'county_name' => 'Rakonitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//255
			//schlan, brandeis
            DB::table('counties')->insert([
				'county_name' => 'Schlan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//256
			//saaz, komotau, laun, plass
            DB::table('counties')->insert([
				'county_name' => 'Saaz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//257
			//tschaslau, kuttenberg, sedlec
            DB::table('counties')->insert([
				'county_name' => 'Tschaslawsko',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//Lusatia
			//258
			//meissen, seusslitz
            DB::table('counties')->insert([
				'county_name' => 'Meissengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//259
			//hoyerswerda, bautzen
            DB::table('counties')->insert([
				'county_name' => 'Milzenigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);				
			//260
			//dohna, dresden, briesnitz
            DB::table('counties')->insert([
				'county_name' => 'Nisangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//261
			//spremberg, senftenberg, lebusa
            DB::table('counties')->insert([
				'county_name' => 'Lusizigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//262
			//lubben, lieberose
            DB::table('counties')->insert([
				'county_name' => 'Selpuligau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//Moravia
			//263
			//brunn, pernstein, austerlitz, goding, lodenitz
            DB::table('counties')->insert([
				'county_name' => 'Brunn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);	
			//264
			//iglau, pilgrams
            DB::table('counties')->insert([
				'county_name' => 'Iglau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//265
			//olmutz, prossnitz, sternberg
            DB::table('counties')->insert([
				'county_name' => 'Olmutz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//266
			//prerau, weisskirchen, leipnik, kremsier
            DB::table('counties')->insert([
				'county_name' => 'Prerau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//267
			//velingrad, zlin
            DB::table('counties')->insert([
				'county_name' => 'Velingrad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//268
			//znaim, kralitz
            DB::table('counties')->insert([
				'county_name' => 'Znaim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//Lower Silesia
			//269
			//jauer, grussau, bolkenhain
            DB::table('counties')->insert([
				'county_name' => 'Jauer',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);			
			//270
			//glogau, hermsdorf
            DB::table('counties')->insert([
				'county_name' => 'Glogau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//271
			//leubus, wolau
            DB::table('counties')->insert([
				'county_name' => 'Leubus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//272
			//liegnitz, hoyn, parchwitz, arnsdorf
            DB::table('counties')->insert([
				'county_name' => 'Liegnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//273
			//oels, wartenberg, ferstenberg, bernstadt
            DB::table('counties')->insert([
				'county_name' => 'Oels',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//274
			//schweidnitz, striegau 
            DB::table('counties')->insert([
				'county_name' => 'Schweidnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//Upper Silesia
			//275
			//oppeln, krappitz
            DB::table('counties')->insert([
				'county_name' => 'Oppeln',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);				
			//276
			//breslau, waldenburg 
            DB::table('counties')->insert([
				'county_name' => 'Breslau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//277
			//brieg, grottkau, lowen
            DB::table('counties')->insert([
				'county_name' => 'Brieg',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//278
			//ratibor, pless, beuthen
            DB::table('counties')->insert([
				'county_name' => 'Ratibor',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//279
			//teschen, golleschau, ustron
            DB::table('counties')->insert([
				'county_name' => 'Teschen',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//280
			//troppau, lischwitz, jagerndorf
            DB::table('counties')->insert([
				'county_name' => 'Troppau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//Burgundy
			//Burgundy
			//281
			//vezelay, bazoches
            DB::table('counties')->insert([
				'county_name' => 'Avalois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//282
			//autun, saint loup, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Autunais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//283
			//auxerre, saint maurice
            DB::table('counties')->insert([
				'county_name' => 'Auxerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//284
			//saint reine, chatellenot, chateauneuf, commarin
            DB::table('counties')->insert([
				'county_name' => 'Auxois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//285
			//beaujeu, quincie, saint nizier
            DB::table('counties')->insert([
				'county_name' => 'Beaujolais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//286
			//citeaux, savigny
            DB::table('counties')->insert([
				'county_name' => 'Beaunois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//287
			//chalon, saint germain
            DB::table('counties')->insert([
				'county_name' => 'Chalonais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//288
			//chatillon, molesme, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Lassois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//289
			//macon, cluny
            DB::table('counties')->insert([
				'county_name' => 'Maconnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//290
			//nevers, marais
            DB::table('counties')->insert([
				'county_name' => 'Nivernais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//291
			//tonerre, quincy
            DB::table('counties')->insert([
				'county_name' => 'Tonerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Cisjurania
			//292
			//grenoble, voiron, chartreuse
            DB::table('counties')->insert([
				'county_name' => 'Dauphine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//293
			//albon, mantaille
            DB::table('counties')->insert([
				'county_name' => 'Albon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//294
			//billieme, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Belinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//295
			//embrun, risoul
            DB::table('counties')->insert([
				'county_name' => 'Embrunnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//296
			//forcalquier, gap, apt, sisteron
            DB::table('counties')->insert([
				'county_name' => 'Forcalquier',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//297
			//lyon, irigny, seyssuel, givors, savigny
            DB::table('counties')->insert([
				'county_name' => 'Lyonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//298
			//briancon, clavieres
            DB::table('counties')->insert([
				'county_name' => 'Mauronais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);			
			//299
			//valence, montelier, saint marcel, montmeyran
            DB::table('counties')->insert([
				'county_name' => 'Valentinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//300
			//vienne, chonas, ampuis
            DB::table('counties')->insert([
				'county_name' => 'Viennois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Transjurania
			//301
			//besancon, dole
            DB::table('counties')->insert([
				'county_name' => 'Amosenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//302
			//habsburg, aarau, bern, lucerne
            DB::table('counties')->insert([
				'county_name' => 'Aargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//303
			//solothurn, saint denis
            DB::table('counties')->insert([
				'county_name' => 'Bargenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//304
			//lausanne, orbe, payerne, avenches
            DB::table('counties')->insert([
				'county_name' => 'Lausonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//305
			//vesoul, luxieul
            DB::table('counties')->insert([
				'county_name' => 'Portenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//306
			//neuchatel, yverdon
            DB::table('counties')->insert([
				'county_name' => 'Vaudenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Orange
			//307
			//orange, caderousse, puegoulen 
            DB::table('counties')->insert([
				'county_name' => 'Orange',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//308
			//venasque, avignon, carpentras, cavaillon, sorgue, vaison, saint remy, cavaillon
            DB::table('counties')->insert([
				'county_name' => 'Venaissin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//309
			//viviers, saint andeol, saint martin, saint just, nyons, montelimar, vaison
            DB::table('counties')->insert([
				'county_name' => 'Vivarais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Provence
			//310
			//aix, salon
            DB::table('counties')->insert([
				'county_name' => 'Provence',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//311
			//arles, montmajour, tarascon
            DB::table('counties')->insert([
				'county_name' => 'Arles',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//312
			//baux, mouries, riez, senez, digne
            DB::table('counties')->insert([
				'county_name' => 'Baux',
				'county_category' => '',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//313
			//marseille, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Marseille',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//314
			//nice, villefranche, escarene, guillaumes, saint etienne, vence, glandeves, grasse, frejus
            DB::table('counties')->insert([
				'county_name' => 'Nice',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//315
			//toulon, ollioules, ollieres
            DB::table('counties')->insert([
				'county_name' => 'Toulon',
				'county_category' => '',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Savoy
			//316
			//chambery, aix le bains
            DB::table('counties')->insert([
				'county_name' => 'Savoia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//317
			//aosta, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Aosta',
				'county_category' => '',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//318
			//thonon, bons
            DB::table('counties')->insert([
				'county_name' => 'Chablais',
				'county_category' => '',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//319
			//geneva, annecy
            DB::table('counties')->insert([
				'county_name' => 'Genevanais',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//320
			//moutiers, montagny
            DB::table('counties')->insert([
				'county_name' => 'Tarantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//321
			//sion, martigny, raron
            DB::table('counties')->insert([
				'county_name' => 'Valais',
				'county_category' => 'Eastfalagau',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//Papal States
			//Rome
			//322
			//rome, nettuno, tivoli, civitavecchia, velletri, montecelio, subiaco, scholastica
            DB::table('counties')->insert([
				'county_name' => 'Rome',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//323
			//frosinone, cassino, alatri, sora, ceccano, anagni, ferentino, veroli
            DB::table('counties')->insert([
				'county_name' => 'Frosinone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//324
			//latina, terracina, fondi, castellone, gaeta
            DB::table('counties')->insert([
				'county_name' => 'Latina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//325
			//rieti, farfa, corvaro
            DB::table('counties')->insert([
				'county_name' => 'Rieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//326
			//viterbo, castellana, toscanella, corneto, vetralla
            DB::table('counties')->insert([
				'county_name' => 'Viterbo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);		
			//Romagna
			//327
			//ferrara, cento, comacchio, argenta, copparo
            DB::table('counties')->insert([
				'county_name' => 'Ferrara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//328
			//bologna, forli, faenza, imola, molinella, san pietro, san giovanni, monterenzio
            DB::table('counties')->insert([
				'county_name' => 'Bologna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//329
			//carpegna, rimini, verucchio, coriano
            DB::table('counties')->insert([
				'county_name' => 'Carpegna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//330
			//ravenna, lugo, cervia, bagnacavallo, massa, conselice
            DB::table('counties')->insert([
				'county_name' => 'Ravenna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//Spoleto
			//331
			//ancona, senigallia
            DB::table('counties')->insert([
				'county_name' => 'Ancona',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//332
			//chieti, ortona, vasto, lanciano, san vito, san giovanni
            DB::table('counties')->insert([
				'county_name' => 'Chieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//333
			//fermo, camerino, macerata
            DB::table('counties')->insert([
				'county_name' => 'Fermo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//334
			//pescara, montesilvano, san angelo
            DB::table('counties')->insert([
				'county_name' => 'Pescara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//335
			//spoleto, aquila,
            DB::table('counties')->insert([
				'county_name' => 'Spoleto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//Urbino
			//336
			//urbino, montebello, cavallino, fermignano
            DB::table('counties')->insert([
				'county_name' => 'Urbino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '49',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//337
			//pesaro, fano, mondolfo
            DB::table('counties')->insert([
				'county_name' => 'Pesaro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '49',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Teutonic Order State
			//Livonia
			//338
			//riga, lennewarden, kirchholm, dunamunde
            DB::table('counties')->insert([
				'county_name' => 'Livland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//339
			//ascheraden, kokenhusen
            DB::table('counties')->insert([
				'county_name' => 'Ascheraden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//340
			//dorpat, talkhof, wendau, 
            DB::table('counties')->insert([
				'county_name' => 'Dorpat',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//341
			//dunaburg, selburg 
            DB::table('counties')->insert([
				'county_name' => 'Dunaburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//342
			//fellin, karkus
            DB::table('counties')->insert([
				'county_name' => 'Fellin',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//343
			//goldingen, talsen, frauenburg, sackenhausen, windau
            DB::table('counties')->insert([
				'county_name' => 'Kurland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//344
			//mitau, annenburg, autzenburg
            DB::table('counties')->insert([
				'county_name' => 'Mitau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//345
			//lemburg, jurgensburg 
            DB::table('counties')->insert([
				'county_name' => 'Segewold',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//346
			//wenden, wolmar, lemsal
            DB::table('counties')->insert([
				'county_name' => 'Wenden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//347
			//wolkenburg, rositten
            DB::table('counties')->insert([
				'county_name' => 'Wolkenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Estonia
			//348
			//reval, sankt matthias, weissenstein, wesenberg, narva
            DB::table('counties')->insert([
				'county_name' => 'Reval',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//349
			//pernau, hapsal, arensburg, soneburg
            DB::table('counties')->insert([
				'county_name' => 'Pernau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Prussia
			//350
			//marienburg, altfeld, klakendorf, klettendorf
            DB::table('counties')->insert([
				'county_name' => 'Pomesanengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//351
			//bartenstein, heilsberg, schippenbeil
            DB::table('counties')->insert([
				'county_name' => 'Bartengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//352
			//braunsberg, allenstein, bischofsburg, wartenburg
            DB::table('counties')->insert([
				'county_name' => 'Ermland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//353
			//memelburg, windenburg, rutzau
            DB::table('counties')->insert([
				'county_name' => 'Memelland',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//354
			//landeshut, schalauerburg
            DB::table('counties')->insert([
				'county_name' => 'Nadrauengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//355
			//brandenburg, tapiow, wehlau
            DB::table('counties')->insert([
				'county_name' => 'Natangergau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//356
			//elbing, tolkemitz, muhlhausen
            DB::table('counties')->insert([
				'county_name' => 'Pogesanengau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//357
			//konigsberg, insterburg, angerburg, gerdauen
            DB::table('counties')->insert([
				'county_name' => 'Samland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Pomerelia
			//358
			//danzig, prust, hohenstein, oliva
            DB::table('counties')->insert([
				'county_name' => 'Danzig',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//359
			//butow, rummelsburg, damerkow
            DB::table('counties')->insert([
				'county_name' => 'Butow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//360
			//dirschau, mewe, neuenburg, 
            DB::table('counties')->insert([
				'county_name' => 'Dirschau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//361
			//karthaus, zuckau, chmelno
            DB::table('counties')->insert([
				'county_name' => 'Karthaus',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//362
			//kulm, althaus, rehden, graudenz
            DB::table('counties')->insert([
				'county_name' => 'Kulmerland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//363
			//lauenburg, neuendorf, vietzig
            DB::table('counties')->insert([
				'county_name' => 'Lauenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//364
			//putzig, krockow, kossakowitz
            DB::table('counties')->insert([
				'county_name' => 'Putzig',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//365
			//baldenburg, schlochau
            DB::table('counties')->insert([
				'county_name' => 'Schlochau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//366
			//schwetz, bromberg
            DB::table('counties')->insert([
				'county_name' => 'Schwetz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//367
			//thorn, birgelau, 
            DB::table('counties')->insert([
				'county_name' => 'Thorn',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//368
			//tuchel, seehaupten
            DB::table('counties')->insert([
				'county_name' => 'Tuchel',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Pomerania
			//369
			//kammin, gulzow, schwirsen, dievenow
            DB::table('counties')->insert([
				'county_name' => 'Kammin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//370
			//arnswalde, bernstein
            DB::table('counties')->insert([
				'county_name' => 'Arnswalde',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//371
			//gollnow, massow, stepenitz 
            DB::table('counties')->insert([
				'county_name' => 'Gollnow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//372
			//greifenhagen, barwalde 
            DB::table('counties')->insert([
				'county_name' => 'Greifenhagen',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//373
			//greifenberg, treptow 
            DB::table('counties')->insert([
				'county_name' => 'Greifenberg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//374
			//pyritz, warnitz, prillwitz
            DB::table('counties')->insert([
				'county_name' => 'Pyritz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//375
			//kessin, rostock, stralsund, greifswald, demmin, grimmen
            DB::table('counties')->insert([
				'county_name' => 'Kessinigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//376
			//kolberg, degow
            DB::table('counties')->insert([
				'county_name' => 'Kolberg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//377
			//koslin, zanow, bublitz, pollnow
            DB::table('counties')->insert([
				'county_name' => 'Koslin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//378
			//neustettin, baldenburg
            DB::table('counties')->insert([
				'county_name' => 'Neustettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//379
			//schivelbein, stolzenberg, 
            DB::table('counties')->insert([
				'county_name' => 'Schivelbein',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//380
			//slupsk, kublitz, glowitz
            DB::table('counties')->insert([
				'county_name' => 'Slupsk',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//381
			//schlawe, rugenwalde, malchow
            DB::table('counties')->insert([
				'county_name' => 'Schlawe',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//382
			//stettin, predzlow, pasewalk, kolbatz 
            DB::table('counties')->insert([
				'county_name' => 'Stettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//383
			//wolgast, neuenkirchen, buggenhagen, wollin
            DB::table('counties')->insert([
				'county_name' => 'Wostrosegau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Brandenburg
			//384
			//brandenburg, potsdam
            DB::table('counties')->insert([
				'county_name' => 'Havelland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//385
			//wusterhausen, wittstock
            DB::table('counties')->insert([
				'county_name' => 'Dossegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//386
			//perleberg, pritzwalk, wittenberg
            DB::table('counties')->insert([
				'county_name' => 'Linaggau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//387
			//havelberg, plattenburg
            DB::table('counties')->insert([
				'county_name' => 'Nelitzigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//388
			//berlin, tempelhof, rosenfeld, helwichdorf, kaulsdorf, maltersdorf, biesdorf, morczahn
            DB::table('counties')->insert([
				'county_name' => 'Retschanengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);			
			//389
			//rowenburg, schenkenberg, uckerfeld, templin
            DB::table('counties')->insert([
				'county_name' => 'Uckermark',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Mecklenburg
			//390
			//teterow, malchin, demmin
            DB::table('counties')->insert([
				'county_name' => 'Circipanigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//391
			//mecklenburg, wismar
            DB::table('counties')->insert([
				'county_name' => 'Obotritegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//392
			//schwerin, ratzeburg
            DB::table('counties')->insert([
				'county_name' => 'Polabigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//393
			//lubeck, oldenburg, segeberg, preetz
            DB::table('counties')->insert([
				'county_name' => 'Wagrigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//France
			//France
			//Anjou
			//394
			//angers, saumur, fontevraud
            DB::table('counties')->insert([
				'county_name' => 'Anjou',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//395
			//mans, chalons
            DB::table('counties')->insert([
				'county_name' => 'Maine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//396
			//mortagne, nogent
            DB::table('counties')->insert([
				'county_name' => 'Perche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//397
			//tours, cormery, gaillard, amboise, villandry, chatigny, saint martin, chinon
            DB::table('counties')->insert([
				'county_name' => 'Touraine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//398
			//vendome, freteval, lavardin, montoire
            DB::table('counties')->insert([
				'county_name' => 'Vendomois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//Aquitaine
			//399
			//bordeaux, albret, fronsac
            DB::table('counties')->insert([
				'county_name' => 'Bordelais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//400
			//agen, moirax, lavardac
            DB::table('counties')->insert([
				'county_name' => 'Agenais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//401
			//angouleme, saint michel, chateauneuf
            DB::table('counties')->insert([
				'county_name' => 'Angoumois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//402
			//bazas, langon, marmande
            DB::table('counties')->insert([
				'county_name' => 'Bazadais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//403
			//limoges, ventadour
            DB::table('counties')->insert([
				'county_name' => 'Limousin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//404
			//lectoure, beaumont
            DB::table('counties')->insert([
				'county_name' => 'Lomagne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//405
			//perigeux, bergerac
            DB::table('counties')->insert([
				'county_name' => 'Perigord',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//406
			//saintes, royan, saint jean, taillebourg
            DB::table('counties')->insert([
				'county_name' => 'Saintogne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//Auvergne
			//407
			//randon, saint colombe, menat
            DB::table('counties')->insert([
				'county_name' => 'Auvergne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//408
			//aurillac, ytrac
            DB::table('counties')->insert([
				'county_name' => 'Aurillac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//409
			//brioude, saint ferreol, saint beauzire, chaise dieu, sauveterre
            DB::table('counties')->insert([
				'county_name' => 'Brioude',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//410
			//carlat, messilhac
            DB::table('counties')->insert([
				'county_name' => 'Carlat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//411
			//clermont, montpensier, thiers, voloie
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//412
			//feurs, montbrison, saint etienne, valbenoite
            DB::table('counties')->insert([
				'county_name' => 'Forez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//413
			//murat, mercoeur, saint flour
            DB::table('counties')->insert([
				'county_name' => 'Murat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Berry
			//414
			//bourges, meillant, massay
            DB::table('counties')->insert([
				'county_name' => 'Berry',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//415
			//sancerre, saint satur, saint gemme, launay, crezancy, reugny, champtin, vauvredon
            DB::table('counties')->insert([
				'county_name' => 'Sancerre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Bourbonnais
			//416
			//bourbon, sauvigny, moulins
            DB::table('counties')->insert([
				'county_name' => 'Bourbonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//417
			//montlucon, ainay, nassigny, herisson, evaux
            DB::table('counties')->insert([
				'county_name' => 'Montlucon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);		
			//Casgony
			//418
			//eauze, manciet, nogaro
            DB::table('counties')->insert([
				'county_name' => 'Armagnac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//419
			//astarac, mirande, masseube, auch
            DB::table('counties')->insert([
				'county_name' => 'Astarac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//420
			//pau, oloron
            DB::table('counties')->insert([
				'county_name' => 'Bearn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//421
			//bigorre, escaladieu, tarbes, maubourguet
            DB::table('counties')->insert([
				'county_name' => 'Bigorre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//422
			//saint bertrand, saint gaudens, muret, luchon
            DB::table('counties')->insert([
				'county_name' => 'Comminges',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//423
			//saint lizier, saint girons
            DB::table('counties')->insert([
				'county_name' => 'Couserans',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//424
			//dax, bayonne, tartas
            DB::table('counties')->insert([
				'county_name' => 'Dax',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//425
			//bouillas, fluerance, vic
            DB::table('counties')->insert([
				'county_name' => 'Fezensac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//426
			//montmarsan, roquefort 
            DB::table('counties')->insert([
				'county_name' => 'Marsan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//427
			//aire, geaune
            DB::table('counties')->insert([
				'county_name' => 'Tursan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//Champagne
			//428
			//reims, bazancourt, roucy, thony, fismes, verzy, epernay
            DB::table('counties')->insert([
				'county_name' => 'Remois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//429
			//brienne, lesmont, precy,blaincourt, vaubercey, dienville
            DB::table('counties')->insert([
				'county_name' => 'Brenois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//430
			//chalons, nettancourt, trois fontaines, vitry
            DB::table('counties')->insert([
				'county_name' => 'Chalonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//431
			//duesme, oigny, bussy, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Duesmois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//432
			//langres, dijon
            DB::table('counties')->insert([
				'county_name' => 'Langres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//433
			//meaux, thierry, coulommiers, crecy, crouy
            DB::table('counties')->insert([
				'county_name' => 'Meaux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//434
			//perthes, larzicourt, saint dizier
            DB::table('counties')->insert([
				'county_name' => 'Perthois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//435
			//provins, cigy, chenoise, cerneux
            DB::table('counties')->insert([
				'county_name' => 'Provins',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//436
			//rethel, attigny, porcien
            DB::table('counties')->insert([
				'county_name' => 'Rethelois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//437
			//sens, joigny
            DB::table('counties')->insert([
				'county_name' => 'Senois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//438
			//troyes, clairvaux
            DB::table('counties')->insert([
				'county_name' => 'Troyes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Francia
			//439
			//paris, saint denis, ecouen
            DB::table('counties')->insert([
				'county_name' => 'Pay de France',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//440
			//beauvais, goincourt
            DB::table('counties')->insert([
				'county_name' => 'Beauvaisis',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//441
			//beaumont, argenteuil
            DB::table('counties')->insert([
				'county_name' => 'Beaumont',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//442
			//brie, melun, saint fargeau, lagny, yerres
            DB::table('counties')->insert([
				'county_name' => 'Brie',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//443
			//clermont, angicourt, liancourt
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//444
			//ferrieres, landon, fontainebleau, ganne
            DB::table('counties')->insert([
				'county_name' => 'Gatinais',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//445
			//chatres, corbeil, clamart, dourdan, montlhery, palaiseau, montagu
            DB::table('counties')->insert([
				'county_name' => 'Hurepoix',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//446
			//mantes, rambouillet, beynes, houdan
            DB::table('counties')->insert([
				'county_name' => 'Mantois',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//447
			//senlis, compiegne
            DB::table('counties')->insert([
				'county_name' => 'Senlis',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//448
			//soissons, oulchy
            DB::table('counties')->insert([
				'county_name' => 'Soissonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//449
			//vez, oigny
            DB::table('counties')->insert([
				'county_name' => 'Valois',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//450
			//saint clair, pontoise
            DB::table('counties')->insert([
				'county_name' => 'Vexin',
				'county_category' => '',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Normandy
			//451
			//rouen, harcourt, jumieges, saint saens, meslay, aumonerie, saint philbert, brionne
            DB::table('counties')->insert([
				'county_name' => 'Roumois',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//452
			//alencon, argentan
            DB::table('counties')->insert([
				'county_name' => 'Alencon',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//453
			//avranches, lucerne, subligny
            DB::table('counties')->insert([
				'county_name' => 'Avranches',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//454
			//bayeux, caen, audrieu, mondaye, beaumont, coupesarte, creully
            DB::table('counties')->insert([
				'county_name' => 'Bayeux',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//455
			//fecamp, graville
            DB::table('counties')->insert([
				'county_name' => 'Caux',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);
			//456
			//coutances, cherbourg, hauteville, valognes, saint lo, lessay, vire, chanteloup, gratot, pirou, bricquebec, saint sauveur
            DB::table('counties')->insert([
				'county_name' => 'Coutances',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//457
			//evreux, verneuil, gaillard, gisors, vernon, acquigny, brecourt
            DB::table('counties')->insert([
				'county_name' => 'Evreux',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//458
			//eu, dieppe, aumale, arques
            DB::table('counties')->insert([
				'county_name' => 'Eu',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);		
			//459
			//lisieux, falaise, honfleur, saint michel, courcy, crevecoeur
            DB::table('counties')->insert([
				'county_name' => 'Lisieux',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//460
			//mortain, domfront
            DB::table('counties')->insert([
				'county_name' => 'Mortainais',
				'county_category' => '',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//Orleanais
			//461
			//orleans, fleury, meung, combreux
            DB::table('counties')->insert([
				'county_name' => 'Orleanais',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//462
			//blois, chambord, chaumont, bievre
            DB::table('counties')->insert([
				'county_name' => 'Blaisois',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//463
			//chartres, leveville, bretigny, saint pere
            DB::table('counties')->insert([
				'county_name' => 'Chartres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//464
			//chateaudun, courtalain
            DB::table('counties')->insert([
				'county_name' => 'Dunois',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//465
			//dreux, marsalin, nonancourt
            DB::table('counties')->insert([
				'county_name' => 'Dreux',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//466
			//etampes, chalo, mereville
            DB::table('counties')->insert([
				'county_name' => 'Etampois',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//467
			//nemours, montargis, moncourt
            DB::table('counties')->insert([
				'county_name' => 'Nemours',
				'county_category' => '',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Picardy
			//468
			//arras, saint omer
            DB::table('counties')->insert([
				'county_name' => 'Artois',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);	
			//469
			//amiens, flixecourt, picquigny, corbie
            DB::table('counties')->insert([
				'county_name' => 'Amienois',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//470
			//boulogne, etaples
            DB::table('counties')->insert([
				'county_name' => 'Boulenois',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//471
			//bruges, ypres, lille, douai, veurne, poperinge, dunkirk, gravelines
            DB::table('counties')->insert([
				'county_name' => 'Flanders',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);
			//472
			//guines, calais
            DB::table('counties')->insert([
				'county_name' => 'Guines',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//473
			//laon, coucy, corbeny
            DB::table('counties')->insert([
				'county_name' => 'Laonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//474
			//montreuil, recques, agincourt
            DB::table('counties')->insert([
				'county_name' => 'Montreuil',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//475
			//noyon, sempigny, morlincourt, varesnes, salency
            DB::table('counties')->insert([
				'county_name' => 'Noyonnais',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//476
			//crecy, nouvion, saint ricquier
            DB::table('counties')->insert([
				'county_name' => 'Ponthieu',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//477
			//therouanne, royon, saint pol
            DB::table('counties')->insert([
				'county_name' => 'Ternois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//478
			//tournai, mouscron, courtrai
            DB::table('counties')->insert([
				'county_name' => 'Tournais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//479
			//peronne, saint quentin, bohain, saint martin, retoul
            DB::table('counties')->insert([
				'county_name' => 'Vermandois',
				'county_category' => '',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Poitou
			//480
			//poitiers, parthenay, niort, saint junien, touffou, chauvigny, vouille, lusignan
            DB::table('counties')->insert([
				'county_name' => 'Poitou',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//481
			//chatelaillon, mauze, rochelle
            DB::table('counties')->insert([
				'county_name' => 'Aunis',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//482
			//brioux, aubigne, melleran, melle
            DB::table('counties')->insert([
				'county_name' => 'Briancais',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//483
			//chatellerault, clairvaux, usseau, saint michel, marigny
            DB::table('counties')->insert([
				'county_name' => 'Chatellerault',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//484
			//gueret, bellac, aubusson, grandmont
            DB::table('counties')->insert([
				'county_name' => 'Marche',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//485
			//thouars, fontenay, montaigu, talmont
            DB::table('counties')->insert([
				'county_name' => 'Thouarsais',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//486
			//turenne, brive, tulle, noailhac, collonges, sarlat, beynac, castelnaud
            DB::table('counties')->insert([
				'county_name' => 'Turenne',
				'county_category' => '',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Toulouse
			//487
			//toulouse, lavaur, maure, castelginest, colomiers, montgiscard, brax
            DB::table('counties')->insert([
				'county_name' => 'Toulouse',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//488
			//albi, castelnau, saint jeury
            DB::table('counties')->insert([
				'county_name' => 'Albi',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//489
			//carcasonne, castelnaudary, mirepoix, puylaurens
            DB::table('counties')->insert([
				'county_name' => 'Carcasonne',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//490
			//foix, tarascon, montgrenier
            DB::table('counties')->insert([
				'county_name' => 'Foix',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//491
			//javols, mende, langogne, apcher
            DB::table('counties')->insert([
				'county_name' => 'Gevaudan',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//492
			//melgueil, montpellier, maguelonne
            DB::table('counties')->insert([
				'county_name' => 'Melgueil',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//493
			//millau, melac
            DB::table('counties')->insert([
				'county_name' => 'Millau',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//494
			//narbonne, beziers, lodeve, agde
            DB::table('counties')->insert([
				'county_name' => 'Narbonne',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//495
			//nimes, uzes
            DB::table('counties')->insert([
				'county_name' => 'Nimes',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//496
			//cahors, montauban, gourdon, figeac, aujols, arcambal, cabrerets
            DB::table('counties')->insert([
				'county_name' => 'Quercy',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//497
			//rodez, villefranche, saint radegonde, belcastel, bertholene
            DB::table('counties')->insert([
				'county_name' => 'Rouergue',
				'county_category' => '',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//498
			//puy, montlaur
            DB::table('counties')->insert([
				'county_name' => 'Velay',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//Brittany
			//Brittany
			//499
			//quimper, concarneau
            DB::table('counties')->insert([
				'county_name' => 'Cornouailles',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//500
			//ach, saint mathieu, brest
            DB::table('counties')->insert([
				'county_name' => 'Ach',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//501
			//dol, tronchet, combourg, tremeheuc, saint martin, boussac
            DB::table('counties')->insert([
				'county_name' => 'Dol',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//502
			//saint pol, morlaix, lannion, kerouzere
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//503
			//rohan, carhaix
            DB::table('counties')->insert([
				'county_name' => 'Poher',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//504
			//vannes, ponthivy
            DB::table('counties')->insert([
				'county_name' => 'Vannais',
				'county_category' => '',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Domnonee
			//505
			//saint brieuc, guingamp, chatelaudren
            DB::table('counties')->insert([
				'county_name' => 'Penthievre',
				'county_category' => '',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//506
			//alet, chateauneuf, saint guinoux
            DB::table('counties')->insert([
				'county_name' => 'Alet',
				'county_category' => '',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//507
			//treguier, lezardrieux, plouguiel
            DB::table('counties')->insert([
				'county_name' => 'Tregor',
				'county_category' => '',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Retz
			//508
			//pornic, paimboeuf, machecoul
            DB::table('counties')->insert([
				'county_name' => 'Retz',
				'county_category' => '',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//509
			//nantes, guerande
            DB::table('counties')->insert([
				'county_name' => 'Nantais',
				'county_category' => '',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//510
			//rennes, fougeres
            DB::table('counties')->insert([
				'county_name' => 'Rennais',
				'county_category' => '',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Britain
			//Ireland
			//Connacht
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Leinster
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Meath
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Munster
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Ulster
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//England
			//East Anglia
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Norfolk',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Suffolk',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Essex
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Essex',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Middlesex',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Hwicce
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Kent
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Kent',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Lindsey
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Lincolnshire',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//Mercia
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
			//Northumbria
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
			//Sussex
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Sussex',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Wessex
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Berkshire',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Dorset',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Hampshire',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Somerset',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Surrey',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);		
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Wiltshire',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);
			//Wales
			//Cornwall
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Cornwall',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => 'Devonshire',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Dyfed
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Gwent
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Gwyned
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Powys
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);				
			//Scotland
			//Alba
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Bernicia
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Fortriu
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Galloway
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//Strathclyde
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