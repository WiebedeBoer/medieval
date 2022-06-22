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
				'law_succession' => '',			//Elective Monarchy, Elective Papacy, Elective Order, Salic Primogeniture, Agnatic Seniority, Tanistry, Shura, Yassa, 
				'law_assembly' => '',			//
				'law_court' => '',				//				
				'levy_feudal' => '',			//
				'levy_ecclesiastical' => '',	//
				'levy_burgher' => '',			//
				'tax_feudal' => '',				//
				'tax_ecclesiastical' => '',		//		
				'tax_burgher' => ''				
				'souvereign' => '1',			
				'lord_paramount' => '1',					
            ]);			
			*/
			
			//holy roman empire
			//germany
			//frisia, bavaria, lotharingia, saxony, carinthia
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Germany',
				'kingdom_category' => 'Elective',
				'flag' => 'holy_roman_empire',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective Monarchy',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//lombardy
			//verona, genoa, venice, modena, pisa
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Lombardy',
				'kingdom_category' => 'Elective',
				'flag' => 'lombardy',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective Monarchy',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//bohemia
			//bohemia, moravia
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Bohemia',
				'kingdom_category' => 'Feudal',
				'flag' => 'bohemia',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//burgundy
			//burgundy
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Burgundy',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '1',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//papal states (romagna)
			//rome, spoleto, ancona, ferrara
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Papal States',
				'kingdom_category' => 'Papacy',
				'flag' => '',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective Papacy',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//terra mariana
			//prussia, livonia, estonia
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Terra Mariana',
				'kingdom_category' => 'Confederate',
				'flag' => 'teutonic_order',
				'de_jure_empire' => '1',			
				'law_succession' => 'Elective Order',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//france
			//france
			//aquitaine, casgony, brittany, normandy
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of France',
				'kingdom_category' => 'Feudal',
				'flag' => 'france',
				'de_jure_empire' => '2',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//ireland
			//ireland 
			//connacht, leinster, meath, munster, ulster
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'High Kingdom of Ireland',
				'kingdom_category' => 'Tanistry',
				'flag' => 'leinster',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//britain	
			//england
			//essex, wessex, sussex, kent, mercia, east anglia, northumbria
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of England',
				'kingdom_category' => 'Feudal',
				'flag' => 'england',
				'de_jure_empire' => '3',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//wales
			//dyfed, gwent, gwynedd, powys, cornwall
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Principality of Wales',
				'kingdom_category' => 'Tanistry',
				'flag' => '',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);			
			//scotland			
			//bernicia, strathclyde, galloway, fortriu, alba
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Scotland',
				'kingdom_category' => 'Tanistry',
				'flag' => '',
				'de_jure_empire' => '3',			
				'law_succession' => 'Tanistry',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//aragon
			//aragon
			//aragon, catalonia, barcelona
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Aragon',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//navarre
			//navarre
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Navarre',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '4',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//castile
			//castile
			//
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Castile',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//galicia
			//galicia
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Galicia',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//leon
			//leon, asturias
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Leon',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//portugal
			//porto, beira
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Portugal',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//denmark		
			//denmark
			//jutland, sjaeland, scania 
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Denmark',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//norway
			// northern isles, southern isles, hordaland, rogaland, agder, vestfold, oppland
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Norway',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//sweden
			//sverike, uppland, smaland, gotland, halsingland
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Sweden',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);
			//poland
			//poland
			//greater poland, lesser poland, mazovia, silesia, kuyavia, pomerania, pomerelia, mecklenburg
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Poland',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			//lithuania
			//
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Grand Duchy of Lithuania',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//hungary
			//hungary
			//
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Hungary',
				'kingdom_category' => 'Feudal',
				'flag' => 'hungary',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	
			//croatia
			//
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Croatia',
				'kingdom_category' => 'Feudal',
				'flag' => '',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);	

			//hungary
			//andalucia
			//algarves, cordoba, badajoz, valencia
			//
            DB::table('kingdoms')->insert([
				'kingdom_name' => 'Kingdom of Andalucia',
				'kingdom_category' => 'Feudal',
				'flag' => 'hungary',
				'de_jure_empire' => '',			
				'law_succession' => 'Salic Primogeniture',
				'law_assembly' => '',
				'law_court' => '',				
				'levy_feudal' => '',
				'levy_ecclesiastical' => '',
				'levy_burgher' => '',
				'tax_feudal' => '',				
				'tax_ecclesiastical' => '',				
				'tax_burgher' => 'normal',
				'souvereign' => '1',
				'lord_paramount' => '1',				
            ]);				
			
    }
}