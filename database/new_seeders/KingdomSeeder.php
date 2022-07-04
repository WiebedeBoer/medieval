<?php

use Illuminate\Database\Seeder;

class KingdomSeeder extends Seeder
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
            DB::table('kingdoms')->insert([
				'kingdom_name' => '',			
				'kingdom_category' => '',		//Elective, Tanistry, Feudal, Horde, Papacy, Confederate
				'flag' => '',					
				'de_jure_empire' => '',			
				'law_succession' => '',			//Elective_Monarchy, Elective_Papacy, Elective_Order, Salic_Primogeniture, Agnatic_Seniority, Tanistry, Shura, Yassa, 
				'law_assembly' => '',			//absolute, limited, medium, high; default=medium
				'law_court' => '',				//itinerant, palatial, divan, sarai				
				'levy_feudal' => '',			//minimal, normal, large, maximal; default=large
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal; default=normal
				'levy_burgher' => '',			//minimal, normal, large, maximal; default=normal
				'tax_feudal' => '',				//minimal, normal, large, maximal; default=minimal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal; default=normal				
				'tax_burgher' => ''				//minimal, normal, large, maximal; default=normal			
				'souvereign' => '1',			(empire); default=1
				'lord_paramount' => '1'			(kingdom); default=1					
            ]);			
			*/
			
			//Holy Roman Empire
			//Germany
			//Austria, Bavaria, Brabant, Carinthia, Carniola, Franconia, Frisia, Guelders, Julich, Limburg, Lorraine, Luneburg, Luxembourg, Saxony, Styria, Swabia, Bremen, Cologne, Magdeburg, Mainz, Salzburg, Trier
			//1
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Germany',
				'kingdom_category' => 'Elective',
				'flag' => 'holy_roman_empire',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//Lombardy
			//Milan, Piedmont, Tuscany, Verona, Aquileia, Florence, Genoa, Noli, Oneglia, Lucca, Pisa, Venice
			//2
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Lombardy',
				'kingdom_category' => 'Elective',
				'flag' => 'lombardy',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//Bohemia
			//Bohemia, Lusatia, Moravia, Lower Silesia, Upper Silesia
			//3
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bohemia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bohemia',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//Burgundy
			//Burgundy, Cisjurania, Transjurania, Orange, Provence, Savoy
			//4 
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Burgundy',
				'kingdom_category' => 'Feudal',
				'flag' => 'burgundy',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//Papal States 
			//Rome, Romagna, Spoleto, Urbino
			//5
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Papal States',
				'kingdom_category' => 'Papacy',
				'flag' => 'papal_states',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Papacy',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'				
            ]);
			//Teutonic Order State
			//Livonia, Estonia, Prussia, Pomerelia, Pomerania, Brandenburg, Mecklenburg
			//6
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Teutonic Order State',
				'kingdom_category' => 'Confederate',
				'flag' => 'teutonic_order',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Order',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);			
			//France
			//France
			//Anjou, Aquitaine, Auvergne, Berry, Bourbonnais, Casgony, Champagne, Francia, Normandy, Orleanais, Picardy, Poitou, Toulouse
			//7
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of France',
				'kingdom_category' => 'Feudal',
				'flag' => 'france',
				'de_jure_empire' => '2',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//Brittany
			//Brittany, Domnonee, Retz
			//8
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Brittany',
				'kingdom_category' => 'Feudal',
				'flag' => 'brittany',
				'de_jure_empire' => '2',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);			
			//ireland
			//ireland 
			//connacht, leinster, meath, munster, ulster
			//9
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'High Kingdom of Ireland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'leinster',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//britain	
			//england
			//essex, wessex, sussex, kent, mercia, east anglia, northumbria
			//10
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of England',
				'kingdom_category' => 'Feudal',
				'flag' => 'england',
				'de_jure_empire' => '3',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);
			//wales
			//dyfed, gwent, gwynedd, powys, cornwall
			//11
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wales',
				'kingdom_category' => 'Tanistry',
				'flag' => 'wales',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);			
			//scotland			
			//bernicia, strathclyde, galloway, fortriu, alba
			//12
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Scotland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'scotland',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//aragon
			//aragon
			//aragon, catalonia, barcelona
			//13
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Aragon',
				'kingdom_category' => 'Feudal',
				'flag' => 'aragon',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);				
			//navarre
			//navarre
			//14
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Navarre',
				'kingdom_category' => 'Feudal',
				'flag' => 'navarre',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//castile
			//castile
			//toledo
			//15
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Castile',
				'kingdom_category' => 'Feudal',
				'flag' => 'castile',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//galicia
			//galicia
			//16
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Galicia',
				'kingdom_category' => 'Feudal',
				'flag' => 'galicia',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//leon
			//leon, asturias
			//17
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Leon',
				'kingdom_category' => 'Feudal',
				'flag' => 'leon',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//portugal
			//porto, beira
			//18
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Portugal',
				'kingdom_category' => 'Feudal',
				'flag' => 'portugal',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);				
			//denmark		
			//denmark
			//jutland, sjaeland, scania 
			//19
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Denmark',
				'kingdom_category' => 'Feudal',
				'flag' => 'denmark',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//norway
			//northern isles, southern isles, hordaland, rogaland, agder, vestfold, oppland
			//20
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Norway',
				'kingdom_category' => 'Feudal',
				'flag' => 'norway',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//sweden
			//sverike, uppland, smaland, gotland, halsingland
			//21
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sweden',
				'kingdom_category' => 'Feudal',
				'flag' => 'sweden',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//poland
			//poland
			//greater poland, lesser poland, mazovia, silesia, kuyavia, pomerania, pomerelia, mecklenburg
			//22
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Poland',
				'kingdom_category' => 'Feudal',
				'flag' => 'poland',
				'de_jure_empire' => '7',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);				
			//lithuania
			//
			//23
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Duchy of Lithuania',
				'kingdom_category' => 'Feudal',
				'flag' => 'lithuania',
				'de_jure_empire' => '7',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//hungary
			//hungary
			//
			//24
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Hungary',
				'kingdom_category' => 'Feudal',
				'flag' => 'hungary',
				'de_jure_empire' => '8',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//croatia
			//
			//25
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Croatia',
				'kingdom_category' => 'Feudal',
				'flag' => 'croatia',
				'de_jure_empire' => '8',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'					
            ]);				
			//byzantine
			//thrace
			//
			//26
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thrace',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'				
            ]);	
			//thessalonica
			//athens, achaea, archipelago, epirus
			//27
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thessalonica',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);				
			//trebizond
			//paphlagonia, armeniac, chaldia, crimea
			//28
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Trebizond',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//anatolia
			//thracesia, bucellaria, anatolia, cappadocia, silicia, opsicia, nicaea, lycia, pamphylia
			//29
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Anatolia',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//sicily
			//palermo, trapani, messina, agrigento, catania, siracusa
			//30
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sicily',
				'kingdom_category' => 'Feudal',
				'flag' => 'sicily',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',						
            ]);	
			//naples
			//capua, amalfi, naples, calabria, basilicata, taranto, foggia, benevento, salerno
			//31
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Naples',
				'kingdom_category' => 'Feudal',
				'flag' => 'naples',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'				
            ]);	
			//sardinia
			//gallura, logudoro (torres), arborea, cagliari
			//32
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sardinia',
				'kingdom_category' => 'Feudal',
				'flag' => 'sardinia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//georgia
			//georgia
			//33
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Georgia',
				'kingdom_category' => 'Feudal',
				'flag' => 'georgia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//armenia
			//vaspurakan, taron, kars, azerbaijan
			//34
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Armenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'armenia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//bulgaria
			//bulgaria
			//
			//35
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bulgaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'bulgaria',
				'de_jure_empire' => '10',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);
			//wallachia
			//wallachia, moldavia
			//36
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wallachia',
				'kingdom_category' => 'Feudal',
				'flag' => 'wallachia',
				'de_jure_empire' => '10',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//serbia
			//serbia
			//rashka
			//37
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Serbia',
				'kingdom_category' => 'Feudal',
				'flag' => 'serbia',
				'de_jure_empire' => '11',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//bosnia
			//bosnia
			//38
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Bosnia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bosnia',
				'de_jure_empire' => '11',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//kievan rus
			//kiev
			//kiev, pereyaslavl
			//39
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Kiev',
				'kingdom_category' => 'Feudal',
				'flag' => 'kiev',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'			
            ]);		
			//murom
			//murom, ryazan, chernigov
			//40
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Murom',
				'kingdom_category' => 'Feudal',
				'flag' => 'chernigov',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//halych
			//halych, volhynia, turov
			//41
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Ruthenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'volhynia',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'			
            ]);	
			//vladimir
			//moscow, vladimir, suzdal
			//42
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Vladimir',
				'kingdom_category' => 'Feudal',
				'flag' => 'vladimir',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);		
			//smolensk
			//smolensk, toropets, mstislavl, rzhev
			//43
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Smolensk',
				'kingdom_category' => 'Feudal',
				'flag' => 'smolensk',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant'				
            ]);	
			//novgorod
			//novgorod, polotsk, pleskov
			//44
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Novgorod',
				'kingdom_category' => 'Feudal',
				'flag' => 'novgorod',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'palatial'				
            ]);				
			//cordoba
			//andalucia
			//algarves, cordoba, badajoz, valencia, sevilla, carmona, granada, almeria, murcia, denia, albarracin, malaga, algeciras
			//45
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Andalucia',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '13',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//almohad
			//
			//
			//46
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Marrakesh',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'			
            ]);	
			//
			//
			//47
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Fez',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//48
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kairouan',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//49
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Tlemcen',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'			
            ]);	
			//
			//
			//50
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Ifni',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//51
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Figuig',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);				
			//abbasid
			//
			//
			//52
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Baghdad',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//53
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Syria',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);				
			//
			//
			//54
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Najd',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);				
			//
			//
			//55
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Antioch',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);				
			//fatimid
			//
			//
			//56
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cairo',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//57
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Jerusalem',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan'				
            ]);	
			//
			//
			//58
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hejaz',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large'				
            ]);				
			//khazar
			//khazaria
			//aqtobe, sarkel, atil, bolghar, bilar
			//59
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Khazaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//alania
			//derbent, azov
			//60
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Alania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//cumania
			//sighnaq, sozak, sibir
			//61
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cumania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//seljuk
			//kwarezm
			//
			//62
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kwarezm',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//isfahan
			//
			//63
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Isfahan',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);	
			//hormuz
			//
			//64
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hormuz',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai'				
            ]);				
			
    }
}