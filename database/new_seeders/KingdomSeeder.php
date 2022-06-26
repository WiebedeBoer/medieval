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
				'law_assembly' => '',			//absolute, limited, medium, high
				'law_court' => '',				//itinerant, palatial				
				'levy_feudal' => '',			//minimal, normal, large, maximal
				'levy_ecclesiastical' => '',	//minimal, normal, large, maximal
				'levy_burgher' => '',			//minimal, normal, large, maximal
				'tax_feudal' => '',				//minimal, normal, large, maximal		
				'tax_ecclesiastical' => '',		//minimal, normal, large, maximal				
				'tax_burgher' => ''				//minimal, normal, large, maximal			
				'souvereign' => '1',			(empire)
				'lord_paramount' => '1'			(kingdom)					
            ]);			
			*/
			
			//holy roman empire
			//germany
			//Austria, Bavaria, Brabant, Carinthia, Carniola, Franconia, Frisia, Guelders, Julich, Limburg, Lorraine, Luneburg, Luxembourg, Saxony, Styria, Swabia, Bremen, Cologne, Magdeburg, Mainz, Salzburg, Trier
			//1
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Germany',
				'kingdom_category' => 'Elective',
				'flag' => 'holy_roman_empire',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//lombardy
			//verona, genoa, venice, modena, pisa, milan, tuscany
			//2
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Lombardy',
				'kingdom_category' => 'Elective',
				'flag' => 'lombardy',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Monarchy',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//bohemia
			//bohemia, moravia
			//3
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bohemia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bohemia',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//burgundy
			//burgundy
			//4 //burgundy, savoy, geneva, orange, provence, dauphine
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Burgundy',
				'kingdom_category' => 'Feudal',
				'flag' => 'burgundy',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//papal states (romagna)
			//rome, spoleto, ancona, ferrara
			//5
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Papal States',
				'kingdom_category' => 'Papacy',
				'flag' => 'papal_states',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Papacy',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//terra mariana
			//prussia, livonia, estonia, Mecklenburg, pomerelia, pomerania, brandenburg
			//6
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Teutonic Order State',
				'kingdom_category' => 'Confederate',
				'flag' => 'teutonic_order',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective_Order',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//france
			//france
			//aquitaine, casgony, brittany, normandy
			//7
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of France',
				'kingdom_category' => 'Feudal',
				'flag' => 'france',
				'de_jure_empire' => '2',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//ireland
			//ireland 
			//connacht, leinster, meath, munster, ulster
			//8
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'High Kingdom of Ireland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'leinster',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//britain	
			//england
			//essex, wessex, sussex, kent, mercia, east anglia, northumbria
			//9
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of England',
				'kingdom_category' => 'Feudal',
				'flag' => 'england',
				'de_jure_empire' => '3',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//wales
			//dyfed, gwent, gwynedd, powys, cornwall
			//10
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wales',
				'kingdom_category' => 'Tanistry',
				'flag' => 'wales',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//scotland			
			//bernicia, strathclyde, galloway, fortriu, alba
			//11
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Scotland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'scotland',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//aragon
			//aragon
			//aragon, catalonia, barcelona
			//12
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Aragon',
				'kingdom_category' => 'Feudal',
				'flag' => 'aragon',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//navarre
			//navarre
			//13
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Navarre',
				'kingdom_category' => 'Feudal',
				'flag' => 'navarre',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//castile
			//castile
			//toledo
			//14
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Castile',
				'kingdom_category' => 'Feudal',
				'flag' => 'castile',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//galicia
			//galicia
			//15
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Galicia',
				'kingdom_category' => 'Feudal',
				'flag' => 'galicia',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//leon
			//leon, asturias
			//16
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Leon',
				'kingdom_category' => 'Feudal',
				'flag' => 'leon',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//portugal
			//porto, beira
			//17
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Portugal',
				'kingdom_category' => 'Feudal',
				'flag' => 'portugal',
				'de_jure_empire' => '5',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//denmark		
			//denmark
			//jutland, sjaeland, scania 
			//18
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Denmark',
				'kingdom_category' => 'Feudal',
				'flag' => 'denmark',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//norway
			//northern isles, southern isles, hordaland, rogaland, agder, vestfold, oppland
			//19
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Norway',
				'kingdom_category' => 'Feudal',
				'flag' => 'norway',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//sweden
			//sverike, uppland, smaland, gotland, halsingland
			//20
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sweden',
				'kingdom_category' => 'Feudal',
				'flag' => 'sweden',
				'de_jure_empire' => '6',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//poland
			//poland
			//greater poland, lesser poland, mazovia, silesia, kuyavia, pomerania, pomerelia, mecklenburg
			//21
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Poland',
				'kingdom_category' => 'Feudal',
				'flag' => 'poland',
				'de_jure_empire' => '7',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//lithuania
			//
			//22
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Duchy of Lithuania',
				'kingdom_category' => 'Feudal',
				'flag' => 'lithuania',
				'de_jure_empire' => '7',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//hungary
			//hungary
			//
			//23
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Hungary',
				'kingdom_category' => 'Feudal',
				'flag' => 'hungary',
				'de_jure_empire' => '8',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//croatia
			//
			//24
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Croatia',
				'kingdom_category' => 'Feudal',
				'flag' => 'croatia',
				'de_jure_empire' => '8',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//byzantine
			//thrace
			//
			//25
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thrace',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//thessalonica
			//athens, achaea, archipelago, epirus
			//26
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Thessalonica',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//trebizond
			//paphlagonia, armeniac, chaldia, crimea
			//27
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Trebizond',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//anatolia
			//thracesia, bucellaria, anatolia, cappadocia, silicia, opsicia, nicaea, lycia, pamphylia
			//28
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Anatolia',
				'kingdom_category' => 'Feudal',
				'flag' => 'byzantine',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//sicily
			//palermo, trapani, messina, agrigento, catania, siracusa
			//29
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sicily',
				'kingdom_category' => 'Feudal',
				'flag' => 'sicily',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//naples
			//capua, amalfi, naples, calabria, basilicata, taranto, foggia, benevento, salerno
			//30
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Naples',
				'kingdom_category' => 'Feudal',
				'flag' => 'naples',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//sardinia
			//gallura, logudoro (torres), arborea, cagliari
			//31
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sardinia',
				'kingdom_category' => 'Feudal',
				'flag' => 'sardinia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//georgia
			//georgia
			//32
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Georgia',
				'kingdom_category' => 'Feudal',
				'flag' => 'georgia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//armenia
			//vaspurakan, taron, kars, azerbaijan
			//33
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Armenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'armenia',
				'de_jure_empire' => '9',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//bulgaria
			//bulgaria
			//
			//34
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Bulgaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'bulgaria',
				'de_jure_empire' => '10',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//wallachia
			//wallachia, moldavia
			//35
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wallachia',
				'kingdom_category' => 'Feudal',
				'flag' => 'wallachia',
				'de_jure_empire' => '10',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//serbia
			//serbia
			//rashka
			//36
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Serbia',
				'kingdom_category' => 'Feudal',
				'flag' => 'serbia',
				'de_jure_empire' => '11',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//bosnia
			//bosnia
			//37
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Bosnia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bosnia',
				'de_jure_empire' => '11',			
				'law_succession' => 'Salic_Primogeniture',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//kievan rus
			//kiev
			//kiev, pereyaslavl
			//38
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Kiev',
				'kingdom_category' => 'Feudal',
				'flag' => 'kiev',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);		
			//murom
			//murom, ryazan, chernigov
			//39
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Murom',
				'kingdom_category' => 'Feudal',
				'flag' => 'chernigov',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//halych
			//halych, volhynia, turov
			//40
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Ruthenia',
				'kingdom_category' => 'Feudal',
				'flag' => 'volhynia',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//vladimir
			//moscow, vladimir, suzdal
			//41
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Vladimir',
				'kingdom_category' => 'Feudal',
				'flag' => 'vladimir',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);		
			//smolensk
			//smolensk, toropets, mstislavl, rzhev
			//42
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Principality of Smolensk',
				'kingdom_category' => 'Feudal',
				'flag' => 'smolensk',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'itinerant',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//novgorod
			//novgorod, polotsk, pleskov
			//43
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Novgorod',
				'kingdom_category' => 'Feudal',
				'flag' => 'novgorod',
				'de_jure_empire' => '12',			
				'law_succession' => 'Agnatic_Seniority',
				'law_assembly' => 'medium',
				'law_court' => 'palatial',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//cordoba
			//andalucia
			//algarves, cordoba, badajoz, valencia, sevilla, carmona, granada, almeria, murcia, denia, albarracin, malaga, algeciras
			//44
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Andalucia',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '13',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//almohad
			//
			//
			//45
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Marrakesh',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//46
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Fez',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//47
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kairouan',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//48
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Tlemcen',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//49
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Ifni',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//50
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Figuig',
				'kingdom_category' => 'Feudal',
				'flag' => 'almohad',
				'de_jure_empire' => '14',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//abbasid
			//
			//
			//51
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Baghdad',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//52
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Syria',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//
			//
			//53
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Najd',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//
			//
			//54
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Antioch',
				'kingdom_category' => 'Feudal',
				'flag' => 'abbasid',
				'de_jure_empire' => '15',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//fatimid
			//
			//
			//55
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cairo',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//56
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Jerusalem',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//
			//
			//57
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hejaz',
				'kingdom_category' => 'Feudal',
				'flag' => 'fatimid',
				'de_jure_empire' => '16',			
				'law_succession' => 'Shura',
				'law_assembly' => 'medium',
				'law_court' => 'divan',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//khazar
			//khazaria
			//aqtobe, sarkel, atil, bolghar, bilar
			//58
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Khazaria',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//alania
			//derbent, azov
			//59
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Alania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//cumania
			//sighnaq, sozak, sibir
			//60
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Cumania',
				'kingdom_category' => 'Feudal',
				'flag' => 'khazar',
				'de_jure_empire' => '17',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//seljuk
			//kwarezm
			//
			//61
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Kwarezm',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//isfahan
			//
			//62
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Isfahan',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//hormuz
			//
			//63
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Hormuz',
				'kingdom_category' => 'Feudal',
				'flag' => 'seljuk',
				'de_jure_empire' => '18',			
				'law_succession' => 'Yassa',
				'law_assembly' => 'medium',
				'law_court' => 'sarai',				
				'levy_feudal' => 'large',
				'levy_ecclesiastical' => 'normal',
				'levy_burgher' => 'normal',
				'tax_feudal' => 'minimal',				
				'tax_ecclesiastical' => 'normal',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			
    }
}