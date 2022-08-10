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
				'vernacular_architecture' => '',	//Arpitan, Bavarian, Bohemian, Breton, Franconian, Frankish, Frisian, Flemish, Lombard, Occitan, Saxon, Silesian, Moravian, Swabian, Livonian, Prussian, Wendish, Irish, English, Welsh, Gaelic, Pictish, Norwegian, Danish, Swedish, Finnish, Navarrese, Aragonese, Castillian, Leonese, Galician, Asturian, Cantabrian, Portuguese, Polish, Lithuanian, Moorish
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
			//egerburg, nuremberg, grafengehaig
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
			//steinz, graz, seckau
            DB::table('counties')->insert([
				'county_name' => 'Jauntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//21
			//karlsberg, klagenfurt, velden, sankt veit, gurk
            DB::table('counties')->insert([
				'county_name' => 'Kroatengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//22
			//sant paul, sankt andra
            DB::table('counties')->insert([
				'county_name' => 'Lavanttal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//23
			//leoben, sankt stefan
            DB::table('counties')->insert([
				'county_name' => 'Leobental',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//24
			//kadour, lienz, villach
            DB::table('counties')->insert([
				'county_name' => 'Lurngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//25
			//eppenstein, hohenwang
            DB::table('counties')->insert([
				'county_name' => 'Murztal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//26
			//celje, richenburg
            DB::table('counties')->insert([
				'county_name' => 'Sanntal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '4',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//Carniola
			//27
			//laibach, zobelsberg
            DB::table('counties')->insert([
				'county_name' => 'Krainmark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//28
			//tergeste, parenzo, mitterburg
            DB::table('counties')->insert([
				'county_name' => 'Histria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '5',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//Franconia
			//29
			//fulda, hunfeld, mellrichstadt, ebersburg, henneberg, schweinfurt
            DB::table('counties')->insert([
				'county_name' => 'Grabfeld',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//30
			//rotenburg, colmberg, comburg
            DB::table('counties')->insert([
				'county_name' => 'Gollachgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//31
			//kitzingen, gerolshofen
            DB::table('counties')->insert([
				'county_name' => 'Gotzfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//32
			//mosbach, minneburg
            DB::table('counties')->insert([
				'county_name' => 'Jagstgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//33
			//hammelburg, gersfeld
            DB::table('counties')->insert([
				'county_name' => 'Saalgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//34
			//gosheim, kaisersheim
            DB::table('counties')->insert([
				'county_name' => 'Sualafeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//35
			//heilbronn, weinsberg, ellhofen, ohringen
            DB::table('counties')->insert([
				'county_name' => 'Sulmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//36
			//weikersheim, mergentheim
            DB::table('counties')->insert([
				'county_name' => 'Taubergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//37
			//wurzburg, wertheim, waldsassen
            DB::table('counties')->insert([
				'county_name' => 'Waldsassengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '6',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//Frisia
			//38
			//oldenburg, rastede, westerstede
            DB::table('counties')->insert([
				'county_name' => 'Ammergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//39
			//aurich, marienhafe
            DB::table('counties')->insert([
				'county_name' => 'Auricherland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//40
			//goes, wissenkerk, hellenburg
            DB::table('counties')->insert([
				'county_name' => 'Beveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//41
			//jouwer, haskerhorn
            DB::table('counties')->insert([
				'county_name' => 'Bornegau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//42
			//coevorden, groningen, ruinen
            DB::table('counties')->insert([
				'county_name' => 'Drenthe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//43
			//meldorf, hemmingstedt, wohrden
            DB::table('counties')->insert([
				'county_name' => 'Dithmarschen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//44
			//emden, leer
            DB::table('counties')->insert([
				'county_name' => 'Emsigerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//45
			//appingedam, winschoten 
            DB::table('counties')->insert([
				'county_name' => 'Fivelgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//46
			//otterndorf, ritzebuttel 
            DB::table('counties')->insert([
				'county_name' => 'Hadeln',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//47
			//dordrecht, gouda
            DB::table('counties')->insert([
				'county_name' => 'Holtland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//48
			//winsum, bedum, selwerd
            DB::table('counties')->insert([
				'county_name' => 'Hunsingau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//49
			//haarlem, alkmaar, amsterdam, edam, purmerstein
            DB::table('counties')->insert([
				'county_name' => 'Kennemerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);
			//50
			//delft, vlaardingen, rotterdam
            DB::table('counties')->insert([
				'county_name' => 'Maasland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//51
			//utrecht, dorestadt, amerongen, zuilenburg, woudenberg, heemstede, nyenrode
            DB::table('counties')->insert([
				'county_name' => 'Nifterlake',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//52
			//norden, berum, jever
            DB::table('counties')->insert([
				'county_name' => 'Norderland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//53
			//ostringfeld, reepsholt, kniphausen
            DB::table('counties')->insert([
				'county_name' => 'Ostringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//54
			//dockum, nyenhove, klaarkamp
            DB::table('counties')->insert([
				'county_name' => 'Oostergau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//55
			//leithen, wassenaar, cronestein
            DB::table('counties')->insert([
				'county_name' => 'Rhineland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//56
			//nordenham, rodekirchen, langwarden
            DB::table('counties')->insert([
				'county_name' => 'Rustringen',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//57
			//zwolle, kampen, hasselt, waardenborg
            DB::table('counties')->insert([
				'county_name' => 'Salland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//58
			//starum, sloten
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);
			//59
			//tiel, buren, arkel, heusden, vianen, loevestein, almkerk
            DB::table('counties')->insert([
				'county_name' => 'Teisterbant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//60
			//oldenzaal, enschede, almelo
            DB::table('counties')->insert([
				'county_name' => 'Twente',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//61
			//elburg, harderwick, barnefeld, scherpenzeel
            DB::table('counties')->insert([
				'county_name' => 'Veluwe',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//62
			//vollenhove, kuinre, steenwick
            DB::table('counties')->insert([
				'county_name' => 'Vollenhove',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//63
			//flissinghe, serooskerke, middelburg
            DB::table('counties')->insert([
				'county_name' => 'Walcheren',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//64
			//froonacker, bolsward, drylts, hylpen, snits, harns
            DB::table('counties')->insert([
				'county_name' => 'Westergau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//65
			//hoorn, medemblik, enkhuizen
            DB::table('counties')->insert([
				'county_name' => 'Westflinge',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);	
			//66
			//sieversham, midlum, bederkesa, diepholt, weddewarden
            DB::table('counties')->insert([
				'county_name' => 'Wursten',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '7',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frisian'
            ]);				
			//Guelders
			//67
			//guelders, xanten, gennep, walbeck
            DB::table('counties')->insert([
				'county_name' => 'Hettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//68
			//nymegen, arnhem, doornenburg, batenburg, appeltern
            DB::table('counties')->insert([
				'county_name' => 'Betuwe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//69
			//cleves, kranenburg
            DB::table('counties')->insert([
				'county_name' => 'Cleveland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//70
			//zutphen, deventer, doetinchem, doesburg, camphuysen, bronkhorst
            DB::table('counties')->insert([
				'county_name' => 'Hamaland',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//71
			//tegelen, venlo, straelen
            DB::table('counties')->insert([
				'county_name' => 'Mulgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//72
			//duisburg, moers
            DB::table('counties')->insert([
				'county_name' => 'Ruhrgau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '8',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Julich
			//73
			//julich, duren, aachen, burtscheid, kornelimunster
            DB::table('counties')->insert([
				'county_name' => 'Julichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//74
			//kasselburg, gerolstein, kaufungen
            DB::table('counties')->insert([
				'county_name' => 'Eifelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//75
			//zulpich, hallenburg
            DB::table('counties')->insert([
				'county_name' => 'Zulpichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '9',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Limburg
			//76
			//limburg, liege
            DB::table('counties')->insert([
				'county_name' => 'Luttichgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//77
			//stavelot, malmedy, wiltz, bouillon
            DB::table('counties')->insert([
				'county_name' => 'Ardennengau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//78
			//dinant, huy
            DB::table('counties')->insert([
				'county_name' => 'Condrustgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//79
			//namur, florennes
            DB::table('counties')->insert([
				'county_name' => 'Lommegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);			
			//80
			//maastricht, valkenburg, thorn
            DB::table('counties')->insert([
				'county_name' => 'Maasgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '10',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Lorraine
			//81
			//metz, roncourt, semecourt
            DB::table('counties')->insert([
				'county_name' => 'Metzgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//82
			//bitche, zweibrucken, homburg
            DB::table('counties')->insert([
				'county_name' => 'Bleisgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//83
			//luneville, epinal, fontenoy, remiremont
            DB::table('counties')->insert([
				'county_name' => 'Chaumontois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//84
			//sarrebourg, saarbrucken
            DB::table('counties')->insert([
				'county_name' => 'Saargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//85
			//weich, dieuze, salins
            DB::table('counties')->insert([
				'county_name' => 'Salingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//86
			//neufchateau, sandaucourt
            DB::table('counties')->insert([
				'county_name' => 'Soulossois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//87
			//toul, ochey
            DB::table('counties')->insert([
				'county_name' => 'Toullois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '11',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Luxembourg
			//88
			//luxembourg, bettembourg
            DB::table('counties')->insert([
				'county_name' => 'Methingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//89
			//barrois, ligny
            DB::table('counties')->insert([
				'county_name' => 'Barrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//90
			//sedan, mouzon
            DB::table('counties')->insert([
				'county_name' => 'Moselgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//91
			//verdun, recicourt
            DB::table('counties')->insert([
				'county_name' => 'Verdungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//92
			//longwy, arlon, thionville, chiny
            DB::table('counties')->insert([
				'county_name' => 'Wavergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '12',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Saxony
			//93
			//luneburg, bardowick, emmendorf
            DB::table('counties')->insert([
				'county_name' => 'Bardengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//94
			//brunswick, hebesheim, haldensleben, supplinburg, riddagshausen
            DB::table('counties')->insert([
				'county_name' => 'Derlingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//95
			//hildesheim, poppenburg
            DB::table('counties')->insert([
				'county_name' => 'Eastfalagau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//96
			//celle, hanover
            DB::table('counties')->insert([
				'county_name' => 'Gretingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//97
			//gandersheim, westerhof
            DB::table('counties')->insert([
				'county_name' => 'Gudingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//98
			//duderstadt, pohlde
            DB::table('counties')->insert([
				'county_name' => 'Harzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//99
			//goslar, harzburg, osterode, herzberg, walkenried
            DB::table('counties')->insert([
				'county_name' => 'Wenzengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '13',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Styria
			//100
			//linz, wels, styraburg, kremsmunster
            DB::table('counties')->insert([
				'county_name' => 'Traungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//101
			//sankt george, sankt margarethen
            DB::table('counties')->insert([
				'county_name' => 'Attergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);			
			//102
			//innsbruck, kufstein, admont
            DB::table('counties')->insert([
				'county_name' => 'Ennstal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//103
			//mattighofen, fraunhofen
            DB::table('counties')->insert([
				'county_name' => 'Mattiggau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//104
			//brixen, bolzano, merano
            DB::table('counties')->insert([
				'county_name' => 'Norital',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//105
			//sankt moritz, schlandersberg
            DB::table('counties')->insert([
				'county_name' => 'Vinschgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '14',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//Swabia
			//106
			//ortenberg, offenburg, gengenbach, schuttern, baden
            DB::table('counties')->insert([
				'county_name' => 'Ortengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//107
			//kempten, sulzberg
            DB::table('counties')->insert([
				'county_name' => 'Albegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//108
			//augsburg, wettenhausen, wittelsbach, memmingen, buxheim
            DB::table('counties')->insert([
				'county_name' => 'Augstgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//109
			//freiburg, zahringen, basel, roggenburg, muttenz
            DB::table('counties')->insert([
				'county_name' => 'Breisgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//110
			//chur, disentis, feldkirchen, bludenz, sankt george
            DB::table('counties')->insert([
				'county_name' => 'Churgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//111
			//singen, verenahof
            DB::table('counties')->insert([
				'county_name' => 'Hegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);			
			//112
			//ravensburg, weingarten, salem, baindt
            DB::table('counties')->insert([
				'county_name' => 'Linzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//113
			//greifenstein, tubingen, reutlingen, rottenburg
            DB::table('counties')->insert([
				'county_name' => 'Neckargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//114
			//strassburg, hohenburg
            DB::table('counties')->insert([
				'county_name' => 'Nordgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//115
			//nordlingen, ellwangen
            DB::table('counties')->insert([
				'county_name' => 'Riesgau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//116
			//hohenzollern, falkenstein, ulm, hohenstaufen, biberach, buchau, gutenzell, marchtal
            DB::table('counties')->insert([
				'county_name' => 'Schwerzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//117
			//einsiedeln, lenzburg
            DB::table('counties')->insert([
				'county_name' => 'Schwyzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//118
			//mulhausen, kolmar, murbach
            DB::table('counties')->insert([
				'county_name' => 'Sundgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//119
			//konstanz, sankt gall, lindau, kirchberg, kreuzlingen, reichenau, engelberg
            DB::table('counties')->insert([
				'county_name' => 'Turgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//120
			//zurich, winterthur, kyburg
            DB::table('counties')->insert([
				'county_name' => 'Zurichgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '15',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);
			//Thuringia
			//121
			//erfurt, weimar
            DB::table('counties')->insert([
				'county_name' => 'Thuringgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//122
			//gruessen, runneburg
            DB::table('counties')->insert([
				'county_name' => 'Altgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//123
			//muhlhausen, anrode
            DB::table('counties')->insert([
				'county_name' => 'Eichsfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//124
			//nordhausen, ebersburg
            DB::table('counties')->insert([
				'county_name' => 'Helmegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//125
			//arnstadt, liebenstein
            DB::table('counties')->insert([
				'county_name' => 'Langwitzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//126
			//sondershausen, frankenhausen
            DB::table('counties')->insert([
				'county_name' => 'Nabelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//127
			//rudolstadt, greifenstein, saalfeld, leutenberg
            DB::table('counties')->insert([
				'county_name' => 'Orlagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//128
			//naumburg, altenburg, moritzburg, gera, ronneburg
            DB::table('counties')->insert([
				'county_name' => 'Ostergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//129
			//zwickau, plauen
            DB::table('counties')->insert([
				'county_name' => 'Zwickaugau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '16',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//Bremen
			//130
			//bremen, delmenhorst, hoya
            DB::table('counties')->insert([
				'county_name' => 'Largau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//131
			//meppen, lingen, papenburg
            DB::table('counties')->insert([
				'county_name' => 'Agradingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//132
			//arnsberg, soest, warstein
            DB::table('counties')->insert([
				'county_name' => 'Angerngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//133
			//corvey, hoxter, amelungsborn, holzminden
            DB::table('counties')->insert([
				'county_name' => 'Augau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//134
			//buckeburg, schaumburg, hamelin 
            DB::table('counties')->insert([
				'county_name' => 'Bukkigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//135
			//bentheim, dinkelrode, marienrode, wietmarschen, salzbergen, elbergen
            DB::table('counties')->insert([
				'county_name' => 'Bursibant',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//136
			//minden, petershagen, schlusselburg
            DB::table('counties')->insert([
				'county_name' => 'Dervegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//137
			//lippstadt, greven, lunen
            DB::table('counties')->insert([
				'county_name' => 'Dreingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//138
			//osnabruck, yburg, marienfeld
            DB::table('counties')->insert([
				'county_name' => 'Gronegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//139
			//tecklenburg, scapheim, cloppenburg
            DB::table('counties')->insert([
				'county_name' => 'Hasegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//140
			//stade, horneburg, harburg
            DB::table('counties')->insert([
				'county_name' => 'Heilangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//141
			//niemunster, rendsburg, reinfeld
            DB::table('counties')->insert([
				'county_name' => 'Holsteingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//142
			//gottingen, nienburg
            DB::table('counties')->insert([
				'county_name' => 'Leinegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//143
			//buxtehude, jesteburg
            DB::table('counties')->insert([
				'county_name' => 'Mosidegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//144
			//paderborn, salzkotten, wewer
            DB::table('counties')->insert([
				'county_name' => 'Padergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);	
			//145
			//ludinghausen, asbeck, coesfeld, darfeld, appelhulsen
            DB::table('counties')->insert([
				'county_name' => 'Stevergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//146
			//hamburg, ahrensburg
            DB::table('counties')->insert([
				'county_name' => 'Stormarngau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//147
			//verden, rotenburg
            DB::table('counties')->insert([
				'county_name' => 'Sturmigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);						
			//148
			//munster, warendorf, gelsenkirchen
            DB::table('counties')->insert([
				'county_name' => 'Sudergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//149
			//ravensberg, sparrenberg, limberg, herford
            DB::table('counties')->insert([
				'county_name' => 'Werregau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);				
			//150
			//hagen, attendorn, dortmund, hamm, essen, werden
            DB::table('counties')->insert([
				'county_name' => 'Westfaliagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '17',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);						
			//Cologne
			//151
			//cologne, friesheim, rondorf, palmersdorf, junkersdorf
            DB::table('counties')->insert([
				'county_name' => 'Gillgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//152
			//siegburg, rennenburg, blankenberg
            DB::table('counties')->insert([
				'county_name' => 'Auelgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//153
			//bonn, remagen
            DB::table('counties')->insert([
				'county_name' => 'Bonngau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//154
			//deutz, altenberg 
            DB::table('counties')->insert([
				'county_name' => 'Deutzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '18',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//Magdeburg
			//155
			//magdeburg, haldesleben, oschersleben, unseburg, calbe
            DB::table('counties')->insert([
				'county_name' => 'Nordthuringgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//156
			//stendal, osterburg
            DB::table('counties')->insert([
				'county_name' => 'Balsamgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);			
			//157
			//erdeborn, alberstedt
            DB::table('counties')->insert([
				'county_name' => 'Friesenfeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//158
			//halberstadt, quedlinburg, gernrode
            DB::table('counties')->insert([
				'county_name' => 'Hartingau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//159
			//merseburg, halle, wettin
            DB::table('counties')->insert([
				'county_name' => 'Hassegau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//160
			//seehausen, salzwedel
            DB::table('counties')->insert([
				'county_name' => 'Osterwalde',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//161
			//bernburg, ninenburg, ascherleben, hadmersleben, ballenstedt
            DB::table('counties')->insert([
				'county_name' => 'Schwabengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '19',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Saxon'
            ]);
			//Mainz
			//162
			//maiz, worms, oppenheim, lorsch
            DB::table('counties')->insert([
				'county_name' => 'Wormsfeld',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//163
			//hammerstein, logenstein
            DB::table('counties')->insert([
				'county_name' => 'Engersgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);			
			//164
			//kassel, staufenberg, hersfeld, fritzlar
            DB::table('counties')->insert([
				'county_name' => 'Hessengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//165
			//limburg, marburg, weilburg, wetzlar
            DB::table('counties')->insert([
				'county_name' => 'Lahngau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//166
			//mannheim, heidelberg
            DB::table('counties')->insert([
				'county_name' => 'Lobdengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//167
			//afschaffenburg, seligenstadt
            DB::table('counties')->insert([
				'county_name' => 'Maingau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);
			//168
			//ingelheim, spiesheim, saulheim, flonheim
            DB::table('counties')->insert([
				'county_name' => 'Nahegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//169
			//nidda, warnsberg
            DB::table('counties')->insert([
				'county_name' => 'Niddagau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//170
			//speyer, dudenhofen, wissembourg, klingenmunster
            DB::table('counties')->insert([
				'county_name' => 'Speyergau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//171
			//sankt leon, brettenheim
            DB::table('counties')->insert([
				'county_name' => 'Ufgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//172
			//frankfurt, homburg, kransberg, falkenstein
            DB::table('counties')->insert([
				'county_name' => 'Wettergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//173
			//pforzheim, liebeneck
            DB::table('counties')->insert([
				'county_name' => 'Wurmgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '20',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//Salzburg
			//174
			//salzburg, berchtesgaden
            DB::table('counties')->insert([
				'county_name' => 'Salzburggau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);
			//175
			//falkenstein, traunstein, baumburg, rosenheim, chiemsee
            DB::table('counties')->insert([
				'county_name' => 'Chiemgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//176
			//tamswick, sankt michael
            DB::table('counties')->insert([
				'county_name' => 'Lungau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);	
			//177
			//zell, saalfelden
            DB::table('counties')->insert([
				'county_name' => 'Pinzgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//178
			//tergernsee, ebertshausen, munich, staffelsee
            DB::table('counties')->insert([
				'county_name' => 'Sundergau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '21',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bavarian'
            ]);				
			//Trier
			//179
			//bitburg, trier, prum, gerolstein, echternach, vianden
            DB::table('counties')->insert([
				'county_name' => 'Bitgau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//180
			//eltz, andernach, salm
            DB::table('counties')->insert([
				'county_name' => 'Maifeld',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);	
			//181
			//ravengiersburg, ehrenburg
            DB::table('counties')->insert([
				'county_name' => 'Hunsruckgau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '22',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Franconian'
            ]);				
			//182
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
			//183
			//milano, monza, lecco, garegnano, morimondo, piona, como, torba, san giuliano
            DB::table('counties')->insert([
				'county_name' => 'Milano',
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
			//mantua, polirone, levata, pietola, cavriana, gonzaga
            DB::table('counties')->insert([
				'county_name' => 'Mantua',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//191
			//modena, mirandola, vignola, nonantola
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
			//reggio, bagnolo, fogliano, canossa
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
			//valloriate, san dalmazzo
            DB::table('counties')->insert([
				'county_name' => 'Auriate',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//202
			//canavese, ivrea
            DB::table('counties')->insert([
				'county_name' => 'Canavese',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//203
			//casale, san giorgo, san nazzaro
            DB::table('counties')->insert([
				'county_name' => 'Casale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//204
			//cuneo, saluzzo, castellaro, staffarda
            DB::table('counties')->insert([
				'county_name' => 'Cuneo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//205
			//alessandria, acqui
            DB::table('counties')->insert([
				'county_name' => 'Montferrat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '23',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//206
			//pragelato, pinerolo, exilles
            DB::table('counties')->insert([
				'county_name' => 'Pragelato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//207
			//susa, novalesa
            DB::table('counties')->insert([
				'county_name' => 'Susa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//208
			//turino, moncalieri, chieri, rivoli
            DB::table('counties')->insert([
				'county_name' => 'Turino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);				
			//209
			//vercelli, salasco, quinto
            DB::table('counties')->insert([
				'county_name' => 'Vercelli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//210
			//vigevano, lomello, robbio
            DB::table('counties')->insert([
				'county_name' => 'Vigevano',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '24',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Tuscany
			//211
			//siena, monteriggioni, san galgano, san gimignano, corsignano, monte oliveto, gaiole, castellina
            DB::table('counties')->insert([
				'county_name' => 'Siena',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//212
			//grosseto, orbetello, manciano
            DB::table('counties')->insert([
				'county_name' => 'Grosseto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//213
			//piombino, massa, castello di valle
            DB::table('counties')->insert([
				'county_name' => 'Piombino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//214
			//sovana, sorano, pitigliano, fregiano
            DB::table('counties')->insert([
				'county_name' => 'Sovana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '25',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//Verona
			//215
			//verona, bovolone, bonavigo, bussolengo, legnago, san bonifacio, san martino
            DB::table('counties')->insert([
				'county_name' => 'Verona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//216
			//padova, masera, vigonza, praglia, este, monselice, solesino
            DB::table('counties')->insert([
				'county_name' => 'Padova',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//217
			//rovigo, vangadizza, adria, loreo, lendinara
            DB::table('counties')->insert([
				'county_name' => 'Rovigo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//218
			//vicenza, montecchio, bassano, valdagno
            DB::table('counties')->insert([
				'county_name' => 'Vicenza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//219
			//trent, appenzell, rofreit
            DB::table('counties')->insert([
				'county_name' => 'Trent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '26',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);			
			//Aquileia
			//220
			//aquileia, udine, tarcento, monfalcone
            DB::table('counties')->insert([
				'county_name' => 'Friuli',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//221
			//gorizia, gradisca
            DB::table('counties')->insert([
				'county_name' => 'Gorizia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//222
			//pordenone, san vito, aviano, polcenigo
            DB::table('counties')->insert([
				'county_name' => 'Pordenone',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '27',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Florence
			//223
			//florence, bagno, san gimigano
            DB::table('counties')->insert([
				'county_name' => 'Florence',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//224
			//arezzo, montevarchi, focognano, san nicolo
            DB::table('counties')->insert([
				'county_name' => 'Arezzo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//225
			//cortona, castello
            DB::table('counties')->insert([
				'county_name' => 'Cortona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//226
			//perugia, assisi, foligno, gubbio
            DB::table('counties')->insert([
				'county_name' => 'Perugia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//227
			//prato, filettole, montemurlo
            DB::table('counties')->insert([
				'county_name' => 'Prato',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '28',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);		
			//Genoa
			//228
			//genoa, arenzano, mignanego, chiavari
            DB::table('counties')->insert([
				'county_name' => 'Genoa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//229
			//luni, pontremoli, bagnone, porto venere
            DB::table('counties')->insert([
				'county_name' => 'Lunigiana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//230
			//massa, carrara
            DB::table('counties')->insert([
				'county_name' => 'Massa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '29',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Noli
			//231
			//noli, savona, vado, albissola
            DB::table('counties')->insert([
				'county_name' => 'Noli',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//232
			//albenga, san fedele, lusignano
            DB::table('counties')->insert([
				'county_name' => 'Albenga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//233
			//finale, verezzi
            DB::table('counties')->insert([
				'county_name' => 'Finale',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '30',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Oneglia
			//234
			//oneglia, loano
            DB::table('counties')->insert([
				'county_name' => 'Oneglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//235
			//monaco, menton, roquebrune
            DB::table('counties')->insert([
				'county_name' => 'Monaco',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//236
			//ventimiglia, dolceaqua
            DB::table('counties')->insert([
				'county_name' => 'Ventimiglia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '31',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Lucca
			//237
			//lucca, barga
            DB::table('counties')->insert([
				'county_name' => 'Lucca',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//238
			//pistoja, pescia, agliana, uzzano
            DB::table('counties')->insert([
				'county_name' => 'Pistoja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '32',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Pisa
			//239
			//pisa, cascina, castelfranco, san giuliano, pontedera, vecchiano 
            DB::table('counties')->insert([
				'county_name' => 'Pisa',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//240
			//corte, alando, aleria, ajaccio, morosaglia
            DB::table('counties')->insert([
				'county_name' => 'Corsica',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//241
			//livorno, sassetta, san vincenzo 
            DB::table('counties')->insert([
				'county_name' => 'Livorno',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//242
			//riparbella, cecina, bibbona, castellina
            DB::table('counties')->insert([
				'county_name' => 'Riparbella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//243
			//volterra, chianni, monteverdi, saline
            DB::table('counties')->insert([
				'county_name' => 'Volterra',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '33',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//Venice
			//244
			//venice, chioggia, torcello, san donato, portogruaro, spinea, martellago, san ilario, mirano, salzano
            DB::table('counties')->insert([
				'county_name' => 'Dogado',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//245
			//belluno, feltre, sedico, alpago, san giustina
            DB::table('counties')->insert([
				'county_name' => 'Belluno',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '34',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//246
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
			//247
			//prague, kaurim, siebenlinden
            DB::table('counties')->insert([
				'county_name' => 'Prague',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//248
			//bechin, tabor
            DB::table('counties')->insert([
				'county_name' => 'Bechin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);			
			//249
			//bunzlau, reichenberg, waldstein
            DB::table('counties')->insert([
				'county_name' => 'Bunzlau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//250
			//elbogen, karlsbad
            DB::table('counties')->insert([
				'county_name' => 'Elbogen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//251
			//glatz, wunschelburg, kunzendorf
            DB::table('counties')->insert([
				'county_name' => 'Glatzerland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//252
			//koniggratz, nachod, braunau, welisch, podiebrad, sadowa, lichtenburg
            DB::table('counties')->insert([
				'county_name' => 'Koniggratz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//253
			//leitmeritz, aussig
            DB::table('counties')->insert([
				'county_name' => 'Leitmeritz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//254
			//pilsen, kladrau, tepl, klattau, taus, tachau
            DB::table('counties')->insert([
				'county_name' => 'Pilsen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//255
			//rakonitz, purglitz
            DB::table('counties')->insert([
				'county_name' => 'Rakonitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//256
			//schlan, brandeis
            DB::table('counties')->insert([
				'county_name' => 'Schlan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//257
			//saaz, komotau, laun, plass
            DB::table('counties')->insert([
				'county_name' => 'Saaz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//258
			//tschaslau, kuttenberg, sedlec
            DB::table('counties')->insert([
				'county_name' => 'Tschaslawsko',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '35',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Bohemian'
            ]);
			//Lusatia
			//259
			//meissen, seusslitz
            DB::table('counties')->insert([
				'county_name' => 'Meissengau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//260
			//hoyerswerda, bautzen
            DB::table('counties')->insert([
				'county_name' => 'Milzenigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);				
			//261
			//dohna, dresden, briesnitz, leipzig
            DB::table('counties')->insert([
				'county_name' => 'Nisangau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//262
			//spremberg, senftenberg, lebusa
            DB::table('counties')->insert([
				'county_name' => 'Lusizigau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//263
			//lubben, lieberose
            DB::table('counties')->insert([
				'county_name' => 'Selpuligau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '36',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//Moravia
			//264
			//brunn, pernstein, austerlitz, goding, lodenitz
            DB::table('counties')->insert([
				'county_name' => 'Brunn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);	
			//265
			//iglau, pilgrams
            DB::table('counties')->insert([
				'county_name' => 'Iglau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//266
			//olmutz, prossnitz, sternberg
            DB::table('counties')->insert([
				'county_name' => 'Olmutz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//267
			//prerau, weisskirchen, leipnik, kremsier
            DB::table('counties')->insert([
				'county_name' => 'Prerau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//268
			//velingrad, zlin
            DB::table('counties')->insert([
				'county_name' => 'Velingrad',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//269
			//znaim, kralitz
            DB::table('counties')->insert([
				'county_name' => 'Znaim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '37',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moravian'
            ]);
			//Lower Silesia
			//270
			//jauer, grussau, bolkenhain
            DB::table('counties')->insert([
				'county_name' => 'Jauer',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);			
			//271
			//glogau, hermsdorf
            DB::table('counties')->insert([
				'county_name' => 'Glogau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//272
			//leubus, wolau
            DB::table('counties')->insert([
				'county_name' => 'Leubus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//273
			//liegnitz, hoyn, parchwitz, arnsdorf
            DB::table('counties')->insert([
				'county_name' => 'Liegnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//274
			//oels, wartenberg, ferstenberg, bernstadt
            DB::table('counties')->insert([
				'county_name' => 'Oels',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//275
			//schweidnitz, striegau 
            DB::table('counties')->insert([
				'county_name' => 'Schweidnitz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '38',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//Upper Silesia
			//276
			//oppeln, krappitz
            DB::table('counties')->insert([
				'county_name' => 'Oppeln',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);				
			//277
			//breslau, waldenburg 
            DB::table('counties')->insert([
				'county_name' => 'Breslau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//278
			//brieg, grottkau, lowen
            DB::table('counties')->insert([
				'county_name' => 'Brieg',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);	
			//279
			//ratibor, pless, beuthen
            DB::table('counties')->insert([
				'county_name' => 'Ratibor',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//280
			//teschen, golleschau, ustron
            DB::table('counties')->insert([
				'county_name' => 'Teschen',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '39',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Silesian'
            ]);
			//281
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
			//282
			//vezelay, bazoches
            DB::table('counties')->insert([
				'county_name' => 'Avalois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//283
			//autun, saint loup, saint martin
            DB::table('counties')->insert([
				'county_name' => 'Autunais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//284
			//auxerre, saint maurice
            DB::table('counties')->insert([
				'county_name' => 'Auxerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//285
			//saint reine, chatellenot, chateauneuf, commarin
            DB::table('counties')->insert([
				'county_name' => 'Auxois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//286
			//beaujeu, quincie, saint nizier
            DB::table('counties')->insert([
				'county_name' => 'Beaujolais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//287
			//citeaux, savigny
            DB::table('counties')->insert([
				'county_name' => 'Beaunois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//288
			//chalon, saint germain
            DB::table('counties')->insert([
				'county_name' => 'Chalonais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//289
			//chatillon, molesme, saint marcel
            DB::table('counties')->insert([
				'county_name' => 'Lassois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//290
			//macon, cluny
            DB::table('counties')->insert([
				'county_name' => 'Maconnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//291
			//nevers, marais
            DB::table('counties')->insert([
				'county_name' => 'Nivernais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//292
			//tonerre, quincy
            DB::table('counties')->insert([
				'county_name' => 'Tonerrois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '40',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Cisjurania
			//293
			//grenoble, voiron, chartreuse
            DB::table('counties')->insert([
				'county_name' => 'Dauphine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//294
			//albon, mantaille
            DB::table('counties')->insert([
				'county_name' => 'Albon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//295
			//billieme, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Belinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//296
			//embrun, risoul
            DB::table('counties')->insert([
				'county_name' => 'Embrunnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//297
			//forcalquier, gap, apt, sisteron
            DB::table('counties')->insert([
				'county_name' => 'Forcalquier',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//298
			//lyon, irigny, seyssuel, givors, savigny
            DB::table('counties')->insert([
				'county_name' => 'Lyonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//299
			//briancon, clavieres
            DB::table('counties')->insert([
				'county_name' => 'Mauronais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);			
			//300
			//valence, montelier, saint marcel, montmeyran
            DB::table('counties')->insert([
				'county_name' => 'Valentinois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//301
			//vienne, chonas, ampuis
            DB::table('counties')->insert([
				'county_name' => 'Viennois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '41',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Transjurania
			//302
			//besancon, dole
            DB::table('counties')->insert([
				'county_name' => 'Amosenais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//303
			//habsburg, aarau, bern, lucerne, muri
            DB::table('counties')->insert([
				'county_name' => 'Aargau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swabian'
            ]);	
			//304
			//solothurn, saint denis
            DB::table('counties')->insert([
				'county_name' => 'Bargenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);				
			//305
			//lausanne, orbe, payerne, avenches
            DB::table('counties')->insert([
				'county_name' => 'Lausonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//306
			//vesoul, luxieul
            DB::table('counties')->insert([
				'county_name' => 'Portenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//307
			//neuchatel, yverdon
            DB::table('counties')->insert([
				'county_name' => 'Vaudenais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '42',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);		
			//Orange
			//308
			//orange, caderousse, puegoulen 
            DB::table('counties')->insert([
				'county_name' => 'Orange',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//309
			//venasque, avignon, carpentras, cavaillon, sorgue, saint remy
            DB::table('counties')->insert([
				'county_name' => 'Venaissin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//310
			//viviers, saint andeol, saint martin, saint just, nyons, montelimar, vaison
            DB::table('counties')->insert([
				'county_name' => 'Vivarais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '43',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Provence
			//311
			//aix, salon
            DB::table('counties')->insert([
				'county_name' => 'Provence',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//312
			//arles, montmajour, tarascon
            DB::table('counties')->insert([
				'county_name' => 'Arles',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//313
			//baux, mouries, riez, senez, digne
            DB::table('counties')->insert([
				'county_name' => 'Baux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//314
			//marseille, saint jean
            DB::table('counties')->insert([
				'county_name' => 'Marseille',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//315
			//nice, villefranche, escarene, guillaumes, saint etienne, vence, glandeves, grasse, frejus
            DB::table('counties')->insert([
				'county_name' => 'Nice',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//316
			//toulon, ollioules, ollieres
            DB::table('counties')->insert([
				'county_name' => 'Toulon',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '44',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//Savoy
			//317
			//chambery, aix le bains
            DB::table('counties')->insert([
				'county_name' => 'Savoia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//318
			//aosta, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Aosta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//319
			//thonon, bons
            DB::table('counties')->insert([
				'county_name' => 'Chablais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//320
			//geneva, annecy
            DB::table('counties')->insert([
				'county_name' => 'Genevanais',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);	
			//321
			//moutiers, montagny
            DB::table('counties')->insert([
				'county_name' => 'Tarantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '45',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Arpitan'
            ]);
			//322
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
			//323
			//rome, nettuno, tivoli, civitavecchia, velletri, montecelio, subiaco, scholastica
            DB::table('counties')->insert([
				'county_name' => 'Rome',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//324
			//frosinone, cassino, alatri, sora, ceccano, anagni, ferentino, veroli
            DB::table('counties')->insert([
				'county_name' => 'Frosinone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//325
			//latina, terracina, fondi, castellone, gaeta
            DB::table('counties')->insert([
				'county_name' => 'Latina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//326
			//rieti, farfa, corvaro
            DB::table('counties')->insert([
				'county_name' => 'Rieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//327
			//viterbo, castellana, toscanella, corneto, vetralla
            DB::table('counties')->insert([
				'county_name' => 'Viterbo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '46',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);		
			//Romagna
			//328
			//ferrara, cento, comacchio, argenta, copparo
            DB::table('counties')->insert([
				'county_name' => 'Ferrara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//329
			//bologna, forli, faenza, imola, molinella, san pietro, san giovanni, monterenzio
            DB::table('counties')->insert([
				'county_name' => 'Bologna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//330
			//carpegna, rimini, verucchio, coriano
            DB::table('counties')->insert([
				'county_name' => 'Carpegna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//331
			//ravenna, lugo, cervia, bagnacavallo, massa, conselice
            DB::table('counties')->insert([
				'county_name' => 'Ravenna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '47',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//Spoleto
			//332
			//ancona, senigallia
            DB::table('counties')->insert([
				'county_name' => 'Ancona',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//333
			//chieti, ortona, vasto, lanciano, san vito, san giovanni
            DB::table('counties')->insert([
				'county_name' => 'Chieti',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//334
			//fermo, camerino, macerata
            DB::table('counties')->insert([
				'county_name' => 'Fermo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);
			//335
			//pescara, montesilvano, san angelo
            DB::table('counties')->insert([
				'county_name' => 'Pescara',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//336
			//spoleto, aquila,
            DB::table('counties')->insert([
				'county_name' => 'Spoleto',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '48',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);			
			//Urbino
			//337
			//urbino, montebello, cavallino, fermignano
            DB::table('counties')->insert([
				'county_name' => 'Urbino',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '49',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lombard'
            ]);	
			//338
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
			//339
			//riga, lennewarden, kirchholm, dunamunde
            DB::table('counties')->insert([
				'county_name' => 'Livland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//340
			//ascheraden, kokenhusen
            DB::table('counties')->insert([
				'county_name' => 'Ascheraden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//341
			//dorpat, talkhof, wendau, 
            DB::table('counties')->insert([
				'county_name' => 'Dorpat',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//342
			//dunaburg, selburg 
            DB::table('counties')->insert([
				'county_name' => 'Dunaburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//343
			//fellin, karkus
            DB::table('counties')->insert([
				'county_name' => 'Fellin',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//344
			//goldingen, talsen, frauenburg, sackenhausen, windau
            DB::table('counties')->insert([
				'county_name' => 'Kurland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//345
			//mitau, annenburg, autzenburg
            DB::table('counties')->insert([
				'county_name' => 'Mitau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//346
			//lemburg, jurgensburg 
            DB::table('counties')->insert([
				'county_name' => 'Segewold',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//347
			//wenden, wolmar, lemsal
            DB::table('counties')->insert([
				'county_name' => 'Wenden',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//348
			//wolkenburg, rositten
            DB::table('counties')->insert([
				'county_name' => 'Wolkenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '50',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//Estonia
			//349
			//reval, sankt matthias, weissenstein, wesenberg, narva
            DB::table('counties')->insert([
				'county_name' => 'Reval',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//350
			//pernau, hapsal, arensburg, soneburg
            DB::table('counties')->insert([
				'county_name' => 'Pernau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '51',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Livonian'
            ]);
			//Prussia
			//351
			//marienburg, altfeld, klakendorf, klettendorf, marienwerder
            DB::table('counties')->insert([
				'county_name' => 'Pomesanengau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//352
			//bartenstein, heilsberg, schippenbeil
            DB::table('counties')->insert([
				'county_name' => 'Bartengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//353
			//braunsberg, allenstein, bischofsburg, wartenburg
            DB::table('counties')->insert([
				'county_name' => 'Ermland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//354
			//memelburg, windenburg, rutzau
            DB::table('counties')->insert([
				'county_name' => 'Memelland',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//355
			//landeshut, schalauerburg
            DB::table('counties')->insert([
				'county_name' => 'Nadrauengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//356
			//brandenburg, tapiow, wehlau
            DB::table('counties')->insert([
				'county_name' => 'Natangergau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//357
			//elbing, tolkemitz, muhlhausen
            DB::table('counties')->insert([
				'county_name' => 'Pogesanengau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//358
			//konigsberg, insterburg, angerburg, gerdauen
            DB::table('counties')->insert([
				'county_name' => 'Samland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '52',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Prussian'
            ]);
			//Pomerelia
			//359
			//danzig, prust, hohenstein, oliva
            DB::table('counties')->insert([
				'county_name' => 'Danzig',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//360
			//butow, rummelsburg, damerkow
            DB::table('counties')->insert([
				'county_name' => 'Butow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);			
			//361
			//dirschau, mewe, neuenburg, 
            DB::table('counties')->insert([
				'county_name' => 'Dirschau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//362
			//karthaus, zuckau, chmelno
            DB::table('counties')->insert([
				'county_name' => 'Karthaus',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//363
			//kulm, althaus, rehden, graudenz
            DB::table('counties')->insert([
				'county_name' => 'Kulmerland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//364
			//lauenburg, neuendorf, vietzig
            DB::table('counties')->insert([
				'county_name' => 'Lauenburg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//365
			//putzig, krockow, kossakowitz
            DB::table('counties')->insert([
				'county_name' => 'Putzig',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//366
			//baldenburg, schlochau
            DB::table('counties')->insert([
				'county_name' => 'Schlochau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//367
			//schwetz, bromberg
            DB::table('counties')->insert([
				'county_name' => 'Schwetz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//368
			//thorn, birgelau 
            DB::table('counties')->insert([
				'county_name' => 'Thorn',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//369
			//tuchel, seehaupten
            DB::table('counties')->insert([
				'county_name' => 'Tuchel',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '53',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//Pomerania
			//370
			//kammin, gulzow, schwirsen, dievenow
            DB::table('counties')->insert([
				'county_name' => 'Kammin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//371
			//arnswalde, bernstein
            DB::table('counties')->insert([
				'county_name' => 'Arnswalde',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//372
			//gollnow, massow, stepenitz 
            DB::table('counties')->insert([
				'county_name' => 'Gollnow',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//373
			//greifenhagen, barwalde 
            DB::table('counties')->insert([
				'county_name' => 'Greifenhagen',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//374
			//greifenberg, treptow 
            DB::table('counties')->insert([
				'county_name' => 'Greifenberg',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//375
			//pyritz, warnitz, prillwitz
            DB::table('counties')->insert([
				'county_name' => 'Pyritz',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//376
			//kessin, rostock, stralsund, greifswald, demmin, grimmen
            DB::table('counties')->insert([
				'county_name' => 'Kessinigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//377
			//kolberg, degow
            DB::table('counties')->insert([
				'county_name' => 'Kolberg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//378
			//koslin, zanow, bublitz, pollnow
            DB::table('counties')->insert([
				'county_name' => 'Koslin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//379
			//neustettin, baldenburg
            DB::table('counties')->insert([
				'county_name' => 'Neustettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//380
			//schivelbein, stolzenberg, 
            DB::table('counties')->insert([
				'county_name' => 'Schivelbein',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//381
			//slupsk, kublitz, glowitz
            DB::table('counties')->insert([
				'county_name' => 'Slupsk',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//382
			//schlawe, rugenwalde, malchow
            DB::table('counties')->insert([
				'county_name' => 'Schlawe',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//383
			//stettin, predzlow, pasewalk, kolbatz 
            DB::table('counties')->insert([
				'county_name' => 'Stettin',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//384
			//wolgast, neuenkirchen, buggenhagen, wollin
            DB::table('counties')->insert([
				'county_name' => 'Wostrosegau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '54',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//Brandenburg
			//385
			//brandenburg, potsdam
            DB::table('counties')->insert([
				'county_name' => 'Havelland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);	
			//386
			//wusterhausen, wittstock
            DB::table('counties')->insert([
				'county_name' => 'Dossegau',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);	
			//387
			//perleberg, pritzwalk, wittenberg
            DB::table('counties')->insert([
				'county_name' => 'Linaggau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);	
			//388
			//havelberg, plattenburg
            DB::table('counties')->insert([
				'county_name' => 'Nelitzigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);	
			//389
			//berlin, tempelhof, rosenfeld, helwichdorf, kaulsdorf, maltersdorf, biesdorf, morczahn
            DB::table('counties')->insert([
				'county_name' => 'Retschanengau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);			
			//390
			//rowenburg, schenkenberg, uckerfeld, templin
            DB::table('counties')->insert([
				'county_name' => 'Uckermark',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '55',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//Mecklenburg
			//391
			//teterow, malchin, demmin
            DB::table('counties')->insert([
				'county_name' => 'Circipanigau',
				'county_category' => 'Crusader_Order',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//392
			//mecklenburg, wismar
            DB::table('counties')->insert([
				'county_name' => 'Obotritegau',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//393
			//schwerin, ratzeburg
            DB::table('counties')->insert([
				'county_name' => 'Polabigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//394
			//lubeck, oldenburg, segeberg, preetz
            DB::table('counties')->insert([
				'county_name' => 'Wagrigau',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '56',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Wendish'
            ]);
			//France
			//France
			//Anjou
			//395
			//angers, saumur, fontevraud
            DB::table('counties')->insert([
				'county_name' => 'Anjou',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//396
			//mans, chalons
            DB::table('counties')->insert([
				'county_name' => 'Maine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//397
			//mortagne, nogent
            DB::table('counties')->insert([
				'county_name' => 'Perche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//398
			//tours, cormery, gaillard, amboise, villandry, chatigny, saint martin, chinon
            DB::table('counties')->insert([
				'county_name' => 'Touraine',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//399
			//vendome, freteval, lavardin, montoire
            DB::table('counties')->insert([
				'county_name' => 'Vendomois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '57',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//Aquitaine
			//400
			//bordeaux, albret, fronsac
            DB::table('counties')->insert([
				'county_name' => 'Bordelais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//401
			//agen, moirax, lavardac
            DB::table('counties')->insert([
				'county_name' => 'Agenais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//402
			//angouleme, saint michel, chateauneuf
            DB::table('counties')->insert([
				'county_name' => 'Angoumois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//403
			//bazas, langon, marmande
            DB::table('counties')->insert([
				'county_name' => 'Bazadais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//404
			//limoges, ventadour, saint angel
            DB::table('counties')->insert([
				'county_name' => 'Limousin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//405
			//lectoure, beaumont
            DB::table('counties')->insert([
				'county_name' => 'Lomagne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//406
			//perigeux, bergerac
            DB::table('counties')->insert([
				'county_name' => 'Perigord',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//407
			//saintes, royan, saint jean, taillebourg
            DB::table('counties')->insert([
				'county_name' => 'Saintogne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '58',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//Auvergne
			//408
			//randon, saint colombe, menat
            DB::table('counties')->insert([
				'county_name' => 'Auvergne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//409
			//aurillac, ytrac
            DB::table('counties')->insert([
				'county_name' => 'Aurillac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//410
			//brioude, saint ferreol, saint beauzire, chaise dieu, sauveterre
            DB::table('counties')->insert([
				'county_name' => 'Brioude',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//411
			//carlat, messilhac
            DB::table('counties')->insert([
				'county_name' => 'Carlat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//412
			//clermont, montpensier, thiers, voloie
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//413
			//feurs, montbrison, saint etienne, valbenoite
            DB::table('counties')->insert([
				'county_name' => 'Forez',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//414
			//murat, mercoeur, saint flour
            DB::table('counties')->insert([
				'county_name' => 'Murat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '59',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Berry
			//415
			//bourges, meillant, massay
            DB::table('counties')->insert([
				'county_name' => 'Berry',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//416
			//sancerre, saint satur, saint gemme, launay, crezancy, reugny, champtin, vauvredon
            DB::table('counties')->insert([
				'county_name' => 'Sancerre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '60',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Bourbonnais
			//417
			//bourbon, sauvigny, moulins
            DB::table('counties')->insert([
				'county_name' => 'Bourbonnais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//418
			//montlucon, ainay, nassigny, herisson, evaux
            DB::table('counties')->insert([
				'county_name' => 'Montlucon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '61',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);		
			//Casgony
			//419
			//eauze, manciet, nogaro
            DB::table('counties')->insert([
				'county_name' => 'Armagnac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//420
			//astarac, mirande, masseube, auch
            DB::table('counties')->insert([
				'county_name' => 'Astarac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//421
			//pau, oloron
            DB::table('counties')->insert([
				'county_name' => 'Bearn',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//422
			//bigorre, escaladieu, tarbes, maubourguet
            DB::table('counties')->insert([
				'county_name' => 'Bigorre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//423
			//saint bertrand, saint gaudens, muret, luchon
            DB::table('counties')->insert([
				'county_name' => 'Comminges',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//424
			//saint lizier, saint girons
            DB::table('counties')->insert([
				'county_name' => 'Couserans',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//425
			//dax, bayonne, tartas
            DB::table('counties')->insert([
				'county_name' => 'Dax',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//426
			//bouillas, fluerance, vic
            DB::table('counties')->insert([
				'county_name' => 'Fezensac',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//427
			//montmarsan, roquefort 
            DB::table('counties')->insert([
				'county_name' => 'Marsan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//428
			//aire, geaune
            DB::table('counties')->insert([
				'county_name' => 'Tursan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '62',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//Champagne
			//429
			//reims, bazancourt, roucy, thony, fismes, verzy, epernay
            DB::table('counties')->insert([
				'county_name' => 'Remois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//430
			//brienne, lesmont, precy, blaincourt, vaubercey, dienville
            DB::table('counties')->insert([
				'county_name' => 'Brenois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//431
			//chalons, nettancourt, trois fontaines, vitry
            DB::table('counties')->insert([
				'county_name' => 'Chalonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//432
			//duesme, oigny, bussy, chatillon
            DB::table('counties')->insert([
				'county_name' => 'Duesmois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//433
			//langres, dijon
            DB::table('counties')->insert([
				'county_name' => 'Langres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//434
			//meaux, thierry, coulommiers, crecy, crouy
            DB::table('counties')->insert([
				'county_name' => 'Meaux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//435
			//perthes, larzicourt, saint dizier
            DB::table('counties')->insert([
				'county_name' => 'Perthois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);				
			//436
			//provins, cigy, chenoise, cerneux
            DB::table('counties')->insert([
				'county_name' => 'Provins',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//437
			//rethel, attigny, porcien
            DB::table('counties')->insert([
				'county_name' => 'Rethelois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//438
			//sens, joigny
            DB::table('counties')->insert([
				'county_name' => 'Senois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//439
			//troyes, clairvaux
            DB::table('counties')->insert([
				'county_name' => 'Troyes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '63',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Francia
			//440
			//paris, saint denis, ecouen
            DB::table('counties')->insert([
				'county_name' => 'Pay de France',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//441
			//beauvais, goincourt
            DB::table('counties')->insert([
				'county_name' => 'Beauvaisis',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//442
			//beaumont, argenteuil
            DB::table('counties')->insert([
				'county_name' => 'Beaumont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//443
			//brie, melun, saint fargeau, lagny, yerres
            DB::table('counties')->insert([
				'county_name' => 'Brie',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//444
			//clermont, angicourt, liancourt
            DB::table('counties')->insert([
				'county_name' => 'Clermont',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//445
			//ferrieres, landon, fontainebleau, ganne
            DB::table('counties')->insert([
				'county_name' => 'Gatinais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//446
			//chatres, corbeil, clamart, dourdan, montlhery, palaiseau, montagu
            DB::table('counties')->insert([
				'county_name' => 'Hurepoix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//447
			//mantes, rambouillet, beynes, houdan
            DB::table('counties')->insert([
				'county_name' => 'Mantois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//448
			//senlis, compiegne
            DB::table('counties')->insert([
				'county_name' => 'Senlis',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//449
			//soissons, oulchy
            DB::table('counties')->insert([
				'county_name' => 'Soissonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//450
			//vez, oigny
            DB::table('counties')->insert([
				'county_name' => 'Valois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//451
			//saint clair, pontoise
            DB::table('counties')->insert([
				'county_name' => 'Vexin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '64',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Normandy
			//452
			//rouen, harcourt, jumieges, saint saens, meslay, aumonerie, saint philbert, brionne
            DB::table('counties')->insert([
				'county_name' => 'Roumois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//453
			//alencon, argentan, sees
            DB::table('counties')->insert([
				'county_name' => 'Alencon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//454
			//avranches, lucerne, subligny
            DB::table('counties')->insert([
				'county_name' => 'Avranches',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//455
			//bayeux, caen, audrieu, mondaye, beaumont, coupesarte, creully
            DB::table('counties')->insert([
				'county_name' => 'Bayeux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//456
			//fecamp, graville
            DB::table('counties')->insert([
				'county_name' => 'Caux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);
			//457
			//coutances, cherbourg, hauteville, valognes, saint lo, lessay, vire, chanteloup, gratot, pirou, bricquebec, saint sauveur
            DB::table('counties')->insert([
				'county_name' => 'Coutances',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//458
			//evreux, verneuil, gaillard, gisors, vernon, acquigny, brecourt
            DB::table('counties')->insert([
				'county_name' => 'Evreux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//459
			//eu, dieppe, aumale, arques
            DB::table('counties')->insert([
				'county_name' => 'Eu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);		
			//460
			//lisieux, falaise, honfleur, saint michel, courcy, crevecoeur
            DB::table('counties')->insert([
				'county_name' => 'Lisieux',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//461
			//mortain, domfront
            DB::table('counties')->insert([
				'county_name' => 'Mortainais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '65',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norman'
            ]);	
			//Orleanais
			//462
			//orleans, fleury, meung, combreux
            DB::table('counties')->insert([
				'county_name' => 'Orleanais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//463
			//blois, chambord, chaumont, bievre
            DB::table('counties')->insert([
				'county_name' => 'Blaisois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//464
			//chartres, leveville, bretigny, saint pere
            DB::table('counties')->insert([
				'county_name' => 'Chartres',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//465
			//chateaudun, courtalain
            DB::table('counties')->insert([
				'county_name' => 'Dunois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//466
			//dreux, marsalin, nonancourt
            DB::table('counties')->insert([
				'county_name' => 'Dreux',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//467
			//etampes, chalo, mereville
            DB::table('counties')->insert([
				'county_name' => 'Etampois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//468
			//nemours, montargis, moncourt
            DB::table('counties')->insert([
				'county_name' => 'Nemours',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '66',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Picardy
			//469
			//arras, saint omer
            DB::table('counties')->insert([
				'county_name' => 'Artois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);	
			//470
			//amiens, flixecourt, picquigny, corbie
            DB::table('counties')->insert([
				'county_name' => 'Amienois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//471
			//boulogne, etaples
            DB::table('counties')->insert([
				'county_name' => 'Boulenois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//472
			//bruges, ypres, lille, douai, veurne, poperinge, dunkirk, gravelines
            DB::table('counties')->insert([
				'county_name' => 'Flanders',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Flemish'
            ]);
			//473
			//guines, calais
            DB::table('counties')->insert([
				'county_name' => 'Guines',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//474
			//laon, coucy, corbeny
            DB::table('counties')->insert([
				'county_name' => 'Laonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//475
			//montreuil, recques, agincourt
            DB::table('counties')->insert([
				'county_name' => 'Montreuil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//476
			//noyon, sempigny, morlincourt, varesnes, salency
            DB::table('counties')->insert([
				'county_name' => 'Noyonnais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//477
			//crecy, nouvion, saint ricquier
            DB::table('counties')->insert([
				'county_name' => 'Ponthieu',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//478
			//therouanne, royon, saint pol
            DB::table('counties')->insert([
				'county_name' => 'Ternois',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//479
			//tournai, mouscron, courtrai
            DB::table('counties')->insert([
				'county_name' => 'Tournais',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//480
			//peronne, saint quentin, bohain, saint martin, retoul
            DB::table('counties')->insert([
				'county_name' => 'Vermandois',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '67',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);
			//Poitou
			//481
			//poitiers, parthenay, niort, saint junien, touffou, chauvigny, vouille, lusignan
            DB::table('counties')->insert([
				'county_name' => 'Poitou',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//482
			//chatelaillon, mauze, rochelle
            DB::table('counties')->insert([
				'county_name' => 'Aunis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//483
			//brioux, aubigne, melleran, melle
            DB::table('counties')->insert([
				'county_name' => 'Briancais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//484
			//chatellerault, clairvaux, usseau, saint michel, marigny
            DB::table('counties')->insert([
				'county_name' => 'Chatellerault',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//485
			//gueret, bellac, aubusson, grandmont
            DB::table('counties')->insert([
				'county_name' => 'Marche',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//486
			//thouars, fontenay, montaigu, talmont
            DB::table('counties')->insert([
				'county_name' => 'Thouarsais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//487
			//turenne, brive, tulle, noailhac, collonges, sarlat, beynac, castelnaud
            DB::table('counties')->insert([
				'county_name' => 'Turenne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '68',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Frankish'
            ]);	
			//Toulouse
			//488
			//toulouse, lavaur, maure, castelginest, colomiers, montgiscard, brax
            DB::table('counties')->insert([
				'county_name' => 'Toulouse',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//489
			//albi, castelnau, saint jeury
            DB::table('counties')->insert([
				'county_name' => 'Albi',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//490
			//carcasonne, castelnaudary, mirepoix, puylaurens
            DB::table('counties')->insert([
				'county_name' => 'Carcasonne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//491
			//foix, tarascon, montgrenier
            DB::table('counties')->insert([
				'county_name' => 'Foix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//492
			//javols, mende, langogne, apcher
            DB::table('counties')->insert([
				'county_name' => 'Gevaudan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//493
			//melgueil, montpellier, maguelonne
            DB::table('counties')->insert([
				'county_name' => 'Melgueil',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//494
			//millau, melac
            DB::table('counties')->insert([
				'county_name' => 'Millau',
				'county_category' => 'Crowned_Republic',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//495
			//narbonne, beziers, lodeve, agde
            DB::table('counties')->insert([
				'county_name' => 'Narbonne',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//496
			//nimes, uzes
            DB::table('counties')->insert([
				'county_name' => 'Nimes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//497
			//cahors, montauban, gourdon, figeac, aujols, arcambal, cabrerets, rudelle
            DB::table('counties')->insert([
				'county_name' => 'Quercy',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//498
			//rodez, villefranche, saint radegonde, belcastel, bertholene
            DB::table('counties')->insert([
				'county_name' => 'Rouergue',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '69',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);	
			//499
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
			//500
			//quimper, concarneau
            DB::table('counties')->insert([
				'county_name' => 'Cornouailles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//501
			//ach, saint mathieu, brest
            DB::table('counties')->insert([
				'county_name' => 'Ach',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//502
			//dol, tronchet, combourg, tremeheuc, saint martin, boussac, saint malo
            DB::table('counties')->insert([
				'county_name' => 'Dol',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//503
			//saint pol, morlaix, lannion, kerouzere
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//504
			//rohan, carhaix
            DB::table('counties')->insert([
				'county_name' => 'Poher',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//505
			//vannes, ponthivy
            DB::table('counties')->insert([
				'county_name' => 'Vannais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '70',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Domnonee
			//506
			//saint brieuc, guingamp, chatelaudren
            DB::table('counties')->insert([
				'county_name' => 'Penthievre',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//507
			//alet, chateauneuf, saint guinoux
            DB::table('counties')->insert([
				'county_name' => 'Alet',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//508
			//treguier, lezardrieux, plouguiel
            DB::table('counties')->insert([
				'county_name' => 'Tregor',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '71',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Retz
			//509
			//pornic, paimboeuf, machecoul
            DB::table('counties')->insert([
				'county_name' => 'Retz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);
			//510
			//nantes, guerande
            DB::table('counties')->insert([
				'county_name' => 'Nantais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//511
			//rennes, fougeres
            DB::table('counties')->insert([
				'county_name' => 'Rennais',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '72',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Breton'
            ]);	
			//Britain
			//Ireland
			//Connacht
			//512
			//galway, athenry, claregalway, feartagar, kiltartan, hackety, loughrea, tuam, clonfert, dunmore
            DB::table('counties')->insert([
				'county_name' => 'Galway',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//513
			//mayo, ballintubber, burriscarra, cong, errew, castlebar, kilcommon, kilkelly, claremorris, ashford, killala
            DB::table('counties')->insert([
				'county_name' => 'Mayo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//514
			//roscommon, boyle, donamon, elphin
            DB::table('counties')->insert([
				'county_name' => 'Roscommon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//515
			//sligo, ballymote, markree, templehouse, achonry
            DB::table('counties')->insert([
				'county_name' => 'Sligo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '73',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//Leinster
			//516
			//carlow, ballyloughan, ballymoon, leighlin, leighlinbridge, killerig
            DB::table('counties')->insert([
				'county_name' => 'Carlow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//517
			//kildare, athy, castledermot, moone, barberstown, kilkea, kilteel, maynooth, reeves, rheban, norragh
            DB::table('counties')->insert([
				'county_name' => 'Kildare',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//518
			//kilkenny, kells, graignamanagh, ennisnagh, fertagh, freshford, ullard
            DB::table('counties')->insert([
				'county_name' => 'Kilkenny',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//519
			//fortleix, cullahill, lea, killeshin, oughaval
            DB::table('counties')->insert([
				'county_name' => 'Leix',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//520
			//clonmel, athassel, nenagh, ardfinnan, loughmoe, cashel
            DB::table('counties')->insert([
				'county_name' => 'Tipperary',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//521
			//waterford, lismore, crooke, dungarvan, ardmore, mothel, rincrew
            DB::table('counties')->insert([
				'county_name' => 'Waterford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//522
			//wexford, carnsore, dunbrody, ferns, selskar, tintern
            DB::table('counties')->insert([
				'county_name' => 'Wexford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);
			//523
			//wicklow, kindlestown, baltinglass, glendalough
            DB::table('counties')->insert([
				'county_name' => 'Wicklow',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '74',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//Meath
			//524
			//dublin, clontarf, kinsaley, lusk, castleknock, baldoyle
            DB::table('counties')->insert([
				'county_name' => 'Dublin',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '75',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//525
			//longford, ardagh, granard, moydow, rathcline, abbeyshrule
            DB::table('counties')->insert([
				'county_name' => 'Longford',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//526
			//tara, trim, navan, athlone, skryne, dunshaughlin, kells, nugent, clonard, bective, fore, taghmon
            DB::table('counties')->insert([
				'county_name' => 'Meath',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//527
			//tullamore, blundell, leap, clonmacnoise, gallen, roscrea
            DB::table('counties')->insert([
				'county_name' => 'Offaly',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '75',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//Munster
			//528
			//ennis, bunratty, kilmihil, kilalloe, corcomroe
            DB::table('counties')->insert([
				'county_name' => 'Clare',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '76',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//529
			//cork, bantry, fermoy, castlelyons, mourneabbey, blarney, widenham, cloyne
            DB::table('counties')->insert([
				'county_name' => 'Cork',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '76',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//530
			//castlegregory, dingle, dunkerron, abbeydorney, ardfert, innisfallen, killarney
            DB::table('counties')->insert([
				'county_name' => 'Kerry',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '76',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//531
			//limerick, adare, monasteranenaugh, mungret, askeaton, croom
            DB::table('counties')->insert([
				'county_name' => 'Limerick',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '76',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);
			//Ulster
			//532
			//antrim, carra, carrickfergus, dunluce, dunseverick, dromore
            DB::table('counties')->insert([
				'county_name' => 'Antrim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//533
			//armagh, killevy, fairview
            DB::table('counties')->insert([
				'county_name' => 'Armagh',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//534
			//cavan, cloughoughter, drumlane, kilmore
            DB::table('counties')->insert([
				'county_name' => 'Cavan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//535
			//derry, coleraine, dungiven, magoscain, maghera
            DB::table('counties')->insert([
				'county_name' => 'Derry',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//536
			//donegal, carrickabragy, northburgh, rahan, raphoe
            DB::table('counties')->insert([
				'county_name' => 'Donegal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//537
			//downpatrick, kilkeel, dundrum, clough, killyleagh, sketrick, ardglass, grey
            DB::table('counties')->insert([
				'county_name' => 'Down',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//538
			//enniskillen, lisgoole, rossory
            DB::table('counties')->insert([
				'county_name' => 'Fermanagh',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//539
			//leitrim, carrick, mohill, fenagh
            DB::table('counties')->insert([
				'county_name' => 'Leitrim',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//540
			//louth, dundalk, drogheda, carlingford, monasterboice, mellifont
            DB::table('counties')->insert([
				'county_name' => 'Louth',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//541
			//monaghan, inniskeen, tehellan
            DB::table('counties')->insert([
				'county_name' => 'Monaghan',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Irish'
            ]);	
			//542
			//omagh, dungannon, ardboe, carrickmore, clogher, donaghedy
            DB::table('counties')->insert([
				'county_name' => 'Tyrone',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '77',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);				
			//England
			//East Anglia
			//543
			//norwich, thetford, aylsham, burnham, yarmouth, lynn, walsingham, acre, rising, saint benet
            DB::table('counties')->insert([
				'county_name' => 'Norfolk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '78',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//544
			//ipswich, lowestoft, saint edmunds, dunwich, sudbury, bungay, clare
            DB::table('counties')->insert([
				'county_name' => 'Suffolk',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '78',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//Essex
			//545
			//colchester, chelmsford, hadleigh, hedingham, walden, beeleigh, coggeshall, waltham
            DB::table('counties')->insert([
				'county_name' => 'Essex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//546
			//hertford, berkhamsted, therfield, pirton, saint albans, langley
            DB::table('counties')->insert([
				'county_name' => 'Hertfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);
			//547
			//london, ruislip, kensington, finsbury, paddington, hampstead, hackney, westminster, clerkenwell, twickenham
            DB::table('counties')->insert([
				'county_name' => 'Middlesex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '79',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//Hwicce
			//548
			//gloucester, deerhurst, flaxley, tewkesbury, wotton, cirencester
            DB::table('counties')->insert([
				'county_name' => 'Gloucestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//549
			//warwick, alcester, merevale, astley, kenilworth, stoneleigh, coventry
            DB::table('counties')->insert([
				'county_name' => 'Warwickshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//550
			//winchcombe, sudeley, hailes
            DB::table('counties')->insert([
				'county_name' => 'Winchcombeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//551
			//worcester, bordesley, evesham, malvern, pershore
            DB::table('counties')->insert([
				'county_name' => 'Worcestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '80',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//Kent
			//552
			//aylesford, ashford, rochester, maidstone, dartford, gravesend
            DB::table('counties')->insert([
				'county_name' => 'Aylesfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '81',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//553
			//canterbury, chatham, sandwich, dover, leeds
            DB::table('counties')->insert([
				'county_name' => 'Kent',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '81',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//554
			//hythe, folkestone
            DB::table('counties')->insert([
				'county_name' => 'Shepwayshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '81',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);
			//Lindsey
			//555
			//derby, peveril, haddon, codnor, dale, darley
            DB::table('counties')->insert([
				'county_name' => 'Derbyshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => ''
            ]);	
			//556
			//leicester, belvoir, croxton, owston, breedon
            DB::table('counties')->insert([
				'county_name' => 'Leicestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//557
			//lincoln, somerton, alvingham, bardney, boston, bourne, croyland, grimsby, kirkstead, stamford, thornton
            DB::table('counties')->insert([
				'county_name' => 'Lincolnshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//558
			//nottingham, newark, rufford, ashfield, mansfield, southwell
            DB::table('counties')->insert([
				'county_name' => 'Nothinghamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//559
			//oakham, uppingham, burley
            DB::table('counties')->insert([
				'county_name' => 'Rutland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '82',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);				
			//Mercia
			//560
			//chester, saighton, beeston, halton
            DB::table('counties')->insert([
				'county_name' => 'Cheshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//561
			//hereford, goodrich, dore, leominster
            DB::table('counties')->insert([
				'county_name' => 'Herefordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//562
			//shrewsbury, stokesay, whittington, ludlow, bromfield, lilleshall
            DB::table('counties')->insert([
				'county_name' => 'Shropshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);				
			//563
			//stafford, lichfield, tamworth, croxden, chartley
            DB::table('counties')->insert([
				'county_name' => 'Staffordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '83',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//Mid Anglia
			//564
			//bedford, elstow, flitwick, tilsworth
            DB::table('counties')->insert([
				'county_name' => 'Bedfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//565
			//buckingham, bradwell, cublington
            DB::table('counties')->insert([
				'county_name' => 'Buckinghamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//566
			//cambridge, ely, anglesey, chatteris, ramsey, soham, thorney, peterborough
            DB::table('counties')->insert([
				'county_name' => 'Cambridgeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//567
			//huntingdon, saint ives, saint neots, stilton, tetworth
            DB::table('counties')->insert([
				'county_name' => 'Huntingdonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//568
			//northampton, brixworth, barnwell, rockingham
            DB::table('counties')->insert([
				'county_name' => 'Northamptonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//569
			//oxford, wallingford, dorchester, eynsham, wroxton
            DB::table('counties')->insert([
				'county_name' => 'Oxfordshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '84',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);			
			//Northumbria
			//570
			//allerton, birkby
            DB::table('counties')->insert([
				'county_name' => 'Allertonshire',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//571
			//aldborough, ripley, whixley, wetherby, knaresborough
            DB::table('counties')->insert([
				'county_name' => 'Burghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//572
			//carlisle, appleby, saint bees, brougham, kendal, workington, furness
            DB::table('counties')->insert([
				'county_name' => 'Cumberland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//573
			//durham, darlington, barnard, bowes
            DB::table('counties')->insert([
				'county_name' => 'Durham',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//574
			//sheffield, ecclesfield, bradfield
            DB::table('counties')->insert([
				'county_name' => 'Hallamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//575
			//hexham, whitley
            DB::table('counties')->insert([
				'county_name' => 'Hexhamshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//576
			//howden, asselby
            DB::table('counties')->insert([
				'county_name' => 'Howdenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//577
			//alnwick, bamburgh, lindisfarne
            DB::table('counties')->insert([
				'county_name' => 'Northumberland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//578
			//lancaster, clitheroe, sawley, whalley
            DB::table('counties')->insert([
				'county_name' => 'Lancashire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//579
			//richmond, wensley, middleham
            DB::table('counties')->insert([
				'county_name' => 'Richmondshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//580
			//york, beverley, bridlington, bolton, coverham, fountains, ripon, selby, whitby, pontefract, helmsley, scarborough
            DB::table('counties')->insert([
				'county_name' => 'Yorkshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '85',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//Sussex
			//581
			//arundel, lyminster, littlehampton
            DB::table('counties')->insert([
				'county_name' => 'Arundelshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);
			//582
			//bramber, worthing, brighton
            DB::table('counties')->insert([
				'county_name' => 'Brambershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//583
			//chichester, bosham
            DB::table('counties')->insert([
				'county_name' => 'Chichestershire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//584
			//lewes, kingston
            DB::table('counties')->insert([
				'county_name' => 'Leweshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//585
			//pevensey, hailsham
            DB::table('counties')->insert([
				'county_name' => 'Pevenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//586
			//hastings, bexhill, battle
            DB::table('counties')->insert([
				'county_name' => 'Sussex',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '86',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);				
			//Wessex
			//587
			//reading, slough, windsor, abingdon
            DB::table('counties')->insert([
				'county_name' => 'Berkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//588
			//dorchester, abbotsbury, sherborne, wareham, wimborne, corfe
            DB::table('counties')->insert([
				'county_name' => 'Dorsetshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//589
			//winchester, southampton
            DB::table('counties')->insert([
				'county_name' => 'Hampshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//590
			//somerton, sutton, taunton, bath, bruton, wells
            DB::table('counties')->insert([
				'county_name' => 'Somersetshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);	
			//591
			//guildford, woking, farnham, wallington, brixton
            DB::table('counties')->insert([
				'county_name' => 'Surrey',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);		
			//592
			//wilton, trowbridge, sarum, amesbury, easton, malmesbury, salisbury
            DB::table('counties')->insert([
				'county_name' => 'Wiltshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '87',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'English'
            ]);
			//Wales
			//Cornwall
			//593
			//truro, restormel, bodmin, cardinham, launceston, saint german, tintagel, trematon
            DB::table('counties')->insert([
				'county_name' => 'Cornwall',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '88',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//594
			//exeter, gidleigh,, lydford, okehampton, axminster, barnstaple, buckfast, buckland, chudleigh, newenham, plymouth, tavistock, totnes
            DB::table('counties')->insert([
				'county_name' => 'Devonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '88',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//Dyfed
			//595
			//cardigan, aberystwyth, llanbadarn
            DB::table('counties')->insert([
				'county_name' => 'Cardiganshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);
			//596
			//carmarthen, carreg, dinefwr, kidwelly, laugharne, llandovery, llansteffan, talley, whitland
            DB::table('counties')->insert([
				'county_name' => 'Carmarthenshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//597
			//pembroke, carew, cilgerran, haverford, manorbier, tenby, saint dogmaels, templeton, saint davids
            DB::table('counties')->insert([
				'county_name' => 'Pembrokeshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '89',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);
			//Gwent
			//598
			//candleston, coity, kenfig, newcastle, cardiff, neath, llantrisant, llandaff, ewenny, penrhys
            DB::table('counties')->insert([
				'county_name' => 'Glamorganshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '90',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//599
			//monmouth, abergavenny, raglan, caerphilly, morgraig, ruperra, caldicot, chepstow, dingestow, grosmont, llanfair, llangibby, skenfrith, trellech, caerleon, newport, pencoed, penhow
            DB::table('counties')->insert([
				'county_name' => 'Monmouthshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '90',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//Gwyned
			//600
			//aberlleiniog, beaumaris, llanfaes, penmon
            DB::table('counties')->insert([
				'county_name' => 'Anglesey',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//601
			//caernarfon, conwy, deganwy, dolwyddelan, dolbadarn, harlech, maenan, bangor, cymer
            DB::table('counties')->insert([
				'county_name' => 'Caernarvonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//602
			//denbigh, rhuddlan, ruthin, saint asaph, wrexham
            DB::table('counties')->insert([
				'county_name' => 'Denbighshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//603
			//flint, caergwrle, ewloe, hawarden, mold, basingwerk, talacre
            DB::table('counties')->insert([
				'county_name' => 'Flintshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '91',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//Powys
			//604
			//brecon, morlais, blaenllynfi, bronllys, crickhowell, tretower
            DB::table('counties')->insert([
				'county_name' => 'Brecknockshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);	
			//605
			//montgomery, powis, dolforwyn, llanlugan
            DB::table('counties')->insert([
				'county_name' => 'Montgomeryshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);
			//606
			//aberedw, cefnllys, hay
            DB::table('counties')->insert([
				'county_name' => 'Radnorshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '92',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Welsh'
            ]);			
			//Scotland
			//Alba
			//607
			//aberdeen, balmoral, balquhain, cairnbulg, coull, dundarg, fyvie, inverallochy, inverugie, leslie, udny, deer, huntly
            DB::table('counties')->insert([
				'county_name' => 'Aberdeenshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//608
			//banff, mortlach, doune, keith
            DB::table('counties')->insert([
				'county_name' => 'Banffshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);
			//609
			//clackmannan, alloa
            DB::table('counties')->insert([
				'county_name' => 'Clackmannanshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);
			//610
			//saint andrews, aberdour, ballinbreich, lochore, wemyss, balmerino, culross, dunfermline, inchcolm, lindores
            DB::table('counties')->insert([
				'county_name' => 'Fife',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//611
			//forfar, brechin, arbroath, montrose, dundee, angus
            DB::table('counties')->insert([
				'county_name' => 'Forfarshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//612
			//kincardine, banchory, stonehaven
            DB::table('counties')->insert([
				'county_name' => 'Kincardineshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//613
			//kinross, cleish, scotlandwell
            DB::table('counties')->insert([
				'county_name' => 'Kinrossshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//614
			//perth, dunkeld, elcho, inverquiech, kinclaven, clunie, abernethy, muthill, scone, ruthven, inchaffray
            DB::table('counties')->insert([
				'county_name' => 'Perthshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '93',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//Bernicia
			//615
			//berwick, lauder, thirlestane, duns, coldstream
            DB::table('counties')->insert([
				'county_name' => 'Berwickshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//616
			//edinburgh, holyrood, roslyn, arniston, craigmillar, bathgate, strathbrock
            DB::table('counties')->insert([
				'county_name' => 'Edinburghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//617
			//haddington, dunbar, byres, dirleton, innerwick, markle, tantallon, waughton, yester
            DB::table('counties')->insert([
				'county_name' => 'Haddingtonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//618
			//linlithgow, livingston, abercorn, falkirk
            DB::table('counties')->insert([
				'county_name' => 'Linlithgowshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);		
			//619
			//stirling, dunblane, cambuskenneth, culcreuch, mugodock
            DB::table('counties')->insert([
				'county_name' => 'Stirlingshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '94',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//Dalriada
			//620
			//lismore, coeffin, achanduin, saddell, dunadd, ardchattan, ardtonish
            DB::table('counties')->insert([
				'county_name' => 'Argyll',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '95',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//621
			//brodick, lamlash
            DB::table('counties')->insert([
				'county_name' => 'Bute',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '95',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//622
			//rushen, douglas, peel, ramsey, bemaken, ballaugh, marown, onchan
            DB::table('counties')->insert([
				'county_name' => 'Mann',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '95',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//Fortriu
			//623
			//dingwall, fortrose, ross
            DB::table('counties')->insert([
				'county_name' => 'Cromartyshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);
			//624
			//elgin, dallas, forres, kinloss, urquhart, duffus
            DB::table('counties')->insert([
				'county_name' => 'Elginshire',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '96',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//625
			//inverness, kilmallie, inverlochy, mingarry, applecross, beauly
            DB::table('counties')->insert([
				'county_name' => 'Invernessshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//626
			//nairn, rait, cawdor, eren
            DB::table('counties')->insert([
				'county_name' => 'Nairnshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//627
			//dornoch, durness, dunrobin, skelbo, skibo, berriedale, aberscross
            DB::table('counties')->insert([
				'county_name' => 'Sutherland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '96',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);
			//Galloway
			//628
			//kirkcudbright, annan, buittle, caerloverock, dundrennan
            DB::table('counties')->insert([
				'county_name' => 'Kirkcudbrightshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '97',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//629
			//wigtown, whithorn, cruggleton, fearn, glenluce
            DB::table('counties')->insert([
				'county_name' => 'Wigtownshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '97',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//Gododdin
			//630
			//dumfries, auchen, closeburn, lochmaben, robgill, sanquhar, tibbers, dercongal
            DB::table('counties')->insert([
				'county_name' => 'Dumfriesshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//631
			//peebles, skirling, mossfennan, traquair
            DB::table('counties')->insert([
				'county_name' => 'Peeblesshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//632
			//roxburgh, jedburgh, kelso, dryburgh, melrose, hawick
            DB::table('counties')->insert([
				'county_name' => 'Roxburghshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//633
			//selkirk, yarrow, galashiels
            DB::table('counties')->insert([
				'county_name' => 'Selkirkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '98',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);		
			//Strathclyde
			//634
			//ayr, largs, busbie, cessnock, crossraguel, barnweill, craigie, gadgirth
            DB::table('counties')->insert([
				'county_name' => 'Ayrshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//635
			//dunbarton, inchmurrin
            DB::table('counties')->insert([
				'county_name' => 'Dunbartonshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//636
			//lanark, glasgow, carstairs, kilbride, rutherglen, crookston
            DB::table('counties')->insert([
				'county_name' => 'Lanarkshire',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '99',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
            ]);	
			//637
			//paisley, polnoon
            DB::table('counties')->insert([
				'county_name' => 'Renfrewshire',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '99',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Gaelic'
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
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//639
			//monzon, san pedro, fraga
            DB::table('counties')->insert([
				'county_name' => 'Cinca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '100',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//640
			//valderrobres, valjunquera, arens, lledo, fuentespalda
            DB::table('counties')->insert([
				'county_name' => 'Matarrana',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '100',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//Barcelona
			//641
			//manresa, cardona, rajadell
            DB::table('counties')->insert([
				'county_name' => 'Bages',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//642
			//barcelona, santa coloma, badalona, castellet
            DB::table('counties')->insert([
				'county_name' => 'Barcelona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//643
			//berga, baga, san salvador, gironella
            DB::table('counties')->insert([
				'county_name' => 'Bergueda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//644
			//san feliu, fels, montserrat, san boi, cornella, corbera
            DB::table('counties')->insert([
				'county_name' => 'Llobregat',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//645
			//mataro, cabrils, dosrius, santa florentina
            DB::table('counties')->insert([
				'county_name' => 'Maresme',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//646
			//vic, manlleu, tona, san julian, seva, cabrera
            DB::table('counties')->insert([
				'county_name' => 'Osona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//647
			//terrassa, bisbal, ripollet, sabadell, san marcial, granollers, franqueses, canoves, roca, ametlla, gallifa
            DB::table('counties')->insert([
				'county_name' => 'Valles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '101',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//Girona
			//648
			//puigcerda, llivia
            DB::table('counties')->insert([
				'county_name' => 'Cerdanya',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//649
			//castellano, corneilla
            DB::table('counties')->insert([
				'county_name' => 'Conflent',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//650
			//emporda, bisbal, san feliu, figueres, peralada, requesens, pubol, quermanco, montgri
            DB::table('counties')->insert([
				'county_name' => 'Emporda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//651
			//girona, salto
            DB::table('counties')->insert([
				'county_name' => 'Girones',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//652
			//rennes, limoux 
            DB::table('counties')->insert([
				'county_name' => 'Razes',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//653
			//ripoll, besalu, san joan, camprodon, olot
            DB::table('counties')->insert([
				'county_name' => 'Ripolles',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//654
			//perpignan, elna
            DB::table('counties')->insert([
				'county_name' => 'Rosello',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Occitan'
            ]);
			//655
			//santa coloma, lloret, blanes, cassa
            DB::table('counties')->insert([
				'county_name' => 'Selva',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '102',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//Huesca
			//656
			//huesca, loarre, montearagon
            DB::table('counties')->insert([
				'county_name' => 'Huesca',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//657
			//jacca, suesa, mianos, san juan
            DB::table('counties')->insert([
				'county_name' => 'Jacetania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//658
			//benabarre, graus
            DB::table('counties')->insert([
				'county_name' => 'Ribagorza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//659
			//boltana, ainsa
            DB::table('counties')->insert([
				'county_name' => 'Sobrarbe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '103',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//Lleida
			//660
			//lleida, besora
            DB::table('counties')->insert([
				'county_name' => 'Lleida',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '104',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//661
			//talarn, eroles
            DB::table('counties')->insert([
				'county_name' => 'Pallars',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '104',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//662
			//urgell, balaguer, mollerusa, tarrega
            DB::table('counties')->insert([
				'county_name' => 'Urgell',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '104',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//Tarragona
			//663
			//amposta, rapita, alcanar
            DB::table('counties')->insert([
				'county_name' => 'Montsia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//664
			//tarragona, poblet
            DB::table('counties')->insert([
				'county_name' => 'Tarragona',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//665
			//tortosa, alfara
            DB::table('counties')->insert([
				'county_name' => 'Tortosa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '105',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//Teruel
			//666
			//albarracin, peracense, bezas, manzanera
            DB::table('counties')->insert([
				'county_name' => 'Albarracin',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '106',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);	
			//667
			//teruel, alfambra
            DB::table('counties')->insert([
				'county_name' => 'Teruel',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '106',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//Zaragoza
			//668
			//ileuca, moncayo, jargue, isuela, olvega
            DB::table('counties')->insert([
				'county_name' => 'Aranda',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//669
			//calatayud, maluenda, piedra
            DB::table('counties')->insert([
				'county_name' => 'Calatayud',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);
			//670
			//zaragoza, tarazona
            DB::table('counties')->insert([
				'county_name' => 'Zaragoza',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '107',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Aragonese'
            ]);						
			//Navarre
			//Alava
			//671
			//ayala, arceniega, mariaca
            DB::table('counties')->insert([
				'county_name' => 'Ayala',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);	
			//672
			//gasteiz, armentia
            DB::table('counties')->insert([
				'county_name' => 'Gasteiz',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);	
			//673
			//labastida, laguardia, lanciego, san millan, cornago, clavijo, arnedo, leiva, najera, calahorra
            DB::table('counties')->insert([
				'county_name' => 'Rioja',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '108',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//Gipuzcoa
			//674
			//san sebastian, astigarraga, zarautz
            DB::table('counties')->insert([
				'county_name' => 'Donostialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//675
			//leitza, leintz
            DB::table('counties')->insert([
				'county_name' => 'Leitzaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//676
			//mungia, butron
            DB::table('counties')->insert([
				'county_name' => 'Mungialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//677
			//tolosa, amasa
            DB::table('counties')->insert([
				'county_name' => 'Tolosaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '109',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//Navarre
			//678
			//estella, viana
            DB::table('counties')->insert([
				'county_name' => 'Estella',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//679
			//pamplona, orcoyen
            DB::table('counties')->insert([
				'county_name' => 'Irunerria',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//680
			//sanguesa, xavier, san salvador
            DB::table('counties')->insert([
				'county_name' => 'Sanguesa',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);	
			//681
			//tafalla, olite
            DB::table('counties')->insert([
				'county_name' => 'Tafalla',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//682
			//tudela, cascante, tulebras
            DB::table('counties')->insert([
				'county_name' => 'Tudela',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);				
			//683
			//ultzama, arre, san miguel
            DB::table('counties')->insert([
				'county_name' => 'Ultzamaldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '110',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//Viscaya
			//684
			//bermeo, gernika
            DB::table('counties')->insert([
				'county_name' => 'Busturialdea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//685
			//bilbao, erandio, santa maria, estao
            DB::table('counties')->insert([
				'county_name' => 'Bilbaoldea',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);	
			//686
			//arrigorriaga, berango
            DB::table('counties')->insert([
				'county_name' => 'Uribe',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '111',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Navarrese'
            ]);
			//Castile
			//Castile
			//Avila
			//687
			//avila, barco, bonilla, mironcillo, villatoro
            DB::table('counties')->insert([
				'county_name' => 'Avila',
				'county_category' => '',
				'de_jure_duchy' => '112',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//688
			//arevalo, torralba
            DB::table('counties')->insert([
				'county_name' => 'Morana',
				'county_category' => '',
				'de_jure_duchy' => '112',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//689
			//san pedro, mombeltran
            DB::table('counties')->insert([
				'county_name' => 'San Pedro',
				'county_category' => '',
				'de_jure_duchy' => '112',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//Burgos
			//690
			//lerma, barriosuso, villahoz, cebrecos
            DB::table('counties')->insert([
				'county_name' => 'Arlanza',
				'county_category' => '',
				'de_jure_duchy' => '113',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//691
			//briviesca, rodilla, san salvador, miranda, moscadero
            DB::table('counties')->insert([
				'county_name' => 'Bureba',
				'county_category' => '',
				'de_jure_duchy' => '113',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//692
			//burgos, ubierna, saldana, tardajos, rabe, modubar
            DB::table('counties')->insert([
				'county_name' => 'Burgos',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '113',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);						
			//Palencia
			//693
			//palencia, medina, villarcayo, taranco, frias
            DB::table('counties')->insert([
				'county_name' => 'Campos',
				'county_category' => '',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//694
			//palenzuela, astudillo, castroverde
            DB::table('counties')->insert([
				'county_name' => 'Cerrato',
				'county_category' => '',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//695
			//matabuena, bustillo, santa maria, villabellaco
            DB::table('counties')->insert([
				'county_name' => 'Valdivia',
				'county_category' => '',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);		
			//Segovia
			//696
			//coca, villeguillo, navas, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Coca',
				'county_category' => '',
				'de_jure_duchy' => '115',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//697
			//riaza, cantespino, languilla
            DB::table('counties')->insert([
				'county_name' => 'Riaza',
				'county_category' => '',
				'de_jure_duchy' => '115',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//698
			//segovia, turegano, pedraza, cantimpalos
            DB::table('counties')->insert([
				'county_name' => 'Segovia',
				'county_category' => '',
				'de_jure_duchy' => '115',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//699
			//sepulveda, castilnovo
            DB::table('counties')->insert([
				'county_name' => 'Sepulveda',
				'county_category' => '',
				'de_jure_duchy' => '115',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//Soria
			//700
			//almazan, raya, nagima, soliedra
            DB::table('counties')->insert([
				'county_name' => 'Almazan',
				'county_category' => '',
				'de_jure_duchy' => '116',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//701
			//berlanga, rello
            DB::table('counties')->insert([
				'county_name' => 'Berlanga',
				'county_category' => '',
				'de_jure_duchy' => '116',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//702
			//gomara, almenar, cihuela, ciria, penalcazar
            DB::table('counties')->insert([
				'county_name' => 'Gomara',
				'county_category' => '',
				'de_jure_duchy' => '116',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//703
			//osma, ucero, caracena
            DB::table('counties')->insert([
				'county_name' => 'Osma',
				'county_category' => '',
				'de_jure_duchy' => '116',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//704
			//soria, calatanazor, garray, gormaz, san esteban
            DB::table('counties')->insert([
				'county_name' => 'Soria',
				'county_category' => '',
				'de_jure_duchy' => '116',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//Toledo
			//705
			//torrecilla, sevilleja, san martin
            DB::table('counties')->insert([
				'county_name' => 'Jara',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//706
			//madrid, manzanares
            DB::table('counties')->insert([
				'county_name' => 'Madrid',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//707
			//ocana, oreja
            DB::table('counties')->insert([
				'county_name' => 'Ocana',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//708
			//sesena, illescas, villaseca, cabanas, numancia, olmos
            DB::table('counties')->insert([
				'county_name' => 'Sagra',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//709
			//talavera, bayuela, malpica, oropesa, san martin
            DB::table('counties')->insert([
				'county_name' => 'Talavera',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//710
			//toledo, montalban, guadamur, consuegra, cuerva, malamoneda, mascaraque, orgaz, guadalerzas 
            DB::table('counties')->insert([
				'county_name' => 'Toledo',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//711
			//torrijos, fuensalida, barcience, escalona, maqueda, santa cruz
            DB::table('counties')->insert([
				'county_name' => 'Torrijos',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//712
			//aranjuez, chinchon, villarejo
            DB::table('counties')->insert([
				'county_name' => 'Vegas',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//Valladolid
			//713
			//renedo, terradillos, santa maria, torresandino, amusquillo, canillas, encinas
            DB::table('counties')->insert([
				'county_name' => 'Esgueva',
				'county_category' => '',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//714
			//medina, tordesillas, mota, pozal
            DB::table('counties')->insert([
				'county_name' => 'Medina',
				'county_category' => '',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//715
			//iscar, portillo, cabrejas, cuellar, olmedo
            DB::table('counties')->insert([
				'county_name' => 'Pinares',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//716
			//penafiel, corrales, curiel
            DB::table('counties')->insert([
				'county_name' => 'Penafiel',
				'county_category' => '',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//717
			//valladolid, simancas, fuensaldana, torrelobaton, villalba, simancas, tudela, santa maria, cabezon
            DB::table('counties')->insert([
				'county_name' => 'Pisuerga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//718
			//medina, uruena, villabragima
            DB::table('counties')->insert([
				'county_name' => 'Rioseco',
				'county_category' => '',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//Galicia
			//Coruna
			//719
			//coruna, arteijo, san salvador, culleredo, sada
            DB::table('counties')->insert([
				'county_name' => 'Coruna',
				'county_category' => '',
				'de_jure_duchy' => '119',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//720
			//pontedeume, san juan, cabanas
            DB::table('counties')->insert([
				'county_name' => 'Eume',
				'county_category' => '',
				'de_jure_duchy' => '119',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//721
			//ferrol, mogardos, moeche
            DB::table('counties')->insert([
				'county_name' => 'Ferrol',
				'county_category' => '',
				'de_jure_duchy' => '119',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//722
			//santiago, altamira, vedra
            DB::table('counties')->insert([
				'county_name' => 'Santiago',
				'county_category' => '',
				'de_jure_duchy' => '119',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//723
			//aranga, faro, traba, san xurxo, vimianzo
            DB::table('counties')->insert([
				'county_name' => 'Trastamara',
				'county_category' => '',
				'de_jure_duchy' => '119',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//Lugo
			//724
			//lugo, castroverde, doiras, friol
            DB::table('counties')->insert([
				'county_name' => 'Lugo',
				'county_category' => '',
				'de_jure_duchy' => '120',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//725
			//alfoz, foz, lorenzana, viveiro, ribadeo 
            DB::table('counties')->insert([
				'county_name' => 'Marina',
				'county_category' => '',
				'de_jure_duchy' => '120',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//726
			//meira, pol
            DB::table('counties')->insert([
				'county_name' => 'Meira',
				'county_category' => '',
				'de_jure_duchy' => '120',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);	
			//727
			//sarria, incio
            DB::table('counties')->insert([
				'county_name' => 'Sarria',
				'county_category' => '',
				'de_jure_duchy' => '120',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//728
			//palas, monterosso
            DB::table('counties')->insert([
				'county_name' => 'Ulloa',
				'county_category' => '',
				'de_jure_duchy' => '120',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//Ourense
			//729
			//carballino, pinor, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Carballino',
				'county_category' => '',
				'de_jure_duchy' => '121',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//730
			//celanova, gomesende
            DB::table('counties')->insert([
				'county_name' => 'Celanova',
				'county_category' => '',
				'de_jure_duchy' => '121',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//731
			//ourense, barbadanes, san esteban, ribadavia, maceda
            DB::table('counties')->insert([
				'county_name' => 'Ourense',
				'county_category' => '',
				'de_jure_duchy' => '121',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//732
			//barco, villamartin, carbelleda
            DB::table('counties')->insert([
				'county_name' => 'Valdeorras',
				'county_category' => '',
				'de_jure_duchy' => '121',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);	
			//733
			//viana, monterrey
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => '',
				'de_jure_duchy' => '121',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//Pontevedra
			//734
			//caldas, catoira, san lazaro
            DB::table('counties')->insert([
				'county_name' => 'Caldas',
				'county_category' => '',
				'de_jure_duchy' => '122',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);
			//735
			//pontevedra, caldelas
            DB::table('counties')->insert([
				'county_name' => 'Pontevedra',
				'county_category' => '',
				'de_jure_duchy' => '122',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);	
			//736
			//vigo, sobroso, tuy, tebra, tomino, sotomayor
            DB::table('counties')->insert([
				'county_name' => 'Vigo',
				'county_category' => '',
				'de_jure_duchy' => '122',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Galician'
            ]);			
			//Leon
			//Caceres
			//737
			//valencia, herrera, cabeza, san vincente, eljas, brozas, penafiel
            DB::table('counties')->insert([
				'county_name' => 'Alcantara',
				'county_category' => '',
				'de_jure_duchy' => '123',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//738
			//caceres, torreorgaz, mogollones, monroy, portezuelo, montanchez
            DB::table('counties')->insert([
				'county_name' => 'Caceres',
				'county_category' => '',
				'de_jure_duchy' => '123',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//739
			//plasencia, coria, galisteo, jarandilla, monfrague, valverde, segura
            DB::table('counties')->insert([
				'county_name' => 'Plasencia',
				'county_category' => '',
				'de_jure_duchy' => '123',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//740
			//trujillo, almaraz, belvis
            DB::table('counties')->insert([
				'county_name' => 'Trujillo',
				'county_category' => '',
				'de_jure_duchy' => '123',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//Leon
			//741
			//astorga, san justo, santa colomba
            DB::table('counties')->insert([
				'county_name' => 'Astorga',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//742
			//baneza, castrillo, castrocalbon, destriana, san esteban, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Baneza',
				'county_category' => '',
				'de_jure_duchy' => '124',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);	
			//743
			//ponferrada, cornatel, sarracin, san pedro, balboa, san andres, bembibre, villafranca
            DB::table('counties')->insert([
				'county_name' => 'Bierzo',
				'county_category' => '',
				'de_jure_duchy' => '124',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//744
			//leon, san andres, ribaseca, san claudio, sariegos
            DB::table('counties')->insert([
				'county_name' => 'Leon',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '124',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//745
			//sahagun, almanza, cea
            DB::table('counties')->insert([
				'county_name' => 'Sahagun',
				'county_category' => '',
				'de_jure_duchy' => '124',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);	
			//Salamanca
			//746
			//alba, aldeaseca, anaya, coca, pedraza, pedrosillo
            DB::table('counties')->insert([
				'county_name' => 'Alba',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//747
			//cantalapiedra, cantalpino, poveda, tarazona
            DB::table('counties')->insert([
				'county_name' => 'Cantalapiedra',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//748
			//guijuelo, congosto, salvatierra
            DB::table('counties')->insert([
				'county_name' => 'Guijuelo',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//749
			//ledesma, zafron, tremedal, monleras, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Ledesma',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);	
			//750
			//penaranda, alaraz, alconada, cantaracillo
            DB::table('counties')->insert([
				'county_name' => 'Penaranda',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//751
			//rodrigo, ituero, espeja, fuentes, alameda, abusejo, aldahuela, yeltes, retortillo, tenebron, agallas, herguijuela, martiago
            DB::table('counties')->insert([
				'county_name' => 'Rodrigo',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//752
			//salamanca, tamames, aldeatejada, arapiles, barbadillo, buenamadre, calvarassa, calzada, san munoz, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Salamanca',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//753
			//vitigudino, san felices, ahigal, bogajo, cerralbo, fuenteliante, lumbrales, olmedo, masueco, mieza, perena, vilvestre, almendra
            DB::table('counties')->insert([
				'county_name' => 'Vitigudino',
				'county_category' => '',
				'de_jure_duchy' => '125',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//Zamora
			//754
			//zamora, alcanices, alcorcillo, arcillera, villalonso
            DB::table('counties')->insert([
				'county_name' => 'Aliste',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//755
			//carbajales, cernadilla, espanedo, manzanal, peque
            DB::table('counties')->insert([
				'county_name' => 'Carballeda',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//756
			//guarrate, argujillo, canizal
            DB::table('counties')->insert([
				'county_name' => 'Guarena',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//757
			//sanabria, alcanices, otero, cerezal, calabor, santa cruz, trefacio
            DB::table('counties')->insert([
				'county_name' => 'Sanabria',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//758
			//bermillo, fermoselle, alfaraz, asmesnal
            DB::table('counties')->insert([
				'county_name' => 'Sayago',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//759
			//tabara, faramontanos, moreruela, pozuelo
            DB::table('counties')->insert([
				'county_name' => 'Tabara',
				'county_category' => '',
				'de_jure_duchy' => '126',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Leonese'
            ]);
			//Asturias
			//Asturias
			//760
			//aviles, candamo, castrillon, gozon
            DB::table('counties')->insert([
				'county_name' => 'Aviles',
				'county_category' => '',
				'de_jure_duchy' => '127',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Asturian'
            ]);
			//761
			//gijon, carreno, villaviciosa, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Gijon',
				'county_category' => '',
				'de_jure_duchy' => '127',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Asturian'
            ]);
			//762
			//navia, castropol, coana, san martin, san tirzo, santa eulalia, villanueva
            DB::table('counties')->insert([
				'county_name' => 'Navia',
				'county_category' => '',
				'de_jure_duchy' => '127',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Asturian'
            ]);	
			//763
			//oviedo, bimenes, cabranes, grado, llanera, morcin, proaza, riosa, siero, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Oviedo',
				'county_category' => '',
				'de_jure_duchy' => '127',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Asturian'
            ]);	
			//Cantabria
			//764
			//reinosa, santa maria, san pedro, argueso, aguilar
            DB::table('counties')->insert([
				'county_name' => 'Campoo',
				'county_category' => '',
				'de_jure_duchy' => '128',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Cantabrian'
            ]);
			//765
			//liebana, potes, piasca, san toribio
            DB::table('counties')->insert([
				'county_name' => 'Liebana',
				'county_category' => '',
				'de_jure_duchy' => '128',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Cantabrian'
            ]);
			//766
			//santander, collado, astillero
            DB::table('counties')->insert([
				'county_name' => 'Santander',
				'county_category' => '',
				'de_jure_duchy' => '128',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Cantabrian'
            ]);
			//767
			//miera, santona, san vincente, santa maria
            DB::table('counties')->insert([
				'county_name' => 'Trasmiera',
				'county_category' => '',
				'de_jure_duchy' => '128',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Cantabrian'
            ]);				
			//Portugal
			//Aveiro
			//768
			//aveiro, agueda, santa maria, espinho, arouca
            DB::table('counties')->insert([
				'county_name' => 'Aveiro',
				'county_category' => '',
				'de_jure_duchy' => '129',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//769
			//braga, faria, barcelos
            DB::table('counties')->insert([
				'county_name' => 'Braga',
				'county_category' => '',
				'de_jure_duchy' => '129',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//770
			//porto, cedofeita, amarante, moreira, trofa, santiago, valongo, penafiel
            DB::table('counties')->insert([
				'county_name' => 'Porto',
				'county_category' => '',
				'de_jure_duchy' => '129',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//771
			//viana, arcos, caminha, melgaco
            DB::table('counties')->insert([
				'county_name' => 'Viana',
				'county_category' => '',
				'de_jure_duchy' => '129',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//Beira
			//772
			//branco, belmonte, fundao, serta
            DB::table('counties')->insert([
				'county_name' => 'Branco',
				'county_category' => '',
				'de_jure_duchy' => '130',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//773
			//coimbra, montemor, redondos, soure
            DB::table('counties')->insert([
				'county_name' => 'Coimbra',
				'county_category' => '',
				'de_jure_duchy' => '130',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//774
			//guarda, sabugal
            DB::table('counties')->insert([
				'county_name' => 'Guarda',
				'county_category' => '',
				'de_jure_duchy' => '130',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);	
			//775
			//viseu, cinfaes, lamego, mangualde
            DB::table('counties')->insert([
				'county_name' => 'Viseu',
				'county_category' => '',
				'de_jure_duchy' => '130',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);				
			//Braganca
			//776
			//braganca, miranda, mirandela, mogadouro, vimioso
            DB::table('counties')->insert([
				'county_name' => 'Braganca',
				'county_category' => '',
				'de_jure_duchy' => '131',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//777
			//vila real, vila pouca, alijo, boticas, montalegre, celeiros, murca
            DB::table('counties')->insert([
				'county_name' => 'Vila Real',
				'county_category' => '',
				'de_jure_duchy' => '131',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);	
			//Estremadura
			//778
			//leiria, pombal, alcobaca, batalha, nazare
            DB::table('counties')->insert([
				'county_name' => 'Leiria',
				'county_category' => '',
				'de_jure_duchy' => '132',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//779
			//lisboa, alenquer, cascais, loures, lourinha, mafra, sintra
            DB::table('counties')->insert([
				'county_name' => 'Lisboa',
				'county_category' => '',
				'de_jure_duchy' => '132',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);
			//780
			//santarem, tomar, almourol
            DB::table('counties')->insert([
				'county_name' => 'Ribatejo',
				'county_category' => '',
				'de_jure_duchy' => '132',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
            ]);	
			//781
			//setubal, moita, alcochete, almada
            DB::table('counties')->insert([
				'county_name' => 'Setubal',
				'county_category' => '',
				'de_jure_duchy' => '132',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Portuguese'
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
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//783
			//borglum, saeby, vrejlev, hundslund, dueholm, vestervig, hojen
            DB::table('counties')->insert([
				'county_name' => 'Borglum',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//784
			//ribe, seem, kolding, vejle
            DB::table('counties')->insert([
				'county_name' => 'Ribe',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//785
			//slesvig, guldholm, flensburg, rude, tonder, logum, haderslev, alsborg, sonderborg
            DB::table('counties')->insert([
				'county_name' => 'Slesvig',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);	
			//786
			//viborg, aalborg, sebber, vitskol, glenstrup, spottrup
            DB::table('counties')->insert([
				'county_name' => 'Viborg',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '133',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);			
			//Scania
			//787
			//solvesborg, ronneby
            DB::table('counties')->insert([
				'county_name' => 'Blekinge',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);	
			//788
			//gamleborg, ronne, hammershus, aarsdale, nekso, gudhjem, hasle, aakirkeby, sandvig, svaneke
            DB::table('counties')->insert([
				'county_name' => 'Bornholm',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//789
			//falkenberg, varberg, halmstad, laholm, as
            DB::table('counties')->insert([
				'county_name' => 'Halland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);	
			//790
			//hiddensee, maschenholt, bergen
            DB::table('counties')->insert([
				'county_name' => 'Rugen',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//791
			//trelleborg, backaskog, barseback, borringe, bosjo, dyback, hovdala, karnan, lindholm, smedstorp, lund, herrevad, malmohus, borgeby
            DB::table('counties')->insert([
				'county_name' => 'Scania',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '134',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);				
			//Sjaeland
			//792
			//odense, assens, dalum, holme, faborg, svendborg, nyborg
            DB::table('counties')->insert([
				'county_name' => 'Funen',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '135',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//793
			//nakskov, halsted, nysted, nykobing, aalholm
            DB::table('counties')->insert([
				'county_name' => 'Lolland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//794
			//roskilde, koge, selso, vallo 				
            DB::table('counties')->insert([
				'county_name' => 'Roskilde',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);
			//795
			//kobenhavn, esrum, asserbo, soborg
            DB::table('counties')->insert([
				'county_name' => 'Sjaeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);	
			//796
			//soro, antvorskov, kalundborg, ringsted, naestved, vordingborg
            DB::table('counties')->insert([
				'county_name' => 'Soro',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '135',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Danish'
            ]);			
			//Norway
			//Nordjor (Northern Isles)
			//797
			//wick, halkirk, thurso, sinclair
            DB::table('counties')->insert([
				'county_name' => 'Caithness',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '136',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Pictish'
            ]);	
			//798
			//kirkwall, holm, sandwick, eynhallow, birsay
            DB::table('counties')->insert([
				'county_name' => 'Orkney',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '136',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//799
			//tingwall, sandsting, dunrossness, cunningsburgh
            DB::table('counties')->insert([
				'county_name' => 'Shetland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '136',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);				
			//Sodor (Southern Isles)
			//800
			//dunyvaig, kilchoman, kildalton
            DB::table('counties')->insert([
				'county_name' => 'Islay',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Scottish'
            ]);
			//801
			//stornoway, duneistean, aignish
            DB::table('counties')->insert([
				'county_name' => 'Lewis',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//802
			//iona, moy, aros, duart
            DB::table('counties')->insert([
				'county_name' => 'Mull',
				'county_category' => 'Monastic_Order',
				'de_jure_duchy' => '137',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Scottish'
            ]);
			//803
			//dunvegan, dunscaith, duntulm, portree, broadford
            DB::table('counties')->insert([
				'county_name' => 'Skye',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Scottish'
            ]);	
			//804
			//calvay, borve
            DB::table('counties')->insert([
				'county_name' => 'Uist',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '137',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);							
			//Hedmark (eidsivating)
			//805
			//granavollen, tingelstad, lunner, ulnes, hedal, lomen, slidre
            DB::table('counties')->insert([
				'county_name' => 'Hadeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '138',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//806
			//hamar, loten, stange, tingnes, moelv
            DB::table('counties')->insert([
				'county_name' => 'Hedmark',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '138',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//807
			//lillestrom, sorum, lorenskog, raelingen, nes, eidsvoll, ullensaker 
            DB::table('counties')->insert([
				'county_name' => 'Romerike',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '138',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);
			//Oppland (frostating)
			//808
			//are, bodin, gildeskal, mattmar 
            DB::table('counties')->insert([
				'county_name' => 'Jamtland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);
			//809
			//ranem, sakshaug, gangstad, snasa, maere, alstadhaug, stiklestad, orland
            DB::table('counties')->insert([
				'county_name' => 'Namdal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//810
			//lillehammer, lom, asnes, follebu, gausdal, ringebu, lena  
            DB::table('counties')->insert([
				'county_name' => 'Oppland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '139',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//811
			//trondheim, lade, orland, stoksund, haltdal, dolmoya, skaun, mebonden, vaernes 
            DB::table('counties')->insert([
				'county_name' => 'Trondelag',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '139',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);						
			//Rogaland (gulating)
			//812
			//egersund, bjerkreim, heskestad 
            DB::table('counties')->insert([
				'county_name' => 'Dalane',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//813
			//haugesund, avaldsnes, torvestad, akra 
            DB::table('counties')->insert([
				'county_name' => 'Haugeland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//814
			//stavanger, tinghaug, tjora, njaerheim, ogna, varhaug 
            DB::table('counties')->insert([
				'county_name' => 'Jaeren',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '140',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//815
			//sauda, jelsa, hjelmeland, fister, ardal, strand, kvitsoy, suldal 
            DB::table('counties')->insert([
				'county_name' => 'Rogaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '140',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//Sorland (borgarting)
			//816
			//vanse, oddernes, mandal, spangereid, vigeland, vigmostad, birkenes, moland, hovag 
            DB::table('counties')->insert([
				'county_name' => 'Agder',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//817
			//skien, siljan, gjerpen, eidanger 
            DB::table('counties')->insert([
				'county_name' => 'Grenland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//818
			//eidsborg, bo, kviteseid, sauherad, nesodden, romnes, heddal, flatdal 
            DB::table('counties')->insert([
				'county_name' => 'Telemark',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '141',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);				
			//Vestland (gulating)
			//819
			//vassas, bronnoy, odda 
            DB::table('counties')->insert([
				'county_name' => 'Hordaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);
			//820
			//veoya, aheim, borgund, orskog, rodven, vestnes, kvernes, edoya, tingvoll 
            DB::table('counties')->insert([
				'county_name' => 'Romsdal',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);				
			//821
			//bergen, arstad, lyse, gimmestad
            DB::table('counties')->insert([
				'county_name' => 'Vestland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '142',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);
			//Viken (borgarting)
			//822
			//asker, baerum, haslum 
            DB::table('counties')->insert([
				'county_name' => 'Akershus',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//823
			//hallingdal, roldal, flesberg, rollag, nore, uvdal, ringerike, hole 
            DB::table('counties')->insert([
				'county_name' => 'Buskerud',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//824
			//sarpsborg, askim, trogstad 
            DB::table('counties')->insert([
				'county_name' => 'Ostfold',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);	
			//825
			//kungahalla, marstrand, uddeval, kville, tanum, vettaland, herrestad, bohus 
            DB::table('counties')->insert([
				'county_name' => 'Ranrike',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//826
			//larvik, borre, tonsberg, skaun 
            DB::table('counties')->insert([
				'county_name' => 'Vestfold',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);		
			//827
			//oslo, vestby, hurum, frogn, nesodden, as, ski, enebakk  
            DB::table('counties')->insert([
				'county_name' => 'Vingulmark',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '143',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Norwegian'
            ]);			
			//Sweden
			//Gotland
			//828
			//visby, hemse, vasterhejde, stenkumla, havdhem, kraklingbo, hastnas, roma
            DB::table('counties')->insert([
				'county_name' => 'Gotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//829
			//linkoping, norrkoping, soderkoping, vadstena, skanninge, bjalbo, tidersrum, ekenas, vreta
            DB::table('counties')->insert([
				'county_name' => 'Ostergotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//830
			//husaby, lacko, falkoping, skara, skovde, bogesund, ale, dalaborg, alvborg
            DB::table('counties')->insert([
				'county_name' => 'Vastergotland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '144',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);			
			//Norrland
			//831
			//gudmund, sjalevads, arnas, anundsjo
            DB::table('counties')->insert([
				'county_name' => 'Angermanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);
			//832
			//torsaker, gavle, ockelbo
            DB::table('counties')->insert([
				'county_name' => 'Gastrikland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);				
			//833
			//ljusdal, bollnas
            DB::table('counties')->insert([
				'county_name' => 'Halsingland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '145',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//Osterland
			//834
			//kastelholm, hammarland
            DB::table('counties')->insert([
				'county_name' => 'Aland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//835
			//turku, stenberga, somero, biskopsborg
            DB::table('counties')->insert([
				'county_name' => 'Finland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//836
			//viborg, kexholm, hamina, kouvola, hollola
            DB::table('counties')->insert([
				'county_name' => 'Karelia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//837
			//raseborg, koskela, esbo, kerava, hogfors
            DB::table('counties')->insert([
				'county_name' => 'Nyland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//838
			//ouluborg, korsholm
            DB::table('counties')->insert([
				'county_name' => 'Ostrobothnia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//839
			//kokemaki, vreghdenborg
            DB::table('counties')->insert([
				'county_name' => 'Satakunta',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//840
			//olofsborg, saint michel, nyslott
            DB::table('counties')->insert([
				'county_name' => 'Savonia',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//841
			//hame, birkala
            DB::table('counties')->insert([
				'county_name' => 'Tavastland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '146',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Finnish'
            ]);
			//Smaland
			//842
			//borgholm, alby, ottenby, halltorp, kopingsvik
            DB::table('counties')->insert([
				'county_name' => 'Oland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '147',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//843
			//kalmar, vastervik, vaxjo, vimmerby, eksjo, ljungby, hulingsryd, hassleby, gamleby
            DB::table('counties')->insert([
				'county_name' => 'Smaland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '147',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);				
			//Svealand
			//844
			//hedemora, avesta
            DB::table('counties')->insert([
				'county_name' => 'Dalarna',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//845
			//orebro, riseberga, askersund, kumla, goksholm
            DB::table('counties')->insert([
				'county_name' => 'Narke',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//846
			//stockholm, strangnas, sodertalje, nykoping, torshalla, trosa, djursholm, horningsholm
            DB::table('counties')->insert([
				'county_name' => 'Sodermanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//847
			//uppsala, osthammar, riksby, stockby, solna, sollentuna, sigtuna, enkoping, alsno, penningby, orbyhus
            DB::table('counties')->insert([
				'county_name' => 'Uppland',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//848
			//arvika, gunnarskog, varnums, alvdal
            DB::table('counties')->insert([
				'county_name' => 'Varmland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);	
			//849
			//arboga, norberg, skinnsackeberg, lindesberg, vasteras
            DB::table('counties')->insert([
				'county_name' => 'Vastmanland',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '148',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Swedish'
            ]);				
			//Poland
			//Poland
			//Greater Poland
			//
			//gnesen
            DB::table('counties')->insert([
				'county_name' => 'Gnesen',
				'county_category' => '',
				'de_jure_duchy' => '149',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//kalisz
            DB::table('counties')->insert([
				'county_name' => 'Kalisz',
				'county_category' => '',
				'de_jure_duchy' => '149',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//posen
            DB::table('counties')->insert([
				'county_name' => 'Posen',
				'county_category' => '',
				'de_jure_duchy' => '149',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);				
			//Lesser Poland
			//
			//olkusz
            DB::table('counties')->insert([
				'county_name' => 'Olkusz',
				'county_category' => '',
				'de_jure_duchy' => '150',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//tarnow
            DB::table('counties')->insert([
				'county_name' => 'Tarnow',
				'county_category' => '',
				'de_jure_duchy' => '150',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);				
			//Kuyavia
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '151',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '151',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);				
			//Mazovia
			//
			//losice
            DB::table('counties')->insert([
				'county_name' => 'Losice',
				'county_category' => '',
				'de_jure_duchy' => '152',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//makow
            DB::table('counties')->insert([
				'county_name' => 'Makow',
				'county_category' => '',
				'de_jure_duchy' => '152',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//minsk
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => '',
				'de_jure_duchy' => '152',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);	
			//
			//warsaw
            DB::table('counties')->insert([
				'county_name' => 'Warsaw',
				'county_category' => '',
				'de_jure_duchy' => '152',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Polish'
            ]);				
			//Lithuania
			//Brest
			//
			//brest
            DB::table('counties')->insert([
				'county_name' => 'Brest',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//Minsk
			//
			//minsk
            DB::table('counties')->insert([
				'county_name' => 'Minsk',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);
			//Smolensk
			//
			//smolensk
            DB::table('counties')->insert([
				'county_name' => 'Smolensk',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);				
			//Tracken
			//
			//alytus
            DB::table('counties')->insert([
				'county_name' => 'Alytus',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);
			//
			//kauen
            DB::table('counties')->insert([
				'county_name' => 'Kauen',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);				
			//
			//tracken
            DB::table('counties')->insert([
				'county_name' => 'Tracken',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//Vilnius
			//
			//vilnius
            DB::table('counties')->insert([
				'county_name' => 'Vilnius',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);	
			//
			//
            DB::table('counties')->insert([
				'county_name' => '',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Lithuanian'
            ]);
			//Hungary
			//Hungary
			
			//Croatia
			
			//Byzantine
			
			//Thrace
			
			//Thessalonica
			//Athens
			
			//Achaea
			
			//Archipelago
			
			//Epirus
			
			//Trebizond
			//Paphlagonia
			
			//Armeniac
			
			//Chaldia
			
			//Crimea
			
			//Anatolia
			//Thracesia
			
			//Bucellaria
			
			//Anatolia
			
			//Cappadocia
			
			//Silicia
			
			//Opsicia
			
			//Nicaea
			
			//Lycia
			
			//Pamphylia
			
			//Palermo
			
			//Trapani
			
			//Messina
			
			//Agrigento
			
			//Catania
			
			//Siracusa
			
			//Naples
			//Naples
			
			//Capua
			
			//Amalfi
			
			//Calabria
			
			//Basilicata
			
			//Taranto
			
			//Foggia
			
			//Benevento
			
			//Salerno
			
			//Sardinia
			//Gallura
			
			//Logudoro (torres)
			
			//Arborea
			
			//Cagliari
			
			//Georgia
			//Georgia
			
			//Armenia
			//Vaspurakan
			
			//Taron
			
			//Kars
			
			//Azerbaijan
			
			//Bulgaria
			//Bulgaria
			
			//Wallachia
			//Wallachia
			
			//Moldavia
			
			//Serbia
			//Serbia
			//Rashka
			
			//Bosnia
			//Bosnia
			
			//Kievan Rus
			//Kiev
			//Kiev, Pereyaslavl
			
			//Murom
			//Murom
			
			//Ryazan
			
			//Chernigov
			
			//Halych
			//Halych
			
			//Volhynia
			
			//Turov
			
			//Vladimir
			//Vladimir
			
			//Moscow
			
			//Suzdal
			
			//Smolensk
			//Smolensk
			
			//Toropets
			
			//Mstislavl
			
			//Rzhev
			
			//Novgorod
			//Novgorod
			
			//Polotsk
			
			//Pleskov			
			
			//Cordoba
			//Andalucia
			//Algeciras
			//
			//algeciras
            DB::table('counties')->insert([
				'county_name' => 'Algeciras',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//gibraltar
            DB::table('counties')->insert([
				'county_name' => 'Gibraltar',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//Almeria
			//
			//almeria
            DB::table('counties')->insert([
				'county_name' => 'Almeria',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//baza
            DB::table('counties')->insert([
				'county_name' => 'Baza',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Arcos
			//
			//cadiz, arcos
            DB::table('counties')->insert([
				'county_name' => 'Cadiz',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//jerez
            DB::table('counties')->insert([
				'county_name' => 'Jerez',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//sanlucar
            DB::table('counties')->insert([
				'county_name' => 'Sanlucar',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//Carmona
			//
			//carmona
            DB::table('counties')->insert([
				'county_name' => 'Carmona',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//ecija
            DB::table('counties')->insert([
				'county_name' => 'Ecija',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//Cordoba
			//
			//andujar
            DB::table('counties')->insert([
				'county_name' => 'Andujar',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//carpio
            DB::table('counties')->insert([
				'county_name' => 'Carpio',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//cordoba
            DB::table('counties')->insert([
				'county_name' => 'Cordoba',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//martos
            DB::table('counties')->insert([
				'county_name' => 'Martos',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//pedroche
            DB::table('counties')->insert([
				'county_name' => 'Pedroche',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Granada
			//
			//baeza
            DB::table('counties')->insert([
				'county_name' => 'Baeza',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//carolina
            DB::table('counties')->insert([
				'county_name' => 'Carolina',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//granada
            DB::table('counties')->insert([
				'county_name' => 'Granada',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//guadix
            DB::table('counties')->insert([
				'county_name' => 'Guadix',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//jaen
            DB::table('counties')->insert([
				'county_name' => 'Jaen',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//orjiva
            DB::table('counties')->insert([
				'county_name' => 'Lecrin',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//motril
            DB::table('counties')->insert([
				'county_name' => 'Motril',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//torvizcon
            DB::table('counties')->insert([
				'county_name' => 'Torvizcon',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//ubeda
            DB::table('counties')->insert([
				'county_name' => 'Ubeda',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//Malaga
			//
			//alhama
            DB::table('counties')->insert([
				'county_name' => 'Alhama',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//antequerra
            DB::table('counties')->insert([
				'county_name' => 'Antequerra',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//loja
            DB::table('counties')->insert([
				'county_name' => 'Loja',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//malaga
            DB::table('counties')->insert([
				'county_name' => 'Malaga',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Ronda
			//
			//marbella
            DB::table('counties')->insert([
				'county_name' => 'Marbella',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//ronda
            DB::table('counties')->insert([
				'county_name' => 'Ronda',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Sevilla
			//
			//gines, gelves, olivares, pilas, tomares, san isidore
            DB::table('counties')->insert([
				'county_name' => 'Aljarafe',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//estepa
            DB::table('counties')->insert([
				'county_name' => 'Estepa',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//sevilla
            DB::table('counties')->insert([
				'county_name' => 'Sevilla',
				'county_category' => 'Ecclesiastical',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Algarves
			//Algarves
			//
			//faro, tavira, alcoutim, salir
            DB::table('counties')->insert([
				'county_name' => 'Faro',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//mertola, serpa, moura, noudar
            DB::table('counties')->insert([
				'county_name' => 'Mertola',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//silves, lagos, alcantarilha, aljezur, alvor, paderne
            DB::table('counties')->insert([
				'county_name' => 'Silves',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Badajoz
			//
			//badajoz, albuquerque, talavera, barbacena, elvas
            DB::table('counties')->insert([
				'county_name' => 'Badajoz',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//beja, ourique, vidigueira, messejana, cola, alvito, aljustrel
            DB::table('counties')->insert([
				'county_name' => 'Beja',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//evora, alandroal, arraiolos, estremoz, mourao, viana, redondo, portel
            DB::table('counties')->insert([
				'county_name' => 'Evora',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//medellin, guarena
            DB::table('counties')->insert([
				'county_name' => 'Guadiana',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//llerena, berlanga, usagre, azuaga
            DB::table('counties')->insert([
				'county_name' => 'Llerena',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//merida, zafra, valverde, mirandilla, san servan, alange, calzada, lobon
            DB::table('counties')->insert([
				'county_name' => 'Merida',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//olivenza, nogales, alconchel, higuera
            DB::table('counties')->insert([
				'county_name' => 'Olivenza',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//portalegre, alegrete, avis, monforte, marvao
            DB::table('counties')->insert([
				'county_name' => 'Portalegre',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//villanueva, castuera
            DB::table('counties')->insert([
				'county_name' => 'Serena',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//Huelva
			//
			//aracena, santa eulalia, aroche, cala, cortegana, santa olalla
            DB::table('counties')->insert([
				'county_name' => 'Aracena',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//huelva, ayamonte, cartaya
            DB::table('counties')->insert([
				'county_name' => 'Huelva',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//niebla, moguer, almonte
            DB::table('counties')->insert([
				'county_name' => 'Niebla',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);			
			//Levante
			//Alpuente
			//
			//huete, almonacid, guadalajara
            DB::table('counties')->insert([
				'county_name' => 'Alcarria',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//almarza, buitrago
            DB::table('counties')->insert([
				'county_name' => 'Almarza',
				'county_category' => '',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//
			//alcala, valverde, pezuela, san pedro
            DB::table('counties')->insert([
				'county_name' => 'Henares',
				'county_category' => '',
				'de_jure_duchy' => '118',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//
			//medinaceli, arcos, somaen
            DB::table('counties')->insert([
				'county_name' => 'Medinaceli',
				'county_category' => '',
				'de_jure_duchy' => '117',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);
			//
			//molina, ventosa, tortuera
            DB::table('counties')->insert([
				'county_name' => 'Molina',
				'county_category' => 'Feudal',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);	
			//
			//alpuente, cuenca, atienza, siguenza, bonaval
            DB::table('counties')->insert([
				'county_name' => 'Serrania',
				'county_category' => '',
				'de_jure_duchy' => '114',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Castillian'
            ]);				
			//Baleares
			//
			//ibiza
            DB::table('counties')->insert([
				'county_name' => 'Ibiza',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//palma
            DB::table('counties')->insert([
				'county_name' => 'Mallorca',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//alayor, ciudadela, mahon, mercadal
            DB::table('counties')->insert([
				'county_name' => 'Menorca',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);			
			//Denia
			//
			//albacete
            DB::table('counties')->insert([
				'county_name' => 'Albacete',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//alcaraz
            DB::table('counties')->insert([
				'county_name' => 'Alcaraz',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//
			//alcira
            DB::table('counties')->insert([
				'county_name' => 'Alcira',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//alcoy
            DB::table('counties')->insert([
				'county_name' => 'Alcoy',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//alicanta
            DB::table('counties')->insert([
				'county_name' => 'Alicante',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//almagro, villa real, san juan, valdepenas
            DB::table('counties')->insert([
				'county_name' => 'Almagro',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//chinchilla
            DB::table('counties')->insert([
				'county_name' => 'Chinchilla',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//cofrentes
            DB::table('counties')->insert([
				'county_name' => 'Cofrentes',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);				
			//
			//denia
            DB::table('counties')->insert([
				'county_name' => 'Denia',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//jativa
            DB::table('counties')->insert([
				'county_name' => 'Jativa',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//montesa
            DB::table('counties')->insert([
				'county_name' => 'Montesa',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Murcia
			//
			//cartagena
            DB::table('counties')->insert([
				'county_name' => 'Cartagena',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//cieza
            DB::table('counties')->insert([
				'county_name' => 'Cieza',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//hellin
            DB::table('counties')->insert([
				'county_name' => 'Hellin',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);
			//
			//lorca
            DB::table('counties')->insert([
				'county_name' => 'Lorca',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);			
			//
			//murcia
            DB::table('counties')->insert([
				'county_name' => 'Murcia',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//orihuella
            DB::table('counties')->insert([
				'county_name' => 'Orihuela',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//segura
            DB::table('counties')->insert([
				'county_name' => 'Segura',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Valencia
			//
			//castellon
            DB::table('counties')->insert([
				'county_name' => 'Castellon',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);		
			//
			//morella
            DB::table('counties')->insert([
				'county_name' => 'Morella',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//peniscola
            DB::table('counties')->insert([
				'county_name' => 'Peniscola',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//san clemente
            DB::table('counties')->insert([
				'county_name' => 'San Clemente',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//
			//valencia
            DB::table('counties')->insert([
				'county_name' => 'Valencia',
				'county_category' => '',
				'de_jure_duchy' => '',
				'vernacular_cycle' => '',	
				'vernacular_architecture' => 'Moorish'
            ]);	
			//Almohad
			//Marrakesh
			
			//Fez
			
			//Kairouan
			
			//Tlemcen
			
			//Ifni
			
			//Figuig
			
			//Abbasid
			//Baghdad
			
			//Syria
			
			//Najd
			
			//Antioch
			
			//Fatimid
			//Cairo

			//Jerusalem
			
			//Hejaz
			
			//Khazar
			//Khazaria
			//Aqtobe
			
			//Sarkel
			
			//Atil
			
			//Bolghar
			
			//Bilar
			
			//Alania
			//Derbent
			
			//Azov
			
			//Cumania
			//Sighnaq
			
			//Sozak
			
			//Sibir
			
			//Seljuk
			//Kwarezm

			//Isfahan
			
			//Hormuz
			
    }
}